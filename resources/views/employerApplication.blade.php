@include('include.emp_header')
@include('include.emp_leftsidebar')

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
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


<style>
    #wrapper{
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
</style>
	<div id="wrapper">
        <div class="content-page">
                <!-- Start content -->
                <div class="content">
                   <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color: #317eeb;padding: 2px 20px;">
                                </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                            <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                                                
                                                    <thead>
                                                    <!--<tr>
                                                        <th colspan="6">Job Details</th>
                                                        <th colspan="3">Candidate Details</th>
                                                        <th>Submittal Date</th>

                                                    </tr>-->
                                                    <tr>
                                                    	<th> Code</th>
                                                        <th>Title</th>
                                                        <th>Client</th>
                                                        <th>Location</th>
                                                        <th>Visa Type</th>
                                                        <th>Pay Rate</td>
                                                        <th>Name</td>
                                                        <th>Location</th>
                                                        <th>Visa</th>
                                                        <th>Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody> 

                                                    @foreach($toReturn['application'] as $application)
                                                    <tr>   
                                                    <?php $id=$application['application_id'];
                                                    $job_id=$application['ID'];
                                                    $seeker_id=$application['seeker_id'];
                                                    $date_application=$application['applied_date'];
                                                    $new_date = date("m-d-Y", strtotime($date_application));
                                                    ?>  
                                                                                      
                                                        <td>{{$application['job_code']}}</td>
                                                        <td><a href="{{url('employer/dashboard')}}">{{$application['job_title']}}</a></td>
                                                        <td>{{$application['job_client_name']}}</td>
                                                        <td>{{$application['location']}}</td>
                                                        <td>{{$application['job_visa']}}</td>
                                                        <td>{{$application['pay_min']}}-{{$application['pay_max']}}</td>
                                                        <td>{{$application['can_first_name']}} {{$application['can_last_name']}}</td>
                                                        <td>{{$application['can_location']}}</td>
                                                        <td>{{$application['can_visa']}}</td>
                                                        <td>{{$new_date}}</td>
                                                        <td>
                                                        <a data-toggle="modal" data-target="#interviewModal{{$application['seeker_id']}}"><i class="fa fa-clock-o" aria-hidden="true" title="Schedule Interview"></i></a>
                                                        <!-- <a class="hidden on-editing login-row" data-toggle="interviewModal" data-target="#interviewModal" data-placement="top" title="" data-original-title="Schedule  interview"><i class="fa fa-time">u r</i></a> -->
                                                        <a href="{{url('employer/appli_del/'.$id)}}" class="hidden on-editing login-row" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                        <a href="{{url('employer/appli_forward/'.$id)}}" ><i class="fa fa-arrow-right"  title="Candidate Forward "></i></a>
                                                        
                                                         <!-- schedule interview model -->
                                                        <div class="modal fade" id="interviewModal{{$application['seeker_id']}}" role="dialog">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Schedule Interview</h4>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{url('employer/dashboard/interview_meeting/add')}}" method="POST">
                                                                        {{csrf_field()}}
                                                                        <div class="form-group">
                                                                            <label for="date">Date</label>
                                                                            <input type="date" class="form-control" id="date_interview" name="date_interview" required/>
                                                                        </div>
                                                                        <input type="hidden" id="job_id" name="job_id" value="{{$job_id}}">
                                                                        <input type="hidden" name="seeker_id" value="{{$application['seeker_id']}}">
                                                                        <div class="form-group">
                                                                            <label for="email">Start Time</label>
                                                                            <input id="srttime" class=" form-control timepicker" name="start_time" type="time" required>
                                                                            <!-- <input type="time" class="form-control" id="" placeholder="Start Time" name="srttime"> -->
                                                                        </div>
                                                    
                                                                        <div class="form-group">
                                                                            <label for="email">End Time</label>
                                                                            <input id="endtime" class="form-control timepicker1" name="end_time" type="time" required>
                                                                            <div class="col-md-1">
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="invitees_to" value="{{$application['can_first_name']}} {{$application['can_last_name']}}">
                                                                        <input type="hidden" name="invitees_cc" value="{{$application['can_first_name']}} {{$application['can_last_name']}}">
                                                                        <div class="form-group">
                                                                            <label for="email">Interview Type</label>
                                                                            <select class="form-control" name="type" id="type" required>
                                                                                <option value="">Select Interview Type</option>
                                                                                <option>Telephonic</option>
                                                                                <option>Skype/video</option>
                                                                                <option>In-Person</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="hidden" name="interview_type" value="">
                                                                        <input type="hidden" name="candiate_name" value="{{$application['can_first_name']}} {{$application['can_last_name']}}">
                                                                        <div class="form-group">
                                                                            <label for="email">Instruction</label>
                                                                            <input type="text" class="form-control" id="" placeholder="" name="instruction" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Time Zone</label>
                                                                            <select class="form-control" name="time_zone" required>
                                                                                <option value="">Time Zone</option>
                                                                                <option>Eastern Time Zone(ET)</option>
                                                                                <option>Pacific Time Zone(PT)</option>
                                                                                <option>Central Time Zone(CT)</option>
                                                                                <option>Indian Standard Time(IST)</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-info">Submit</button>
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </td>
                                                    </tr>
                                                    @endforeach                                              
                                                </tbody>
                                            </table>
                                            {{$toReturn['application']->links()}}
                                    </div> 
                                </div>
                            </div>  <!-- end card-body -->
                            </div>   <!--end card-->
                   </div>  <!--end row-->         


                   



                  
                                        @include('include.emp_footer')

<script >
    $('#edit_modal_Category').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var category = button.data('category')
        var categoryid = button.data('categoryid')
        var modal = $(this)


        modal.find('.modal-body #category').val(category);
        modal.find('.modal-body #categoryid').val(categoryid); 

    })
</script>
<script>
    $('.timepicker').timepicker();
    $('.timepicker1').timepicker();

</script>

</body>
</html>