@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
    .panel-footer {
        padding: 5px 15px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        background-color: #ffffff;
        width: 100%;
        height: 31px;
        /* margin-top: 6px; */
        border-radius: 10px;
        cursor: pointer;
    }
    .mini-stat {
    border-radius: 3px;
    margin-bottom: 5px;
    padding: 10px;
    color: #ffffff;
}
    /* Darker background on mouse-over */
    
    .btn:hover {
        background-color: RoyalBlue;
    }
    
    .mini-stat-info span {
        color: #ffffff;
        display: block;
        font-size: 21px;
        font-weight: 500;
    }

    .card-title {
        font-size: 17px;
        font-weight: 100;
        color: #ffffff;
        margin-bottom: 0;
        margin-top: 0;
        text-transform: none;
    }
    
    .modal .modal-dialog .modal-content .modal-footer {
        padding: 0;
        padding-top: 14px;
        margin-right: 0em;
    }
    
    #wrapper {
        width: 100%;
        overflow-y: scroll;
    }
.card-body {
    flex: 1 1 auto;
    padding: 0.5em;
}
 

table.dataTable thead > tr > th {
    / padding-left: 8px; /
    padding-right: 30px;
}
.table-bordered th {
    border-top: 4px solid #f5f5f5 !important;
    border-bottom: 4px solid #f5f5f5 !important;
    border-right: 4px solid #f5f5f5 !important;
    border-left: 4px solid #f5f5f5 !important;
	color:#000;
	font-size: 13px;
	padding: 0.5em;
}
.table td{
    padding: 0.10rem;
	font-size: 12px;
    padding-left: 1em;
	border-top: 4px solid #f5f5f5 !important;
    border-bottom: 4px solid #f5f5f5 !important;
    border-right: 4px solid #f5f5f5 !important;
    border-left: 4px solid #f5f5f5 !important;
	color:#000;

}
.card-title {
    font-size: 17px;
    font-weight: 400;
    color: #317eeb;
    margin-bottom: 0;
    margin-top: 0;
    text-transform: none;
    font-size: 20px;
    font-family: none;
}
.content-page > .content {
    margin-bottom: -14px;
    margin-top: 62px;
    padding: 20px 10px 15px 10px;
}
.btn-success, .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .btn-success.focus, .btn-success:active, .btn-success:focus, .btn-success:hover, .open > .dropdown-toggle.btn-success {
    /* background-color: #33b86c !important; */
    /* border: 1px solid #33b86c !important; */
    height: 20px;
    width: 100%;
    font-size: 14px;
    text-align: -webkit-center;
}
.btn-success{
    color: #ffffff !important;
}
.btn-success{
    color: #ffffff !important;
    padding: 0px;
    font-size:12px;
}
</style>
<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-md-1">
                    <div class="mini-stat" style="background-color:#317eeb; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-comments-o fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                            <span>{{$toReturn['one_day_job']}} Jobs</span>
                            <p style="color: #fff;">Opened Today !!</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/posted_jobs')}}"><span class="pull-left" style="color:#428bca;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#317eeb;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mini-stat" style="background-color:#317eeb; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-comments-o fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                            <span>{{$toReturn['one_day_job']}} Jobs</span>
                            <p style="color: #fff;">Total Jobs !!</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/posted_jobs')}}"><span class="pull-left" style="color:#428bca;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#317eeb;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mini-stat" style="background-color:#d9534f; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-tasks fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                            <span>{{$toReturn['total_application']}} Application</span>
                            <p style="color: #fff;">Received Today !!</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/Application')}}"><span class="pull-left" style="color:#d9534f">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#d9534f;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mini-stat" style="background-color:#d9534f; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-tasks fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                            <span>{{$toReturn['total_application']}} Application</span>
                            <p style="color: #fff;">Total Application !!</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/Application')}}"><span class="pull-left" style="color:#d9534f">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#d9534f;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mini-stat" style="background-color:#f0ad4e; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-support fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                            <span>{{$toReturn['total_job']}} Jobs</span>
                            <p style="color: #fff;">Work In Process !</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/posted_jobs')}}"><span class="pull-left" style="color:#f0ad4e">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#f0ad4e;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mini-stat" style="background-color:#5cb85c; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-share-alt fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                            <span>{{$toReturn['total_resume']}} Resumes</span>
                            <p style="color: #fff;">Submitted !!</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/Application')}}"><span class="pull-left" style="color:#5cb85c;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#5cb85c;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mini-stat" style="background-color:#d35400; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                            <i class="fa fa-share-alt fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                        <span>{{$toReturn['tota_interview']}} Interview<span>
                            <p style="color: #fff;font-size:15px;">Happening Today !</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/dashboard/interview-meeting')}}"><span class="pull-left"style="color:#d35400 ;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#d35400 ;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mini-stat" style="background-color:#d35400; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                            <i class="fa fa-share-alt fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                        <span>{{$toReturn['tota_interview']}} Interview<span>
                            <p style="color: #fff;font-size:15px;">Total Interview!!</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/dashboard/interview-meeting')}}"><span class="pull-left"style="color:#d35400 ;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#d35400 ;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mini-stat" style="background-color:#a569bd; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-calendar fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                        <span>{{$toReturn['total_meeting']}} Meeting</span>
                            <p style="color: #fff;">Happening Today !!</p>
                        </div>
                        <div class="panel-footer">
                           

                            <a href="{{url('employer/dashboard/interview-meeting')}}"><span class="pull-left"
                                style="color:#a569bd ;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"
                                    style="color:#a569bd ;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mini-stat" style="background-color:#a569bd; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-calendar fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                        <span>{{$toReturn['total_meeting']}} Meeting</span>
                            <p style="color: #fff;">Total Meeting !!</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/dashboard/interview-meeting')}}"><span class="pull-left"
                                style="color:#a569bd ;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"
                                    style="color:#a569bd ;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End row-->
            <!-----------------------------------------------------------------start of first table------------------------------------------------->
            <div class="row">
                <div class="col-md-12">
                <div class="card card-border card-primary">
                        <div class="card-header">
                            <h3 class="card-title" >Jobs by Publish Date</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th style="width:100;"></th>
                                                    <th>{{$toReturn['date'][0]}}</th>
                                                    <th>{{$toReturn['date'][1]}}</th>
                                                    <th>{{$toReturn['date'][2]}}</th>
                                                    <th>{{$toReturn['date'][3]}}</th>
                                                    <th>{{$toReturn['date'][4]}}</th>
                                                    <th>{{$toReturn['date'][5]}}</th>
                                                    <th>{{$toReturn['date'][6]}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Assigned</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td>Work in Process</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Covered Jobs</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Jobs</td>
                                                    <td>{{$toReturn['Publish_DatejobCount'][0]}}</td>
                                                    <td>{{$toReturn['Publish_DatejobCount'][1]}}</td>
                                                    <td>{{$toReturn['Publish_DatejobCount'][2]}}</td>
                                                    <td>{{$toReturn['Publish_DatejobCount'][3]}}</td>
                                                    <td>{{$toReturn['Publish_DatejobCount'][4]}}</td>
                                                    <td>{{$toReturn['Publish_DatejobCount'][5]}}</td>
                                                    <td>{{$toReturn['Publish_DatejobCount'][6]}}</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div><!--end of table-->
                                </div><!--end of col-->
                            </div><!--end of col-->
                        </div><!--end of card body-->
                    </div><!--end of card -->
                </div><!--end of row-->
                </div>
                <div class="row">
                <div class="col-md-12">
                <div class="card card-border card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Jobs by Closing Date</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="datatable2" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%";>
                                            <thead>
                                                <tr>
                                                    <th style="width:100;"></th>
                                                    <th>{{$toReturn['date'][0]}}</th>
                                                    <th>{{$toReturn['date'][1]}}</th>
                                                    <th>{{$toReturn['date'][2]}}</th>
                                                    <th>{{$toReturn['date'][3]}}</th>
                                                    <th>{{$toReturn['date'][4]}}</th>
                                                    <th>{{$toReturn['date'][5]}}</th>
                                                    <th>{{$toReturn['date'][6]}}</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Assigned</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td>Work in Process</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Covered Jobs</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Jobs</td>
                                                    <td>{{$toReturn['close_DatejobCount'][0]}}</td>
                                                    <td>{{$toReturn['close_DatejobCount'][1]}}</td>
                                                    <td>{{$toReturn['close_DatejobCount'][2]}}</td>
                                                    <td>{{$toReturn['close_DatejobCount'][3]}}</td>
                                                    <td>{{$toReturn['close_DatejobCount'][4]}}</td>
                                                    <td>{{$toReturn['close_DatejobCount'][5]}}</td>
                                                    <td>{{$toReturn['close_DatejobCount'][6]}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end of col-->
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of card body-->
                    </div>
                </div>
                </div>  
                
            <div class="row">
                <div class="col-md-12">
                <div class="card card-border card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Calendar: Next Interviews</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;";>
                                            <thead>
                                                <tr>

                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Job Code</th>
                                                    <th>Candidate Name</th>
                                                    <th>Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($toReturn['interview'] as $interview)
                                                <tr>
                                                    <?php $interview_date=$interview['interview_date']; 
                                                          $new_date = date("m-d-Y", strtotime($interview_date)); 
                                                    ?>
                                                    <td>{{$new_date}}</td>
                                                    <td>{{$interview['from_time']}}</td>
                                                    <td>{{$interview['job_ID']}}</td>
                                                    <td>{{$interview['candiate_name']}}</td>
                                                    <td>{{$interview['interview_type']}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end of col-->
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of card body-->
                    </div>
                </div>
            
            </div><!--end of row-->
            
            <!------------------------------------------------------------End of first table---------------------------------------------------------------->
            <!-----------------------------------------------------------------start of second line of table----------------------------------->
            
                
            <div class="row">  
                <div class="col-md-12">
                <div class="card card-border card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Calendar: Next Meetings</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Time</th>
                                                    <th>Subject</th>
                                                    <th>Participant</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($toReturn['meeting'] as $meeting)
                                                <tr>
                                                    <td>{{$meeting['meeting_time']}}</td>
                                                    <td>{{$meeting['subject']}}</td>
                                                    <td>{{$meeting['participants']}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div><!--end of table-->
                                </div><!--end of col-->
                            </div> <!--end of row-->
                        </div><!--end of card body -->
                    </div> <!--end of card -->
                </div><!--end of col-->
            </div><!--end of row-->
            </div>  
         
            <!------------------------------------------------------------End of second table---------------------------------------------------------------->

            <!------------------------------------------------------------start of third table--------------------------------------------------------------->
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col-md-12">
                <div class="card card-border card-primary">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title" style="text-align:left;">Jobs</h3>
                                    <input  id="myInput_jobs" class="form-control form-control-sm col-sm-3" type="search" placeholder="Search..">
                                </div>
                                <div class="col-md-6">
                                    <a href="{{url('employer/posted_jobs')}}"><h3 class="card-title" style="text-align:right;">View All</h3></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="datatablejob" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>                                           
                                            <tr>
                                            <th>Code</th>
			                                <th width="20%">Title</th>
			                                <th>Client</th>
			                                <th width="15%">Location</th>
			                                <th>Positions </th>
											<th>Type</th>
											<th width="7%">Visa Type</th>
											<th width="7%">Pay Rate</th>
			                                <th width="10%">Publish Date</th>
											<th >Status</th>                                                    
											<th width="10%">Closing Date</th>			 
                                            </tr>
                                        </thead>
                                <tbody>
                                @foreach($toReturn['post_job'] as $posted_job) 
														<tr>
															<?php
															$id=$posted_job['ID'];
															$last_date=$posted_job['last_date'];
															$new_last_Date = date("m-d-Y", strtotime($last_date));
															$closing_date=date('m-d-Y',strtotime($posted_job['dated']));
															$application= count(DB::table('tbl_seeker_applied_for_job')->where('job_ID',$id)->get());
															$client_submittal=count(DB::table('tbl_forward_candidate')->where('job_ID',$id)->get());
															$assignee=count(DB::table('tbl_job_post_assign')->where('job_post_id',$id)->get());
                                                        	?>
																<td>{{$posted_job['job_code']}}</td>
				                                                <td><a href="{{url('employer/jobsdetails/'.$id)}}">{{$posted_job['job_title']}} </a></td>
				                                                <td>{{$posted_job['client_name']}}</td>
				                                                <td>@if($posted_job['city']){{$posted_job['city']}}, &nbsp;@endif{{$posted_job['state']}}</td>
				                                                <td>{{$posted_job['vacancies']}}</td>
				                                                <td>{{$posted_job['job_mode']}}</td>
																<?php $vis=$posted_job['job_visa_status'];
                                                        $plus_visa=substr_count("$vis",",");
                                                        $sh=explode(",",$vis);
                                                        ?>
                                                        <td onmouseover="visa_type({{$id}});" id="visa{{$id}}"><span id="data1{{$id}}" >{{$sh[0]}},&nbsp;+{{$plus_visa}}</span><span id="data2{{$id}}" style="display:none;" >{{$posted_job['job_visa_status']}}</span></td>																<td>{{$posted_job['pay_min']}}-{{$posted_job['pay_max']}}</td>													
				                                                <td>{{$closing_date}}</td>
																<td>{{$posted_job['sts']}}</td>
																<td>{{$new_last_Date}}</td>
                                                                
                                                                
                                                                <!-- completed u r here -->
                                                                                                    </tr>
                                    @endforeach
                                </tbody>
                                        </table>
                                        {{$toReturn['job_post']->links()}}
                                    </div>
                                </div>
                                <!--end of col-->
                            </div>
                        </div> <!--end of row-->
                    </div><!--end of card body-->
                </div><!--end of col-->
            </div><!--end of row-->

            
            <!---------------------------------------end  of third table--------------------------------------->
        

            <!--start of third table-->
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col-md-12">
                <div class="card card-border card-primary">
                        <div class="card-header">
                                    <h3 class="card-title" style="text-align:left;">Job Application</h3>
                                    <a href="{{url('employer/Application')}}"><h3 class="card-title" style="text-align:right; margin-top:-35px;">View All</h3></a>
                                        <input  id="myInput" class="form-control form-control-sm col-sm-2" type="search" placeholder="Search..">
                        </div><!--end of card-header-->
                      
               <div class="card-body" >
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                                    <!--<tr>
                                                        <th colspan="6">Job Details</th>
                                                        <th colspan="3">Candidate Details</th>
                                                        <th>Submittal Date</th>

                                                    </tr>-->
                                                    <tr>
                                                    	<th> Code</th>
                                                        <th>Title</th>
                                                        <th>Client</th>
                                                        <th width="10%">Location</th>
                                                        <th width="7%">Visa Type</th>
                                                        <th width="7%">Pay Rate</td>
                                                        <th>Name</td>
                                                        <th width="10%">Location</th>
                                                        <th>Visa</th>
                                                        <th width="7%">Date</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody id="myTable"> 

                                                    @foreach($toReturn['application'] as $application)
                                                    <tr>   
                                                    <?php $id=$application['application_id']; ?>  
                                                        <td>{{$application['job_code']}}</td>
                                                        <td><a href="{{url('employer/dashboard')}}">{{$application['job_title']}}</a></td>
                                                        <td>{{$application['job_client_name']}}</td>
                                                        <td>{{$application['job_city']}},&nbsp;{{$application['job_state']}}</td>
                                                        <?php $vis=$application['job_visa'];
                                                        $plus_visa=substr_count("$vis",",");
                                                        $sh=explode(",",$vis);
                                                        ?>
                                                        <td onmouseover="visa_type_app({{$id}});" id="visa_app{{$id}}">
                                                            <span id="app1{{$id}}" >{{$sh[0]}},&nbsp;+{{$plus_visa}}</span>
                                                            <span id="app2{{$id}}" style="display:none">{{$application['job_visa']}}</span>
                                                        </td>
                                                        <td>{{$application['pay_min']}}-{{$application['pay_max']}}</td>
                                                        <td>{{$application['can_first_name']}} {{$application['can_last_name']}}</td>
                                                        <td>@if($application['seeker_city']){{$application['seeker_city']}},&nbsp;@endif{{$application['seeker_state']}}</td>
                                                        <td>{{$application['can_visa']}}</td>
                                                        <?php $applied_date=date('m-d-Y',strtotime($application['applied_date'])); ?>
                                                        <td>{{$applied_date}}</td>
                                                        </tr>
                                                    @endforeach                                              
                                                </tbody>
                            </table>
                            {{$toReturn['application']->links()}}
                        </div><!--end of table-->
                    </div><!--end of col-->
                </div><!--end of row--> 
            </div> <!--end of card body-->
        </div><!--end of content-->
    </div><!--end of content-page-->
</div><!--end of wrapper-->
</div>



<script>
    var resizefunc = [];
</script><br><br>
@include('include.emp_footer')
<script>
$(document).ready(function(){
$("#myInput").on("keyup", function() {
var value = $(this).val().toLowerCase();
$("#datatable tr").filter(function() {
$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
});
});

$("#myInput_jobs").on("keyup", function() {
var value = $(this).val().toLowerCase();
$("#datatablejob tr").filter(function() {
$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
});
});

});
</script>
<script>
	function visa_type(id)
{
	// alert();
    $("#visa"+id).hover(function(){
    $("#data1"+id).hide();
    $("#data2"+id).show();   
    },function(){
    $("#data2"+id).hide();
    $("#data1"+id).show();
  });
}
</script>
<script>
	function visa_type_app(id)
{
	// alert();
    $("#visa_app"+id).hover(function(){
    $("#app1"+id).hide();
    $("#app2"+id).show();   
    },function(){
    $("#app2"+id).hide();
    $("#app1"+id).show();
  });
}
</script>

</body>

</html>  