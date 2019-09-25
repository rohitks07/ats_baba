@include('include.emp_header')
@include('include.emp_leftSidebar')

<style>
    .panel-footer {
        padding: 5px 15px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        background-color: #ffffff;
        width: 100%;
        height: 31px;
        /* margin-top: 6px; */
        border-radius: 10px;
        cursor: pointer;
    }
    
    .btn {
        background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 12px 16px;
        font-size: 16px;
        cursor: pointer;
    }
    /* Darker background on mouse-over */
    
    .btn:hover {
        background-color: RoyalBlue;
    }
    
    .mini-stat-info span {
        color: #ffffff;
        display: block;
        font-size: 21px;
        font-weight: 500;
    }
    
    .card-body {
        padding: 0.25rem;
    }
    
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #4387cc;
    }
    
    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #51a6fb;
    }
    
    .table thead th {
        vertical-align: bottom;
        border-bottom: 0px solid #51a6fb;
        /* width: 67%; */
        padding: 6px;
        background-color: honeydew;
        text-align: center;
        color: #095496;
    }
    
    .card .card-header {
        padding: 10px 20px;
        border: none;
        background: #317eeb;
        color: #fff;
    }
    
    .card-title {
        font-size: 17px;
        font-weight: 100;
        color: #ffffff;
        margin-bottom: 0;
        margin-top: 0;
        text-transform: none;
    }
    
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #4387cc;
        padding: 7px;
        text-align: center;
        color: #565656;
    }
    
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #4387cc;
        padding: 4px;
        text-align: center;
        color: #4c4c4c;
    }
    
    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #f5f5f5;
    }
    
    .btn-xs,
    .btn-group-xs>.btn {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
    }
    
    .btn-primary {
        color: #fff;
        background-color: #428bca;
        border-color: #357ebd;
    }
    
    .modal .modal-dialog .modal-content .modal-footer {
        padding: 0;
        padding-top: 14px;
        margin-right: 5em;
    }
    
   
</style>



