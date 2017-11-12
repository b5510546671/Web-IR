<html>
<head>
<title>ตัวอย่างโปรแกรม php ตรวจสอบรหัสผู้ใช้ และรหัสผ่าน ด้วย ldap </title>
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<script language="javascript">
function chkvalid() {
   var v1 = document.userenter.form_account.value;
   var v2 = document.userenter.form_password.value;
   if (v1.length<=0)
      {
      alert("please enter all fields");
      return false;
      }
  else if (v2.length<=0)
      {
      alert("please enter all fields");
      return false;
      }
  else
    {
    return true;
    }
}
</script>
</head>
<body>
<form name="userenter" onsubmit="return chkvalid()" method="post"  action="process.php">
<h3 align=center>กรุณาเข้าสู่ระบบ เพื่อชมการถ่ายทอดสด</h3>
<table width="282" border=0 align=center>
<tr>
<td width="81">account:</td>
<td width="191"><input type="text" name="form_account" size="15"></td>
</tr>
<tr>
<td>password:</td>
<td><input type="password" name="form_password" size="15"></td>
</tr>
<tr>
  <td colspan=2 align=center><span class="center1">(สามารถ เข้าสู่ระบบได้ทุกวิทยาเขต) </span></td>
</tr>
<tr>
<td colspan=2 align=center><input type="submit" value="login"><input type="reset" value="cancel"></td>
</tr>
</table>
</form>
<hr>
</body>
</html>