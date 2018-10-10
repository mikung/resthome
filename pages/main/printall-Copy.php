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
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
	<tr height="80%">
		<td id="left14" width="22%">หน่วยคุณภาพ / ฝ่าย / งาน&nbsp;</td>
		<td class="line" width="50%" id="center14"><?php echo //$resultrepair['gsname']."&nbsp;&nbsp;"; ?>&nbsp;</td>
		<td id="left14" width="2%">โทร.</td>
		<td class="line" width="26%" id="center14">&nbsp;<?php echo //$resultrepair['tel']; ?>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbs">
	<tr>
		<td width="50%" style="border-right:solid 1px;" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb" style="padding-left:10px; vertical-align:top;">
				<tr>
                	<td colspan="5" id="headtbs" valign="top"><u>ส่วนที่ 1</u>&nbsp;ส่วนของการแจ้งซ่อม </td>
                </tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
<!--end head -->
				<?php 
					for($i=0; $i < $count; $i++){ //loop ตามจำนวนค่าที่รับมาจากติ๊กเลือก
						$page_print = $i;
						$data_show = 5;
						if($page_print%$data_show==0&&$page_print!=0) {	?>
							<!--footer -->
							<tr><td colspan="5" height="30">&nbsp;</td></tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $resultrepair['nameadmin'].'&nbsp;&nbsp;'.$resultrepair['snameadmin']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;ผู้รับใบแจ้งซ่อม</td>
</tr>
<tr>

<td id="center14" colspan="5" valign="top" align="justify">วันที่&nbsp;<span class="line">&nbsp;&nbsp;<?php echo $d_in; ?>&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;<?php echo $m_in; ?>&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;<?php echo $y_in; ?>&nbsp;&nbsp;</span>&nbsp;&nbsp;
เวลา&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;<?php echo $h_in.':'.$mi_in; ?>&nbsp;&nbsp;&nbsp;</span>&nbsp;น.
</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">เจ้าหน้าที่กลุ่มงานเทคโนโลยีสารสนเทศ</td>
</tr>
<tr><td colspan="5" height="30">&nbsp;</td></tr>
</table>
</td>



<td width="50%" valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb" style="padding-right:10px; vertical-align:top;">
		<tr>
        	<td colspan="5" id="headtbs"><u>ส่วนที่ 2</u>&nbsp;สำหรับเจ้าหน้าที่ผู้ดูแลเรื่องการซ่อม </td>
        </tr>
		<tr>
			<td colspan="5" id="headtbs" style="vertical-align:top;">ประเภทบริการ</td>
		</tr>
		<tr>
			<td colspan="2" id="left14"><input name="checkhwC" type="checkbox" value="Network" />&nbsp;Network</td>
			<td id="left14"><input name="checkhwC" type="checkbox" value="SW" />&nbsp;SW</td>
			<td colspan="2" id="left14"><input name="checkhwC" type="checkbox" value="HW" />&nbsp;HW</td>
		</tr>
		<tr>
			<td colspan="2" id="left14"><input name="checkhwC" type="checkbox" value="Virus" />&nbsp;Virus</td>
			<td id="left14"><input name="checkhwC" type="checkbox" value="Driver" />&nbsp;Driver</td>
			<td colspan="2" id="left14"><input name="checkhwC" type="checkbox" value="อื่นๆ" />&nbsp;อื่น ๆ.........................</td>
		</tr>
<?php
$status = $resultrepair['r_status'];
?>
	
       
       <tr><td colspan="5" >
<tr>
<td colspan="2" id="headtbs" style="vertical-align:top;" width="35%">ผลการซ่อม</td>
<td id="left14" colspan="3">
<input name="checkhwC" type="checkbox" value="success" <?php if($status == 'OK'){ echo 'checked'; } ?> />&nbsp;ซ่อมแล้วเสร็จ<br />
<input name="checkhwC" type="checkbox" value="outdoor" <?php if($status == 'OUT'){ echo 'checked'; } ?>/>&nbsp;ส่งซ่อมช่างภายนอก<br />
<input name="checkhwC" type="checkbox" value="wait" <?php if($status == 'WAIT'){ echo 'checked'; } ?>/>&nbsp;รออุปกรณ์เปลี่ยน<br />
<input name="checkhwC" type="checkbox" value="sell" <?php if($status == 'SELL'){ echo 'checked'; } ?>/>&nbsp;อุปกรณ์เสื่อมสภาพไม่คุ้มค่าซ่อม<br />
<input name="checkhwC" type="checkbox" value="sto" <?php if($status == 'STO'){ echo 'checked'; } ?>/>&nbsp;เห็นสมควรส่งคืนคลังพัสด
</td></tr>


<tr><td colspan="5">&nbsp;</td></tr>
<tr><td id="center14" colspan="5" valign="top" align="justify">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $resultrepair['nameadmin'].'&nbsp;&nbsp;'.$resultrepair['snameadmin']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;เจ้าหน้าที่ซ่อม</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">วันที่&nbsp;<span class="line">&nbsp;&nbsp;<?php echo $d_out; ?>&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;<?php echo $m_out; ?>&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;<?php echo $y_out; ?>&nbsp;&nbsp;</span>&nbsp;&nbsp;
เวลา&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;<?php echo $h_out.':'.$mi_out; ?>&nbsp;&nbsp;&nbsp;</span>&nbsp;น.
</td>
</tr>

<tr><td colspan="5">&nbsp;</td></tr>
<tr><td id="center14" colspan="5" valign="top" align="justify" height="35">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
</tr>
<tr><td id="center14" colspan="5" valign="top" align="justify">(นายจักรกฤษณ์  รอดไม้)</td></tr>
<tr><td id="center14" colspan="5" valign="top" align="justify">หัวหน้ากลุ่มงานเทคโนโลยีสารสนเทศ</td></tr>
</table>
</td>
</tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
<tr>
<td width="50%">

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
<tr><td colspan="5">&nbsp;</td></tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;เจ้าหน้าที่/ตรวจสอบ</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">วันที่&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;
เวลา&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;น.
</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ตำแหน่ง<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr></table>
</td>
<td width="50%">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
<tr><td colspan="5">&nbsp;</td></tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;ผู้รับเครื่อง/ตรวจสอบ</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">วันที่&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;
เวลา&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;น.
</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ตำแหน่ง<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr></table>
</td>
</table>
<!--end footer -->
					
						<?php	echo "<div style='page-break-after: always'>";
						
							echo "</div>"; ?>
						
							<!--head -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
	<tr>
		<td width="20%">&nbsp;</td>
		<td width="60%" id="center14"><img src="images/logotransparent.png" /></td>
		<td width="20%" id="right16b"><div align="center">FO-COM-010</div></td>
	</tr>
	<tr>
		<td rowspan="2">&nbsp;</td>
		<td id="center16b" rowspan="2" style="vertical-align:top;">ใบรับแจ้งซ่อมครุภัณฑ์คอมพิวเตอร์ และอุปกรณ์ต่อพ่วง</div></td>
		<td id="right14b"><div align="center">คิวที่............/...........</div></td>
	</tr>
	<tr>
		<td id="right14" height="50"><div align="left">
		<input name="repair1" type="checkbox" value="ซ่อมหน้างาน" /> ซ่อมหน้างาน <br />
		<input name="repair2" type="checkbox" value="รับเครื่องซ่อม" /> รับเครื่องซ่อม</div>
		</td>
  	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
	<tr>
		<td id="left14" width="10%">เรียน</td>
		<td id="left14" width="90%" colspan="4">หัวหน้ากลุ่มงานเทคโนโลยีสารสนเทศ</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td id="left14" width="5%">ข้าพเจ้า&nbsp;</td>
		<td id="center14" class="line" width="48%"><?php echo $resultrepair['name']."&nbsp;&nbsp;".$resultrepair['sname'].""; ?>&nbsp;</td>
		<td id="left14" width="7%">ตำแหน่ง&nbsp;</td>
		<td id="left14" class="line" width="30%">&nbsp;<?php echo $resultrepair['position']; ?>&nbsp;</td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
	<tr height="80%">
		<td id="left14" width="22%">หน่วยคุณภาพ / ฝ่าย / งาน&nbsp;</td>
		<td class="line" width="50%" id="center14"><?php echo $resultrepair['gsname']."&nbsp;&nbsp;"; ?>&nbsp;</td>
		<td id="left14" width="2%">โทร.</td>
		<td class="line" width="26%" id="center14">&nbsp;<?php echo $resultrepair['tel']; ?>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbs">
	<tr>
		<td width="50%" style="border-right:solid 1px;" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb" style="padding-left:10px; vertical-align:top;">
				<tr>
                	<td colspan="5" id="headtbs" valign="top"><u>ส่วนที่ 1</u>&nbsp;ส่วนของการแจ้งซ่อม </td>
                </tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
<!--end head -->
					
					<?php	}
					$sql_repair = "SELECT id_number,ofservice,tbl_part.pname,r_summari FROM `tbl_repair` 
					join tbl_sub_group on (tbl_repair.id_s = tbl_sub_group.id_s) 
					join tbl_part on (tbl_repair.id_p = tbl_part.id_p) 
					join  tbl_admin on ( tbl_admin.id_a = tbl_repair.id_a) 
					WHERE `id_r` = '".$id_rt[$i]."' ;";
					$query_repair = mysql_query($sql_repair) or die(mysql_error());
					$result_repair = mysql_fetch_assoc($query_repair);	

					$t1 = $result_repair['ofservice'];
					$t2 = $result_repair['r_summari'];
					$num_t1 = mb_strlen($t1, 'UTF-8');
					$num_t2 = mb_strlen($t2, 'UTF-8'); ?>

					<tr border='1'>
					<td width="45%" id="left14" valign="top"><span id="headtbs"><?php echo $i+1 .') '; ?>อุปกรณ์ที่แจ้งซ่อม</span></td>
					<td id="left14" class="line" valign="top"><?php echo $result_repair['pname'] ?></td>
				</tr>
				<tr>
					<td id="left14" valign="top"><span id="headtbs">หมายเลขทะเบียน</span></td>
					<td id="left14" class="line" valign="top"><?php echo $result_repair['id_number'] ?></td>
				</tr>	
				<tr>
					<td id="left14" valign="top"><span id="headtbs">อาการ</span></td>
					<?php 
						if( $num_t1 > 50){
							echo '<td id="left14" class="line" valign="top">'.$result_repair['ofservice'].'</td>';
						}else{
							echo '<td id="left14" class="line" valign="top">'.$result_repair['ofservice'].'</td>';
						}
					?>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
			<?php	} ?>
