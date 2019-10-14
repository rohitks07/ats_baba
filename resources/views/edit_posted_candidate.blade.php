<!DOCTYPE html>
<html lang="en">
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
			.form-control{
				border: 1px solid #737373;
				width: 84%;
			}
			.active, .btn:hover {
			  background-color: #000000;
			  color: white;
			}
			.control-label{
				font-family: inherit;
			}
				.card .card-header {
					padding: 10px 20px;
					border: none;
					background: #428bca;
					color: #fff;
				}
				.card-title {
					font-size: 17px;
					font-weight: 100;
					color: #ffffff;
					margin-bottom: 0;
					margin-top: 0;
					text-transform:none;
				}
			
				.checkbox label {
					display: inline-block;
					padding-left: 5px;
					position: absolute;
					font-weight: 400;
				}
				.content-page {
    				overflow: hidden;
    				width: 100%;
				}
				.content-page > .content {
					margin-bottom: 60px;
					margin-top: 0px;
					padding: 20px 10px 15px 10px;
				}
				.element {
					  background: #fff;
					  width: 100%
					  height: 100%;
					
					}
				.formwraper {
				margin-bottom: 20px;
				background: #fff;
				border: 1px solid #ddd;
				border-radius: 5px 5px 0 0;
				width: 100%;
			}
			.jobdescription{
				border: 1px solid #ddd;
			}
			.jobdescription .skillBox {
			padding: 5px;
			border: 1px solid #ddd;
			font-size: 13px;
			line-height: 18px;
		}
		.input-group-addon {
		padding: 6px 15px;
		font-size: 14px;
		font-weight: 400;
		color: #ffffff;
		text-align: center;
		background-color: #29b6f6;
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
		width: 83%;
		padding: 7px;
		border-radius: 5px;
	}
	textarea {
		border-radius: 5px;
		width: 48%;
	}
 </style>       		     
		<div class="content-page">             
			<div class="content"> <br><br><br>                         
				<div class="row"> 							
                    <div class="col-md-12">
                        <div class="card" style="border: 1px #C0C0C0 solid; width: 87%;">
                            <div class="card-header" style="background-color: #317eeb;">
		                      <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Edit Candidate</h3>
							</div>
                               <div class="card-body">
							        <h3>Personal Detail</h3>
							   <hr>
						<form action="{{url('employer/edit_posted_candidate/update/')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<input type="hidden" name="id" id="id" value="{{$details->ID}}">
						    <input type="hidden" name="_token" value = "{{ csrf_token()}}" > 
							   <div class="row">
								    <div class="col-md-6">
								     <!--Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">First Name <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" id="first_name" name="first_name" placeholder="First Name" value="{{$details['first_name']}}"><br>
												<span id="first_namecheck">Not valid First Name</span>
											</div>
									  </div>
								<!--end of Name-->
								<!--Middle Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Middle Name </label>
											<div class="col-lg-8">
												<input type="text" id="middle_name" name="middle_name" placeholder="Middle Name" value="{{$details['middle_name']}}">
											</div>
									  </div>
								<!--end of Middle Name-->
								<!--Last Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Last Name<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" id="last_name" name="last_name" placeholder="Last Name" value="{{$details['last_name']}}" ><br>
												<span id="last_namecheck">Not valid Last Name</span>
											</div>
									  </div>
								<!--end of Last Name-->
								
									 <!-- Date of Birth-->				
									 <div class="form-group row">
	                                            <label for="confirm_password"  class="control-label col-lg-4"> Date Of Birth (mm-dd-yyyy)</label>
	                                            <div class="col-lg-8">
	                                               	<input type="date" id="dob" name="dob" value="{{$details['dob']}}" placeholder="dd/mm/yyyy" style="width:83%; padding:0.5em;"  >
	                                            </div>
	                                        </div>
								<!--end Date of Birth-->
								<!--Gender-->	   						                                  
									<div class="form-group row">
										<label class="col-sm-4 control-label">Gender <span style="color:red;">*</span></label>
											<div class="col-sm-8">
											    <select class="form-control" name="gender" id="gender" style="width:83%; background:#fff;" >
												<option selected>{{$details['gender']}}</option>
											        <option value="male" >Male</option>
											        <option value="female" >Female</option>
										        </select>
										    </div>
									</div>									
								<!--end of Gender-->
									<!--Email-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Email<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" id="email" name="email" placeholder="Email" maxlength="35" value="{{$details['email']}}"><br>
												<span id="emailcheck">Please Enter valid Email</span>
											</div>
									</div>
								<!--end Email-->
								<!--Skype ID-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Skype ID</label>
											<div class="col-lg-8">
												<input type="text" id="skype_id"  name="skype_id" maxlength="30" value="{{$details['skype_id']}}">
											</div>
									  </div>
								<!--end of Skype ID-->
									<!--Social Security No-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Social Security No</label>
											<div class="col-lg-8">
												<input type="text" name="ssn" id="ssn" autocomplete="off" placeholder="000-00-0000"  maxlength="9" value="{{$details['ssn']}}">
											</div>
									  </div>
								<!--end of Social Security No-->
									<!--Visa-->	   						                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Visa <span style="color:red;">*</span></label>
											<div class="col-sm-8">
											    <select name="visa_status" id="visa_status" class="form-control" style="width:83%;background:#fff;" >
												<option>{{$details['visa_status']}}</option>
											        <option value="">Select Visa Type</option>
													    @foreach($toReturn['visa_type'] as $visa_type)
												            <option value="{{$visa_type['type_name']}}"> {{$visa_type['type_name']}} </option>
												        @endforeach  
												</select>
												<span id="visacheck">Please Select Visa</span>
										   </div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 control-label">Total It Experience <span style="color:red;">*</span></label>
											<div class="col-sm-8">
                                            <input type="text" id="Experience" placeholder="Total It Experience" name="total_experience" maxlength="10"  required value="{{$details['experience']}}">
												<!--<span id="Experiencecheck">Plz Insert It Experience </span>-->
										   </div>
									</div>
								<!--end of Visa-->
								
								</div><!--end of column-->
									
								
								<div class="col-md-6">
								
								<!-- Location-->				
										<!--location-->
												<div class="form-group row">
													<label for="address" class="control-label col-lg-4">Location <span style="color:red;">*</span></label>
													<select name="country" id="country"  class="form-control "  style="width:22%; border: 1px solid #bbb8b8; margin-left: 9px;" required>
														<option value="United States" selected>United States</option>
														@foreach($toReturn['countries'] as $country)
													<option value="{{$country['country_id']}}">{{ $country['country_name'] }}</option>
													  @endforeach  
													  
													 
													</select>
				  
													<select name="state" id="state_text" class="form-control " style="max-width:22%; margin-left: 9px; border: 1px solid #bbb8b8;" required>
														  <option value="">Select country first</option>
				  
													</select>
													<div class="col-md-12" style="float: right;margin-left: 21em;margin-top: 2%;">
														
														<select name="city" id="city" class="form-control " style="max-width:22%; border: 1px solid #bbb8b8;" required>
															  <option value="">Select state first</option>
				  
													  </select>
														<br>
														<span id="citycheck">Please choose Your Location</span> 
													</div>
													
												</div>
								<!--end Location -->
								<!--Address Line 1-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Address Line 1</label>
											<div class="col-lg-8">
												<input type="text" id="address1" placeholder="Address Line 1" name="addressline1" maxlength="100" value="{{$details['address_line_1']}}">
											</div>
									  </div>
								<!--end of Address Line 1-->
								<!--Address Line 2-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Address Line 2</label>
											<div class="col-lg-8">
												<input type="text" id="address1" placeholder="Address Line 2" name="addressline2" maxlength="100" value="{{$details['address_line_2']}}">
											</div>
									  </div>
								<!--end of Address Line 2-->
									<!--Mobile Phone-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Mobile Phone<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" id="mobile_number" name="mobilephone" maxlength="12" value="{{$details['mobile']}}"><br>
												<span id="mob_ph_check">Please Enter a Valid Mobile Number</span>
											</div>
									  </div>
								<!--end of Mobile Phone-->
								<!--Home Phone-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Home Phone<span style="color:red;"></span></label>
											<div class="col-lg-8">
												<input type="text" id="phone" name="homephone" maxlength="12" value="{{$details['home_phone']}}"><br>
												<span id="home_ph_check">Please Enter a Valid Home Number</span>
											</div>
									  </div>
								<!--end of Home Phone-->
								<!--Select File-->	 
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Upload Resume<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="file" class="form-control" name="cv_file" id="cv_file" value="{{$details['cv_file']}}" style="background:#fff;" />
												  <p>Upload files only in .doc, .docx or .pdf format with maximum size of 32 MB.</p>
												  <span id="resume_check">Please Choose a Valid File</span>
											</div>
								    </div>								
								<!--end of Select File-->	
								<!--Other Documents -->	 
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Other Documents</label>										
											<div class="col-lg-8">
												<input type="file" class="form-control" name="file_other1" id="cv_file2" value="{{$details['other_documents1']}}" style="background:#fff;" /><br>
												  <input type="file" class="form-control" name="file_other2" id="cv_file3" value="{{$details['other_documents2']}}" style="background:#fff;"/>
												  <p>Hint:Upload files only in .doc,</br> .docx or .pdf format with</br> maximum size of 32 MB.</p>
											</div>
								    </div>								
								<!--end of Other Documents -->								
								</div><!--end of column-->								
							   </div><!--end of row-->

    						<!--button-->
							   <center>
							   		<div id="shown">
							   			<button class="btn btn-primary open1" type="submit" id="validatefrm">Submit </button>
									</div>
								</center><br>
								<div class="menun" style="display: none;">
    						<!--button-->
							</form>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
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


