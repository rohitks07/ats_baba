<!DOCTYPE html>
<html lang="en">
 @include('include.emp_header')
 @include('include.emp_leftsidebar')


 <style>    
.active, .btn:hover {
  background-color: #000000;
  color: white;
}
.table td {
	padding: .75rem;
	vertical-align: top;
	border-top: 1px solid #ffffff;
}

input[class="form-control"],
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

    input[class="form-control"]:focus
    {
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


    input[class=form-control] {
        width: 50%;
        padding: 7px;
        border-radius: 5px;
        background: #fff;
         border:1px solid #bdbcbc;
    }

    textarea {
        border-radius: 5px;
        width: 48%;
    }
span.red {
    color:red;
}

select[class="form-control"]{
    border:1px solid #bdbcbc;
    background: #fff;
    width: 19%;
    float: left;
}
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
							<!-- <div class="col-md-2">
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-user"></i> <span>Manage Account</span> </button><br>
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-users"></i> <span>My Resume &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </button>
								<button type="button" class="btn btn-info m-b-5" style="width:100%">  <span> Application History</span> </button>
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-users"></i><span>&nbsp;Mtaching Job &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </button>
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-users"></i>  <span>&nbsp;Manage Skill&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </button>
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-lock"></i> <span>Change Password</span> </button>
							</div> -->
           
                        <div class="card" style="border: 1px #C0C0C0 solid;">
                            <div class="card-header" style="background-color: #317eeb;">
		                     <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Company Information</h3></div>
                               <div class="card-body">
							   <form  action="{{url('employer/companyprofile/update')}}" method="post">
							   	<input type="hidden" name="_token" value="{{ csrf_token()  }}" >
							   	
							   	<input class="form-control" id="company_id" name="company_id" type="hidden" value="{{ $toReturn['companies']['company_id']}}">

							   	<input class="form-control" id="industries_id" name="industries_id" type="hidden" value="{{ $toReturn['companies']['industries_id']}}">
								
								
								  <!--full name-->	   
									<!--<div class="form-group row">-->
									<!--	<label for="name" class="control-label col-lg-4">Name <span style="color:red;">*</span></label>-->
									<!--		<div class="col-lg-8">-->
									<!--			<input class="form-control" id="name" name="name" type="text" value="{{ $toReturn['companies']['first_name']}}">-->
									<!--		</div>-->
									<!--  </div>-->
								<!--end of name-->
                                 <!--Company Name-->	   
									<div class="form-group row">
										<label for="name" class="control-label col-lg-4">Company Name <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input class="form-control" id="companies_name" name="companies_name" type="text" value="{{ $toReturn['companies']['company_name']}}">
											    <p id="company_id_check" name="company_id_check">This field Cannot be empty </p>
											</div>
									  </div>
								<!--end of Company Name-->								
								 <!--Industry-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Industry <span style="color:red;">*</span></label>
											<div class="col-sm-8">
												<select class="form-control" name="industry_name" style="max-width:350px; border: 1px solid #737373" >
													<option value="">select</option>
														@foreach($toReturn['industries'] as $industries)
													<option >{{$industries['industry_name']}}</option>
													@endforeach
												</select>
												<p id="industries_id_check" name="industries_id_check">This field Cannot be empty </p>
										   </div>
									</div>
									<!--end of Industry-->
									 <!--Organization Type-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Organization Type <span style="color:red;">*</span></label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:350px; border: 1px solid #737373" name="org_name" id="org_name">

													@foreach($toReturn['organization_type'] as $organization_type)
													<option>{{$organization_type['org_name']}}</option>
													@endforeach
												</select>
												<p id="org_name_check" name="org_name_check">This field Cannot be empty </p>
										   </div>
									</div>
									<!--end of Organization Type-->
									 <!--Federal ID/EIN-->	   
									<div class="form-group row">
										<label for="name" class="control-label col-lg-4">Federal ID/EIN</label>
											<div class="col-lg-8">
												<input class="form-control" id="federal_name" name="federal_id" type="text" value="{{$toReturn['companies']['federal_id']}}">
											    <p id="federal_id_check" name="federal_id_check">This field Cannot be empty </p>
											</div>
									  </div>
								<!--end of Federal ID/EIN-->
                               <!--DUNS (D&B)-->	   
									<div class="form-group row">
										<label for="name" class="control-label col-lg-4">DUNS (D&B)</label>
											<div class="col-lg-8">
												<input class="form-control" id="duns_name" name="duns" type="text" value="{{$toReturn['companies']['duns']}} ">
												<p id="duns_name_check" name="duns_name_check">This field Cannot be empty </p>
											</div>
									  </div>
								<!--end of DUNS (D&B)-->										
								<!--current Address-->			
									<div class="form-group row">
										<label class="col-md-4 control-label" for="example-textarea-input">Address <span style="color:red;">*</span></label>
											<div class="col-md-8">
												<textarea class="form-control" rows="2" id="example-textarea-input address_name" name="company_address"style="width: 55%;" > {{$toReturn['companies']['company_address']}}</textarea>
											    	<p id="address_name_check" name="address_name_check">This field Cannot be empty </p>
											</div>
									   </div>
									   <!--end of current Address-->
									   <!--location-->				
										<div class="form-group row">
										<label for="address" class="control-label col-lg-4">Location <span style="color:red;">*</span></label>
												<select name="country_name" id="country" class="form-control"  style="width:12%; border: 1px solid #737373; margin-left: 9px;">
												
													<option value="" selected>Select Country</option>
													   @foreach($toReturn['countries'] as $countries)
												    <option >{{$countries['country_name']}}</option>
												      @endforeach
											  </select>
											  <p id="country_check" name="country_check">This field Cannot be empty </p>
											  

											  
										<select name="state" id="state_text" class="form-control"  style="max-width:12%; margin-left: 9px; border: 1px solid #737373;">
											 <option value="" selected>Select State</option>
													@foreach($toReturn['city'] as $city)
													<option value="{{$city['state']}}">{{$city['state']}}</option>
													@endforeach
											</select>
											<p id="state_text_check" name="state_text_check">This field Cannot be empty </p>
											
										<select name="city_name" id="city_text" class="form-control"  style="max-width:12%; margin-left: 9px; border: 1px solid #737373;">
											<option value="" selected>Select City</option>
											@foreach($toReturn['city'] as $city)
											 <option value="{{$city['city_name']}}" selected>{{$city['city_name']}}</option>
											@endforeach
											  </select>
											  	<p id="city_text_check" name="state_text_check">This field Cannot be empty </p>
											
										</div>
								<!--end of location-->
								
							<!--mobile number-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Mobile Number <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input class="form-control" id="mob_no" name="company_moni" type="text" value="{{$toReturn['companies']['company_phone']}}">
											    <p id="mob_no_check" name="mob_no_check">This field Cannot be empty </p>
											</div>
									  </div>
								<!--end of number-->
								<!--Home phone-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Home Phone</label>
											<div class="col-lg-8">
												<input class="form-control" id="mob_no" name="company_phone" type="text"  value="{{$toReturn['companies']['company_mobile']}}">
											</div>
									  </div>
								<!--end of home phone-->
								
								<!--Company Website-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Company Website <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input class="form-control" id="c_web" name="company_website" type="text" value="{{$toReturn['companies']['company_website']}}">
										        <p id="c_web_check" name="c_web_check">This field Cannot be empty </p>
											</div>
									  </div>
								<!--end of Company Website-->
								 <!--Industry-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">No. of Employees<span style="color:red;">*</span></label>
											<div class="col-sm-8">
												<select class="form-control" name="noofemp[]"style="width:30%; border: 1px solid #737373">
													 <option value="1">1-10</option>
													 <option value="2" >10-50</option>
												</select>
										   </div>
									</div>
									<!--end of Industry-->
									<!--Company Description -->			
									<div class="form-group row">
										<label class="col-md-4 control-label" for="example-textarea-input">Company Description <span style="color:red;">*</span></label>
											<div class="col-md-8">
												<textarea class="form-control" rows="4" name="company_description" id="example-textarea-input" style="width: 55%;">{{$toReturn['companies']['company_description']}}</textarea>
											</div>
									   </div>
									   <!--end of Company Description -->
									<div class="form-group">
									     <center><button class="btn btn-info waves-effect waves-light m-b-5" type="submit" id="validating" name="validating">Update</button> </center>                                                   </div>																   
                                         </form>                                      
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
                            </div>
                                        </div> <!-- End row -->
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
        </div>
        <!-- END wrapper -->
@include('include.emp_footer')
<script>
    
	$(document).ready(function()
			{
				$("#federal_id_check").hide();
				$("#org_name_check").hide();
				$("#industries_id_check").hide();
				$("#company_id_check").hide();
				$("#duns_name_check").hide();
				$("#address_name_check").hide();
				$("#country_check").hide();
				$("#city_text_check").hide();
				$("#state_text_check").hide();
				$("#mob_no_check").hide();
				$("#c_web_check").hide();
				
				var err_city_text=true;
				var err_check_company_id=true;
				var err_industries_id=true;
				var err_org_name=true;
				var err_federal_name=true;
				var err_duns_name=true;
				var err_address_name=true;
				var err_country=true;
				var err_state_text=true;
				var err_mob_no_check=true;
				var err_c_web=true;
				// var err_check_psw=true;
				// var err_check_cmfpsd=true;
				

				//validate name
				$("#validating").click(function()
				{
					check_company_name();
				});
				function check_company_name()
				{
					var company_id=$("#companies_name").val();
					
					var patt1 = /\b[0-9]/;
					 var result = company_id.search(patt1);
					if((company_id.length=="")||(result==0))
					{
						$("#company_id_check").show();
						$("#company_id_check").focus();
						$("#company_id_check").css("color","red");
						err_check_company_id=false;
						return false;
					}
					else
					{
						$("#company_id_check").hide();
					}
					
				}
				
				
				//validateing industry
				$("#validating").click(function()
				{
					check_industries_name();
				});
				function check_industries_name()
				{
					var industries_val=$("#industry_name").val();
					if(industries_val=="")
					{
						$("#industries_id_check").show();
						$("#industries_id_check").focus();
						$("#industries_id_check").css("color","red");
						err_industries_id=false;
						return false;
					}
					else
					{
						$("#industries_id_check").hide();
					}
					
				}
				
				
				//validateing org
				$("#validating").click(function()
				{
					check_org_name();
				});
				function check_org_name()
				{
					var org_name_val=$("#org_name").val();
					if(org_name_val=="")
					{
						$("#org_name_check").show();
						$("#org_name_check").focus();
						$("#org_name_check").css("color","red");
						err_org_name=false;
						return false;
					}
					else
					{
						$("#org_name_check").hide();
					}
					
				}
				
				//validate fedral
				$("#validating").click(function()
				{
					check_federal_name();
				});
				function check_federal_name()
				{
					var federal_name=$("#federal_name").val();
					
					var patt1 = /\b[0-9]/;
					 var result = federal_name.search(patt1);
					if((federal_name.length=="")||(result==0))
					{
						$("#federal_id_check").show();
						$("#federal_id_check").focus();
						$("#federal_id_check").css("color","red");
						err_federal_name=false;
						return false;
					}
					else
					{
						$("#federal_id_check").hide();
					}
					
				}
				
					//validate duns
				$("#validating").click(function()
				{
					check_duns_name();
				});
				function check_duns_name()
				{
					var duns_name=$("#duns_name").val();
					
					var patt1 = /\b[0-9]/;
					var result = duns_name.search(patt1);
					if((duns_name.length=="")||(result==0))
					{
						$("#duns_name_check").show();
						$("#duns_name_check").focus();
						$("#duns_name_check").css("color","red");
						err_duns_name=false;
						return false;
					}
					else
					{
						$("#duns_name_check").hide();
					}
					
				}
					//validate Address
				$("#validating").click(function()
				{
					check_address_name();
				});
				function check_address_name()
				{
					var address_name=$("#address_name").val();
					
					var patt1 = /\b[0-9]/;
					 var result = address_name.search(patt1);
					if((address_name.length=="")||(result==0))
					{
						$("#address_name_check").show();
						$("#address_name_check").focus();
						$("#address_name_check").css("color","red");
						err_address_name=false;
						return false;
					}
					else
					{
						$("#address_name_check").hide();
					}
					
				}
				
				//validateing country
				$("#validating").click(function()
				{
					check_country();
				});
				function check_country()
				{
					var country=$("#country").val();
					if(country=="")
					{
						$("#country_check").show();
						$("#country_check").focus();
						$("#country_check").css("color","red");
						err_country=false;
						return false;
					}
					else
					{
						$("#country_check").hide();
					}
					
				}
				
				//validateing state
				$("#validating").click(function()
				{
					check_state_text();
				});
				function check_state_text()
				{
					var state_text=$("#state_text").val();
					if(state_text=="")
					{
						$("#state_text_check").show();
						$("#state_text_check").focus();
						$("#state_text_check").css("color","red");
						err_state_text=false;
						return false;
					}
					else
					{
						$("#state_text_check").hide();
					}
					
				}
				//validateing city
				$("#validating").click(function()
				{
					check_city_text();
				});
				function check_city_text()
				{
					var state_text=$("#city_text").val();
					if(state_text=="")
					{
						$("#city_text_check").show();
						$("#city_text_check").focus();
						$("#city_text_check").css("color","red");
						err_city_text=false;
						return false;
					}
					else
					{
						$("#city_text_check").hide();
					}
					
				}
					//validate mobile Phone
				$("#validating").click(function()
				{
					check_phone();
				});
				function check_phone()
				{
					
					var ph_val=$("#mob_no").val();
					var phoneno=new RegExp(/^[0-9-+]+$/);
					if(ph_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/))
					{
						$("#mob_no_check").hide();
					}
					else
					{
						$("#mob_no_check").show();
						$("#mob_no_check").focus();
						$("#mob_no_check").css("color","red");
						err_mob_no_check=false;
						return false;
					}
				}
				
				
				
					//validate duns
				$("#validating").click(function()
				{
					check_c_web();
				});
				function check_c_web()
				{
					var c_web=$("#c_web").val();
					
					var patt1 = /\b[0-9]/;
					var result = c_web.search(patt1);
					if((c_web.length=="")||(result==0))
					{
						$("#c_web_check").show();
						$("#c_web_check").focus();
						$("#c_web_check").css("color","red");
						err_c_web=false;
						return false;
					}
					else
					{
						$("#c_web_check").hide();
					}
					
				}
	
				$("#validating").click(function()
				{
				    
				// 	err_check=true;
				 	err_federal_name=true;
				 	err_org_name=true;
				    err_industries_id=true;
				    err_check_company_id==true;
				    err_duns_name=true;
				    
				    err_address_name=true;
				    err_country=true;
				    err_state_text=true;
				    err_city_text=true;
				    err_mob_no_check=true;
				    err_c_web=true;
				    
				// 	check_firstname();
				 	check_phone();
				 	check_country();
				 	check_c_web();
				 	check_federal_name();
				    check_company_name();
				    check_industries_name();
				    check_org_name();
				    check_address_name();
				    check_duns_name();
				    check_state_text();
				    check_city_text();
				    
					if((err_check_company_id==true)&&(err_mob_no_check==true)&&(err_c_web==true)&&(err_city_text==true)&&(err_industries_id==true)&&(err_country==true)&&(err_org_name==true)&&(err_federal_name==true)&&(err_duns_name==true)&&(err_address_name==true)&&(err_state_text==true))
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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->
</html>