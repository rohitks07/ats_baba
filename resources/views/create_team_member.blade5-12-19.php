@include('include.emp_header')
@include('include.emp_leftsidebar')
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
        width: 66%;
        padding: 7px;
        border-radius: 5px;
    }
    
    textarea {
        border-radius: 5px;
        width: 48%;
    }
    
    .form-control {
        border: 1px solid #bfbfbf;
        width: 84%;
        background: #fff;
    }
    
    .active,
    .btn:hover {
        background-color: #000000;
        color: white;
    }
    
    .form-group row {
        font: inherit;
    }
    
    input[type=password] {
        outline: none;
        padding: 11px;
        /* margin: 5px 1px 3px 0px; */
        border: 1px solid #DDDDDD;
        width: 66%;
        border-radius: 6px;
    }
    
    input[type=password]:focus {
        -moz-box-shadow: 0 0 5px #51cbee;
        -webkit-box-shadow: 0 0 5px #51cbee;
        box-shadow: 0 0 5px #51cbee;
        border: 1px solid #51cbee;
    }
    
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #4387cc;
        padding: 7px;
        text-align: center;
        color: #565656;
    }
    
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #4387cc;
        padding: 4px;
        text-align: center;
        color: #4c4c4c;
    }
    
    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #ffffff;
    }
    
    .checkbox label {
        display: inline-block;
        padding-left: 5px;
        position: absolute;
        font-weight: 400;
    }
    
    .switch {
        position: absolute;
        display: inline-block;
        width: 60px;
        height: 34px;
    }
    
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }
    
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }
    
    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }
    
    input:checked + .slider {
        background-color: #2196F3;
    }
    
    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }
    /* Rounded sliders */
    
    .slider.round {
        border-radius: 34px;
    }
    
    .slider.round:before {
        border-radius: 50%;
    }
    
    #wrapper {
        width: 100%;
        overflow-y: scroll;
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
<!--added jquary-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!--end link-->

