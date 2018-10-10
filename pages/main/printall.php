<?php 
	/*ทดสอบใช้งาน
	include_once('connect.php');
    $id = array();
    foreach ($_POST['id_ck'] as $key => $value) {
        $id[$key] = $value;
    }
	$count = count($id);
	$sql_all = "SELECT * FROM `tbl_repair` 
	join tbl_sub_group on (tbl_repair.id_s = tbl_sub_group.id_s) 
	join tbl_part on (tbl_repair.id_p = tbl_part.id_p) 
	join  tbl_admin on ( tbl_admin.id_a = tbl_repair.id_a) 
	WHERE `id_r` = '".$id[0]."' ;";
	$query_all = mysql_query($sql_all) or die(mysql_error());
	$resul_all = mysql_fetch_assoc($query_all);
	echo 'ข้าพเจ้า '.$resul_all['name'].' '.$resul_all['sname'].'<br/>';
	echo 'ตำแหน่ง '.$resul_all['position'].'<br/>';
	echo 'หน่วยคุณภาพ / ฝ่าย / งาน '.$resul_all['gsname'].'<br/>';
	echo 'โทร. '.$resul_all['tel'].'<br/>';

	echo '____________________________________<br/>';
    for($i=0; $i < $count; $i++){
		//echo $id[$i].'<br/>';
		
		$sqlrepair = "SELECT id_number,ofservice,tbl_part.pname FROM `tbl_repair` 
		join tbl_sub_group on (tbl_repair.id_s = tbl_sub_group.id_s) 
		join tbl_part on (tbl_repair.id_p = tbl_part.id_p) 
		join  tbl_admin on ( tbl_admin.id_a = tbl_repair.id_a) 
		WHERE `id_r` = '".$id[$i]."' ;";
		$queryrepair = mysql_query($sqlrepair) or die(mysql_error());
		$resultrepair = mysql_fetch_assoc($queryrepair);
		echo $i+1 .'.ประเภท : '.$resultrepair['pname'].'เลขครุภัณฑ์ : '.$resultrepair['id_number'].' อาการ : '.$resultrepair['ofservice'].'<br/>';
		if ($i == 4) {
			echo '<div style="page-break-after: always"></div>';
		}
	}
	echo '===================================================';*/
?>
<?php

extract($_GET);
extract($_POST);
ob_start();
session_start();

//include('lip/dblogin.php');
//include "lip/pdomysqlresthome.php";
//include "lip/pdomysql.php";
///$dbHr = new DBlogin;


/*$dbHr = new pdomysql();
$uname = $_POST["username"];
$pws = $_POST["password"];

include_once('connect.php');
include_once('css/printrepairstyle.css');

$id_num = $_POST['id_num'];
$id_rt = array();
    foreach ($_POST['id_ck'] as $key => $value) {
        $id_rt[$key] = $value;
    }
	$count = count($id_rt);*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แบบขอบ้านพักและห้องพักของโรงพยาบาลศรีธัญญา</title>
</head>
<body> 
<?php 
    /*for($i=0; $i < $count; $i++){
		$sql_ck = "UPDATE `tbl_repair`
		   SET status_ck = '1'
		   WHERE id_r = '".$id_rt[$i]."';";
		$query_ck = mysql_query($sql_ck) or die(mysql_error());
	}

	$sqlrepair = "SELECT * FROM `tbl_repair` join tbl_sub_group on (tbl_repair.id_s = tbl_sub_group.id_s) join tbl_part on (tbl_repair.id_p = tbl_part.id_p) join  tbl_admin on ( tbl_admin.id_a = tbl_repair.id_a) WHERE `id_r` = '".$id_rt[0]."' ;";
	$queryrepair = mysql_query($sqlrepair);
	$resultrepair = mysql_fetch_assoc($queryrepair);

	$cut_date_h = explode(" ",$resultrepair['date_in']);
	$cut_date = explode("-",$cut_date_h[0]);
	$d_in = $cut_date[2];
	$m_in = $cut_date[1];
	$y_in = $cut_date[0]+543;
	$cut_h = explode(":",$cut_date_h[1]);
	$h_in = $cut_h[0];
	$mi_in = $cut_h[1];
	if($resultrepair['date_ok'] == ''){
		$d_out = '';
		$m_out = '';
		$y_out = '';
		$h_out = '';
		$mi_out = '';
	}else{
		$cut_date_ok = explode(" ",$resultrepair['date_ok']);
		$cut_date_2 = explode("-",$cut_date_ok[0]);
		$d_out = $cut_date_2[2];
		$m_out = $cut_date_2[1];
		$y_out = $cut_date_2[0]+543;
		$cut_h_2 = explode(":",$cut_date_ok[1]);
		$h_out = $cut_h_2[0];
		$mi_out = $cut_h_2[1];
	}
	$i = 0;*/
?>
<!--head -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
	<tr>
		<td width="20%">&nbsp;</td>
		<td width="60%" id="center14"><img src="images/logotransparent.png" /></td>
		<td width="20%" id="right16b"><div align="center">แบบ บ.1</div></td>
	</tr>
	<tr>
		<td rowspan="2">&nbsp;</td>
		<td id="center16b" rowspan="2" style="vertical-align:top;">แบบขอบ้านพักและห้องพักของโรงพยาบาลศรีธัญญา</div></td>
		<td id="right14b"><div align="center">คิวที่............/...........</div></td>
	</tr>

</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
	<tr>
		<td id="left14" width="10%">เรื่อง</td>
		<td id="left14" width="90%" colspan="4">ขอบ้านพักในโรงพยาบาล</td>
	</tr>
    <tr>
        <td id="left14" width="10%">เรียน</td>
        <td id="left14" width="90%" colspan="4">ประธานคณะกรรมการบ้านพัก</td>
    </tr>
	<tr>
		<td>&nbsp;</td>
		<td id="left14" width="20%">ข้าพเจ้า&nbsp;(นาย/นาง/นางสาว)</td>
		<td id="center14" class="line" width="48%"><?php echo $_SESSION['nameFull'].""; ?>&nbsp;</td>
    </tr>
    <tr>
		<td id="left14" width="7%">ตำแหน่ง&nbsp;</td>
		<td id="left14" class="line" width="30%">&nbsp;<?php echo $_SESSION["position"]; ?>&nbsp;</td>
        <td id="left14" width="7%">ระดับ&nbsp;</td>
        <td id="left14" class="line" width="30%">&nbsp;<?php echo $_SESSION['delv']; ?>&nbsp;</td>
	</tr>
</table>

<!--end footer -->


</body>
</html>



