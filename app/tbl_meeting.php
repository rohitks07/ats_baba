<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_meeting extends Model
{
    public $timestamps = false;
    public $table = "tbl_meetings";
    protected $fillable = ['meeting_ID','meeting_date','meeting_time','subject','meeting_date','participants'];
    
}
