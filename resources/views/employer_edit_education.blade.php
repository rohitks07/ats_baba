@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
	#wrapper {
    width: 100%;
    overflow-y: scroll;
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
                                <h3>Edit Education                                    
									<a href="{{url('')}}"><button type="button" class="btn btn-success" style="float:left;">Add a Candidate</button></a>
									</h3>  											
								</div> 
                                  
                                <div class="card-body" style="border: 1px #B0B0B0 solid;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>                                                   
														<th>Name</th>
														<th>Age</th>
														<th>Location</th>
														<th>Visa</th>											
                                                    </tr>
                                                </thead>
                                                <tbody>                                                                                             
													<tr>									
														<td></td>
														<td></td>
														<td></td>												
                                                        <td class="actions">
														    <span class="btn btn-primary btn-xs">Edit</span>
														    <span class="btn btn-primary btn-xs">Delete</span>
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
				</div><!--container-fluid-->
            </div><!--content-->
      
@include('include.emp_footer')


<!-- Mirrored from coderthemes.com/moltran/blue/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:08 GMT -->
</html>