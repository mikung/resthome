
<?php
extract($_POST);
include('../../lip/resthomeclass.php');
include('../../lip/dbresthome.php');

$classRestHome = new DBresthome;
$classlouis = new Resthomeclass;

//echo "$type,$typefile,$ufile_name,$recordfile".$_FILES["recordfile"]["name"];
if($type=='uploadfile'){
    //echo "$type,$typefile,$ufile_name,$recordfile".$_FILES["recordfile"]["name"].'<br>'.$_FILES["recordfile"]["tmp_name"],"myfile/".$_FILES["recordfile"]["name"];
if(move_uploaded_file($_FILES["recordfile"]["tmp_name"],"myfile/".$_FILES["recordfile"]["name"]))
{
    echo "Copy/Upload Complete<br>";

    //*** Insert Record ***//
    $classlouis ->Insertfile($ufile_name,$_FILES["recordfile"]["name"],$typefile);
}?>
<head>
   <meta http-equiv="refresh" content="0;url=indexadmin.php">
</head>
<?php }//close type uploadfile ?>

<?php
if($type=='useradmin'){

  $classlouis ->InsertAdmin($userID,$isActive);//$userID,$isActive = name ของ input หรือ select ที่ตั้งไว้

?>
    <head>
        <meta http-equiv="refresh" content="0;url=set_admin.php">
    </head>
<?php }//close type useradmin ?>
<?php
if($type=='sethome'){

    $classlouis ->InsertHome('',$zone_name,$isActive);//$userID,$isActive = name ของ input หรือ select ที่ตั้งไว้

    ?>
<head>
   <meta http-equiv="refresh" content="1;url=set_home.php">
</head>
<?php }//close type sethome ?>
<?php
if($type=='sethome2'){

    $classlouis ->InsertRegHome('',$reghome_name,$zone_name,$isActive);

    ?>
   <head>
        <meta http-equiv="refresh" content="1;url=set_home2.php">
    </head>
<?php }//close type sethome ?>
<?php
if($type=='settypefamily'){

    $classlouis ->InsertTypeFamily('',$typef_name,$isActive);

    ?>
    <head>
        <meta http-equiv="refresh" content="1;url=set_typefamily.php">
    </head>
<?php }//close type settypefamily ?>
<?php
    if($type=='editadmin') {

    $classlouis ->UpdateAdmin($userID,$isActive);

    echo "อัพเดตเรียบร้อย";  ?>
        <head>
        <meta http-equiv="refresh" content="1;url=set_admin.php">
    </head>

    <?php }//close type editadmin ?>
<?php
if($type=='edittypefamily') {

    $classlouis ->UpdateTypeF($typef_name,$isActive);

    echo "อัพเดตเรียบร้อย";  ?>
    <head>
        <meta http-equiv="refresh" content="1;url=set_typefamily.php">
    </head>

<?php }//close type editadmin ?>

<?php
if($type=='editsethome') {

    $classlouis ->UpdateZoneH($zone_name,$isActive);

    echo "อัพเดตเรียบร้อย";  ?>
    <head>
        <meta http-equiv="refresh" content="1;url=set_home.php">
    </head>

<?php }//close type editadmin ?>

<?php
if($type=='editsethome2') {

$classlouis ->UpdateRegH($zone_name,$reghome_name,$isActive);

echo "อัพเดตเรียบร้อย";  ?>
<head>
    <meta http-equiv="refresh" content="1;url=set_home2.php">
</head>

<?php }//close type editadmin ?>

