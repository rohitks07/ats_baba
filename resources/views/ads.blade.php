@include('include.header')
@include('include.leftSidebar') 
<style>
    .form-control{
        width:40%;
        border-color:#848282;
        background:#fff;
    }
    #wrapper{
        width:100%;
        overflow-y:scroll;
    }
</style>
<div id="wrapper">
    <div class="content-page">
    <!-- Start content -->
    <div class="content">
            <div class="row">
                <!-- Basic example -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header" style="background:#317eeb;"><h3 class="card-title" style="color:#fff;">Ads Management</h3></div>
                            <div class="card-body">
                            <form action="{{url('admin/upda_ads')}}" method="post">
                                <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                <div class="form-group">
                                    <label class="control-label" for="example-textarea-input">Rightside Ad 1</label>
                                    <textarea class="form-control" rows="2" id="" name="rightsidead1" style="border-color:#c5bfbf; background:#fff;"></textarea>
                                </div>
                                  <div class="form-group">
                                    <label class="control-label" for="example-textarea-input">Rightside Ad 2</label>
                                    <textarea class="form-control" rows="2" id="" name="rightsidead2" style="border-color:#c5bfbf; background:#fff;"></textarea>
                                </div>
                                  <div class="form-group">
                                    <label class="control-label" for="example-textarea-input">Bottom Ad</label>
                                    <textarea class="form-control" rows="2" id="" name="bottom_ads" style="border-color:#c5bfbf; background:#fff;"></textarea>
                                </div>
                                  <div class="form-group">
                                    <label class="control-label" for="example-textarea-input">Google Analytics</label>
                                    <textarea class="form-control" rows="2" id="" name="google_analytics" style="border-color:#c5bfbf; background:#fff;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div><!-- card-body -->
                    </div> <!-- card -->
                </div> <!-- col-->
            </div>
                            
@include('include.footer')