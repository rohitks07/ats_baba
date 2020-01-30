@include('include.emp_header')
@include('include.emp_leftsidebar')
<style type="text/css">
	
	#wrapper {
		overflow: hidden;
		width: 100%;
		overflow-y: scroll;
	}
	.d-none{
		font-size: 17px;
		color: #fff;
		background: #317eeb;	
	}
	h3 {
		line-height: 30px;
		font-size: 24px;
		/* background: #317eeb; */
		color: #317eeb;
	}

	table.dataTable thead > tr > th {
    / padding-left: 8px; /
    padding-right: 30px;
}
.table-bordered th {
    border-top: 4px solid #f5f5f5 !important;
    border-bottom: 4px solid #f5f5f5 !important;
    border-right: 4px solid #f5f5f5 !important;
    border-left: 4px solid #f5f5f5 !important;
	color:#000;
	font-size: 13px;
	padding: 0.5em;
}
.table td{
    padding: 0.10rem;
	font-size: 12px;
    padding-left: 1em;
	border-top: 4px solid #f5f5f5 !important;
    border-bottom: 4px solid #f5f5f5 !important;
    border-right: 4px solid #f5f5f5 !important;
    border-left: 4px solid #f5f5f5 !important;
	color:#000;

}
</style>
<div id="wrapper">
	<div class="content-page">
		<div class="content">
			<div class="container-fluid">
                <div class="card">
                    <div class="card-header" style="background-color:#317eeb;">
                        <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large;font-weight: 100;">Matching Job</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; text-align:center; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Title</th>
                                            <th>Client</th>
                                            <th>Visa</th>
                                            <th>Location</th>
                                            <th>Matching %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($results['job_record'] as $results)
                                        <tr>
                                        <td>{{$results->job_code}}</td>
                                        <td>{{$results->job_title}}</td>
                                        <td>{{$results->client_name}}</td>
                                        <td>{{$results->job_visa_status}}</td>
                                        <td>@if($results->city){{$results->city}}, &nbsp;@endif{{$results->state}}</td>
                                        <td>@if(@$results->match_percentage){{@$results->match_percentage}} @else 0 @endif</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@include('include.emp_footer')