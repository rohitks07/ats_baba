
    
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
    .table tr {
    padding: 7px;
    border-top: 1px solid #dee2e6;
    font-size: 9px;
    color: #000;
    background: #fff;
    }
    .table tr {
    padding: 7px;
    border-top: 1px solid #dee2e6;
    font-size: 12px;
    color: #000;
    background: #fff;
    }
.table td {
    padding: 7px;
    border-top: 1px solid #dee2e6;
    font-size: 9px;
    color: #000;
    background: #fff;
    }
.table tr {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 9px;
    color: #000;
    background: #fff;
    }
.table th {
    padding: 7px;
    border-top: 1px solid #dee2e6;
    font-size: 13px;
    color: #000;
   background: #e4e4e4;
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
                               <a href="javascript:void(0);" onclick="notification();" data-target="#Notification" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span class="badge badge-pill badge-xs badge-danger" id="notification_no"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg" id="Notification">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group">
                                        <div > 
                                         <a href=""><p id="notification_data"></p></a>
                                       </div>
                                      
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="d-none d-sm-block">
                                  <div class="btn-group">
                                    <a class="btn btn-link float-left" href="{{url('employer/my_posted_contacts')}}" title="Contacts"><img src="http://hrmssystems.com/public/images/admin_images/newcontact.png"></a>
                                  </div>
                              </li>
                            <li class="d-none d-sm-block">
                              <div class="btn-group">
                                <a class="btn btn-link float-left" href="{{url('employer/posted_companies')}}" title="Organizations"><img src="http://hrmssystems.com/public/images/admin_images/co.png"></a>
                              </div>
                             </li>
                             <li class="dropdown open">
                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="http://hrmssystems.com/public/images/admin_images/dash-board-24.png"> </a>
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
                                <li><a href="{{url('employer/companyprofile')}}" class="dropdown-item"><i class="md md-face-unlock mr-2"></i>ORG.PROFILE</a></li>
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
