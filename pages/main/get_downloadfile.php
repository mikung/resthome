<?php
session_start();
/**
 * Created by PhpStorm.
  */
include '../../lip/pdomysqlresthome.php';

$mysql = new pdomysqlresthome();
$sql = "select * from uploadfile where typefile = 1";
$query1 = $mysql->selectAll($sql);


echo '
<div class="box-body no-padding">
                <div class="box box-info">
                    
                        <div class="box-header">
                            <h3 class="box-title">ข่าวประชาสัมพันธ์เกี่ยวกับบ้านพัก</h3>
                        </div>
                        
                    <div class="box-body">
<table class="table table-bordered" id="table_info">

            <thead>
            <tr>
            <th>#</th>
            <th class="text-center">หัวข้อข่าว</th><th class="text-center">วันที่ประกาศ</th><th class="text-center">หมายเหตุ</th>
</tr>
</thead>       
<tbody>
';
foreach ($query1 as $value) {
    echo '<tr>
<td>' . $value['ufile_id'] . '</td>
<td>' . $value['ufile_name'] . '</td>
<td>' . $value['record_datefile'] . '</td>
<td>
    <a href="downloadfile.php?id=' . $value['ufile_id'] . '" class="btn btn-danger"><i class="fa fa-download"></i></a>';
    if($_SESSION['admin'] == 1){
        echo '
    <a  onclick="deletefile('. $value['ufile_id'].')" class="btn btn-danger"><i class="fa fa-trash"></i></a>';

    }
    echo '
    </td>
</tr>
</tr>
';
}
echo '
</tbody>
</table> 
                    </div>
                </div>
            </div>
';


$sql2 = "select * from uploadfile where typefile = 2";
$query2 = $mysql->selectAll($sql2);

echo '
<div class="box-body no-padding">
                <div class="box box-success">
                    
                        <div class="box-header">
                            <h3 class="box-title">เอกสารสำหรับดาวน์โหลด</h3>
                        </div>
                        
                    <div class="box-body">
<table class="table table-bordered" id="table_download">

            <thead>
            <tr>
            <th>#</th>
            <th class="text-center">หัวข้อข่าว</th><th class="text-center">วันที่ประกาศ</th><th class="text-center">หมายเหตุ</th>
</tr>
</thead>       
<tbody>
';
foreach ($query2 as $value2) {
    echo '<tr>
<td>' . $value2['ufile_id'] . '</td>
<td>' . $value2['ufile_name'] . '</td>
<td>' . $value2['record_datefile'] . '</td>
<td>
    <a href="downloadfile.php?id=' . $value2['ufile_id'] . '" class="btn btn-danger"><i class="fa fa-download"></i></a>';
    if($_SESSION['admin'] == 1){
        echo '
    <a  onclick="deletefile('. $value2['ufile_id'].')" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
    }

    echo '
    </td>
</tr>
';
}
echo '
</tbody>
</table> 
                    </div>
                </div>
            </div>
';