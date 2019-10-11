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
 

.table td {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 14px;
    color: #000;
    background:#fff;
}
.table tr {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 10px;
    color: #000;
    background:#fff;
}
.table th {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 14px;
    color: #000;
    background:#e4e4e4;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 0.5px solid #000;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 1px;
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
                <div class="col-md-2">
                    <div class="mini-stat" style="background-color:#317eeb; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-comments-o fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                            <span>{{$toReturn['one_day_job']}} Jobs</span>
                            <p style="color: #fff;">Open Today !!</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/posted_jobs')}}"><span class="pull-left" style="color:#428bca;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#317eeb;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mini-stat" style="background-color:#d9534f; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-tasks fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                            <span>{{$toReturn['total_application']}} Apps</span>
                            <p style="color: #fff;">Received Today !</p>
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
                            <p style="color: #fff;">Submitted !</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('employer/Application')}}"><span class="pull-left" style="color:#5cb85c;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#5cb85c;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mini-stat" style="background-color:#d35400; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-share-alt fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                        <span>{{$toReturn['tota_interview']}} Interview<span>
                            <p style="color: #fff;font-size:15px;">Happening Today !</p>
                        </div>
                        <div class="panel-footer">
                            

                            <a href="{{url('employer/dashboard/interview-meeting')}}"><span class="pull-left"
                                style="color:#d35400 ;">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"
                                    style="color:#d35400 ;margin-top:6%;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mini-stat" style="background-color:#a569bd; border-radius:10px;">
                        <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-calendar fa-1x" style="float: left; margin-top:1em;"></i></span>
                        <div class="mini-stat-info text-right text-dark">
                        <span>{{$toReturn['total_meeting']}} Meeting</span>
                            <p style="color: #fff;">Happening Today !</p>
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
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Title</th>
                                                    <th>Client</th>
                                                    <th>Location</th>
                                                    <th>Status</th>
                                                    <th>Publish Dt.</th>
                                                    <th>Closing Dt.</th>
                                                    <th>Assignees</th>
                                                    <th>Applications</th>
                                                    <th> Actions </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach($toReturn['job_post'] as $job_post)
                                                <input type="hidden" value="{{$job_post['ID']}}">
                                                <?php $id=$job_post['ID'];
                                                $dated=$job_post['dated'];
                                                $last_date=$job_post['last_date']; 
                                                $date_one = date("m-d-Y", strtotime($dated)); 
                                                $date_two = date("m-d-Y", strtotime($last_date)); 
                                                
                                                ?>
                                                 
                                                    
                                                <tr>
                                                    <td>{{$job_post['job_code']}}</td>
                                                    <td>{{$job_post['job_title']}}</td>
                                                    <td>{{$job_post['client_name']}}</td>
                                                    <td>{{$job_post['country']}}</td>
                                                    <td align="center" valign="middle">
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#published{{$job_post['ID']}}">{{$job_post['sts']}}</button>
                                                    </td>
                                                    <td>{{$date_one}}</td>
                                                    <td>{{$date_two}}</td>
                                                    <td class="text-center">
                                                        <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                    </td>
                                                    <td class="actions">
                                                        <a href="{{url('employer/posted_job_assined/'.$id)}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
                                                        <a href="#" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="submit a candidate"><i class="fa fa-user"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- /.modal -->
                                                <div id="published{{$job_post['ID']}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title mt-0">{{$job_post['job_code']}}</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{url('job_application/sts')}}" method="post">
                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                    <div class="modal-body">
                                                                        <div class="form-group row">
                                                                            <input type="hidden" name="id" value="{{$job_post['ID']}}">
                                                                            <label for="address" class="control-label col-md-12">Status:<span style="color:red;">*</span></label>
                                                                            <select name="sts" id="sts" class="form-control">
                                                                                <option value="{{$job_post['sts']}}">Draft</option>
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
                        </div><!--end of card-header-->
                      
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
                                        ?>
                                        <td>{{$application['job_code']}}</td>
                                        <td>{{$application['job_title']}}</td>
                                        <td>{{$application['job_client_name']}}</td>
                                        <td>{{$application['location']}}</td>
                                        <td>{{$application['job_visa']}}</td>
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
</body>

</html>  