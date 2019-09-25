<!DOCTYPE html>
<html lang="en">
    
   @include('layouts.header')
		<style>
		
		input[type=text], textarea,  {
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		-webkit-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
		outline: none;
		padding: 15px 71px 1px 4px;
		margin: 5px 1px 3px 0px;
		border: 1px solid #DDDDDD;
		
	}

		input[type=text]:focus, textarea:focus {
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

		
			input[type=text]{
			width: 48%;
			padding: 7px;
			border-radius:5px;
		}
		textarea{
			border-radius:5px;
			width: 48%;
		}
		.content-page > .content {
			margin-bottom: 60px;
			margin-top: 54px;
			padding: 20px 10px 15px 10px;
		}
		.form-group{
			margin-left:4px;
		}
		.element {
			  background:#F8F8F8;
			  width: 100%;
			  height: 100%;
			  
			}
			.buttons {
			  clear: both;
			  margin-top: 10px;
			}
			.form-control{
				width:17%;
				margin-left:0em;
				border:#A9A9A9 1px solid;
				
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
            <div class="content-page">             
                <div class="content">                          
                  <div class="row"> 							
                    <div class="col-md-12">
                        <div class="card" style="border: 1px #C0C0C0 solid;">
                            <div class="card-header" style="background-color: #317eeb;">
		                     <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Customer Detail</h3></div>
                        <div class="card-body">
							   <h3>Customer Information</h3>
							   <hr>
							   <!--start of Name-->
				
							<div class="row">
						
								<div class="col-md-2">
								
							 
								<p><label for="name">Name.<span style="color:red;">*</span></label></p>
								
								
								</div><!--end of column-->
									
								<div class="col-md-10">
								
											<!--Email id-->	   
									<div class="form-group row" style="margin-left: 4%;">
									<select class="form-control" name="" id="" style="width:10%">
											<option value="--select--">Mr.</option>
											<option value="" >Mr.</option>
											<option value="" >Mrs.</option>
										  </select>
										
										<input type="text" name="" id="" placeholder="First Name" style="width:20%; margin-left:1em;">
										<input type="text" name="" id="" placeholder="Last Name" style="width:20%; margin-left:1em;">
										<input type="text" name="" id="" placeholder="Suffix" style="width:20%; margin-left:1em;">
									</div>
								<!--end of Email-->				
						</div><!--end of column-->								
					</div><!--end of row-->
				
				
<!-- Large modal --><br>
         <center>
			<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+</button>
		 </center>
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
														<div class="col-md-12">
															<div class="name">													
																<div class="control-groups after-add-more">	
																	<i class="fa fa-envelope" aria-hidden="true"></i>														
																		<input type="text" name="addmore[]"  placeholder="Home" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																		<input type="text" name="addmore[]"  placeholder="Work" required="">																	
																			<button class="btn btn-info add-more" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>																	 
																		</div>
																	</div><!--col -->														
																		 <!-- Copy Fields -->
																			<div class="copy" style="display:none">
																			<div class="name">		
																			  <div class="control-groups input-group" style="margin-top:10px;margin-left: 3%;">
																			 
																				<input type="text" name="addmore[]"  placeholder="Home" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="text" name="addmore[]"  placeholder="Work" required="">																		
																				  <button class="btn btn-danger remove" type="button"><i class="fa fa-window-close" aria-hidden="true"></i></button>																	
																			  </div>
																			  </div>
																			</div>
																	
																	 </div><!--end of col-->
																	<div class="col-md-12">
																		<div class="name">													
																			<div class="control-groups after-add-mores">	
																					<i class="fa fa-phone" aria-hidden="true"></i>														
																					<input type="text" name="addmores[]"  placeholder="Mobile" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																					<input type="text" name="addmores[]"  placeholder="Label" required="">																	
																						<button class="btn btn-info add-mores" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>																	 
																					</div>
																				</div><!--col -->														
																					 <!-- Copy Fields -->
																						<div class="copys" style="display:none">
																						<div class="name">		
																						  <div class="control-groupss input-group" style="margin-top:10px;     margin-left: 3%;">
																					 
																							<input type="text" name="addmores[]"  placeholder="Mobile" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																							<input type="text" name="addmores[]"  placeholder="Label" required="">																		
																							  <button class="btn btn-danger remove" type="button" ><i class="fa fa-window-close" aria-hidden="true"></i></button>																	
																						  </div>
																						  </div>
																						</div>
																				
																				 </div><!--end of col-->
																				<div class="col-md-12">
																					<div class="name">																																	
																						<i class="fa fa-sticky-note-o"></i>													
																						<input type="text" name=""  placeholder="Note" required="" style="width:92%;">																																																																							 
																					</div>
																				</div><!--col -->	
																																							
																		</div><!--row-->
																			<div class="modal-footer">
																				<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
																				<button type="button" class="btn btn-info">Save</button>
																			</div>
																			
																		</div><!--modal-body-->													
																	</div><!-- /.modal-content -->
																</div><!-- /.modal-dialog --> 
															</div><!-- /.modal -->	
													<!--end of modal-->				
				
				
				<!--end of checkbox-->	
							   
							   
							   
							   <hr>
							<div class="row">
						
								<div class="col-md-6">
								<form action="#" method="post">
							  <!--Type-->	   						                                  
										<div class="form-group row" style="margin-left:4px;">
										<label for="name">Type<span style="color:red;">*</span></label>											
											 <select class="form-control" name="" id="" style="width:48%">
											<option value="--select--" >--select--</option>
											<option value="" >Group</option>
											<option value="" >Organisation</option>
											<option value="" >Personal</option>
										  </select>
										  
									</div>									
								<!--end of Type-->
								 <!--Phone-->	   
									<div class="form-group row">
										<label for="name">Phone<span style="color:red;">*</span></label>
										<input type="text" name="" id="" placeholder="Phone"  required >
									</div>
								<!--end of Phone-->
								
								
								
								</div><!--end of column-->
									
								<div class="col-md-6">
								
								<!--Email id-->	   
									<div class="form-group row">
										<label for="name">Email Id.<span style="color:red;">*</span></label>
										<input type="text" name="" id="" placeholder="Email Id.">
									</div>
								<!--end of Email-->
								<!--Mailing Address-->	   
									<div class="form-group row">
										<label for="name">Mailing Address<span style="color:red;">*</span></label>
										<input type="text" name="" id="" placeholder="Mailing Address">
									</div>
								<!--end of Mailing Address-->								
						</div><!--end of column-->								
					</div><!--end of row-->
				<hr>
			
			<!--start of checkbox-->
						<div class="row">							     
							  <div class="col-lg-12">
                                <div class="card card-border card-primary">
                                    <div class="card-header"> 
                                        
                                    </div> 
                                    <div class="card-body">                                     
                                        <p><strong>Contact Type :</strong></p>
                                        <div class="checkbox form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label for="inlineCheckbox1"  style="width:100%"> Phone </label>
                                        </div>
                                       
                                        <div class="checkbox form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label for="inlineCheckbox3"  style="width:100%"> Fax </label>
                                        </div>
										<div class="checkbox form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label for="inlineCheckbox3"  style="width:100%"> Email </label>
                                        </div>
										<div class="checkbox form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label for="inlineCheckbox3"  style="width:100%"> Skype </label>
                                        </div>

                                    </div> 
                                </div>
                            </div>		
						</div><!--end of row-->
				<!--end of checkbox-->	
				<hr>
				
	<!--start of customer Relationshion-->

			
					<div class="row">							     
						<div class="col-md-6">
								<div class="card card-border card-primary">
                                    <div class="card-header"> 
                                    </div> 
                                    <div class="card-body"> 
								<!--Customer Relationship-->	   						                                  
										<div class="form-group row" style="margin-left:4px;">
										<label for="name">Customer Relationship<span style="color:red;">*</span></label>											
											 <select class="form-control" name="" id="" style="width:50%">
											<option value="--select--" >--select--</option>
											<option value="" >Contact</option>
											<option value="" >Employee </option>
											
										  </select>
										  
									</div>									
								
								</div><!--end of column-->	
						</div><!--end of column-->
						</div><!--end of column-->
						<!--end of Customer Relationship-->		
								
					
                            <div class="col-md-6">
                                <div class="card card-border card-primary">
                                    <div class="card-header"> 
                                    </div> 
                                    <div class="card-body"> 
                                     
                                        <p>Location Type:</p>
                                        <div class="checkbox form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label for="inlineCheckbox1" style="width:100%"> Branch</label>
                                        </div>
                                       
                                        <div class="checkbox form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label for="inlineCheckbox3" style="width:100%">HQ</label>
                                        </div>
										
                                        <div class="checkbox form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label for="inlineCheckbox3" style="width:100%"> Extension </label>
                                        </div>
										<div class="checkbox form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label for="inlineCheckbox3" style="width:100%"> Salelite</label>
                                        </div>

                                    </div> 
                                </div>
                            </div>

							</div><!--end of row-->
							</div>
							<hr>









			
			<div class="row">
				<div class="col-md-6">
					<h4 style=" margin-left:1em;">Living Location</h4>
						<hr>
					</div>
						<div class="col-md-6">
						<h4 style=" margin-left:1em;">Shipping Location</h4>
							<hr>
						</div>								
					</div>
								<div class="row">							     
								<div class="col-md-6">
								<!--address-->
								<div class="form-group row" style="margin-left:4px;">
									<label for="name" style="margin-left:1em;">Address 1 <span style="color:red;">*</span></label>
									<input type="text" name="address_1" id="Address_1" placeholder="Address" required >
								</div>
									<!--address-->
								<div class="form-group row" style="margin-left:4px;">
									<label for="name" style="margin-left:1em;"> </label>
									
								    <!--city-->	
									<select class="form-control" name="" id="" style="width:15%;">
											<option value="--select--">City</option>											
										  </select>
									<!--city-->			  
									 <!--State-->	
									<select class="form-control" name="" id="" style="width:15%; margin-left:1%;">
											<option value="--select--">State</option>											
										  </select>
									<!--State-->	
									 <!--Country-->	
									<select class="form-control" name="" id="" style="width:15%; margin-left:1%;">
											<option value="--select--">Country</option>											
										  </select>
									<!--Country-->	
								</div>
								
								
								<div class="form-group row" style="margin-left:4px;">
									<label for="name" style="margin-left:1em;">PIN<span style="color:red;">*</span></label>
									<input type="text" name="pin1" id="pin" placeholder="PIN" required >
								</div>
								<div class="form-group row" style="margin-left:4px;">
									<label for="name"style="margin-left:1em;">Landmark<span style="color:red;">*</span></label>
									<input type="text" name="landmark1" id="Landmark"  required >
								</div>
								<div class="form-group row" style="margin-left:4px;">
									<label for="name"style="margin-left:1em;">Phone No.<span style="color:red;">*</span></label>
									<input type="text" name="" id=""  required >
								</div>
								<div class="form-group row" style="margin-left:4px;">
									<label for="name"style="margin-left:1em;">Personal Email<span style="color:red;">*</span></label>
									<input type="text" name="" id=""  required >
								</div>
								</div><!--end of column-->
								
								
								<div class="col-md-6">
								
								
								<div class="form-group row" style="margin-left:4px;">
									<label for="name" style="margin-left:1em;">Address 2 <span style="color:red;">*</span></label>
									<input type="text" name="address_2" id="Address_2"  required >
								</div>
								
								
								<div class="form-group row" style="margin-left:4px;">
									<label for="name" style="margin-left:1em;"> </label>
									 <!--city-->	
									<select class="form-control" name="" id="" style="width:15%;">
											<option value="--select--">City</option>											
										  </select>
									<!--city-->			  
									 <!--State-->	
									<select class="form-control" name="" id="" style="width:15%; margin-left:1%;">
											<option value="--select--">State</option>											
										  </select>
									<!--State-->	
									 <!--Country-->	
									<select class="form-control" name="" id="" style="width:15%; margin-left:1%;">
											<option value="--select--">Country</option>											
										  </select>
									<!--Country-->	
								</div>
								
								<div class="form-group row" style="margin-left:4px;">
									<label for="name" style="margin-left:1em;">PIN<span style="color:red;">*</span></label>
									<input type="text" name="pin2" id="pin1"required >
								</div>
								<div class="form-group row" style="margin-left:4px;">
									<label for="name"style="margin-left:1em;">Landmark<span style="color:red;">*</span></label>
									<input type="text" name="landmark2" id="landmark1" required >
								</div>
								<div class="form-group row" style="margin-left:4px;">
									<label for="name"style="margin-left:1em;">Phone No.<span style="color:red;">*</span></label>
									<input type="text" name="" id=""  required >
								</div>
								<div class="form-group row" style="margin-left:4px;">
									<label for="name"style="margin-left:1em;">Official Email<span style="color:red;">*</span></label>
									<input type="text" name="" id=""  required >
								</div>
								</div>

							</div><!--end of row-->
							<hr>

		
							   
							   
								<div class="row">
									<div class="col-md-12">
									<div class="form-group row" style="margin-left:1%;">
											<label for="name">Discription/Optional</label>
											 <textarea cols="40" rows="4" name="textarea" id="textarea" style="width:96%;"></textarea>									
										</div>
									</div>
								</div>
							
		
												
								<!--button-->
									<div class="form-group">
									  <div class="col-md-12"><br>
												<center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="background: #1ba6df !important;" >
									  </div>
									</div>						   
						    </div> <!-- card-body -->
                        </div> <!-- card -->							                        
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
        </div>
		</div>
		</div>
        <!-- END wrapper -->
		
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-groups").remove();
      });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-mores").click(function(){ 
          var html = $(".copys").html();
          $(".after-add-mores").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-groupss").remove();
      });
    });
</script>

		
	  @include('layouts.footer')  
    </body>

<!-- Mirrored from coderthemes.com/moltran/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:40 GMT -->
</html>