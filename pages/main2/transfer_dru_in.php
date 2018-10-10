<?php 
session_start();
error_reporting( error_reporting() & ~E_NOTICE );

include('../../lip/tmclass.php');
include('../../lip/dblogin.php');
include('../../lip/dbdrupal.php');
include('../../menu/chkLogin.php');
extract($_GET);
extract($_POST);

$chkPage = "transfer";
$subchkPage = "transfer_dru_in";

$classTM = new TMDRUPAL;
//$classBA = new BADRUPAL;

$iddep_pt = $_SESSION["departID"];
$stuadmin = $_SESSION["admin"];

?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../../img/logo_STY 3D.ico">
 
  <?php 
  include('../../menu/title.php');
  include('../../menu/mainstyle.php'); ?>

  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
  
</head>
<body class="hold-transition skin-blue sidebar-mini" onLoad="JavaScript:doCallAjax('','<?php echo $hdwlid; ?>','<?php echo $hdwid; ?>','<?php echo $hdwno; ?>','','','','','',1)">
<div class="wrapper">
  <?php  include('../../menu/header.php'); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php include('../../menu/userpanel.php'); ?>
      
      <?php include('../../menu/menu_L.php'); ?>
     </section>
    <!-- /.sidebar --> 
      </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        งานโอน-คืนคลัง
        <small>(<?php $classTM->departName($_SESSION["departID"]); ?>)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../main/indexdrupal.php"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">โอนครุภัณฑ์</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
    <form method="post" action="transfer_dru_in.php" name="formData">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
              <div class="form-group">
              	โอนครุภัณฑ์
              </div>
          </h3>
           
        </div>
          <div class="box-body">
          	 <div class="row">
             	<div class="box-body">&nbsp;
             	<label>&nbsp;โอนให้กับ :: </label>
  </div>
  <div class="col-xs-4">
  <?php echo $classAI-> dataDepart($iddepshow,0);?>
   <input type="hidden" class="form-control" value="<?php  echo $classAI->countMaxT(); ?>" id="docno" name="docno"/>
   </div>
  <div class="col-xs-1">
  <button type="submit" class="btn btn-primary btn-sm">
  <i class="fa fa-arrow-circle-right "></i>&nbsp;&nbsp;โอน</button>

  
  </div>
  </div>
  </div>
  <!-- /.box -->
  <?php if($iddepshow != ""){ 
  //$hdwyear = $strhd[2];

  ?>
  </form>
  <form name="form">
  <div class="box-body">
  <!-- data-->
  <div class="box box-success">
   
  <?php 
  
  echo $classAI->listdata(5,$stuadmin,$iddep_pt,$pid,$iddepshow,$docno,$subchkPage);?>
 </div>
 <?php } ?>
 <div class="box-footer" align="right">
      		&nbsp;
</div>
          </div>
       

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('../../menu/footer.php'); ?>
  
</div>
<!-- ./wrapper -->
<?php include('../../menu/mainscript.php'); ?>

<script>
  $(function () {
    $('#example1').DataTable();
	$('.select2').select2();
  });
  
</script>


</body>
</html>
