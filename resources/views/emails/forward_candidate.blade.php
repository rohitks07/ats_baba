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
<p><?php echo strip_tags($data['forward_candidate']['content']); ?></p>
<table border="1px" style="border-collapse: collapse;">
<tr><th colspan="2">Candidate’s Personal Details</th></tr>
<tr><th style="width:472px">Full Name</th><th style="width:343px">{{$data['forward_candidate']['fullname']}}</th></tr>
<tr><td>Phone (Primary)</td><td>{{$data['forward_candidate']['mobile']}}</td></tr>
<tr><td>Email ID</td><td>{{$data['forward_candidate']['email']}}</td></tr>
<tr><td>Skype ID</td><td>{{$data['forward_candidate']['skypeid']}}</td></tr>

<tr><td>Current Location (City, State):</td><td>{{$data['forward_candidate']['current_location_full']}}</td></tr>

<tr><td>US Visa Status:</td><td>{{$data['forward_candidate']['visa_status']}}</td></tr>
<tr><td>US Visa Expiry:</td><td>{{$data['forward_candidate']['visaexpiry']}}</td></tr>

<tr><td>SSN No.(Last Four Digits)</td><td>{{$data['forward_candidate']['ssn']}}</td></tr>
<tr><td>Passport No.</td><td>{{$data['forward_candidate']['passportno']}}</td></tr>
<tr><td>D .O. B</td><td>{{$data['forward_candidate']['dob']}}</td></tr>
<tr><td>Qualification with University name  and Passing Year(Bachelors)</td><td>{{$data['forward_candidate']['qualification1']}}</td></tr>
<tr><td>Open for Relocation(Y/N)?</td><td>{{$data['forward_candidate']['relocation']}}</td></tr>

<tr><td>Availability for Telephone Interview:</td><td>{{$data['forward_candidate']['telephonicinterview']}}</td></tr>
<tr><td>Availability for In-person Interview:</td><td>{{$data['forward_candidate']['personinterview']}}</td></tr>
<tr><td>Availability for new Project:</td><td>{{$data['forward_candidate']['availibilitynewproj']}}</td></tr>
<tr><td>LinkedIn ID:</td><td>{{$data['forward_candidate']['linkedinid']}}</td></tr>
<tr><td>Expected rate</td><td>${{$data['forward_candidate']['expectedrate']}}</td></tr>

</table>
<h3><u>Experience Summary:</h3></u>
@if($data['forward_candidate']['yearExp'])
<h4> Total IT Experience: {{$data['forward_candidate']['yearExp']}}+Years</h4>
@endif
<!-- <h4>Total US Experience: 4+Years</h4> -->

<table border="1px" style="border-collapse: collapse;">
@if(($data['experience_list'][0][0])!="")
<tr><th style="">Skill</th><th style="">Years of Experience/Exposure</th><th style="">Expertise Level (0 - 10)[1=Novice; 10=Expert]</th></tr>
<tr><td>{{$data['experience_list'][0][0]}}</td><td>{{$data['experience_list'][0][1]}}</td><td>{{$data['experience_list'][0][2]}}</td></tr>
<tr><td>{{$data['experience_list'][1][0]}}</td><td>{{$data['experience_list'][1][1]}}</td><td>{{$data['experience_list'][1][2]}}</td></tr>
<tr><td>{{$data['experience_list'][2][0]}}</td><td>{{$data['experience_list'][2][1]}}</td><td>{{$data['experience_list'][2][2]}}</td></tr>
<tr><td>{{$data['experience_list'][3][0]}}</td><td>{{$data['experience_list'][3][1]}}</td><td>{{$data['experience_list'][3][2]}}</td></tr>
<tr><td>{{$data['experience_list'][4][0]}}</td><td>{{$data['experience_list'][4][1]}}</td><td>{{$data['experience_list'][4][2]}}</td></tr>
<tr><td>{{$data['experience_list'][5][0]}}</td><td>{{$data['experience_list'][5][1]}}</td><td>{{$data['experience_list'][5][2]}}</td></tr>
<tr><td>{{$data['experience_list'][6][0]}}</td><td>{{$data['experience_list'][6][1]}}</td><td>{{$data['experience_list'][6][2]}}</td></tr>
<tr><td>{{$data['experience_list'][7][0]}}</td><td>{{$data['experience_list'][7][1]}}</td><td>{{$data['experience_list'][7][2]}}</td></tr>
<tr><td>{{$data['experience_list'][8][0]}}</td><td>{{$data['experience_list'][8][1]}}</td><td>{{$data['experience_list'][8][2]}}</td></tr>
<tr><td>{{$data['experience_list'][9][0]}}</td><td>{{$data['experience_list'][9][1]}}</td><td>{{$data['experience_list'][9][2]}}</td></tr>
@endif



</table>
<!-- <h3><u>Last Two project references :</h3></u><br> -->
@if(($data['reference_list'][0][0])!="")
<table border="1px " style="border-collapse: collapse;">
<tr><th style="">Full Name</th><th style="">EmailId</th><th style="">Designation</th><th style="">Contact Number</th><th style="">Client Name</th></tr>
<tr><td>{{$data['reference_list'][0][0]}}</td><td>{{$data['reference_list'][0][1]}}</td><td>{{$data['reference_list'][0][2]}}</td><td>{{$data['reference_list'][0][3]}}</td><td>{{$data['reference_list'][0][4]}}</td></tr>
<tr><td>{{$data['reference_list'][1][0]}}</td><td>{{$data['reference_list'][1][1]}}</td><td>{{$data['reference_list'][1][2]}}</td><td>{{$data['reference_list'][1][3]}}</td><td>{{$data['reference_list'][1][4]}}</td></tr>
<tr><td>{{$data['reference_list'][2][0]}}</td><td>{{$data['reference_list'][2][1]}}</td><td>{{$data['reference_list'][2][2]}}</td><td>{{$data['reference_list'][2][3]}}</td><td>{{$data['reference_list'][2][4]}}</td></tr>
<tr><td>{{$data['reference_list'][3][0]}}</td><td>{{$data['reference_list'][3][1]}}</td><td>{{$data['reference_list'][3][2]}}</td><td>{{$data['reference_list'][3][3]}}</td><td>{{$data['reference_list'][3][4]}}</td></tr>
<tr><td>{{$data['reference_list'][4][0]}}</td><td>{{$data['reference_list'][4][1]}}</td><td>{{$data['reference_list'][4][2]}}</td><td>{{$data['reference_list'][4][3]}}</td><td>{{$data['reference_list'][4][4]}}</td></tr>
<tr><td>{{$data['reference_list'][5][0]}}</td><td>{{$data['reference_list'][5][1]}}</td><td>{{$data['reference_list'][5][2]}}</td><td>{{$data['reference_list'][5][3]}}</td><td>{{$data['reference_list'][5][4]}}</td></tr>
<tr><td>{{$data['reference_list'][6][0]}}</td><td>{{$data['reference_list'][6][1]}}</td><td>{{$data['reference_list'][6][2]}}</td><td>{{$data['reference_list'][6][3]}}</td><td>{{$data['reference_list'][6][4]}}</td></tr>
<tr><td>{{$data['reference_list'][7][0]}}</td><td>{{$data['reference_list'][7][1]}}</td><td>{{$data['reference_list'][7][2]}}</td><td>{{$data['reference_list'][7][3]}}</td><td>{{$data['reference_list'][7][4]}}</td></tr>
</table>
@endif





</body>
</html> 

