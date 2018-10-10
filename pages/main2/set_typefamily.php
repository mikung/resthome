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
                    <h3 class="box-title">จัดการเกี่ยวกับประเภทครอบครัว</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">ประเภท</label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" id="typef_name" placeholder="ประเภท">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">สถานะ</label>

                            <div class="col-sm-4">
                                <select class="form-control select2" id="isActive" style="width: 100%;">
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
                                <i class="fa fa-plus"></i> เพิ่มประเภทครอบครัว
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
                    <h3 class="box-title">ประเภทครอบครัว</h3>
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ประเภทครอบครัว</th>
                            <th>สถานะ</th>
                            <th>แก้ไข</th>
                        </tr>
                        </thead>

                    </table>
                </div>
            </div>
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
        console.log('ready');
        $('#action').on('click', function () {
            if ($('#typef_name').val() == '') {
                //alert('กรุณาระบุประเภทครอบครัวด้วยค่ะ');
                toastr.warning('กรุณาระบุประเภทครอบครัวด้วยค่ะ');
            } else {
                alert('dd');
                cleardata();
                table.ajax.reload();

            }

        });
        var table = $('#example2').DataTable({
            'ajax': 'get_test.php',
            'columns': [
                {'data': 'typef_id'},
                {'data': 'typef_name'},
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
            $('#typef_name').val('');
            $('#isActive').val('1');
        }

        $(document).on('click', '.update', function () {
            var id = $(this).attr('id');
            $('#action').replaceWith("<button type=\"button\" name=\"action\" value='edit' id=\"action\" class=\"btn btn-info  btn-flat col-md-2 col-md-offset-4\">\n" +
                "                                <i class=\"fa fa-pencil\"></i> แก้ไขประเภทครอบครัว\n" +
                "                            </button>");
            // $.ajax({
            //    url: "fetch_typef.php",
            //    method:"POST",
            //    data:{id:id},
            //    success:function (data) {
            //        $('#action').text("Edit");
            //    }
            // });

        });
        $(document).on('click','#clear',function () {
           cleardata();
        });
        $(document).on('click','#action',function () {
           alert($('#action').val());
        });
        function clearData() {
            $('#typef_name').val('');
            $('#isActive').val('1');
        }
    });


</script>
<?php include('../../menu/footer.php'); ?>

