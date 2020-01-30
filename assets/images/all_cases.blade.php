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
          <h4 class="pull-left page-title">Add New Case</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Setting</a></li>
            <li class="active">New Case</li>
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
                        <th>Account Name</th>
                        <th>Type</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Case Owner</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>    
                      </tr>
                    </thead>
                    <tbody> 
                      <tr>
                         <td></td>
                         <td></td>
                         <td></td>
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

<!--------------------------------------- user add modal start-------------------------------------------->                   
<div class="modal user-modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fas fa-clock"></i>&nbsp;&nbsp;New Case</h4>
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
                                   <label for="">Case Owner<font color="red">*</font></label>
                                   <input type="text" name="case_owner" class="form-control" placeholder="" id="case_owner">   
                              </div>
                               <h6 id="case_owner_val"> 
                      </div>
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Account Name<font color="red">*</font></label>
                                   <input type="text" name="account_name" class="form-control" placeholder="" id="account_name">   
                              </div>
                               <h6 id="account_name_val"> 
                      </div>
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Type<font color="red">*</font></label>
                                   <input type="text" name="type" class="form-control" placeholder="" id="type">   
                              </div>
                               <h6 id="type_val"> 
                      </div>
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Subject</label>
                                   <input type="text" name="subject" class="form-control" placeholder="" id="subject">   
                              </div>
                               <h6 id="subject_val"> 
                      </div>
                      <div class="col-md-6">
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
                            <button type="submit" class="btn btn-primary waves-effect waves-light" id="btnSubmit">Save changes</button>
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

    $("#case_owner_val").hide();
    $("#account_name_val").hide();
    $("#type_val").hide();

    err_case_owner = true;
    err_account_name = true;
    err_type = true;

    $("#case_owner").blur(function(){
          case_owner_f();
        });
        function case_owner_f(){
          var t = $("#case_owner").val();

          if(t.length==""){
            $("#case_owner_val").show();
            $("#case_owner_val").html("This field is required");
            $("#case_owner_val").focus();
            $("#case_owner_val").css("color","red");
              err_case_owner=false;
              return false;
          }else{

            $("#case_owner_val").hide();
          }
        }

        $("#account_name").blur(function(){
          account_name_f();
        });
        function account_name_f(){
          var a = $("#account_name").val();

          if(a.length==""){
            $("#account_name_val").show();
            $("#account_name_val").html("This field is required");
            $("#account_name_val").focus();
            $("#account_name_val").css("color","red");
              err_account_name=false;
              return false;
          }else{

            $("#account_name_val").hide();
          }
        }

        $("#type").blur(function(){
          type_f();
        });
        function type_f(){
          var t = $("#type_val").val();

          if(t.length==""){
            $("#type_val").show();
            $("#type_val").html("This field is required");
            $("#type_val").focus();
            $("#type_val").css("color","red");
              err_type=false;
              return false;
          }else{

            $("#type_val").hide();
          }
        }

        $("#btnSubmit").click(function(){

         err_case_owner = true;
         err_account_name = true;
         err_type = true;

         case_owner_f();
         account_name_f();
         type_f();

         if((err_case_owner==true)&&(err_account_name==true) &&(err_type))
         {
            return true;
         }else{
            return false;

         }

       });
  });
 </script>