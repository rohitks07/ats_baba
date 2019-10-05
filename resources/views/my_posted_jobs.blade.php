@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
		
		.mini-stat-info span {
			color: #ffffff;
			display: block;
			font-size: 21px;
			font-weight: 500;
		}
		
			.card .card-header {
				padding: 10px 20px;
				border: none;
				background: #317eeb;;
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
			.social{
				margin-left: 13%;
			}
			#wrapper{
			    width:100%;
			    overflow-y:scroll;
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
						@if(!empty($toReturn['user_type']=="teammember"))
							@if(@$toReturn['current_module_permission']['is_add']=="yes")                                       
							<a href="{{url('employer/post_new_job')}}">
							<button type="button" class="btn btn-success" style="float:right;">Add a Job</button></a>
							@endif
						@else
						<a href="{{url('employer/post_new_job')}}">
						<button type="button" class="btn btn-success" style="float:right;">Add a Job</button></a>
						@endif
					    </div>
                        	<div class="card-body" style="border: 1px #B0B0B0 solid;">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12">
                                                <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
			                                        <thead>
			                                            <tr>                                                   
			                                                <th>Code</th>
			                                                <th>Title</th>
			                                                <th>Client</th>
			                                                <th>Location</th>
			                                                <th>Positions </th>
															<th>Type</th>
			                                                <th>Publish Date</th>
															<th>Status</th>                                                    
			                                                <th>Closing Date</th>
															<th>Actions</th>     													
			                                            </tr>
			                                        </thead>
			                                        <tbody>  
			                                    	    @foreach($toReturn['post_job'] as $posted_job) 
														<tr>
															<?php
        													$id=$posted_job['ID'];
                                                        	?>
																<td>{{$posted_job['job_code']}}</td>
				                                                <td><a href="{{url('employer/jobsdetails/'.$id)}}">{{$posted_job['job_title']}} </a></td>
				                                                <td>{{$posted_job['client_name']}}</td>
				                                                <td>{{$posted_job['city']}},{{$posted_job['state']}}</td>
				                                                <td>{{$posted_job['vacancies']}}</td>
				                                                <td>{{$posted_job['job_mode']}}</td>													
				                                                <td>{{$posted_job['dated']}}</td>
																<td>{{$posted_job['sts']}}</td>
																<td>{{$posted_job['last_date']}}</td>
				                                               <td class="actions">
																@if(!empty($toReturn['user_type']=="teammember"))
																@if(@$toReturn['current_module_permission']['is_edit']=="yes")
																<a href="{{url('employer/job/edit/'.$id)}}"><i class="fa fa-pencil" title="Edit"></i></a>
                                                                <a href="{{url('employer/posted_job_assined/'.$id)}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
																@endif
																@else
                                                                <a href="{{url('employer/posted_job_assined/'.$id)}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
																<a href="{{url('employer/job/edit/'.$id)}}" ><i class="fa fa-pencil" title="Edit" ></i></a>
																@endif
																@if(!empty($toReturn['user_type']=="teammember"))
																@if(@$toReturn['current_module_permission']['is_delete']="yes")
																<a href="{{url('employer/delete/'.$id)}}"><i class="fa fa-trash-o" title="Delete"></i></a>
																@endif
																@else
																<a href="{{url('employer/delete/'.$id)}}"><i class="fa fa-trash-o" title="Delete" ></i></a>
																@endif
																<!-- @if($toReturn['current_module_permission']['is_delete']="yes") -->
																<a href="{{url(''.$id)}}" data-toggle="modal"
                                                                        data-target="#myModal{{$posted_job['ID']}}"><i class="fa fa-plane" aria-hidden="true"></i></a>
                                                                        <i class="fa fa-envelope"  title="Mail" ></i>
																	<i class="fa fa-plus" title="Note"></i>
																<!-- @endif -->									
																<div class="modal fade" id="myModal{{$posted_job['ID']}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
																<div class="modal-dialog modal-lg">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title mt-0" id="myLargeModalLabel">Large modal</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			<div class="row">
																				<div class="col-lg-12">
																					<div class="card">
																						<div class="card-header"> </div>
																						|<h3 class="card-title"></h3>
																						<form method="post" action="{{url('posted_jobs/assign')}}" id="FormValidation"
																						enctype="multipart/form-data">
																						@csrf
																						<input type="hidden" name="jobID" value="{{$id}}">
																						<div class="card-body">
																							<?php 

																							$userdata = DB::table('tbl_post_jobs')
																							->join('tbl_job_seekers','tbl_job_seekers.state','=','tbl_post_jobs.state')
																							->where(['tbl_post_jobs.id'=>$id])
																							->select('tbl_job_seekers.id','tbl_job_seekers.first_name','tbl_job_seekers.last_name','tbl_job_seekers.dob','tbl_job_seekers.visa_status','tbl_job_seekers.experience','tbl_job_seekers.skills','tbl_job_seekers.city','tbl_job_seekers.state','tbl_job_seekers.skills','tbl_job_seekers.gender')->get();

																							?>
																							<div class="row">
																								<div class="col-md-12 col-sm-12 col-12">

																									<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
																										<thead>
																											<tr>
																												<th>Select</th>
																												<th>Name</th>
																												<th>Age</th>
																												<th>Visa</th>
																												<th>Exp.(Year)</th>
																												<th>Skills</th>
																												<th>Address</th>
																											</tr>
																										</thead>                                             
																										<tbody>
																											@foreach($userdata as $key => $val)  
																											<?php
																											$dateOfBirth = date('d-m-Y',strtotime($val->dob));
																											$today = date("Y-m-d");
																											$diff = date_diff(date_create($dateOfBirth), date_create($today));
																											$age = $diff->format('%y');
																											$g = str_limit($val->gender,1,'');
																											?>
																											<tr>
																												<td>
																													<div class="radio radio-info form-check-inline">
																														<input type="radio" value="{{$val->id}}" name="seekerID">
																														<label for="inlineRadio1"></label>
																													</div>
																												</td>

																												<td> {{$val->first_name ?? ''}} {{$val->last_name ?? ''}}</td>
																												<td>{{ucwords($g)}}-{{$age ?? ''}}</td>
																												<td>{{$val->visa_status ?? ''}}</td>
																												<td>{{$val->experience ?? ''}}</td>
																												<td>{{$val->skills ?? ''}}</td> 
																												<td>{{$val->city ?? ''}} ,{{$val->state ?? ''}}</td>
																											</tr>
																											@endforeach
																										</tbody>
																									</table>
																								</div>
																							</div>
																						</div>

																					</div>
																				</div>
																			</div> <!-- End Row -->

																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
																			<button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
																		</div>
																	</div>
																</form>
															</div>
														</div>
																	<!--<i class="fa fa-paper-plane"></i>-->
																	<!--<i class="fa fa-envelope"></i>-->
																	<!--<i class="fa fa-plus"></i>-->
															    </td>     											
			                                            </tr>
			                                            @endforeach									  
			                                        </tbody>
                                                </table>
                                                {{$toReturn['post_job']->links()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div> <!-- End Row -->
					</div><!--end of card body-->
                </div>
<script>
    var resizefunc = [];
</script>
@include('include.emp_footer')			
</html>

														
