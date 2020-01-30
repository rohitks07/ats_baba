<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use DB;
//namespace App\Http\Controllers;
class feeCollectionController extends Controller
{

	var $data = array();
	var $panelInit;
	var $layout = 'dashboard';

	/* <!-- Validation and Session Controller Function --> */
	public function __construct()
	{
		if (app('request')->header('Authorization') != "") {
			$this->middleware('jwt.auth');
		} else {
			$this->middleware('authApplication');
		}
		$this->panelInit = new \DashboardInit();
		$this->data['panelInit'] = $this->panelInit;
		$this->data['breadcrumb']['Settings'] = \URL::to('/dashboard/languages');
		$this->data['users'] = $this->panelInit->getAuthUser();
		if (!isset($this->data['users']->id)) {
			return \Redirect::to('/');
		}

		if (!$this->panelInit->hasThePerm('accounting')) {
			exit;
		}
	}

	/* <!-- Permission Deny Controller Function --> */
	public function permission_denied()
	{
		return $this->panelInit->apiOutput(false, "Restricted", "You don't have permissions to access this module.");
	}

	/* <!-- When Creating Single Stdent Fee it is used to fetch last fee details of thet student --> */
	function getLastInvoicesDetails($studentId)
	{
		$toReturn = array();
		$toReturn['getLastInvoicesDeatails'] = \DB::table('fee_collection')
			->select(
				'id as invoiceId',
				'created_date as paymentDate',
				'due_date as dueDate',
				'fee_invoice_date as fee_invoice_date',
				'fee_invoice_end_date as fee_invoice_end_date',
				'paymentAmount as paymentAmount',
				'paidAmount as paidAmount',
				'installment_count_flag as pendingCheques'
			)
			->where('school_id', $this->panelInit->authUser['school_id'])
			->where('fee_group_id', '!=', 0)
			->where('paymentStudent', $studentId)
			->groupBy('id')
			->orderBy('id', 'DESC')
			->get();

		foreach ($toReturn['getLastInvoicesDeatails'] as $key => $value) {
			$value->paymentDate = (strtotime($value->paymentDate) > 0) ? date('Y-m-d', strtotime($value->paymentDate)) : 'N/A';
			$value->invoiceId = $value->invoiceId;
			$value->fee_invoice_date = (strtotime($value->fee_invoice_date) > 0) ? date('d-m-Y', strtotime($value->fee_invoice_date)) : 'N/A';
			$value->fee_invoice_end_date = (strtotime($value->fee_invoice_end_date) > 0) ? date('d-m-Y', strtotime($value->fee_invoice_end_date)) : 'N/A';
			$value->dueDate = (strtotime($value->dueDate) > 0) ? date('d-m-Y', strtotime($value->dueDate)) : 'N/A';
			$value->paymentAmount = $value->paymentAmount;
			$value->paidAmount = $value->paidAmount;
		}

		return $toReturn;
	}

	/* <!-- Invoice Listing Controller Function --> */
	public function listAll($page = 1)
	{
		# code...
		$toReturn = array();
		$invoiceData = \DB::table('fee_collection')
			->leftJoin('users', 'users.id', '=', 'fee_collection.paymentStudent')
			->leftJoin('fee_payment_collection_status', 'fee_payment_collection_status.fee_collection_id', '=', 'fee_collection.id')
			->where('fee_collection.school_id', $this->panelInit->authUser['school_id'])
			->where('fee_collection.fee_group_id', '!=', 0)
			->groupBy('fee_collection.id')
			->select(
				'fee_collection.id as invoiceId',
				'fee_collection.created_date as paymentDate',
				'users.fullName as fullName',
				'fee_collection.paymentStudent as studentId',
				'fee_collection.due_date as due_date',
				'fee_collection.paymentStatus as paymentStatus',
				'fee_collection.fee_invoice_date as fee_invoice_date',
				'fee_collection.fee_invoice_end_date as fee_invoice_end_date',
				'fee_collection.created_date as created_date',
				'fee_collection.paymentAmount as paymentAmount',
				'fee_collection.paidAmount as paidAmount'
			);

		if ($this->data['users']->role == "student") {
			$invoiceData = $invoiceData->where('fee_collection.paymentStudent', $this->data['users']->id);
		} elseif ($this->data['users']->role == "parent") {
			$studentId = array();
			$parentOf = json_decode($this->data['users']->parentOf, true);
			if (is_array($parentOf)) {
				foreach ($parentOf as $key => $value) {
					$studentId[] = $value['id'];
				}
			}
			$invoiceData = $invoiceData->whereIn('fee_collection.paymentStudent', $studentId);
		}
		$classId =  \Input::get('classId');
		$searchStudent = \Input::get('searchStudent');
		$fromDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', \Input::get('fromDate'))));
		$toDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', \Input::get('toDate') . ' 23:59:59')));
		$paymentStatus =  \Input::get('paymentStatus');
		if ($searchStudent) {
			$invoiceData->where(function ($q) use ($searchStudent) {
				$q->where('users.fullName', 'like', "%$searchStudent%");
			});
		}
		if ($classId) {
			$invoiceData->where('users.studentClass', $classId);
		}
		if ($fromDate && $toDate) {
			$invoiceData->whereBetween('fee_collection.created_date', array($fromDate, $toDate));
		}
		if ($paymentStatus != null && $paymentStatus != 3) {
			$invoiceData->where('fee_collection.paymentStatus', intval($paymentStatus));
		}

		$toReturn['totalItems'] = count($invoiceData->get());
		$toReturn['fee_invoices'] = $invoiceData->take('20')->orderBy('fee_collection.id', 'DESC')->skip(20 * ($page - 1))->get();
		$toReturn['total_payment_amount'] = \DB::table('fee_collection')->where('school_id', $this->panelInit->authUser['school_id'])->where('fee_group_id', '!=', 0)->sum('paymentAmount');
		$toReturn['total_paid_amount'] = \DB::table('fee_collection')->where('school_id', $this->panelInit->authUser['school_id'])->where('fee_group_id', '!=', 0)->sum('paidAmount');
		$toReturn['balance_amount'] = $toReturn['total_payment_amount'] - $toReturn['total_paid_amount'];
		$toReturn['currency_symbol'] = 'INR';

		foreach ($toReturn['fee_invoices'] as $key => $value) {
			$value->sl = ((($page - 1) * 20) + $key + 1);
			$value->paymentDate = date('d-m-Y', strtotime(str_replace('/', '-', $value->paymentDate)));
			$value->due_date = date('d-m-Y', strtotime(str_replace('/', '-', $value->due_date)));
			$value->pendingCheques = \DB::table('fee_payment_collection_status')->where('fee_collection_id', $value->invoiceId)->where('status', 0)->count();

			$start_month = date('F', strtotime($value->fee_invoice_date));
			$end_month = date('F', strtotime($value->fee_invoice_end_date));
			if ($start_month == $end_month) {
				$value->fee_duration = date('M-Y', strtotime($value->fee_invoice_date));
			} else {
				$value->fee_duration = date('M Y', strtotime($value->fee_invoice_date)) . " - " . date('M Y', strtotime($value->fee_invoice_end_date));
			}


			$studentIdForParentsOf = $value->studentId;
			$value->father_name = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('fullName');
			if (empty($value->father_name)) {
				$value->father_name = 'N/A';
			}

			$allinstallments = \fee_installments::where('fee_invoice_id', $value->invoiceId)->get();
			$value->intallments = "";

			if (count($allinstallments) > 0) {
				$value->countInstallments = count($allinstallments);
				$value->paymentInstallmentStatus = 4;

				$total_install_paid_amount = 0;
				$total_installment_fine_amount = 0;
				$total_installment_discount_amount = 0;
				foreach ($allinstallments as $key_cheque => $value_cheque) {
					$installment_status = $value_cheque->paid_status;

					$value_cheque->intallmentId = $value_cheque->id;
					$value_cheque->installment_amount = $value_cheque->installment_amount;

					$value_cheque->paid_status = ($value_cheque->paid_status == 1) ? 'Paid' : 'Due';
					$value_cheque->due_date = ($value_cheque->paid_status == 'Due') ? date('d-m-Y', strtotime($value_cheque->due_date)) : "";

					$value->intallments .= $key_cheque + 1 . ". ";

					$value->intallments .= $value_cheque->installment_amount . "  ";

					if ($installment_status == 1) {
						$value->intallments .= "<span style='color:green;'> Paid" . $value_cheque->installment_amount;
					} else if ($installment_status == 0) {
						$value->intallments .= "<span style='color:red;'>" . $value_cheque->paid_status . " On " . $value_cheque->due_date;
					} else if ($installment_status == 2) {
						$get_all_fee_installment_payements = \fee_payment_collection_status::where('fee_installment_id', $value_cheque->id)->where('status', 1)->get();
						if (!empty($get_all_fee_installment_payements)) {
							foreach ($get_all_fee_installment_payements as $key5 => $value5) {
								$total_install_paid_amount += $get_all_fee_installment_payements[$key5]->collectionAmount;
								$total_installment_fine_amount += $get_all_fee_installment_payements[$key5]->fine_amount;
								$total_installment_discount_amount += $get_all_fee_installment_payements[$key5]->discount_amount;
							}
						}
						$Bal_amount = $value_cheque->installment_amount - $total_install_paid_amount + $total_installment_fine_amount - $total_installment_discount_amount;

						$value->intallments .= "<span style='color:#fd9b15;'> Partial/ Paid: " . $total_install_paid_amount . " /Bal: " . $Bal_amount;
						if ($total_installment_fine_amount <> 0) {
							$value->intallments .= " Fine: " . $total_installment_fine_amount;
						}
						if ($total_installment_discount_amount <> 0) {
							$value->intallments .= " Discount: " . $total_installment_discount_amount;
						}
					} else {
						$value->intallments .= "<span style='color:red;'>" . $value_cheque->paid_status;
					}
					$value->intallments .= "<br></span>";
				}
			}
		}

		$toReturn['classes'] = \classes::where('school_id', $this->panelInit->authUser['school_id'])->select('className', 'id')->get()->toArray();


		// echo "<pre>";
		// print_r($toReturn);
		// exit;
		return $toReturn;
	}


