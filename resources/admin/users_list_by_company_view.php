<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title;?></title>
<?php $this->load->view('admin/common/meta_tags'); ?>
<?php $this->load->view('admin/common/before_head_close'); ?>
</head>
<body class="skin-blue">
<?php $this->load->view('admin/common/after_body_open'); ?>
<?php $this->load->view('admin/common/header'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
<?php $this->load->view('admin/common/left_side'); ?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Added Users Management 
      <!--<small>advanced tables</small>--> 
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <!--<li><a href="#">Examples</a></li>-->
      <li class="active">Manage Added Users</li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Users Added By <span id="company_name"></span></h3><div class="paginationWrap"> <?php echo ($result)?$links:'';?> </div>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            
            <div class="clearfix">&nbsp;</div>
            <table id="example2" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th class="text-center">Name</th>
						<th class="text-center">Email</th>
						<th class="text-center">Location</th>
						<th class="text-center">Date Added</th>
						<th class="text-center">Last Login</th>
						<th class="text-center">Company Name</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                <?php 
				if($result):
					foreach($result as $row):
					
					?>
                <tr id="row_<?php echo $row->ID;?>">
					<td><?php echo ellipsize($row->full_name,36,.8);?></td>
					<td><?php echo $row->email ?></td>
					<td class="text-center">
						<?php
							if($row->country == '' && $row->state == '')
							{
								echo 'NA';
							}
							else
							{
								echo ($row->country != '') ? ucfirst($row->country) : '';
								echo ($row->state != '') ? ", " . ucfirst($row->state) : '';
							}
						?>
					</td>
					<td class="text-right"><?php echo date_formats($row->dated, 'd/m/Y');?></td>
					<td class="text-right"><?php echo $row->last_login_date;?></td>
					<td class="text-center">
						<a href="<?php echo base_url('admin/employers/details/'.$row->employer_ID);?>">
							<?php echo ($row->company_name)?$row->company_name:' - ';?>
						</a>
					</td>
					
					<td>
						<?php
							if($row->sts=='active')
								$class_label = 'success';
							elseif($row->sts=='closed')
								$class_label = 'danger';
							else
								$class_label = 'warning';
						?>
						<a onClick="update_users_status(<?php echo $row->ID;?>);" href="javascript:;" id="sts_<?php echo $row->ID;?>">
							<span class="label label-<?php echo $class_label;?>"><?php echo camelize($row->sts);?></span>
						</a>
					</td>
					<td>
						<a href="javascript:delete_job_seeker(<?php echo camelize($row->ID);?>);" class="btn btn-danger btn-xs">Delete</a>
					</td>
                </tr>
                <?php endforeach; else:?>
                <tr>
                  <td colspan="9" align="center" class="text-red">No Record found!</td>
                </tr>
                <?php
					endif;
				?>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          
          <!--Pagination-->
          <div class="paginationWrap"> <?php echo ($result)?$links:'';?> </div>
          
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
        
        <!-- /.box --> 
      </div>
    </div>
  </section>
  <!-- /.content --> 
</aside>
<!-- /.right-side -->
<?php $this->load->view('admin/common/footer'); ?>
<script type="text/javascript">
$( document ).ready(function() {
	$("#company_name").html('<?php echo $row->company_name;?>');
});
//company_name
</script>
