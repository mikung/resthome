<?php
extract($_POST);
extract($_GET);
include('../../lip/resthomeclass.php');
include('../../lip/dbresthome.php');
include "../../lip/pdomysqlresthome.php";

$classRestHome = new DBresthome;
$classlouis = new Resthomeclass;

//echo "$typefile,$ufile_name,$recordfile".$_FILES["recordfile"]["name"];
if($type=='editadmin') {
    $classlouis ->UpdateAdmin($userID,$isActive);

    echo "อัพเดตเรียบร้อย";
    //echo '<meta http-equiv="refresh" content="0; url=indexadmin.php">';
}
?>
