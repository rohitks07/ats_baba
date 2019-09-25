<!DOCTYPE html>
<html lang="en">
 @include('web.header')
<body class="fixed-left">       
        <!-- Begin page -->
        <div id="wrapper">             
            <div class="content-page" style="margin-left:25%; margin-right:25%">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <!-- Form-validation -->		
				         <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <p><?php if(!empty($error)){ echo $error; }  ?></p>
                                    <div class="card-header" style="  background-color:#fff; border:#C0C0C0 1px solid"><h3 class="card-title" style="color:#525252;text-transform: none; font-size:large">Existing User</h3></div>
                                    <div class="card-body" style="border:#C0C0C0 1px solid;">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="{{url('login/emp')}}" novalidate="novalidate">
                                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group row">
                                                    <label for="lastname" class="control-label col-lg-4">Email *</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width:84%;" placeholder="Email" id="email" name="email" type="text">
                                                    </div>
                                                </div>
                                           
                                                <div class="form-group row">
                                                    <label for="password" class="control-label col-lg-4">Password *</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" style="border: 1px solid #737373; width:84%;" placeholder="Password" id="password" name="password" type="password">
                                                    </div>
                                                </div>
                                           
                                       
												 <div class="form-group">
                                                <div class="checkbox checkbox-primary" style="padding-left: 221px;">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
											 <div class="form-group m-b-0" style="margin-left: 64px;">
                                                <div class="offset-sm-3 col-sm-9">
                                                  <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                                </div>
                                            </div><br>
                                            <a href="forgot.blade.php"><center><p style="margin-left: 40px">Forgot Your Password? Click Here</p></center></a>
                                            </form>
                                            <form>
                                        </div> <!-- .form -->
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
								<center><h4>Not a member yet? Click Below to Sign Up</h4></center>
								
								 <div class="form-group m-b-0">
                                                <div class="offset-sm-12"><br>
                                                  <center><button type="submit" class="btn btn-info waves-effect waves-light">Sign up Now</button></center>
                                                </div>
                                            </div>
                                        </form>
                            </div> <!-- col -->
                        </div> <!-- End row -->
						 </div> <!-- container -->
                </div> <!-- content -->
            </div>
        </div>
@include('web.footer') 
        <!-- END wrapper -->


</body>

<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->
</html>