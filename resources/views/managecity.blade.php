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
    <div class="content-page " >
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{url('admin/dashboard')}}">HRMS</a></li>
                        <li class="active">City Management System</li>
                        <!-- <li class="active">Editable Table</li> -->
                    </ol>
                </div>
            </div>

                       
             <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                         <div class="card-header" style="background:#317eeb;">
                            <h3 class="card-title" style="color:#fff;">All City List</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                     <span  ><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New State </button></span>
                                     <span  ><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal1">Add New City </button></span><br><br>
                                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>City Name</th>
                                                <th>State</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($cityList as $list)
                                            <tr>
                                                <td>{{$list['city_id']}}</td>
                                                <td>{{$list['city_name']}}</td>
                                                <td>{{$list['state_name']}}</td>
                                                {{-- <td>{{$list['state_id']}}</td> --}}
                                                
                                                
                                                <?php
                                                $id=$list->ID;
                                                ?>
                                                <td class="actions">
                                                <a  href=""  data-toggle="modal" data-target="#edit_model{{$list['city_id']}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                               
                                                <div id="edit_model{{$list['city_id']}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                        <div class="modal-dialog"> 
                                                            <div class="modal-content"> 
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title mt-0">Edit City And State</h4> 
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div> 
                                                                <div class="modal-body"> 
                                                                    <form action ="{{url('admin/cities/edit')}}" method="POST">
                                                                    <div class="row"> 
                                                                        <div class="col-md-12"> 
                                                                            <div class="form-group">
                                                                            
                                                                                <input type="hidden" name="_token" value ="{{ csrf_token() }}">
                                                                                <label for="field-1" class="control-label">City Name</label> 
                                                                                <input type="hidden" id="cityid" name="cityid">
                                                                            <input type="text" class="form-control" id="cityname" value="{{$list['city_name']}}" required placeholder="enter City Name" name="cityname"> 
                                                                            </div> 
                                                                        </div> 
                                                                    </div> 
                                                                    <div class="row"> 
                                                                        <div class="col-md-12"> 
                                                                            <div class="form-group"> 
                                                                                <label for="field-3" class="control-label">State</label> 
                                                                                <input type="text" class="form-control" id="state" required  value="{{$list['state_name']}}" placeholder="Enter State Name" name="state"> 
                                                                                <input type="hidden" class="form-control" value="{{$list['city_id']}}" id="state_id" required   name="city_id"> 
                                                                                <input type="hidden" class="form-control" value="{{$list['state_id']}}" id="state_id" required   name="state_id"> 
                                                                            </div> 
                                                                        </div> 
                                                                    </div>
                                                                    
                                                                </div> 
                                                                <div class="modal-footer"> 
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                                    <button type="submit" class="btn btn-info waves-effect waves-light" name="edit_cities">Save </button> 
                                                                </div> 
                                                            </form>
                                                            </div> 
                                                        </div>
                                                    </div><!-- /.modal -->


                                                <a href="{{url('admin/cities/delete/'.$list['city_id'])}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete City"><i class="fa fa-trash-o"></i></a>
                                                
                                                </td>
                                            </tr>
                                                @endforeach
                                        </tbody>
                                        
                                     </table>
                                     {{ $cityList->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div>
        </div>
    </div>
</div>
</div>
    

                        

<div id="add_new_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Add State</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('admin/cities/add')}}" method="POST">
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <input type="hidden" name="_token" value ="{{ csrf_token() }}">
                            <label for="field-1" class="control-label">Country Name</label> 
                            <select name="country" class="form-control" id="" required>
                                <option value="" selected>Select Country</option>
                            @foreach ($all_country as $item)
                            <option value="{{$item->country_name}} | {{$item->country_id}}">{{$item->country_name}}</option>
                            @endforeach
                        </select>
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">State</label> 
                            <input type="text" class="form-control" id="state" required  placeholder="Enter State Name" name="state"> 
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




// add city
<div id="add_new_modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Add City</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('admin/state/add')}}" method="POST">
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <input type="hidden" name="_token" value ="{{ csrf_token() }}">
                            <label for="field-1" class="control-label">State Name</label> 
                            <select name="state" class="form-control" id="" required>
                                <option value="" selected>Select State</option>
                            @foreach ($all_state as $item)
                            <option value="{{$item->state_name}} | {{$item->state_id}}">{{$item->state_name}}</option>
                            @endforeach
                        </select>
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">State</label> 
                            <input type="text" class="form-control" id="state" required  placeholder="Enter State Name" name="city"> 
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

@include('include.footer')
