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
if(isset($_POST["search"]["value"])){
    $sql .= "where typef_name LIKE '%".$_POST["search"]["value"]."%' ";
    $sql .= "or isActive LIKE '%".$_POST["search"]["value"]."%' ";
}
//if(isset($_POST["search"]["value"])){
//    $sql .= 'ORDER BY '.$_POST["order"]["0"]["column"].' '.$_POST['order']['0']['dir'].' ';
//}else{
//    $sql .= 'ORDER BY typef_id DESC ';
//}

$results = $mysql->selectAll($sql);

$filtered_rows =count($results);
$data = array();
$i = 1;
foreach ($results as $value){
    $sub_array = array();
    //$sub_array[] = $i;
    $sub_array[] = $value['typef_id'];
    $sub_array[] = $value['typef_name'];
    $sub_array[] = $value['isActive'];
    $sub_array[] = '<button type="button" name="update" id="'.$value['typef_id'].'" class="btn btn-info">Update</button>';
    $data[] = $sub_array;
    $i++;
}
$output = array(
    "draw"    => intval($_POST["draw"]),
    "recordsTotal"  =>  $filtered_rows,
    "recordsFiltered" => $filtered_rows,
    "data" => $data
);
echo json_encode($output);