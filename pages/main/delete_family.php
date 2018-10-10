<?php
/**
 * Created by PhpStorm.
 * User: teerawatjordee
 * Date: 29/8/2018 AD
 * Time: 22:41
 */


include "../../lip/pdomysqlresthome.php";

$id = $_POST['id'];

$mysql = new pdomysqlresthome();

$sql = "delete from memfamily where listsequen = '$id'";

$query = $mysql->deleteData($sql);

echo $query;