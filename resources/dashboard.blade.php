@extends('layout')

<head>
        <meta charset="utf-8" />
        <title>Moltran - Responsive Bootstrap 4 Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        
    </head>
<style type="text/css">
.awesome_style{
  font-size:100px;
}
</style>

<body class="skin-blue">
<div class="wrapper row-offcanvas row-offcanvas-left"> 

  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Dashboard</h1></section>
    
    <!-- Main content -->
    <section class="content">
     <table width="100%" border="0" align="left">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="19%" align="center"><a href="{{ url('admin/employers')}}"><i class="fa awesome_style fa-briefcase"></i><br>
                Employers</a></td>
                <td width="19%" align="center"><a href="{{ url('admin/job_seekers')}}"><i class="fa awesome_style awesome_style fa-user"></i><br>
                  Jobseeker</a></td>
                <td width="19%" align="center"><a href="{{ url('admin/posted_jobs')}}"><i class="fa awesome_style fa-upload"></i> <br>
                  Posted Jobs</a></td>
                <td width="19%" align="center"><a href="{{ url('admin/posted_jobs')}}"><i class="fa fa-clipboard awesome_style"></i><br>
                  Featured Jobs</a></td>
                <td width="19%" align="center"><a href="{{ url('admin/pages')}}"><i class="fa awesome_style fa-file-text"></i><br>
                  Content Management</a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td> </td>
              </tr>
              <tr>
                <td align="center"><a href="<?php echo url('admin/stories');?>"><i class="fa awesome_style fa-thumbs-up"></i><br>
Success Stories</a></td>
                <td align="center"><a href="<?php echo url('admin/invite_employer');?>"><i class="fa awesome_style fa-envelope"></i><br>
                  Invite Employer</a></td>
                <td align="center"><a href="<?php echo url('admin/invite_jobseeker');?>"><i class="fa awesome_style fa-users"></i> <br>
                  Invite Jobseeker</a></td>
                <td align="center"><a href="<?php echo url('admin/email_template');?>"><i class="fa fa-envelope awesome_style"></i><br>
                  Email Templates</a></td>
                <td align="center"><a href="<?php echo url('admin/ads');?>"><i class="fa awesome_style fa-bullhorn"></i><br>
Ads</a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><a href="<?php echo url('admin/industries');?>"><i class="fa fa-desktop awesome_style"></i><br>
                  Job Industries</a></td>
                <td align="center"><a href="<?php echo url('admin/institute');?>"><i class="fa awesome_style fa-university"></i><br>
                  Institute</a></td>
                <td align="center"><a href="<?php echo url('admin/salary');?>"><i class="fa awesome_style fa-money"></i> <br>
                  Salary</a></td>
                <td align="center"><a href="<?php echo url('admin/qualification');?>"><i class="fa  awesome_style fa-graduation-cap">&nbsp;</i><br>
               Qualification</a></td>
                <td align="center"><a href="<?php echo url('admin/prohibited_keyword');?>"><i class="fa awesome_style fa-tags"></i><br>
Manage Prohibited Keywords</a></td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><a href="<?php echo url('admin/skills');?>"><i class="fa awesome_style fa-tags"></i><br>
Manage Skills</a></td>
                <td align="center"><a href="<?php echo url('admin/manage_newsletters');?>"><i class="fa fa-envelope awesome_style"></i><br>
                  Manage Newsletters</a></td>
                <td align="center"><a href="<?php echo url('admin/job_alert_queue');?>"><i class="fa fa-envelope awesome_style"></i><br>
                  Job Alert Queue</a></td>
                <td align="center"></td>
                <td align="center"></td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
              </tr>
            </table>
    </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 