
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
			.pagination {
			  display: inline-block;
			}

			.pagination a {
			  color: black;
			  float: right;
			  padding: 8px 16px;
			  text-decoration: none;
			  transition: background-color .3s;
			  border: 1px solid #ddd;
			}

			.pagination a.active {
			  background-color: #4CAF50;
			  color: white;
			  border: 1px solid #4CAF50;
			}

			.pagination a:hover:not(.active) {background-color: #ddd;}
		</style>
        
   
@include('include.header')
@include('include.leftSidebar') 
        <div id="wrapper"><br>                   
            <div class="content-page">
                <!-- Start content -->
                <div class="content" style="margin-top:0px;">
                    <div class="container-fluid">
                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" style="margin-bottom:0px;"><br><br>
                                    <div class="card-header" style="padding:0px 20px;">
										<h3 class="card-title" style="text-transform:none;">All Posted Jobs</h3></div>
								
                                    <div class="card-body" style="background-color:#3C8DBC">
                                        <form class="form-inline" align="center">
                                            <div class="form-group">
                                                <label class="sr-only">Job Title</label>
                                                <input type="job" class="form-control" id="job_title" placeholder="Search by Job Title">
                                            </div>
											<div class="form-group" style="margin-left:0.1em">
                                                <label class="sr-only" for="">Company Name</label>
                                                <input type="name" class="form-control" id="company_name" name="company_name" placeholder="Search By Company">
                                            </div>
                                           <div class="form-group" style="margin-left:0.1em">
                                                <label class="sr-only" for="exampleInputEmail2">City</label>
                                                <input type="city" class="form-control" id="city" name="city" type="text" placeholder="Search by City">
                                            </div>   
											
										<div class="form-group" style="margin-left:0.1em">
                                            <select name="search_featured" id="search_featured" class="form-control" style="width:100%;">
												<option value="" selected>- Featured -</option>
												<option value="yes">Featured</option>
												<option value="no">Non-Featured</option>		
										</select> 
										</div>
										<div class="form-group" style="margin-left:0.1em">
                                            <select name="search_sts" id="search_sts" class="form-control" style="width:100%;">
												<option value="" selected>- Status -</option>
												<option value="active">Active</option>
												<option value="pending">Pending</option>
												<option value="deactive">Deactive</option>
												<option value="blocked">Blocked</option>		
										</select> 
										</div>
										
										<div class="form-group">
                                           <input type="button" class="button" value="Search" onclick="" style="margin-left:0.1em; ">
										   
										   <input type="button" class="button" value="view all" onclick="" style="margin-left:0.1em; ">
										</div>
										   </form>
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col -->  
                        </div> <!-- End row -->

                   
            <div class="content-page" style="margin-right:0em; margin-left:0em;">
                <!-- Start content -->                                                  
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12">
                                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead style="text-align:center;">
                                                        <tr>
                                                            <th>Added Date</th>
                                                            <th>Last Date</th>
                                                            <th>Job Title</th>
                                                            <th>Company Name</th>
                                                            <th>City</th>
                                                            <th>Featured</th>
															<th>Job Preview</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align:center; text-align: -webkit-auto;">
                                                        <tr>
                                                            <td>02/12/2019<br>1.6.162.167</td>
                                                            <td>09/10/2018</td>
															 <td>AWS Developer</td>
															 <td>IT SCIENT.LLC</td>
															 <td>Jamshedpur</td>
                                                            <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#ffd700; color:#000">No</button>
														     </td>
                                                             <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Quick Preview</button>																 
																 </td>
															
															 <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#04B431; color:#fff">published</button>															
															</td>
                                                            <td class="actions">
																<button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Edit</button>
																<button type="button" class="btn-round-xs btn-xs" style="background-color:#ff6347; color:#fff">Delete</button>
															</td>
                                                        </tr>  														
                                                   
                                                        <tr>
                                                            <td>08/12/2018<br>1.6.333.167</td>
                                                            <td>07/09/2018</td>
															 <td>IT ASSISTANT</td>
															<td>IT SCIENT.LLC</td>
															 <td>Jamshedpur</td>
                                                            <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#ffd700; color:#000">No</button>
														     </td>
                                                             <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Quick Preview</button>																 
																 </td>
															</td>
															 <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#04B431; color:#fff">published</button>															
															</td>
                                                            <td class="actions">
																<button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Edit</button>
																<button type="button" class="btn-round-xs btn-xs" style="background-color:#ff6347; color:#fff">Delete</button>																														
															</td>
                                                        </tr>  														
                                                    
                                                        <tr>
                                                            <td>02/12/2019<br>1.6.162.167</td>
                                                            <td>09/05/2019</td>
															 <td>IT Auditor - Data Analytics</td>
															<td>IT SCIENT.LLC</td>
															 <td>Jamshedpur</td>
                                                            <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#ffd700; color:#000">No</button>
														     </td>
                                                             <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Quick Preview</button>																 
																 </td>
															</td>
															 <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#04B431; color:#fff">published</button>															
															</td>
                                                            <td class="actions">
																<button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Edit</button>
																<button type="button" class="btn-round-xs btn-xs" style="background-color:#ff6347; color:#fff">Delete</button>																														
															</td>
                                                        </tr>  														
                                                   
                                                        <tr>
                                                            <td>02/12/2019<br>1.6.162.167</td>
                                                            <td>06/06/2019</td>
															 <td>Administrative Assistant</td>
															<td>IT SCIENT.LLC</td>
															 <td>Jamshedpur</td>
                                                            <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#ffd700; color:#000">No</button>
														     </td>
                                                             <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Quick Preview</button>																 
																 </td>
															</td>
															 <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#04B431; color:#fff">published</button>															
															</td>
                                                            <td class="actions">
																<button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Edit</button>
																<button type="button" class="btn-round-xs btn-xs" style="background-color:#ff6347; color:#fff">Delete</button>																													
															</td>
                                                        </tr>  														
                                                   
                                                        <tr>
                                                            <td>02/12/2019<br>1.6.162.167</td>
                                                            <td>03/04/2019</td>
															 <td>Assistant Programme Editor</td>
															 <td><img src="images\logo_itscient.jpg"><br>IT SCIENT.LLC</td>
															 <td>Jamshedpur</td>
                                                            <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#ffd700; color:#000">No</button>
														     </td>
                                                             <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Quick Preview</button>																 
																 </td>
															</td>
															 <td align="center" valign="middle">
                                                                 <button type="button" class="btn-round-xs btn-xs" style="background-color:#04B431; color:#fff">published</button>															
															</td>
                                                            <td class="actions">
															<button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Edit</button>
																<button type="button" class="btn-round-xs btn-xs" style="background-color:#ff6347; color:#fff">Delete</button>																														
															</td>
                                                        </tr>  														
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> <br><br><br>
									
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