<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="card">
                <div class="card-header" style="background-color:#317eeb;">
                    <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large;font-weight: 100;">ADD USER</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('employer/teammemberadd')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Member Id <span style="color:red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="member_id" id="member_id" placeholder="Member ID">
                                        <br>
                                        <span id="member_id_check">Please enter valid memeber Id</span>
                                    </div>
                                </div>
                                <!--Name-->
                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Name <span style="color:red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" id="full_name" name="full_name" placeholder="Full Name">
                                        <br>
                                        <span id="namecheck" name="namecheck" style="color:red;">Please Enter Your Name</span>
                                    </div>
                                </div>
                                <!--end of Name-->
                                <!--Group-->
                                <div class="form-group row">
                                    <label for="address" class="control-label col-lg-4">Group<span style="color:red;">*</span></label>
                                    <select class="form-control" name="group" id="group" style="max-width:150px; border: 1px solid #b3b3b3;margin-left: 1%;">
                                        @foreach($group as $group)
                                        <option value="{{$group->type_ID}}">{{$group->type_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end of Group-->
                                <!--Email-->
                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Email <span style="color:red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="text" id="email" name="email" placeholder="Email" type="text">
                                        <br>
                                        <span id="emailcheck" name="emailcheck" style="color:red;">Please enter a correct email ID</span>
                                    </div>
                                </div>
                                <!--end of Email-->
                                <!--Password-->
                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Password<span style="color:red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                                        <span id="passwordcheck" name="passwordcheck" style="color:red;">Value must have 6 characters or more</span>
                                    </div>
                                </div>
                                <!--end of Password-->

                                <!--Confirm Password-->
                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Confirm Password<span style="color:red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password">
                                        <span id="cmfpascheck" name="cmfpascheck" style="color:red;">Both password field must be same</span>
                                    </div>
                                </div>
                                <!--end of Confirm Password-->
                            </div>
                            <!--end of col-->

                            <!--Name-->

                            <div class=col-md-6>
                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Mobile Phone<span style="color:red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter your mobile number" type="text" maxlength="10">
                                        <span id="phcheck" name="phcheck" style="color:red;">Enter your mobile number</span>
                                    </div>
                                </div>

                                <!--Jobs History-->
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label">Jobs History <span style="color:red;">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="jobs_history" name="jobs_history" style="max-width:50%; border: 1px solid #b3b3b3;">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <span id="jobhistory" name="jobhistory" style="color:red;">This field must not be empty</span>
                                    </div>
                                </div>
                                <!--end of Jobs History-->
                            </div>
                            <!-- card-body -->
                        </div>
                        <!-- card -->
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive" style="width: 100%;">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr style="background-color:#317eeb;color:#fff;">
                                                <th style="color:#fff;padding-left:2%;">Permission</th>
                                                <th style="color:#fff; padding-left:2%;">Read</th>
                                                <th style="color:#fff;padding-left:2%;">Add</th>
                                                <th style="color:#fff;padding-left:2%;">Edit</th>
                                                <th style="color:#fff;padding-left:2%;">Delete</th>

                                            </tr>
                                        </thead>
                                       <tbody>
                                            @foreach($module as $key => $value) 
                                            
                                                <tr>
                                                <td>{{$module[$key]->module_name}}<input id="text" name="module[]" value="{{$module[$key]->ID}}" type="hidden"> </td>
                                                <td><input id="checkbox2" name="read{{$module[$key]->ID}}" value="read" type="checkbox" checked></td>
                                                <td><input id="checkbox2" name="add{{$module[$key]->ID}}" value="add" type="checkbox"></td>
                                                <td><input id="checkbox2" name="edit{{$module[$key]->ID}}" value="edit" type="checkbox"></td>
                                                <td><input id="checkbox2" name="delete{{$module[$key]->ID}}" value="delete" type="checkbox"></td>
                                                <tr>
                                                @endforeach;
                                 
                                                <tr>
                                                <td><!-- <input type="hidden" name="" value=""> -->System Administration</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox"  name="systemAdministration" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                            </tr><!--end-->
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                            </div>
                            <!--end of col-->
                        </div>
                        <!--end of row-->
                        <!--Select File-->
                        <div class="form-group row" style="border: 1px #ccc solid;">
                            <br>
                            <br>
                            <label class="col-md-2 control-label">Profile Image</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="profile_image" id="profile_image" value="">
                                <span id="profile" name="profile">Upload files only in .jpg, .jpeg, .gif or .png format with max size of 6 MB.</span>
                            </div>
                        </div>
                        <!--end of Select File-->
                        <div class="form-group" style="width:100%; height:80px;background:#e4e4e4;">
                            <br>
                            <center>
                                <button class="btn btn-primary" id="validatefrm"  type="submit">Signup</button>
                            </center>
                            </a>
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of card body-->
    </div>
    <!-- col -->
</div>
<!-- End row -->

</div>
<!-- container -->
</div>

</div>
</div>
<!-- END wrapper -->

@include('include.emp_footer')
<script>
    $(document).ready(function() {
        $("#member_id_check").hide();
        $("#namecheck").hide();
        $("#emailcheck").hide();
        $("#passwordcheck").hide();
        $("#cmfpascheck").hide();
        var err_check_member_id = true;
        var err_check = true;
        var err_check_email = true;
        var err_check_psw = true;
        var err_check_cmfpsd = true;

        //validate member id
        $("#member_id").blur(function() {
            check_member_id();
        });
        $("#validatefrm").click(function() {
            check_member_id();
        });
        function check_member_id() {
            var member_id_val = $("#member_id").val();

            var regexOnlyText = /^[0-9]+$/;
            if(member_id_val.length==""||regexOnlyText.test(member_id_val) != true)
            {
                $("#member_id_check").show();
                $("#member_id_check").focus();
                $("#member_id_check").css("color", "red");
                err_check_member_id = false;
                return false;
            } else {
                $("#member_id_check").hide();
            }

        }
        //validate name
        $("#full_name").blur(function() {
            check_firstname();
        });
        $("#validatefrm").click(function() {
            check_firstname();
        });
        function check_firstname() {
            var full_name_val = $("#full_name").val();

            var regexOnlyText = /^[a-zA-Z ]+$/;
            if(full_name_val.length==""||regexOnlyText.test(full_name_val) != true)
            {
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
        $("#email").blur(function() {
            check_email();
        });
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
        $("#password").blur(function() {
            check_passd();
        });
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
        $("#confirm_password").blur(function() {
            check_cmfpassd();
        });
        $("#validatefrm").click(function() {
            check_cmfpassd();
        });
        function check_cmfpassd() {
            var cmfpassd_val = $("#confirm_password").val();
            var passd_val = $("#password").val();
            if (cmfpassd_val.length != passd_val.length) {
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
            err_check_member_id = true;
            err_check = true;
            err_check_email = true;
            err_check_psw = true;
            err_check_cmfpsd = true;
            check_member_id();
            check_firstname();
            check_email();
            check_passd();
            check_cmfpassd();

            if ((err_check == true)&&(err_check_member_id==true)&&(err_check_email==true)&&(err_check_psw==true)&&(err_check_cmfpsd==true)) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>

//Validation Form Personal Information
<script>
    $(document).ready(function() {

        $("#citycheck").hide();
        $("#phcheck").hide();
        $("#jobhistory").hide();
        $("#filecheck").hide();

        var err_city = true;
        var err_ph = true;
        var err_jobhistory = true;
        var err_file = true;

        //Validation City
        $("#validatefrm").click(function() {
            check_loc();
        });

        function check_loc() {
            var loc_val2 = $("#city").val();
            if (loc_val2 == "") {
                $("#citycheck").show();
                $("#citycheck").focus();
                $("#citycheck").css("color", "red");
                err_city = false;
                return false;
            } else {
                $("#citycheck").hide();
            }
        }
        //validate mobile Phone
        $("#mobile_number").blur(function() {
            check_phone();
        });
        $("#validatefrm").click(function() {
            check_phone();
        });
        function check_phone() {

            var ph_val = $("#mobile_number").val();
            var phoneno = new RegExp(/^[0-9-+]+$/);
            if (ph_val.match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
                $("#phcheck").hide();
            } else {
                $("#phcheck").show();
                $("#phcheck").focus();
                $("#phcheck").css("color", "red");
                err_ph = false;
                return false;
            }
        }
        //validate Jobs History
        $("#jobs_hostory").blur(function() {
            check_jobhistory();
        });
        $("#validatefrm").click(function() {
            check_jobhistory();
        });
        function check_jobhistory() {

            var jobhistory_val = $("#jobs_history").val();
            if (jobhistory_val == "") {
                $("#jobhistory").show();
                $("#jobhistory").focus();
                $("#jobhistory").css("color", "red");
                err_jobhistory = false;
                return false;
            } else {
                $("#jobhistory").hide();
            }
        }
        //validate file upload
        $("#profile_image").change(function() {
            check_file();
        });
        $("#validatefrm").click(function() {
            check_file();
        });
        function check_file() {
            return true;
            // var file_val = $("#profile_image").val();
            // var ext = file_val.split('.').pop();
            // if (ext == "jpg" || ext == "jpeg" || ext == "gif" || ext == "png") {
            //     $("#profile").hide();
                
            // } else {
            //     $("#profile").show();
            //     $("#profile").focus();
            //     $("#profile").css("color", "red");
            //     err_file = false;
            //     return false;
            // }
        }
        $("#validatefrm").click(function() {
            err_file = true;
            err_ph = true;
            err_city = true;
            err_jobhistory = true;
            check_file();
            check_phone();
            check_loc();
            if ((err_ph == true) && (err_city == true) && (err_file == true) && (err_jobhistory = true)) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>
<script>
    var resizefunc = [];
</script>

</body>

</html>