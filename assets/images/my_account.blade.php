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
          <h4 class="pull-left page-title">Add Account</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Setting</a></li>
            <li class="active">My Account</li>
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
                        <th>Account Owner</th>
                        <th>Account Nmae</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>City</th>
                        <th>State</th>
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
                <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fas fa-clock"></i>&nbsp;&nbsp;New Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <br>
                <br>
                <div class="modal-body" style="padding: 0px 0;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                  <label for="">Account Owner<font color="red">*</font></label>
                                  <input type="text" name="account_owner" class="form-control" placeholder="" id="account_owner">   
                            </div> 
                            <h6 id="account_owner_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                  <label for="">Lead</font></label>
                                  <input type="text" name="lead" class="form-control" placeholder="" id="lead">   
                            </div> 
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                  <label for="">Account Name<font color="red">*</font></label>
                                  <input type="text" name="account_name" class="form-control" placeholder="" id="account_name">   
                            </div> 
                            <h6 id="account_name_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                  <label for="">First Name<font color="red">*</font></label>
                                  <input type="text" name="first_name" class="form-control" placeholder="" id="first_name">   
                            </div>
                              <h6 id="first_name_val"></h6> 
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Last Name<font color="red">*</font></label>
                                     <input type="text" name="name" class="form-control" placeholder="" id="name">   
                                </div> 
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Email<font color="red">*</font></label>
                                     <input type="email" name="email" class="form-control" placeholder="" id="email">   
                                </div>
                                 <h6 id="email_val"> 
                        </div>
                         <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Phone<font color="red">*</font></label>
                                     <input type="text" name="phone" class="form-control" placeholder="" id="phone" maxlength="12" data-mask="(999) 999-9999">   
                                </div> 
                                <h6 id="phone_val">  
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="form-group" style="padding:25px;">
                                    <label for="">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input name="gender" id="gender" value="male" type="radio" />Male 
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="form-group" style="padding:25px; text-align:left;">
                                   <input name="gender" id="gender" value="female" type="radio" />Female
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Billing Address<font color="red">*</font></label>
                                <textarea type="text" name="billing_address" rows="3"  class="form-control" placeholder="" id="billing_address"></textarea>
                            </div> 
                            <h6 id="billing_address_val"></h6>
                          </div>
                           <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Shipping Address</label>
                                <textarea type="text" name="shipping_address" rows="3" class="form-control" placeholder="" id="shipping_address"></textarea>  
                            </div> 
                          </div> 
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Address Line1</label>
                                <input type="text" name="address_line1" class="form-control" placeholder="" id="address_line1">   
                            </div> 
                          </div>
                          <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Address Line1</label>
                                       <input type="text" name="address_line2" class="form-control" placeholder="" id="address_line2">   
                                  </div> 
                          </div>

                          <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Address Line2</label>
                                       <input type="text" name="address_line2" class="form-control" placeholder="" id="address_line2">   
                                  </div> 
                          </div>

                          <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Address Line2</label>
                                       <input type="text" name="address_line2" class="form-control" placeholder="" id="address_line2">   
                                  </div> 
                          </div>
                            <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="">City/District</label>
                                       <input type="text" name="city_district" class="form-control" placeholder="City/District" id="city_district">   
                                  </div> 
                          </div>
                           <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="">State/Provence</label>
                                       <input type="text" name="state_provence" class="form-control" placeholder="State/Provence" id="state_provence">   
                                  </div> 
                          </div>
                          <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="">City/District</label>
                                       <input type="text" name="city_district" class="form-control" placeholder="City/District" id="city_district">   
                                  </div> 
                          </div>
                           <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="">State/Provence</label>
                                       <input type="text" name="state_provence" class="form-control" placeholder="State/Provence" id="state_provence">   
                                  </div> 
                          </div>
                           <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="">Pin Code<font color="red">*</font></label>
                                       <input type="text" name="pin_code1" class="form-control" placeholder="Pin/Code" id="pin_code1">   
                                  </div> 
                                  <h6 id="pin_code1_val"> 
                          </div>
                          <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="">Country</label>
                                        <select class="select2 form-control" id="country" name="country" required="" aria-required="true" data-placeholder="Choose a Country...">
                                            <option value="">Choose a Country...</option>
                                            <option value=""></option>
                                        </select>   
                                  </div> 
                          </div> 
                           <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="">Pin Code<font color="red">*</font></label>
                                       <input type="text" name="pin_code2" class="form-control" placeholder="Pin/Code" id="pin_code2">   
                                  </div> 
                                  <h6 id="pin_code2_val"> 
                          </div>
                          <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="">Country</label>
                                        <select class="select2 form-control" id="country" name="country" required="" aria-required="true" data-placeholder="Choose a Country...">
                                            <option value="">Choose a Country...</option>
                                            <option value=""></option>
                                        </select>   
                                  </div> 
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
              </form>
            </div> 
        </div>
    </div>
