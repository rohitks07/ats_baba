@include('include.emp_header')
@include('include.emp_leftsidebar')

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
{{-- <link href="{{url('public/css/material.css')}}" rel="stylesheet"> --}}

{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.simple-calendar.js"></script> --}}
<link rel="stylesheet" type="text/css" href="simple-calendar.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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


<script>
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    document.write(today);
    today = yyyy + '-' + mm + '-' + dd;
    // alert(today);
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },

            navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
            editable: true,
            events: [{
                    start: today,
                    rendering: 'background',

                },
                {
                    title: 'Business Lunch',
                    start: '2019-09-03T13:00:00',
                    constraint: 'businessHours'
                },
                {
                    title: 'Meeting',
                    start: '2019-09-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: '#257e4a'
                },
                {
                    title: 'Conference',
                    start: '2019-09-19',
                    end: '2019-09-20'
                },
                {
                    title: 'Party',
                    start: '2019-09-29T20:00:00'
                },

                // areas where "Meeting" must be dropped
                {
                    groupId: 'availableForMeeting',
                    start: '2019-09-11T10:00:00',
                    end: '2019-09-11T16:00:00',
                    rendering: 'background'
                },
                {
                    groupId: 'availableForMeeting',
                    start: '2019-09-13T10:00:00',
                    end: '2019-09-13T16:00:00',
                    rendering: 'background'
                },

                // red areas where no events can be dropped
                //   {
                //     start: '2019-09-24',
                //     end: '2019-09-28',
                //     overlap: false,
                //     rendering: 'background',
                //     color: '#ff9f89'
                //   },
                //   {
                //     start: '2019-09-06',
                //     end: '2019-09-08',
                //     overlap: false,
                //     rendering: 'background',
                //     color: '#ff9f89'
                //   }
            ]
        });

        calendar.render();
    });

</script>
<style>
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

    .input-field .prefix~.autocomplete-content {
        margin-left: 3rem;
        width: 92%;
        width: calc(100% - 3rem)
    }

    .autocomplete-content li .highlight {
        color: #444
    }

    .autocomplete-content li img {
        height: 40px;
        width: 40px;
        margin: 5px 15px
    }

    .chips .autocomplete-content {
        margin-top: 0;
        margin-bottom: 0
    }

    #wrapper {
        width: 100%;
        overflow-y: scroll;
    }

</style>
<style>
    #calendar {
        max-width: 700px;
        margin: 0 auto;
    }

    .autocomplete-suggestions {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #999;
        background: #FFF;
        cursor: default;
        overflow: auto;
        -webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64);
        -moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64);
        box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64);
    }

    .autocomplete-suggestion {
        padding: 2px 5px;
        white-space: nowrap;
        overflow: hidden;
    }

    .autocomplete-no-suggestion {
        padding: 2px 5px;
    }

    .autocomplete-selected {
        background: #F0F0F0;
    }

    .autocomplete-suggestions strong {
        font-weight: bold;
        color: #000;
    }

    .autocomplete-group {
        padding: 2px 5px;
        font-weight: bold;
        font-size: 16px;
        color: #000;
        display: block;
        border-bottom: 1px solid #000;
    }

    input {
        font-size: 28px;
        padding: 10px;
        border: 1px solid #CCC;
        display: block;
        margin: 20px 0;
    }

