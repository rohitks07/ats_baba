@include('include.emp_header')
@include('include.emp_leftsidebar')


<link href="{{url('assets/packages/core/main.css')}}" rel='stylesheet'>
<link href="{{url('assets/packages/bootstrap/main.css')}}" rel="stylesheet">
<link href="{{url('assets/packages/timegrid/main.css')}}" rel="stylesheet">
<link href="{{url('assets/packages/daygrid/main.css')}}" rel="stylesheet">
<link href="{{url('assets/packages/list/main.css')}}" rel="stylesheet">
<script src="{{url('assets/packages/core/main.js')}}"></script>
<script src="{{url('assets/packages/interaction/main.js')}}"></script>
<script src="{{url('assets/packages/bootstrap/main.js')}}"></script>
<script src="{{url('assets/packages/daygrid/main.js')}}"></script>
<script src="{{url('assets/packages/timegrid/main.js')}}"></script>
<script src="{{url('assets/packages/list/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap" rel="stylesheet">

<style>
    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

</style>
<style>
    .hei {
        height: 60vh;
    }

    body {}

    .panel-footer {
        padding: 5px 15px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        background-color: #ffffff;
        width: 100%;
        height: 31px;
        /* margin-top: 6px; */
        border-radius: 10px;
        cursor: pointer;
    }

    .demo-mobile-month-view {
        height: 50%;
    }

    /* Darker background on mouse-over */

    .btn:hover {
        background-color: RoyalBlue;
    }

    .mini-stat-info span {
        color: #ffffff;
        display: block;
        font-size: 21px;
        font-weight: 500;
    }

    .card-body {
        padding: 0.25rem;
    }

    .card .card-header {
        padding: 10px 20px;
        border: none;
        background: #317eeb;
        color: #fff;
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

</style>

<body>
    <div class="content-page">
        <div class="content">



            <div class="row">


                <div class="col-lg-12">
                    <form action="{{url('employer/dashboard/interview_schedule_email')}}" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="card">
                            <div class="card-header bg-success">
                                <h3 class="card-title mt-1"
                                    style="color:white;text-transform: none;font-family: 'Raleway', sans-serif;font-weight:500;font-size:18px;letter-spacing:1px;">
                                    Send Email ( Interview Request )
                                    <button type="submit" class="btn btn-warning text-dark"
                                        style="float: right; margin-right: 1em;font-weight:500;border-radius:20px;">Send
                                        Email</button>
                                    <a class="btn btn-warning text-dark"
                                        href="{{url('employer/dashboard/interview_schedule_email_view')}}"
                                        title="Reload"
                                        style="float: right; margin-right: 1em;font-weight:500;border-radius:30px;">↻</a>
                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        @include('add_on.interview_email_form')
                                    </div>
                                    <!--end of col-->
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of card body-->
                        </div>
                    </form>
                </div> <!-- End Row -->
            </div>
        </div>
    </div>

</body>

<script>
    $('.timepicker').timepicker();
    $('.timepicker1').timepicker();

</script>
<!--end of content-->
@include('include.emp_footer')
{{-- <script src="{{asset('public/js/ajax_for_email.js')}}"></script> --}}
@if($val == 1)
<script>
    $(document).ready(function () {
        $('#instruction').css('border-color', 'red');
        $('#instruction').focus();
        setTimeout(function () {
            alert("Instruction's Cannot be blank");
        }, 100);

    });

</script>
@else
@endif
<script>
    $("#instruction").keypress(function () {
        $("#instruction").css('border-color','#F0F0F0');
    });

</script>

<script>
    function change() {
        venue = document.getElementById("type_int").value;
        if (venue == "In-Person") {
            $("#hidden").show('fast');
        } else {
            $("#hidden").hide('fast');
            document.getElementById("venue").value = null;
        }
    }

</script>
<script>
    function job_value() {


        jobcode = document.getElementById('jobcode').value;
        var myarr = jobcode.split("|");
        var job_code = myarr[1];

        if (jobcode == "") {
            $('#job_detail').hide(250);
            $('#job_code').empty();
            $('#job_title').empty();
            $('#job_client').empty();
            $('#job_pay_rate').empty();
            $('#type').empty();
        } else {



            $.ajax({
                type: 'get',
                url: '{{url("employer/interview_job_details_view")}}',
                data: {
                    job_code: job_code,
                },
                success: function (data) {
                    $('#job_detail').show(250);
                    $('#job_code').html(data.job_code);
                    $('#job_title').html(data.job_title);
                    $('#job_client').html(data.client_name);
                    $('#job_pay_rate').html(data.pay_min + " - " + data.pay_max);
                    $('#type').html(data.job_mode);
                },
                error: function (data) {
                    alert("internal Server Ajax Error");
                }
            });


        }
    }

</script>

<script>
    function candidate_value() {


        candidate = document.getElementById("candidatename").value;
        var myarr_val = candidate.split("|");
        var candidate_id = myarr_val[1];

        if (candidate == "") {

        } else {
            $("#email_to").val();
            $.ajax({
                type: 'get',
                url: '{{url("employer/interview_candidate_email")}}',
                data: {
                    candidate_id: candidate_id,
                },
                success: function (data) {
                    $("#email_to").val(data.email);
                },
                error: function (data) {
                    alert("internal Server Ajax Error");
                }
            });
        }
    }

</script>
