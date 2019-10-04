<!DOCTYPE html>
<html lang="en">
@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
			.table td {
				padding: 7px;
				font-size: top;
				border-top: 1px solid #dee2e6;
				font-size: 14px;
				color: #000;
				background:#fff;
			}
			.table tr {
				padding: 7px;
				font-size: top;
				border-top: 1px solid #dee2e6;
				font-size: 14px;
				color: #000;
				background:#fff;
			}
			.table th {
				padding: 7px;
				font-size: top;
				border-top: 1px solid #dee2e6;
				font-size: 14px;
			}

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
		                      <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Add Candidate</h3>
							</div>
                               <div class="card-body">
							        <h3>Personal Detail</h3>
							   <hr>
						<form action="{{url('employer/post_new_candidate/insert')}}" method="post" enctype="multipart/form-data">
						    <input type="hidden" name="_token" value = "{{ csrf_token()}}" > 
							   <div class="row">
								    <div class="col-md-6">
								     <!--Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">First Name <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" id="first_name" name="first_name" placeholder="First Name"><br>
												<span id="first_namecheck">Not valid First Name</span>
											</div>
									  </div>
								<!--end of Name-->
								<!--Middle Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Middle Name </label>
											<div class="col-lg-8">
												<input type="text" id="middle_name" name="middle_name" placeholder="Middle Name">
											</div>
									  </div>
								<!--end of Middle Name-->
								<!--Last Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Last Name<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" id="last_name" name="last_name" placeholder="Last Name" ><br>
												<span id="last_namecheck">Not valid Last Name</span>
											</div>
									  </div>
								<!--end of Last Name-->
								
									 <!-- Date of Birth-->				
										<div class="form-group row">
											<label for="address" class="control-label col-lg-4">Date of Birth<span style="color:red;">*</span> </label>
											<select name="dob_day" id="dob_day" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:17%; margin-left: 9px; border: 1px solid #737373; background:#fff;" >
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
										<select name="dob_month" id="dob_month" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:17%; margin-left: 9px; border: 1px solid #737373;background:#fff;" >
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
											<select name="dob_year" id="dob_year" class="form-control" style="max-width:17%; margin-left: 9px; border: 1px solid #737373;background:#fff;" >
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
												<option value="1989" >1989</option>
												<option value="1988" >1988</option>
												<option value="1987" >1987</option>
												<option value="1986" >1986</option>
												<option value="1985" >1985</option>
												<option value="1984" >1984</option>
												<option value="1983" >1983</option>
												<option value="1982" >1982</option>
												<option value="1981" >1981</option>
												<option value="1980" >1980</option>
												<option value="1979" >1979</option>
												<option value="1978" >1978</option>
												<option value="1977" >1977</option>
												<option value="1976" >1976</option>
												<option value="1975" >1975</option>
												<option value="1974" >1974</option>
												<option value="1973" >1973</option>
												<option value="1972" >1972</option>
												<option value="1971" >1971</option>
												<option value="1970" >1970</option>
												<option value="1969" >1969</option>
												<option value="1968" >1968</option>
												<option value="1967" >1967</option>
												<option value="1966" >1966</option>
												<option value="1965" >1965</option>
												<option value="1964" >1964</option>
												<option value="1963" >1963</option>
												<option value="1962" >1962</option>
												<option value="1961" >1961</option>
												<option value="1960" >1960</option>
												<option value="1959" >1959</option>
												<option value="1958" >1958</option>
												<option value="1957" >1957</option>
												<option value="1956" >1956</option>
												<option value="1955" >1955</option>
												<option value="1954" >1954</option>
												<option value="1953" >1953</option>
												<option value="1952" >1952</option>
												<option value="1951" >1951</option>
												<option value="1950" >1950</option>
												<option value="1949" >1949</option>
												<option value="1948" >1948</option>
												<option value="1947" >1947</option>
												<option value="1946" >1946</option>
												<option value="1945" >1945</option>
												<option value="1944" >1944</option>
												<option value="1943" >1943</option>
												<option value="1942" >1942</option>
												<option value="1941" >1941</option>
												<option value="1940" >1940</option>
												<option value="1939" >1939</option>
												<option value="1938" >1938</option>
												<option value="1937" >1937</option>
												<option value="1936" >1936</option>
												<option value="1935" >1935</option>
												<option value="1934" >1934</option>
												<option value="1933" >1933</option>
												<option value="1932" >1932</option>
												<option value="1931" >1931</option>
												<option value="1930" >1930</option>
												<option value="1929" >1929</option>
												<option value="1928" >1928</option>
												<option value="1927" >1927</option>
												<option value="1926" >1926</option>
												<option value="1925" >1925</option>
												<option value="1924" >1924</option>
												<option value="1923" >1923</option>
												<option value="1922" >1922</option>
												<option value="1921" >1921</option>
												<option value="1920" >1920</option>
												<option value="1919" >1919</option>
												<option value="1918" >1918</option>
												<option value="1917" >1917</option>
												<option value="1916" >1916</option>
												<option value="1915" >1915</option>
												<option value="1914" >1914</option>
												<option value="1913" >1913</option>
												<option value="1912" >1912</option>
												<option value="1911" >1911</option>
												<option value="1910" >1910</option>
												<option value="1909" >1909</option>
												<option value="1908" >1908</option>
												<option value="1907" >1907</option>
												<option value="1906" >1906</option>
												<option value="1905" >1905</option>
												<option value="1904" >1904</option>
												<option value="1903" >1903</option>
												<option value="1902" >1902</option>
												<option value="1901" >1901</option>
											  </select>
											  <span id="dobcheck" style="margin-left:34%;">Select a Date Of Birth</span>
										</div>
								<!--end Date of Birth-->
								<!--Gender-->	   						                                  
									<div class="form-group row">
										<label class="col-sm-4 control-label">Gender <span style="color:red;">*</span></label>
											<div class="col-sm-8">
											    <select class="form-control" name="gender" id="gender" style="width:83%; background:#fff;" >
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
												<input type="text" id="email" name="email" placeholder="Email" maxlength="35"><br>
												<span id="emailcheck">Please Enter valid Email</span>
											</div>
									</div>
								<!--end Email-->
								<!--Skype ID-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Skype ID</label>
											<div class="col-lg-8">
												<input type="text" id="skype_id"  name="skype_id" maxlength="30" placeholder="Skype ID">
											</div>
									  </div>
								<!--end of Skype ID-->
									<!--Social Security No-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Social Security No</label>
											<div class="col-lg-8">
												<input type="text" name="ssn" id="ssn" autocomplete="off" placeholder="000-00-0000"  maxlength="9">
											</div>
									  </div>
								<!--end of Social Security No-->
									<!--Visa-->	   						                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Visa <span style="color:red;">*</span></label>
											<div class="col-sm-8">
											    <select name="visa_status" id="visa_status" class="form-control" style="width:83%;background:#fff;" >
											        <option value="">Select Visa Type</option>
													@foreach($toReturn['visa_type'] as $visa_type)
												            <option value="{{$visa_type['type_name']}}"> {{$visa_type['type_name']}} </option>
												        @endforeach
												</select>  
												<span id="visacheck">Please Select Visa</span>
										   </div>
									</div>									
								<!--end of Visa-->
								
								</div><!--end of column-->
									
								
								<div class="col-md-6">
								
								<!-- Location-->				
										<div class="form-group row">
											<label for="address" class="control-label col-lg-4">Location<span style="color:red;">*</span> </label>
												<select name="country" id="country" class="form-control"  style="max-width:19%; margin-left: 9px; border: 1px solid #737373;background:#fff;" >
												    <option value="" selected>Country</option>
													<option value="Afghanistan" selected>Afghanistan</option>
												<option value="Albany">Albany</option>
												<option value="Algeria">Algeria</option>
												<option value="Angola">Angola</option>
												<option value="Argentina">Argentina</option>
												<option value="Armenia">Armenia</option>
												<option value="Australia">Australia</option>
												<option value="Austria">Austria</option>
												<option value="Azerbaijan">Azerbaijan</option>
												<option value="Bahamas">Bahamas</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Bangladesh">Bangladesh</option>
												<option value="Belgium">Belgium</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Bulgaria">Bulgaria</option>
												<option value="Burma">Burma</option>
												<option value="Burundi">Burundi</option>
												<option value="Cambodia">Cambodia</option>
												<option value="Cameroon">Cameroon</option>
												<option value="Cape Verd">Cape Verd</option>
												<option value="Central Africa">Central Africa</option>
												<option value="Chadi">Chadi</option>
												<option value="Chile">Chile</option>
												<option value="China">China</option>
												<option value="Columbia">Columbia</option>
												<option value="Comora">Comora</option>
												<option value="Congo">Congo</option>
												<option value="Costa Rica">Costa Rica</option>
												<option value="Croatia">Croatia</option>
												<option value="Cuban">Cuban</option>
												<option value="Cyprus">Cyprus</option>
												<option value="Egypt">Egypt</option>
												<option value="Fiji">Fiji</option>
												<option value="Finland">Finland</option>
												<option value="France">France</option>
												<option value="Germany">Germany</option>
												<option value="Greece">Greece</option>
												<option value="Iceland">Iceland</option>
												<option value="India">India</option>
												<option value="Iran">Iran</option>
												<option value="Iraq">Iraq</option>
												<option value="Ireland">Ireland</option>
												<option value="Israel">Israel</option>
												<option value="Italy">Italy</option>
												<option value="Jamaica">Jamaica</option>
												<option value="Japan">Japan</option>
												<option value="Jordan">Jordan</option>
												<option value="Kenya">Kenya</option>
												<option value="Kuwait">Kuwait</option>
												<option value="Malaysia">Malaysia</option>
												<option value="Mexico">Mexico</option>
												<option value="Mongolia">Mongolia</option>
												<option value="Nepal">Nepal</option>
												<option value="New Zealand">New Zealand</option>
												<option value="Pakistan">Pakistan</option>
												<option value="Peru">Peru</option>
												<option value="Poland">Poland</option>
												<option value="Qatar">Qatar</option>
												<option value="Romania">Romania</option>
												<option value="Russia">Russia</option>
												<option value="Thailand">Thailand</option>
												<option value="United States">United States</option>
												<option value="Yemen">Yemen</option>
												</select>
											    <br>

										        <select name="state" id="state_text" class="form-control"  style="max-width:17%; margin-left: 9px; border: 1px solid #737373;background:#fff;" >
												
												<option value="AK" selected>AK</option>
                                      <option value="AL">AL</option>
                                      <option value="AR">AR</option>
                                      <option value="AZ">AZ</option>
                                      <option value="CA">CA</option>
                                      <option value="CO">CO</option>
                                      <option value="CT">CT</option>
                                      <option value="DE">DE</option>
                                      <option value="FL">FL</option>
                                      <option value="GA">GA</option>
                                      <option value="HI">HI</option>
                                      <option value="IA">IA</option>
                                      <option value="ID">ID</option>
                                      <option value="IL">IL</option>
                                      <option value="IN">IN</option>
                                      <option value="KS">KS</option>
                                      <option value="KY">KY</option>
                                      <option value="LA">LA</option>
                                      <option value="MA">MA</option>
                                      <option value="MD">MD</option>
                                      <option value="ME">ME</option>
                                      <option value="MI">MI</option>
                                      <option value="MN">MN</option>
                                      <option value="MO">MO</option>
                                      <option value="MS">MS</option>
                                      <option value="MT">MT</option>
                                      <option value="NC">NC</option>
                                      <option value="ND">ND</option>
                                      <option value="NE">NE</option>
                                      <option value="NH">NH</option>
                                      <option value="NJ">NJ</option>
                                      <option value="NM">NM</option>
                                      <option value="NV">NV</option>
                                      <option value="NY">NY</option>
                                      <option value="OH">OH</option>
                                      <option value="OK">OK</option>
                                      <option value="OR">OR</option>
                                      <option value="PA">PA</option>
                                      <option value="PR">PR</option>
                                      <option value="RI">RI</option>
                                      <option value="SC">SC</option>
                                      <option value="SD">SD</option>
                                      <option value="TN">TN</option>
                                      <option value="TX">TX</option>
                                      <option value="UT">UT</option>
                                      <option value="VA">VA</option>
                                      <option value="VI">VI</option>
                                      <option value="VT">VT</option>
                                      <option value="WA">WA</option>
                                      <option value="WI">WI</option>
                                      <option value="WV">WV</option>
                                      <option value="WY">WY</option>
										        </select><br>
										<input type="text" name="city" id="city_text" class="form-control"  placeholder="City" style="max-width:17%; margin-left: 9px; border: 1px solid #737373;background:#fff;" >
										        <!-- <select name="city" id="city_text" class="form-control"  style="max-width:17%; margin-left: 9px; border: 1px solid #737373;background:#fff;" >
												<option value="">Select</option>	
												</select> -->
												<span id="citycheck" style="margin-left:34%">Please Select Your location</span>
										</div>
								<!--end Location -->
								<!--Address Line 1-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Address Line 1</label>
											<div class="col-lg-8">
												<input type="text" id="address1" placeholder="Address Line 1" name="addressline1" maxlength="100">
											</div>
									  </div>
								<!--end of Address Line 1-->
								<!--Address Line 2-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Address Line 2</label>
											<div class="col-lg-8">
												<input type="text" id="address1" placeholder="Address Line 2" name="addressline2" maxlength="100">
											</div>
									  </div>
								<!--end of Address Line 2-->
									<!--Mobile Phone-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Mobile Phone<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" id="mobile_number" name="mobilephone"  placeholder="Mobile Phone" maxlength="10"><br>
												<span id="mob_ph_check">Please Enter a Valid Mobile Number</span>
											</div>
									  </div>
								<!--end of Mobile Phone-->
								<!--Home Phone-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Home Phone<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="text" id="phone" name="homephone" placeholder="Home Phone" maxlength="10"><br>
												<span id="home_ph_check">Please Enter a Valid Home Number</span>
											</div>
									  </div>
								<!--end of Home Phone-->
								<!--Select File-->	 
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Upload Resume<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input type="file" class="form-control" name="cv_file" id="cv_file"  style="background:#fff;" />
												  <p>Upload files only in .doc, .docx or .pdf format with maximum size of 32 MB.</p>
												  <span id="resume_check">Please Choose a Valid File</span>
											</div>
								    </div>								
								<!--end of Select File-->	
								<!--Other Documents -->	 
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Other Documents</label>										
											<div class="col-lg-8">
												<input type="file" class="form-control" name="file_other1" id="cv_file2" style="background:#fff;" /><br>
												  <input type="file" class="form-control" name="file_other2" id="cv_file3" style="background:#fff;"/>
												  <p>Hint:Upload files only in .doc,</br> .docx or .pdf format with</br> maximum size of 32 MB.</p>
											</div>
								    </div>								
								<!--end of Other Documents -->								
								</div><!--end of column-->								
							   </div><!--end of row-->

    						<!--button-->
							   <center>
							   		<div id="shown">
							   			<button class="btn btn-primary open1" type="button" id="validatefrm">Next <span class="fa fa-arrow-right"></span></button>
									</div>
								</center><br>
								<div class="menun" style="display: none;">
    						<!--button-->
							
