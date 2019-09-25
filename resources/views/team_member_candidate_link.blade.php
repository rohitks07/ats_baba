@include('include.emp_header')
@include('include.emp_leftsidebar')
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
        width: 50%;
        padding: 7px;
        border-radius: 5px;
    }

    textarea {
        border-radius: 5px;
        width: 48%;
    }
span.red {
    color:red;
}
input[class="form-control"]{
    border:1px solid #bdbcbc;
    width: 84%;
    background: #fff;
}
select[class="form-control"]{
    border:1px solid #bdbcbc;
    width: 84%;
    background: #fff;
}
textarea[class="form-control"]{
    border:1px solid #bdbcbc;
    background: #fff;
    width: 84%;
}
#wrapper {
    overflow: hidden;
    width: 100%;
    overflow-y: scroll;
}
  </style>
  <div id="wrapper">
    <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                    	      <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="  background-color:#317eeb;">
                                <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Candidate Link Forward</h3></div>
                            <div class="card-body">
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" action="{{url('jobseekersignup/add')}}"   method="post" novalidate="novalidate">
                                        
                                        <div class="form-group row">
                                            <label for="email" class="control-label col-lg-4">From<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" placeholder="" id="" name="" type="text">
                                                
                                            </div>
                                        </div>
                                   
                                        <div class="form-group row">
                                            <label for="password" class="control-label col-lg-4">Email To<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                        
                                                <input type="text"  placeholder="" id="" name="" type="text">
                                                
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                          <label for="CC"  class="control-label col-lg-4">CC</label>
                                            <div class="col-lg-8">
                                                <input type="text"   placeholder="" id="" name="" type="text">  
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                          <label for="Bcc"  class="control-label col-lg-4">Bcc</label>
                                            <div class="col-lg-8">
                                                <input type="text"   placeholder="" id="" name="" type="text">  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                          <label for="Subject"  class="control-label col-lg-4">Subject<span class="red">*</label>
                                            <div class="col-lg-8">
                                                <input type="text"   placeholder="Subject" id="Subject" name="Subject" type="text">  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Subject"  class="control-label col-lg-4">Email Content<span class="red">*</label>
                                            <div class="col-lg-6">
                                                <textarea class="wysihtml5 form-control article-ckeditor"  id="article-ckeditor" placeholder="Message body" style="height: 200px"></textarea>
                                            </div>
                                        </div>


                                   <center><button type="button" class="btn btn-info">Send</button></center>
                                </div> <!-- .form -->
                            </div> <!-- card-body -->
                        </div> <!-- card -->
                    </div> <!-- col -->
                </div> <!-- End row -->		
            </div>
        </div>
    </div>
</div>
@include('include.footer')