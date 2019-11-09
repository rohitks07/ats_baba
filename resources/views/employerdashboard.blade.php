@include('include.emp_header')
@include('include.emp_leftsidebar')
                            <div id="wrapper">
                                <div class="content-page">
                                    <div class="content">
                                        <div class="row" style="margin-left: 1em;width: 121%;">
                                            <div class="col-md-2 widget widget1">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-comments-o icon-rounded"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/posted_jobs')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Jobs Detail" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['one_day_job']}}Jobs</strong></h5>
                                                    <span>Open Today</span> 
                                                    </div>
                                                </div>               
                                            </div>
                                            <div class="col-md-2 widget widget1">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-tasks user1 icon-rounded"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/Application')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Application Details" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['today_application']}} Apps</strong></h5>
                                                    <span>Received Today !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 widget widget1">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-support user2 icon-rounded"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/search_resume')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Resume Detail" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['today_resume']}} Resume</strong></h5>
                                                    <span>Work In Progress !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 widget widget1">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-share-alt dollar1 icon-rounded"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/dashboard/interview-meeting')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Interview Details" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['today_interview']}} Interview</strong></h5>
                                                    <span>Happening Today !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2 widget">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-calendar dollar2 icon-rounded"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/dashboard/interview-meeting')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Meeting Details" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['today_meeting']}} Meeting</strong></h5>
                                                    <span>Happening Today !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    <!-- End row--><br>
                                    <div class="row" style="margin-left: 1em;width: 121%;">
                                            <div class="col-md-2 widget widget1">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-comments-o dollar1 icon-rounded" style="background: #f76834;"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/dashboard/interview-meeting')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Total Jobs Detail" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['tota_interview']}} Jobs</strong></h5>
                                                    <span>Total Jobs !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 widget widget1">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-file-word-o dollar1 icon-rounded" style="background: #8BC34A;"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/search_resume')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Resume Details" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['total_resume']}} Resume</strong></h5>
                                                    <span>Total Submitted !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 widget widget1">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-check-circle dollar1 icon-rounded" style="background: #09c1b0;"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/Application')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Application Details" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['total_application']}} Application</strong></h5>
                                                    <span> Total Applications !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 widget widget1">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-user-plus icon-rounded" style="background: #dc0202;"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/dashboard/interview-meeting')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Total Interviews" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['tota_interview']}} Interviews</strong></h5>
                                                    <span>Total Interviews !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 widget widget1">
                                                <div class="r3_counter_box">
                                                    <i class="pull-left fa fa-calendar dollar1 icon-rounded" style="background: #03A9F4;"></i>
                                                    <div class="stats">
                                                    <a href="{{url('employer/dashboard/interview-meeting')}}"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Total Meetings" style="float: right;"></i></a>
                                                    <h5><strong>{{$toReturn['total_meeting']}} Meetings</strong></h5>
                                                    <span>Total Meetings !</span>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <!--//header-ends -->
                    
                    			
					            <br>
                                <div class="col-xl-12"> 
                                    <div class="card card-border card-info">
                                        <div class="card-header"></div> 
                                            <div class="card-body"> 
                                                <div id="accordion-test-2" class="card-box">
                                                <div class="row"> 
                                                <div class="col-md-6"> 
                                                    <div class="card">
                                                        <div class="card-header bg-info" id="headingOne"style="margin-left: 10px;">
                                                            <h5 class="m-0 card-title">
                                                            <a href="#" class="collapsed" data-toggle="collapse" data-target="#myjob1" aria-expanded="false" aria-controls="collapseOne-2">Jobs by Publish Date</a></h5>
                                                        </div>
                                
                                                        <div id="myjob1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-test-2">
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
                                                        </div>
                                                    </div>
                                                    </div>
                                                                    
                                            <div class="col-md-6">                      
                                                <div class="card">
                                                    <div class="card-header bg-info" id="headingOne"style="margin-right: 10px;">
                                                        <h5 class="m-0 card-title">
                                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#myjob2" aria-expanded="false" aria-controls="collapseOne-2">Jobs by Closing Date</a></h5>
                                                    </div>
                                
                                                    <div id="myjob2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-test-2">
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
                                                        </div><!--end of card body-->
                                                    </div>
                                                </div>
                                                </div> 
                                               </div>
                                                                    
                                                                    
                                                
                                        <div class="row"> 
                                            <div class="col-md-6">   
                                                <div class="card">
                                                    <div class="card-header bg-info" id="headingThree"style="margin-left: 10px;">
                                                        <h5 class="m-0 card-title">
                                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#myjob3" aria-expanded="false" aria-controls="collapseThree-2">
                                                           Calendar: Next Interviews
                                                        </a>
                                                        </h5>
                                                    </div>
                                                    <div id="myjob3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-test-2">
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
                                                                                    <th>Time Zone</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($toReturn['interview'] as $interview)
                                                                                <tr>
                                                                                      <?php $interview_date=$interview['interview_date']; 
                                                                                            $new_date = date("m-d-Y", strtotime($interview_date)); 

                                                                                            $data_time = DB::table('tbl_time_zone')->where('time_zone_name',$interview['time_zone'])->first();
                                                                                            $static_time = $data_time->change_time;
                                                                                            $cal_value = $data_time->cal_value;
                                                                                            if($cal_value == "+"){
                                                                                                $secs = strtotime($interview['from_time'])-strtotime("00:00");
                                                                                                $result = date("H:i A",strtotime($static_time)+$secs);
                                                                                            }
                                                                                            else{
                                                                                                $secs = strtotime($interview['from_time'])-strtotime("00:00");
                                                                                                $result = date("H:i A",strtotime($static_time)-$secs);
                                                                                            }
                                                                                    ?>
                                                                                    <td>{{$new_date}}</td>
                                                                                        <td>{{$result}}</td>
                                                                                    <td>{{$interview['job_ID']}}</td>
                                                                                    <td>{{$interview['candiate_name']}}</td>
                                                                                    <td>{{$interview['interview_type']}}</td>
                                                                                    <td>{{$interview['time_zone']}}</td>
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div><!--end of col-->
                                                            </div><!--end of row-->
                                                        </div><!--end of card body-->
                                                    </div>
                                                </div>
                                            </div>
                                                
                                              <div class="col-md-6">  
                                                <div class="card">
                                                    <div class="card-header bg-info" id="headingThree"style="margin-right: 10px;">
                                                        <h5 class="m-0 card-title">
                                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#myjob4" aria-expanded="false" aria-controls="collapseThree-2">
                                                           Calendar: Next Meetings
                                                        </a>
                                                        </h5>
                                                    </div>
                                                    <div id="myjob4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-test-2">
                                                         <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Date</th>
                                                                                    <th>Time</th>
                                                                                    <th>Subject</th>
                                                                                    <th>Participant</th>
                                                                                    <th>Time Zone</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($toReturn['meeting'] as $meeting)
                                                                                <?php 
                                                                                            $meeting_date=$meeting['dated']; 
                                                                                            $new_date = date("m-d-Y", strtotime($meeting_date)); 
                                                                                            $data_time = DB::table('tbl_time_zone')->where('time_zone_name',$meeting['timezone'])->first();
                                                                                            $static_time = $data_time->change_time;
                                                                                            $cal_value = $data_time->cal_value;
                                                                                            if($cal_value == "+"){
                                                                                                $secs = strtotime($meeting['meeting_time'])-strtotime("00:00");
                                                                                                $result = date("H:i A",strtotime($static_time)+$secs);
                                                                                            }
                                                                                            else{
                                                                                                $secs = strtotime($meeting['meeting_time'])-strtotime("00:00");
                                                                                                $result = date("H:i A",strtotime($static_time)-$secs);
                                                                                            }
                                                                                ?>
                                                                                <tr>
                                                                                    <td>{{$new_date}}</td>
                                                                                    <td>{{$result}}</td>
                                                                                    <td>{{$meeting['subject']}}</td>
                                                                                    <td>{{$meeting['participants']}}</td>
                                                                                    <td>{{$meeting['timezone']}}</td>
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div><!--end of table-->
                                                                </div><!--end of col-->
                                                            </div> <!--end of row-->
                                                        </div><!--end of card body -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>         
                                                
                                                
                                            <!-- <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header bg-info" id="headingThree">
                                                        <h5 class="m-0 card-title">
                                                        <a href="#" class="collapsed" data-target="#myjob5" style="color:#fff;">
                                                            Jobs
                                                        </a>
                                                        </h5>
                                                    </div>
                                                    <div id="myjob5" >
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; overflow-x:scroll;" >
                                                                            <thead>
                                                                                <tr>
                                                                                    <th width="10%">Code</th>
                        			                                                <th width="10%">Title</th>
                        			                                                <th width="10%">Client</th>
                                                                                    <th width="10%">Location</th>
                        			                                                 <th width="5%"># </th>
                        															<th width="8%">Type</th>
                        															<th width="10%">Visa </th>
                        															<th width="10%">Pay Rate</th>
                        			                                                <th width="10%">Publish Date</th>
                        														    <th width="5%">Status</th>                                                    
                        															<th width="8%">Closing Date</th>
                        															<th width="30%"><i class="fa fa-user fa-lg" aria-hidden="true" title="Assignees"></i>&nbsp;<i class="fa fa-file-text fa-lg" aria-hidden="true" title="Application"></i>&nbsp;<i class="fa fa-check-square-o fa-lg" aria-hidden="true" title="Client Submittal"></i></th> 
                        			                                            </tr>
                        			                                        </thead>
                        			                                        <tbody  id="myTable">  
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
                        																<td style="padding:1px;">{{$posted_job['job_code']}}</td>
                        				                                                <td><a href="{{url('employer/jobsdetails/'.$id)}}">{{$posted_job['job_title']}} </a></td>
                        				                                                <td>{{$posted_job['client_name']}}</td>
                        				                                                <td>@if($posted_job['city']){{$posted_job['city']}}, &nbsp;@endif{{$posted_job['state']}}</td>
                        				                                                <td>{{$posted_job['vacancies']}}</td>
                        				                                                <td>{{$posted_job['job_mode']}}</td>
                        																<?php $vis=$posted_job['job_visa_status'];
                                                                                $plus_visa=substr_count("$vis",",");
                                                                                $sh=explode(",",$vis);
                                                                                ?>
                                                                                <td onmouseover="visa_type({{$id}});" id="visa{{$id}}"><span id="data1{{$id}}" >{{$sh[0]}}@if($plus_visa!=0),&nbsp;+{{$plus_visa}}@endif</span><span id="data2{{$id}}" style="display:none;" >{{$posted_job['job_visa_status']}}</span></td><td>{{$posted_job['pay_min']}}-{{$posted_job['pay_max']}}</td>													
                        				                                                <td>{{$closing_date}}</td>
                        																<td>{{$posted_job['sts']}}</td>
                        																<td>{{$new_last_Date}}</td>
                                                                                         <td style="display: flex;">
                                                                                             <!--<span class="badge badge-pill badge-primary">{{$assignee}}</span>&nbsp;
                                                                                             <span class="badge badge-pill badge-primary">{{$application}}</span>&nbsp;
                                                                                             <span class="badge badge-pill badge-primary">{{$client_submittal}}</span>
                                                                                             <button type="button" class="btn btn-primary btn-sm" style="padding: 2px;min-width: 20px;min-height: 2px;">{{$assignee}}</button>
                                                                                             <button type="button" class="btn btn-primary btn-sm" style="padding: 2px;min-width: 20px;min-height: 2px;margin-left: 2px;">{{$application}}</button>
                                                                                             <button type="button" class="btn btn-primary btn-sm" style="padding: 2px;min-width: 20px;min-height: 2px;margin-left: 2px;">{{$client_submittal}}</button>
                                                                                        </td>
                        				                                                
                                                                                </tr>
                                
                                                                                <!-- /.modal 
                                                                                <div id="published{{$posted_job['ID']}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h4 class="modal-title mt-0">{{$posted_job['job_code']}}</h4>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <form action="{{url('job_application/sts')}}" method="post">
                                                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                                    <div class="modal-body">
                                                                                                        <div class="form-group row">
                                                                                                            <input type="hidden" name="id" value="{{$posted_job['ID']}}">
                                                                                                            <label for="address" class="control-label col-md-12">Status:<span style="color:red;">*</span></label>
                                                                                                            <select name="sts" id="sts" class="form-control">
                                                                                                                <option value="{{$posted_job['sts']}}">Draft</option>
                                                                                                                <option value="published"> Published</option>
                                                                                                                <option value="on_hold">On Hold</option>
                                                                                                                <option value="deleted">Deleted</option>
                                                                                                                <option value="cancelled">Cancelled</option>
                                                                                                                <option value="closed">Closed</option>
                                                                                                                <option value="pending">Pending</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                                                            <input type="submit" class="btn btn-info" style="background-color:#04B431; color:#fff"  value="Update Status"></button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                        {{$toReturn['job_post']->links()}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>                                            
                                            <!-- <div class="col-md-12">
                                                 <div class="card">
                                                    <div class="card-header bg-info" id="headingTwo">
                                                        <h5 class="m-0 card-title">
                                                        <a href="#" class="collapsed" data-target="#myjob6" style="color:#fff;">
                                                            Job Application
                                                        </a>
                                                        </h5>
                                                    </div>
                                                    <div id="myjob6" class="collapse show" aria-labelledby="headingThree">
                                                                 <div class="card-body" >
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="6">Job Details</th>
                                                                                <th colspan="3">Candidate Details</th>
                                                                                <th>Submittal Date</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <th> Code</th>
                                                                                <th>Title</th>
                                                                                <th>Client</th>
                                                                                <th>Location</th>
                                                                                <th>Visa Type</th>
                                                                                <th>Pay Rate</th>
                                                                                <th>Name</th>
                                                                                <th>Location</th>
                                                                                <th>Visa</th>
                                                                                <th>Date</th>
                                        
                                                                            </tr>
                                                                        </thead>
                                                                <tbody>
                                                                    @foreach($toReturn['application'] as $application)
                                                                    <tr>
                                                                        <?php $date_application=$application['applied_date'];
                                                                        $new_date = date("m-d-Y", strtotime($date_application));
                                                                        $id=$application['application_id'];
                                                                        ?>
                                                                        <td>{{$application['job_code']}}</td>
                                                                        <td>{{$application['job_title']}}</td>
                                                                        <td>{{$application['job_client_name']}}</td>
                                                                        <td>{{$application['location']}}</td>
                                                                        <!--<td>{{$application['job_visa']}}</td>
                                                                        <?php $vis=$application['job_visa'];
                                                                        $plus_visa=substr_count("$vis",",");
                                                                        $sh=explode(",",$vis);
                                                                        ?>          
                                                                        <td onmouseover="visa_type({{$id}});"><span id="data1{{$id}}" >{{$sh[0]}},&nbsp;+{{$plus_visa}}</span><span id="data2{{$id}}" style="display:none">{{$application['job_visa']}}</span></td>
                                                                        <td>{{$application['pay_min']}}-{{$application['pay_max']}}</td>
                                                                        <td>{{$application['can_first_name']}} {{$application['can_last_name']}}</td>
                                                                        <td>{{$application['can_location']}}</td>
                                                                        <td>{{$application['can_visa']}}</td>
                                                                        <td>{{$new_date}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            {{$toReturn['application']->links()}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  -->


                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div><!--end of content-->
                </div><!--end of content-page-->
            </div><!--end of wrapper-->



<script>
    var resizefunc = [];
</script><br><br>
@include('include.emp_footer')
<script>
function visa_type(id)
{
    $("#data1"+id).hover(function(){
    $("#data1"+id).hide();
    $("#data2"+id).show();
       
    },function(){
    $("#data2"+id).hide();
    $("#data1"+id).show();
  });
}
</script>
</body>

</html>  