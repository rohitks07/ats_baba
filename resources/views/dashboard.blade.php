<!--Including Heading Section -->
@include('include.header')
<!--Including Left bar Section -->
   
@include('include.leftSidebar')
<style type="text/css">
.awesome_style{
  font-size:100px;
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
#wrapper {
        overflow-y: scroll;
        width: 100%;
    }
</style>

<body class="skin-blue">
    <div class="container-fluid ml-5 pl-5" style="overflow: auto;padding-left: 20%;" >

  <!-- Right side column. Contains the navbar and content of the page -->
  
      <h1> Dashboard</h1></section>
    
    <!-- Main content --><center>
    <div class="container-fluid" style="width:100%; " id="wrapper">

        <div style="padding: 25px 0;">
            <div class="row">
                <div class="col-md-3">
                    <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/employers');?>"><i class="fa awesome_style fa-briefcase"></i><br>
                    Employers</a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/job_seekers');?>"><i class="fa awesome_style awesome_style fa-user"></i><br>
                      Jobseeker</a>
                    </div>
                </div>
            
                      
                <div class="col-md-3">
                     <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/posted_jobs');?>"><i class="fa awesome_style fa-upload"></i> <br>
                      Posted Jobs</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="padding: 15px 0">
                         <a href="<?php echo url('admin/posted_jobs');?>"><i class="fa fa-clipboard awesome_style"></i><br>Featured Jobs</a>
                    </div>
                </div>
            </div>    

            <div class="row">
               
                <div class="col-md-3">
                   <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/pages');?>"><i class="fa awesome_style fa-file-text"></i><br>Content Management</a>
                    </div>
                </div>

                <div class="col-md-3">
                         <div style="padding: 15px 0">
                        <a href="<?php echo url('admin/stories');?>"><i class="fa awesome_style fa-thumbs-up"></i><br>Success Stories</a>
                        </div>
                </div>

                <div class="col-md-3">
                            <div style="padding: 15px 0">
                               <a href="<?php echo url('admin/invite_employer');?>"><i class="fa awesome_style fa-envelope"></i><br>Invite Employer</a>
                            </div>
                </div>

                <div class="col-md-3">
                         <div style="padding: 15px 0">
                             <a href="<?php echo url('admin/invite_jobseeker');?>"><i class="fa awesome_style fa-users"></i><br>Invite Jobseeker</a>
                        </div>
                </div>

            </div>
                
            
            <div class="row">
               
                <div class="col-md-3">
                     <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/email_template');?>"><i class="fa fa-envelope awesome_style"></i><br>Email Templates</a>
                     </div>
                </div>

                <div class="col-md-3">
                    <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/ads');?>"><i class="fa awesome_style fa-bullhorn"></i><br>Ads</a>
                    </div>
                </div>

                 <div class="col-md-3">
                     <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/industries');?>"><i class="fa fa-desktop awesome_style"></i><br>Job Industries</a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/institute');?>"><i class="fa awesome_style fa-university"></i><br>Institute</a>
                    </div>
                </div>
            </div>   
         
                 
            

             <div class="row">  
                
                <div class="col-md-3">
                     <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/salary');?>"><i class="fa awesome_style fa-money"></i> <br>Salary</a>
                    </div>
                </div>

               <div class="col-md-3">
                       <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/qualification');?>"><i class="fa  awesome_style fa-graduation-cap">&nbsp;</i><br>Qualification</a>   
                    </div>
                </div>

                <div class="col-md-3">
                    <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/prohibited_keyword');?>"><i class="fa awesome_style fa-tags"></i><br>Manage Prohibited Keywords</a>
                    </div>
                </div>

                <div class="col-md-3">
                     <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/skills');?>"><i class="fa awesome_style fa-tags"></i><br>Manage Skills</a>
                    </div>
                </div>

            </div>     
                    
                     
            <div class="row">
                
                <div class="col-md-3">
                    <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/manage_newsletters');?>"><i class="fa fa-envelope awesome_style"></i><br>Manage Newsletters</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="padding: 15px 0">
                    <a href="<?php echo url('admin/job_alert_queue');?>"><i class="fa fa-envelope awesome_style"></i><br>Job Alert Queue</a>
                    </div>
                </div>

            </div> 
        </div>

    </div>     
               
               
              
             
               
               
                
                
  
   </div>
    </div>
</div></center>
  <!-- /.right-side --> 
    
@include('include.footer')
