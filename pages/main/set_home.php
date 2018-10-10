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
    <section class="content">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">จัดการเกี่ยวกับบ้าน</h3>
                </div>
                <div class="box-header with-border">
                        <a class="btn btn-info">จัดการโซนบ้าน</a>
                        <a href="set_home2.php" class="btn btn-success">จัดการทะเบียนบ้าน</a>
                        <a href="set_home3.php" class="btn btn-primary">เหตุผลคืนบ้าน</a>
                    </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">โซน</label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" id="zone_name" name="zone_name" placeholder="ชื่อโซน">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">สถานะ</label>

                            <div class="col-sm-4">
                                <select class="form-control select2" id="isActive" name="isActive" style="width: 100%;">
                                    <option selected="selected" value="1">เปิดใช้งาน</option>
                                    <option value="0">ไม่เปิดใช้งาน</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="center-block">
                            <button type="button" name="action" id="action" value="insert" class="btn btn-info  btn-flat col-md-2 col-md-offset-4">
                                <i class="fa fa-plus"></i> เพิ่มโซนบ้านพัก
                            </button>
                            <button type="button" name="clear" id="clear" class="btn btn-warning btn-flat col-md-2">
                                เคลียร์ข้อมูล
                            </button>
                        </div>

                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">รายชื่อโซนบ้านพัก</h3>
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>โซนบ้าน</th>
                            <th>สถานะ</th>
                            <th>แก้ไข</th>
                        </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>

        <!--        modal แก้ไขประเภทครอบครัว-->
        <div class="col-md-12">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-aqua">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">แก้ไขโซนบ้านพัก</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">โซน</label>

                                        <div class="col-md-4">
                                            <input type="hidden" id="zone_id" name="zone_id" value="">
                                            <input type="text" class="form-control" id="zone_name1" name="zone_name" placeholder="ชื่อโซน">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">สถานะ</label>

                                        <div class="col-sm-4">
                                            <select class="form-control select2" id="isActive1" name="isActive" style="width: 100%;">
                                                <option selected="selected" value="1">เปิดใช้งาน</option>
                                                <option value="0">ไม่เปิดใช้งาน</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                            <button type="button" id="updatedata" class="btn btn-primary">แก้ไข</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </div>

    </section>

</div>


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

        //console.log('ready');
        $('#action').on('click', function () {
            if ($('#zone_name').val() == '') {
                //alert('กรุณาระบุโซนบ้านพักด้วยค่ะ');
                toastr.warning('กรุณาระบุโซนบ้านพักด้วยค่ะ');
            } else {
                //alert('dd');
                $.ajax({
                    url:'ins_zone.php',
                    data:{zone_name:$('#zone_name').val(),isActive:$('#isActive').val()},
                    method:'POST',
                    success:function (data) {
                        console.log(data);
                        if(data == '1'){
                            toastr.success('เพิ่มข้อมูลเรียบร้อยแล้วค่ะ');
                            cleardata();
                            table.ajax.reload();
                        }else{
                            toastr.success('ไม่สามารถเพิ่มข้อมูลได้ค่ะ');
                            cleardata();
                        }
                    }
                });


            }

        });
        var table = $('#example2').DataTable({
            'ajax': 'get_testzone.php',
            'columns': [
                {'data': 'zone_id'},
                {'data': 'zone_name'},
                {'data': 'isActive'},
                {'data': 'button'}
            ]
        });
        // var dataTable = $('#example2').DataTable({
        //    "processing" : true,
        //    "serverSide" : true,
        //    "order" : [],
        //    "ajax" : {
        //        url : "get_typefamily.php",
        //        type : "POST"
        //    },
        //     "columnDefs" : [
        //         {
        //             "targets" : [0,3],
        //             "orderable" : false,
        //         }
        //     ],
        // });
        function cleardata() {
            $('#zone_name').val('');
            $('#isActive').val('1');
        }

        $(document).on('click', '.update', function () {
            //alert(this.id);
            $.ajax({
                url:'get_id_zone.php',
                method:'POST',
                data:{id:this.id},
                datatype:'JSON',
                success:function (data) {
                    // console.log(data.typef_name);
                    $('#zone_name1').val(data.zone_name);
                    $('#isActive1').val(data.isActive);
                    $('#zone_id').val(data.zone_id);
                }
            })
            $('#myModal').modal('show');

        });
        $(document).on('click','#updatedata',function () {
            $.ajax({
                url:'update_zone.php',
                method:'POST',
                data:{id:$('#zone_id').val(),zone_name:$('#zone_name1').val(),isActive:$('#isActive1').val()},
                datatype:'JSON',
                success:function (data) {
                    // console.log(data.typef_name);
                    // console.log(data);
                    toastr.success('แก้ไขข้อมูลเรียบร้อยแล้วค่ะ');
                    //cleardata();
                    table.ajax.reload();
                }
            })
            $('#myModal').modal('hide');
        });
        $(document).on('click','#clear',function () {
            cleardata();
        });
        // $(document).on('click','#action',function () {
        //    alert($('#action').val());
        // });
        function clearData() {
            $('#zone_name').val('');
            $('#isActive').val('1');
        }
    });


</script>
<?php include('../../menu/footer.php'); ?>

