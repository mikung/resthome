<?php include('../../menu/header.php'); ?>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                จัดการบ้านพักออนไลน์ test test2
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

                <form id="defaultForm" method="post" enctype="multipart/form-data" class="form-horizontal" action="saveforminfo.php">

                    <div class="form-group">
                        <label class="col-lg-3 control-label">ประเภทการอัพโหลด</label>
                        <div class="col-lg-4">
                            <select class="form-control" name="typefile" id="typefile">
                                <option value="1">ประชาสัมพันธ์</option>
                                <option value="2">ดาวน์โหลด</option>
                            </select>
                        </div>
                    </div>
                    <!--จบประเภทประกาศ-->
                    <div class="form-group">
                        <label class="col-lg-3 control-label">เรื่องที่ประกาศ</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="ufile_name" id="ufile_name"/>
                        </div>
                    </div>
                    <!--จบประกาศ-->
                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-3">
                            <label for="exampleInputFile">เลือกไฟล์</label>
                            <input type="file" id="exampleInputFile" name="recordfile" >
                        </div>
                    </div>

                    <!-- จบปฏิทิน -->
                    <div class="box-footer">
                        <div class="col-lg-9 col-lg-offset-6">
                            <button type="submit" id="uploadfile" class="btn btn-warning">อัพโหลด</button>
                        </div>
                    </div>
                    <!-----จบส่วนปุุ่่มอัพโหลด-->
                </form>
            </div>
            <div class="row">

                <div class="col-md-12 showdata">

                </div>
            </div>

            <!-- จบส่วนประชาสัมพันธ์ -->

    </div>
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


    $("#defaultForm").submit(function(evt){
        evt.preventDefault();
        var formData = new FormData($(this)[0]);
        if($('#ufile_name').val() == '' || $('#exampleInputFile').val() == ''){
            toastr.warning('กรุณากรอกข้อมูลให้เรียบร้อยค่ะ');
        }else{
            $.ajax({
                url: 'saveforminfo.php',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                success: function (response) {
                    //alert(response);
                    console.log(response);
                    if(response == 1){
                        toastr.success('บันทึกข้อมูลเรียบร้อยค่ะ');
                        fetchData();
                        cleardata();
                    }else {
                        toastr.warning('บันทึกข้อมูลไม่ได้ค่ะ');
                    }
                }
            });
        }

        return false;
    });
    function fetchData() {
        $.ajax({
            url:'get_downloadfile.php',
            success:function (res) {
                $('.showdata').html(res);
                $('#table_info').DataTable();
                $('#table_download').DataTable();
            }
        })
        
    }
    function deletefile(id){
        $.ajax({
            url:'deletefile.php',
            data: {id:id},
            success:function (res) {
                console.log(res);
                if(res == 1){
                    toastr.success('ลบข้อมูลเรียบร้อยค่ะ');
                    fetchData();
                }else{
                    toastr.error('ไม่สามารถลบข้อมูลได้ค่ะ');

                }

            }
        })
    }
    $(document).ready(function () {
        fetchData();
    })
    function cleardata() {
        $('#exampleInputFile').val('');
        $('#ufile_name').val('');
        $('#typefile').val('1');
    }

</script>

<?php include('../../menu/footer.php'); ?>
