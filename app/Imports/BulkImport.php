<?php

namespace App\Imports;
use App\Tbl_post_contacts;
// use App\TestImport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BulkImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $value)
    {
        // return $value;
        // // return new TestImport([
        // // 	'name'=>$row['name'],
        // // 	'email'=>$row['email']
        // 	return new Tbl_post_contacts([
        //     'company_name' => $value['company_name']
        //             ,'sub_name' => $value['sub_name'],'cont_per_name' => $value['cont_per_name'],'phone_c' => $value['phone_c'],'phone_w' => $value['phone_w'],'email_h' => $value['email_h'],'email_w' => $value['email_w'],'country' => $value['country'],'state' => $value['state'],'city' => $value['city'],'status' => $value['status'],'created_date' => $value['created_date'],'created_by' => $value['created_by'],'last_updated_by' => $value['last_updated_by'],'last_updated_date' => $value['last_updated_date'],'employer_id' => $value['employer_id']
        // ]);
        // 	$Tbl_post_contacts->save();
    }
}
