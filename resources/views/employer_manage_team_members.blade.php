<!DOCTYPE html>
<html lang="en">   

@include('web.header')
        <meta charset="utf-8" />
        <title>Team Members of HRMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
		<style>
			
			.mini-stat-info span {
				color: #ffffff;
				display: block;
				font-size: 21px;
				font-weight: 500;
			}
			.card-body{
				padding: 0.25rem;
			}
			.table-bordered td, .table-bordered th {
				border: 1px solid #4387cc;
			}
				.table thead th {
					vertical-align: bottom;
					border-bottom: 2px solid #51a6fb;
				}
				.table thead th {
					vertical-align: bottom;
					border-bottom: 0px solid #51a6fb;
					/* width: 67%; */
					padding: 6px;
					background-color: honeydew;
					text-align: center;
					color: #095496;
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
				.table-bordered td, .table-bordered th {
					border: 1px solid #4387cc;
					padding: 7px;
					text-align: center;
					color: #565656;
				}
				.table-bordered td, .table-bordered th {
					border: 1px solid #4387cc;
					padding: 4px;
					text-align: center;
					color: #4c4c4c;
				}
				.table-striped > tbody > tr:nth-of-type(odd) {
					background-color: #f5f5f5;
					}
					.btn-xs, .btn-group-xs>.btn {
						padding: 1px 5px;
						font-size: 12px;
						line-height: 1.5;
						border-radius: 3px;
					}
					*.content-page {
					
						overflow: hidden;
						width: 100%;
					}
			
	</style>        
    </head>
    <body class="fixed-left">    
        <div id="wrapper" style="background-color:#fff;">                  
            <div class="content-page">             
                <div class="content">
                    <div class="container">                        
				<!--start of first table-->				                     
							<div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" style="width:110%">
                                       <div class="row">
											<div class="col-md-6">
												<button>User</button>
												<button>User Group</button>
											</div>
											<div class="col-md-6">
												 <a href="{{url('')}}"><button type="button" class="btn btn-success" style="float:right;">Add Member</button></a>
											</div>
										</div> 
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive" style="width: 110%;">
                                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                                <tr>                                                   
                                                    <th>Name</th>
                                                    <th>Group Name</th>
                                                    <th>Location</th>
                                                    <th>Time Zone</th>
                                                    <th>Date Joined</th>
													<th>Last Login Date</th>
                                                    <th>Last Updated Date</th>
													<th>Status</th>                                                    
                                                    <th>Actions </th>                                                   
                                                </tr>
                                            </thead>
                                            <tbody>                                               
                                                <tr>
                                                    <td>Joydeep</td>
                                                    <td>Infosys-O</td>
                                                    <td>Fremont, CA, United States</td>
                                                    <td>(GMT-08:00) Pacific Time (US & Canada)</td>													
                                                    <td>01/02/2019</td>
													<td>2019-06-03 11:39:15</td>
													<td>0000-00-00 00:00:00</td>
													<td>	active</td>													
                                                  <td class="actions">
														<span class="btn btn-primary btn-xs">Edit</span>
														<span class="btn btn-primary btn-xs">Delete</span>
												</td>   											
                                              </tr>  
												<tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>													
                                                    <td></td>
													<td></td>
													<td></td>
													<td></td>													
                                                  <td class="actions">
														<span class="btn btn-primary btn-xs">Edit</span>
														<span class="btn btn-primary btn-xs">Delete</span>
												</td>   											
                                              </tr>  
											  <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>													
                                                    <td></td>
													<td></td>
													<td></td>
													<td></td>													
                                                  <td class="actions">
														<span class="btn btn-primary btn-xs">Edit</span>
														<span class="btn btn-primary btn-xs">Delete</span>
												</td>   											
                                              </tr>  
											  <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>													
                                                    <td></td>
													<td></td>
													<td></td>
													<td></td>													
                                                  <td class="actions">
														<span class="btn btn-primary btn-xs">Edit</span>
														<span class="btn btn-primary btn-xs">Delete</span>
												</td>   											
                                              </tr>  
											  <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>													
                                                    <td></td>
													<td></td>
													<td></td>
													<td></td>													
                                                  <td class="actions">
														<span class="btn btn-primary btn-xs">Edit</span>
														<span class="btn btn-primary btn-xs">Delete</span>
												</td>   											
                                              </tr>  
											  <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>													
                                                    <td></td>
													<td></td>
													<td></td>
													<td></td>													
                                                  <td class="actions">
														<span class="btn btn-primary btn-xs">Edit</span>
														<span class="btn btn-primary btn-xs">Delete</span>
												</td>   											
                                              </tr>  
											<tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>													
                                                    <td></td>
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
                                    </div><!--end of col-->
                                 </div><!--end of row-->
                             </div><!--end of card body-->
                          </div>
                       </div>						                           
				</div><!--end of row-->
             <!--end  of first table-->	
		</div><!--end container-->
   </div>

      @include('web.footer')

	</body>

<!-- Mirrored from coderthemes.com/moltran/blue/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:08 GMT -->
</html>