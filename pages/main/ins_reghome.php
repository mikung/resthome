<?php
/**
 * Created by PhpStorm.
  */
include "../../lip/pdomysqlresthome.php";
$reghome_name = $_POST['reghome_name'];
$isActive = $_POST['isActive'];
//print_r($_POST);
$mysql = new pdomysqlresthome();
$sql = "insert into resgisterhome (reghome_name,isActive) values ('$reghome_name','$isActive') ";
$query = $mysql->insertData($sql);

echo $query;