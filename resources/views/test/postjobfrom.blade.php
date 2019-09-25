<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Employer Signup of HRMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <!-- Custom Files -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{url('assets/js/modernizr.min.js')}}"></script>              
    </head>
    <body class="fixed-left">       
        <!-- Begin page -->
        <div id="wrapper">             
            <div class="content-page" style="margin-left:15%; margin-right:15%">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <!-- Form-validation -->		
				         <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header" style="  background-color:#317eeb"><h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Account Information</h3></div>
                                    <div class="card-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                                <div class="form-group row">
                                                    <label for="firstname" class="control-label col-lg-4">Full Name *</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width: 84%;" placeholder="Full Name" id="firstname" name="firstname" type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lastname" class="control-label col-lg-4">Email *</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width:84%;" placeholder="Email" id="email" name="email" type="text">
                                                    </div>
                                                </div>
                                           
                                                <div class="form-group row">
                                                    <label for="password" class="control-label col-lg-4">Password *</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width:84%;" placeholder="Password" id="password" name="password" type="password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="confirm_password"  class="control-label col-lg-4">Confirm Password *</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width:84%;" placeholder="Confirm Password" id="confirm_password" name="confirm_password" type="password">
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col -->
                        </div> <!-- End row -->	
						 <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header" style="  background-color:#317eeb"><h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Company Information</h3></div>
                                    <div class="card-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                                <div class="form-group row">
                                                    <label for="firstname" class="control-label col-lg-4">Company Name *</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width: 84%;" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                               
											    <div class="form-group row">
                                                <label class="col-sm-4 control-label">Industry *</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" style="max-width:350px; border: 1px solid #737373">
														<option value="" selected>Select Industry</option>
                                                        <option value="3" >Accounts</option>
														<option value="5" >Advertising</option>
														<option value="7" >Banking</option>
														<option value="10" >Customer Service</option>
														<option value="16" >Graphic / Web Design</option>
														<option value="18" >HR / Industrial Relations</option>
														<option value="40" >IT - Hardware</option>
														<option value="22" >IT - Software</option>
														<option value="43" >IT Staffing</option>
														<option value="42" >Others</option>
														<option value="35" >Teaching / Education</option>
														<option value="45" >Telecom</option>
                                                    </select>
                                                </div>
                                            </div>
											   
											 
											    <div class="form-group row">
                                                <label class="col-sm-4 control-label">State of Organizationation *</label>
                                                <div class="col-sm-8">
													<select class="form-control" style="max-width:300px; border: 1px solid #737373">
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
                                                </div>
                                            </div>  
									 <div class="form-group row">
                                                <label class="col-sm-4 control-label">Organization Type</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" style="max-width:350px; border: 1px solid #737373">
														 <option value="Private">Private</option>
														<option value="Public">Public</option>
														<option value="Government">Government</option>
														<option value="Semi-Government">Semi-Government</option>
														<option value="NGO">NGO</option>
                                                    </select>
                                                </div>
                                            </div>		   
								  <div class="form-group row">
                                        <label for="password" class="control-label col-lg-4">Federal ID/EIN</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" style="border: 1px solid #737373; width:84%;" id="federal_id" name="federal_id" type="text">
                                                    </div>
                                                </div>
									<div class="form-group row">
                                        <label for="password" class="control-label col-lg-4">DUNS (D&B)</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" style="border: 1px solid #737373; width:84%;" id="duns" name="duns" type="text">
                                                    </div>
                                                </div>	
			              <div class="form-group row">
                            <label class="col-sm-4 control-label">Location Time Zone *</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" style="max-width:350px; border: 1px solid #737373">
											<option value="">Select Time Zone</option>
												<option value="(GMT-12:00) International Date Line West">(GMT-12:00) International Date Line West</option>
												<option value="(GMT-11:00) Midway Island, Samoa">(GMT-11:00) Midway Island, Samoa</option>
												<option value="(GMT-10:00) Hawaii">(GMT-10:00) Hawaii</option>
												<option value="(GMT-09:00) Alaska">(GMT-09:00) Alaska</option>
												<option value="(GMT-08:00) Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>
												<option value="(GMT-08:00) Tijuana, Baja California">(GMT-08:00) Tijuana, Baja California</option>
												<option value="(GMT-07:00) Arizona">(GMT-07:00) Arizona</option>
												<option value="(GMT-07:00) Chihuahua, La Paz, Mazatlan">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
												<option value="(GMT-07:00) Mountain Time (US & Canada)">(GMT-07:00) Mountain Time (US & Canada)</option>
												<option value="(GMT+05:30) India Standard Time (IST)">(GMT+05:30) India Standard Time (IST)</option>
                                         </select>
                                      </div>
                                   </div>
								    <div class="form-group row">
                            <label class="col-sm-4 control-label">Display Time Zone *</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" style="max-width:350px; border: 1px solid #737373">
											<option value="">Select Time Zone</option>
												<option value="(GMT-12:00) International Date Line West">(GMT-12:00) International Date Line West</option>
												<option value="(GMT-11:00) Midway Island, Samoa">(GMT-11:00) Midway Island, Samoa</option>
												<option value="(GMT-10:00) Hawaii">(GMT-10:00) Hawaii</option>
												<option value="(GMT-09:00) Alaska">(GMT-09:00) Alaska</option>
												<option value="(GMT-08:00) Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>
												<option value="(GMT-08:00) Tijuana, Baja California">(GMT-08:00) Tijuana, Baja California</option>
												<option value="(GMT-07:00) Arizona">(GMT-07:00) Arizona</option>
												<option value="(GMT-07:00) Chihuahua, La Paz, Mazatlan">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
												<option value="(GMT-07:00) Mountain Time (US & Canada)">(GMT-07:00) Mountain Time (US & Canada)</option>
												<option value="(GMT+05:30) India Standard Time (IST)">(GMT+05:30) India Standard Time (IST)</option>
                                         </select>
                                      </div>
                                   </div>
								    <div class="form-group row">
                                                    <label for="address" class="control-label col-lg-4">Address *</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width: 84%;" id="company_location" name="company_location" type="text"><br>
														<input class="form-control" style="border: 1px solid #737373; width: 84%;" id="company_location" name="company_location" type="text">

                                                    </div>
                                                </div>
												
					<div class="form-group row">
                        <label for="address" class="control-label col-lg-4">Address *</label>

							<select name="country" id="country" class="form-control" onChange="grab_cities_by_country(this.value);" style="width:17%; border: 1px solid #737373; margin-left: 9px;">
							<option value="" selected>Select Country</option>
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
                          
			<select name="state" id="state_text" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:17%; margin-left: 9px; border: 1px solid #737373;">
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
			<input type="text" name="city" value="" class="custom-control" Panecholder="City" style="max-width:17%; margin-left: 9px; border: 1px solid #737373;">
            
            		</div>
											<div class="form-group row">
                                                    <label for="lastname" class="control-label col-lg-4">Phone(Work)*</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width:84%;" id="company_phone" name="company_phone1" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="username" class="control-label col-lg-4">Phone (Mobile)*</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width: 84%;" id="mobile_phone" name="mobile_phone1" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="password" class="control-label col-lg-4">Company Website *</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width:84%;" id="company_website" name="company_website" type="text">
                                                    </div>
                                                </div>
												<div class="form-group row">
                                                <label class="col-sm-4 control-label">No. of Employees *</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" style="max-width:350px; border: 1px solid #737373">
														<option value="1-10" >1-10</option>
													  <option value="11-50" >11-50</option>
													  <option value="51-100" >51-100</option>
													  <option value="101-300" >101-300</option>
													  <option value="301-600" >301-600</option>
													  <option value="601-1000" >601-1000</option>
													  <option value="1001-1500" >1001-1500</option>
													  <option value="1501-2000" >1501-2000</option>
													  <option value="More than 2000" >More than 2000</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-md-4 control-label" for="example-textarea-input">Company Description *</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" style="max-width:84%; border: 1px solid #737373" rows="5" id="example-textarea-input"></textarea>
                                                </div>
                                            </div>
											 
								<div class="form-group row">
                                    <label class="col-md-4 control-label">Company Logo *</label>
                                       <div class="col-md-8">
                                             "Select a file: <input type="file" name="myFile"><br>
                                         <span class="help-block"><small>
                                                Upload files only in .doc, .docx or .pdf format with maximum size of 6 MB.</small></span>
                                                </div>
                                            </div>  
												<div class="form-group">
                                                    <div class="offset-lg-12">
                                                        <center><button class="btn btn-success waves-effect waves-light" type="submit">Sign up</button> </center>                                                   </div>
                                                </div>
												
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!--form validation-->
        <script src="../plugins/jquery-validation/dist/jquery.validate.min.js"></script>

        <!--form validation init-->
        <script src="assets/pages/form-validation-init.js"></script>

        <script src="assets/js/jquery.app.js"></script>

	
	</body>

<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->
</html>