	/* <!-- Invoice advance filtered Listing Controller Function --> */
	public function feeReciptListAdv($page)
	{
		$school_id = $this->panelInit->authUser['school_id'];
		$toReturn = array();
		$classId =  \Input::get('classId');
		$searchStudent = \Input::get('searchStudent');
		$fromDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', \Input::get('fromDate'))));
		$toDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', \Input::get('toDate') . ' 23:59:59')));
		$paymentStatus =  \Input::get('paymentStatus');


		$query = DB::table('fee_collection')
			->select('fee_collection.id as invoiceId', 'fee_collection.created_date as paymentDate', 'users.fullName as fullName', 'fee_collection.paymentStatus as paymentStatus', 'users.id as studentId', 'fee_collection.due_date as due_date', 'fee_collection.paymentStatus as paymentStatus', 'fee_collection.fee_invoice_date as fee_invoice_date', 'fee_collection.fee_invoice_end_date as fee_invoice_end_date', 'fee_collection.created_date as created_date', 'fee_collection.paymentAmount as paymentAmount', 'fee_collection.paidAmount as paidAmount')
			->leftJoin('users', 'users.id', '=', 'fee_collection.paymentStudent')
			->leftJoin('fee_collection_particulars', 'fee_collection_particulars.fee_collection_id', '=', 'fee_collection.id')
			->leftJoin('fee_payment_collection_status', 'fee_payment_collection_status.fee_collection_id', '=', 'fee_collection.id')
			->where('fee_collection.school_id', $school_id)
			->where('fee_collection.fee_group_id', '!=', 0)
			->orderBy('fee_collection.created_date', 'DESC')
			->distinct('fee_collection.id');

		if ($searchStudent) {
			$query->where(function ($q) use ($searchStudent) {
				$q->where('users.fullName', 'like', "%$searchStudent%");
			});
		}
		if ($classId) {
			$query->where('users.studentClass', $classId);
		}
		if ($fromDate && $toDate) {
			$query->whereBetween('fee_collection.created_date', array($fromDate, $toDate));
		}
		if ($paymentStatus != null && $paymentStatus != 3) {
			$query->where('fee_collection.paymentStatus', intval($paymentStatus));
		}


		$toReturn['totalItems'] = count($query->get());
		$toReturn['fee_invoices'] = $query->take('25')->skip(25 * ($page - 1))->get();



		$toReturn['totalPages'] = $totalPages = ceil($counter = $toReturn['totalItems'] / 25);
		$indexing = 0;
		for ($i = max($page - 3, 1); $i <= max(1, min($totalPages, $page + 3)); $i++) {
			$toReturn['pages'][$indexing] = $i;
			$indexing++;
		}

		// return $toReturn;
		$toReturn['total_paid_amount'] = 0;
		$toReturn['total_payment_amount'] = 0;
		foreach ($toReturn['fee_invoices'] as $key => $value) {
			$toReturn['fee_invoices'][$key]->pendingCheques = 0;
			$toReturn['fee_invoices'][$key]->paymentDate = (strtotime($toReturn['fee_invoices'][$key]->paymentDate) > 0) ? date('d-m-Y', strtotime($toReturn['fee_invoices'][$key]->paymentDate)) : 'N/A';
			$toReturn['fee_invoices'][$key]->invoiceId = $toReturn['fee_invoices'][$key]->invoiceId;

			$start_month = date('F', strtotime($toReturn['fee_invoices'][$key]->fee_invoice_date));
			$end_month = date('F', strtotime($toReturn['fee_invoices'][$key]->fee_invoice_end_date));
			if ($start_month == $end_month) {
				$toReturn['fee_invoices'][$key]->fee_duration = date('M-Y', strtotime($toReturn['fee_invoices'][$key]->fee_invoice_date));
			} else {
				$toReturn['fee_invoices'][$key]->fee_duration = date('M Y', strtotime($toReturn['fee_invoices'][$key]->fee_invoice_date)) . " - " . date('M Y', strtotime($toReturn['fee_invoices'][$key]->fee_invoice_end_date));
			}

			$studentIdForParentsOf = $value->studentId;
			$value->father_name = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('fullName');
			if (empty($value->father_name)) {
				$value->father_name = 'N/A';
			}

			$toReturn['fee_invoices'][$key]->due_date = (strtotime($toReturn['fee_invoices'][$key]->due_date) > 0) ? date('d-m-Y', strtotime($toReturn['fee_invoices'][$key]->due_date)) : 'N/A';
			$toReturn['fee_invoices'][$key]->paymentAmount = $toReturn['fee_invoices'][$key]->paymentAmount;
			$toReturn['fee_invoices'][$key]->paidAmount = $toReturn['fee_invoices'][$key]->paidAmount;
			$toReturn['total_paid_amount'] += $toReturn['fee_invoices'][$key]->paidAmount;
			$toReturn['total_payment_amount'] += $toReturn['fee_invoices'][$key]->paymentAmount;
			$paymentStatus = 0;
			if ($toReturn['fee_invoices'][$key]->paymentAmount == $toReturn['fee_invoices'][$key]->paidAmount) {
				$paymentStatus = 1;
			} else if ($toReturn['fee_invoices'][$key]->paidAmount != '' && $toReturn['fee_invoices'][$key]->paymentAmount > $toReturn['fee_invoices'][$key]->paidAmount) {
				$paymentStatus = 2;
			} else {
				$paymentStatus = 0;
			}

			/* check installments */
			$allinstallments = \fee_installments::where(
				array('fee_invoice_id' => $toReturn['fee_invoices'][$key]->invoiceId)
			)->get()->toArray();

			$toReturn['fee_invoices'][$key]->paymentStatus = $paymentStatus;
			$update_fee_collection = \fee_collection::find($toReturn['fee_invoices'][$key]->invoiceId);
			$update_fee_collection->paymentStatus = $paymentStatus;
			$update_fee_collection->save();


			$pendingCheques = 0;
			$pendingCheques = count(\fee_payment_collection_status::where(
				array('fee_collection_id' => $toReturn['fee_invoices'][$key]->invoiceId, 'status' => 0)
			)->get()->toArray());
			$toReturn['fee_invoices'][$key]->pendingCheques = $pendingCheques;

			/* installments details */
			$installMents = 0;
			$toReturn['fee_invoices'][$key]->intallments = '';


			$toReturn['fee_invoices'][$key]->countInstallments = 0;
			$paidInstallmentAmount = 0;
			$installmentStatus = "";
			if (!empty($allinstallments)) {
				$toReturn['fee_invoices'][$key]->countInstallments = count($allinstallments);
				$toReturn['fee_invoices'][$key]->paymentInstallmentStatus = 4;

				$paidInstallmentAmount = 0;
				$index = 1;

				$total_install_paid_amount = 0;
				$total_installment_fine_amount = 0;
				$total_installment_discount_amount = 0;
				foreach ($allinstallments as $key3 => $value3) {
					$installment_status = $allinstallments[$key3]['paid_status'];

					$allinstallments[$key3]['intallmentId'] = $allinstallments[$key3]['id'];
					$allinstallments[$key3]['installment_amount'] = $allinstallments[$key3]['installment_amount'];

					$allinstallments[$key3]['paid_status'] = ($allinstallments[$key3]['paid_status'] == 1) ? 'Paid' : 'Due';
					$allinstallments[$key3]['due_date'] = ($allinstallments[$key3]['paid_status'] == 'Due') ? date('d-m-Y', strtotime($allinstallments[$key3]['due_date'])) : "";

					$installmentStatus .= $index . ". ";

					$installmentStatus .= $allinstallments[$key3]['installment_amount'] . "  ";

					if ($installment_status == 1) {
						$installmentStatus .= "<span style='color:green;'> Paid" . $allinstallments[$key3]['installment_amount'];
					} else if ($installment_status == 0) {
						$installmentStatus .= "<span style='color:red;'>" . $allinstallments[$key3]['paid_status'] . " On " . $allinstallments[$key3]['due_date'];
					} else if ($installment_status == 2) {
						$get_all_fee_installment_payements = \fee_payment_collection_status::where('fee_installment_id', $allinstallments[$key3]['id'])->where('status', 1)->get();
						if (!empty($get_all_fee_installment_payements)) {
							foreach ($get_all_fee_installment_payements as $key5 => $value5) {
								$total_install_paid_amount += $get_all_fee_installment_payements[$key5]->collectionAmount;
								$total_installment_fine_amount += $get_all_fee_installment_payements[$key5]->fine_amount;
								$total_installment_discount_amount += $get_all_fee_installment_payements[$key5]->discount_amount;
							}
						}
						$Bal_amount = $allinstallments[$key3]['installment_amount'] - $total_install_paid_amount + $total_installment_fine_amount - $total_installment_discount_amount;

						$installmentStatus .= "<span style='color:#fd9b15;'> Partial/ Paid: " . $total_install_paid_amount . " /Bal: " . $Bal_amount;
						if ($total_installment_fine_amount <> 0) {
							$installmentStatus .= " Fine: " . $total_installment_fine_amount;
						}
						if ($total_installment_discount_amount <> 0) {
							$installmentStatus .= " Discount: " . $total_installment_discount_amount;
						}
					} else {
						$installmentStatus .= "<span style='color:red;'>" . $allinstallments[$key3]['paid_status'];
					}


					$installmentStatus .= "<br></span>";

					$index++;
				}

				$toReturn['fee_invoices'][$key]->intallments = $installmentStatus;
			}
			$installMents = count($allinstallments);
			$toReturn['fee_invoices'][$key]->intallments = $installmentStatus;
		}

		$toReturn['balance_amount'] = $toReturn['total_payment_amount'] - $toReturn['total_paid_amount'];
		$toReturn['currency_symbol'] = $this->panelInit->settingsArray['currency_symbol'];

		$classes = \classes::where('school_id', $this->panelInit->authUser['school_id'])->get();
		$toReturn['classes'] = array();
		foreach ($classes as $key => $value) {
			$toReturn['classes'][$key]['className'] = $classes[$key]->className;
			$toReturn['classes'][$key]['id'] = $classes[$key]->id;
		}

		return $toReturn;
	}

