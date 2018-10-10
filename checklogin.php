<?php
ob_start();
session_start();

//include('lip/dblogin.php');
include "lip/pdomysqlresthome.php";
include "lip/pdomysql.php";
///$dbHr = new DBlogin;


$dbHr = new pdomysql();
$uname = str_replace(' ','',$_POST['username']);//ตราจสอบกรณีเคาะ spaceba
$pws = $_POST["password"];

$sqlml = "SELECT p.ID_Personnal AS pid ,pre.PreName AS prename ,p.`Name` AS fname,p.Lastname AS lname,pre.sex AS sex,
p.IDNumber AS cid,p.ID_Sty AS hid,p.Position AS position,CONCAT(d.type,d.name_department) AS depart,p.ID_Department as dpID,p.expertiseID as expertise,
p.birthday AS birthday,p.dateStart AS dateStart,(YEAR(NOW())-YEAR(p.birthday)) AS age,(YEAR(NOW())-YEAR(p.dateStart)) AS agework
,de.degreeID AS delv,se.servantName AS servname
FROM personnal p LEFT JOIN prename pre ON p.ID_Prename = pre.ID_Prename
LEFT JOIN department d ON p.ID_Department = d.id_department
LEFT JOIN degree de ON p.degreeID = de.degreeID
LEFT JOIN servant_type se ON p.servantID = se.servantID
WHERE p.IDNumber = '$uname' AND p.`Password` = '$pws' AND p.`status` = 'Y';";

$result_user = $dbHr->selectAll($sqlml);

$mysqlRest = new pdomysqlresthome();


//$numrow = mysql_num_rows($dbqueryml);
/*echo count($result_user);
echo $sqlml;
echo "<pre>";
print_r($result_user);

echo "</pre>";
exit();*/
if(count($result_user) > 0)
{
    $pid = $result_user['0']['pid'];

    $cid = $result_user['0']['cid'];
    $hid = $result_user['0']['hid'];

    $nameShort = $result_user['0']['fname'];
    $nameFL = $result_user['0']['fname']." ".$result_user['0']['lname'];
    $nameFull = $result_user['0']['prename'].$result_user['0']['fname']." ".$result_user['0']['lname'];
    $sex = $result_user['0']['sex'];

    $position = $result_user['0']['position'];
    $depart = $result_user['0']['depart'];
    $departID = $result_user['0']['dpID'];

    $expertise = $result_user['0']['expertise'];

    $birthday = $result_user['0']['birthday'];
    $dateStart = $result_user['0']['dateStart'];
    $age = $result_user['0']['age'];
    $agework = $result_user['0']['agework'];

    $delv = $result_user['0']['delv'];// level of degreeID Person
    $servname = $result_user['0']['servname'];

    $_SESSION["pid"] = $pid;
    $_SESSION["nameFull"] = $nameFull;
    $_SESSION["nameFL"] = $nameFL;
    $_SESSION["sex"] = $sex;
    $_SESSION["position"] = $position;
    $_SESSION["depart"] = $depart;
    $_SESSION["departID"] = $departID;
    $_SESSION["age"] = $birthday;
    $_SESSION["agework"] = $dateStart;
    $_SESSION["expertise"] = $expertise;
    $_SESSION["delv"] = $delv;
    $_SESSION["servname"] = $servname;



    $sqlRest = "select * from useradmin where userID = $pid and isActive = 1";
    $query_rest = $mysqlRest->selectAll($sqlRest);
//    echo count($query_rest);
//    print_r($query_rest);
//    exit();
    if(count($query_rest) > 0){
        $_SESSION["admin"] = '1';
        echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=pages/main/indexadmin.php' >";
    }else{
        $_SESSION["admin"] = '0';
        echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=pages/main/indexuser.php' >";
    }
    //$_SESSION["ID_Personal"] = $pid;

}else{
echo "ชื่อหรือรหัสของท่านไม่ตรงถูกค่ะ";
}


exit();
if($numrow >= 1) {
    while($result_user=mysql_fetch_array($dbqueryml)){
        $pid = $result_user['pid'];

        $cid = $result_user['cid'];
        $hid = $result_user['hid'];

        $nameShort = $result_user['fname'];
        $nameFL = $result_user['fname']." ".$result_user['lname'];
        $nameFull = $result_user['prename'].$result_user['fname']." ".$result_user['lname'];
        $sex = $result_user['sex'];

        $position = $result_user['position'];
        $depart = $result_user['depart'];
        $departID = $result_user['dpID'];

        $expertise = $result_user['expertise'];

        $birthday = $result_user['birthday'];
        $dateStart = $result_user['dateStart'];
        $age = $result_user['age'];
        $agework = $result_user['agework'];

        $delv = $result_user['delv'];// level of degreeID Person
        $servname = $result_user['servname'];
    }

    $_SESSION["pid"] = $pid;
    $_SESSION["nameFull"] = $nameFull;
    $_SESSION["nameFL"] = $nameFL;
    $_SESSION["sex"] = $sex;
    $_SESSION["position"] = $position;
    $_SESSION["depart"] = $depart;
    $_SESSION["departID"] = $departID;
    $_SESSION["age"] = $birthday;
    $_SESSION["agework"] = $dateStart;
    $_SESSION["expertise"] = $expertise;
    $_SESSION["delv"] = $delv;
    $_SESSION["servname"] = $servname;


    $_SESSION["admin"] = '1'; // เงื่อนไขชั่วคราว
    //$_SESSION["ID_Personal"] = $pid;
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=pages/main/indexadmin.php' >";

    exit ();
}
else {
    //echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=pages/main/indexuser.php' >";
}



?>