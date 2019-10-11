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
width: 58%;
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
#wrapper{
	width: 100%;
	overflow-y: scroll;
}
.buttons{
	width:100%;
	height:80px;
	background:#e0e0e0;
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
<div id="wrapper">
    <div class="content-page">
        <div class="content">
        <form class="cmxform form-horizontal tasi-form" id="signupForm" action="{{url('employer/submit_candidate')}}"   method="post"  enctype="multipart/form-data" >
        @csrf()
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="  background-color:#317eeb;">
                                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large;font-weight:100;">Edit Details:-{{$toReturn['personal']->first}}</h3></div>
                                <input type="hidden" name="seeker_name" value="{{$toReturn['personal']->first}}">
                                <input type="hidden" name="seeker_email" value="{{$toReturn['personal']->email}}">
                                <input type="hidden" name="seeker_city" value="{{$toReturn['personal']->city}}">
                                <input type="hidden" name="seeker_visa" value="{{$toReturn['personal']->visa}}">
                                <input type="hidden" name="seeker_id" value="{{$toReturn['personal']->id}}">
                            <div class="card-body">
                                <div class="form">
                                        <div class="form-group row">
                                            <label for=""  class="control-label col-lg-4">Mobile Phone <span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input name="mobile_number" type="tel" class="form-control" id="mobile_number"   maxlength="12" required style="max-width:50%; border: 1px solid #bbb8b8;" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="address" class="control-label col-lg-4">Job Type <span style="color:red;">*</span></label>
                                          <select name="" id="type_of_job" class="form-control" onchange="fulltime()" style="width:33%; border: 1px solid #bbb8b8;margin-left: 9px;" required>
                                              <option value="">Select Job Type</option>
                                              <option value="Full Time">Full Time</option>
                                              <option value="Contract">Contract</option>
                                              <option value="Contract-to-Hire">Contract-to-Hire</option>
                                              <option value="Part Time">Part Time</option>
                                          </select>
                                        </div>
                                        <!--Job Type-->
                                                       
                                         <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Salary/Pay Rate <span class="red">*</span></label>
                                            <div class="col-lg-8">
                                               <!-- <span><input name="pay_min" type="text" class="form-control" id="pay_min"  min="0" style="width: 29%; float:left;"/></span>
							                  <span><input name="pay_max" type="text" class="form-control" id="pay_max" min="0" style="width: 29%; float:left;"/></span> -->
                                                <select name="payment_range" id="select_ranage" class="form-control" style="max-width:50%; border: 1px solid #bbb8b8;">
                                                                <option value=""> SELECT MONTHLY RANGE</option>
                                                                <option value="15k-20k">15k - 20k</option>
                                                                <option value="20k-25k">20k - 25k</option>
                                                                <option value="25k-30k">25k - 30k</option>
                                                                <option value="30k-35k">30k - 35k</option>
                                                                <option value="35k-40k">35k - 40k</option>
                                                                <option value="40k-45k">40k - 45k</option>
                                                                <option value="45k-50k">45k - 50k</option>
                                                                <option value="50k-55k">50k - 55k</option>
                                                                <option value="55k-60k">55k - 60k</option>
                                                                <option value="$20-$25">$20 - $25</option>
                                                                <option value="$25-$30">$25 - $30</option>
                                                                <option value="$30-$35">$30 - $35</option>
                                                                <option value="$35-$40">$35 - $40</option>
                                                                <option value="$40-$45">$40 - $45</option>
                                                                <option value="$45-$50">$45 - $50</option>
                                                                <option value="$50-$55">$50 - $55</option>
                                                                <!--<option value="$55-$60">$55 - $60</option>-->
                                                                <!--<option value="$60-$65">$60 - $65</option>-->
                                                                <!--<option value="$65-$70">$65 - $70</option>-->
                                                                
                                                                <option value="DOE">(DOE)Depends upon Experience</option>
                                                </select>
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for=""  class="control-label col-lg-4">Upload Resume<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                  <input type="file" class="form-control" name="updated_resume" id="updated_resume"   required style="width: 50%;">
              									  <p>Upload files only in .doc, .docx or .pdf format with maximum size of 6 MB.</p>
                                            </div>
                                        </div>
	                            </div>
	                        </div> <!-- card-body -->
	                    </div> <!-- card -->
	                </div> <!-- col -->
	            </div> <!-- End row --> 
	            <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header" style="background-color:#317eeb;">
                                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large; font-weight:100;">Published Jobs</h3>
                                 <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="float: right;">Add a Item</button>-->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Code</th>
                                                    <th>Title</th>
                                                    <th>Client</th>
                                                    <th>Location</th>
                                                    <th>Nos</th>
                                                    <th>Type</th>
                                                    <th>Publish Dt.</th>
                                                    <th>Closing Dt.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($toReturn['job_list'] as $job_list)
                                                <tr>
                                                    <td><input type="radio" name="job_id" value="{{$job_list['ID']}}"></td>
                                                    <td>{{$job_list['job_code']}}</td>
                                                    <td>{{$job_list['job_title']}}</td>
                                                    <td>{{$job_list['job_title']}}</td>
                                                    <td>{{$job_list['country']}}</td>
                                                    <td>{{$job_list['vacancies']}}</td>
                                                    <td>{{$job_list['job_mode']}}</td>
                                                    <td>{{$job_list['dated']}}</td>
                                                    <td>{{$job_list['last_date']}}</td>
                                               
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="buttons"><br>
                             		<center><button type="submit" class="btn btn-info">Submit</button></center>
                         		</div>
                            </div>
                        </div>
                    </div>
                
            </div> <!-- End Row -->                                    
        </div> <!-- content --> 
    </div>
    </form>
</div> 
@include('include.footers')
<script type="text/javascript">
    function fulltime(){
        alert('hrllo');
        temp = document.getElementById('type_of_job').value;
        // alert(temp);
        if (temp == 'Full Time'){
            // alert('gfg');
             var x = document.getElementById("select_ranage").options[1].disabled = false;
             var x = document.getElementById("select_ranage").options[2].disabled = false;
             var x = document.getElementById("select_ranage").options[3].disabled = false;
             var x = document.getElementById("select_ranage").options[4].disabled = false;
             var x = document.getElementById("select_ranage").options[5].disabled = false;
             var x = document.getElementById("select_ranage").options[6].disabled = false;
             var x = document.getElementById("select_ranage").options[7].disabled = false;            
             var x = document.getElementById("select_ranage").options[8].disabled = false;
             var x = document.getElementById("select_ranage").options[9].disabled = false;
             var x = document.getElementById("select_ranage").options[10].disabled = true;
             var x = document.getElementById("select_ranage").options[11].disabled = true;
             var x = document.getElementById("select_ranage").options[12].disabled = true;
             var x = document.getElementById("select_ranage").options[13].disabled = true;
             var x = document.getElementById("select_ranage").options[14].disabled = true;
             var x = document.getElementById("select_ranage").options[15].disabled = true;
             var x = document.getElementById("select_ranage").options[16].disabled = true;
            
        }
        else if (temp == 'Contract'){
            // alert('gfg');
             var x = document.getElementById("select_ranage").options[1].disabled = true;
             var x = document.getElementById("select_ranage").options[2].disabled = true;
             var x = document.getElementById("select_ranage").options[3].disabled = true;
             var x = document.getElementById("select_ranage").options[4].disabled = true;
             var x = document.getElementById("select_ranage").options[5].disabled = true;
             var x = document.getElementById("select_ranage").options[6].disabled = true;
             var x = document.getElementById("select_ranage").options[7].disabled = true;          
             var x = document.getElementById("select_ranage").options[8].disabled = true;
             var x = document.getElementById("select_ranage").options[9].disabled = true;
             var x = document.getElementById("select_ranage").options[10].disabled = false;
             var x = document.getElementById("select_ranage").options[11].disabled = false;
             var x = document.getElementById("select_ranage").options[12].disabled = false;
             var x = document.getElementById("select_ranage").options[13].disabled = false;
             var x = document.getElementById("select_ranage").options[14].disabled = false;
             var x = document.getElementById("select_ranage").options[15].disabled = false;
             var x = document.getElementById("select_ranage").options[16].disabled = false;
        }
        else{
             var x = document.getElementById("select_ranage").options[1].disabled = false;
             var x = document.getElementById("select_ranage").options[2].disabled = false;
             var x = document.getElementById("select_ranage").options[3].disabled = false;
             var x = document.getElementById("select_ranage").options[4].disabled = false;
             var x = document.getElementById("select_ranage").options[5].disabled = false;
             var x = document.getElementById("select_ranage").options[6].disabled = false;
             var x = document.getElementById("select_ranage").options[7].disabled = false;
             var x = document.getElementById("select_ranage").options[8].disabled = false;
             var x = document.getElementById("select_ranage").options[9].disabled = false;
             var x = document.getElementById("select_ranage").options[10].disabled = false;
             var x = document.getElementById("select_ranage").options[11].disabled = false;
             var x = document.getElementById("select_ranage").options[12].disabled = false;
             var x = document.getElementById("select_ranage").options[13].disabled = false;
             var x = document.getElementById("select_ranage").options[14].disabled = false;
             var x = document.getElementById("select_ranage").options[15].disabled = false;
             var x = document.getElementById("select_ranage").options[16].disabled = false;
        }
    }
</script>
<script>
    function phoneMask() { 
    var num = $(this).val().replace(/\D/g,''); 
  if($(this).val(num.substring(0,3)+ '-' + num.substring(3,6)  + '-' + num.substring(6,10)) ) 
  {

  }
//   else
//   {
	   
// 	$("#home_ph_check").show();
//   }
}
$('#mobile_number').keyup(phoneMask);
</script>
</body>
<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->
</html>