<!DOCTYPE html>
<html lang="en">
@include('web.header')
      
	<style>
			.form-control{
				border: 1px solid #737373;
				width: 84%;
			}
			.active, .btn:hover {
			  background-color: #000000;
			  color: white;
			}
			.control-label{
				font-family: inherit;
			}
			.card-title {
				font-size: 17px;
				font-weight: 100;
				color: #ffffff;
				margin-bottom: 0;
				margin-top: 0;
				text-transform:none;
			}
				
			.content-page {
				margin-left: 15%;
				overflow: hidden;
				width: 100%;
			}
			.content-page > .content {
				margin-bottom: 60px;
				margin-top: 0px;
				padding: 20px 10px 15px 10px;
			}
										
 </style>       
  

 <body>       
   <body>    
        <div id="wrapper" style="background-color:#fff;">                  
            <div class="content-page">             
                <div class="content">                          
                  <div class="row"> 							
                    <div class="col-md-12">
                        <div class="card" style="border: 1px #C0C0C0 solid;">
                            <div class="card-header" style="background-color: #29b6f6;">
		                     <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Add Candidate</h3></div>
                               <div class="card-body">
							   <h3>Educational Detail</h3>
							   <hr>
								  <div class="col-md-12">								
									<form class="form-main">
									  <div class="form-block">   
										<div class="form-group">
										 
										<!-- start of form-->				
										<div class="form-group row">
											<label for="address" class="control-label col-lg-12"> </label>
												<select name="degree_title[]" id="dob_day" class="form-control" placeholder="Degree Title" style="width: 15%; margin-left: 9px; border: 1px solid #737373;">
												    <option value="" selected>Select Degree</option>
													
													</select>										
										    <input type="text" name="major_subject[]" class="form-control" placeholder="Major Subject" style="width: 15%;">
										   <input type="text" name="institute[]" class="form-control" placeholder="Institute" style="width: 15%;">
										   <input type="text" name="edu_city[]" class="form-control" placeholder="City" style="width: 15%;">
											 <select type="text" name="edu_country[]" class="form-control" placeholder="Country" style="width: 15%;">
												<option value="" selected>Country</option>
												
											   </select>
							    <select class="form-control" name="completion_year[]" placeholder="Passing Year" style="width: 16%;" >
									  <option value="" selected="selected">Completion</option>
																														
						                      </select> 
										  <a class="btn btn-primary add-more-btn" style="float:left; margin-left:1em;">Add&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a>	
											  
										</div>
										
									  </div>
									</form>
								  </div>		
								   <center><div class="col-md-12">
									 <a href="{{url('post_new_candidate')}}"><button class="btn btn-warning back2" type="button" style="background: #1ba6df !important;"><span class="fa fa-arrow-left"></span> Back</button></a> 
									 <a href="{{url('post_candidate_skill')}}"><button class="btn btn-primary open2" type="button" style="background: #1ba6df !important;">Next <span class="fa fa-arrow-right"></span></button> </a>
								  </div>
								</center>			  
						    </div> <!-- card-body -->
                        </div> <!-- card -->							                        
                    </div> <!-- container -->
                </div> <!-- content -->
				@include('web.footer')
            </div>
        </div>
    <!-- END wrapper -->
         @include('web.footer')
	
		
	<script>
		$('.add-more-btn').click(function() {
	   var clone = $('.form-main').clone('.form-block');
	   $('.form-main').append(clone);
	  });
	</script>
	
	</body>
</html>