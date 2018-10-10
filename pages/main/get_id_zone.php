<?php
/**
 * Created by PhpStorm.
  */
include "../../lip/pdomysqlresthome.php";
header('Content-Type: application/json');

$id= $_POST['id'];
$mysql = new  pdomysqlresthome();
$sql = "select * from zonehome where zone_id = $id";

$results = $mysql->selectOne($sql);

echo json_encode($results);