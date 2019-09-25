@include('include.headers')
@include('include.leftSidebars')
<style>
    .chip {
        display: inline-block;
        padding: 0 25px;
        height: 33px;
        font-size: 18px;
        line-height: 33px;
        border-radius: 25px;
        background-color: #f1f1f1;
    }
    
    .closebtn {
        padding-left: 10px;
        color: #888;
        font-weight: bold;
        float: right;
        font-size: 20px;
        cursor: pointer;
    }
    
    .closebtn:hover {
        color: #000;
    }
    #wrapper{
        width:100%;
        overflow-y:scroll;
    }
    
   </style>

 <div class="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="  background-color:#317eeb;">
                            <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Add Skill</h3></div>
                        <div class="card-body">
                            <p>Please enter your skill keyword below. Please know that your resume will be searched based on these skills. if You do not enter all the skill . your resume will not be included on our seach for desired jobs.
                                <br>
                                <br><b>Examples</b>
                                <br> PHP Developer may put following keywords: PHP developer, PHP coder, PHP programer, website developer, java script, ajax etc.
                                <br> Accountant may enter following: Accounts, Cost Accounts,ACCA.
                                <BR>
                                <span class="badge badge-success">Great Skill added successfully, please add more skills</span>
                            </p>
                            <h3>Your Skill</h3>

                            <!-- end row -->

                            <div class="row">
                                <!-- badge -->
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                        @foreach($data as $data) 
                                            <div class="chip">{{$data->skill_name}} <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span></div>
                                           <!-- <div class="chip"> {{$data->skill_name}} <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span></div>
                                            <div class="chip"> {{$data->skill_name}}<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span></div>-->
                                           
                                            @endforeach
                                            <input name="tags" id="tags" class="form-control" value="admin,dashboard,xyz">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Badge -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="{{url('jobseeker/add_skill/add')}}" method="post">
                                        <div class="form-group row">
                                            <label for="lastname" class="control-label col-lg-4">Add Skill <span style="color:red;">*</span></label>
                                            <div class="col-lg-4">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input class="form-control" style="border: 1px solid #737373; width:100%;" id="mobile_number1" name="mobile_number" type="tel">
                                                <span class="help-block" style="text-align:right;"><small>
                                                    Single skill at a time..</small></span>

                                            </div>
                                            <div class="col-lg-4">
                                                <button type="submit" class="btn btn-info waves-effect waves-light m-l-10">Add</button>
                                    </form>
                                                 <a href="{{URL::to('/admindashboard')}}"><input type="button" value="Finish" class="btn btn-info"></a>
                                            </div>
                                           

                                        </div>
                                   
                                    </div>
                                    <!-- .form -->
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div>
                        <!-- col -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- content -->
            </div>
        </div>
    </div>
    </div>
    @include('include.footers')
</body>

<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->

</html>