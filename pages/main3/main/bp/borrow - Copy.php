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
        <li><a href="#"><i class="fa fa-dashboard"></i>หน้าหลัก</a></li>
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
              <!-- Main content -->
              <div class="box box-warning">
                  <div class="box-header with-border">
                      <h3 class="box-title">แบบฟอร์มขอบ้านพัก</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <form role="form">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Text</label>
                              <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                          <div class="form-group">
                              <label>Text Disabled</label>
                              <input type="text" class="form-control" placeholder="Enter ..." disabled>
                          </div>

                          <!-- textarea -->
                          <div class="form-group">
                              <label>Textarea</label>
                              <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                          </div>
                          <div class="form-group">
                              <label>Textarea Disabled</label>
                              <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                          </div>

                          <!-- input states -->
                          <div class="form-group has-success">
                              <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                              <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                              <span class="help-block">Help block with success</span>
                          </div>
                          <div class="form-group has-warning">
                              <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                                  warning</label>
                              <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                              <span class="help-block">Help block with warning</span>
                          </div>
                          <div class="form-group has-error">
                              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                                  error</label>
                              <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                              <span class="help-block">Help block with error</span>
                          </div>

                          <!-- checkbox -->
                          <div class="form-group">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox">
                                      Checkbox 1
                                  </label>
                              </div>

                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox">
                                      Checkbox 2
                                  </label>
                              </div>

                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" disabled>
                                      Checkbox disabled
                                  </label>
                              </div>
                          </div>

                          <!-- radio -->
                          <div class="form-group">
                              <div class="radio">
                                  <label>
                                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                      Option one is this and that&mdash;be sure to include why it's great
                                  </label>
                              </div>
                              <div class="radio">
                                  <label>
                                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                      Option two can be something else and selecting it will deselect option one
                                  </label>
                              </div>
                              <div class="radio">
                                  <label>
                                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                      Option three is disabled
                                  </label>
                              </div>
                          </div>

                          <!-- select -->
                          <div class="form-group">
                              <label>Select</label>
                              <select class="form-control">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Select Disabled</label>
                              <select class="form-control" disabled>
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                              </select>
                          </div>

                          <!-- Select multiple-->
                          <div class="form-group">
                              <label>Select Multiple</label>
                              <select multiple class="form-control">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Select Multiple Disabled</label>
                              <select multiple class="form-control" disabled>
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                              </select>
                          </div>
                          <div class="box-footer">
                              <button type="submit" class="btn btn-warning">ส่งข้อมูล</button>
                          </div>
                      </form>
                  </div>
                  <!-- /.box-body -->
              </div>
          </div>
                  </select>
              </div>
              <!-- จบส่วน Main content -->

              <!-- /.content-wrapper -->
  <?php include('../../menu/footer.php'); ?>

      </div>
<!-- ./wrapper -->
        <?php include('../../menu/mainscript.php'); ?>



</body>
</html>
