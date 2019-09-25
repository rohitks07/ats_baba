<!DOCTYPE html>
<html lang="en">

@include('layouts.header')
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
		width: 40%;
		float: left;
	}

	label {
		font-weight: 200;
		font-family: inherit;
		font-size: 15px;
	}


	input[type=text] {
		width: 48%;
		padding: 7px;
		border-radius: 5px;
	}

	textarea {
		border-radius: 5px;
		width: 48%;
	}

	.content-page>.content {
		margin-bottom: 60px;
		margin-top: 54px;
		padding: 20px 10px 15px 10px;
	}

	.form-group {
		margin-left: 4px;
	}

	.element {
		background: #F8F8F8;
		width: 100%;
		height: 100%;

	}

	.buttons {
		clear: both;
		margin-top: 10px;
	}

	.fa {
			color: #484a4a;
			font-size: 23px;
			margin-right: 15px;
		}
		.name {
			margin-top: 10px;
		}
		.name input[type="text"] {
			padding: 10px;
			background: #150d0d00;
			border: none;
			border-bottom: 1px solid #9e9c9c;
			outline: none;
			width: 44%;
			color: #210707;
		}
		.name input[type="submit"] {
			padding: 13px 80px;
			background: #a07650;
			border: none;
			outline: none;
			margin:50px 0 0 190px;
			color:#fff;
			transition: 0.5s all;
			-webkit-transition: 0.5s all;
			-moz-transition: 0.5s all;
			-o-transition: 0.5s all;
			-ms-transition: 0.5s all;
			cursor:pointer;
			font-family: 'open sans',sans-serif;
		}
		.name input[type="submit"]:hover{
			background:#000;
		}
		
</style>

