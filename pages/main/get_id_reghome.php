<?php
/**
 * Created by PhpStorm.
  */
include "../../lip/pdomysqlresthome.php";
header('Content-Type: application/json');

$id= $_POST['id'];
$mysql = new  pdomysqlresthome();
$sql = "select * from resgisterhome where reghome_id = $id";

$results = $mysql->selectOne($sql);

echo json_encode($results);