<?php
/**
 * Created by PhpStorm.
 * User: teerawatjordee
 * Date: 12/9/2018 AD
 * Time: 15:55
 */
include '../../lip/pdomysqlresthome.php';
$id = $_GET['id'];
$mysql = new pdomysqlresthome();

$sql = "select * from uploadfile where ufile_id = '$id'";
$query = $mysql->selectAll($sql);

if(count($query) > 0){
    $sqldelete = "delete from uploadfile where ufile_id = '$id'";
    $querydelete = $mysql->deleteData($sqldelete);
    if($querydelete){
        unlink($query[0]['file_src_path'].".".$query[0]['file_src_name_ext']);
        echo 1;
    }else{
        echo 2;
    }
}else{
    echo 0;
}
