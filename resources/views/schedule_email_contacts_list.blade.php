@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
.card-title {
    font-size: 16px;
    font-weight: 300;
    color:#fff;
    margin-bottom: 0px;
    margin-top: 0px;
    text-transform:capitalize;
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
        width: 50%;
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
    background: #fff;
    width: 19%;
    float: left;
    margin-left:1%;
}
.button{
	width: 100%;
	height: 80px;
	background:#dcdcdc;
}
</style>
<div id="wrapper">                          
    <div class="content-page">              
        <div class="content">                
	   	 	<div class="card">
                <div class="card-header" style="background: #317eeb;"><h3 class="card-title">Schedule Email From List</h3></div>
                   <div class="card-body">
                   	   <div class="row">
	   						<div class="col-md-12">
	                           	<b><p>Dates and times are relative to the Server Time</p></b>
	                           	<b><p>Current Server Time is 2019-08-23 02:31 AM</p></b>
                        	</div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-md-6">
                    		 	<div class="form-group row">
                                    <label for="" class="control-label col-lg-4">List Name<span class="red">*</span></label>
                                    	<div class="col-lg-8">
                                           <select name="list_name" class="form-control" required style="width:99%;">
												<option value="">Select List name</option>
											</select> 
                                        </div>
                                </div><!--end of from group-->
                                <div class="form-group row">
                                     <label for="password" class="control-label col-lg-4">Embargoed until<span class="red">*</span></label>
                                    	<div class="col-lg-8">
                                          <select name="schedule_day" class="form-control" required>
												<option value="">Day</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>					
											</select>

											<select name="schedule_month" class="form-control" required>
												<option value="">Month</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>					
											</select>

											<select name="schedule_year" class="form-control" required>
												<option value="">Year</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
												<option value="2020">2020</option>
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
												<option value="2024">2024</option>
												<option value="2025">2025</option>
												<option value="2026">2026</option>
												<option value="2027">2027</option>
												<option value="2028">2028</option>					
											</select>

											<select name="schedule_hour" class="form-control" required>
												<option value="">Hour</option>
												<option value="00">00</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>					
											</select>

											<select name="schedule_minute" class="form-control" required>
												<option value="">Minute</option>
												<option value="00">00</option>
												<option value="15">15</option>
												<option value="30">30</option>
												<option value="45">45</option>					
											</select>
										</div>
                                    </div>


                                <div class="form-group row">
                                     <label for="" class="control-label col-lg-4">Stop sending after<span class="red">*</span></label>
                                    	<div class="col-lg-8">
                                          <select name="schedule_day" class="form-control" required>
												<option value="">Day</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>					
											</select>

											<select name="schedule_month" class="form-control" required>
												<option value="">Month</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>					
											</select>

											<select name="schedule_year" class="form-control" required>
												<option value="">Year</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
												<option value="2020">2020</option>
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
												<option value="2024">2024</option>
												<option value="2025">2025</option>
												<option value="2026">2026</option>
												<option value="2027">2027</option>
												<option value="2028">2028</option>					
											</select>

											<select name="schedule_hour" class="form-control" required>
												<option value="">Hour</option>
												<option value="00">00</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>					
											</select>

											<select name="schedule_minute" class="form-control" required>
												<option value="">Minute</option>
												<option value="00">00</option>
												<option value="15">15</option>
												<option value="30">30</option>
												<option value="45">45</option>					
											</select>
										</div>
                                    </div>
                                </div><!--end of col-->
                    		
                    		<div class="col-md-6">
                    			<div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Requeue every</label>
                                    	<div class="col-lg-8">
                                           <select name="reque_after" class="form-control" style="width:99%;">
												<option value="dont">Do not reque</option>
												<option value="Hour">Hour</option><option value="Day">Day</option><option value="Week">Week</option>					
											</select>
                                        </div>
                                </div><!--end of from group-->
                                      <div class="form-group row">
                                     <label for="" class="control-label col-lg-4">Requeue until</label>
                                    	<div class="col-lg-8">
                                          <select name="schedule_day" class="form-control" required>
												<option value="">Day</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>					
											</select>

											<select name="schedule_month" class="form-control" required>
												<option value="">Month</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>					
											</select>

											<select name="schedule_year" class="form-control" required>
												<option value="">Year</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
												<option value="2020">2020</option>
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
												<option value="2024">2024</option>
												<option value="2025">2025</option>
												<option value="2026">2026</option>
												<option value="2027">2027</option>
												<option value="2028">2028</option>					
											</select>

											<select name="schedule_hour" class="form-control" required>
												<option value="">Hour</option>
												<option value="00">00</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>					
											</select>

											<select name="schedule_minute" class="form-control" required>
												<option value="">Minute</option>
												<option value="00">00</option>
												<option value="15">15</option>
												<option value="30">30</option>
												<option value="45">45</option>					
											</select>
										</div>
                                    </div>
	                    		</div>
	                    	</div>
	                    	<div class="button"><br>
								<center>
									<button type="button" class="btn btn-info">Save</button>
								</center>
	                    	</div>
	        	   		</div>
	        		</div>
	        	</div>
	    	</div>
	   </div>


@include('include.emp_footer')