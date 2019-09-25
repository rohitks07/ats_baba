<!DOCTYPE html>
<html lang="en">
<head>
	<title>form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
</head>
<body>
		<div class="nav">
		</div><br>
	<center>
				<div class="head">
				<h2 style="float:left; padding-top:13px; padding-left:20px; color:#fff; font-style:Arial;">Account Information</h2>
				</div>
			</center>
		<div class="container">
			<div class="form">
				<form action="/" method="post">
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Name
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="name" placeholder="" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Email
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="email" placeholder="" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Password
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="password" placeholder="" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Confirm Password
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="confirm_password" placeholder="" required >
							</div>
						</li>
						
				</div>
		</div><br><br>
		
		<center>
				<div class="head">
					<h2 style="float:left; padding-top:13px; padding-left:30px; color:#fff; font-style:Arial;">Company Information</h2>

				</div>
			</center>
				<div class="container">
			<div class="form">
				<form action="/" method="post">
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Company Name 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="company_name" placeholder="" required >
							</div>
						</li>
						<li>
							<label class="form-label">
							   Industry
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="industry" required>
									<option value="Select Industry">Select Industry</option>
							<option value="" >Accounts</option>
                            <option value="" >Advertising</option>
                            <option value="" >Banking</option>
                            <option value="" >Customer Service</option>
                            <option value="" >Graphic / Web Design</option>
                            <option value="" >HR / Industrial Relations</option>
                            <option value="" >IT - Hardware</option>
                            <option value="" >IT - Software</option>
                            <option value="" >IT Staffing</option>
                            <option value="" >Others</option>
                            <option value="" >Teaching / Education</option>
                            <option value="" >Telecom</option>
									
								</select>
							</div>
						</li>

						<li>
							<label class="form-label">
							   State of Organization
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="state" required>
									<option value="Select State">Select State</option>
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
						</li>
						
						<li>
							<label class="form-label">
							   Organisation Type
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="industry" required>
									<option value="Private">Private</option>
									<option value="Public">Public</option>
									<option value="Government">Government</option>
									<option value="Semi-Government">Semi-Government</option>
									<option value="NGO">NGO</option>
									
								</select>
							</div>
						</li>
						
						<li> 
							<label class="form-label">
							   Federal ID
							</label>
							<div class="form-input">
								<input name="federal_id" type="text" class="form-control" id="federal_id" value=""/>
							</div>
						</li>
						
						<li> 
							<label class="form-label">
							   DUNS (D&B)
							</label>
							<div class="form-input">
								<input name="duns" type="text" class="form-control" id="duns" value=""/>
							</div>
						</li>
						
						<li>
							<label class="form-label">
							   Location Time Zone
							<span class="form-required"> * </span>

							</label>
							<div class="form-input">
								<select class="form-dropdown" value="select time zone" required>
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
						</li>
						
						<li>
							<label class="form-label">
							 Display Time Zone
							<span class="form-required"> * </span>

							</label>
							<div class="form-input">
								<select class="form-dropdown" value="select time zone" required>
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
						</li>
						<li>
							<label class="form-label"> 
								Address 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="Address" placeholder="" required ><br><br>
								<input type="text" name="Address" placeholder="" required >

							</div>
						</li>
					
						<li>
							<label class="form-label">
							 Location
							<span class="form-required"> * </span>

							</label>
							<div class="form-input">
							<select name="country" id="country" class="form-control" onChange="grab_cities_by_country(this.value);" style="width:30%">	
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
                          
			<select name="state" id="state_text" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:30%;">
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
							<input type="text" name="city" value="" class="custom-control" Panecholder="City" style="max-width:20%;">
						</div>
				<li>
							<label class="form-label"> 
								Phone(Work)
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="company_phone" placeholder="" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Phone (Mobile)
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="mobile_phone" placeholder="" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Company Website
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="company_website" placeholder="" required >
							</div>
						</li>
					
					
						
						<li>
							<label class="form-label">
							 No. of Employees
							<span class="form-required"> * </span>

							</label>
							<div class="form-input">
								<select class="form-dropdown" value="select employee" required>
								
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
						</li>
						
						<li>
							<label class="form-label"> 
								Company Discription
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="company_description" placeholder="" required >
							</div>
						</li>
						
						<li>
							<label class="form-label"> 
								Company Logo
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
                                   Select a file: <input type="file" name="myFile">
							</div>
						</li>
					<img src="captcha_code_file.php?rand=<?php echo rand(); ?>"
                   id="captchaimg" >
                   <label for="message">Enter the code above here :</label>
                      <input id="6_letters_code" name="6_letters_code" type="text">
						
					</ul>
					<input type="submit" value="Sign Up">
				</form>	
			</div>
		</div>
	</div>
					<script>
						if(isset($_POST['submit']))
{
  if(empty($_SESSION['6_letters_code'] ) ||
    strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
  {
      //Note: the captcha code is compared case insensitively.
      //if you want case sensitive match, update the check above to
      // strcmp()
    $errors .= "n The captcha code does not match!";
  }
 
  if(empty($errors))
  {
    //send the email
    $to = $your_email;
    $subject="New form submission";
    $from = $your_email;
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
     
    $body = "A user  $name submitted the contact form:n".
    "Name: $namen".
    "Email: $visitor_email n".
    "Message: n ".
    "$user_messagen".
    "IP: $ipn";  
     
    $headers = "From: $from rn";
    $headers .= "Reply-To: $visitor_email rn";
     
    mail($to, $subject, $body,$headers);
     
    header('Location: thank-you.html');
  }
}
					</script>
</body>
</html>