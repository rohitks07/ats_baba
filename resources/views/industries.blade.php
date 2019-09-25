@include('include.header')
@include('include.leftSidebar')
<style>
    #wrapper{
        width:100%;
        overflow-y:scroll;
    }
    th{
        color:#fff;
    }
.content-page > .content {
    margin-bottom: 60px;
    margin-top: 10px;
    padding: 20px 10px 15px 10px;
}
</style>
        <div id="wrapper">
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                        <div class="row">
                            <div class="col-sm-12">
                               
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Hrms</a></li>
                                    <li class="active">Industry Management</li>
                                </ol>
                            </div>
                        </div>
                 
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header" style="background:#317eeb;">
                                  <h3 class="card-title" style="color:#fff;">All Industries</h3>
                                </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <span><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New Industry Page</button></span><br><br>
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead style="background:#317eeb;">
                                                    <tr>
                                                       <th>Industry Name</th>
                                                       <th>No. Of Employers Listing</th>
                                                       <th>Top Industry</th>
                                                       <th>Status</th>
                                                       <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                      <td>---------</td>
                                                      <td>----------</td>
                                                      <td>----------</td>
                                                      <td>----------</td>
                                                      <td class="actions">
                                                        <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                        <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                        <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                                      </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div> 
                                </div>
                            </div>  <!-- end card-body -->
                            </div>   <!--end card-->
                   </div>  <!--end row-->         



                   <div id="add_new_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0">Add New Industry</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-1" class="control-label">Heading</label> 
                                                                    <input type="text" class="form-control" id="field-1" placeholder="enter here ..... heading"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </div> 

                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->
@include('include.footer')