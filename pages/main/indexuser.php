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
       <!--div class="row">
           <div class="col-md-12">
               <div class="box ">

                   <div class="box-header with-border">
                       <h3 class="box-title">ข้อมูลการขอและคืนบ้านพัก</h3>
                   </div>
                   <!-- /.box-header -->
                   <!--div class="box-body no-padding">
                      <div class="col-md-12">
                          <table class="table table-striped">

                              <tr>
                                  <th style="width: 10px">#</th>
                                  <th>ชื่อ-สกุล</th>
                                  <th>หน่วยงาน</th>
                                  <th>วันที่ขอบ้าน</th>
                                  <th>ประเภทบ้าน</th>
                                  <th>วันที่คืนบ้าน</th>
                                  <th>สถานะ</th>

                              </tr>
                              <!--tr>
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
                                  <td>1.</td>
                                  <td>นงค์เยาว์ แหงมมา</td>
                                  <td>คอมพิวเตอร์</td>
                                  <td>3 พค 2561</td>
                                  <td>โสด</td>
                                  <td>7 พค 2561</td>
                                  <td colspan="2">
                                      <button type="button" class="btn btn-warning" style="width: 120px">
                                          รออนุมัติคืนบ้าน
                                      </button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>1.</td>
                                  <td>นงค์เยาว์ แหงมมา</td>
                                  <td>คอมพิวเตอร์</td>
                                  <td>3 พค 2561</td>
                                  <td>โสด</td>
                                  <td>7 พค 2561</td>
                                  <td colspan="2">
                                      <button type="button" class="btn btn-success" style="width: 110px">
                                          อนุมัติเรียบร้อย
                                      </button>
                                  </td>
                              </tr>

                          </table>
                      </div>
                   </div>
                   <!-- /.box-body -->
               <!--/div>
               <!-- /.box -->
           <!--/div-->


       <!--/div-->
        <div class="row">
            <div class="col-md-12">
                <div class="box ">

                    <div class="box-header with-border">
                        <h3 class="box-title">ข้อมูลการขอบ้านพัก</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="col-md-12">
                            <table class="table table-striped">

                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>ชื่อ-สกุล</th>
                                    <th>หน่วยงาน</th>
                                    <th>วันที่ขอบ้าน</th>
                                    <th>ประเภทบ้าน</th>
                                    <th>สถานะ</th>
                                    <th>กระบวนการ</th>
                                </tr>
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
WHERE rb.ID_Personnal = '".$_SESSION['pid']."'";
                                $query = $mysql->selectAll($sql);
                                $i = 1;
                                //echo $sql;
                                foreach ($query as $item) {
                                    echo '
                                    <tr>
                                    <td>'.$i.'</td>
                                    <td>'.$item['fullname'].'</td>
                                    <td>'.$item['Position'].'</td>
                                    <td>'.$item['borrow_date'].'</td>
                                    <td>'.$item['typef_name'].'</td>
                                    ';
                                    if($item['br_status'] == 0){
                                        echo '
                                    <td>  
                                    <div class="bg-red color-palette"><span>รอรับเอกสาร</span></div>                           
                                        <!--button type="button" class="btn btn-block btn-warning btn-sm" style="width: 100px">
                                            รอรับเอกสาร
                                        </button-->
                                        <font color="red">**เอกสารอยู่ระหว่างนำเสนอผู้บังคับบัญชา</font></td>
                                    <td>
                                    ';
                                    }
                                    if($item['br_status'] == 1){
                                        echo '
                                    <td>
                                    <div class="bg-yellow color-palette"><span>ตรวจสอบเอกสาร</span></div>
                                        <!--button type="button" class="btn btn-block btn-info btn-sm" style="width: 100px">
                                            ตรวจสอบเอกสาร
                                        </button-->
                                        <font color="orange">**รอเข้าที่ประชุมพิจารณาการเข้าพักอาศัย</font></td>
                                    <td>
                                    ';
                                    }
                                    if($item['br_status'] == 2){
                                        echo '
                                    <td>
                                    <div class="bg-green color-palette"><span>อนุมัติเอกสาร</span></div>
                                        <!--button type="button" class="btn btn-block btn-info btn-sm" style="width: 100px">
                                            ตรวจสอบเอกสาร
                                        </button-->
                                        <font color="green">**ได้รับอนุมัติให้เข้าที่พักอาศัย</font></td>
                                    <td>
                                    ';
                                    }
                                    if($item['br_status'] == 3){
                                        echo '
                                    <td colspan="2">
                                     <div class="bg-green color-palette"><span>อนุมัติ</span></div>
                                        <!--button type="button" class="btn btn-success btn-sm" style="width: 100px">อนุมัติ
                                        </button-->
                                        <button type="button" class="btn  btn-default" style="width: 100px">
                                            กรุณาพิมพ์เอกสาร
                                        </button>
                                        <br>
                                        <font color="green">**ได้รับอนุมัติให้เข้าที่พักอาศัย</font></br>
                                    </td>
                                    <td>
                                    ';
                                    }

                                    echo '
                                            
                                                <button type="button" id="editdata" class="btn btn-primary"><i class="fa fa-edit"></i>แก้ไข
                                                </button>
                                                <button type="button" id="editdata" class="btn btn-danger"><i class="fa fa-remove"></i>ยกเลิก
                                                </button>
                                     </td>
                                                                     
                                </tr>
                                    ';
                                    $i++;
                                }
                                ?>


                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>


        </div>


        <div class="row">

            <div class="col-md-12 showdata">

            </div>
        </div>

    </section>
</div>

<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable()

    })
    function fetchData() {
        $.ajax({
            url:'get_downloadfile.php',
            success:function (res) {
                $('.showdata').html(res);
                var ti = $('#table_info').DataTable();
                var td = $('#table_download').DataTable();
                ti.on('order.dt search.dt',function(){
                    ti.column(0,{search:'applied',order:'applied'}).nodes().each(function(cell,i){
                        cell.innerHTML = i+1;
                    });
                }).draw();
                td.on('order.dt search.dt',function(){
                    td.column(0,{search:'applied',order:'applied'}).nodes().each(function(cell,i){
                        cell.innerHTML = i+1;
                    });
                }).draw();
            }
        })

    }
    $(document).ready(function () {
        fetchData();
    })
</script>
<!-- /.content-wrapper -->
<?php include('../../menu/footer.php'); ?>
