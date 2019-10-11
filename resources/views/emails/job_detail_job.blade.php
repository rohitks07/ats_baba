<head>
    <!-- Latest compiled and minified CSS -->
</head>

<div id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
    <div class="card-body">

        <a href=""><i class="fa fa-external-link fa-1x" aria-hidden="true"></i></h2></a>
        <div class="row">
            <div style="width:530px;">
                <h2 style="font-weight:100;color:#317eeb;text-align: center;">Candidate Detail's</h2>
                <table class="table table-bordered" border="1" cellpadding="10"
                    style=" border-collapse:collapse;font-size:18px;margin-top:20px;width:600px;">
                    <tbody>

                        {{-- <tr>
													      <th>Industry:</th>													
													      <td>{{$data['job_detail']->industry_name}}</td>
                        </tr> --}}
                        <tr>
                            <th>Name</th>
                            <td>{{$data['candidate_val']['first_name']}}{{$data['candidate_val']['middle_name']}}{{$data['candidate_val']['last_name']}}
                            </td>
                        </tr>
                        <tr>
                            <th>DOB:</th>
                            <td>{{$data['candidate_val']['dob']}}</td>
                        </tr>
                        <tr>
                            <th>Visa:</th>
                            <td>{{$data['candidate_val']['visa_status']}}</td>
                        </tr>
                        <tr>
                            <th>Job Location:</th>
                            <td>{{$data['candidate_val']['country']}}</td>
                        </tr>
                        <tr>
                            <th>Experience:</th>
                            <td>{{$data['candidate_val']['experience']}}</td>
                        </tr>
                        <tr>
                            <th>Education:</th>
                            <td>{{$data['seeker_exp']['degree_title']}}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{$data['candidate_val']['email']}}</td>
                        </tr>
                        <tr>
                            <th>Mobile:</th>
                            <td>{{$data['candidate_val']['mobile']}}</td>
                        </tr>
                        <tr>
                            <th>Skype Id:</th>
                            <td>{{$data['candidate_val']['skype_id']}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
               


            </div>
            <div style="width:590px;">
                <h3 style="font-weight:100;color:#317eeb;text-align: center;">Skills</h3>
                <table class="table table-bordered" border="1" cellpadding="10"
                    style=" border-collapse:collapse;font-size:18px;width:600px;">
                    <tbody>
                        @foreach ($data['skills'] as $id)


                        <tr>
                            <th>{{$id['skill_name']}}</th>

                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
