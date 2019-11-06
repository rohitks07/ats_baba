@include('include.emp_header')
@include('include.emp_leftsidebar')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-border card-primary">
                        <div class="card-header"><h3 class="card-title text-primary">Pay rate</h3> </div> 
                        <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                            <th>Job </th><th>Button </th><th>Candidate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td>{{$toReturn['job_details']->pay_min}}- {{$toReturn['job_details']->pay_max}}</td><td>@if($toReturn['matchpayrate']>=70)<span style="background-color:green;color:white">{{$toReturn['matchpayrate']}}</span>@elseif(($toReturn['matchpayrate']<=70)&&($toReturn['matchpayrate']>=50))<span style="background-color:yellow;">{{$toReturn['matchpayrate']}}</span> @else <span style="background-color:red;color:white;">{{$toReturn['matchpayrate']}}</span> @endif</td><td>{{$toReturn['list_application']->expected_salary}}</td>
                            </tbody>
                        </table>
                        </div> 
                    </div>
                </div><!--end of col-->
                  <div class="col-lg-6">
                    <div class="card card-border card-primary">
                        <div class="card-header"><h3 class="card-title text-primary">Skills</h3> </div> 
                        <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                            <th>Job </th><th>Button </th><th>Candidate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td>{{$toReturn['job_details']->required_skills}}</td><td>@if($toReturn['matchpayrate']>=70)<span style="background-color:green;color:white">{{$toReturn['skill_match_percentage']}}</span>@elseif(($toReturn['skill_match_percentage']<=70)&&($toReturn['skill_match_percentage']>=50))<span style="background-color:yellow;">{{$toReturn['skill_match_percentage']}}</span> @else <span style="background-color:red;color:white">{{$toReturn['skill_match_percentage']}}</span> @endif</td><td>{{$toReturn['seeker_details']->skills}}</td>
                            </tbody>
                        </table>
                        </div> 
                    </div>
                </div><!--end of col-->
            </div><!--end of row-->
			
			 <div class="row">
                <div class="col-lg-6">
                    <div class="card card-border card-primary">
                        <div class="card-header"><h3 class="card-title text-primary">Visa </h3> </div> 
                        <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                            <th>Job </th><th>Button </th><th>Candidate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td>{{$toReturn['job_details']->job_visa_status}}</td><td>@if($toReturn['visa_match_percentage']>=70)<span style="background-color:green;color:white">{{$toReturn['visa_match_percentage']}}</span>@elseif(($toReturn['visa_match_percentage']<=70)&&($toReturn['visa_match_percentage']>=50))<span style="background-color:yellow;">{{$toReturn['visa_match_percentage']}}</span> @else <span style="background-color:red;color:white">{{$toReturn['visa_match_percentage']}}</span> @endif</td><td>{{$toReturn['seeker_details']->visa_status}}</td>
                            </tbody>
                        </table>
                        </div> 
                    </div>
                </div><!--end of col-->
				
                  <div class="col-lg-6">
                    <div class="card card-border card-primary">
                        <div class="card-header"><h3 class="card-title text-primary"> Location</h3></div> 
                        <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                            <th>Job </th><th>Button </th><th>Candidate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td>{{$toReturn['jobcity']}},&nbsp;{{$toReturn['jobstate']}},&nbsp; {{$toReturn['job_details']->country}}</td><td>@if($toReturn['matchLocation']>=70)<span style="background-color:green;color:white">{{$toReturn['matchLocation']}}</span>@elseif(($toReturn['matchLocation']<=70)&&($toReturn['matchLocation']>=50))<span style="background-color:yellow;">{{$toReturn['matchLocation']}}</span> @else <span style="background-color:red;color:white">{{$toReturn['matchLocation']}}</span> @endif</td><td>{{$toReturn['seeker_details']->city}},&nbsp;{{$toReturn['seeker_details']->state}},&nbsp;{{$toReturn['seeker_details']->country}}</td>
                            </tbody>
                        </table>
                        </div> 
                    </div>
                </div><!--end of col-->
            </div><!--end of row-->
			
			 <!-- <div class="row">
                <div class="col-lg-6">
                    <div class="card card-border card-primary">
                        <div class="card-header"><h3 class="card-title text-primary"></h3> </div> 
                        <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                            <th>Job </th><th>Button </th><th>Candidate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td></td><td></td><td></td>
                            </tbody>
                        </table>
                        </div> 
                    </div> 
                </div><!--end of col-->
				
                  <!-- <div class="col-lg-6">
                    <div class="card card-border card-primary">
                        <div class="card-header"><h3 class="card-title text-primary"></h3> </div> 
                        <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                            <th>Job </th><th>Button </th><th>Candidate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td></td><td></td><td></td>
                            </tbody>
                        </table>
                        </div> 
                    </div> 
                </div><!--end of col
            </div><!--end of row-->
        </div>
    </div>
</div>
@include('include.emp_footer')
