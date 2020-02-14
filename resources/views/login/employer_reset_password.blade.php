<!doctype HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link rel="stylesheet" href="{{url('public/login/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-deep_purple.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/login/css/style.css')}}">
<title>BABA SoftWare Reset Password</title>
    <style>
        .mdl-textfield__label {
            margin-bottom: 0;
            color: #4e5050;
            font-weight: normal;
        }
        
        .mdl-textfield--floating-label.is-focused .mdl-textfield__label,
        .mdl-textfield--floating-label.is-dirty .mdl-textfield__label {
            text-transform: uppercase
        }
        
        .has-feedback label~.form-control-feedback {
            top: 15px;
        }
        
        .mdl-textfield {
            width: 100%;
        }
        
        .mdl-checkbox__label {
            cursor: text;
            font-size: 12px;
            float: left;
            color: #b0b3b4;
            font-weight: normal;
        }
        
        .mdl-checkbox__box-outline {
            border: 1px solid #b0b3b4;
        }
        
        .mdl-textfield__input {
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.48);
            display: block;
            font-size: 16px;
            margin: 0;
            padding: 4px 0;
            width: 100%;
            background: 0 0;
            text-align: left;
            color: inherit;
            font-weight: bold;
        }
        
        .mdl-switch__label {
            float: left;
            font-weight: normal;
            color: #4e5050;
            font-size: 14px;
        }

        .carousel-btns{
            margin-bottom:-60px;
        }

        /* .col-md-5 {
            border:1px solid black;
        }

        .col-md-12 {
            border:1px solid black;
        } */

        .imgcontainer img {
            height:150px;
        }  

        .imgcontainer2 img {
            height:40px;
            margin:20px 0px;
        }
        
        canvas {
        display: block;
        vertical-align: bottom;
        }

        #particles-js {
            width: 100vw;
            height: 100vh;
            background: #00356B;
        }
        #particle {
            background: linear-gradient(to top, #03A9F4,#673AB7, #3F51B5);
        position:fixed;
        top:0;
        right:0;
        bottom:0;
        left:0;
        z-index:0; 
        }
        #overlay {
        position: relative;
        }
        .lt-register-btn {
        background: #2196f3;
        color: #fff;
        border-radius: 30px;
        text-transform: uppercase;
        padding: 12px 65px 12px 50px;
        line-height: normal;
        font-size: 16px;
        position: relative;
        margin-top: 0px;
    }
    .mdl-textfield {
    width: 82%;
}
    </style>
</head>

<body  id="particles-js">
   
    <div id="particle"></div>
    <div id="overlay">
    <div class="container">
        <div class="center-block">
            <div class="col-lg-4 no-padding" style="z-index:1">
                <div class="mlt-content">
                    <div class="imgcontainer">
                       <a href="http://baba.software/index.php"><img src="{{url('public/login/img/baba logo.png')}}" alt="logo"/></a>
                    </div>
                   
                    <ul class="nav nav-tabs">
                       <!-- <li class="active"><a href="#register" data-toggle="tab">Register</a></li>-->
                        <li class="active"><a href="#" data-toggle="tab">Forget link</a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                      
                        <div class="tab-pane fade in active" id="login">
                            <form>
                                <div class="alert alert-info alert-dismissible" style="margin-left:25px;margin-right:25px;">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Enter your <b>Email</b> Below!!!
                                </div>

                                <div class="col-lg-12 col-lg-offset-1 col-lg-offset-right-1 col-md-12 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="email" id="emailAddress">
                                        <label class="mdl-textfield__label" for="" placeholder="Email Address">Email Address</label>
                                    </div>
                                </div>

                                

                              <div class="col-lg-12 col-lg-offset-1 col-lg-offset-right-1 col-md-12 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <button class="btn lt-register-btn">Reset <i class="icon-right "></i></button>
                              </div>

                             <div class="col-md-12 mt-2" style="margin-top: 1em;">
                                <a href="http://baba.software/privacy.php" style="color: rgb(12, 11, 11);">Privacy Policy</a> | <a href="http://baba.software/terms-condition.php" style="color: rgb(12, 11, 11);">Terms of Use</a><br>
                             </div>
                             <div class="col-md-12 mt-2" style="margin-top: 1em;">
                             <a href="{{url('/')}}"><span type="button" class="btn btn-info" >BACK</span></a>
                            </div>
                             
                             
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 no-padding">
            <div class="mlt-carousel">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                        <img class="img-responsive center-block" src="{{url('public/login/img/reset password.png')}}" alt="step1">
                           
                        </div>
                        
                    </div>
                    <!-- Indicators -->
                    <!-- <ol class="carousel-indicators carousel-btns">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        
                       
                    </ol> -->
                </div>
                <!--mlt-carousel-->
            </div>
        </div>
                                  
                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
            <!--center-block-->

            <div class="col-md-12 text-center" style="color:rgb(250, 248, 248); padding-top:40px; ">
                ATS © 2019 - 2020 BABA Software. All rights reserved.
            </div>
        </div>
        
            
        <!--container-->
    </div>
</div>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="{{url('public/login/node_modules/jquery/dist/jquery.min.js ')}}"></script>
<script src="{{url('public/login/node_modules/bootstrap/dist/js/bootstrap.min.js ')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <script>
        //Google analytics.
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-79865537-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        //Form validation.
        $('form').validate({
            rules: {
                fname: {
                    minlength: 3,
                    maxlength: 15,
                }
            },
            errorPlacement: function(error, element) {},
            highlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                $(id_attr).removeClass('icon-ok-circled2').addClass('icon-cancel-circled2');
            },
            unhighlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(id_attr).removeClass('icon-cancel-circled2').addClass('icon-ok-circled2');
            },
        });
    </script>
<script>
    var options = {"particles":{"number":{"value":99,"density":{"enable":true,"value_area":552.4033491425909}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":3},"image":{"src":"img/github.svg","width":70,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":2,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":1.5782952832645452,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":false};
particlesJS("particle", options);

</script>

   
</body>

</html>