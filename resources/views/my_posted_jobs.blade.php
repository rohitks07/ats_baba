<meta name="csrf-token" content="{{ csrf_token() }}">
@include('include.emp_header')
@include('include.emp_leftsidebar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
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
								<input id="search" type="text" placeholder="   Search" class="form-control" style="float:right;width:350px;border-radius:20px;height:30px;">
						@if(!empty($toReturn['user_type']=="teammember"))
							@if($toReturn['current_module_permission']['is_add']=="yes")                                       
							<a href="{{url('employer/post_new_job')}}">
							<button type="button" class="btn btn-success" style="float:left;">Add a Job</button></a>
							@endif
						@else
						<a href="{{url('employer/post_new_job')}}">
						<button type="button" class="btn btn-success" style="float:right;">Add a Job</button></a>
						@endif
					    </div>
                        	<div class="card-body" style="border: 1px #B0B0B0 solid;">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12">
                                                <table class="table table-striped table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; overflow-x:scroll;" >
			                                        <thead>
			                                            <tr>                                                   
			                                                <th>Code</th>
			                                                <th width="20%">Title</th>
			                                                <th>Client</th>
			                                                <th width="15%">Location</th>
			                                                <th>Positions </th>
															<th>Type</th>
			                                                <th width="10%">Publish Date</th>
															<th >Status</th>                                                    
															<th width="10%">Closing Date</th>
															<th width="10%"><i class="fa fa-user fa-lg" aria-hidden="true" title="Assignees"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-file-text fa-lg" aria-hidden="true" title="Application"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square-o fa-lg" aria-hidden="true" title="Client Submittal"></i></th> 
															<th width="7%">Actions</th>     													
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
																<td>{{$posted_job['job_code']}}</td>
				                                                <td><a href="{{url('employer/jobsdetails/'.$id)}}">{{$posted_job['job_title']}} </a></td>
				                                                <td>{{$posted_job['client_name']}}</td>
				                                                <td>{{$posted_job['city']}}, &nbsp;{{$posted_job['state']}}</td>
				                                                <td>{{$posted_job['vacancies']}}</td>
				                                                <td>{{$posted_job['job_mode']}}</td>													
				                                                <td>{{$closing_date}}</td>
																<td>{{$posted_job['sts']}}</td>
																<td>{{$new_last_Date}}</td>
																
                                                                 <td><button type="button" class="btn btn-primary btn-sm">{{$assignee}}</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-sm">{{$application}}</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-sm">{{$client_submittal}}</button></td>
				                                               <td class="actions">
																@if(!empty($toReturn['user_type']=="teammember"))
																@if($toReturn['current_module_permission']['is_edit']=="yes")
																<a href="{{url('employer/job/edit/'.$id)}}"><i class="fa fa-pencil" title="Edit"></i></a>
                                                                <a href="{{url('employer/posted_job_assined/'.$id)}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
																@endif
																@else
                                                                <a href="{{url('employer/posted_job_assined/'.$id)}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
																<a href="{{url('employer/job/edit/'.$id)}}" ><i class="fa fa-pencil" title="Edit" ></i></a>
																@endif
																@if(!empty($toReturn['user_type']=="teammember"))
																@if($toReturn['current_module_permission']['is_delete']="yes")
																<a href="{{url('employer/delete/'.$id)}}"><i class="fa fa-trash-o" title="Delete"></i></a>
																@endif
																@else
																<a href="{{url('employer/delete/'.$id)}}"><i class="fa fa-trash-o" title="Delete" ></i></a>
																@endif
																<!-- @if($toReturn['current_module_permission']['is_delete']="yes") -->
																<a href="{{url(''.$id)}}" data-toggle="modal"
                                                                        data-target="#myModal{{$posted_job['ID']}}"><i class="fa fa-plane" aria-hidden="true"></i></a>
                                                                        <a  href="" data-toggle="modal" data-target="#mailModal{{$posted_job['ID']}}"><i class="fa fa-envelope"></i></a>
                                                    <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$posted_job['ID']}}"><i class="fa fa-plus" title="Note"></i></a>
																<!-- @endif -->									
																<div class="modal fade" id="myModal{{$posted_job['ID']}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
																<div class="modal-dialog modal-lg">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title mt-0" id="myLargeModalLabel">Submit To Job</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			<div class="row">
																				<div class="col-lg-12">
																					<div class="card">
																						<div class="card-header"> </div>
																						<h3 class="card-title"></h3>
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
																								<div class=" col-12">
																									<table id="datatable" class="table  table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: auto;">
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
																
			                                            </tr>
			                                            <div class="modal fade bd-example-modal-lg fade" id="exampleModalCenter{{$posted_job['ID']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg " role="document">
                                                            <div class="modal-content" style="width:100%;">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                                                                            <h2>Job Notes</h2>
                                                                                                                        </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{url('employer/posted_jobs/add_notes')}}" method="post">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                    
                                                                        <div class="row">
                                                                            <div class="input-group mb-3">
                                                                                <input type="hidden" value="{{$id}}" id="id_val" name="id">
                                                                                <input type="hidden" value="{{$posted_job['owner_id']}}" id="id" name="owner_id">
                                                                                <input type="text" class="form-control" placeholder="Notes Title" id="title" aria-label="Recipient's username" name="title" aria-describedby="basic-addon2" required>
                                                                                <input type="text" class="form-control" placeholder="Enter Notes" id="note" aria-label="Recipient's username" name="note" aria-describedby="basic-addon2" required>
                                                    
                                                                                <select name="privacy" class="custom-select">
                                                                                    <option value="public">Public
                                                                                    </option>
                                                                                    <option value="Private">Private
                                                                                    </option>
                                                                                </select>
                                                    
                                                                                <div class="input-group-append">
                                                                                    <button class="btn btn-warning" type="submit" id="send_ajax">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                    
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                    
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <a class="btn btn-primary" id="view{{$id}}" href="#" role="button" onclick="view({{$id}});">View More</a>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <div class="row">
                                                                    <div class="mb-12">
                                                                        <div id="append_view{{$id}}" class="table-responsive-lg " style="margin-left:130px;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                    </div>
                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                    
                                                    <!-- Model Mail -->
                                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mailModal" data-whatever="@mdo">Open modal for @mdo</button> -->

                                                    <div class="modal fade" id="mailModal{{$posted_job['ID']}}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title" id="exampleModalLabel">Mail
                                                                    </h3>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="cmxform form-horizontal tasi-form" action="{{url('employer/posted_jobs/email_add')}}" method="post">
                                                                        @csrf
                                                                        <input type="hidden" class="form-control"
                                                                            id="candidate_id" name="candidate_id"
                                                                            value="{{$posted_job['ID']}}" required>

                                                                        <div class="form-group">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">To:</label>
                                                                            <input type="email" class="form-control"
                                                                                id="mail_to"  name="mail_to" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">From:</label>
                                                                            <input type="email" class="form-control"
                                                                                id="mail_from" name="mail_from"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Subject:</label>
                                                                            <input type="text" class="form-control"
                                                                                id="subject" name="subject" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label"> Candidate Name:</label>
                                                                            <select name="job" id="job"
                                                                                class="form-control" required>
                                                                                <option value="">Select</option>
                                                                               @foreach ($post_job_show as $item )
                                                                                 <option value="{{$item['ID']}}|{{$item['first_name']}}{{$item['middle_name']}}{{$item['last_name']}}">{{$item['first_name']}}{{$item['middle_name']}}{{$item['last_name']}}</option>
                                                                               @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Comment:</label>
                                                                            <textarea class="form-control" id="comment"
                                                                                name="comment" required></textarea>
                                                                        </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <input type="submit" class="btn btn-secondary"
                                                                        value="submit">
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
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
<script>
	$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
	</script>
