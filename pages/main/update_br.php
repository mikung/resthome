<?php
/**
 * Created by PhpStorm.
  */
include "../../lip/pdomysqlresthome.php";
//header('Content-Type: application/json');

$id= $_POST['id'];
$action = $_POST['action'];
$mysql = new  pdomysqlresthome();
$sql = "update borrowhome set br_status = '$action' where brhome_id = '$id'";

$results = $mysql->updateData($sql);

//echo json_encode($results);
//print_r($_POST);
echo $results;
