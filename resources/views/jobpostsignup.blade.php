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
    
    input[type=number],
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
    
    input[type=number]:focus,
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
    input[type=number] {
        width: 50%;
        padding: 7px;
        border-radius: 5px;
    }
    textarea {
        border-radius: 5px;
        width: 48%;
    }
    
    span.red {
        color: red;
    }
    
    input[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 84%;
        background: #fff;
    }
    
    select[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 84%;
        background: #fff;
    }
    
    textarea[class="form-control"] {
        border: 1px solid #bdbcbc;
        background: #fff;
        width: 84%;
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
        width:80%;
        margin-left:2%;
    }
}
</style>
      <div id="wrapper" style="background:#e6e6e6;">            
        <div class="content-page">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header" style="  background-color:#317eeb;">
                                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Account Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="{{url('jobpostsignup/add')}}" enctype="multipart/form-data" novalidate="novalidate">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group row">
                                            <label for="firstname" class="control-label col-lg-4">Full Name<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" placeholder="Full Name" id="firstname" name="firstname"><br>
                                                <span id="namecheck" style="display: none;">Enter a valid Name</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lastname" class="control-label col-lg-4">Email <span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" placeholder="Email" id="email" name="email_id"><br>
                                                <span id="emailcheck" style="display: none;">Please Enter a Valid Email ID</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="control-label col-lg-4">Password <span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" placeholder="Password" id="password" name="password_id"><br>
                                                <span id="passwordcheck" style="display: none;">This box must not be empty/ Minimum length 6 Character</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="confirm_password" class="control-label col-lg-4">Confirm Password <span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password" ><br>
                                                <span id="cmfpascheck" style="display: none;">Both Password Fields Must Be Same</span>
                                            </div>
                                        </div>
                                </div>
                                <!-- .form -->
                            </div>
                            <!-- card-body -->
                        </div>
                        <!-- card -->
                    </div>
                    <!-- col -->
                </div>
                <!-- End row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header" style="  background-color:#317eeb;">
                                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Company Information</h3></div>
                            <div class="card-body">
                                <div class="form">

                                    <div class="form-group row">
                                        <label for="companyname" class="control-label col-lg-4">Company Name <span class="red">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" id="companyname" name="companyname" placeholder="Company Name"><br>
                                            <span id="compcheck" style="display: none;">Enter Company Name</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Industry <span class="red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="Industry" id="Industry" style="width:35%;">
                                                <option value="" selected>Select Industry</option>
                                                <option value="3">Accounts</option>
                                                <option value="5">Advertising</option>
                                                <option value="7">Banking</option>
                                                <option value="10">Customer Service</option>
                                                <option value="16">Graphic / Web Design</option>
                                                <option value="18">HR / Industrial Relations</option>
                                                <option value="40">IT - Hardware</option>
                                                <option value="22">IT - Software</option>
                                                <option value="43">IT Staffing</option>
                                                <option value="42">Others</option>
                                                <option value="35">Teaching / Education</option>
                                                <option value="45">Telecom</option>
                                            </select><span id="indcheck" style="display: none;">Please Select Your Industry</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">State of Organizationation <span class="red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="state" id="state" style="width:35%;">
                                                <option value="" selected>Select State</option>
                                                <option value="AK">AK</option>
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
                                            </select><span id="soocheck" style="display: none;">Please Select Your state of Organization</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Organization Type</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="OrganizationType" style="width:35%;">
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                                <option value="Government">Government</option>
                                                <option value="Semi-Government">Semi-Government</option>
                                                <option value="NGO">NGO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="control-label col-lg-4">Federal ID/EIN<span class="red">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" id="federal_id" onblur="check_fd()"  name="federal_id"  maxlength="9" required><br>
                                            <span id="federal" style="display: none;">Enter Your Federal ID No.</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="control-label col-lg-4">DUNS (D&B)<span class="red">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" id="duns_id" name="duns_id" required maxlength="9"><br>
                                            <span id="duns" style="display: none;">Enter Your DUNS No.</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Location Time Zone <span class="red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="locationtimezone" id="locationtimezone" style="width:35%;">
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
                                            </select><span id="ltzcheck" style="display: none;">Not a valid Location time zone</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Display Time Zone <span class="red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="displaytimezone" id="displaytimezone" style="width:35%;">
                                                <option value="" selected>Select Time Zone</option>
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
                                            </select><span id="dtzcheck" style="display: none;">Not a valid display Time Zone</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="control-label col-lg-4">Address <span class="red">*</span></label>
                                        <span id='show_error_country' style="display: none;"></span>
                                        <select name="country" id="country" class="form-control" style="width:12%; border: 1px solid #737373; margin-left: 9px;">
                                            <option value="" selected>Select Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
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
                                            <option value="Canada">Canada</option>
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
                                            <option value="Ghana">Ghana</option>
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
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Yemen">Yemen</option>
                                        </select>

                                        <select name="state_text" id="state_text" class="form-control" style="max-width:10%; margin-left: 9px; border: 1px solid #737373;">
                                            <option value="" selected>Select State</option>
                                            <option value="AK">AK</option>
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
                                        </select>
                                        <input type="text" name="city" id="city" value="" class="custom-control" Placeholder="City" style="max-width:9%; margin-left: 9px; border: 1px solid #737373;"><span id='show_error_city' style="display: none;"></span><br>
                                        <span id="citycheck" style="display: none;">Select Your Address</span>
                                        <span id='show_error_state_text' style="display: none;"></span>
                                    </div>
                                </div>
                                
                                    <div class="form-group row">
                                        <label for="address" class="control-label col-lg-4">Address <span class="red">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" id="company_location1" name="company_location1" placeholder="Address 1"><br>
                                                <span id="addcheck" style="display: none;">Enter your Company's Location</span>
                                                <br>
                                                <br>
                                            <input type="text" id="company_location2" name="company_location2" placeholder="Address 2">
                                            <span id='show_error_com_loc2' style="display: none;"></span>

                                        </div>
                                    </div>
                                
                                <div class="form-group row">
                                    <label for="phone" class="control-label col-lg-4">Phone(Work)<span class="red">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text"  id="company_phone" name="company_phone1" placeholder="Phone(Work)" maxlength="10"><br>
                                        <span id="pwcheck" style="display: none;">Enter Your Phone No.(work)</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="control-label col-lg-4">Phone (Mobile)<span class="red">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text"  id="mobile_phone" name="mobile_phone" placeholder="Phone (Mobile)" maxlength="10"><br>
                                        <span id="pmcheck" style="display: none;">Enter Your Phone No.(Mobile)</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Company Website<span class="red">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" id="company_website" name="company_website" placeholder="Company Website"><br>
                                        <span id="cwcheck" style="display: none;">Enter Your Company's Website</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label">No. of Employees <span class="red">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="noofemp" id="noofemp" style="width:50%;">
													  <option value="1-10">1-10</option>
													  <option value="11-50">11-50</option>
													  <option value="51-100">51-100</option>
													  <option value="101-300">101-300</option>
													  <option value="301-600">301-600</option>
													  <option value="601-1000">601-1000</option>
													  <option value="1001-1500">1001-1500</option>
													  <option value="1501-2000">1501-2000</option>
													  <option value="More than 2000">More than 2000</option>
                                                    </select><span id='show_error_NoEmp' style="display: none;"></span>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-md-4 control-label" for="example-textarea-input ">Company Description <span class="red">*</span></label>
                                                <div class="col-md-8">

                                                    <textarea class="form-control" rows="5" name="company_description" id="company_description"></textarea>
                                                    <span id="cdcheck" style="display: none;">Enter Your Company's Discription</span>
                                                </div>
                                            </div>

								<div class="form-group row ">
                                    <label class="col-md-4 control-label ">Company Logo <span class="red ">*</span></label>
                                       <div class="col-md-8 ">
                                             Select a file: <input type="file" name="logo" id="logo"><br>
                                         <span class="help-block "><small>               
                                             Upload files only in .jpg, .jpeg, .gif or .png format with max size of 6 MB..</small></span><br>
                                                <span id="clcheck" style="display: none; ">Select Your Company's Logo</span>
                                                </div>
                                            </div>  
													<div class="form-group" style="width:100%; height:80px; background:#e6e6e6;">
                                                    <div class="offset-lg-12 "><br>
                                                        <center><button class="btn btn-primary" id="validatefrm" type="submit">Sign up</button> </center> </div>
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
         @include('include.jobseekerfooter')
        <!-- END wrapper -->
        <script src="assets/js/jquery.min.js"></script>
      <!-- Validation Form Account Information-->
    <script>
        $(document).ready(function() {
            $("#namecheck").hide();
            $("#emailcheck").hide();
            $("#passwordcheck").hide();
            $("#cmfpascheck").hide();
            var err_check = true;
            var err_check_email = true;
            var err_check_psw = true;
            var err_check_cmfpsd = true;

            //validate first name
            $("#validatefrm").click(function() {
                check_firstname();
            });

            function check_firstname() {
                var firstname_val = $("#firstname").val();

                var patt1 = /\b[0-9]/;
                var result = firstname_val.search(patt1);
                if ((firstname_val.length == "") || (result == 0)) {
                    $("#namecheck").show();
                    $("#namecheck").focus();
                    $("#namecheck").css("color", "red");
                    err_check = false;
                    return false;
                } else {
                    $("#namecheck").hide();
                }

            }

            //validate email
            $("#validatefrm").click(function() {
                check_email();
            });

            function check_email() {
                var email_val = $("#email").val();
                var v = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
                var result = email_val.match(v);
                if ((email_val.length == "") || (result == null)) {
                    $("#emailcheck").show();
                    $("#emailcheck").focus();
                    $("#emailcheck").css("color", "red");
                    err_check_email = false;
                    return false;
                    $("#emailcheck").hide();
                } else {

                    $("#emailcheck").hide();
                }
            }

            //validate password
            $("#validatefrm").click(function() {
                check_passd();
            });

            function check_passd() {
                var passd_val = $("#password").val();
                if ((passd_val.length == "") || (passd_val.length < 6)) {
                    $("#passwordcheck").show();
                    $("#passwordcheck").focus();
                    $("#passwordcheck").css("color", "red");
                    err_check_psw = false;
                    return false;
                } else {
                    $("#passwordcheck").hide();
                }
            }

            //validate confirm password
            $("#validatefrm").click(function() {
                check_cmfpassd();
            });

            function check_cmfpassd() {
                var cmfpassd_val = $("#confirm_password").val();
                var passd_val = $("#password").val();
                if (cmfpassd_val != passd_val) {
                    $("#cmfpascheck").show();
                    $("#cmfpascheck").focus();
                    $("#cmfpascheck").css("color", "red");
                    err_check_cmfpsd = false;
                    return false;
                } else {
                    $("#cmfpascheck").hide();
                }
            }

            $("#validatefrm").click(function() {
                err_check = true;
                err_check_email = true;
                err_check_psw = true;
                err_check_cmfpsd = true;
                check_firstname();
                check_email();
                check_passd();
                check_cmfpassd();
                if ((err_check == true) && (err_check_email == true) && (err_check_psw == true) && (err_check_cmfpsd == true)) 
                {
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
    <!-- Validation Form Company Information-->
    <script>
        $(document).ready(function() {

            $("#compcheck").hide();
            $("#indcheck").hide();
            $("#soocheck").hide();
            $("#ltzcheck").hide();
            $("#dtzcheck").hide();
            $("#addcheck").hide();
            $("#citycheck").hide();

            var err_comp = true;
            var err_ind = true;
            var err_soo = true;
            var err_ltz = true;
            var err_dtz = true;
            var err_add = true;
            var err_city = true;

            //validation Company Name
            $("#validatefrm").click(function() {
                check_comp();
            });

            function check_comp() {
                var comp_val = $("#companyname").val();

                if ((comp_val.length < 3) || (comp_val == "")) {
                    $("#compcheck").show();
                    $("#compcheck").focus();
                    $("#compcheck").css("color", "red");
                    err_comp = false;
                    return false;
                } else {
                    $("#compcheck").hide();
                }
            }

            //Validation Industry
            $("#validatefrm").click(function() {
                check_ind();
            });

            function check_ind() {
                var ind_val = $("#Industry").val();
                if ((ind_val == "")) {
                    $("#indcheck").show();
                    $("#indcheck").focus();
                    $("#indcheck").css("color", "red");
                    err_ind = false;
                    return false;
                } else {
                    $("#indcheck").hide();
                }
            }

            //validate State of Organization
            $("#validatefrm").click(function() {
                check_soo();
            });

            function check_soo() {
                var soo_val = $("#state").val();
                if (soo_val == "") {
                    $("#soocheck").show();
                    $("#soocheck").focus();
                    $("#soocheck").css("color", "red");
                    err_soo = false;
                    return false;
                } else {
                    $("#soocheck").hide();
                }
            }

            //validate Location Time Zone
            $("#validatefrm").click(function() {
                check_ltz();
            });

            function check_ltz() {

                var ltz_val = $("#locationtimezone").val();

                if (ltz_val == "") {
                    $("#ltzcheck").show();
                    $("#ltzcheck").focus();
                    $("#ltzcheck").css("color", "red");
                    err_ltz = false;
                    return false;
                } else {
                    $("#ltzcheck").hide();
                }
            }
            //validation Display Time Zone
            $("#validatefrm").click(function() {
                check_dtz();
            });

            function check_dtz() {

                var dtz_val = $("#displaytimezone").val();

                if (dtz_val == "") {
                    $("#dtzcheck").show();
                    $("#dtzcheck").focus();
                    $("#dtzcheck").css("color", "red");
                    // company_location1
                    err_dtz = false;
                    return false;
                } else {
                    $("#dtzcheck").hide();
                }
            }

            //validation Address
            $("#validatefrm").click(function() {
                check_add();
            });

            function check_add() {

                var add_val = $("#company_location1").val();

                if (add_val == "") {
                    $("#addcheck").show();
                    $("#addcheck").focus();
                    $("#addcheck").css("color", "red");
                    err_add = false;
                    return false;
                } else {
                    $("#addcheck").hide();
                }
            }

            //Validation Address2
            $("#validatefrm").click(function() {
                check_loc();
            });

            function check_loc() {
                var loc_val = $("#country").val();
                var loc_val1 = $("#state_text").val();
                var loc_val2 = $("#city").val();
                if ((loc_val == "") || (loc_val1 == "") || (loc_val2 == "")) {
                    $("#citycheck").show();
                    $("#citycheck").focus();
                    $("#citycheck").css("color", "red");
                    err_city = false;
                    return false;
                } else {
                    $("#citycheck").hide();
                }
            }
            $("#validatefrm").click(function() {
                err_comp = true;
                err_ind = true;
                err_soo = true;
                err_ltz = true;
                err_dtz = true;
                err_add = true;
                err_city = true;

                check_comp();
                check_ind();
                check_soo();
                check_ltz();
                check_dtz();
                check_add();
                check_loc();

                if ((err_comp == true) && (err_ind == true) && (err_soo == true) && (err_ltz == true) && (err_dtz == true) && (err_add == true) && (err_city == true)) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
    <!-- Validation Form Another Company Information-->
    <script>
        $(document).ready(function() {

            $("#pwcheck").hide();
            $("#pmcheck").hide();
            $("#cwcheck").hide();
            $("#cdcheck").hide();
            $("#clcheck").hide();
            $("#federal").hide();
            $("#duns").hide();

            var err_pw = true;
            var err_pm = true;
            var err_cw = true;
            var err_cd = true;
            var err_cl = true;
            var err_ds = true;

            //validate Phone(Work)
            $("#validatefrm").click(function() {
                check_pw();
            });

            function check_pw() {

                var pw_val = $("#company_phone").val();
                var phoneno = new RegExp(/^[0-9-+]+$/);
                if (pw_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
                    $("#pwcheck").hide();
                } else {
                    $("#pwcheck").show();
                    $("#pwcheck").focus();
                    $("#pwcheck").css("color", "red");
                    err_pw = false;
                    return false;
                }
            }
            
            
            //validate  Phone(mobile)
            $("#validatefrm").click(function() {
                check_pm();
            });

            function check_pm() {

                var pm_val = $("#mobile_phone").val();
                var phoneno = new RegExp(/^[0-9-+]+$/);
                if (pm_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
                    $("#pmcheck").hide();
                } else {
                    $("#pmcheck").show();
                    $("#pmcheck").focus();
                    $("#pmcheck").css("color", "red");
                    err_pm = false;
                    return false;
                }
            }
            //Validation Company Website
            $("#validatefrm").click(function() {
                check_cw();
            });

            function check_cw() {
                var cw_val = $("#company_website").val();

                if (cw_val.match(/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/)) {
                    $("#cwcheck").hide();
                } else {

                    $("#cwcheck").show();
                    $("#cwcheck").focus();
                    $("#cwcheck").css("color", "red");
                    err_cw = false;
                    return false;
                }
            }

            //validate Company Description
            $("#validatefrm").click(function() {
                check_cd();
            });

            function check_cd() {
                var cd_val = $("#company_description").val();
                if (cd_val == "") {
                    $("#cdcheck").show();
                    $("#cdcheck").focus();
                    $("#cdcheck").css("color", "red");
                    err_cd = false;
                    return false;
                } else {
                    $("#cdcheck").hide();
                }
            }
            
            
            
            //Federal ID/EIN
            $("#validatefrm").click(function() {
                check_fd();
            });

            function check_fd() {

                var pm_val = $("#federal_id").val();
                var no_federal=$( "#federal_id" ).length;
                if(no_federal===10)
                {
                    document.getElementById('federal').innerHTML="Please Enter 10 Digit No.";
                }
                var federalno = new RegExp(/^[0-9-+]+$/);
                if (pm_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
                    $("#federal").hide();
                } else {
                    $("#federal").show();
                    $("#federal").focus();
                    $("#federal").css("color", "red");
                    err_pm = false;
                    return false;
                }
                if(isNaN(federal_id)){
				document.getElementById('federal').innerHTML ="**user must write digits only not characters";
				return false;
			    }
            }
            
            
            //DUNS ID
            $("#validatefrm").click(function() {
                check_ds();
            });

            function check_ds() {

                var pm_val = $("#duns_id").val();
                var federalno = new RegExp(/^[0-9-+]+$/);
                if (pm_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
                    $("#duns").hide();
                } else {
                    $("#duns").show();
                    $("#duns").focus();
                    $("#duns").css("color", "red");
                    err_pm = false;
                    return false;
                }
                if(isNaN(duns_id)){
				document.getElementById('federal').innerHTML ="**user must write digits only not characters";
				return false;
			    }
            }
            
            
    

            //validation Company Logo
            $("#validatefrm").click(function() {
                check_cl();
            });

            function check_cl() {

                var cl_val = $("#logo").val();
                var ext = cl_val.split('.').pop();
                if (ext == "jpeg" || ext == "jpg" || ext == "png" || ext == "gif") {
                    $("#clcheck").hide();
                } else {
                    $("#clcheck").show();
                    $("#clcheck").focus();
                    $("#clcheck").css("color", "red");
                    err_cl = false;
                    return false;
                }
            }
            $("#validatefrm").click(function() {
                err_pw = true;
                err_pm = true;
                err_cw = true;
                err_cw = true;
                err_cl = true;
                check_pw();
                check_pm();
                check_fd();
                check_cw();
                check_cd();
                check_cl();
                if ((err_pw == true) && (err_pm == true) && (err_cw == true) && (err_cw == true) && (err_cl == true)) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
</html>