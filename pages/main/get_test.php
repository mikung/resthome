<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 04/08/2561
 * Time: 17:25
 */
include "../../lip/pdomysqlresthome.php";

$mysql = new  pdomysqlresthome();
$sql = "select * from typefamily";
$results = $mysql->selectAll($sql);

foreach ($results as $value){
    $sub_array = array();
    //$sub_array[] = $i;
    $sub_array['typef_id'] = $value['typef_id'];
    $sub_array['typef_name'] = $value['typef_name'];
    $sub_array['isActive'] = $value['isActive'];
    $sub_array['button'] = '<button type="button" name="update" id="'.$value['typef_id'].'" class="btn btn-info update">Update</button>';
    $data[] = $sub_array;
}
$output['data'] = $data;
echo json_encode($output);