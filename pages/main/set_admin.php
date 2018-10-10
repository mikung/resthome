<?php
session_start();
//error_reporting( error_reporting() & ~E_NOTICE );

include('../../lip/tmclass.php');
include('../../lip/dblogin.php');

$classTM = new TMDRUPAL;
extract($_GET);
extract($_POST);
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
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">เพิ่มผู้ใช้งานระบบ</h3>
                                </div>

                                <form id="defaultForm select2" method="post" class="form-horizontal" action="saveforminfo.php" enctype="multipart/form-data">
                                    <?php
                                    if(isset($_GET["type"])) {
                                        ?>
                                        <input type="hidden" name="type" value="editadmin">
                                    <?php
                                    }else{
                                      ?>
                                        <input type="hidden" name="type" value="useradmin">
                                <?php
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">ชื่อ-สกุล</label>
                                        <div class="col-lg-4">
                                            <?php
                                            //echo $classTM->perName();

                                           if(isset($_GET["type"])) {
                                               // echo "if1" . $type;
                                               if ($_GET["type"] == "edit") {
                                                   //echo "if2";
                                                   $result = $_GET["no"];
                                                   echo $classTM->perNameID($result);
                                               }
                                           }
                                                else
                                                {
                                                    //echo "else";
                                                    $result = 1;
                                                    echo $classTM->perName();
                                                }

                                            ?>
                                        </div>
                                    </div>
                                    <!--จบ-->
                                    <div class="form-group">
                                        <label for="isActive" class="col-lg-3 control-label">สถานะ</label>
                                        <div class="col-lg-4">
                                            <select name="isActive" id="" class="js-data-ajax form-control" required>
                                                <option value="0"  >ไม่ให้ใช้งาน</option>
                                                <option value="1" >admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--จบ-->
                                    <div class="box-footer">
                                        <div class="col-lg-9 col-lg-offset-6">
                                            <?php
                                            //echo '<button type = "submit" class="btn btn-warning" ><i class="fa fa-plus" ></i > เพิ่ม userAdmin </button >';
                                            if(isset($_GET["type"])) {

                                                if ($_GET["type"] == "edit") {

                                                    echo '<button type = "submit" class="btn btn-warning" ><i class="fa fa-plus" ></i > บันทึก </button >';
                                                }
                                            }else{
                                                echo '<button type = "submit" class="btn btn-warning" ><i class="fa fa-plus" ></i > เพิ่ม userAdmin </button >';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!-----จบส่วนปุุ่่มอัพโหลด-->
                                    <div class="box-body no-padding">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="box-header">

                                                </div>
                                                <?php
                                                echo $classlouis ->showAdmin(1);?>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- จบส่วนตาราง -->

                                    <tfooter>

                                    </tfooter>
                                    </table>
                            </div>

    </div>
</div>

</div>
</section>

</div>
</div>
<?php include('../../menu/mainscript.php'); ?>
<script>
    $('.select2').select2();
</script>
<script>
    $(function () {
        $('#example2').DataTable()

    })
</script>
<?php include('../../menu/footer.php'); ?>

</div>
<!-- ./wrapper -->


</body>
</html>
