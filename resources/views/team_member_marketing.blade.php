@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
    input[type=text],
    textarea,
    {
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        outline: none;
        padding: 15px 71px 1px 4px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
    }
    
    input[type=text]:focus,
    textarea:focus {
        -moz-box-shadow: 0 0 5px #51cbee;
        -webkit-box-shadow: 0 0 5px #51cbee;
        box-shadow: 0 0 5px #51cbee;
        border: 1px solid #51cbee;
    }
    input[type=email],
    textarea,
    {
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        outline: none;
        padding: 15px 71px 1px 4px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
    }
    
    input[type=email]:focus,
    textarea:focus {
        -moz-box-shadow: 0 0 5px #51cbee;
        -webkit-box-shadow: 0 0 5px #51cbee;
        box-shadow: 0 0 5px #51cbee;
        border: 1px solid #51cbee;
    }
    
    label {
        width: 100%;
        float: left;
    }
    
    label {
        font-weight: 200;
        font-family: inherit;
        font-size: 15px;
    }
    
    input[type=text] {
        width: 50%;
        padding: 7px;
        border-radius: 5px;
    }
    input[type=email] {
        width: 50%;
        padding: 7px;
        border-radius: 5px;
    }
    
    textarea {
        border-radius: 5px;
        width: 48%;
    }
    
    span.red {
        color: red;
    }
    
    input[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 84%;
        background: #fff;
    }
    
    select[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 84%;
        background: #fff;
    }
    
    textarea[class="form-control"] {
        border: 1px solid #bdbcbc;
        background: #fff;
        width: 84%;
    }
    
    #wrapper {
        width: 100%;
        overflow-y: scroll;
    }
    
    .tabs li.tab {
        background-color: #317eeb;
        display: block;
        float: left;
        margin: 0;
        text-align: center;
    }
    
    .nav.nav-tabs > li > a,
    .nav.tabs-vertical > li > a {
        background-color: transparent;
        border-radius: 0;
        border: none;
        color: #ffffff !important;
        cursor: pointer;
        line-height: 50px;
        padding-left: 20px;
        padding-right: 20px;
        font-size: 18px;
    }
    
    .nav.nav-tabs + .tab-content {
        background: #ffffff;
        margin-bottom: 30px;
        padding: 10px;
    }
    
    .nav.nav-tabs > li > a.active {
        background-color: #e8faf8;
        border: 0;
    }
    
    .tabs .indicator {
        background-color: #e8faf8;
        bottom: 0;
        height: 2px;
        position: absolute;
        will-change: left, right;
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
    font-size: 14px;
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
</style>
<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <div class="mini-stat" style="background-color:#F56854; border-radius:10px;">
                        <div class="mini-stat-info  text-dark">
                            <h1><span>0</span></h1>
                            <h4><p style="color: #fff;">Campaigns <i class="fa fa-volume-up  text-right" style="float: right;color:#fff;font-size:25px;"></i></p></h4>
                            <p style="color: #fff;">So far You Have Created.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mini-stat" style="background-color:#04A557; border-radius:10px;">
                        <div class="mini-stat-info  text-dark">
                            <h1><span>0</span></h1>
                            <h4><p style="color: #fff;">SubScribers <i class="fa fa-users text-right" style="float: right;color:#fff;font-size:25px;"></i></p></h4>
                            <p style="color: #fff;">In This Account Right Now.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mini-stat" style="background-color:#02C1EE; border-radius:10px;">
                        <div class="mini-stat-info  text-dark">
                            <h1><span>0</span></h1>
                            <h4><p style="color: #fff;">Scheduled <i class="fa fa-calendar  text-right" style="float:right;color:#fff;font-size:25px; "></i></p></h4>
                            <p style="color: #fff;">Will be Sent On Selected Date.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mini-stat" style="background-color:#0262A1; border-radius:10px;">
                        <div class="mini-stat-info  text-dark">
                            <h1><span>0</span></h1>
                            <h4><p style="color: #fff;">Email Sent <i class="fa fa-envelope-square  text-right" style="float: right;color:#fff;font-size:25px;"></i></p></h4>
                            <p style="color: #fff;">Total Emails Sent So Far Using This App.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs tabs" role="tablist">
                    <li class="nav-item tab">
                        <a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#campaigns" role="tab" aria-controls="home-2" aria-selected="false"><span class="d-none d-sm-block">Campaigns </span></a>
                    </li>
                    <li class="nav-item tab">
                        <a class="nav-link" id="ContactsEmails" data-toggle="tab" href="#contacts" role="tab" aria-controls="profile-2" aria-selected="true"><span class="d-none d-sm-block">Contacts </span>
                                 </a>
                    </li>
                    <li class="nav-item tab" id="taab">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#templates" role="tab" aria-controls="profile-2" aria-selected="true"><span class="d-none d-sm-block">Templates </span>
                        </a>
                    </li>
                    <li class="nav-item tab" id="taab">
                    </li>
                    <li class="nav-item tab" id="taab">
                    </li>
                    <li class="nav-item tab" id="taab">
                    </li>
                </ul>
                <div class="tab-content" style="width: 100%;">
                    <div class="tab-pane show active" id="campaigns" role="tabpanel" aria-labelledby="home-tab-2">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs tabs" role="tablist">
                                <li class="nav-item tab">
                                    <a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#home-2" role="tab" aria-controls="home-2" aria-selected="false"><span class="d-none d-sm-block">Compose</span>
                                    </a>
                                </li>
                                <li class="nav-item tab">
                                    <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#profile-2" role="tab" aria-controls="profile-2" aria-selected="true"><span class="d-none d-sm-block">Send Items</span>
                                	</a>
                                </li>
                                <li class="nav-item tab" id="taab">
                                </li>
                                <li class="nav-item tab" id="taab">
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
                                    <div class="card-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" action="{{url('employer/market_mail')}}" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token()  }}">
                                                <div class="form-group row">
                                                    <label for="password" class="control-label col-lg-4">Email To<span class="red">*</span></label>
                                                    <div class="col-lg-8">
                                                        <input type="email" placeholder="To" name="email_to" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="CC" class="control-label col-lg-4">CC</label>
                                                    <div class="col-lg-8">
                                                        <input type="email" placeholder="CC" name="cc" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Subject" class="control-label col-lg-4">Subject<span class="red">*</span></label>
                                                    <div class="col-lg-8">
                                                    <input type="text" placeholder="Subject" name="subject" required> 
                                                    <input type="button" value="Template" name="tempalate" id="get_template" onclick="get_template_function();">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Subject" class="control-label col-lg-4">Select Template<span class="red">*</span></label>
                                                    <div class="col-lg-8">
                                                        <select id="template_content" class="form-control" style="width: 50%;">
                                                            <option>Select</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <!-- <p id="content"></p> -->
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Subject" class="control-label col-lg-4">Email Content<span class="red">*</span></label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control" name="email_content" required id="et_content" placeholder="Discription" style="height: 200px"></textarea>
                                                    </div> 
                                                </div>
                                                <div align="center">
                                                    <a href="{{url('employer/schedule')}}">
                                                        <input type="button" class="btn btn-info" value="Schedule">
                                                    </a>
                                                        <input type="submit" class="btn btn-info" value="Send">
                                                </div>
                                            </form>
                                        </div>
                                        <!-- .form -->
                                    </div>
                                    <!-- card-body -->
                                </div>
                                <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Subject</th>
                                                        <th>Sent To</th>
                                                        <th>Sent Cc</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($toReturn['email'] as $emailList)
                                                    <tr>
                                                        <td>{{$emailList->emailer_subject}}</td>
                                                        <td>{{$emailList->emailer_to}}</td>
                                                        <td>{{$emailList->emailer_cc}}</td>
                                                        <td>{{$emailList->emailer_status}}</td>
                                                    </tr>
                                                    @endforeach()
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- End Row -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-content" style="width: 100%;">
                    <div class="tab-pane show active" id="contacts" role="tabpanel" aria-labelledby="ContactsEmails">

                        <div class="col-md-12">
                            <ul class="nav nav-tabs tabs" role="tablist">
                                <li class="nav-item tab">
                                    <a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#ContactsList" role="tab" aria-controls="home-2" aria-selected="false"><span class="d-none d-sm-block">Contacts</span></a>
                                </li>
                                <li class="nav-item tab">
                                    <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#EmailList" role="tab" aria-controls="profile-2" aria-selected="true"><span class="d-none d-sm-block">Email List</span>
                                 </a>
                                </li>
                                <li class="nav-item tab" id="taab">
                                </li>
                                <li class="nav-item tab" id="taab">
                                </li>
                            </ul>
                            <div class="tab-content" >
                            	<div class="tab-pane" id="ContactsList" role="tabpanel" aria-labelledby="profile-tab-2">
                                    <div class="card-body" id="contactdetails" >
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12">
                                            <a><button type="button" class="btn btn-success" id="addcontact" style="float: right;margin-right: 1em;">Add Contact</button></a>
                                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Phone (C)</th>
                                                            <th>Phone (W)</th>
                                                            <th>Email (H)</th>
                                                            <th>Email (W) </th>
                                                            <th>Location</th>
                                                            <th>Company</th>
                                                            <th>Designation</th>
                                                            <th>Actions	</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                     @foreach($toReturn['contacts'] as $contact_object)                                         
                                                        <tr> 
                                                        <?php $id=$contact_object->id; ?>
                                                            <td>{{$contact_object -> cont_per_name}}</td>
                                                            <td>{{$contact_object -> phone_c }}</td>
                                                            <td>{{$contact_object -> phone_w }}</td>
                                                            <td>{{$contact_object -> email_h}}</td>
                                                            <td>{{$contact_object -> email_w}}</td>
                                                            <td>{{$contact_object -> state}},{{$contact_object -> city}}</td>
                                                            <td>{{$contact_object -> company_name}}</td>
                                                            <td>{{$contact_object -> designation}}</td>
                                                            <td class="actions">
                                                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fa fa-pencil"></i></a>
                                                            <a href="{{url('employer/marketing/contactdelete/'.$id)}}"  class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fa fa-trash-o"></i></a>
                                                            </td>  	                                              																							
                                                        </tr>  
                                                    @endforeach        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- End Row -->
                                    </div>
                                    <div class="card-body" id="contactform" style="display:none;">
                                    <span><button type="button" class="btn btn-primary  waves-effect waves-light pull-right contactlist">List Contact</button></span>
                                    <div>
                                            <form action="{{url('employer/marketing/addcontact')}}" method="post">       
                                            <input type="hidden" name="_token" value = "{{ csrf_token()  }}" >                        
                                            <div class="form-group row" style="width: 101%;">
                                            <label class="col-sm-4 control-label">Salutation</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="salutation" style="width:50%; border: 1px solid #737373; background: #fff">
                                                    @foreach($toReturn['salutation'] as $salutation)
												        <option>{{$salutation['salutation']}}</option>
												    @endforeach
                                                    </select>
                                               </div>
                                            </div><!--end of Salutation-->
                                            <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Name <span style="color:red;">*</span></label>
                                                <div class="col-lg-8">
                                                     <input type="text" id="" name="name" placeholder="Contact Person Name" required>
                                                </div>
                                            </div>       
                                            <div class="form-group row">
                                                <label for="" class="control-label col-lg-4">Phone (C)</label>
                                                <div class="col-lg-8">
                                                     <input type="text" id="" name="phone_c" placeholder="00.000.000" maxlength="10" >
                                                </div>
                                            </div>    
                                            <div class="form-group row">
                                                <label for="" class="control-label col-lg-4">Phone (W)</label>
                                                <div class="col-lg-8">
                                                     <input type="text" id="" name="phone_w" placeholder="00.000.000"  maxlength="10">
                                                </div>
                                            </div> 
                                        </div>
                                        <!-- <div class="col-md-6">     -->
                                            <div class="form-group row" >
                                                <label for="" class="control-label col-lg-4">Email (H)</label>
                                                <div class="col-lg-8">
                                                     <input type="text" id="" name="email_h" placeholder="Email ID" maxlength="60">
                                                </div>
                                            </div>      
                                            <div class="form-group row">
                                                <label for="" class="control-label col-lg-4">Email (W)</label>
                                                <div class="col-lg-8">
                                                     <input type="text" id="" name="email_w" placeholder="Email ID"  maxlength="60">
                                                </div>
                                            </div>              
                                            <div class="form-group row">
                                                <label for="address" class="control-label col-lg-4">Address </label>
                                                <select name="country" id="country" class="form-control"style="width:17%; border: 1px solid #737373; margin-left: 9px; background:#fff;">
                                                <option value="" selected>Select Country</option>
                                                @foreach($toReturn['countries'] as $countries)
												    <option>{{$countries['country_name']}}</option>
												@endforeach
                                                </select>
                                                <select name="state" id="state_text" class="form-control"style="max-width:17%; margin-left: 9px; border: 1px solid #737373; background:#fff;">
                                                <option value="" selected>Select State</option>
                                                <option value="AK" >AK</option>   
                                                </select>
                                                <input type="text" name="city" class="form-control" id="city" placeholder="City" maxlength="150" style="width:17%; margin-left:1em; background:#fff;">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label">Employer</label>
                                                <div class="col-sm-8">
                                                     <select name="company_name" id="company_name" class="form-control" style="background:#fff;">
                                                      <option value="" selected>Select Company</option>
                                                        @foreach($toReturn['team_member_type'] as $team_member_type)
												        <option>{{$team_member_type['type_name']}}</option>
												        @endforeach
                                                    </select>
                                               </div>
                                            </div>             
                                            <div class="form-group row">
                                                <label for="" class="control-label col-lg-4">Designation</label>
                                                    <div class="col-lg-8">
                                                         <input type="text" id="Designation" name="designation">
                                                    </div>
                                            </div>
                                        <!-- </div> -->
                                        <br><br>
                                            <div class="col-md-12" style="background: #dadada; height: 85px;"><br>
                                            <center><a href="{{url('post_new_contacts')}}"><button class="btn btn-info waves-effect waves-light m-b-5" type="submit">Post Contact</button> </a></center>
                                            </form>
                                    </div>                                                                      
                                </div> <!-- card-body -->

                            </div> <!-- card -->
                           
                                    </div>
                                </div>
                                <div class="tab-pane" id="EmailList" role="tabpanel" aria-labelledby="profile-tab-2">
                                    <div class="card-body" >
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12">
                                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Email List Name </th>
                                                            <th>Description</th>
                                                            <th>Privacy</th>
                                                            <th>Active</th>
                                                            <th>Date Created</th>
                                                            <th>Created By</th>
                                                            <th>Last Updated</th>
                                                            <th>Last Updated By</th>
                                                            <th>Actions	</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                    @foreach($toReturn['emailList'] as $email_list)                                   
                                                    <tr>  
                                                        <?php $id = $email_list->id; ?>                                                   
                                                        <td>{{$email_list->name}}</td>
                                                        <td>{{$email_list->description}}</td>
                                                        <td>{{$email_list->privacy_flag}}</td>
                                                            <td>{{$email_list->active_flag}}</td>
                                                        <td>{{date('d-m-Y',strtotime($email_list->created_date))}}</td>
                                                        <td>{{$email_list->created_by}}</td>
                                                            <td>{{date('d-m-Y',strtotime($email_list->last_updated_date))}}</td>
                                                        <td>{{$email_list->last_updated_by}}</td>
                                                        <td class="actions">
                                                        <a href="{{url('employer/marketing/emaillistdelete/'.$id)}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fa fa-trash-o"></i></a>
                                                        <a href="#" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </td>  	                                              																								
                                                    </tr>  
                                                    @endforeach
    															</tbody>
                                                </table>
                                            </div>
                                        </div><!-- End Row -->
                                    </div>
                                </div>
                            </div>
                     	</div>
                     </div>
                     <div class="tab-content" style="width: 100%;">
		           		<div class="tab-pane" id="templates" role="tabpanel" aria-labelledby="templates">
                            <div class="card-body" id="templateslist" style="display:block;">
		                        <div class="row">
		                            <div class="col-md-12 col-sm-12 col-12">
		                            	<span><button type="button" class="btn btn-primary waves-effect pull-right  waves-light" id="addtemplate">Add Template</button></span><br><br>
		                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
		                                    <thead>
		                                        <tr>
		                                            <th>Template Name</th>
		                                            <th>Created Date</th>
		                                            <th>Last Updated Date</th>
		                                            <th>Action</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
                                            @foreach($toReturn['email_Template'] as $template)
                                                <?php  $id=$template->et_id; ?>
		                                        <tr>
		                                            <td>{{$template->et_sender_name}}</td>
		                                            <td>{{$template->created_date}}</td>
		                                            <td>{{$template->last_updated_date}}</td>
		                                            <td>
                                                    <a href="" data-toggle="modal" data-target="#" onclick="editTemplate(<?php echo $id; ?>);"  class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="Edit" name="editbtn" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{url('employer/emailTemplate/delete/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                        <a href="" onclick="sendTemplate(<?php echo $id; ?>);" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send template"><i class="fa fa-mail-o"></i>edit</a>

                                                    </td>
		                                        </tr>
		                                        @endforeach
		                                    </tbody>
		                                </table>
		                            </div>
		                        </div>
		                    </div>
                         	<div class="card-body" id="templatesform" style="display: none;">
                                <div class="form">
                                    <span><button type="button" class="btn btn-primary  waves-effect waves-light pull-right listtemplate">List Template</button></span><br><br>
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" action="{{url('employer/emailTemplate')}}" method="POST">
                                       @csrf()
                                        <div class="form-group row">
                                          	<label for="password" class="control-label col-lg-4">Template Name*<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" placeholder="Template Name" name="templatesname">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="Subject" class="control-label col-lg-4">Discription<span class="red">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="email_content" id="et_content" placeholder="Discription " style="height: 200px"></textarea>
                                            </div>
                                        </div>
                                        <div align="center">
                                                <input type="submit" class="btn btn-info" value="Save">
                                        </div>
                                    </form>
                                </div>       <!-- .form -->
                            </div>
                                    <!-- card-body -->
                            <div class="card-body" id="edittemplatesform" style="display: none;">
                                <div class="form">
                                <span><button type="button" class="btn btn-primary  waves-effect waves-light pull-right listtemplate" >List Template</button></span><br><br>
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" action="{{url('employer/emailTemplate/updated')}}" method="POST">
                                       @csrf()
                                        <div class="form-group row">
                                          	<label for="password" class="control-label col-lg-4">Template Name*<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="hidden" placeholder="Template Name" id="et_id" name="id">
                                                <input type="text" placeholder="Template Name" id="et_subject" name="templatesname">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="Subject" class="control-label col-lg-4">Discription<span class="red">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="et_content" name="email_content"  placeholder="Discription " style="height: 200px"></textarea>
                                            </div>
                                        </div>
                                        <div align="center">
                                                <input type="submit" class="btn btn-info" value="Save">
                                        </div>
                                    </form>
                                </div>
                                <!-- .form -->
                            </div>
                    	</div>
     				</div> 
             	</div>
         	</div>
        </div>
    </div>
</div>


@include('include.emp_footer')
<script type="text/javascript">
	$("#addtemplate").click(function(){
  $("#templatesform").css('display','block');
  $("#templateslist").css('display','none');
 
  
});
$(".listtemplate").click(function(){
    $("#edittemplatesform").css('display','none');
  $("#templatesform").css('display','none');
  $("#templateslist").css('display','block');
 
  
});
$("#addcontact").click(function()
{
    $("#contactform").css('display','block');
    $("#contactdetails").css('display','none');
});
$(".contactlist").click(function(){
    $("#contactform").css('display','none');
    $("#contactdetails").css('display','block');
 
  
});
</script>
<script>
function editTemplate(id)
{ 
  $("#templatesform").css('display','none');
  $("#templateslist").css('display','none');
  $("#edittemplatesform").css('display','block');
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $.ajax({
                    url: "{{url('employer/emailTemplate/edit')}}"+'/'+id,
                    type: 'get',
                    dataType: "json",
                    success: function(data) {
                            $("#et_id").val(data.et_id);
                            $("#et_subject").val(data.et_subject);
                            $("#et_content").val(data.et_content);
                        console.log(data);

                    }
                });
}

function sendTemplate(id)
{ 
    alert(id);
//   $("#templatesform").css('display','none');
//   $("#templateslist").css('display','none');
//   $("#edittemplatesform").css('display','block');
    // $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    //             });
    //             $.ajax({
    //                 url: "{{url('employer/emailTemplate/edit')}}"+'/'+id,
    //                 type: 'get',
    //                 dataType: "json",
    //                 success: function(data) {
    //                         $("#et_id").val(data.et_id);
    //                         // $("#et_subject").val(data.et_subject);
    //                         $("#article-ckeditor").val(data.et_content);
    //                     console.log(data);

    //                 }
    //             });
}
// function template_list()
// {
//     $("#content").empty();
//     $.ajaxSetup({
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 }
//                 });
//                 $.ajax({
//                     url: "{{url('employer/marketing/listtemplate')}}",
//                     type: 'get',
//                     dataType: "json",

//                     success: function(data) {
//                             $.each(data,function(i,content){
//                             $("#content").append("<option>"+content.et_sender_name+"</option>");
//                         });
//                         console.log(data);

//                     }
//                 });
// }
</script>

<script>
    function get_template_function()
    {
            // alert("dfdfdfdf");
        $("#template_content").html("<option value=''>--Select--</option>"); //empty/blank the option for append

        if($("#get_template").val()) //value throught append
        {
            $.ajax({
                url: "{{url('employer/tempalate/select')}}",
                data: { 'get_template': $("#get_template").val()},     //call_purpose_id send to db for get result according to id 
                method: "GET",
                contentType: 'application/json',
                dataType: "json",
                success: function (data){

                    console.log(data);
                    for(var i=0; i<data.length; i++){
                        $("#template_content").append("<option value='"+data[i].et_id+"'>"+data[i].et_sender_name+"</option>");  //inside option for append
                    }
                }
            });
        }
        // console.log("dfdfdfdfd");
    }
</script>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('et_content', {
        skin: 'moono',
        enterMode: CKEDITOR.ENTER_BR,
        shiftEnterMode: CKEDITOR.ENTER_P,
        toolbar: [{ name: 'basicstyles', groups: ['basicstyles'], items: ['Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor'] },
        { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
        { name: 'scripts', items: ['Subscript', 'Superscript'] },
        { name: 'justify', groups: ['blocks', 'align'], items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
        { name: 'paragraph', groups: ['list', 'indent'], items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
        { name: 'links', items: ['Link', 'Unlink'] },
        // { name: 'insert', items: ['Image'] },
        { name: 'spell', items: ['jQuerySpellChecker'] },
        { name: 'table', items: ['Table'] }
        ],
    });
</script>