@include('include.header')
@include('include.leftSidebar')
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
                                style="text-transform:none; font-size:20px; color:#fff; font-weight:300;">Edit Jobseeker
                                Info
                            </h3>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <form action="{{url('admin/job_seekers/applied_jobs/update')}}"
                                                        method="post">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="row mt-5">
                                                                <div class="col-md-2 pt-5 mt-3">
                                                                    Full name
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <div>
                                                                            @foreach($value['seekers'] as $item)
                                                                            <input type="text" class="form-control"
                                                                                name="first_name" id="first_name"
                                                                        aria-describedby="helpId" value="{{$item->first_name}}"
                                                                                placeholder="First Name" required>
                                                                            <br>
                                                                            <input type="text" class="form-control"
                                                                                name="middle_name" id="middle_name"
                                                                                aria-describedby="helpId" value="{{$item->middle_name}}"
                                                                                placeholder="Middle Name">
                                                                            <br>
                                                                            <input type="text" class="form-control"
                                                                                name="last_name" id="last_name"
                                                                                aria-describedby="helpId" value="{{$item->last_name}}"
                                                                                placeholder="Last Name" required>
                                                                                @endforeach
                                                                        </div>
                                                                        <p class="form-text " id="check_name"
                                                                            style="color:red;display:none;">
                                                                            Worng Input
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 pt-1">
                                                                    Email
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                            @foreach($value['seekers'] as $item)
                                                                        <input type="text" class="form-control"
                                                                            name="email" id="email"
                                                                    aria-describedby="helpId" value="{{@$item->email}}"
                                                                            placeholder="Enter email" required>
                                                                            @endforeach

                                                                        <p class="form-text " id="check_email"
                                                                            style="color:red;display:none;">
                                                                            Worng Input
                                                                        </p>
                                                                        <input type="hidden" class="form-control"
                                                                            name="id" id="" aria-describedby="helpId"
                                                                            value="" placeholder="Enter Job Title">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 pt-1">
                                                                        Mobile Number
                                                                    </div>
                                                                    <div class="col-md-2 ">
                                                                        <div class="form-group">
                                                                                @foreach($value['seekers'] as $item)

                                                                            <input type="number" class="form-control"
                                                                                name="mobile" id="mobile"
                                                                        aria-describedby="helpId" value="{{$item->mobile}}"
                                                                                placeholder="Enter mobile no" required>
                                                                                <input type="hidden" class="form-control"
                                                                                name="ID" id="ID"
                                                                        aria-describedby="helpId" value="{{$item->ID}}"
                                                                                placeholder="Enter mobile no">
                                                                                @endforeach
                                                                            <p class="form-text " id="check_mobile"
                                                                                style="color:red;display:none;">
                                                                                Worng Input
                                                                            </p>
                                                                            
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-2 mt-3 pt-3">
                                                                        Gender
                                                                    </div>
                                                                    <div class="col-md-2 mt-4">
                                                                        <div class="form-group">
    
                                                                                @foreach($value['seekers'] as $item)

                                                                            <select class="form-control" name="gender"
                                                                                id="gender" onchange="" required>
                                                                        <option value="{{$item->gender}}" selected>{{$item->gender}}
                                                                                </option>
    
                                                                                <option value="Full Time">Male</option>
                                                                                <option value="Contract">Female</option>
                                                                                <option value="Contract-to-Hire">Others
                                                                                </option>
                                                                                {{-- <option value="Part Time">Part Time</option> --}}
                                                                            </select>
                                                                            @endforeach
    
                                                                        </div>
                                                                    </div>
                                                                <div class="col-md-2 mt-4 ">
                                                                    <hr>
                                                                </div>
                                                                <div class="col-md-2 mt-4">
                                                                    <div class="form-group">

                                                                        <hr>
                                                                        
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-2 mt-4">
                                                                    <hr>
                                                                </div>
                                                                <div class="col-md-2 mt-4">
                                                                    <hr>
                                                                </div>
                                                                <div class="col-md-2 mt-4 pt-2">
                                                                    Present Address
                                                                </div>
                                                                <div class="col-md-2 mt-4">
                                                                    <div class="form-group">
                                                                            @foreach($value['seekers'] as $item)

                                                                        <textarea type="text" rows="4"
                                                                            class="form-control" name="present"
                                                                    id="present" value="{{$item->address_line_1}}"
                                                                            placeholder="Enter present address">{{$item->address_line_1}}</textarea>
                                                                            @endforeach
                                                                        <p class="form-text " id="check_present"
                                                                            style="color:red;display:none;">
                                                                            Worng Input
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 mt-4 pt-2">
                                                                    Permanent Address
                                                                </div>
                                                                <div class="col-md-2 mt-4">
                                                                    <div class="form-group">
                                                                            @foreach($value['seekers'] as $item)

                                                                        <textarea type="text" rows="4"
                                                                            class="form-control" name="permanent"
                                                                    id="permanent" value="{{$item->address_line_2}}"
                                                                            placeholder="Enter permanent address">{{$item->address_line_2}}</textarea>
                                                                            @endforeach
                                                                        <p class="form-text " id="check_permanent"
                                                                            style="color:red;display:none;">
                                                                            Worng Input
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 mt-4 pt-2">
                                                                    Date of birth
                                                                </div>
                                                                <div class="col-md-2 mt-4">
                                                                    <div class="form-group">
                                                                            @foreach($value['seekers'] as $item)

                                                                    <input type="text" class="form-control" value="{{$item->dob}}"
                                                                            name="dob" id="dob" aria-describedby="helpId"
                                                                            placeholder="" readonly>
                                                                            @endforeach

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 mt-4 pt-2">
                                                                    Country
                                                                </div>
                                                                <div class="col-md-2 mt-4">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <select class="form-control" name="country"
                                                                                id="country" required>
                                                                                @foreach($value['seekers'] as $item)
                                                                                <option value="{{$item['country']}}"
                                                                                    selected>
                                                                                    {{$item['country']}} </option>
                                                                                @endforeach
                                                                                @foreach($value['countries'] as
                                                                                $item)
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
                                                                            <select class="form-control" name="state"
                                                                                id="state_text" required>
                                                                                @foreach($value['seekers'] as $item)
                                                                                <option value="{{$item['state']}}"
                                                                                    selected>
                                                                                    {{$item['state']}} </option>
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
                                                                            <select class="form-control" name="city"
                                                                                id="city" >
                                                                                @foreach($value['seekers'] as $item)
                                                                                <option value="{{$item['city']}}"
                                                                                    selected>
                                                                                    {{$item['city']}} </option>
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
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            onclick="var_city()" name=""
                                                                                            id="check" value="1">
                                                                                        Check To enter city
                                                                                    </label>
                                                                                </div>
                                                                            </span>
                                                                </div>
                                                                <div class="col-md-2 mt-4">
                                                                    <div class="form-group">
                                                                        <input type="text"
                                                                            class="form-control border-primary"
                                                                            name="city_op" id="city_op"
                                                                            aria-describedby="helpId" placeholder=""
                                                                            readonly>
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

                    </div> <!-- End Row -->
                </div>
            </div>
        </div><br><br><br>









        @include('include.footer')



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