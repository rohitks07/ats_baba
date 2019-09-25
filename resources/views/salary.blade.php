@include('include.header')
@include('include.leftSidebar')
<style>
 #wrapper {
    overflow-y: scroll;
    width: 100%;

}
.content-page > .content {
    margin-bottom: 60px;
    margin-top: 10px;
    padding: 20px 10px 15px 10px;
}
th{
    color:#fff;
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
                                    <li class="active">Salary</li>
                                </ol>
                            </div>
                        </div>
                 
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header" style="background:#317eeb;">
                                  <h3 class="card-title" style="color:#fff;">Manage Salary List</h3>
                                </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <span><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New Salary Page</button></span><br><br>
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead style="background:#317eeb;">
                                                    <tr>
                                                       <th>Salary Value</th>
                                                       <th>Text</th>
                                                       <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($salary as $salary)
                                                    <tr>
                                                      <?php $id=$salary->ID; ?>
                                                        <td>{{$salary->val}}</td>
                                                        <td>{{$salary->text}}</td>
                                                        <td class="actions">
                                                        <a href=""data-toggle="modal" data-target="#edit_model_salary" data-myval="{{$salary->val}}" data-mytext="{{$salary->text}}" data-myid="{{$salary->ID}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" name="editbtn" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{url('admin/salary/delete/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
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
                   </div>
<!-- /.modal ADD -->
<div id="add_new_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <form  action="{{url('admin/salary/add')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-header">
                        <h4 class="modal-title mt-0">Salary Range</h4> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div> 
                    <div class="modal-body"> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <div class="form-group"> 
                                    <label for="field-1" class="control-label">Salary Value</label> 
                                        <input type="text" class="form-control" id="field-1" placeholder="enter here ..... salary" name="salary"> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <div class="form-group"> 
                                    <label for="field-3" class="control-label">Text</label> 
                                        <input type="text" class="form-control" id="field-3" placeholder="enter here ..... text" name="text"> 
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
</div>
<!-- /.modal ADD -->

<!-- /.modal EDIT -->
<div id="edit_model_salary" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <form  action="{{url('admin/salary/edit')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <h4 class="modal-title mt-0">Salary Range</h4> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div> 
                <div class="modal-body"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-1" class="control-label">Salary Value</label> 
                                    <input type="hidden" id="myid" name="salaryid">
                                    <input type="text" class="form-control" id="salary" placeholder="enter here ..... salary value" name="salary"> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-3" class="control-label">Text</label> 
                                <input type="text" class="form-control" id="text" placeholder="enter here ..... text" name="text"> 
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
</div><!-- /.modal EDIT  -->
@include('include.footer')
<script >
    $('#edit_model_salary').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var myval = button.data('myval')
        var mytext = button.data('mytext')
        var myid=button.data('myid')
        var modal = $(this)

        modal.find('.modal-body #salary').val(myval);
        modal.find('.modal-body #text').val(mytext);
        modal.find('.modal-body #myid').val(myid);
    })
</script>