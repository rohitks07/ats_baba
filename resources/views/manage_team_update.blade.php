<!DOCTYPE html>
<html lang="en">
@include('web.header')
    <head>
        <meta charset="utf-8" />
        <title>Create Team Member</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="assets/js/modernizr.min.js"></script> 
	<style>
			.form-control{
				border: 1px solid #b3b3b3;
				width: 79%;
				background-color:#fff;
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
				*.content-page {
						margin-left: 15%;
						overflow: hidden;
						width: 100%;
					}
				.content-page > .content {
					margin-bottom: 60px;
					margin-top: 0px;
					padding: 20px 10px 15px 10px;
				}
				
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
    color: #000;
    background:#e4e4e4;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 0.5px solid #000;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 1px;
}

 </style>       		
    </head>

 <body>       
    <body class="fixed-left">
	<div class="wrapper" style="background-color: #fff;">
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row"> 							
                    <div class="col-md-12">
                        <div class="card" style="border: 1px #C0C0C0 solid;">
                            <div class="card-header" style="background-color: #29b6f6;">
		                     <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Account Information</h3></div>
                               <div class="card-body">							   	
									<!--Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Name <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input class="form-control" id="full_name" name="full_name" placeholder="Full Name">
											</div>
									  </div>
								<!--end of Name-->
								<!--Group-->	   						                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Group <span style="color:red;">*</span></label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:150px; border: 1px solid #b3b3b3">													
													<option value="" selected>Group</option>
													<option value="19" >Birlasoft</option>
													<option value="2" >HR Team</option>
													<option value="9" >Infosys-A</option>
													<option value="13" >Infosys-O</option>
													<option value="17" >KPIT</option>
													<option value="15" >L & T</option>
													<option value="3" >Ops Team</option>
													<option value="16" >Persistent</option>
													<option value="18" >PSI</option>
													<option value="1" >Sales Manager</option>
													<option value="4" >TechM Team</option>
													<option value="14" >Zensar</option>																							
												</select>
										   </div>
									</div>									
								<!--end of Group-->
								<!--Email-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Email <span style="color:red;">*</span></label>
											<div class="col-lg-8">
												<input class="form-control" id="email" name="email" placeholder="Email" type="text">
											</div>
									  </div>
								<!--end of Email-->
								<!--Password-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Password<span style="color:red;">*</span></label>
											<div class="col-lg-8">
												 <div class="input-group" style="width:79%;">
												  <input type="password" class="form-control pwd" value="PASSWORD">
												  <span class="input-group-btn">
													<button class="btn btn-default reveal" type="button">
														<i class="fa fa-eye" style="font-size:28px;color:#29b6f6;"></i>
													</button>
												  </span>          
												</div> 
											</div>
									  </div>
								<!--end of Password-->
								
						        <!-- Location-->				
										<div class="form-group row">
											<label for="address" class="control-label col-lg-4">Location<span style="color:red;">*</span> </label>
												<select name="country" id="country" class="form-control" onChange="grab_cities_by_country(this.value);" style="width:17%; border: 1px solid #b3b3b3; margin-left: 9px;">
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
											  
										<select name="state" id="state_text" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:17%; margin-left: 9px; border: 1px solid #b3b3b3;">
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
											
										          <input name="city" type="text" class="form-control" id="city" placeholder="City" value="" maxlength="150" style="width:15%; margin-left:1em;">

										</div>
								<!--end of Location-->
								
								<!--Location Time Zone-->	   						                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Location Time Zone<span style="color:red;">*</span></label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:60%; border: 1px solid #b3b3b3;">													
													<option value="">Select Time Zone</option>
						    							<option value="(GMT-12:00) International Date Line West" >(GMT-12:00) International Date Line West</option>
														<option value="(GMT-11:00) Midway Island, Samoa" >(GMT-11:00) Midway Island, Samoa</option>
														<option value="(GMT-10:00) Hawaii" >(GMT-10:00) Hawaii</option>
														<option value="(GMT-09:00) Alaska" >(GMT-09:00) Alaska</option>
														<option value="(GMT-08:00) Pacific Time (US & Canada)" selected="selected">(GMT-08:00) Pacific Time (US & Canada)</option>
														<option value="(GMT-08:00) Tijuana, Baja California" >(GMT-08:00) Tijuana, Baja California</option>
														<option value="(GMT-07:00) Arizona" >(GMT-07:00) Arizona</option>
														<option value="(GMT-07:00) Chihuahua, La Paz, Mazatlan" >(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
														<option value="(GMT-07:00) Mountain Time (US & Canada)" >(GMT-07:00) Mountain Time (US & Canada)</option>
														<option value="(GMT-09:30) Marquesas Islands" >(GMT-09:30) Marquesas Islands</option>
														<option value="(GMT-09:00) Gambier Islands" >(GMT-09:00) Gambier Islands</option>
														<option value="(GMT-08:00) Pitcairn Islands" >(GMT-08:00) Pitcairn Islands</option>
														<option value="(GMT-08:00) Pacific Time (US & Canada)" selected="selected">(GMT-08:00) Pacific Time (US & Canada)</option>
														<option value="(GMT-07:00) Mountain Time (US & Canada)" >(GMT-07:00) Mountain Time (US & Canada)</option>
														<option value="(GMT-07:00) Chihuahua, La Paz, Mazatlan" >(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
														<option value="(GMT-06:00) Saskatchewan, Central America" >(GMT-06:00) Saskatchewan, Central America</option>
														<option value="(GMT-06:00) Guadalajara, Mexico City, Monterrey" >(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
														<option value="(GMT-06:00) Easter Island" >(GMT-06:00) Easter Island</option>
														<option value="(GMT-06:00) Central Time (US & Canada)" >(GMT-06:00) Central Time (US & Canada)</option>
														<option value="(GMT-05:00) Eastern Time (US & Canada)" >(GMT-05:00) Eastern Time (US & Canada)</option>
														<option value="(GMT-05:00) Cuba" >(GMT-05:00) Cuba</option>
														<option value="(GMT-05:00) Bogota" >(GMT-05:00) Bogota</option>
														<option value="(GMT-04:30) Caracas" >(GMT-04:30) Caracas</option>
														<option value="(GMT-04:00) Santiago" >(GMT-04:00) Santiago</option>
														<option value="(GMT-04:00) La Paz" >(GMT-04:00) La Paz</option>
														<option value="(GMT-04:00) Faukland Islands" >(GMT-04:00) Faukland Islands</option>
														<option value="(GMT-04:00) Brazil" >(GMT-04:00) Brazil</option>
														<option value="(GMT-04:00) Atlantic Time (Goose Bay)" >(GMT-04:00) Atlantic Time (Goose Bay)</option>
														<option value="(GMT-04:00) Atlantic Time (Canada)" >(GMT-04:00) Atlantic Time (Canada)</option>
														<option value="(GMT-03:30) Newfoundland" >(GMT-03:30) Newfoundland</option>
														<option value="(GMT-03:00) UTC-3" >(GMT-03:00) UTC-3</option>
														<option value="(GMT-03:00) Montevideo" >(GMT-03:00) Montevideo</option>
														<option value="(GMT-03:00) Miquelon, St. Pierre" >(GMT-03:00) Miquelon, St. Pierre</option>
														<option value="(GMT-03:00) Greenland" >(GMT-03:00) Greenland</option>
														<option value="(GMT-03:00) Buenos Aires" >(GMT-03:00) Buenos Aires</option>
														<option value="(GMT-03:00) Brasilia" >(GMT-03:00) Brasilia</option>
														<option value="(GMT-02:00) Mid-Atlantic" >(GMT-02:00) Mid-Atlantic</option>
														<option value="(GMT-01:00) Cape Verde Is." >(GMT-01:00) Cape Verde Is.</option>
														<option value="(GMT-01:00) Azores" >(GMT-01:00) Azores</option>
														<option value="(GMT) Greenwich Mean Time : Belfast" >(GMT) Greenwich Mean Time : Belfast</option>
														<option value="(GMT) Greenwich Mean Time : Dublin" >(GMT) Greenwich Mean Time : Dublin</option>
														<option value="(GMT) Greenwich Mean Time : Lisbon" >(GMT) Greenwich Mean Time : Lisbon</option>
														<option value="(GMT) Greenwich Mean Time : London" >(GMT) Greenwich Mean Time : London</option>
														<option value="(GMT) Monrovia, Reykjavik" >(GMT) Monrovia, Reykjavik</option>
														<option value="(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna" >(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
														<option value="(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague" >(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
														<option value="(GMT+01:00) Brussels, Copenhagen, Madrid, Paris" >(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
														<option value="(GMT+01:00) West Central Africa" >(GMT+01:00) West Central Africa</option>
														<option value="(GMT+01:00) Windhoek" >(GMT+01:00) Windhoek</option>
														<option value="(GMT+02:00) Beirut" >(GMT+02:00) Beirut</option>
														<option value="(GMT+02:00) Cairo" >(GMT+02:00) Cairo</option>
														<option value="(GMT+02:00) Gaza" >(GMT+02:00) Gaza</option>
														<option value="(GMT+02:00) Harare, Pretoria" >(GMT+02:00) Harare, Pretoria</option>
														<option value="(GMT+02:00) Jerusalem" >(GMT+02:00) Jerusalem</option>
														<option value="(GMT+02:00) Minsk" >(GMT+02:00) Minsk</option>
														<option value="(GMT+02:00) Syria" >(GMT+02:00) Syria</option>
														<option value="(GMT+03:00) Moscow, St. Petersburg, Volgograd" >(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
														<option value="(GMT+03:00) Nairobi" >(GMT+03:00) Nairobi</option>
														<option value="(GMT+03:30) Tehran" >(GMT+03:30) Tehran</option>
														<option value="(GMT+04:00) Abu Dhabi, Muscat" >(GMT+04:00) Abu Dhabi, Muscat</option>
														<option value="(GMT+04:00) Yerevan" >(GMT+04:00) Yerevan</option>
														<option value="(GMT+04:30) Kabul" >(GMT+04:30) Kabul</option>
														<option value="(GMT+05:00) Ekaterinburg" >(GMT+05:00) Ekaterinburg</option>
														<option value="(GMT+05:00) Tashkent" >(GMT+05:00) Tashkent</option>
														<option value="(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi" >(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
														<option value="(GMT+05:45) Kathmandu" >(GMT+05:45) Kathmandu</option>
														<option value="(GMT+06:00) Astana, Dhaka" >(GMT+06:00) Astana, Dhaka</option>
														<option value="(GMT+06:00) Novosibirsk" >(GMT+06:00) Novosibirsk</option>
														<option value="(GMT+06:30) Yangon (Rangoon)" >(GMT+06:30) Yangon (Rangoon)</option>
														<option value="(GMT+07:00) Bangkok, Hanoi, Jakarta" >(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
														<option value="(GMT+07:00) Krasnoyarsk" >(GMT+07:00) Krasnoyarsk</option>
														<option value="(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi" >(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
														<option value="(GMT+08:00) Irkutsk, Ulaan Bataar" >(GMT+08:00) Irkutsk, Ulaan Bataar</option>
														<option value="(GMT+08:00) Perth" >(GMT+08:00) Perth</option>
														<option value="(GMT+08:45) Eucla" >(GMT+08:45) Eucla</option>
														<option value="(GMT+09:00) Osaka" >(GMT+09:00) Osaka</option>
														<option value="(GMT+09:00) Seoul" >(GMT+09:00) Seoul</option>
														<option value="(GMT+09:00) Yakutsk" >(GMT+09:00) Yakutsk</option>
														<option value="(GMT+09:30) Adelaide" >(GMT+09:30) Adelaide</option>
														<option value="(GMT+09:30) Darwin" >(GMT+09:30) Darwin</option>
														<option value="(GMT+10:00) Brisbane" >(GMT+10:00) Brisbane</option>
														<option value="(GMT+10:00) Hobart" >(GMT+10:00) Hobart</option>
														<option value="(GMT+10:00) Vladivostok" >(GMT+10:00) Vladivostok</option>
														<option value="(GMT+10:30) Lord Howe Island" >(GMT+10:30) Lord Howe Island</option>
														<option value="(GMT+11:00) Solomon Is., New Caledonia" >(GMT+11:00) Solomon Is., New Caledonia</option>
														<option value="(GMT+11:00) Magadan" >(GMT+11:00) Magadan</option>
														<option value="(GMT+11:30) Norfolk Island" >(GMT+11:30) Norfolk Island</option>
														<option value="(GMT+12:00) Anadyr, Kamchatka" >(GMT+12:00) Anadyr, Kamchatka</option>
														<option value="(GMT+12:00) Auckland, Wellington" >(GMT+12:00) Auckland, Wellington</option>
														<option value="(GMT+12:00) Fiji, Kamchatka, Marshall Is." >(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
														<option value="(GMT+12:45) Chatham Islands" >(GMT+12:45) Chatham Islands</option>
														<option value="(GMT+13:00) Nukualofa" >(GMT+13:00) Nukualofa</option>
														<option value="(GMT+14:00) Kiritimati" >(GMT+14:00) Kiritimati</option>																						
												</select>
										   </div>
									</div>									
								<!--end of Location Time Zone-->
								<!--Display Time Zone-->	   						                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Display Time Zone<span style="color:red;">*</span></label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:60%; border: 1px solid #b3b3b3;">													
													<option value="">Select Time Zone</option>
						    							<option value="(GMT-12:00) International Date Line West" >(GMT-12:00) International Date Line West</option>
														<option value="(GMT-11:00) Midway Island, Samoa" >(GMT-11:00) Midway Island, Samoa</option>
														<option value="(GMT-10:00) Hawaii" >(GMT-10:00) Hawaii</option>
														<option value="(GMT-09:00) Alaska" >(GMT-09:00) Alaska</option>
														<option value="(GMT-08:00) Pacific Time (US & Canada)" selected="selected">(GMT-08:00) Pacific Time (US & Canada)</option>
														<option value="(GMT-08:00) Tijuana, Baja California" >(GMT-08:00) Tijuana, Baja California</option>
														<option value="(GMT-07:00) Arizona" >(GMT-07:00) Arizona</option>
														<option value="(GMT-07:00) Chihuahua, La Paz, Mazatlan" >(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
														<option value="(GMT-07:00) Mountain Time (US & Canada)" >(GMT-07:00) Mountain Time (US & Canada)</option>
														<option value="(GMT-09:30) Marquesas Islands" >(GMT-09:30) Marquesas Islands</option>
														<option value="(GMT-09:00) Gambier Islands" >(GMT-09:00) Gambier Islands</option>
														<option value="(GMT-08:00) Pitcairn Islands" >(GMT-08:00) Pitcairn Islands</option>
														<option value="(GMT-08:00) Pacific Time (US & Canada)" selected="selected">(GMT-08:00) Pacific Time (US & Canada)</option>
														<option value="(GMT-07:00) Mountain Time (US & Canada)" >(GMT-07:00) Mountain Time (US & Canada)</option>
														<option value="(GMT-07:00) Chihuahua, La Paz, Mazatlan" >(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
														<option value="(GMT-06:00) Saskatchewan, Central America" >(GMT-06:00) Saskatchewan, Central America</option>
														<option value="(GMT-06:00) Guadalajara, Mexico City, Monterrey" >(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
														<option value="(GMT-06:00) Easter Island" >(GMT-06:00) Easter Island</option>
														<option value="(GMT-06:00) Central Time (US & Canada)" >(GMT-06:00) Central Time (US & Canada)</option>
														<option value="(GMT-05:00) Eastern Time (US & Canada)" >(GMT-05:00) Eastern Time (US & Canada)</option>
														<option value="(GMT-05:00) Cuba" >(GMT-05:00) Cuba</option>
														<option value="(GMT-05:00) Bogota" >(GMT-05:00) Bogota</option>
														<option value="(GMT-04:30) Caracas" >(GMT-04:30) Caracas</option>
														<option value="(GMT-04:00) Santiago" >(GMT-04:00) Santiago</option>
														<option value="(GMT-04:00) La Paz" >(GMT-04:00) La Paz</option>
														<option value="(GMT-04:00) Faukland Islands" >(GMT-04:00) Faukland Islands</option>
														<option value="(GMT-04:00) Brazil" >(GMT-04:00) Brazil</option>
														<option value="(GMT-04:00) Atlantic Time (Goose Bay)" >(GMT-04:00) Atlantic Time (Goose Bay)</option>
														<option value="(GMT-04:00) Atlantic Time (Canada)" >(GMT-04:00) Atlantic Time (Canada)</option>
														<option value="(GMT-03:30) Newfoundland" >(GMT-03:30) Newfoundland</option>
														<option value="(GMT-03:00) UTC-3" >(GMT-03:00) UTC-3</option>
														<option value="(GMT-03:00) Montevideo" >(GMT-03:00) Montevideo</option>
														<option value="(GMT-03:00) Miquelon, St. Pierre" >(GMT-03:00) Miquelon, St. Pierre</option>
														<option value="(GMT-03:00) Greenland" >(GMT-03:00) Greenland</option>
														<option value="(GMT-03:00) Buenos Aires" >(GMT-03:00) Buenos Aires</option>
														<option value="(GMT-03:00) Brasilia" >(GMT-03:00) Brasilia</option>
														<option value="(GMT-02:00) Mid-Atlantic" >(GMT-02:00) Mid-Atlantic</option>
														<option value="(GMT-01:00) Cape Verde Is." >(GMT-01:00) Cape Verde Is.</option>
														<option value="(GMT-01:00) Azores" >(GMT-01:00) Azores</option>
														<option value="(GMT) Greenwich Mean Time : Belfast" >(GMT) Greenwich Mean Time : Belfast</option>
														<option value="(GMT) Greenwich Mean Time : Dublin" >(GMT) Greenwich Mean Time : Dublin</option>
														<option value="(GMT) Greenwich Mean Time : Lisbon" >(GMT) Greenwich Mean Time : Lisbon</option>
														<option value="(GMT) Greenwich Mean Time : London" >(GMT) Greenwich Mean Time : London</option>
														<option value="(GMT) Monrovia, Reykjavik" >(GMT) Monrovia, Reykjavik</option>
														<option value="(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna" >(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
														<option value="(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague" >(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
														<option value="(GMT+01:00) Brussels, Copenhagen, Madrid, Paris" >(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
														<option value="(GMT+01:00) West Central Africa" >(GMT+01:00) West Central Africa</option>
														<option value="(GMT+01:00) Windhoek" >(GMT+01:00) Windhoek</option>
														<option value="(GMT+02:00) Beirut" >(GMT+02:00) Beirut</option>
														<option value="(GMT+02:00) Cairo" >(GMT+02:00) Cairo</option>
														<option value="(GMT+02:00) Gaza" >(GMT+02:00) Gaza</option>
														<option value="(GMT+02:00) Harare, Pretoria" >(GMT+02:00) Harare, Pretoria</option>
														<option value="(GMT+02:00) Jerusalem" >(GMT+02:00) Jerusalem</option>
														<option value="(GMT+02:00) Minsk" >(GMT+02:00) Minsk</option>
														<option value="(GMT+02:00) Syria" >(GMT+02:00) Syria</option>
														<option value="(GMT+03:00) Moscow, St. Petersburg, Volgograd" >(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
														<option value="(GMT+03:00) Nairobi" >(GMT+03:00) Nairobi</option>
														<option value="(GMT+03:30) Tehran" >(GMT+03:30) Tehran</option>
														<option value="(GMT+04:00) Abu Dhabi, Muscat" >(GMT+04:00) Abu Dhabi, Muscat</option>
														<option value="(GMT+04:00) Yerevan" >(GMT+04:00) Yerevan</option>
														<option value="(GMT+04:30) Kabul" >(GMT+04:30) Kabul</option>
														<option value="(GMT+05:00) Ekaterinburg" >(GMT+05:00) Ekaterinburg</option>
														<option value="(GMT+05:00) Tashkent" >(GMT+05:00) Tashkent</option>
														<option value="(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi" >(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
														<option value="(GMT+05:45) Kathmandu" >(GMT+05:45) Kathmandu</option>
														<option value="(GMT+06:00) Astana, Dhaka" >(GMT+06:00) Astana, Dhaka</option>
														<option value="(GMT+06:00) Novosibirsk" >(GMT+06:00) Novosibirsk</option>
														<option value="(GMT+06:30) Yangon (Rangoon)" >(GMT+06:30) Yangon (Rangoon)</option>
														<option value="(GMT+07:00) Bangkok, Hanoi, Jakarta" >(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
														<option value="(GMT+07:00) Krasnoyarsk" >(GMT+07:00) Krasnoyarsk</option>
														<option value="(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi" >(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
														<option value="(GMT+08:00) Irkutsk, Ulaan Bataar" >(GMT+08:00) Irkutsk, Ulaan Bataar</option>
														<option value="(GMT+08:00) Perth" >(GMT+08:00) Perth</option>
														<option value="(GMT+08:45) Eucla" >(GMT+08:45) Eucla</option>
														<option value="(GMT+09:00) Osaka" >(GMT+09:00) Osaka</option>
														<option value="(GMT+09:00) Seoul" >(GMT+09:00) Seoul</option>
														<option value="(GMT+09:00) Yakutsk" >(GMT+09:00) Yakutsk</option>
														<option value="(GMT+09:30) Adelaide" >(GMT+09:30) Adelaide</option>
														<option value="(GMT+09:30) Darwin" >(GMT+09:30) Darwin</option>
														<option value="(GMT+10:00) Brisbane" >(GMT+10:00) Brisbane</option>
														<option value="(GMT+10:00) Hobart" >(GMT+10:00) Hobart</option>
														<option value="(GMT+10:00) Vladivostok" >(GMT+10:00) Vladivostok</option>
														<option value="(GMT+10:30) Lord Howe Island" >(GMT+10:30) Lord Howe Island</option>
														<option value="(GMT+11:00) Solomon Is., New Caledonia" >(GMT+11:00) Solomon Is., New Caledonia</option>
														<option value="(GMT+11:00) Magadan" >(GMT+11:00) Magadan</option>
														<option value="(GMT+11:30) Norfolk Island" >(GMT+11:30) Norfolk Island</option>
														<option value="(GMT+12:00) Anadyr, Kamchatka" >(GMT+12:00) Anadyr, Kamchatka</option>
														<option value="(GMT+12:00) Auckland, Wellington" >(GMT+12:00) Auckland, Wellington</option>
														<option value="(GMT+12:00) Fiji, Kamchatka, Marshall Is." >(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
														<option value="(GMT+12:45) Chatham Islands" >(GMT+12:45) Chatham Islands</option>
														<option value="(GMT+13:00) Nukualofa" >(GMT+13:00) Nukualofa</option>
														<option value="(GMT+14:00) Kiritimati" >(GMT+14:00) Kiritimati</option>																						
												</select>
										   </div>
									</div>									
								<!--end of Display Time Zone-->
								
								<!--Jobs History-->	   						                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Jobs History <span style="color:red;">*</span></label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:50%; border: 1px solid #b3b3b3;">													
													 <option value="" selected="selected">Select Jobs History </option>
													<option value="yes"  > Yes</option>
													<option value="no"  >No</option>																					
												</select>
										   </div>
									</div>									
								<!--end of Jobs History-->
								  </div> <!-- card-body -->
                                </div> <!-- card -->
							
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive" style="width: 100%;">
                                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                                <tr style="background-color:#29b6f6">                                                   
                                                    <th>Permission</th>
                                                    <th>Read</th>
                                                    <th>Add</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
													                                                
                                                </tr>
                                            </thead>
                                            <tbody> 
										<!--start-->											
												<tr>
                                                    <td class="left;">Company Profile</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
																							
                                              </tr>
											<!--end-->												  
											<!--start-->											  
											 <tr>
                                                    <td>Candidate Management:</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
																							
                                              </tr>
											  <!--end-->	
											<!--start-->											  
											   <tr>
                                                    <td>Job Management</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
																							
                                              </tr>
										<!--end-->	
										<!--start-->											  
											  <tr>
                                                    <td>User Management</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
																							
                                              </tr>
										<!--end-->												  
										<!--start-->											  
											 <tr>
                                                    <td>Application Management</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
																							
                                              </tr>
										<!--end-->	
										<!--start-->												  
											<tr>
                                                    <td>Contacts Management</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
																							
                                              </tr>
										<!--end-->											  
										<!--start-->		    
											<tr>
                                                    <td>Organization Management</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
																							
                                              </tr>
									<!--end-->
									<!--start-->											  
												<tr>
                                                    <td>Calender Management</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
																							
                                              </tr>
										<!--end-->											  
									    <!--start-->
												<tr>
                                                    <td>AR Management</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>																							
                                              </tr> 
										<!--end-->
										<!--start-->											  
											  <tr>
                                                    <td>AP Management</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>
                                                <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>
                                                   <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>												
                                                    <td>													
														<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">                                              
                                                     </label>
                                                   </div>
												</td>																							
                                              </tr> 
										<!--end-->
										<!--start-->											  
											  <tr>
                                                    <td>AP Management</td>
                                                <td>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">                                              
                                                    </label>
                                                   </div>													
												</td>												
                                                <td>											
												  <label>
											         <input type="checkbox" data-toggle="toggle">												   											
												</label>
											  </td>
                                              </tr> 
										<!--end-->											 											  
                                            </tbody>
                                        </table>										
                                      </div><br>
									
								      <div class="form-group">
									    <center><button class="btn btn-info waves-effect waves-light m-b-5" type="submit">Update</button> </center></a>
										</div>																   
                                         </form>  
                                    </div><!--end of col-->
                                 </div><!--end of row-->
                             </div><!--end of card body--> 
                            </div> <!-- col -->
                        </div> <!-- End row -->
						
						
						
						
                    </div> <!-- container -->
                </div> <!-- content -->
				@include('web.footer')
            </div>
        </div>
        <!-- END wrapper -->
       <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<script>
			$(".reveal").on('click',function() {
			var $pwd = $(".pwd");
			if ($pwd.attr('type') === 'password') {
				$pwd.attr('type', 'text');
			} else {
				$pwd.attr('type', 'password');
			}
		});
	</script>
	
	</body>
</html>