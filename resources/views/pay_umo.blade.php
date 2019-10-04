@include('include.header')
@include('include.leftSidebar')
<style>
    #wrapper{
        width:100%;
        overflow-y:scroll;
    }
    
.table td {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 14px;
    color: #000;
    background:#fff;
}
.table tr {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 14px;
    color: #000;
    background:#fff;
}
.table th {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 14px;
    color: #000;
    background:#e4e4e4;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 0.5px solid #000;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 1px;
}
</style>
        <div id="wrapper">
    <div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="pull-left page-title">Visa Type Management System</h1>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Hrms</a></li>
                        <li class="active">Pay UMO Management</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Pay UMO</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <span><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New Pay UMO</button></span>
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>UMO Name</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($Pay_UMO as $Pay_UMO)
                                                <?php $id=$Pay_UMO->id; ?>
                                                    <td>{{ $Pay_UMO->option_val }}</td>
                                                    <td>{{ $Pay_UMO->status }}</td>
                                                    <td class="actions">
                                                        <a href="" data-toggle="modal" data-target="#edit_model_pay_umo" data-payval="{{$Pay_UMO->option_val}}" data-payid="{{$Pay_UMO->id}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" name="editbtn" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{url('admin/pay_umo/delete/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>

                                                    </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!--end card-->
                </div>
                <!--end row-->

                <div id="add_new_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                    <form action="{{url('admin/pay_umo/add')}}" method="POST">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title mt-0">Add New Pay UMO</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <label for="field-1" class="control-label">Pay UMO</label>
                                                <input type="text" class="form-control" id="Pay_UMO" placeholder="enter here ..... PAY UMO " name="Pay_UMO">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="edit_model_pay_umo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                    <form action="{{url('admin/pay_umo/edit')}}" method="POST">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title mt-0">Edit New Pay UMO</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <label for="field-1" class="control-label">Pay UMO</label>
                                                <input type="hidden" id="payid" name="payid">
                                                <input type="text" class="form-control" id="payumo" placeholder="enter here ..... PAY UMO " name="payumo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

@include('include.footer')