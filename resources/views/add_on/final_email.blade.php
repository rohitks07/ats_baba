<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .full {
            width: 70%;
        }

        .body {
            width: 50%;
        }

        body {
            font-family: 'Raleway', sans-serif;
        }

    </style>
</head>

<body>
    <center>
        <div class="full">

            <div class="head">
                <p style="font-size:24px;">{{$data['heading_input_val']}}</p>
            </div>
            <div class="body">
                <p style="font-size:18px;">{{@$data['body_head_input_val']}}</p>
                <h4>Job Details</h4>
                <table border="1"
                    style="border-spacing:0px;border-collapse: collapse;text-transform: capitalize;width:100%;">
                    <tr>
                        <td style="padding:20px;">Company Name </td>
                        <td style="padding:20px;">{{$data['job_client_name']}}</td>
                    </tr>
                    <tr>
                        <td style="padding:20px;">Job Title </td>
                        <td style="padding:20px;">{{$data['job_title']}}</td>
                    </tr>
                    <tr>
                        <td style="padding:20px;">Job Location</td>
                        <td style="padding:20px;">{{$data['location']}}</td>
                    </tr>
                    <tr>
                        <td style="padding:20px;">Job description</td>
                        <td style="padding:20px;">{{$data['job_detail']}}</td>
                    </tr>
                    <tr>
                        <td style="padding:20px;">Job Pay Rate</td>
                        <td style="padding:20px;">{{$data['job_pay_rate']}}</td>
                    </tr>
                    <tr>
                        <td style="padding:20px;">Job Visa Type</td>
                        <td style="padding:20px;">
                            <p style="font-size:12px;">{{$data['job_visa']}}<p>
                        </td>
                    </tr>
                </table><br><br>
                <h4>Candidate Details</h4>
                <table border="1"
                    style="border-spacing:0px;border-collapse: collapse;text-transform: capitalize;width:100%;">
                    <tr>
                        <td style="padding:20px;">Candidate Name</td>
                        <td style="padding:20px;">{{$data['candidate_name_val']}}</td>
                    </tr>
                    <tr>
                        <td style="padding:20px;">Candidate Visa Type</td>
                        <td style="padding:20px;">{{$data['candidate_visa']}}</td>
                    </tr>
                    <tr>
                        <td style="padding:20px;">Candidate Location</td>
                        <td style="padding:20px;">{{$data['candidate_location']}}</td>
                    </tr>
                    <tr>
                        <td style="padding:20px;">Candidate Skills</td>
                        <td style="padding:20px;font-size:12px;">{{$data['candidate_skill']}}</td>
                    </tr>
                </table>
                <div class="footer">

                    <p>Thanks and regards</p>
                    <p>{{$data['user_name']}}</p>
                    <p><b>{{$data['footer']}}</b></p>

                </div>
            </div>
    </center>
</body>

</html>
