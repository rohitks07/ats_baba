@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
    #wrapper {
    width: 100%;
    overflow-y: scroll;
}
                    
</style>   
    <div id="wrapper">                          
        <div class="content-page">              
            <div class="content">               
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header" style="background-color:#317eeb;"> 
                                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Edit Education                                    
                                    <a href="{{url('employer/employer_edit_education/')}}"></a>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="float: right;">Add Education</button></h3>

                                    </h3>                                           
                                </div> 
                                  
                                <div class="card-body" style="border: 1px #B0B0B0 solid;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            
                                                <thead>
                                                    <tr>                                                   
                                                        <th>Degree</th>
                                                        
                                                        <th>Institute</th>
                                                        <th>City</th>
                                                        <th>Country</th>
                                                        <th>Year of Completion</th>
                                                        <th>Action</th>                                         
                                                    </tr>
                                                </thead>
                                                <tbody>                                                                                             
                                                    
                                                    @foreach($educations as $education)


                                                         <tr>
                                                           <?php $id=$education['ID'];
                                                              $seekerid=$education['seeker_ID'];?>

                                                         <td>{{$education['degree_title']}}</td>
                                                        <td>{{$education['institude']}}</td>
                                                        <td>{{$education['city']}}</td>
                                                        <td>{{$education['country']}}</td>                                              
                                                        <td>{{$education['completion_year']}}</td>
                                                                                                    
                                                        <td>
                                                        <a data-toggle="modal" data-target="#updateModal"><i class="fa fa-pencil" aria-hidden="true" style="color: #1ba6df;cursor: pointer;" title="Edit"></i></a>
                                                         <a href="{{url('employer/employer_edit_education/del/'.$id.'/'.$seekerid)}}"><i class="fa fa-trash-o" aria-hidden="true" style="color:#317eeb;" title="Delete"></i></a>
                                                        </td>   
                                                                                                                                                                                                                                                                
                                                    </tr>
                                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="cmxform form-horizontal tasi-form"  onsubmit="return validation()" action="{{url('employer/employer_edit_education/add')}}"   method="post" >
            {{csrf_field()}}    
            <div class="form-group row">
                <label for="" class="control-label col-lg-4">Degree</label>
                <div class="col-lg-8">
   <input class="form-control" type="hidden" id="seeker_ID" name="seeker_ID" value="{{$education['seeker_ID']}}">
   <input class="form-control" type="text" id="degree_title" name="degree_title"  placeholder="Degree" value="" required>
   <span id="degree_titleerror" class="text-danger"></span>
   </div>
    </div>
    <div  class="form-group row">
   <label for="" class="control-label col-lg-4">Institute</label>
   <div class="col-lg-8">
   <input class="form-control " type="text" id="institude" name="institude"  placeholder="Institute" value=""required>
   <span id="institudeerror" class="text-danger"></span>
   </div>
    </div>
    <div class="form-group row">
   <label for="" class="control-label col-lg-4">City</label>
   <div class="col-lg-8">
   <input class="form-control " type="text" id="city" name="city"  placeholder="City" value="" required>
   <span id="cityerror" class="text-danger"></span>
   </div>
    </div>
    <div class="form-group row">
   <label for="" class="control-label col-lg-4">Country</label>
   <div class="col-lg-8">
   <input class="form-control " type="text" id="country" name="country"  placeholder="Country" value="" required>
   <span id="countryerror" class="text-danger"></span>
   </div>
    </div>
    <div class="form-group row">
   <label for="" class="control-label col-lg-4">Year of Completion</label>
   <div class="col-lg-8">
   <input class="form-control " type="text" id="completion_year" name="completion_year"  placeholder="Year of Completion" value="" required>
   <span id="completion_yearerror" class="text-danger"></span> 
  </div>
    </div>
    
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" onclick="validation()" class="btn btn-primary">Submit</button>
      </div>
      
      
    </div>
  </div>
  </form>
