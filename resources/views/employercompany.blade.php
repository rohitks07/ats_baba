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
                        {{-- <div class="card-body" style="background-color:#c3c3c3">
                                        <form class="form-inline">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="sr-only">First Name</label>
                                                    <input type="name" class="form-control" id="first_name" placeholder="Search by Name">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
    											<div class="form-group">
                                                    <label class="sr-only" for="">Email address</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Search By Email">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                  <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Company Name</label>
                                                    <input type="name" class="form-control" id="company_name" name="company_name" type="text" placeholder="Search by Company">
                                                </div>
                                            </div>
                                            
                                         <div class="col-md-2">
											<div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">City</label>
                                                <input type="city" class="form-control" id="city" name="city" type="text" placeholder="Search by City">
                                            </div>
                                        </div>
                                        
                                         <div class="col-md-2">
    										<div class="form-group">
                                                <select name="top_employer" id="top_employers" class="form-control" style="width:100%;">
    												<option value="">Select top Employer</option>
    												<option value="01" >Yes</option>
    												<option value="01" >No</option>		
    										</select> 
    										</div>
    									</div>
    									
    									  <div class="col-md-2">
    										<div class="form-group">
                                               <button type="button" class="btn btn-primary" style="width:50%;">Search</button>
    										    <button type="button" class="btn btn-primary" style="width:40%; margin-left:1em;">View All</button>
    										</div>
    									</div>
									</form>
                                    </div> <!-- card-body --> --}}

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <table id="datatable"
                                            class="table table-striped table-bordered dt-responsive nowrap"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead style="text-align:center;background:#317eeb;">
                                                <tr>
                                                    <th>Company Name</th>
                                                    <th>HQ Location</th>
                                                    <th>job</th>
                                                    <th>User</th>
                                                    <th>Email Address</th>
                                                    <th>Top Employer</th>
                                                    <th>Status</th>
                                                    <th>Quick View</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody style="text-align:center;">
                                                @foreach($data as $key => $value)
                                                @if($value=="")
                                                @else
                                                <tr>
                                                    {{-- <input type="hidden" value="{{$value[$key]->ID}}"> --}}
                                                    <?php
                                                                @$id=$data[$key]->ID;
                                                                // echo $id;
                                                                $number_of_jobs=count(DB::table('tbl_post_jobs')->where('company_ID',$id)->get());
                                                                $number_of_members=count(DB::table('user')->where('org_ID',$id)->get());
                                                                ?>
                                                    <td>{{@$data[$key]->company}}</td>
                                                    <td>{{@$data[$key]->hq}}</td>
                                                    <td align="center" valign="middle">
                                                        <button type="button" class="btn btn-xs"
                                                            style="background-color:#606060; color:#fff">{{@$number_of_jobs}}</button>
                                                    </td>
                                                    <td align="center" valign="middle">
                                                        <button type="button" class="btn btn-xs"
                                                            style="background-color:#606060; color:#fff">102</button>
                                                    </td>
                                                    </td>
                                                    <td>{{@$data[$key]->email}}</td>

                                                    <td align="center" valign="middle">
                                                        @if(@$data[$key]->top_employer=='yes')
                                                        <button type="button" class="btn btn-xs"
                                                            style="background-color:#04B431; color:#fff"
                                                            id="<?php echo "top".@$data[$key]->ID ?>"
                                                            onclick="top_employer(<?php echo @$data[$key]->ID ?>);">{{@$data[$key]->top_employer}}</button>
                                                    </td>
                                                    @else
                                                    <button type="button" class="btn btn-xs"
                                                        style="background-color:#04B431; color:#fff"
                                                        id="<?php echo "top".@$data[$key]->ID ?>"
                                                        onclick="top_employer(<?php echo @$data[$key]->ID ?>);">{{@$data[$key]->top_employer}}</button>
                                                    </td>
                                                    @endif
                                                    </a>
                                                    </td>

                                                    <td align="center" valign="middle">
                                                        @if(@$data[$key]->status=='active')
                                                        <button type="button" class="btn btn-xs"
                                                            style="background-color:#04B431; color:#fff"
                                                            id="<?php echo @$data[$key]->ID ?>"
                                                            onclick="emp_status(<?php echo @$data[$key]->ID ?>);">{{@$data[$key]->status}}</button>
                                                    </td>
                                                    @else
                                                    <button type="button" class="btn btn-xs"
                                                        style="background-color:#e20b0b; color:#fff"
                                                        id="<?php echo @$data[$key]->ID ?>"
                                                        onclick="emp_status(<?php echo @$data[$key]->ID ?>);">{{@$data[$key]->status}}</button>
                                                    </td>
                                                    @endif
                                                    </td>
                                                    <td align="center" valign="middle">
                                                        <button type="button" onclick="view_company({{@$id}},{{$number_of_jobs}})"
                                                            class="btn btn-xs"
                                                            style="background-color:#606060; color:#fff">View
                                                            Profile</button></td>
                                                    </td>
                                                    <td class="actions">
                                                        <a href="{{url('admin/emp_edit'.$id)}}" class="on-default edit-row"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{url('admin/emp_login'.$id)}}"
                                                            class="hidden on-editing login-row" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Employer Login"><i
                                                                class="fa fa-sign-in"></i></a>
                                                        <a href="#" class="on-default remove-row" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Delete"><i
                                                                class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>

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
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Quick View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="font-size:15px;">
                <input type="hidden" class="form-control" name="id" id="id">

                <label for="">Email Address : &nbsp;</label> <span id="address"></span>
                <br>
                <label for="">location : &nbsp;</label> <span id="street_address"></span>
                <br>
                
                <label for="">Street Address : &nbsp;</label> <span id="street_address1"></span>
                <br>
                <label for="">Company Phone : &nbsp;</label> <span id="company_phone"></span>
                <br>
                <label for="">No of job posted: &nbsp;</label> <span id="posted_job"></span>



            </div>
        </div>
    
    </div>
