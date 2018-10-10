<?php include('../../menu/header.php'); ?>


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
                    <h3 class="box-title">อัพโหลดเอกสาร</h3>
                </div>

                <form id="defaultForm" method="post" class="form-horizontal" action="saveforminfo.php"
                      enctype="multipart/form-data">
                    <input type="hidden" name="type" value="uploadfile">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">ประเภทการอัพโหลด</label>
                        <div class="col-lg-4">
                            <select class="form-control" name="typefile">
                                <option value="1">ประชาสัมพันธ์</option>
                                <option value="2">ดาวน์โหลด</option>
                            </select>
                        </div>
                    </div>
                    <!--จบประเภทประกาศ-->
                    <div class="form-group">
                        <label class="col-lg-3 control-label">เรื่องที่ประกาศ</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="ufile_name"/>
                        </div>
                    </div>
                    <!--จบประกาศ-->
                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-3">
                            <label for="exampleInputFile">เลือกไฟล์</label>
                            <input type="file" id="exampleInputFile" name="recordfile">
                        </div>
                    </div>

                    <!-- จบปฏิทิน -->
                    <div class="box-footer">
                        <div class="col-lg-9 col-lg-offset-6">
                            <button type="submit" class="btn btn-warning">อัพโหลด</button>
                        </div>
                    </div>
                    <!-----จบส่วนปุุ่่มอัพโหลด-->
                </form>
            </div>
            <div class="box-body no-padding">
                <div class="box">
                    <div class="box-body">
                        <div class="box-header">
                            <h3 class="box-title">ข่าวประชาสัมพันธ์เกี่ยวกับบ้านพัก</h3>
                        </div>
                        <?php
                        // echo $classlouis->uploadfile(1);?>

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
    </div>
</div>

<?php include('../../menu/footer.php'); ?>
