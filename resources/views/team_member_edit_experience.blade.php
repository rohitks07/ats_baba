@include('include.emp_header')
@include('include.emp_leftsidebar')
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
        color: #000;
        background: #e4e4e4;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 0.5px solid #000;
    }

    .table-bordered thead td,
    .table-bordered thead th {
        border-bottom-width: 1px;
    }

</style>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background-color:#317eeb;">
                        <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Edit Experience:
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"
                                style="float: right;">Add Experience</button></h3>
                    </div>

                    <div class="card-body" style="border: 1px #B0B0B0 solid;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                            <?php 
														$start_date=date('m-Y',strtotime($experience->start_date));
														$end_date=date('m-Y',strtotime($experience->end_date));
														?>
                                            <td>{{$start_date}}</td>
                                            <td>{{$end_date}}</td>
                                            <td>{{$experience->city}},{{$experience->country}}</td>
                                            <td>
                                                <a
                                                    href="{{url('employer/team_member_edit_experience_update/'.$id.'/'.$seeker_id)}}"><i
                                                        class="fa fa-pencil" aria-hidden="true"
                                                        style="color: #1ba6df;cursor: pointer;" title="Edit"></i></a>
                                                <a
                                                    href="{{url('employer/team_member_edit_experience_del/'.$id.'/'.$seeker_id)}}" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-trash-o" aria-hidden="true" style="color:#317eeb;"
                                                        title="Delete"></i></a></td>
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
                <h4 class="modal-title mt-0" id="myModalLabel" style="font-weight:100;">Add Experience</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
			</div>
			
            <div class="modal-body">
                <form class="cmxform form-horizontal tasi-form" onsubmit="return validation()"
                    action="{{url('employer/team_member_edit_experience/add')}}" method="post">
                    @csrf()
                    <div class="card-body">


                        <div class="form-group row">
                            <label for="email" class="control-label col-lg-4">Job Title</label>
                            <div class="col-lg-8">
                                <input type="hidden" name="seeker_id" value="{{$exp_seeker_id}}">
                                <input type="text" id="job_title" name="job_title" class="form-control"
                                    placeholder="Job Title" required>
                                <span id="jobtitleerror" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-lg-4">Company Name</label>
                            <div class="col-lg-8">
                                <input type="text" id="company_name" name="company_name" class="form-control"
                                    placeholder="Company Name" required>
                                <span id="companyerror" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirm_password" class="control-label col-lg-4">Country</label>
                            <div class="col-lg-8">
                                <select name="edu_country" id="edu_country" class="form-control" required>
                                    @foreach ($country as $item)
                                    <option value="{{$item->country_name}}">{{$item->country_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirm_password" class="control-label col-lg-4">City</label>
                            <div class="col-lg-8">
                                <input type="text" id="edu_city" name="edu_city" value="" class="form-control"
                                    placeholder="City" required>
                                <span id="cityerror" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirm_password" class="control-label col-lg-4">Start Date</label>
                            <div class="col-lg-8">
                                <input type="month" id="start_date" name="start_date" value="" placeholder="Start Date"
                                    class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirm_password" class="control-label col-lg-4">End Date</label>
                            <div class="col-lg-8">
                                <input type="month" id="end_date" name="end_date" value="Present" placeholder="Present"
                                    class="form-control" required>
                                
                            </div>
                        </div>
                    </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <center><input type="submit" class="btn btn-secondary" onclick="validation()" value="submit"></center>
                

            </div>

            </form>

        </div>
    </div>


</div>

<script type="text/javascript">
    function validation() {
        var jobtitle = document.getElementById('job_title').value;
        var company = document.getElementById('company_name').value;
        var city = document.getElementById('edu_city').value;


        var usercheck = /^[A-Za-z. ]{3,}$/;
        var citycheck = /^[A-Za-z. ]{3,}$/;
        var companycheck = /^[A-Za-z. ]{3,}$/;

        if (usercheck.test(jobtitle)) {
            document.getElementById('jobtitleerror').innerHTML = "";
        } else {
            document.getElementById('jobtitleerror').innerHTML = "please provide valid Job Title";
            return false;
        }

        if (citycheck.test(city)) {
            document.getElementById('cityerror').innerHTML = "";
        } else {
            document.getElementById('cityerror').innerHTML = "please provide valid City Name";
            return false;
        }
        if (companycheck.test(company)) {
            document.getElementById('companyerror').innerHTML = "";
        } else {
            document.getElementById('companyerror').innerHTML = "please provide valid Company Name";
            return false;
        }
    }

</script>
@include('include.emp_footer')

@include('include.emp_footer')

{{-- date picker --}}

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen"
    href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
<script type="text/javascript">
    $(function () {
        $('.date-picker').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'm-yy',
            onClose: function (dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    });
    $(function () {
        $('.date-picker1').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'm-yy',
            onClose: function (dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    });

</script>{{-- date picker --}}



</html>
