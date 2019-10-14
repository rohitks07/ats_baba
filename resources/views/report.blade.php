<meta name="csrf-token" content="{{ csrf_token() }}">
@include('include.emp_header')
@include('include.emp_leftsidebar')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
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
        background: #fff;
    }

    .table tr {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #fff;
    }

    .table th {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #e4e4e4;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 0.5px solid #000;
    }

    .table-bordered thead td,
    .table-bordered thead th {
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
        float: left;
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

    .btn-purple {
        background-color: #317eeb !important;
        border: 1px solid #317eeb !important;
        margin-left: 10px;
        height: 33px;
        margin-top: 4px;
    }

    .nav.nav-tabs>li>a,
    .nav.tabs-vertical>li>a {
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

    .nav.nav-tabs+.tab-content {
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
                            <a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#home-2" role="tab"
                                aria-controls="home-2" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <span class="d-none d-sm-block"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    &nbsp;&nbsp; Daily</span>
                            </a>
                        </li>
                        <li class="nav-item tab">
                            <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#profile-2" role="tab"
                                aria-controls="profile-2" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <span class="d-none d-sm-block"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    &nbsp;&nbsp; Weekly</span>
                            </a>
                        </li>
                        <li class="nav-item tab">
                            <a class="nav-link" id="message-tab-2" data-toggle="tab" href="#message-2" role="tab"
                                aria-controls="message-2" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <span class="d-none d-sm-block"><i class="fa fa-calendar"
                                        aria-hidden="true"></i>&nbsp;&nbsp; Monthly</span>
                            </a>
                        </li>
                        <li class="nav-item tab">
                            <a class="nav-link" id="setting-tab-2" data-toggle="tab" href="#setting-2" role="tab"
                                aria-controls="setting-2" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <span class="d-none d-sm-block"><i class="fa fa-calendar"
                                        aria-hidden="true"></i>&nbsp;&nbsp; Yearly</span>
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
                                            <h3 class="card-title">Daily Report: {{$toReturn['week_date'][0]}} -
                                                {{$toReturn['week_date'][11]}}</h3>
                                            <form class="form-inline" style="float:right;margin-bottom: 0px;">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Start Date</label>
                                                    <input type="date" id="daily_1date" class="form-control"
                                                        placeholder="Start Date">
                                                </div>

                                                <div class="form-group m-l-10">
                                                    <label class="sr-only" for="exampleInputPassword2">End Date</label>
                                                    <input type="date" id="daily_2date" class="form-control"
                                                        placeholder="End Date">
                                                </div>
                                                <button type="button" onclick="daily()"
                                                    class="btn btn-icon waves-effect waves-light btn-purple m-b-5">
                                                    <i class="fa fa-search"></i> </button>
                                            </form>
                                        </div>
                                        <!--end of card header-->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12" id="view_daily">
                                                    <div class="table-responsive" id="daily">
                                                        <table class="table table-bordered mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Jobs Created&nbsp;&nbsp;&nbsp;→</th>
                                                                    <th>Action view</th>
                                                                    <th>Jobs Assigned&nbsp;&nbsp;&nbsp;→</th>
                                                                    <th>Action view</th>
                                                                    <th>Candidate Created&nbsp;&nbsp;&nbsp;→</th>
                                                                    <th>Action view</th>
                                                                    <th>Application Submitted&nbsp;&nbsp;&nbsp;→</th>
                                                                    <th>Action view</th>
                                                                    <th>Client Submittal&nbsp;&nbsp;&nbsp;→</th>
                                                                    <th>Action view</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][0]}}</td>

                                                                    <td>{{$toReturn['job_created'][0]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][0]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][0]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][0]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][1]}}</td>
                                                                    <td>{{$toReturn['job_created'][1]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][1]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][1]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][1]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][2]}}</td>
                                                                    <td>{{$toReturn['job_created'][2]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][2]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][2]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][2]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][3]}}</td>
                                                                    <td>{{$toReturn['job_created'][3]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][3]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][3]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][3]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][4]}}</td>
                                                                    <td>{{$toReturn['job_created'][4]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][4]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][4]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][4]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][5]}}</td>
                                                                    <td>{{$toReturn['job_created'][5]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][5]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][5]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][5]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][6]}}</td>
                                                                    <td>{{$toReturn['job_created'][6]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][6]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][6]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][6]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][7]}}</td>
                                                                    <td>{{$toReturn['job_created'][7]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][7]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][7]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][7]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][8]}}</td>
                                                                    <td>{{$toReturn['job_created'][8]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][8]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][8]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][8]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][9]}}</td>
                                                                    <td>{{$toReturn['job_created'][9]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][9]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][9]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][9]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][10]}}</td>
                                                                    <td>{{$toReturn['job_created'][10]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][10]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][10]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][10]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['week_date'][11]}}</td>
                                                                    <td>{{$toReturn['job_created'][11]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>0</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['candidate_created'][11]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['application_submitted'][11]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>
                                                                    <td>{{$toReturn['client_submittal'][11]}}</td>
                                                                    <td><a href="" style="font-size:25px;margin-left:35px;"><i class="fa md-folder-shared" aria-hidden="true"></i></a></td>

                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end of table-->
                                                </div>
                                                <!--end of col-->
                                            </div>
                                            <!--end of row-->
                                        </div>
                                        <!--end of card-body-->
                                    </div>
                                    <!--end of card-->
                                </div>
                                <!--end of col-->
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of tab pane-->

                        <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Weekly Report: {{$toReturn['week_week1']}} -
                                                {{$toReturn['week_week12']}}</h3>
                                            <form class="form-inline" style="float:right;margin-bottom: 0px;">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Start Date</label>
                                                    <input type="date" id="week_first" class="form-control"
                                                        placeholder="Start Date">
                                                </div>

                                                <div class="form-group m-l-10">
                                                    <label class="sr-only" for="exampleInputPassword2">End Date</label>
                                                    <input type="date" id="week_second" class="form-control"
                                                        placeholder="End Date">
                                                </div>
                                                <button type="button" onclick="weekly()"
                                                    class="btn btn-icon waves-effect waves-light btn-purple m-b-5">
                                                    <i class="fa fa-search"></i> </button>
                                            </form>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12" id="show_week">
                                                    <div class="table-responsive" id="hide_week">
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
                                                                <td>{{$toReturn['week_week1']}}</td>
                                                                <td>{{$toReturn['job_created_weekly1']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created1']}}</td>
                                                                <td>{{$toReturn['application_submitted1']}}</td>
                                                                <td>{{ $toReturn['client_submittal1']}}</td>
                                                                </tr>
                                                                <tr>
                                                                <td>{{$toReturn['week_week2']}}</td>
                                                                <td>{{$toReturn['job_created_weekly2']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created2']}}</td>
                                                                <td>{{$toReturn['application_submitted2']}}</td>
                                                                <td>{{ $toReturn['client_submittal2']}}</td>
                                                                </tr>
                                                                <tr>
                                                                <td>{{$toReturn['week_week3']}}</td>
                                                                <td>{{$toReturn['job_created_weekly3']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created3']}}</td>
                                                                <td>{{$toReturn['application_submitted3']}}</td>
                                                                <td>{{ $toReturn['client_submittal3']}}</td>
                                                                </tr>
                                                                <tr>
                                                                <td>{{$toReturn['week_week4']}}</td>
                                                                <td>{{$toReturn['job_created_weekly4']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created4']}}</td>
                                                                <td>{{$toReturn['application_submitted4']}}</td>
                                                                <td>{{ $toReturn['client_submittal4']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['week_week5']}}</td>
                                                                <td>{{$toReturn['job_created_weekly5']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created5']}}</td>
                                                                <td>{{$toReturn['application_submitted5']}}</td>
                                                                <td>{{ $toReturn['client_submittal5']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['week_week6']}}</td>
                                                                <td>{{$toReturn['job_created_weekly6']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created6']}}</td>
                                                                <td>{{$toReturn['application_submitted6']}}</td>
                                                                <td>{{ $toReturn['client_submittal6']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['week_week7']}}</td>
                                                                <td>{{$toReturn['job_created_weekly7']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created7']}}</td>
                                                                <td>{{$toReturn['application_submitted7']}}</td>
                                                                <td>{{ $toReturn['client_submittal7']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['week_week8']}}</td>
                                                                <td>{{$toReturn['job_created_weekly8']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created8']}}</td>
                                                                <td>{{$toReturn['application_submitted8']}}</td>
                                                                <td>{{ $toReturn['client_submittal8']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['week_week9']}}</td>
                                                                <td>{{$toReturn['job_created_weekly9']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created9']}}</td>
                                                                <td>{{$toReturn['application_submitted9']}}</td>
                                                                <td>{{ $toReturn['client_submittal9']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['week_week10']}}</td>
                                                                <td>{{$toReturn['job_created_weekly10']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created10']}}</td>
                                                                <td>{{$toReturn['application_submitted10']}}</td>
                                                                <td>{{ $toReturn['client_submittal10']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['week_week11']}}</td>
                                                                <td>{{$toReturn['job_created_weekly11']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created11']}}</td>
                                                                <td>{{$toReturn['application_submitted11']}}</td>
                                                                <td>{{ $toReturn['client_submittal11']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['week_week12']}}</td>
                                                                <td>{{$toReturn['job_created_weekly12']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created12']}}</td>
                                                                <td>{{$toReturn['application_submitted12']}}</td>
                                                                <td>{{$toReturn['client_submittal12']}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end of table-->
                                                </div>
                                                <!--end of col-->
                                            </div>
                                            <!--end of row-->
                                        </div>
                                        <!--end of card-body-->
                                    </div>
                                    <!--end of card-->
                                </div>
                                <!--end of col-->
                            </div>
                            <!--end of row-->
                        </div>
                        <div class="tab-pane" id="message-2" role="tabpanel" aria-labelledby="message-tab-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Monthly Report: {{$toReturn['month_week_one1']}} -
                                                {{$toReturn['month_week_one12']}}</h3>
                                            {{-- <form class="form-inline" style="float:right;margin-bottom: 0px;">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Start Date</label>
                                                    <input type="date" id="month_first" class="form-control" placeholder="Start Date">
                                                </div>

                                                <div class="form-group m-l-10">
                                                    <label class="sr-only" for="exampleInputPassword2">End Date</label>
                                                    <input type="date" id="month_second" class="form-control" placeholder="End Date">
                                                </div>
                                                <button type="button" 
                                                    class="btn btn-icon waves-effect waves-light btn-purple m-b-5">
                                                    <i class="fa fa-search"></i> </button>
                                            </form> --}}
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12" id="show_month">
                                                    <div class="table-responsive" id="hide_month">
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
                                                                    <td>{{$toReturn['month_week_one1']}}</td>
                                                                    <td>{{$toReturn['job_created_monthly1']}}</td>
                                                                    <td>0</td>
                                                                    <td>{{ $toReturn['candidate_created_monthly1']}}
                                                                    </td>
                                                                    <td>{{$toReturn['application_submitted_monthly1']}}
                                                                    </td>
                                                                    <td>{{$toReturn['client_submittal_monthly1']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['month_week_one2']}}</td>
                                                                    <td>{{$toReturn['job_created_monthly2']}}</td>
                                                                    <td>0</td>
                                                                    <td>{{ $toReturn['candidate_created_monthly2']}}
                                                                    </td>
                                                                    <td>{{$toReturn['application_submitted_monthly2']}}
                                                                    </td>
                                                                    <td>{{$toReturn['client_submittal_monthly2']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['month_week_one3']}}</td>
                                                                    <td>{{$toReturn['job_created_monthly3']}}</td>
                                                                    <td>0</td>
                                                                    <td>{{ $toReturn['candidate_created_monthly3']}}
                                                                    </td>
                                                                    <td>{{$toReturn['application_submitted_monthly3']}}
                                                                    </td>
                                                                    <td>{{$toReturn['client_submittal_monthly3']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['month_week_one4']}}</td>
                                                                    <td>{{$toReturn['job_created_monthly4']}}</td>
                                                                    <td>0</td>
                                                                    <td>{{ $toReturn['candidate_created_monthly4']}}
                                                                    </td>
                                                                    <td>{{$toReturn['application_submitted_monthly4']}}
                                                                    </td>
                                                                    <td>{{$toReturn['client_submittal_monthly4']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['month_week_one5']}}</td>
                                                                <td>{{$toReturn['job_created_monthly5']}}</td>
                                                                <td>0</td>
                                                                <td>{{ $toReturn['candidate_created_monthly5']}}</td>
                                                                <td>{{$toReturn['application_submitted_monthly5']}}</td>
                                                                <td>{{$toReturn['client_submittal_monthly5']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['month_week_one6']}}</td>
                                                                <td>{{$toReturn['job_created_monthly6']}}</td>
                                                                <td>0</td>
                                                                <td>{{ $toReturn['candidate_created_monthly6']}}</td>
                                                                <td>{{$toReturn['application_submitted_monthly6']}}</td>
                                                                <td>{{$toReturn['client_submittal_monthly6']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['month_week_one7']}}</td>
                                                                <td>{{$toReturn['job_created_monthly7']}}</td>
                                                                <td>0</td>
                                                                <td>{{ $toReturn['candidate_created_monthly7']}}</td>
                                                                <td>{{$toReturn['application_submitted_monthly7']}}</td>
                                                                <td>{{$toReturn['client_submittal_monthly7']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['month_week_one8']}}</td>
                                                                <td>{{$toReturn['job_created_monthly8']}}</td>
                                                                <td>0</td>
                                                                <td>{{ $toReturn['candidate_created_monthly8']}}</td>
                                                                <td>{{$toReturn['application_submitted_monthly8']}}</td>
                                                                <td>{{$toReturn['client_submittal_monthly8']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['month_week_one9']}}</td>
                                                                <td>{{$toReturn['job_created_monthly9']}}</td>
                                                                <td>0</td>
                                                                <td>{{ $toReturn['candidate_created_monthly9']}}</td>
                                                                <td>{{$toReturn['application_submitted_monthly9']}}</td>
                                                                <td>{{$toReturn['client_submittal_monthly9']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['month_week_one10']}}</td>
                                                                <td>{{$toReturn['job_created_monthly10']}}</td>
                                                                <td>0</td>
                                                                <td>{{ $toReturn['candidate_created_monthly10']}}</td>
                                                                <td>{{$toReturn['application_submitted_monthly10']}}
                                                                </td>
                                                                <td>{{$toReturn['client_submittal_monthly10']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['month_week_one11']}}</td>
                                                                <td>{{$toReturn['job_created_monthly11']}}</td>
                                                                <td>0</td>
                                                                <td>{{ $toReturn['candidate_created_monthly11']}}</td>
                                                                <td>{{$toReturn['application_submitted_monthly11']}}
                                                                </td>
                                                                <td>{{$toReturn['client_submittal_monthly11']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['month_week_one12']}}</td>
                                                                <td>{{$toReturn['job_created_monthly12']}}</td>
                                                                <td>0</td>
                                                                <td>{{ $toReturn['candidate_created_monthly12']}}</td>
                                                                <td>{{$toReturn['application_submitted_monthly12']}}
                                                                </td>
                                                                <td>{{$toReturn['client_submittal_monthly12']}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end of table-->
                                                </div>
                                                <!--end of col-->
                                            </div>
                                            <!--end of row-->
                                        </div>
                                        <!--end of card-body-->
                                    </div>
                                    <!--end of card-->
                                </div>
                                <!--end of col-->
                            </div>
                            <!--end of row-->
                        </div>
                        <div class="tab-pane" id="setting-2" role="tabpanel" aria-labelledby="setting-tab-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Yearly Report: {{$toReturn['year_week_one1']}} -
                                                {{$toReturn['year_week_one12']}}</h3>
                                            {{-- <form class="form-inline" style="float:right;margin-bottom: 0px;">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Start Date</label>
                                                    <input type="date" class="form-control" placeholder="Start Date">
                                                </div>

                                                <div class="form-group m-l-10">
                                                    <label class="sr-only" for="exampleInputPassword2">End Date</label>
                                                    <input type="date" class="form-control" placeholder="End Date">
                                                </div>
                                                <button type="button"
                                                    class="btn btn-icon waves-effect waves-light btn-purple m-b-5">
                                                    <i class="fa fa-search"></i> </button>
                                            </form> --}}
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
                                                                    <td>{{$toReturn['year_week_one1']}}</td>
                                                                    <td>{{$toReturn['job_created_yerly1']}}</td>
                                                                    <td>0</td>
                                                                    <td>{{$toReturn['candidate_created_yerly1']}}</td>
                                                                    <td>{{$toReturn['application_submitted_yerly1']}}
                                                                    </td>
                                                                    <td>{{$toReturn['client_submittal_yerly1']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['year_week_one2']}}</td>
                                                                    <td>{{$toReturn['job_created_yerly2']}}</td>
                                                                    <td>0</td>
                                                                    <td>{{$toReturn['candidate_created_yerly2']}}</td>
                                                                    <td>{{$toReturn['application_submitted_yerly2']}}
                                                                    </td>
                                                                    <td>{{$toReturn['client_submittal_yerly2']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['year_week_one3']}}</td>
                                                                    <td>{{$toReturn['job_created_yerly3']}}</td>
                                                                    <td>0</td>
                                                                    <td>{{$toReturn['candidate_created_yerly3']}}</td>
                                                                    <td>{{$toReturn['application_submitted_yerly3']}}
                                                                    </td>
                                                                    <td>{{$toReturn['client_submittal_yerly3']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{$toReturn['year_week_one4']}}</td>
                                                                    <td>{{$toReturn['job_created_yerly4']}}</td>
                                                                    <td>0</td>
                                                                    <td>{{$toReturn['candidate_created_yerly4']}}</td>
                                                                    <td>{{$toReturn['application_submitted_yerly4']}}
                                                                    </td>
                                                                    <td>{{$toReturn['client_submittal_yerly4']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['year_week_one5']}}</td>
                                                                <td>{{$toReturn['job_created_yerly5']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created_yerly5']}}</td>
                                                                <td>{{$toReturn['application_submitted_yerly5']}}</td>
                                                                <td>{{$toReturn['client_submittal_yerly5']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['year_week_one6']}}</td>
                                                                <td>{{$toReturn['job_created_yerly6']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created_yerly6']}}</td>
                                                                <td>{{$toReturn['application_submitted_yerly6']}}</td>
                                                                <td>{{$toReturn['client_submittal_yerly6']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['year_week_one7']}}</td>
                                                                <td>{{$toReturn['job_created_yerly7']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created_yerly7']}}</td>
                                                                <td>{{$toReturn['application_submitted_yerly7']}}</td>
                                                                <td>{{$toReturn['client_submittal_yerly7']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['year_week_one8']}}</td>
                                                                <td>{{$toReturn['job_created_yerly8']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created_yerly8']}}</td>
                                                                <td>{{$toReturn['application_submitted_yerly8']}}</td>
                                                                <td>{{$toReturn['client_submittal_yerly8']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['year_week_one9']}}</td>
                                                                <td>{{$toReturn['job_created_yerly9']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created_yerly9']}}</td>
                                                                <td>{{$toReturn['application_submitted_yerly9']}}</td>
                                                                <td>{{$toReturn['client_submittal_yerly9']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['year_week_one10']}}</td>
                                                                <td>{{$toReturn['job_created_yerly10']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created_yerly10']}}</td>
                                                                <td>{{$toReturn['application_submitted_yerly10']}}</td>
                                                                <td>{{$toReturn['client_submittal_yerly10']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['year_week_one11']}}</td>
                                                                <td>{{$toReturn['job_created_yerly11']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created_yerly11']}}</td>
                                                                <td>{{$toReturn['application_submitted_yerly11']}}</td>
                                                                <td>{{$toReturn['client_submittal_yerly11']}}</td>
                                                                </tr>
                                                                <td>{{$toReturn['year_week_one12']}}</td>
                                                                <td>{{$toReturn['job_created_yerly12']}}</td>
                                                                <td>0</td>
                                                                <td>{{$toReturn['candidate_created_yerly12']}}</td>
                                                                <td>{{$toReturn['application_submitted_yerly12']}}</td>
                                                                <td>{{$toReturn['client_submittal_yerly12']}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end of table-->
                                                </div>
                                                <!--end of col-->
                                            </div>
                                            <!--end of row-->
                                        </div>
                                        <!--end of card-body-->
                                    </div>
                                    <!--end of card-->
                                </div>
                                <!--end of col-->
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of tab pane-->
                    </div>
                    <!--end of tab content-->
                </div><!-- end row -->
            </div> <!-- col -->
        </div> <!-- End row -->
    </div>
    <!--end of content-->
</div>
<!--end of content-page-->
</div>
<!--end of wrapper-->

@include('include.footer')


<!--SCRIPT FOR SEARCH-->

<script>


    //daily
    function daily() {

        $("#daily").hide();
        $('#view_daily').empty();
        // console.log('work');
        // var one =$("#daily_1date").val;
        var one = document.getElementById('daily_1date').value;
        var two = document.getElementById('daily_2date').value;

        var new_d = one.toString('yy-MM-dd');
        var new_t = two.toString('yy-MM-dd');
        //for showing
        var one_first = one.toString('MM-dd-yy');
        var one_second = two.toString('MM-dd-yy');


        // console.log(one);
        // console.log(two);



        $.ajax({
            type: 'POST',
            url: '{{url("employer/report/daily")}}',
            data: {
                _token: '{!! csrf_token() !!}',
                one_new: new_d,
                two_new: new_t
            },
            success: function (data) {
                // console.log(data);
                // console.log('hell ya');
                var value = `<div class="table-responsive">
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
                                                                <td>` + one_first + `&nbsp;-&nbsp;` + one_second + `</td>
                                                                <td>` + data.job_created_days + `</td>
                                                                <td></td>
                                                                <td>` + data.candidate_created_days + `</td>
                                                                <td>` + data.application_submitted_days + `</td>
                                                                <td>` + data.client_submittal_days + `</td>
                                                                <td></td>    
                                                                </tr>
                                                            </tbody>
                                                            </table>
                                                            </div>  `;
                $('#view_daily').append(value);

                //  $.each(data, function(index, value) {
                //     // $('#state_text').append("<option value="+'"'+value.state_id+'"'+"selected>"+value.state_name+"</option>");
                //     console.log(data);
                //     });
            },
            error: function (data) {
                console.log(data);
                // console.log("hell no");
            }

        });



    }



    //weekly
    function weekly(){
        $("#hide_week").hide();
        $('#show_week').empty();
        // console.log('work');
        // var one =$("#daily_1date").val;
        var one = document.getElementById('week_first').value;
        var two = document.getElementById('week_second').value;

        var new_d = one.toString('yy-MM-dd');
        var new_t = two.toString('yy-MM-dd');
        //for showing
        var one_first = one.toString('MM-dd-yy');
        var one_second = two.toString('MM-dd-yy');


        // console.log(one);
        // console.log(two);



        $.ajax({
            type: 'POST',
            url: '{{url("employer/report/weekly")}}',
            data: {
                _token: '{!! csrf_token() !!}',
                one_new: new_d,
                two_new: new_t
            },
            success: function (data) {
                // console.log(data);
                // console.log('hell ya');
                var value = `<div class="table-responsive">
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
                                                                <td>` + one_first + `&nbsp;-&nbsp;` + one_second + `</td>
                                                                <td>` + data.job_created_days + `</td>
                                                                <td></td>
                                                                <td>` + data.candidate_created_days + `</td>
                                                                <td>` + data.application_submitted_days + `</td>
                                                                <td>` + data.client_submittal_days + `</td>
                                                                <td></td>    
                                                                </tr>
                                                            </tbody>
                                                            </table>
                                                            </div>  `;
                $('#show_week').append(value);
                

                //  $.each(data, function(index, value) {
                //     // $('#state_text').append("<option value="+'"'+value.state_id+'"'+"selected>"+value.state_name+"</option>");
                //     console.log(data);
                //     });
            },
            error: function (data) {
                console.log(data);
                // console.log("hell no");
            }

        });

    }



    // //month

    // function monthly(){
    //     $("#hide_month").hide();
    //     $('#show_month').empty();
    //     // console.log('work');
    //     // var one =$("#daily_1date").val;
    //     var one = document.getElementById('month_first').value;
    //     var two = document.getElementById('month_second').value;

    //     var new_d = one.toString('yy-MM-dd');
    //     var new_t = two.toString('yy-MM-dd');
    //     //for showing
    //     var one_first = one.toString('MM-dd-yy');
    //     var one_second = two.toString('MM-dd-yy');


    //     // console.log(one);
    //     // console.log(two);



    //     $.ajax({
    //         type: 'POST',
    //         url: '{{url("employer/report/month")}}',
    //         data: {
    //             _token: '{!! csrf_token() !!}',
    //             one_new: new_d,
    //             two_new: new_t
    //         },
    //         success: function (data) {
    //             console.log(data);
    //             console.log('hell ya');
    //             var value = `<div class="table-responsive">
    //                                                     <table class="table table-bordered mb-0">
    //                                                         <thead>
    //                                                             <tr>
    //                                                                 <th>Year</th>
    //                                                                 <th>Jobs Created</th>
    //                                                                 <th>Jobs Assigned</th>
    //                                                                 <th>Candidate Created</th>
    //                                                                 <th>Application Submitted</th>
    //                                                                 <th>Client Submittal</th>
    //                                                             </tr>
    //                                                         </thead>
    //                                                         <tbody>
    //                                                             <tr>
    //                                                             <td>` + one_first + `&nbsp;-&nbsp;` + one_second + `</td>
    //                                                             <td>` + data.job_created_days + `</td>
    //                                                             <td></td>
    //                                                             <td>` + data.candidate_created_days + `</td>
    //                                                             <td>` + data.application_submitted_days + `</td>
    //                                                             <td>` + data.client_submittal_days + `</td>
    //                                                             <td></td>    
    //                                                             </tr>
    //                                                         </tbody>
    //                                                         </table>
    //                                                         </div>  `;
    //             $('#show_week').append(value);

    //             //  $.each(data, function(index, value) {
    //             //     // $('#state_text').append("<option value="+'"'+value.state_id+'"'+"selected>"+value.state_name+"</option>");
    //             //     console.log(data);
    //             //     });
    //         },
    //         error: function (data) {
    //             console.log(data);
    //             console.log("hell no");
    //         }

    //     });

    // }

</script>
