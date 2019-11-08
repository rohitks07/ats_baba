<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/moltran/blue/pages-coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:16 GMT -->

<head>
  <meta charset="utf-8" />
  <title>Ats</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="{{url('assets/images/favicon_1.ico')}}">
  <!-- Custom Files -->
  <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('assets/css/personal.css')}}" rel="stylesheet" type="text/css" />
  <script src="{{url('assets/js/modernizr.min.js')}}"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="navbar-brand" src="{{url('public/companylogo/'.$company_record->company_logo)}}" style="width: 9%;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Search Job<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Search Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div class="top-colSection">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="candidatesection">
            <div class="col-md-12">
              <center>
                <form action="http://hrmssystems.com/job_search" name="jsearch" id="jsearch"
                  enctype="multipart/form-data" method="post" accept-charset="utf-8">

                  <div class="input-group" style="width: 80%;">
                    <input type="text" name="" id="search_job" class="form-control" placeholder="Job title, Keywords, Company">
                    &nbsp;
                    <div class="input-group" style="width: 46%;">
                      <input type="text" class="form-control" id="search_location" placeholder="City, Country, Postal code">
                      <div class="input-group-append">
                        <span class="input-group-text" style="height: 38px;"><i class="fa fa-map-marker"></i></span>
                      </div>
                    </div>&nbsp;
                    <button type="button" id="submit" class="btn btn-warning waves-effect waves-light m-b-5" style="height: 38px;">
                      <i class="fa fa-search"></i> <span>Find</span> </button>
                  </div>
                </form>
              </center>
            </div>

            <div class="clear"></div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>



  <div class="row res">
    <div class="col-md-2 sidc">

      <div class="col-md-12">
        <div id="accordion-test" class="card-box">
          <div class="card mb-0">
            <div class="card-header" id="headingOne2">
              <h5 class="m-0 card-title">
                <a href="#" class="text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                  aria-controls="collapseOne">Posted Date
                </a>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne2" data-parent="#accordion-test">
              <div class="card-body">
                <button type="button" class="btn btn-primary waves-effect waves-light m-b-5 cor">Any Date</button><br>
                <button type="button" class="btn btn-primary waves-effect waves-light m-b-5 cor">Today</button><br>
                <button type="button" class="btn btn-primary waves-effect waves-light m-b-5 cor">Last 3
                  Days</button><br>
                <button type="button" class="btn btn-primary waves-effect waves-light m-b-5 cor">Last 3 Days</button>
              </div>
            </div>
          </div>
          <div class="card mb-0">
            <div class="card-header" id="headingTwo2">
              <h5 class="m-0 card-title">
                <a href="#" class="text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                  aria-controls="collapseTwo">
                  Employment Type
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo2" data-parent="#accordion-test">
              <div class="card-body">
                <input id="checkbox1" type="checkbox"> &nbsp;<button type="button"
                  class="btn btn-primary waves-effect waves-light m-b-5 cor" style="width: 190px;">Full
                  Time</button><br>
                <input id="checkbox1" type="checkbox"> &nbsp;<button type="button"
                  class="btn btn-primary waves-effect waves-light m-b-5 cor" style="width: 190px;">Contract</button>
              </div>
            </div>
          </div>
          <div class="card mb-0">
            <div class="card-header" id="headingThree2">
              <h5 class="m-0 card-title">
                <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">
                  Distance
                </a>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree2" data-parent="#accordion-test">
              <div class="card-body">
                <div class="input-group">
                  <span class="input-group-prepend">
                    <button type="button" class="btn waves-effect waves-light btn-primary"><i
                        class="fa fa-minus"></i></button>
                  </span>
                  <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control"
                    placeholder="meter / Kilometer">
                  <span class="input-group-prepend">
                    <button type="button" class="btn waves-effect waves-light btn-primary"><i
                        class="fa fa-plus"></i></button>
                  </span>
                </div>

                <p style="margin-top: 10px;">radius from Noida, Uttar Pradesh, India</p>

                <div class="slidecontainer">
                  <input type="range" min="1" max="100" value="50" class="slider" id="myRange" style="width: 216px;">
                  <p>Value: <span id="demo"></span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-0">
            <div class="card-header" id="headingThree2">
              <h5 class="m-0 card-title">
                <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="false" aria-controls="collapseThree">
                  Employer Type
                </a>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingThree2" data-parent="#accordion-test">
              <div class="card-body">
                <input id="checkbox1" type="checkbox"> &nbsp;<button type="button"
                  class="btn btn-primary waves-effect waves-light m-b-5 cor" style="width: 190px;">Direct
                  Hire</button><br>
                <input id="checkbox1" type="checkbox"> &nbsp;<button type="button"
                  class="btn btn-primary waves-effect waves-light m-b-5 cor" style="width: 190px;">Recruiter</button>
              </div>
            </div>
          </div>
          <div class="card mb-0">
            <div class="card-header" id="headingThree2">
              <h5 class="m-0 card-title">
                <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFive"
                  aria-expanded="false" aria-controls="collapseThree">
                  Work From Home Available
                </a>
              </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingThree2" data-parent="#accordion-test">
              <div class="card-body">
                <input id="checkbox1" type="checkbox"> &nbsp;<button type="button"
                  class="btn btn-primary waves-effect waves-light m-b-5 cor" style="width: 190px;">Yes</button>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>



    <div class="col-md-10">
      <!-- <div class="crd" style="width: 92%;">
       <div class="row">
        <div class="col-md-10" style="background-color: #f7f7f7;">
         <h3 style="color: #069;"> Technical Recruiter </h3>
         <h4> Triveni IT </h4>
       </div>
       <div class="col-md-2">
         <img src="{{url('assets/images/sunweb.png')}}" class="log img img-thumbnail">
       </div>
     </div>
     <div class="row" style="border-bottom: 1px solid #9c9797;">
      <i class="fa fa-map-marker ft-size" aria-hidden="true"></i>
      <div class="col-md-10">
       <p style="font-size: 16px;">C-202, D Block, Sector 63, Noida, Uttar Pradesh 201301, India</p>
     </div>
     </div>
     <div class="row" style="margin-top: 8px;">
      <i class="fa fa-suitcase ft-size" aria-hidden="true"></i> &nbsp;
      <p style="font-size: 16px;">Full-time</p>
      <i class="fa fa-clock-o ft-size" aria-hidden="true"></i> &nbsp;
      <p style="font-size: 16px;">50 minutes ago</p>
     </div>
     <p style="margin-bottom: 8px; text-align: justify;">We are looking for Technical Recruiters in Noida, India that help us grow our internal recruitment team. Technical Recruiter responsibilities include sourcing, screening and providing a shortlist of qualified </p>
     <div class="col-md-12" style="text-align: right;">
      <button type="button" class="btn btn-primary">Apply</button>
     </div>
     </div> -->

     
 
  @foreach($listjob as $listjobs)
 
    <div class="row">
      <div class="col-md-11">
        <div class="crd">
          <div class="row">
            <div class="col-md-10" style="background-color: #f7f7f7;">
              <h3 style="color: #069;">{{$listjobs['job_title']}}</h3>
              <h4> {{$listjobs['client_name']}} </h4>
            </div>
            <div class="col-md-2">
                <img src="{{url('public/companylogo/'.$company_record->company_logo)}}" class="log img img-thumbnail" style="height:40px; width:100px;">
              </div>
          </div>
          <div class="row" style="border-bottom: 1px solid #9c9797;">
            <i class="fa fa-map-marker ft-size" aria-hidden="true"></i>
            <div class="col-md-10"> 
              <p style="font-size: 16px;">{{$listjobs['city']}}&nbsp;{{$listjobs['state']}} &nbsp;
                {{$listjobs['country']}} <span style="float:right">Posted By {{$company_record->company_name}}</span> </p>
            </div>
          </div>
          <div class="row" style="margin-top: 8px;">
            <i class="fa fa-suitcase ft-size" aria-hidden="true"></i> &nbsp;
            <p style="font-size: 16px;">{{$listjobs['job_mode']}}</p>
            <i class="fa fa-clock-o ft-size" aria-hidden="true"></i> &nbsp;
            <p style="font-size: 16px;">50 minutes ago</p>
          </div>
          <p style="margin-bottom: 8px; text-align: justify;">{{$listjobs['job_description']}} </p>
          <div class="col-md-12" style="text-align: right;">
            <button type="button" class="btn btn-primary">Apply</button>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
 

