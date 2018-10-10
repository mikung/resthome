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
                <h3 class="box-title">แบบฟอร์มขอบ้านพัก</h3>
            </div>
            <form id="defaultForm" method="post" class="form-horizontal" action="ins_formborrow.php" enctype="multipart/form-data" onSubmit="JavaScript:return fncSubmit();">
                <div class="form-group">
                    <label class="col-lg-3 control-label">ชื่อ-สกุล</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="ID_Personnal"
                               value="<?php echo $_SESSION['nameFull'] ?>" disabled/>
                    </div>
                </div>
                <!--จบฟอร์มชื่อสกุล-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">หน่วยงาน</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="department"
                               value="<?php echo $_SESSION['depart'] ?>" disabled/>
                    </div>
                </div>
                <!--จบฟอร์มหน่วยงาน-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">ตำแหน่ง</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="position"
                               value="<?php echo $_SESSION['position']; ?>" disabled/>
                    </div>
                </div>
                <!--จบฟอร์มตำแหน่ง-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">สายตำแหน่ง</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="servname"
                               value="<?php echo $_SESSION['servname']; ?>" disabled/>
                    </div>
                </div>
                <!--จบฟอร์มสายตำแหน่ง-->

                <div class="form-group">
                    <label class="col-lg-3 control-label">ระดับปฏิบัติงาน</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="position" value="<?php
                        $classTM->degreeName($_SESSION['delv']);
                        ?>" disabled/>
                    </div>
                </div>
                <!--จบฟอร์มระดับปฏิบัติงาน-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">กลุ่มวิชาชีพ</label>
                    <div class="col-lg-4">
                        <select class="form-control select2" id="groupJName" name="groupJName" required>
                            <option value="0">เลือกกลุ่มวิชาชีพ</option>
                            <?php
                            //echo $classlouis ->ZoneHome();
                            $mysql = new pdomysqlresthome();
                            $sql = "SELECT groupJID,groupJName FROM groupjob WHERE `isActive` = '1';";
                            $results = $mysql->selectAll($sql);

                            foreach ($results as $value) {
                                echo "<option value=" . $value['groupJID'] . " >" . $value['groupJName'] . "</option>";
                            }
                            ?>
                        </select>

                    </div>
                </div>
                    <!--จบฟอร์มกลุ่มอาชีพ-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">เงินเดือน</label>
                    <div class="col-lg-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="salary">
                            <span class="input-group-addon"><label>บาท</label></span></div>
                    </div>
                </div>
                <!--จบฟอร์มเงินเดือน-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">วันเดือนปีเกิด</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="birthday" value="<?php echo $_SESSION['age'] ?>"
                               disabled/>
                    </div>
                </div>
                <!--จบฟอร์มวดป.เกิด-->

                <div class="form-group">
                    <label class="col-lg-3 control-label">ที่อยู่ปัจจุบัน</label>
                    <div class="col-lg-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="typehome" id="type01" value="0" checked>
                                พักอาศัยภายในโรงพยาบาล</label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="typehome" id="type02" value="1">
                                พักอาศัยภายนอกโรงพยาบาล
                            </label>
                        </div>
                    </div>
                </div>
                <!--จบฟอร์มที่อยู่ปัจจุบัน-->
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
                <div class="form-group" id="zonehome02">
                    <label class="col-lg-3 control-label">บ้านเลขที่</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="home_no"/>
                    </div>
                </div>
                <!--จบฟอร์มบ้านเลขที่-->
                <div class="form-group col-md-12 " id="country">
                    <label class="col-lg-3 control-label">จังหวัด</label>
                    <div class="col-lg-2">
                        <select name="province" id="province" class="form-control">
                            <option value="">--เลือกจังหวัด--</option>
                        </select>
                        <input type="hidden" name="province_text" id="province_text">
                    </div>
                    <label class="col-lg-1 control-label">อำเภอ</label>
                    <div class="col-lg-2">
                        <select name="amphur" id="amphur" class="form-control" disabled>
                            <option value="">--เลือกอำเภอ--</option>
                        </select>
                        <input type="hidden" name="amphur_text" id="amphur_text" value="">
                    </div>
                    <label class="col-lg-1">ตำบล</label>
                    <div class="col-lg-2">
                        <select name="tambon" id="tambon" class="form-control" disabled>
                            <option value="">--เลือกตำบล--</option>
                        </select>
                        <input type="hidden" name="tambon_text" id="tambon_text" value="">
                    </div>
                </div>
                <!--จบฟอร์มตำบลอำเภอจังหวัด-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">เบอร์มือถือ</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="mobile"/><font color="red"> **จำเป็นต้องกรอก**</font>
                    </div>
                    </div>
                <!--จบฟอร์มมือถือ-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">ต้องการประเภทบ้านพัก</label>
                    <div class="col-lg-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="typef_id" id="family1" value="1" checked>
                                โสด</label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="typef_id" id="family2" value="2">
                                ครอบครัว
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group" id="showfamily" style="">

                   <div class="container">
                           <div class="col-lg-12">

                                <table class="table table-bordered" id="tablefamily" style="width: auto">
                                    <thead>
                                    <tr>
                                        <th class="text-center">ชื่อ-สกุล</th>
                                        <th class="text-center">สถานะครอบครัว</th>
                                        <th class="text-center">ปฏิบัติงานที่</th>
                                        <!--th class="text-center">เพิ่มไฟล์รูป</th-->
                                        <th class="text-center">กระบวนการ</th>
                                    </tr>
                                    <tr>
                                        <!--form id="defaultForm2" method="post" class="form-horizontal"-->
                                        <td><input type="text" name="family_name" id="family_name" class="form-control"></td>
                                        <td>
