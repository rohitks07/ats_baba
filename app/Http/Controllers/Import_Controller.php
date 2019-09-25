<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tbl_post_contacts;
use DB;
require 'vendor/autoload.php';
use Maatwebsite\Excel\Facades\Excel;
use PhpSpreadsheet\PhpSpreadsheet\Spreadsheet;
use PhpSpreadsheet\PhpSpreadsheet\Reader\Csv;
use PhpSpreadsheet\PhpSpreadsheet\Reader\Xlsx;

class Import_Controller extends Controller 
{
   
			public function import()
			{
			$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			 
			if(isset($_FILES['Upload_exe']['name']) && in_array($_FILES['Upload_exe']['type'], $file_mimes)) {
			 
			    $arr_file = explode('.', $_FILES['Upload_exe']['name']);
			    $extension = end($arr_file);
			 
			    if('csv' == $extension) {
       				 $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			    } else {
			       
        			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			    }
			 
			    $spreadsheet = $reader->load($_FILES['Upload_exe']['tmp_name']);
			     
			    $sheetData = $spreadsheet->getActiveSheet()->toArray();
			    // echo "<pre>";
			    // print_r($sheetData);
			    // exit;
			    			    foreach ($sheetData as $key => $value){
			     	$contact_list = new Tbl_post_contacts();
			     		//$contact_list=$value->id;
					    $contact_list->company_name = $sheetData[$key][0];
					    $contact_list->designation=$sheetData[$key][1];
					    $contact_list->sub_name=$sheetData[$key][2];
					    $contact_list->cont_per_name=$sheetData[$key][3];
					    $contact_list->phone_c=$sheetData[$key][4];
					    $contact_list->phone_w=$sheetData[$key][5];
					    $contact_list->email_h=$sheetData[$key][6];
					    $contact_list->email_w=$sheetData[$key][7];
					    $contact_list->country=$sheetData[$key][8];
					   	$contact_list->state=$sheetData[$key][9];
					    $contact_list->city=$sheetData[$key][10];
					    $contact_list->status=$sheetData[$key][11];
					    // $contact_list->created_date=$sheetData[$key][12];
					    $mydate=date('Y-m-d');
					    $contact_list->created_by=$mydate;
						$contact_list->last_updated_by=90;
						$contact_list->last_updated_date=$mydate;
						$contact_list->employer_id=$sheetData[$key][16];
						$contact_list->save();
			     }
			     $msg="DataSheet Import Done";
			     return redirect('employer/my_posted_contacts')->with('msg',$msg); 

			}
			else
			{
				$msg="DataSheet is not Upload";
			     return redirect('employer/my_posted_contacts')->with('msg',$msg); 
			}
			}



 }
