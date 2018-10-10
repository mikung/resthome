<?php
/**
 * Created by PhpStorm.
  */
include "../../lip/pdomysqlresthome.php";
$zone_name = $_POST['zone_name'];
$isActive = $_POST['isActive'];
//print_r($_POST);
$mysql = new pdomysqlresthome();
$sql = "insert into zonehome (zone_name,isActive) values ('$zone_name','$isActive') ";
$query = $mysql->insertData($sql);

echo $query;