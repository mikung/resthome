<?php
/**
 * Created by PhpStorm.
  */
include "../../lip/pdomysqlresthome.php";
//header('Content-Type: application/json');

$id= $_POST['id'];
$remarkReh_name = $_POST['remarkReh_name'];
$isActive = $_POST['isActive'];
$mysql = new  pdomysqlresthome();
$sql = "update remarkrehome set remarkReh_name = '$remarkReh_name' ,isActive = '$isActive' where remarkReh_id = '$id'";

$results = $mysql->updateData($sql);

//echo json_encode($results);
//print_r($_POST);
echo $results;