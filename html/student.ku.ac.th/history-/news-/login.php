<head>
<title> แจ้งข่าว</title>
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<link href="./style.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!--
function mm_jumpmenu(targ,selobj,restore){ //v3.0
  eval(targ+".location='"+selobj.options[selobj.selectedindex].value+"'");
  if (restore) selobj.selectedindex=0;
}

function r_confirm(num)
{
	if(num<10) num = "000"+num;
	else if(num<100) num = "00"+num;
	else if(num<1000) num = "0"+num;

	var x=window.confirm("ต้องการลบคำตอบจากผู้ตอบคนที่ "+num+" ใช่หรือไม่");
	return (x);
}
//-->
</script>
</head>

<body style="padding:0;margin:4; background-color: white;">
<table cellpadding="0" cellspacing="0" border="0" align="center">
  <tr>
	<td width="10" nowrap="nowrap" class="lefttd">
	</td>
	<td align="center">
	<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top"  width="758" height="143">	
		 <!-- <h1 align=center>student history</h1> -->
		 <img src="../image/header.jpg" width="758" height="143" border="0" alt="">
		<!-- 
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="include/swflash.cab#version=6,0,29,0" width="758" height="143">
		<param name="movie" value="1.swf">
		<param name="quality" value="high">
		<embed src="1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="153"></embed></object>
		 -->
		 </td>
	</tr>
	</table>
	<table border="1" bordercolor="#ccccff"  cellspacing="1" cellpadding="0" background="../image/barmenu.gif" width="100%" height="30" frame="void">
	<tr>
			<td valign="middle" width="110" align="center"><a href="../index.php" class="txt1" style="text-decoration:none;text-align: center; "><b>หน้าหลัก</b></a></td>
			<td valign="middle" width="110" align="center"><a href="" class="txt1" style="text-decoration:none;"><b></b></a></td>
			<td valign="middle" width="110" align="center"><a href="" class="txt1" style="text-decoration:none;"><b></b></a></td>    
			<td valign="middle" width="110" align="center"><a href="" class="txt1" style="text-decoration:none;"><b></b></a></td>
			<td valign="middle" width="110" align="center"><a href="" class="txt1" style="text-decoration:none;"><b></b></a></td>   
		</tr>
	</table><br>
  <table width="300" border="0" cellspacing="0" cellpadding="0" bgcolor="686898">
  <form method=post action="webboard.php" name="login_form" onsubmit="return check()">
    <tr>
      <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top" width="4%"><img src="pic/topleft.gif" width="14" height="14"></td>
            <td width="92%">
              <table width="100%" border="0" cellspacing="0" cellpadding="3">
                <tr align="center"> 
                  <td><b><font color="#ffffff" class=size3>login เข้าระบบ เพื่อลบข่าว</font></b></td>
                </tr>
              </table>
            </td>
            <td valign="top" align="right" width="4%"><img src="pic/topright.gif" width="14" height="14"></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr> 
      <td> 
        <table border=0 cellpadding=2 cellspacing=1 width="314" align="center">
            <tr bgcolor="#e5e5ff"> 
              <td> 
                <table border=0 width="100%" cellpadding="3" cellspacing="0">
                  <tr> 
                    <td width="113" align="right"><b><font color="686898">username 
                      :</font></b></td>
                    <td width="239"> 
                      <input size=26 type=text name="user_wb" maxlength=30>
                    </td>
                  </tr>
                  <tr> 
                    <td align="right"><b><font color="686898">password :</font></b></td>
                    <td> 
                      <input size=26 type=password name="passwd_wb" maxlength=30>
                    </td>
                  </tr>
                </table>
             
        </table>
      </td>
    </tr>
    <tr> 
      <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td valign="bottom" width="4%"><img src="pic/bottomleft.gif" width="14" height="14"></td>
            <td width="92%"> 
              <table width="100%" border="0" cellspacing="0" cellpadding="3">
                <tr align="center"> 
                  <td><b>
                      <script language="javascript">
function check()
{
      var v1 = document.login_form.user_wb.value;
      var v2 = document.login_form.passwd_wb.value;

        if (v1.length==0)
           {
           alert("กรุณาป้อน username ด้วยครับ");
           document.login_form.user_wb.focus();           
           return false;
           }
        else if (v2.length==0)
           {
           alert("กรุณาป้อน password ด้วยครับ") ;
           document.login_form.passwd_wb.focus();           
           return false;
           }
        else
           return true;
}
</script>
                    <input type=submit value='เข้าระบบ' name="submit" class=button>
                    <input type=reset value='เคลียร์' name="reset" class=button>
                    </b></td>
                </tr>
              </table>
            </td>
            <td valign="bottom" align="right" width="4%"><img src="pic/bottomright.gif" width="14" height="14"></td>
          </tr>
        </table>
      </td>
    </tr>
   </form>
  </table>
  <br>
[ <a href='./webboard.php'>กลับไปเว็บข่าว</a> ]<br><br>

</div>


	<br><br><br>
	<table width="100%" border="0" cellspacing="0" cellpadding="3" bgcolor="#333333">
	  <tr> 
	    <td><font color="#ffffff"></font></td>
	  </tr>
	</table>
	<table border="1" bordercolor="#ccccff"  cellspacing="1" cellpadding="0" background="../image/barmenu.gif" width="100%" height="30" frame="void">
	<tr>
			<td valign="middle" width="110" align="center"><a href="../index.php" class="txt1" style="text-decoration:none;text-align: center; "><b>หน้าหลัก</b></a></td>
			<td valign="middle" width="110" align="center"><a href="" class="txt1" style="text-decoration:none;"><b></b></a></td>
			<td valign="middle" width="110" align="center"><a href="" class="txt1" style="text-decoration:none;"><b></b></a></td>    
			<td valign="middle" width="110" align="center"><a href="" class="txt1" style="text-decoration:none;"><b></b></a></td>
			<td valign="middle" width="110" align="center"><a href="" class="txt1" style="text-decoration:none;"><b></b></a></td>   
		</tr>
	</table> 
	<table border="0" cellspacing="1" cellpadding="0" width="100%">
	<tr>
		<td height="54" background="../image/footer.jpg" align="center" style="color:#000;">สำนักทะเบียนและประมวลผล 50 ถนนพหลโยธิน แขวงลาดยาว เขตจตุจักร กรุงเทพฯ 10900
		<br>
		โทร -2942-8059 - 62, 0-2942-8293 - 96 และ 0-2561-4636-7 สายใน 1365, 1369, 1760 - 1769 
		โทรสาร 0-2942-8020
		<br><a href="../index.php" style="text-decoration:none;"><span  style="color:#fff;">https://www.student.ku.ac.th/history/ &copy;2011</span></a>
		</td>
	</tr>
	</table> 

	</td>
	<td width="10" nowrap="nowrap" class="righttd"></td>
  </tr>
</table>
</body>
</html>
