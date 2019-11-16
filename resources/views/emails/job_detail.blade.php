<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.table td, .table th {
    padding: 4px;
    vertical-align: top;
    border-top: 1px solid #eaeaea;
    font-size: 13px;
    color: #444;
}
#wrapper {
    overflow: hidden;
    width: 100%;
    overflow-y: scroll;
}
.d-none{
font-size: 17px;
color: #fff;
background: #317eeb;	
}
h3 {
    line-height: 30px;
    font-size: 24px;
    / background: #317eeb; /
    color: #317eeb;
}
</style>
   
   <div class="tab-pane show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
				                <div class="card-body">
				                            <p><b><?php echo $data['mail_content'];"<br>" ?> </br></b></p>
				                    <h2 style="font-weight:100;color:#317eeb;"> {{$data['job_detail']->job_title}}
				                      <a href=""><i class="fa fa-external-link fa-1x" aria-hidden="true"></i></h2></a>
				                        <div class="row">
				                        	<div class="col-md-8">
												<table class="table table-bordered">
													  <tbody>													   
													    <!--<tr>-->
													    <!--  <th>Industry:</th>													-->
													    <!--  <td>{{$data['job_detail']->industry_name}}</td>														  -->
													    <!--</tr>-->
													    <tr>
													      <th>Total Positions:</th>
													      <td>{{$data['job_detail']->vacancies}}</td>
													    </tr>
													     <tr>
													      <th>Job Type:</th>
													      <td>{{$data['job_detail']->job_mode}}</td>
													    </tr>
													     <tr>
													      <th>Salary:</th>
													      <td>{{$data['job_detail']->pay_min}}</td>
													    </tr>
													     <tr>
													      <th>Job Location:</th>
													      <td>{{$data['job_detail']->country}},{{$data['job_detail']->state}},{{$data['job_detail']->city}}</td>
													    </tr>
													     <tr>
													      <th>Minimum Education:</th>
													      <td>{{$data['job_detail']->qualification}}</td>
													    </tr>
													     <tr>
													      <th>Minimum Experience:</th>
													      <td>{{$data['job_detail']->experience}}</td>
													    </tr>
													     <tr>
													      <th>Apply By:</th>
													      <td>{{$data['job_detail']->dated}}</td>
													    </tr>
													    <tr>
													      <th>Job Posting Date:</th>
													      <td>{{$data['job_detail']->last_updated_by}}</td>
													    </tr>
													  </tbody>
													</table>
													<br>

 													<h3 style="font-weight:100;color:#317eeb;">Job Description</h3>
 													<h4>{{$data['job_detail']->job_description}}</h4>
 													
													<h3 style="font-weight:100;color:#317eeb;">Skills Required</h3>
													

						                        </div>
						                        <div class="col-md-8">
												<table class="table table-bordered">
													  <tbody>
													    <!--<tr>-->
													    <!--  <th>Jobe code:</th>-->
													    <!--  <td>{{$data['job_detail']->job_code}}</td>-->
													    <!--</tr>-->
													    <tr>
													      <th>Job Title:</th>
													      <td>{{$data['job_detail']->job_title}}</td>
													    </tr>
													     <tr>
													      <th>Qualification:</th>
													      <td>{{$data['job_detail']->qualification}}</td>
													    </tr>
													     <tr>
													      <th>Client Name:</th>
													      <td>{{$data['job_detail']->client_name}}</td>
													    </tr>
													     <tr>
													      <th>Job Slug:</th>
													      <td>{{$data['job_detail']->job_slug}}</td>
													    </tr>
													     <tr>
													      <th>Job Duration:</th>
													      <td>{{$data['job_detail']->job_duration}}</td>
													    </tr>
													    
													  </tbody>
													</table>
													</div> 

						                     </div>             
						                  </div>  
						              </div>
