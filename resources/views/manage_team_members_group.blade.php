@include('include.emp_header') @include('include.emp_leftsidebar')

<style>
    .form-control {
        border: 1px solid #b3b3b3;
        width: 79%;
        background-color: #fff;
    }
    
    .control-label {
        font-family: inherit;
    }
    
    .card .card-header {
        padding: 10px 20px;
        border: none;
        background: #428bca;
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

<body>
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background:#317eeb;">
                        <div class="row">
                                <div class="col-md-6">
                                    <a href="{{url('/employer/manageteammember')}}">
                                        <button>User</button>
                                    </a>
                                    <a href="{{url('/employer/manageteammember/add')}}">
                                        <button>User group</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{url('/employer/teammember/add')}}">
                                        <button type="button" class="btn btn-success" style="float:right;">Add Group</button>
                                    </a>
                                </div>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Group Name</th>
                                                <th>Status</th>
                                                <th>Date Created</th>
                                                <th>Date Closed</th>
                                                <th>Active Users</th>
                                                <th>Inactive Users</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($team_member_type as $team_member_type)
                                            <tr>
                                                <td>{{$team_member_type->type_name}}</td>
                                                <td>
                                                    <button type="button" class="btn-round-xs btn-xs" style="background-color:#04B431; color:#fff">{{$team_member_type->status}}</button>
                                                </td>
                                                <td>{{$team_member_type->date_created}}</td>
                                                <td>{{$team_member_type->date_closed}}</td>
                                                <td>
                                                    <button type="button" class="btn-round-xs btn-xs" style="background-color:#1ba6df; color:#fff">2</button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn-round-xs btn-xs" style="background-color:#1ba6df; color:#fff">0</button>
                                                </td>
                                                <?php
                                                	$id=$team_member_type->type_ID;
                                                	?>
                                                    <td class="actions">
                                                        <a href="" data-toggle="modal" data-target="#edit_model_type" class="on-default edit-row" data-toggle="tooltip" data-type_name="{{$team_member_type->type_name}}" data-type_id="{{$team_member_type->type_ID}}" data-placement="top" title="" data-original-title="Edit">
                                                            <button type="button" class="btn-round-xs btn-xs" style="background-color:#606060; color:#fff">Edit</button>
                                                        </a>
                                                        <a href="{{url('employer/manageteammember/add/delete/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                            <button type="button" class="btn-round-xs btn-xs" style="background-color:#ff6347; color:#fff">Delete</button>
                                                        </a>
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
            <!-- End Row -->
        </div>
        <!--end of container-->
    </div>
    <!--end of content-->
    </div>
    <!--end of content- page-->

    <div id="edit_model_type" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0">Edit Team Member Type Name</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('employer/manageteammember/add/edit')}}" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <label for="field-1" class="control-label">Team Member Type Name</label>
                                    <input type="hidden" name="type_id" id="type_id" value="">
                                    <input type="text" class="form-control" id="type_name" required placeholder="Enter team member name" name="type_name">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light" name="edit_team_member_type">Save </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal -->
    <script>
        var resizefunc = [];
    </script>
    @include('include.emp_footer')
    <script>
    jQuery(document).ready(function() {
 //executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");
  
  
  jQuery('.btn[href^=#]').click(function(e){
    e.preventDefault();
    var href = jQuery(this).attr('href');
    jQuery(href).modal('toggle');
  });

  

    });  
    </script>
    <script >
    
    $('#edit_model_type').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var type_name = button.data('type_name')
        var type_id = button.data('type_id')
        var modal = $(this)


        modal.find('.modal-body #type_name').val(type_name);
        modal.find('.modal-body #type_id').val(type_id);

    })

    </script>
</body>