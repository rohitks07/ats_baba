@include('include.header')
@include('include.leftSidebar')
<style>
.content-page > .content {
    margin-bottom: 60px;
    margin-top: 10px;
    padding: 20px 10px 15px 10px;
}
#wrapper{
    width:100%;
    overflow-y:scroll;
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
                                    <li class="active">Prohibited Keywords Management</li>
                                </ol>
                            </div>
                        </div>
                 
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header" style="background:#317eeb;">
                                  <h3 class="card-title" style="color:#fff; font-size:15px; font-weight:300;">All Prohibited Keywords</h3>
                                </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <span><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New Keyword</button></span>
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                       <th>Keyword</th>
                                                       <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     @foreach ($keyword as $keyword )
                                                    <tr>
                                                    <?php
                                                    $id=$keyword->ID;
                                                    ?>
                                                      <td>{{$keyword->keyword}}</td> 
                                                      <td class="actions">
                                                        <a href="" data-toggle="modal" data-target="#edit_model_keyword" data-mykeyword="{{$keyword->keyword}}"  data-myid={{$keyword->ID}} class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" name="editbtn" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{url('admin/prohibited_keyword/delete/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                       
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


                   <div id="add_new_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                   
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0">Add New Keyword</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <form  action="{{url('admin/prohibited_keyword/add')}}" method="post" >
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-1" class="control-label">Add Keyword</label> 
                                                                    <input type="text" class="form-control" id="field-1" name="key" placeholder="enter here ..... keyword"> 
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


                                        <div id="edit_model_keyword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                   
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0">Edit Keyword</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <form  action="{{url('admin/prohibited_keyword/edit')}}" method="post" >
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-1" class="control-label">Add Keyword</label> 
                                                                    <input type="hidden" id="myid" name="myid">
                                                                    <input type="text" class="form-control" id="field" name="key" placeholder="enter here ..... keyword"> 
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