<!--skill Details -->	
<script>
		$(document).ready(function(){
			$('#showa').click(function() {
			  $('.menua').toggle("slide");
			});
		});
</script>
<!--skill Details -->


<!--Eduication Details -->		 
<script>
	$(document).ready(function(){
		$('#shown').click(function() {
		  $('.menun').toggle("slide");
		});
	});
</script>
<!--Eduication Details -->

<!--exp Details -->
<script>
	$(document).ready(function(){
		$('#shows').click(function() {
		  $('.menus').toggle("slide");
		});
	});
</script>
<!--exp Details -->

                                                    <!--dynamic clone for educational -->	
<script>
$(document).ready(function(){
	var i=1;
	$('#btnAdd').click(function(){
         i++;				
					            var data = `
					                <div class="form-group row delete_row" >								
										<label for="address" class="control-label col-lg-12"> </label>
											<select name="degree[]" id="" class="form-control" placeholder="Degree Title" style="width: 14%; margin-left: 9px; border: 1px solid #737373;">
												<option value="" selected>Select Degree</option>
												    
												<option>BCA</option>
												<option>B.TECK</option>
												<option>MCA</option>	
												<option>BBA</option>
												<option>MBA</option>
												<option>MBBS</option>
												<option>CS</option>
                                                													
										    </select>
										    <input type="text" name="major_subject[]" class="form-control" placeholder="Major Subject" style="width: 14%;">	
										    <input type="text" name="institute[]" class="form-control" placeholder="Institute" style="width: 14%;">
										    <input type="text" name="edu_city[]" class="form-control" placeholder="City" style="width: 14%;">
	                                        <select type="text" name="edu_country[]" class="form-control" placeholder="Country" style="width: 14%;">
												<option value="" selected>Country</option>
												    @foreach($toReturn['countries'] as $country)
													<option value="{{$country['country_id']}}">{{ $country['country_name'] }}</option>
													  @endforeach                                 
											</select>
											<select class="form-control" name="completion_year[]" placeholder="Passing Year" style="width: 15%;" >
												<option value="" selected="selected">Completion</option>
													<option value="2019" >2019</option>
													<option value="2018" >2018</option>
													<option value="2017" >2017</option>
													<option value="2016" >2016</option>
													<option value="2015" >2015</option>
													<option value="2014" >2014</option>
													<option value="2013" >2013</option>
													<option value="2012" >2012</option>
													<option value="2011" >2011</option>
													<option value="2010" >2010</option>
													<option value="2009" >2009</option>
													<option value="2008" >2008</option>
													<option value="2007" >2007</option>
													<option value="2006" >2006</option>
													<option value="2005" >2005</option>
													<option value="2004" >2004</option>
													<option value="2003" >2003</option>
													<option value="2002" >2002</option>
													<option value="2001" >2001</option>
													<option value="2000" >2000</option>
													<option value="1999" >1999</option>
													<option value="1998" >1998</option>
													<option value="1997" >1997</option>
													<option value="1996" >1996</option>
													<option value="1995" >1995</option>
													<option value="1994" >1994</option>
													<option value="1993" >1993</option>
													<option value="1992" >1992</option>
													<option value="1991" >1991</option>
													<option value="1990" >1990</option>	
											</select>
										
   											<button type="button" id="btnRemove" class="btn btn-primary btn_remove">Remove</button>
									
							        </div> `;
			$('#educational_detail').append(data);
	});	
});
$(document).on('click', '.btn_remove', function() {
	 //alert("jhgtjhgjhghj");
    $(this).closest('.delete_row').remove();
});
</script>
                                                    <!--close dynamic clone for educational -->


