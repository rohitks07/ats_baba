@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
.mini-stat-info span {
	color: #ffffff;
	display: block;
	font-size: 21px;
	font-weight: 500;
}
.card-body{
	padding: 0.25rem;
}
	.card .card-header {
		padding: 10px 20px;
		border: none;
		background: #428bca;
		color: #fff;
	}
	.card-title {
		font-size: 17px;
		font-weight: 100;
		color: #ffffff;
		margin-bottom: 0;
		margin-top: 0;
		text-transform:none;
	}
		.fa{
			color: #317eeb;
		}
.card .card-header {
    padding: 10px 20px;
    border: none;
    background: #317eeb;
    color: #fff;
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
<body>                           
        <div class="content-page">              
            <div class="content">               
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">                                       
									<a href="{{url('')}}"><button type="button" class="btn btn-success" style="float:right;">Add a job</button></a>											
								</div> 
                                  
                                <div class="card-body" style="border: 1px #B0B0B0 solid;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>                                                   
														<th>Code</th>
														<th>Title</th>
														<th>Client</th>
														<th>Location</th>
														<th>Visa</th>
														<th>Pay Rate</th>
														<th>Name</th>
														<th>Location</th> 
														<th>Visa</th>
														<th>Submittal Date</th> 
														<th>Actions</th>     													
                                                    </tr>
                                                </thead>
                                                <tbody>                                                                                            
													<tr>										
														<td>Zen-97</td>
														<td>Ui Developer With React Js</td>
														<td>Zensar</td>
														<td>RTP, NC</td>
														<td>E3 | EAD-GC | EAD-H4 | EAD-L2 | Green Card | H1 Visa | TN Visa | US Citizen</td>
														<td>$ 50-55/hr</td>
														<td>Sviatoslav Liubenko</td>
														<td>RTP, NC</td>
														<td>Green Card</td>
														<td>08/19/2019 &nbsp; <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i> </td>					
                                                        <td><i class="fa fa-trash-o">&nbsp;</i><i class="fa fa-clipboard" aria-hidden="true" style="background-color: yellow;"></i></td>						
                                                    </tr> 
                                                    <tr>										
														<td>Zen-97</td>
														<td>Ui Developer With React Js</td>
														<td>Zensar</td>
														<td>RTP, NC</td>
														<td>E3 | EAD-GC | EAD-H4 | EAD-L2 | Green Card | H1 Visa | TN Visa | US Citizen</td>
														<td>$ 50-55/hr</td>
														<td>Sviatoslav Liubenko</td>
														<td>RTP, NC</td>
														<td>Green Card</td>
														<td>08/19/2019 &nbsp; <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i> </td>					
                                                        <td><i class="fa fa-trash-o">&nbsp;</i><i class="fa fa-clipboard" aria-hidden="true" style="background-color: yellow;"></i></td>						
                                                    </tr>  				  
                                                    <tr>										
														<td>Zen-97</td>
														<td>Ui Developer With React Js</td>
														<td>Zensar</td>
														<td>RTP, NC</td>
														<td>E3 | EAD-GC | EAD-H4 | EAD-L2 | Green Card | H1 Visa | TN Visa | US Citizen</td>
														<td>$ 50-55/hr</td>
														<td>Sviatoslav Liubenko</td>
														<td>RTP, NC</td>
														<td>Green Card</td>
														<td>08/19/2019 &nbsp; <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i> </td>					
                                                        <td><i class="fa fa-trash-o">&nbsp;</i><i class="fa fa-clipboard" aria-hidden="true" style="background-color: yellow;"></i></td>						
                                                    </tr>  				   				  
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
      
@include('include.emp_footer')


<!-- Mirrored from coderthemes.com/moltran/blue/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:08 GMT -->
</html>