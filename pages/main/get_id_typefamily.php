<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 04/08/2561
 * Time: 17:25
 */
include "../../lip/pdomysqlresthome.php";
header('Content-Type: application/json');

$id= $_POST['id'];
$mysql = new  pdomysqlresthome();
$sql = "select * from typefamily where typef_id = $id";

$results = $mysql->selectOne($sql);

echo json_encode($results);