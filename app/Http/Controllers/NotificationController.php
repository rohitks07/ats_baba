<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_notification;
use Session;

class NotificationController extends Controller
{
    public function show_notification()
    {
        $mydate=date('Y-m-d');
    	$notification=Tbl_notification::where('notify_to',Session::get('user_id'))->limit(10)
        ->where('submit_date','=', $mydate)
        // ->orderBy('read_date')
        ->get()->toArray();  
    	return  json_encode($notification);
    }
}