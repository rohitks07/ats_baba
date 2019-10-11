<!DOCTYPE html>
<html lang="en">
@include('include.jobseekerheader')
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
input[type=password] {
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    outline: none;
    padding: 8px;
    margin: 5px 1px 3px 0px;
    border: 1px solid #c1bfbf;
    width: 50%;
    border-radius: 6px;
}
input[type=password]:focus{
		-moz-box-shadow: 0 0 5px #51cbee;
		-webkit-box-shadow: 0 0 5px #51cbee;
		 border: 1px solid #51cbee;
		 box-shadow: 0 0 5px #51cbee;
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
		width: 50%;
		padding: 7px;
		border-radius: 5px;
	}

	textarea {
		border-radius: 5px;
		width: 48%;
	}
span.red {
    color:red;
}
input[class="form-control"]{
	border:1px solid #bdbcbc;
    width: 84%;
    background: #fff;
}
select[class="form-control"] {
    border: 1px solid #bdbcbc;
    width: 105%;
    background: #fff;
}
textarea[class="form-control"]{
	border:1px solid #bdbcbc;
    background: #fff;
	width: 75%;
}

@media screen and (min-width: 320px) and (max-width: 480px){
    .content{
        width:100%;
        margin-left:0%;
    }
}
/* Smartphones (portrait) ---------- */
@media screen and (max-width: 320px){
    .content{
        width:100%;
        margin-left:0%;
    }
}
/* Smartphones (landscape) ---------- */
@media screen and (min-width: 321px){
    .content{
        width:100%;
        margin-left:0%;
    }
}
/* Tablets, iPads (portrait and landscape) ---------- */
@media screen and (min-width: 768px) and (max-width: 1024px){
    .content{
        width:100%;
        margin-left:0%;
    }
}
/* Tablets, iPads (portrait) ---------- */
@media screen and (min-width: 768px){
    .content{
        width:100%;
        margin-left:0%;
    }
}
/* Tablets, iPads (landscape) ---------- */
@media screen and (min-width: 1024px){
    .content{
        width:100%;
        margin-left:0%;
    }
}
/* Desktops and laptops ---------- */
@media screen and (min-width: 1224px){
    .content{
        width:100%;
        margin-left:0%;
    }
}
/* Large screens ---------- */
@media screen and (min-width: 1824px){
    .content{
        width:90%;
        margin-left:0%;
    }
}
</style>
        <div id="wrapper" style="background:#e6e6e6;">             
            <div class="content-page">
                <div class="content">
                    <!-- Form-validation -->
					        <div class="row">
	                            <div class="col-sm-12">
	                                <div class="card">
	                                    <div class="card-header" style="  background-color:#317eeb;"><h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Account Information</h3>
	                                    </div>
	                                    	<div class="card-body">                                        
													<form class="cmxform form-horizontal tasi-form" id="signupForm" action="{{url('jobseekersignup/add')}}"  method="post" enctype="multipart/form-data" novalidate="novalidate">
													    <input type="hidden" name="_token" value ="{{csrf_token() }}">
		                                                	<div class="form-group row">                                         
		                                                    	<label for="firstname" class="control-label col-lg-4">Full Name <span class="red">*</span></label>
		                                                    		<div class="col-lg-8">
																        <input type="text" placeholder="Full Name" id="firstname" name="first_name"  title="please fill"><br>
		                                                    			<span id="namecheck">Not valid Name</span>
																	</div>
		                                                	</div>
		                                                	<div class="form-group row">
		                                                    	<label for="email" class="control-label col-lg-4">Email<span class="red">*</span></label>
		                                                    		<div class="col-lg-8">
																		<input type="text" placeholder="Email" id="email" name="email"><br>
																		<span id="emailcheck">Please Enter a Valid Email ID</span>
																	</div>
															</div>                                           
		                                                	<div class="form-group row">
		                                                    	<label for="password" class="control-label col-lg-4">Password<span class="red">*</span></label>
		                                                    		<div class="col-lg-8">
																		<input type="password"  placeholder="Password" id="password" name="password" ><br>
																		<span id="passwordcheck">This box must not be empty/ Minimum length 6 Character</span>
		                                                            </div>
		                                                	</div>
															<div class="form-group row">
																<label for="confirm_password"  class="control-label col-lg-4">Confirm Password <span class="red">*</span></label>
																	<div class="col-lg-8">
																		<input type="password"  placeholder="Confirm Password" id="confirm_password" name="confirm_password"><br>
																		<span id="cmfpascheck">Both Password Fields Must Be Same</span>
																		<br>
																		<div style="width: 30%">
                                                                        	@if(!empty($error))
                                                                        		<p class="alert alert-danger">{{$error}}</p>
                                                                            @endif
                                                                        </div>
                       
																	</div>
															</div>                                          
	                                        </div> <!-- card-body -->
	                                </div> <!-- card -->
	                            </div> <!-- col -->
	                        </div> <!-- End row -->	
						<div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header" style="background-color:#317eeb;"><h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Personal Information</h3>
                                    </div>
                                    <div class="card-body">
										<div class="form-group row">
                                            <label class="col-sm-4 control-label">Gender <span class="red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="gender"id="gender">
                                                        <option value="male" >Male</option>
														<option value="female" >Female</option>													
                                                    </select>	
                                                </div>
                                        </div>

										<div class="form-group row">
                        					<label for="address" class="control-label col-lg-4">Date of Birth<span class="red">*</span></label>
												<div class="col-md-2">
													<select name="dob_day" id="dob_day" class="form-control">
													 	<option value="">Day</option>
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
												  		<span id="dobcheck" >Please Select Your D.O.B.</span>
												</div>
			                          			<div class="col-md-2">
						           					<select name="dob_month" id="dob_month" class="form-control">
											            <option value="">Month</option>
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
		  										</div>
						  						<div class="col-md-2">
						  							<select name="dob_year" id="dob_year" class="form-control" >
														<option value="">Year</option>
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
														<option value="1980" selected="selected">1980</option>
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
												</div>
            							</div>
            							 <!--location-->
                                                <div class="form-group row">
													<label for="address" class="control-label col-lg-4">Location <span style="color:red;">*</span></label>
													<select name="country" id="country"  class="form-control "  style="width:11%; border: 1px solid #bbb8b8; margin-left: 9px;" required>
													  <option value="">Select Country</option>
													  @foreach($toReturn['countries'] as $country)
													<option value="{{$country['country_id']}}">{{ $country['country_name']}}</option>
													  @endforeach  
													</select>
				                                            
													<select name="state" id="state_text" class="form-control " style="max-width:12%; margin-left: 9px; border: 1px solid #bbb8b8;" required>
														  <option value="">Select State</option>
													</select>
													<!--<div class="col-md-12" style="float: right;margin-left: 21em;margin-top: 2%;">-->
														<select name="city" id="city" class="form-control " style="max-width:9%; border: 1px solid #bbb8b8;" required>
															  <option value="">Select City</option>
													    </select>
														<br>
														<span id="citycheck">Please choose Your Location</span> 
													<!--</div>-->
												</div>
									<!--end location-->
	
            							
										<div class="form-group row">
											<label class="col-md-4 control-label" for="example-textarea-input">Current Address<span class="red">*</span></label>
												<div class="col-md-8">
													<textarea class="form-control" name="present_address" rows="4" id="example-textarea-input"></textarea>
													<span id="cacheck">Please Enter Your Address</span>
												</div>
										</div>
										
	

		
										<div class="form-group row">
				                            <label class="col-sm-4 control-label">Nationality <span class="red">*</span></label>
				                                <div class="col-sm-8">
				                                    <select class="form-control" name="nationality" id="nationality" style="width:50%;">
														<option value="Afghan" >Afghan</option>
														<option value="Albanian" >Albanian</option>
														<option value="Algerian" >Algerian</option>
														<option value="Angolan" >Angolan</option>
														<option value="Argentinean" >Argentinean</option>
														<option value="Armenian" >Armenian</option>
														<option value="Australian" >Australian</option>
														<option value="Austrian" >Austrian</option>
														<option value="Azerbaijani" >Azerbaijani</option>
														<option value="Bahamian" >Bahamian</option>
														<option value="Bahraini" >Bahraini</option>
														<option value="Bangladeshi" >Bangladeshi</option>
														<option value="Belgian" >Belgian</option>
														<option value="Bhutanese" >Bhutanese</option>
														<option value="Bulgarian" >Bulgarian</option>
														<option value="Burmese" >Burmese</option>
														<option value="Burundian" >Burundian</option>
														<option value="Cambodian" >Cambodian</option>
														<option value="Cameroonian" >Cameroonian</option>
														<option value="Canadian" >Canadian</option>
														<option value="Cape Verdean" >Cape Verdean</option>
														<option value="Central African" >Central African</option>
														<option value="Chadian" >Chadian</option>
														<option value="Chilean" >Chilean</option>
														<option value="Chinese" >Chinese</option>
														<option value="Colombian" >Colombian</option>
														<option value="Comoran" >Comoran</option>
														<option value="Congolese" >Congolese</option>
														<option value="Costa Rican" >Costa Rican</option>
														<option value="Croatian" >Croatian</option>
														<option value="Cuban" >Cuban</option>
														<option value="Cypriot" >Cypriot</option>
														<option value="Egyptian" >Egyptian</option>
														<option value="Fijian" >Fijian</option>
														<option value="Finnish" >Finnish</option>
														<option value="French" >French</option>
														<option value="German" >German</option>
														<option value="Ghanaian" >Ghanaian</option>
														<option value="Greek" >Greek</option>
														<option value="Icelander" >Icelander</option>
														<option value="Indian" >Indian</option>
														<option value="Iranian" >Iranian</option>
														<option value="Iraqi" >Iraqi</option>
														<option value="Irish" >Irish</option>
														<option value="Israeli" >Israeli</option>
														<option value="Italian" >Italian</option>
														<option value="Jamaican" >Jamaican</option>
														<option value="Japanese" >Japanese</option>
														<option value="Jordanian" >Jordanian</option>
														<option value="Kenyan" >Kenyan</option>
														<option value="Kuwaiti" >Kuwaiti</option>
														<option value="Malaysian" >Malaysian</option>
														<option value="Mexican" >Mexican</option>
														<option value="Mongolian" >Mongolian</option>
														<option value="Nepalese" >Nepalese</option>
														<option value="New Zealander" >New Zealander</option>
														<option value="Pakistani" >Pakistani</option>
														<option value="Peruvian" >Peruvian</option>
														<option value="Polish" >Polish</option>
														<option value="Qatari" >Qatari</option>
														<option value="Romanian" >Romanian</option>
														<option value="Russian" >Russian</option>
														<option value="Thai" >Thai</option>
														<option value="British" >British</option>
														<option value="American" >American</option>
														<option value="Yemenite" >Yemenite</option>
                                                    </select>
                                            	</div>
                                        </div>
										<div class="form-group row">
				                            <label class="col-sm-4 control-label">Visa</label>
				                                <div class="col-sm-8">
				                                    <select class="form-control" name="visa_status" style="width:50%;">
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
								        <div class="form-group row">
				                            <label for="lastname" class="control-label col-lg-4">Mobile Phone <span class="red">*</span></label>
				                                <div class="col-lg-8">                
														<input type="text" placeholder="Mobile Phone...." id="mobile" name="mobile" type="tel" maxlength="10"><br>
														<span id="phcheck">Please Enter a Valid Mobile Number</span>
				                                </div>
				                        </div>                                         
                                        <div class="form-group row">
                                            <label for="password" class="control-label col-lg-4">Home Phone</label>
                                            	<div class="col-lg-8">
													<input type="text" placeholder="Home Phone...." id="home_phone" name="home_phone" maxlength="10">
                                                </div>
                                        </div>	
                                    </div> 
                                </div> <!-- card-body -->
                            </div> <!-- card -->
                        </div> <!-- col -->
                   
						<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header" style="background-color:#317eeb;"><h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Upload Resume</h3>
                                    </div>
                                    	<div class="card-body">
                                           		<div class="form-group row">
                                                	<label class="col-md-4 control-label">Upload Resume <span class="red">*</span></label>
                                                		<div class="col-md-8">
                                                  			"Select a file: <input type="file" name="file_name" id="file_name"><br>
												   				<span class="help-block">
                                                                    <small>Upload files only in .doc, .docx or .pdf format with maximum size of 6 MB.</small>
                                                                </span><br>
                                                                <span id="filecheck">Please Choose a Valid File</span>
                                                		    </div>
                                            	        </div>  
                                                    <br><br>
												<div class="form-group" style="width:100%; height:80px; background:#e6e6e6;">
                                                    <div class="offset-lg-12"><br>
                                                        <center><button class="btn btn-primary" type="submit" id="validatefrm">Sign up</button> </center>               
                                                    </div>
                                                </div>	
                                        </div> <!-- .form -->
                                     </form>     
                                </div>  
                            </div> <!-- card-body -->
                        </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- content -->	
              @include('include.jobseekerfooter')
        <!-- END wrapper -->

        <!--form validation init-->
     )
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
			<!-- Validation Form Account Information-->
		 
		<script>
			$(document).ready(function()
			{
				$("#namecheck").hide();
				$("#emailcheck").hide();
				$("#passwordcheck").hide();
				$("#cmfpascheck").hide();
				var err_check=true;
				var err_check_email=true;
				var err_check_psw=true;
				var err_check_cmfpsd=true;
				
				//validate first name
				$("#validatefrm").click(function()
				{
					check_firstname();
				});
				function check_firstname()
				{
					var firstname_val=$("#firstname").val();
					
					var patt1 = /\b[0-9]/;
					 var result = firstname_val.search(patt1);
					if((firstname_val.length=="")||(result==0))
					{
						$("#namecheck").show();
						$("#namecheck").focus();
						$("#namecheck").css("color","red");
						err_check=false;
						return false;
					}
					else
					{
						$("#namecheck").hide();
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
						err_check_email=false;
						return false;$("#emailcheck").hide();
					}
					else
					{
						
						$("#emailcheck").hide();
					}
				}
				
				//validate password
				$("#validatefrm").click(function()
				{
					check_passd();
				});
				function check_passd()
				{
					var passd_val=$("#password").val();
					if((passd_val.length=="")||(passd_val.length<6))
					{
						$("#passwordcheck").show();
						$("#passwordcheck").focus();
						$("#passwordcheck").css("color","red");
						err_check_psw=false;
						return false;
					}
					else
					{
						$("#passwordcheck").hide();
					}
				}
				
				//validate confirm password
				$("#validatefrm").click(function()
				{
					check_cmfpassd();
				});
				function check_cmfpassd()
				{
					var cmfpassd_val=$("#confirm_password").val();
					var passd_val=$("#password").val();
					if(cmfpassd_val.length!=passd_val.length)
					{
						$("#cmfpascheck").show();
						$("#cmfpascheck").focus();
						$("#cmfpascheck").css("color","red");
						err_check_cmfpsd=false;
						return false;
					}
					else
					{
						$("#cmfpascheck").hide();
					}
				}
				
				$("#validatefrm").click(function()
				{
					err_check=true;
					err_check_email=true;
					err_check_psw=true;
					err_check_cmfpsd=true;
					check_firstname();
					check_email();
					check_passd();
					check_cmfpassd();
					if((err_check==true)&&(err_check_email==true)&&(err_check_psw==true)&&(err_check_cmfpsd==true))
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
		
		<!-- Validation Form Personal Information-->
		
		<script>
			$(document).ready(function()
			{
				
				$("#dobcheck").hide();
				$("#cacheck").hide();
				$("#citycheck").hide();
				$("#filecheck").hide();
				$("#phcheck").hide();
				
				var err_dob=true;
				var err_ca=true;
				var err_file=true;
				var err_ph=true;
				var err_city=true;
			
				//validation date
				$("#validatefrm").click(function()
				{
					check_dob();
				});
				function check_dob()
				{
					var dob_val=$("#dob_day").val();
					var dob_val1=$("#dob_month").val();
					if(((dob_val<1)||(dob_val>31))||((dob_val1<1)||(dob_val1>31)))
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
				
				//Validation Location
				$("#validatefrm").click(function()
				{
					check_loc();
				});
				function check_loc()
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
				
				//validate Cuurent Address
				$("#validatefrm").click(function()
				{
					check_ca();
				});
				function check_ca()
				{
					var ca_val=$("#example-textarea-input").val();
					if(ca_val.length=="")
					{
						$("#cacheck").show();
						$("#cacheck").focus();
						$("#cacheck").css("color","red");
						err_ca=false;
						return false;
					}
					else
					{
						$("#cacheck").hide();
					}
				}
				
				//validate mobile Phone
				$("#validatefrm").click(function()
				{
					check_phone();
				});
				function check_phone()
				{
					
					var ph_val=$("#mobile").val();
					var phoneno=new RegExp(/^[0-9-+]+$/);
					if(ph_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/))
					{
						$("#phcheck").hide();
					}
					else
					{
						$("#phcheck").show();
						$("#phcheck").focus();
						$("#phcheck").css("color","red");
						err_ph=false;
						return false;
					}
				}
				//validation file upload
				$("#validatefrm").click(function()
				{
					check_file();
				});
				function check_file()
				{
					
					var file_val=$("#file_name").val();
					 var ext = file_val.split('.').pop();
					if(ext=="pdf" || ext=="docx" || ext=="doc")
					{
							$("#filecheck").hide();
					}
					else
					{
						$("#filecheck").show();
						$("#filecheck").focus();
						$("#filecheck").css("color","red");
						err_file=false;
						return false;
					}
				}
				$("#validatefrm").click(function()
				{
					err_ca=true;
					err_file=true;
					err_ph=true;
					err_dob=true;
					err_city=true;
					check_ca();
					check_file();
					check_phone();
					check_loc();
					check_dob();
					if((err_ca==true)&&(err_ph==true)&&(err_dob==true)&&(err_city==true)&&(err_file==true))
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

<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->
</html>