ï»¿<html>
<head>
<title>login [ e-office ]</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
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
<style type="text/css">
<!--
.style2 {
	color: #000033;
	font-weight: bold;
}
body {
	background-color: #fff4cc;
}
.style3 {font-size: small}
.style5 {
	font-size: small;
	color: #ff0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<form name="userenter" onsubmit="return chkvalid()" method="post"  action="check.php">
<br>
  <table width="208" border=1 align=center bordercolor="#ff0000">
<tr>
  <td colspan="2" bordercolor="#ffffff"><img src="http://eoffice.lib.ku.ac.th/images/logo_office.png">    <div align="left"></div></td>
  </tr>
<tr>
<td width="81" bordercolor="#ffffff" bgcolor="#ffcc66"><span class="style2">account:</span></td>
<td width="117" bordercolor="#ffffff"><input type="text" name="form_account" size="15" maxlength="10"></td>
</tr>
<tr>
<td bordercolor="#ffffff" bgcolor="#ffcc66"><span class="style2">password:</span></td>
<td bordercolor="#ffffff"><input type="password" name="form_password" size="15" maxlength="20"></td>
</tr>
<tr>
<td colspan=2 align=center bordercolor="#ffffff"><input type="submit" value="login"><input type="reset" value="cancel"></td>
</tr>
<tr>
<td colspan=2 align=center bordercolor="#ffffff">à¹à¸à¹à¸²à¹à¸à¹à¹à¸à¸à¸²à¸° account à¸à¸µà¹à¸à¸¶à¹à¸à¸à¹à¸à¸à¹à¸§à¸¢ lib à¹à¸à¹à¸²à¸à¸±à¹à¸</td>
</tr>
</table>
  <table width="307" border="0" align="center">
    <tr>
      <td scope="col"><div align="left"><a href="http://eoffice.lib.ku.ac.th/eoffice/eidea/" target="_blank"><img src="./images/eidea.png" border="0"></a></div></td>
    </tr>
    <tr>
      <td><div align="left">
        <p><span class="style3">à¸£à¹à¸§à¸¡à¸à¸±à¸à¹à¸ªà¸à¸à¸à¸§à¸²à¸¡à¸à¸´à¸à¹à¸«à¹à¸à¹à¸à¹à¸à¸µà¹ e- idea à¸à¸±à¸à¹à¸à¸§à¸à¸²à¸à¹à¸«à¸¡à¹à¹ à¸à¸´à¸¨à¸à¸²à¸à¸à¸­à¸à¸ªà¸³à¸à¸±à¸à¸«à¸­à¸ªà¸¡à¸¸à¸à¸à¸µà¹à¸à¸¸à¸à¸¥à¸²à¸à¸£à¸à¸¸à¸à¸à¹à¸²à¸à¸£à¹à¸§à¸¡à¸à¸±à¸à¹à¸ªà¸à¸à¸à¸§à¸²à¸¡à¸à¸´à¸à¹à¸¥à¸°à¸à¹à¸§à¸¢à¸à¸±à¸à¹à¸«à¸§à¸à¹à¸à¹ à¸à¹à¸²à¸ account nontri à¸à¸£à¸±à¸</span></p>
        
      </div></td>
    </tr>
    <tr>
      <td><center>
        <a href="http://eoffice.lib.ku.ac.th/rfid/login.php" target="_blank"><img src="http://eoffice.lib.ku.ac.th/eoffice/rfid.jpg" width="117" height="117" border="0"></a>
      </center></td>
    </tr>
    <tr>
      <td><center>
        <a href="http://eoffice.lib.ku.ac.th/rfid/login.php" target="_blank">à¸£à¸°à¸à¸à¹à¸à¹à¸à¸à¹à¸­à¸¡ rfid</a>
      </center></td>
    </tr>
    <!--<tr>
      <td><div align="left"><a href="http://eoffice.lib.ku.ac.th/wiki/doku.php" target="_blank"><img src="./images/wiki.png" alt="" border="0"></a></div></td>
    </tr>-->
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>