</div>      
                                                    @endforeach                                                                                                                                                                                                     
                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                           
                    </div> <!-- End Row -->
                </div><!--container-fluid-->
            </div><!--content-->

            

            
            <!-- Model Update -->
 <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <form class="cmxform form-horizontal tasi-form" onsubmit="return validation1()" action="{{url('employer/employer_edit_education/'.$id.'/'.$seekerid)}}"   method="post" >
            {{csrf_field()}}    
            <div class="form-group row">
                <label for="" class="control-label col-lg-4">Degree</label>
                <div class="col-lg-8">
   <input class="form-control" type="hidden" id="seeker_ID" name="seeker_ID" value="{{$education['seeker_ID']}}">
   <input class="form-control" type="text" id="degree_title" name="degree_title"  placeholder="Degree" value="{{$education['degree_title']}}"required>
   <span id="degree_titleerror" class="text-danger"></span> 
  </div>
    </div>
    <div  class="form-group row">
   <label for="" class="control-label col-lg-4">Institute</label>
   <div class="col-lg-8">
   <input class="form-control " type="text" id="institude" name="institude"  placeholder="Institute" value="{{$education['institude']}}"required>
   <span id="institudeerror" class="text-danger"></span>  
  </div>
    </div>
    <div class="form-group row">
   <label for="" class="control-label col-lg-4">City</label>
   <div class="col-lg-8">
   <input class="form-control " type="text" id="city" name="city"  placeholder="City" value="{{$education['city']}}"required>
   <span id="cityerror" class="text-danger"></span>   
  </div>
    </div>
    <div class="form-group row">
   <label for="" class="control-label col-lg-4">Country</label>
   <div class="col-lg-8">
   <input class="form-control " type="text" id="country" name="country"  placeholder="Country" value="{{$education['country']}}"required>
   <span id="countryerror" class="text-danger"></span> 
  </div>
    </div>
    <div class="form-group row">
   <label for="" class="control-label col-lg-4">Year of Completion</label>
   <div class="col-lg-8">
   <input class="form-control " type="text" id="completion_year" name="completion_year"  placeholder="Year of Completion" value="{{$education['completion_year']}}"required>
   <span id="completion_yearerror" class="text-danger"></span> 
  </div>
    </div>
    
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" onclick="validation1()"class="btn btn-primary">Submit</button>
      </div>
      
      
    </div>
  </div>
  </form>
</div>
<script type="text/javascript">
  function validation()
  {
      var degree_title = document.getElementById('degree_title').value;
      var institude = document.getElementById('institude').value;
      var city = document.getElementById('city').value;
      var country = document.getElementById('country').value;
      var completion_year = document.getElementById('completion_year').value;
      

      var usercheck=/^[A-Za-z. ]{3,}$/;
      var countrycheck=/^[A-Za-z. ]{3,}$/;
      var citycheck=/^[A-Za-z. ]{3,}$/;
      var companycheck=/^[A-Za-z. ]{3,}$/;
      var completion_yearcheck=/^[19][0-9]{3,3}$/;
      
      
      if(usercheck.test(degree_title)){
       document.getElementById('degree_titleerror').innerHTML="";
      }
      else{
       document.getElementById('degree_titleerror').innerHTML="Please provide valid  Degree_title";
       return false;
      }
      if(countrycheck.test(institude)){
       document.getElementById('institudeerror').innerHTML="";
      }
      else{
       document.getElementById('institudeerror').innerHTML="Please provide valid Institude Name";
       return false;
      }
      if(citycheck.test(city)){
       document.getElementById('cityerror').innerHTML="";
      }
      else{
       document.getElementById('cityerror').innerHTML="Please provide valid City Name";
       return false;
      }
      if(companycheck.test(country)){
       document.getElementById('countryerror').innerHTML="";
      }
      else{
       document.getElementById('countryerror').innerHTML="Please provide valid Country Name";
       return false;
      }
      if(completion_yearcheck.test(country)){
       document.getElementById('completion_yearerror').innerHTML="";
      }
      else{
       document.getElementById('completiion_yearerror').innerHTML="Please provide valid Completion_year";
       return false;
      }
      
  }
  
    function validation1()
    {
        var degree_title = document.getElementById('degree_title').value;
        var institude = document.getElementById('institude').value;
        var city = document.getElementById('city').value;
        var country = document.getElementById('country').value;
       

        var usercheck=/^[A-Za-z. ]{3,}$/;
        var countrycheck=/^[A-Za-z. ]{3,}$/;
        var citycheck=/^[A-Za-z. ]{3,}$/;
        var companycheck=/^[A-Za-z. ]{3,}$/;
        
        if(usercheck.test(degree_title)){
         document.getElementById('degree_titleerror').innerHTML="";
        }
        else{
         document.getElementById('degree_titleerror').innerHTML="please provide valid Job Title";
         return false;
        }
        if(countrycheck.test(institude)){
         document.getElementById('institudeerror').innerHTML="";
        }
        else{
         document.getElementById('institudeerror').innerHTML="please provide valid Country Name";
         return false;
        }
        if(citycheck.test(city)){
         document.getElementById('cityerror').innerHTML="";
        }
        else{
         document.getElementById('cityerror').innerHTML="please provide valid City Name";
         return false;
        }
        if(companycheck.test(country)){
         document.getElementById('countryerror').innerHTML="";
        }
        else{
         document.getElementById('countryerror').innerHTML="please provide valid Company Name";
         return false;
        }
    }
    </script>

 

@include('include.emp_footer')


<!-- Mirrored from coderthemes.com/moltran/blue/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:08 GMT -->
</html>