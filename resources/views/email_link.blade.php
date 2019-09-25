<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>HRMS Jobseeker</title>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
</head>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>
<style>
    body {
        font-size: 100%;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .main-bg {
        background: url(../images/bg2.jpg) no-repeat center;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        min-height: 100vh;
    }

    /* title */
    h1 {
        font-size: 2.8vw;
        color: #fff;
        text-align: center;
        padding: 1.5vw 1vw 2vw;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    /* //title */

    /* content */
    .sub-main-w3 {
        margin: 1.5vw 5vw;
    }

    .bg-content-w3pvt {
        max-width: 400px;
        margin: 0 auto;
        background: #27a9de;
        text-align: center;
    }

    .top-content-style {
        padding: 2vw 4vw 4vw;
       background: #d5d8d8;
    }

    .top-content-style img {
        -webkit-border-radius: 0%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        -moz-border-radius: 50%;
      border-radius: 0%;
    }

    .sub-main-w3 form {
        background: #ffff;
        padding: 2em;
        -webkit-box-shadow: 2px 5px 16px 2px rgba(16, 16, 16, 0.18);
        -moz-box-shadow: 2px 5px 16px 2px rgba(16, 16, 16, 0.18);
        box-shadow: 2px 5px 16px 2px rgba(16, 16, 16, 0.18);
        margin: -2.5em 2.5em 2em;
        -webkit-border-radius: 4px;
        -o-border-radius: 4px;
        -ms-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    p.legend {
        color: #28a8dc;
        font-size: 24px;
        text-align: center;
        margin-bottom: 1.2em;
    }
    p.legend span {
        color: #27a9de;
        margin-left: 10px;
    }

    .input {
        position: relative;
        margin: 20px auto;
        width: 100%
    }

    .input span {
        position: absolute;
        display: block;
        color: #27a9de;
        left: 10px;
        top: 12px;
        font-size: 16px;
    }

    .input input {
        width: 100%;
        padding: 13px 10px 13px 34px;
        display: block;
        border: none;
        border: 1px solid #27a9de;
        color: #000;
        box-sizing: border-box;
        font-size: 13px;
        outline: none;
        letter-spacing: 1px;
        background: #fff;
        -webkit-box-shadow: 2px 5px 16px 2px rgba(16, 16, 16, 0.18);
        -moz-box-shadow: 2px 5px 16px 2px rgba(16, 16, 16, 0.18);
        box-shadow: 2px 5px 16px 2px rgba(16, 16, 16, 0.18);
    }
    .submit {
        width: 45px;
        height: 45px;
        display: block;
        margin: 2.5em auto 0;
        background: #1cc7d0;
        -webkit-border-radius: 10px;
        -o-border-radius: 10px;
        -ms-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        transition: 0.5s all;
    }

    .submit span {
        color: #fff;
        font-size: 20px;
    }

    .submit:hover {
        opacity: .8;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        transition: 0.5s all;
    }

    a.bottom-text-w3ls {
        color: #ffffff;
        font-size: 16px;
        display: inline-block;
        margin: 0em 1em 2em;
        letter-spacing: 1px;
    }

    /* //content */

    /* copyright */
    .copyright {
        margin-top: 3.08vw;
        padding-bottom: 1.5vw;
    }

    .copyright h2 {
        font-size: 16px;
        color: #fff;
        letter-spacing: 1px;
        text-align: center;
        line-height: 1.8;
    }

    .copyright h2 a {
        color: #1cc7d0;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        transition: 0.5s all;
    }

    .copyright h2 a:hover {
        opacity:.8;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        transition: 0.5s all;
    }
    .btn-info {
        color: #fff;
        background-color: #000;
        text-align: tan;
    }
    .btn-success {
        color: #fff;
        background-color: #1ba6df;
        border-radius: #1ba6df;
        text-align: tan;
    }
    .bg-content-w3pvt {
        margin: 0 auto;
        background: #27a9de;
        text-align: center;
        max-width: 100%

    }
    input type["password"]{

    }

    /* //copyright */

    /* responsive */
    @media(max-width:1280px) {
        .top-content-style {
            padding: 3vw 4vw 5vw;
        }

    }

    @media(max-width:1080px) {
        h1 {
            font-size: 3.5vw;
        }

    }

    @media(max-width:991px) {
        h1 {
            font-size: 4vw;
        }


        .top-content-style {
            padding: 3vw 4vw 6vw;
        }
    }

    @media(max-width:800px) {
        h1 {
            font-size: 5vw;
            padding: 2.5vw 1vw 3vw;
        }

        .top-content-style {
            padding: 4vw 4vw 9vw;
        }


        .copyright {
            margin-top: 3em;
            padding-bottom: 1.5em;
        }
    }

    @media(max-width:640px) {
        h1 {
            font-size: 6vw;
            padding: 3vw 1vw 4vw;
        }

    }

    @media(max-width:600px) {
        .copyright h2 {
            letter-spacing: 1px;
        }
    }

    @media(max-width:480px) {
        h1 {
            font-size: 2em;
            letter-spacing: 1px;
        }

        .top-content-style {
            padding: 2em 1em 4em;
        }

        .copyright h2 {
            font-size: 15px;
        }

        .copyright {
            margin-top: 2em;
            padding-bottom: 1em;
        }

        p.legend {
            font-size: 23px;
        }

        a.bottom-text-w3ls {
            font-size: 15px;
        }

    }

    @media(max-width:384px) {
        .sub-main-w3 form {
           
        }
     

        h1 {
            padding: 5vw 1vw 6vw;
        }
    }

    @media(max-width:320px) {
        h1 {
            font-size: 1.7em;
        }

        .sub-main-w3 form {
           
        }

        .top-content-style {
            padding: 1.5em 1em 3em;
        }

        .copyright h2 {
            font-size: 14px;
        }

    }
</style>

<body><br><br><br><br><br>
        <div class="sub-main-w3">
            <div class="bg-content-w3pvt" style="max-width: 40%;height: 480px;">
                <div class="top-content-style">
                     <img src="http://hrmssystems.com/public/images/hrmslogo.png" />
                </div>
                <form method="post" action="{{url('forgot')}}" class="text-center"> 
                    <p class="legend">Check Below<span class="fa fa-hand-o-down"></span></p>
                    {{ csrf_field()}}
                    <div class="form-group m-b-0"> 
                        <div class="form-group row">
                            <label for="name" class="control-label col-lg-4">New Password:<span style="color:red;">*</span></label>
                                <div class="col-lg-8">
                                    <input type="hidden" name="email" class="form-control" placeholder="Enter Old Password" value="{{$email}}" required>
                                    <input type="password" name="new_password" class="form-control" placeholder="Enter Old Password" required>
                                </div>
                        </div><!--end-->
                        <div class="form-group row">
                            <label for="name" class="control-label col-lg-4">Confirm Password:<span style="color:red;">*</span></label>
                                <div class="col-lg-8">
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Enter New Password" required>
                                </div>   
                        </div>
                        <div class="form-group"> 
                            <input type="submit" class="btn btn-success" value="Reset">
                        </div>
                    </div> 
                </form>
            </div>
        </div>  
@include('include.footers')
</body>
</html>