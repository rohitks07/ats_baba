@include('include.header')
@include('include.leftSidebar')
<style>
    #wrapper {
        width: 100%;
        overflow-y: scroll;
    }

    .form-inline .form-control {
        display: inline-block;
        width: 100%;
        vertical-align: middle;
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
<!-- Begin page -->
<div id="wrapper">
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <!-- Inline Form -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style="background:#317eeb;">
                            <h3 class="card-title"
                                style="text-transform:none; font-size:20px; color:#fff; font-weight:300;">All Employer
                            </h3>
                        </div>


                        <div>
                            <div class="row">
                                <div class="card-body col-md-6" style="border-right:1px solid grey;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 ">
                                            <?php
                                                @$id=$employer->ID;
                                                ?>
                                            <form action="{{url('admin/emp_edit/update_employer_info/'.@$id)}}"
                                                method="POST">
                                                @csrf
                                                <center>
                                                    <h3 class="ml-4">Edit Employer Info</h3>
                                                    <br>
                                                    <div class="form-group m-4">
                                                        <label for="">First Name</label>
                                                        <input type="hidden" value="{{@$employer->ID}}" id="id_val">
                                                        <input type="text" class="form-control" name="first_name"
                                                            id="full_name" aria-describedby="helpId"
                                                            value="{{@$employer->first_name}}" placeholder=""
                                                            style="width:70%;text-align:center;" required>
                                                    </div>

                                                    <div class="form-group m-4">
                                                        <label for="">Last Name</label>
                                                        <input type="text" class="form-control" name="last_name"
                                                            id="last_name" aria-describedby="helpId"
                                                            value=" {{@$employer->last_name}}" placeholder=""
                                                            style="width:70%;text-align:center;" required>
                                                    </div>
                                                    <div class="form-group m-4">
                                                        <label for="">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            aria-describedby="helpId" value="{{@$employer->email}}"
                                                            placeholder="" style="width:70%;text-align:center;"
                                                            required>
                                                    </div>

                                                    <div class="form-group m-4">
                                                        <label for="">Password</label>
                                                        <input type="password" class="form-control" name="password"
                                                            id="password" aria-describedby="helpId"
                                                            {{@$employer->pass_code}} placeholder=""
                                                            style="width:70%;text-align:center;" required>
                                                    </div>

                                                    <div class="form-group m-4">
                                                        <label for="">Mobile Number</label>
                                                        <input type="number" class="form-control" maxlength="10"
                                                            name="number" id="number" aria-describedby="helpId"
                                                            value="{{@$employer->mobile_phone}}" placeholder=""
                                                            style="width:70%;text-align:center;" required>
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </center>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                                <div class="card-body col-md-6" style="border-left:1px solid grey;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <center>
                                                <form action="{{url('admin/emp_edit/update_Company_info/'.@$id)}}" method="POST" enctype='multipart/form-data' >
                                                    @csrf
                                                    <h3 class="ml-4">Edit Company Info</h3>

                                                    <br>

                                                    <div class="form-group m-4">
                                                        <label for="">Company Name</label>
                                                        <input type="text" class="form-control" name="c_name"
                                                            id="c_name" aria-describedby="helpId"
                                                            value="{{@$company->company_name}}" placeholder=""
                                                            style="width:70%;text-align:center;" required>
                                                    </div>
                                                    <?php
                                                              @$industry = DB::table('tbl_job_industries')->where('ID',@$company->industry_ID)->first();
                                                              @$industry_all = DB::table('tbl_job_industries')->get();
                                                               

                                                      ?>
                                                    <div class="form-group m-4">
                                                        <label for="">Industry</label>
                                                        <select class="form-control" name="Industry" id="Industry"
                                                            aria-describedby="helpId" value="" placeholder=""
                                                            style="width:70%;text-indent: 38%;" required>
                                                            <option value="{{@$industry->ID}}">
                                                                {{@$industry->industry_name}}</option>
                                                            @foreach (@$industry_all as $item)
                                                            <option value="{{@$item->ID}}">{{@$item->industry_name}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group m-4">
                                                        <label for="">No of employee</label>
                                                        <input type="text" class="form-control" name="employee_no"
                                                            id="employee_no" aria-describedby="helpId"
                                                            value="{{@$company->no_of_employees}}" placeholder=""
                                                            style="width:70%;text-align:center;" required>
                                                    </div>

                                                    <div class="form-group m-4">
                                                        <label for="">Company location</label>
                                                        <input type="text" class="form-control" name="c_location"
                                                            id="c_location" aria-describedby="helpId"
                                                            value="{{@$company->company_location}}" placeholder=""
                                                            style="width:70%;text-align:center;" required>
                                                    </div>
                                                    <div class="form-group m-4">
                                                        <label for="">Companny Website</label>
                                                        <input type="text" class="form-control" name="website"
                                                            id="website" aria-describedby="helpId"
                                                            value="{{@$company->company_website}}" placeholder=""
                                                            style="width:70%;text-align:center;" required>
                                                    </div>

                                                    <div class="form-group m-4">
                                                        <label for="">Companny logo</label>
                                                        <input type="file" class="form-control" name="file" id="file"
                                                            aria-describedby="helpId" value="" placeholder=""
                                                            style="width:70%;text-align:center;" >
                                                    <input type="hidden" value="{{@$company->company_logo}}" name="logo">
                                                        <br>
                                                        <small class="bg-warning p-1 ">@if(@$company->company_logo ==
                                                            "")No file exist @else
                                                            {{@$company->company_logo}}@endif</small>
                                                        <br>
                                                        <br>

                                                        @if(@$company->company_logo == "")

                                                        @else
                                                        <img src="{{url('public/companylogo/'.@$company->company_logo)}}"
                                                            alt="logo" width="100px;" style="border:1px solid black;">
                                                        @endif
                                                    </div>

                                                    <br>
                                                    <br>
                                                    <button type="SUBMIT" class="btn btn-warning">Update</button>
                                                </form>
                                            </center>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div> <!-- container-dluid -->
        </div> <!-- content -->
    </div>
</div>

</div>
<!-- END wrapper -->
<script>
    var resizefunc = [];

</script>
@include('include.footer')
