<!DOCTYPE html>
@include('web.header')
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ADD E-MAIL CONTACT LIST</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script> 
<style>
.form-control{
	border: 1px solid #737373;
	width: 84%;
}
.active, .btn:hover {
  background-color: #000000;
  color: white;
}	
.content-page {
    margin-left: 20%;
    overflow: hidden;
    width: 100%;
}
 </style>       		
</head>

<body>       
    <div class="fixed-left">
	    <div class="wrapper" style="background-color: #fff;">
            <div class="content-page" style="margin-left:160px;">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row"> 							
                        <div class="col-md-10">
                        <div class="card" style="border: 1px #C0C0C0 solid;">
                            <div class="card-header" style="background-color: #29b6f6;">
		                        <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">ADD E-MAIL CONTACT LIST</h3></div>
                                    
									<div class="card-body">
									 <!--Salutation-->	
							<form action="{{url('employer/post_new_email_contact/add')}}"  method="post"> 
									<input type="hidden" name="_token" value = "{{ csrf_token()  }}" >                              
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Salutation </label>
											<div class="col-sm-8">
												<select name="salutation" class="form-control" style="max-width:350px; border: 1px solid #737373">													
													<option value="Mr" >Mr</option>
													<option value="Ms" >Ms</option>
													<option value="Mrs" >Mrs</option>
													<option value="Miss" >Miss</option>
													<option value="Dr" >Dr</option>
													<option value="Prof" >Prof</option>
												</select>
										   </div>
									</div>
									<!--end of Salutation-->
									<!--Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4"> First Name </label>
											<div class="col-lg-8">
												<input class="form-control" id="" name="firstname" placeholder="First Name" type="number--" >
											</div>
									  </div>
								<!--end of Name-->
								<!--Last Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4"> Last Name </label>
											<div class="col-lg-8">
												<input class="form-control" id="" name="lastname" placeholder="Last Name" type="number--" >
											</div>
									  </div>
								<!--end of Last Name-->
								<!--Full Name-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4"> Full Name </label>
											<div class="col-lg-8">
												<input class="form-control" id="" name="fullname" placeholder="Full Name" type="number--" >
											</div>
									  </div>
								<!--end of Full Name-->
								
								
								<!--Email (W)-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4">Email Id <span style="color:red;">*</span> </label>
											<div class="col-lg-8">
												<input class="form-control" id="" name="emailid" placeholder="Email ID" type="number--">
											</div>
									  </div>
								<!--end of Email (W)-->
									
								
							
								<!--Add in Contact Database-->	   						                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Add in Contact Database </label>
											<div class="col-sm-8">
												<select name="contactdatabase" class="form-control" style="max-width:350px; border: 1px solid #737373">													
													  <option value="active" >Active</option>
														<option value="inactive"   >Inactive</option>												
												</select>
										   </div>
									</div>									
								<!--end of Add in Contact Database-->
									<div class="form-group">
									    <center><button class="btn btn-info waves-effect waves-light m-b-5" type="submit">Submit</button> </center></a>
									</div>																                                        
                                    </div> <!-- card-body -->
						</form>			
                                </div> <!-- card -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
        </div>
        <!-- END wrapper -->
       <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
	
	</body>

<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->
</html>