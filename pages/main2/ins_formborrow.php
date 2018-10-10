<?php
session_start();
print_r($_POST);
include "../../lip/pdomysqlresthome.php";
$mysql = new pdomysqlresthome();
print_r($_SESSION);

$sql = "insert into borrowhome (ID_Personnal) values ($_SESSION[pid])";
//echo $sql;
$query = $mysql->insertData($sql);
echo $query;