<!--footer -->
							<tr><td colspan="5" height="30">&nbsp;</td></tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $resultrepair['nameadmin'].'&nbsp;&nbsp;'.$resultrepair['snameadmin']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;ผู้รับใบแจ้งซ่อม</td>
</tr>
<tr>

<td id="center14" colspan="5" valign="top" align="justify">วันที่&nbsp;<span class="line">&nbsp;&nbsp;<?php echo $d_in; ?>&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;<?php echo $m_in; ?>&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;<?php echo $y_in; ?>&nbsp;&nbsp;</span>&nbsp;&nbsp;
เวลา&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;<?php echo $h_in.':'.$mi_in; ?>&nbsp;&nbsp;&nbsp;</span>&nbsp;น.
</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">เจ้าหน้าที่กลุ่มงานเทคโนโลยีสารสนเทศ</td>
</tr>
<tr><td colspan="5" height="30">&nbsp;</td></tr>
</table>
</td>



<td width="50%" valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb" style="padding-right:10px; vertical-align:top;">
		<tr>
        	<td colspan="5" id="headtbs"><u>ส่วนที่ 2</u>&nbsp;สำหรับเจ้าหน้าที่ผู้ดูแลเรื่องการซ่อม </td>
        </tr>
		<tr>
			<td colspan="5" id="headtbs" style="vertical-align:top;">ประเภทบริการ</td>
		</tr>
		<tr>
			<td colspan="2" id="left14"><input name="checkhwC" type="checkbox" value="Network" />&nbsp;Network</td>
			<td id="left14"><input name="checkhwC" type="checkbox" value="SW" />&nbsp;SW</td>
			<td colspan="2" id="left14"><input name="checkhwC" type="checkbox" value="HW" />&nbsp;HW</td>
		</tr>
		<tr>
			<td colspan="2" id="left14"><input name="checkhwC" type="checkbox" value="Virus" />&nbsp;Virus</td>
			<td id="left14"><input name="checkhwC" type="checkbox" value="Driver" />&nbsp;Driver</td>
			<td colspan="2" id="left14"><input name="checkhwC" type="checkbox" value="อื่นๆ" />&nbsp;อื่น ๆ.........................</td>
		</tr>
