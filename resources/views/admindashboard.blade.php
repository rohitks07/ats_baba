
@include('include.headers')
@include('include.leftSidebars')
<style>
	
.alert-success {
    background-color: #ffffff;
    border-color: #29b6f6;
    color: #ffffff;
}
.card-title {
    font-size: 17px;
    font-weight: 500;
    color: #ffffff;
    margin-bottom: 0;
    margin-top: 0;
    text-transform: capitalize;
    float: left;
    height: 51px;
}
</style>
        
 <body>
  <div class="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="row"> 
				<div class="col-md-12">
                    <div class="card-header" style="  background-color:#317eeb; height: 51px;">
                    	<h3 class="card-title" >CV Manager</h3>

                     	<h3 class="card-title" style="float: right;" >
	                     	 <a href="#" id="select_image" style="color:#fff;">Upload File  <i class="fa fa-upload" style="font-size:20px;color:#fff;"></i> </a>
	                     	 <input type="file" id="Upload_cv" name="Upload_cv">
                     	</h3>
                    </div>   
                        <div class="alert alert-success alert-dismissible">
							<a href="">My Cv</a> 
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>  
									</div>								
								   <div class="row">
                                        <div class="col-sm-12"><br>
                                            <div class="card" style="border:1px #D3D3D3 solid;">
                                               <div class="card-body">
											       <form class="form-horizontal">                                    
                                                       <div class="form-group row">
													      <form method="post" id="upload_form" action="{{url('jobseeker/edit_jobseeker/upload_photo')}}" enctype="multipart/form-data">
													      	<label class="col-md-8">
														    <i class="fa fa-upload" style="font-size:30px;color:#1ba6df">
														    	<!-- <input type="file" name="image_upload"> -->
														    </i>
														    <div id="image_show"></div>
														    <a href="#" id="select_image">Upload File</a> <input type="file" id="Upload_image" name="Upload_image">
															</label>
															</form>
														     <div class="col-md-4">
																<p>8906542456</p><hr>
						
																<p><i class="fa fa-pencil-square-o" style="font-size:15px;color:#1ba6df" aria-hidden="true"></i>Edit Profile</p>
																</div>
															</div>	
                                                         </div> <!-- col -->
                                                     </form>
                                                    </div> <!-- End row -->
													
                                                    <div class="list-group-item d-flex justify-content-between align-items-center" style="background-color:#efefef;">
                                                        <b>Personal Summary</b>
														<button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg"> <i class="fa fa-pencil" aria-hidden="true"></i></button>											
                                                    </div><br>
													
                                                    <div class="list-group-item d-flex justify-content-between align-items-center" style="background-color:#efefef; ">
                                                        <b>Experiences</b>
                                                          <button type="button" class="btn btn" data-toggle="modal" data-target="#con-close-modal">Add Another &nbsp; <i class="fa fa-plus-square" style="font-size:15px;color:#1ba6df" aria-hidden="true"></i></button>														
                                                    </div><br>
													
													
													 <div class="list-group-item d-flex justify-content-between align-items-center" style="background-color:#efefef; ">
                                                        <b>Education</b>
                                                            <button type="button" class="btn btn" data-toggle="modal" data-target=".bs-example-modal-sm">Add Another &nbsp; <i class="fa fa-plus-square" style="font-size:15px;color:#1ba6df" aria-hidden="true"></i></button>
                                                    </div><br>
													
													
                                                    <div class="list-group-item d-flex justify-content-between align-items-center" style="background-color:#efefef;">
                                                        <b>My Job Application</b>
														   <a href="{{url('my_jobs')}}">View All/Manage</a>										
                                                    </div><br>
													
													
                                                     <div class="list-group-item d-flex justify-content-between align-items-center" style="background-color:#efefef;">
                                                        <b>My Additional Information</b>
														 <a href="{{url('add_info')}}">Add/Edit</a>							 
                                                    </div>
													
														<div class="row">
															<div class="col-sm-12">
																<div class="card" style="border:1px #D3D3D3 solid;">
																	<div class="card-body">
																		<form class="form-horizontal">                                    
																			<div class="form-group row">
																				<label class="col-md-2 control-label" for="example-text-input">Interest :  -</label>
																				<div class="col-md-10">
																				</div>
																			</div>
																			<hr>
																			<div class="form-group row">
																				<label class="col-md-2 control-label" for="example-email">Career Objective : -</label>
																				<div class="col-md-10">
																				</div>
																			</div>
																			<hr>
																			  <div class="form-group row">
																				<label class="col-md-2 control-label" for="example-email">Achievement : -</label>
																				<div class="col-md-10">																	  
																		</div> <!-- col -->															
																	</div> <!-- End row -->															
                                               				
                                            				</div>
                                            			</form>
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
											
									<!-- start of Experience modal-->	


									 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0" id="myLargeModalLabel">Update Professional Summary</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    	 <!-- Career-->      
								                            <div class="form-group row">
								                              <label class="col-md-12 control-label" for="example-textarea-input">Summary <span style="color:red;">*</span></label><br><br>
								                                <div class="col-md-12">
								                                  <textarea cols="40" rows="9" name="description" id="textarea" style="width:100%;"></textarea>
								                                </div>
								                              </div>
								                     <!--end of  Career-->
                                                    </div>
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Update</button> 
                                                    </div> 
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
							            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0">Experience Information</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">Job Title</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Job Title" style="border: 1px #d6d6d6 solid;"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">Company Name</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Company Name" style="border: 1px #d6d6d6 solid;"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                       <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group" > 
                                                                    <label for="field-3" class="control-label">Country</label> 
																		<div class="col-md-12">
																			<select class="form-control">
																				<option value="" selected>Select Country</option>
																				<option value="Afghanistan" >Afghanistan</option>
																				<option value="Albany" >Albany</option>
																				<option value="Algeria" >Algeria</option>
																				<option value="Angola" >Angola</option>
																				<option value="Argentina" >Argentina</option>
																				<option value="Armenia" >Armenia</option>
																				<option value="Australia" >Australia</option>
																				<option value="Austria" >Austria</option>
																				<option value="Azerbaijan" >Azerbaijan</option>
																				<option value="Bahamas" >Bahamas</option>
																				<option value="Bahrain" >Bahrain</option>
																				<option value="Bangladesh" >Bangladesh</option>
																				<option value="Belgium" >Belgium</option>
																				<option value="Bhutan" >Bhutan</option>
																				<option value="Bulgaria" >Bulgaria</option>
																				<option value="Burma" >Burma</option>
																				<option value="Burundi" >Burundi</option>
																				<option value="Cambodia" >Cambodia</option>
																				<option value="Cameroon" >Cameroon</option>
																				<option value="Canada" >Canada</option>
																				<option value="Cape Verd" >Cape Verd</option>
																				<option value="Central Africa" >Central Africa</option>
																				<option value="Chadi" >Chadi</option>
																				<option value="Chile" >Chile</option>
																				<option value="China" >China</option>
																				<option value="Columbia" >Columbia</option>
																				<option value="Comora" >Comora</option>
																				<option value="Congo" >Congo</option>
																				<option value="Costa Rica" >Costa Rica</option>
																				<option value="Croatia" >Croatia</option>
																				<option value="Cuban" >Cuban</option>
																				<option value="Cyprus" >Cyprus</option>
																				<option value="Egypt" >Egypt</option>
																				<option value="Fiji" >Fiji</option>
																				<option value="Finland" >Finland</option>
																				<option value="France" >France</option>
																				<option value="Germany" >Germany</option>
																				<option value="Ghana" >Ghana</option>
																				<option value="Greece" >Greece</option>
																				<option value="Iceland" >Iceland</option>
																				<option value="India" >India</option>
																				<option value="Iran" >Iran</option>
																				<option value="Iraq" >Iraq</option>
																				<option value="Ireland" >Ireland</option>
																				<option value="Israel" >Israel</option>
																				<option value="Italy" >Italy</option>
																				<option value="Jamaica" >Jamaica</option>
																				<option value="Japan" >Japan</option>
																				<option value="Jordan" >Jordan</option>
																				<option value="Kenya" >Kenya</option>
																				<option value="Kuwait" >Kuwait</option>
																				<option value="Malaysia" >Malaysia</option>
																				<option value="Mexico" >Mexico</option>
																				<option value="Mongolia" >Mongolia</option>
																				<option value="Nepal" >Nepal</option>
																				<option value="New Zealand" >New Zealand</option>
																				<option value="Pakistan" >Pakistan</option>
																				<option value="Peru" >Peru</option>
																				<option value="Poland" >Poland</option>
																				<option value="Qatar" >Qatar</option>
																				<option value="Romania" >Romania</option>
																				<option value="Russia" >Russia</option>
																				<option value="Thailand" >Thailand</option>
																				<option value="United Kingdom" >United Kingdom</option>
																				<option value="United States" >United States</option>
																				<option value="Yemen" >Yemen</option>
																			</select>
                                                                       </div> 
                                                                  </div> 
                                                              </div> 
												          </div>
											          </div>
														 <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">City</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="city" style="border: 1px #d6d6d6 solid;"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
														 <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">Start Date</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Start Date" style="border: 1px #d6d6d6 solid;"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
														 <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">End Date (Keep blank if steel working)</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="End Date" style="border: 1px #d6d6d6 solid;"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Update</button> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->
                                        <div>
                                        <div>
										<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0" id="Education Information">Education Information</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                       <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label" style="margin-left: 1em;">Education Information</label> 
																		<div class="col-md-12">
																			<select class="form-control">
																				<option>1</option>
																				<option>2</option>
																				<option>3</option>
																				<option>4</option>
																				<option>5</option>
																			</select>
                                                                       </div> 
																	 </div>
																	 
														<div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label" style="margin-left: 1em;">Major Subject</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Major Subject" style="border: 1px #d6d6d6 solid;"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
														<div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label" style="margin-left: 1em;">Intitute</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Intitute" style="border: 1px #d6d6d6 solid;"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
														<div class="row">
														      <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">Country</label> 
																		<div class="col-md-12">
																			<select class="form-control">
																				<option>1</option>
																				<option>2</option>
																				<option>3</option>
																				<option>4</option>
																				<option>5</option>
																			</select>
                                                                       </div> 
                                                                  </div> 
                                                              </div> 
															  </div>
															  <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label" style="margin-left: 1em;">City</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="City" style="border: 1px #d6d6d6 solid;"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
														<div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label" style="margin-left: 1em;">Completion Year</label> 
																		<div class="col-md-12">
																			<select class="form-control">
																				<option>Select Year</option>
																				<option>2019</option>
																				<option>2018</option>
																				<option>2017</option>
																				<option>2016</option>
																			</select>
                                                                       </div> 
																	 </div>
																	 
														  <div class="modal-footer"> 
	                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
	                                                        <button type="button" class="btn btn-info waves-effect waves-light">Update</button> 
                                                    </div>
												          </div>
											          </div>
													  
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                       
                                           
									</div> <!-- card body -->  
                             </div> <!-- card -->
						 </div> <!-- row -->	 
                    </div> <!-- container -->
                </div>
            </form>
         </div>
     </div>
 </div>
     </div></div></div>
     <script type="text/javascript">
     		 $("#Upload_cv").css('display','none');
    
		    $("#select_image").click(function(e){
		       e.preventDefault();
		       $("#Upload_cv").trigger('click');
		    });
     </script>
   @include('include.footers')
   <script type="text/javascript">
     	 $("#Upload_image").css('display','none');
    
    $("#select_image").click(function(e){
       e.preventDefault();
       $("#Upload_image").trigger('click');
    });
     </script>
   
	   <script>
		$(document).ready(function(){

		 $('#upload_form').on('click', function(event){
		  event.preventDefault();
		  $.ajax({
		   url:"{{url('jobseeker/edit_jobseeker/upload_photo')}}",
		   method:"POST",
		   data:new FormData(this),
		   dataType:'JSON',
		   contentType: false,
		   cache: false,
		   processData: false,
		   success:function(data)
		   {
		    // $('#message').css('display', 'block');
		    // $('#message').html(data.message);
		    // $('#message').addClass(data.class_name);
		    // $('#uploaded_image').html(data.uploaded_image);
		   }
		  })
		 });

		});
		</script>

 </body>
 </html>