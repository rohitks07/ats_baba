<!DOCTYPE html>
<html lang="en">
@include('web.header') 
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
				.table-bordered td, .table-bordered th {
					border: 1px solid #4387cc;
					padding: 7px;
					text-align: center;
					color: #565656;
				}
				.table-bordered td, .table-bordered th {
					border: 1px solid #4387cc;
					padding: 4px;
					text-align: center;
					color: #4c4c4c;
				}
			
				.checkbox label {
					display: inline-block;
					padding-left: 5px;
					position: absolute;
					font-weight: 400;
				}
				.content-page {
						margin-left: 20%;
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
 </style>       		     
<body>    
		<div class="content-page">             
			<div class="content">                          
				<div class="row"> 							
                    <div class="col-md-10">
                        <div class="card" style="border: 1px #C0C0C0 solid;">
                            <div class="card-header" style="background-color: #29b6f6;">
		                      <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Add Candidate</h3>
							</div>
                               <div class="card-body">
							        <h3>Personal Detail</h3>
							   <hr>
						<form action="{{url('employer/post_new_candidate/insert')}}"     method="post">
						    <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
							   <div class="row">
								    <div class="col-md-6">
								     <!--Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">First Name <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input class="form-control" id="first_name" name="first_name" placeholder="First Name">
											</div>
									  </div>
								<!--end of Name-->
								<!--Middle Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Middle Name </label>
											<div class="col-lg-8">
												<input class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name">
											</div>
									  </div>
								<!--end of Middle Name-->
								<!--Last Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Last Name<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input class="form-control" id="last_name" name="last_name" placeholder="Last Name" >
											</div>
									  </div>
								<!--end of Last Name-->
								
									 <!-- Date of Birth-->				
										<div class="form-group row">
											<label for="address" class="control-label col-lg-4">Date of Birth<span style="color:red;">*</span> </label>
												<select name="dob_day" id="dob_day" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:17%; margin-left: 9px; border: 1px solid #737373;" >
												<option value="">DD</option>
												<option value="01" >01</option>
												<option value="02" >02</option>
												<option value="03" >03</option>
												<option value="04" >04</option>
												<option value="05" >05</option>
												<option value="06" >06</option>
												<option value="07" >07</option>
												<option value="08" >08</option>
												<option value="09" >09</option>
												<option value="10" >10</option>
												<option value="11" >11</option>
												<option value="12" >12</option>
												<option value="13" >13</option>
												<option value="14" >14</option>
												<option value="15" >15</option>
												<option value="16" >16</option>
												<option value="17" >17</option>
												<option value="18" >18</option>
												<option value="19" >19</option>
												<option value="20" >20</option>
												<option value="21" >21</option>
												<option value="22" >22</option>
												<option value="23" >23</option>
												<option value="24" >24</option>
												<option value="25" >25</option>
												<option value="26" >26</option>
												<option value="27" >27</option>
												<option value="28" >28</option>
												<option value="29" >29</option>
												<option value="30" >30</option>
												<option value="31" >31</option>
											  </select>
										<select name="dob_month" id="dob_month" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:17%; margin-left: 9px; border: 1px solid #737373;" >
											 <option value="">MM</option>
											<option value="01" >Jan</option>
											<option value="02" >Feb</option>
											<option value="03" >Mar</option>
											<option value="04" >Apr</option>
											<option value="05" >May</option>
											<option value="06" >Jun</option>
											<option value="07" >Jul</option>
											<option value="08" >Aug</option>
											<option value="09" >Sep</option>
											<option value="10" >Oct</option>
											<option value="11" >Nov</option>
											<option value="12" >Dec</option>
										  </select>
											<select name="dob_year" id="dob_year" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:17%; margin-left: 9px; border: 1px solid #737373;" >
											 <option value="" selected="selected">YYYY</option>
												<option value="2009" >2009</option>
												<option value="2008" >2008</option>
												<option value="2007" >2007</option>
												<option value="2006" >2006</option>
												<option value="2005" >2005</option>
												<option value="2004" >2004</option>
												<option value="2003" >2003</option>
												<option value="2002" >2002</option>
												<option value="2001" >2001</option>
												
											  </select>
    
										</div>
								<!--end Date of Birth-->
								<!--Gender-->	   						                                  
									<div class="form-group row">
										<label class="col-sm-4 control-label">Gender <span style="color:red;">*</span></label>
											<div class="col-sm-8">
											    <select class="form-control" name="gender" id="gender" style="width:85%" >
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
												<input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="20"  >
											</div>
									</div>
								<!--end Email-->
								<!--Skype ID-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Skype ID</label>
											<div class="col-lg-8">
												<input type="text" class="form-control"  id="skype_id"  name="skype_id" maxlength="30">
											</div>
									  </div>
								<!--end of Skype ID-->
									<!--Social Security No-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Social Security No</label>
											<div class="col-lg-8">
												<input class="form-control" name="ssn" id="ssn" autocomplete="off" placeholder="000-00-0000"  maxlength="9">
											</div>
									  </div>
								<!--end of Social Security No-->
									<!--Visa-->	   						                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Visa <span style="color:red;">*</span></label>
											<div class="col-sm-8">
											 <select name="visa_status" id="visa_status" class="form-control" style="width:85%" >
											  <option value="">Select Visa Type</option>
															<option value="E3" >E3</option>
															<option value="EAD-GC" >EAD-GC</option>
															<option value="EAD-H4" >EAD-H4</option>
															<option value="EAD-L2" >EAD-L2</option>
															<option value="EAD-OPT" >EAD-OPT</option>
															<option value="Green Card" >Green Card</option>
															<option value="H1 Visa" >H1 Visa</option>
															<option value="TN Visa" >TN Visa</option>
															<option value="US Citizen" >US Citizen</option>
														  </select>
										   </div>
									</div>									
								<!--end of Visa-->
								
								</div><!--end of column-->
									
								
								<div class="col-md-6">
								
								 <!-- Location-->				
										<div class="form-group row">
											<label for="address" class="control-label col-lg-4">Location<span style="color:red;">*</span> </label>
												<select name="country" id="country" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:19%; margin-left: 9px; border: 1px solid #737373;" >
												<option value="" selected>Country</option>
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
												<option value="United Kingdom">United Kingdom</option>
												<option value="United States">United States</option>
												<option value="Yemen" >Yemen</option>
											</select><br>
										    <select name="state" id="state_text" class="form-control"  style="max-width:17%; margin-left: 9px; border: 1px solid #737373;" >
														<option value="" selected>State</option>
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
										    </select><br>
											        <input name="city" type="text" class="form-control" id="test" placeholder="City" maxlength="20" style="width: 15%; margin-left:10px;">											     
										</div>
								<!--end Location -->
								<!--Address Line 1-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Address Line 1</label>
											<div class="col-lg-8">
												<input class="form-control" id="address1" placeholder="Address Line 1" name="addressline1" maxlength="100">
											</div>
									  </div>
								<!--end of Address Line 1-->
								<!--Address Line 2-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Address Line 2</label>
											<div class="col-lg-8">
												<input class="form-control" id="address1" placeholder="Address Line 2" name="addressline2" maxlength="100">
											</div>
									  </div>
								<!--end of Address Line 2-->
									<!--Mobile Phone-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Mobile Phone<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control"  id="mobile_number" name="mobilephone" maxlength="10" >
											</div>
									  </div>
								<!--end of Mobile Phone-->
								<!--Home Phone-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Home Phone<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control"  id="phone" name="homephone" maxlength="10">
											</div>
									  </div>
								<!--end of Home Phone-->
								<!--Select File-->	 
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Upload Resume<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="file" class="form-control" name="cv_file" id="cv_file" value="" />
												  <p>Upload files only in .doc, .docx or .pdf format with maximum size of 32 MB.</p>
											</div>
									  </div>								
								<!--end of Select File-->	
								<!--Other Documents -->	 
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Other Documents</label>										
											<div class="col-lg-8">
												<input type="file" class="form-control" name="cv_file" id="cv_file" /><br>
												
												  <input type="file" class="form-control" name="cv_file" id="cv_file"  />
												  <p>Hint:Upload files only in .doc,</br> .docx or .pdf format with</br> maximum size of 32 MB.</p>
											</div>
									  </div>								
								<!--end of Other Documents -->								
								</div><!--end of column-->								
							   </div><!--end of row-->

						<!--button-->
							   <center>
							   		<div id="shown">
							   			<button class="btn btn-primary open1" type="button">Next <span class="fa fa-arrow-right"></span></button>
									</div>
								</center><br>
								<div class="menun" style="display: none;">
						<!--button-->
							
<!--starting  Second Row-->
	<div class="row"> 							
        <div class="col-md-12" >
            <div class="card" style="border: 1px #C0C0C0 solid;">
                    <div class="card-header" style="background-color: #29b6f6;">
		                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Educational Detail</h3>
					</div>							
                        <div class="card-body">
							<div class="form-block">   
							    <div class="form-group">
                                <div class="form-content">

								<div id="educational_detail" >
									<div class="form-group row delete_row">
										<label for="address" class="control-label col-lg-12"> </label>
											<select name="degree_title[]" id="" class="form-control" placeholder="Degree Title" style="width: 14%; margin-left: 9px; border: 1px solid #737373;">
												<option value="" selected>Select Degree</option>
												<option value="BA" >BA</option>
												<option value="BE" >BE</option>
												<option value="BS" >BS</option>
												<option value="CA" >CA</option>
												<option value="Certification" >Certification</option>
												<option value="Diploma" >Diploma</option>
												<option value="HSSC" >HSSC</option>
												<option value="MA" >MA</option>
												<option value="MBA" >MBA</option>
												<option value="MS" >MS</option>
												<option value="PhD" >PhD</option>
												<option value="SSC" >SSC</option>
												<option value="ACMA" >ACMA</option>
												<option value="MCS" >MCS</option>
												<option value="Does not matter" >Does not matter</option>
												<option value="B.Tech" >B.Tech</option>
												<option value="BCOM" >BCOM</option>
												<option value="BBA" >BBA</option>
												<option value="BCA" >BCA</option>
												<option value="M.SC" >M.SC</option>
												<option value="M.Tech" >M.Tech</option>
												<option value="M.Com" >M.Com</option>
												<option value="MCA" >MCA</option>													
										    </select>
										    <input type="text" name="major_subject[]" class="form-control" placeholder="Major Subject" style="width: 14%;">	
										    <input type="text" name="institute[]" class="form-control" placeholder="Institute" style="width: 14%;">
										    <input type="text" name="edu_city[]" class="form-control" placeholder="City" style="width: 14%;">
	                                        <select type="text" name="edu_country[]" class="form-control" placeholder="Country" style="width: 14%;">
												<option value="" selected>Country</option>
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
											<select name="completion_year[]" class="form-control" placeholder="Passing Year" style="width: 15%;" >
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
										<p><button type="button" id="btnAdd" class="btn btn-primary">Add More</button></p>
							        </div>	<!--form group row close-->	
								</div> <!-- <close id> -->
							    </div><!-- form-content-->
								</div><!-- form group-->
							</div>	<!-- form block -->						
						</div> <!-- card-body -->							
            </div> <!-- card -->
		</div><!-- col -->
    </div><!-- row -->	
	<!--end Second Row--->

			<!--Button--->		
				<center>
					<div id="shows">
						<button class="btn btn-primary open1" type="button" onclick="check_if_exists()">Next <span class="fa fa-arrow-right"></span></button>
					</div>
				</center><br>
				<div class="menus" style="display: none;">
			<!--Button--->	
		
		
		
		
			<!--starting third Row-->
				<div class="row"> 							
                    <div class="col-md-12">
                        <div class="card" style="border: 1px #C0C0C0 solid;">
                            <div class="card-header" style="background-color: #29b6f6;">
		                     <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Experience Details</h3></div>
                               <div class="card-body">							   
							   <hr>
								  <div class="col-md-12">								
									
									  <div class="form-block">   
										<div class="form-group">
										 
										<!-- start of form-->				
										<div class="form-group row">
											
													
										    <input type="text" name="job_title[]" class="form-control" placeholder="Job Title" style="width: 15%;">
										   <input type="text" name="company_name[]" class="form-control" placeholder="Company Name" style="width: 20%;">
										   <input type="text" name="exp_city[]" class="form-control" placeholder="City" style="width: 15%;">
											<select type="text" name="edu_country[]" class="form-control" placeholder="Country" style="width: 15%;">
												<option value="" selected>Country</option>
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
											    <input placeholder="Start Date" name="start_date[]" class="textbox-n form-control start_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="start_date" style="width: 12%;">
												<input placeholder="End Date" name="end_date[]" class="textbox-n form-control end_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="start_date" style="width: 12%;">							   
										  <a class="btn btn-primary add-more-btn" style="float:left; margin-left:1em;">Add&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a>												  
										</div>									
									  </div>
								
								  </div>										  
								  
						    </div> <!-- card-body -->	
							
			<!--end of  third Row-->						
              <!--button-->          	
					<center>
						<div id="showa">
							<button class="btn btn-primary open1" type="button" >Next <span class="fa fa-arrow-right"></span></button>
						</div>
					</center><br>
					<div class="menua" style="display: none;">
  			 <!--button--> 

<!--starting of  third Row-->		
				<div class="row"> 							
                    <div class="col-md-12">
                        <div class="card" style="border: 1px #C0C0C0 solid;">
                            <div class="card-header" style="background-color: #29b6f6;">
		                     <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Skill Detail</h3></div>
                               <div class="card-body">							  
							   <hr>
								  <div class="col-md-12">								
									<div class="form-group row">
                                             <label for="lastname" class="control-label col-lg-4">Add Skill<span style="color:red;">*</span></label>
                                               <div class="col-lg-4">
                                                  <input class="form-control" style="border: 1px solid #737373; width:100%;" id="skill" name="skill" type="text">
												  <span class="help-block" style="text-align:right;"><small>
                                                     Single skill at a time.</small></span>
                                              </div>
								             <div class="col-lg-4">
									             <button type="button"  class="btn btn-info waves-effect waves-light m-l-10">Add</button>
                                             </div>								               
                                         </div>                                                                                                                 											  
										</div>										
									  </div>
									  <!--button-->          
									   <center>
											<div class="form-group">
											  <div class="col-lg-12 col-lg-offset-2">
												<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="background: #1ba6df !important;" >
												<img src="spinner.gif" alt="" id="loader" style="display: none">
											  </div>
											</div>
											</center><br>
										<!--button-->        	
							        </form>	
								  </div>		
              			        </div> <!-- card -->
						    </div> <!-- card-body -->
                          </div> <!-- card -->
						</div>						
                    </div>						
                </div> 							
            </div><!--end of row-->			
        </div> 							
</div> <!-- container -->
</div> <!-- content -->				
            
        <!-- END wrapper -->
@include('web.footer') 


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
					                <div class="form-group row" >
								
										<label for="address" class="control-label col-lg-12"> </label>
											<select name="degree_title[]" id="" class="form-control" placeholder="Degree Title" style="width: 14%; margin-left: 9px; border: 1px solid #737373;">
												<option value="" selected>Select Degree</option>
												<option value="BA" >BA</option>
												<option value="BE" >BE</option>
												<option value="BS" >BS</option>
												<option value="CA" >CA</option>
												<option value="Certification" >Certification</option>
												<option value="Diploma" >Diploma</option>
												<option value="HSSC" >HSSC</option>
												<option value="MA" >MA</option>
												<option value="MBA" >MBA</option>
												<option value="MS" >MS</option>
												<option value="PhD" >PhD</option>
												<option value="SSC" >SSC</option>
												<option value="ACMA" >ACMA</option>
												<option value="MCS" >MCS</option>
												<option value="Does not matter" >Does not matter</option>
												<option value="B.Tech" >B.Tech</option>
												<option value="BCOM" >BCOM</option>
												<option value="BBA" >BBA</option>
												<option value="BCA" >BCA</option>
												<option value="M.SC" >M.SC</option>
												<option value="M.Tech" >M.Tech</option>
												<option value="M.Com" >M.Com</option>
												<option value="MCA" >MCA</option>													
										    </select>
										    <input type="text" name="major_subject[]" class="form-control" placeholder="Major Subject" style="width: 14%;">	
										    <input type="text" name="institute[]" class="form-control" placeholder="Institute" style="width: 14%;">
										    <input type="text" name="edu_city[]" class="form-control" placeholder="City" style="width: 14%;">
	                                        <select type="text" name="edu_country[]" class="form-control" placeholder="Country" style="width: 14%;">
												<option value="" selected>Country</option>
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
</script>
  

</body>
</html>