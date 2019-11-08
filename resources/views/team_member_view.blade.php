@include('include.header')
@include('include.leftSidebar')
<style>
    #wrapper {
        width: 100%;
        overflow-y: scroll;

    }

    .content-page>.content {
        margin-bottom: 60px;
        margin-top: 10px;
        padding: 20px 10px 15px 10px;
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
        <!-- Start content -->
        <div class="content">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Hrms</a></li>
                        <li class="active">Team Member Management</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style="background:#317eeb;">
                            <h3 class="card-title"
                                style="font-weight:300; text-transform:none; color:#fff; font-size:15px;">All Team
                                Member</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    {{-- <span><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New Member</button></span><br><br> --}}
                                    <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead style="background:#317eeb;">
                                            <tr>
                                                <th>Team Member Name</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($team_member as $item)
                                            <tr>
                                                <?php 
                                                            $id = $item['ID'];
                                                           
                                                            ?>

                                                <td>{{$item['full_name']}}</td>
                                                <td>{{$item['sts']}}</td>
                                                <td class="actions">
                                                    {{-- <a  href="" data-toggle="modal" data-target="#edit_modal_team_member_type" class="on-default edit-row" data-toggle="tooltip"   data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a> --}}
                                                    <a href="{{url('admin/team_members_view/delete/'.$id)}}"
                                                        class="on-default remove-row" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="fa fa-trash-o"></i></a>
                                                    <a href="JavaScript:Void(0)" class="on-default remove-row"
                                                        onclick="show_data({{$id}})" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Report"><i
                                                            class="fa fa-briefcase"></i></a>
                                                <a href="{{url('admin/team_members_view/report_show/'.$id)}}" class="on-default remove-row"
                                                         data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Report show"><i
                                                            class="fa fa-briefcase"></i></a>

                                                </td>
                                            </tr>
                                            @endforeach



                                        </tbody>

                                    </table>
                                    {{ $team_member->links() }}
                                </div>
                            </div>
                        </div> <!-- end card-body -->
                    </div>
                    <!--end card-->
                </div>
                <!--end row-->
            </div>


            <div id="add_new_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title mt-0">Add New Team Member Type</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('admin/team_members/add')}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Member Type</label>
                                            <input type="text" class="form-control" id="field-1" name="member_type"
                                                placeholder="enter here ..... team member type">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.modal -->

            <!-- Modal -->
            {{-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6" id="table1">
                                    <!--FOR TABLE ONE APPEND-->
                                </div>
                                <div class="col-md-6" id="table2">
                                  <!--FOR TABLE TWO APPEND-->  
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning">Download PDF</button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
    </div>
</div>
</div> --}}

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="all_table">
                    <div class="col-md-2" id="table1">
                        <!--FOR TABLE ONE APPEND-->
                    </div>
                    <div class="col-md-4" id="table2">
                        <!--FOR TABLE TWO APPEND-->
                    </div>
                    <div class="col-md-2" id="table3">
                        <!--FOR TABLE ONE APPEND-->
                    </div>
                    <div class="col-md-4 " id="table4">
                        <!--FOR TABLE TWO APPEND-->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" onclick="HTMLtoPDF()">Download PDF</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>



<div id="edit_modal_team_member_type" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0">Add New Team Member Type</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('admin/team_members/edit')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Member Type</label>
                                <input type="hidden" id="team_type_id" name="team_type_id">
                                <input type="text" class="form-control" id="team_type_name" name="team_type_name"
                                    placeholder="enter here ..... team member type">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->
</div>
</div>
</div>



@include('include.footer')