</div>
 <!--  <-------------------------------------------------- add modal ends--------------------------------> 
  <!--  !-- view model start --> 
  <div class="modal user-details-model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title mt-0" id="myLargeModalLabel">My Account</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body" style="padding: 0px 0;">
                  <table class="table table-bordered table-striped" border="0">
                      <tbody>
                          
                          <tr style="border: none;">
                              <td><p><strong>Name</strong></p></td>
                              <td><p id="v_name"></p></td>
                          </tr>
                          <tr style="border: none;">
                              <td><p><strong>Account Name</strong></p></td>
                              <td><p id="v_account_name"></p></td>
                          </tr>
                          <tr style="border: none;">
                              <td><p><strong>Email</strong></p></td>
                              <td><p id="v_email"></p></td>
                          </tr>
                          <tr style="border: none;">
                              <td><p><strong>Phone</strong></p></td>
                              <td><p id="v_phone"></p></td>
                          </tr>
                          <tr style="border: none;">
                              <td><p><strong>Gender</strong></p></td>
                              <td><p id="v_gender"></p></td>
                          </tr>
                           <tr style="border: none;">
                              <td><p><strong>Billing Address</strong></p></td>
                              <td><p id="v_company_name"></p></td>
                          </tr>
                          <tr style="border: none;">
                              <td><p><strong>Address Line1</strong></p></td>
                              <td><p id="v_address_line1"></p></td>
                          </tr>
                          <tr style="border: none;">
                              <td><p><strong>City/District</strong></p></td>
                              <td><p id="v_city_district"></p></td>
                          </tr>
                          <tr style="border: none;">
                              <td><p><strong>State/Provence</strong></p></td>
                              <td><p id="v_state_provence"></p></td>
                          </tr>
                          <tr style="border: none;">
                              <td><p><strong>Country</strong></p></td>
                              <td><p id="v_country"></p></td>
                          </tr>
                          <tr style="border: none;">
                              <td><p><strong>Pin Code</strong></p></td>
                              <td><p id="v_pin_code"></p></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <!-- view model end  -->

  <script>
    $("document").ready(function(){

      $("#account_owner_val").hide();
      $("#account_name_val").hide();
      $("#first_name_val").hide();
      $("#email_val").hide();
      $("#phone_val").hide();
      $("#billing_address_val").hide();
      $("#pin_code1_val").hide();
      $("#pin_code2_val").hide();

      var err_account_owner =true;
      var err_account_name =true;
      var err_first_name =true;
      var err_email = true;
      var err_phone=true;
      var err_billing_address=true;
      var err_pin_code1=true;
      var err_pin_code2=true;

      $("#account_owner").blur(function(){
          account_owner_f();
        });
        function account_owner_f(){
          var k = $("#account_owner").val();

          if(k.length==""){
            $("#account_owner_val").show();
            $("#account_owner_val").html("This field is required");
            $("#account_owner_val").focus();
            $("#account_owner_val").css("color","red");
              err_account_owner=false;
              return false;
          }else{

            $("#account_owner_val").hide();
          }
        }

        $("#account_name").blur(function(){
          account_name_f();
        });
        function account_name_f(){
          var u = $("#account_name").val();

          if(u.length==""){
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

        $("#first_name").blur(function(){
          first_name_f();
        });
        function first_name_f(){
          var t = $("#first_name").val();

          if(t.length==""){
            $("#first_name_val").show();
            $("#first_name_val").html("This field is required");
            $("#first_name_val").focus();
            $("#first_name_val").css("color","red");
              err_first_name=false;
              return false;
          }else{

            $("#first_name_val").hide();
          }
        }

        $("#email").blur(function(){
            email_f();
           });
          function email_f(){
               var m = $("#email").val();
               var v =/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
               var result = m.match(v); 
          if(result == null){
            $("#email_val").show();
            $("#email_val").html("Please insert valid email ");
            $("#email_val").focus();
            $("#email_val").css("color","red");
              err_email=false;
              
          }else{
            err_email=true;
            $("#email_val").blur();
          }
        }

        $("#phone").blur(function(){
            phone_f();
        });
        function phone_f(){
          var q = $("#phone").val();
          var regexOnlyNumbers=/^[0-9() -]+$/;
          if(regexOnlyNumbers.test(q)!=true){
            $("#phone_val").show();
            $("#phone_val").html("Please insert valid phone number ");
            $("#phone_val").focus();
            $("#phone_val").css("color","red");
              err_phone=false;
              
          }else{
            err_phone=true;
            $("#phone_val").hide();
          }
        }

        $("#billing_address").blur(function(){
          billing_address_f();
        });
        function billing_address_f(){
          var b = $("#billing_address").val();

          if(b.length==""){
            $("#billing_address_val").show();
            $("#billing_address_val").html("This field is required");
            $("#billing_address_val").focus();
            $("#billing_address_val").css("color","red");
              err_billing_address=false;
              return false;
          }else{

            $("#billing_address_val").hide();
          }
        }

        $("#pin_code1").blur(function(){
            pin_code1_f();
        });
        function pin_code1_f(){
           var regexOnlyNumbers=/^[0-9]+$/;
          var c = $("#pin_code1").val();

         if(regexOnlyNumbers.test(c)!=true){
            $("#pin_code1_val").show();
            $("#pin_code1_val").html("Please insert valid pin code ");
            $("#pin_code1_val").focus();
            $("#pin_code1_val").css("color","red");
              err_pin_code1=false;
              
          }else{
            err_pin_code1=true;
            $("#pin_code1_val").hide();
          }
        }

        $("#pin_code2").blur(function(){
            pin_code2_f();
        });
        function pin_code2_f(){
           var regexOnlyNumbers=/^[0-9]+$/;
          var c = $("#pin_code2").val();

         if(regexOnlyNumbers.test(c)!=true){
            $("#pin_code2_val").show();
            $("#pin_code2_val").html("Please insert valid pin code ");
            $("#pin_code2_val").focus();
            $("#pin_code2_val").css("color","red");
              err_pin_code2=false;
              
          }else{
            err_pin_code2=true;
            $("#pin_code2_val").hide();
          }
        }

        $("#btnSubmit").click(function(){

         err_account_owner =true;
         err_account_name =true;
         err_first_name =true;
         err_email = true;
         err_phone=true;
         err_billing_address=true;
         err_pin_code1=true;
         err_pin_code2=true;
         
         account_owner_f();
         account_name_f();
         first_name_f();
         email_f();
         phone_f();
         billing_address_f();
         pin_code1_f();
         pin_code2_f();


       if((err_account_owner==true)&&(err_account_name==true)&&(err_first_name==true)&&(err_email==true) &&(err_phone)&&(err_billing_address=true)&&(err_pin_code1=true)&&(err_pin_code2=true))
       {
          return true;
       }else{
          return false;

       }

       });

  });
  </script>