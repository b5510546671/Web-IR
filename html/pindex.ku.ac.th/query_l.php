<html>
<head>
<title>publications index</title>
<style type=text/css>body {
	padding-right: 0px; padding-left: 0px; padding-bottom: 0px; margin: 0px; padding-top: 0px
}
a:link {
	color: #000080; text-decoration: none
}
a:visited {
	color: #000080; text-decoration: none
}
a:active {
	color: #0099ff; text-decoration: underline
}
a:hover {
	color: #0099ff; text-decoration: underline
}
.thai {
	font-size: 9px; color: #194e84; font-family: "ms sans serif"
}
</style>
<script language="javascript">
function chkvalid() {
   var v1 = document.userenter.author.value;
   var v2 = document.userenter.title.value;
   var v3 = document.userenter.other_info.value;
   var v4 = document.userenter.month.value;
   var v5 = document.userenter.year.value;


   if ((v1.length==0) && (v2.length==0) && (v3.length==0) && (v4.length==0) && (v5.length==0))
      {
      alert("กรุณาป้อนข้อมูลอย่างน้อย 1 รายการ");
      return false;
      }
    return true;
      }
</script>






<body topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 background="bg.jpg" nosave>
    <img src="publogo.gif" border=0 usemap="#publogo"><br>
    <map name="publogo">
    <area shape="rect" coords="7,5,48,20" href="http://pindex.ku.ac.th/index.htm">
    <area shape="rect" coords="51,5,87,20" href="http://pindex.ku.ac.th/add.htm">
    <area shape="rect" coords="89,5,144,20" href="http://pindex.ku.ac.th/browse.htm">
    <area shape="rect" coords="144,5,199,20" href="http://pindex.ku.ac.th/index.htm">
    <area shape="rect" coords="201,5,263,20" href="http://pindex.ku.ac.th/stat.htm">
    <area shape="rect" coords="266,5,310,20" href="http://pindex.ku.ac.th/faq.htm">
    <area shape="rect" coords="311,5,352,20" href="http://pindex.ku.ac.th/help.htm">
    <area shape="rect" coords="354,5,404,20" href="http://pindex.ku.ac.th/contact.htm">
    </map>

<table border="0" cellspacing="0" cellpadding="0">
  <tr valign=top>
      <td><img src="whitespace.gif" width=15></td>
      <td align=left width="150"><br>
      <font size=-1>
      <a href="index.htm">หน้าแรก</a><br>
      <a href="logon.php">บันทึก - แก้ไข ข้อมูล</a><br>
      <a href="browse.htm">แสดงข้อมูล</a><br>
      <a href="index.htm">ค้นหาข้อมูล</a><br>
      <a href="stat.htm">สถิติฐานข้อมูล</a><br>
      <a href="faq.htm">ถาม-ตอบ</a><br>
      <a href="help.htm">ช่วยเหลือ</a><br>
      <a href="about.htm">เกี่ยวกับโครงการ</a><br>
      </font>
      </td> 
      <td>

<center><table width=100% border=0><tr><form action="display_l.php" method="post" name=userenter onsubmit="return chkvalid()"><input type="hidden" name=selpage value=1><td colspan=2><font color=#001090 size=-1><b>ค้นหาข้อมูลงานวิจัยแบบพิเศษ</b></font></td></tr><tr><td><font color=#001090 size=-1><b>ชื่อผู้วิจัย</b></font></td> <td><input type="text" size="60" name="author"></td></tr><tr><td><font color=#001090 size=-1><b>ชื่องานตีพิมพ์</b></font></td><td><input type="text" size="70" name="title"></td></tr><tr><td><font color=#001090 size=-1><b>คำสำคัญ</b></font></td><td><textarea rows="2" cols="50" name="other_info"></textarea></td></tr><tr><td><font color=#001090 size=-1><b>เดือนที่ตีพิมพ์</b></font></td><td><input type="text" size="15" name="month"></td></tr><tr><td><font color=#001090 size=-1><b>ปี ค.ศ./พ.ศ. ที่ตีพิมพ์<b></font></td><td><input type="text" size="4" name="year" maxlength="4"></td></tr><tr><td><font size=-1>&nbsp;</td><td><input type="submit" value="ค้นหา"><input type="reset" value="ยกเลิก"></td></tr></table></center></form>
  </td> 
  </tr>
  </table>

<p>

<table width=710  border="0" cellspacing="0" cellpadding="0">
  <tr> 
   <td align=left width="155"></td>
   <td align=right>
   <hr noshade>
   <font size=-1>อีเมล : <a href="mailto:pindex@ku.ac.th">pindex@ku.ac.th</a></font><br>
   </td> 
  </tr>
 </table>

</body>
</html>