<body>
<div class="wrapper" style="background:#fff;">
	<div class="content-page">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="card" style="border: 1px #C0C0C0 solid;">
						<div class="card-header" style="background-color: #317eeb;">
							<h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Customer Detail</h3>
						</div>
						<div class="card-body">
							<h3 style="color:#1ba6df;">Customer Information</h3>
							<hr>
							<!--start of Name-->
							<form action="{{url('customers_actions')}}" method="post" enctype="multipart/form-data">
								@csrf
						<div class="row"> 
								<div class="col-md-6">
									<!--Type-->
									<div class="form-group row" style="margin-left:4px;">
										<label for="name">Type<span style="color:red;">*</span></label>
										<select class="form-control" name="party_type" id="party_type" style="width:25%">
											<option value="--select--">--select--</option>
											<option value="group">Group</option>
											<option value="organisation">Organisation</option>
											<option value="personal">Personal</option>
										</select>
									</div>
									<!--end of Type-->
								</div>
								
								<div class="row" id="personal" style="display:none; width: 51%;" >
									<div class="col-md-12" >
										<p><label for="name">Name.<span style="color:red;">*</span></label></p>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<select class="form-control" name="" id="" style="width:20%; ">
												<option value="--select--">Mr.</option>
												<option value="">Mr.</option>
												<option value="">Mrs.</option>
											</select>
											<input type="text" name="f_name" id="" placeholder="First Name" style="width: 30%; margin-left: 1em;">
											<input type="text" name="l_name" id="" placeholder="Last Name" style="width: 30%; margin-left: 1em;" >
										</div>
									</div>
								</div>
								<div class="row" id="organisation" style="display:none; width: 51%;">
									<div class="col-md-10" style="display: flex;">										
											<label for="name">Oraganisation Name<span style="color:red;">*</span></label>
											<input type="text" name="phone" id="" placeholder="Name" required>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<label for="name">Oraganisation Type<span style="color:red;">*</span></label>
											<select class="form-control" name="" id="" style="width:20%;">
												<option value="--select--">IT</option>
												<option value="">Hardware</option>
												<option value="">Networking</option>
											</select>
											<button type="button" class="btn btn-info" data-toggle="modal" data-target="#organ_type">
												<i class="fa fa-plus" style="font-size:16px;color:#fff;"></i>
											</button>																		
									</div>
								</div><br>
									<!--end of column-->
								
								<div class="row" id="group" style="display:none;  width: 51%;">
									<div class="col-md-12">										
											<label for="name" >Group Name<span style="color:red;">*</span></label>
											<input type="text" name="group_name"  id ="group_name">				
								</div>
							</div>	
						</div>					
								
								<div class="modal fade" id="organ_type" role="dialog">
									<form method="post">
									<div class="modal-dialog">
										  <!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
											 
											  <h4 class="modal-title">Add Oraganition Type</h4>
											   <button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
											  <!--Product Category-->
											
											<div class="form-group row" style="margin-left:4px;">
												<label for="name"> Oraganition</label>
												<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
												<input type="text" name="oraganisation_type_data" id="category_data">
											</div>

												<!--end of Category-->	
										</div>
										<div class="modal-footer">
											<center><button type="button" class="btn btn-info" data-dismiss="modal"  id="category_btn" >Submit</button></center>
										</div>									
								   </div>	  
							   </div>
							</div>						
						<div class="row">
							<div class="col-md-6">
								<!--Phone+-->										
									<div class="form-group row">
										<label for="name">Phone<span style="color:red;">*</span></label>
										<input type="text" name="phone" id="" placeholder="Phone" required>
									</div>
									<!--end of Phone-->
								</div><!--end of column-->									
							
							<div class="col-md-6">
								<!--Email id-->
									<div class="form-group row"style="margin-right: 3%;">
										<label for="name">Email Id.<span style="color:red;">*</span></label>
										<input type="text" name="email" id="" placeholder="Email Id.">
									</div>										
								</div><!--end of column-->									
							</div><!--end of row-->
							</form>
						<hr>
						<div class="row">
						<div class="col-md-12">
										<div class="card card-border card-primary">
											<div class="card-header">
											</div>
											<div class="card-body">
											<div class="row">
												<div class="col-md-6">
												<!--Customer Relationship-->
												<p><strong>Customer Relationship :-</strong></p>
													<div class="form-group row">
														<label for="name">Customer Type <span style="color:red;">*</span></label>
														<select class="form-control" name="" id="" style="width:43%">
															<option value="--select--">--select--</option>
															<option value="">Employee</option>
															<option value="">Contact</option>
														</select>											
													</div>		
												</div>												
												<div class="col-md-6"><br><br>
												<!--Customer Relationship-->
												
													<div class="form-group row">
														<label for="name">Customer Name<span style="color:red;">*</span></label>
														<input type="text" name="" id="" placeholder="Customer Name">
													</div>	
												</div>
											</div>											
										</div>	
									</div>										
									</div>
									</div>

								<!--start of checkbox-->
								<div class="row">
									<div class="col-md-6">
										<div class="card card-border card-primary">
											<div class="card-header">

											</div>
											<div class="card-body">
												<p><strong>Contact Point :</strong>	&nbsp;&nbsp;										
												<button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Add Address</button></p>			
											</div>
										</div>
									</div>
									
									
									
									<div class="col-md-6">
										<div class="card card-border card-primary">
											<div class="card-header">
											</div>
											<div class="card-body">

												<p><strong>Location Type:	</strong>&nbsp;&nbsp;
												 <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal">Location</button>
												</p>
												
										<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog" style="width:55%">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0" id="custom-width-modalLabel">Add Location </h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                <div class="modal-body">
														<div class="form-group row">
															<label for="name">Location Type<span style="color:red;">*</span></label>
																<select class="form-control" name="" id="" style="width:43%">
																	<option value="--select--">Branch</option>
																	<option value="">HQ</option>
																	<option value="">Extention</option>
																	<option value="">Satelite</option>
																</select>																	
														</div>													
													<div class="name">													
														<div class="control-groups ">	
																													
																<input type="text" name=""  placeholder="Address 1" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<input type="text" name=""  placeholder="Address 1" required="">																																																			 
														</div>
													</div><!--name -->
													<div class="name">													
														<div class="control-groups">	
																												
																<input type="text" name=""  placeholder="City" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<input type="text" name=""  placeholder="Near By Location" required="">																																																			 
														</div>
													</div><!--name -->
														<br>
														
													<div class="checkbox checkbox-primary">	
														<label for="checkbox2">
															Shipping Address
														</label>
														<input id="checkbox2" type="checkbox" checked="checked">
														</div>
														
													<div class="checkbox checkbox-primary">	
														<label for="checkbox2">
															Billing Address
														</label>
														<input id="checkbox2" type="checkbox" checked="checked">
														</div>														
													</div><!--modal-body-->
																	
                                                       
                                              
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Submit</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
										
									</div>
								</div>
							</div>
						</div>								
						        
				
				
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group row" style="margin-left:1%;">
									<label for="name">Discription/Optional</label>
									<textarea cols="40" rows="4" name="description" id="textarea" style="width:96%;"></textarea>
								</div>
							</div>
						</div>
						<!--button-->
						<div class="form-group">
							<div class="col-md-12"><br>
								<center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="background: #1ba6df !important;">
							</div>
						</div>
						</form>

					</div> <!-- card-body -->
				</div> <!-- card -->
				<!-- Large modal -->		 
		          <!--  Modal content for the above example -->
                       <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                           <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-0" id="myLargeModalLabel">Create New Contact</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
										</div>		
											<div class="modal-body">											
													<div class="row"> 					    							
										                <div class="card-body">	
										                  	<div class="col-md-12" > 																										
										                		<div id="email_con" >
																	<div class="form-group row delete_row">
																		<label for="address" class="control-label col-lg-12"> </label>
																			<div class="name" style="width: 95%">

																				<div class="control-groups input-group">							 
																					<input type="text" name=""  placeholder="Official Email" required="" >&nbsp;&nbsp;&nbsp;
																						<select class="form-control" name=""    style=" background: #fff;margin-right: 1%;">
																							<option value="--select--">--select--</option>
																							<option value=""></option>
																							<option value=""></option>
																							<option value=""></option>
																						</select>	
																					<p><button type="button" id="btnAdd" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
																				</div>											
																			</div>                                    											
																	   </div>	<!--form group row close-->	
																	</div>	
															
																			<div id="exp_detail" >		
																				<div class="name" style="width: 95%">	
																					<div class="control-groupss input-group">																			
																						<input type="text" name=""  placeholder="Mobile" required="">&nbsp;&nbsp;&nbsp;
																						<select class="form-control" name=""  style=" background: #fff;">
																							<option value="--select--">--select--</option>
																							<option value=""></option>
																							<option value=""></option>
																							<option value=""></option>
																						</select>	
																						<p><button type="button" id="btnAdd_Exp" class="btn btn-info" style="    margin-left: 30%;"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
																					</div>
																				</div>
																										
																			</div><!-- GROUP ROW-->									
																		</div><!-- EXP ID-->
																	</div><!-- COL-->
																</div><!-- form group-->
															</div>	<!-- form block -->						
																																												
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
														<button type="button" class="btn btn-info" style="margin-right: 5%;">Save</button>
													</div>												
												</div><!--modal-body-->													
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog --> 
									</div><!-- /.modal -->							
								</div> <!-- container -->
							</div> <!-- content -->
						</div>
					</div>
				</div>
			</div>


	<!-- END wrapper -->

	@include('layouts.footer')
	<script>
