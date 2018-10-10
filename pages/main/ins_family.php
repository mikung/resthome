<?php
/**
 * Created by PhpStorm.
 */
include "../../lip/pdomysqlresthome.php";
$pid = $_POST['pid'];
$fname = $_POST['fname'];
$fs = $_POST['fs'];
$fw = $_POST['fw'];
//print_r( $_POST);
//exit();
$mysql = new pdomysqlresthome();
$sql = "insert into memfamily (ID_Personnal,memf_name,relationf_id,id_department) values ('$pid','$fname','$fs','$fw') ";
//$sql = 'insert into memfamily (ID_Personnal) values ("2") ';
$query = $mysql->insertData($sql);

echo $query;