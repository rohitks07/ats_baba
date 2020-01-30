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
          <h4 class="pull-left page-title">Add Detailed forecast</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Setting</a></li>
            <li class="active">Detailed Forecast</li>
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
                        <th>Team</th>
                        <th>Agent</th>
                        <th>Period Type</th>
                        <th>Year</th>
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
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fas fa-clock"></i>&nbsp;&nbsp;Detailed Forecast</h4>
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
                                   <label for="">Team<font color="red">*</font></label>
                                   <input type="text" name="team" class="form-control" placeholder="" id="team">   
                              </div>
                               <h6 id="team_val"> 
                      </div>
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Agent</label>
                                   <input type="text" name="agent" class="form-control" placeholder="" id="agent">   
                              </div>
                               <h6 id="task_title_val"> 
                      </div>
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Period Type</label>
                                   <input type="text" name="period_type" class="form-control" placeholder="" id="period_type">   
                              </div>
                               <h6 id="period_type_val"> 
                      </div>
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Year</label>
                                   <input type="text" name="year" class="form-control" placeholder="" id="year">   
                              </div>
                               <h6 id="year_val"> 
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
     </form>
</div>  
      
<!--  <--------------------------------------------------user add modal ends--------------------------------> 


<script>
  $("document").ready(function(){
    $("#team_val").hide();

    err_team = true;

    $("#team").blur(function(){
          team_f();
        });
        function team_f(){
          var t = $("#team").val();

          if(t.length==""){
            $("#team_val").show();
            $("#team_val").html("This field is required");
            $("#team_val").focus();
            $("#team_val").css("color","red");
              err_team=false;
              return false;
          }else{

            $("#team_val").hide();
          }
        }

      $("#btnSubmit").click(function(){
        err_team = true;
        team_f();

        if(err_team==true)
         {
            return true;
         }else{
            return false;

         }
      });
  });
</script>  