<!doctype html public "-//w3c//dtd xhtml 1.0 strict//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ku's information drill down</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<style type="text/css">
<!--
  div#form-login {
width:400px; margin:0 auto;
padding:20px; background-color:#009900;
border-radius:15px; -moz-border-radius:15px; 
-webkit-border-radius:15px;border:1px solid #666;
text-align:center;font-size: small;
font-family: "lucida grande","lucida sans unicode", tahoma, sans-serif;
letter-spacing: .01em;
color:#009900;
}
div#form-login form { 
margin:0;padding:0;border-radius:15px; -moz-border-radius:15px; 
-webkit-border-radius:15px;border:1px solid #666;
background-color:#e7fcd8;
-webkit-box-shadow: rgba(0,0,0,0.25) 5px 5px 10px;
-moz-box-shadow: rgba(0,0,0,0.25) 5px 5px 10px;
box-shadow: rgba(0,0,0,0.25) 5px 5px 10px;
}
div#form-login form label { float:left; width:120px;}
div#form-login form .txt { padding:3px;margin:3px;}
div#form-login h1 { font:20px "trebuchet ms"; border-bottom:1px dotted #009900;padding:5px;margin:10px;}
div#tombol { clear:both;padding:10px;}
.button{ box-shadow: rgba(0,0,0,0.1) 0px 1px 1px;padding:3px 20px; }
.button:hover,.button:focus{
color: #000; -webkit-box-shadow: rgba(0,0,0,0.25) 1px 1px 3px; 
-moz-box-shadow: rgba(0,0,0,0.25) 1px 1px 3px; box-shadow: rgba(0,0,0,0.25) 1px 1px 3px;
}
</style>

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
<body >

<center>
<table width="100%" border="0" bordercolor="#99ff00" >
  <tr>
  	<td >
	<div id="header" align="center"><img src="images/banner.jpg" name="banner" width="100%" height="80" id="banner" /></div>
	</td>
  </tr>
  </table>
  <br /><br /><br /><br /><br />
 <div id="form-login">
<form action="check_infor.php" method="post" name="mychoices"  onsubmit="return validateinfo(this)">

<h1>login member</h1>
  <label>account </label> : <input name="account" type="text" id="account" size="20" maxlength="20" class="txt" /><br />
  <label>password </label> : <input name="password" type="password" id="password" size="20" maxlength="20" class="txt" />
  <div id="tombol"><input name="btnlogin" type="submit" value="login" class="button" /><input name="btnlogin" type="reset" value="reset" class="button" /></div>


</center>

  </div>
</form>
<br /><br />
<p align="center">&nbsp;</p>
    <p align="center"><strong>&copy; พัฒนาโดย หน่วยศูนย์ข้อมูล</strong></p>
    <p align="center"><strong>งานวิจัยสถาบันและสารสนเทศ กองแผนงาน  </strong></p>
</body>
</html>

