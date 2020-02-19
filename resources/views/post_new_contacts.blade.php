@include('include.emp_header')
@include('include.emp_leftsidebar')   
<style>
.form-control{
	border: 1px solid #737373;
	width: 84%;
}
.active, .btn:hover {
  background-color: #000000;
  color: white;
}
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
        width: 85%;
        padding: 7px;
        border-radius: 5px;
    }
    textarea {
        border-radius: 5px;
        width: 48%;
    }
    #wrapper{
    width:100%;
    overflow-y:scroll;
}
	
 </style> 
    <div id="wrapper">
      <div class="content-page">
                <!-- Start content -->
                <div class="content">
                        <div class="row"> 							
                    <div class="col-md-12">
                        <div class="card" style="border: 1px #C0C0C0 solid;">
							<div class="card-header" style="background-color:#317eeb;"><b>ADD CONTACT DETAILS</b>
							<a href="{{url('employer/my_posted_contacts')}}"><button type="button" class="btn btn-info" style="float:right;">Back</button></a>
							<!-- <a class="btn btn-secondary" href="{{url('employer/post_new_contacts/change_add_status')}}" role="button">ADD CONTACT</a> -->
							</div>  
							 <div class="card-body">
				                    <div class="row">
				                    	<div class="col-md-6">
								 <!--Salutation-->	     
							<form action="{{url('employer/post_new_contacts/add')}}" method="post" autocomplete="off">       
							<input type="hidden" name="_token" value = "{{ csrf_token()  }}" >                        
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Salutation<span style="color:red;">*</span></label>
											<div class="col-sm-8">
												<select class="form-control" name="salutation" style="width:40%; border: 1px solid #737373; background: #fff;" required>	
												<option value="">--Select--</option>
												@foreach($salutions as $salution)												
												<option value="{{$salution->id}}" <?php if($contact_object->sub_name==$salution->id){ echo "selected"; } ?>>{{$salution->salutation}}</option>
												@endforeach
												</select>
										   </div>
									</div>
									<!--end of Salutation-->
									<!--Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Name <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												 <input type="text" id="" name="name" placeholder="Contact Person Name" required value="{{$contact_object->cont_per_name}}" maxlength="15">
											</div>
									  </div>
								<!--end of Name-->
								<!--Phone-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Phone (C)<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												 <input type="text" id="phonec" name="phone_c" placeholder="00.000.000" maxlength="12" required value="{{$contact_object->phone_c}}">
											</div>
									  </div>
								<!--end of Phone (C)-->
								<!--Phone (W)-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Phone (W)</label>
											<div class="col-lg-8">
												 <input type="text" id="phonew" name="phone_w" placeholder="00.000.000"  maxlength="12" value="{{$contact_object->phone_w}}"> 
											</div>
									  </div>
								<!--end of Phone (W)-->
								
							</div>
							<div class="col-md-6">
								<!--Email (H))-->	   
									<div class="form-group row" >
										<label for="" class="control-label col-lg-4">Email (H)<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												 <input type="email" class="form-control" id="" name="email_h" placeholder="Email ID" maxlength="60" required value="{{$contact_object->email_h}}">
											</div>
									  </div>
								<!--end of Email (H)-->
								<!--Email (W)-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Email (W)</label>
											<div class="col-lg-8">
												 <input type="email" class="form-control" id="" name="email_w" placeholder="Email ID"  maxlength="60" value="{{$contact_object->email_w}}">
											</div>
									  </div>
								<!--end of Email (W)-->
									
								
									   <!--Address-->				
										<div class="form-group row">
											<label for="address" class="control-label col-lg-4">Address<span style="color:red;">*<span></label>
												<select name="country" id="country" class="form-control" onChange="grab_cities_by_country(this.value);" style="width:17%; border: 1px solid #737373; margin-left: 9px; background:#fff;" required>
												<option value="" selected>Select Country</option> 
												@foreach($countries as $country)
												<option value="{{$country->country_id}}" <?php if($contact_object->country==$country->country_id){ echo "selected"; } ?>>{{$country->country_name}}</option>
												@endforeach
												
											  </select>
											  
										<select name="state" id="state_text" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:17%; margin-left: 9px; border: 1px solid #737373; background:#fff;" required>
											<option value="" selected>Select State</option>
												@foreach($states as $state)
													<option value="{{$state->state_id}}" <?php if($contact_object->state==$state->state_id){ echo "selected"; } ?>>{{$state->state_name}}</option>

												@endforeach
											</select>
										        <input type="text" name="city" class="form-control" id="city" placeholder="City" value="{{$contact_object->city}}" maxlength="150" style="width:17%; margin-left:1em; background:#fff;" required>
                                        
										</div>
								<!--end of location-->
								<!--Employer-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Employer<span style="color:red;">*<span></label>
											<div class="col-sm-8">
												 <select name="company_name" id="company_name" class="form-control" style="background:#fff;" required>
												  <option value="" selected>Select Company</option>
												  @foreach($team_member_types as $team_member_type)
												  <option value="{{$team_member_type->type_ID}}" <?php if($contact_object->company_name==$team_member_type->type_ID){ echo "selected"; } ?>>{{$team_member_type->type_name}}</option>

												  @endforeach
															   
												
												</select>
										   </div>
									</div>			
							<!--end of Employer-->
							
								<!--Designation-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Designation</label>
											<div class="col-lg-8">
												 <input type="text" id="Designation" name="designation" value="{{$contact_object->designation}}" maxlength="15">
											</div>
									  </div>
									</div><br><br>
										<div class="col-md-12" style="background: #dadada; height: 85px;"><br>
										<input type="text" name="hidden_input_purpose" value="{{@$hidden_input_purpose}}" hidden>
                        				<input type="text" name="hidden_input_id" value="{{@$hidden_input_id}}" hidden>
									     <center><button type="submit" class="btn btn-info waves-effect waves-light m-b-5" >Post Contact</button> </a></center>
									 	</div>									                                    
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
                            </form>
						
							</div> <!-- col -->
                        </div> <!-- End row -->
                    </div> <!-- container -->
                    </div>
               
        <!-- END wrapper -->
       <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
	@include('include.emp_footer')
	<script>
	$("#home_ph_check").hide();
function phoneMask() { 
var num = $(this).val().replace(/\D/g,''); 
if($(this).val(num.substring(0,3)+ '-' + num.substring(3,6) + '-' + num.substring(6,10)) ) 
{

}
else
{

$("#phone_c").show();
}
}
$('#phonec').keyup(phoneMask);

$("#phone_w").hide();
function phoneMask() { 
var num = $(this).val().replace(/\D/g,''); 
if($(this).val(num.substring(0,3)+ '-' + num.substring(3,6) + '-' + num.substring(6,10))) 
{

}
else{
$("#phone_w").show();
}
}
$('#phonew').keyup(phoneMask);
</script>
	
	</body>

<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->
</html>