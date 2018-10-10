
<?php
extract($_POST);
extract($_GET);
include('../../lip/resthomeclass.php');
include('../../lip/dbresthome.php');

$classRestHome = new DBresthome;
$classlouis = new Resthomeclass;

//echo "$typefile,$ufile_name,$recordfile".$_FILES["recordfile"]["name"];
if($type=='delfile') {
    $del = $_GET['ufile_id'];
    $del1 = "DELETE FROM uploadfile WHERE uploadfile.ufile_id = '$del'";
    $del1Query = mysql_query($del1);

    //echo "ลบแล้ว";
    echo '<meta http-equiv="refresh" content="0; url=indexadmin.php">';
}
    ?>
