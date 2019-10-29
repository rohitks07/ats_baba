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
                                style="text-transform:none; font-size:20px; color:#fff; font-weight:300;">All Posted Job
                            </h3>
                        </div>
                        <div class="card-body" style="background-color:#c3c3c3;height: 74px;">
                            <form class="form-inline" align="center">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="sr-only">Search By Name</label>
                                        <input type="job" class="form-control" id="search_name"
                                            placeholder="Search by Job Title">
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select name="search_featured" id="search_featured" class="form-control"
                                            style="width:100%;">
                                            <option value="" selected>- Select type -</option>
                                            <option value="Contract">Contract</option>
                                            <option value="Full time">Full time</option>
                                            <option value="Contract-to-Hire">Contract-to-Hire</option>
                                            <option value="Part Time">Part Time</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">City</label>
                                        <input type="city" class="form-control" id="city" name="city" type="text"
                                            placeholder="Search by City">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button type="button" id="search" class="btn btn-primary"
                                            style="width: 50%;">Search</button>

                                    </div>
                                </div>
                            </form>
                        </div> <!-- card-body -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12" id="show">
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead style="text-align:center;">
                                                        <tr>
                                                            <th width="7%;">Joining Date</th>
                                                            <th width="9%;">Last date</th>
                                                            <th width="15%;">Job Title</th>
                                                            <th>Location</th>

                                                            <th>Company</th>
                                                            <th>Job preview</th>
                                                            {{-- <th>CVs</th> --}}
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody id="">
                                                        @foreach($data as $item)
                                                        <tr>
                                                            <?php 
                                                                $id=$item['ID'];   
                                                                // $company_name=DB::select('select * from tbl_companies where ID = ?',[$item['company_ID']]); 
                                                               $company_name = DB::table('tbl_companies')->where('ID',$item['company_ID'])->first('company_name');  
                                                            //   echo @$company_name->company_name; 
                                                            //    exit;
                                                               ?>
                                                            <td>{{$item['dated']}}</td>
                                                            <td>{{$item['last_date']}}</td>
                                                            <td style="text-align:center;">
                                                                <strong>{{$item['job_title']}}</strong></td>
                                                            <td>
                                                                <p>{{$item['country']}} , {{$item['state']}} ,
                                                                    {{$item['city']}}</p>
                                                            </td>
                                                        <td style="text-align:center;"> {{@$company_name->company_name}}</td>
                                                            <td align="center" valign="middle">

                                                                <button type="button" class="btn btn-xs"
                                                                    style="background-color:#317eeb; color:#fff"
                                                                    data-toggle="modal"
                                                                    data-target="#exampleModal1{{$id}}">View</button>
                                                            </td>

                                                            <!-- Modal for status-->
                                                            <div class="modal fade" id="exampleModal1{{$id}}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">Job Status
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>



                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-md-5">
                                                                                    Job Title :
                                                                                </div>
                                                                                <div class="col-md-7">
                                                                                    {{$item['job_title']}}
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col-md-5">
                                                                                    Job Category:
                                                                                </div>
                                                                                <div class="col-md-7">
                                                                                    {{$item['job_mode']}}
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col-md-5">
                                                                                    Job Discription:
                                                                                </div>
                                                                                <div class="col-md-7">
                                                                                    <p style="font-size:12px;">
                                                                                        {{$item['job_description']}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                {{-- end modal --}}

                                                                {{-- <td align="center" valign="middle">
                                                                <button type="button" class="btn btn-xs"
                                                                    style="background-color:#2196F3; color:#fff">View
                                                                    CV</button>
                                                            </td> --}}
                                                                <td align="center" valign="middle">
                                                                    @if (!empty($item['sts']=="Published"))
                                                                    <button type="button" class="btn btn-xs"
                                                                        style="background-color:#04B431; color:#fff"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModal{{$id}}">{{$item['sts']}}</button>
                                                                    @else
                                                                    <button type="button" class="btn btn-xs"
                                                                        style="background-color:#E7DA11; color:black"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModal{{$id}}">{{$item['sts']}}</button>
                                                                    @endif
                                                                </td>

                                                                <!-- Modal for status-->
                                                                <div class="modal fade" id="exampleModal{{$id}}"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Change Status
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form
                                                                                action="{{url('admin/job_post_manage/change_status')}}"
                                                                                method="post">
                                                                                @csrf

                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label for="">Status</label>
                                                                                        <select class="form-control"
                                                                                            name="status" id="">
                                                                                            <option>Published</option>
                                                                                            <option>Draft</option>
                                                                                            <option>Cancelled</option>
                                                                                            <option>Deleted</option>
                                                                                        </select>
                                                                                        <input type="hidden"
                                                                                            value="{{$item['ID']}}"
                                                                                            name="id" id="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Update
                                                                                        Status</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    {{-- end modal --}}


                                                                    <td class="actions">
                                                                        <a href="{{url('admin/job_post_manage/edit'.$id)}}"
                                                                            type="button" class="btn btn-xs mb-1"
                                                                            style="background-color:#FF9800; color:#fff">Edit</a><br>
                                                                        {{-- <button type="button" class="btn btn-xs mb-1" style="background-color:#606060; color:#fff">Login as candidate</button><br> --}}
                                                                        <a href="{{url('admin/job_post_manage/delete'.$id)}}"
                                                                            class="btn btn-xs mb-1"
                                                                            style="background-color:#ff6347; color:#fff">Delete</a>
                                                                    </td>


                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->
                    </div>
                </div>
            </div><br><br><br>

            @include('include.footer')


            <script>
                $("#search").click(function () {
                    var search_name = document.getElementById("search_name").value;
                    // var company_name = document.getElementById("company_name").value;
                    var search_featured = document.getElementById("search_featured").value;
                    var city = document.getElementById("city").value;
                    console.log("wind");
                    $("#show").empty();

                    $.ajax({
                        type: 'get',
                        url: '{{url("admin/job_post_manage/search")}}',
                        data: {
                            search_name: search_name,

                            search_featured: search_featured,
                            city: city,
                        },
                        success: function (data) {
                            console.log(data);
                            $("#datatable").hide();
                            var dataone = `<table id="datatable" class="table table-bordered dt-responsive nowrap"
                                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                                                    <thead style="text-align:center;">
                                                        <tr>
                                                            <th width="7%;">Joining Date</th>
                                                            <th width="9%;">Last date</th>
                                                            <th width="15%;">Job Title</th>
                                                            <th>Location</th>

                                                            <th>Company</th>
                                                            <th>Job preview</th>
                                                            {{-- <th>CVs</th> --}}
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody id="show1"> `;
                            $("#show").append(dataone);
                            $.each(data, function (index, value) {
                                var job_id = value.ID;
                                console.log(job_id);
                                // var 
                                var datatwo = `
                                                <tr>
                                                <td>` + value.dated + `</td>
                                                <td>` + value.last_date + `</td>
                                                <td>` + value.job_title + `</td>
                                                <td>` + value.country + ` , ` + value.state + ` , ` + value.city + `</td>
                                                <td>` + value.company_ID + `</td>
                                                <td align="center" valign="middle">
                                            <button type="button" class="btn btn-xs"
                                                style="background-color:#317eeb; color:#fff"
                                                data-toggle="modal"
                                                data-target="#exampleModal1` + value.ID + `">View</button>
                                            </td>

                                            
                                                                <td align="center" valign="middle">
                                                                    @if (!empty(` + value.sts + `=="Published"))
                                                                    <button type="button" class="btn btn-xs"
                                                                        style="background-color:#04B431; color:#fff"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModal5` + value.ID +
                                    `">` + value.sts + `</button>
                                                                    @else
                                                                    <button type="button" class="btn btn-xs"
                                                                        style="background-color:#04B431; color:#fff"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModal5` + value.ID +
                                    `">` + value.sts + `</button>
                                                                    @endif
                                                                </td>

                                                                
                                                                    <td class="actions">
                                                                        <a href="{{url('admin/job_post_manage/edit` +
                                    value.ID + `')}}"
                                                                            type="button" class="btn btn-xs mb-1"
                                                                            style="background-color:#FF9800; color:#fff">Edit</a><br>
                                                                        {{-- <button type="button" class="btn btn-xs mb-1" style="background-color:#606060; color:#fff">Login as candidate</button><br> --}}
                                                                        <a href="{{url('admin/job_post_manage/delete` +
                                    value.ID + `')}}"
                                                                            class="btn btn-xs mb-1"
                                                                            style="background-color:#ff6347; color:#fff">Delete</a>
                                                                    </td>

                                                </tr>`;

                                var modal = `<!-- Modal for status-->
                                            <div class="modal fade" id="exampleModal1` + value.ID + `"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">Job Status
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>



                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-md-5">
                                                                                    Job Title :
                                                                                </div>
                                                                                <div class="col-md-7">
                                                                                    ` + value.job_title + `
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col-md-5">
                                                                                    Job Category:
                                                                                </div>
                                                                                <div class="col-md-7">
                                                                                    ` + value.job_mode + `
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col-md-5">
                                                                                    Job Discription:
                                                                                </div>
                                                                                <div class="col-md-7">
                                                                                    <p style="font-size:12px;">
                                                                                        ` + value.job_description + `</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                `;
                                var modal1 = `<!-- Modal for status-->
                                                                <div class="modal fade" id="exampleModal5` + value.ID + `"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Change Status
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form
                                                                                action="{{url('admin/job_post_manage/change_status')}}"
                                                                                method="post">
                                                                                @csrf
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label for="">Status</label>
                                                                                        <select class="form-control"
                                                                                            name="status" id="">
                                                                                            <option>Published</option>
                                                                                            <option>Draft</option>
                                                                                            <option>Cancelled</option>
                                                                                            <option>Deleted</option>
                                                                                        </select>
                                                                                        <input type="hidden"
                                                                                            value="{{$item['ID']}}"
                                                                                            name="id" id="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Update
                                                                                        Status</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    {{-- end modal --}}`;
                                $('#show1').append(datatwo);
                                $('#show').append(modal);
                                $('#show').append(modal1);

                            });
                        },
                        error: function (data) {
                            console.log(data);
                        },



                    });

                });

            </script>
