<meta name="csrf-token" content="{{ csrf_token() }}">
<!DOCTYPE html>
<html lang="en">
@include('include.emp_header')
@include('include.emp_leftsidebar')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<style>
    .table td {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #fff;
    }

    .table tr {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #fff;
    }

    .table th {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
    }

    .form-control {
        border: 1px solid #737373;
        width: 84%;
    }

    .active,
    .btn:hover {
        background-color: #000000;
        color: white;
    }

    .control-label {
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
        text-transform: none;
    }

    .checkbox label {
        display: inline-block;
        padding-left: 5px;
        position: absolute;
        font-weight: 400;
    }

    .content-page {
        overflow: hidden;
        width: 100%;
    }

    .content-page>.content {
        margin-bottom: 60px;
        margin-top: 0px;
        padding: 20px 10px 15px 10px;
    }

    .element {
        background: #fff;
        width: 100% height: 100%;

    }

    .formwraper {
        margin-bottom: 20px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px 5px 0 0;
        width: 100%;
    }

    .jobdescription {
        border: 1px solid #ddd;
    }

    .jobdescription .skillBox {
        padding: 5px;
        border: 1px solid #ddd;
        font-size: 13px;
        line-height: 18px;
    }

    .input-group-addon {
        padding: 6px 15px;
        font-size: 14px;
        font-weight: 400;
        color: #ffffff;
        text-align: center;
        background-color: #29b6f6;
    }

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
        width: 83%;
        padding: 7px;
        border-radius: 5px;
    }

    textarea {
        border-radius: 5px;
        width: 48%;
    }

    #wrapper {
        overflow-y: scroll;
        width: 100%;
    }

    .ui-datepicker-calendar {
        display: none;
    }