<script type="text/javascript">


	
	function view(id)
	{
		
		
			console.log(id);
 
				$.ajax({
					type: 'POST',
					url: '{{url("employer/job/notes/")}}',
					data: {
						id:id,
						"_token": "{{ csrf_token() }}"
					},
					success: function (data) {
						console.log(data);
						
						var value_one=`<table class='table table-striped'>
										<thead>
											<tr>
											<th>Job _ID</th>
											<th>Title</th>
											<th>Note</th>
											<th>Created By</th>
											<th>Status</th>
											<th>Privacy</th>
											</tr>
										</thead>
										<tbody>`;
						$('#append_view'+id).append(value_one);
						$.each(data, function(index, value) {
							var value_two=`<tr>
								<td>`+value.job_id+`</td>
								<td>`+value.title+`</td>
								<td>`+value.note+`</td>
								<td>`+value.created_by+`</td>
								<td>`+value.status+`</td>
								<td>`+value.privacy_level+`</td>
							</tr>`;
							$('#append_view'+id).append(value_two);
							

							// $('#append_view').append("<option value="+'"'+value.state_id+'"'+"selected>"+value.state_name+"</option>");
							
							});
							$('#append_view'+id).append("</tbody>");
							$('#append_view'+id).append("</table>");
							$('#view'+id).hide();

													

					},
					error: function (data) {
						console.log(data);

					}

				});
	}
        // $("#view").click(function () {

        //     // $('#state_text').empty();
			

        // });

    </script>
</html>

														
