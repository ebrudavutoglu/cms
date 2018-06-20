<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('includes/include_style'); ?>
  <?php $this->load->view("{$viewFolder}/{$subViewFolder}/page_style"); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('includes/navbar'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('includes/aside'); ?>
  <!-- /Main Sidebar Container -->

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view("{$viewFolder}/{$subViewFolder}/content"); ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Tüm Hakları Saklıdır. &copy; 2014-2018 <a href="http://www.ebrudavutoglu.com">Ebru Davutoglu</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->
<?php $this->load->view('includes/foot'); ?>
