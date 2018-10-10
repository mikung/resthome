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
              <div class="box-body">
<!----ส่วนข้อมูลUser-->
      <!-- /.box -->

      <div class="box">

        <div class="box-header with-border">
               <h3 class="box-title">ข้อมูลการขอบ้านพัก</h3>
           </div>
           <!-- /.box-header -->
          <div class="box-body no-padding">
              <table class="table table-striped">

                  <tr>
                      <th style="width: 10px">#</th>
                      <th>ชื่อ-สกุล</th>
                      <th>หน่วยงาน</th>
                      <th>วันที่ขอบ้าน</th>
                      <th>ประเภทบ้าน</th>
                      <th>สถานะ</th>
                      <th>หมายเหตุ</th>
                  </tr>
                  <tr>
                      <td>1.</td>
                      <td>นงค์เยาว์ แหงมมา</td>
                      <td>คอมพิวเตอร์</td>
                      <td>7 พค 2561</td>
                      <td>ครอบครัว</td>
                      <td><button type="button" class="btn btn-block btn-warning btn-sm"style="width: 100px">รอรับเอกสาร</button>
                          <font color="red">**เอกสารอยู่ระหว่างนำเสนอผู้บังคับบัญชา</font></td>
                  <td><button type="button"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>แก้ไข</button>
                      <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-close"></i>ยกเลิก</button></td>
                  </tr>
                  <tr>
                  <td>2.</td>
                  <td>นงค์เยาว์ แหงมมา</td>
                  <td>คอมพิวเตอร์</td>
                  <td>4 พค 2561</td>
                  <td>ครอบครัว</td>
                  <td><button type="button" class="btn btn-block btn-info btn-sm" style="width: 100px">ตรวจสอบเอกสาร</button>
                      <font color="orange">**รอเข้าที่ประชุมพิจารณาการเข้าพักอาศัย</font></td>
                  <td><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>แก้ไข</button>
                      <button type="button" class="btn btn-danger btn-sm disabled"><i class="fa fa-close"></i>ยกเลิก</button></td>
                  </tr>
                  <tr>
                  <td>3.</td>
                  <td>นงค์เยาว์ แหงมมา</td>
                  <td>คอมพิวเตอร์</td>
                  <td>3 พค 2561</td>
                  <td>โสด</td>
                  <td colspan="2">
                      <button type="button" class="btn btn-success btn-sm" style="width: 100px">อนุมัติ</button>
                      <button type="button" class="btn  btn-default btn-sm" style="width: 100px">กรุณาพิมพ์เอกสาร</button>
                      <br>
                      <font color="green">**ได้รับอนุมัติให้เข้าที่พักอาศัย</font></br></td>
              </tr>

              </table>
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.box -->

  </div>
    <!-- /.col -->

</div>
<!-- /.row -->
          b

      <!----จบส่วนข้อมูลUser-->
          <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">ข่าวประชาสัมพันธ์เกี่ยวกับบ้านพัก</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>หัวข้อข่าว</th>
                                        <th>วันที่ประกาศ</th>
                                        <th>หมายเหตุ</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>ข่าว1</td>
                                        <td>4 พค 2561</td>
                                        <td>ทดสอบระบบ</td>
                                            </div>

                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>ข่าว2</td>
                                        <td>5พค2561</td>
                                        <td>test</td>
                                    </tr>

                                </table>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <ul class="pagination pagination-sm no-margin pull-right">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
      </div>
            </section>
      <!-- /.box จบตารางข่าวประชาสัมพันธ์ -->
              <section class="content">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="box">
                              <div class="box-header with-border">
                                  <h3 class="box-title">เอกสารสำหรับดาวน์โหลด</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                  <table class="table table-bordered">
                                      <tr>
                                          <th style="width: 10px">#</th>
                                          <th>รายการเอกสาร</th>
                                          <th>วันที่ประกาศ</th>
                                          <th>หมายเหตุ</th>
                                      </tr>
                                      <tr>
                                          <td>1.</td>
                                          <td>เอกสาร1</td>
                                          <td>4 พค 2561</td>
                                          <td>ทดสอบระบบ</td>
                              </div>

                              </tr>
                              <tr>
                                  <td>2.</td>
                                  <td>เอกสาร2</td>
                                  <td>5พค2561</td>
                                  <td>test</td>
                              </tr>

                              </table>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer clearfix">
                              <ul class="pagination pagination-sm no-margin pull-right">
                                  <li><a href="#">&laquo;</a></li>
                                  <li><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">&raquo;</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- /.box จบตารางดาวน์โหลดเอกสาร -->
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <?php include('../../menu/footer.php'); ?>

      </div>
<!-- ./wrapper -->
        <?php include('../../menu/mainscript.php'); ?>



</body>
</html>
