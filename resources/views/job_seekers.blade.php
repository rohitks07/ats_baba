@include('include.header')
@include('include.leftSidebar')
<style>
    #wrapper{
        overflow-y:scroll;
        width:100%;
    }
   .form-inline .form-control {
    display: list-item;
    width: auto;
    vertical-align: bottom;
    width: 100%;
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
                        <div class="card-header" style="background:#317eeb;">
							<h3 class="card-title" style="text-transform:none; font-size:20px; color:#fff; font-weight:300;">All Jobseeker</h3></div>
                                <div class="card-body" style="background-color:#c3c3c3;height: 74px;">
                                    <form class="form-inline" align="center">
                                       <div class="col-md-2">
                                        <div class="form-group">
                                                <label class="sr-only">Search By Name</label>
                                                <input type="job" class="form-control" id="search_name" placeholder="Search by Job Title">
                                            </div>
                                        </div> 
                                        <div class="col-md-2"> 
											<div class="form-group">
                                                <label class="sr-only" for="">Search By Email</label>
                                                <input type="name" class="form-control" id="company_name" name="company_name" placeholder="Search By Company">
                                            </div>
                                          </div>
                                          
									<div class="col-md-2"> 	
										<div class="form-group">
                                            <select name="search_featured" id="search_featured" class="form-control" style="width:100%;">
												<option value="" selected>- Gender -</option>
												<option value="yes">Male</option>
												<option value="no">Female</option>		
										</select> 
										</div>
									</div>
									
										
									<div class="col-md-2"> 		
										<div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">City</label>
                                                <input type="city" class="form-control" id="city" name="city" type="text" placeholder="Search by City">
                                            </div>   
										</div>	
										
									<div class="col-md-4"> 	
										<div class="form-group">
                                         <button type="button" class="btn btn-primary" style="width: 40%;">Search</button>
                                         <button type="button" class="btn btn-primary" style="margin-left:1em;width: 40%;">View All</button>
										</div>
										</div>
										   </form>
                                    </div> <!-- card-body -->
                               
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12">
                                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                     <thead style="text-align:center;">
                                                        <tr>
                                                            <th>Joining Date</th>
                                                            <th>Candidate Name</th>
															 <th>Email Address</th>
                                                            <th>Street Address</th>
                                                            <th>City</th>
                                                            <th>Applied Jobs</th>
                                                            <th>CVs</th>
															<th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                        @foreach($job_seekers_list as $job_seekers_list)
                                                        <tr>
                                                            <?php 
                                                            $id=$job_seekers_list->ID;
                                                            ?>
                                                            <td>{{$job_seekers_list->dated}}</td>
                                                            <td>{{$job_seekers_list->first_name}} {{$job_seekers_list->last_name}}</td>
                                                            <td>{{$job_seekers_list->email}}</td>
                                                            <td>{{$job_seekers_list->present_address}}</td>
                                                            <td>{{$job_seekers_list->city}}</td>
														 <td align="center" valign="middle">
                                                                <a href="{{url('admin/job_seekers/applied_jobs/'.$id)}}"> <button type="button"  class="btn btn-xs" style="background-color:#317eeb; color:#fff">View</button></a>										 
														</td>
															
                                                            <td align="center" valign="middle">
                                                                 <button type="button" class="btn btn-xs" style="background-color:#2196F3; color:#fff">View CV</button>																 
														</td>
                                                           <td align="center" valign="middle">
                                                                 <button type="button" class="btn btn-xs" style="background-color:#04B431; color:#fff">{{$job_seekers_list->sts}}< /button>															
															</td>
                                                             <td class="actions">
																<button type="button" class="btn btn-xs mb-1" style="background-color:#FF9800; color:#fff">Edit candidate</button><br>
																<button type="button" class="btn btn-xs mb-1" style="background-color:#606060; color:#fff">Login as candidate</button><br>
																<button type="button" onclick="location.href = '{{url('admin/job_seekers/applied_jobs/de'.$id)}}';" class="btn btn-xs mb-1" style="background-color:#ff6347; color:#fff">Delete Candidate</button>
                                                            </td>
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
                </div>
            </div><br><br><br>
  @include('include.footer')