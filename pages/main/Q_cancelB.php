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
                <h3 class="box-title">คิวขอบ้านพัก</h3>
            </div>
            <div class="box-body">
                <div>
                    <button type="submit" class="btn glyphicon glyphicon-print pull-right" style="font-size: large" >พิมพ์เอกสาร
                    </button>
                </div>
            </div>
                       <!-- START CUSTOM TABS -->
            <!--h2 class="page-header">AdminLTE Custom Tabs</h2-->

            <div class="row">
                <div class="box-body">
                    <div class="col-lg-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#tab_1" data-toggle="tab">กลุ่มแพทย์</a></li>
                            <li><a href="#tab_2" data-toggle="tab">กลุ่มพยาบาล</a></li>
                            <li><a href="#tab_3" data-toggle="tab">กลุ่มลูกจ้างสายพยาบาล</a></li>
                            <li><a href="#tab_4" data-toggle="tab">กลุ่มข้าราชการสหวิชาชีพ</a></li>
                            <li><a href="#tab_5" data-toggle="tab">กลุ่มลูกจ้างสหวิชาชีพ</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                            <div class="col-md-12">
                                <div>
                                    <div class="box-body">

                                        <div class="box-body">
                                            <table id="example1" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ชื่อ-สกุล</th>
                                                    <th>ตำแหน่ง</th>
                                                    <th>ประเภทบ้าน</th>
                                                    <th>วันที่ขอบ้าน</th>
                                                    <th>บันพักปัจจุบัน</th>
                                                    <th>เหตุผล</th>
                                                    <th>สมาชิก</th>
                                                    <th>กระบวนการ</th>
                                                </tr>
                                                </thead>
                                                <?php
                                                $mysql = new pdomysqlresthome();
                                                $sql = "SELECT
rb.brhome_id,
	rb.ID_Personnal,
	mpn.PreName,
	mp.NAME,
	mp.LastName,
	mp.Position,
	rf.typef_name,
	concat(mpn.PreName,mp.NAME, ' ',mp.LastName) as 'fullname',
	rb.borrow_date,
	rb.remark_br,
	rh.reghome_name,
	rb.br_status
FROM
	resthome.borrowhome rb
	JOIN mainlogin.personnal mp ON mp.ID_Personnal = rb.ID_Personnal
	JOIN mainlogin.prename mpn ON mp.ID_Prename = mpn.ID_Prename
	left join	resthome.typefamily rf on rf.typef_id = rb.typef_id
	left join resthome.resgisterhome rh on rh.reghome_id = rb.reghome_id
WHERE rb.groupJID = 1 and rb.br_status in ('3')
";
                                                $results = $mysql->selectAll($sql);

                                                foreach ($results as $value){

                                                    ?>
                                                    <tr>
                                                        <td>#</td>
                                                        <td><?= $value['fullname'] ?></td>
                                                        <td><?= $value['Position'] ?></td>
                                                        <td><?= $value['typef_name'] ?></td>
                                                        <td><?= $value['borrow_date'] ?></td>
                                                        <td><?= $value['reghome_name'] ?></td>
                                                        <td><?= $value['remark_br'] ?></td>
                                                        <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default<?=$value['brhome_id']?>">
                                                                ดูรายชื่อ
                                                            </button>
                                                            <div class="modal fade" id="modal-default<?=$value['brhome_id']?>">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span></button>
                                                                            <h4 class="modal-title">รายชื่อสมาชิกครอบครัว</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="box-body no-padding">
                                                                                <table class="table table-striped">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th style="width: 10px">#</th>
                                                                                        <th>ชื่อ-สกุล</th>
                                                                                        <th>ความสัมพันธ์</th>
                                                                                        <th>ปฏิบัติงาน</th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                    <?php
                                                                                    $i=1;
                                                                                    $ID_Personnal = $value['ID_Personnal'];
                                                                                    $sql2 = "select rm.listsequen,rm.ID_Personnal,rm.memf_name,rr.relationf_name,md.name_department from resthome.memfamily rm LEFT JOIN resthome.relationfamily rr on rm.relationf_id = rr.relationf_id LEFT JOIN mainlogin.department md on rm.id_department = md.id_department where rm.ID_Personnal = $ID_Personnal";
                                                                                    //echo $sql2;
                                                                                    $results2 = $mysql->selectAll($sql2);

                                                                                    foreach ($results2 as $value2){
                                                                                        echo '<tr>
                                                                                        <td style="width: 10px">'.$i.'</td>
                                                                                        <td>'.$value2['memf_name'].'</td>
                                                                                        <td>'.$value2['relationf_name'].'</td>
                                                                                        <td>'.$value2['name_department'].'</td>
                                                                                    </tr>';
                                                                                        $i++;
                                                                                    }

                                                                                    ?>


                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                        </td>
                                                        <td>
                                                            <div>
                                                                <button type="button" id="<?=$value['brhome_id']?>" class="btn btn-warning cancer_br">คืนสถานะ</button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                <?php
                                                }
                                                ?>


                                            </table>
                                        </div>
                                </div>
                                </div>
                            </div>
                            </div>
                         <!-- /.tab1 -->
                            <div class="tab-pane" id="tab_2">
                                <div class="col-md-12">
                                    <div>
                                        <div class="box-body">

                                            <div class="box-body">
                                                <table id="example1" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ชื่อ-สกุล</th>
                                                        <th>ตำแหน่ง</th>
                                                        <th>ประเภทบ้าน</th>
                                                        <th>วันที่ขอบ้าน</th>
                                                        <th>บันพักปัจจุบัน</th>
                                                        <th>เหตุผล</th>
                                                        <th>สมาชิก</th>
                                                        <th>กระบวนการ</th>
                                                    </tr>
                                                    </thead>
                                                    <?php
                                                    $mysql = new pdomysqlresthome();
                                                    $sql = "SELECT
