<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_notification;
use Session;

class NotificationController extends Controller
{
    public function show_notification()
    {
    	$notification=Tbl_notification::where('notification_added_by',7)->limit(10)
        ->where('read_date', '<=', '2019-08-31')
        ->orderBy('read_date')
        ->get();
    	// $session_data = array(
     //            'notification_id'   =>$notification->notification_id,
     //            'notification_text'=>$notification->notification_text,   
     //        );
    	//  Session::put($session_data);
        // foreach ($notification as $key => $value) {
            
        // }    
        // $notification_h='<p>'.$notification['notification_text'].'<p>';
        // print_r($notification);
        // exit;
        // echo $notification;
    	return  json_encode($notification);
    }
    // public function SeenNotifaction()
    // {
    
    // }
}
