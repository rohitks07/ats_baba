@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>    
		.active, .btn:hover {
		  background-color: #000000;
		  color: white;
		}
        #wrapper{
            width: 100%;
            overflow-y: scroll;
        }
        .img{
            width:15%;
            height:20%;
        }
        
        .table td {
            padding: 7px;
            font-size: top;
            border-top: 1px solid #dee2e6;
            font-size: 14px;
            color: #000;
            background:#fff;
        }
        .table tr {
            padding: 7px;
            font-size: top;
            border-top: 1px solid #dee2e6;
            font-size: 14px;
            color: #000;
            background:#fff;
        }
        .table th {
            padding: 7px;
            font-size: top;
            border-top: 1px solid #dee2e6;
            font-size: 14px;
            color: #000;
            background:#e4e4e4;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 0.5px solid #000;
        }
        .table-bordered thead td, .table-bordered thead th {
            border-bottom-width: 1px;
        }
</style>
        		

 
	<div id="wrapper">
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                        <div class="row"> 
                            <div class="col-md-12">
							<!-- <div class="col-md-2">
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-user"></i> <span>Manage Account</span> </button><br>
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-users"></i> <span>My Resume &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </button>
								<button type="button" class="btn btn-info m-b-5" style="width:100%">  <span> Application History</span> </button>
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-users"></i><span>&nbsp;Mtaching Job &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </button>
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-users"></i>  <span>&nbsp;Manage Skill&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </button>
								<button type="button" class="btn btn-info m-b-5" style="width:100%"> <i class="fa fa-lock"></i> <span>Change Password</span> </button>
							</div> -->
                                <div class="card" style="border: 1px #C0C0C0 solid;">
                                    <div class="card-header" style="  background-color:#317eeb;"><h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Company Profile</h3></div>
                                    <div class="card-body">
                                         <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                    <form  action ="{{url('employer/companyprofile/edit')}}">
                                                        <tbody>
                                                            <!--<tr>-->
                                                            <!--    <td>Name</td>-->
                                                            <!--    <td>{{ $companies['first_name']}}</td>-->

                                                                
                                                            <!--</tr>-->
                                                            <tr>
                                                                <td>Company Name</td>
                                                                <td>{{ $companies['company_name']}}</td>
																 
                                                            </tr>
                                                            <tr>
                                                                <td>Industry</td>
                                                                <td>{{$companies['industries_name']}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Organization Type</td>
                                                                <td>{{$companies['company_type']}}</td>
                                                            </tr>
															<tr>
                                                                <td>Federal ID/EIN</td>
                                                                <td>{{$companies['federal_id']}}</td>
                                                            </tr>
															<tr>
                                                                <td>DUNS (D&B)</td>
                                                                <td>{{$companies['duns']}} </td>
                                                            </tr>
															<tr>
                                                                <td>Address</td>
                                                                <td>{{$companies['company_address']}}</td>
                                                            </tr>
															<tr>
                                                                <td>Location</td>
                                                                <td>{{$companies['company_country']}} , {{$companies['company_state']}} , {{$companies['company_city']}}</td>
                                                            </tr>
															<tr>
                                                                <td>Phone (Work)</td>
                                                                <td>{{$companies['company_phone']}}</td>
                                                            </tr>
															<tr>
                                                                <td>Phone (Mobile)</td>
                                                                <td>{{$companies['company_mobile']}}</td>
                                                            </tr>
															<tr>
                                                                <td>Company Website</td>
                                                                <td>{{$companies['company_website']}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>No. of Employees</td>
                                                                <td>{{$companies['no_of_employees']}}</td>
                                                            </tr>
															<tr>
                                                                <td>Company Description</td>
                                                                <td>{{$companies['company_description']}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Company LOGO </td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <td><img src="{{url('public/companylogo/'.$companies[''])}}" class="img"></td>
                                                                    </div>
                                                                </div>
                                                            </tr>
                                                           
                                                        </tbody>
                                                    </table>
                                                    
                                                    <div class="form-group" style="width:100%; height:80px;background:#e4e4e4;"><br>
                                                        <center>
                                                            <button class="btn btn-primary" type="submit">Edit</button>
                                                        </center>
                                                        </a>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        </div> <!-- End row -->
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
        </div>
        <!-- END wrapper -->
@include('include.emp_footer')
      
	</body>

<!-- Mirrored from coderthemes.com/moltran/blue/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:55 GMT -->
</html>