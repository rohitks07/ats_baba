<!DOCTYPE html>
<html lang="en">
@if($val == 1)

<head>
    <title>HRMS Form</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
{{-- <style>
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    dl,
    dt,
    dd,
    ol,
    nav ul,
    nav li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    ol,
    ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    /* start editing from here */
    a {
        text-decoration: none;
    }

    .txt-rt {
        text-align: right;
    }

    /* text align right */
    .txt-lt {
        text-align: left;
    }

    /* text align left */
    .txt-center {
        text-align: center;
    }

    /* text align center */
    .float-rt {
        float: right;
    }

    /* float right */
    .float-lt {
        float: left;
    }

    /* float left */
    .clear {
        clear: both;
    }

    /* clear float */
    .pos-relative {
        position: relative;
    }

    /* Position Relative */
    .pos-absolute {
        position: absolute;
    }

    /* Position Absolute */
    .vertical-base {
        vertical-align: baseline;
    }

    /* vertical align baseline */
    .vertical-top {
        vertical-align: top;
    }

    /* vertical align top */
    nav.vertical ul li {
        display: block;
    }

    /* vertical menu */
    nav.horizontal ul li {
        display: inline-block;
    }

    /* horizontal menu */
    img {
        max-width: 100%;
    }

    /*end reset*/
    html,
    body {
        padding: 0;
        margin: 0;
        background: #fff;
        font-family: 'Barlow', sans-serif;
    }

    body a {
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
        text-decoration: none;
    }

    body a:hover {
        text-decoration: none;
    }

    body a:focus,
    a:hover {
        text-decoration: none;
    }

    select,
    input[type="email"],
    input[type="text"],
    input[type=password],
    input[type="button"],
    input[type="submit"],
    textarea {
        font-family: 'Barlow', sans-serif;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
        font-family: 'Barlow', sans-serif;
        letter-spacing: 1px;
    }

    p {
        margin: 0;
        padding: 0;
        letter-spacing: 1px;
        font-family: 'Barlow', sans-serif;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    /*-- //Reset-Code --*/
    body {
        background: #0e99ea;
        min-height: 100vh;
    }

    h1.header-w3ls {
        padding: 31px 0px 25px;
        font-size: 53px;
        text-align: center;
        text-transform: capitalize;
        color: #ffffff;
        text-shadow: 2px 3px rgba(0, 0, 0, 0.42);
        letter-spacing: 5px;
    }

    .form-group {
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -moz-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between;
    }

    .form-mid-w3ls {
        flex-basis: 48%;
        -webkit-flex-basis: 48%;
    }

    .main-bothside {
        width: 42%;
        padding: 2em 2em 2em;
        margin: 0em auto;
        -webkit-box-shadow: -2px 7px 37px 8px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: -2px 7px 37px 8px rgba(0, 0, 0, 0.2);
        box-shadow: -2px 7px 37px 8px rgba(0, 0, 0, 0.2);
        background: #fff;
    }

    .personal-info p,
    label.form-check-label,
    .form-control-w3l p,
    .form-mid-w3ls p {
        font-size: 15px;
        color: #000;
        padding-bottom: 5px;
    }

    .personal-info p,
    .form-control-w3l p,
    .form-mid-w3ls p {
        font-weight: 500;
    }

    .form-check {
        display: inline-block;
    }

    .personal-info {
        padding-top: 30px;
    }

    .form-check:nth-child(2),
    .form-check:nth-child(3) {
        margin-right: 9px;
    }

    .form-mid-w3ls input[type="text"],
    .form-mid-w3ls input[type="email"],
    .form-mid-w3ls input[type="date"],
    select,
    .form-control-w3l textarea {
        outline: none;
        width: 100%;
        color: #000;
        font-size: 14px;
        padding: .8em .8em;
        border: 1px solid #9E9E9E;
        display: inline-block;
        background: none;
        letter-spacing: 2px;
        transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        box-sizing: border-box;
    }

    .form-control-w3l textarea {
        height: 8em;
        overflow: hidden;
        resize: none;
    }

    .form-control-w3l {
        margin: 24px 0px;
    }

    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: #000;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #000;
    }

    :-ms-input-placeholder {
        /* IE 10+ */
        color: #000;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #000;
    }

    input[type="submit"] {
        text-transform: uppercase;
        background: #0e99ea;
        color: #ffffff;
        padding: .7em 0em;
        border: none;
        font-size: 1em;
        outline: none;
        width: 24%;
        letter-spacing: 1px;
        cursor: pointer;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
    }

    input[type="submit"]:hover {
        color: #fff;
        background: #000;
    }

    .copy {
        padding: 33px 0px;
    }

    .copy p {
        margin: 0em;
        text-align: center;
        font-size: 17px;
        color: white;
        letter-spacing: 2px;
    }

    .copy p a {
        color: #000;
        text-decoration: none;
    }

    .copy p a:hover {
        color: #fff;
    }

    /*--responsive--*/
    @media(max-width:1920px) {
        h1.header-w3ls {
            font-size: 60px;
        }
    }

    @media(max-width:1680px) {
        h1.header-w3ls {
            font-size: 57px;
        }
    }

    @media(max-width:1600px) {
        h1.header-w3ls {
            font-size: 53px;
        }
    }

    @media(max-width:1440px) {
        .main-bothside {
            width: 47%;
        }

        h1.header-w3ls {
            font-size: 50px;
            letter-spacing: 4px;
        }
    }

    @media(max-width:1366px) {
        input[type="submit"] {
            width: 27%;
        }

        .form-control-w3l textarea {
            height: 7em;
        }
    }

    @media(max-width:1280px) {
        h1.header-w3ls {
            font-size: 47px;
        }

        .main-bothside {
            width: 50%;
        }
    }

    @media(max-width:1080px) {
        .main-bothside {
            width: 54%;
        }

        .copy {
            padding: 30px 0px;
        }

        h1.header-w3ls {
            padding: 25px 0px 22px;
        }
    }

    @media(max-width:1050px) {
        .personal-info {
            padding-top: 27px;
        }
    }

    @media(max-width:1024px) {
        .main-bothside {
            width: 58%;
        }

        .personal-info p,
        label.form-check-label,
        .form-control-w3l p,
        .form-mid-w3ls p {
            padding-bottom: 5px;
        }
    }

    @media(max-width:991px) {
        input[type="submit"] {
            width: 31%;
        }

        .main-bothside {
            padding: 1.8em 1.8em 1.8em;
        }

        .copy p {
            font-size: 16px;
        }
    }

    @media(max-width:900px) {
        h1.header-w3ls {
            font-size: 44px;
            letter-spacing: 4px;
        }

        .main-bothside {
            width: 66%;
        }

        .personal-info {
            padding-top: 23px;
        }
    }

    @media(max-width:800px) {
        h1.header-w3ls {
            padding: 20px 0px 21px;
        }

        input[type="submit"] {
            padding: .6em 0em;
            font-size: .9em;
        }
    }

    @media(max-width:768px) {
        .main-bothside {
            width: 72%;
        }

        .form-mid-w3ls input[type="text"],
        .form-mid-w3ls input[type="email"],
        .form-control-w3l textarea {
            padding: .7em .8em;
        }

        h1.header-w3ls {
            font-size: 42px;
        }
    }

    @media(max-width:767px) {
        .copy p {
            font-size: 15px;
        }

        .copy {
            padding: 25px 0px;
        }
    }

    @media(max-width:736px) {
        .personal-info {
            padding-top: 20px;
        }
    }

    @media(max-width:667px) {

        .personal-info p,
        label.form-check-label,
        .form-control-w3l p,
        .form-mid-w3ls p {
            padding-bottom: 4px;
        }

        .form-control-w3l {
            margin: 21px 0px;
        }
    }

    @media(max-width:640px) {
        .copy p {
            font-size: 14px;
        }

        .main-bothside {
            width: 77%;
        }

        h1.header-w3ls {
            font-size: 40px;
            letter-spacing: 3px;
        }
    }

    @media(max-width:600px) {
        .main-bothside {
            padding: 1.4em 1.4em 1.4em;
        }

        input[type="submit"] {
            width: 34%;
        }

        .form-control-w3l textarea {
            height: 6em;
        }

    }

    @media(max-width:568px) {
        .main-bothside {
            width: 81%;
        }

        .personal-info p,
        label.form-check-label,
        .form-control-w3l p,
        .form-mid-w3ls p {
            font-size: 14px;
        }

        .copy p {
            line-height: 28px;
        }
    }

    @media(max-width:480px) {
        h1.header-w3ls {
            font-size: 37px;
            letter-spacing: 2px;
        }

        .personal-info p,
        .form-control-w3l p {
            padding-bottom: 11px;
            line-height: 28px;
        }

        input[type="submit"] {
            width: 38%;
        }
    }

    @media(max-width:440px) {
        .form-group {
            flex-direction: column;
            -webkit-flex-direction: column;
        }
    }

    @media(max-width:384px) {

        .form-control-w3l {
            margin: 17px 0px;
        }

        input[type="submit"] {
            width: 45%;
        }
    }

    @media(max-width:375px) {
        h1.header-w3ls {
            font-size: 30px;
        }

        .main-bothside {
            padding: 1.2em 1.2em 1.2em;
        }
    }

    @media(max-width:320px) {
        h1.header-w3ls {
            font-size: 27px;
        }

        .form-check {
            display: block;
        }

        .form-check:nth-child(2),
        .form-check:nth-child(3) {
            margin-right: 0px;
            margin-bottom: 6px;
        }
    }

    /*--//responsive--*/
    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button2 {
        background-color: #008CBA;
    }

    /* Blue */
    .button3 {
        background-color: #f44336;
    }

    /* Red */
    .button4 {
        background-color: #317eeb;
        width: 100%;
        height: 36px;
        color: #fff;
    }

    .button5 {
       background-color: #317eeb;
       font-size:25px;
       padding: 20px;
       color: #fff;
       margin-top: 50px;
       border-radius: 50px;
       border:none;
       transition: 0.5s;

    }
    .button5:hover{
        background-color: #4EABEE;
        cursor: pointer;

    }

    hr.new2 {
        border-top: 1px dashed #000;
    }
    .fa-check{
        font-size: 250px;
        color:white;
        background-color: green;
        padding: 20px;
        border-radius: 250px;

    }

</style> --}}
<!-- multistep form -->
<style>
    .fa-check {
        font-size: 50px;
        ;
    }

