<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 10/30/17
 * Time: 2:12 PM
 */
error_reporting(E_ALL ^ E_NOTICE);
require '../assets/conn/connect_mysql.php';

$sql = "select * from user ";

$stmt = $mysql->prepare($sql);
$stmt->execute();

$row = $stmt->fetchAll();

$result[data] = $row;
echo json_encode($result);
