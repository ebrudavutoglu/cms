<?php $this->load->view('includes/head'); ?>
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
