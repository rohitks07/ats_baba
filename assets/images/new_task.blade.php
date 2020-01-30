<style>
  .card .card-header {
    padding: 1px 20px;
    border: none;
  }
</style>
<div class="content-page">             
  <div class="content">                                             
    <!-- Start content -->             
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Add Task</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Setting</a></li>
            <li class="active">New Task</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" style="background-color: #317eeb;"></div>
            <div class="card-body">
                <div class="col-md-12 col-sm-12 col-12">
                  <button type="button" class="btn btn-primary" style="float:right;margin-top: 1%;" data-toggle="modal" data-target=".user-modal"><i class="md md-add-circle-outline"></i> Add</button><br>
                 <!--<---------------------------user view table start----------------------------------->
                 <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                      <tr>
                        <th>Task Owner</th>
                        <th>Task Title</th>
                        <th>Status</th>
                        <th>discription</th>
                        <th>Action</th>    
                      </tr>
                    </thead>
                    <tbody> 
                      <tr>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td class="actions">
                          <a href="javascript:void();" onclick="viewEditProductsAndServices();"><i class="fas fa-eye"></i></a> &nbsp; 
                          <a href="javascript:void();" onclick="viewEditProductsAndServices();"><i class="fas fa-pencil-alt"></i></a> &nbsp; 
                          <a href="#" onclick=""><i class="fas fa-trash"></i></a> 
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End Row -->
    </div> <!-- card -->                                                  
  </div> <!-- container -->
  </div> <!-- content -->
<!------------------------------------------------user view table ends---------------------------------------->

<form action="" method="POST" enctype="multipart/form-data" id="user-form">
@csrf
<!--------------------------------------- user add modal start-------------------------------------------->                   
<div class="modal user-modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-md">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fas fa-clock"></i>&nbsp;&nbsp;New Task</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <br>
              <br>
              <div class="modal-body" style="padding: 0px 0;">
                  <div class="row">
                      <div class="col-md-6">
                              <div class="form-group">
                                   <label for="">Task Owner<font color="red">*</font></label>
                                   <input type="text" name="task_owner" class="form-control" placeholder="" id="task_owner">   
                              </div>
                               <h6 id="task_owner_val"> 
                      </div>
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Task Title</label>
                                   <input type="text" name="task_title" class="form-control" placeholder="" id="task_title">   
                              </div>
                               <h6 id="task_title_val"> 
                      </div>
                      <div class="col-md-12">
                              <div class="form-group">
                                  <label for="">Status</label>
                                   <input type="text" name="status" class="form-control" placeholder="" id="status">   
                              </div>
                               <h6 id="status_val"> 
                      </div>
                        <div class="col-md-12">
                             <label for="form-group">Discription</label>
                             <textarea class="form-control" rows="3" id="notes" name="notes"></textarea>
                             <br>
                             <br>
                        </div>
                        <div class="col-md-12"> 
                          <div class="modal-footer">
                            <!-- hidden inputs -->
                            <input type="text" name="hidden_input_id" id="hidden_input_id" value="NA" hidden>
                            <input type="text" name="hidden_input_purpose" value="add" hidden>
                            <input type="text" name="hidden_input_attachment" value="NA" hidden>
                            <!-- hidden inputs -->
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="btnSubmit">Save changes</button>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
       </div> 
    </form> 
      
<!--  <--------------------------------------------------user add modal ends--------------------------------> 


<script>
  $("document").ready(function(){
    $("#task_owner_val").hide();

    err_task_owner = true;

    $("#task_owner").blur(function(){
         task_owner_f();
        });
        function task_owner_f(){
          var t = $("#task_owner").val();

          if(t.length==""){
            $("#task_owner_val").show();
            $("#task_owner_val").html("This field is required");
            $("#task_owner_val").focus();
            $("#task_owner_val").css("color","red");
              err_team=false;
              return false;
          }else{

            $("#task_owner_val").hide();
          }
        }

        $("#btnSubmit").click(function(){
        err_task_owner = true;
        task_owner_f();

        if(err_task_owner==true)
         {
            return true;
         }else{
            return false;

         }
      });
  });
</script>