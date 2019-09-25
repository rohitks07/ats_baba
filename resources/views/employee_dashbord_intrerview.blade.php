@include('include.emp_header')
@include('include.emp_leftsidebar')
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.simple-calendar.js"></script> --}}
<link rel="stylesheet" type="text/css" href="simple-calendar.css" />
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

    #wrapper {
        width: 100%;
        overflow-y: scroll;
    }

</style>
<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <br>
            <div class="row">
                
            </div>
            <!-- End row-->
            <!-----------------------------------------------------------------start of first table------------------------------------------------->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                
                            {{-- buttons --}}


                            <div class="col-md-10">
                                <h3 class="card-title">Interview Tab</h3>                                
                            </div>
                            <div class="col-md-1">
                            <a href="{{url('employer/dashboard/interview')}}"  class="btn btn-warning">Interviews</a>
                            </div>
                            <div class="col-md-1">
                            <a href="{{url('employer/dashboard/meeting')}}" class="btn btn-info">Meetings</a>
                            </div>
                        </div>
                        {{-- end buttons --}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                <h4 class="card-body">CALANDER</h4>
                                    <!--Start-->

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        {{-- Add interview button--}}
                                    
                                    <div class="col-md-9 ">
                                            <h4 class="card-body">INTERVIEWS</h4>

                                    </div>
                                    <div class="col-md-3" >
                                        <a href="{{url('employer/dashboard/interview/add')}}" style="border-radius:20px;" class="btn btn-primary mt-2">Add Interview</a>
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                        <table class="table mt-4">
                                            <thead>
                                                <tr>
                                                    <th>Candidate</th>
                                                    <th>Date</th>
                                                    <th>Job Code</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row"></td>
                                                    <td></td>
                                                    <td></td>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end of col-->
                            </div>
                            <!--end of col-->
                        </div>
                        <!--end of card body-->
                    </div>
                    <!--end of card -->
                </div>
                <!--end of row-->

                
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
    var resizefunc = [];

</script>
@include('include.emp_footer')
</body>

</html>