rb.brhome_id,
	rb.ID_Personnal,
	mpn.PreName,
	mp.NAME,
	mp.LastName,
	mp.Position,
	rf.typef_name,
	concat(mpn.PreName,mp.NAME, ' ',mp.LastName) as 'fullname',
	rb.borrow_date,
	rb.remark_br,
	rh.reghome_name,
	rb.br_status
FROM
	resthome.borrowhome rb
	JOIN mainlogin.personnal mp ON mp.ID_Personnal = rb.ID_Personnal
	JOIN mainlogin.prename mpn ON mp.ID_Prename = mpn.ID_Prename
	left join	resthome.typefamily rf on rf.typef_id = rb.typef_id
	left join resthome.resgisterhome rh on rh.reghome_id = rb.reghome_id
WHERE rb.groupJID = 2 and rb.br_status in ('3')
";
                                                    $results = $mysql->selectAll($sql);

                                                    foreach ($results as $value){

                                                        ?>
                                                        <tr>
                                                            <td>#</td>
                                                            <td><?= $value['fullname'] ?></td>
                                                            <td><?= $value['Position'] ?></td>
                                                            <td><?= $value['typef_name'] ?></td>
                                                            <td><?= $value['borrow_date'] ?></td>
                                                            <td><?= $value['reghome_name'] ?></td>
                                                            <td><?= $value['remark_br'] ?></td>
                                                            <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default<?=$value['brhome_id']?>">
                                                                    ดูรายชื่อ
                                                                </button>
                                                                <div class="modal fade" id="modal-default<?=$value['brhome_id']?>">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span></button>
                                                                                <h4 class="modal-title">รายชื่อสมาชิกครอบครัว</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="box-body no-padding">
                                                                                    <table class="table table-striped">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th style="width: 10px">#</th>
                                                                                            <th>ชื่อ-สกุล</th>
                                                                                            <th>ความสัมพันธ์</th>
                                                                                            <th>ปฏิบัติงาน</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>

                                                                                        <?php
                                                                                        $i=1;
                                                                                        $ID_Personnal = $value['ID_Personnal'];
                                                                                        $sql2 = "select rm.listsequen,rm.ID_Personnal,rm.memf_name,rr.relationf_name,md.name_department from resthome.memfamily rm LEFT JOIN resthome.relationfamily rr on rm.relationf_id = rr.relationf_id LEFT JOIN mainlogin.department md on rm.id_department = md.id_department where rm.ID_Personnal = $ID_Personnal";
                                                                                        //echo $sql2;
                                                                                        $results2 = $mysql->selectAll($sql2);

                                                                                        foreach ($results2 as $value2){
                                                                                            echo '<tr>
                                                                                        <td style="width: 10px">'.$i.'</td>
                                                                                        <td>'.$value2['memf_name'].'</td>
                                                                                        <td>'.$value2['relationf_name'].'</td>
                                                                                        <td>'.$value2['name_department'].'</td>
                                                                                    </tr>';
                                                                                            $i++;
                                                                                        }

                                                                                        ?>


                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>

                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <button type="button" id="<?=$value['brhome_id']?>" class="btn btn-warning cancer_br">คืนสถานะ</button>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                    }
                                                    ?>


                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_3">
                                <div class="col-md-12">
                                    <div>
                                        <div class="box-body">

                                            <div class="box-body">
                                                <table id="example1" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ชื่อ-สกุล</th>
                                                        <th>ตำแหน่ง</th>
                                                        <th>ประเภทบ้าน</th>
                                                        <th>วันที่ขอบ้าน</th>
                                                        <th>บันพักปัจจุบัน</th>
                                                        <th>เหตุผล</th>
                                                        <th>สมาชิก</th>
                                                        <th>กระบวนการ</th>
                                                    </tr>
                                                    </thead>
                                                    <?php
                                                    $mysql = new pdomysqlresthome();
                                                    $sql = "SELECT
