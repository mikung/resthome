<?php
/**
 * Created by PhpStorm.
  */
include "../../lip/pdomysqlresthome.php";
//header('Content-Type: application/json');

$id= $_POST['id'];
$typef_name = $_POST['zone_name'];
$isActive = $_POST['isActive'];
$mysql = new  pdomysqlresthome();
$sql = "update zonehome set zone_name = '$zone_name' ,isActive = '$isActive' where zone_id = '$id'";

$results = $mysql->updateData($sql);

//echo json_encode($results);
//print_r($_POST);
echo $results;