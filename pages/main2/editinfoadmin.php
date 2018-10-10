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
        <!-- ส่วนหัวข้อ title -->
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
                <!-- ส่วนฟอร์มอัพโหลด -->
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">อัพโหลดเอกสาร</h3>
                    </div>
                    <form id="defaultForm" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">ประเภทการอัพโหลด</label>
                            <div class="col-lg-4">
                                <select class="form-control">
                                    <option>ประชาสัมพันธ์</option>
                                    <option>ดาวน์โหลด</option>
                                </select>
                            </div>
                        </div>
                        <!--จบประเภทประกาศ-->
                        <div class="form-group">
                            <label class="col-lg-3 control-label">เรื่องที่ประกาศ</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="username" />
                            </div>
                        </div>
                        <!--จบประกาศ-->
                        <div class="form-group">
                            <label class="col-lg-3 control-label">วันที่ประกาศ</label>
                            <div class="col-lg-4">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <!--<input type="text" class="form-control pull-right" name="record_datefile" id="datepicker" required>-->
                                    <input class="form-control datepicker" id="testdate1" name="testdate1" data-date-language="th-th" placeholder="กดปฏิทินเพื่อเลือกวันปีเกิด ปี(ค.ศ.)-เดือน-วัน">
                                </div>
                            </div>
                            <div class="col-lg-1 control-label">
                                <label for="exampleInputFile">เลือกไฟล์</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                        </div>

                        <!-- จบปฏิทิน -->
                        <div class="box-footer">
                            <div class="col-lg-9 col-lg-offset-6">
                                <button type="submit" class="btn btn-warning">แก้ไข</button>
                            </div>
                        </div>
                        <!-----จบส่วนปุุ่่มอัพโหลด-->
                    </form>
                </div>
                <!-- /.box-body -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">ข่าวประชาสัมพันธ์เกี่ยวกับบ้านพัก</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>หัวข้อข่าว</th>
                                <th>วันที่ประกาศ</th>
                                <th>หมายเหตุ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>ข่าว1</td>
                                <td>4 พ.ค 2561</td>
                                <td><button type="button" class="btn btn-primary btn-sm" style="width: 80px">แก้ไข</button>&nbsp;<button type="button" class="btn btn-danger btn-sm" style="width: 80px">ลบ</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ข่าว2</td>
                                <td>4 พ.ค 2561</td>
                                <td><button type="button" class="btn btn-primary btn-sm" style="width: 80px">แก้ไข</button>&nbsp;<button type="button" class="btn btn-danger btn-sm" style="width: 80px">ลบ</button></td>
                            </tr>


                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- จบส่วนประชาสัมพันธ์ -->
                3
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">เอกสารสำหรับดาวน์โหลด</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example4" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>รายการเอกสาร</th>
                                <th>วันที่ประกาศ</th>
                                <th>หมายเหตุ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>เอกสาร1</td>
                                <td>4 พค 2561</td>
                                <td><button type="button" class="btn btn-primary btn-sm" style="width: 80px">แก้ไข</button>&nbsp;<button type="button" class="btn btn-danger btn-sm" style="width: 80px">ลบ</button></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>เอกสาร2</td>
                                <td>5พค2561</td>
                                <td><button type="button" class="btn btn-primary btn-sm" style="width: 80px">แก้ไข</button>&nbsp;<button type="button" class="btn btn-danger btn-sm" style="width: 80px">ลบ</button></td>
                            </tr>


                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
        </section>
        <!-- /.box จบตารางดาวน์โหลดเอกสาร -->
        3
        <!--->
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
<script>

    $('.datepicker').datepicker({
        //language: 'th',
        format: 'dd-mm-yyyy',
        autoclose: true
    });

</script>
<script>
    $(function () {
        $('#example3').DataTable()
        $('#example4').DataTable()

    })
</script>


</body>
</html>
