<?php

require'../../lip/pdomysqlresthome.php';
$mysql = new pdomysqlresthome();
$data['AMPHUR_NAME'] = "%".$_GET['search']."%";
$data['province'] = $_GET['province']."%";

$sql = "select AMPHUR_CODE as 'id', AMPHUR_NAME as 'text' from amphures WHERE AMPHUR_NAME like '".$data['AMPHUR_NAME']."' AND AMPHUR_CODE like '".$data['province']."'";

$query = $mysql->selectAll($sql);
$result['results'] = $query;
echo json_encode($result);
