<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
</head>
<body>
    
            
                <table style="width:40%;text-align:center;border-spacing: 0px;" border="1">
                    <thead>
                        <tr  style="font-family: 'Raleway', sans-serif">
                            <th >Job Code</th>
                            <th >Job Title</th>
                            <th >Candidate Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-family: 'Raleway', sans-serif">
                            <td >{{$data['job_code']}}</td>
                            <td >{{$data['job_title']}}</td>
                            <td >{{$data['candidate_name']}}</td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <hr>
                
            <h3 style="font-family: 'Raleway', sans-serif;margin-top:20px;font-size:20px;font-weight:200">Reason - "{{$data['val_text']}}"</h3>
            
            <hr>
            <br><br>
            </div>
       
</body>
</html>