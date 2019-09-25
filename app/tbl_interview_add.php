<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_interview_add extends Model
{
    public $timestamps = false;
    public  $table = "tbl_interview_adds";
    protected $fillable =['id','candiate_name','intervew_date','invitees_to','interview_type','instruction','end_time','from_time'];
    







}
