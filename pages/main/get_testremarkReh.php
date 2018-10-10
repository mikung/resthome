<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 04/08/2561
 * Time: 17:25
 */
include "../../lip/pdomysqlresthome.php";

$mysql = new  pdomysqlresthome();
$sql = "select * from remarkrehome";
$results = $mysql->selectAll($sql);

foreach ($results as $value){
    $sub_array = array();
    //$sub_array[] = $i;
    $sub_array['remarkReh_id'] = $value['remarkReh_id'];
    $sub_array['remarkReh_name'] = $value['remarkReh_name'];
    $sub_array['isActive'] = $value['isActive'];
    $sub_array['button'] = '<button type="button" name="update" id="'.$value['remarkReh_id'].'" class="btn btn-info update">อัพเดต</button>';
    $data[] = $sub_array;
}
$output['data'] = $data;
echo json_encode($output);