<!--starting  Second Row-->
	<div class="row"> 							
        <div class="col-md-12" >
            <div class="card" style="border: 1px #C0C0C0 solid;">
                    <div class="card-header" style="background-color: #317eeb;">
		                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Educational Detail</h3>
					</div>							
                        <div class="card-body">
							<div class="form-block">   
							    <div class="form-group">
                                <div class="form-content">

								<div id="educational_detail" >
									<div class="form-group row delete_row">
										<label for="address" class="control-label col-lg-12"> </label>
											<select name="degree[]" id="degree" class="form-control" placeholder="Degree Title" style="width: 14%; margin-left: 9px; border: 1px solid #737373;">
											<option value="" selected>Select Degree</option>
												<option value="BA">BA</option>
												<option value="BE/B.TECH">BE/B.TECH</option>
												<option value="B.SC">B.SC</option>
												<option value="MA">MA</option>
												<option value="ME/M.TECH">ME/M.TECH</option>
												<option value="MBA">MBA</option>
												<option value="M.SC">M.SC</option>
												<option value="M.COM">M.COM</option>
												<option value="B.COM">B.COM</option>
												<option value="BBA">BBA</option>
												<option value="CA">CA</option>
												<option value="BCA">BCA</option>
												
												<!-- <option value="" selected>Select Degree</option>
												    @foreach($toReturn['degree'] as  $degree)
												       <option value="{{$degree['degree_title']}}"> {{$degree['degree_title']}}</option>	
                                                    @endforeach -->
                                            </select>
										    <input type="text" name="major_subject[]" id="subject" class="form-control" placeholder="Major Subject" style="width: 14%;">	
										    <input type="text" name="institute[]" id="institute" class="form-control" placeholder="Institute" style="width: 14%;">
										    <input type="text" name="edu_city[]"  id="edu_city" class="form-control" placeholder="City" style="width: 14%;">
	                                        <select type="text" name="edu_country[]" id="edu_country" class="form-control" placeholder="Country" style="width: 14%;">
												<option value="" selected>-Country-</option>
												    <!--@foreach($toReturn['countries'] as $countries)-->
												    <!--    <option value="{{$countries['country_name']}}"> {{$countries['country_name']}} </option>-->
												    <!--@endforeach	-->
												    <option value="Afghanistan" selected>Afghanistan</option>
												<option value="Albany">Albany</option>
												<option value="Algeria">Algeria</option>
												<option value="Angola">Angola</option>
												<option value="Argentina">Argentina</option>
												<option value="Armenia">Armenia</option>
												<option value="Australia">Australia</option>
												<option value="Austria">Austria</option>
												<option value="Azerbaijan">Azerbaijan</option>
												<option value="Bahamas">Bahamas</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Bangladesh">Bangladesh</option>
												<option value="Belgium">Belgium</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Bulgaria">Bulgaria</option>
												<option value="Burma">Burma</option>
												<option value="Burundi">Burundi</option>
												<option value="Cambodia">Cambodia</option>
												<option value="Cameroon">Cameroon</option>
												<option value="Cape Verd">Cape Verd</option>
												<option value="Central Africa">Central Africa</option>
												<option value="Chadi">Chadi</option>
												<option value="Chile">Chile</option>
												<option value="China">China</option>
												<option value="Columbia">Columbia</option>
												<option value="Comora">Comora</option>
												<option value="Congo">Congo</option>
												<option value="Costa Rica">Costa Rica</option>
												<option value="Croatia">Croatia</option>
												<option value="Cuban">Cuban</option>
												<option value="Cyprus">Cyprus</option>
												<option value="Egypt">Egypt</option>
												<option value="Fiji">Fiji</option>
												<option value="Finland">Finland</option>
												<option value="France">France</option>
												<option value="Germany">Germany</option>
												<option value="Greece">Greece</option>
												<option value="Iceland">Iceland</option>
												<option value="India">India</option>
												<option value="Iran">Iran</option>
												<option value="Iraq">Iraq</option>
												<option value="Ireland">Ireland</option>
												<option value="Israel">Israel</option>
												<option value="Italy">Italy</option>
												<option value="Jamaica">Jamaica</option>
												<option value="Japan">Japan</option>
												<option value="Jordan">Jordan</option>
												<option value="Kenya">Kenya</option>
												<option value="Kuwait">Kuwait</option>
												<option value="Malaysia">Malaysia</option>
												<option value="Mexico">Mexico</option>
												<option value="Mongolia">Mongolia</option>
												<option value="Nepal">Nepal</option>
												<option value="New Zealand">New Zealand</option>
												<option value="Pakistan">Pakistan</option>
												<option value="Peru">Peru</option>
												<option value="Poland">Poland</option>
												<option value="Qatar">Qatar</option>
												<option value="Romania">Romania</option>
												<option value="Russia">Russia</option>
												<option value="Thailand">Thailand</option>
												<option value="United States">United States</option>
												<option value="Yemen">Yemen</option>
												                                 
											</select>
											<select name="completion_year[]" id="completion" class="form-control" placeholder="Passing Year" style="width: 15%;" >
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
													<option value="1989" >1989</option>
												<option value="1988" >1988</option>
												<option value="1987" >1987</option>
												<option value="1986" >1986</option>
												<option value="1985" >1985</option>
												<option value="1984" >1984</option>
												<option value="1983" >1983</option>
												<option value="1982" >1982</option>
												<option value="1981" >1981</option>
												<option value="1980" >1980</option>
												<option value="1979" >1979</option>
												<option value="1978" >1978</option>
												<option value="1977" >1977</option>
												<option value="1976" >1976</option>
												<option value="1975" >1975</option>
												<option value="1974" >1974</option>
												<option value="1973" >1973</option>
												<option value="1972" >1972</option>
												<option value="1971" >1971</option>
												<option value="1970" >1970</option>
											</select>	
										<p><button type="button" id="btnAdd" class="btn btn-primary">Add More&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button></p>
										<span id="education_check">Please fill All Fields</span>
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
				<button class="btn btn-primary open1" type="button" id="edu_validatefrm" onclick="check_if_exists()">Next <span class="fa fa-arrow-right"></span></button>
			</div>
		</center><br>
		<div class="menus" style="display: none;">
	<!--Button--->	
		
		
		
