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

        <div style="width:70%;">
            <p style="font-size:20px;">{{$data['msg']}}</p>
            <table style="width:100%;text-align:center;border-collapse:collapse;" border="1">
                <thead>
                    <tr style="font-family: 'Raleway', sans-serif;">
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">Start date</th>
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">Start time</th>
                        @if(($data['end_time']!=="")&&($data['end_time']!==null))
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">End time</th>
                        @endif
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">job_code</th>
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">Job title</th>
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">Candidate name</th>
                        <th style="padding:20px 0px 20px 0px;font-size:12px;">Location</th>

                    </tr>
                </thead>
                <tbody>
                    <tr style="font-family: 'Raleway', sans-serif">
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['start_date']}}</td>
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['start_time']}}</td>
                        @if(($data['end_time']!=="")||($data['end_time']!==null))
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['end_time']}}</td>
                        @endif
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['job_code']}}</td>
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['job_title']}}</td>
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['candidate_name']}}</td>
                        <td style="padding:20px 0px 20px 0px;font-size:12px;">{{$data['company_city']}} , {{$data['company_state']}} ,
                            {{$data['company_country']}} </td>

                    </tr>
                </tbody>
            </table>

            <br>
            <br>
            <hr>
            <p style="font-size:18px;">Reason - {{$data['reason']}}</p>
            <hr>

        </div>
        
    </center>

</body>

</html>
