 @include('include.emp_header')
 @include('include.emp_leftsidebar')
        
		<style>
.btn-group, .btn-group-vertical {
    position: relative;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle;
    margin-top: 16px;
}
.panel-footer {
	padding: 5px 15px;
	border-bottom-right-radius: 0px;
	border-bottom-left-radius: 0px;
	background-color: #ffffff;
	width: 100%;
	height: 31px;
	/* margin-top: 6px; */
	border-radius: 10px;
	cursor:pointer;
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

.card-title {
    font-size: 20px;
    font-weight: 100;
    color: #317eeb;
    margin-bottom: 0;
    margin-top: 0;
    text-transform: none;
}
.card .card-header {
    padding: 10px 20px;
    background: #fff;
    color: #000;
}

.btn-primary {
	color: #fff;
	background-color: #428bca;
	border-color: #357ebd;
}
.modal .modal-dialog .modal-content .modal-footer {
	padding: 0;
	padding-top: 14px;
	margin-right: 5em;
}

#wrapper{
    width:100%;
    overflow-y:scroll;
}
					
  table.dataTable thead > tr > th {
    / padding-left: 8px; /
    padding-right: 30px;
}
.table-bordered th {
    border-top: 4px solid #f5f5f5 !important;
    border-bottom: 4px solid #f5f5f5 !important;
    border-right: 4px solid #f5f5f5 !important;
    border-left: 4px solid #f5f5f5 !important;
	color:#000;
	font-size: 13px;
	padding: 0.5em;
}
.table td{
    padding: 0.10rem;
	font-size: 12px;
    padding-left: 1em;
	border-top: 4px solid #f5f5f5 !important;
    border-bottom: 4px solid #f5f5f5 !important;
    border-right: 4px solid #f5f5f5 !important;
    border-left: 4px solid #f5f5f5 !important;
	color:#000;

}
	</style>
     
        <div id="wrapper">                  
            <div class="content-page">             
                <div class="content">
				<!--start of first table-->				                     
							<div class="row">
                            <div class="col-md-12">
                                <div class="card card-border card-primary">
                                    <div class="card-header">
                                       <div class="row">
											<div class="col-md-6">
										 <h3 class="card-title" style="text-align:left;">Organizations</h3>
											</div>
											<div class="col-md-6">
												 <a href="{{url('employer/posted_companies/add_form')}}"><button type="button" class="btn btn-success" style="float:right;">Add an Organization</button></a>
											</div>
										</div> 
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                                <tr>                                                   
                                                    <th>Name</th>
                                                    <th>Federal ID</th>
                                                    <th>DUNS</th>
                                                    <th>HQ Location</th>
                                                    <th>State of Org.</th>
													<th>Employees</th>
                                                    <th>Actions</th>													                                                 
                                                </tr>
                                            </thead>
                                            <tbody> 
                                            @foreach($post_company as $post_company)
                                                                                                 
                                                <tr>
                                                	<?php 
                                                	$id=$post_company->id;?>
                                                	<td>{{$post_company->company_name}}</td>
                                                    <td>{{$post_company->fed_id}}</td>
                                                    <td>{{$post_company->duns}}</td>
                                                    <td>{{$post_company->country}}&nbsp;&nbsp;&nbsp;{{$post_company->state}}</td>													
                                                    <td>{{$post_company->state_of_org}}</td>
													<td>{{$post_company->employees}}</td>
																		
                                                    <td class="actions">
                                                        <a href="{{url('employer/posted_companies/edit/'.$id)}}"><i class="fa fa-pencil-square-o" style="color:#1ba6df;">&nbsp;&nbsp;</i>
                                                        <a href="{{url('employer/posted_companies/delete/'.$id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" style="color:#1ba6df;" date-title="delete"></i></a>																							
                                              
                                              </tr>
											@endforeach	    											  
                                            </tbody>
                                        </table>
                                                </div>
                                            </div><!--end of col-->
                                        </div><!--end of row-->
                                    </div><!--end of card body-->
                                </div>
                            </div>						                            
						</div><!--end of row-->
                <!--end  of first table-->				                      					
                   </div><!--end container-->
                </div>
       @include('include.emp_footer');

	</body>

<!-- Mirrored from coderthemes.com/moltran/blue/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:08 GMT -->
</html>