<!--starting third Row-->
	<div class="row"> 							
        <div class="col-md-12">
            <div class="card" style="border: 1px #C0C0C0 solid;">
                <div class="card-header" style="background-color:  #317eeb;">
		            <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Experience Details</h3>
				</div>
                <div class="card-body">							   
					<hr>
					<div class="col-md-12">								
						<div class="form-block">   
							<div class="form-group"> 
										<!-- start of form-->

										<div id="exp_detail" >		
										    <div class="form-group row delete_exp">													
										        <input type="text" name="job_title[]" id="job_title" class="form-control" placeholder="Job Title" style="width: 14%;">
										        <input type="text" name="company_name[]" id="company_name" class="form-control" placeholder="Company Name" style="width: 17%;">
										        <input type="text" name="exp_city[]" id="exp_city" class="form-control" placeholder="City" style="width: 14%;">
											<select type="text" name="exp_country[]" id="exp_country" class="form-control" placeholder="Country" style="width: 14%;">
												<option value="">-Country-</option>
												    @foreach($toReturn['countries'] as $countries)
												        <option value="{{$countries['country_name']}}"> {{$countries['country_name']}} </option>
												    @endforeach                         
											</select>
											    <input placeholder="Start Date" name="start_date[]" id="start_date" class="textbox-n form-control start_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="start_date" style="width: 15%;">
											    <input placeholder="End Date" name="end_date[]" id="end_date" class="textbox-n form-control end_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="start_date" style="width: 15%;">							   
												<p><button type="button" id="btnAdd_Exp" class="btn btn-primary">Add More&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button></p>
											    <!-- <a class="btn btn-primary add-more-btn" style="float:left; margin-left:1em;">Add More&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a>												   -->
												<span id="experience_check">Please fill All Fields</span>
										   </div><!-- GROUP ROW-->									
									    </div><!-- EXP ID-->
								    </div><!-- COL-->
						    </div><!-- form group-->
						</div>	<!-- form block -->						
				</div> <!-- card-body -->							
            </div> <!-- card -->
		</div><!-- col -->
    </div><!-- row -->	
