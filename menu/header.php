<?php
session_start();
//error_reporting( error_reporting() & ~E_NOTICE );

if(isset($_SESSION['pid'])){

}else{
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=../../index.php' >";
}
include('../../lip/tmclass.php');
include('../../lip/pdomysql.php');
include "../../lip/pdomysqlresthome.php";
$classTM = new TMDRUPAL;

?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include('../../menu/mainstyle.php');
    include('../../menu/mainscript.php');
    include('../../menu/maintitle.php');
    ?>
</head>
<body class="hold-transition skin-thingreen-light sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="indexadmin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R.</b>Sty</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Rest</b>HOME</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php $sexper = $_SESSION["sex"]; ?>
				<?php if($sexper == 'F'){ ?>
                    <img src="../../dist/img/avatar3.png" class="user-image" alt="User Image">
                <?php } else if($sexper == 'M'){ ?> 
                    <img src="../../dist/img/avatar5.png" class="user-image" alt="User Image">
                <?php } else { ?>
                    <img src="../../dist/img/avatar.png" class="user-image" alt="User Image">
                <?php } ?>
              <span class="hidden-xs"><?php echo $_SESSION["nameFL"]; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
				<?php if($sexper == 'F'){ ?>
                    <img src="../../dist/img/avatar3.png" class="img-circle" alt="User Image">
                <?php } else if($sexper == 'M'){ ?> 
                    <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">
                <?php } else { ?>
                    <img src="../../dist/img/avatar.png" class="img-circle" alt="User Image">
                <?php } ?> 
                <p>
                  <?php echo $_SESSION["nameFull"]; ?>
                  <small><?php echo $_SESSION["depart"]; ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <?php
            include('../../menu/userpanel.php');
            include('../../menu/menu_L.php');
            ?>
        </section>
        <!-- /.sidebar -->
    </aside>