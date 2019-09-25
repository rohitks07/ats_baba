@include('include.header')
@include('include.leftSidebar')    
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>
<style>
    .form-control{
        width:40%;
        border-color:#848282;
        background:#fff;
    }
</style>

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header" style="background: #317eeb;">
                                        <h3 class="card-title" style="color:#fff;">Invite Employer</h3></div>
                                    <div class="card-body">
                                        <form action="{{url('admin/inviteemployer/add')}}" method="post">
                                            <div class="form-group">
                                                <label for="">Employer Name</label>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="text" class="form-control" placeholder="Employer Name" name="employer_name" id="employer_name" required>
                                                <span id="namecheck">Enter a Valid Employer Name</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Employer Email</label>
                                                <input type="text" class="form-control" placeholder="Employer Email" name="employer_email" id="employer_email" required>
                                                <span id="emailcheck">Enter a Valid Employer Email</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="example-textarea-input">Message</label><br>
                                                    <textarea class="form-control" rows="3" id="message"name="message">{{$default_message}}</textarea>
                                                    <span id="messagecheck">Enter a Message</span>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary" id="">Submit</button>
                                        </form>
                                    </div><!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col-->
                        </div>
                    </div>
                </div>
@include('include.footer')
<!--Validation of Invite Jobseeker-->

<script>
			$(document).ready(function()
			{
				$("#namecheck").hide();
				$("#emailcheck").hide();
				$("#messagecheck").hide();
			
				var err_check=true;
				var err_check_email=true;
				var err_check_message=true;
				
				//validate jobseeker name
				$("#validatefrm").click(function()
				{
					check_firstname();
				});
				function check_firstname()
				{
					var firstname_val=$("#employer_name").val();
					
					var patt1 = /\b[0-9]/;
					 var result = firstname_val.search(patt1);
					if((firstname_val=="")||(result==0)||(firstname_val.length<3))
					{
						$("#namecheck").show();
						$("#namecheck").focus();
						$("#namecheck").css("color","red");
						err_check=false;
						return false;
					}
					else
					{
						$("#namecheck").hide();
					}
					
				}
				
				//validate jobseeker email
				$("#validatefrm").click(function()
				{
					check_email();
				});
				function check_email()
				{
					var email_val=$("#employer_email").val();
					var v=/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
					var result = email_val.match(v);
					if((email_val == "")||(result == null))
					{
						$("#emailcheck").show();
						$("#emailcheck").focus();
						$("#emailcheck").css("color","red");
						err_check_email=false;
						return false;
					}
					else
					{
						
						$("#emailcheck").hide();
					}
				}
				
				//validate message
				$("#validatefrm").click(function()
				{
					check_message();
				});
				function check_message()
				{
					var message_val=$("#message").val();
					if((message_val=="")||(message_val.length<3))
					{
						$("#messagecheck").show();
						$("#messagecheck").focus();
						$("#messagecheck").css("color","red");
						err_check_message=false;
						return false;
					}
					else
					{
						$("#messagecheck").hide();
					}
				}
				

				$("#validatefrm").click(function()
				{
					err_check=true;
					err_check_email=true;
                    err_check_message=true;
                    
					check_firstname();
					check_email();
					check_message();

					if((err_check==true)&&(err_check_email==true)&&(err_check_message==true))
					{
						return true;
					}
					else
					{
						return false;
					}
				});
			});
</script>