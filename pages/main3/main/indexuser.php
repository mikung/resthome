<?php include('../../menu/header.php'); ?>


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
                        <h3 class="box-title">ข้อมูลการขอและคืนบ้านพัก</h3>
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
                                <th>วันที่คืนบ้าน</th>
                                <th>สถานะ</th>
                                <th>หมายเหตุ</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>นงค์เยาว์ แหงมมา</td>
                                <td>คอมพิวเตอร์</td>
                                <td>7 พค 2561</td>
                                <td>ครอบครัว</td>
                                <td></td>
                                <td>
                                    <button type="button" class="btn btn-block btn-warning btn-sm" style="width: 100px">
                                        รอรับเอกสาร
                                    </button>
                                    <font color="red">**เอกสารอยู่ระหว่างนำเสนอผู้บังคับบัญชา</font></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>แก้ไข
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-close"></i>ยกเลิก
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>นงค์เยาว์ แหงมมา</td>
                                <td>คอมพิวเตอร์</td>
                                <td>4 พค 2561</td>
                                <td>ครอบครัว</td>
                                <td></td>
                                <td>
                                    <button type="button" class="btn btn-block btn-info btn-sm" style="width: 100px">
                                        ตรวจสอบเอกสาร
                                    </button>
                                    <font color="orange">**รอเข้าที่ประชุมพิจารณาการเข้าพักอาศัย</font></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>แก้ไข
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm disabled"><i
                                                class="fa fa-close"></i>ยกเลิก
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>นงค์เยาว์ แหงมมา</td>
                                <td>คอมพิวเตอร์</td>
                                <td>3 พค 2561</td>
                                <td>โสด</td>
                                <td></td>
                                <td colspan="2">
                                    <button type="button" class="btn btn-success btn-sm" style="width: 100px">อนุมัติ
                                    </button>
                                    <button type="button" class="btn  btn-default btn-sm" style="width: 100px">
                                        กรุณาพิมพ์เอกสาร
                                    </button>
                                    <br>
                                    <font color="green">**ได้รับอนุมัติให้เข้าที่พักอาศัย</font></br></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>นงค์เยาว์ แหงมมา</td>
                                <td>คอมพิวเตอร์</td>
                                <td>3 พค 2561</td>
                                <td>โสด</td>
                                <td>7 พค 2561</td>
                                <td colspan="2">
                                    <button type="button" class="btn btn-warning btn-sm" style="width: 100px">
                                        รออนุมัติ
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>นงค์เยาว์ แหงมมา</td>
                                <td>คอมพิวเตอร์</td>
                                <td>3 พค 2561</td>
                                <td>โสด</td>
                                <td>7 พค 2561</td>
                                <td colspan="2">
                                    <button type="button" class="btn btn-success btn-sm" style="width: 100px">
                                        อนุมัติเรียบร้อย
                                    </button>
                                </td>
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

        <!----จบส่วนข้อมูลUser-->

        <div class="box-body no-padding">
            <div class="box">
                <div class="box-body">
                    <div class="box-header">
                        <h3 class="box-title">ข่าวประชาสัมพันธ์เกี่ยวกับบ้านพัก</h3>
                    </div>
                    <?php
                    //echo $classlouis ->uploadfile(1);?>
                </div>
            </div>
        </div>
        <!-- จบส่วนประชาสัมพันธ์ -->
        <div class="box-body no-padding">
            <div class="box">
                <div class="box-body">
                    <div class="box-header">
                        <h3 class="box-title">เอกสารสำหรับดาวน์โหลด</h3>
                    </div>
                    <?php
                    //echo $classlouis ->uploadfile(2);
                    ?>
                </div>
                <!--จบตารางดาวน์โหลดเอกสาร -->
            </div>
        </div>
    </section>
</div>

<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable()

    })
</script>
<!-- /.content-wrapper -->
<?php include('../../menu/footer.php'); ?>
