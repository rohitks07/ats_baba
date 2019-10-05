@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
		
		.mini-stat-info span {
			color: #ffffff;
			display: block;
			font-size: 21px;
			font-weight: 500;
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
</style>        
          
<div id="wrapper">                                            
    <div class="content-page">              
    	<div class="content">                
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
						@if($toReturn['current_module_permission']['is_add']=="yes")                                       
						<a href="{{url('employer/post_new_job')}}">
						<button type="button" class="btn btn-success" style="float:left;">Add a Job</button></a>
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
															<th></th> 
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
																<td></td>													
				                                                <td class="actions">
																@if($toReturn['current_module_permission']['is_edit']=="yes")
																<a href="{{url('employer/job/edit/'.$id)}}"><i class="fa fa-pencil"></i></a>
																@endif
																@if($toReturn['current_module_permission']['is_delete']="yes")
																<a href="{{url('employer/delete/'.$id)}}"><i class="fa fa-trash-o"></i></a>
																@endif
																<!-- @if($toReturn['current_module_permission']['is_delete']="yes") -->
																<a href="{{url(''.$id)}}" data-toggle="modal"
                                                                        data-target="#myModal{{$posted_job['ID']}}"><i class="fa fa-user" aria-hidden="true"></i></a>
																<!-- @endif -->									
																<div id="myModal{{$posted_job['ID']}}" class="modal fade"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																	<div class="modal-dialog">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h4 class="modal-title mt-0" id="myModalLabel"></h4>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<div class="modal-body"> 
																				<table class="table table-bordered">
																					<thead>
																						<tr>
																							<th>Select</th>
																							<th>Name</th>
																							<th>Age</th>
																							<th>Visa</th>
																							<th>Exp.(Year)</th>
																							<th>Skills</th>
																						</tr>
																					</thead>
																					<tbody>			
																						<tr>
																							<td><input type="radio" name="id" value=""></td>
																							<td>{{$id}}</td>
																							<td></td>
																							<td></td>
																							<td></td>
																							<td></td>				
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="modal-footer">
																				<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
																				<button type="submit" class="btn btn-secondary" data-dismiss="modal">Submit</button>
																			</div>
																		</div>
																	</div> 
																</div>
																	<i class="fa fa-paper-plane"></i>
																	<i class="fa fa-envelope"></i>
																	<i class="fa fa-plus"></i>
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

														