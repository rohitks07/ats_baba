<!DOCTYPE html>
<html lang="en">
@include('web.header')
    <head>
        <meta charset="utf-8" />
        <title>Add Candidate oh HRMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="assets/js/modernizr.min.js"></script> 
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
    </head>

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
							   <h3>Skills Detail</h3>
							   <hr>
								  <div class="col-md-12">								
									<div class="form-group row">
                                             <label for="lastname" class="control-label col-lg-4">Add Skill<span style="color:red;">*</span></label>
                                               <div class="col-lg-4">
                                                  <input class="form-control" style="border: 1px solid #737373; width:100%;" id="skill" name="skill" type="text">
												  <span class="help-block" style="text-align:right;"><small>
                                                     Single skill at a time.</small></span>
                                                
                                              </div>
								             <div class="col-lg-4">
									             <button type="submit"  class="btn btn-info waves-effect waves-light m-l-10">Add</button>
                                             </div>
								               
											  
                                         </div>                                                                               
                                   
											  
										</div>										
									  </div>
									   <center>
											<div class="form-group">
											  <div class="col-lg-12 col-lg-offset-2">
												<a href="{{url('post_new_candidates')}}"><button class="btn btn-warning back4" type="button" style="background: #1ba6df !important;"><span class="fa fa-arrow-left"></span> Back</button></a> 
												<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="background: #1ba6df !important;" >
												<img src="spinner.gif" alt="" id="loader" style="display: none">
											  </div>
											</div>
											</center><br>
									</form>
								  </div>		
              			  
						    </div> <!-- card-body -->
                        </div> <!-- card -->							                        
                    </div> <!-- container -->
                </div> <!-- content -->
				@include('web.footer')
            </div>
        </div>
        <!-- END wrapper -->
       <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
	
	
	</body>
</html>