<!--                                            <input type="text" name="family_status" id="family_status" class="form-control">-->
                                            <select class="form-control select2" id="family_status" name="family_status">
                                                <option value="">สถานะครอบครัว</option>
                                                <?php
                                                //echo $classlouis ->ZoneHome();
                                                $mysql = new pdomysqlresthome();
                                                $sql = "SELECT relationf_id,relationf_name FROM relationfamily;";
                                                $results = $mysql->selectAll($sql);

                                                foreach ($results as $value) {
                                                    echo "<option value=" . $value['relationf_id'] . " >" . $value['relationf_name'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </td>

                                        <td>
<!--                                            <input type="text" name="family_workstation" id="family_workstation" class="form-control">-->
                                            <select class="form-control select2" id="family_workstation" name="family_workstation">
                                                <option value="">ปฏิบัติหน้าที่</option>
                                                <?php
                                                //echo $classlouis ->ZoneHome();
                                                $mysql = new pdomysql();
                                                $sql = "SELECT id_department,name_department FROM department;";
                                                $results = $mysql->selectAll($sql);

                                                foreach ($results as $value) {
                                                    echo "<option value=" . $value['id_department'] . " >" . $value['name_department'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </td>
                                            <!--<td>
                                                <!--input type="file" id="exampleInputFile" name="file_picf"-->
                                            <!--/td-->
                                        <td class="text-center"><button type="button" class="btn btn-info form-control btn-flat" id="addfamily" >เพิ่มครอบครัว</button></td>
                                        <!--/form-->
                                    </tr>
                                    </thead>
                                    <tbody>
<!--                                    <tr>-->
<!--                                        <td>t</td>-->
<!--                                        <td>c</td>-->
<!--                                        <td>e</td>-->
<!--                                        <td><button type="button" class="btn btn-info form-control btn-flat" id="savefamily">ลบ</button></td>-->
<!--                                    </tr>-->
                                    </tbody>
                                </table>

                       </div>
                   </div>
                </div>
                <div class="row"></div>
<script>
    $('#addfamily').on('click',function () {

        console.log($('#family_name').val());
        console.log($('#family_status').val());
        console.log($('#family_workstation').val());

        var id = '<?=$_SESSION["pid"]?>';
        var fname = $('#family_name').val();
        var fs = $('#family_status').val();
        var fw = $('#family_workstation').val()
        $.ajax({
            url:'ins_family.php',
            type:'POST',
            data:{pid:id,fname:fname,fs:fs,fw:fw},
            success:function (data) {
                console.log(data);
            }
        })
        fetchFamily();
        clearFormFamily();
    })
    function clearFormFamily() {
        $('#family_name').val('');
        $('#family_status').val('');
        $('#family_workstation').val('');
    }
    function fetchFamily() {
        var id = '<?=$_SESSION["pid"]?>';
        $.ajax({
            url:'get_family.php',
            method:'POST',
            data: {id:id},
            success:function (data) {
                $('#tablefamily tbody').replaceWith(data);
            }
        })
    }
    function showalert(id){
        //alert(id);
        $.ajax({
            url:'delete_family.php',
            method:'POST',
            data: {id:id},
            success:function (data) {
                console.log(data);
                fetchFamily();

            }
        })
    }

</script>

                <div class="form-group">
                    <label class="col-lg-3 control-label">เหตุผลความจำเป็นที่ขอบ้าน</label>
                    <div class="col-lg-8">
                        <textarea name="remark_br" class="form-control" rows="3" placeholder="เหตุผล ..."></textarea>
                    </div>
                </div>
                <!--จบฟอร์มเหตุผล-->


                <div class="box-footer">
                    <div class="col-lg-9 col-lg-offset-6">
                        <button type="submit" id="insertdata" class="btn btn-success">ส่งข้อมูล
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
        /*$('#insertdata').on('click',function () {
            console.log($('#defaultForm').serialize());
            $.ajax({
                url: 'ins_formborrow.php',
                type: 'POST',
                data: $('#defaultForm').serialize(),
                success: function (data) {
                    console.log(data)
                    if(data){
                        toastr.success('บันทึกข้อมูลเรียบร้อยค่ะ');
                        setInterval(function (){ $(location).attr('href','indexuser.php'); },2000);
                    }else{
                        toastr.warning('ไม่สามารถบันทึกข้อมูลได้');
                        setInterval(function (){ $(location).attr('href','indexuser.php'); },2000);
                    }
                }
            });
        });*/
        $('#family1').on('click',function () {
            $('#showfamily').hide();
        });
        $('#family2').on('click',function () {
            $('#showfamily').show();
            fetchFamily();
        });


    });
</script>
<script type="text/javascript">
    function fncSubmit()
    {
        if(document.getElementById('groupJName').value  == "0"  )
        {
            alert('กรุณาเลือกกลุ่มวิชาชีพ');
            return false;
        }
    }
</script>
<?php include('../../menu/footer.php'); ?>

