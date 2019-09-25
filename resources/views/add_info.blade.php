
@include('include.headers')
@include('include.leftSidebars')
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
		width: 66%;
		padding: 7px;
		border-radius: 5px;
	}
	textarea {
		border-radius: 5px;
		width: 48%;
	}
.form-control {
    border: 1px solid #bfbfbf;
    width: 84%;
    background: #fff;
}
.active, .btn:hover {
  background-color: #000000;
  color: white;
}
	
.form-group row{
	font: inherit;
}
	
 </style>      

 <body>
   <div class="content-page">              
        <div class="content">                
            <div class="card">
                <div class="card-header" style="background-color:#317eeb;">
                    <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large;font-weight: 100;">Additional Information</h3></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <!-- Career-->      
                            <div class="form-group row">
                              <label class="col-md-4 control-label" for="example-textarea-input">Career Objective <span style="color:red;">*</span></label>
                                <div class="col-md-8">
                                  <textarea cols="40" rows="5" name="description" id="textarea" style="width:70%;"></textarea>
                                </div>
                              </div>
                     <!--end of  Career-->
                     <!--Interest -->      
                            <div class="form-group row">
                              <label class="col-md-4 control-label" for="example-textarea-input">Interest<span style="color:red;">*</span></label>
                                <div class="col-md-8">
                                  <textarea cols="40" rows="5" name="description" id="textarea" style="width:70%;"></textarea>
                                </div>
                              </div>
                     <!--end of Interest -->
                      <!--Achievement -->      
                            <div class="form-group row">
                              <label class="col-md-4 control-label" for="example-textarea-input">Achievement <span style="color:red;">*</span></label>
                                <div class="col-md-8">
                                  <textarea cols="40" rows="5" name="description" id="textarea" style="width:70%;"></textarea>
                                </div>
                              </div>
                     <!--end of Achievement -->
                     <div class="form-group">
                       <center><button class="btn btn-info waves-effect waves-light m-b-5" type="button">update</button> </center>
                   </div>   

                    </div> <!-- col -->
                   
                </div> <!-- End row -->
            </div> <!-- container -->
        </div><!-- content -->
    </div>
</div>
       <script>
            var resizefunc = [];
        </script>
    
      <script>
        $(document).ready(function() {
            $('.txtDate').datepicker('setDate','today');
        });
        </script>
          @include('include.footer')
      </body>
