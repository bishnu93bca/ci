<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('Admin/page/head.php'); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('Admin/page/head.php'); ?>
  <?php $this->load->view('Admin/page/header.php'); ?>
  <?php $this->load->view('Admin/page/headerbar.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
 
  <?php $this->load->view('Admin/page/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title"></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form role="form" action="" method="post" autocomplete="off">
          <div class="box-body">
              <div class="col-md-4">
                <div class="form-group">
                  <label>FirstName</label>
                  <input class="form-control" placeholder="Enter FirstName" type="text" name="firstname" value="<?php if(!empty($update)) { echo $update['firstname']; } else { echo set_value('firstname'); } ?>">
                  <?php echo form_error('firstname'); ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>LastName</label>
                  <input class="form-control" placeholder="Enter LastName" type="text" name="lastname" value="<?php if(!empty($update)) { echo $update['lastname']; } else { echo set_value('lastname'); } ?>">
                  <?php echo form_error('lastname'); ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email </label>
                  <input class="form-control" placeholder="Enter Email" type="email" name="email" value="<?php if(!empty($update)) { echo $update['email']; } else { echo set_value('email'); } ?>">
                  <?php echo form_error('email'); ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Mobile </label>
                  <input class="form-control" placeholder="Enter Mobile" type="number" name="mobile" value="<?php if(!empty($update)) { echo $update['mobile']; } else { echo set_value('mobile'); } ?>">
                  <?php echo form_error('mobile'); ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Message </label>
                  <textarea rows="4" cols="50" class="form-control" autocomplete="off" placeholder="Enter Message" type="text" name="message" value="<?php if(!empty($update)) { echo $update['message']; } else { echo set_value('message'); } ?>"></textarea>
                  <?php echo form_error('message'); ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <div class="col-md-4">
              <div class="form-group">
                <label>Image</label>
                  <input type="file" name="upload" id="fileToUpload">
                </div>
                </div>
                <br><br><br><br><br>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Save</button>
              <a href="<?php echo base_url('') ?>" class="btn btn-warning">Back</a>
            </div>
          </form> 
        </div>
        </div>
    </div>  
  </section> 

    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php if($this->session->flashdata('success_message')){ ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Success!</h4>
              <?php echo $this->session->flashdata('success_message') ?>
            </div>
          <?php } ?> 
          <?php if($this->session->flashdata('error_message')){ ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                <?php echo $this->session->flashdata('error_message') ?>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>FirstName</th>
                  <th>LastName</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               <?php if(!empty($data)){
                  $i=1;
                  foreach ($data as $key => $value) { ?>
                <tr>
                      <td><?php  echo $i++ ?></td>
                      <td><?php echo $value['firstname'] ?></td>
                       <td><?php echo $value['lastname'] ?></td>
                      <td><?php echo $value['email'] ?></td>
                      <td><?php echo $value['mobile']  ?></td>
                      <td><?php echo $value['message'] ?></td>
                      
                      
                      <td>
                          <a href="<?php echo base_url() ?>user/contact_us/<?php echo $value['user_id'] ?>" title="EDIT" ><span class="label label-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a>
                          &nbsp;
                          <a onclick="return confirm('Are you sure you want to delete this User?');" href="<?php echo base_url() ?>user/contactusDelete/<?php echo $value['user_id'] ?>" title="DELETE" ><span class="label label-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></span></a>

                      </td>
                </tr>
               <?php } } ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>S.no</th>
                  <th>FirstName</th>
                  <th>LastName</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 </div>     
<?php $this->load->view('Admin/page/footer.php'); ?>

  <!-- Control Sidebar -->
<?php $this->load->view('Admin/page/controlebar.php'); ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('Admin/page/javascript.php'); ?>
</body>
</html>      