$( "#party_type" )
  .change(function () {
    var str = "";
    $( "#party_type option:selected" ).each(function() {
      str += $( this ).val().trim();
    });

 
    	
    	var group='group';
    	var organisation='organisation';
    	var personal='personal';
    if(str===group)
    {
    	$("#group").css({'display':'block'});
    	$("#organisation").css({'display':'none'});
    	$('#personal').css({'display':'none'});

    }
    if(str===organisation)
    {
    	$("#group").css({'display':'none'});
    	$("#organisation").css({'display':'block'});
    	$('#personal').css({'display':'none'});
    }
    if(str===personal) {
    	$("#group").css({'display':'none'});
    	$("#organisation").css({'display':'none'});
    	$('#personal').css({'display':'block'});
    }
    
  })
  .change();
</script>

<script>
$(document).ready(function(){
	var i=1;
	$('#btnAdd').click(function(){
         i++;				
					            var data = `
					                <div class="form-group row delete_row" >								
										<label for="address" class="control-label col-lg-12"> </label>													
						   	<div class="name" style="width: 95%">	
									<div class="control-groups input-group">												 
										<input type="text" name=""  placeholder="Official Email" required="">&nbsp;&nbsp;&nbsp;
										<select class="form-control" name=""  style=" background: #fff;margin-right: 2%;">
											<option value="--select--">--select--</option>
											<option value=""></option>
											<option value=""></option>
											<option value=""></option>
										</select>	
										<button type="button" id="btnRemove" class="btn btn-info btn_remove"><i class="fa fa-trash" aria-hidden="true"></i></button>																		
									</div>											
								</div>							
							        </div> `;
			$('#email_con').append(data);
	});	
});
$(document).on('click', '.btn_remove', function() {
    $(this).closest('.delete_row').remove();
});
</script>
                                            


<!--dynamic clone for EXPERIANCE -->	
<script>
$(document).ready(function(){
	var i=1;
	$('#btnAdd_Exp').click(function(){
        i++;				
            var data2=`<div class="form-group row delete_exp">
            	<label for="address" class="control-label col-lg-12"> </label>													
						   	<div class="name" style="width: 95%">	
									<div class="control-groups input-group">												 
										<input type="text" name=""  placeholder="Mobile" required="">&nbsp;&nbsp;&nbsp;
										<select class="form-control" name=""  style=" background: #fff;margin-right: 2%;">
											<option value="--select--">--select--</option>
											<option value=""></option>
											<option value=""></option>
											<option value=""></option>
										</select>	
										<button type="button" id="btnRemove" class="btn btn-info btn_remove"><i class="fa fa-trash" aria-hidden="true"></i></button>																		
									</div>											
								</div>	 						   
																	  
						 </div>`;
		 $('#exp_detail').append(data2);
	});	
});
$(document).on('click', '.btn_remove', function() {
    $(this).closest('.delete_exp').remove();
});	 
</script>
<!--close dynamic clone for EXPERIANCE -->
</body>

<!-- Mirrored from coderthemes.com/moltran/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:40 GMT -->

</html>