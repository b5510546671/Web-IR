<!doctype html public "-//w3c//dtd xhtml 1.0 strict//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>training history of planning</title>
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


//-->
</script>
<body>
<form action="check_trhistory.php" method="post" name="mychoices"  onsubmit="return validateinfo(this)">
<!-- banner -->
<center>
<table width="80%" border="0" bordercolor="#99ff00" >
  <tr>
  	<td >
	<div id="header" align="center"><img src="images/banner.jpg" name="banner" width="60%" height="60%" id="banner" /></div>
	</td>
  </tr>
  </table>
</center>
<table width="1010" border="0" bordercolor="#99ff00" align=center>
<tr><td colspan=4>	
  	<p>&nbsp;</p>
  	<table width="40%" border="0" align="center" bordercolor="#3333ff" bgcolor="#e1f0ff" >
      <tr>
        <td colspan="2" align="left" valign="middle" ><div align="left" valign=center>
          <div align="left"><img src="images/authority.jpg" width="20%" height="10%"/></div>
        </div></td>
      </tr>
      <tr>
        <td width="30%" class="style2" align="right">
			<strong> account&nbsp;&nbsp;&nbsp;:&nbsp;</strong></td>
        <td width="100%"><input type="text" name="account" size=30 /></td>
      </tr>
      <tr>
        <td class="style7"  align="right">
			<strong> password&nbsp;&nbsp;&nbsp;:&nbsp;</strong></td>
        <td width="100%"><input type="password" name="password" size=30 /></td>
      </tr>
	  <tr>
		<td colspan="2" align="center">&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="login" /></td>
	  </tr>
	  <tr>
		<td colspan="2" align="center">&nbsp;</td>
	  </tr>
    </table>
	
  </td></tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

