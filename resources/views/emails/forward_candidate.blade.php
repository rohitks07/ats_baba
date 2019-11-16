<html>
<head>
<title>Forward Condidate</title>
<style type="text/css">
	table{
		border-color:blue;
	}
</style>
</head>
<body>
<br>
<?php 
//echo $data['forward_candidate']['content'];
//exit;
?>
<p><?php echo $data['forward_candidate']['content'];"<br>" ?> </br></p>
<table border="1px" style="border-collapse: collapse;">
<tr><th colspan="2">Candidate’s Personal Details</th></tr>
<tr><td style="width:250px">Full Name</td><td style="width:250px">{{$data['forward_candidate']['fullname']}}</td></tr>
<tr><td>Phone (Primary)</td><td>{{$data['forward_candidate']['mobile']}}</td></tr>
<tr><td>Email ID</td><td>{{$data['forward_candidate']['email']}}</td></tr>
@if($data['forward_candidate']['skypeid'])
<tr><td>Skype ID</td><td>{{$data['forward_candidate']['skypeid']}}</td></tr>
@endif
<tr><td>Current Location (City, State):</td><td>{{$data['forward_candidate']['current_location_full']}}</td></tr>
<tr><td>US Visa Status:</td><td>{{$data['forward_candidate']['visa_status']}}</td></tr>
@if($data['forward_candidate']['visaexpiry'])
<?php
 $visaexpiry=date('m-d-Y', strtotime($data['forward_candidate']['visaexpiry']));
 ?>
<tr><td>US Visa Expiry:</td><td>{{$visaexpiry}}</td></tr>
@endif
@if(!empty($data['forward_candidate']['ssn']))
<tr><td>SSN No.(Last Four Digits)</td><td>{{$data['forward_candidate']['ssn']}}</td></tr>
@endif
@if($data['forward_candidate']['passportno'])
<tr><td>Passport No.</td><td>{{$data['forward_candidate']['passportno']}}</td></tr>
@endif
@if(!empty($data['forward_candidate']['dob']))
<?php 
 $birthday=date('m-d-Y', strtotime($data['forward_candidate']['dob']));
 ?>
<tr><td>D.O.B(MM/DD/YYYY)</td><td>{{$birthday}}</td></tr>
@endif
<tr><td>Qualification with University name  and Passing Year(Bachelors)</td><td>{{$data['forward_candidate']['qualification1']}}</td></tr>
<tr><td>Open for Relocation(Y/N)?</td><td>{{$data['forward_candidate']['relocation']}}</td></tr>
<tr><td>Availability for Telephone Interview:</td><td>{{$data['forward_candidate']['telephonicinterview']}}</td></tr>
<tr><td>Availability for In-person Interview:</td><td>{{$data['forward_candidate']['personinterview']}}</td></tr>
<tr><td>Availability for new Project:</td><td>{{$data['forward_candidate']['availibilitynewproj']}}</td></tr>
@if($data['forward_candidate']['linkedinid'])
<tr><td>LinkedIn ID:</td><td>{{$data['forward_candidate']['linkedinid']}}</td></tr>
@endif
@if(!empty($data['forward_candidate']['job_type']=='Fulltime'))
<tr><td>Expected rate</td><td>${{$data['forward_candidate']['expectedrate']}}k/{{@$data['forward_candidate']['job_rate_type_fulltime']}} </td></tr>
@else
<tr><td>Expected rate</td><td>${{$data['forward_candidate']['expectedrate']}}/hr on {{@$data['forward_candidate']['job_rate_type']}}</td></tr>
@endif

</table>

<!-- <h4>Total US Experience: 4+Years</h4> -->

@if(($data['experience_list'][0][0])!="")
<u><b>Experience Summary:-</b></u>
@if($data['forward_candidate']['it_exper'])
<h4>Total IT Experience: {{$data['forward_candidate']['it_exper']}}+year</h4>
@endif
@if($data['forward_candidate']['us_exper'])
<h4>Total US Experience: {{$data['forward_candidate']['us_exper']}}+year</h4>
@endif
<br>
<table border="1px" style="border-collapse: collapse;">
<tr><td style="width:225px">Skill</td><td style="width:225px">Years of Experience/Exposure</td><td style="width:225px">Expertise Level (0 - 10)[1=Novice; 10=Expert]</td></tr>
@foreach($data['experience_list'] as $key => $value)
<tr><td>{{$data['experience_list'][$key][0]}}</td><td>{{$data['experience_list'][$key][1]}}</td><td>{{$data['experience_list'][$key][2]}}</td></tr>
<?php $kee = $key + 1;
if($data['experience_list'][$kee][0] == "" && $data['experience_list'][$kee][1] == "" && $data['experience_list'][$kee][2] == "")
break;
 ?>
@endforeach
</table>
@endif
<br>
<!-- <h3><u>Last Two project references :</h3></u><br> -->
@if(($data['reference_list'][0][0])!="")
<u><b>Reference:-</b></u>
<br>
<br>
<table border="1px " style="border-collapse: collapse;">
<tr><td style="width:130px">Full Name</td><td style="width:130px">EmailId</td><td style="width:130px">Designation</td><td style="width:130px">Client Name</td><td style="width:130px">Location</td></tr>
@foreach($data['reference_list'] as $key => $value)
<tr><td>{{$data['reference_list'][$key][0]}}</td><td>{{$data['reference_list'][$key][1]}}</td><td>{{$data['reference_list'][$key][2]}}</td><td>{{$data['reference_list'][$key][3]}}</td><td>{{$data['reference_list'][$key][4]}}</td></tr>
<?php $kee = $key + 1;
if($data['reference_list'][$kee][0] == "" && $data['reference_list'][$kee][1] == "" && $data['reference_list'][$kee][2] == "" && $data['reference_list'][$kee][3]=="" && $data['reference_list'][$kee][4]=="")
break; 
?>
@endforeach
@endif
</table>
<br>
<?php 
// print_r($data['emp_details']);
// exit;
?>
@if((@$data['emp_details'])!="")
<u><b> Employer Details</b></u>
<table border="1px" style="border-collapse: collapse;">
<tr><td> Company Name</th> <td>Email Id </th><td>Employer Name </th> <td>Phone Number </th>@if(@$data['emp_details']['ext_no']) <td>Extension </th> @endif</tr>
<tr> <td>{{$data['emp_details']['company_name']}}</td><td>{{$data['emp_details']['email_Id']}}</td><td>{{$data['emp_details']['employer_name']}}</td><td>{{$data['emp_details']['phone_number']}}</td>@if(@$data['emp_details']['ext_no'])<td>{{$data['emp_details']['ext_no']}}</td>@endif</tr>
</table>
@endif





</body>
</html> 

