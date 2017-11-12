
<style type="text/css">
body {
	
	padding: 0px 50px 150px;
	font-size: 13px;
	text-align: center;
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
<script src="spryassets/spryvalidationtextfield.js" type="text/javascript"></script>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
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
-->
</style>


</script>

<form action="check.php"  method="post"  name="form1">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" valign="top" bgcolor="#729e34" scope="col"><img src="./images/logo.png" hspace="0" vspace="0" border="0" /></td>
    </tr>
    <tr>
      <td width="100%" colspan="3" valign="top" scope="col"></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" scope="col">
      <ul>
      	<li><a href="login.php">เข้าสู่ระบบ</a></li>
    	<li><a href="choice1.html">ขั้นตอนการเสนอแนะทรัพยากรสารสนเทศ</a></li>
  		<li><a href="choice2.html">สถานะของการติดตามผล</a></li>
  		<li><a href="./breq3/reqrpt.php" target="_blank">ติดตามผลการเสนอซื้อ
    </a>
    <!--<ul><li>web development</li>
      <li>illustrations</li>
    </ul>-->
  </li>
 
</ul>
           <a href="http://www.lib.ku.ac.th/brequest/login_en.php"><img src="http://www.lib.ku.ac.th/web/media/mod_languages/images/en.gif" border="0" /></a></td>
    </tr>
    
    <tr>
      <td colspan="3" valign="top" scope="col">
        
        <table width="270" height="175" border="0" align="center" cellpadding="0" cellspacing="0" background="./images/logo_login.png">
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td style="font-size: small">&nbsp;</td>
            <td><span class="style1">ชื่อผู้ใช้</span></td>
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
            <td>รหัสผ่าน</td>
          </tr>
          <tr>
            <td style="font-size: small"><span style="font-size: 12px"><span class="red">*</span> รหัสนนทรี</span></td>
            <td><span id="sprytextfield2">
              <label for="pass"></label>
              <input name="pass" type="password" id="pass" size="11" />
            <span class="textfieldrequiredmsg">a value is required.</span></span></td>
          </tr>
          <tr>
            <td style="font-size: 12px">&nbsp;</td>
            <td><input type="submit" name="button" id="button" value="เข้าระบบ" /></td>
          </tr>
          <tr>
            <td colspan="2" class="small">&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;<span style="text-align: left"><br>
        <!--<img src="./images/060858.jpg" border="0">-->
         
      </span> </p></td>
    </tr>
    <tr><td></td><td width="82%"></td><td width="82%"></td></tr>
  </table>
  <center><!--<font color="red">ระหว่างวันที่ 1 ธ.ค. 2558 - 31 ม.ค. 2559 สำนักหอสมุดได้เปิดโอกาสให้คณะมีส่วนร่วมในการคัดเลือกหนังสืออิเล็กทรอนิกส์แบบออนไลน์ถึง  2 โครงการคือ โครงการ  ebook selection และโครงการ 4+4 ส่งเสริมการอ่าน 4 เล่ม 4 ชั้นปี เพื่อให้สามารถตอบสนองความต้องการของคณาจารย์และสอดคล้องกับหลักสูตรการเรียนการสอนของมหาวิทยาลัยเกษตรศาสตร์ ประกอบกับในปีงบประมาณ 2559 สำนักหอสมุดได้รับงบประมาณจัดซื้อทรัพยากรสารสนเทศที่จำกัดมาก ดังนั้นเพื่อให้การจัดซื้อหนังสือเป็นไปอย่างมีประสิทธิภาพสูงสุดภายใต้งบประมาณที่จำกัด สำนักหอสมุดจึงขอปิดรับการเสนอแนะหนังสือภาษาต่างประเทศ ผ่านช่องทางเสนอซื้อทรัพยากรใหม่ / ติดตามผล ตั้งแต่วันที่ 8 ธันวาคม 2558 สำนักหอสมุดต้องขออภัยในความไม่สะดวก</font>-->
  <!--<img src="./images/aou.png">--></center>
  <p align="center">
  <img src="./images/footer.jpg" border="0">
</form>
<script type="text/javascript">
<!--
var sprytextfield2 = new spry.widget.validationtextfield("sprytextfield2");
var sprytextfield1 = new spry.widget.validationtextfield("sprytextfield1");
//-->
</script>