</style>

<body
    style="background-image:linear-gradient(to bottom , #0E5588 , #45B1FF  , white);background-repeat:no-repeat;height:99.1vh;">



    <h1 class="header-w3ls"></h1>
    <div class="main-bothside">
        <div style="float:left"></div>
        <div style="float:right;"><img src=""></div>
    </div>
    <div class="main-bothside">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6" id="none_div" style="margin-top:10%;">

                    <div class="card">
                        <div class="card-header">
                            <img alt="" style="float:left;height:120px;"
                                src="{{url('public/companylogo/baba_logo.png')}}" alt="Logo missing">
                            <img alt="" style="float:right;height:40px;margin-top:6%;"
                                src="{{url('public/companylogo/'.$mail_data['org_id']->company_logo )}}" id="comp_logo"
                                alt="Logo missing">
                        </div>
                        <div class="card-body">
                            {{-- <h5 class="card-title"></h5> --}}
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            <center>
                                <form action="{{url('interview/reshidule_new/')}}" method="post">
                                    @csrf
                                    <h1 class="card-text"
                                        style="font-family: 'Raleway', sans-serif;font-size:20px;margin-top:50px;">Enter
                                        new date and time</h1>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-4">
                                            <small>Start Date</small><input type="date" placeholder="Enter Start date"
                                                class="form-control" name="start_date" id="" required>
                                        </div>
                                        <div class="col-md-4">
                                            <small>End Date</small><input type="date" placeholder="Enter End date"
                                                class="form-control" name="end_date" id="">
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-4">
                                            <small>Start Time</small><input type="time" placeholder="Enter Start date"
                                                class="form-control" name="start_time" id="" required>
                                        </div>
                                        <div class="col-md-4">
                                            <small>End Time</small><input type="time" placeholder="Enter End date"
                                                class="form-control" name="end_time" id="">
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                    </div>

                                    <br>
                                    <small id="error" style="color:red;display:none;">** This cannot be empty **</small>


                                    <hr style="margin-top:50px;">
                                    <button class="btn btn-primary " type="submit"> Submit</button>
                                    <input type="hidden" value="{{$id}}" id="id_val" name="id_val">
                                    <br><br>
                                </form>

                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>

            <div class="col-md-6">
                <div class="data_view" style="display: none;margin-top:3%;">

                </div>
            </div>
        </div>
    </div>
    </div>



</body>
@else
<center>
    <style>
        #btn {
            border: none;
            background-color: #1B94EC;
            font-size: 20px;
            color: white;
            padding: 20px;
            border-radius: 20px;
        }

        #btn:hover {
            background-color: #206393;
            transition: 0.5s;
        }

    </style>

    <h1
        style="font-size:50px;text-transform:uppercase;letter-spacing:3px;font-family:Helvetica Narrow, sans-serif;margin-top:15%;">
        Page not found</h1>
    <br><br>
    <h1 style="font-size:40px;text-transform:uppercase;letter-spacing:3px;font-family:Helvetica Narrow, sans-serif;">
        error 404</h1>
    <br><br>
    <button id="btn" onclick="window.location='{{ url("/") }}'"> Back to home </button>
</center>

@endif

</html>