<!--end of  third Row-->

  <!--button-->          	
		<center>
			<div id="showa">
				<button class="btn btn-primary open1" type="button" id="exp_validatefrm">Next <span class="fa fa-arrow-right"></span></button>
			</div>
		</center><br>
		<div class="menua" style="display: none;"> 
   <!--button--> 

<!--starting of fourth Row-->		
		<div class="row"> 							
            <div class="col-md-12">
                <div class="card" style="border: 1px #C0C0C0 solid;">
                    <div class="card-header" style="background-color:  #317eeb;">
		                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Skill Detail</h3>
					</div><br>

					    <div class="card-body">
                            <center>
                                <input name="skills" id="Result" class="form-control" required>
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

						
					<!-- <div class="formwraper" style="width:60%; margin-left: 15em;">				
						<div class="formint">
							<div class="jobdescription" style="border-top:0px;">								
								<div class="row">
									<div class="col-md-12">
									    <div class="skillBox"><br>
										    <ul class="skillDetail" id="myskills">
											
										    <div class="clear"></div>
									    </div>
									</div>
								</div>
								<br>
							    <div class="input-group">
									<label class="input-group-addon">Add Skill<span>*</span></label>
									    <div class="row">
									        <div class="col-md-8">
									            <div class="ui-widget">
										            <input type="text" name="skill" id="skill" value="" autocomplete="off" class="form-control valid" style="margin-left:1em;">
										            <input type="hidden" name="s_val" id="s_val" value="" class="form-control">
									            </div>
									        </div>
									        <div class="col-md-2">
										        <input type="button" name="js_skill_add" id="js_skill_add" value="Add" class="btn btn-success">
									        </div>
									    </div>							
									<small>Single skill at a time.</small>
									<div class="clear">&nbsp;</div>
								</div>
							</div>	
						</div>		
					</div>		 -->
				</div>		
            </div> <!-- card -->
		</div> <!-- card-body -->
		<center><input type="submit" name="submit" id="validatefrm" value="Submit" class="btn btn-primary" style="background: #1ba6df !important;" ></center>
		</form>		
