<style type="text/css">
body {
	
	padding: 0px 50px 150px;
	font-size: 13px;
	text-align: left;
	background: #e3caa1;
	background-color: #ffffff;
}

ul {
  text-align: left;
  display: inline;
  margin: 0;
  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
ul li {
  font: bold 12px/18px sans-serif;
  display: inline-block;
  margin-right: -4px;
  position: relative;
  padding: 15px 20px;
  background: #9a9ae8;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
ul li:hover {
  background: #1637c4;
  color: #fff;
}
ul li ul {
  padding: 0;
  position: absolute;
  top: 48px;
  left: 0;
  width: 150px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  display: none;
  opacity: 0;
  visibility: hidden;
  -webkit-transiton: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -ms-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  -transition: opacity 0.2s;
}
ul li ul li { 
  background: #555; 
  display: block; 
  color: #fff;
  text-shadow: 0 -1px 0 #000;
}
ul li ul li:hover { background: #666; }
ul li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
}
</style>

<style type="text/css">
.font {
	font-size: small;
}
.font {
	color: #066;
}
</style>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ล็อคอินเข้าสู่ระบบ</title>
<style type="text/css">
body,td,th {
	font-family: tahoma, geneva, sans-serif;
	font-size: 12px;
	text-align: center;
	width: auto;
}
.small {
	font-size: 12px;
}
.small {
	font-size: 12px;
}
.small2 {font-family: tahoma, geneva, sans-serif}
.small {font-family: tahoma, geneva, sans-serif; color: #000; }
.red {
	color: #f00;
	font-weight: bold;
}
</style>
<style type="text/css">
.font {
	font-size: small;
}
.font {
	color: #066;
}
</style>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ล็อคอินเข้าสู่ระบบ</title>
<style type="text/css">
body,td,th {
	font-family: tahoma, geneva, sans-serif;
	font-size: 12px;
	text-align: center;
}
.small {
	font-size: 12px;
}
.small {
	font-size: 12px;
}
.small2 {font-family: tahoma, geneva, sans-serif}
.small {font-family: tahoma, geneva, sans-serif; color: #000; }
.red {
	color: #f00;
	font-weight: bold;
}
</style>
<script src="spryassets/spryvalidationtextfield.js" type="text/javascript"></script>
<link href="spryassets/spryvalidationtextfield.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #ffffff;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	color: #ffffff;
}
.style2 {color: #ffffff}
.style3 {color: #0000ff}
-->
</style>
<form action="check.php"  method="post"  name="form1">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="3" valign="top" bgcolor="#729e34" scope="col"><img src="./images/logo.png" /></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" scope="col"> <ul>
      	<li><a href="login_en.php">login</a></li>
    	<li><span class="style2"><a href="choice1-en.html">recommendation procedure</a></span></li>
  		<li><span class="style2"><a href="choice2-en.html">procedure status</a></span></li>
  		<li><a href="./breq3/reqrpt.php" target="_blank">following up the results of recommendation.</a>
    <!--<ul><li>web development</li>
      <li>illustrations</li>
    </ul>-->
  </li>
        <a href="http://www.lib.ku.ac.th/brequest/login.php"><img src="http://www.lib.ku.ac.th/web/media/mod_languages/images/th.gif" /></a>
      </ul>   </td>
    </tr>
    
    
    <tr>
      <td width="40%" valign="top" scope="col"><p align="left"><a href="choice1.html" target="_blank"><br />
       <!-- <img src="./images/b1.png" width="250" height="58" border="0" /><br />-->
     <!-- </a><a href="choice2.html" target="_blank"><img src="./images/b2.png" alt="" border="0" /></a>--></p>
      </td>
      <td width="50%" align="left" valign="top" scope="col"><table width="270" height="175" border="0" align="center" cellpadding="0" cellspacing="0" background="./images/logo_login.png">
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: small">&nbsp;</td>
          <td>user id</td>
        </tr>
        <tr>
          <td width="135" style="font-size: 12px; text-align: left; font-weight: bold; color: #f00;">&nbsp;</td>
          <td ><span id="sprytextfield1">
            <label for="user"></label>
            <input name="user" type="text" id="user" size="11" />
            <span class="textfieldrequiredmsg">a value is required.</span></span></td>
        </tr>
        <tr>
          <td style="font-size: small">&nbsp;</td>
          <td>password</td>
        </tr>
        <tr>
          <td style="font-size: small"><span style="font-size: 12px"><span class="red">*</span> account nontri</span></td>
          <td><span id="sprytextfield2">
            <label for="pass"></label>
            <input name="pass" type="password" id="pass" size="11" />
            <span class="textfieldrequiredmsg">a value is required.</span></span></td>
        </tr>
        <tr>
          <td style="font-size: 12px">&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="login" /></td>
        </tr>
        <tr>
          <td colspan="2" class="small">&nbsp;</td>
        </tr>

                  </table>
        </td>
      <td width="82%" align="left" valign="top" scope="col">&nbsp;</td>
    </tr>
    <tr><td></td><td></td><td></td></tr>
  </table>
  <p align="center"><br />
    <br />
    office of the university library, kasetsart university<br />
    p.o.box 1084 kasetsart,phahonyothin road, chatuchak, bankkok 10903, thailand<br />
     telephone (66-2)9428616,   (1477) fax(66-2)9405831,(66-2)9405834 <br />
    <br />
    best view <a href="http://windows.microsoft.com/th-th/internet-explorer/downloads/ie" target="_blank"><img src="http://www.lib.ku.ac.th/web/images/ie71.png" alt="" /></a>8+ <a href="http://www.mozilla.org/th/firefox/new/" target="_blank"><img src="http://www.lib.ku.ac.th/web/images/firefox.png" alt="" /></a> <a href="https://www.google.com/chrome?hl=th" target="_blank"><img src="http://www.lib.ku.ac.th/web/images/chome.png" alt="" /></a>  <a href="http://kulc.lib.ku.ac.th/blog/" target="_blank"><img src="http://www.lib.ku.ac.th/web/images/banners/blog.png" alt="" height="40" /></a> <a href="https://www.facebook.com/kulibpr" target="_blank"><img src="http://www.lib.ku.ac.th/web/images/banners/facebook_icon.png" alt="" /></a><br />
    <br />
    <br />
  </p>
</form>
<div align="left"></div>
<script type="text/javascript">
<!--
var sprytextfield2 = new spry.widget.validationtextfield("sprytextfield2");
var sprytextfield1 = new spry.widget.validationtextfield("sprytextfield1");
//-->
</script>