<?php
$status = $resultrepair['r_status'];
?>
	
       
       <tr><td colspan="5" >
<tr>
<td colspan="2" id="headtbs" style="vertical-align:top;" width="35%">ผลการซ่อม</td>
<td id="left14" colspan="3">
<input name="checkhwC" type="checkbox" value="success" <?php if($status == 'OK'){ echo 'checked'; } ?> />&nbsp;ซ่อมแล้วเสร็จ<br />
<input name="checkhwC" type="checkbox" value="outdoor" <?php if($status == 'OUT'){ echo 'checked'; } ?>/>&nbsp;ส่งซ่อมช่างภายนอก<br />
<input name="checkhwC" type="checkbox" value="wait" <?php if($status == 'WAIT'){ echo 'checked'; } ?>/>&nbsp;รออุปกรณ์เปลี่ยน<br />
<input name="checkhwC" type="checkbox" value="sell" <?php if($status == 'SELL'){ echo 'checked'; } ?>/>&nbsp;อุปกรณ์เสื่อมสภาพไม่คุ้มค่าซ่อม<br />
<input name="checkhwC" type="checkbox" value="sto" <?php if($status == 'STO'){ echo 'checked'; } ?>/>&nbsp;เห็นสมควรส่งคืนคลังพัสด
</td></tr>


