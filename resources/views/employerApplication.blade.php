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
                                                    <?php $id=$application['application_id']; ?>  
                                                                                      
                                                        <td>{{$application['job_code']}}</td>
                                                        <td><a href="{{url('employer/dashboard')}}">{{$application['job_title']}}</a></td>
                                                        <td>{{$application['job_client_name']}}</td>
                                                        <td>{{$application['location']}}</td>
                                                        <td>{{$application['job_visa']}}</td>
                                                        <td>{{$application['pay_min']}}-{{$application['pay_max']}}</td>
                                                        <td>{{$application['can_first_name']}} {{$application['can_last_name']}}</td>
                                                        <td>{{$application['can_location']}}</td>
                                                        <td>{{$application['can_visa']}}</td>
                                                        <td>{{$application['applied_date']}}</td>
                                                        <td>
                                                        <a data-toggle="modal" data-target="#interviewModal"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                                                        <!-- <a class="hidden on-editing login-row" data-toggle="interviewModal" data-target="#interviewModal" data-placement="top" title="" data-original-title="Schedule  interview"><i class="fa fa-time">u r</i></a> -->
                                                        <a href="{{url('employer/appli_del/'.$id)}}" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                        <a href="{{url('employer/appli_forward/'.$id)}}" ><i class="fa fa-arrow-right" title="Candidate Forward"></i></a>
                                                        
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


                   <div class="modal fade" id="interviewModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Schedule Interview</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <!--  moday body content here-->
        <div class="modal-body">
            <form action="{{url('employer/dashboard/interview_meeting/add')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date_interview" name="date_interview" required/>
                </div>
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
                <div class="form-group">
                    <label for="email">Interview Type</label>
                    <select class="form-control" name="type" id="type">
                        <option>Select Interview Type</option>
                        <option>Telephonic</option>
                        <option>Skype/video</option>
                        <option>In-Person</option>
                    </select>
            
                </div>
                <input type="hidden" name="interview_type"  value="{{$application['job_code']}}">
                <!-- send only one name -->
                
                <input type="hidden" name="candiate_name"  value="{{$application['can_first_name']}} {{$application['can_last_name']}}">

                <div class="form-group">
                    <label for="email">Instruction</label>
                    <input type="text" class="form-control" id="" placeholder="" name="instruction">
                </div>
                <!-- new row added for time zone -->
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
                <!-- time zone row end -->


                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" >Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </form>

        </div>
      </div>
      
    </div>
  </div>
  
</div>




                   <div id="add_new_Category" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0">Add New Category</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    <div class="modal-body">
                                                        <form action ="{{url('master/Category/add')}} " method="post"> 
                                                            <div class="row"> 
                                                                <div class="col-md-12"> 
                                                                    <div class="form-group"> 
                                                                    <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                                                    <label for="field -1" class="control-label">Category</label> 
                                                                    <input type="text" class="form-control" name="Category" placeholder="enter here ..... Category"> 
                                                                </div> 
                                                            </div> 
                                                        </div>                                                       
                                                    </div>   
                                                    
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                    </div> 
                                                </div> 
                                            </form>
                                            </div>
                                        </div><!-- /.modal -->

                   <div id="edit_modal_Category" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0">Edit Category</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    <div class="modal-body">
                                                                <form action ="{{url('master/Category/edit')}} " method="post"> 
                                                                    <div class="row"> 
                                                                        <div class="col-md-12"> 
                                                                         <div class="form-group"> 
                                                                            <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                                                            <label for="field -1" class="control-label">Category</label> 
                                                                            <input type="hidden" name="id" id="categoryid">
                                                                            <input type="text" class="form-control" id="category" name="category" placeholder="enter here ..... institute name"> 
                                                                        </div> 
                                                                    </div> 
                                                            </div>                                                       
                                                    </div>    
                                                    
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">Update changes</button> 
                                                    </div> 
                                                </div> 
                                            </form>
                                            </div>
                                        </div><!-- /.modal -->
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