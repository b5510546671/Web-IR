<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>แบบตอบรับเข้าร่วมงาน : นิสิต</title>
<style type="text/css">
@import url("webfonts/dtacform/stylesheet.css");
@import url("webfonts/raphaelicons/stylesheet.css");
body,td,th {
	font-family: dtacform;
	font-size: 16px;
	font-weight: bold;
}
body {
	margin-top: 0px;
}
</style>
</head>

<body>
<form action="student_insert.php" method="post">
  <table width="800" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <th colspan="6" scope="col"><a href="meeting.php"><img src="images/bannerlink2.png" alt="" width="674" height="145"></a></th>
    </tr>
    <tr>
      <td colspan="6" align="center"><p><span class="frm_general">วันสถานประกอบการโครงการสหกิจศึกษาพบผู้บริหาร มหาวิทยาลัยเกษตรศาสตร์ ครั้งที่ ๑๕</span></p></td>
    </tr>
    <tr>
      <td colspan="6" align="center"><span class="frm_general">วันศุกร์ที่ ๑ กันยายน ๒๕๖๐</span></td>
    </tr>
    <tr>
      <td colspan="6" align="center"><span class="frm_general">ณ&nbsp; ห้องประชุมกำพล อดุลวิทย์ ชั้น๒ อาคารสารนิเทศ ๕๐ปี มหาวิทยาลัยเกษตรศาสตร์ </span></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6"><span class="frm_general"><strong>แบบตอบรับนิสิต</strong></span></td>
    </tr>
    <tr>
      <td colspan="6"><img src="images/linetopic.png" alt="" /></td>
    </tr>
    <tr>
      <td width="3%">&nbsp;</td>
      <td width="17%">คำนำหน้าชื่อ </td>
      <td colspan="4">:
        <select name="s_title" size="1" id="s_title">
          <option>เลือก</option>
          <option>นาย</option>
          <option>นางสาว</option>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>ชื่อ</td>
      <td colspan="4">:
        <input name="s_fname" size="30" id="name3"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>นามสกุล</td>
      <td colspan="4">:
        <input name="s_lname" id="s_lname" size="40"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>รหัสประจำตัวนิสิต</td>
      <td colspan="4">: 
      <input name="student_id" id="student_id" size="30" maxlength="10"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>ภาควิชา</td>
      <td colspan="4">:      
      <input name="s_major" size="30" id="s_major"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>คณะ</td>
      <td colspan="4">: 
      <input name="s_fac" id="s_fac" size="30"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>วิทยาเขต</td>
      <td colspan="4"><label for="camp"></label>
      :      
        <label for="camp_id"></label>
        <select name="camp_id" id="camp_id">
                    <option value="1">บางเขน</option>
                    <option value="2">กำแพงแสน</option>
                    <option value="3">ศรีราชา</option>
                    <option value="4">สกลนคร</option>
                </select></td>
    </tr>
    <tr>
      <td>      
      
      <!--close<td colspan="6"><hr style="border-bottom-style:dashed" color="#009966">
      

 --></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="5">เข้าร่วมโครงการสหกิจศีกษาระหว่างวันที่:
        <input type="text" name="s_last" id="s_last">
      (ตัวอย่าง : 13 ส.ค. 2558)</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>รุ่นที่</td>
      <td colspan="4">: 
      <input name="s_gen" type="text" id="s_gen" size="2" maxlength="2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>เบอร์โทรศัพท์</td>
      <td colspan="4">  : 
      <input name="s_tel" id="s_tel" size="15" maxlength="10">
(10หลัก ไม่ต้องเว้นวรรค)</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>อีเมล</td>
      <td colspan="4">: 
        <input name="s_email" id="s_email" size="30"></td>
    </tr>
    <tr>
      <td height="26" colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" bgcolor="#b8edc8" ><strong>ท่านสามารถเข้าร่วมกิจกรรมครั้งนี้ได้หรือไม่ :</strong></td>
      <td colspan="2" bgcolor="#b8edc8">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4"><input type="radio" value="y" checked name="s_join">
        สามารถเข้าร่วมงานได้ <br>
  <input type="radio" value="n" name="s_join">
      ไม่สามารถเข้าร่วมงานได้</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right">&nbsp;</td>
      <td width="16%"><input type="submit" value="ส่งแบบตอบรับ"></td>
      <td width="24%"><input type="reset" value="ยกเลิก"></td>
      <td width="32%">&nbsp;</td>
      <td width="8%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6"><br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
<footer><style type="text/css">
@import url("webfonts/dtacform/stylesheet.css");

body {
	margin-bottom: 0px;
	margin-left: 0px;
	margin-top: 0px;
}
body,td,th {
	font-family: dtacform;
	color: #000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #060;
}
a:active {
	text-decoration: none;
}
</style>
<link href="css/raphaelicons.css" rel="stylesheet" type="text/css">
<body>

    <td align="left" bgcolor="#e1e1e1">
<table width="100%" border="0" cellpadding="15px">
        <tr>
          <th height="65" bgcolor="#422918" class="footermeetscoop_r" cope="col"><p>หมายเหตุ : กรุณาส่งใบตอบรับ ภายในวันศุกร์ที่ ๒๕ สิงหาคม ๒๕๖๐  <br>
          เพื่อฝ่ายดำเนินการจะได้จัดเตรียมสถานที่และอาหาร<br>
          ได้อย่างครบถ้วนสมบูรณ์ต่อไป ขอขอบพระคุณมา ณ โอกาสนี้ </p></th>
 
  </tr>
</table></footer>
</html>
