<!DOCTYPE html>
<html lang="en">
@include('web.header')
<style>
.card-pages .card-header {
    border-radius: 6px 6px 0px 0px;
    padding: 57px 23px;
    position: relative;
}
</style>
<body>
    <div class="wrapper-page">
        <div class="card card-pages">
            <div class="card-header bg-img">
                <div class="bg-overlay"></div>
                <h3 class="text-center m-t-10 text-white"> Sign In to <strong>HRMS</strong> </h3>
            </div>
                <p style="margin-bottom:0em;">@if(!empty($error))</p>
                <p class="alert alert-danger" style="margin-bottom:0em; role="alert">{{$error}}</p>
                    @endif

                <div class="card-body" style=" background: #e6e6e6;">
                    <form class="form-horizontal m-t-10" id="signupForm" action="{{url('adminLogin')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <div class="col-12">
                                    <input class="form-control input-lg" type="text" name="username" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                    <input class="form-control input-lg" type="password" name="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox-signup" type="checkbox">
                                            <label for="checkbox-signup">
                                                Remember me
                                            </label>
                                    </div>
                                    <center><button class="btn btn-primary" type="submit" name="submit">Log In</button></center>
                                </div>
                            </div>                   
                            
                            <P><i class="fa fa-lock" aria-hidden="true"></i> Forgot Your Password?</P>
                 
                            <hr>
                   
                            <br><br>
                            <div><P style="text-align:center;">Privacy Policy | Terms of use</P></div>
                            
                    </form>
                </div>

        </div>
    </div>

    <!-- Main  -->
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/detect.js')}}"></script>
    <script src="{{url('assets/js/fastclick.js')}}"></script>
    <script src="{{url('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{url('assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{url('assets/js/waves.js')}}"></script>
    <script src="{{url('assets/js/wow.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{url('assets/js/jquery.scrollTo.min.js')}}"></script>

    <script src="{{url('assets/js/jquery.app.js')}}"></script>

    <!-- Validation ccode in Jquery -->
    <script src="{{url('assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('assets/js/additional-methods.min.js')}}"></script>

    <script>
        // just for the demos, avoids form submit
        jQuery.validator.setDefaults({
            // debug: true,
            success: "valid"
        });
        $("#signupForm").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 3
                },

                password: {
                    required: true,
                    minlength: 5
                },

            },

        });
    </script>
</body>
<!-- Mirrored from coderthemes.com/moltran/blue/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:16 GMT -->
</html>