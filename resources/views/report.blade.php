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
.card .card-header {
    padding: 5px 20px;
    border: none;
    background: #f0f0f0;
}
.card-title {
    font-size: 14px;
    color: #00357f;
    margin-bottom: 0;
    margin-top: 6px;
    float:left;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 3px;
}
.form-control {
    -moz-border-radius: 2px;
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    -webkit-border-radius: 2px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    border-radius: 2px;
    /* border: 1px solid #717171; */
    -webkit-box-shadow: none;
    box-shadow: 1px 1px;
    color: rgba(0, 0, 0, 0.6);
    font-size: 14px;
}
.btn-purple{
    background-color: #317eeb !important;
    border: 1px solid #317eeb !important;
    margin-left: 10px;
    height: 33px;
    margin-top: 4px;
}
.nav.nav-tabs > li > a, .nav.tabs-vertical > li > a {
    /* background-color: #60272700; */
    border-radius: 0;
    border: none;
    color: #000000 !important;
    cursor: pointer;
    line-height: 46px;
    padding-left: 20px;
    padding-right: 39px;
    font-weight: 900;
    background: #b9e0ff;
}
.nav.nav-tabs + .tab-content {
    background: #ffffff;
    margin-bottom: 30px;
    padding: 5px;
}
  </style>
           
            <div id="wrapper">
                <div class="content-page">
                    <div class="content">
                        <div class="row">
                            <div class="col-xl-12"> 
                                <ul class="nav nav-tabs tabs" role="tablist">
                                    <li class="nav-item tab">
                                        <a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#home-2" role="tab" aria-controls="home-2" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            <span class="d-none d-sm-block"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;&nbsp; Daily</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#profile-2" role="tab" aria-controls="profile-2" aria-selected="true">
                                            <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            <span class="d-none d-sm-block"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;&nbsp; Weekly</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" id="message-tab-2" data-toggle="tab" href="#message-2" role="tab" aria-controls="message-2" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            <span class="d-none d-sm-block"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp; Monthly</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" id="setting-tab-2" data-toggle="tab" href="#setting-2" role="tab" aria-controls="setting-2" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            <span class="d-none d-sm-block"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp; Yearly</span>
                                        </a>
                                    </li>
                                    <li style="width: 20%;background: #b9e0ff;"></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Daily Report: 10/01/2019 - 10/03/2019</h3>
                                                        <form class="form-inline" style="float:right;margin-bottom: 0px;">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Start Date</label>
                                                                <input type="email" class="form-control" placeholder="Start Date">
                                                            </div>
                                                            
                                                            <div class="form-group m-l-10">
                                                                <label class="sr-only" for="exampleInputPassword2">End Date</label>
                                                                <input type="password" class="form-control" placeholder="End Date">
                                                            </div>
                                                            <button type="button" class="btn btn-icon waves-effect waves-light btn-purple m-b-5">
                                                                <i class="fa fa-search"></i> </button>
                                                        </form>
                                                    </div><!--end of card header-->
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered mb-0">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Date</th>
                                                                                <th>Jobs Created</th>
                                                                                <th>Jobs Assigned</th>
                                                                                <th>Candidate Created</th>
                                                                                <th>Application Submitted</th>
                                                                                <th>Client Submittal</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div><!--end of table-->
                                                                </div><!--end of col-->
                                                            </div><!--end of row-->
                                                        </div><!--end of card-body-->
                                                    </div><!--end of card-->
                                                </div><!--end of col-->
                                            </div><!--end of row-->
                                        </div><!--end of tab pane-->

                                    <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                    	           	    <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Weekly Report</h3>
                                                        <form class="form-inline" style="float:right;margin-bottom: 0px;">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Start Date</label>
                                                                <input type="email" class="form-control" placeholder="Start Date">
                                                            </div>
                                                            
                                                            <div class="form-group m-l-10">
                                                                <label class="sr-only" for="exampleInputPassword2">End Date</label>
                                                                <input type="password" class="form-control" placeholder="End Date">
                                                            </div>
                                                            <button type="button" class="btn btn-icon waves-effect waves-light btn-purple m-b-5">
                                                                <i class="fa fa-search"></i> </button>
                                                        </form>
                                                    </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered mb-0">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Week Ending</th>
                                                                                <th>Jobs Created</th>
                                                                                <th>Jobs Assigned</th>
                                                                                <th>Candidate Created</th>
                                                                                <th>Application Submitted</th>
                                                                                <th>Client Submittal</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div><!--end of table-->
                                                                </div><!--end of col-->
                                                            </div><!--end of row-->
                                                        </div><!--end of card-body-->
                                                    </div><!--end of card-->
                                                </div><!--end of col-->
                                            </div><!--end of row-->
                                    	</div>
                                    <div class="tab-pane" id="message-2" role="tabpanel" aria-labelledby="message-tab-2">
                                    	<div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Monthly Report</h3>
                                                        <form class="form-inline" style="float:right;margin-bottom: 0px;">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Start Date</label>
                                                                <input type="email" class="form-control" placeholder="Start Date">
                                                            </div>
                                                            
                                                            <div class="form-group m-l-10">
                                                                <label class="sr-only" for="exampleInputPassword2">End Date</label>
                                                                <input type="password" class="form-control" placeholder="End Date">
                                                            </div>
                                                            <button type="button" class="btn btn-icon waves-effect waves-light btn-purple m-b-5">
                                                                <i class="fa fa-search"></i> </button>
                                                        </form>
                                                    </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered mb-0">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Month</th>
                                                                                <th>Jobs Created</th>
                                                                                <th>Jobs Assigned</th>
                                                                                <th>Candidate Created</th>
                                                                                <th>Application Submitted</th>
                                                                                <th>Client Submittal</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div><!--end of table-->
                                                                </div><!--end of col-->
                                                            </div><!--end of row-->
                                                        </div><!--end of card-body-->
                                                    </div><!--end of card-->
                                                </div><!--end of col-->
                                            </div><!--end of row-->
                                    	</div>
                                    <div class="tab-pane" id="setting-2" role="tabpanel" aria-labelledby="setting-tab-2">
                            	        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Yearly Report</h3>
                                                        <form class="form-inline" style="float:right;margin-bottom: 0px;">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Start Date</label>
                                                                <input type="email" class="form-control" placeholder="Start Date">
                                                            </div>
                                                            
                                                            <div class="form-group m-l-10">
                                                                <label class="sr-only" for="exampleInputPassword2">End Date</label>
                                                                <input type="password" class="form-control" placeholder="End Date">
                                                            </div>
                                                            <button type="button" class="btn btn-icon waves-effect waves-light btn-purple m-b-5">
                                                                <i class="fa fa-search"></i> </button>
                                                        </form>
                                                    </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered mb-0">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Year</th>
                                                                                <th>Jobs Created</th>
                                                                                <th>Jobs Assigned</th>
                                                                                <th>Candidate Created</th>
                                                                                <th>Application Submitted</th>
                                                                                <th>Client Submittal</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10/03/2019</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div><!--end of table-->
                                                                </div><!--end of col-->
                                                            </div><!--end of row-->
                                                        </div><!--end of card-body-->
                                                    </div><!--end of card-->
                                                </div><!--end of col-->
                                            </div><!--end of row-->
	                                    </div><!--end of tab pane-->
	                                </div><!--end of tab content-->
		                        </div><!-- end row -->   
		                    </div> <!-- col -->
		                </div> <!-- End row -->
		            </div><!--end of content-->
		        </div><!--end of content-page-->
		    </div><!--end of wrapper-->

@include('include.footer')