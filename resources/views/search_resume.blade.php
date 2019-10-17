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

.mini-stat-info span {
	color: #ffffff;
	display: block;
	font-size: 21px;
	font-weight: 500;
}
.card-body{
	padding: 0.25rem;
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

.btn-xs, .btn-group-xs>.btn {
	padding: 1px 5px;
	font-size: 12px;
	line-height: 1.5;
	border-radius: 3px;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    list-style: none;
    font-size: 14px;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
    background-clip: padding-box;
}
#wrapper{
			    width:100%;
			    overflow-y:scroll;
                overflow-x:scroll;
			}
							
</style>  
<body>  
        <div id="wrapper">
        <div class="content-page">              
            <div class="content">               
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header" style="background:#317eeb;">
                             <input id="myInput" type="text" placeholder="   Search" style="float:right;width:350px;border-radius:20px;height:30px;">

								@if(!empty($toReturn['user_type']=="teammember")) 
                                @if($toReturn['current_module_permission']['is_add']=="yes")                                      
									<a href="{{url('employer/post_new_candidate')}}"><button type="button" class="btn btn-success" style="float:left;">Add a Candidate</button></a>
                                @endif
								@else
								<a href="{{url('employer/post_new_candidate')}}"><button type="button" class="btn btn-success" style="float:left;">Add a Candidate</button></a>
								@endif											
								</div> 
                                <div class="card-body" style="border: 1px #B0B0B0 solid;">
                                    <div class="row" >
                                        <div class="col-12">
                                            <table class="table table-striped table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width:100%;overflow-x:scroll;">
                                                <thead>
                                                    <tr>                                                   
														<th width="10%">Name</th>
														<th>DOB</th>
														<th width="10%">Location</th>
														<th>Visa</th>
														<th>Exp. (Year)</th>
														<th>Education</th>
														<th>Email (H)</th>
														<th>Mobile</th> 
														<th>Source</th>
														<th>Skype Id</th> 
														<th>Actions</th>     													
                                                    </tr>
                                                </thead>
                                                <tbody id="myTable">  
                                                @foreach($personal as $key => $value)  
												<?php $id=$personal[$key]->id;
														// $start_date=$personal[$key]->seeker_experience_start;
														// $end_date=$personal[$key]->seeker_experience_end;
														// 	$datetime1 = strtotime(date('Y-m-d', strtotime($start_date)));
														// 	 $datetime2 = strtotime(date('Y-m-d', strtotime($end_date)));
														// 	 $secs = $datetime2 - $datetime1;// == <seconds between the two times>
														// 	 $days = $secs / 86400;
														// 	 $exp_month=floor($days/30);
														// 	 $exp_y   ears=floor($exp_month/12);
                                                        ?>                                                                                         
													<tr>										
														<td>{{$personal[$key]->first}} {{$personal[$key]->last}}</td>
														<?php $dob=date('m-d-Y', strtotime($personal[$key]->dob)); ?>
														<td>{{$dob}}</td>
														<td>{{$personal[$key]->city}}, &nbsp;{{$personal[$key]->state}}</td>
														<td>{{$personal[$key]->visa}}</td>
														@if($personal[$key]->total_experience)
														<td>{{$personal[$key]->total_experience}}Years</td>
														@else
														<td>No experience </td>
														@endif
														<td>{{$personal[$key]->degree}}</td>
														<td>{{$personal[$key]->email}}</td>
														<td>{{$personal[$key]->mobile}}</td>
														<td>{{$source}}</td>
														<td>{{$personal[$key]->skype_id}}</td>								
                                                        <td class="actions">
														@if(!empty($toReturn['user_type']=="teammember")) 
                                                        @if($toReturn['current_module_permission']['is_edit']=="yes")
														   <i class="fa fa-pencil" aria-hidden="true" data-toggle="dropdown" style="color: #1ba6df;cursor: pointer;" title="Edit"></i>
														   <ul class="dropdown-menu">
                                                                <li class="active">
																<a href="{{url('employer/edit_posted_candidate/'.$id)}}">Personal Detail</a></li>
                                                                      <li><a href="{{url('employer/employer_edit_education/'.$id)}}">Education</a></li>
                                                                    <li><a href="{{url('employer/team_member_edit_experience/'.$id)}}">Experience</a></li>
                                                                    <li><a href="{{url('employer/team_member_skills/'.$id)}}">Skills</a></li>
                                                            </ul>
                                                        @endif
														@else
														<i class="fa fa-pencil" aria-hidden="true" data-toggle="dropdown" style="color: #1ba6df;cursor: pointer;" title="Edit" ></i>
														   <ul class="dropdown-menu">
                                                                <li class="active">
																<a href="{{url('employer/edit_posted_candidate/'.$id)}}">Personal Detail</a></li>
                                                                      <li><a href="{{url('employer/employer_edit_education/'.$id)}}">Education</a></li>
                                                                    <li><a href="{{url('employer/team_member_edit_experience/'.$id)}}">Experience</a></li>
                                                                    <li><a href="{{url('employer/team_member_skills/'.$id)}}">Skills</a></li>
                                                            </ul>
														@endif
														@if(!empty($toReturn['user_type']=="teammember"))  
                                                        @if($toReturn['current_module_permission']['is_delete']=="yes")  
														<a href="{{url('employer/search_resume/delete',$id)}}">
                                                           <i class="fa fa-trash-o" aria-hidden="true" style="color:#317eeb;" title="Delete"></i>
                                                           </a>
                                                        @endif
														@else
														<a href="{{url('employer/search_resume/delete',$id)}}">
                                                           <i class="fa fa-trash-o" aria-hidden="true" style="color:#317eeb;"  title="Delete"></i>
                                                           </a>
														@endif
                                                        <a href="{{url('employer/submit_candidate_detail/'.$id)}}"><i class="fa fa-user" title="Submit to Job"></i></a>
														  
														    <a data-toggle="modal" data-target="#mailModal{{$id}}"><i class="fa fa-envelope" aria-hidden="true" style="color:#317eeb;" title="Mail"></i></a>
                                                            <a href="" data-toggle="modal"data-target="#exampleModalCenter{{$personal[$key]->id}}"><i class="fa fa-plus"  title="Note" aria-hidden="true"></i></a>
                                                    <!-- Modal -->														  
												        </td>																				   										                                             				  											
                                                    </tr>
                                                     <div class="modal fade bd-example-modal-lg fade" id="exampleModalCenter{{$personal[$key]->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg " role="document">
                                                            <div class="modal-content" style="width:100%;">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalCenterTitle">
                                                                        <h2>Candidate Notes</h2>
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{url('employer/search_resume/Candidate_add_notes')}}" method="post">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="input-group mb-3">
                                                                                <input type="hidden" value="{{$id}}"
                                                                                    id="id_val" name="id">
                                                                                <input type="hidden"
                                                                                    value="{{$personal[$key]->first}}{{$personal[$key]->middle}}{{$personal[$key]->last}}"
                                                                                    id="id" name="owner_id">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Notes Title" id="title"
                                                                                    aria-label="Recipient's username"
                                                                                    name="title"
                                                                                    aria-describedby="basic-addon2"
                                                                                    required>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Enter Notes" id="note"
                                                                                    aria-label="Recipient's username"
                                                                                    name="note"
                                                                                    aria-describedby="basic-addon2"
                                                                                    required>
                                                                                <select name="privacy"
                                                                                    class="custom-select">
                                                                                    <option value="public">Public
                                                                                    </option>
                                                                                    <option value="Private">Private
                                                                                    </option>
                                                                                </select>
                                                                                <div class="input-group-append">
                                                                                    <button class="btn btn-warning"
                                                                                        type="submit"
                                                                                        id="send_ajax">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <a class="btn btn-primary"
                                                                                    id="view{{$id}}" href="#"
                                                                                    role="button"
                                                                                    onclick="view({{$id}});">View
                                                                                    More</a>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <div class="row">
                                                                    <div class="mb-12">
                                                                        <div id="append_view{{$id}}"
                                                                            class="table-responsive-lg "
                                                                            style="margin-left:170px;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!--Mail Job Details -->
                                                    <div class="modal fade" id="mailModal{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h3 class="modal-title" id="exampleModalLabel">Mail</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                    	  <form class="cmxform form-horizontal tasi-form"  action="{{url('employer/search_resume/jod_details_mail')}}"   method="post" >
                                                    									{{csrf_field()}}
                                                                <input type="hidden" class="form-control" id="candidate_id" name="candidate_id" value="{{$personal[$key]->id}}"required>
                                                    		  <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">To:</label>
                                                                <input type="email" class="form-control" id="mail_to" name="mail_to" required>
                                                              </div>
                                                    		  <!--<div class="form-group">-->
                                                        <!--        <label for="recipient-name" class="col-form-label">From:</label>-->
                                                        <!--        <input type="email" class="form-control" id="mail_from" name="mail_from" required>-->
                                                        <!--      </div>-->
                                                    		  <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Subject:</label>
                                                                <input type="text" class="form-control" id="subject" name="subject" required>
                                                              </div>
                                                    		  <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Job:</label>
                                                    			<select name="job" id="job" class="form-control" required>
                                                                <option value="">---Select---</option>
                                                    			@foreach($job_list as $item)
                                                                <option value=" {{$item['ID']}}">{{$item['job_title']}} </option>
                                                    			@endforeach
                                                               
                                                               
                                                                </select>
                                                              </div>
                                                    		 
                                                              <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Comment:</label>
                                                                <textarea class="form-control" id="comment" name="comment" required></textarea>
                                                              </div>
                                                           
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    		<input type="submit" class="btn btn-secondary" value="submit">  
                                                    		</div>
                                                    	  </form>
                                                        </div>
                                                      </div>
                                                    </div>
														@endforeach	
                                                </tbody>
                                            </table>
                                            {{$personal->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                           
                    </div> 
				</div>
            </div>
            
                                                   
                                                   
      
@include('include.emp_footer')

<script>
    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
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
							$.ajax({
								type: 'POST',
								url: '{{url("employer/candidate/notes/")}}',
								data: {
									id:id,
									"_token": "{{ csrf_token() }}"
								},
								success: function (data) {
									$('#append_view'+id).append("<table class='table' style="border:1px solid" >");
									$('#append_view'+id).append("<thead>");
									$('#append_view'+id).append("<tr>");
								// 	$('#append_view'+id).append("<th>Candidate _ID</th>");
									$('#append_view'+id).append("<th>Title</th>");
									$('#append_view'+id).append("<th>Note</th>");
									$('#append_view'+id).append("<th>Created By</th>");
									$('#append_view'+id).append("<th>Status</th>");
									$('#append_view'+id).append("<th>Privacy</th>");
									$('#append_view'+id).append("</tr>");
									$('#append_view'+id).append("</thead>");
									$('#append_view'+id).append("<tbody>");
									$.each(data, function(index, value) {
										
										$('#append_view'+id).append("<tr>");
								// 		$('#append_view'+id).append("<td>"+value.candidate_id+"</td>");
										$('#append_view'+id).append("<td>"+value.title+"</td>");
										$('#append_view'+id).append("<td>"+value.note+"</td>");
										$('#append_view'+id).append("<td>"+value.created_by+"</td>");
										$('#append_view'+id).append("<td>"+value.status+"</td>");
										$('#append_view'+id).append("<td>"+value.privacy_level+"</td>");
										$('#append_view'+id).append("</tr>");
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
					
				</script>
</html>