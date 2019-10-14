<meta name="csrf-token" content="{{ csrf_token() }}">

@include('include.emp_header')
@include('include.emp_leftsidebar')
<script>
		$.ajaxSetup({
		  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
		
		</script>
<style>
   input[type=text],
   textarea,
   {
       -moz-transition: all 0.3s ease-in-out;
       -o-transition: all 0.3s ease-in-out;
       -webkit-transition: all 0.3s ease-in-out;
       transition: all 0.3s ease-in-out;
       outline: none;
       padding: 15px 71px 1px 4px;
       margin: 5px 1px 3px 0px;
       border: 1px solid #DDDDDD;
   }
   
   input[type=text]:focus,
   textarea:focus {
       -moz-box-shadow: 0 0 5px #51cbee;
       -webkit-box-shadow: 0 0 5px #51cbee;
       box-shadow: 0 0 5px #51cbee;
       border: 1px solid #51cbee;
   }
   
   label {
       width: 100%;
       float: left;
   }
   
   label {
       font-weight: 200;
       font-family: inherit;
       font-size: 15px;
   }
   
   input[type=text] {
       width: 66%;
       padding: 7px;
       border-radius: 5px;
   }
   
   textarea {
       border-radius: 5px;
       width: 48%;
   }
   
   .form-control {
       border: 1px solid #bfbfbf;
       width: 84%;
       background: #fff;
   }
   
   .active,
   .btn:hover {
       background-color: #000000;
       color: white;
   }
   
   .form-group row {
       font: inherit;
   }
   #wrapper
   {
       width:100%;
       overflow-y:scroll;
   }
</style>

<div id="wrapper">
   <div class="content-page">
       <div class="content">
         <form action="{{url('employer/post_job/update')}}"   method="post">
           <input type="hidden" name="_token" value = "{{ csrf_token()  }}" >
           <input type="hidden" name="id" value="{{$toReturn['post_job']['ID']}}">    
           <div class="card">
               <div class="card-header" style="background-color:#317eeb;">
                   <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large;font-weight: 100;">Edit Posted Job</h3>
               </div>

               <div class="card-body">
                     <div class="row">
                          <!-- col 1 -->
                         <div class="col-lg-6 col-md-6 col-sm-6">
                             <!--group-->
                             <div class="form-group row">
                                <label for="address" class="control-label col-lg-4">Group<span style="color:red;">*</span></label>
                                <select name="group_of_company" id="for_group" class="form-control" style="width:42%; border: 1px solid #bbb8b8;margin-left:9px;">
                                        <option selected>{{$toReturn['post_job']->for_group}}</option>
                                        @foreach($toReturn['team_member_type'] as $team_member_type)
                                          <option value="{{$team_member_type['type_name']}}"> {{$team_member_type['type_name']}} </option>
                                        @endforeach
                               </select><br>
                               <span id="group_check"style="margin-left:35%;">Please Select Any Group</span>
                            </div>
                            <!--group-->
                             <!--Client Name-->
                             <div class="form-group row">
                                <label for="address" class="control-label col-lg-4">Client Name<span style="color:red;">*</span></label>
                             <input type="text" name="company_name" id="company_name" placeholder="Client Name" value="{{$toReturn['post_job']->client_name}}" style="width:42%; border: 1px solid #bbb8b8;margin-left: 9px;" >
                                
                                  <span id="clientname_check" style="margin-left:35%;">Please Select Any Client Name</span> 
                            </div>
                            <!--Client Name-->
                             <!--Privacy Level-->
                             <div class="form-group row">
                                 <label for="address" class="control-label col-lg-4">Privacy Level<span style="color:red;">*</span></label>
                                 <select name="privacy_level" id="privacy_level" class="form-control" style="width:42%; border: 1px solid #bbb8b8;margin-left: 9px;">
                                 <option selected>{{$toReturn['post_job']->privacy_level}}</option>
                                     <option value="public">Public</option>
                                     <option value="private">Private</option>
                                 </select>
                             </div>
                             <!--Privacy Level-->

                             <!--Owner Name-->
                             <div class="form-group row">
                                 <label for="address" class="control-label col-lg-4">Owner Name<span style="color:red;">*</span></label>
                                 <select name="owner_name" id="owner_name" class="form-control" style="width:42%; border: 1px solid #bbb8b8;margin-left: 9px;">
                                   <option value="">Select Owner Name</option>
                                 <option selected>{{$toReturn['post_job']->owner_id}}</option> 
                                        @foreach($toReturn['team_member'] as $team_member)
                                           <option> {{$team_member['full_name']}} </option>
                                         @endforeach
                                   
                                 </select>
                                 <span id="owner_check">Please Select Any Owner Name</span>     
                             </div>
                             <!--Owner Name-->

                             <!--Status-->
                             <div class="form-group row">
                                 <label for="address" class="control-label col-lg-4">Status<span style="color:red;">*</span></label>
                                 <select name="status" id="status" class="form-control" style="width:42%; border: 1px solid #bbb8b8;margin-left: 9px;">
                                 <option selected>{{$toReturn['post_job']->sts}}</option>
                                       <option value="Draft">Draft </option>
                                       <option value="Published">Published </option>
                                       <option value="Hold">On Hold </option>
                                       <option value="Deleted">Deleted </option>
                                       <option value="Cancelled">Cancelled </option>
                                       <option value="Closed">Closed </option>
                                       <option value="Pending">Pending </option>
                                 </select>
                             </div>
                             <!--Status-->

                             <!--Industry-->
                             <div class="form-group row">
                                 <label for="address" class="control-label col-lg-4">Industry<span style="color:red;">*</span></label>
                                 <select name="industry" id="industry" class="form-control" style="width:42%; border: 1px solid #bbb8b8;margin-left: 9px;">
                                 <option selected>{{$toReturn['industries_name']['industry_name']}}</option> 
                                    @foreach($toReturn['job_industries'] as $job_industries)
                                           <option value="{{$job_industries['ID']}}"> {{$job_industries['industry_name']}} </option>
                                     @endforeach
                                 </select>
                             </div>
                             <!--Industry-->

                             <!--Job Code-->
                             <div class="form-group row">
                                 <label for="" class="control-label col-lg-4">Job Code<span style="color:red;">*</span> </label>
                                 <div class="col-lg-8">
                                     <input type="text" name="job_code" id="job_code" placeholder="Job Code" maxlength="50" value="{{$toReturn['post_job']['job_code']}}" style="border: 1px solid #bbb8b8;">
                                     <br>
                                     <span id="jobcode_check">Please Enter Job Code</span> 
                                 </div>
                             </div>
                             <!--end of Job Code-->

                             <!--Job Title-->
                             <div class="form-group row">
                                 <label for="" class="control-label col-lg-4">Job Title<span style="color:red;">*</span> </label>
                                 <div class="col-lg-8">
                                     <input type="text" name="job_title" id="job_title" placeholder="Job Title" maxlength="50" value="{{$toReturn['post_job']['job_title']}}" style="border: 1px solid #bbb8b8;">
                                     <br>
                                     <span id="jobtitle_check">Please Enter Job Title</span> 
                                 </div>
                             </div>
                             <!--end of Job Title-->

                             <!--number of No.of Vacancies-->
                             <div class="form-group row">
                                 <label for="" class="control-label col-lg-4">No.of Vacancies<span style="color:red;">*</span> </label>
                                 <div class="col-lg-8">
                                     <input type="text" name="no_of_vacancies" id="" placeholder="No.of Vacancies" maxlength="150" value="{{$toReturn['post_job']['vacancies']}}"style="border: 1px solid #bbb8b8;">
                                 </div>
                             </div>
                             <!--end of No.of Vacancies-->

                             
                             <!--Closing Date-->
                             <div class="form-group row">
                                <label for="address" class="control-label col-lg-4">Closing Date (mm-dd-yyyy)<span style="color:red;">*</span></label>
                                <div class="col-sm-8 input-group date" >
                                    <input type="date" class="datetext datepicker" id="date" required name="closeing_date" <style="width:35%; padding:8px;"  value="{{$toReturn['post_job']['last_date']}}" style="border: 1px solid #bbb8b8;">
                                    <!--<span id="date_check">Enter Valid Closing Date</span>-->
                                </div>
                            </div>
                            <!--end of Closing Date-->

                            <!--Visa-->
                            <div class="form-group row">
                                <label for="address" class="control-label col-lg-4">Visa<span style="color:red;">*</span></label>
                                <select name="visa[]" id="job_visa_status" class="form-control" style="width:42%; border: 1px solid #bbb8b8;margin-left:9px;" multiple>
                                    <option selected>{{$toReturn['post_job']->job_visa_status}}</option>
                                    <option value="EAD-GC" selected>EAD-GC</option>
                                    <option value="EAD-H4">EAD-H4</option>
                                    <option value="EAD-L2">EAD-L2</option>
                                    <option value="EAD-OPT">EAD-OPT</option>
                                    <option value="Green Card">Green Card</option>
                                    <option value="H1 Visa">H1 Visa</option>
                                    <option value="TN Visa">TN Visa</option>
                                    <option value="US Citizen">US Citizen</option>
                                </select>
                            </div>
                            <!--Visa-->

                             <!--Qualification -->
                             <div class="form-group row">
                                <label for="address" class="control-label col-lg-4">Qualification <span style="color:red;">*</span></label>
                                <select name="quali[]" id="qualification" class="form-control" style="width:42%; border: 1px solid #bbb8b8;margin-left:9px;" multiple>
                                    <option selected>{{$toReturn['post_job']->qualification}}</option>
                                    <option value="BA" selected>BA</option>
                                    <option value="BE">BE</option>
                                    <option value="BS">BS</option>
                                    <option value="CA">CA</option>
                                    <option value="Certification">Certification</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="HSSC">HSSC</option>
                                    <option value="MA">MA</option>
                                    <option value="MBA">MBA</option>
                                    <option value="MS">MS</option>
                                    <option value="PhD">PhD</option>
                                    <option value="SSC">SSC</option>
                                    <option value="ACMA">ACMA</option>
                                    <option value="MCS">MCS</option>
                                    <option value="Does not matter">Does not matter</option>
                                    <option value="B.Tech">B.Tech</option>
                                    <option value="BCOM">BCOM</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BCA">BCA</option>
                                    <option value="M.SC">M.SC</option>
                                    <option value="M.Tech">M.Tech</option>
                                    <option value="M.Com">M.Com</option>
                                    <option value="MCA">MCA</option>
                                </select>
                            </div>
                            <!--Qualification -->

                         </div><!-- end col 1-->

                         <!-- col 2-->
                         <div class="col-lg-6 col-md-6 col-sm-6">
                              <!--location-->
                               <div class="form-group row" STYLE="background-color:;">
                                    <label for="address" class="control-label col-lg-4">Location <span style="color:red;">*</span></label>
                                    <select name="country" id="country"  class="form-control "  style="width:22%; border: 1px solid #bbb8b8; margin-left: 9px;" required>
                                      <option value="">{{$toReturn['post_job']->countries}}</option>
                                      <option value="United States" selected>United States</option>

                                      @foreach($toReturn['countries'] as $country)
                                    <option value="{{$country['country_id']}}">{{ $country['country_name'] }}</option>
                                      @endforeach  
                                      
                                     
                                    </select>
  
                                    <select name="state" id="state_text" class="form-control " style="max-width:22%; margin-left: 9px; border: 1px solid #bbb8b8;" required>
                                        <option value="">Select State</option>
                                          <!--<option >{{$toReturn['post_job']->state}}</option>-->
  
                                    </select>
                                    <!-- <div class="col-md-12" style="float: right;margin-left: 21em;margin-top: 2%;">
                                        
                                        <select name="city" id="city" class="form-control " style="max-width:22%; border: 1px solid #bbb8b8;" required>
                                            <option value="">Select state first</option>
                                              <option>{{$toReturn['post_job']->city}}</option>
  
                                      </select> -->
                                      <!-- START -->
                                        <div class="col-md-12" style="float: right;margin-left: 21.5em;margin-top: 2%;">
                                            <div id="select_city">
												<select name="city_name" id="city" class="form-control " style="max-width:22%; border: 1px solid #bbb8b8;" required>
													<option value="">Select City </option>
												</select>
												<br>
												<span id="citycheck">Please choose Your Location</span>
                                            </div> 
										</div>
                                        <input type="checkbox" id="myCheck"  onclick="mycity()" style="width:20px;height:20px;">
                                        <label id="city_label" class="control-label col-lg-4">Enter City if not present</label>

                                        <div id="textCity" style="display:none;"  class="form-group row col-md-12"> 
                                            <label for="" class="control-label col-lg-4">Enter City <span style="color:red;">*</span></label>
                                            <input type="text" class="col-sm-5" id="" name="city_text_name">
										</div>

                                      <!-- END -->
                                        <!-- <br>
                                        <span id="citycheck">Please choose Your Location</span> 
                                    </div> -->
                                    
                                </div>
                            <!--end of location-->

                             <!--Job Type-->
                             <div class="form-group row">
                                 <label for="address" class="control-label col-lg-4">Job Type <span style="color:red;">*</span></label>
                                 <select name="type_of_job" id="type_of_job" class="form-control" style="width:42%; border: 1px solid #bbb8b8;margin-left: 9px;">
                                 <option selected>{{$toReturn['post_job']->job_mode}}</option> 
                                    <option value="Full Time">Full Time</option>
                                     <option value="Contract">Contract</option>
                                     <option value="Contract-to-Hire">Contract-to-Hire</option>
                                     <option value="Part Time">Part Time</option>
                                 </select>
                             </div>
                             <!--Job Type-->

                             <!--Job Duration-->
                             <div class="form-group row">
                                 <label for="address" class="control-label col-lg-4">Job Duration <span style="color:red;">*</span></label>
                                 <input type="text" name="job_duration" id="job_duration" style="width:19%; float:left; margin-left: 1%;border: 1px solid #bbb8b8;" value="{{$toReturn['post_job']['job_duration']}}">
                                 <select name="day_week" id="job_duration_day" class="form-control" style="width:23%; border: 1px solid #bbb8b8; float:left; margin-left:0.5em;">
                                 <option selected>{{$toReturn['post_job']->job_duration_day}}</option> 
                                    <option value="Day">Day</option>
                                     <option value="Week">Week</option>
                                     <option value="Month">Month</option>
                                     <option value="Year">Year</option>
                                 </select>
                                 <span id="jobduration_check">Enter Valid Job Duration</span> 
                             </div>
                             <!--Job Duration-->

                             <!--Salary/Pay Rate -->
                             <div class="form-group row">
                                <label class="control-label col-lg-4">Salary/Pay Rate <span style="color:red;">*</span></label>
                                <!-- <input type="text" placeholder="min" name="pay_min" id="pay_min" style="width:20%; float:left;  margin-left: 1%;">&nbsp;&nbsp;
                                <input type="text" placeholder="Max" name="pay_max" id="pay_max" value="" maxlength="4" style="width:22%; float:left;"> -->
                                <select name="select_payment" id="pay_min" name="pay_min"class="form-control" style="max-width:42%; margin-left: 9px; border: 1px solid #bbb8b8;">
                                <option selected>{{$toReturn['post_job']->pay_min}}-{{$toReturn['post_job']->pay_max}}</option>
                                    <option> Select Salary/Pay Rate</option>
                                    <option value="15k-20k">15k - 20k</option>
                                    <option value="20k-25k">20k - 25k</option>
                                    <option value="25k-30k">25k - 30k</option>
                                    <option value="30k-35k">30k - 35k</option>
                                    <option value="35k-40k">35k - 40k</option>
                                    <option value="40k-45k">40k - 45k</option>
                                    <option value="45k-50k">45k - 50k</option>
                                    <option value="50k-55k">50k - 55k</option>
                                    <option value="55k-60k">55k - 60k</option>
                                    <option value="DOE">(DOE)Depends upon Experience</option>

                                    </select>
                                <div class="col-md-12" style="float: right;margin-left: 21em;margin-top: 2%;">
                                    <select name="pay_uom" id="pay_uom" class="form-control" style="width:19%; border: 1px solid #bbb8b8; float:left; margin-left:0.5em;">
                                    <option selected>{{$toReturn['post_job']->pay_uom}}</option>
                                        <option value="Hourly">Hourly</option>
                                        <option value="Annum">Annum</option>
                                    </select>
                                <span id="salary_check">Enter Valid Salary/Pay Rate</span> 
                                </div>
                             </div>
                             <!--Experience Required  -->

                             <div class="form-group row">
                                 <label for="" class="control-label col-lg-4">Experience Required <span style="color:red;">*</span> </label>
                                 <div class="col-lg-8">
                                     <input type="text" name="experience" id="experience" placeholder="Experience Required" maxlength="150" value="{{$toReturn['post_job']['experience']}}" style="border: 1px solid #bbb8b8;">
                                     <em style="vertical-align: sub;">years</em>
                                     <br>
                                     <span id="exp_req_check">Please Enter a Valid Year</span> 
                                 </div>
                             </div>
                             <!--Experience Required  -->

                             <!-- Requirements (Must)-->
                             <div class="form-group row">
                                 <label class="col-md-4 control-label" for="example-textarea-input">Requirements (Must)<span style="color:red;">*</span></label>
                                 <div class="col-md-8">
                                     <textarea cols="40" rows="3" name="requirement" id="textarea" style="width:66%;border: 1px solid #bbb8b8;">{{$toReturn['post_job']['requirement_must']}}</textarea>
                                     <br>
                                     <span class="tooltiptext">Must have required technologies like Java, Asp.net, PHP etc..</span>        
                                     <br>                         
                                     <span id="req_check">Please Enter Requirements</span> 
                                 </div>
                             </div>
                             <!--end of Requirements (Must)-->

                             <!-- Requirements (Optional)-->
                             <div class="form-group row">
                                 <label class="col-md-4 control-label" for="example-textarea-input">Requirements (Optional)</label>
                                 <div class="col-md-8">
                                     <textarea cols="40" rows="3" name="requirements" id="textarea" style="width:66%;">{{$toReturn['post_job']['requirement_optional']}}</textarea>
                                     <br>
                                     <span class="tooltiptext">Must have optional technologies like Java, Asp.net, PHP etc..</span>
                                 </div>
                             </div>
                             <!--end of Requirements (Optional)-->

                             <!--Job Description -->
                             <div class="form-group row">
                                 <label class="col-md-4 control-label" for="example-textarea-input">Job Description<span style="color:red;">*</span></label>
                                   <div class="col-md-8">
                                       <textarea name="job_desc" id="editor" cols="60" rows="6" style="width:66%;">{{$toReturn['post_job']['job_description']}}</textarea>
                                       <br>
                                     <span id="job_desc_check">Please Enter Job Description</span> 
                                       
                                       <br>
                                   </div>
                             </div>
                             <!--end of Job Description -->

                         </div>
                         <!-- end col 2 -->
                     </div>
                   <!-- End row -->
               </div>
               <!-- ens card body-->
           </div>
           <!-- card -->
           <!-- Badge -->
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
                    <div class="card-body">
                        <center>
                            <input name="skills" id="Result" class="form-control" value="{{$toReturn['post_job']->required_skills}}">
                        </center>
                        <br>

                        <div class="form-group row">
                            <label for="lastname" class="control-label col-lg-4">Add Skill <span style="color:red;">*</span></label>
                            <div class="col-lg-4">
                                <input class="form-control" style="border: 1px solid #737373; width:100%;" id="tags" name="skill" type="text">
                                <span class="help-block" style="text-align:right;"><small>
                                    Single skill at a time..</small></span>
                           <br>
                                  <span id="skill_check">Please Add Maximum Three Skill</span> 
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-info waves-effect waves-light m-l-10" onclick="add_element_to_array();">Add</button>
                              
                            </div>
                        </div>
                    </div>
                       <!-- .form -->
                      <!--  <div class="buttons" style="width: 100%; height:70px; background: #cecece;"> -->
                           <div class="form-group" style="width:100%; height:80px;background:#e4e4e4;"><br>
                           <center>
                               <input type="submit" name="submit" id="validatefrm" value="Update" class="btn btn-info" />
                           </center>
                       </div>

                       <br>
                   </div>
                   <!-- card-body -->

               </div>
               <!-- card -->
           </div>
      
        </form>
       </div>
   </div>
   @include('include.emp_footer')
   <script type="text/javascript">
    $('#country').on('change', function(e){
    console.log(e);
    $('#state_text').empty();
    var country_id = e.target.value;
    console.log (country_id);
        $.ajax({
            type: 'get',
            url: '{{url("employer/post_new_job/post_job/state/")}}'+"/"+country_id,
                success:function(data){
                    console.log(data);
                     $.each(data, function(index, value) {
                        $('#state_text').append("<option value="+'"'+value.state_id+'"'+"selected>"+value.state_name+"</option>");
                        console.log(value.state_id);
                        });
            },
                error:function(data){
                console.log(data);
            }

        });

    });
    $('#state_text').on('change', function(e){
    console.log(e);
    $('#city').empty();
    var state_id = e.target.value;
    console.log (state_id);
        $.ajax({
            type: 'get',
            url: '{{url("employer/post_new_job/post_job/city/")}}'+"/"+state_id,
                success:function(data){
                    console.log(data);
                    
                     $.each(data, function(index, value) {
                        $('#city').append("<option value="+'"'+value.city_id+'"'+"selected>"+value.city_name+"</option>");
                        });
                    
            },
                error:function(data){
                console.log(data);
            }
        });
    });
</script>
<script>
    
   var x = 0;
   var arr = Array();

   function add_element_to_array()
   {
   arr[x] = document.getElementById("tags").value;
   x++;
   document.getElementById("Result").value = arr;
   var e = "";   
       
   for (var y=0; y<array.length; y++)
   {
       e += array[y];
   }
   document.getElementById("Result").value = e;
   }


</script>

<script>
   var resizefunc = [];
</script>


<!-- Validation of Post new Job -->
<script>
           $(document).ready(function()
           {
               $("#clientname_check").hide();
               $("#owner_check").hide();
               $("#jobcode_check").hide();
               $("#jobtitle_check").hide();
               $("#citycheck").hide();
               $("#group_check").hide();
               var err_group=true;
               var err_clientname=true;
               var err_owner=true;
               var err_jobcode=true;
               var err_jobtitle=true;
               var err_city=true;

                //validate group
				$("#validatefrm").click(function()
				{
					check_group();
				});
				function check_group()
				{
					
					var group_val=$("#for_group").val();
					if(group_val=="")
					{
						$("#group_check").show();
						$("#group_check").focus();
						$("#group_check").css("color","red");
						err_group=false;
						return false;
					}
					else
					{
							$("#group_check").hide();
					}
				}
               //validate client name
               $("#validatefrm").click(function()
               {
                   check_clientname();
               });
               function check_clientname()
               {
                   
                   var clientname_val=$("#company_name").val();
                   if(clientname_val=="")
                   {
                       $("#clientname_check").show();
                       $("#clientname_check").focus();
                       $("#clientname_check").css("color","red");
                       err_clientname=false;
                       return false;
                   }
                   else
                   {
                           $("#clientname_check").hide();
                   }
               }
               //validate owner name
               $("#validatefrm").click(function()
               {
                   check_owner();
               });
               function check_owner()
               {
                   var owner_val=$("#owner_name").val();
                   if(owner_val=="")
                   {
                       $("#owner_check").show();
                       $("#owner_check").focus();
                       $("#owner_check").css("color","red");
                       err_owner=false;
                       return false;
                   }
                   else
                   {
                       $("#owner_check").hide();
                   }
               }

               //validate job code
               $("#validatefrm").click(function()
               {
                   check_jobcode();
               });
               function check_jobcode()
               {
                   var jobcode_val=$("#job_code").val();
                   if(jobcode_val=="")
                   {
                       $("#jobcode_check").show();
                       $("#jobcode_check").focus();
                       $("#jobcode_check").css("color","red");
                       err_jobcode=false;
                       return false;
                   }
                   else
                   {
                       $("#jobcode_check").hide();
                   }
               }

               //validate job title
               $("#validatefrm").click(function()
               {
                   check_jobtitle();
               });
               function check_jobtitle()
               {
                   var jobtitle_val=$("#job_title").val();
                   if(jobtitle_val=="")
                   {
                       $("#jobtitle_check").show();
                       $("#jobtitle_check").focus();
                       $("#jobtitle_check").css("color","red");
                       err_jobtitle=false;
                       return false;
                   }
                   else
                   {
                       $("#jobtitle_check").hide();
                   }
               }
              

               //Validation Location
               $("#validatefrm").click(function()
               {
                   check_location();
               });
               function check_location()
               {
                   var loc_val=$("#country").val();
                   var loc_val1=$("#state_text").val();
                   var loc_val2=$("#city").val();
                   if((loc_val=="")||(loc_val1=="")||(loc_val2==""))
                   {
                       $("#citycheck").show();
                       $("#citycheck").focus();
                       $("#citycheck").css("color","red");
                       err_city=false;
                       return false;
                   }
                   else
                   {
                       $("#citycheck").hide();
                   }
               }
               $("#validatefrm").click(function()
               {
                   err_clientname=true;
                   err_owner=true;
                   err_jobcode=true;
                   err_jobtitle=true;
                   err_city=true;
                   err_group=true;
                   check_clientname();
                   check_owner();
                   check_jobcode();
                   check_jobtitle();
                   check_location();
                   check_group();
                   if((err_group==true)&&(err_clientname==true)&&(err_owner==true)&&(err_jobcode==true)&&(err_jobtitle==true)&&(err_date==true)&&(err_city==true))
                   {
                       return true;
                   }
                   else
                   {
                       return false;
                   }
               });
           });
       </script>

       <script>
           $(document).ready(function()
           {	
               $("#jobduration_check").hide();
               $("#salary_check").hide();
               $("#exp_req_check").hide();
               $("#req_check").hide();
               $("#job_desc_check").hide();
               $("#skill_check").hide();
               var err_jobduration=true;
               var err_salary=true;
               var err_exp_req=true;
               var err_req=true;
               var err_job_desc=true;
               var err_skill=true;

               //validate job duration
               $("#validatefrm").click(function()
               {
                   check_duration();
               });
               function check_duration()
               {
                   
                   var job_val=$("#job_duration").val();
                   
                   if(job_val=="")
                   {
                       $("#jobduration_check").show();
                       $("#jobduration_check").focus();
                       $("#jobduration_check").css("color","red");
                       err_jobduration=false;
                       return false;
                   }
                   else
                   {
                           $("#jobduration_check").hide();
                   }
               }

               //validate salary/ pay rate
               $("#validatefrm").click(function()
               {
                   check_salary();
               });
               function check_salary()
               {
                   
                   var salary_val=$("#pay_min").val();
                   var salary_max_val=$("#pay_max").val();
                   
                   if((salary_val=="")||(salary_max_val==""))
                   {
                       $("#salary_check").show();
                       $("#salary_check").focus();
                       $("#salary_check").css("color","red");
                       err_salary=false;
                       return false;
                   }
                   else
                   {
                           $("#salary_check").hide();
                   }
               }

               //validate experience required
               $("#validatefrm").click(function()
               {
                   check_exp_req();
               });
               function check_exp_req()
               {
                   
                   var exp_req_val=$("#experience").val();
                   var year=/^[0-9]{1}$/;
                   var result = exp_req_val.match(year);
                   if((exp_req_val=="")||(result == null))
                   {
                       $("#exp_req_check").show();
                       $("#exp_req_check").focus();
                       $("#exp_req_check").css("color","red");
                       err_exp_req=false;
                       return false;
                   }
                   else
                   {
                           $("#exp_req_check").hide();
                   }
               }
               
               //validate requirement
               $("#validatefrm").click(function()
               {
                   check_req();
               });
               function check_req()
               {
                   
                   var req_val=$("#textarea").val();
                   
                   if(req_val=="")
                   {
                       $("#req_check").show();
                       $("#req_check").focus();
                       $("#req_check").css("color","red");
                       err_req=false;
                       return false;
                   }
                   else
                   {
                           $("#req_check").hide();
                   }
               }
               //validate job description
               $("#validatefrm").click(function()
               {
                   check_job_desc();
               });
               function check_job_desc()
               {
                   
                   var job_desc_val=$("#editor").val();
                   
                   if(job_desc_val=="")
                   {
                       $("#job_desc_check").show();
                       $("#job_desc_check").focus();
                       $("#job_desc_check").css("color","red");
                       err_job_desc=false;
                       return false;
                   }
                   else
                   {
                           $("#job_desc_check").hide();
                   }
               }
               //validate add skill
               $("#validatefrm").click(function()
               {
                   check_skill();
               });
               function check_skill()
               {
                   
                   // var skill_add_val=$("#tags").val();
                   var skill_val=$("#Result").val();
                  
                   if(skill_val=="")
                   {
                       $("#skill_check").show();
                       $("#skill_check").focus();
                       $("#skill_check").css("color","red");
                       err_skill=false;
                       return false;
                   }
                   else
                   {
                           $("#skill_check").hide();
                   }
               }

               $("#validatefrm").click(function()
               {
                   err_jobduration=true;
                   err_salary=true;
                   err_exp_req=true;
                   err_req=true;
                   err_job_desc=true;
                   err_skill=true;
                   check_duration();
                   check_salary();
                   check_exp_req();
                   check_req();
                   check_job_desc();
                   check_skill();

                   if((err_jobduration==true)&&(err_salary==true)&&(err_exp_req==true)&&(err_req==true)&&(err_job_desc==true)&&(err_skill==true))
                   {
                       return true;
                   }
                   else
                   {
                       return false;
                   }
               });
           });
       </script>
    <script>
       $(document).ready(function() {
           $('#closeing_date').datepicker();
           $('#closeing_date').datepicker('setDate', 'today');
       });
   </script>
<script>
    function mycity() {

        var checkBox = document.getElementById("myCheck");
        if (checkBox.checked == true){
            $('#select_city').css('display','none');
            $('#textCity').css('display','block');
            $('#city_label').css('display','none')
            // city2.style.display = "block";
            // city.style.display = "none";
            }
        else {
            $('#select_city').css('display','block');
            $('#textCity').css('display','none');
            $('#city_label').css('display','block')
            }
    }
    </script>
</body>