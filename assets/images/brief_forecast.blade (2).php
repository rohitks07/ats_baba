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
          <h4 class="pull-left page-title">Brief Forecast</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Setting</a></li>
            <li class="active">Brief Forecast</li>
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
              <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fas fa-clock"></i>&nbsp;&nbsp;Brief Forecast</h4>
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
                                  <label for="">Agent<font color="red">*</font></label>
                                   <input type="text" name="agent" class="form-control" placeholder="" id="agent">   
                              </div>
                               <h6 id="agent_val"> 
                      </div>
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Period Type<font color="red">*</font></label>
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
                      </div>
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Brief Archived Amount<font color="red">*</font></label>
                                   <input type="text" name="brief_archived_amount" class="form-control" placeholder="" id="brief_archived_amount">   
                              </div>
                               <h6 id="brief_archived_amount_val"> 
                      </div>

                      <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Brief Target Amount<font color="red">*</font></label>
                                   <input type="text" name="brief_target_amount" class="form-control" placeholder="" id="brief_target_amount">   
                              </div>
                               <h6 id="brief_target_amount_val"> 
                      </div>
                      <div class="col-md-12">
                      <div class="tab-content">
                       <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                         <thead>
                          <tr>
                           <th>Month</th>
                           <th>Commited Amount</th>
                           <th>Archived Amount</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody id="mytable">
                      <tr>
                       <td><input type="text" class="form-control" name="hsn_sac[]" required></td>
                       <td><input type="text" class="form-control" name="description[]" required></td>
                       <td><input type="text" class="form-control" name="qty[]" required></td>   
                       <td>
                         <button class="btn" id="del"><i class="fa fa-trash" style="color: blue;"></i></button>
                       </td>
                   
                  </tbody>
                  <tbody>
                        <td colspan="3"></td>
                          <td><a href="#" onclick="appendFormContents()"><i class="fa fa-plus-circle" aria-hidden="true" style="color:green" id="insert_more" ></i></td>
                      </tr>
                  </tbody>
                  </table>
                  </div>
                  </div>
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
    function appendFormContents()
    {
        var data='<tr>'+
        '<td><input type="text" class="form-control" name="hsn_sac[]"></td>'+
        '<td><input type="text" class="form-control" name="description[]"></td>'+
        '<td><input type="text" class="form-control" name="qty[]" required></td>'+
        '<td>'+
         '<button class="btn" id="del"><i class="fa fa-trash" style="color: blue;"></i></button>'+
        '</td>'+
        '</tr>';

        // appending form contents i.e. invoice details
        $("#mytable").append(data);
    }
     $("#mytable").delegate("#del", "click", function (){
        $(this).closest("tr").remove();
        getInvoiceDetailsValues();
    });
  </script>

   <script>
  $("document").ready(function(){

    $("#team_val").hide();
    $("#period_type_val").hide();
    $("#agent_val").hide();
    $("#brief_archived_amount_val").hide();
    $("#brief_target_amount_val").hide();

    err_team = true;
    err_period_type = true;
    err_agent = true;
    err_brief_archived_amount = true;
    err_brief_target_amount = true;

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

        $("#period_type").blur(function(){
          period_type_f();
        });
        function period_type_f(){
          var a = $("#period_type").val();

          if(a.length==""){
            $("#period_type_val").show();
            $("#period_type_val").html("This field is required");
            $("#period_type_val").focus();
            $("#period_type_val").css("color","red");
              err_period_type=false;
              return false;
          }else{

            $("#period_type_val").hide();
          }
        }

        $("#agent").blur(function(){
          agent_f();
        });
        function agent_f(){
          var t = $("#agent_val").val();

          if(t.length==""){
            $("#agent_val").show();
            $("#agent_val").html("This field is required");
            $("#agent_val").focus();
            $("#agent_val").css("color","red");
              err_agent=false;
              return false;
          }else{

            $("#agent_val").hide();
          }
        }

        $("#brief_archived_amount").blur(function(){
          brief_archived_amount_f();
        });
        function brief_archived_amount_f(){
          var g = $("#brief_archived_amount_val").val();

          if(g.length==""){
            $("#brief_archived_amount_val").show();
            $("#brief_archived_amount_val").html("This field is required");
            $("#brief_archived_amount_val").focus();
            $("#brief_archived_amount_val").css("color","red");
              err_brief_archived_amount=false;
              return false;
          }else{

            $("#brief_archived_amount_val").hide();
          }
        }

        $("#brief_target_amount").blur(function(){
          brief_target_amount_f();
        });
        function brief_target_amount_f(){
          var k = $("#brief_target_amount_val").val();

          if(k.length==""){
            $("#brief_target_amount_val").show();
            $("#brief_target_amount_val").html("This field is required");
            $("#brief_target_amount_val").focus();
            $("#brief_target_amount_val").css("color","red");
              err_brief_target_amount=false;
              return false;
          }else{

            $("#brief_target_amount_val").hide();
          }
        }

        $("#btnSubmit").click(function(){

        err_team = true;
        err_period_type = true;
        err_agent = true;
        err_brief_archived_amount = true;
        err_brief_target_amount = true;

        team_f();
        period_type_f();
        agent_f(); 
        brief_archived_amount_f();
        brief_target_amount_f();



         if((err_team==true)&&(err_period_type==true) &&(err_agent)&&(err_brief_archived_amount)&&(err_brief_target_amounts))
         {
            return true;
         }else{
            return false;

         }

       });
  });
 </script>