</div> <!-- card -->
</div>						
</div>						
</div> 							
</div><!--end of row-->			
</div> 							
</div> <!-- container -->
</div> <!-- content -->				
<!-- END wrapper -->
@include('include.emp_footer')
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
	$(document).ready(function()
	{	
		$("#skill_check").hide();

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
												<option value="BA">BA</option>
												<option value="BE/B.TECH">BE/B.TECH</option>
												<option value="B.SC">B.SC</option>
												<option value="MA">MA</option>
												<option value="ME/M.TECH">ME/M.TECH</option>
												<option value="MBA">MBA</option>
												<option value="M.SC">M.SC</option>
												<option value="M.COM">M.COM</option>
												<option value="B.COM">B.COM</option>
												<option value="BBA">BBA</option>
												<option value="CA">CA</option>
												<option value="BCA">BCA</option>												
										    </select>
										    <input type="text" name="major_subject[]" class="form-control" placeholder="Major Subject" style="width: 14%;">	
										    <input type="text" name="institute[]" class="form-control" placeholder="Institute" style="width: 14%;">
										    <input type="text" name="edu_city[]" class="form-control" placeholder="City" style="width: 14%;">
	                                        <select type="text" name="edu_country[]" class="form-control" placeholder="Country" style="width: 14%;">
												<option value="" selected>Country</option>
												    @foreach($toReturn['countries'] as $countries)
												        <option value="{{$countries['ID']}}"> {{$countries['country_name']}} </option>
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
								    @foreach($toReturn['countries'] as $countries)
										<option value="{{$countries['ID']}}"> {{$countries['country_name']}} </option>
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
				$("#validatefrm").click(function()
				{
					check_mb_phone();
				});
				function check_mb_phone()
				{
					
					var ph_val=$("#mobile_number").val();
					var phoneno=new RegExp(/^[0-9-+]+$/);
					if(ph_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/))
					{
						$("#mob_ph_check").hide();
					}
					else
					{
						$("#mob_ph_check").show();
						$("#mob_ph_check").focus();
						$("#mob_ph_check").css("color","red");
						err_mob_ph=false;
						return false;
					}
				}
				//validate home Phone
				$("#validatefrm").click(function()
				{
					check_hm_phone();
				});
				function check_hm_phone()
				{
					
					var ph_val=$("#phone").val();
					var phoneno=new RegExp(/^[0-9-+]+$/);
					if(ph_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/))
					{
						$("#home_ph_check").hide();
					}
					else
					{
						$("#home_ph_check").show();
						$("#home_ph_check").focus();
						$("#home_ph_check").css("color","red");
						err_home_ph=false;
						return false;
					}
				}
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
// 		 <script>
// $(document).ready(function()
// {
//     $('#country').on('change', function()
//         {
// 			$('#state_text').empty();
//             var country_id = $(this).val();
// 			alert(country_id);
//              if(country_id)
//                 {
//                      $.ajax({

//                             type:'GET',
//                         	url:'{{url('employer/fetchstate')}}'+"/"+country_id,
//                             dataType:'json',
//                             success: function(data)
//                             {
// 								console.log(data);
                                 
//                                   $.each(data,function(i,state){
//                                   $("#state_text").append("<option>"+state.state+"</option>");

//                                  //console.log(response);
//                                  });
                                   
//                             }
//                     });
//                 }
         
//     });
// });
// </script>
// 		 <script>
// $(document).ready(function()
// {
//     $('#state_text').on('change', function()
//         {
// 			$('#city_text').empty();
//             var state_id = $(this).val();
// 			var country_id=$('#state_text').val();

// 			alert(state_id);
//              if(state_id)
//                 {
//                      $.ajax({

//                             type:'GET',
//                         	url:'{{url('employer/fetchcity')}}'+"/"+state_id+"/"+country_id,
//                             dataType:'json',
//                             success: function(data)
//                             {
// 								console.log(data);
                                 
//                                   $.each(data,function(i,city){
//                                   $("#city_text").append("<option >"+city.city_name+"</option>");

//                                  //console.log(response);
//                                  });
                                   
//                             }
//                     });
//                 }
         
//     });
// });
// </script>
</body>
</html>