@endforeach
{{ $listjob->links() }}
</div>
</div>



  <footer class="footer">
    <div class="col-md-12 text-center">
        ATS © 2019 - 2020 BABA Software. All rights reserved.</div>
    <!--div class="col-lg-6 col-md-6 col-sm-6 text-right">Design, Developed & Hosted By : <a href="http://www.dreamtechindia.co.in:8443/" target="_blank">Dreamtech Software & Services Pvt Ltd.</a></div-->
    <!-- </div> -->
  </footer>


  <script>
    var resizefunc = [];
  </script>

  <!-- Main  -->
  <script src="{{url('assets/js/jquery.min.js')}}"></script>
  <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/js/detect.js')}}"></script>
  <script src="{{url('assets/js/fastclick.js')}}"></script>
  <script src="{{url('assets/js/jquery.slimscroll.js')}}"></script>
  <script src="{{url('assets/js/jquery.blockUI.js')}}"></script>
  <script src="{{url('assets/js/waves.js')}}"></script>
  <script src="{{url('assets/js/wow.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.nicescroll.js')}}"></script>
  <script src="{{url('assets/js/jquery.scrollTo.min.js')}}"></script>
  <!-- Countdown -->
  <script src="{{url('../plugins/countdown/dest/jquery.countdown.min.js')}}"></script>
  <script src="{{url('../plugins/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>

  <script src="{{url('assets/js/jquery.app.js')}}"></script>


  <script type="text/javascript">
    $(document).ready(function () {

      // Countdown
      // To change date, simply edit: var endDate = "January 17, 2019 20:39:00";
      $(function () {
        var endDate = "January 17, 2020 20:39:00";
        $('.lj-countdown').countdown({
          date: endDate,
          render: function (data) {
            $(this.el).html('<div><div><span>' + (parseInt(this.leadingZeros(data.years, 2) * 365) + parseInt(this.leadingZeros(data.days, 2))) + '</span><span>days</span></div><div><span>' + this.leadingZeros(data.hours, 2) + '</span><span>hours</span></div></div><div class="lj-countdown-ms"><div><span>' + this.leadingZeros(data.min, 2) + '</span><span>minutes</span></div><div><span>' + this.leadingZeros(data.sec, 2) + '</span><span>seconds</span></div></div>');
          }
        });
      });
    });
    $(document).ready(function () {
      $(".home-text .rotate").textrotator({
        animation: "fade",
        speed: 2000
      });
    });
  </script>


  <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function () {
      output.innerHTML = this.value;
    }
  </script>
  <script>
    $(document).ready(function ()
    {
      $('#submit').click(function()
      {
        var job = $("#search_job").val(); 
        var location = $("#search_location").val();
        // alert(location); 
        // alert(job);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('careers/search')}}" + "/" + job + "/"+location,
            type: 'get',
            dataType: "json",
            success: function (data) {
                // $.each(data, function (i, team) {
                    // $("#teammember_list").append(
                    //     "<table class='table table'class='font-weight-bold' style='width: 100%;border-bottom-color:5px solid red;background-color:white;'><tr class='font-weight-bold' style='color:#138D75;'><td>" +
                    //     team.first_name + "</td><td style='text-align:right;'>" + team.email +
                    //     "</td></tr></table>");
                    // $("#teammember_email_id").append("<p>"+team.email+"</p>");
                // });
                console.log(data);
            }
        });
      });
    });
  </script>
</body>

<!-- Mirrored from coderthemes.com/moltran/blue/pages-coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:17 GMT -->

</html>