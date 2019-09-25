<!DOCTYPE html>
<html lang="en">   
@include('web.header')
<head>
        <meta charset="utf-8" />
        <title>My Posted Job HRMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
		<style>
		.card-body{
				padding: 0.25rem;
			}
			.table-bordered td, .table-bordered th {
				border: 1px solid #4387cc;
			}
				.table thead th {
					vertical-align: bottom;
					border-bottom: 2px solid #51a6fb;
				}
				.table thead th {
					vertical-align: bottom;
					border-bottom: 0px solid #51a6fb;
					/* width: 67%; */
					padding: 6px;
					background-color: honeydew;
					text-align: center;
					color: #095496;
				}
				.card .card-header {
					padding: 10px 20px;
					border: none;
					background: #428bca;
					color: #fff;
				}
				.card-title {
					font-size: 17px;
					font-weight: 100;
					color: #ffffff;
					margin-bottom: 0;
					margin-top: 0;
					text-transform:none;
				}
				.table-bordered td, .table-bordered th {
					border: 1px solid #4387cc;
					padding: 7px;
					text-align: center;
					color: #565656;
				}
				.table-bordered td, .table-bordered th {
					border: 1px solid #4387cc;
					padding: 4px;
					text-align: center;
					color: #4c4c4c;
				}
				.table-striped > tbody > tr:nth-of-type(odd) {
					background-color: #f5f5f5;
					}
					.btn-xs, .btn-group-xs>.btn {
						padding: 1px 5px;
						font-size: 12px;
						line-height: 1.5;
						border-radius: 3px;
					}
					.btn-primary {
						color: #fff;
						background-color: #428bca;
						border-color: #357ebd;
					}
					.modal .modal-dialog .modal-content .modal-footer {
						padding: 0;
						padding-top: 14px;
						margin-right: 5em;
                    }
		</style>
        
    </head>
    <body>                  
            <div class="content-page" style="margin-left:0px;">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row"> 
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" role="tablist" style="border: 1px #1fa0da solid; background-color: #1fa0da;">
								 <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Contact" role="tab" aria-controls="profile" aria-selected="true">
                                            <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                            <span class="d-none d-sm-block">Contact</span>
                                        </a>
                                    </li>
									
                                    <li class="nav-item">
                                        <a class="nav-link active " id="home-tab" data-toggle="tab" href="#Email_List" role="tab" aria-controls="home" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                            <span class="d-none d-sm-block">Email List</span>
                                        </a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link  " id="message-tab" data-toggle="tab" href="#Email_Contact" role="tab" aria-controls="message" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                                            <span class="d-none d-sm-block">Email Contact</span>
                                        </a>
                                    </li>
									
                                   
                                </ul>
                                <div class="tab-content" style="padding:0px;">
								<div class="tab-pane " id="Contact" role="tabpanel" aria-labelledby="profile-tab">
										<!--start of third table-->				                     
											<div class="row">
											<div class="col-md-12">
												<div class="card">
												<div class="col-md-12">
												 <a href="{{url('csv_contact')}}"><button type="button" class="btn btn-success" style="float: right;">Import Contact</button></a>
												  <a href="{{url('employer/post_new_contacts')}}"><button type="button" class="btn btn-success" style="float: right;margin-right: 1em;">Add Contact</button></a>
                                               </div>
													<div class="card-body">
														<div class="row">
															<div class="col-12">
																<div class="table-responsive">
																	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
															<thead>
																<tr>                                                                                                     
																	<th>Name</th>
																	<th>Phone (C)</th>
																	<th>Phone (W)</th>
																	<th>Email (H)</th>
																	<th>Email (W)</th>
																	<th>Location</th>
																	<th>Company</th>
																	<th>Designation</th>
																	<th>Actions</th>
																													  
																</tr>
															</thead>
															<tbody>  
															        @foreach($contacts as $contact_object)                                         
																<tr> 
																<?php $id=$contact_object->id; ?>
																	<td>{{$contact_object -> cont_per_name }}</td>
																	<td>{{$contact_object -> phone_c }}</td>
																	<td>{{$contact_object -> phone_w }}</td>
																	<td>{{$contact_object -> email_h}}</td>
																	<td>{{$contact_object -> email_w}}</td>
																	<td>{{$contact_object -> state}},{{$contact_object -> city}}</td>
																	<td>{{$contact_object -> company_name}}</td>
																	<td>{{$contact_object -> designation}}</td>
																	<td class="actions">
																	<a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fa fa-pencil"></i></a>
																	<a href="{{url('employer/my_posted_contacts/delete/'.$id)}}"  class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fa fa-trash-o"></i></a>
																</td>  	                                              																								
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
											
										</div><!--end of row-->
                <!--end  of third table-->	

                                </div>
                                    <div class="tab-pane  show active " id="Email_List" role="tabpanel" aria-labelledby="home-tab">
												<div class="row">
											<div class="col-md-12">
												<div class="card">
												 <div class="col-md-12">
												 <a href=""><button type="button" class="btn btn-success" style="float: right;">Add an Email List</button></a>
                                               </div>
													<div class="card-body">
														<div class="row">
															<div class="col-12">
																<div class="table-responsive">
																	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
															<thead>
																<tr>                                                                                                     
																	<th>Email List Name</th>
																	<th>Description</th>
																	<th>Privacy</th>
																	<th>Active?</th>
																	<th>Date Created</th>
																	<th>Created By</th>
																	<th>Last Updated</th>
																	<th>Last Updated By</th>
																	<th>Actions</th>
																													  
																</tr>
															</thead>
															<tbody> 
															    @foreach($email as $email_list)                                   
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
																	<a href="{{url('employer/my_posted_contacts/del_email/'.$id)}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fa fa-trash-o"></i></a>
																	<!-- <a href="#" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a> -->
																</td>  	                                              																								
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
											
										</div><!--end of row-->
                                    </div>
                                    
                                    <div class="tab-pane " id="Email_Contact" role="tabpanel" aria-labelledby="message-tab">
															<div class="row">
											<div class="col-md-12">
												<div class="card">
												 <div class="col-md-12">
												 <a href="{{url('uploadcsv')}}"><button type="button" class="btn btn-success" style="float: right;">Import Email Contact</button></a>
												 <a href="{{url('employer/post_new_email_contact/show')}}"><button type="button" class="btn btn-success" style="float: right; margin-right: 1em;">Add an Email Contact</button></a>

										</div>
											<div class="card-body">
												<div class="row">
													<div class="col-12">
														<div class="table-responsive">
															<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
																<thead>
																	<tr>                                                                                                     
																		<th>First Name</th>
																		<th>Last Name</th>
																		<th>Full Name</th>
																		<th>Email List Name</th>
																		<th>Date Created</th>
																		<th>Created By</th>
																		<th>Last Updated</th>
																		<th>Last Updated By</th>
																		<th>Actions</th>
																														
																	</tr>
																</thead>
																<tbody>  
																@foreach($list as $emaillist)                                          
																	<tr>   
																	<?php $id = $emaillist->id; ?>

																		<td>{{$emaillist -> first_name }}</td>
																		<td>{{$emaillist -> last_name }}</td>
																		<td>{{$emaillist -> full_name }}</td>
																		<td>{{$emaillist -> email_list_name }}</td>
																		<td>{{date('d-m-Y', strtotime($emaillist->created_date))}}</td>
																		<!-- <td>{{$emaillist -> created_by }}</td> -->
																		<td>{{$emaillist->id}}</td>
																		<td>{{date('d-m-Y', strtotime($emaillist -> last_updated_date))}}</td>
																		<td>{{$emaillist -> last_updated_by }}</td>
																		<td class="actions">
																		<!-- <a href="" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a> -->
																		<a href="{{url('employer/my_posted_contacts/delete_email/'.$id)}}" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" data-original-title="delete"><i class="fa fa-trash-o"></i></a>
																		</td>  	                                              																								
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
											
										</div><!--end of row-->
                                    </div>
                                   
                                </div>
                            </div>
							
        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- CUSTOM JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.app.js"></script>
	
	</body>

<!-- Mirrored from coderthemes.com/moltran/blue/ui-tabs-accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:47 GMT -->
</html>