</style>
<div id="wrapper">
    <div class="content-page">
        <div class="content"> <br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="border: 1px #C0C0C0 solid; width: 87%;">
                        <div class="card-header" style="background-color: #317eeb;">
                            <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Add
                                Candidate</h3>
                        </div>
                        <div class="card-body">
                            <h3>Personal Detail</h3>
                            <hr>
                            <form action="{{url('employer/post_new_candidate/insert')}}" method="post" enctype="multipart/form-data" novalidate>
                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--Name-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">First Name <span style="color:red;">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"><br>
                                                <span id="first_namecheck">Not valid First Name</span>
                                            </div>
                                        </div>
                                        <!--end of Name-->
                                        <!--Middle Name-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Middle Name </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name">
                                                <span id="middle_namecheck">Not valid Middle Name</span>
                                            </div>
                                        </div>
                                        <!--end of Middle Name-->
                                        <!--Last Name-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Last Name<span style="color:red;">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"><br>
                                                <span id="last_namecheck">Not valid Last Name</span>
                                            </div>
                                        </div>
                                        <!--end of Last Name-->

                                        <!-- Date of Birth-->

                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Date of Birth (mm-dd-yyyy)<span style="color:red;"></span></label>
                                            <div class="col-lg-8">
                                                <input type="date" class="form-control" id="date_of_birth" name="dob" maxlength="10" placeholder="date of Birth" style="width:83%; padding:0.5em;"><br>
                                                <span id="dobcheck">Select a valid Date Of Birth</span>
                                            </div>

                                        </div>



                                        <!--end Date of Birth-->
                                        <!--Gender-->
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Gender <span style="color:red;">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="gender" id="gender" style="width:83%; background:#fff;">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end of Gender-->
                                        <!--Email-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Email<span style="color:red;">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" maxlength="35"><br>
                                                <span id="emailcheck">Please Enter valid Email</span>
                                            </div>
                                        </div>
                                        <!--end Email-->
                                        <!--Skype ID-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Skype ID</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="skype_id" name="skype_id" maxlength="30" placeholder="Skype ID">
                                            </div>
                                        </div>
                                        <!--end of Skype ID-->
                                        <!--Social Security No-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Social Security No</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="ssn" id="ssn" autocomplete="off" placeholder="000-00-0000" maxlength="9">
                                                <span id="ssncheck">Please Enter valid Social Security Number</span>
                                            </div>
                                        </div>
                                        <!--end of Social Security No-->
                                        <!--Visa-->
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Visa <span style="color:red;">*</span></label>
                                            <div class="col-sm-8">
                                                <select name="visa_status" id="visa_status" class="form-control" style="width:83%;background:#fff;">
                                                    <option value="">Select Visa Type</option>
                                                    @foreach($toReturn['visa_type'] as $visa_type)
                                                    <option value="{{$visa_type['type_name']}}">
                                                        {{$visa_type['type_name']}} </option>
                                                    @endforeach
                                                </select>
                                                <span id="visacheck">Please Select Visa</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Total It Experience <span style="color:red;">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="Experience" placeholder="Total It Experience" name="total_experience" maxlength="10" required>
                                                <span id="Experiencecheck">Please Enter Valid Experience Details </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Total Experience <span style="color:red;"></span></label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" id="Experience" placeholder="Total Experience" name="experience" maxlength="10" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Total USA Experience <span style="color:red;"></span></label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" id="Experience" placeholder="Total USA Experience" name="total_usa_experience" maxlength="10" required>
                                            </div>
                                        </div>
                                        <!--end of Visa-->

                                    </div>
                                    <!--end of column-->


                                    <div class="col-md-6">

                                        <!-- Location-->
                                        <div class="form-group row">
                                            <label for="address" class="control-label col-lg-4">Location <span style="color:red;">*</span></label>
                                            <select name="country" id="country" class="form-control " style="width:22%; border: 1px solid #bbb8b8; margin-left: 9px;" required>
                                                <option value="224" selected>United States</option>

                                                @foreach($toReturn['countries'] as $country)
                                                <option value="{{$country['country_id']}}">
                                                    {{ $country['country_name'] }}</option>
                                                @endforeach
                                            </select>
                                            <select name="state" id="state_text" class="form-control " style="max-width:22%; margin-left: 9px; border: 1px solid #bbb8b8;" required>
                                                <option value="">Select State</option>
                                            </select>
                                            <div class="col-md-12" style="float: right;margin-left: 21em;margin-top: 2%;">
                                                <div id="select_city">
                                                    <select name="city_name" id="city" class="form-control " style="max-width:22%; border: 1px solid #bbb8b8;" required>
                                                        <option value="">Select City</option>
                                                    </select>
                                                    <br>

                                                    <span id="citycheck">Please choose Your Location</span>
                                                </div>
                                            </div>
                                            <input type="checkbox" class="form-control" id="myCheck" onclick="mycity()" style="width:20px;height:20px;">
                                            <label id="city_label" class="control-label col-lg-4">Enter City if not
                                                present</label>
                                            <div id="textCity" style="display:none;" class="form-group row col-md-12">
                                                <label for="" class="control-label col-lg-4">Enter City <span style="color:red;">*</span></label>
                                                <input type="text" class="col-sm-5" id="city_text_" name="city_text_name">
                                                <label for="" id="enter_city" style="display:block">Must be
                                                    filled</label>
                                            </div>
                                        </div>
                                        <!--end Location -->
                                        <!--Address Line 1-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Address Line 1</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="address1" placeholder="Address Line 1" name="addressline1" maxlength="100">
                                            </div>
                                        </div>
                                        <!--end of Address Line 1-->
                                        <!--Address Line 2-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Address Line 2</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="address1" placeholder="Address Line 2" name="addressline2" maxlength="100">
                                            </div>
                                        </div>
                                        <!--end of Address Line 2-->
                                        <!--Mobile Phone-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Mobile Phone<span style="color:red;">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="mobile_number" name="mobilephone" placeholder="Mobile Phone" maxlength="12"><br>
                                                <span id="mob_ph_check">Please Enter a Valid Mobile Number</span>
                                            </div>
                                        </div>
                                        <!--end of Mobile Phone-->
                                        <!--Home Phone-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Home Phone<span style="color:red;"></span></label>
                                            <div class="col-lg-8">
                                                <input type="text " class="form-control" id="phone" name="homephone" placeholder="Home Phone" maxlength="12"><br>
                                                <span id="home_ph_check">Please Enter a Valid Home Number</span>
                                            </div>
                                        </div>
                                        <!--end of Home Phone-->
                                        <!--Select File-->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Upload Resume<span style="color:red;">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" class="form-control" name="cv_file" id="cv_file" style="background:#fff;" required>
                                                <p>Upload files only in .doc, .docx or .pdf format with maximum size of
                                                    32 MB.</p>
                                                <span id="resume_check">Please Choose a Valid File</span>
                                            </div>
                                        </div>
                                        <!--end of Select File-->
                                        <!--Other Documents -->
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Other Documents</label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" name="file_other1" id="cv_file2" style="background:#fff;" /><br>
                                                <input type="file" class="form-control" name="file_other2" id="cv_file3" style="background:#fff;" />
                                                <p>Hint:Upload files only in .doc,</br> .docx or .pdf format with</br>
                                                    maximum size of 32 MB.</p>
                                            </div>
                                        </div>
                                        <!--end of Other Documents -->
                                        <div id="div1">

                                        </div>


                                        <p><button type="button" id="btnAdd_doc" class="btn btn-primary">Add
                                                More&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                    </div>
                                    <!--end of column-->
                                </div>
                                <!--end of row-->

                                <!--button-->
                                <center>
                                    <div id="shown">
                                        <button class="btn btn-primary open1" type="button" id="validatefrm">Next <span class="fa fa-arrow-right"></span></button>
                                    </div>
                                </center><br>
                                <div class="menun" style="display: none;">
                                    <!--button-->

                                    <!--starting  Second Row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="border: 1px #C0C0C0 solid;">
                                                <div class="card-header" style="background-color: #317eeb;">
                                                    <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">
                                                        Educational Detail</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-block">
                                                        <div class="form-group">
                                                            <div class="form-content">

                                                                <div id="educational_detail">
                                                                    <div class="form-group row delete_row">
                                                                        <label for="address" class="control-label col-lg-12"> </label>
                                                                        <select name="degree[]" id="degree" class="form-control" placeholder="Degree Title" style="width: 14%; margin-left: 9px; border: 1px solid #737373;">
                                                                        <option value="" selected>Select Degree</option>
                                                                            @foreach($toReturn['qualification'] as $qualification)
                                                                                <option value="{{$qualification['val']}}">{{ $qualification['val']}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <input type="text" name="major_subject[]" id="subject" class="form-control" placeholder="Major Subject" style="width: 14%;">
                                                                        <input type="text" name="institute[]" id="institute" class="form-control" placeholder="Institute" style="width: 14%;">
                                                                        <input type="text" name="edu_city[]" id="edu_city" class="form-control" placeholder="City" style="width: 14%;">
                                                                        <select type="text" name="edu_country[]" id="edu_country" class="form-control" placeholder="Country" style="width: 14%;">
                                                                            <option value="" selected>Select country</option>
                                                                            @foreach($toReturn['countries'] as $countries)
                                                                            <option value="{{$countries['country_name']}}"> {{$countries['country_name']}} </option>
                                                                            @endforeach


                                                                        </select>
                                                                        <select name="completion_year[]" id="completion" class="form-control" placeholder="Passing Year" style="width: 15%;">
                                                                            <option value="" selected="selected">
                                                                                Completion</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1970">1970</option>
                                                                        </select>
                                                                        <p><button type="button" id="btnAdd" class="btn btn-primary">Add More&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                                                        <span id="education_check">Please fill All
                                                                            Fields</span>
                                                                    </div>
                                                                    <!--form group row close-->
                                                                </div> <!-- <close id> -->
                                                            </div><!-- form-content-->
                                                        </div><!-- form group-->
                                                    </div> <!-- form block -->
                                                </div> <!-- card-body -->
                                            </div> <!-- card -->
                                        </div><!-- col -->
                                    </div><!-- row -->
                                    <!--end Second Row--->

                                    <!--Button--->
                                    <center>
                                        <div id="shows">
                                            <button class="btn btn-primary open1" type="button" id="edu_validatefrm" onclick="check_if_exists()">Next <span class="fa fa-arrow-right"></span></button>
                                        </div>
                                    </center><br>
                                    <div class="menus" style="display: none;">
                                        <!--Button--->



                                        <!--starting third Row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card" style="border: 1px #C0C0C0 solid;">
                                                    <div class="card-header" style="background-color:  #317eeb;">
                                                        <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">
                                                            Experience Details</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <hr>
                                                        <div class="col-md-12">
                                                            <div class="form-block">
                                                                <div class="form-group">
                                                                    <!-- start of form-->

                                                                    <div id="exp_detail">
                                                                        <div class="form-group row delete_exp">
                                                                            <input type="text" name="job_title[]" id="job_title" class="form-control" placeholder="Job Title" style="width: 14%;">
                                                                            <input type="text" name="company_name[]" id="company_name" class="form-control" placeholder="Company Name" style="width: 17%;">
                                                                            <input type="text" name="exp_city[]" id="exp_city" class="form-control" placeholder="City" style="width: 14%;">
                                                                            <select type="text" name="exp_country[]" id="exp_country" class="form-control" placeholder="Country" style="width: 14%;">
                                                                                <option value="">-Country-</option>
                                                                                @foreach($toReturn['countries'] as
                                                                                $country)
                                                                                <option value="{{$country['country_id']}}">
                                                                                    {{ $country['country_name'] }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <input placeholder="Start Date" name="start_date[]" id="start_date" class="textbox-n form-control start_date date-picker" type="text" id="start_date" style="width: 15%;">
                                                                            <input placeholder="End Date" name="end_date[]" id="end_date" class="textbox-n form-control end_date date-picker1" type="text" id="end_date" style="width: 15%;">
                                                                            <p><button type="button" id="btnAdd_Exp" class="btn btn-primary">Add
                                                                                    More&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button>
                                                                            </p>
                                                                            <label id="check_date" style="display:none;color:red;">In
                                                                                correct date format</label>
                                                                            <label id="check_date1" style="display:none;color:red;">In
                                                                                correct date format</label>
                                                                            <br>
                                                                            <!-- <a class="btn btn-primary add-more-btn" style="float:left; margin-left:1em;">Add More&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a>												   -->
                                                                            <label id="experience_check">Please fill All
                                                                                Fields</label>
                                                                        </div><!-- GROUP ROW-->
                                                                    </div><!-- EXP ID-->
                                                                </div><!-- COL-->
                                                            </div><!-- form group-->
                                                        </div> <!-- form block -->
                                                    </div> <!-- card-body -->
                                                </div> <!-- card -->
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <!--end of  third Row-->

                                        <!--button-->
                                        <center>
                                            <div id="showa">
                                                <button class="btn btn-primary open1" type="button" id="exp_validatefrm">Next <span class="fa fa-arrow-right"></span></button>
                                            </div>
                                        </center><br>
                                        <div class="menua" style="display: none;">
                                            <!--button-->

                                            <!--starting of fourth Row-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card" style="border: 1px #C0C0C0 solid;">
                                                        <div class="card-header" style="background-color:  #317eeb;">
                                                            <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">
                                                                Skill Detail</h3>
                                                        </div><br>
                                                        <div class="card-body">
                                                            <center>
                                                                <input name="skills" id="Result" class="form-control" type="text" required>
                                                                <label for="" id="skills_check" style="display:none;color:red;">This cannot be
                                                                    empty</label>
                                                            </center>
                                                            <br>
                                                            <div class="form-group row">
                                                                <label for="lastname" class="control-label col-lg-4">Add
                                                                    Skill <span style="color:red;">*</span></label>
                                                                <div class="col-lg-4">
                                                                    <input class="form-control" style="border: 1px solid #737373; width:100%;" id="tags" name="skill" type="text" required>
                                                                    <span class="help-block" style="text-align:right;"><small>
                                                                            Enter skill in this formate ex-
                                                                            java,cpp,c,laravel,html etc. </small></span>
                                                                    <br>
                                                                    <span id="skill_check" style="display:none;color:red;">Please Add
                                                                        Maximum Three
                                                                        Skill</span>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <button type="button" class="btn btn-info waves-effect waves-light m-l-10" onclick="add_element_to_array();">Add</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- card -->
                                            </div> <!-- card-body -->
                                            <center><input type="submit" name="submit" id="validatefrm_submit" value="Submit" class="btn btn-primary" style="background: #1ba6df !important;"></center>
                            </form>
                        </div> <!-- card -->
                    </div>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
</div> <!-- container -->
</div> <!-- content -->
</div>
<!-- END wrapper -->
@include('include.emp_footer')
<script>
    $(document).ready(function() {
        $("#btnAdd_doc").click(function() {
            var a = `<div class="input-group mb-3 delete_exp1">
  			<input type="file" class="form-control col-sm-8" placeholder="Recipient's username" name="multi_docs[]" aria-label="Recipient's username" aria-describedby="button-addon2">
  			<div class="input-group-append">
			  <button type="button" class="btn btn-primary btn_remove1">Remove</button>
  			</div>
			</div>`;
            $("#div1").append(a);

        });
        $(document).on('click', '.btn_remove1', function() {
            $(this).closest('.delete_exp1').remove();
        });

    });
</script>
<script>
    var x = 0;
    var arr = Array();

    function add_element_to_array() {
        arr[x] = document.getElementById("tags").value;
        x++;
        document.getElementById("Result").value = arr;
        var e = "";

        for (var y = 0; y < array.length; y++) {
            e += array[y];
        }
        document.getElementById("Result").value = e;
    }
</script>




<!--skill Details -->
{{-- <script>
    $(document).ready(function () {
        $('#showa').click(function () {
            $('.menua').toggle("slide");
        });
    });

</script> --}}
<!--skill Details -->


<!--Eduication Details -->
{{-- <script>
    $(document).ready(function () {
        $('#shown').click(function () {
            $('.menun').toggle("slide");
        });
    });

</script>
<!--Eduication Details -->

<!--exp Details -->
<script>
    $(document).ready(function () {
        $('#shows').click(function () {
            $('.menus').toggle("slide");
        });
    });

</script> --}}
<!--exp Details -->

<!--dynamic clone for educational -->
<script>
    $("#home_ph_check").hide();

    function phoneMask() {
        var num = $(this).val().replace(/\D/g, '');
        if ($(this).val(num.substring(0, 3) + '-' + num.substring(3, 6) + '-' + num.substring(6, 10))) {

        } else {

            $("#home_ph_check").show();
        }
    }
    $('#phone').keyup(phoneMask);

    $("#mob_ph_check").hide();

    function phoneMask() {
        var num = $(this).val().replace(/\D/g, '');
        if ($(this).val(num.substring(0, 3) + '-' + num.substring(3, 6) + '-' + num.substring(6, 10))) {

        } else {
            $("#mob_ph_check").show();
        }
    }
    $('#mobile_number').keyup(phoneMask);

    $(document).ready(function() {
        var i = 1;
        $('#btnAdd').click(function() {
            i++;
            var data = `
					                <div class="form-group row delete_row" >								
										<label for="address" class="control-label col-lg-12"> </label>
											<select name="degree[]" id="" class="form-control" placeholder="Degree Title" style="width: 14%; margin-left: 9px; border: 1px solid #737373;">
											<option value="" selected>Select Degree</option>   
                                            @foreach($toReturn['qualification'] as $qualification)
                                                <option value="{{$qualification['val']}}">{{ $qualification['val']}}</option>
                                            @endforeach												
										    </select>
										    <input type="text" name="major_subject[]" class="form-control" placeholder="Major Subject" style="width: 14%;">	
										    <input type="text" name="institute[]" class="form-control" placeholder="Institute" style="width: 14%;">
										    <input type="text" name="edu_city[]" class="form-control" placeholder="City" style="width: 14%;">
	                                        <select type="text" name="edu_country[]" class="form-control" placeholder="Country" style="width: 14%;">
												<option value="" selected>Country</option>
												    @foreach($toReturn['countries'] as $country)
													<option value="{{$country['country_id']}}">{{ $country['country_name'] }}</option>
													  @endforeach                               
											</select>
											<select class="form-control" name="completion_year[]" placeholder="Passing Year" style="width: 15%;" >
												<option value="" selected="selected">Completion</option>
													<option value="2019" >2019</option>
													<option value="2018" >2018</option>
													<option value="2017" >2017</option>
													<option value="2016" >2016</option>
													<option value="2015" >2015</option>
													<option value="2014" >2014</option>
													<option value="2013" >2013</option>
													<option value="2012" >2012</option>
													<option value="2011" >2011</option>
													<option value="2010" >2010</option>
													<option value="2009" >2009</option>
													<option value="2008" >2008</option>
													<option value="2007" >2007</option>
													<option value="2006" >2006</option>
													<option value="2005" >2005</option>
													<option value="2004" >2004</option>
													<option value="2003" >2003</option>
													<option value="2002" >2002</option>
													<option value="2001" >2001</option>
													<option value="2000" >2000</option>
													<option value="1999" >1999</option>
													<option value="1998" >1998</option>
													<option value="1997" >1997</option>
													<option value="1996" >1996</option>
													<option value="1995" >1995</option>
													<option value="1994" >1994</option>
													<option value="1993" >1993</option>
													<option value="1992" >1992</option>
													<option value="1991" >1991</option>
													<option value="1990" >1990</option>	
											</select>
										
   											<button type="button" id="btnRemove" class="btn btn-primary btn_remove">Remove</button>
									
							        </div> `;
            $('#educational_detail').append(data);
        });
    });
    $(document).on('click', '.btn_remove', function() {
        //alert("jhgtjhgjhghj");
        $(this).closest('.delete_row').remove();
    });
</script>
<!--close dynamic clone for educational -->


<!--dynamic clone for EXPERIANCE -->
<script>
    $(document).ready(function() {
        var i = 1;
        $('#btnAdd_Exp').click(function() {
            i++;
            var data2 = `<div class="form-group row delete_exp">											
						    <input type="text" name="job_title[]" class="form-control" placeholder="Job Title" style="width: 14%;">
							<input type="text" name="company_name[]" class="form-control" placeholder="Company Name" style="width: 17%;">
							<input type="text" name="exp_city[]" class="form-control" placeholder="City" style="width: 14%;">
							<select type="text" name="exp_country[]" class="form-control" placeholder="Country" style="width: 14%;">
								<option value="" selected>-Country-</option>
								   @foreach($toReturn['countries'] as $country)
								<option value="{{$country['country_id']}}">{{ $country['country_name'] }}</option>
									 @endforeach  
							</select>
							<input placeholder="Start Date" name="start_date[]" class="textbox-n form-control start_date date-picker" type="text"  id="start_date" style="width: 14%;">
							<input placeholder="End Date" name="end_date[]" class="textbox-n form-control end_date date-picker" type="text"  id="start_date" style="width: 14%;">	
													   

							<button type="button" id="btnRemove" class="btn btn-primary btn_remove">Remove</button>		
																  
						 </div>`;
            $('#exp_detail').append(data2);
        });
    });
    $(document).on('click', '.btn_remove', function() {
        $(this).closest('.delete_exp').remove();
    });
</script>
<!--close dynamic clone for EXPERIANCE -->

<!--dynamic add skills-->

<script>
    $(function() {
        var availableSkills =
            $("#skill").autocomplete({
                source: availableSkills
            });
    });
</script>
<!--dynamic add skills-->

<!-- validation Of Personal Details -->

{{-- Add validate here --}}
<script>
    $(document).ready(function() {
        // initializing error variables, hiding check/error span
        $("#first_namecheck").hide();
        $("#middle_namecheck").hide();
        $("#last_namecheck").hide();
        $("#dobcheck").hide();
        $("#emailcheck").hide();
        $("#ssncheck").hide();
        $("#visacheck").hide();
        $("#Experiencecheck").hide();
        $("#citycheck").hide();
        $("#mob_ph_check").hide();
        $("#home_ph_check").hide();
        $("#resume_check").hide();
        $('#skills_check').hide();

        var err_firstname = true;
        var err_middlename = true;
        var err_lastname = true;
        var err_dob = true;
        var err_email = true;
        var err_ssn = true;
        var err_visa = true;
        var err_Experience = true;
        var err_city = true;
        var err_mob_ph = true;
        var err_home_ph = true;
        var err_resume = true;
        var err_skills = true;

        //validate first name
        $("#first_name").blur(function() {
            check_firstname();
        });

        function check_firstname() {
            var firstname_val = $("#first_name").val();

            var regexOnlyText = /^[a-zA-Z]+$/;
            if (firstname_val == "" || regexOnlyText.test(firstname_val) != true) {
                $("#first_namecheck").show();
                $("#first_namecheck").focus();
                $("#first_namecheck").css("color", "red");
                err_firstname = false;
                return false;
            } else {
                err_firstname = true;
                $("#first_namecheck").hide();
            }

        }
        //validate middle name
        $("#middle_name").blur(function() {
            check_middlename();
        });

        function check_middlename() {
            var middlename_val = $("#middle_name").val();

            var regexOnlyText = /^[a-zA-Z]+$/;
            if (middlename_val != "") {
                if (regexOnlyText.test(middlename_val) != true) {
                    $("#middle_namecheck").show();
                    $("#middle_namecheck").focus();
                    $("#middle_namecheck").css("color", "red");
                    err_middlename = false;
                    return false;
                } else {
                    err_middlename = true;
                    $("#middle_namecheck").hide();
                }
            } else {
                err_middlename = true;
                $("#middle_namecheck").hide();
            }

        }
        //Validation last name
        $("#last_name").blur(function() {
            check_lastname();
        });

        function check_lastname() {
            var lastname_val = $("#last_name").val();

            var regexOnlyText = /^[a-zA-Z]+$/;
            if (lastname_val == "" || regexOnlyText.test(lastname_val) != true) {
                $("#last_namecheck").show();
                $("#last_namecheck").focus();
                $("#last_namecheck").css("color", "red");
                err_lastname = false;
                return false;
            } else {
                err_lastname = true;
                $("#last_namecheck").hide();
            }
        }
        //validate date of birth
        $("#date_of_birth").blur(function() {
            check_dob();
        });

        function check_dob() {
            var date_of_birth = $("#date_of_birth").val();

            if (date_of_birth) {
                var dob_var = new Date(date_of_birth);
                var dob_val_day = dob_var.getDate();
                var dob_val_month = dob_var.getMonth() + 1;
                var dob_val_year = dob_var.getFullYear();

                if (!dob_val_day || !dob_val_month || !dob_val_year) {
                    $("#dobcheck").show();
                    $("#dobcheck").focus();
                    $("#dobcheck").css("color", "red");
                    err_dob = false;
                    return false;
                } else if (dob_val_day > 31 || dob_val_month > 12 || dob_val_year > new Date().getFullYear()) {
                    $("#dobcheck").show();
                    $("#dobcheck").focus();
                    $("#dobcheck").css("color", "red");
                    err_dob = false;
                    return false;
                } else {
                    err_dob = true;
                    $("#dobcheck").hide();
                }
            } else {
                err_dob = true;
                $("#dobcheck").hide();
            }

        }
        //validate email
        $("#email").blur(function() {
            check_email();
        });

        function check_email() {
            var email_val = $("#email").val();
            var v =
                /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            var result = email_val.match(v);
            if ((email_val.length == "") || (result == null)) {
                $("#emailcheck").show();
                $("#emailcheck").focus();
                $("#emailcheck").css("color", "red");
                err_email = false;
                return false;
            } else {
                err_email = true;
                $("#emailcheck").hide();
            }
        }
        // validate Social Security Number (SSN)
        $("#ssn").blur(function() {
            check_ssn();
        });

        function check_ssn() {
            var ssn_val = $("#ssn").val();

            var regexOnlyNumbers = /^[0-9\-]+$/;
            if (ssn_val != "") {
                if (regexOnlyNumbers.test(ssn_val) != true) {
                    $("#ssncheck").show();
                    $("#ssncheck").focus();
                    $("#ssncheck").css("color", "red");
                    err_ssn = false;
                    return false;
                } else {
                    err_ssn = true;
                    $("#ssncheck").hide();
                }
            } else {
                err_ssn = true;
                $("#ssncheck").hide();
            }
        }
        //validate Visa
        $("#visa_status").blur(function() {
            check_visa();
        });

        function check_visa() {
            var visa_val = $("#visa_status").val();
            if (visa_val.length == "") {
                $("#visacheck").show();
                $("#visacheck").focus();
                $("#visacheck").css("color", "red");
                err_visa = false;
                return false;
            } else {
                err_visa = true;
                $("#visacheck").hide();
            }
        }
        //Validation Experience
        $("#Experience").keyup(function() {
            var var_tmp = $("#Experience").val();
            $("#Experience").val(var_tmp.replace(/[^0-9]/g, ''));
        });
        $("#Experience").blur(function() {
            check_Experience();
        });

        function check_Experience() {
            var Experience_val = $("#Experience").val();

            var regexOnlyNumbers = /^[0-9]+$/;
            if (Experience_val == "" || regexOnlyNumbers.test(Experience_val) != true) {
                $("#Experiencecheck").show();
                $("#Experiencecheck").focus();
                $("#Experiencecheck").css("color", "red");
                err_Experience = false;
                return false;
            } else {
                err_Experience = true;
                $("#Experiencecheck").hide();
            }
        }
        //Validation Location
        $("#country").blur(function() {
            check_location();
        });

        function check_location() {
            var loc_val = $("#country").val();
            var loc_val1 = $("#state_text").val();
            if ((loc_val == "") || (loc_val1 == "")) {
                $("#citycheck").show();
                $("#citycheck").focus();
                $("#citycheck").css("color", "red");
                err_city = false;
                return false;
            } else {
                err_city = true;
                $("#citycheck").hide();
            }


            var data = document.getElementById("myCheck");
            var loc_val2 = $("#city").val();

            if ((data.checked == false) && (loc_val2 == "")) {
                $("#citycheck").show();
                $("#citycheck").focus();
                $("#citycheck").css("color", "red");
                err_city = false;
                return false;
            } else if (data.checked == true) {
                var city = document.getElementById("city_text_").value;
                if (city == "") {
                    $('#enter_city').css('color', 'red');
                    $('#enter_city').css('display', 'block');
                    err_city = false;
                    return false;
                } else {
                    $('#enter_city').css('color', 'red');
                    $('#enter_city').css('display', 'none');
                }

            }


        }

        // validate mobile number
        $("#mobile_number").blur(function() {
            check_mb_phone();
        });

        function check_mb_phone() {
            var var_mobile_number = $("#mobile_number").val();

            var regexOnlyNumbers = /^[0-9-]+$/;
            if (var_mobile_number.length != 12 || regexOnlyNumbers.test(var_mobile_number) != true) {
                $("#mob_ph_check").show();
                $("#mob_ph_check").focus();
                $("#mob_ph_check").css("color", "red");
                err_mob_ph = false;
                return false;
            } else {
                err_mob_ph = true;
                $("#mob_ph_check").hide();
            }
        }
        // validate home number
        $("#phone").blur(function() {
            check_hm_phone();
        });

        function check_hm_phone() {
            var var_homephone_number = $("#phone").val();

            var regexOnlyNumbers = /^[0-9-]+$/;
            if (var_homephone_number.length > 2) {
                if (var_homephone_number.length != 12 || regexOnlyNumbers.test(var_homephone_number) != true) {
                    $("#home_ph_check").show();
                    $("#home_ph_check").focus();
                    $("#home_ph_check").css("color", "red");
                    err_home_ph = false;
                    return false;
                } else {
                    err_home_ph = true;
                    $("#home_ph_check").hide();
                }
            } else {
                err_home_ph = true;
                $("#home_ph_check").hide();
                $("#phone").val("");
            }
        }
        // cv validate
        $("#cv_file").change(function() {
            check_resume();
        });
        function check_resume() {

            var file_val = $("#cv_file").val();
            var ext = file_val.split('.').pop();
            if (ext == "pdf" || ext == "docx" || ext == "doc") {
                $("#resume_check").hide();
                err_resume = true;
            } else {
                $("#resume_check").show();
                $("#resume_check").focus();
                $("#resume_check").css("color", "red");
                err_resume = false;
                return false;
            }
        }
        // final submission
        $("#validatefrm").click(function() {
            // when submit button clicked, validate
            check_firstname();
            check_middlename();
            check_lastname();
            check_dob();
            check_email();
            check_ssn();
            check_visa();
            check_Experience();
            check_location();
            check_mb_phone();
            check_hm_phone();
            check_resume();
            check_skills();
            // check if error occured | True <=> to return true/ submit | false <=> stay on same form, error occured
            if ((err_firstname == true) && (err_middlename == true) && (err_lastname == true) && (
                    err_dob == true) && (err_email == true) && (err_ssn == true) && (err_visa ==
                    true) && (err_Experience == true) && (err_city == true) && (err_mob_ph == true) && (
                    err_home_ph == true) && (err_resume == true) &&) {
                $('.menun').toggle("slide");
                return true;
            } else {
                return false;
            }
        });


        $("#tags").blur(function() {
            var skill = document.getElementById("tags").value;
            if (skill == "") {
                $("#skill_check").show()
                err_skills = false;
            } else {
                $("#skill_check").hide()
                check_skills();
                err_skills = true;
            }

        });

        function check_skills() {

            // var ch=$('#Result').val();
            var ch = document.getElementById("Result").value;
            if (ch == "") {
                err_skills = false;
                $('#skills_check').show();
            } else {
                err_skills = true;
                $('#skills_check').hide();
            }
        }
        $("#validatefrm_submit").click(function() {
            var skill = document.getElementById("tags").value;
            if (skill == "") {
                $("#skill_check").show()
                err_skills = false;
            } else {
                err_skills = true;
                check_skills();
            }
            if (err_skills == false) {
                return false;
            } else {
                return true;
            }
        });
    });
</script>

<!-- Validation of Education Details -->
<script>
    $(document).ready(function() {
        $("#education_check").hide();
        var err_education = true;
        function check_education() {

            var degree_val = $("#degree").val();
            var subject_val = $("#subject").val();
            var institute_val = $("#institute").val();
            var city_val = $("#edu_city").val();
            var country_val = $("#edu_country").val();
            var completion_val = $("#completion").val();

            if ((degree_val == "") || (subject_val == "") || (institute_val == "") || (city_val == "") || (
                    country_val == "") || (completion_val == "")) {
                $("#education_check").show();
                $("#education_check").focus();
                $("#education_check").css("color", "red");
                err_education = false;
                return false;
            } else {
                $("#education_check").hide();
            }
        }
        $("#edu_validatefrm").click(function() {
            err_education = true;
            check_education();
            if (err_education == true) {
                $('.menus').show("slide");
                return true;
            } else {
                return false;
            }
        });
    });
</script>

<!-- Validation of Experience Details -->
<script>
    $(document).ready(function() {
        $("#experience_check").hide();
        var err_experience = true;
        $("#exp_validatefrm").click(function() {
            check_experience();
        });

        function check_experience() {
            var job_val = $("#job_title").val();
            var comp_val = $("#company_name").val();
            var city_val = $("#exp_city").val();
            var country_val = $("#exp_country").val();
            var start_date_val = $("#start_date").val();
            var end_date_val = $("#end_date").val();

            if ((job_val == "") || (comp_val == "") || (city_val == "") || (country_val == "") || (
                    start_date_val == "") || (end_date_val == "")) {
                $("#experience_check").show();
                $("#experience_check").focus();
                $("#experience_check").css("color", "red");
                err_experience = false;
                return false;
            } else {
                $("#experience_check").hide();
            }
        }

        function val_date() {
            var dob_val = $("#start_date").val();
            var dob_var = new Date(dob_val);
            var dob_val_day = dob_var.getDate();
            var dob_val_month = dob_var.getMonth() + 1;
            var dob_val_year = dob_var.getFullYear();
            if (dob_val == "" || dob_val == null) {
                $("#check_date").show();
                $("#check_date").focus();
                $("#check_date").css("color", "red");
                err_start_date = false;
            } else {
                err_start_date = true;
                $("#check_date").hide();

            }
        }


        function val_last() {
            var dob_val = $("#end_date").val();
            var dob_var = new Date(dob_val);
            var dob_val_day = dob_var.getDate();
            var dob_val_month = dob_var.getMonth() + 1;
            var dob_val_year = dob_var.getFullYear();
            if (dob_val == "" || dob_val == null) {
                $("#check_date1").show();
                $("#check_date1").focus();
                $("#check_date1").css("color", "red");
                err_start_date1 = false;
            } else {
                err_start_date1 = true;
                $("#check_date1").hide();

            }
        }
        $("#exp_validatefrm").click(function() {
            err_experience = true;
            err_start_date = true;
            err_start_date1 = true;
            check_experience();
            val_date();
            val_last();
            if ((err_experience == true) && (err_start_date == true) && (err_start_date1 == true)) {
                $('.menua').toggle("slide");
                return true;
            } else {
                return false;
            }
        });
    });
</script>

<script type="text/javascript">
    $("#country").on("change", function(e) {
        console.log(e);
        $('#state_text').empty();
        // $('#city').empty();
        var country_id = e.target.value;
        console.log(country_id);
        $.ajax({
            type: 'get',
            url: '{{url("employer/post_new_job/post_job/state/")}}' + "/" + country_id,
            success: function(data) {
                console.log(data);
                $.each(data, function(index, value) {
                    $('#state_text').append("<option value=" + '"' + value.state_id + '"' +
                        "selected>" + value.state_name + "</option>");
                    console.log(value.state_id);
                });
            },
            error: function(data) {
                console.log(data);
            }

        });

    });
    $('#state_text').on('change', function(e) {
        console.log(e);
        $('#city').empty();
        var state_id = e.target.value;
        console.log(state_id);
        $.ajax({
            type: 'get',
            url: '{{url("employer/post_new_job/post_job/city/")}}' + "/" + state_id,
            success: function(data) {
                console.log(data);

                $.each(data, function(index, value) {
                    $('#city').append("<option value=" + '"' + value.city_id + '"' +
                        "selected>" + value.city_name + "</option>");
                });

            },
            error: function(data) {
                console.log(data);
            }
        });
    });
</script>
<script>
    function mycity() {
        var checkBox = document.getElementById("myCheck");
        if (checkBox.checked == true) {
            $('#select_city').css('display', 'none');
            $('#textCity').css('display', 'block');
            $('#city_label').css('display', 'none')
            // city2.style.display = "block";
            // city.style.display = "none";
        } else {
            $('#select_city').css('display', 'block');
            $('#textCity').css('display', 'none');
            $('#city_label').css('display', 'block')
        }
    }
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
<script type="text/javascript">
    $(function() {
        $('.date-picker').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'm-yy',
            onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    });
    $(function() {
        $('.date-picker1').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'm-yy',
            onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    });
</script>
</body>

</html>