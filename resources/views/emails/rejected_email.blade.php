<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>

    <center>
        <div style="width:50%">
            <table style="width:100%;text-align:center;border-collapse:collapse;" border="1">
                <thead>
                    <tr style="font-family: 'Raleway', sans-serif">
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">Job Code</th>
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">Job Title</th>
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">Candidate Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="font-family: 'Raleway', sans-serif">
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['job_code']}}</td>
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['job_title']}}</td>
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['candidate_name']}}</td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <hr>

            <h3 style="font-family: 'Raleway', sans-serif;margin-top:20px;font-size:20px;font-weight:200">Reason -
                {{$data['val_text']}}</h3>

            <hr>
            <br><br>
        </div>
    </center>

</body>

</html>
