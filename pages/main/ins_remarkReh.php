<?php
/**
 * Created by PhpStorm.
  */
include "../../lip/pdomysqlresthome.php";
$remarkReh_name = $_POST['remarkReh_name'];
$isActive = $_POST['isActive'];
//print_r($_POST);
$mysql = new pdomysqlresthome();
$sql = "insert into remarkrehome (remarkReh_name,isActive) values ('$remarkReh_name','$isActive') ";
$query = $mysql->insertData($sql);

echo $query;