rb.brhome_id,
	rb.ID_Personnal,
	mpn.PreName,
	mp.NAME,
	mp.LastName,
	mp.Position,
	rf.typef_name,
	concat(mpn.PreName,mp.NAME, ' ',mp.LastName) as 'fullname',
	rb.borrow_date,
	rb.remark_br,
	rh.reghome_name,
	rb.br_status
FROM
	resthome.borrowhome rb
	JOIN mainlogin.personnal mp ON mp.ID_Personnal = rb.ID_Personnal
	JOIN mainlogin.prename mpn ON mp.ID_Prename = mpn.ID_Prename
	left join	resthome.typefamily rf on rf.typef_id = rb.typef_id
	left join resthome.resgisterhome rh on rh.reghome_id = rb.reghome_id
WHERE rb.groupJID = 3 and rb.br_status in ('3')
";
                                                    $results = $mysql->selectAll($sql);

                                                    foreach ($results as $value){

                                                        ?>
                                                        <tr>
                                                            <td>#</td>
                                                            <td><?= $value['fullname'] ?></td>
                                                            <td><?= $value['Position'] ?></td>
                                                            <td><?= $value['typef_name'] ?></td>
                                                            <td><?= $value['borrow_date'] ?></td>
                                                            <td><?= $value['reghome_name'] ?></td>
                                                            <td><?= $value['remark_br'] ?></td>
                                                            <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default<?=$value['brhome_id']?>">
                                                                    ดูรายชื่อ
                                                                </button>
                                                                <div class="modal fade" id="modal-default<?=$value['brhome_id']?>">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span></button>
                                                                                <h4 class="modal-title">รายชื่อสมาชิกครอบครัว</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="box-body no-padding">
                                                                                    <table class="table table-striped">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th style="width: 10px">#</th>
                                                                                            <th>ชื่อ-สกุล</th>
                                                                                            <th>ความสัมพันธ์</th>
                                                                                            <th>ปฏิบัติงาน</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>

                                                                                        <?php
                                                                                        $i=1;
                                                                                        $ID_Personnal = $value['ID_Personnal'];
                                                                                        $sql2 = "select rm.listsequen,rm.ID_Personnal,rm.memf_name,rr.relationf_name,md.name_department from resthome.memfamily rm LEFT JOIN resthome.relationfamily rr on rm.relationf_id = rr.relationf_id LEFT JOIN mainlogin.department md on rm.id_department = md.id_department where rm.ID_Personnal = $ID_Personnal";
                                                                                        //echo $sql2;
                                                                                        $results2 = $mysql->selectAll($sql2);

                                                                                        foreach ($results2 as $value2){
                                                                                            echo '<tr>
                                                                                        <td style="width: 10px">'.$i.'</td>
                                                                                        <td>'.$value2['memf_name'].'</td>
                                                                                        <td>'.$value2['relationf_name'].'</td>
                                                                                        <td>'.$value2['name_department'].'</td>
                                                                                    </tr>';
                                                                                            $i++;
                                                                                        }

                                                                                        ?>


                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>

                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <button type="button" id="<?=$value['brhome_id']?>" class="btn btn-warning cancer_br">คืนสถานะ</button>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                    }
                                                    ?>


                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_4">
                                <div class="col-md-12">
                                    <div>
                                        <div class="box-body">

                                            <div class="box-body">
                                                <table id="example1" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ชื่อ-สกุล</th>
                                                        <th>ตำแหน่ง</th>
                                                        <th>ประเภทบ้าน</th>
                                                        <th>วันที่ขอบ้าน</th>
                                                        <th>บันพักปัจจุบัน</th>
                                                        <th>เหตุผล</th>
                                                        <th>สมาชิก</th>
                                                        <th>กระบวนการ</th>
                                                    </tr>
                                                    </thead>
                                                    <?php
                                                    $mysql = new pdomysqlresthome();
                                                    $sql = "SELECT