<!--dynamic clone for EXPERIANCE -->	
<script>
$(document).ready(function(){
	var i=1;
	$('#btnAdd_Exp').click(function(){
        i++;				
            var data2=`<div class="form-group row delete_exp">													
						    <input type="text" name="job_title[]" class="form-control" placeholder="Job Title" style="width: 14%;">
							<input type="text" name="company_name[]" class="form-control" placeholder="Company Name" style="width: 17%;">
							<input type="text" name="exp_city[]" class="form-control" placeholder="City" style="width: 14%;">
							<select type="text" name="exp_country[]" class="form-control" placeholder="Country" style="width: 14%;">
								<option value="" selected>-Country-</option>
								   @foreach($toReturn['countries'] as $country)
										<option value="{{$country['country_id']}}">{{ $country['country_name'] }}</option>
								  @endforeach  
							</select>
							<input placeholder="Start Date" name="start_date[]" class="textbox-n form-control start_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="start_date" style="width: 14%;">
							<input placeholder="End Date" name="end_date[]" class="textbox-n form-control end_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="start_date" style="width: 14%;">							   
							<button type="button" id="btnRemove" class="btn btn-primary btn_remove">Remove</button>											  
						 </div>`;
		 $('#exp_detail').append(data2);
	});	
});
$(document).on('click', '.btn_remove', function() {
    $(this).closest('.delete_exp').remove();
});	 
</script>
<!--close dynamic clone for EXPERIANCE -->

