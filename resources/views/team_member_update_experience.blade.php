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
                                         <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="float: right;">Add Experience</button></h3> -->
                                    </div>
                                  
                              
												                                           
													
                                    <div class="card-body" style="border: 1px #B0B0B0 solid;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                        <form class="cmxform form-horizontal tasi-form"  action="{{url('employer/team_member_edit_experience_upedit/')}}"   method="post" >
									{{csrf_field()}} 
									<div class="form-group row">
	                                            <label for="" class="control-label col-lg-4">Job Title</label>
	                                            	<div class="col-lg-8">
													<input type="text" name="ID"  value="{{$exp->ID}}">
	                                                   <input type="text" id="job_title" name="job_title"  placeholder="Job Title" value="">
	                                            </div>
												</div>
												<div class="form-group row">
	                                            <label for="" class="control-label col-lg-4">Company Name</label>
	                                            	<div class="col-lg-8">
	                                                   <input type="text" id="company_name" name="company_name"  placeholder="Company Name" value="">
	                                            </div>
	                                        </div>	
											<div class="form-group row">
	                                            <label for="confirm_password"  class="control-label col-lg-4">Start Date</label>
	                                            <div class="col-lg-8">
	                                               	<input type="date" id="start_date" name="start_date" value="" placeholder="Start Date" value=""/>
	                                            </div>
	                                        </div>
	                                        <div class="form-group row">
	                                            <label for="confirm_password"  class="control-label col-lg-4">End Date</label>
	                                            <div class="col-lg-8">
	                                                <input type="date" id="end_date" name="end_date" value="" placeholder="end_date" value="" />
	                                                
	                                            </div>
	                                        </div>		

											<div class="form-group row">
	                                            <label for="" class="control-label col-lg-4">City</label>
	                                            	<div class="col-lg-8">
	                                                   <input type="text" id="city" name="city"  placeholder="City" value="">
	                                            </div>
	                                        </div>		

											<div class="form-group row">
	                                            <label for="" class="control-label col-lg-4">Country</label>
	                                            	<div class="col-lg-8">
	                                                   <input type="text" id="country" name="country"  placeholder="Country" value= "">
	                                            </div>
	                                        </div>										


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

	  </form>








														
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                           
                    </div> 
				</div>
            </div>

            
			 
    
	  </form>
    </div>
  </div>
</div>
@include('include.emp_footer')



</html>