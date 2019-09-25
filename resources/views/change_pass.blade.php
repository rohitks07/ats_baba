@include('include.headers')
@include('include.leftSidebars')
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
        width: 82%;
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
select[class="form-control"]{
    border:1px solid #bdbcbc;
    width: 84%;
    background: #fff;
}
textarea[class="form-control"]{
    border:1px solid #bdbcbc;
    background: #fff;
    width: 84%;
}
}
  </style>
    <body>       
     <div class="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="  background-color:#317eeb;">
                                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Change Password</h3></div>
                            <div class="card-body">
                                @if($errors)
                                <span>{{$errors}}</span>
                                @endif
                                        
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" action="{{url('jobseeker/change_pass/password_update')}}"   method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="email" class="control-label col-lg-4">Old Password<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" placeholder="Old Password" id="oldemail" name="old_password" required>
                                                
                                            </div>
                                        </div>
                                   
                                        <div class="form-group row">
                                            <label for="password" class="control-label col-lg-4">New Password<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                    
                                            <input type="password"  placeholder="Password" id="newpassword" name="new_password" required>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="confirm_password"  class="control-label col-lg-4">Confirm Password <span class="red">*</span></label>
                                            <div class="col-lg-8">
                                            
                                                <input type="password"   placeholder="Confirm Password" id="confirm_password" name="confirm_password" required>
                                               
                                            </div>
                                        </div>
                                        <center><button type="submit" class="btn btn-info">Change Password</button></center>
                                    </form>
                                </div> <!-- .form -->
                            </div> <!-- card-body -->
                        </div> <!-- card -->
                    </div> <!-- col -->
                        </div> <!-- End row -->                                     
                </div> <!-- content -->
                
            </div>
        </div> 
      @include('include.footers')
    </body>

<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->
</html>