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
                    <h3 class="box-title">จัดการเกี่ยวกับบ้าน</h3>

                </div>
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <a href="set_home.php" class="btn btn-info">จัดการโซนบ้าน</a>
                        <a class="btn btn-success">จัดการทะเบียนบ้าน</a>
                        <a href="set_home3.php" class="btn btn-primary">เหตุผลคืนบ้าน</a>
                    </div>
                </div>
                <!-- ส่วนฟอร์มอัพโหลด -->
                <form id="defaultForm select2" method="post" class="form-horizontal" action="saveforminfo.php" enctype="multipart/form-data">
                    <?php
                    if(isset($_GET["type"])) {
                        ?>
                        <input type="hidden" name="type" value="editsethome2">
                        <?php
                    }else{
                        ?>
                        <input type="hidden" name="type" value="sethome2">
                        <?php
                    }
                    ?>
                    <!--input type="hidden" name="type" value="sethome2"-->

                    <div class="form-group">
                        <label class="col-lg-3 control-label">โซน</label>
                        <div class="col-lg-4">
                            <?php
                            //echo $classTM->perName();

                            if(isset($_GET["type"])) {
                                // echo "if1" . $type;
                                if ($_GET["type"] == "edit") {
                                    //echo "if2";
                                    $result = $_GET["no"];
                                    $z = $_GET["z"];
                                    echo $classlouis ->ZoneHomeIDd($result,$z);
                                }
                            }
                            else
                            {
                                //echo "else";
                                $result = 1;
                                echo $classlouis ->ZoneHome();
                            }

                            ?>
                            <!--input type="text" class="form-control" name="zone_name" /-->

                        </div>
                    </div>
                    <!--จบzoneZoneHomeID-->
                    <div class="form-group">
                        <label class="col-lg-3 control-label">เลขที่บ้าน</label>
                        <div class="col-lg-4">
                            <?php
                            //echo $classTM->perName();

                            if(isset($_GET["type"])) {
                                // echo "if1" . $type;
                                if ($_GET["type"] == "edit") {
                                    //echo "if2";
                                    $result = $_GET["no"];
                                    echo $classlouis ->RegHomeID($result);
                                }
                            }
                            else
                            {

                                $result = 1;
                                echo '<input type="text" class="form-control" name="zone_name" />';
                            }

                            ?>



                            <!--input type="text" class="form-control" name="zone_name" /-->

                        </div>
                    </div>
                    <!--จบ zone_name zonehome-->

                    <!--จบ reghome_name RegHomeID-->
                    <div class="form-group">
                        <label for="isActive" class="col-lg-3 control-label">สถานะ</label>
                        <div class="col-lg-4">
                            <select name="isActive" id="" class="js-data-ajax form-control" required>
                                <option value="1"  >เปิดใช้งาน</option>
                                <option value="0" >ไม่เปิดใช้งาน</option>
                            </select>
                        </div>
                    </div>
                    <!--จบ isActive-->
                    <div class="box-footer">
                        <div class="col-lg-9 col-lg-offset-6">
                            <?php

                            if(isset($_GET["type"])) {

                                if ($_GET["type"] == "edit") {

                                    echo '<button type = "submit" class="btn btn-warning" ><i class="fa fa-plus" ></i > บันทึก </button >';
                                }
                            }else{
                                echo '<button type = "submit" class="btn btn-warning" ><i class="fa fa-plus" ></i > เพิ่มเลขที่บ้าน </button >';
                            }
                            ?>
                            <!--button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> เพิ่มเลขที่บ้าน</button-->
                        </div>
                    </div>
                    <!-----จบส่วนปุุ่่มอัพโหลด-->
                    </form>
                <div class="box-body no-padding">
                    <div class="box">
                        <div class="box-body">
                         <div class="box-header">

                            </div>
                            <?php
                            echo $classlouis ->showregistHome(2);
                            ?>

                        </div>
                    </div>
                </div>

                <!-- จบส่วนจัดการ -->



            </div>
            </div>
        </section>

<!-- จบส่วน Main content -->
    </div>

<?php include('../../menu/footer.php'); ?>
            </div>
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
        $('#example1').DataTable()

    })
</script>


</body>
</html>