</div>
</div>
<!-- END wrapper -->
<script>
    var resizefunc = [];

</script>
@include('include.footer')
<script>
    function emp_status(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('employer/status/update')}}" + '/' + id,
            type: 'get',

            dataType: "json",
            success: function (data) {
                console.log(data);
                // $('#email_con').append(data);
                $("#" + id).html(data.sts);
                if (data.sts === 'active') {
                    $("#" + id).css('background-color', '#04B431');
                } else {
                    $("#" + id).css('background-color', '#e20b0b');

                }
                // $("#formreset").reset();
            }
        });
    }

</script>
<script>
    function top_employer(id) {
        var topid = "top" + id;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('employer/top_employer/update')}}" + '/' + id,
            type: 'get',
            dataType: "json",
            success: function (data) {
                console.log(data);

                $("#" + topid).html(data.top_employer);
                if (data.top_employer === 'yes') {
                    $("#" + topid).css('background-color', '#04B431');
                } else {
                    $("#" + topid).css('background-color', '#e20b0b');

                }
                // $("#formreset").reset();
            }
        });
    }

</script>


<script>
    function view_company(id,jobs) {

        $("#exampleModalScrollable").modal('show');
        $("#id").val(id);
        $("#posted_job").html(jobs);
        ajax_load();

    }



    function ajax_load(){

        var id = $("#id").val();

        $.ajax({
            url: "{{url('admin/emp_edit/quick_view')}}",
            type: 'get',
            data: {
                id: id
            },
            success: function (data) {
                console.log(data);
                $("#address").html(data.company_email);
                $("#street_address").html(data.company_city+" , " +data.company_state+ " , "+ data.company_country);
                $("#street_address1").html(data.company_location);
                company_phone = data.company_phone;
                if((company_phone == "")||(company_phone == null)){
                    $("#company_phone").html("NA");
                }else{
                    $("#company_phone").html(company_phone);
                }
                
                
            }
        });
    }

</script>
