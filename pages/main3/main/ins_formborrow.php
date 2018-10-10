<?php
session_start();
//print_r($_POST);
include "../../lip/pdomysqlresthome.php";
$mysql = new pdomysqlresthome();
//print_r($_SESSION);
$ID_Personnal = $_SESSION['pid'];
$salary = $_POST['salary'];
$typef_id = $_POST['typef_id'];
$typehome = $_POST['typehome'];
$zone_id = $_POST['zone_name'];
$reghome_id = $_POST['reghome_name'];
$address = $_POST['home_no'];
$province = $_POST['province'];
$amphur = $_POST['amphur'];
$tambon = $_POST['tambon'];
$mobile = $_POST['mobile'];
$causes = $_POST['remark_br'];
$borrow_date = date('Y-m-d');

$sql = "insert into borrowhome (ID_Personnal,salary,typef_id,typehome,zone_id,reghome_id,address,province,amphur,tambon,mobile,causes,borrow_date) 
values ('$ID_Personnal','$salary','$typef_id','$typehome','$zone_id','$reghome_id','$address','$province','$amphur','$tambon','$mobile','$causes','$borrow_date')";

//echo $sql;
$query = $mysql->insertData($sql);
echo $query;