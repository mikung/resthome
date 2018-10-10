<?php
/**
 * Created by PhpStorm.
 * User: teerawatjordee
 * Date: 29/8/2018 AD
 * Time: 22:00
 */
include "../../lip/pdomysqlresthome.php";
$typef_name = $_POST['typef_name'];
$isActive = $_POST['isActive'];
//print_r($_POST);
$mysql = new pdomysqlresthome();
$sql = "insert into typefamily (typef_name,isActive) values ('$typef_name','$isActive') ";
$query = $mysql->insertData($sql);

echo $query;