<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('common/meta_tags'); ?>
<title><?php echo $title;?></title>
<?php $this->load->view('common/before_head_close'); ?>
<link rel="stylesheet" href="http://jquery-ui.googlecode.com/svn/tags/1.8.7/themes/base/jquery.ui.all.css">
<link rel="stylesheet" href="<?php echo base_url('public/autocomplete/demo.css'); ?>">
<style>
.ui-button {
	margin-left: -1px;
}
.ui-button-icon-only .ui-button-text {
	padding: 0.35em;
}
.ui-autocomplete-input {
	margin: 0;
	padding: 0.48em 0 0.47em 0.45em;
}
</style>
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<div class="siteWraper">
<!--Header-->
<?php $this->load->view('common/header'); ?>
<!--/Header-->
<div class="container detailinfo">
  <div class="row">
	<div class="col-md-3">
		<div class="dashiconwrp">
			<?php $this->load->view('employer/common/employer_menu');?>
		</div>
	</div>
	
    <div class="col-md-9">
		<div class="col-md-10"> <?php echo $this->session->flashdata('msg');?>
      <!--Account info-->
      <div class="formwraper">
        <div class="titlehead">Manage Users <a href="<?php echo base_url('employer/create_team_member');?>" class="btn btn-danger btn-xs1">Add Member</a></div>
        <div class="formint">
			<table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr style="font-size: 11px;">				  
				  <th>Profile Picture</th>
				  <th>Name</th>
                  <th>Email Address</th>				 
				  <th>Date Joined</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
				
				if($row):
					//echo '<pre>';
						//print_r($result_team_members);
					//foreach($result_team_members as $row):
					
						$json_string1 = str_replace('"',"dquote",json_encode($row));
						$json_string2 = str_replace("'","squote",$json_string1);
						$json_string = str_replace("/","slash",$json_string2);
				?>
                <tr id="row_<?php echo $row->ID;?>">								 <td align="center" valign="middle"><a href="<?php echo base_url('admin/employers/details/'.$row->ID);?>" target="_blank">                    <?php $image_name = ($row->profile_image)?$row->profile_image:'no_logo.jpg';?>                    <img src="<?php echo base_url('public/uploads/employer/thumb/'.$image_name);?>" mar-height="100"/><br />                    <?php// echo ($row->profile_image)?$row->profile_image:' - ';?></a>				  </td>				
                  
                  <td valign="middle"><?php echo $row->full_name;?></a></td>
                  <td valign="middle"><?php echo $row->email;?></td>
                 <td valign="middle"><?php echo date_formats($row->dated, 'd/m/Y');?></td>
				  <td valign="middle"><?php echo $row->is_active;?></td>
                  <td valign="middle"><a href="<?php echo base_url('employer/manage_team_members/update/'.$row->ID);?>" class="btn btn-primary btn-xs">Edit</a><br /><br /><a href="javascript:delete_team_member(<?php echo camelize($row->ID);?>);" class="btn btn-danger btn-xs">Delete</a><br/><br/><a href="http://jobportal.itscient.com/employer/Privilegeduser.php" class="btn btn-danger btn-xs">Permission</a></td>
                </tr>
                <?php 
					//endforeach; 
					else:
				?>
                <tr>
                  <td colspan="10" align="center" class="text-red">No Record found!</td>
                </tr>
                <?php
					endif;
				?>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
		</div>
	</div>
      
      <!--Professional info-->
      
    </div>
    <!--/Job Detail--> 
    <?php $this->load->view('common/right_ads');?>
  </div>
</div>
<?php $this->load->view('common/bottom_ads');?>
<!--Footer-->
<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url('public/js/bad_words.js'); ?>"></script>
<?php $this->load->view('common/before_body_close'); ?>
<script src="<?php echo base_url('public/js/validate_employer.js');?>" type="text/javascript"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery-1.4.4.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.core.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.widget.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.button.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.position.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.autocomplete.js'); ?>"></script> 
<script type="text/javascript"> var cy = '<?php echo set_value('country');?>'; </script> 
<script src="<?php echo base_url('public/autocomplete/action-js.js'); ?>"></script> 
<script type="text/javascript">
$(document).ready(function(){
	$('button').css('display','none');
	if(cy!='USA' && cy!='')
		$(".ui-autocomplete-input.ui-widget.ui-widget-content.ui-corner-left").css('display','none');			
});
</script>
</body>
</html>