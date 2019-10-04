@include('include.emp_header')
@include('include.emp_leftsidebar')
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
<body>                           
        <div class="content-page">              
            <div class="content">               
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header" style="background:#317eeb;"> 
                                                                      
									<a href=""><button type="button" class="btn btn-success" style="float:left;">Matching Job</button></a>
                                										
								</div> 
                                  
                                <div class="card-body" style="border: 1px #B0B0B0 solid;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>                                                   
														<th>CODE</th>
														<th>TITLE</th>
														<th>CLIENT</th>
														<th>Visa</th>
														<th>LOCATION</th>
														<th>MATCHING %</th>
                                                        
                                                             													
                                                    </tr>
                                                </thead>
                                                <tbody>  
                                               
                                                        @foreach ($data as $re)
                                                        <tr>	
                                                        <td>{{$re->job_code}}</td>
                                                        <td>{{$industry->industry_name}}</td>
                                            
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
				</div><!--container-fluid-->
            </div><!--content-->
      
@include('include.emp_footer')


<!-- Mirrored from coderthemes.com/moltran/blue/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:08 GMT -->
</html>