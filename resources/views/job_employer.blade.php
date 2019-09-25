
		<style>
			.button {
			background-color: #cecece;
			border: none;
			color: black;
			padding: 7px 29px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 0px 0px;
			cursor: pointer;
		}
			.btn-round-xs{
			border-radius: 5px;
			padding-left: 10px;
			padding-right: 10px;
		}
		.btn-round{
		border-radius: 17px;
}
		</style>        
    
    
@include('include.header')
@include('include.leftSidebar')    
        <!-- Begin page -->
        <div id="wrapper"> <br><br><br>                    
            <div class="content-page">
                <!-- Start content -->
                <div class="content" style="margin-top:0px;">
                    <div class="container-fluid">
                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" style="margin-bottom:0px; margin-left: 1.7em; margin-right: 1.7em;">
                                    <div class="card-header">
										<h3 class="card-title" style="text-transform:none;">All Employer</h3></div>
                                    <div class="card-body" style="background-color:#3C8DBC">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label class="sr-only">First Name</label>
                                                <input type="name" class="form-control" id="first_name" placeholder="Search by Name">
                                            </div>
											<div class="form-group" style="margin-left:0.2em">
                                                <label class="sr-only" for="">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Search By Email">
                                            </div>
                                              <div class="form-group" style="margin-left:0.2em">
                                                <label class="sr-only" for="exampleInputEmail2">Company Name</label>
                                                <input type="name" class="form-control" id="company_name" name="company_name" type="text" placeholder="Search by Company">
                                            </div>
											<div class="form-group" style="margin-left:0.1em">
                                                <label class="sr-only" for="exampleInputEmail2">City</label>
                                                <input type="city" class="form-control" id="city" name="city" type="text" placeholder="Search by City">
                                            </div>
										<div class="form-group" style="margin-left:0.1em">
                                            <select name="top_employer" id="top_employer" class="form-control" style="width:100%;">
												<option value="">Select top Employer</option>
												<option value="01" >Yes</option>
												<option value="01" >No</option>		
										</select> 
										</div>
										<div class="form-group" style="margin-left:0.1em">
                                           <input type="button" class="button" value="Search" onclick="" style="margin-left:0.1em; ">
										   
										   <input type="button" class="button" value="view all" onclick="" style="margin-left:0.1em; ">
										</div>
										   </form>
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col -->
							
                             
                        </div> <!-- End row -->

                   
            <div class="content-page" style="margin-right:1em; margin-left:1em;">
                <!-- Start content -->                                                  
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12">
                                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead style="text-align:center;">
                                                        <tr>
                                                            <th>Company</th>
                                                            <th>HQ Location</th>
                                                            <th>job</th>
                                                            <th>User</th>
                                                            <th>Email Address</th>
                                                            <th>Top Employer</th>
															<th>Status</th>
                                                            <th>Quick View</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody style="text-align:center;">
                                                        <tr>
                                                            <td>IT SCIENT.LLC</td>
                                                            <td>United States</td>
                                                            <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">3108</button>															</td>
                                                             <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">126</button>															</td>
															</td>
                                                            <td>sanjiv.k@itscient.com</td>
                                                            <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#04B431; color:#fff">Yes</button>															</td>
																</a>
															</td>
															 <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#04B431; color:#fff">Active</button>															</td>
																
															</td>
                                                             <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">View Profile</button>															</td>
															</td>
                                                            <td class="actions">
																<a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
																<a href="#" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Employer Login"><i class="fa fa-sign-in"></i></a>
																<a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>

															</td>
                                                        </tr>                                                  
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div> <!-- End Row -->
                </div> <!-- container-dluid -->              
            </div> <!-- content -->  
           </div>
        </div>
        <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>

        @include('include.footer')