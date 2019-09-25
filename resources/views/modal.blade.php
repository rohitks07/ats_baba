 <!DOCTYPE html>
<html lang="en">

   @include('layouts.header')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


 
 <style>
 .left{
	width:45%;
	float:left;
	margin-left:5%;
}
.fa {
    color: #484a4a;
    font-size: 23px;
    margin-right: 15px;
}
.name {
    margin-top: 10px;
}
input[type="text"] {
    padding: 10px;
    background: #150d0d00;
    border: none;
    border-bottom: 1px solid #9e9c9c;
    outline: none;
    width: 40%;
    color: #210707;
}
input[type="submit"] {
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
input[type="submit"]:hover{
	background:#000;
}
 </style>
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
														<div class="row">
															<div class="col-md-12">														
																	<div class="name">
																		<i class="fa fa-user" aria-hidden="true"></i>
																		<input type="text" name="name" class="name" placeholder="First Name" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																		<input type="text" name="name" class="name" placeholder="Last Name" required="">
																	</div>																																	
															</div><!--end of col-->	
															<div class="col-md-12">														
																	<div class="name">
																		<i class="fa fa-building-o" aria-hidden="true"></i>
																		<input type="text" name="name"  placeholder="Company" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																		<input type="text" name="name"  placeholder="Job-Title" required="">
																	</div>																																	
															</div><!--end of col-->	
															
															
															<div class="col-md-12">
																<div class="input_fields_wrap">
																	<button class="add_field_button">Add More Fields</button>
																	<div><input type="text" name="mytext[]"></div>
																</div>
												             </div><!--end of col-->																	
														</div><!--row-->
                                                    </div><!--modal-body-->													
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->                                       
									</div><!-- /.modal -->
		
		
		
		
		
		
	<script>
	$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});
</script>	
		
		
		
		
		
	
		<script>
            var resizefunc = [];
        </script>

        <!-- CUSTOM JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.app.js"></script>
	
	</body>				
</html>