
    
<!-- Mirrored from coderthemes.com/moltran/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:19 GMT -->
<head>
        <meta charset="utf-8" />
        <title>HRMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/hrmslogo.png">

        <link href="{{url('plugins/sweetalert2/sweetalert2.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom Files -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/> 
         <link href="{{url('plugins/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{url('assets/js/modernizr.min.js')}}"></script>
        
    </head>
    <style>
.btn-group, .btn-group-vertical {
		position: relative;
		display: -ms-inline-flexbox;
		display: inline-flex;
		vertical-align: middle;
		margin-top: 16px;
	} 
	#notification_data p{
		font-size: 13px;
		margin-left: 2em;
		margin-right: 2em;
	}
	#notification_data{
		overflow-y:scroll; 
		width:100%;
		height:350px;
	 }
			 
.card-title {
        font-size: 17px;
        font-weight: 100;
        color: #ffffff;
        margin-bottom: 0;
        margin-top: 0;
        text-transform: none;
    }
    
    .modal .modal-dialog .modal-content .modal-footer {
        padding: 0;
        padding-top: 14px;
        margin-right: 0em;
    }
    
    #wrapper {
        width: 100%;
        overflow-y: scroll;
    }
.card-body {
    flex: 1 1 auto;
    padding: 0.5em;
}
 
.card-box .card-header {
    padding: 8px 26px;
}
.card-box .card .card-header a[data-toggle=collapse] {
    display: block;
    color: #ffffff;
    font-size: 15px;
    font-family: "Noto Sans", sans-serif;
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
.card-title {
    font-size: 17px;
    font-weight: 400;
    color: #317eeb;
    margin-bottom: 0;
    margin-top: 0;
    text-transform: none;
    font-size: 20px;
    font-family: none;
}
.content-page > .content {
    margin-bottom: -14px;
    margin-top: 62px;
    padding: 20px 10px 15px 10px;
}


    /*-- col_3 --*/
.widget{
	padding:0;
}
.col-md-3.widget {
  width: 18.8%;
    -webkit-transition: 0.5s all;
    -moz-transition:  0.5s all;
    -o-transition:  0.5s all;
    -ms-transition:  0.5 sall;
    transition:  0.5s all;
}
.widget:hover i.fa {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.3);
    -o-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.1);
    -webkit-transition: 0.5s all;
    -moz-transition:  0.5s all;
    -o-transition:  0.5s all;
    -ms-transition:  0.5 sall;
    transition:  0.5s all;
}
.r3_counter_box {
  min-height: 100px;
  padding: 15px;
  background-image: linear-gradient(#dbf3ff, #ffffff);
}

.stats {
  overflow: hidden;
}
.r3_counter_box .fa {
    margin-right: 0px;
    font-size: 22px;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 43px;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5 sall;
    transition: 0.5s all;
}
.stats span{
	color:#777;
	font-size:14px;
}
.fa.pull-left {
  margin-right: 5% !important;
}
.icon-rounded{
  background-color:#7460ee;
  color: #ffffff;
  border-radius: 50px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  -o-border-radius: 50px;
  -ms-border-radius: 50px;
  font-size: 25px;
}
.r3_counter_box.stats {
  padding-left: 85px;
}
.r3_counter_box h5 {
  margin: 10px 0 5px 0;
  color:#000;
  font-weight:600;
  font-size: 16px;
}
i.user1{
	background: #fc4b6c;
}
i.user2{
	background: #1e88e5;
}
i.dollar1{
	background: #ffb22b;
}
i.dollar2{
	background: #00ad45;
}
.widget1 {
    margin-right: 1%;
    min-height: 58px;
    max-width: 15.666667%;
    box-shadow: 1px 1px 1px #bfbfbf;
    background: #fff;
}
.widget{}
.world-map {
  width: 64%;
  float: left;
  background: #4597a8;
  position: relative;
  padding: 2em 2em 0 2em;
}
.world-map h3 {
  float: left;
  font-size: 1.9em;
  color: #fff;
  font-weight: 600;
  padding: 0em 0 0.5em 0;
}
.world-map p {
  float: right;
  font-size: 1.3em;
  color: #fff;
  font-weight: 300;
  padding: 0.5em 0 0.5em 0;
}
.row-one{
	margin-top:20px;
}
@media (min-width: 768px){
.widget{
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 15.5%;
    box-shadow: 1px 1px 1px #bfbfbf;
}
}
    
    </style>
    <body>
    <div class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{url('employer/dashboard')}}" class="logo"><i class="md md-terrain"></i> <span>HRMS </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <a href="#" class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <li class="hide-phone float-left">
                                <form role="search" class="navbar-form">
                                    <input type="text" placeholder="Type here for search..." class="form-control search-bar">
                                    <a href="#" class="btn btn-search"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>
    
                        <ul class="nav navbar-right float-right list-inline">
                            <li class="dropdown d-none d-sm-block">
                               <a href="javascript:void(0);" data-target="#Notification" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span class="badge badge-pill badge-xs badge-danger" id="notification_no"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg" id="Notification">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group">
                                        <div > 
                                         <a href=""><p id="notification_data" style="padding:20px;">
                                             
                                        </p></a>
                                       </div>
                                        {{-- <a href="javascript:void(0);" class="list-group-item">
                                          <small>See all notifications</small>
                                        </a> --}}
                                    </li> 
                                </ul>
                            </li>
                            <li class="d-none d-sm-block">
                                  <div class="btn-group">
                                    <a class="btn btn-link float-left" href="{{url('employer/my_posted_contacts')}}" title="Contacts"><i class="fa fa-user" aria-hidden="true" style="color: #fff;background: none;font-size: 17px;"></i></a>
                                  </div>
                              </li>
                            <li class="d-none d-sm-block">
                              <div class="btn-group">
                                <a class="btn btn-link float-left" href="{{url('employer/posted_companies')}}" title="Organizations"><i class="fa fa-building" aria-hidden="true" style="color: #fff;background: none;font-size: 17px;"></i></a>
                              </div>
                             </li>
                             <li class="dropdown open">
                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-th" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item"><i class="fa fa-get-pocket"></i>&nbsp;&nbsp;A/C Receivables</a></li>
                                    <li><a href="#" class="dropdown-item"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;A/C Payables</a></li>
                                    <li><a href="#" class="dropdown-item"><i class="fa fa-users"></i>&nbsp;&nbsp;Human Resources</a></li>
                                    <li><a href="#" class="dropdown-item"><i class="fa fa-users"></i>&nbsp;&nbsp;HR Recruitment</a></li>
                                    <li><a href="{{url('employer/marketing')}}" class="dropdown-item"><i class="fa fa-file-audio-o"></i>&nbsp;&nbsp;Marketing</a></li>
                                    
                                </ul>
                            </li>
                            <li class="dropdown open">
                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="http://hrmssystems.com/public/uploads/employer/thumb/71549055713.jpg" title="{{Session::get('full_name')}}" alt="user-img" class="rounded-circle"> </a>
                                <ul class="dropdown-menu">
                                    
                                <li id="hide_org" style="display:block;"><a href="{{url('employer/companyprofile')}}" class="dropdown-item"><i class="md md-face-unlock mr-2"></i>ORG.PROFILE</a></li>
                                
                                    <li><a href="{{url('employer/manageteammember')}}" class="dropdown-item"><i class="md md-settings mr-2"></i>USER MANAGEMENT</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-lock mr-2"></i>SETTING</a></li>
                                    <li><a href="{{url('employer/logout')}}" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
          
            <!-- Top Bar End -->
