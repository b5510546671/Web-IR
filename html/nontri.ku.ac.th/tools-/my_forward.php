<!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>forward mail</title>
<meta http-equiv="pragma" content="no-cache">

<script language="javascript">

function chkvalid() {
   var v1 = document.userenter.account.value;
   var v2 = document.userenter.password.value;
   //var v3 = document.userenter.emailaddress.value;

  // var newstring = v3.match(/\b(^(\s+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\..{2,2}))$)\b/gi);
  // var inthere   = v3.match(/;/g);

   if (v1.length<=0)
      {
      alert("please enter your username");
      return false;
      }
  else if (v2.length<=0)
      {
      alert("please enter your password");
      return false;
      }
  //else if (v3.length<=0)
  //    {
 //     alert("please enter forward e-mail address");
  //    return false;
  //    }
 // else if (!newstring)
  //    {
   //   alert("invalid e-mail address!");
   //   return false;
   //   }
//  else if (inthere)
 //     {
 //     alert("invalid e-mail address !!!");
  //    return false;
   //   }
  else
    {
    return true;
    }
}

</script>

<link href="include/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="940" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="/tools/images/logo_ku.png" width="324" height="49" border="0" />
   </td>
  </tr>
  <tr>
    <td colspan="3" height="3"></td>
  </tr>
  <tr>
    <td colspan="3">
    <div id="nav"><ul>
    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/">home</a></li>
   <li class="page_item"><a href="https://accounts.ku.ac.th/private/login">change password</a></li>
    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/chkquota.php">check quota</a></li>
   <li class="page_item"><a href="https://nontri.ku.ac.th/tools/my_forward.php">forward</a></li>
   <!-- <li class="page_item"><a href="https://nontri.ku.ac.th/tools/my_vacation.php">vacation</a></li> -->
   <!-- <li class="page_item"><a href="https://nontri.ku.ac.th/tools/my_procmail.php">procmail</a></li> -->
<!--    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/blocklist_safelist.php">blocklist/safelist</a></li>
-->
    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/manual"  target='_blank' >manual</a></li>
    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/faq.php">faq</a></li>
	</ul>
    </div>
    </td>
  </tr>
  <tr>
     <td colspan="2" style="color: rgb(255, 153, 0);" >
     your ip address is 2406:3100:1018:2::3d30     </td>
    <td><div align="right" class="style7">version 3.3 jul-02-2011 @ office of computer services, kasetsart   university</div></td>
  </tr>
</table>
<br />
<h3 align="center"><span class="style1">forward mail</span></h3>
<table width="940" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <form method=post action="my_forward_process.php" name=userenter onsubmit="return chkvalid()">
      <table width="400" border=0 align="center">

<tr bgcolor="#c7fde8">
<td width="195" class=main><b>&nbsp;à¸à¸±à¸à¸à¸µà¸à¸¹à¹à¹à¸à¹  (username):</b></td>
<td width="235" class=main><input type=text name="account" size=15 maxlength=11></td>
</tr>

<tr bgcolor="#c7fde8">
<td class=main><b>&nbsp;à¸£à¸«à¸±à¸ªà¸à¹à¸²à¸ (password):</b></td>
<td class=main><input type=password name="password" size=15></td>
</tr>

<!--
<tr bgcolor="#c7fde8">
<td class=main><b>&nbsp;enable forward to e-mail address:</b></td>
<td class=main><input type=text name="emailaddress" size=30 maxlength=50"></td>
<input type="hidden" name="cmd" value="v">
</tr>
-->