<!--dynamic add skills-->
<script>
    $("#home_ph_check").hide();
function phoneMask() { 
var num = $(this).val().replace(/\D/g,''); 
if($(this).val(num.substring(0,3)+ '-' + num.substring(3,6) + '-' + num.substring(6,10)) ) 
{

}
else
{

$("#home_ph_check").show();
}
}
$('#phone').keyup(phoneMask);

$("#mob_ph_check").hide();
function phoneMask() { 
var num = $(this).val().replace(/\D/g,''); 
if($(this).val(num.substring(0,3)+ '-' + num.substring(3,6) + '-' + num.substring(6,10))) 
{

}
else{
$("#mob_ph_check").show();
}
}
$('#mobile_number').keyup(phoneMask);
</script>
<script>
$(function() {
    var availableSkills =   
    $( "#skill" ).autocomplete({source: availableSkills});
  });
</script>
<!--dynamic add skills-->

<!-- validation Of Personal Details -->
<script>
			$(document).ready(function()
			{
				$("#first_namecheck").hide();
				$("#last_namecheck").hide();
				$("#dobcheck").hide();
				$("#emailcheck").hide();
				$("#visacheck").hide();
				$("#citycheck").hide();
				var err_firstname=true;
				var err_lastname=true;
				var err_dob=true;
				var err_email=true;
				var err_visa=true;
				var err_city=true;
				//validate first name
				$("#validatefrm").click(function()
				{
					check_firstname();
				});
				function check_firstname()
				{
					var firstname_val=$("#first_name").val();
					
					var patt1 = /\b[0-9]/;
					 var result = firstname_val.search(patt1);
					if((firstname_val=="")||(result==0))
					{
						$("#first_namecheck").show();
						$("#first_namecheck").focus();
						$("#first_namecheck").css("color","red");
						err_firstname=false;
						return false;
					}
					else
					{
						$("#first_namecheck").hide();
					}
					
				}
				//Validation last name
				$("#validatefrm").click(function()
				{
					check_lastname();
				});
				function check_lastname()
				{
					var lastname_val=$("#last_name").val();
					
					var patt1 = /\b[0-9]/;
					 var result = lastname_val.search(patt1);
					if((lastname_val=="")||(result==0))
					{
						$("#last_namecheck").show();
						$("#last_namecheck").focus();
						$("#last_namecheck").css("color","red");
						err_lastname=false;
						return false;
					}
					else
					{
						$("#last_namecheck").hide();
					}
					
				}
				//validate date of birth
				$("#validatefrm").click(function()
				{
					check_dob();
				});
				function check_dob()
				{
					var dob_val_day=$("#dob_day").val();
					var dob_val_month=$("#dob_month").val();
					var dob_val_year=$("#dob_year").val();
					if((dob_val_day=="")||(dob_val_month=="")||(dob_val_year==""))
					{
						$("#dobcheck").show();
						$("#dobcheck").focus();
						$("#dobcheck").css("color","red");
						err_dob=false;
						return false;
					}
					else
					{
						$("#dobcheck").hide();
					}
				}
				//validate email
				$("#validatefrm").click(function()
				{
					check_email();
				});
				function check_email()
				{
					var email_val=$("#email").val();
					var v=/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
					var result = email_val.match(v);
					if((email_val.length == "")||(result == null))
					{
						$("#emailcheck").show();
						$("#emailcheck").focus();
						$("#emailcheck").css("color","red");
						err_email=false;
						return false;$("#emailcheck").hide();
					}
					else
					{
						
						$("#emailcheck").hide();
					}
				}
				
				
				
				//validate Visa
				$("#validatefrm").click(function()
				{
					check_visa();
				});
				function check_visa()
				{
					var visa_val=$("#visa_status").val();
					if(visa_val.length=="")
					{
						$("#visacheck").show();
						$("#visacheck").focus();
						$("#visacheck").css("color","red");
						err_visa=false;
						return false;
					}
					else
					{
						$("#visacheck").hide();
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
					err_firstname=true;
					err_lastname=true;
					err_dob=true;
					err_email=true;
					err_visa=true;
					err_city=true;
					check_firstname();
					check_lastname();
					check_dob();
					check_email();
					check_visa();
					check_location();
					if((err_firstname==true)&&(err_lastname==true)&&(err_dob==true)&&(err_email==true)&&(err_visa==true)&&(err_city==true))
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
				$("#mob_ph_check").hide();
				$("#home_ph_check").hide();
				$("#resume_check").hide();
				
				var err_mob_ph=true;
				var err_home_ph=true;
				var err_resume=true;
			
			//validate mobile Phone
				// $("#validatefrm").click(function()
				// {
				// 	check_mb_phone();
				// });
				// function check_mb_phone()
				// {
					
				// 	var ph_val=$("#mobile_number").val();
				// 	var phoneno=new RegExp(/^[0-9-+]+$/);
				// 	if((ph_val="")||(phoneno=""))
				// 	{
				// 		$("#mob_ph_check").hide();
				// 	}
				// 	else
				// 	{
				// 		$("#mob_ph_check").show();
				// 		$("#mob_ph_check").focus();
				// 		$("#mob_ph_check").css("color","red");
				// 		err_mob_ph=false;
				// 		return false;
				// 	}
				// }
				// //validate home Phone
				// $("#validatefrm").click(function()
				// {
				// 	check_hm_phone();
				// });
				// function check_hm_phone()
				// {
					
				// 	var ph_val=$("#phone").val();
				// 	var phoneno=new RegExp(/^[0-9-+]+$/);
				// 	if(ph_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/))
				// 	{
				// 		$("#home_ph_check").hide();
				// 	}
				// 	else
				// 	{
				// 		$("#home_ph_check").show();
				// 		$("#home_ph_check").focus();
				// 		$("#home_ph_check").css("color","red");
				// 		err_home_ph=false;
				// 		return false;
				// 	}
				// }
				//validation Resume
				$("#validatefrm").click(function()
				{
					check_resume();
				});
				function check_resume()
				{
					
					var file_val=$("#cv_file").val();
					 var ext = file_val.split('.').pop();
					if(ext=="pdf" || ext=="docx" || ext=="doc")
					{
							$("#resume_check").hide();
					}
					else
					{
						$("#resume_check").show();
						$("#resume_check").focus();
						$("#resume_check").css("color","red");
						err_resume=false;
						return false;
					}
				}
				$("#validatefrm").click(function()
				{
					err_mob_ph=true;
					err_home_ph=true;
					err_resume=true;
					
					check_mb_phone();
					check_hm_phone();
					check_resume();
					if((err_mob_ph==true)&&(err_home_ph==true)&&(err_resume==true))
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

			<!-- Validation of Education Details -->
		<script>
			$(document).ready(function()
			{
				$("#education_check").hide();
				var err_education=true;
				$("#edu_validatefrm").click(function()
				{
					check_education();
				});
				function check_education()
				{
					
					var degree_val=$("#degree").val();
					var subject_val=$("#subject").val();
					var institute_val=$("#institute").val();
					var city_val=$("#edu_city").val();
					var country_val=$("#edu_country").val();
					var completion_val=$("#completion").val();
					
					if((degree_val=="")||(subject_val=="")||(institute_val=="")||(city_val=="")||(country_val=="")||(completion_val==""))
					{
						$("#education_check").show();
						$("#education_check").focus();
						$("#education_check").css("color","red");
						err_education=false;
						return false;
					}
					else
					{
							$("#education_check").hide();
					}
				}
				$("#edu_validatefrm").click(function()
				{
					err_education=true;
					check_education();
					if(err_education==true)
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

<!-- Validation of Experience Details -->
<script>
			$(document).ready(function()
			{	
				$("#experience_check").hide();
				var err_experience=true;
				$("#exp_validatefrm").click(function()
				{
					check_experience();
				});
				function check_experience()
				{
					
					var job_val=$("#job_title").val();
					var comp_val=$("#company_name").val();
					var city_val=$("#exp_city").val();
					var country_val=$("#exp_country").val();
					var start_date_val=$("#start_date").val();
					var end_date_val=$("#end_date").val();
					
					if((job_val=="")||(comp_val=="")||(city_val=="")||(country_val=="")||(start_date_val=="")||(end_date_val==""))
					{
						$("#experience_check").show();
						$("#experience_check").focus();
						$("#experience_check").css("color","red");
						err_experience=false;
						return false;
					}
					else
					{
							$("#experience_check").hide();
					}
				}
				$("#exp_validatefrm").click(function()
				{
					err_experience=true;
					check_experience();
					if(err_experience==true)
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
		

</body>
</html>