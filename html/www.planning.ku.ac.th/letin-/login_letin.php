<!doctype html public "-//w3c//dtd xhtml 1.0 strict//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>planning let in</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<script language="javascript">

<!--

       function validateinfo (theform)
       {
                if (theform.account.value =="")
                {
                  alert ("กรุณาใส่ \"account\" ");
                  theform.account.focus();
                  return (false);
                 }
                if (theform.password.value =="")
                {
                  alert ("กรุณาใส่  \"password\" ");
                  theform.password.focus();
                  return (false);
                 }
                 return (true);
      }   

      function setfromaction ( a_pagetogo ) 
	  {
          document.flogin_unit.action = escape(a_pagetogo) ;
          document.flogin_unit.submit() ;
      }
//-->
</script>
<body>
<form action="check_letin.php" method="post" name="mychoices"  onsubmit="return validateinfo(this)">
<center><br />
<table width="100%" border="0" bordercolor="#99ff00" >
  <tr>
  	<td >
	<div id="header" align="center"><img src="images/banner.jpg" name="banner" width="100%" height="80" id="banner" /></div>
	</td>
  </tr>
  </table>
</center>
<table width="1010" border="0" bordercolor="#99ff00" align=center>
<tr><td colspan=4>	
  	<p>&nbsp;</p>
  	<table width="40%" border="1" align="center" bordercolor="#3333ff" bgcolor="#ffffff" >
      <tr>
        <td colspan="2" align="left" valign="middle" ><div align="left" valign=center>
          <div align="center"><img src="images/authority.jpg" /></div>
        </div></td>
      </tr>
      <tr>
        <td width="100%" class="style2" align="right">
			<strong> account&nbsp;&nbsp;&nbsp;:&nbsp;</strong></td>
        <td width="100%"><input type="text" name="account" size=30 /></td>
      </tr>
      <tr>
        <td class="style7"  align="right">
			<strong> password&nbsp;&nbsp;&nbsp;:&nbsp;</strong></td>
        <td width="100%"><input type="password" name="password" size=30 /></td>
      </tr>
    </table>
	<br />
	<center>
	  <input type="submit" name="submit" value="login" />
	</center>
  	<br />
  	<br />
  </td></tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

