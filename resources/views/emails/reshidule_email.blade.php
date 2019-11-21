<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>
<body>

           
                <table style="width:60%;text-align:center;border-spacing: 0px;" border="1"> 
                    <thead>
                        <tr style="font-family: 'Raleway', sans-serif">
                            <th>Start date</th>
                            <th>Start time</th>
                            <th>job_code</th>
                            <th>Job title</th>
                            <th>Candidate name</th>
                            <th>Location</th>
                            <th>Street Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-family: 'Raleway', sans-serif">
                            <td >{{$data['start_date']}}</td>
                            <td >{{$data['start_time']}}</td>
                            <td >{{$data['job_code']}}</td>
                            <td >{{$data['job_title']}}</td>
                            <td >{{$data['candidate_name']}}</td>
                            <td >{{$data['company_city']}} , {{$data['company_state']}} , {{$data['company_country']}} </td>
                            <td >{{$data['company_location_one']}}</td>
                        </tr>
                    </tbody>
                </table>
                
            <br>
            <br>
            <h3>{{$data['msg']}}</h3>
            </div>
        
</body>
</html>