<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\language;
use DB;
require 'vendor/autoload.php';
use Maatwebsite\Excel\Facades\Excel;
use PhpSpreadsheet\PhpSpreadsheet\Spreadsheet;
use PhpSpreadsheet\PhpSpreadsheet\Reader\Csv;
use PhpSpreadsheet\PhpSpreadsheet\Reader\Xlsx;

class languageController extends Controller 
{
   
			public function import()
			{
			$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			 
			if(isset($_FILES['language']['name']) && in_array($_FILES['language']['type'], $file_mimes)) {
			 
			    $arr_file = explode('.', $_FILES['language']['name']);
			    $extension = end($arr_file);
			 
			    if('csv' == $extension) {
       				 $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			    } else {
			       
        			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			    }
			 
			    $spreadsheet = $reader->load($_FILES['language']['tmp_name']);
			     
			    $sheetData = $spreadsheet->getActiveSheet()->toArray();
			    // echo "<pre>";
			    // print_r($sheetData);
			    // exit;
			    			    foreach ($sheetData as $key => $value){
			     	$contact_list = new language();
			     		//$contact_list=$value->id;
					    $contact_list->index1 = $sheetData[$key][0];
					    $contact_list->hindi=$sheetData[$key][1];
					    $contact_list->english=$sheetData[$key][2];
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
            public function view()
            {
                return view('language');
            }


 }
