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
        <div class="content-page " >
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                            <ol class="breadcrumb pull-right">
                                <li><a href="{{url('admin/dashboard')}}">HRMS</a></li>
                                <li class="active">Qualification Management</li>
                            </ol>
                    </div>
                </div>       
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-header" style="background:#317eeb;">
                                <h3 class="card-title" style="color:#fff;">Manage Qualification</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                    <span  ><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New Qualification </button></span><br><br>
                                       <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead style="background:#317eeb;">
                                            <tr>
                                                <th>Qualification</th>
                                                <th>Text</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($qual_obj as $qual_obj)
                                            <tr>
                                            <?php
                                            $id=$qual_obj->ID;
                                            ?>
                                                <td>{{$qual_obj->val}}</td>
                                                <td>{{$qual_obj->text}}</td>
                                                <td class="actions">
                                                <a href="" data-toggle="modal" data-target="#edit_model_qualification" class="on-default edit-row" data-myqualificationval="{{$qual_obj->val}}" data-myqualificationtxt="{{$qual_obj->text}}" data-myqualificationid="{{$qual_obj->ID}}" data-toggle="tooltip"   data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="{{url('admin/qualification/delete/'. $id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
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
                </div>
            </div>
    </div>
</div>
           

<div id="add_new_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Qualification</h4> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('admin/qualification/add')}} " method="post">
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <input type="hidden" name="_token" value = "{{ csrf_token()  }}" >    
                                <label for="field-1" class="control-label">Qualification</label> 
                                    <input type="text" class="form-control" required placeholder="enter here...qualification" name="qual"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">Text</label> 
                                <input type="text" class="form-control" required  placeholder="enter here...text" name="txt"> 
                        </div> 
                    </div> 
                </div>
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-info waves-effect waves-light" name="save">Save </button> 
            </div>   
               </form>
        </div> 
    </div>
</div><!-- /.modal -->


<div id="edit_model_qualification" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Edit Qualification and Text</h4> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('admin/qualification/edit')}}" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                    <label for="field-1" class="control-label">Qualification</label> 
                                        <input type="hidden" id="id" name="id"> 
                                        <input type="text" class="form-control"  required placeholder="enter here...qualification" name="qual" id="qual"> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-3" class="control-label">Text</label> 
                                    <input type="text" class="form-control" required  placeholder="enter here...text" name="txt" id="txt"> 
                            </div> 
                        </div> 
                    </div> 
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-info waves-effect waves-light" name="save">Edited</button> 
            </div> 
            </form>
        </div> 
    </div>
</div><!-- /.modal -->


@include('include.footer')