<tr><td colspan="5">&nbsp;</td></tr>
<tr><td id="center14" colspan="5" valign="top" align="justify">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $resultrepair['nameadmin'].'&nbsp;&nbsp;'.$resultrepair['snameadmin']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;เจ้าหน้าที่ซ่อม</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">วันที่&nbsp;<span class="line">&nbsp;&nbsp;<?php echo $d_out; ?>&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;<?php echo $m_out; ?>&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;<?php echo $y_out; ?>&nbsp;&nbsp;</span>&nbsp;&nbsp;
เวลา&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;<?php echo $h_out.':'.$mi_out; ?>&nbsp;&nbsp;&nbsp;</span>&nbsp;น.
</td>
</tr>

<tr><td colspan="5">&nbsp;</td></tr>
<tr><td id="center14" colspan="5" valign="top" align="justify" height="35">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
</tr>
<tr><td id="center14" colspan="5" valign="top" align="justify">(นายจักรกฤษณ์  รอดไม้)</td></tr>
<tr><td id="center14" colspan="5" valign="top" align="justify">หัวหน้ากลุ่มงานเทคโนโลยีสารสนเทศ</td></tr>
</table>
</td>
</tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
<tr>
<td width="50%">

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
<tr><td colspan="5">&nbsp;</td></tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;เจ้าหน้าที่/ตรวจสอบ</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">วันที่&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;
เวลา&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;น.
</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ตำแหน่ง<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr></table>
</td>
<td width="50%">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb">
<tr><td colspan="5">&nbsp;</td></tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ลงชื่อ&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;ผู้รับเครื่อง/ตรวจสอบ</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">วันที่&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/
<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;
เวลา&nbsp;<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;น.
</td>
</tr>
<tr>
<td id="center14" colspan="5" valign="top" align="justify">ตำแหน่ง<span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr></table>
</td>
</table>
<!--end footer -->


</body>
</html>



