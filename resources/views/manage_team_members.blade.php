@include('include.emp_header') 
@include('include.emp_leftsidebar')
<style>
    input[type=text],
    textarea,
    {
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        outline: none;
        padding: 15px 71px 1px 4px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
    }
    
    input[type=text]:focus,
    textarea:focus {
        -moz-box-shadow: 0 0 5px #51cbee;
        -webkit-box-shadow: 0 0 5px #51cbee;
        box-shadow: 0 0 5px #51cbee;
        border: 1px solid #51cbee;
    }
    
    label {
        width: 100%;
        float: left;
    }
    
    label {
        font-weight: 200;
        font-family: inherit;
        font-size: 15px;
    }
    
    input[type=text] {
        width: 50%;
        padding: 7px;
        border-radius: 5px;
    }
    
    textarea {
        border-radius: 5px;
        width: 48%;
    }
    
    span.red {
        color: red;
    }
    
    input[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 84%;
        background: #fff;
    }
    
    select[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 84%;
        background: #fff;
    }
    
    textarea[class="form-control"] {
        border: 1px solid #bdbcbc;
        background: #fff;
        width: 84%;
    }
    
    #wrapper {
        overflow-y: scroll;
        width: 100%;
    }
    
    .tabs li.tab {
        background-color: #317eeb;
        display: block;
        float: left;
        margin: 0;
        text-align: center;
    }
    
    .nav.nav-tabs > li > a,
    .nav.tabs-vertical > li > a {
        background-color: transparent;
        border-radius: 0;
        border: none;
        color: #ffffff !important;
        cursor: pointer;
        line-height: 50px;
        padding-left: 20px;
        padding-right: 20px;
        font-size: 18px;
    }
    
    .nav.nav-tabs + .tab-content {
        background: #ffffff;
        margin-bottom: 30px;
        padding: 10px;
    }
    
    .nav.nav-tabs > li > a.active {
        background-color: #e8faf8;
        border: 0;
    }
    
    .tabs .indicator {
        background-color: #e8faf8;
        bottom: 0;
        height: 2px;
        position: absolute;
        will-change: left, right;
    }
</style>
<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs tabs" role="tablist" style="height: 45px;">
                        <li class="nav-item tab">
                            <a class="nav-link " id="home-tab-2" data-toggle="tab" href="#home-2" role="tab" aria-controls="home-2" aria-selected="false">
                                <span class="d-none d-sm-block">User</span></a>
                        </li>
                        <li class="nav-item tab">
                            <a class="nav-link active" id="profile-tab-2" data-toggle="tab" href="#profile-2" role="tab" aria-controls="profile-2" aria-selected="true">
                                <span class="d-none d-sm-block">User Group</span>
                            </a>
                        </li>
                        <li class="nav-item tab">
                        </li>
                        <li class="nav-item tab">
                        </li>
                        <li class="nav-item tab">
                        </li>
                        <li class="nav-item tab">
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header" style="background-color:#d0d0d0">
                                            <h3 class="card-title" style="color:#000;text-transform: none; font-size:large">User Detail :
                                                @if($toReturn['current_module_permission']['is_add']=="yes")
                                                        <a href="{{url('employer/teammember')}}">
                                                            <button type="button" class="btn btn-success" style="float:right;">Add Member</button>
                                                        </a>
                                                    @endif
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-12">
                                                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                     <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Group Name</th>
                                                                            <th>Date Joined</th>
                                                                            <th>Last Login Date</th>
                                                                            <th>Last Updated Date</th>
                                                                            <th>Status</th>
                                                                            <th>Actions </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($team_member as $team_member)
                                                                        <tr>
                                                                            <td>{{$team_member->first_name}}</td>
                                                                            <td>{{$team_member->team_member_type}}</td>
                                                                            <td>{{$team_member->first_login_date}}</td>
                                                                            <td>{{$team_member->last_login_date}}</td>
                                                                            <td>{{$team_member->last_updated_date}}</td>
                                                                            <td>{{$team_member->is_active}}</td>
                        
                                                                            <?php
                                                                        	$id=$team_member->ID;
                                                                        	?>
                                                                                <td class="actions">
                                                                                @if($toReturn['current_module_permission']['is_edit']=="yes")
                                                                                    <a href="{{url('employer/manageteammember/edit/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-pencil"></i></a>
                                                                                @endif
                                                                                @if($toReturn['current_module_permission']['is_delete']=="yes")
                                                                                    <a href="{{url('employer/manageteammember/delete/'.$id)}}" style="margin-left:10px;" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                                @endif
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
                                        </div> <!-- End Row -->
									</div>
					               <div class="tab-pane show active" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                                               <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header" style="background-color:#d0d0d0">
                                                        <h3 class="card-title" style="color:#000;text-transform: none; font-size:large">Customers :
                                                        @if($toReturn['current_module_permission']['is_add']=="yes")
                                                        <a href="{{url('employer/teammember/add')}}" ><button type="button" class="btn btn-success" data-toggle="modal" data-target="#custom-width-modal"  style="float: right;">Add Group</button></h3></a>
                                                    @endif
                                                    </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-12">
                                                    <table "datatable-fixed-header" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                                        <input type="hidden" value="{{$team_member_type['type_ID']}}">
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
                                                                @if($toReturn['current_module_permission']['is_edit']=="yes")

                                                                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editgroup{{$team_member_type->type_ID}}">Edit</button>
                                                                @endif
                                                                @if($toReturn['current_module_permission']['is_delete']=="yes")
                                                                    <a href="{{url('employer/manageteammember/add/delete/'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                                        <button type="button" class="btn-round-xs btn-xs" style="background-color:#ff6347; color:#fff">Delete</button>
                                                                    </a>
                                                                @endif
                                                                </td>
                                                        </tr>
                                                        @if($toReturn['current_module_permission']['is_edit']=="yes")
                                                        <div id="editgroup{{$team_member_type->type_ID}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title mt-0">Edit User's Group</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="{{url('employer/teammember/edit')}}" method="post">
                                                                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                                                            <div class="modal-body">
                                                                                <div class="form-group row">
                                                                                 <label for="" class="control-label col-lg-4">Group Name <span style="color:red;">*</span></label>
                                                                                    <input type="text" name="type_namegroup"  value="{{$team_member_type->type_name}}" style="width:66%">
                                                                                    <input type="hidden" name="id" value="{{$team_member_type['type_ID']}}">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                                    <input type="submit" class="btn btn-info" style="background-color:#04B431; color:#fff" value="Edit"></button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        @endif
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
                        <!--end of tabpenel-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include.emp_footer')

















