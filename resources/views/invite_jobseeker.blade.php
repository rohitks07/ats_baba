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
                                    <div class="card-header" style="background: #317eeb;"><h3 class="card-title" style="color:#fff;">Invite Jobseekers</h3></div>
                                        <div class="card-body">
                                        <form action="{{url('admin/invitejobseeker/add')}}" method="post">
                                            <div class="form-group">
                                                <label for="">Jobseeker Name</label>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="text" class="form-control" name="jobseeker_name" placeholder="Jobseeker Name" style="border-color:#696969" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Jobseeker Email</label>
                                                <input type="text" class="form-control" name="jobseeker_email" placeholder="Jobseeker Email" style="border-color:#696969" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="example-textarea-input">Message</label>
                                                    <textarea class="form-control" rows="3" id="example-textarea-input">{{$default_message}}</textarea>
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div><!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col-->
                        </div>
                    </div>
                </div>
            </div>
@include('include.footer')