rb.brhome_id,
	rb.ID_Personnal,
	mpn.PreName,
	mp.NAME,
	mp.LastName,
	mp.Position,
	rf.typef_name,
	concat(mpn.PreName,mp.NAME, ' ',mp.LastName) as 'fullname',
	rb.borrow_date,
	rb.remark_br,
	rh.reghome_name,
	rb.br_status
FROM
	resthome.borrowhome rb
	JOIN mainlogin.personnal mp ON mp.ID_Personnal = rb.ID_Personnal
	JOIN mainlogin.prename mpn ON mp.ID_Prename = mpn.ID_Prename
	left join	resthome.typefamily rf on rf.typef_id = rb.typef_id
	left join resthome.resgisterhome rh on rh.reghome_id = rb.reghome_id
WHERE rb.groupJID = 4 and rb.br_status in ('3')
";
                                                    $results = $mysql->selectAll($sql);

                                                    foreach ($results as $value){

                                                        ?>
                                                        <tr>
                                                            <td>#</td>
                                                            <td><?= $value['fullname'] ?></td>
                                                            <td><?= $value['Position'] ?></td>
                                                            <td><?= $value['typef_name'] ?></td>
                                                            <td><?= $value['borrow_date'] ?></td>
                                                            <td><?= $value['reghome_name'] ?></td>
                                                            <td><?= $value['remark_br'] ?></td>
                                                            <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default<?=$value['brhome_id']?>">
                                                                    ดูรายชื่อ
                                                                </button>
                                                                <div class="modal fade" id="modal-default<?=$value['brhome_id']?>">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span></button>
                                                                                <h4 class="modal-title">รายชื่อสมาชิกครอบครัว</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="box-body no-padding">
                                                                                    <table class="table table-striped">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th style="width: 10px">#</th>
                                                                                            <th>ชื่อ-สกุล</th>
                                                                                            <th>ความสัมพันธ์</th>
                                                                                            <th>ปฏิบัติงาน</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>

                                                                                        <?php
                                                                                        $i=1;
                                                                                        $ID_Personnal = $value['ID_Personnal'];
                                                                                        $sql2 = "select rm.listsequen,rm.ID_Personnal,rm.memf_name,rr.relationf_name,md.name_department from resthome.memfamily rm LEFT JOIN resthome.relationfamily rr on rm.relationf_id = rr.relationf_id LEFT JOIN mainlogin.department md on rm.id_department = md.id_department where rm.ID_Personnal = $ID_Personnal";
                                                                                        //echo $sql2;
                                                                                        $results2 = $mysql->selectAll($sql2);

                                                                                        foreach ($results2 as $value2){
                                                                                            echo '<tr>
                                                                                        <td style="width: 10px">'.$i.'</td>
                                                                                        <td>'.$value2['memf_name'].'</td>
                                                                                        <td>'.$value2['relationf_name'].'</td>
                                                                                        <td>'.$value2['name_department'].'</td>
                                                                                    </tr>';
                                                                                            $i++;
                                                                                        }

                                                                                        ?>


                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>

                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <button type="button" id="<?=$value['brhome_id']?>" class="btn btn-warning cancer_br">คืนสถานะ</button>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                    }
                                                    ?>


                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_5">
                                <div class="col-md-12">
                                    <div>
                                        <div class="box-body">

                                            <div class="box-body">
                                                <table id="example1" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ชื่อ-สกุล</th>
                                                        <th>ตำแหน่ง</th>
                                                        <th>ประเภทบ้าน</th>
                                                        <th>วันที่ขอบ้าน</th>
                                                        <th>บันพักปัจจุบัน</th>
                                                        <th>เหตุผล</th>
                                                        <th>สมาชิก</th>
                                                        <th>กระบวนการ</th>
                                                    </tr>
                                                    </thead>
                                                    <?php
                                                    $mysql = new pdomysqlresthome();
                                                    $sql = "SELECT
