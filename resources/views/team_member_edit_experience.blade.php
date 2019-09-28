@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
.mini-stat-info span {
	color: #ffffff;
	display: block;
	font-size: 21px;
	font-weight: 500;
}
.card-body{
	padding: 0.25rem;
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

.btn-xs, .btn-group-xs>.btn {
	padding: 1px 5px;
	font-size: 12px;
	line-height: 1.5;
	border-radius: 3px;
}

input[type=text],
textarea,
    {
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    outline: none;
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
    width: 100%;
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
	width: 100%;
	background: #fff;
}
select[class="form-control"]{
	border:1px solid #bdbcbc;
	width: 100%;
	background: #fff;
}
textarea[class="form-control"]{
	border:1px solid #bdbcbc;
	background: #fff;
	width: 100%;
}

									
</style>                             
        <div class="content-page">              
            <div class="content">               
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                 <div class="card-header" style="background-color:#317eeb;">
                                        <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Edit Experience:
                                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="float: right;">Add Experience</button></h3>
                                    </div>
                                  
                                <div class="card-body" style="border: 1px #B0B0B0 solid;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>                                                   
														
														<th>Job Title</th>
														<th>Company Name</th>
														<th>Start Date</th> 
														<th>End Date</th>
														<th>Location</th>
														<th>Actions</th>      													
                                                    </tr>
                                                </thead>
                                                <tbody>                               
												
												

												
														@foreach($experiences as $experience)
														<tr>
														<?php $id=$experience->ID;
															$seeker_id=$experience->seeker_ID;
														?>
														
														<td>{{$experience->job_title}}</td>
														<td>{{$experience->company_name}}</td>
														<td>{{$experience->start_date}}</td>
														<td>{{$experience->end_date}}</td>
														<td>{{$experience->city}},{{$experience->country}}</td>  
															<td>
															<a  href="{{url('employer/team_member_edit_experience_update/'.$id.'/'.$seeker_id)}}"><i class="fa fa-pencil" aria-hidden="true" style="color: #1ba6df;cursor: pointer;" title="Edit"></i></a>
													<a href="{{url('employer/team_member_edit_experience_del/'.$id.'/'.$seeker_id)}}">	<i class="fa fa-trash-o" aria-hidden="true" style="color:#317eeb;" title="Delete"></i></a></td>    													
                                                    </tr>
													@endforeach
                                                
																			  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                           
                    </div> 
				</div>
            </div>

            
			 
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title mt-0" id="myModalLabel" style="font-weight:100;">Edit Experience</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
						<form class="cmxform form-horizontal tasi-form"  action="{{url('employer/team_member_edit_experience/add')}}"   method="post" >
									{{csrf_field()}}
                            <div class="card-body">
                                
                                    
                                        <div class="form-group row">
                                            <label for="email" class="control-label col-lg-4">Job Title</label>
                                            	<div class="col-lg-8">
													<input type="hidden" name="seeker_id" value="{{$seeker_id}}" >
                                                 	<input type="text" id="job_title" name="job_title"  placeholder="Job Title">
                                            	</div>
                                        	</div>
	                                        <div class="form-group row">
	                                            <label for="" class="control-label col-lg-4">Company Name</label>
	                                            	<div class="col-lg-8">
	                                                   <input type="text" id="company_name" name="company_name"  placeholder="Company Name">
	                                            </div>
	                                        </div>
	                                         <div class="form-group row">
	                                            <label for="confirm_password"  class="control-label col-lg-4">Country</label>
	                                            <div class="col-lg-8">
	                                               	<select name="edu_country" id="edu_country" class="form-control">
															<option value="Afganistan">Afghanistan</option>
															<option value="Albania">Albania</option>
															<option value="Algeria">Algeria</option>
															<option value="American Samoa">American Samoa</option>
															<option value="Andorra">Andorra</option>
															<option value="Angola">Angola</option>
															<option value="Anguilla">Anguilla</option>
															<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
															<option value="Argentina">Argentina</option>
															<option value="Armenia">Armenia</option>
															<option value="Aruba">Aruba</option>
															<option value="Australia">Australia</option>
															<option value="Austria">Austria</option>
															<option value="Azerbaijan">Azerbaijan</option>
															<option value="Bahamas">Bahamas</option>
															<option value="Bahrain">Bahrain</option>
															<option value="Bangladesh">Bangladesh</option>
															<option value="Barbados">Barbados</option>
															<option value="Belarus">Belarus</option>
															<option value="Belgium">Belgium</option>
															<option value="Belize">Belize</option>
															<option value="Benin">Benin</option>
															<option value="Bermuda">Bermuda</option>
															<option value="Bhutan">Bhutan</option>
															<option value="Bolivia">Bolivia</option>
															<option value="Bonaire">Bonaire</option>
															<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
															<option value="Botswana">Botswana</option>
															<option value="Brazil">Brazil</option>
															<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
															<option value="Brunei">Brunei</option>
															<option value="Bulgaria">Bulgaria</option>
															<option value="Burkina Faso">Burkina Faso</option>
															<option value="Burundi">Burundi</option>
															<option value="Cambodia">Cambodia</option>
															<option value="Cameroon">Cameroon</option>
															<option value="Canada">Canada</option>
															<option value="Canary Islands">Canary Islands</option>
															<option value="Cape Verde">Cape Verde</option>
															<option value="Cayman Islands">Cayman Islands</option>
															<option value="Central African Republic">Central African Republic</option>
															<option value="Chad">Chad</option>
															<option value="Channel Islands">Channel Islands</option>
															<option value="Chile">Chile</option>
															<option value="China">China</option>
															<option value="Christmas Island">Christmas Island</option>
															<option value="Cocos Island">Cocos Island</option>
															<option value="Colombia">Colombia</option>
															<option value="Comoros">Comoros</option>
															<option value="Congo">Congo</option>
															<option value="Cook Islands">Cook Islands</option>
															<option value="Costa Rica">Costa Rica</option>
															<option value="Cote DIvoire">Cote D'Ivoire</option>
															<option value="Croatia">Croatia</option>
															<option value="Cuba">Cuba</option>
															<option value="Curaco">Curacao</option>
															<option value="Cyprus">Cyprus</option>
															<option value="Czech Republic">Czech Republic</option>
															<option value="Denmark">Denmark</option>
															<option value="Djibouti">Djibouti</option>
															<option value="Dominica">Dominica</option>
															<option value="Dominican Republic">Dominican Republic</option>
															<option value="East Timor">East Timor</option>
															<option value="Ecuador">Ecuador</option>
															<option value="Egypt">Egypt</option>
															<option value="El Salvador">El Salvador</option>
															<option value="Equatorial Guinea">Equatorial Guinea</option>
															<option value="Eritrea">Eritrea</option>
															<option value="Estonia">Estonia</option>
															<option value="Ethiopia">Ethiopia</option>
															<option value="Falkland Islands">Falkland Islands</option>
															<option value="Faroe Islands">Faroe Islands</option>
															<option value="Fiji">Fiji</option>
															<option value="Finland">Finland</option>
															<option value="France">France</option>
															<option value="French Guiana">French Guiana</option>
															<option value="French Polynesia">French Polynesia</option>
															<option value="French Southern Ter">French Southern Ter</option>
															<option value="Gabon">Gabon</option>
															<option value="Gambia">Gambia</option>
															<option value="Georgia">Georgia</option>
															<option value="Germany">Germany</option>
															<option value="Ghana">Ghana</option>
															<option value="Gibraltar">Gibraltar</option>
															<option value="Great Britain">Great Britain</option>
															<option value="Greece">Greece</option>
															<option value="Greenland">Greenland</option>
															<option value="Grenada">Grenada</option>
															<option value="Guadeloupe">Guadeloupe</option>
															<option value="Guam">Guam</option>
															<option value="Guatemala">Guatemala</option>
															<option value="Guinea">Guinea</option>
															<option value="Guyana">Guyana</option>
															<option value="Haiti">Haiti</option>
															<option value="Hawaii">Hawaii</option>
															<option value="Honduras">Honduras</option>
															<option value="Hong Kong">Hong Kong</option>
															<option value="Hungary">Hungary</option>
															<option value="Iceland">Iceland</option>
															<option value="India">India</option>
															<option value="Indonesia">Indonesia</option>
															<option value="Iran">Iran</option>
															<option value="Iraq">Iraq</option>
															<option value="Ireland">Ireland</option>
															<option value="Isle of Man">Isle of Man</option>
															<option value="Israel">Israel</option>
															<option value="Italy">Italy</option>
															<option value="Jamaica">Jamaica</option>
															<option value="Japan">Japan</option>
															<option value="Jordan">Jordan</option>
															<option value="Kazakhstan">Kazakhstan</option>
															<option value="Kenya">Kenya</option>
															<option value="Kiribati">Kiribati</option>
															<option value="Korea North">Korea North</option>
															<option value="Korea Sout">Korea South</option>
															<option value="Kuwait">Kuwait</option>
															<option value="Kyrgyzstan">Kyrgyzstan</option>
															<option value="Laos">Laos</option>
															<option value="Latvia">Latvia</option>
															<option value="Lebanon">Lebanon</option>
															<option value="Lesotho">Lesotho</option>
															<option value="Liberia">Liberia</option>
															<option value="Libya">Libya</option>
															<option value="Liechtenstein">Liechtenstein</option>
															<option value="Lithuania">Lithuania</option>
															<option value="Luxembourg">Luxembourg</option>
															<option value="Macau">Macau</option>
															<option value="Macedonia">Macedonia</option>
															<option value="Madagascar">Madagascar</option>
															<option value="Malaysia">Malaysia</option>
															<option value="Malawi">Malawi</option>
															<option value="Maldives">Maldives</option>
															<option value="Mali">Mali</option>
															<option value="Malta">Malta</option>
															<option value="Marshall Islands">Marshall Islands</option>
															<option value="Martinique">Martinique</option>
															<option value="Mauritania">Mauritania</option>
															<option value="Mauritius">Mauritius</option>
															<option value="Mayotte">Mayotte</option>
															<option value="Mexico">Mexico</option>
															<option value="Midway Islands">Midway Islands</option>
															<option value="Moldova">Moldova</option>
															<option value="Monaco">Monaco</option>
															<option value="Mongolia">Mongolia</option>
															<option value="Montserrat">Montserrat</option>
															<option value="Morocco">Morocco</option>
															<option value="Mozambique">Mozambique</option>
															<option value="Myanmar">Myanmar</option>
															<option value="Nambia">Nambia</option>
															<option value="Nauru">Nauru</option>
															<option value="Nepal">Nepal</option>
															<option value="Netherland Antilles">Netherland Antilles</option>
															<option value="Netherlands">Netherlands (Holland, Europe)</option>
															<option value="Nevis">Nevis</option>
															<option value="New Caledonia">New Caledonia</option>
															<option value="New Zealand">New Zealand</option>
															<option value="Nicaragua">Nicaragua</option>
															<option value="Niger">Niger</option>
															<option value="Nigeria">Nigeria</option>
															<option value="Niue">Niue</option>
															<option value="Norfolk Island">Norfolk Island</option>
															<option value="Norway">Norway</option>
															<option value="Oman">Oman</option>
															<option value="Pakistan" selected="selected">Pakistan</option>
															<option value="Palau Island">Palau Island</option>
															<option value="Palestine">Palestine</option>
															<option value="Panama">Panama</option>
															<option value="Papua New Guinea">Papua New Guinea</option>
															<option value="Paraguay">Paraguay</option>
															<option value="Peru">Peru</option>
															<option value="Phillipines">Philippines</option>
															<option value="Pitcairn Island">Pitcairn Island</option>
															<option value="Poland">Poland</option>
															<option value="Portugal">Portugal</option>
															<option value="Puerto Rico">Puerto Rico</option>
															<option value="Qatar">Qatar</option>
															<option value="Republic of Montenegro">Republic of Montenegro</option>
															<option value="Republic of Serbia">Republic of Serbia</option>
															<option value="Reunion">Reunion</option>
															<option value="Romania">Romania</option>
															<option value="Russia">Russia</option>
															<option value="Rwanda">Rwanda</option>
															<option value="St Barthelemy">St Barthelemy</option>
															<option value="St Eustatius">St Eustatius</option>
															<option value="St Helena">St Helena</option>
															<option value="St Kitts-Nevis">St Kitts-Nevis</option>
															<option value="St Lucia">St Lucia</option>
															<option value="St Maarten">St Maarten</option>
															<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
															<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
															<option value="Saipan">Saipan</option>
															<option value="Samoa">Samoa</option>
															<option value="Samoa American">Samoa American</option>
															<option value="San Marino">San Marino</option>
															<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
															<option value="Saudi Arabia">Saudi Arabia</option>
															<option value="Senegal">Senegal</option>
															<option value="Serbia">Serbia</option>
															<option value="Seychelles">Seychelles</option>
															<option value="Sierra Leone">Sierra Leone</option>
															<option value="Singapore">Singapore</option>
															<option value="Slovakia">Slovakia</option>
															<option value="Slovenia">Slovenia</option>
															<option value="Solomon Islands">Solomon Islands</option>
															<option value="Somalia">Somalia</option>
															<option value="South Africa">South Africa</option>
															<option value="Spain">Spain</option>
															<option value="Sri Lanka">Sri Lanka</option>
															<option value="Sudan">Sudan</option>
															<option value="Suriname">Suriname</option>
															<option value="Swaziland">Swaziland</option>
															<option value="Sweden">Sweden</option>
															<option value="Switzerland">Switzerland</option>
															<option value="Syria">Syria</option>
															<option value="Tahiti">Tahiti</option>
															<option value="Taiwan">Taiwan</option>
															<option value="Tajikistan">Tajikistan</option>
															<option value="Tanzania">Tanzania</option>
															<option value="Thailand">Thailand</option>
															<option value="Togo">Togo</option>
															<option value="Tokelau">Tokelau</option>
															<option value="Tonga">Tonga</option>
															<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
															<option value="Tunisia">Tunisia</option>
															<option value="Turkey">Turkey</option>
															<option value="Turkmenistan">Turkmenistan</option>
															<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
															<option value="Tuvalu">Tuvalu</option>
															<option value="Uganda">Uganda</option>
															<option value="Ukraine">Ukraine</option>
															<option value="United Arab Erimates">United Arab Emirates</option>
															<option value="United Kingdom">United Kingdom</option>
															<option value="United States of America">United States of America</option>
															<option value="Uraguay">Uruguay</option>
															<option value="Uzbekistan">Uzbekistan</option>
															<option value="Vanuatu">Vanuatu</option>
															<option value="Vatican City State">Vatican City State</option>
															<option value="Venezuela">Venezuela</option>
															<option value="Vietnam">Vietnam</option>
															<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
															<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
															<option value="Wake Island">Wake Island</option>
															<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
															<option value="Yemen">Yemen</option>
															<option value="Zaire">Zaire</option>
															<option value="Zambia">Zambia</option>
															<option value="Zimbabwe">Zimbabwe</option>
														</select>
	                                            </div>
	                                        </div>
	                                        <div class="form-group row">
	                                            <label for="confirm_password"  class="control-label col-lg-4">City</label>
	                                            <div class="col-lg-8">
	                                               	<input type="text" id="edu_city" name="edu_city" value="" placeholder="City">
	                                            </div>
	                                        </div>
	                                          <div class="form-group row">
	                                            <label for="confirm_password"  class="control-label col-lg-4">Start Date</label>
	                                            <div class="col-lg-8">
	                                               	<input type="date" id="start_date" name="start_date" value="" placeholder="Start Date" />
	                                            </div>
	                                        </div>
	                                        <div class="form-group row">
	                                            <label for="confirm_password"  class="control-label col-lg-4">End Date</label>
	                                            <div class="col-lg-8">
	                                                <input type="date" id="end_date" name="end_date" value="Present" placeholder="Present" />
	                                                (Keep blank if still working)
	                                            </div>
	                                        </div>
                    					</div> 
                					</div> 
									
                				
                			<div class="modal-footer">
                    			<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    			<input type="submit" class="btn btn-secondary" value="submit">
								
							
                            </div>

						</form>	
                        
                    </div>
            </div> 


  </div>
     

  
@include('include.emp_footer')



</html>