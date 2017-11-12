<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>form_add</title>
</head>
<body>
<center>
<br><br>
<?
	include 'encode.php';
	$university = utf8_to_tis620($_get[university]);
	$name = utf8_to_tis620($_get[yname]);
	$fname = utf8_to_tis620($_get[fname]);
	$lname = utf8_to_tis620($_get[lname]);
	$sname = utf8_to_tis620($_get[sname]);
	$fac = utf8_to_tis620($_get[fac]);
	$tel = utf8_to_tis620($_get[tel]);
	$fax = utf8_to_tis620($_get[fax]);
	$eml = utf8_to_tis620($_get[eml]);
	$level = utf8_to_tis620($_get[level]);
	$course=1;
	$timestamp = time();
	$appdate = date('y-m-d',$timestamp);

if(strlen(trim($name))==0){
	echo "กรุณาระบุคำนำหน้าชื่อด้วยค่ะ";
	return;  
}
require("../../config.inc.php");  
$sql_mx="select max(keyid) from test.member_ideal;";
$rs_mx = mysql_query($sql_mx,$conn) or die(mysql_error());
while($cols_mx=mysql_fetch_array($rs_mx)) {
	$kid=$cols_mx[0];
}
$keyid=$kid+1;
mysql_free_result($rs_mx);
$sql="insert into test.member_ideal(keyid,name,fname,lname,sname,fac,tel,eml,university,fax,level,appdate,course) values('$keyid','$name','$fname','$lname','$sname','$fac','$tel','$eml','$university','$fax','$level','$appdate','$course');";
$rs = mysql_query($sql,$conn) or die(mysql_error());
mysql_close();
echo "เพิ่มรายชื่อของ &nbsp;<font color='blue'>คุณ".tis2utf8($fname)."&nbsp;&nbsp;".tis2utf8($lname)."</font> &nbsp;เข้าในระบบแล้วค่ะ";
?>
</center>
</body>
</html>