rb.brhome_id,
	rb.ID_Personnal,
	mpn.PreName,
	mp.NAME,
	mp.LastName,
	mp.Position,
	rf.typef_name,
	concat(mpn.PreName,mp.NAME, ' ',mp.LastName) as 'fullname',
	rb.borrow_date,
	rb.remark_br,
	rh.reghome_name,
	rb.br_status
FROM
	resthome.borrowhome rb
	JOIN mainlogin.personnal mp ON mp.ID_Personnal = rb.ID_Personnal
	JOIN mainlogin.prename mpn ON mp.ID_Prename = mpn.ID_Prename
	left join	resthome.typefamily rf on rf.typef_id = rb.typef_id
	left join resthome.resgisterhome rh on rh.reghome_id = rb.reghome_id
WHERE rb.groupJID = 5 and rb.br_status in ('3')
";
                                                    $results = $mysql->selectAll($sql);

                                                    foreach ($results as $value){

                                                        ?>
                                                        <tr>
                                                            <td>#</td>
                                                            <td><?= $value['fullname'] ?></td>
                                                            <td><?= $value['Position'] ?></td>
                                                            <td><?= $value['typef_name'] ?></td>
                                                            <td><?= $value['borrow_date'] ?></td>
                                                            <td><?= $value['reghome_name'] ?></td>
                                                            <td><?= $value['remark_br'] ?></td>
                                                            <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default<?=$value['brhome_id']?>">
                                                                    ดูรายชื่อ
                                                                </button>
                                                                <div class="modal fade" id="modal-default<?=$value['brhome_id']?>">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span></button>
                                                                                <h4 class="modal-title">รายชื่อสมาชิกครอบครัว</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="box-body no-padding">
                                                                                    <table class="table table-striped">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th style="width: 10px">#</th>
                                                                                            <th>ชื่อ-สกุล</th>
                                                                                            <th>ความสัมพันธ์</th>
                                                                                            <th>ปฏิบัติงาน</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>

                                                                                        <?php
                                                                                        $i=1;
                                                                                        $ID_Personnal = $value['ID_Personnal'];
                                                                                        $sql2 = "select rm.listsequen,rm.ID_Personnal,rm.memf_name,rr.relationf_name,md.name_department from resthome.memfamily rm LEFT JOIN resthome.relationfamily rr on rm.relationf_id = rr.relationf_id LEFT JOIN mainlogin.department md on rm.id_department = md.id_department where rm.ID_Personnal = $ID_Personnal";
                                                                                        //echo $sql2;
                                                                                        $results2 = $mysql->selectAll($sql2);

                                                                                        foreach ($results2 as $value2){
                                                                                            echo '<tr>
                                                                                        <td style="width: 10px">'.$i.'</td>
                                                                                        <td>'.$value2['memf_name'].'</td>
                                                                                        <td>'.$value2['relationf_name'].'</td>
                                                                                        <td>'.$value2['name_department'].'</td>
                                                                                    </tr>';
                                                                                            $i++;
                                                                                        }

                                                                                        ?>


                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>

                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <button type="button" id="<?=$value['brhome_id']?>" class="btn btn-warning cancer_br">คืนสถานะ</button>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                    }
                                                    ?>


                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                </div>

                <!-- /.col -->
            </div>

            <!-- /.row -->
            <!-- END CUSTOM TABS -->

            </form>
        </div>
        <!-- /.box-body -->
    </section>
</div>

<!-- จบส่วน Main content -->

<!-- /.content-wrapper -->

<script>
    $('.select2').select2();