</style>
<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col md-6">
                    <div id='calendar'></div>
                </div>

                <!-- End row-->
                <!-----------------------------------------------------------------start of first table------------------------------------------------->


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                {{-- buttons --}}


                                <div class="col-md-11">
                                    <h3 class="card-title">New Interview</h3>
                                    {{-- <h3 class="card-title" style="font-size:20px">New Interview</h3> --}}
                                </div>

                                <div class="col-md-1">
                                    <a class="btn btn-success"
                                        href="{{url('employer/dashboard/interview-meeting')}}">Back</a>
                                </div>
                            </div>
                            {{-- end buttons --}}
                        </div>
                        <form action="{{url('employer/dashboard/interview_meeting/add')}}" method="POST">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Date</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    <input type="date" class="form-control" name="date_interview"
                                                        id="interviewdate" aria-describedby="helpId" placeholder=""
                                                        required>

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Start Time</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    <input id="srttime" class="timepicker" name="start_time" type="time"
                                                        required>

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>End Time</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    <input id="endtime" class="timepicker1" name="end_time" type="time"
                                                        required>

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Type</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    {{-- Drop down --}}
                                                    <div class="form-group">
                                                        <select class="form-control" name="type" id="type" required>
                                                            <option value="">Select Interview Type</option>
                                                            <option>Telephonic</option>
                                                            <option>Skype/video</option>
                                                            <option>In-Person</option>

                                                        </select>
                                                    </div>

                                                    {{--Drop down close--}}
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Time Zone</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    {{-- Drop down --}}
                                                    <div class="form-group">
                                                        <select class="form-control" name="time_zone" id="type"
                                                            required>
                                                            <option value="">Select Time Zone</option>
                                                            @foreach ($toReturn['time_zone'] as $item)
                                                            <option>{{$item->time_zone_name}}</option>
                                                            @endforeach


                                                        </select>
                                                    </div>

                                                    {{--Drop down close--}}
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Interview For Job</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    {{-- Drop down --}}
                                                    <div class="form-group">
                                                        <select class="form-control" name="interview_type" id="jobcode"
                                                            required>
                                                            <option value="">Select Job For Schedule an interview
                                                            </option>
                                                            @foreach ($toReturn['jobpost'] as $item)
                                                            <option value="{{$item['job_code']}}">{{$item['job_code']}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    {{--Drop down close--}}

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Candiate Name</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    {{-- Drop down --}}
                                                    <div class="form-group">
                                                        <select class="form-control"  
                                                            id="candidatename" required>
                                                            <option value="">Select Candiate</option>
                                                            @foreach ($data['name'] as $i)
                                                            <option value="{{$i['first_name']}}|{{$i['ID']}}">
                                                    {{$i['first_name']}}</option>
                                                    @endforeach
                                                    </select>

                                                    {{-- <input type="text" class="form-control" name="candiate_name"
                                                        id="autocomplete-ajax">

                                                    <input type="text" name="country" id="autocomplete-ajax-x"
                                                        disabled="disabled"
                                                        style="color: #CCC;background: transparent; z-index: -1;border:none;" /> --}}

                                                </div>
                                                {{--Drop down close--}}

                                            </div>
                                            <div class="col-md-1">

                                            </div>
                                        </div>


                                    </div>
                                    <div class="row ml-5">
                                        <div class="col-md-5 mt-2 ">
                                            <h4>Instruction</h4>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <div class="form-group">

                                                <textarea class="form-control" aria-label="With textarea"
                                                    id="instruction" name="instruction" required></textarea>

                                            </div>
                                            {{--Drop down close--}}

                                        </div>
                                        
                                    </div>


                                </div>
                                {{--row --}}

                                {{--row --}}
                                <div class="row ml-5">
                                    <div class="col-md-5 mt-2 ">

                                    </div>
                                    <div class="col-md-6 mt-2">


                                        <button type="submit" class="btn btn-primary">Submit</button>


                                        <div class="col-md-1">

                                        </div>
                                    </div>


                                </div>
                                {{--row --}}
                                <div class="row mt-2">
                                    <div class="col-md-5 mt-2 ">

                                    </div>

                                </div>


                            </div>

                            {{--row --}}
                    </div>
                    



                    <!--end of col-->
                </div>
                <!--end of col-->
                </form>
            </div>
            <!--end of card body-->
        </div>
        <!--end of card -->
    </div>
</div>
<!--end of row-->
<div class="col-md-3">

</div>

</div>
<!--end of row-->

<!------------------------------------------------------------End of first table---------------------------------------------------------------->
<!-----------------------------------------------------------------start of second line of table----------------------------------->


<!------------------------------------------------------------End of second table---------------------------------------------------------------->

<!------------------------------------------------------------start of third table--------------------------------------------------------------->

<!---------------------------------------end  of third table--------------------------------------->


<!--start of third table-->

</div>
<!--end of content-->
</div>
<!--end of content-page-->
</div>
<!--end of wrapper-->
<script>
    $('.timepicker').timepicker();
    $('.timepicker1').timepicker();

</script>


<script>
    var resizefunc = [];

</script>
@include('include.emp_footer')
<script type="text/javascript" src="{{asset('public/scripts/jquery.mockjax.js')}}"></script>
<script type="text/javascript" src="{{asset('public/src/jquery.autocomplete.js')}}"></script>
{{-- <script type="text/javascript" src="{{asset('scripts/countries.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/demo.js')}}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}

<script>
    $(document).ready(function () {
        $.ajax({
            type: 'get',
            url: '{{url("employer/dashboard/interview-meeting/show_candidate")}}',
            success: function (data) {
                // console.log(data);
                var data_val = [];
                var explode;
                var exploded_data_val = [];
                $.each(data, function (index, value) {
                    data_val.push(value);
                    // var explode = $(data_val).text().split(':');
                    // exploded_data_val.push(explode);

                });
                console.log(data_val);
                $(function () {
                    'use strict';

                    var countriesArray = $.map(data_val, function (value, key) {
                        return {
                            value: value,
                            data: key
                        };
                    });

                    // Setup jQuery ajax mock:
                    $.mockjax({
                        url: '*',
                        responseTime: 2000,
                        response: function (settings) {
                            var query = settings.data.query,
                                queryLowerCase = query.toLowerCase(),
                                re = new RegExp('\\b' + $.Autocomplete.utils
                                    .escapeRegExChars(queryLowerCase),
                                    'gi'),
                                suggestions = $.grep(countriesArray, function (
                                    country) {
                                    // return country.value.toLowerCase().indexOf(queryLowerCase) === 0;
                                    return re.test(country.value);
                                }),
                                response = {
                                    query: query,
                                    suggestions: suggestions
                                };

                            this.responseText = JSON.stringify(response);
                        }
                    });

                    // Initialize ajax autocomplete:
                    $('#autocomplete-ajax').autocomplete({
                        // serviceUrl: '/autosuggest/service/url',
                        lookup: countriesArray,
                        lookupFilter: function (suggestion, originalQuery,
                            queryLowerCase) {
                            var re = new RegExp('\\b' + $.Autocomplete.utils
                                .escapeRegExChars(queryLowerCase),
                                'gi');
                            return re.test(suggestion.value);
                        },
                        onSelect: function (suggestion) {
                            $('#selction-ajax').html('You selected: ' +
                                suggestion.value + ', ' + suggestion
                                .data);
                        },
                        onHint: function (hint) {
                            $('#autocomplete-ajax-x').val(hint);
                        },
                        onInvalidateSelection: function () {
                            $('#selction-ajax').html('You selected: none');
                        }
                    });


                });

            },
            error: function (data) {
                console.log(data);
            }
        });

    });

</script>



</body>

</html>