<script>
    function show_data(id) {
        $(".bd-example-modal-xl").modal('show');
        $("#table1").empty();
        $("#show1").empty();
        $("#table2").empty();
        $("#show2").empty();
        $("#table3").empty();
        $("#show3").empty();
        $("#table4").empty();
        $("#show4").empty();

        //for job
        $.ajax({
            url: "{{url('admin/team_members_view/show_report')}}",
            type: "GET",
            data: {
                id: id
            },
            success: function (data) {
                console.log(data);
                // var length = data.length();
                var table = `<table class="table" id="hide1" >
                                <thead>
                                    <tr>
                                        <th colspan="2" style="font-size:12px;background-color:black;color:white;text-align:center;">Posted Job List &nbsp; - &nbsp;<span id="length1"></span></th>
                                    </tr>
                                    <tr>
                                        <th style="font-size:12px;">Date</th>
                                        <th style="font-size:12px;">Job Code</th>
                                        
                                    </tr>
                                </thead>
                                <tbody id="show1">`;
                $('#table1').append(table);
                $.each(data, function (index, value) {
                    // console.log(value.length);
                    $("#length1").html(value.length);

                    $.each(value, function (ind, val) {
                        // var length = val.length();
                        // console.log(length);

                        var date_string = moment(val.dated).format("MM-DD-YYYY");
                        var inner_data = `  
                                    <tr>
                                        <input class="` + val.ID + `" type="hidden">
                                        <td style="font-size:12px;">` + date_string + `</td>
                                        <td scope="row" style="font-size:12px;">` + val.job_code + `</td>
                                        
                                        
                                    </tr>`;
                        $('#show1').append(inner_data);

                    });
                });

                var later_data = ` </tbody>
                                            </table>`;
                $('#show1').append(later_data);

            },
            error: function (data) {
                console.log(data);
            }
        });
        // for Seeker
        $.ajax({
            url: "{{url('admin/team_members_view/show_report_seeker')}}",
            type: "GET",
            data: {
                id: id
            },
            success: function (data1) {


                var table1 = `<table class="table" id="hide2">
                                <thead>
                                    <tr>
                                        <th colspan="2" style="font-size:12px;background-color:black;color:white;text-align:center;">Candidate List &nbsp; - &nbsp; <span id="length2"></span></th>
                                    </tr>
                                    <tr>
                                        <th style="font-size:12px;">Date</th>
                                        <th style="font-size:12px;">Email</th>
                                    </tr>
                                </thead>
                                <tbody id="show2">`;
                $('#table2').append(table1);
                $.each(data1, function (index1, value1) {
                    $("#length2").html(value1.length);
                    $.each(value1, function (ind1, val1) {


                        var date_string1 = moment(val1.dated).format("MM-DD-YYYY");
                        var inner_data1 = `  
                                    <tr>
                                        <input class="` + val1.ID + `" type="hidden">
                                        <td scope="row"  style="font-size:12px;">` + date_string1 + `</td>
                                        <td style="font-size:12px;">` + val1.email + `</td>
                                        
                                        
                                    </tr>`;
                        $('#show2').append(inner_data1);

                    });
                });

                var later_data1 = ` </tbody>
                                            </table>`;
                $('#show2').append(later_data1);

            },
            error: function (data1) {
                console.log(data1);
            }
        });

        // for Seeker Applied for
        $.ajax({
            url: "{{url('admin/team_members_view/show_report_seeker_applied_for')}}",
            type: "GET",
            data: {
                id: id
            },
            success: function (data3) {


                var table3 = `<table class="table" id="hide3">
                                <thead>
                                    <tr>
                                        <th colspan="2" style="font-size:12px;background-color:black;color:white;text-align:center;">Candidate Applied &nbsp; - &nbsp; <span id="length3"></span></th>
                                    </tr>
                                    <tr>
                                        <th style="font-size:12px;">Date</th>
                                        <th style="font-size:12px;">Candeate Name</th>
                                    </tr>
                                </thead>
                                <tbody id="show3">`;
                $('#table3').append(table3);
                $.each(data3, function (index3, value3) {
                    $("#length3").html(value3.length);
                    $.each(value3, function (ind3, val3) {


                        var date_string3 = moment(val3.dated).format("MM-DD-YYYY");
                        var inner_data3 = `  
                                    <tr>
                                        <input class="` + val3.ID + `" type="hidden">
                                        <td scope="row" style="font-size:12px;">` + date_string3 + `</td>
                                        <td style="font-size:12px;" width="7%">` + val3.candate_name + `</td>
                                        
                                        
                                    </tr>`;
                        $('#show3').append(inner_data3);

                    });
                });

                var later_data3 = ` </tbody>
                                            </table>`;
                $('#show3').append(later_data3);

            },
            error: function (data1) {
                console.log(data1);
            }
        });


        // for forwad candeate
        $.ajax({
            url: "{{url('admin/team_members_view/forward_to')}}",
            type: "GET",
            data: {
                id: id
            },
            success: function (data4) {

                // console.log(data4);
                var table4 = `<table class="table" id="hide3">
                                <thead>
                                    <tr>
                                        <th colspan="2" style="font-size:12px;background-color:black;color:white;text-align:center;">Candidate Applied To Job &nbsp; - &nbsp;<span id="length4"></span></th>
                                    </tr>
                                    <tr>
                                        <th style="font-size:12px;">Date</th>
                                        <th style="font-size:12px;">forward To</th>
                                    </tr>
                                </thead>
                                <tbody id="show4">`;
                $('#table4').append(table4);
                $.each(data4, function (index4, value4) {
                    // console.log(value4)
                    $("#length4").html(value4.length);

                    $.each(value4, function (ind4, val4) {

                        // console.log(ind4);
                        var date_string4 = moment(val4.forward_date).format("MM-DD-YYYY");
                        var inner_data4 = `  
                                    <tr>
                                        <input class="` + val4.ID + `" type="hidden">
                                        <td scope="row" style="font-size:12px;">` + date_string4 + `</td>
                                        <td style="font-size:12px;">` + val4.forward_to + `</td>
                                    </tr>`;
                        $('#show4').append(inner_data4);

                    });
                });

                var later_data4 = ` </tbody>
                                            </table>`;
                $('#show4').append(later_data4);

            },
            error: function (data4) {
                console.log(data4);
            }
        });


    }

</script>

{{-- <script src="{{asset('public/pdf_plugins/jspdf.js')}}"></script>
<script src="{{asset('public/pdf_plugins/pdfFromHTML.js')}}"></script> --}}
{{-- <script src="{{asset('public/pdf_plugins/html2canvas.min.js')}}"></script>
<script src="{{asset('public/pdf_plugins/canvas-toBlob.js')}}"></script> --}}


<script>
    function HTMLtoPDF() {


        // html2canvas($(".modal-body"), {
        //     onrendered: function (canvas) {
        //         theCanvas = canvas;


        //         canvas.toBlob(function (blob) {
        //             saveAs(blob, "Report.png");
        //         });


        //         });
        //     }
        // });
        //     console.log("works");
        // html2canvas(document.querySelector(".modal-body")).then(canvas => {
        //             document.body.appendChild(canvas)
        //         });




        var printContents = document.getElementById("all_table").innerHTML;
        // var printContents = document.getElementsByClassName("all_table").innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;

    }

</script>
