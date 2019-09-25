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
    width: 81%;
    background: #fff;
}
textarea[class="form-control"]{
    border:1px solid #bdbcbc;
    background: #fff;
    width: 84%;
}
#wrapper {
    overflow-y: scroll;
    width: 100%;

}
.button{
    width: 100%;
    height: 80px;
    background:#dcdcdc;
}
</style>
    <body>       
     <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="card">
                    <div class="card-header" style="  background-color:#317eeb;">
                        <h3 class="card-title" style="color:#fff; font-weight: 200; text-transform: capitalize;">Edit Employee - Sanjiv
                            <button type="button" class="btn btn-success" style="float: right;">HRMS</button></h3>
                    </div>
                  <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Employee Code<span class="red">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" placeholder="Employee Code" id="" name="" type="text"> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Employee ID<span class="red">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" placeholder="Employee ID" id="" name="" type="text"> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Employee Code<span class="red">*</span></label>
                                <div class="col-lg-8">
                                  <select name="name_prefix" id="name_prefix" class="form-control">
                                        <option value="" selected="">Select Prefix</option>
                                        <option value="Mr." Selected="selected">Mr.</option>
                                        <option value="Mrs." >Mrs.</option>
                                        <option value="Ms." >Ms.</option>
                                        <option value="Dr." >Dr.</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="control-label col-lg-4">First Name<span class="red">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" placeholder="First Name" id="" name="" type="text"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Middle Initial<span class="red">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" placeholder="Middle Initial" id="" name="" type="text"> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Last Name <span class="red">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" placeholder="Last Name " id="" name="" type="text"> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Mode of Employment<span class="red">*</span></label>
                                <div class="col-lg-8">
                                    <select name="mode_of_employment" id="mode_of_employment" class="form-control">
                                        <option value="" selected="">Select Mode Of Employement</option>
                                        <option value="Direct" >Direct</option>
                                        <option value="Interview" Selected="selected">Interview</option>
                                        <option value="Other" >Other</option>
                                        <option value="Reference" >Reference</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Role<span class="red">*</span></label>
                                <div class="col-lg-8">
                                   <select name="employee_role" id="employee_role" class="form-control">
                                            <option value="" selected="">Select Employement Role</option>
                                            <option value="Birlasoft" >Birlasoft</option>
                                            <option value="HR Team" selected="selected">HR Team</option>
                                            <option value="Infosys-A" >Infosys-A</option>
                                            <option value="Infosys-O" >Infosys-O</option>
                                            <option value="KPIT" >KPIT</option>
                                            <option value="L & T" >L & T</option>
                                            <option value="Ops Team" >Ops Team</option>
                                            <option value="Persistent" >Persistent</option>
                                            <option value="PSI" >PSI</option>
                                            <option value="Sales Manager" >Sales Manager</option>
                                            <option value="TechM Team" >TechM Team</option>
                                            <option value="Zensar" >Zensar</option>
                                        </select>
                                </div>
                            </div>

                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Email<span class="red">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" placeholder="Email" id="" name="" type="text"> 
                                </div>
                            </div>  
                             <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Department<span class="red">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" placeholder="Department" id="" name="" type="text"> 
                                    </div>
                                </div>

                                 <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Employement Status <span class="red">*</span></label>
                                    <div class="col-lg-8">
                                       <select name="employement_status" id="employement_status" class="form-control">
                                            <option value="" selected="">Select Employement Status</option>
                                            <option value="Contract" >Contract</option>
                                            <option value="Full Time" Selected="selected">Full Time</option>
                                            <option value="Part Time" >Part Time</option>
                                            <option value="Temporary" >Temporary</option>
                                        </select>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Joining Date<span class="red">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" placeholder="Employee Joining Date" value="" maxlength="40"> 
                                    </div>
                                </div>

                                 <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Leaving Date<span class="red">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text"  placeholder="Employee Leaving Date" value="" maxlength="40"> 
                                    </div>
                                </div>

                                 <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Total Years Of Experience<span class="red">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" maxlength="3"> 
                                        &nbsp;&nbsp;<em style="vertical-align: sub;">years</em>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Work Contact No.<span class="red">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" placeholder="Work Contact No." value="" maxlength="40"> 
                                    </div>
                                </div>

                                 <div class="form-group row">
                                <label for="" class="control-label col-lg-4">Employee Status<span class="red">*</span></label>
                                    <div class="col-lg-8">
                                        <select name="emp_status" id="emp_status" class="form-control">
                                            <option value="" selected="">Select Employee Status</option>
                                            <option value="active" Selected="selected">Active</option>
                                            <option value="onboarding" >Onboarding</option>
                                            <option value="terminated" >Terminated</option>
                                            <option value="resigned" >Resigned</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button"><br>
                                <center>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Update Employee</button>
                                </center>
                            </div><!--button-->
                    </div>
                </div> <!-- End row -->                                     
            </div> <!-- content -->
        </div>   
    </div>

     <!-- sample modal content -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title mt-0" id="myModalLabel" style="font-weight:100;">Error: Permission denied</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>You have not permitted to perform this task!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

@include('include.footers')
</body>
</html>