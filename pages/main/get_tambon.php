<?php

require'../../lip/pdomysqlresthome.php';

$data['DISTRICT_NAME'] = "%".$_GET['search']."%";

$data['tambon'] = $_GET['amphur']."%";
$sql = "select DISTRICT_CODE as 'id', DISTRICT_NAME as 'text' from districts WHERE DISTRICT_NAME like '".$data['DISTRICT_NAME']."' AND DISTRICT_CODE like '".$data['tambon']."'";
$mysql = new pdomysqlresthome();
$query = $mysql->selectAll($sql);

$result['results'] = $query;
echo json_encode($result);
