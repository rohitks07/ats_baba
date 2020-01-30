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

    table.dataTable thead>tr>th {
        / padding-left: 8px;/ padding-right: 30px;
    }

    .table-bordered th {
        border-top: 4px solid #f5f5f5 !important;
        border-bottom: 4px solid #f5f5f5 !important;
        border-right: 4px solid #f5f5f5 !important;
        border-left: 4px solid #f5f5f5 !important;
        color: #000;
        font-size: 13px;
        padding: 0.5em;
    }

    .table td {
        padding: 0.10rem;
        font-size: 12px;
        padding-left: 1em;
        border-top: 4px solid #f5f5f5 !important;
        border-bottom: 4px solid #f5f5f5 !important;
        border-right: 4px solid #f5f5f5 !important;
        border-left: 4px solid #f5f5f5 !important;
        color: #000;

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
                        {{-- <li class="nav-item tab">
                            <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#profile-2" role="tab"
                                aria-controls="profile-2" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <span class="d-none d-sm-block"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    &nbsp;&nbsp; Weekly</span>
                            </a>
                        </li> --}}
                        <li class="nav-item tab" id="monthly_report">
                            <a class="nav-link" id="message-tab-2" data-toggle="tab" href="#message-2" role="tab"
                                aria-controls="message-2" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <span class="d-none d-sm-block"><i class="fa fa-calendar"
                                        aria-hidden="true"></i>&nbsp;&nbsp; Monthly</span>
                            </a>
                        </li>
                        <li class="nav-item tab" id="yearly_report">
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
                                        <div class="card-header" style="background-color:white;">
                                            <h4 class="card-title" style="font-size:30px;">Daily Report:
                                            </h4>
                                            <br><br>
                                            <a name="" id="bar" class="btn btn-info" href="#" role="button"
                                                style="border-radius:10px;">Bar</a>
                                            <a name="" id="line" class="btn btn-info ml-2" href="#" role="button"
                                                style="border-radius:10px;">Line</a>
                                            <a name="" id="radar" class="btn btn-info ml-2" href="#" role="button"
                                                style="border-radius:10px;">Radar</a>
                                        </div>
                                        <!--end of card header-->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-10" id="view_daily">
                                                    <div class="container-fluid">
                                                        <canvas id="myChart"></canvas>


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
                                            <h4 class="card-title">Weekly Report:
                                                -

                                            </h4>

                                        </div>
                                        <div class="card-body">
                                            <div class="row">

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
                                        <div class="card-header" style="background-color:white;">
                                            <h4 class="card-title" style="font-size:30px;">Month Report:
                                            </h4>
                                            <br><br>
                                            <a name="" id="bar_month" class="btn btn-info" href="#" role="button"
                                                style="border-radius:10px;">Bar</a>
                                            <a name="" id="line_month" class="btn btn-info ml-2" href="#" role="button"
                                                style="border-radius:10px;">Line</a>
                                            <a name="" id="radar_month" class="btn btn-info ml-2" href="#" role="button"
                                                style="border-radius:10px;">Radar</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-10" id="show_month">
                                                    <canvas id="myChart_month"></canvas>
                                                    
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
                                        <div class="card-header" style="background-color:white;">
                                            <h4 class="card-title" style="font-size:30px;">Yearly Report:
                                            </h4>
                                            <br><br>
                                            <a name="" id="bar_yearly" class="btn btn-info" href="#" role="button"
                                                style="border-radius:10px;">Bar</a>
                                            <a name="" id="line_yearly" class="btn btn-info ml-2" href="#" role="button"
                                                style="border-radius:10px;">Line</a>
                                            <a name="" id="radar_yearly" class="btn btn-info ml-2" href="#"
                                                role="button" style="border-radius:10px;">Radar</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-10">
                                                        <canvas id="myChart_yearly"></canvas>
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

@include('include.emp_footer')
<script src="{{url('https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js')}}"></script>

<script>
    'use strict';

    window.chartColors = {
        red: 'rgb(255, 99, 132)',
        orange: 'rgb(255, 159, 64)',
        yellow: 'rgb(255, 205, 86)',
        green: 'rgb(75, 192, 192)',
        blue: 'rgb(54, 162, 235)',
        purple: 'rgb(153, 102, 255)',
        grey: 'rgb(201, 203, 207)'
    };

    (function (global) {
        var MONTHS = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        var COLORS = [
            '#4dc9f6',
            '#f67019',
            '#f53794',
            '#537bc4',
            '#acc236',
            '#166a8f',
            '#00a950',
            '#58595b',
            '#8549ba'
        ];

        var Samples = global.Samples || (global.Samples = {});
        var Color = global.Color;

        Samples.utils = {
            // Adapted from http://indiegamr.com/generate-repeatable-random-numbers-in-js/
            srand: function (seed) {
                this._seed = seed;
            },

            rand: function (min, max) {
                var seed = this._seed;
                min = min === undefined ? 0 : min;
                max = max === undefined ? 1 : max;
                this._seed = (seed * 9301 + 49297) % 233280;
                return min + (this._seed / 233280) * (max - min);
            },

            numbers: function (config) {
                var cfg = config || {};
                var min = cfg.min || 0;
                var max = cfg.max || 1;
                var from = cfg.from || [];
                var count = cfg.count || 8;
                var decimals = cfg.decimals || 8;
                var continuity = cfg.continuity || 1;
                var dfactor = Math.pow(10, decimals) || 0;
                var data = [];
                var i, value;

                for (i = 0; i < count; ++i) {
                    value = (from[i] || 0) + this.rand(min, max);
                    if (this.rand() <= continuity) {
                        data.push(Math.round(dfactor * value) / dfactor);
                    } else {
                        data.push(null);
                    }
                }

                return data;
            },

            labels: function (config) {
                var cfg = config || {};
                var min = cfg.min || 0;
                var max = cfg.max || 100;
                var count = cfg.count || 8;
                var step = (max - min) / count;
                var decimals = cfg.decimals || 8;
                var dfactor = Math.pow(10, decimals) || 0;
                var prefix = cfg.prefix || '';
                var values = [];
                var i;

                for (i = min; i < max; i += step) {
                    values.push(prefix + Math.round(dfactor * i) / dfactor);
                }

                return values;
            },

            months: function (config) {
                var cfg = config || {};
                var count = cfg.count || 12;
                var section = cfg.section;
                var values = [];
                var i, value;

                for (i = 0; i < count; ++i) {
                    value = MONTHS[Math.ceil(i) % 12];
                    values.push(value.substring(0, section));
                }

                return values;
            },

            color: function (index) {
                return COLORS[index % COLORS.length];
            },

            transparentize: function (color, opacity) {
                var alpha = opacity === undefined ? 0.5 : 1 - opacity;
                return Color(color).alpha(alpha).rgbString();
            }
        };

        // DEPRECATED
        window.randomScalingFactor = function () {
            return Math.round(Samples.utils.rand(-100, 100));
        };

        // INITIALIZATION

        Samples.utils.srand(Date.now());

        // Google Analytics
        /* eslint-disable */
        if (document.location.hostname.match(/^(www\.)?chartjs\.org$/)) {
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-28909194-3', 'auto');
            ga('send', 'pageview');
        }
        /* eslint-enable */

    }(this));

    $(document).ready(function () {
        var value = 'bar';
        graph(value);
    });
    $('#bar').click(function () {
        var value = 'bar';
        graph(value);
    })
    $('#line').click(function () {
        var value = 'line';
        graph(value);
    })
    $('#radar').click(function () {
        var value = 'radar';
        graph(value);
    })

    function graph(value) {
        $('#myChart').empty();
        $.ajax({
            url: "{{url('report/show')}}",
            type: "GET",

            success: function (data) {
                console.log(data);
                var color = Chart.helpers.color;
                var barChartData = {
                    labels: [
                        data[0].week_date,
                        data[1].week_date,
                        data[2].week_date,
                        data[3].week_date,
                        data[4].week_date,
                        data[5].week_date,
                        data[6].week_date,
                        data[7].week_date,
                        data[8].week_date,
                        data[9].week_date,
                        data[10].week_date,
                        data[11].week_date,
                    ],
                    datasets: [{
                            label: 'Job created',
                            backgroundColor: color(window.chartColors.red).alpha(1)
                                .rgbString(),
                            borderColor: window.chartColors.red,
                            borderWidth: 1,
                            data: [
                                data[0].job_created,
                                data[1].job_created,
                                data[2].job_created,
                                data[3].job_created,
                                data[4].job_created,
                                data[5].job_created,
                                data[6].job_created,
                                data[7].job_created,
                                data[8].job_created,
                                data[9].job_created,
                                data[10].job_created,
                                data[11].job_created,
                            ],


                        },
                        {

                            label: 'Post assign',
                            backgroundColor: color(window.chartColors.blue).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.blue,
                            borderWidth: 1,
                            data: [
                                data[0].post_assign,
                                data[1].post_assign,
                                data[2].post_assign,
                                data[3].post_assign,
                                data[4].post_assign,
                                data[5].post_assign,
                                data[6].post_assign,
                                data[7].post_assign,
                                data[8].post_assign,
                                data[9].post_assign,
                                data[10].post_assign,
                                data[11].post_assign,
                            ],

                        },
                        {

                            label: 'Client submittal',
                            backgroundColor: color(window.chartColors.yellow).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.yellow,
                            borderWidth: 1,
                            data: [
                                data[0].client_submittal,
                                data[1].client_submittal,
                                data[2].client_submittal,
                                data[3].client_submittal,
                                data[4].client_submittal,
                                data[5].client_submittal,
                                data[6].client_submittal,
                                data[7].client_submittal,
                                data[8].client_submittal,
                                data[9].client_submittal,
                                data[10].client_submittal,
                                data[11].client_submittal,
                            ],

                        },
                        {

                            label: 'Candidate created',
                            backgroundColor: color(window.chartColors.green).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.green,
                            borderWidth: 1,
                            data: [
                                data[0].candidate_created,
                                data[1].candidate_created,
                                data[2].candidate_created,
                                data[3].candidate_created,
                                data[4].candidate_created,
                                data[5].candidate_created,
                                data[6].candidate_created,
                                data[7].candidate_created,
                                data[8].candidate_created,
                                data[9].candidate_created,
                                data[10].candidate_created,
                                data[11].candidate_created,
                            ],

                        },
                        {

                            label: 'Application submitted',
                            backgroundColor: color(window.chartColors.orange).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.dark,
                            borderWidth: 1,
                            data: [
                                data[0].application_submitted,
                                data[1].application_submitted,
                                data[2].application_submitted,
                                data[3].application_submitted,
                                data[4].application_submitted,
                                data[5].application_submitted,
                                data[6].application_submitted,
                                data[7].application_submitted,
                                data[8].application_submitted,
                                data[9].application_submitted,
                                data[10].application_submitted,
                                data[11].application_submitted,
                            ],

                        }
                    ]

                };
                let myChart = document.getElementById('myChart').getContext('2d');

                var massPopChart = new Chart(myChart, {
                    type: value,
                    data: barChartData,


                });
                // $.each(data, function (index, value) {

                // });

            },
            error: function (data) {
                console.log(data);

            },
        });
    }

</script>


<script>
    $('#monthly_report').click(function () {
        var value = 'bar';
        graph_month(value);
    });
    $('#bar_month').click(function () {
        var value = 'bar';
        graph_month(value);
    });
    $('#line_month').click(function () {
        var value = 'line';
        graph_month(value);
    });
    $('#radar_month').click(function () {
        var value = 'radar';
        graph_month(value);
    });

    function graph_month(value) {

        $.ajax({
            url: "{{url('report/graph_month')}}",
            type: "GET",

            success: function (data) {
                console.log(data);
                var color = Chart.helpers.color;
                var barChartData = {
                    labels: [
                        data[1].month_week_one1,
                        data[2].month_week_one1,
                        data[3].month_week_one1,
                        data[4].month_week_one1,
                        data[5].month_week_one1,
                        data[6].month_week_one1,
                        data[7].month_week_one1,
                        data[8].month_week_one1,
                        data[9].month_week_one1,
                        data[10].month_week_one1,
                    ],
                    datasets: [{
                            label: 'Job created',
                            backgroundColor: color(window.chartColors.red).alpha(1)
                                .rgbString(),
                            borderColor: window.chartColors.red,
                            borderWidth: 1,
                            data: [

                                data[1].job_created_monthly1,
                                data[2].job_created_monthly1,
                                data[3].job_created_monthly1,
                                data[4].job_created_monthly1,
                                data[5].job_created_monthly1,
                                data[6].job_created_monthly1,
                                data[7].job_created_monthly1,
                                data[8].job_created_monthly1,
                                data[9].job_created_monthly1,
                                data[10].job_created_monthly1,
                            ],


                        },
                        {

                            label: 'Post assign',
                            backgroundColor: color(window.chartColors.blue).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.blue,
                            borderWidth: 1,
                            data: [

                                data[1].post_assign_month1,
                                data[2].post_assign_month1,
                                data[3].post_assign_month1,
                                data[4].post_assign_month1,
                                data[5].post_assign_month1,
                                data[6].post_assign_month1,
                                data[7].post_assign_month1,
                                data[8].post_assign_month1,
                                data[9].post_assign_month1,
                                data[10].post_assign_month1,
                            ],

                        },
                        {

                            label: 'Client submittal',
                            backgroundColor: color(window.chartColors.yellow).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.yellow,
                            borderWidth: 1,
                            data: [

                                data[1].client_submittal_monthly1,
                                data[2].client_submittal_monthly1,
                                data[3].client_submittal_monthly1,
                                data[4].client_submittal_monthly1,
                                data[5].client_submittal_monthly1,
                                data[6].client_submittal_monthly1,
                                data[7].client_submittal_monthly1,
                                data[8].client_submittal_monthly1,
                                data[9].client_submittal_monthly1,
                                data[10].client_submittal_monthly1,
                            ],

                        },
                        {

                            label: 'Candidate created',
                            backgroundColor: color(window.chartColors.green).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.green,
                            borderWidth: 1,
                            data: [

                                data[1].candidate_created_monthly1,
                                data[2].candidate_created_monthly1,
                                data[3].candidate_created_monthly1,
                                data[4].candidate_created_monthly1,
                                data[5].candidate_created_monthly1,
                                data[6].candidate_created_monthly1,
                                data[7].candidate_created_monthly1,
                                data[8].candidate_created_monthly1,
                                data[9].candidate_created_monthly1,
                                data[10].candidate_created_monthly1,
                            ],

                        },
                        {

                            label: 'Application submitted',
                            backgroundColor: color(window.chartColors.orange).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.dark,
                            borderWidth: 1,
                            data: [

                                data[1].application_submitted_monthly1,
                                data[2].application_submitted_monthly1,
                                data[3].application_submitted_monthly1,
                                data[4].application_submitted_monthly1,
                                data[5].application_submitted_monthly1,
                                data[6].application_submitted_monthly1,
                                data[7].application_submitted_monthly1,
                                data[8].application_submitted_monthly1,
                                data[9].application_submitted_monthly1,
                                data[10].application_submitted_monthly1,
                            ],

                        }
                    ]

                };
                let myChart = document.getElementById('myChart_month').getContext('2d');

                var massPopChart = new Chart(myChart, {
                    type: value,
                    data: barChartData,


                });
                // $.each(data, function (index, value) {

                // });

            },
            error: function (data) {
                console.log(data);

            },
        });
    }

</script>

<script>
    $('#yearly_report').click(function () {
        var value = 'bar';
        graph_year(value);
    });
    $('#bar_yearly').click(function () {
        var value = 'bar';
        graph_year(value);
    });
    $('#line_yearly').click(function () {
        var value = 'line';
        graph_year(value);
    });
    $('#radar_yearly').click(function () {
        var value = 'radar';
        graph_year(value);
    });

    function graph_year(value) {

        $.ajax({
            url: "{{url('report/graph_yearly')}}",
            type: "GET",

            success: function (data) {
                console.log(data);
                var color = Chart.helpers.color;
                var barChartData = {
                    labels: [

                        data[1].month_week_one1,
                        data[2].month_week_one1,
                        data[3].month_week_one1,
                        data[4].month_week_one1,
                        data[5].month_week_one1,
                        data[6].month_week_one1,
                        data[7].month_week_one1,
                        data[8].month_week_one1,
                        data[9].month_week_one1,
                        data[10].month_week_one1,
                    ],
                    datasets: [{
                            label: 'Job created',
                            backgroundColor: color(window.chartColors.red).alpha(1)
                                .rgbString(),
                            borderColor: window.chartColors.red,
                            borderWidth: 1,
                            data: [

                                data[1].job_created_monthly1,
                                data[2].job_created_monthly1,
                                data[3].job_created_monthly1,
                                data[4].job_created_monthly1,
                                data[5].job_created_monthly1,
                                data[6].job_created_monthly1,
                                data[7].job_created_monthly1,
                                data[8].job_created_monthly1,
                                data[9].job_created_monthly1,
                                data[10].job_created_monthly1,
                            ],


                        },
                        {

                            label: 'Post assign',
                            backgroundColor: color(window.chartColors.blue).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.blue,
                            borderWidth: 1,
                            data: [

                                data[1].post_assign_month1,
                                data[2].post_assign_month1,
                                data[3].post_assign_month1,
                                data[4].post_assign_month1,
                                data[5].post_assign_month1,
                                data[6].post_assign_month1,
                                data[7].post_assign_month1,
                                data[8].post_assign_month1,
                                data[9].post_assign_month1,
                                data[10].post_assign_month1,
                            ],

                        },
                        {

                            label: 'Client submittal',
                            backgroundColor: color(window.chartColors.yellow).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.yellow,
                            borderWidth: 1,
                            data: [

                                data[1].client_submittal_monthly1,
                                data[2].client_submittal_monthly1,
                                data[3].client_submittal_monthly1,
                                data[4].client_submittal_monthly1,
                                data[5].client_submittal_monthly1,
                                data[6].client_submittal_monthly1,
                                data[7].client_submittal_monthly1,
                                data[8].client_submittal_monthly1,
                                data[9].client_submittal_monthly1,
                                data[10].client_submittal_monthly1,
                            ],

                        },
                        {

                            label: 'Candidate created',
                            backgroundColor: color(window.chartColors.green).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.green,
                            borderWidth: 1,
                            data: [

                                data[1].candidate_created_monthly1,
                                data[2].candidate_created_monthly1,
                                data[3].candidate_created_monthly1,
                                data[4].candidate_created_monthly1,
                                data[5].candidate_created_monthly1,
                                data[6].candidate_created_monthly1,
                                data[7].candidate_created_monthly1,
                                data[8].candidate_created_monthly1,
                                data[9].candidate_created_monthly1,
                                data[10].candidate_created_monthly1,
                            ],

                        },
                        {

                            label: 'Application submitted',
                            backgroundColor: color(window.chartColors.orange).alpha(
                                1).rgbString(),
                            borderColor: window.chartColors.dark,
                            borderWidth: 1,
                            data: [

                                data[1].application_submitted_monthly1,
                                data[2].application_submitted_monthly1,
                                data[3].application_submitted_monthly1,
                                data[4].application_submitted_monthly1,
                                data[5].application_submitted_monthly1,
                                data[6].application_submitted_monthly1,
                                data[7].application_submitted_monthly1,
                                data[8].application_submitted_monthly1,
                                data[9].application_submitted_monthly1,
                                data[10].application_submitted_monthly1,
                            ],

                        }
                    ]

                };
                let myChart = document.getElementById('myChart_yearly').getContext('2d');

                var massPopChart = new Chart(myChart, {
                    type: value,
                    data: barChartData,


                });
                // $.each(data, function (index, value) {

                // });

            },
            error: function (data) {
                console.log(data);

            },
        });
    }

</script>


<script>
    $(document).ready(function () {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://jobsapi.p.rapidapi.com/api/job?api_token=iyOSd0gsuR9TZIqWe9wAWuRbLai0HYCmLG3OrUFfFct1ePozfiCoZlOVKVfqfTMGung2IxC9LY2WGZUf&job_type",
            "method": "GET",
            "headers": {
                "x-rapidapi-host": "jobsapi.p.rapidapi.com",
                "x-rapidapi-key": "bf4c43478amsh387a97d43729756p1d04b2jsnb2c42ba6fc1e"
            }
        }

        $.ajax(settings).done(function (response) {
            console.log(response);
        });
    });

</script>
