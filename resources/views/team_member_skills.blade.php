@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
    .mini-stat-info span {
        color: #ffffff;
        display: block;
        font-size: 21px;
        font-weight: 500;
    }

    .card-body {
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
        text-transform: none;
    }

    .btn-xs,
    .btn-group-xs>.btn {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
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
        width: 100%;
        padding: 7px;
        border-radius: 5px;
    }

    textarea {
        border-radius: 5px;
        width: 48%;
    }

    span.red {
        color: red;
    }

    input[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 100%;
        background: #fff;
    }

    select[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 100%;
        background: #fff;
    }

    textarea[class="form-control"] {
        border: 1px solid #bdbcbc;
        background: #fff;
        width: 100%;
    }

</style>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background-color:#317eeb;">
                        <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Edit Skills:
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"
                                style="float: right;">Add Skills</button></h3>
                    </div>

                    <div class="card-body" style="border: 1px #B0B0B0 solid;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>

                                            <th>Skills</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($skills as $skill)


                                        <tr>
                                            <?php $id=$skill->ID;
															$seeker_id=$skill->seeker_ID;
														?>

                                            <td>{{$skill->skill_name}}</td>

                                            <td>

                                                <a
                                                    href="{{url('employer/team_member_skills_del/'.$id.'/'.$seeker_id)}}">
                                                    <i class="fa fa-trash-o" aria-hidden="true" style="color:#317eeb;"
                                                        title="Delete"></i></a></td>
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
<div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0" id="myModalLabel"
                                                            style="font-weight:100;">Edit Experience</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form class="cmxform form-horizontal tasi-form"
                                                            action="{{url('employer/team_member_skills/in')}}"
                                                            method="post">
                                                            {{csrf_field()}}

                                                            <div class="card-body">


                                                                <div class="form-group row">
                                                                    <label for="email"
                                                                        class="control-label col-lg-4">Skills</label>
                                                                    <div class="col-lg-8">
                                                                        <input type="hidden" id="seeker_ID"
                                                                            name="seeker_ID" value="{{$seeker_id}}">
                                                                        <input type="text" id="skills" name="skills"
                                                                            placeholder="Skill,Skill">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




@include('include.emp_footer')



</html>
