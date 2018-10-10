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
                <h3 class="box-title">เลขที่บ้านที่ว่าง</h3>
            </div>
            <form id="defaultForm" method="post" class="form-horizontal" action="regishome.php">
                                               <div class="form-group" id="zonehome01">
                    <label class="col-lg-3 control-label">โซนบ้าน</label>
                    <div class="col-lg-3">
                        <select class="form-control select2" id="zone_name" name="zone_name" required>
                            <option value="">เลือกโซนบ้านพัก</option>
                            <?php
                            //echo $classlouis ->ZoneHome();
                            $mysql = new pdomysqlresthome();
                            $sql = "SELECT zone_id,zone_name FROM zonehome WHERE `isActive` = '1';";
                            $results = $mysql->selectAll($sql);

                            foreach ($results as $value) {
                                echo "<option value=" . $value['zone_id'] . " >" . $value['zone_name'] . "</option>";
                            }
                            ?>
                        </select>
                        <!--input type="text" class="form-control" name="home_no" /-->
                    </div>
                    <label class="col-lg-1 control-label">บ้านเลขที่</label>
                    <div class="col-lg-3">
                        <select class="form-control select2" name="reghome_name" id="reghome_name" required disabled>
                            <option value="">เลือกบ้านเลขที่</option>
                        </select>
                    </div>
                </div>
                <!--จบฟอร์มzoneบ้าน-->



                <div class="box-footer">
                    <div class="col-lg-9 col-lg-offset-6">
                        <button type="button" id="insertdata" class="btn btn-success">ตกลง
                        </button>
                    </div>
                </div>
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
        $('#showfamily').hide();
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
        });
        $('#insertdata').on('click',function () {
            console.log($('#defaultForm').serialize());
            $.ajax({
                url: 'ins_formborrow.php',
                type: 'POST',
                data: $('#defaultForm').serialize(),
                success: function (data) {
                    console.log(data)
                    if(data){
                        toastr.success('บันทึกข้อมูลเรียบร้อยค่ะ');
                        setInterval(function (){ $(location).attr('href','regishome.php'); },2000);
                    }else{
                        toastr.warning('ไม่สามารถบันทึกข้อมูลได้');
                        setInterval(function (){ $(location).attr('href','regishome.php'); },2000);
                    }
                }
            });
        });
        $('#family1').on('click',function () {
            $('#showfamily').hide();
        });
        $('#family2').on('click',function () {
            $('#showfamily').show();
            fetchFamily();
        });


    });
</script>
<?php include('../../menu/footer.php'); ?>

