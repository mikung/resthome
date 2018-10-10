<?php
include "../../plugins/class.upload.php-master/src/class.upload.php";
include "../../lip/pdomysqlresthome.php";
$mysql = new pdomysqlresthome();

$handle = new upload($_FILES['recordfile']);
$typefile = $_POST['typefile'];
$ufile_name = $_POST['ufile_name'];
$record_datefile = date('Y-m-d H:i:s');
//echo $handle->file_src_name;
//echo "<br>";
//echo $handle->file_src_mime;
//echo $handle->file_src_name_ext;
if ($handle->uploaded) {
    $handle->file_new_name_body   = 'file_'.date('YmdHisu');
    //echo $handle->file_new_name_body;
    $sql = "
insert into uploadfile (record_datefile,typefile,ufile_name,file_src_mime,file_src_name,file_src_path,file_src_name_ext)
values ('$record_datefile','$typefile','$ufile_name','$handle->file_src_mime','$handle->file_src_name','myfile/".$handle->file_new_name_body."','$handle->file_src_name_ext')
";
    //echo $sql;
    //exit();
    $handle->process('myfile/');
    if ($handle->processed) {

        $query = $mysql->insertData($sql);
        echo $query;
        $handle->clean();
    } else {
        echo 'error : ' . $handle->error;
    }
}
//
//print_r($_POST);
//
//print_r($_FILES);


?>
