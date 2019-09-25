<!-- Modal for note Start-->
<div>
 <a data-target="#note" data-toggle="modal" title="Notes" class="MainNavText" id="MainNavHelp" href=""><i class="fa fa-clipboard" aria-hidden="true" style="background-color: yellow;"></i> dfhjhjdsh</a>
</div>


                                <div id="note" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Notes</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div role="tabpanel">
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="addNewNote">
                                                            <form autocomplete="off" id="note_form" class="note_form" action="" method="post">
                                                                <div class="col-md-12" style="margin-top:10px;">
                                                                    <div class="input-group ">
                                                                        <!-- <label class="input-group-addon">Enter Note</label> -->
                                                                        <input type="hidden" id="note_job_id" name="note_job_id" value="" />
                                                                        <input type="text" id="note" onkeypress="saveNote(this.id,event,2);" name="note" style="width:400Px;" class="form-control" required>
                                                                        
                                                                        <!-- <button type="button" class="btn btn-default" onclick="javascript: saveNote();">Save</button> -->
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <table class="table" width="100%">
                                                                <thead>
                                                                    
                                                                </thead>
                                                                <tbody id="allNotes">
                                                           
                                                                        <tr id="row">
                                                                            <td class="text-left">
                                                                                
                                                                            </td>
                                                                          
                                                                            <td class="text-center">
                                                                                <a onclick="delete_this_note();" href="javascript:void(0);" title="Delete Note" class="edit-ico"> 
                  <i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;</i>
                  </a>
                                                                            </td>
                                                                            <td class="text-center" style="text-align: left;">
                                                                                <a style="cursor: pointer;" onclick="change_privacy_note()"><span id="privacy>"></span></a>
                                                                            </td>
                                                                         
                                                                        </tr>
                                                                        
                                                                                <tr>
                                                                                    <td class="text-left" colspan="14" id="noNotes">No Notes found</td>
                                                                                </tr>
                                                                               
                                                                </tbody>
                                                                <tr>
                                                                    <td colspan="14" class="text-center"><a href="javascript:void(null);" onclick=""><input type="hidden" id="last_note_id" value=""/><span>View More</span></a></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>