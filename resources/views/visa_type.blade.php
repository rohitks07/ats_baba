@include('include.header')
@include('include.leftSidebar')
<style>
    #wrapper{
        width:100%;
        overflow-y:scroll;
    }
</style>
 <div id="wrapper">
    <div class="content-page">
        <!-- Start content -->
                <div class="content">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="pull-left page-title">Visa Type Management System</h1>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Hrms</a></li>
                                    <li class="active">Visa Type Management</li>
                                </ol>
                            </div>
                        </div>
                 
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                 <div class="card-header" style="background:#317eeb;">
                                  <h3 class="card-title" style="color:#fff;">All Visa Type</h3>
                                </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <span><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New VISA Type</button></span>
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                       <th>Visa Type Name</th>
                                                       <th>Status</th>
                                                       <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($visa_type_obj as $visa_type_obj)
                                                    <tr>
                                                    <?php
                                                       $id=$visa_type_obj->type_ID;
                                                    ?>
                                                      <td>{{$visa_type_obj->type_name}}</td>
                                                      <td>{{$visa_type_obj->status}}</td>
                                                
                                                      <td class="actions">
                                                        <a href="" data-toggle="modal" data-target="#edit_model_visa" data-visatype="{{$visa_type_obj->type_name}}" data-visaid="{{$visa_type_obj->type_ID}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" name="editbtn" data-original-title="Edit"><i class="fa fa-pencil"></i></a>

                                                        <a href="{{url('admin/visa_type/delete/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                      </td>
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
                    <h4 class="modal-title mt-0">Add New Visa Type</h4> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
            </div> 

            <div class="modal-body"> 
                <form action ="{{url('admin/visa_type/add')}}" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                            <input type="hidden" name="_token" value = "{{ csrf_token()  }}" >  
                                <label for="field-1" class="control-label">Visa Type</label> 
                                        <input type="text" class="form-control" id="field-1" placeholder="enter here ..... visa type" name="visa"> 
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




<div id="edit_model_visa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content">

            <div class="modal-header">
                    <h4 class="modal-title mt-0">Edit Visa Type</h4> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
            </div> 

            <div class="modal-body"> 
                <form action ="{{url('admin/visa_type/edit')}}" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                            <input type="hidden" name="_token" value = "{{ csrf_token()  }}" >
                            <input type="hidden" id="idtype" name="id">   
                                <label for="field-1" class="control-label">Visa Type</label> 
                                        <input type="text" class="form-control" id="visatype" placeholder="enter here ..... visa type" name="visa"> 
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
@include('include.footer')