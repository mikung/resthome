<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 04/08/2561
 * Time: 17:25
 */
include "../../lip/pdomysqlresthome.php";
//header('Content-Type: application/json');

$brhome_id= $_POST['br_id'];
$zone_id = $_POST['zone_id'];
$reghome_id = $_POST['reghome_id'];
$mysql = new  pdomysqlresthome();
$sql = "update borrowhome set zone_new = '$zone_id' ,reghome_new = '$reghome_id' ,br_status = 4 where brhome_id = '$brhome_id'";
//echo $sql;
//exit();
$results = $mysql->updateData($sql);

$sqlupdate = "update registerhome set status = 'N' where reghome_id = '$reghome_id'";
$query = $mysql->updateData($sqlupdate);

//echo json_encode($results);
//print_r($_POST);
echo $results;