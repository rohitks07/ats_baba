@include('include.header')
@include('include.leftSidebar')
<style>
    #wrapper{
        width:100%;
        overflow-y:scroll;
        
    }
   
    .content-page > .content {
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
                                  <h3 class="card-title" style="font-weight:300; text-transform:none; color:#fff; font-size:15px;">All Team Member</h3>
                                </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        {{-- <span><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New Member</button></span><br><br> --}}
                                            <table id="" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                                        <a href="{{url('admin/team_members_view/delete/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                        <a href="JavaScript:Void(0)" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Report"><i class="fa fa-briefcase"></i></a>
                                                        
                                                      </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                    
                                                    
                                                </tbody>
                                                
                                            </table>
                                            {{ $team_member->links() }}
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
                                                        <h4 class="modal-title mt-0">Add New Team Member Type</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <form action="{{url('admin/team_members/add')}}" method="post">
                                                             <input type="hidden" name="_token" value ="{{ csrf_token() }}">
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-1" class="control-label">Member Type</label> 
                                                                    <input type="text" class="form-control" id="field-1" name="member_type" placeholder="enter here ..... team member type"> 
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





                   <div id="edit_modal_team_member_type" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
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
                                                             <input type="hidden" name="_token" value ="{{ csrf_token() }}">
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-1" class="control-label">Member Type</label>
                                                                    <input type="hidden" id="team_type_id" name="team_type_id"> 
                                                                    <input type="text" class="form-control" id="team_type_name" name="team_type_name" placeholder="enter here ..... team member type"> 
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