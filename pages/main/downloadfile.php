<?php
include "../../lip/pdomysqlresthome.php";

$mysql = new pdomysqlresthome();
$sql = "select * from uploadfile where ufile_id = '".$_GET['id']."'";
//echo $sql;
$query = $mysql->selectOne($sql);
//echo "/".$query['file_src_path'].".pdf";
//exit();
//print_r($query);
// We'll be outputting a PDF
header('Content-type: '.$query['file_src_mime'].'');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="'.$query['file_src_name'].'"');

// The PDF source is in original.pdf
readfile("".$query['file_src_path'].".".$query['file_src_name_ext']);
?>