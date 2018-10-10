<?php
/**
 * Created by PhpStorm.
 * User: teerawatjordee
 * Date: 29/8/2018 AD
 * Time: 21:48
 */

include "../../lip/pdomysqlresthome.php";
$ID_Personnal = $_POST['id'];
$mysql = new pdomysqlresthome();
//$sql = "select * from memfamily where ID_Personnal = $ID_Personnal";
$sql = "select rm.listsequen,rm.ID_Personnal,rm.memf_name,rr.relationf_name,md.name_department from resthome.memfamily rm LEFT JOIN resthome.relationfamily rr on rm.relationf_id = rr.relationf_id LEFT JOIN mainlogin.department md on rm.id_department = md.id_department where rm.ID_Personnal = $ID_Personnal";
$query = $mysql->selectAll($sql);

echo '<tbody>';

foreach ($query as $value){
    echo '<tr>
                                        <td>'.$value['memf_name'].'</td>
                                        <td>'.$value['relationf_name'].'</td>
                                        <td>'.$value['name_department'].'</td>
                                        <td><button type="button" onclick="showalert('.$value['listsequen'].')" class="btn btn-info form-control btn-flat deletefamily" id="'.$value['listsequen'].'">ลบ</button></td>
                                    </tr>';
}

echo '</tbody>';