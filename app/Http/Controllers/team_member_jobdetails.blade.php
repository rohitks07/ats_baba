@include('include.emp_header')
@include('include.emp_leftsidebar')
<style type="text/css">
	.table td, .table th {
		padding: 4px;
		vertical-align: top;
		border-top: 1px solid #eaeaea;
		font-size: 13px;
		color: #444;
	}
	#wrapper {
		overflow: hidden;
		width: 100%;
		overflow-y: scroll;
	}
	.d-none{
		font-size: 17px;
		color: #fff;
		background: #317eeb;	
	}
	h3 {
		line-height: 30px;
		font-size: 24px;
		/* background: #317eeb; */
		color: #317eeb;
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
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<ul class="nav nav-tabs nav-justified" role="tablist" style="background: #317eeb;">

							<li class="nav-item">
								<a class="nav-link active" id="home-tab-1" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="false">
									<span class="d-none d-sm-block">Job Details</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab-1" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="true">
									<span class="d-none d-sm-block">Potential Matches</span>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" id="message-tab-1" data-toggle="tab" href="#message-1" role="tab" aria-controls="message-1" aria-selected="false">
									<span class="d-none d-sm-block">Application</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="setting-tab-1" data-toggle="tab" href="#setting-1" role="tab" aria-controls="setting-1" aria-selected="false">
									<span class="d-none d-sm-block">Client Submittals</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="setting-tab-1" data-toggle="tab" href="#finish-1" role="tab" aria-controls="setting-1" aria-selected="false">
									<span class="d-none d-sm-block">History</span>
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">
								<div class="row">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 col-sm-12 col-12">
														<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Location</th>
																	<th>Visa</th>
																	<th>Skills</th>
																	<th>Exp. (Year)</th>
																	<th>Mobile</th>
																	<th>Email(H)</th>
																	<th>Source</th>
																	<th>Match Percentage</th>
																</tr>
															</thead>
															<tbody>
																<?php foreach ($potentialdata as $key => $value) {

																} ?>
																@if($potentialdata!='')
																@foreach($value->pronames as $key => $val )
																@if($val->first_name!='' && $val->skills!='')
																<tr>
																	<td>{{$val->first_name ?? ''}} {{$val->last_name ?? ''}}</td>
																	<td>{{$val->city ?? ''}} {{$val->state ?? ''}},{{$val->country ?? ''}}</td>
																	<td>{{$val->visa_status ?? ''}}</td>
																	<td>{{$val->skills ?? ''}}</td>
																	<td>{{$val->experience ?? ''}}</td>
																	<td>{{$val->mobile ?? ''}}</td>
																	<td>{{$val->email ?? ''}}</td>
																	<td>INTERNAL</td>
																	<td>{{count($potentialdata)}}</td>
																</tr>
																@endif
																@endforeach
																@endif
															</tbody>
														</table>

													</div>
												</div>
											</div>
										</div>
									</div> 
								</div> <!-- End Row --> 
							</div>
							<div class="tab-pane show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
								<div class="card-body">
									<h2 style="font-weight:100;color:#317eeb;">{{$data[0]->job_code ?? ''}} {{@$data[0]->job_title}}
										<a href=""><i class="fa fa-external-link fa-1x" aria-hidden="true"></i></h2></a>
										<div class="row">
											<div class="col-md-8">
												<table class="table">
													<tbody>													   
														<tr>
															<td>Industry:</td>													
															<td>{{$industry['industry_name'] ?? ''}}</td>														  
														</tr>
														<tr>
															<td>Total Positions:</td>
															<td>{{@$data[0]->vacancies}}</td>
														</tr>
														<tr>
															<td>Job Type:</td>
															<td>{{@$data[0]->job_mode}}</td>
														</tr>
														<tr>
															<td>Salary:</td>
															<td>{{@$data[0]->pay_min}}</td>
														</tr>
														<tr>
															<td>Job Location:</td>
															<td>{{@$data[0]->country}},{{@$data[0]->state}},{{@$data[0]->city}}</td>
														</tr>
														<tr>
															<td>Minimum Education:</td>
															<td>{{@$data[0]->qualification}}</td>
														</tr>
														<tr>
															<td>Minimum Experience:</td>
															<td>{{@$data[0]->experience}}</td>
														</tr>
														<tr>
															<td>Apply By:</td>
															<td>{{@$data[0]->dated}}</td>
														</tr>
														<tr>
															<td>Job Posting Date:</td>
															<td>{{@$data[0]->last_updated_by}}</td>
														</tr>
													</tbody>
												</table>
												<br>

												<h3>Job Description</h3>
												<p>{{@$data[0]->job_description}}</p>

												<h3>Skills Required</h3>
												<hr>
												<button type="button" class="btn btn-outline-primary">{{@$data[0]->required_skills}}</button>&nbsp;&nbsp;
														<!-- <button type="button" class="btn btn-outline-primary">react js</button>&nbsp;&nbsp;
														<button type="button" class="btn btn-outline-primary">HTML</button>&nbsp;&nbsp;
														<button type="button" class="btn btn-outline-primary">css</button> -->
														<hr>

													</div>
													<div class="col-md-8">
														<table class="table">
															<tbody>
																<tr>
																	<td>Jobe code:</td>
																	<td>{{@$data[0]->job_code ?? ''}}</td>
																</tr>
																<tr>
																	<td>Job Title:</td>
																	<td>{{@$data[0]->job_title}}</td>
																</tr>
																<tr>
																	<td>Qualification:</td>
																	<td>{{@$data[0]->qualification}}</td>
																</tr>
																<tr>
																	<td>Client Name:</td>
																	<td>{{@$data[0]->client_name}}</td>
																</tr>
																<tr>
																	<td>Job Slug:</td>
																	<td>{{@$data[0]->job_slug}}</td>
																</tr>
																<tr>
																	<td>Job Duration:</td>
																	<td>{{@$data[0]->job_duration}}</td>
																</tr>
																<tr>
																	<td>Is Featured:</td>
																	<td>{{@$data[0]->is_featured}}</td>
																</tr>
																<tr>
																	<td>Status:</td>
																	<td>{{@$data[0]->sts}}</td>
																</tr>
																<tr>
																	<td>Created By:</td>
																	<td>{{@$data[0]->dated}}</td>
																</tr>
																<tr>
																	<td>Last Updated Date:</td>
																	<td>{{@$data[0]->last_updated_date}}</td>
																</tr>
																<tr>
																	<td>Last Updated By:</td>
																	<td>{{@$data[0]->last_updated_by}}</td>
																</tr>
															</tbody>
														</table>
													</div> 

												</div>             
											</div>  
										</div>

										<div class="tab-pane" id="message-1" role="tabpanel" aria-labelledby="message-tab-1">
											<div class="row">
												<div class="col-md-12 col-sm-12 col-12">
													<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">   
														<thead>
															<tr>
																<th>Submittal Date</th>
																<th>Candidate</th>
																<th>Age</th>
																<th>Location</th>
																<th>Exp.</th>
																<th>Pay Rate</th>
																<th>Visa</th>
																<th>Email</th>
																<th>Mobile</th>
															</tr>
														</thead>


														<tbody>
															<tr>
																<td>02/19/2019</td>
																<td>Anusha Chava</td>
																<td>F 0</td>
																<td>Milpitas, CA</td>
																<td>0.0</td>
																<td> </td>
																<td>EAD-H4</td>
																<td>ui.anusha@gmail.com</td>
																<td>408.674.0655</td>
															</tr>
															<tr>
																<td>03/12/2019</td>
																<td>Meena Lingampalli</td>
																<td>F 0</td>
																<td>Pleasanton, CA, CA</td>
																<td>0.0</td>
																<td> </td>
																<td>EAD-H4</td>
																<td>meenakumariui@gmail.com</td>
																<td>440.201.9682</td>
															</tr>
															<tr>
																<td>04/18/2019</td>
																<td>MostArjuman Sultana</td>
																<td>F 0</td>
																<td>San Jose, CA</td>
																<td>0.0</td>
																<td> </td>
																<td>EAD-H4</td>
																<td>msultana663@gmail.com</td>
																<td>510.858.1182</td>
															</tr>
															<tr>
																<td>04/22/2019</td>
																<td>Rajashekharreddy Banda</td>
																<td>F 0</td>
																<td>San Diego, CA</td>
																<td>0.0</td>
																<td> </td>
																<td>H1 Visa</td>
																<td>bandaui0704@gmail.com</td>
																<td>510.925.5355</td>
															</tr>
															<tr>
																<td>04/26/2019</td>
																<td>Tasneem Pathan</td>
																<td>F 0</td>
																<td>Livermore, CA, CA</td>
																<td>0.0</td>
																<td> </td>
																<td>Green Card</td>
																<td>tasneem.pathan04@gmail.com</td>
																<td>929.456.2005</td>
															</tr>
														</tbody>
													</table>

												</div>
											</div>

										</div>
										<div class="tab-pane" id="setting-1" role="tabpanel" aria-labelledby="setting-tab-1">
											<div class="row">
												<div class="col-md-12 col-sm-12 col-12">
													<table id="datatable-fixed-header" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
														<thead>

															<tr>
																<th>Submittal Date</th>
																<th>Job Code</th>
																<th>Job Title</th>
																<th>Job TYPE</th>
																<th>Location</th>
																<th>Required Skills</th>
																<th>Candidate Name</th>
																<th>Mobile</th>
																<th>Email</th>
																<th>Visa</th>
																<th>Qualification</th>
															</tr>
														</thead>

													</table>

												</div>
											</div>

										</div>
										<div class="tab-pane" id="finish-1" role="tabpanel" aria-labelledby="setting-tab-1">
											<div class="row">
												<div class="col-lg-12">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col-md-12 col-sm-12 col-12">
																	<table id="datatable-keytable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
																		<thead>
																			<tr>
																				<th>Date & Time</th>
																				<th>User Name</th>
																				<th>Change Log</th>
																			</tr>
																		</thead>


																		<tbody>
																			<tr>
																				<td>02/19/2019 17:08:34</td>
																				<td>Abhishek Kumar</td>
																				<td>Created</td>
																			</tr>
																		</tbody>
																	</table>

																</div>
															</div>
														</div>
													</div>
												</div>

											</div> <!-- End Row -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('include.emp_footer')