<tr bgcolor=lightblue>
<td class=main colspan=2 align=center><input type=submit value="setup">
<input type=reset  value="cancel"></td>
</tr>
</table>
</form>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    <div id="sidebar"><div class="sidebar2">
    <h2>à¸à¸¸à¸à¸ªà¸¡à¸à¸±à¸à¸´</h2>
    <ul>
    	<li>forward mail à¹à¸à¹à¹à¸à¸à¸£à¸à¸µà¸à¸µà¹à¸à¹à¸­à¸à¸à¸²à¸£à¸ªà¹à¸à¸à¹à¸­à¸à¸à¸«à¸¡à¸²à¸¢à¹à¸à¹à¸²à¸à¸±à¹à¸à¸«à¸¡à¸à¸à¸­à¸à¸à¸à¹à¸­à¸     à¹à¸à¸¢à¸±à¸ e-mail address à¸­à¸·à¹à¸à¸à¸µà¹à¸à¹à¸­à¸à¸à¸²à¸£à¸£à¸±à¸à¸à¸à¸«à¸¡à¸²à¸¢à¹à¸à¸à¸à¸£à¸¸à¸à¸²à¸à¸£à¸§à¸à¸ªà¸­à¸ forward e-mail address à¹à¸«à¹à¸à¸¹à¸à¸à¹à¸­à¸ à¸¡à¸´à¸à¸à¸±à¹à¸à¸­à¸²à¸à¹à¸¡à¹à¹à¸à¹à¸£à¸±à¸à¸à¸à¸«à¸¡à¸²à¸¢à¹à¸à¹</li>
        <li>à¸à¸²à¸£à¸¢à¸à¹à¸¥à¸´à¸ forward mail à¹à¸«à¹à¹à¸¥à¸·à¸­à¸ <em><strong>trun on </strong></em>à¹à¸à¸£à¸²à¸¢à¸à¸²à¸£ procmail</li>
        <li>à¸à¸±à¸§à¸­à¸¢à¹à¸²à¸à¸à¸²à¸£à¹à¸à¹à¸à¸²à¸ à¸à¸µà¹à¸à¹à¸­à¸ <strong>forward to e-mail address:</strong> à¹à¸ªà¹ e-mail à¸à¸µà¹à¸à¹à¸­à¸à¸à¸²à¸£à¹à¸à¹à¸ abcd@hotmail.com</li>
        <li>à¸«à¸£à¸·à¸­ abcd@hotmail.com, efgh@gmail.com (à¸¡à¸µà¸«à¸¥à¸²à¸¢ e-mail à¹à¸«à¹à¸à¸²à¸¡à¸à¹à¸§à¸¢à¹à¸à¸£à¸·à¹à¸­à¸à¸«à¸¡à¸²à¸¢à¸à¸­à¸¡à¸¡à¹à¸²)</li>
        <li class="style6">à¸à¸¹à¹à¹à¸à¹à¸à¸²à¸à¸à¸à¸à¸´à¹à¸¡à¹à¸à¹à¸­à¸à¸à¸³à¸«à¸à¸ forward mail</li>
    </ul>
    </div></div>      </td>
  </tr>
  <tr>
    <td>    </td>
  </tr>
  <tr>
    <td><span class="alignleft">&nbsp;updated : jul 2, 2011</span></td>
  </tr>
</table>
<table width="940" border="0" align="center" >
  <tr>
    <td width="940" height="8" bgcolor="#afbec7"></td>
  </tr>
  <tr>
    <td bgcolor="#f7fafb"><div align="center">&copy;2009       à¸ªà¸³à¸à¸±à¸à¸à¸£à¸´à¸à¸²à¸£à¸à¸­à¸¡à¸à¸´à¸§à¹à¸à¸­à¸£à¹ à¸¡à¸«à¸²à¸§à¸´à¸à¸¢à¸²à¸¥à¸±à¸¢à¹à¸à¸©à¸à¸£à¸¨à¸²à¸ªà¸à¸£à¹ à¹à¸¥à¸à¸à¸µà¹ 50 à¸à¸à¸à¸à¸«à¸¥à¹à¸¢à¸à¸´à¸ à¹à¸à¸§à¸à¸¥à¸²à¸à¸¢à¸²à¸§ à¹à¸à¸à¸à¸à¸¸à¸à¸±à¸à¸£ à¸à¸£à¸¸à¸à¹à¸à¸à¸¯ 10900 <br />
    à¹à¸à¸£à¸¨à¸±à¸à¸à¹ 02-5620951-6 à¸à¹à¸­ 2501 helpdesk à¸à¹à¸­ 2541-3 à¹à¸à¸£à¸ªà¸²à¸£ 02-5620950 </div></td>
  </tr>
</table>
</body>
</html>