<body>
        <div class="content-page">
            <div class="content">
                <div class="row">
                    <div class="col-md-2">
                        <div class="mini-stat" style="background-color:#317eeb; border-radius:10px;">
                            <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-comments-o fa-1x" style="float: left; margin-top:1em;"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span>4 Jobs</span>
                                <p style="color: #fff;">Open Today !!</p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#428bca;">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#428bca;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mini-stat" style="background-color:#d9534f; border-radius:10px;">
                            <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-tasks fa-1x" style="float: left; margin-top:1em;"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span>0 Apps</span>
                                <p style="color: #fff;">Received Today !</p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#d9534f">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#d9534f;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mini-stat" style="background-color:#f0ad4e; border-radius:10px;">
                            <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-support fa-1x" style="float: left; margin-top:1em;"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span>312 Jobs</span>
                                <p style="color: #fff;">Work In Process !</p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#f0ad4e">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#f0ad4e;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mini-stat" style="background-color:#5cb85c; border-radius:10px;">
                            <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-share-alt fa-1x" style="float: left; margin-top:1em;"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span>519 Resumes</span>
                                <p style="color: #fff;">Submitted !</p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#5cb85c;">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#5cb85c;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mini-stat" style="background-color:#d35400; border-radius:10px;">
                            <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-share-alt fa-1x" style="float: left; margin-top:1em;"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span>0 Interviews</span>
                                <p style="color: #fff;">Happening Today !</p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#d35400;">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#d35400;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mini-stat" style="background-color:#a569bd; border-radius:10px;">
                            <span class="mini-stat" style="margin-bottom: 0px;">
                                    <i class="fa fa-calendar fa-1x" style="float: left; margin-top:1em;"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span>0 Meetings</span>
                                <p style="color: #fff;">Happening Today !</p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#a569bd;">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#a569bd;"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Jobs by Publish Date</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width:100;"></th>
                                                        <th>Today</th>
                                                        <th>07/16/2019</th>
                                                        <th>07/15/2019</th>
                                                        <th>07/14/2019</th>
                                                        <th>07/13/2019</th>
                                                        <th>07/12/2019</th>
                                                        <th>07/11/2019</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Assigned</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Work in Process</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Covered Jobs</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Jobs</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end of col-->
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of card body-->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Calendar: Next Interviews</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>

                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Job Code</th>
                                                        <th>Candidate Name</th>
                                                        <th>Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="5">No Recors Found</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end of col-->
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of card body-->
                        </div>
                    </div>
                </div>
                <!--end of row-->

                <!--start of second line of table-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Jobs by Closing Date</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width:100;"></th>
                                                        <th>Today</th>
                                                        <th>07/16/2019</th>
                                                        <th>07/15/2019</th>
                                                        <th>07/14/2019</th>
                                                        <th>07/13/2019</th>
                                                        <th>07/12/2019</th>
                                                        <th>07/11/2019</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Assigned</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Work in Process</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Covered Jobs</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Jobs</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                        <td>7</td>
                                                        <td>4</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end of col-->
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of card body-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Calendar: Next Meetings</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>Subject</th>
                                                        <th>Participant</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="5">No Recors Found</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end of col-->
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of card body-->
                        </div>
                    </div>
                </div>
                <!--end of row-->

                <!--End of second table-->

                <!--start of third table-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="card-title" style="text-align:left;">Jobs</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="card-title" style="text-align:right;">Post a New Job &nbsp;&nbsp;&nbsp; View All</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Title</th>
                                                        <th>Client</th>
                                                        <th>Location</th>
                                                        <th>Status</th>
                                                        <th>Publish Dt.</th>
                                                        <th>Closing Dt.</th>
                                                        <th>Assignees</th>
                                                        <th>Applications</th>
                                                        <th> Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>Chicago, IL </td>
                                                        <td align="center" valign="middle">
                                                            <button type="button" class="btn-round-xs btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg" style="background-color:#04B431; color:#fff">Published</button>
                                                        </td>
                                                        <td>07/17/2019</td>
                                                        <td>08/31/2019</td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="actions">
                                                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
                                                            <a href="#" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>

                                                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="submit a candidate"><i class="fa fa-user"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>44677-1</td>
                                                        <td> Technical Test Lead | Automated Testing…</td>
                                                        <td>Infosys</td>
                                                        <td>Richardson, TX </td>
                                                        <td align="center" valign="middle">
                                                            <button type="button" class="btn-round-xs btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg" style="background-color:#04B431; color:#fff">Published</button>
                                                        </td>
                                                        <td>07/17/2019</td>
                                                        <td>08/31/2019</td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="actions">
                                                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
                                                            <a href="#" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="submit a candidate"><i class="fa fa-user"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>44749-1</td>
                                                        <td>Technology Analyst | Java | Web…</td>
                                                        <td>Infosys</td>
                                                        <td>Saint Louis, MO </td>
                                                        <td align="center" valign="middle">
                                                            <button type="button" class="btn-round-xs btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg" style="background-color:#04B431; color:#fff">Published</button>
                                                        </td>
                                                        <td>07/17/2019</td>
                                                        <td>08/31/2019</td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="actions">
                                                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
                                                            <a href="#" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="submit a candidate"><i class="fa fa-user"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>Chicago, IL </td>
                                                        <td align="center" valign="middle">
                                                            <button type="button" class="btn-round-xs btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg" style="background-color:#04B431; color:#fff">Published</button>
                                                        </td>
                                                        <td>07/17/2019</td>
                                                        <td>08/31/2019</td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="actions">
                                                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
                                                            <a href="#" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="submit a candidate"><i class="fa fa-user"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>Chicago, IL </td>
                                                        <td align="center" valign="middle">
                                                            <button type="button" class="btn-round-xs btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg" style="background-color:#04B431; color:#fff">Published</button>
                                                        </td>
                                                        <td>07/17/2019</td>
                                                        <td>08/31/2019</td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="btn btn-primary btn-xs" style="cursor:none;">0</span>
                                                        </td>
                                                        <td class="actions">
                                                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Asign this job"><i class="fa fa-users"></i></a>
                                                            <a href="#" class="hidden on-editing login-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="submit a candidate"><i class="fa fa-user"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end of col-->
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of card body-->
                        </div>
                    </div>
                </div>        

                <!--end of row-->
                <!--end  of third table-->
                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title mt-0" id="myLargeModalLabel">Update Status Of Job-44677-1</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group row">
                                    <label for="address" class="control-label col-md-12">Status:<span style="color:red;">*</span></label>
                                    <select name="Status:" id="Status:" class="form-control" onChange="grab_cities_by_country(this.value);" style="width:90%; border: 1px solid #737373; margin-left: 9px;">
                                        <option value="" selected></option>
                                        <option value="1-2"></option>
                                        <option value="2-3"></option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-info waves-effect waves-light">Update Status</button>
                            </div>

                        </div>
                        <!-- /.modal-content -->

                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!--start of third table-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="card-title" style="text-align:left;">Job Application</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="card-title" style="text-align:right;">View All</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6">Job Details</th>
                                                        <th colspan="6">Candidate Details</th>
                                                        <th>Submittal Date</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>Infosys</td>

                                                    </tr>
                                                    <tr>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>44593-1</td>
                                                        <td>Technical Test Lead | Insurance |…</td>
                                                        <td>Infosys</td>
                                                        <td>Infosys</td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end of col-->
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of card body-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
          <script>
            var resizefunc = [];
        </script>
        @include('include.footer')
</body>
</html>