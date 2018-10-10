<?php

error_reporting(E_ALL ^ E_NOTICE);
require '../assets/conn/connect_mysql.php';

$data[userID] = $_POST[userID];
$data[isActive] = $_POST[isActive];


$sql = "insert into user (userID,isActive) VALUES (:userID,:isActive)";
$stmt = $mysql->prepare($sql);
$stmt->execute($data);

if($stmt){
    header("location:user.php");
}else{
    echo 'error upload : ' . $stmt->errorCode();
    echo "<br> Please contact Admin";
}

/*echo "<pre>";
print_r($data);
print_r($stmt->errorInfo());
echo $sql;
print_r($data);
echo "</pre>";*/
//$row = $stmt->fetchAll();
//print_r($row);