	/* <!-- Invoice Exporting to PDF/EXCEL Controller function --> */
	public function export()
	{

		$toReturn = array();
		$toReturn['data'] = $searchInput =  \Input::get('form');
		$invoiceData = \DB::table('fee_collection')
			->leftJoin('users', 'users.id', '=', 'fee_collection.paymentStudent')
			->leftJoin('fee_payment_collection_status', 'fee_payment_collection_status.fee_collection_id', '=', 'fee_collection.id')
			->leftJoin('classes', 'classes.id', '=', 'fee_collection.class_id')
			->where('fee_collection.school_id', $this->panelInit->authUser['school_id'])
			->where('fee_collection.fee_group_id', '!=', 0)
			->groupBy('fee_collection.id')
			->select(
				'fee_collection.id as invoiceId',
				'fee_collection.created_date as paymentDate',
				'users.fullName as fullName',
				'users.studentRollId as studentRollId',
				'users.mobileNo as mobileNo',
				'fee_collection.paymentStudent as studentId',
				'classes.className as className',
				'fee_collection.due_date as due_date',
				'fee_collection.paymentStatus as paymentStatus',
				'fee_collection.fee_invoice_date as fee_invoice_date',
				'fee_collection.fee_invoice_end_date as fee_invoice_end_date',
				'fee_collection.paymentAmount as paymentAmount',
				'fee_collection.paidAmount as paidAmount'
			);
		if (!empty($searchInput['searchStudent'])) {
			$searchStudent = $searchInput['searchStudent'];
			$invoiceData->where(function ($q) use ($searchStudent) {
				$q->where('users.fullName', 'like', "%$searchStudent%");
			});
		}

		if (!empty($searchInput['classId'])) {
			$classId = $searchInput['classId'];
			$invoiceData->where('users.studentClass', $classId);
		}

		if (!empty($searchInput['fromDate']) && !empty($searchInput['toDate'])) {
			$fromDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $searchInput['fromDate'])));
			$toDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $searchInput['toDate'] . ' 23:59:59')));
			$invoiceData->whereBetween('fee_collection.created_date', array($fromDate, $toDate));
		}
		if ($searchInput['paymentStatus'] != null && $searchInput['paymentStatus'] != 3) {
			$invoiceData->where('fee_collection.paymentStatus', intval($searchInput['paymentStatus']));
			$paymentStatus = $searchInput['paymentStatus'];
		}

		$toReturn['fee_invoices'] = $invoiceData->orderBy('fee_collection.id', 'DESC')->get();

		/*----------- Exporting Creation Codes for Excel-Sheet ------------------------- */
		if ($searchInput['exportType'] == 'excel') {

			if (isset($paymentStatus) && $paymentStatus == 1) {
				$data = array(1 => array('Fee Paid List'));
			} else if (isset($paymentStatus) && $paymentStatus == 0) {
				$data = array(1 => array('Fee Unpaid List'));
			} else if (isset($paymentStatus) && $paymentStatus == 2) {
				$data = array(1 => array('Fee Partial Payment List'));
			} else {
				$data = array(1 => array('Fee Invoice List'));
			}
			$data[] = array('Sl.No', 'Inv ID', 'Fee Duration', 'Class', 'Student Roll', 'Student Name', 'Inv Amount', 'Paid Amount', 'Balance', 'Parent Mobile');



			foreach ($toReturn['fee_invoices'] as $key => $value) {
				$start_month = date('F', strtotime($value->fee_invoice_date));
				$end_month = date('F', strtotime($value->fee_invoice_end_date));
				if ($start_month == $end_month) {
					$value->fee_duration = date('M-Y', strtotime($value->fee_invoice_date));
				} else {
					$value->fee_duration = date('M Y', strtotime($value->fee_invoice_date)) . " - " . date('M Y', strtotime($value->fee_invoice_end_date));
				}
				$studentIdForParentsOf = $value->studentId;
				$value->mobileNo = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
					$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
						->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
						->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
				})->value('mobileNo');
				if (empty($value->mobileNo)) {
					$value->mobileNo = 'N/A';
				}

				$balance_amount = $value->paymentAmount - $value->paidAmount;
				$data[] = array(
					$key + 1,
					$value->invoiceId,
					$value->fee_duration,
					$value->className,
					$value->studentRollId,
					$value->fullName,
					$value->paymentAmount,
					$value->paidAmount,
					$balance_amount,
					$value->mobileNo
				);
			}

			\Excel::create('Fee-Invoice-Sheet', function ($excel) use ($data) {

				// Set the title
				$excel->setTitle('Fee Invoices');

				// Chain the setters
				$excel->setCreator('Paatham')->setCompany('Paatham');

				$excel->sheet('Fees', function ($sheet) use ($data) {
					$sheet->freezePane('A3');
					$sheet->mergeCells('A1:I1');
					$sheet->fromArray($data, null, 'A1', true, false);
					$sheet->setColumnFormat(array('I1' => '@'));
				});
			})->download('xls');
		}

		/*----------- Exporting Creation Codes for PDF Document ------------------------- */
		if ($searchInput['exportType'] == 'pdf') {

			$header = array('Sl.No', 'Inv ID', 'Fee Duration', 'Class', 'Student Roll', 'Student Name', 'Inv Amount', 'Paid Amount', 'Balance', 'Parent Mobile');
			$data = array();
			$key = 1;
			$school_name = \schools::where('id', $this->panelInit->authUser['school_id'])->value('school_name');
			$school_address = \schools::where('id', $this->panelInit->authUser['school_id'])->value('address');
			foreach ($toReturn['fee_invoices'] as $key => $value) {
				$start_month = date('F', strtotime($value->fee_invoice_date));
				$end_month = date('F', strtotime($value->fee_invoice_end_date));
				if ($start_month == $end_month) {
					$value->fee_duration = date('M-Y', strtotime($value->fee_invoice_date));
				} else {
					$value->fee_duration = date('M Y', strtotime($value->fee_invoice_date)) . " - " . date('M Y', strtotime($value->fee_invoice_end_date));
				}

				$studentIdForParentsOf = $value->studentId;
				$value->mobileNo = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
					$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
						->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
						->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
				})->value('mobileNo');
				if (empty($value->mobileNo)) {
					$value->mobileNo = 'N/A';
				}
				$balance_amount = $value->paymentAmount - $value->paidAmount;
				$data[] = array(
					'sl' => $key + 1,
					'invoiceId' => $value->invoiceId,
					'fee_duration' => $value->fee_duration,
					'className' => $value->className,
					'studentRollId' => $value->studentRollId,
					'fullName' => $value->fullName,
					'payment_amnt' => $value->paymentAmount,
					'paidAmount' => $value->paidAmount,
					'balance_amount' => $balance_amount,
					'parentmob' => $value->mobileNo
				);
				$key++;
			}

			$doc_details = array(
				"title" => "Fee Recipts",
				"author" => $this->data['panelInit']->settingsArray['siteTitle'],
				"subject" => 'Fee Recipts List',
				"keywords" => 'pdf, paatham, it-scient',
				"topMarginValue" => 10,
				"mode" => 'L'
			);

			$pdfbuilder = new \PdfBuilder($doc_details);

			$content = "<table cellspacing=\"0\" cellpadding=\"4\" border=\"1\" >";
			$content .= "<tr><th colspan=\"11\" align=\"left\" ><b>" . $school_name . "</b> ( " . $school_address . " )</th></tr>";
			if (isset($fromDate) && isset($toDate)) {
				if (isset($paymentStatus) && $paymentStatus == 1) {
					$content .= "<tr><th colspan=\"11\" align=\"left\" ><b>FEE INVOICES:</b> PAID LIST (Duration: " . date('d/m/Y', strtotime($fromDate)) . " to " . date('d/m/Y', strtotime($toDate)) . ")</th></tr>";
				} else if (isset($paymentStatus) && $paymentStatus == 0) {
					$content .= "<tr><th colspan=\"11\" align=\"left\" ><b>FEE INVOICES:</b> UNPAID LIST (Duration: " . date('d/m/Y', strtotime($fromDate)) . " to " . date('d/m/Y', strtotime($toDate)) . ")</th></tr>";
				} else if (isset($paymentStatus) && $paymentStatus == 2) {
					$content .= "<tr><th colspan=\"11\" align=\"center\" ><b>FEE INVOICES:</b> PARTIAL PAYMENT LIST (Duration: " . date('d/m/Y', strtotime($fromDate)) . " to " . date('d/m/Y', strtotime($toDate)) . ")</th></tr>";
				} else {
					$content .= "<tr><th colspan=\"11\" align=\"left\" ><b>FEE INVOICES LIST</b> (Duration: " . date('d/m/Y', strtotime($fromDate)) . " to " . date('d/m/Y', strtotime($toDate)) . ")</th></tr>";
				}
			} else {
				if (isset($paymentStatus) && $paymentStatus == 1) {
					$content .= "<tr><th colspan=\"11\" align=\"left\" ><b>FEE INVOICES:</b> PAID LIST</th></tr>";
				} else if (isset($paymentStatus) && $paymentStatus == 0) {
					$content .= "<tr><th colspan=\"11\" align=\"left\" ><b>FEE INVOICES:</b> UNPAID LIST</th></tr>";
				} else if (isset($paymentStatus) && $paymentStatus == 2) {
					$content .= "<tr><th colspan=\"11\" align=\"left\" ><b>FEE INVOICES:</b> PARTIAL PAYMENT LIST</th></tr>";
				} else {
					$content .= "<tr><th colspan=\"11\" align=\"left\" ><b>FEE INVOICES LIST</b></th></tr>";
				}
			}

			/* ========================================================================= */
			/*                Total width of the pdf table is 1017px                     */
			/* ========================================================================= */
			$content .= "<thead><tr>";
			$content .= "<th style=\"width:50Px;font-weight:bold;\" align=\"center\">Sl.</th>";
			$content .= "<th style=\"width:50Px;font-weight:bold;\" align=\"center\">Inv Id</th>";
			$content .= "<th style=\"width:140px;font-weight:bold;\" align=\"center\">Fee Duration</th>";
			$content .= "<th style=\"width:117px;font-weight:bold;\" align=\"center\">Payment Date</th>";
			$content .= "<th style=\"width:150Px;font-weight:bold;\" align=\"center\">Student</th>";
			$content .= "<th style=\"width:80Px;font-weight:bold;\" align=\"center\">Roll No.</th>";
			$content .= "<th style=\"width:50px;font-weight:bold;\" align=\"center\">Class</th>";
			$content .= "<th style=\"width:120px;font-weight:bold;\" align=\"center\">Contact No.</th>";
			$content .= "<th style=\"width:90Px;font-weight:bold;\" align=\"center\">Inv. Amt.(₹)</th>";
			$content .= "<th style=\"width:90Px;font-weight:bold;\" align=\"center\">Paid Amt.(₹)</th>";
			$content .= "<th style=\"width:80Px;font-weight:bold;\" align=\"center\">Balance(₹)</th>";
			$content .= "</tr></thead><tbody>";

			$InvAmountpdf = 0;
			$PaidAmountpdf = 0;
			$BalanceAmountpdf = 0;

			foreach ($data as $key => $row) {
				$payDate = \fee_payment_collection_status::where('fee_collection_id', $data[$key]['invoiceId'])->orderBy('id', 'DESC')->first();
				$data[$key]['paymentDate'] = date('d/m/Y', strtotime($payDate['collectionDate']));
				$content .= "<tr>";
				$content .= "<td style=\"width:50Px;\" align=\"right\">" . $data[$key]['sl'] . "</td>";
				$content .= "<td style=\"width:50Px;\" align=\"right\">" . $data[$key]['invoiceId'] . "</td>";
				$content .= "<td style=\"width:140px;\" align=\"left\">" . $data[$key]['fee_duration'] . "</td>";
				$content .= "<td style=\"width:117px;\" align=\"right\">" . $data[$key]['paymentDate'] . "</td>";
				if (strlen($data[$key]['fullName']) < 20) {
					$content .= "<td style=\"width:150Px;\" align=\"left\">" . $data[$key]['fullName'] . "</td>";
				} else {
					$content .= "<td style=\"width:150Px;font-size: 9px;\" align=\"left\">" . $data[$key]['fullName'] . "</td>";
				}
				$content .= "<td style=\"width:80Px;\" align=\"right\">" . $data[$key]['studentRollId'] . "</td>";
				$content .= "<td style=\"width:50px;\" align=\"right\">" . $data[$key]['className'] . "</td>";
				$content .= "<td style=\"width:120px;\" align=\"right\">" . $data[$key]['parentmob'] . "</td>";
				$content .= "<td style=\"width:90Px;\" align=\"right\">" . $data[$key]['payment_amnt'] . ".00</td>";
				$content .= "<td style=\"width:90Px;\" align=\"right\">" . $data[$key]['paidAmount'] . ".00</td>";
				$content .= "<td style=\"width:80Px;\" align=\"right\">" . $data[$key]['balance_amount'] . ".00</td>";
				$content .= "</tr>";
				$InvAmountpdf += $data[$key]['payment_amnt'];
				$PaidAmountpdf += $data[$key]['paidAmount'];
				$BalanceAmountpdf += $data[$key]['balance_amount'];
			}
			$InvAmountpdf = $this->moneyFormatIndia($InvAmountpdf);
			$PaidAmountpdf = $this->moneyFormatIndia($PaidAmountpdf);
			$BalanceAmountpdf = $this->moneyFormatIndia($BalanceAmountpdf);

			$content .= '<tr><td colspan="7"></td><td><b>Total Amount</b></td><td align="right">' . $InvAmountpdf . '</td><td align="right">' . $PaidAmountpdf . '</td><td align="right">' . $BalanceAmountpdf . '</td></tr>';
			$content .= "</tbody></table>";

			$pdfbuilder->table($content, array('border' => '0', 'align' => ''));
			$pdfbuilder->output('Fee_invoices.pdf');
			exit;
		}
	}

	/* <!-- Fetch Pending Cheques Detail Controller Function --> */
	public function viewPendingCheques($invoiceId)
	{
		$toReturn = array();
		$pendingChequeDetails = \fee_payment_collection_status::where(
			array('fee_collection_id' => $invoiceId, 'status' => 0)
		)->get();
		foreach ($pendingChequeDetails as $key => $value) {

			if ($pendingChequeDetails[$key]->collectionType != 0) {
				$groupPayCheque = \fee_cheque_collection_for_multiple_invoice::where(
					array('id' => $pendingChequeDetails[$key]->collectionType)
				)->first()->toArray();
				$toReturn['pendingCheques'][$key]['id'] = $pendingChequeDetails[$key]->id;
				$toReturn['pendingCheques'][$key]['cheque_number'] = $groupPayCheque['cheque_number'];
				$toReturn['pendingCheques'][$key]['collectionAmount'] = $groupPayCheque['collection_amount'];
				$toReturn['pendingCheques'][$key]['bank_name'] = $groupPayCheque['bank_name'];
				$toReturn['pendingCheques'][$key]['branch_name'] = $groupPayCheque['bank_branch'];
				$toReturn['pendingCheques'][$key]['cheque_validity'] = date('d/m/Y', strtotime($groupPayCheque['cheque_validity']));
			} else {
				$toReturn['pendingCheques'][$key]['id'] = $pendingChequeDetails[$key]->id;
				$toReturn['pendingCheques'][$key]['cheque_number'] = $pendingChequeDetails[$key]->cheque_number;
				$toReturn['pendingCheques'][$key]['collectionAmount'] = $pendingChequeDetails[$key]->collectionAmount;
				$toReturn['pendingCheques'][$key]['bank_name'] = $pendingChequeDetails[$key]->bank_name;
				$toReturn['pendingCheques'][$key]['branch_name'] = $pendingChequeDetails[$key]->branch_name;
				$toReturn['pendingCheques'][$key]['cheque_validity'] = date('d/m/Y', strtotime($pendingChequeDetails[$key]->cheque_validity));
			}
		}
		return $toReturn;
	}

	/* <!-- Change Cheque status from pending to approved/bounced Controller Function --> */
	public function changeChequeStatus($id = "", $status = "")
	{
		$toReturn = array();
		if ($id != '' && $status != '') {
			$fee_payment_collection_status = \fee_payment_collection_status::find($id);
			if ($status == 'bounced') {
				$fee_payment_collection_status->status = 2;
			} else {
				$fee_payment_collection_status->status = 1;
				if ($fee_payment_collection_status->fee_installment_id != 0) {
					$installment_amount = \fee_installments::where('id', $fee_payment_collection_status->fee_installment_id)->value('installment_amount'); //0;
					$total_paid_installment = \fee_payment_collection_status::where('fee_installment_id', $fee_payment_collection_status->fee_installment_id)->where('status', 1)->sum('collectionAmount');
					$balance_installment_amount = $installment_amount - $total_paid_installment;
					if ($fee_payment_collection_status->collectionAmount == $balance_installment_amount) {
						$installment_update = \fee_installments::find($fee_payment_collection_status->fee_installment_id);
						$installment_update->paid_status = 1;
						$installment_update->save();
					} elseif ($fee_payment_collection_status->collectionAmount < $balance_installment_amount) {
						$installment_update = \fee_installments::find($fee_payment_collection_status->fee_installment_id);
						$installment_update->paid_status = 2;
						$installment_update->save();
					}
				}
			}
			$fee_payment_collection_status->save();

			// ======================================================================Fee Optimization codes: 09.11.2019: Rohit Kamat======================================================================//
			$fee_payment_collection_status_var = \fee_payment_collection_status::where('fee_collection_id', $fee_payment_collection_status->fee_collection_id)->where('status', 1)->sum('collectionAmount');
			if ($fee_payment_collection_status_var <> null) {
				$feeTemp = \fee_collection::find($fee_payment_collection_status->fee_collection_id);
				if ($fee_payment_collection_status_var == $feeTemp->paymentAmount) {
					$feeTemp->paymentStatus = 1;
				}
				$feeTemp->paidAmount	= $fee_payment_collection_status_var;
				$feeTemp->save();
			}
			// ======================================================================Fee Optimization codes: 09.11.2019: Rohit Kamat======================================================================//
		}

		$isGroupPayment = \fee_payment_collection_status::where(array('id' => $id))->where('collectionType', '!=', 0)->value('collectionType');
		if (!empty($isGroupPayment)) {
			$fee_cheque_collection_for_multiple_invoice = \fee_cheque_collection_for_multiple_invoice::find($isGroupPayment);
			if ($status == 'bounced') {
				$fee_cheque_collection_for_multiple_invoice->status = 2;
			} else {
				$fee_cheque_collection_for_multiple_invoice->status = 1;
			}
			$fee_cheque_collection_for_multiple_invoice->save();
		}

		return $this->panelInit->apiOutput(true, "Success", "Cheque status changed sucessfully", $toReturn);
	}

	/* <!-- Fee Invoice creation Function with IDS Controller Function  --> */
	public function create()
	{

		$toReturn = array();

		$studentType = \Input::get('selectUser');
		if ($studentType == 'student') {
			$studentId = \Input::get('studentId');
		} else {
			$allStudentId = \Input::get('finalselectedUsers');
		}
		$feeCreation = array();
		if (!empty($allStudentId)) {
			foreach ($allStudentId as $key1 => $value1) {
				if (!empty($allStudentId[$key1])) {
					$feeCreation = $this->createFee($allStudentId[$key1]);
				}
			}
		} else {
			$feeCreation = $this->createFee($studentId);
		}

		// ======================================================================Fee Optimization codes: 09.11.2019: Rohit Kamat======================================================================//
		if (!empty($allStudentId)) {
			foreach ($allStudentId as $key1 => $value1) {
				$fee_collection_var = \fee_collection::where('paymentStudent', $allStudentId[$key1])->orderBy('id', 'DESC')->select('id', 'fineAmount', 'discountAmount')->first();
				$fee_collection_particulars_var = \fee_collection_particulars::where('fee_collection_id', $fee_collection_var['id'])->sum('amount');
				$fee_installments_count = \fee_installments::where('fee_invoice_id', $fee_collection_var['id'])->count();
				$fee_payment_collection_status_var = \fee_payment_collection_status::where('fee_collection_id', $fee_collection_var['id'])->where('status', 1)->sum('collectionAmount');
				$fee_table_update = \fee_collection::find($fee_collection_var['id']);
				$fee_table_update->paymentAmount = $fee_collection_particulars_var + $fee_collection_var['fineAmount'] - $fee_collection_var['discountAmount'];
				$fee_table_update->paidAmount = $fee_payment_collection_status_var;
				$fee_table_update->installment_count_flag = $fee_installments_count;
				$fee_table_update->save();
			}
		} else {
			$fee_collection_var = \fee_collection::where('paymentStudent', $studentId)->orderBy('id', 'DESC')->select('id', 'fineAmount', 'discountAmount')->first();
			$fee_collection_particulars_var = \fee_collection_particulars::where('fee_collection_id', $fee_collection_var['id'])->sum('amount');
			$fee_installments_count = \fee_installments::where('fee_invoice_id', $fee_collection_var['id'])->count();
			$fee_payment_collection_status_var = \fee_payment_collection_status::where('fee_collection_id', $fee_collection_var['id'])->where('status', 1)->sum('collectionAmount');
			$fee_table_update = \fee_collection::find($fee_collection_var['id']);
			$fee_table_update->paymentAmount = $fee_collection_particulars_var + $fee_collection_var['fineAmount'] - $fee_collection_var['discountAmount'];
			$fee_table_update->paidAmount = $fee_payment_collection_status_var;
			$fee_table_update->installment_count_flag = $fee_installments_count;
			$fee_table_update->save();
		}
		// ======================================================================Fee Optimization codes: 09.11.2019: Rohit Kamat======================================================================//

		//if($fee_collection == true){
		return $this->panelInit->apiOutput(true, "Invoice Generated", "Invoice generated successfully", $toReturn);
		//}

	}

	/* <!-- Fee Invoice creation Function with DB codes Controller Function --> */
	function createFee($studentId = "")
	{
		$toReturn = array();
		$toReturn['studentId'] = $studentId;
		$school_id = $this->panelInit->authUser['school_id'];
		$fee_group = \Input::get('fee_group');
		$yearofcollection = \Input::get('yearofcollection');


		$fee_installment = \Input::get('fee_installment');
		//$paymentStatus = \Input::get('paymentStatus');
		if (!empty($fee_installment)) {
			$paymentStatus = 0;
		} else {
			$paymentStatus = \Input::get('paymentStatus');
		}



		$class_id = \Input::get('classId');
		// $DiscountAmount = \Input::get('DiscountAmount');
		// $fineAmount = \Input::get('fineAmount');


		$collectFrequecncy = \Input::get('collectFrequecncy');
		if (!empty($collectFrequecncy) && $collectFrequecncy == "Monthly") {

			$frequencyVal = \Input::get('frequencyVal');
			$frequencyVal = ($frequencyVal < 10) ? "0" . $frequencyVal : $frequencyVal;
			$start_date = date($yearofcollection . '-' . $frequencyVal . '-01');
			$days_in_month = cal_days_in_month(CAL_GREGORIAN, $frequencyVal, $yearofcollection);
			$end_date = date($yearofcollection . '-' . $frequencyVal . '-' . $days_in_month);
		} else if (!empty($collectFrequecncy) && ($collectFrequecncy == "Quarterly" or $collectFrequecncy == "Biannually")) {
			$frequencyVal = \Input::get('frequencyVal');
			$monthVal = array();
			$monthVal = str_split($frequencyVal);
			$start_month = ($monthVal[0] < 10) ? "0" . $monthVal[0] : $monthVal[0];
			$end_month = ($monthVal[2] < 10) ? "0" . $monthVal[2] : $monthVal[2];
			$start_date = date($yearofcollection . '-' . $start_month . '-01');
			$days_in_month = cal_days_in_month(CAL_GREGORIAN, $end_month, $yearofcollection);
			$end_date = date($yearofcollection . '-' . $end_month . '-' . $days_in_month);
		} else {
			$frequencyVal = \Input::get('frequencyVal');
			if (!empty($frequencyVal) && $frequencyVal > 1) {
				$start_month = ($frequencyVal < 10) ? "0" . $frequencyVal : $frequencyVal;
				$end_month = $frequencyVal - 1;
				$end_month = ($end_month < 10) ? "0" . $end_month : $end_month;
				$days_in_month = cal_days_in_month(CAL_GREGORIAN, $end_month, $yearofcollection);
				$start_date = date($yearofcollection . '-' . $start_month . '-01');
				$end_date = date(++$yearofcollection . '-' . $end_month . '-' . $days_in_month);
			} else {
				$start_date = date($yearofcollection . '-01-01');
				$end_date = date($yearofcollection . '-12-31');
			}
		}

		$checkAlreadyPayment = "";
		$fee_particulars = \Input::get('fee_particulars');
		if (!empty($fee_particulars)) {
			$totalParticularAmount = 0;
			foreach ($fee_particulars as $key => $value) {
				if (!empty($fee_particulars[$key]['selectfeepart'])) {
					$totalParticularAmount += $fee_particulars[$key]['amount'];
				}
			}
		}

		$totalInstallmentAmount = 0;

		if (!empty($fee_installment)) {
			$fee_invoice_installments = \Input::get('allInstallments');
			foreach ($fee_invoice_installments as $key1 => $value1) {
				if (!empty($fee_invoice_installments[$key1]['installmentAmount'])) {
					$totalInstallmentAmount += $fee_invoice_installments[$key1]['installmentAmount'];
				}
			}
		}


		$fineAmount = (!empty(\Input::get('fineAmount'))) ? \Input::get('fineAmount') : 0;
		$DiscountAmount = (!empty(\Input::get('DiscountAmount'))) ? \Input::get('DiscountAmount') : 0;
		$amountPaid = (!empty(\Input::get('payAmount'))) ? \Input::get('payAmount') : 0;
		$due_date = \Input::get('paidTime');
		$netPayble = ($totalParticularAmount + $fineAmount) - $DiscountAmount;
		if (!empty($checkAlreadyPayment)) {
			return $this->panelInit->apiOutput(false, "Payment done", "Payment has already done for this student of this duration");
		} else if ($amountPaid > $netPayble) {
			return $this->panelInit->apiOutput(false, "Invalid amount", "Payment amount cannot be higher than payble amount");
		} else if ($totalInstallmentAmount > $netPayble) {
			return $this->panelInit->apiOutput(false, "Invalid amount", "Installment total amount cannot be higher than payble amount");
		} else {
			$fee_collection = new \fee_collection();
			$fee_collection->fee_group_id = $fee_group;
			$fee_collection->school_id = $school_id;
			$fee_collection->paymentStudent = $studentId;
			$fee_collection->class_id = $class_id;
			if (!empty($due_date)) {
				$fee_collection->due_date = date('Y-m-d', strtotime(str_replace('/', '-', $due_date)));
			} else {
				$fee_collection->due_date = date('Y-m-d');
			}
			if (!empty($amountPaid) && $amountPaid < $netPayble) {
				$fee_collection->paymentStatus = 2;
			} else if ($amountPaid == $netPayble) {
				$fee_collection->paymentStatus = 1;
			} else {
				$fee_collection->paymentStatus = 0;
			}

			$fee_collection->created_by = $this->data['users']->id;
			$fee_collection->created_date = date('Y-m-d H:i:s');
			$fee_collection->payment_date = date('Y-m-d');
			$fee_collection->fee_invoice_date = $start_date;
			$fee_collection->fee_invoice_end_date = $end_date;
			$fee_collection->status = 1;
			$fee_collection->save();


			$fee_particulars = \Input::get('fee_particulars');
			if (!empty($fee_particulars)) {
				foreach ($fee_particulars as $key => $value) {
					if (!empty($fee_particulars[$key]['selectfeepart'])) {
						$fee_collection_particulars = new \fee_collection_particulars();
						$fee_collection_particulars->fee_collection_id = $fee_collection->id;
						$fee_collection_particulars->fee_particular = $fee_particulars[$key]['feehead'];

						$fee_collection_particulars->amount = $fee_particulars[$key]['amount'];
						$fee_collection_particulars->status = 1;
						$fee_collection_particulars->created_by = $this->data['users']->id;
						$fee_collection_particulars->created_date = date('Y-m-d H:i:s');
						$fee_collection_particulars->save();
					}
				}
			}

			/* save paid status*/
			if (!empty($paymentStatus)) {
				if ($paymentStatus == 1) {

					$collectionDate = \Input::get('collectionDate');

					$fee_payment_collection_status = new \fee_payment_collection_status();
					$fee_payment_collection_status->fee_collection_id = $fee_collection->id;
					$fee_payment_collection_status->collectionAmount = \Input::get('payAmount');
					$fee_payment_collection_status->collectionDate = date('Y-m-d H:i:s');
					$fee_payment_collection_status->collectionMethod = \Input::get('paidMethod');

					if (!empty($collectionDate)) {
						$fee_payment_collection_status->collectionDate = date('Y-m-d', strtotime(str_replace('/', '-', $collectionDate)));
					} else {
						$fee_payment_collection_status->collectionDate = date('Y-m-d H:i:s');
					}

					$fee_payment_collection_status->status = 1;
					$chequeNmbr = \Input::get('chequeNmbr');
					if (!empty($chequeNmbr)) {
						$fee_payment_collection_status->cheque_number = $chequeNmbr;
						$fee_payment_collection_status->cheque_validity = date('Y-m-d', strtotime(str_replace('/', '-', \Input::get('chequeValidityDate'))));
						$fee_payment_collection_status->bank_name = \Input::get('bank_name');
						$fee_payment_collection_status->branch_name = \Input::get('branch_name');
						$fee_payment_collection_status->status = 0;
					}

					$fee_payment_collection_status->collectionNote = (!empty(\Input::get('collectionNote'))) ? \Input::get('collectionNote') : '';
					$fee_payment_collection_status->collectedBy = $this->data['users']->id;
					$fee_payment_collection_status->save();
				}
			}

			/*Save installments details*/
			if (!empty($fee_invoice_installments)) {
				foreach ($fee_invoice_installments as $key2 => $value2) {
					$fee_installments = new \fee_installments();
					$fee_installments->fee_invoice_id = $fee_collection->id;
					$fee_installments->installment_amount = $fee_invoice_installments[$key2]['installmentAmount'];
					$fee_installments->due_date = date('Y-m-d', strtotime(str_replace('/', '-', $fee_invoice_installments[$key2]['installmentDate'])));
					$fee_installments->paid_status = (!empty($fee_invoice_installments[$key2]['installmentPaid'])) ? 1 : 0;
					$fee_installments->save();
					if ($fee_installments->paid_status == 1) {
						$fee_payment_collection_status = new \fee_payment_collection_status();
						$fee_payment_collection_status->fee_collection_id = $fee_collection->id;
						$fee_payment_collection_status->collectionAmount =  $fee_invoice_installments[$key2]['installmentAmount'];
						$fee_payment_collection_status->collectionDate = date('Y-m-d', strtotime(str_replace('/', '-', $fee_invoice_installments[$key2]['installmentDate'])));
						$fee_payment_collection_status->collectionMethod = 'cash';
						$fee_payment_collection_status->status = 1;
						$fee_payment_collection_status->collectionNote = 'N/A';
						$fee_payment_collection_status->collectedBy = $this->data['users']->id;
						$fee_payment_collection_status->save();

						$fee_paid_installments = \fee_installments::find($fee_installments->id);
						$fee_paid_installments->paid_date = date('Y-m-d', strtotime(str_replace('/', '-', $fee_invoice_installments[$key2]['installmentDate'])));
						$fee_paid_installments->save();
					}
				}
			}


			$fee_collection_update = \fee_collection::find($fee_collection->id);
			if (!empty($fineAmount)) {
				$fee_collection_update->fineAmount = $fineAmount;
			}
			if (!empty($DiscountAmount)) {
				$fee_collection_update->discountAmount = $DiscountAmount;
			}
			$fee_collection_update->save();


			/* Notify to student */
			date_default_timezone_set('Asia/Kolkata');
			$notificationData = new \notification();
			$notificationData->school_id = $this->panelInit->authUser['school_id'];
			$notificationData->notification_type = 'payment';
			$notificationData->exam_id = 0;
			$notificationData->student_id = $studentId;
			$notificationData->grade = 0;

			if ($paymentStatus == 1) {
				$notificationData->display_msg = 'Fees paid from ' . $start_date . ' to ' . $end_date . ' with Receipt Id ' . $fee_collection->id;
			} else {
				if ($paymentStatus == 0) {
					$notificationData->display_msg = 'Invoice generated from ' . $start_date . ' to ' . $end_date . ' with Invoice Id ' . $fee_collection->id;
				}
			}
			$notificationData->status = 'active';
			$notificationData->subject_id = 0;
			$notificationData->read_status = 1;
			$notificationData->date = date("Y-m-d H:i:s");
			$notificationData->save();
		}
		return true;
	}

	/* <!-- Generating Recipt Controller Function  --> */
	function fetch_fee_detail($id = "")
	{
		$toReturn = array();
		$invoicesData = \DB::table('fee_collection')
			->select(
				'users.fullName as student',
				'schools.school_name as school',
				'users.parentOf as fatherName',
				'fee_collection.fineAmount as fineAmount',
				'fee_collection.discountAmount as discountAmount',
				'fee_collection.paymentAmount as paymentAmount',
				'fee_collection.paidAmount as paidAmount',
				'fee_collection.paymentAmount as grandTotal',
				'fee_collection.paymentStatus as paymentStatus',
				'fee_collection.created_date as paymentMonth',
				'fee_collection.created_date as currentDate',
				'fee_collection.paymentAmount as paymentAmntInWords',
				'fee_collection.paidAmount as paidAmntInWords',
				'fee_collection.fee_invoice_date as fee_invoice_date',
				'fee_collection.fee_invoice_end_date as fee_invoice_end_date',
				'fee_collection.fee_invoice_date as fee_invoice_start_year',
				'fee_collection.fee_invoice_end_date as fee_invoice_end_year',
				'users.studentRollId as studentRollId',
				'users.school_id as schoolId',
				'fee_collection.id as invoiceId',
				'schools.email as email',
				'schools.contact_no as contact_no',
				'classes.className as className',
				'sections.sectionName as section',
				'schools.address as address',
				'fee_setting.bank_copy as bank_copy',
				'fee_setting.student_copy as student_copy',
				'fee_collection.paymentAmount as allPayments',
				DB::raw('fee_collection.paymentAmount - fee_collection.paidAmount as balance_amount'),
				'fee_collection.created_date as installment_details',
				'fee_collection.created_date as paymentRows',
				'fee_collection.paymentStudent as studentId'
			)
			->leftJoin('users', 'users.id', '=', 'fee_collection.paymentStudent')
			->leftJoin('classes', 'classes.id', '=', 'users.studentClass')
			->leftJoin('sections', 'sections.id', '=', 'users.studentSection')
			->leftJoin('schools', 'schools.id', '=', 'fee_collection.school_id')
			->leftJoin('fee_setting', 'fee_setting.school_id', '=', 'fee_collection.school_id')
			->leftJoin('fee_payment_collection_status', 'fee_payment_collection_status.fee_collection_id', '=', 'fee_collection.id')
			->where('fee_collection.id', $id)
			->get();

		foreach ($invoicesData as $key => $value) {

			$value->grandTotal = \DB::table('fee_collection_particulars')->where('fee_collection_id', $id)->sum('amount');
			$value->paymentMonth = date('m', strtotime($value->paymentMonth));
			$value->currentDate = date('d-m-Y', strtotime($value->currentDate));
			$value->paymentAmntInWords = $this->convertToRupee($value->paymentAmount);
			$value->paidAmntInWords = 	 $this->convertToRupee($value->paidAmount);
			$value->fee_invoice_date = date('j-M', strtotime($value->fee_invoice_date));
			$value->fee_invoice_end_date = date('j-M-Y', strtotime($value->fee_invoice_end_date));
			$value->fee_invoice_start_year = date('Y', strtotime($value->fee_invoice_start_year));
			$value->fee_invoice_end_year = date('Y', strtotime($value->fee_invoice_end_year));
			$value->installment_details = "";

			$allPayments = \fee_payment_collection_status::where('fee_collection_id', $value->invoiceId)->get();
			if (!empty($allPayments)) {
				$paymentsHistory = "";
				foreach ($allPayments as $key2 => $value2) {
					$paymentsHistory .= $key2 + 1 . ". ";
					$paymentsHistory .= "&#x20B9;" . $value2->collectionAmount . "/-  ";
					$paymentsHistory .= date('d-m-Y', strtotime($value2->collectionDate)) . " <br>";

					$value->fineAmount += $value2->fine_amount;
					$value->discountAmount += $value2->discount_amount; //18.11.2019 Fee fine && discount

				}
				$value->allPayments = $paymentsHistory;
			}

			$fee_details_particulars = \fee_collection_particulars::where(array('fee_collection_id' => $value->invoiceId, 'status' => 1))->get();
			$value->paymentRows = array();
			foreach ($fee_details_particulars as $key3 => $value3) {
				$value->paymentRows[] = array('title' => $value3->fee_particular, 'amount' => $value3->amount);
			}


			$studentIdForParentsOf = $value->studentId;
			$value->fatherName = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('fullName');
			if (empty($value->fatherName)) {
				$value->fatherName = 'N/A';
			}
			$allinstallments = \fee_installments::where('fee_invoice_id', $value->invoiceId)->get();

			if (count($allinstallments) > 0) {
				$value->installment_details = "";

				$total_install_paid_amount = 0;
				$total_installment_fine_amount = 0;
				$total_installment_discount_amount = 0;
				foreach ($allinstallments as $key_cheque => $value_cheque) {
					$installment_status = $value_cheque->paid_status;

					$value_cheque->intallmentId = $value_cheque->id;
					$value_cheque->installment_amount = $value_cheque->installment_amount;

					$value_cheque->paid_status = ($value_cheque->paid_status == 1) ? 'Paid' : 'Due';
					$value_cheque->due_date = ($value_cheque->paid_status == 'Due') ? date('d-m-Y', strtotime($value_cheque->due_date)) : "";

					$value->installment_details .= $key_cheque + 1 . ". ";

					$value->installment_details .= $value_cheque->installment_amount . "  ";

					if ($installment_status == 1) {
						$value->installment_details .= "<span style='color:green;'> Paid" . $value_cheque->installment_amount;
					} else if ($installment_status == 0) {
						$value->installment_details .= "<span style='color:red;'>" . $value_cheque->paid_status . " On " . $value_cheque->due_date;
					} else if ($installment_status == 2) {
						$get_all_fee_installment_payements = \fee_payment_collection_status::where('fee_installment_id', $value_cheque->id)->where('status', 1)->get();
						if (!empty($get_all_fee_installment_payements)) {
							foreach ($get_all_fee_installment_payements as $key5 => $value5) {
								$total_install_paid_amount += $get_all_fee_installment_payements[$key5]->collectionAmount;
								$total_installment_fine_amount += $get_all_fee_installment_payements[$key5]->fine_amount;
								$total_installment_discount_amount += $get_all_fee_installment_payements[$key5]->discount_amount;
							}
						}
						$Bal_amount = $value_cheque->installment_amount - $total_install_paid_amount + $total_installment_fine_amount - $total_installment_discount_amount;

						$value->installment_details .= "<span style='color:#fd9b15;'> Partial/ Paid: " . $total_install_paid_amount . " /Bal: " . $Bal_amount;
						if ($total_installment_fine_amount <> 0) {
							$value->installment_details .= " Fine: " . $total_installment_fine_amount;
						}
						if ($total_installment_discount_amount <> 0) {
							$value->installment_details .= " Discount: " . $total_installment_discount_amount;
						}
					} else {
						$value->installment_details .= "<span style='color:red;'>" . $value_cheque->paid_status;
					}
					$value->installment_details .= "<br></span>";
				}
			}
		}
		$paymentAmountTotal = \fee_collection::where('paymentStudent', $value->studentId)->where('fee_group_id', '!=', 0)->sum('paymentAmount');
		$paidAmountTotal = \fee_collection::where('paymentStudent', $value->studentId)->where('fee_group_id', '!=', 0)->sum('paidAmount');
		$value->grandTotalBalance = $paymentAmountTotal - $paidAmountTotal;

		return $invoicesData;
	}

	/* <!-- Convert Numerical amount to letters Amount Controller Function --> */
	function convertToRupee($number)
	{
		$no = round($number);
		$whole = floor($number);
		$point = $number - $whole;

		$hundred = null;
		$digits_1 = strlen($no);
		$i = 0;
		$str = array();
		$words = array(
			'0' => '', '1' => 'One', '2' => 'Two',
			'3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
			'7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
			'10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
			'13' => 'Thirteen', '14' => 'fourteen',
			'15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
			'18' => 'Eighteen', '19' => 'Nineteen', '20' => 'Twenty',
			'30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
			'60' => 'Sixty', '70' => 'Seventy',
			'80' => 'Eighty', '90' => 'Ninety'
		);
		$digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
		while ($i < $digits_1) {
			$divider = ($i == 2) ? 10 : 100;
			$number = floor($no % $divider);
			$no = floor($no / $divider);
			$i += ($divider == 10) ? 1 : 2;
			if ($number) {
				$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
				$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
				$str[] = ($number < 21) ? $words[$number] .
					" " . $digits[$counter] . $plural . " " . $hundred
					: $words[floor($number / 10) * 10]
					. " " . $words[$number % 10] . " "
					. $digits[$counter] . $plural . " " . $hundred;
			} else $str[] = null;
		}
		$str = array_reverse($str);
		$result = implode('', $str);
		$points = $this->paiseValue($point);

		$finalStr = '';

		if (!empty($result)) {
			$finalStr .= $result . " Rupees  ";
		}
		if (!empty($points)) {
			$finalStr .= "and " . $points . " Paise";
		}
		if (!empty($finalStr)) {
			$finalStr .= " Only.";
		}

		return $finalStr;
	}

	/* <!-- Convert Numerical amount to letters Amount(Paisa Values) Controller Function --> */
	function paiseValue($number)
	{
		$no = round(str_replace('.', '', $number));
		$hundred = null;
		$digits_1 = strlen($no);
		$i = 0;
		$str = array();
		$words = array(
			'0' => '', '1' => 'One', '2' => 'Two',
			'3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
			'7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
			'10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
			'13' => 'Thirteen', '14' => 'fourteen',
			'15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
			'18' => 'Eighteen', '19' => 'Nineteen', '20' => 'Twenty',
			'30' => 'Thirty', '40' => 'Fourty', '50' => 'Fifty',
			'60' => 'Sixty', '70' => 'Seventy',
			'80' => 'Eighty', '90' => 'Ninety'
		);
		$digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
		while ($i < $digits_1) {
			$divider = ($i == 2) ? 10 : 100;
			$number = floor($no % $divider);
			$no = floor($no / $divider);
			$i += ($divider == 10) ? 1 : 2;
			if ($number) {
				$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
				$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
				$str[] = ($number < 21) ? $words[$number] .
					" " . $digits[$counter] . $plural . " " . $hundred
					: $words[floor($number / 10) * 10]
					. " " . $words[$number % 10] . " "
					. $digits[$counter] . $plural . " " . $hundred;
			} else $str[] = null;
		}
		$str = array_reverse($str);
		$result = implode('', $str);

		return $result;
	}

	/* <!-- Fetch fee Collection Data Controller Function --> */
	function invoice($id = "")
	{

		$invoicesData = \DB::table('fee_collection')
			->select(
				'fee_collection.paymentAmount as totalWithTax',
				'fee_collection.id as invoiceId',
				'fee_collection.installment_count_flag as intallments',
				DB::raw('fee_collection.paymentAmount - fee_collection.paidAmount as pendingAmount'),
				'fee_collection.paidAmount as paidAmount'
			)
			->where('fee_collection.id', $id)
			->get();

		$allinstallments = \fee_installments::where(array('fee_invoice_id' => $id))->get()->toArray();
		$total_installment_paid_amount = 0;
		if (!empty($allinstallments)) {
			foreach ($allinstallments as $key => $value) {
				$invoicesData['intallments'][$key]['intallmentId'] = $value['id'];
				$invoicesData['intallments'][$key]['installment_amount'] = $value['installment_amount'];

				if ($value['paid_status'] == 2) {
					$total_installment_paid_amount = \fee_payment_collection_status::where('fee_installment_id', $value['id'])->where('status', 1)->sum('collectionAmount');
					$total_installment_fine_amount = \fee_payment_collection_status::where('fee_installment_id', $value['id'])->where('status', 1)->sum('fine_amount');
					$total_installment_discount_amount = \fee_payment_collection_status::where('fee_installment_id', $value['id'])->where('status', 1)->sum('discount_amount');

					$invoicesData['intallments'][$key]['paid_installment_amount'] = $total_installment_paid_amount;
					$invoicesData['intallments'][$key]['bal_installment_amount'] = $value['installment_amount'] - $total_installment_paid_amount + $total_installment_fine_amount - $total_installment_discount_amount;

					$invoicesData['intallments'][$key]['paid_status'] = 2;
				} else {
					$invoicesData['intallments'][$key]['paid_status'] = $value['paid_status'];
				}


				$invoicesData['intallments'][$key]['installmentPaid'] = $value['paid_status'];
				$invoicesData['intallments'][$key]['due_date'] = ($value['paid_status'] == 'Due') ? date('d-m-Y', strtotime($value['due_date'])) : "";

				if ($value['paid_status'] == 1) {
					$invoicesData['intallments'][$key]['paid_date'] = ($value['paid_status'] != 'Due') ? date('d-m-Y', strtotime($value['paid_date'])) : "";
				}
			}
		}

		$fee_collection_details = \fee_payment_collection_status::where('fee_collection_id', $id)->get();
		$invoicesData['collection'] = array();
		if (!empty($fee_collection_details)) {
			foreach ($fee_collection_details as $key => $value) {
				$invoicesData['collection'][$key]['id'] = $fee_collection_details[$key]->id;
				$invoicesData['collection'][$key]['paidDate'] = date('d-m-Y', strtotime($fee_collection_details[$key]->collectionDate));
				$invoicesData['collection'][$key]['collectionAmount'] = $fee_collection_details[$key]->collectionAmount;
				$invoicesData['collection'][$key]['collectionMethod'] = $fee_collection_details[$key]->collectionMethod;
				$paidStatus = '';
				if ($fee_collection_details[$key]->status == 2) {
					$paidStatus = 'Bounce';
					$backColor = 'background-color: #de9191';
				} else if ($fee_collection_details[$key]->status == 0) {
					$paidStatus = 'Pending';
					$backColor = 'background-color: #f3ecbf';
				} else {
					$backColor = '';
				}
				$invoicesData['collection'][$key]['backColor'] = $backColor;
				if ($fee_collection_details[$key]->collectionMethod == 'cheque') {
					$invoicesData['collection'][$key]['collectionMethod'] = ($paidStatus == 'Bounce' || $paidStatus == 'Pending') ? $fee_collection_details[$key]->collectionMethod . "(" . $paidStatus . ")" : $fee_collection_details[$key]->collectionMethod;
				}
			}
		}

		return $invoicesData;
	}

	/* <!-- Submit fee Collection Data Controller Function --> */
	function collect($id = "")
	{
		if ($this->data['users']->role != "admin" && $this->data['users']->role != "account") exit;
		$pendingAmount = \Input::get('pendingAmount');
		$collectionNote = \Input::get('collectionNote');
		$installMents = \Input::get('allinstallments');
		$collectionAmount = \Input::get('collectionAmount');
		$collectionFineAmount = \Input::get('collectionFineAmount');
		$collectionDiscountAmount = \Input::get('collectionDiscountAmount');
		if ($collectionDiscountAmount <> null) $pendingAmount -= $collectionDiscountAmount;
		if ($collectionFineAmount <> null) $pendingAmount += $collectionFineAmount;

		//return $installMents;
		if (!empty($collectionAmount)) {
			if (bccomp($collectionAmount, $pendingAmount, 10) == 1) {
				return $this->panelInit->apiOutput(false, "Invoice Collection", "Collection amount is greater than invoice pending amount");
			}
		}

		$total_installmentFineAmount = 0;
		$total_installmentDiscountAmount = 0;
		if (!empty($collectionAmount)) {
			$fee_payment_collection_status = new \fee_payment_collection_status();
			$fee_payment_collection_status->fee_collection_id = $id;
			$fee_payment_collection_status->collectionAmount = \Input::get('collectionAmount');
			$fee_payment_collection_status->collectionDate = date('Y-m-d H:i:s');
			$fee_payment_collection_status->collectionMethod = \Input::get('paidMethod');
			$fee_payment_collection_status->status = 1;

			$paidMethod = \Input::get('paidMethod');
			if (!empty($paidMethod) && $paidMethod == 'cheque') {
				$chequeNmbr = \Input::get('chequeNmbr');
				if (!empty($chequeNmbr)) {
					$fee_payment_collection_status->cheque_number = $chequeNmbr;
					$fee_payment_collection_status->cheque_validity = date('Y-m-d', strtotime(str_replace('/', '-', \Input::get('chequeValidityDate'))));
					$fee_payment_collection_status->bank_name = \Input::get('bank_name');
					$fee_payment_collection_status->branch_name = \Input::get('branch_name');
					$fee_payment_collection_status->status = 0;
				}
			}
			if (!empty($collectionFineAmount)) {
				$fee_payment_collection_status->fine_amount = $collectionFineAmount;
			}
			if (!empty($collectionDiscountAmount)) {
				$fee_payment_collection_status->discount_amount = $collectionDiscountAmount;
			}
			if (!empty($collectionNote)) {
				$fee_payment_collection_status->collectionNote = \Input::get('collectionNote');
			}

			$fee_payment_collection_status->collectedBy = $this->data['users']->id;
			$fee_payment_collection_status->save();
		} else {
			if (!empty($installMents)) {
				foreach ($installMents as $key1 => $value1) {
					if (!empty($installMents[$key1]['installmentPaid']) && ($installMents[$key1]['paid_status'] == 0 || $installMents[$key1]['paid_status'] == 2)) {
						$fee_payment_collection_status = new \fee_payment_collection_status();
						$feeInstallemntPreviousFine = \fee_payment_collection_status::where('fee_installment_id', $installMents[$key1]['intallmentId'])->where('status', 1)->sum('fine_amount');
						$feeInstallemntPreviousDiscount = \fee_payment_collection_status::where('fee_installment_id', $installMents[$key1]['intallmentId'])->where('status', 1)->sum('discount_amount');
						$fee_payment_collection_status->fee_collection_id = $id;

						if (!empty($installMents[$key1]['paid_installment_amount'])) {
							$installMents[$key1]['installment_amount'] -= $installMents[$key1]['paid_installment_amount'];
						}
						// $installment_table_varibale = $installMents[$key1]['installment_amount'];

						if (!empty($installMents[$key1]['installment_fine_amount'])) {
							$installMents[$key1]['installment_amount'] += $installMents[$key1]['installment_fine_amount'];
						}
						if (!empty($feeInstallemntPreviousFine)) {
							$installMents[$key1]['installment_amount'] += $feeInstallemntPreviousFine;
						}

						if (!empty($installMents[$key1]['installment_discount_amount'])) {
							$installMents[$key1]['installment_amount'] -= $installMents[$key1]['installment_discount_amount'];
						}
						if (!empty($feeInstallemntPreviousDiscount)) {
							$installMents[$key1]['installment_amount'] -= $feeInstallemntPreviousDiscount;
						}

						if (!empty($installMents[$key1]['collection_amount']) && $installMents[$key1]['collection_amount'] > $installMents[$key1]['installment_amount']) {
							return $this->panelInit->apiOutput(false, "Error", "Paid amount can not be greater than actual amount");
						}

						$fee_payment_collection_status->collectionAmount = $installMents[$key1]['installment_amount'];
						if (!empty($installMents[$key1]['collection_amount'])) {
							$fee_payment_collection_status->collectionAmount = $installMents[$key1]['collection_amount'];
						}

						if (!empty($installMents[$key1]['installment_fine_amount'])) {
							$fee_payment_collection_status->fine_amount = $installMents[$key1]['installment_fine_amount'];
							$total_installmentFineAmount = $total_installmentFineAmount + $installMents[$key1]['installment_fine_amount'];
						}
						if (!empty($installMents[$key1]['installment_discount_amount'])) {
							$fee_payment_collection_status->discount_amount = $installMents[$key1]['installment_discount_amount'];
							$total_installmentDiscountAmount = $total_installmentDiscountAmount + $installMents[$key1]['installment_discount_amount'];
						}

						$fee_payment_collection_status->fee_installment_id = $installMents[$key1]['intallmentId'];

						//$fee_payment_collection_status->collectionDate = date('Y-m-d H:i:s');

						$fee_payment_collection_status->collectionDate = (!empty($installMents[$key1]['paid_date'])) ? date('Y-m-d', strtotime(str_replace('/', '-', $installMents[$key1]['paid_date']))) : date('Y-m-d H:i:s');
						$fee_payment_collection_status->collectionMethod = \Input::get('paidMethod');
						$fee_payment_collection_status->status = 1;
						$fee_payment_collection_status->save();
						$paidMethod = \Input::get('paidMethod');
						if (!empty($paidMethod) && $paidMethod == 'cheque') {
							$chequeNmbr = \Input::get('chequeNmbr');
							if (!empty($chequeNmbr)) {
								$fee_payment_collection_status->cheque_number = $chequeNmbr;
								$fee_payment_collection_status->cheque_validity = date('Y-m-d', strtotime(str_replace('/', '-', \Input::get('chequeValidityDate'))));
								$fee_payment_collection_status->bank_name = \Input::get('bank_name');
								$fee_payment_collection_status->branch_name = \Input::get('branch_name');
								$fee_payment_collection_status->status = 0;
							}
						}
						if (!empty($collectionNote)) {
							$fee_payment_collection_status->collectionNote = \Input::get('collectionNote');
						}
						$fee_payment_collection_status->collectedBy = $this->data['users']->id;
						$fee_payment_collection_status->save();
						if (!empty($paidMethod) && $paidMethod != 'cheque') {
							$fee_installments = \fee_installments::find($installMents[$key1]['intallmentId']);

							$feeInstallemntPreviousFine = \fee_payment_collection_status::where('fee_installment_id', $installMents[$key1]['intallmentId'])->where('status', 1)->sum('fine_amount');
							$feeInstallemntPreviousDiscount = \fee_payment_collection_status::where('fee_installment_id', $installMents[$key1]['intallmentId'])->where('status', 1)->sum('discount_amount');

							/* ========================================We Dont Need these Codes======================================== */
							// if (!empty($installMents[$key1]['installment_fine_amount'])) {
							// 	$fee_installments->installment_fine_amount = $installMents[$key1]['installment_fine_amount'];
							// 	$installMents[$key1]['installment_amount'] +=	$installMents[$key1]['installment_fine_amount']; 								
							// }
							// if (!empty($installMents[$key1]['installment_discount_amount'])) {
							// 	$fee_installments->installment_discount_amount = $installMents[$key1]['installment_discount_amount'];
							// 	$installMents[$key1]['installment_amount'] -=	$installMents[$key1]['installment_discount_amount']; 							
							// }
							/* ========================================We Dont Need these Codes======================================== */

							// if(!empty($installMents[$key1]['installment_fine_amount']))
							// {
							// 	$installMents[$key1]['installment_amount'] += $installMents[$key1]['installment_fine_amount'];
							// }
							// if(!empty($installMents[$key1]['installment_discount_amount']))
							// {
							// 	$installMents[$key1]['installment_amount'] -= $installMents[$key1]['installment_discount_amount'];
							// }
							// if (!empty($feeInstallemntPreviousFine)) {
							// 	$installMents[$key1]['installment_amount'] +=	$feeInstallemntPreviousFine; 							
							// }
							// if (!empty($feeInstallemntPreviousDiscount)) {
							// 	$installMents[$key1]['installment_amount'] -=	$feeInstallemntPreviousDiscount; 							
							// }
							if (!empty($installMents[$key1]['collection_amount']) && $installMents[$key1]['collection_amount'] < $installMents[$key1]['installment_amount']) {
								$fee_installments->paid_status = 2;
							} else {
								$fee_installments->paid_status = 1;
							}

							$fee_installments->paid_date = date('Y-m-d', strtotime(str_replace('/', '-', $installMents[$key1]['paid_date'])));
							$fee_installments->save();
						}
					}
				}
			}
		}



		// ======================================================================Fee Optimization codes: 09.11.2019: Rohit Kamat======================================================================//
		$fee_payment_collection_status_var = \fee_payment_collection_status::where('fee_collection_id', $id)->where('status', 1)->sum('collectionAmount');

		if ($fee_payment_collection_status_var <> null) {
			$feeTemp = \fee_collection::find($id);
			// ====================================================================== Add Fine And Discount while collecting fee codes: 18.11.2019 ======================================================================//
			if (!empty($paidMethod) && $paidMethod != 'cheque' && $collectionFineAmount <> 0 || $collectionDiscountAmount <> 0) {
				$paymentAmountVar = $feeTemp->paymentAmount;
				$feeTemp->paymentAmount = $paymentAmountVar + $collectionFineAmount - $collectionDiscountAmount;
			} elseif (!empty($paidMethod) && $paidMethod != 'cheque' && $total_installmentFineAmount <> 0 || $total_installmentDiscountAmount <> 0) {
				$paymentAmountVar = $feeTemp->paymentAmount;
				$feeTemp->paymentAmount = $paymentAmountVar + $total_installmentFineAmount - $total_installmentDiscountAmount;
			}
			// ====================================================================== Add Fine And Discount while collecting fee codes: 18.11.2019 ======================================================================//
			$feeTemp->paidAmount	= $fee_payment_collection_status_var;
			$feeTemp->save();
		}
		// ======================================================================Fee Optimization codes: 09.11.2019: Rohit Kamat======================================================================//






		$fee_collection_update = \fee_collection::find($id);
		if ($fee_collection_update->paymentAmount > $fee_collection_update->paidAmount) {
			$fee_collection_update->paymentStatus = 2;
		} else if ($fee_collection_update->paymentAmount == $fee_collection_update->paidAmount) {
			$fee_collection_update->paymentStatus = 1;
		}
		$fee_collection_update->save();


		return $this->panelInit->apiOutput(true, "Invoice Collection", "Collection completed successfully");
	}

	/* <!-- Delete Fee Invoice and all Relations Controller Function --> */
	public function delete($id)
	{
		if ($this->data['users']->role != "admin" && $this->data['users']->role != "account") exit;
		if ($postDelete = \fee_collection::where('id', $id)->first()) {
			if ($fee_collection_particulars = \fee_collection_particulars::where('fee_collection_id', $id)) {
				$fee_collection_particulars->delete();
			}
			if ($fee_payment_collection_status = \fee_payment_collection_status::where('fee_collection_id', $id)) {
				$fee_payment_collection_status->delete();
			}
			if ($fee_installments = \fee_installments::where('fee_invoice_id', $id)) {
				$fee_installments->delete();
			}

			$postDelete->delete();
			return $this->panelInit->apiOutput(true, $this->panelInit->language['delPayment'], $this->panelInit->language['paymentDel']);
		} else {
			return $this->panelInit->apiOutput(false, $this->panelInit->language['delPayment'], $this->panelInit->language['paymentNotExist']);
		}
	}

	/* <!-- View all the invoices of a single student Controller Function --> */
	function getAllInvoices($studentId)
	{

		# code...
		$toReturn = array();
		$toReturn['fee_invoices'] = \DB::table('fee_collection')
			->leftJoin('users', 'users.id', '=', 'fee_collection.paymentStudent')
			->leftJoin('classes', 'classes.id', '=', 'fee_collection.class_id')
			->leftJoin('fee_payment_collection_status', 'fee_payment_collection_status.fee_collection_id', '=', 'fee_collection.id')
			->where('fee_collection.school_id', $this->panelInit->authUser['school_id'])
			->where('fee_collection.fee_group_id', '!=', 0)
			->where('fee_collection.paymentStudent', $studentId)
			->groupBy('fee_collection.id')
			->select(
				'fee_collection.id as invoiceId',
				'fee_collection.created_date as paymentDate',
				'fee_collection.dueDate as dueDate',
				'fee_collection.due_date as due_date',
				'fee_collection.paymentStatus as paymentStatus',
				'fee_collection.fee_invoice_date as fee_invoice_date',
				'fee_collection.fee_invoice_end_date as fee_invoice_end_date',
				'users.fullName as fullName',
				'fee_collection.paymentStudent as studentId',
				'classes.className as className',
				'fee_collection.paymentAmount as paymentAmount',
				'fee_collection.paidAmount as paidAmount'
			)
			->orderBy('fee_collection.id', 'DESC')
			->get();

		$toReturn['total_payment_amount'] = \DB::table('fee_collection')->where('paymentStudent', $studentId)->where('school_id', $this->panelInit->authUser['school_id'])->where('fee_group_id', '!=', 0)->sum('paymentAmount');
		$toReturn['total_paid_amount'] = \DB::table('fee_collection')->where('paymentStudent', $studentId)->where('school_id', $this->panelInit->authUser['school_id'])->where('fee_group_id', '!=', 0)->sum('paidAmount');
		$toReturn['balance_amount'] = $toReturn['total_payment_amount'] - $toReturn['total_paid_amount'];

		foreach ($toReturn['fee_invoices'] as $key => $value) {
			$value->paymentDate = date('d-m-Y', strtotime(str_replace('/', '-', $value->paymentDate)));
			$value->due_date = date('d-m-Y', strtotime(str_replace('/', '-', $value->due_date)));
			$value->pendingCheques = \DB::table('fee_payment_collection_status')->where('fee_collection_id', $value->invoiceId)->where('status', 0)->count();

			$start_month = date('F', strtotime($value->fee_invoice_date));
			$end_month = date('F', strtotime($value->fee_invoice_end_date));
			if ($start_month == $end_month) {
				$value->fee_duration = date('M-Y', strtotime($value->fee_invoice_date));
			} else {
				$value->fee_duration = date('M Y', strtotime($value->fee_invoice_date)) . " - " . date('M Y', strtotime($value->fee_invoice_end_date));
			}

			$allinstallments = \fee_installments::where('fee_invoice_id', $value->invoiceId)->get();

			if (count($allinstallments) > 0) {
				$value->countInstallments = count($allinstallments);
				$value->intallments = "";
				$value->paymentStatus = 4;

				$total_install_paid_amount = 0;
				$total_installment_fine_amount = 0;
				$total_installment_discount_amount = 0;
				foreach ($allinstallments as $key_cheque => $value_cheque) {
					$installment_status = $value_cheque->paid_status;

					$value_cheque->intallmentId = $value_cheque->id;
					$value_cheque->installment_amount = $value_cheque->installment_amount;

					$value_cheque->paid_status = ($value_cheque->paid_status == 1) ? 'Paid' : 'Due';
					$value_cheque->due_date = ($value_cheque->paid_status == 'Due') ? date('d-m-Y', strtotime($value_cheque->due_date)) : "";

					$value->intallments .= $key_cheque + 1 . ". ";

					$value->intallments .= $value_cheque->installment_amount . "  ";

					if ($installment_status == 1) {
						$value->intallments .= "<span style='color:green;'> Paid" . $value_cheque->installment_amount;
					} else if ($installment_status == 0) {
						$value->intallments .= "<span style='color:red;'>" . $value_cheque->paid_status . " On " . $value_cheque->due_date;
					} else if ($installment_status == 2) {
						$get_all_fee_installment_payements = \fee_payment_collection_status::where('fee_installment_id', $value_cheque->id)->where('status', 1)->get();
						if (!empty($get_all_fee_installment_payements)) {
							foreach ($get_all_fee_installment_payements as $key5 => $value5) {
								$total_install_paid_amount += $get_all_fee_installment_payements[$key5]->collectionAmount;
								$total_installment_fine_amount += $get_all_fee_installment_payements[$key5]->fine_amount;
								$total_installment_discount_amount += $get_all_fee_installment_payements[$key5]->discount_amount;
							}
						}
						$Bal_amount = $value_cheque->installment_amount - $total_install_paid_amount + $total_installment_fine_amount - $total_installment_discount_amount;

						$value->intallments .= "<span style='color:#fd9b15;'> Partial/ Paid: " . $total_install_paid_amount . " /Bal: " . $Bal_amount;
						if ($total_installment_fine_amount <> 0) {
							$value->intallments .= " Fine: " . $total_installment_fine_amount;
						}
						if ($total_installment_discount_amount <> 0) {
							$value->intallments .= " Discount: " . $total_installment_discount_amount;
						}
					} else {
						$value->intallments .= "<span style='color:red;'>" . $value_cheque->paid_status;
					}
					$value->intallments .= "<br></span>";
				}
			}


			$studentIdForParentsOf = $value->studentId;
			$value->parentNo1 = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('mobileNo');
			if (empty($value->parentNo1)) {
				$value->parentNo1 = 'N/A';
			}
			$value->parentNo2 = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('phoneNo');
			if (empty($value->parentNo2)) {
				$value->parentNo2 = 'N/A';
			}
			$value->parentName = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('fullName');
			if (empty($value->parentName)) {
				$value->parentName = 'N/A';
			}
		}

		// echo "<pre>";
		// print_r($toReturn);
		// exit;
		return $toReturn;
	}

	/* <!-- Collecting all invoices at a time controller function --> */
	function saveMultipleDueInvoices()
	{
		$Invoices = \Input::get('due_fee_invoices');
		$paidMethod = \Input::get('paidMethod');

		if (!empty($paidMethod) && $paidMethod == "cheque") {
			return $this->panelInit->apiOutput(false, "Failed", "All Invoices Collection Through Cheques Function Is Under Developement");
		}
		$pendingChequeCount = 0;
		foreach ($Invoices as $key => $value) {
			$pendingChequeCount += \fee_payment_collection_status::where('fee_collection_id', $Invoices[$key]['invoiceId'])->where('status', 0)->count();
		}
		if ($pendingChequeCount != 0) {
			return $this->panelInit->apiOutput(false, "Failed", "Payment unsuccessful due to pending cheques.");
		}

		$allInvoices = array_reverse($Invoices);
		foreach ($allInvoices as $key => $value) {
			$fee_installments = \fee_installments::where('fee_invoice_id', $allInvoices[$key]['invoiceId'])->get()->toArray();
			if (empty($fee_installments)) {
				$fee_collecton_update = \fee_collection::find($allInvoices[$key]['invoiceId']);
				$paymentAmount = $fee_collecton_update->paymentAmount;
				$paidAmount = $fee_collecton_update->paidAmount;
				$balanceAmount = $paymentAmount - $paidAmount;
				$fee_collecton_update->paidAmount = $paymentAmount;
				$fee_collecton_update->paymentStatus = 1;
				$fee_collecton_update->save();

				$fee_payment_collection_status = new \fee_payment_collection_status();
				$fee_payment_collection_status->fee_collection_id = $allInvoices[$key]['invoiceId'];
				$fee_payment_collection_status->collectionAmount = $balanceAmount;
				$fee_payment_collection_status->collectionDate = date('Y-m-d H:i:s');
				$fee_payment_collection_status->collectionMethod = 'cash';
				$fee_payment_collection_status->status = 1;
				$fee_payment_collection_status->collectedBy = $this->data['users']->id;
				$fee_payment_collection_status->save();
			} else {
				$fee_collecton_update = \fee_collection::find($allInvoices[$key]['invoiceId']);
				$paymentAmount = $fee_collecton_update->paymentAmount;
				$paidAmount = $fee_collecton_update->paidAmount;
				$balanceAmount = $paymentAmount - $paidAmount;
				$fee_collecton_update->paidAmount = $paymentAmount;
				$fee_collecton_update->paymentStatus = 1;
				$fee_collecton_update->save();

				foreach ($fee_installments as $kee => $value) {
					$fee_installment_paid_amount = \fee_payment_collection_status::where('fee_installment_id', $fee_installments[$kee]['id'])->where('status', 1)->sum('collectionAmount');
					if (empty($fee_installment_paid_amount)) {
						$fee_installment_paid_amount = 0;
					}
					$fee_installment_update = \fee_installments::find($fee_installments[$kee]['id']);
					$installment_amount = $fee_installment_update->installment_amount;
					$fee_installment_update->paid_status = 1;
					$fee_installment_update->save();

					$fee_installment_due_amount = $installment_amount - $fee_installment_paid_amount;
					$fee_payment_collection_status = new \fee_payment_collection_status();
					$fee_payment_collection_status->fee_collection_id = $allInvoices[$key]['invoiceId'];
					$fee_payment_collection_status->fee_installment_id = $fee_installments[$kee]['id'];
					$fee_payment_collection_status->collectionAmount = $fee_installment_due_amount;
					$fee_payment_collection_status->collectionDate = date('Y-m-d H:i:s');
					$fee_payment_collection_status->collectionMethod = 'cash';
					$fee_payment_collection_status->status = 1;
					$fee_payment_collection_status->collectedBy = $this->data['users']->id;
					$fee_payment_collection_status->save();
				}
			}
		}
		// ======================================================================Fee Optimization codes: 09.11.2019: Rohit Kamat======================================================================//
		// foreach ($allInvoices as $key => $value) {
		// 	$fee_payment_collection_status_var = \fee_payment_collection_status::where('fee_collection_id', $allInvoices[$key]['invoiceId'])->where('status', 1)->sum('collectionAmount');

		// 	if ($fee_payment_collection_status_var <> null) {
		// 		$feeTemp = \fee_collection::where('id', $allInvoices[$key]['invoiceId'])->first();
		// 		$feeTemp->paidAmount	= $fee_payment_collection_status_var;
		// 		$feeTemp->save();
		// 	}
		// }
		// ======================================================================Fee Optimization codes: 09.11.2019: Rohit Kamat======================================================================//

		return $this->panelInit->apiOutput(true, "Invoice Collection", "Due Invoice collected successfully");
	}

	/* <!-- Fetching Payments data Controller Function --> */
	public function fetchPayments($page = 1)
	{
		$school_id = $this->data['users']->school_id;

		$query = DB::table('fee_payment_collection_status')
			->select('fee_payment_collection_status.*', 'users.fullName', 'users.studentClass', 'users.studentSection', 'users.studentRollId', 'sections.sectionTitle', 'classes.className', 'fee_collection.paymentStudent')
			->leftJoin('fee_collection', 'fee_collection.id', '=', 'fee_payment_collection_status.fee_collection_id')
			->leftJoin('users', 'users.id', '=', 'fee_collection.paymentStudent')
			->leftJoin('classes', 'classes.id', '=', 'users.studentClass')
			->leftJoin('sections', 'sections.id', '=', 'users.studentSection')
			->where('fee_collection.school_id', $school_id)
			->where('fee_collection.fee_group_id', '!=', 0)
			->orderBy('fee_collection.created_date', 'DESC');

		$toReturn['totalItems'] = $query->count();
		$toReturn['paymentData'] = $data = $query->take('25')->skip(25 * ($page - 1))->get();
		$toReturn['totalPages'] = $totalPages = ceil($counter = $toReturn['totalItems'] / 25);

		$indexing = 0;
		for ($i = max($page - 3, 1); $i <= max(1, min($totalPages, $page + 3)); $i++) {
			$toReturn['pages'][$indexing] = $i;
			$indexing++;
		}


		$toReturn['totalCollection'] = 0;
		foreach ($data as $key => $value) {

			$studentIdForParentsOf = $value->paymentStudent;
			$value->parentNo1 = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('mobileNo');
			if (empty($value->parentNo1)) {
				$value->parentNo1 = 'N/A';
			}
			$value->parentNo2 = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('phoneNo');
			if (empty($value->parentNo2)) {
				$value->parentNo2 = 'N/A';
			}

			$toReturn['totalCollection'] += $data[$key]->collectionAmount;
			$toReturn['paymentData'][$key]->collectionDate = date('d-m-Y', strtotime($data[$key]->collectionDate));
		}
		return $toReturn;
	}

	/* <!-- Fetching Payments advance filtered data Controller Function --> */
	public function fetchPaymentsAdv($page = 1)
	{
		// $pageNo = 1;
		$classId =  \Input::get('classId');
		$searchStudent = \Input::get('searchStudent');
		$fromDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', \Input::get('fromDate'))));
		$toDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', \Input::get('toDate') . ' 23:59:59')));
		$school_id = $this->data['users']->school_id;

		$query = DB::table('fee_payment_collection_status')
			->select('fee_payment_collection_status.*', 'users.fullName', 'users.studentRollId', 'users.studentClass', 'users.studentSection', 'sections.sectionTitle', 'classes.className', 'fee_collection.paymentStudent')
			->leftJoin('fee_collection', 'fee_collection.id', '=', 'fee_payment_collection_status.fee_collection_id')
			->leftJoin('users', 'users.id', '=', 'fee_collection.paymentStudent')
			->leftJoin('classes', 'classes.id', '=', 'users.studentClass')
			->leftJoin('sections', 'sections.id', '=', 'users.studentSection')
			->where('fee_collection.school_id', $school_id)
			->where('fee_collection.fee_group_id', '!=', 0)
			->orderBy('fee_collection.created_date', 'DESC');
		if ($searchStudent) {
			$query->where(function ($q) use ($searchStudent) {
				$q->where('users.fullName', 'like', "%$searchStudent%");
			});
		}
		if ($classId) {
			$query->where('users.studentClass', $classId);
		}
		if ($fromDate && $toDate) {
			$query->whereBetween('fee_payment_collection_status.collectionDate', array($fromDate, $toDate));
		}
		$toReturn['totalItems'] = $query->count();
		$toReturn['paymentData'] = $data = $query->take('25')->skip(25 * ($page - 1))->get();
		$toReturn['totalPages'] = $totalPages = ceil($counter = $toReturn['totalItems'] / 25);

		$indexing = 0;
		for ($i = max($page - 3, 1); $i <= max(1, min($totalPages, $page + 3)); $i++) {
			$toReturn['pages'][$indexing] = $i;
			$indexing++;
		}


		$toReturn['totalCollection'] = 0;
		foreach ($data as $key => $value) {
			$studentIdForParentsOf = $value->paymentStudent;
			$value->parentNo1 = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('mobileNo');
			if (empty($value->parentNo1)) {
				$value->parentNo1 = 'N/A';
			}
			$value->parentNo2 = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('phoneNo');
			if (empty($value->parentNo2)) {
				$value->parentNo2 = 'N/A';
			}

			$toReturn['totalCollection'] += $data[$key]->collectionAmount;
			$toReturn['paymentData'][$key]->collectionDate = date('d-m-Y', strtotime($data[$key]->collectionDate));
		}
		return $toReturn;
	}

	/* <!-- Exporting payemnts data into PDF/Excel controller function --> */
	public function exportCollectionReport()
	{

		$toReturn = array();


		$toReturn['data'] = $Formdata =  \Input::get('form');
		$toReturn['exportType'] = $exportType = $Formdata['exportType'];

		// return $toReturn;

		$school_id = $this->data['users']->school_id;
		$query = DB::table('fee_payment_collection_status')
			->select(
				'fee_payment_collection_status.*',
				'users.fullName',
				'users.studentClass',
				'users.studentSection',
				'users.studentRollId',
				'users.mobileNo',
				'sections.sectionTitle',
				'classes.className',
				'fee_collection.paymentStudent'
			)
			->leftJoin('fee_collection', 'fee_collection.id', '=', 'fee_payment_collection_status.fee_collection_id')
			->leftJoin('users', 'users.id', '=', 'fee_collection.paymentStudent')
			->leftJoin('classes', 'classes.id', '=', 'users.studentClass')
			->leftJoin('sections', 'sections.id', '=', 'users.studentSection')
			->where('fee_collection.school_id', $school_id)
			->where('fee_collection.fee_group_id', '!=', 0)
			->orderBy('fee_collection.created_date', 'DESC');

		if (!empty($Formdata['searchStudent'])) {
			$searchStudent = $Formdata['searchStudent'];
			$query->where(function ($q) use ($searchStudent) {
				$q->where('users.fullName', 'like', "%$searchStudent%");
			});
		}

		if (!empty($Formdata['classId'])) {
			$classId = $Formdata['classId'];
			$query->where('users.studentClass', $classId);
		}

		if (!empty($Formdata['fromDate']) && !empty($Formdata['toDate'])) {
			$fromDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $Formdata['fromDate'])));
			$toDate = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $Formdata['toDate'] . ' 23:59:59')));
			$query->whereBetween('fee_payment_collection_status.collectionDate', array($fromDate, $toDate));
		}

		$collection_invoices = $query->get();

		/*----------- for PDF ------------------------- */
		if ($exportType == 'pdf') {

			$data = array();
			$school_name = \schools::where('id', $school_id)->value('school_name');
			$school_address = \schools::where('id', $school_id)->value('address');
			foreach ($collection_invoices as $key => $value) {
				$studentIdForParentsOf = $value->paymentStudent;
				$value->mobileNo = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
					$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
						->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
						->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
				})->value('mobileNo');
				if (empty($value->mobileNo)) {
					$value->mobileNo = 'N/A';
				}
				$data[] = array(
					'sl' => $key + 1,
					'invoiceId' => $value->fee_collection_id,
					'payment_id' => $value->id,
					'collectionDate' => date('d-m-Y', strtotime($value->collectionDate)),
					'collectionAmount' => $value->collectionAmount,
					'fullName' => $value->fullName,
					'className' => $value->className,
					'sectionTitle' => $value->sectionTitle,
					'studentRollId' => $value->studentRollId,
					'parentmob' => $value->mobileNo,
					'parentName' => \User::where('school_id', $school_id)->where('parentOf', 'LIKE', '%\"' . $value->paymentStudent . '\"%')->value('fullName')
				);
				$key++;
			}


			$doc_details = array(
				"title" => "Collection Invoice List",
				"author" => $this->data['panelInit']->settingsArray['siteTitle'],
				"topMarginValue" => 10,
				"mode" => 'L'
			);

			$pdfbuilder = new \PdfBuilder($doc_details);

			$content = "<table cellspacing=\"0\" cellpadding=\"4\" border=\"1\" >";
			$content .= "<tr><th colspan=\"9\" align=\"left\" ><b>" . $school_name . "</b> (" . $school_address . ")</th></tr>";
			if (!empty($fromDate) && !empty($toDate)) {
				$content .= "<tr><th colspan=\"9\" align=\"left\" ><b>Collection Invoice List</b> (Duration: " . date('d/m/Y', strtotime($fromDate)) . " to " . date('d/m/Y', strtotime($toDate)) . ")</th></tr>";
			} else {
				$content .= "<tr><th colspan=\"9\" align=\"left\" ><b>Collection Invoice List</b></th></tr>";
			}

			/* ========================================================================= */
			/*                Total width of the pdf table is 1017px                     */
			/* ========================================================================= */
			$content .= "<thead>";
			$content .= "<tr><th style=\"width:50Px; font-weight:bold;\" align=\"center\">Sl.</th>";
			$content .= "<th style=\"width:50Px; font-weight:bold;\" align=\"center\">Inv Id</th>";
			$content .= "<th style=\"width:90px; font-weight:bold;\" align=\"center\">Payment ID</th>";
			$content .= "<th style=\"width:100px; font-weight:bold;\" align=\"center\">Payment Date</th>";
			$content .= "<th style=\"width:120Px; font-weight:bold;\" align=\"center\">Payment Amt (₹)</th>";
			$content .= "<th style=\"width:160px; font-weight:bold;\" align=\"center\">Student Name</th>";
			$content .= "<th style=\"width:87Px; font-weight:bold;\" align=\"center\">Class - Sec</th>";
			$content .= "<th style=\"width:70px; font-weight:bold;\" align=\"center\">Roll No.</th>";
			$content .= "<th style=\"width:160Px; font-weight:bold;\" align=\"center\">Parent / Gaurdian</th>";
			$content .= "<th style=\"width:130Px; font-weight:bold;\" align=\"center\">Parent Mobile</th>";
			$content .= "</tr></thead><tbody>";
			$collectionAmountpdf = 0;

			foreach ($data as $key => $row) {

				$content .= "<tr>";
				$content .= "<td style=\"width:50Px;\" align=\"right\">" . $row['sl'] . "</td>";
				$content .= "<td style=\"width:50Px;\" align=\"right\">" . $row['invoiceId'] . "</td>";
				$content .= "<td style=\"width:90px;\" align=\"right\">" . $row['payment_id'] . "</td>";
				$content .= "<td style=\"width:100px;\" align=\"right\">" . $row['collectionDate'] . "</td>";
				$content .= "<td style=\"width:120Px;\" align=\"right\">" . $row['collectionAmount'] . ".00</td>";
				$content .= "<td style=\"width:160px;\" align=\"left\">" . $row['fullName'] . "</td>";
				$content .= "<td style=\"width:87Px;\" align=\"left\">" . $row['className'] . " - " . $row['sectionTitle'] . "</td>";
				$content .= "<td style=\"width:70px;\" align=\"right\">" . $row['studentRollId'] . "</td>";
				$content .= "<td style=\"width:160Px;\" align=\"left\">" . $row['parentName'] . "</td>";
				$content .= "<td style=\"width:130Px;\" align=\"right\">" . $row['parentmob'] . "</td>";

				$content .= "</tr>";
				$collectionAmountpdf += $row['collectionAmount'];
			}
			$collectionAmountpdf = $this->moneyFormatIndia($collectionAmountpdf);
			$content .= '<tr><td colspan="3"></td><td style="font-weight:bold;">Total Amount</td><td align="right">' . $collectionAmountpdf . '</td><td colspan="3"></td></tr>';
			$content .= "</tbody></table>";

			$pdfbuilder->table($content, array('border' => '0', 'align' => ''));
			$pdfbuilder->output('Collection_invoice.pdf');
			exit;
		}


		if ($exportType == 'excel') {

			if (!empty($fromDate) && !empty($toDate)) {
				$data = array(1 => array("Collection Invoice List (" . date('d/m/Y', strtotime($fromDate)) . " to " . date('d/m/Y', strtotime($toDate)) . ")"));
			} else {
				$data = array(1 => array("Collection Invoice List"));
			}
			$data[] = array('Sl No.', 'Invoice ID', 'Payment ID', 'Payment Date', 'Payment Amount', 'Student Name', 'Class', 'Sec', 'Roll No.', 'Parent / Gaurdian', 'Parent Mobile');


			foreach ($collection_invoices as $key => $value) {
				$studentIdForParentsOf = $value->paymentStudent;
				$value->mobileNo = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
					$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
						->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
						->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
				})->value('mobileNo');
				if (empty($value->mobileNo)) {
					$value->mobileNo = 'N/A';
				}
				$value->parent = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
					$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
						->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
						->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
				})->value('fullName');
				if (empty($value->parent)) {
					$value->parent = 'N/A';
				}
				$data[] = array(
					$key + 1,
					$value->fee_collection_id,
					$value->id,
					date('d-m-Y', strtotime($value->collectionDate)),
					$value->collectionAmount,
					$value->fullName,
					$value->className,
					$value->sectionTitle,
					$value->studentRollId,
					$value->parent,
					$value->mobileNo
				);
			}

			\Excel::create('Collection Invoice List', function ($excel) use ($data) {

				// Set the title
				$excel->setTitle('Fee Invoices');

				// Chain the setters
				$excel->setCreator('Paatham')->setCompany('Paatham');

				$excel->sheet('Fees', function ($sheet) use ($data) {
					$sheet->freezePane('A3');
					$sheet->mergeCells('A1:I1');
					$sheet->fromArray($data, null, 'A1', true, false);
					$sheet->setColumnFormat(array('I1' => '@'));
				});
			})->download('xls');
		}
	}

	/* <!-- Searching student for fee creation Controller Function --> */
	public function searchStudentForFee($index)
	{

		$toReturn = DB::table('users')
			->select('users.id as userId', 'users.fullName as studentName', 'users.studentRollId as studentRoll', 'users.studentClass as studentClassId', 'users.studentSection as studentSectionId', 'sections.sectionTitle as studentSection', 'classes.className as studentClass')
			->leftJoin('classes', 'classes.id', '=', 'users.studentClass')
			->leftJoin('sections', 'sections.id', '=', 'users.studentSection')
			->orderBy('users.studentClass', 'ASC')
			->where('users.school_id', $this->panelInit->authUser['school_id'])
			->where('users.role', 'student')
			->where('users.activated', 1)
			->where(function ($q) use ($index) {
				$q->where('users.username', 'like', '%' . $index . '%')
					->orWhere('users.email', 'like', '%' . $index . '%')
					->orWhere('users.studentRollId', $index)
					->orWhere('users.fullName', 'like', '%' . $index . '%');
			});
		$toReturn = $toReturn->get();

		foreach ($toReturn as $key => $value) {
			$studentIdForParentsOf = $value->userId;
			$value->parentmob = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('mobileNo');
			if (empty($value->parentmob)) {
				$value->parentmob = 'N/A';
			}
			$value->parentName = \DB::table('users')->where('school_id', $this->panelInit->authUser['school_id'])->where(function ($q) use ($studentIdForParentsOf) {
				$q->where('parentOf', 'like', '%\"' . $studentIdForParentsOf . '\"%')
					->orWhere('parentOf', 'like', '%:' . $studentIdForParentsOf . '%')
					->orWhere('parentOf', 'like', '%: ' . $studentIdForParentsOf . '%');
			})->value('fullName');
			if (empty($value->parentName)) {
				$value->parentName = 'N/A';
			}
		}

		return $toReturn;
	}

	/* <!-- Fetching Fee Group For Bulk fee Creation Controller Function --> */
	public function fetchFeeGroupBulkFunction($studentClass)
	{
		$feeGroupId = \fee_group_master::where('class_id', $studentClass)->get();
		return $feeGroupId;
	}

	/* <!-- Fetching class For fee Creation Controller Function --> */
	public function fetchClassesFunction()
	{
		$classes = \classes::select('id as classId', 'className')->where('school_id', $this->panelInit->authUser['school_id'])->get();
		return $classes;
	}

	/* <!-- Fetching Fee Group For Single fee Creation Controller Function --> */
	public function fetchFeegroupsFunction($classId = null)
	{
		# code...
		$feeGroups = \fee_group_master::where('school_id', $this->panelInit->authUser['school_id'])->where('class_id', $classId)->get();
		return $feeGroups;
	}

	/* <!-- Fetching Class students For Fee Creation Controller Function --> */
	public function fetchClassStudentsFunction($classId = null)
	{
		# code...
		$classStudentList = DB::table('users')->select('users.id as studentId', 'users.fullName as studentName', 'sections.sectionTitle as studentSection', 'users.studentRollId as studentRoll')
			->leftJoin('sections', 'sections.id', '=', 'users.studentSection')
			->where('school_id', $this->panelInit->authUser['school_id'])
			->where('studentClass', $classId)
			->where('activated', 1)
			->get();

		return $classStudentList;
	}

	/* <!-- fetch Fee Particulars For Single Student Controller Function --> */
	public function fetchFeeParticularsForSingleStudentFunction($feegroupId = null, $studentId = null)
	{
		# code...
		$toReturn = array();

		$checkStudentsFeeGroup = \feeheads::where('fee_group_id', $feegroupId)->whereIn('user_id', [0, $studentId])->get();


		if (!empty($checkStudentsFeeGroup)) {
			$toReturn['fee_particulars'] = $checkStudentsFeeGroup;
		}


		$totalAmount = 0;
		if (!empty($toReturn['fee_particulars'])) {
			foreach ($toReturn['fee_particulars'] as $key => $value) {
				$toReturn['fee_particulars'][$key]->amount = $toReturn['fee_particulars'][$key]->amount * $toReturn['fee_particulars'][$key]->unit;
				$totalAmount += $toReturn['fee_particulars'][$key]->amount;
			}
			$toReturn['grandTotal'] = $totalAmount;
		}
		return $toReturn;
	}

	/* <!-- fetch Fee Particulars For Bulk Student Controller Function --> */
	public function fetchFeeParticularsForBulkStudentFunction($feegroupId = null)
	{
		# code...
		$toReturn = array();

		$checkStudentsFeeGroup = \feeheads::where('fee_group_id', $feegroupId)->where('user_id', 0)->get();


		if (!empty($checkStudentsFeeGroup)) {
			$toReturn['fee_particulars'] = $checkStudentsFeeGroup;
		}


		$totalAmount = 0;
		if (!empty($toReturn['fee_particulars'])) {
			foreach ($toReturn['fee_particulars'] as $key => $value) {
				$toReturn['fee_particulars'][$key]->amount = $toReturn['fee_particulars'][$key]->amount * $toReturn['fee_particulars'][$key]->unit;
				$totalAmount += $toReturn['fee_particulars'][$key]->amount;
			}
			$toReturn['grandTotal'] = $totalAmount;
		}
		return $toReturn;
	}

	public function moneyFormatIndia($num)
	{
		$explrestunits = "";
		if (strlen($num) > 3) {
			$lastthree = substr($num, strlen($num) - 3, strlen($num));
			$restunits = substr($num, 0, strlen($num) - 3); // extracts the last three digits
			$restunits = (strlen($restunits) % 2 == 1) ? "0" . $restunits : $restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
			$expunit = str_split($restunits, 2);
			for ($i = 0; $i < sizeof($expunit); $i++) {
				// creates each of the 2's group and adds a comma to the end
				if ($i == 0) {
					$explrestunits .= (int) $expunit[$i] . ","; // if is first value , convert into integer
				} else {
					$explrestunits .= $expunit[$i] . ",";
				}
			}
			$thecash = $explrestunits . $lastthree;
		} else {
			$thecash = $num;
		}
		$thecash .= '.00';
		return $thecash; // writes the final format where $currency is the currency symbol.
	}
}
