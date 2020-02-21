@include('include.emp_header')
@include('include.emp_leftsidebar')

<style>
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

	#wrapper {
		width: 100%;
		overflow-y: scroll;
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
		width: 55%;
		padding: 7px;
		border-radius: 5px;
	}

	textarea {
		border-radius: 5px;
		width: 48%;
	}
</style>


<div id="wrapper">
	<div class="content-page">
		<!-- Start content -->
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="card" style="border: 1px #C0C0C0 solid;">
						<div class="card-header" style="background-color: #317eeb;">
							<h3 class="card-title" style="color:#fff;text-transform: none; font-size:large;">ADD COMPANY</h3>
						</div>
						<div class="card-body">
							<form action="{{url('employer/posted_companies/add')}}" method="post" enctype="multipart/form-data">
								<!--Company Name-->
								<div class="form-group row">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<label for="" class="control-label col-lg-4">Company <span style="color:red;">*</span></label>
									<div class="col-lg-8">
										<input type="text" id="company_name" name="company_name" placeholder="Company Name" required>	
									</div>
									
								</div>
								<!--end of Company Name-->
								<!--Company Short Name-->
								<div class="form-group row">
									<label for="" class="control-label col-lg-4">Short Name <span style="color:red;">*</span></label>
									<div class="col-lg-8">
										<input type="text" id="company_short_name" name="company_short_name" placeholder="Company Short Name" required>
									</div>
								</div>
								<!--end of Company Short Name-->
								<!--Federal ID / EIN-->
								<div class="form-group row">
									<label for="" class="control-label col-lg-4">Federal ID / EIN <span style="color:red;">*</span></label>
									<div class="col-lg-8">
										<input type="text" id="fed_id" name="fed_id" placeholder="00-0000000" required>
									</div>
								</div>
								<!--end of Federal ID / EIN-->
								<!--DUNS-->
								<div class="form-group row">
									<label for="" class="control-label col-lg-4">DUNS <span style="color:red;">*</span></label>
									<div class="col-lg-8">
										<input type="text" id="duns" name="duns" placeholder="00-0000000" required>
									</div>
								</div>
								<!--end of DUNS-->
								<!--Company Logo-->
								<div class="form-group row">
									<label for="" class="control-label col-lg-4">Company Logo<span style="color:red;">*</span></label>
									<div class="col-lg-8">
										<input type="file" class="form-control" name="company_logo" id="company_logo" style="width:55%; background:#fff;" required>
										<span style="color:red;" id="company_logo_error_msg"> </span>
									</div>
								</div>
								<!--Company Logo-->

								<!--HQ Location-->
								<div class="form-group row">
									<label for="address" class="control-label col-lg-4">HQ Location<span style="color:red;">*</span> </label>
									<select name="country_name" id="country" class="form-control" onChange="grab_cities_by_country(this.value);" style="width:11%; border: 1px solid #737373; margin-left: 9px;background:#fff;" required>
										<option value="" selected>Select HQ Location</option>
										@foreach($toReturn['countries'] as $countries)
										<option value="{{$countries['country_name']}}">{{$countries['country_name']}}</option>
										@endforeach
									</select>

									<select name="state" id="state_text" class="form-control" onchange="select_city_by_state(this.options[this.selectedIndex].value)" style="max-width:11%;background:#fff; margin-left: 9px; border: 1px solid #737373;" required>
										<option value="" selected>Select State</option>
										@foreach($toReturn['cities'] as $state)
										<option>{{$state['state']}}</option>
										@endforeach
									</select>

									<input name="city_name" type="text" class="form-control" id="city" placeholder="City" name="city_name" value="" maxlength="150" style="width:12%; margin-left:1em;background:#fff;" required>

								</div>
								<!--end of HQ Location-->
								<!--State of Organization-->
								<div class="form-group row">
									<label class="col-sm-4 control-label">State of Organization <span style="color:red;">*</span></label>
									<div class="col-sm-8">
										<select class="form-control" name="organization_state" style="width:34%; border: 1px solid #737373; background:#fff;" required>
											<option value="" selected>Select State</option>
											@foreach($toReturn['cities'] as $state)
											<option value="{{$state['state']}}">{{$state['state']}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<!--end of State of Organization-->
								<!--Employees-->
								<div class="form-group row">
									<label class="col-sm-4 control-label">Employees<span style="color:red;">*</span></label>
									<div class="col-sm-8">
										<select class="form-control" name="employer" style="width:34%; border: 1px solid #737373; background:#fff;" required>
											<option value="" selected>Select Employees</option>
											<option>10-20</option>
											<option>20-50</option>
											<option>50-100</option>

										</select>
									</div>
								</div>
								<!--end of Employees-->
								<div class="form-group" style="width:100%; height:80px;background:#e4e4e4; z-index: +1;"><br>
									<center><button class="btn btn-info waves-effect waves-light m-b-5" type="submit" onclick="return submitForm()">Add Company</button> </center></a>
								</div>
							</form>
						</div> <!-- card-body -->
					</div> <!-- card -->
				</div> <!-- col -->
			</div> <!-- End row -->
		</div> <!-- container -->
	</div> <!-- content -->
</div>
</div>
<div>
	<!-- END wrapper -->
	@include('include.emp_footer')
	</body>
<script>
	var company_logo_error = true;


	$(document).ready(function(){
        $("#company_logo").change(function(){
            dept_icon_validate();
        });

    });


	 // dept_icon validation
	 function dept_icon_validate(){
        var dept_icon_val = $("#company_logo").val();
        var ext = dept_icon_val.substring(dept_icon_val.lastIndexOf('.') + 1);
        if(ext){
            if(ext !="jpg" && ext!="jpeg" && ext!="png" && ext!="JPEG" && ext!="PNG" && ext!="JPG"){
                company_logo_error=true;
                $("#company_logo").addClass('is-invalid');
                $("#company_logo_error_msg").html("Please Select jpg/jpeg/png/JPEG/PNG/JPG Image Only");
            }
            else{
                company_logo_error=false;
                $("#company_logo").removeClass('is-invalid');
				$("#company_logo_error_msg").html("");
            }
        }
        else{
            company_logo_error=false;
            $("#company_logo").removeClass('is-invalid');
			$("#company_logo_error_msg").html("");
        }
    }


	function submitForm(){
		// alert('sdfsdfds');
		dept_icon_validate();

        if(company_logo_error){ return false; } // error occured
        // else{ $(".custom-loader").show(); return true; } // proceed to submit form data -->
    }
	</script>
</html>