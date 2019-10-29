@include('include.header')
@include('include.leftSidebar')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<style>
    #wrapper {
        overflow-y: scroll;
        width: 100%;
    }

    .form-inline .form-control {
        display: list-item;
        width: auto;
        vertical-align: bottom;
        width: 100%;
    }

    .table td {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #fff;
    }

    .table tr {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #fff;
    }

    .table th {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #e4e4e4;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 0.5px solid #000;
    }

    .table-bordered thead td,
    .table-bordered thead th {
        border-bottom-width: 1px;
    }

</style>

<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style="background:#317eeb;">
                            <h3 class="card-title"
                                style="text-transform:none; font-size:20px; color:#fff; font-weight:300;">Edit Posted
                                Job
                            </h3>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <form action="{{url('admin/job_post_manage/update')}}" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row mt-5">
                                                <div class="col-md-2 pt-1">
                                                    Group Name
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <select class="form-control" name="group" id="group" required>
                                                            @foreach($toReturn['team'] as $item)
                                                            <option value="{{$item['type_ID']}}" selected>
                                                                {{$item['type_name']}}</option>
                                                            @endforeach
                                                            @foreach($toReturn['team_member_type'] as $item)
                                                            <option value="{{$item->type_ID}}">{{$item->type_name}}
                                                            </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-2 pt-1">
                                                    Job Title
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        @foreach($value as $item)
                                                        <input type="text" class="form-control" name="job_title"
                                                            id="job_title" aria-describedby="helpId"
                                                            value="{{$item['job_title']}}"
                                                            placeholder="Enter Job Title">
                                                        <p class="form-text " id="check_job_title"
                                                            style="color:red;display:none;">
                                                            Worng Input
                                                        </p>
                                                        <input type="hidden" class="form-control" name="id" id=""
                                                            aria-describedby="helpId" value="{{$item['ID']}}"
                                                            placeholder="Enter Job Title">
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-2 pt-1">
                                                    No.of Vacancies
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        @foreach($value as $item)
                                                        <input type="text" class="form-control" name="no_of_vacancy"
                                                            id="no_of_vacancy" aria-describedby="helpId"
                                                            value="{{$item['vacancies']}}"
                                                            placeholder="No of vacancies">
                                                        <p class="form-text " id="check_no_of_vacancy"
                                                            style="color:red;display:none;">
                                                            Worng Input must only be numbers
                                                        </p>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mt-3 pt-2">
                                                    Industry
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="form-group">
                                                        <select class="form-control" name="industry" id="">
                                                            @foreach($toReturn['industry_name'] as $item)
                                                            <option value="{{$item['ID']}}" selected>
                                                                {{$item['industry_name']}}</option>
                                                            @endforeach
                                                            @foreach($toReturn['industries'] as $item)
                                                            <option value="{{$item->ID}}">{{$item->industry_name}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    Experience
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="form-group">
                                                        @foreach ($value as $item )


                                                        <input type="text" class="form-control" name="experience" id=""
                                                            value="{{$item['experience']}}" aria-describedby="helpId"
                                                            placeholder="Experience Required ">
                                                        @endforeach

                                                    </div>
                                                </div>
                                                <div class="col-md-2 mt-4">

                                                </div>
                                                <div class="col-md-2 mt-4">

                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    Job Type
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="form-group">
                                                        <select class="form-control" name="job_type" id="type_of_job"
                                                            onchange="fulltime()" required>
                                                            @foreach($value as $item)
                                                            <option value="{{$item['job_mode']}}" selected>
                                                                {{$item['job_mode']}}</option>
                                                            @endforeach
                                                            <option value="Full Time">Full Time</option>
                                                            <option value="Contract">Contract</option>
                                                            <option value="Contract-to-Hire">Contract-to-Hire</option>
                                                            <option value="Part Time">Part Time</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    Pay
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="form-group">
                                                        <select class="form-control" name="pay" id="pay_min" required>
                                                            @foreach($value as $item)
                                                            <option value="{{$item['pay_min']}}-{{$item['pay_max']}}"
                                                                selected>{{$item['pay_min']}} - {{$item['pay_max']}}
                                                            </option>
                                                            @endforeach
                                                            <option value="20k-25k">20k - 25k</option>
                                                            <option value="25k-30k">25k - 30k</option>
                                                            <option value="30k-35k">30k - 35k</option>
                                                            <option value="35k-40k">35k - 40k</option>
                                                            <option value="40k-45k">40k - 45k</option>
                                                            <option value="45k-50k">45k - 50k</option>
                                                            <option value="50k-55k">50k - 55k</option>
                                                            <option value="55k-60k">55k - 60k</option>
                                                            <option value="60k-65k">60k - 65k</option>
                                                            <option value="65k-70k">65k - 70k</option>
                                                            <option value="$20-$25">$20 - $25</option>
                                                            <option value="$25-$30">$25 - $30</option>
                                                            <option value="$30-$35">$30 - $35</option>
                                                            <option value="$35-$40">$35 - $40</option>
                                                            <option value="$40-$45">$40 - $45</option>
                                                            <option value="$45-$50">$45 - $50</option>
                                                            <option value="$50-$55">$50 - $55</option>
                                                            <option value="$55-$60">$55 - $60</option>
                                                            <option value="$60-$65">$60 - $65</option>
                                                            <option value="$65-$70">$65 - $70</option>
                                                            <option value="$70-$75">$70 - $75</option>
                                                            <option value="$75-$80">$75 - $80</option>
                                                            <option value="DOE">(DOE)Depends upon Experience</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    Applied Date
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="form-group">
                                                        @foreach ($value as $item)

                                                        <input type="text" class="form-control"
                                                            value="{{$item['dated']}}" name="" id=""
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                        @endforeach

                                                    </div>
                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    Country
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <select class="form-control" name="country" id="country"
                                                                required>
                                                                @foreach($value as $item)
                                                                <option value="{{$item['country']}}" selected>
                                                                    {{$item['country']}} </option>
                                                                @endforeach
                                                                @foreach($toReturn['countries'] as $item)
                                                                <option value="{{$item->country_id}}">
                                                                    {{$item->country_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    State
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <select class="form-control" name="state" id="state_text"
                                                                required>
                                                                @foreach ($value as $item)

                                                                <option value="{{$item['state']}}" selected>
                                                                    {{$item['state']}}</option>
                                                                @endforeach


                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    City
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <select class="form-control" name="city" id="city" required>
                                                                @foreach($value as $item)
                                                                <option value="{{$item['city']}}" selected>
                                                                    {{$item['city']}}
                                                                </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="col-md-2 mt-4 pt-2">
                                                    <hr>
                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    <hr>
                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    <hr>
                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    <hr>
                                                </div>
                                                <div class="col-md-2 mt-4 pt-2">
                                                    <span>Enter city if not available<span>
                                                            <span>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            onclick="var_city()" name="" id="check"
                                                                            value="1">
                                                                        Check To enter city
                                                                    </label>
                                                                </div>
                                                            </span>
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control border-primary"
                                                            name="city_op" id="city_op" aria-describedby="helpId"
                                                            placeholder="" readonly>
                                                        <p class="form-text " id="check_if city_emp"
                                                            style="color:red;display:none;">
                                                            Worng Input must only be numbers
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-1">



                                                </div>

                                                <div class="col-md-2 mt-5">

                                                    <button type="submit" id="submit"
                                                        class="btn btn-primary">Update</button>

                                                </div>
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-2">



                                                </div>

                                            </div>
                                        </div>
                                    </form>

                                </div> <!-- End Row -->
                            </div>
                        </div>
                    </div><br><br><br>
                </div>
            </div>
        </div>
    </div>

    @include('include.footer')
    <script>
        function var_city() {

            var city_op = document.getElementById("check").value;
            console.log(city_op);
            if (city_op == "1") {
                $("#city_op").removeAttr("readonly",true);

                document.getElementById("check").value = "0";
            } else {
                $("#city_op").attr("readonly",true);
                $("#city_op").css("background-color","#E7E7E7");

                // console.log("works")
                document.getElementById("check").value = "1";

            }

       
        }

    </script>
    <script>
        $("#job_title").keypress(function () {
            // console.log("works");

            job_title();
        });

        $("#job_title").blur(function () {
            job_title();
        });

        function job_title() {
            var regex1 = /^[a-zA-Z ]*$/;
            var job_title = document.getElementById("job_title").value;
            // console.log(job_title);
            if (job_title == "") {
                // $("#check_job_title").toggleClass('border-danger');
                $("#check_job_title").css('color', 'red');
                $("#check_job_title").show('fast');


                err_job = false;
            } else {
                isValid = regex1.test(job_title);

                if (!isValid) {
                    $("#check_job_title").show('fast');
                    $("#check_job_title").css("color", "red");
                    err_job = false;
                    return false;
                } else {
                    $("#check_job_title").hide('fast');
                    err_job = true;
                }
            }
        }

        $("#no_of_vacancy").keypress(function () {
            console.log("works");

            no_of_vacancy();
        });

        $("#no_of_vacancy").blur(function () {
            no_of_vacancy();
        });

        function no_of_vacancy() {
            var regex1 = /^[a-zA-Z ]*$/;
            var regex = /^[0-9-+()]*$/;
            var no_of_vacancy = document.getElementById("no_of_vacancy").value;
            // console.log(no_of_vacancy);
            if (no_of_vacancy == "") {
                $("#check_no_of_vacancy").css('color', 'red');
                $("#check_no_of_vacancy").show('fast');
                err_no_of_vacancy = false;
            } else {
                isValid = regex.test(no_of_vacancy);

                if (!isValid) {
                    $("#check_no_of_vacancy").show('fast');
                    $("#check_no_of_vacancy").css("color", "red");
                    err_no_of_vacancy = false;
                    return false;
                } else {
                    $("#check_no_of_vacancy").hide('fast');
                    err_no_of_vacancy = true;
                }
            }
        }
        $("#submit").click(function () {
            err_job = true;
            err_no_of_vacancy = true;
            job_title();
            no_of_vacancy();
            if ((err_job == true) && (err_no_of_vacancy == true)) {
                return true;
            } else {
                return false;
            }
        });

    </script>
    <script type="text/javascript">
        function fulltime() {
            // alert('hrllo');
            temp = document.getElementById('type_of_job').value;
            // alert(temp);
            if (temp == 'Full Time') {
                //alert('full time');
                var x = document.getElementById("pay_min").options[1].disabled = false;
                var x = document.getElementById("pay_min").options[2].disabled = false;
                var x = document.getElementById("pay_min").options[3].disabled = false;
                var x = document.getElementById("pay_min").options[4].disabled = false;
                var x = document.getElementById("pay_min").options[5].disabled = false;
                var x = document.getElementById("pay_min").options[6].disabled = false;
                var x = document.getElementById("pay_min").options[7].disabled = false;
                var x = document.getElementById("pay_min").options[8].disabled = false;
                var x = document.getElementById("pay_min").options[9].disabled = false;
                var x = document.getElementById("pay_min").options[10].disabled = false;
                var x = document.getElementById("pay_min").options[11].disabled = true;
                var x = document.getElementById("pay_min").options[12].disabled = true;
                var x = document.getElementById("pay_min").options[13].disabled = true;
                var x = document.getElementById("pay_min").options[14].disabled = true;
                var x = document.getElementById("pay_min").options[15].disabled = true;
                var x = document.getElementById("pay_min").options[16].disabled = true;
                var x = document.getElementById("pay_min").options[17].disabled = true;
                var x = document.getElementById("pay_min").options[18].disabled = true;
                var x = document.getElementById("pay_min").options[19].disabled = true;
                var x = document.getElementById("pay_min").options[20].disabled = true;
                var x = document.getElementById("pay_min").options[21].disabled = true;
                var x = document.getElementById("pay_min").options[22].disabled = true;
            } else if (temp == 'Contract') {
                //alert('Contract');
                var x = document.getElementById("pay_min").options[1].disabled = true;
                var x = document.getElementById("pay_min").options[2].disabled = true;
                var x = document.getElementById("pay_min").options[3].disabled = true;
                var x = document.getElementById("pay_min").options[4].disabled = true;
                var x = document.getElementById("pay_min").options[5].disabled = true;
                var x = document.getElementById("pay_min").options[6].disabled = true;
                var x = document.getElementById("pay_min").options[7].disabled = true;
                var x = document.getElementById("pay_min").options[8].disabled = true;
                var x = document.getElementById("pay_min").options[9].disabled = true;
                var x = document.getElementById("pay_min").options[10].disabled = true;
                var x = document.getElementById("pay_min").options[11].disabled = false;
                var x = document.getElementById("pay_min").options[12].disabled = false;
                var x = document.getElementById("pay_min").options[13].disabled = false;
                var x = document.getElementById("pay_min").options[14].disabled = false;
                var x = document.getElementById("pay_min").options[15].disabled = false;
                var x = document.getElementById("pay_min").options[16].disabled = false;
                var x = document.getElementById("pay_min").options[17].disabled = false;
                var x = document.getElementById("pay_min").options[18].disabled = false;
                var x = document.getElementById("pay_min").options[19].disabled = false;
                var x = document.getElementById("pay_min").options[20].disabled = false;
                var x = document.getElementById("pay_min").options[21].disabled = false;
                var x = document.getElementById("pay_min").options[22].disabled = false;


            } else {
                var x = document.getElementById("pay_min").options[1].disabled = false;
                var x = document.getElementById("pay_min").options[2].disabled = false;
                var x = document.getElementById("pay_min").options[3].disabled = false;
                var x = document.getElementById("pay_min").options[4].disabled = false;
                var x = document.getElementById("pay_min").options[5].disabled = false;
                var x = document.getElementById("pay_min").options[6].disabled = false;
                var x = document.getElementById("pay_min").options[7].disabled = false;
                var x = document.getElementById("pay_min").options[8].disabled = false;
                var x = document.getElementById("pay_min").options[9].disabled = false;
                var x = document.getElementById("pay_min").options[10].disabled = false;
                var x = document.getElementById("pay_min").options[11].disabled = false;
                var x = document.getElementById("pay_min").options[12].disabled = false;
                var x = document.getElementById("pay_min").options[13].disabled = false;
                var x = document.getElementById("pay_min").options[14].disabled = false;
                var x = document.getElementById("pay_min").options[15].disabled = false;
                var x = document.getElementById("pay_min").options[16].disabled = false;
                var x = document.getElementById("pay_min").options[17].disabled = false;
                var x = document.getElementById("pay_min").options[18].disabled = false;
                var x = document.getElementById("pay_min").options[19].disabled = false;
                var x = document.getElementById("pay_min").options[20].disabled = false;
                var x = document.getElementById("pay_min").options[21].disabled = false;
                var x = document.getElementById("pay_min").options[22].disabled = false;

            }
        }

    </script>


    <script type="text/javascript">
        $("#country").on("change", function (e) {
            $('#state_text').empty();
            $('#city').empty();
            var country_id = e.target.value;
            $.ajax({
                type: 'get',
                url: '{{url("employer/post_new_job/post_job/state/")}}' + "/" + country_id,
                success: function (data) {
                    console.log(data);
                    $.each(data, function (index, value) {
                        $('#state_text').append("<option value=" + '"' + value.state_id +
                            '"' +
                            "selected>" + value.state_name + "</option>");
                        console.log(value.state_id);
                    });
                },



            });

        });
        $('#state_text').on('change', function (e) {
            $('#city').empty();
            var state_id = e.target.value;
            $.ajax({
                type: 'get',
                url: '{{url("employer/post_new_job/post_job/city/")}}' + "/" + state_id,
                success: function (data) {
                    console.log(data);
                    $.each(data, function (index, value) {
                        $('#city').append("<option value=" + '"' + value.city_id + '"' +
                            "selected>" + value.city_name + "</option>");
                    });

                },
            });
        });

    </script>
