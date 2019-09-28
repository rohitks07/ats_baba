@include('include.emp_header')
@include('include.emp_leftsidebar')
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
				background:#d3d4d6;
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
									
</style>  
<body>                           
        <div class="content-page">              
            <div class="content">               
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header" style="background:#317eeb;"> 
                                @if($toReturn['current_module_permission']['is_add']=="yes")                                      
									<a href="{{url('employer/post_new_candidate')}}"><button type="button" class="btn btn-success" style="float:left;">Add a Candidate</button></a>
                                @endif											
								</div> 
                                  
                                <div class="card-body" style="border: 1px #B0B0B0 solid;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>                                                   
														<th>Name</th>
														<th>DOB</th>
														<th>Location</th>
														<th>Visa</th>
														<th>Exp. (Year)</th>
														<th>Education	</th>
														<th>Email (H)</th>
														<th>Mobile</th> 
														<th>Source</th>
														<th>Skype Id</th> 
														<th>Actions</th>     													
                                                    </tr>
                                                </thead>
                                                <tbody>  
                                                @foreach($personal as $key => $value)  
                                                <?php $id=$personal[$key]->id;
                                                        ?>                                                                                         
													<tr>										
														<td>{{$personal[$key]->first}} {{$personal[$key]->last}}</td>
														<td>{{$personal[$key]->dob}}</td>
														<td>{{$personal[$key]->state}},{{$personal[$key]->city}}</td>
														<td>{{$personal[$key]->visa}}</td>
														<td>{{$personal[$key]->experience}}</td>
														<td>{{$personal[$key]->degree}}</td>
														<td>{{$personal[$key]->email}}</td>
														<td>{{$personal[$key]->mobile}}</td>
														<td>{{$source}}</td>
														<td>{{$personal[$key]->skype_id}}</td>								
                                                        <td class="actions">
                                                        @if($toReturn['current_module_permission']['is_edit']=="yes")
														   <i class="fa fa-pencil" aria-hidden="true" data-toggle="dropdown" style="color: #1ba6df;cursor: pointer;" title="Edit"></i>
														   <ul class="dropdown-menu">
                                                                <li class="active">
                                                                    <a href="{{url('employer/team_member_edit_posted_candidate')}}">Personal Detail</a></li>
                                                                    <li><a href="#">Education</a></li>
                                                                    <li><a href="{{url('employer/team_member_edit_experience',$id)}}">Experience</a></li>
                                                                    <li><a href="#">Skills</a></li>
                                                            </ul>
                                                        @endif 
                                                        @if($toReturn['current_module_permission']['is_delete']=="yes")  
														<a href="{{url('employer/search_resume/delete',$id)}}">
                                                           <i class="fa fa-trash-o" aria-hidden="true" style="color:#317eeb;"></i>
                                                           </a>
                                                        @endif
                                                        <a href="{{url('employer/submit_candidate_detail/'.$id)}}"><i class="fa fa-user"></i></a>
														  
														   <i class="fa fa-envelope" aria-hidden="true" style="color:#317eeb;"></i>
														   <i class="fa fa-plus" aria-hidden="true" style="color:#317eeb;"></i>
														  
												        </td>														   										                                             				  											
                                                    </tr>  	
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



</html>