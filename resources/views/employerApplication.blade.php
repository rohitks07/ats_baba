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
	
</style>
	<div id="wrapper">
        <div class="content-page">
                <!-- Start content -->
                <div class="content">
                   <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color: #317eeb;padding: 2px 20px;height:70px;" >
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h3 style="color:white;margin-top:17px;margin-left:10px">Applications</h3>
                                        </div>
                                        <div class="col-md-4">
                                                <input id="myInput" type="text" placeholder="   Search" style="float:right;width:350px;border-radius:20px;height:30px;margin-top:18px;border:none;">

                                        </div>
                                    </div>

                                </div>

                            <div class="card-body" >
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                            <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; overflow-x:scroll;" >
                                                
                                                    <thead class="table-light" style="text-align:center;">
                                                    <!--<tr>
                                                        <th colspan="6">Job Details</th>
                                                        <th colspan="3">Candidate Details</th>
                                                        <th>Submittal Date</th>

                                                    </tr>-->
                                                    <tr>
                                                    	<th> Code</th>
                                                        <th>Title</th>
                                                        <th>Client</th>
                                                        <th width="10%">Location</th>
                                                        <th width="20%">Visa Type</th>
                                                        <th width="7%">Pay Rate</td>
                                                        <th>Name</td>
                                                        <th width="10%">Location</th>
                                                        <th>Visa</th>
                                                        <th width="7%">Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="myTable" style="text-align:center;"> 
                                                    @foreach($toReturn['application'] as $application)
                                                    <tr>   
                                                    <?php $id=$application['application_id'];
                                                        $job_id=$application['ID'];
                                                        $seeker_id=$application['seeker_id'];
                                                                         
                                                        ?>  
                                                        <td style="padding:5px;">{{$application['job_code']}}</td>
                                                        <td><a href="{{url('employer/jobsdetails/'.$job_id)}}">{{$application['job_title']}}</a></td>
                                                        <td>{{$application['job_client_name']}}</td>
                                                        <td>{{$application['job_city']}},&nbsp;{{$application['job_state']}}</td>
                                                        <?php $vis=$application['job_visa'];
                                                        $plus_visa=substr_count("$vis",",");
                                                        $sh=explode(",",$vis);
                                                        ?>
                                                        <td onmouseover="visa_type({{$id}});"><span id="data1{{$id}}" >{{$sh[0]}},&nbsp;+{{$plus_visa}}</span><span id="data2{{$id}}" style="display:none">{{$application['job_visa']}}</span></td>
                                                        <td>{{$application['pay_min']}}-{{$application['pay_max']}}</td>
                                                        <td><a href="{{url('employer/job_matching/'.$seeker_id)}}">{{$application['can_first_name']}} {{$application['can_last_name']}}</td>
                                                        <td>@if($application['seeker_city']){{$application['seeker_city']}},&nbsp;@endif{{$application['seeker_state']}}</td>
                                                        <td>{{$application['can_visa']}}</td>
                                                        <?php $applied_date=date('m-d-Y',strtotime($application['applied_date'])); ?>
                                                        <td>{{$applied_date}}</td>
                                                        <td>
                                                        <a data-toggle="modal" data-target="#interviewModal"><i class="fa fa-clock-o" aria-hidden="true" title="Schedule Interview"></i></a>
                                                        <a href="{{url('employer/appli_del/'.$id)}}" class="hidden on-editing login-row" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                        <a href="{{url('employer/appli_forward/'.$id)}}" ><i class="fa fa-arrow-right"  title="Candidate Forward "></i></a>
                                                        <a 
                                                        </td>
                                                        <div class="modal fade" id="interviewModal" role="dialog">
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
                                                                        <div class="form-group">
                                                                            <label for="email">Start Time</label>
                                                                            <input id="srttime" class=" form-control timepicker1" name="start_time" type="time" required>
                                                                            <!-- <input type="time" class="form-control" id="" placeholder="Start Time" name="srttime"> -->
                                                                        </div>
                                                    
                                                                        <div class="form-group">
                                                                            <label for="email">End Time</label>
                                                                            <input id="endtime"   class="form-control timepicker2" name="end_time" type="time" required>
                                                                            <div class="col-md-1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Interview Type</label>
                                                                            <select class="form-control" name="type" id="type">
                                                                                <option>Select Interview Type</option>
                                                                                <option>Telephonic</option>
                                                                                <option>Skype/video</option>
                                                                                <option>In-Person</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="hidden" name="interview_type" value="{{$application['ID']}}">
                                                                        <input type="hidden" name="candiate_name" value="{{$application['Seeker_id']}}">
                                                                        <div class="form-group">
                                                                            <label for="email">Instruction</label>
                                                                            <input type="text" class="form-control" id="" placeholder="" name="instruction">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Time Zone</label>
                                                                            <select class="form-control" name="time_zone">
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


                   


                   <script>
                    $('#srttime').timepicker1();
                    $('#endtime').timepicker2();
                
                </script>
                  
    @include('include.emp_footer')

<script >
    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
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
function visa_type(id)
{
    $("#data1"+id).hover(function(){
    $("#data1"+id).hide();
    $("#data2"+id).show();
       
    },function(){
    $("#data2"+id).hide();
    $("#data1"+id).show();
  });
}
</script>

</body>
</html>