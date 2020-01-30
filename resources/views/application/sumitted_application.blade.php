@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
    .table td {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #fff;
    }

    .table tr {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #fff;
    }

    .table th {
        padding: 7px;
        font-size: top;
        border-top: 1px solid #dee2e6;
        font-size: 14px;
        color: #000;
        background: #e4e4e4;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 0.5px solid #000;
    }

    .table-bordered thead td,
    .table-bordered thead th {
        border-bottom-width: 1px;
    }

    .alert-success {
        background-color: #ffffff;
        border-color: #29b6f6;
        color: #ffffff;
    }

    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: .75rem 1.25rem;
        color: black;
    }

    .card-title {
        font-size: 17px;
        font-weight: 500;
        color: #ffffff;
        margin-bottom: 0;
        margin-top: 0;
        text-transform: capitalize;
    }

    .fa fa-user {
        font-size: 55px;
        margin-left: 3%;
        color: #1ba6df;

    }

    #wrapper {
        overflow: hidden;
        width: 100%;
        overflow-y: scroll;
    }

    .modal .modal-dialog .modal-content .modal-header {
        border-bottom-width: 0px;
        margin: 3px;
        padding: 9px;
        padding-bottom: 0px;
        background: #dadada;
        height: 46px;
        width: 100%;
    }

    input[type=text],
    textarea,
        {
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        outline: none;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
        background: #fff;

    }

    input[type=text]:focus,
    textarea:focus {
        -moz-box-shadow: 0 0 5px #51cbee;
        -webkit-box-shadow: 0 0 5px #51cbee;
        box-shadow: 0 0 5px #51cbee;

        border: 1px solid #51cbee;
    }

    .card .card-header {
        padding: 10px 20px;
        border: none;
    }
</style>

<div class="content-page">
    <div class="content">
        <!--end of row-->
        <div class="row">
            <div class="col-md-12" style="float:left;">
                <div class="card card-border card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-primary" style="float:left;">Submittal Application</h3>
                        <!-- <h3 style="float:right;"><button type="button" class="btn btn-info" data   -toggle="modal" data-target=".bs-example-modal-sm">Add Another &nbsp; <i class="fa fa-plus-square" style="font-size:15px;color:#fff" aria-hidden="true"></i></button></h3> -->
                    </div>
                    <div class="card-body">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Job Visa Type</th>
                                    <th> Job Location </th>
                                    <th>Company Name</th>
                                    <th>Candidate  Name</th>
                                    <th> Candidate Visa </th>
                                    <th>Candidate Location</th>
                                    <th>Forward Date</th>
                                    <th>Rate </th>
                                    <th>Send By </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($application as $application_)
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>



</body>

</html>



@include('include.footers')