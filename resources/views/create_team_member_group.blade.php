<!DOCTYPE html>
<html lang="en">
@include('include.emp_header') 
@include('include.emp_leftsidebar')
<style>
    .form-control {
        border: 1px solid #b3b3b3;
        width: 79%;
        background-color: #fff;
    }
    
    .control-label {
        font-family: inherit;
    }
    
    .card-title {
        font-size: 17px;
        font-weight: 100;
        color: #ffffff;
        margin-bottom: 0;
        margin-top: 0;
        text-transform: none;
    }
    #wrappe{
        width:100%;
        overflow-y:scroll;
    }
    .buttons{
        width:100%;
        height:80px;
        background:#dcdbdb;
    }
    
</style>


    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color: #317eeb;">
                                    <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Create User's Group</h3></div>
                                <div class="card-body">
                                    <!--Group Name-->
                                    <form id="frmcheck" method="post" action="{{url('/employer/teammember/addinsert')}}">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Group Name <span style="color:red;">*</span></label>
                                            <div class="col-lg-8">
                                                <input class="form-control" id="groupname"  type="text" name="groupname" placeholder="Group Name">
                                                <span id="groupspan" name="groupspan">This field must not be empty</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="control-label col-lg-4">Team Member  <span style="color:red;">*</span></label>
                                            <div class="col-lg-8">
                                            <select class="form-control" id="team_member" name="team_member">
                                                <option value="" >--Select--</option>
                                                @foreach($list_teammember as $list_teammember)
                                                <option value="{{$list_teammember['ID']}}">{{$list_teammember['full_name']}}</option>
                                                @endforeach
                                                </select>
                                                <span id="teamspan" name="groupspan">This field must not be empty</span>
                                            </div>
                                        </div>
                                        <!--end of Group Name-->

                                </div>
                                <!--start button-->
                                <div class="buttons"><br>
                                    <center>
                                        <button class="btn btn-info waves-effect waves-light m-b-5" id="validatefrm" name="validatefrm" type="submit">Create Group</button>
                                    </center>
                                    </a>
                                </div>
                                <!--end of start button-->
                                </form>
                            </div>
                        </div>
                        <!--end of card body-->
                    </div>
                    <!-- col -->
                </div>
                <!-- End row -->
            </div>
            <!-- container -->
        </div>
        <!-- content -->
    </div>
    </div>

    @include('include.emp_footer')
    <script>
        $(document).ready(function() {
            $("#groupspan").hide();
            $("#teamspan").hide();
            var err_check = true;
            //validate name
            $("#validatefrm").click(function() {
                check_groupspan();
                check_teamspan();
                
            });
            function check_groupspan() {
                 var groupspan_val = $("#groupname").val();
                if (groupspan_val == "") {
                        $("#groupspan").show();
                        $("#groupspan").focus();
                        $("#groupspan").css("color", "red");
                        err_check = false;
                        return false;
                    } else {
                        $("#groupspan").hide();
                    }
                }
                function check_teamspan()
                {
                    var check_teamspan = $("#team_member").val();
                if (check_teamspan == "") {
                        $("#teamspan").show();
                        $("#teamspan").focus();
                        $("#teamspan").css("color", "red");
                        err_check = false;
                        return false;
                    } else {
                        $("#teamspan").hide();
                    }
                }
                    $("#validatefrm").click(function() {
                        err_check = true;
                        check_groupspan();
                        check_teamspan();

                        if ((err_check == true)) {
                            return true;
                        } else {
                            return false;
                        }
                    });
        });

    </script>
</body>

</html>