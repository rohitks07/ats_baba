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


    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .sticky+.content {
        padding-top: 102px;
    }

    .content {
        padding: 16px;
    }

</style>

<body>
    <div class="content-page">
        <form action="{{url('employer/interview_create/send_email')}}" method="POST">
            @csrf
            <div class="content mt-3">
                <div class="row">
                    <div class="col-md-7">
                        @include('add_on.input_field_for_creating_template')
                    </div>
                    <div class="col-md-5" id="display_head" style="margin-top:6%;">
                        @include('add_on.add_costom_email_template')
                    </div>
                </div>
            </div>
        </form>

    </div>
    <br><br><br>
</body>

<script>
    $('.timepicker').timepicker();
    $('.timepicker1').timepicker();

</script>
<!--end of content-->
@include('include.emp_footer')
@if(@$val == 0)
<script>
    $(document).ready(function(){

        $('#heading_input').css('border', '1px solid red');
    });
    $('#heading_input').keypress(function(){
        $('#heading_input').css('border', '1px solid grey');
    });

</script>
@endif
{{-- <script src="{{asset('public/js/ajax_for_email.js')}}"></script> --}}
<script>
    // for job
    $('#job_code').on('change', function () {
        $('#job_title').empty();
        $('#location').empty();
        $('#job_detail').empty();
        $('#job_visa').empty();
        $('#job_client_name').empty();
        $('#job_pay_rate').empty();
        
        var job_val = $('#job_code').val();
        $.ajax({
            type: 'get',
            url: '{{url("employer/interview_create/job_val")}}',
            data: {
                job_val: job_val
            },
            success: function (data) {
                $('#job_title').val(data.job_title);
                $('#location').val(data.city + ' , ' + data.state + ' , ' + data.city);
                $('#job_detail').val(data.job_description);
                $('#job_visa').val(data.job_visa_status);
                $('#job_client_name').val(data.client_name);
                $('#job_pay_rate').val(data.pay_min + ' - ' + data.pay_max);
            },
            error: function (data) {
                console.log('internal error');
            }
        });
    })

</script>
<script>
    //for candidate 
    $('#candidate_name').on('change', function () {
        $('#candidate_visa').empty();
        $('#candidate_location').empty();
        $('#candidate_skill').empty();
        $('#email_to').empty();

        var candidate_val = $('#candidate_name').val();
        $.ajax({
            type: 'get',
            url: '{{url("employer/interview_create/candidate_val")}}',
            data: {
                candidate_val: candidate_val
            },
            success: function (data) {
                $('#candidate_visa').val(data.visa_status);
                $('#candidate_location').val(data.city + ' , ' + data.state + ' , ' + data.country);
                $('#candidate_skill').val(data.skills);
                $('#email_to').val(data.email);
            },
            error: function (data) {
                console.log('internal error');
            }
        });
    })

</script>
<script>
    // For heading
    $('#heading_input').click(function () {
        $('#heading').css('border-color', '#FF0000');
    });
    $('#heading_input').keypress(function () {
        $('#heading').css('border-color', '#FF0000');
    });
    $('#heading_input').blur(function () {
        $('#heading').css('border-color', '#DFDFDF');
    });

    //for heading body
    $('#body_head_input').click(function () {
        $('#body').css('border-color', '#FF0000');
    });
    $('#body_head_input').click(function () {
        $('#heading_body').css('border-color', '#0062F9');
    });
    $('#body_head_input').keypress(function () {
        $('#body').css('border-color', '#FF0000');
    });
    $('#body_head_input').keypress(function () {
        $('#heading_body').css('border-color', '#0062F9');
    });
    $('#body_head_input').blur(function () {
        $('#body').css('border-color', '#DFDFDF');
    });
    $('#body_head_input').blur(function () {
        $('#heading_body').css('border-color', '#DFDFDF');
    });
    //job code
    $('#job_code').click(function () {
        $('#lower_body').css('border-color', '#0062F9');
    });
    $('#job_code').blur(function () {
        $('#lower_body').css('border-color', '#DFDFDF');
    });
    $('#job_code').click(function () {
        $('#body').css('border-color', '#FF0000');
    });
    $('#job_code').blur(function () {
        $('#body').css('border-color', '#DFDFDF');
    });
    //candidate name
    $('#candidate_name').click(function () {
        $('#lower_body').css('border-color', '#0062F9');
    });
    $('#candidate_name').blur(function () {
        $('#lower_body').css('border-color', '#DFDFDF');
    });
    $('#candidate_name').click(function () {
        $('#body').css('border-color', '#FF0000');
    });
    $('#candidate_name').blur(function () {
        $('#body').css('border-color', '#DFDFDF');
    });

</script>

