<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 04/08/2561
 * Time: 17:25
 */
include "../../lip/pdomysqlresthome.php";
//header('Content-Type: application/json');

$id= $_POST['id'];
$typef_name = $_POST['typef_name'];
$isActive = $_POST['isActive'];
$mysql = new  pdomysqlresthome();
$sql = "update typefamily set typef_name = '$typef_name' ,isActive = '$isActive' where typef_id = '$id'";

$results = $mysql->updateData($sql);

//echo json_encode($results);
//print_r($_POST);
echo $results;