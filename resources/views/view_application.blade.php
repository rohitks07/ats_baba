@include('include.emp_header')
@include('include.emp_leftsidebar')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header"><h3 class="card-title text-primary">Pay rate
                        </h3> </div> 
                        <div class="card-body">
                        <b>Job:-</b> {{$toReturn['job_details']->job_code}},&nbsp;{{$toReturn['job_details']->job_title}} &nbsp;| &nbsp;<b>Candidate:-</b>{{$toReturn['seeker_details']->first_name}}&nbsp;{{$toReturn['seeker_details']->last_name}} &nbsp;|&nbsp;<b>Phone:-</b>{{$toReturn['list_application']->phone_no_mobile}}
                        <table class="table">
                            <thead>
                            <tr>
                               <th>Type</th> <th>Job </th><th>Match Status </th><th>Candidate</th>
                            </tr>
                            </thead>
                            <tbody>
                        <tr>
                        </tr><tr> <td>Pay Rate</td><td>{{$toReturn['job_details']->pay_min}}- {{$toReturn['job_details']->pay_max}}</td><td>@if($toReturn['matchpayrate']>=70)<span style="background-color:green;color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>@elseif(($toReturn['matchpayrate']<=70)&&($toReturn['matchpayrate']>=50))<span style="background-color:yellow;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> @else <span style="background-color:red;color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> @endif</td><td>{{$toReturn['list_application']->expected_salary}}</td>
                        </tr><tr><td>Visa Status</td><td>{{$toReturn['job_details']->job_visa_status}}</td><td>@if($toReturn['visa_match_percentage']>=70)<span style="background-color:green;color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>@elseif(($toReturn['visa_match_percentage']<=70)&&($toReturn['visa_match_percentage']>=50))<span style="background-color:yellow;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> @else <span style="background-color:red;color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> @endif</td><td>{{$toReturn['seeker_details']->visa_status}}</td>
                        </tr><tr><td>Skills</td><td>{{$toReturn['job_details']->required_skills}}</td><td>@if($toReturn['matchpayrate']>=70)<span style="background-color:green;color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>@elseif(($toReturn['skill_match_percentage']<=70)&&($toReturn['skill_match_percentage']>=50))<span style="background-color:yellow;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> @else <span style="background-color:red;color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> @endif</td><td>{{$toReturn['seeker_details']->skills}}</td>
                        </tr><tr><td>Location</td><td>{{$toReturn['jobcity']}},&nbsp;{{$toReturn['jobstate']}},&nbsp; {{$toReturn['job_details']->country}}</td><td>@if($toReturn['matchLocation']>=70)<span style="background-color:green;color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>@elseif(($toReturn['matchLocation']<=70)&&($toReturn['matchLocation']>=50))<span style="background-color:yellow;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> @else <span style="background-color:red;color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> @endif</td><td>{{$toReturn['seeker_details']->city}},&nbsp;{{$toReturn['seeker_details']->state}},&nbsp;{{$toReturn['seeker_details']->country}}</td>
                        </tr>
                        </tbody>
                        </table>
                    </div> 
                </div>
            </div><!--end of col--> 
        </div>
    </div>
</div>
@include('include.emp_footer')
