<?php 
session_start();
//error_reporting( error_reporting() & ~E_NOTICE );

include('../../lip/tmclass.php');
include('../../lip/dblogin.php');

$classTM = new TMDRUPAL;

?>
<!DOCTYPE html>
<html>
<head>

 
  <?php include('../../menu/mainstyle.php');
  include('../../menu/maintitle.php');
  ?>
  
</head>
<body class="hold-transition skin-thingreen-light sidebar-mini">
<div class="wrapper">
  <?php  include('../../menu/header.php'); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php include('../../menu/userpanel.php'); ?>
      
      <?php 
	  	include('../../menu/menu_L.php');
	  ?>
     </section>
    <!-- /.sidebar --> 
      </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        จัดการบ้านพักออนไลน์
        <small>(<?php $classTM->departName($_SESSION["departID"]); ?>)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">จัดการบ้านพักออนไลน์</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
          1.มีข่าวประชาสัมพันธ์เกี่ยวกับบ้านพัก<p>
                2.เอกสารสำหรับดาวน์โหลด</p>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('../../menu/footer.php'); ?>
  
</div>
<!-- ./wrapper -->
<?php include('../../menu/mainscript.php'); ?>

</body>
</html>
