<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 10/30/17
 * Time: 2:12 PM
 */


require'../../lip/pdomysqlresthome.php';
$dbrh = new pdomysqlresthome();
$data['search'] = "%".$_GET['search']."%";
$data['zone_id'] = $_GET['zone'];
//print_r($data);
//$str = "select PROVINCE_CODE as 'id', PROVINCE_NAME as 'text' from provinces WHERE PROVINCE_NAME like '".$data['PROVINCE_NAME']."' ";
$str = "SELECT reghome_id as 'id', reghome_name as 'text'  FROM resgisterhome where zone_id = '".$data['zone_id']."' and reghome_name like '".$data['search']."' and isActive = 1 and status = 'Y' ";
//echo $str;
//$str = "select PROVINCE_CODE as 'id', PROVINCE_NAME as 'text' from provinces";
$dbquery = $dbrh->selectAll($str);
$result['results'] = $dbquery;
echo json_encode($result);