</script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    $(document).ready(function () {
        $('#zonehome01').show();
        $('#zonehome02').hide();
        $('#country').hide();
        $('#province').select2({
            ajax: {
                url: 'get_province.php',
                dataType: 'json',
                data: function (params) {
                    if (params.term == undefined) {
                        params.term = '';
                    }
                    var query = {
                        search: params.term,
                        //type: 'public'
                        //province: $('#province').val()
                    }
                    console.log(query);
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            },
            dropdownAutoWidth: true,
            width: '100%'
        });
        $('#zone_name').change(function () {
            $('#reghome_name').removeAttr('disabled');
            $('#reghome_name')
                .find('option')
                .remove()
                .end()
                .append('<option value="">--เลือกบ้านเลขที่--</option>')
                .val('');

            //console.log($('#province').find('option:selected').text());
            //$('#province_text').val($('#province').find('option:selected').text());
            //console.log($('#province_text').val());
        });
        $('#reghome_name').select2({
            ajax: {
                url: 'get_reghome_name.php',
                dataType: 'json',
                data: function (params) {
                    if (params.term == undefined) {
                        params.term = '';
                    }
                    var query = {
                        search: params.term,
                        type: 'public',
                        zone: $('#zone_name').val()
                    }
                    console.log(query);
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
        $('#amphur').select2({
            ajax: {
                url: 'get_amphur.php',
                dataType: 'json',
                data: function (params) {
                    if (params.term == undefined) {
                        params.term = '';
                    }
                    var query = {
                        search: params.term,
                        type: 'public',
                        province: $('#province').val()
                    }
                    console.log(query);
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            },
            dropdownAutoWidth: true,
            width: '100%'
        });
        $('#tambon').select2({

            ajax: {
                url: 'get_tambon.php',
                dataType: 'json',
                data: function (params) {
                    if (params.term == undefined) {
                        params.term = '';
                    }
                    var query = {
                        search: params.term,
                        type: 'public',
                        amphur: $('#amphur').val()
                    }
                    console.log(query);
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            },
            dropdownAutoWidth: true,
            width: '100%'
        });
        $('#province').change(function () {
            $('#amphur').removeAttr('disabled');
            $('#amphur')
                .find('option')
                .remove()
                .end()
                .append('<option value="">--เลือกอำเภอ--</option>')
                .val('');

            //console.log($('#province').find('option:selected').text());
            $('#province_text').val($('#province').find('option:selected').text());
            //console.log($('#province_text').val());
        });
        $('#amphur').change(function () {
            $('#tambon').removeAttr('disabled');

            $('#tambon')
                .find('option')
                .remove()
                .end()
                .append('<option value="">--เลือกตำบล--</option>')
                .val('');
            $('#amphur_text').val($('#amphur').find('option:selected').text());
        });
        $('#tambon').change(function () {
            $('#tambon_text').val($('#tambon').find('option:selected').text());
        });

        $('#type01').on('click', function () {
            $('#zonehome01').show();

            $('#country').hide();
            $('#zonehome02').hide();
        });
        $('#type02').on('click', function () {
            $('#zonehome01').hide();
            $('#zonehome02').show();
            $('#country').show();
        })
        $('.receipt_br').on('click',function () {
            //alert(this.id);
            $.ajax({
                url:'update_br.php',
                method:'POST',
                data:{id:this.id,action:1},
                success:function (data) {
                    console.log(data);
                    if(data == 1){
                        toastr.success('รับเอกสารเรียบร้อยแล้วค่ะ');
                        setInterval(function(){ location.reload(); }, 2000);

                    }else{
                        toastr.success('รับเอกสารมีปัญหาติดต่อผู้พัฒนาระบบค่ะ');
                    }
                }
            })
        });
        $('.approve_br').on('click',function () {
            //alert(this.id);
            $.ajax({
                url:'update_br.php',
                method:'POST',
                data:{id:this.id,action:2},
                success:function (data) {
                    console.log(data);
                    if(data == 1){
                        toastr.success('อนุมัติเอกสารเรียบร้อยแล้วค่ะ');
                        setInterval(function(){ location.reload(); }, 2000);

                    }else{
                        toastr.success('อนุมัติเอกสารมีปัญหาติดต่อผู้พัฒนาระบบค่ะ');
                    }
                }
            })
        });
        $('.cancer_br').on('click',function () {
            //alert(this.id);
            $.ajax({
                url:'update_br.php',
                method:'POST',
                data:{id:this.id,action:0},
                success:function (data) {
                    console.log(data);
                    if(data == 1){
                        toastr.success('คืนสถานะเรียบร้อยแล้วค่ะ');
                        setInterval(function(){ location.reload(); }, 2000);

                    }else{
                        toastr.success('คืนสถานะมีปัญหาติดต่อผู้พัฒนาระบบค่ะ');
                    }
                }
            })
        });


    });
</script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable()
        $('#example3').DataTable()
        $('#example4').DataTable()
        $('#example5').DataTable()

    })
</script>
<?php include('../../menu/footer.php'); ?>

