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
                            <div class="card-header" style="background-color:#317eeb;">
		                     <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">ADD CONTACT</h3></div>
                               <div class="card-body">
				                    <div class="row">
				                    	<div class="col-md-6">
								 <!--Salutation-->	     
							<form action="{{url('employer/post_new_contacts/add')}}" method="post">       
							<input type="hidden" name="_token" value = "{{ csrf_token()  }}" >                        
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Salutation</label>
											<div class="col-sm-8">
												<select class="form-control" name="salutation" style="width:40%; border: 1px solid #737373; background: #fff;">													
													<option value="Mr" >Mr</option>
													<option value="Ms" >Ms</option>
													<option value="Mrs" >Mrs</option>
													<option value="Miss" >Miss</option>
													<option value="Dr" >Dr</option>
													<option value="Prof" >Prof</option>
												</select>
										   </div>
									</div>
									<!--end of Salutation-->
									<!--Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Name <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												 <input type="text" id="" name="name" placeholder="Contact Person Name" required>
											</div>
									  </div>
								<!--end of Name-->
								<!--Phone-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Phone (C)<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												 <input type="text" id="phonec" name="phone_c" placeholder="00.000.000" maxlength="12" required>
											</div>
									  </div>
								<!--end of Phone (C)-->
								<!--Phone (W)-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Phone (W)</label>
											<div class="col-lg-8">
												 <input type="text" id="phonew" name="phone_w" placeholder="00.000.000"  maxlength="12">
											</div>
									  </div>
								<!--end of Phone (W)-->
								
							</div>
							<div class="col-md-6">
								<!--Email (H))-->	   
									<div class="form-group row" >
										<label for="" class="control-label col-lg-4">Email (H)<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												 <input type="text" id="" name="email_h" placeholder="Email ID" maxlength="60" required>
											</div>
									  </div>
								<!--end of Email (H)-->
								<!--Email (W)-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Email (W)</label>
											<div class="col-lg-8">
												 <input type="text" id="" name="email_w" placeholder="Email ID"  maxlength="60">
											</div>
									  </div>
								<!--end of Email (W)-->
									
								
									   <!--Address-->				
										<div class="form-group row">
											<label for="address" class="control-label col-lg-4">Address </label>
												<select name="country" id="country" class="form-control" onChange="grab_cities_by_country(this.value);" style="width:17%; border: 1px solid #737373; margin-left: 9px; background:#fff;" required>
												{{-- <option value="" selected>Select Country</option> --}}
												<option value="United States" selected>United States</option>

												<option value="Afghanistan" >Afghanistan</option>
												<option value="Albany" >Albany</option>
												<option value="Algeria" >Algeria</option>
												<option value="Angola" >Angola</option>
												<option value="Argentina" >Argentina</option>
												<option value="Armenia" >Armenia</option>
												<option value="Australia" >Australia</option>
												<option value="Austria" >Austria</option>
												<option value="Azerbaijan" >Azerbaijan</option>
												<option value="Bahamas" >Bahamas</option>
												<option value="Bahrain" >Bahrain</option>
												<option value="Bangladesh" >Bangladesh</option>
												<option value="Belgium" >Belgium</option>
												<option value="Bhutan" >Bhutan</option>
												<option value="Bulgaria" >Bulgaria</option>
												<option value="Burma" >Burma</option>
												<option value="Burundi" >Burundi</option>
												<option value="Cambodia" >Cambodia</option>
												<option value="Cameroon" >Cameroon</option>
												<option value="Canada" >Canada</option>
												<option value="Cape Verd" >Cape Verd</option>
												<option value="Central Africa" >Central Africa</option>
												<option value="Chadi" >Chadi</option>
												<option value="Chile" >Chile</option>
												<option value="China" >China</option>
												<option value="Columbia" >Columbia</option>
												<option value="Comora" >Comora</option>
												<option value="Congo" >Congo</option>
												<option value="Costa Rica" >Costa Rica</option>
												<option value="Croatia" >Croatia</option>
												<option value="Cuban" >Cuban</option>
												<option value="Cyprus" >Cyprus</option>
												<option value="Egypt" >Egypt</option>
												<option value="Fiji" >Fiji</option>
												<option value="Finland" >Finland</option>
												<option value="France" >France</option>
												<option value="Germany" >Germany</option>
												<option value="Ghana" >Ghana</option>
												<option value="Greece" >Greece</option>
												<option value="Iceland" >Iceland</option>
												<option value="India" >India</option>
												<option value="Iran" >Iran</option>
												<option value="Iraq" >Iraq</option>
												<option value="Ireland" >Ireland</option>
												<option value="Israel" >Israel</option>
												<option value="Italy" >Italy</option>
												<option value="Jamaica" >Jamaica</option>
												<option value="Japan" >Japan</option>
												<option value="Jordan" >Jordan</option>
												<option value="Kenya" >Kenya</option>
												<option value="Kuwait" >Kuwait</option>
												<option value="Malaysia" >Malaysia</option>
												<option value="Mexico" >Mexico</option>
												<option value="Mongolia" >Mongolia</option>
												<option value="Nepal" >Nepal</option>
												<option value="New Zealand" >New Zealand</option>
												<option value="Pakistan" >Pakistan</option>
												<option value="Peru" >Peru</option>
												<option value="Poland" >Poland</option>
												<option value="Qatar" >Qatar</option>
												<option value="Romania" >Romania</option>
												<option value="Russia" >Russia</option>
												<option value="Thailand" >Thailand</option>
												<option value="United Kingdom" >United Kingdom</option>
												<option value="United States" >United States</option>
												<option value="Yemen" >Yemen</option>
											  </select>
											  
										<select name="state" id="state_text" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:17%; margin-left: 9px; border: 1px solid #737373; background:#fff;" required>
											<option value="" selected>Select State</option>
												<option value="AK" >AK</option>
												<option value="AL" >AL</option>
												<option value="AR" >AR</option>
												<option value="AZ" >AZ</option>
												<option value="CA" >CA</option>
												<option value="CO" >CO</option>
												<option value="CT" >CT</option>
												<option value="DE" >DE</option>
												<option value="FL" >FL</option>
												<option value="GA" >GA</option>
												<option value="HI" >HI</option>
												<option value="IA" >IA</option>
												<option value="ID" >ID</option>
												<option value="IL" >IL</option>
												<option value="IN" >IN</option>
												<option value="KS" >KS</option>
												<option value="KY" >KY</option>
												<option value="LA" >LA</option>
												<option value="MA" >MA</option>
												<option value="MD" >MD</option>
												<option value="ME" >ME</option>
												<option value="MI" >MI</option>
												<option value="MN" >MN</option>
												<option value="MO" >MO</option>
												<option value="MS" >MS</option>
												<option value="MT" >MT</option>
												<option value="NC" >NC</option>
												<option value="ND" >ND</option>
												<option value="NE" >NE</option>
												<option value="NH" >NH</option>
												<option value="NJ" >NJ</option>
												<option value="NM" >NM</option>
												<option value="NV" >NV</option>
												<option value="NY" >NY</option>
												<option value="OH" >OH</option>
												<option value="OK" >OK</option>
												<option value="OR" >OR</option>
												<option value="PA" >PA</option>
												<option value="PR" >PR</option>
												<option value="RI" >RI</option>
												<option value="SC" >SC</option>
												<option value="SD" >SD</option>
												<option value="TN" >TN</option>
												<option value="TX" >TX</option>
												<option value="UT" >UT</option>
												<option value="VA" >VA</option>
												<option value="VI" >VI</option>
												<option value="VT" >VT</option>
												<option value="WA" >WA</option>
												<option value="WI" >WI</option>
												<option value="WV" >WV</option>
												<option value="WY" >WY</option>
											</select>
										        <input type="text" name="city" class="form-control" id="city" placeholder="City" value="" maxlength="150" style="width:17%; margin-left:1em; background:#fff;">
                                        
										</div>
								<!--end of location-->
								<!--Employer-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Employer</label>
											<div class="col-sm-8">
												 <select name="company_name" id="company_name" class="form-control" style="background:#fff;">
												  <option value="" selected>Select Company</option>
															   
												  <option value="Infosys" >Infosys</option>
															   
												  <option value="Zensar" >Zensar</option>
															   
												  <option value="L&T" >L&T</option>
															   
												  <option value="Persistent" >Persistent</option>
															   
												  <option value="KPIT" >KPIT</option>
															   
												  <option value="IT-SCIENT" >IT-SCIENT</option>
															   
												  <option value="HCL" >HCL</option>
												</select>
										   </div>
									</div>			
							<!--end of Employer-->
							
								<!--Designation-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Designation</label>
											<div class="col-lg-8">
												 <input type="text" id="Designation" name="designation">
											</div>
									  </div>
									</div><br><br>
										<div class="col-md-12" style="background: #dadada; height: 85px;"><br>
									     <center><a href="{{url('post_new_contacts')}}"><button class="btn btn-info waves-effect waves-light m-b-5" type="submit">Post Contact</button> </a></center>
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