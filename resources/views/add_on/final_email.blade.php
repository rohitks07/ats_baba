<br><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .full {
            width: 45%;
        }

        .body {
            width: 100%;
        }

        body {
            font-family: 'Raleway', sans-serif;
        }

    </style>
</head>

<body>

    <div class="full">

        <table border=".1" style="border-spacing:0px;border-collapse: collapse;text-transform: capitalize;width:100%;">
            

                <tr>
                    <td style="padding:30px; >
                        <div class="head">
                            <p style="font-size:18px;"><?php echo $data['heading_input_val']; ?></p>
                        </div>
                        <div class="body">
                            <p style="font-size:18px;">{{@$data['body_head_input_val']}}</p>
                        </td>
                </tr>
                <tr>
                        <td>
                            <h4>Job Details</h4>
                            <table border="1"
                                style="border-spacing:0px;border-collapse: collapse;text-transform: capitalize;width:100%;">
                                <tr>
                                    <td style="padding:6px;">Company Name </td>
                                    <td style="padding:6px;">{{$data['job_client_name']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding:6px;">Job Title </td>
                                    <td style="padding:6px;">{{$data['job_title']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding:6px;">Job Location</td>
                                    <td style="padding:6px;">{{$data['location']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding:6px;">Job description</td>
                                    <td style="padding:6px;">{{$data['job_detail']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding:6px;">Job Pay Rate</td>
                                    <td style="padding:6px;">{{$data['job_pay_rate']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding:6px;">Job Visa Type</td>
                                    <td style="padding:6px;">
                                        <p style="font-size:12px;">{{$data['job_visa']}}<p>
                                    </td>
                                </tr>
                            </table>
                            <h4>Candidate Details</h4>
                            <table border="1"
                                style="border-spacing:0px;border-collapse: collapse;text-transform: capitalize;width:100%;">
                                <tr>
                                    <td style="padding:6px;">Candidate Name</td>
                                    <td style="padding:6px;">{{$data['candidate_name_val']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding:6px;">Candidate Visa Type</td>
                                    <td style="padding:6px;">{{$data['candidate_visa']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding:6px;">Candidate Location</td>
                                    <td style="padding:6px;">{{$data['candidate_location']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding:6px;">Candidate Skills</td>
                                    <td style="padding:6px;font-size:12px;">{{$data['candidate_skill']}}</td>
                                </tr>
                            </table>
                            <div class="footer">

                                <p>Thanks and regards</p>
                                <p><b>{{$data['user_name']}}</b></p>
                                <?php echo $data['signature_show']; ?>

                                {{-- <p><b>{{$data['footer']}}</b></p> --}}
                                <br><br>
                            </div>
                        </div>
                    </td>
                </tr>
           

        </table>


</body>

</html>
