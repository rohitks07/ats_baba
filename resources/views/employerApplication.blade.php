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
                                <div class="card-header" style="background-color: #317eeb;padding: 2px 20px;height:70px;" >
                            <input id="myInput" type="text" placeholder="   Search" style="float:right;width:350px;border-radius:20px;height:30px;margin-top:15px;">

                                </div>

                            <div class="card-body" >
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                            <table class="table table-striped table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; overflow-x:scroll;" >
                                                
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
                                                        <th width="10%">Location</th>
                                                        <th width="30%">Visa Type</th>
                                                        <th>Pay Rate</td>
                                                        <th>Name</td>
                                                        <th width="10%">Location</th>
                                                        <th>Visa</th>
                                                        <th width="7%">Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="myTable"> 

                                                    @foreach($toReturn['application'] as $application)
                                                    <tr>   
                                                    <?php $id=$application['application_id']; ?>  
                                                        <td>{{$application['job_code']}}</td>
                                                        <td><a href="{{url('employer/dashboard')}}">{{$application['job_title']}}</a></td>
                                                        <td>{{$application['job_client_name']}}</td>
                                                        <td>{{$application['location']}}</td>
                                                    
                                                        <?php $vis=$application['job_visa'];
                                                        $plus_visa=substr_count("$vis",",");
                                                        $sh=explode(",",$vis);
                                                        ?>
                                                        <td onmouseover="visa_type({{$id}});"><span id="data1{{$id}}" >{{$sh[0]}},&nbsp;{{$plus_visa}}+</span><span id="data2{{$id}}" style="display:none">{{$application['job_visa']}}</span></td>
                                                        <td>{{$application['pay_min']}}-{{$application['pay_max']}}</td>
                                                        <td>{{$application['can_first_name']}} {{$application['can_last_name']}}</td>
                                                        <td>{{$application['can_location']}}</td>
                                                        <td>{{$application['can_visa']}}</td>
                                                        <?php $applied_date=date('m-d-Y',strtotime($application['applied_date'])); ?>
                                                        <td>{{$applied_date}}</td>
                                                        <td>
                                                        <a data-toggle="modal" data-target="#interviewModal"><i class="fa fa-clock-o" aria-hidden="true" title="Schedule Interview"></i></a>
                                                        <a href="{{url('employer/appli_del/'.$id)}}" class="hidden on-editing login-row" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                        <a href="{{url('employer/appli_forward/'.$id)}}" ><i class="fa fa-arrow-right"  title="Candidate Forward "></i></a>
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
                                                                        <input type="hidden" name="interview_type" value="{{$application['job_code']}}">
                                                                        <input type="hidden" name="candiate_name" value="{{$application['can_first_name']}} {{$application['can_last_name']}}">
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