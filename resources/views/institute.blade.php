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
.content-page > .content {
    margin-bottom: 60px;
    margin-top: 10px;
    padding: 20px 10px 15px 10px;
}
</style>
        <div id="wrapper">
            <div class="content-page">
                <div class="content">
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Hrms</a></li>
                                    <li class="active">Institute</li>
                                </ol>
                            </div>
                        </div>
                 
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                  <div class="card-header" style="background:#317eeb;">
                                  <h3 class="card-title" style="color:#fff;">All Institute</h3>
                                </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <span><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New Institute</button></span><br><br>
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                       <th>Institute Name</th>
                                                       <th>Status</th>
                                                       <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($inst_obj as $inst_obj)
                                                    <tr>
                                                        <?php
                                                        $id=$inst_obj->ID;
                                                        ?>
                                                      <td>{{$inst_obj->name}}</td>
                                                      <td>{{$inst_obj->sts}}</td>
                                                      <td class="actions">
                                                         <a  href="" data-toggle="modal" data-target="#edit_modal_ins" class="on-default edit-row" data-institute="{{$inst_obj->name}}" data-instituteid="{{$inst_obj->ID}}" data-toggle="tooltip"   data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{url('admin/institute/delete/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    </tr>
                                                    @endforeach
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
                                                        <h4 class="modal-title mt-0">Add New Institute</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    <div class="modal-body">
                                                        <form action ="{{url('admin/institute/add')}} " method="post"> 
                                                            <div class="row"> 
                                                                <div class="col-md-12"> 
                                                                    <div class="form-group"> 
                                                                    <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                                                    <label for="field -1" class="control-label">Institute</label> 
                                                                    <input type="text" class="form-control" name="institute" placeholder="enter here ..... institute name"> 
                                                                </div> 
                                                            </div> 
                                                        </div>                                                       
                                                    </div>   
                                                    
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                    </div> 
                                                </div> 
                                            </form>
                                            </div>
                                        </div><!-- /.modal -->

                   <div id="edit_modal_ins" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0">Edit Institute</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    <div class="modal-body">
                                                                <form action ="{{url('admin/institute/edit')}} " method="post"> 
                                                                    <div class="row"> 
                                                                        <div class="col-md-12"> 
                                                                         <div class="form-group"> 
                                                                            <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                                                            <label for="field -1" class="control-label">Institute</label> 
                                                                            <input type="hidden" name="instituteid" id="instituteid">
                                                                            <input type="text" class="form-control" id="institutename" name="institute" placeholder="enter here ..... institute name"> 
                                                                        </div> 
                                                                    </div> 
                                                            </div>                                                       
                                                    </div>    
                                                    
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                    </div> 
                                                </div> 
                                            </form>
                                            </div>
                                        </div><!-- /.modal -->
@include('include.footer')
