<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>form_add</title>
</head>
<body>
<center>
<?
include 'encode.php';


require("../../config.inc.php");  
$sqlt="select title from test.course_name where auth='k';";
$rst = mysql_query($sqlt,$conn) or die(mysql_error());
//$cntt= mysql_num_rows($rst);
while($colst=mysql_fetch_array($rst)) {
	echo "<font color='blue' size='4'>".tis2utf8($colst[0])."</font><br>";
}
mysql_free_result($rst);

$sql="select * from test.member_ideal;";
$rs = mysql_query($sql,$conn) or die(mysql_error());
$cnt= mysql_num_rows($rs);
if($cnt>0){ 
echo "จำนวนผู้ลงทะเบียน : <font color='blue'>".$cnt."</font> คน<br>";
echo "<hr><br>";
echo "<table border='0' bgcolor='#cccccc'>";
echo "	<tr bgcolor='#006600'>";
echo "		<td><font color='white'><div align='center'>ลำดับที่</div></font></td>";
echo "		<td><font color='white'><div align='center'>คำนำชื่อ</div></font></td>";
echo "		<td><font color='white'><div align='center'>ชื่อ-นามสกุล</div></font></td>";
echo "		<td><font color='white'><div align='center'>ตำแหน่ง</div></font></td>";
echo "		<td><font color='white'><div align='center'>สังกัด</div></font></td>";
echo "		<td><font color='white'><div align='center'>สถาบัน</div></font></td>";
echo "	</tr>";

while($cols=mysql_fetch_array($rs)) {


echo "	<tr bgcolor='#ccffcc'>";
echo "		<td><div align='center'>".tis2utf8($cols[0])."</div></td>";
echo "		<td>".tis2utf8($cols[1])."</td>";
echo "		<td>".tis2utf8($cols[2])."&nbsp;&nbsp;".tis2utf8($cols[3])."</td>";
echo "		<td>".tis2utf8($cols[4])."</td>";
echo "		<td>".tis2utf8($cols[5])."</td>";
echo "		<td>".tis2utf8($cols[9])."</td>";
echo "	</tr>";
}
}else{ 
echo "<br><br><font color='red'>ยังไม่มีผู้สมัคร</font>";
}
mysql_free_result($rs);
mysql_close();
?>
</table>
</body>
</html>
