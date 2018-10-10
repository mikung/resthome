<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 10/30/17
 * Time: 2:12 PM
 */


require'../../lip/pdomysqlresthome.php';
$dbrh = new pdomysqlresthome();
$data['PROVINCE_NAME'] = "%".$_GET['search']."%";

$str = "select PROVINCE_CODE as 'id', PROVINCE_NAME as 'text' from provinces WHERE PROVINCE_NAME like '".$data['PROVINCE_NAME']."' ";
//$str = "select PROVINCE_CODE as 'id', PROVINCE_NAME as 'text' from provinces";
$dbquery = $dbrh->selectAll($str);
$result['results'] = $dbquery;
echo json_encode($result);