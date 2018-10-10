<?php
/**
 * Created by PhpStorm.
  */
include "../../lip/pdomysqlresthome.php";
//header('Content-Type: application/json');

$id= $_POST['id'];
$reghome_name = $_POST['reghome_name'];
$isActive = $_POST['isActive'];
$mysql = new  pdomysqlresthome();
$sql = "update resgisterhome set reghome_name = '$reghome_name' ,isActive = '$isActive' where reghome_id = '$id'";

$results = $mysql->updateData($sql);

//echo json_encode($results);
//print_r($_POST);
echo $results;