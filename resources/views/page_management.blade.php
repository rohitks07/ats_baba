@include('include.header')
@include('include.leftSidebar')
<style>
    #wrapper{
        width:100%;
        overflow-y:scroll;
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

        <!-- Begin page -->
        <div id="wrapper"> 									 										
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header" style="background:#317eeb;">
										<h3 class="card-title" style="text-transform:none;color:#fff; font-size:18px;font-weight:300;">All pages</h3>
                                    </div>           
                            
                                    <div class="card-body" style="background:#fff;">
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#tabs-modal" style="float: right;">Add New Pages</button>
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead style="text-align:center;">
                                                <tr>
                                                    <th>Added Date</th>
                                                    <th>Page Heading</th>
                                                    <th>Preview</a></th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align:center;">
                                                    @foreach($pages as $pages_object)
                                            <tr>
                                            <?php
                                            $id=$pages_object->pageID;
                                            
                                            $pagehead=$pages_object->pageSlug;

                                            ?>
                                                <td>{{date('d-m-Y', strtotime($pages_object->dated))}}</td>
                                                <td>{{$pages_object->pageTitle}}</td>
                                                <td> <a href="{{url('cms/'.$pagehead)}}"><span>preview</span></a></td>
                                                <td>{{$pages_object->pageStatus}}</td>
                                                <td class="actions">
                                                    <button type="submit" data-toggle="modal" data-target="#edit_modal_CMS" data-myid="{{$pages_object -> pageID}}" data-mycontent="{{$pages_object->pageContent}}" data-mypagetitle="{{$pages_object ->pageTitle}}" data-mypageslug="{{$pages_object ->pageSlug}}" data-mypagecontent="{{$pages_object ->pageContent}}" data-myseometa="{{$pages_object ->seoMetaTitle}}" data-myseokey="{{$pages_object ->seoMetaKeyword}}" data-myseodes="{{$pages_object ->seoMetaDescription}}" class="btn-round-xs btn-xs" style="background-color:#00a65a; color:#fff">Edit</button>
                                                    <a href="{{url('admin/page_management/delete/'.$id)}}"><button  class="btn-round-xs btn-xs" style="background-color:#ff6347; color:#fff">Delete</button>																														
                                                </td>  
                                            </tr>
                                                    @endforeach  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            

		           <div id="tabs-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                        <div class="modal-dialog"><br><br><br><br>
                            <div class="modal-content p-0">
                                    <form action ="{{url('admin/page_management/add')}}"  method="post" >
                                        <input type="hidden" name="_token" value = "{{ csrf_token()  }}">

											    <div class="modal-header">
													    <h4 class="modal-title" style="margin-left: 1em;">Manage Page</h4><br>
													    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: inherit;"></button>
                                                </div>
                                                
                                                <ul class="nav nav-tabs navtab-bg nav-justified" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="profile-tab-1" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="true">
                                                                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                                                <span class="d-none d-sm-block">Page Detail</span>
                                                        </a>
                                                    </li>

                                                    <li class="nav-item">
                                                            <a class="nav-link" id="message-tab-1" data-toggle="tab" href="#message-1" role="tab" aria-controls="message-1" aria-selected="false">
                                                                <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                                                                <span class="d-none d-sm-block">Page Content</span>
                                                            </a>
                                                    </li>

                                                    <li class="nav-item">
                                                            <a class="nav-link" id="setting-tab-1" data-toggle="tab" href="#setting-1" role="tab" aria-controls="setting-1" aria-selected="false">
                                                                <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                                                <span class="d-none d-sm-block">Page SEO</span>
                                                            </a>
                                                    </li>
                                                </ul>
                                                       <!-- PAGE Detail -->
                                                <div class="tab-content">
                                                        <div class="tab-pane show active" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">
															<div class="card">
																<div class="card-body">
																		<div class="form-group">
																			<label for="exampleInputEmail1">Page Heading</label>
																			<input type="text" class="form-control" required  id="page_heading" placeholder="Heading" name ="pageheading"  style="border-color:#808080;">
																		</div>

																		<div class="form-group">
																			<label for="exampleInputPassword1">Page Slug</label>
																			<input type="text" class="form-control" required  id="page_slug" placeholder="slug" name ="pageslug" style="border-color:#808080;">
																		</div>

                                                                        <button type="submit" name="page_submit" id="page_submit" class="btn btn-primary" style="float:right">Sumbit <span id="spinner_profile" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span></button>
              														    <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Close</button>
                                                                </div><!-- card-body -->
                                                            </div> <!-- card -->
                                                        </div>   <!--class-->

                                                         <!-- PAGE CONTENT -->
                                                        <div class="tab-pane" id="message-1" role="tabpanel" aria-labelledby="message-tab-1">
                                                            <div class="card">
																<div class="card-body">
																		<div class="form-group">
                                                                            <label for="exampleInputEmail1">Page Content</label>
																			<textarea class="form-control article-ckeditor" name="pagecontent" id="article-ckeditor"> </textarea>
																		</div>

                                                                        <button type="submit" name="page_submit" id="page_submit" class="btn btn-primary" style="float:right">Sumbit <span id="spinner_profile" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span></button>
              														    <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Close</button>
                                                                </div><!-- card-body -->
                                                            </div> <!-- card -->
                                                        </div>
                                                        
                                                             <!-- PADE SEO -->
                                                        <div class="tab-pane" id="setting-1" role="tabpanel" aria-labelledby="setting-tab-1">
															<div class="card">
																<div class="card-body">
																		<div class="form-group">
																			<label for="exampleInputEmail1">Page Title</label>
																			<input type="text" class="form-control" required id="seoMetaTitle" placeholder="Heading" name ="pagetitle" style="border-color:#808080;">
																		</div>

																		<div class="form-group">
																			<label for="exampleInputPassword1">Meta Keywords</label>
																			<input type="text" class="form-control"  required id="seoMetaKeyword" placeholder="Meta Keyword" name ="metakeyword" style="border-color:#808080;">
																		</div>

																		<div class="form-group row">
																		    <label class="control-label" for="example-textarea-input">Meta Description</label>
																			<textarea class="form-control" rows="2" required  id="seoMetaDescription"  style="border-color:#808080;" name ="metadescription"></textarea>
																		</div>

                                                                        <button type="submit" name="page_submit" id="page_submit" class="btn btn-primary" style="float:right">Sumbit <span id="spinner_profile" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span></button>
              														    <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Close</button>
													                
                                                                </div><!-- card-body -->
                                                            </div> <!-- card -->
                                                        </div>
                                                </div>
                                            </form> <!-- submitted form -->
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                        
             <!-- <edit modal> -->
            <div id="edit_modal_CMS" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                        <div class="modal-dialog"><br><br><br><br>
                                <div class="modal-content p-0">

                                            <form action ="{{url('admin/page_management/edit')}}"  method="get" >
                                                <input type="hidden" name="_token" value = "{{ csrf_token()  }}">
                                                   <!-- <input type="hidden" id="id" name="id">  -->
                                                    <div class="modal-header">
													    <h4 class="modal-title" style="margin-left: 1em;">Manage Page</h4><br>
													    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: inherit;"></button>
                                                    </div>
                                                    
                                                    <ul class="nav nav-tabs navtab-bg nav-justified" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="profile-tab-1" data-toggle="tab" href="#editprofile-1" role="tab" aria-controls="profile-1" aria-selected="true">
                                                                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                                                <span class="d-none d-sm-block">Page Detail</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="message-tab-1" data-toggle="tab" href="#editmessage-1" role="tab" aria-controls="message-1" aria-selected="false">
                                                                <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                                                                <span class="d-none d-sm-block">Page Content</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="setting-tab-1" data-toggle="tab" href="#editsetting-1" role="tab" aria-controls="setting-1" aria-selected="false">
                                                                <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                                                <span class="d-none d-sm-block">Page SEO</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    
                                                    <div class="tab-content">
                                                        <div class="tab-pane show active" id="editprofile-1" role="tabpanel" aria-labelledby="profile-tab-1">
															<div class="card">
                                                                <div class="card-body">
																		<div class="form-group">
																			<label for="exampleInputEmail1">Page Heading</label>
																			<input type="text" class="form-control" id="page_heading" placeholder="Heading" name ="pageheading"  style="border-color:#808080;">
																		</div>

																		<div class="form-group">
																			<label for="exampleInputPassword1">Page Slug</label>
																			<input type="text" class="form-control" id="page_slug" placeholder="slug" name ="pageslug" style="border-color:#808080;">
																		</div>

                                                                        <button type="submit" name="page_submit" id="page_submit" class="btn btn-primary" style="float:right">Sumbit <span id="spinner_profile" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span></button>
              														    <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Close</button>
													                
                                                                </div><!-- card-body -->
                                                            </div> <!-- card -->
                                                        </div>

                                                       <!-- PAGE CONTENT -->
                                                       <div class="tab-pane" id="editmessage-1" role="tabpanel" aria-labelledby="message-tab-1">
                                                            <div class="card">
																<div class="card-body">
																		<div class="form-group">
                                                                            <label for="exampleInputEmail1">Page Content</label>
																			<textarea class="form-control editarticle-ckeditor content " name="pagecontent" id="editor"> </textarea>
																		</div>
                                                                        <input type="text" id="id" name="id"> 
                                                                        <button type="submit" name="page_submit" id="page_submit" class="btn btn-primary" style="float:right">Sumbit <span id="spinner_profile" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span></button>
              														    <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Close</button>
                                                                </div><!-- card-body -->
                                                            </div> <!-- card -->
                                                        </div>
                                                        
                                                        <div class="tab-pane" id="editsetting-1" role="tabpanel" aria-labelledby="setting-tab-1">
															<div class="card">
																<div class="card-body">
																	
																		<div class="form-group">
																			<label for="exampleInputEmail1">Page Title</label>
																			<input type="text" class="form-control" id="seoMetaTitle" placeholder="Heading" name ="pagetitle" style="border-color:#808080;">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPassword1">Meta Keywords</label>
																			<input type="text" class="form-control" id="seoMetaKeyword" placeholder="Meta Keyword" name ="metakeyword" style="border-color:#808080;">
																		</div>
																		<div class="form-group row">
																		    <label class="control-label" for="example-textarea-input">Meta Description</label>
																			<textarea class="form-control" rows="2" id="seoMetaDescription"  style="border-color:#808080;" name ="metadescription"></textarea>
																		</div>
																	
                                                                        <button type="submit" name="page_submit" id="page_submit" class="btn btn-primary" style="float:right">Sumbit <span id="spinner_profile" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span></button>
              														    <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Close</button>
													                
                                                                </div><!-- card-body -->
                                                            </div> <!-- card -->
                                                        </div>
                                                    </div>
                                            </form> <!-- submitted form -->
                                </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
                </div>
                </div>
                </div>    
                </div> <!-- End Row -->
            </div> <!-- container-dluid -->              
        </div> <!-- content -->  
    </div>
</div>
             
 <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>

       
@include('include.footer')
