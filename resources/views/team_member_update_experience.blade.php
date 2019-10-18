@include('include.emp_header') @include('include.emp_leftsidebar')
<style>
    .mini-stat-info span {
        color: #ffffff;
        display: block;
        font-size: 21px;
        font-weight: 500;
    }
    
    .card-body {
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
        text-transform: none;
    }
    
    .btn-xs,
    .btn-group-xs>.btn {
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
    input[type=date] {
        width: 100%;
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
        width: 100%;
        background: #fff;
    }
    
    select[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 100%;
        background: #fff;
    }
    
    textarea[class="form-control"] {
        border: 1px solid #bdbcbc;
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
                                    </div>
                                    <div class="card-body" style="border: 1px #B0B0B0 solid;">
									
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                <form action="{{url('employer/team_member_edit_experience/update')}}"  method="post" onsubmit="return validation()">
									<div class="form-group row">
	                                            <label for="" class="control-label col-lg-4">Job Title</label>
	                                            	<div class="col-lg-4">
													<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}"/>
													<input type="hidden" name="seeker_id"  value="{{$exp->seeker_ID}}">
													<input type="hidden" name="ID"  value="{{$exp->ID}}">
	                                                   <input type="text" id="job_title" name="job_title"  placeholder="Job Title" value="{{$exp->job_title}}" class="form-control"required>
                                                        <span id="jobtitleerror" class="text-danger"></span>
                                                    </div>
												</div>
												<div class="form-group row">
	                                            <label for="" class="control-label col-lg-4">Company Name</label>
	                                            	<div class="col-lg-4">
                                                       <input type="text" id="company_name" name="company_name"  placeholder="Company Name" value="{{$exp->company_name}}" class="form-control"required>
                                                       <span id="companyerror" class="text-danger"></span>
	                                            </div>
	                                        </div>	
											<div class="form-group row">
	                                            <label for="confirm_password"  class="control-label col-lg-4">Start Date</label>
	                                            <div class="col-lg-4">
	                                               	<input type="date" id="start_date" name="start_date"  placeholder="start Date" value="{{$exp->start_date}}" class="form-control"required>
	                                            </div>
	                                        </div>
	                                        <div class="form-group row">
	                                            <label for="confirm_password"  class="control-label col-lg-4">End Date</label>
	                                            <div class="col-lg-4">
	                                                <input type="date" id="end_date" name="end_date"  placeholder="end_date" value="{{$exp->end_date}}"class="form-control" style="font" required>
	                                            </div>
	                                        </div>		
											<div class="form-group row">
	                                            <label for="" class="control-label col-lg-4">City</label>
	                                            	<div class="col-lg-4">
	                                                   <input type="text" id="city" name="city"  placeholder="City"class="form-control" value="{{$exp->city}}"required>
                                                       <span id="cityerror" class="text-danger"></span>
	                                            </div>
	                                        </div>		

											<div class="form-group row">
	                                            <label for="" class="control-label col-lg-4">Country</label>
	                                            	<div class="col-lg-4">
	                                                   <input type="text" id="country" name="country"  placeholder="Country"class="form-control" value="{{$exp->country}}"required>
                                                    <span id="countryerror" class="text-danger"></span>
                                                    </div>
	                                        </div>										
                                          </div>          
                                            <center><button type="submit" class="btn btn-primary" onclick="validation()">Submit</button></center>
                                          </div>
                                        </div></div></h3></div></form></div></div></div></div></div>
                                        <script type="text/javascript">
                                            function validation()
                                            {
                                                var jobtitle = document.getElementById('job_title').value;
                                                var country = document.getElementById('country').value;
                                                var city = document.getElementById('city').value;
                                                var company = document.getElementById('company_name').value;
                        
                                                var usercheck=/^[A-Za-z. ]{3,}$/;
                                                var countrycheck=/^[A-Za-z. ]{3,}$/;
                                                var citycheck=/^[A-Za-z. ]{3,}$/;
                                                var companycheck=/^[A-Za-z. ]{3,}$/;
                                                
                                                if(usercheck.test(jobtitle)){
                                                 document.getElementById('jobtitleerror').innerHTML="";
                                                }
                                                else{
                                                 document.getElementById('jobtitleerror').innerHTML="please provide valid Job Title";
                                                 return false;
                                                }
                                                if(countrycheck.test(country)){
                                                 document.getElementById('countryerror').innerHTML="";
                                                }
                                                else{
                                                 document.getElementById('countryerror').innerHTML="please provide valid Country Name";
                                                 return false;
                                                }
                                                if(citycheck.test(city)){
                                                 document.getElementById('cityerror').innerHTML="";
                                                }
                                                else{
                                                 document.getElementById('cityerror').innerHTML="please provide valid City Name";
                                                 return false;
                                                }
                                                if(companycheck.test(company)){
                                                 document.getElementById('companyerror').innerHTML="";
                                                }
                                                else{
                                                 document.getElementById('companyerror').innerHTML="please provide valid Company Name";
                                                 return false;
                                                }
                                            }
                                            </script>
@include('include.emp_footer')

</html>