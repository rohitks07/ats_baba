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
                                            <h3 class="card-title">Daily Report:
                                                {{$toReturn['week_report'][0]['week_date']}} -
                                                {{$toReturn['week_report'][11]['week_date']}}
                                            </h3>
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
                                                                    <th>Jobs Created</th>
                                                                    
                                                                    <th>Jobs Assigned</th>
                                                                    
                                                                    <th>Candidate Created</th>
                                                                    
                                                                    <th>Application Submitted</th>
                                                                    
                                                                    <th>Client Submittal</th>
                                                                    <th>Group Report</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach ( $toReturn['week_report'] as $key =>
                                                                $week_report)
                                                                <tr>
                                                                    <td>{{$week_report['week_date']}}</td>
                                                                    <?php $date_val=$week_report['week_date']; ?>

                                                                    <td>{{$week_report['job_created']}}</td>
                                                                    <td>{{$week_report['post_assign']}}</td>
                                                                    <td>{{$week_report['candidate_created']}}</td>
                                                                    <td>{{$week_report['application_submitted']}}</td>
                                                                    <td>{{$week_report['client_submittal']}}</td>

                                                                    <td>
                                                                        <a href="" data-toggle="modal"
                                                                            data-target=".bd-example-modal-lg5{{$date_val}}"><i
                                                                                class="fa fa-edit"
                                                                                aria-hidden="true"></i></a>

                                                                    </td>
                                                                    <div class="modal fade bd-example-modal-lg5{{$date_val}}"
                                                                        tabindex="-1" role="dialog"
                                                                        aria-labelledby="myLargeModalLabe1"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg">
                                                                            <div class="modal-content">
                                                                                <div class="container-fluid">
                                                                                    
                                                                                    <div class="row">
                                                                                        <div class="col-md-11">
                                                                                            <h3>Group Report</h3>
                                                                                        </div>
                                                                                        <div class="col-md-1 mt-4">
                                                                                            
                                                                                            <a href=""data-dismiss="modal" ><i class="fa ion-android-close"></i></a>
                                                                                            </h3>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <br>
                                                                                    <div class="row">
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                            <h4>Date</h4>
                                                                                        </div>
                                                                                    
                                                                                    
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h4>Jobs Created</h4>
                                                                                        </div>
                                                                                    
                                                                                    
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h4>Jobs Assigned</h4>
                                                                                        </div>
                                                                                    
                                                                                    
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h4>Candidate Created</h4>
                                                                                        </div>
                                                                                    
                                                                                    
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h4>Application Submitted</h4>
                                                                                        </div>
                                                                                    
                                                                                    
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h4>Client Submittal </h4>
                                                                                        </div>

                                                                                    </div>
                                                                                    
                                                                                    @foreach (@$toReturn['team_member']
                                                                                    as $item)
                                                                                    <?php $group_id=$item['type_ID'];
                                                                                        
                                                                                          $new_val=$week_report['week_date'];
                                                                                          
                                                                                          $newDate = preg_replace("/(\d+)\D+(\d+)\D+(\d+)/","$3-$1-$2",$new_val);
                                                                                          $date = strtotime($newDate); 
                                                                                          $hi=date('Y-m-d h:i:s', $date); 
                                                                                          $application_submitted= count($date_team['application_submitted']->where('type_ID',$group_id)->whereIn('dated',$newDate)->whereIn('company_id',$org_id));
                                                                                          $client_submittal= count($date_team['forward_candidate']->where('for_group',$group_id)->where('forward_date',$newDate));                                                                                         
                                                                                           $job_assigned= count($date_team['post_assign']->where('type_ID',$group_id)->whereIn('job_assigned_date',$newDate)->whereIn('company_id',$org_id));
                                                                                          $job_create= count($date_team['team']->where('group',$group_id)->whereIn('date',$newDate)->whereIn('company_ID',$org_id));
                                                                                          $candidate_create= count($date_team['create_candidate']->where('type_ID',$group_id)->whereIn('dated',$newDate)->whereIn('company_id',$org_id));


                                                                                    ?>
                                                                                    <div class="row">
                                                                                        
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                            <h6>{{$item['type_name']}}
                                                                                            </h6>
                                                                                        </div>
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h6 style="color:blue;text-align:center;">{{$job_create}}</h6>
                                                                                        </div>
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h6 style="color:blue;text-align:center;">{{$job_assigned}}</h6>
                                                                                        </div>
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h6 style="color:blue;text-align:center;">{{$candidate_create}}</h6>
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h6 style="color:blue;text-align:center;">{{$application_submitted}}</h6>
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        <div class="col-md-2" style="border: 1px solid black;">
                                                                                        <h6 style="color:blue;text-align:center;">{{$client_submittal}}</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                 
                                                                                    @endforeach


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </tr>
                                                                @endforeach



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
                                            <h3 class="card-title">Weekly Report:
                                                {{$toReturn['weekly_show'][0]['week_week1']}} -
                                                {{$toReturn['weekly_show'][11]['week_week1']}}
                                            </h3>
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
                                                                @foreach ( $toReturn['weekly_show'] as $key =>
                                                                $week_report)
                                                                <tr>
                                                                    <td>{{$week_report['week_week1']}}</td>
                                                                    <td>{{$week_report['job_created_week_wise']}}</td>
                                                                    <td>{{$week_report['post_assign_week_wise']}}</td>
                                                                    <td>{{$week_report['candidate_created_week_wise']}}</td>
                                                                    <td>{{$week_report['application_submitted_week_wise']}}</td>
                                                                    <td>{{$week_report['client_submittal_week_wise']}}</td>
                                                                </tr>
                                                                @endforeach



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
                                            <h3 class="card-title">Monthly
                                                Report:{{$toReturn['monthly'][1]['month_week_one1']}} -
                                                {{$toReturn['monthly'][11]['month_week_one1']}}
                                            </h3>
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
                                                                @foreach ($toReturn['monthly'] as $key => $monthly)

                                                                <tr>
                                                                    <td>{{$monthly['month_week_one1']}}</td>
                                                                    <td>{{$monthly['job_created_monthly1']}}</td>
                                                                    <td>{{$monthly['post_assign_month1']}}</td>
                                                                    <td>{{ $monthly['candidate_created_monthly1']}}
                                                                    </td>
                                                                    <td>{{$monthly['application_submitted_monthly1']}}
                                                                    </td>
                                                                    <td>{{$monthly['client_submittal_monthly1']}}</td>
                                                                </tr>
                                                                @endforeach

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

                                            <h3 class="card-title">Yearly Report: -
                                            </h3>
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
                                                                @foreach ($toReturn['yearly'] as $key => $yearly)


                                                                <tr>
                                                                    <td>{{$yearly['month_week_one1']}}</td>
                                                                    <td>{{$yearly['job_created_monthly1']}}</td>
                                                                    <td>{{$yearly['post_assign_month1']}}</td>
                                                                    <td>{{$yearly['candidate_created_monthly1']}}</td>
                                                                    <td>{{$yearly['application_submitted_monthly1']}}
                                                                    </td>
                                                                    <td>{{$yearly['client_submittal_monthly1']}}</td>
                                                                </tr>
                                                                @endforeach


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
                                                                <td>` + data.post_assign_days + `</td>
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
    function weekly() {
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
                                                                <td>` + data.post_assign_days + `</td>
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
