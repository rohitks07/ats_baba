@include('include.headers')
@include('include.leftSidebars')
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
        width: 82%;
        padding: 7px;
        border-radius: 5px;
    }

    textarea {
        border-radius: 5px;
        width: 48%;
    }
.form-control {
    border: 1px solid #bfbfbf;
    width: 84%;
    background: #fff;
}
.active, .btn:hover {
  background-color: #000000;
  color: white;
}
    
.form-group row{
    font: inherit;
}
#wrapper {
    overflow: hidden;
    width: 100%;
    overflow-y: scroll;
}
    
 </style>      
 <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color:#317eeb;">
                                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Update Profile</h3>
                            </div>
                        <form action="{{url('jobseeker/my_account/update')}}" method="post">
                            <input type="hidden" name="_token" value ="{{ csrf_token() }}">

                            <div class="card-body"> 
                            <div class="row">
                                <div class="col-md-6">
                            <!--full name-->
                                <div class="form-group row">
                                    <label for="firstname" class="control-label col-lg-4">Full Name <span style="color:red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" value="{{$toReturn['manage_acc'][0]['first_name']}}" id="" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <!--end of name-->
                                 <!--date of birth-->
                                <div class="form-group row">
                                    <label for="address" class="control-label col-lg-4">Date of Birth <span style="color:red;">*</span></label>
                                    <div class="col-sm-8">    
                                        <input type="text" class="txtDate" value={{$toReturn['manage_acc'][0]['dob']}} name="date_of_birth"  placeholder="dd-mm-yyyy" style="width:50%; padding:8px;">
                                    </div> 
                                </div>
                                <!--end of date of birth-->
                                <!--gender-->
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label">Gender <span style="color:red;">*</span></label>
                                    <div class="col-sm-8">
                                        <select name="gender" class="form-control" style="max-width:40%; border: 1px solid #bbb8b8;">
                                            <option value="{{$toReturn['manage_acc'][0]['gender']}}">{{$toReturn['manage_acc'][0]['gender']}}</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end of gender-->
                                <!--current Address-->
                                <div class="form-group row">
                                    <label class="col-md-4 control-label" for="example-textarea-input">Current Address <span style="color:red;">*</span></label>
                                    <div class="col-md-8">
                                        <textarea cols="40" rows="3" name="current_address" id="textarea" style="width:80%;">{{$toReturn['manage_acc'][0]['present_address']}}</textarea>
                                    </div>
                                </div>
                                <!--end of current Address-->

                               
                                <!--location-->
                                <div class="form-group row">
                                    <label for="address" class="control-label col-lg-4">Location <span style="color:red;">*</span></label>
                                    <select name="country" id="country" class="form-control"  style="width:17%; border: 1px solid #bbb8b8; margin-left: 9px;">
                                            <option value="India">{{$toReturn['manage_acc'][0]['country']}}</option>

                                            @foreach($toReturn['countries'] as $countries)
                                                <option>{{$countries['country_name']}}</option>
                                            @endforeach           
                                    </select>

                                    <select name="state" id="state_text" class="form-control"  style="max-width:17%; margin-left: 9px; border: 1px solid #bbb8b8;">
                                        <option value="AK">{{$toReturn['manage_acc'][0]['state']}}</option>
                                        <option value="AL">AL</option>
                                        <option value="AR">AR</option>
                                        <option value="AZ">AZ</option>
                                        <option value="CA">CA</option>
                                        <option value="CO">CO</option>
                                        <option value="CT">CT</option>
                                        <option value="DE">DE</option>
                                        <option value="FL">FL</option>
                                        <option value="GA">GA</option>
                                        <option value="HI">HI</option>
                                        <option value="IA">IA</option>
                                        <option value="ID">ID</option>
                                        <option value="IL">IL</option>
                                        <option value="IN">IN</option>
                                        <option value="KS">KS</option>
                                        <option value="KY">KY</option>
                                        <option value="LA">LA</option>
                                        <option value="MA">MA</option>
                                        <option value="MD">MD</option>
                                        <option value="ME">ME</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MO">MO</option>
                                        <option value="MS">MS</option>
                                        <option value="MT">MT</option>
                                        <option value="NC">NC</option>
                                        <option value="ND">ND</option>
                                        <option value="NE">NE</option>
                                        <option value="NH">NH</option>
                                        <option value="NJ">NJ</option>
                                        <option value="NM">NM</option>
                                        <option value="NV">NV</option>
                                        <option value="NY">NY</option>
                                        <option value="OH">OH</option>
                                        <option value="OK">OK</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="PR">PR</option>
                                        <option value="RI">RI</option>
                                        <option value="SC">SC</option>
                                        <option value="SD">SD</option>
                                        <option value="TN">TN</option>
                                        <option value="TX">TX</option>
                                        <option value="UT">UT</option>
                                        <option value="VA">VA</option>
                                        <option value="VI">VI</option>
                                        <option value="VT">VT</option>
                                        <option value="WA">WA</option>
                                        <option value="WI">WI</option>
                                        <option value="WV">WV</option>
                                        <option value="WY">WY</option>
                                    </select>

                                    <input type="text" name="city" value="{{$toReturn['manage_acc'][0]['city']}}" placeholder=" city "id="state_text" class="form-control" style="max-width:17%; margin-left: 9px; border: 1px solid #bbb8b8;">                                       
                                </div>
                                <!--end of location-->
                                </div>
                                <div class="col-md-6">
    
                                
                                <!--nationality-->
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label">Nationality<span style="color:red;">*</span></label>
                                    <div class="col-sm-8">
                                        <select name="nationality" class="form-control" style="max-width:26%; border: 1px solid #bbb8b8;">
                                            <option>{{$toReturn['manage_acc'][0]['nationality']}}</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end of nationality-->
                                <!--mobile number-->
                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Mobile Number <span style="color:red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="mobile_number" id="" value="{{$toReturn['manage_acc'][0]['mobile']}}" placeholder="Mobile Number " required>
                                    </div>
                                </div>
                                <!--end of number-->
                                <!--Home phone-->
                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Home Phone</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="home_number" id="" value="{{$toReturn['manage_acc'][0]['home_phone']}}" placeholder="Home Phone " >
                                    </div>
                                </div>
                                <!--end of home phone-->
                                <!--Total Experience-->
                                <div class="form-group row">
                                    <label for="address" class="control-label col-lg-4">Total Experience<span style="color:red;">*</span></label>
                                    <select name="total_experience" id="country" class="form-control" style="width:17%; border: 1px solid #bbb8b8;margin-left: 9px;">
                                        <option value="0-1">0-1</option>
                                        <option value="2-3">2-3</option>
                                        <option value="4-5">4-5</option>
                                        <option value="6-7">6-7</option>
                                        <option value="8-9">8-9</option>
                                        <option value="10-11">10-11</option>
                                        <option value="12-13">12-13</option>

                                    </select>

                                </div>
                                <!--end of Total Experience-->
                                <!--visa status-->
                                <div class="form-group row">
                                    <label for="" class="control-label col-lg-4">Visa Status</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="visa_status" value="{{$toReturn['manage_acc'][0]['visa_status']}}" id="" placeholder="Visa Status " required>
                                    </div>
                                </div>
                                <!--end of visa status-->
                            </div>
                        </div>
                                <div class="form-group"style="background: #e6e6e6;height: 75px;width: 100%;"><br>
                                    <center>
                                        <button class="btn btn-info" type="submit">Update</button>
                                    </center>
                                </div>
                                 <div class="col-sm-12">
                                        <!-- for success-->
                                        @if(!empty($success))
                                            <span class="alert alert-success">{{$success}}</span>
                                        @endif
                                </div>
                            </div>
                       
                            <!-- card-body -->
                        </form>
                        </div>
                        <!-- card -->
                    </div>
                    <!-- col -->
                </div>
            </div>
        </div>
                   
             
      
   

      <script>
        $(document).ready(function() {
            $('.txtDate').datepicker('setDate','today');
            $
        });
        </script>
            @include('include.footer')
</body>

</html>