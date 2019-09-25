@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
input[type=text],
textarea,
    {
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    outline: none;
    padding: 15px 71px 1px 4px;
    margin: 5px 1px 3px 0px;
    border: 1px solid #DDDDDD;

}

input[type=text]:focus,
textarea:focus {
    -moz-box-shadow: 0 0 5px #51cbee;
    -webkit-box-shadow: 0 0 5px #51cbee;
    box-shadow: 0 0 5px #51cbee;

    border: 1px solid #51cbee;
}

label {
    width: 100%;
    float: left;
}

label {
    font-weight: 200;
    font-family: inherit;
    font-size: 15px;
}


input[type=text] {
    width: 50%;
    padding: 7px;
    border-radius: 5px;
}

textarea {
    border-radius: 5px;
    width: 48%;
}
span.red {
    color:red;
}
input[class="form-control"]{
    border:1px solid #bdbcbc;
    width: 84%;
    background: #fff;
}
select[class="form-control"]{
    border:1px solid #bdbcbc;
    width: 84%;
    background: #fff;
}
textarea[class="form-control"]{
    border:1px solid #bdbcbc;
    background: #fff;
    width: 84%;
}
#wrapper {
    overflow-y: scroll;
    width: 100%;

}
.tabs li.tab {
    background-color: #317eeb;
    display: block;
    float: left;
    margin: 0;
    text-align: center;
}
.nav.nav-tabs > li > a, .nav.tabs-vertical > li > a {
    background-color: transparent;
    border-radius: 0;
    border: none;
    color: #ffffff !important;
    cursor: pointer;
    line-height: 50px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
}
.nav.nav-tabs + .tab-content {
    background: #ffffff;
    margin-bottom: 30px;
    padding: 10px;
}
.nav.nav-tabs > li > a.active {
    background-color: #e8faf8;
    border: 0;
}
.tabs .indicator {
  background-color: #e8faf8;
    bottom: 0;
    height: 2px;
    position: absolute;
    will-change: left, right;
}
</style>
	<div id="wrapper">                          
        <div class="content-page">              
            <div class="content">               
                <div class="row">
                	   <div class="col-md-12"> 
                            <ul class="nav nav-tabs tabs" role="tablist" style="height: 45px;">
                                <li class="nav-item tab">
                                    <a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#home-2" role="tab" aria-controls="home-2" aria-selected="false">
                                    <span class="d-none d-sm-block">Employee</span></a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#profile-2" role="tab" aria-controls="profile-2" aria-selected="true">
                                        <span class="d-none d-sm-block">Documents</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" id="message-tab-2" data-toggle="tab" href="#message-2" role="tab" aria-controls="message-2" aria-selected="false">
                                            <span class="d-none d-sm-block">Time Sheet</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                    </li>
                                    <li class="nav-item tab">
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header" style="background-color:#d0d0d0">
                                                        <h3 class="card-title" style="color:#000;text-transform: none; font-size:large">Employees :
                                                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="float: right;">Add an Employee</button></h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-12">
                                                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Emp. No.</th>
                                                                            <th>Name</th>
                                                                            <th>Employee Mode</th>
                                                                            <th>Group</th>
                                                                            <th>Email</th>
                                                                            <th>Employment</th>
                                                                            <th>Join Date</th>
                                                                            <th>Status</th>
                                                                            <th>Actions</th>
                                                                        </tr>
                                                                    </thead>

                                                             
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>ITSC001</td>
                                                                            <td>Sanjiv Sinha</td>
                                                                            <td>Interview</td>
                                                                            <td>HR Team</td>
                                                                            <td>sanjiv.k@itscient.com</td>
                                                                            <td>Full Time</td>
                                                                            <td>11/30/-0001</td>
                                                                            <td>Active</td>
                                                                            <td>
                                                                                <i class="fa fa-file" aria-hidden="true" style="color:#317eeb;"></i>
                                                                                <i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#317eeb;"></i>
                                                                                <i class="fa fa-trash-o" aria-hidden="true" style="color:#317eeb;"></i>
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
									</div>
					               <!--<div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                                               <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header" style="background-color:#d0d0d0">
                                                        <h3 class="card-title" style="color:#000;text-transform: none; font-size:large">Customers :
                                                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#custom-width-modal" style="float: right;">Add a Customer</button></h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-12">
                                                                <table id="datatable-fixed-header" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Customer Name</th>
                                                                            <th>Industry</th>
                                                                            <th>Phone(W)</th>
                                                                            <th>Phone(C)</th>
                                                                            <th>Location</th>
                                                                            <th>Created By</th>
                                                                            <th>Actions</th>
                                                                        </tr>
                                                                    </thead>

                                                             
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> End Row -->         
						      

                                   <div class="tab-pane" id="message-2" role="tabpanel" aria-labelledby="message-tab-2">
                                          <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header" style="background-color:#d0d0d0">
                                                        <h3 class="card-title" style="color:#000;text-transform: none; font-size:large">Timesheets:
                                                       <button type="button" class="btn btn-success" data-toggle="modal" data-target="#con-close-modal" style="float:right;">Add a Timesheets</button></h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-12">
                                                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Month</th>
                                                                            <th>From</th>
                                                                            <th>To</th>
                                                                            <th>Action</th>   
                                                                        </tr>
                                                                    </thead>

                                                             
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
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
	                    	</div>
	                	</div>
	            	</div>
	        	</div>
	    	</div>

            <!-- sample modal content -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title mt-0" id="myModalLabel" style="font-weight:100;">Error: Permission denied</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>You have not permitted to perform this task!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- sample modal content -->
                <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none">
                    <div class="modal-dialog" style="width:55%">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title mt-0" id="custom-width-modalLabel">Error: Permission denied</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>You have not permitted to perform this task!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->



            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog"> 
                    <div class="modal-content"> 
                        <div class="modal-header">
                            <h4 class="modal-title mt-0">Error: Permission denied</h4> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                         <div class="modal-body">
                            <p>You have not permitted to perform this task!</p>
                        </div>
                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                        </div> 
                    </div> 
                </div>
            </div><!-- /.modal -->

		
@include('include.emp_footer')