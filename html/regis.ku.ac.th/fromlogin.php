
<html>
<head>
<title>ระบบสารสนเทศนิสิต สำหรับบุคคลากร</title>
<meta http-equiv="content-type" content="text/html; charset=windows-874">

<!--
<link rel="shortcut icon" href="../exdesignz.ico">
<link href="cpcmns/css/webtemp.css" type="text/css" rel="stylesheet">

<style type="text/css" media="screen">@import "topnavtemplate.css"/*tpa=http://www.ex-designz.net/template/topnavtemplate.css*//*tpa=http://www.ex-designz.net/template/topnavtemplate.css*/;</style>
<script src="cpcmns/js/openwindow.js"  type="text/javascript"></script>
<script src="cpcmns/js/ratingtemplate.js"  type="text/javascript"></script>
<script src="cpcmns/js/optionpopjs.js"  type="text/javascript"></script>
<script src="cpcmns/js/tooltipztempate.js"  type="text/javascript"></script>
<script type="text/javascript">
    var gb_root_dir = "cpcmns/";
</script>
<script type="text/javascript" src="cpcmns/js/ajs.js" ></script>
<script type="text/javascript" src="cpcmns/js/ajs_fx.js"></script>
<script type="text/javascript" src="cpcmns/js/gb_scripts.js" ></script>
<link href="cpcmns/css/gb_styles.css"  rel="stylesheet" type="text/css" />
<!--[if gte ie 5]>
<style>
#leftmnav ul a {height: 1em;}
#leftmnav li {float: left; clear: both; width: 100%;}
.divdis {margin-top: 12px; margin-bottom: 12px;}
.divimg {margin-right: 3px; margin-top: 0px; margin-bottom: 18px;}
.divimghover {margin-right: 3px; margin-top: 0px; margin-bottom: 18px;}
h3, h3 a:hover {margin-bottom: 1px;}
.constar {position: relative; margin: 0;}
</style>
<![endif]-->


<script language="javascript">
<!--
function mm_reloadpage(init) {  //reloads the window if nav4 resized
  if (init==true) with (navigator) {if ((appname=="netscape")&&(parseint(appversion)==4)) {
    document.mm_pgw=innerwidth; document.mm_pgh=innerheight; onresize=mm_reloadpage; }}
  else if (innerwidth!=document.mm_pgw || innerheight!=document.mm_pgh) location.reload();
}
mm_reloadpage(true);
// -->
</script>



<!-- begin add by pichaya : october 8,2008 -->
<script type="text/javascript">
<!--
var currenttime = 'august 28, 2017 16:10:24' //php method of getting server date
var montharray=new array("january","february","march","april","may","june","july","august","september",
"october","november","december")
var serverdate=new date(currenttime)

function padlength(what){
var output=(what.tostring().length==1)? "0"+what : what
return output
}

function displaytime(){
serverdate.setseconds(serverdate.getseconds()+1)
var datestring=montharray[serverdate.getmonth()]+" "+padlength(serverdate.getdate())+", "+serverdate.getfullyear()
var timestring=padlength(serverdate.gethours())+":"+padlength(serverdate.getminutes())+":"+padlength(serverdate.getseconds())
document.getelementbyid("servertime").innerhtml=datestring+" "+timestring
}


//--- for client time
function showtime() {
    today=new date();
    var theday=today.getdate();
    if (theday<10)
    var theday="0"+theday;
    var themonth=montharray[today.getmonth()];
	var theyear=today.getyear();
	
    var thehours=today.gethours();
    var theminutes=today.getminutes();
    if (theminutes<10)
    var theminutes="0"+theminutes;
    var theseconds=today.getseconds();
    if (theseconds<10)
    var theseconds="0"+theseconds;
    var thetimenow= themonth+ " " + theday + ", " + theyear + " " + thehours+":"+theminutes+":"+theseconds;
    document.getelementbyid('texttime').innerhtml=thetimenow;
}


window.onload=function(){
document.fromlogin.username.focus();
setinterval("displaytime()", 1000);
setinterval("showtime()",1000);
}
-->
</script>
<!-- end add by pichaya : october 8,2008 -->


</head>


<script language="javascript">
<!--

       function validateinfo (theform)
       {
                if (theform.username.value =="")
                {
                  alert ("กรุณาป้อนข้อมูลที่คอลัมน์ \"account\" ");
                  theform.username .focus();
                  return (false);
                 }

				var account = theform.username.value ;
//				alert(account);
				var first = account.substring(0,1);
//				alert(first);
				var firstupper = first.touppercase();
//				alert(firstupper);
				var number =  account.substring(1);
//				alert(number);
                if ( (firstupper=="b" || firstupper=="g") && number > 0 )
                {
//                  alert ("อนุญาตเฉพาะเจ้าหน้าที่เท่านั้น ");
                  alert ("อนุญาตเฉพาะบุคคลากรเท่านั้น ");
                  theform.username .focus();
                  return (false);
                 }


                if (theform.password.value =="")
                {
                  alert ("กรุณาป้อนข้อมูลที่คอลัมน์ \"password\" ");
                  theform.password.focus();
                  return (false);
                 }
                 return (true);
      }   
//-->
</script>

<!-- body  onload="document.fromlogin.username.focus();" bgcolor="#ffffff" -->
<body  bgcolor="#ffffff">

<div id="layer1" style="position:absolute; left:570px; top:23px; width:300px; height:135px; z-index:1">
</div>
<div id="layer99" style="position:absolute;  left:250px; width:500px"> 
<center><b><font color = 'green' size =+2>ระบบสารสนเทศนิสิต สำหรับบุคคลากร</font></b></center>
</div>

<!--div id="layer1" style="position:absolute; left:260px; top:23px; width:300px; height:135px; z-index:1" !--> 
<div id="layer1" style="position:absolute; left:350px; top:70px; width:300px; height:135px; z-index:1"> 
  <form  action="login.php" method="post" target="_top" onsubmit="return validateinfo(this)" name="fromlogin">
    <table width="100%" border="1" cellpadding="0" cellspacing="0" style='font-family:ms sans serif;font-size:12pt;' >

    <tr bgcolor="#3366cc"> 
        <td colspan=2 align=center bgcolor="#339933"><font face="ms sans serif"  color="#ffffff"><b>login 
          เข้าระบบ</b></font></td>
    </tr>
    <tr> 
      <td> 
          <table width="100%" border="0" cellpadding="0" cellspacing="0" style='font-family:ms sans serif;font-size:12pt;'>
            <tr> 
              <td><font color="#000000" face="ms sans serif" >&nbsp;account</font></td>
              <td> 
                <input name="username" size=15 maxlength=11>
              </td>
          </tr>
            <tr> 
              <td><font color="#000000" face="ms sans serif" >&nbsp;password</font></td>
              <td> 
                <input type=password name="password" size="15">
            </td>
          </tr>
            <tr> 
              <td><font color="#000000" face="ms sans serif" >&nbsp;วิทยาเขต</font></td>
              <td> 
			  <select name="campus" width=100>
			  <option value='b' selected >บางเขน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			  <option value='k'>กำแพงแสน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			  </select>
            </td>
          </tr>
            <tr > 
              <td colspan=2 align=center > 
                <div align="center"> 
                  <input type="image" src="botton/btlogin.gif" border="0" name="submit">
              </div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  </form>


<marquee scrolldelay="150" direction="left" ><font color = "red">login please.... </font></marquee>
</div>
<div id="layer2" style="position:absolute; left:100px; top:250px; width:800px; height:60px; z-index:2"> 
  <div align=center> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  style='font-family:tahoma;font-size:10pt;'>
      <tr> 
        <td bgcolor="#ffffff" align='center'> 
			<font face="ms sans serif" >การ login เข้าระบบ ใช้ account   (รหัสบัญชี) และ password (รหัสผ่าน) ของเครือข่ายนนทรี </font> <br>
            <font face="ms sans serif" >สำหรับอาจารย์ที่ปรึกษาท่านใด ที่ไม่มีรายชื่อนิสิตที่อยู่ในการดูแล   ให้แจ้งรหัสบัญชี </font><br>
           <font face="ms sans serif" >และรหัสอาจารย์ที่ปรึกษาได้ที่<a href="mailto:nual@ku.ac.th">ผู้ดูแลระบบ</a> 
       </font>  </td>
      </tr>
    </table>
  </div>
</div>
<div id="layer3" style="position:absolute; left:100px; top:300px; width:800px; height:60px; z-index:3"> 
  <div align=center> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  style='font-family:tahoma;font-size:10pt;'>
      <tr> 
 <td align=center> 

<!--a href="http://www.registrar.ku.ac.th/calender/body/academic_schedule/academic%20calendar51.htm#second"  
     คลิกดูรายละเอียดประกาศสำนักทะเบียนฯ-->
	 <hr>
	<table border= 0 width=100%  style='font-family:ms sans serif;font-size:11pt;'>
	 	 <tr>
<!--    ปิดประกาศ
		 <td  valign='top'>
<!-- ---------------------------------------------------= ประกาศ =--------------------------------------------------------------- !-->	 
				<table border=2 style='font-family:ms sans serif;font-size:10pt;' >
                     <!--tr><td width="424" align=center><font color="red" face="ms sans serif" size="2"> 
                                 เนื่องจากงระบบฯ มีปัญหา ทำให้การเข้าสู่ระบบการลงทะเบียนล่าช้า ทำให้นิสิตไม่สามารถลงทะเบียนได้ตามกำหนด ดังนั้น สำนักทะเบียนฯ จึงได้ขยายเวลาลงทะเบียน  ดังนี้ 
								 <table border='1'>
								 <tr><th> เวลาเดิม</th><th>เวลาใหม่</th></tr>
								 <tr><td> 08:30 - 09:30 </td><td> 13:15  - 14:00 </td></tr>
								 <tr><td> 09:00 - 10:00 </td><td> 13:15  - 14:00 </td></tr>
								 <tr><td> 09:30 - 10:30 </td><td> 13:15  - 14:00 </td></tr>
								 <tr><td> 10:00 - 11:00 </td><td> 13:15  - 14:00 </td></tr>
								 <tr><td> 10:30 - 11:30 </td><td> 13:15  - 14:00 </td></tr>
								 <tr><td> 11:00 - 12:00 </td><td> 13:15  - 14:00 </td></tr>
								 <tr><td> 11:30 - 12:30 </td><td> 13:45  - 14:30 </td></tr>
								 <tr><td> 12:00 - 13:00 </td><td> 13:45  - 14:30 </td></tr>
								 <tr><td> 12:30 - 13:30 </td><td> 13:45  - 14:30 </td></tr>
								 </table>
                                 </td>  
                           </tr>   - ->
					 <tr><td width="465" align="left"><font  color="blue" > <b> ขอปิดให้บริการชั่วคราว !!!!</b></font><br>
								 <dd>เนื่องจากสำนักบริการคอมพิวเตอร์ จะดำเนินการเปลี่ยนเครื่องให้บริการฐานข้อมูลจากเครื่องเดิมที่จะหมดอายุการใช้งานเป็นเครื่องใหม่ที่สามารถรองรับงานได้มากขึ้น  จึงมีความจำเป็นต้องปิดให้บริการชั่วคราว
						   และ  <font  color='red'> ในวันเสาร์ที่ 10 กันยายน 2554 ตั้งแต่เวลา 09:00 เป็นต้นไป</font> 
								 <dd> จึงเรียนมาเพื่อโปรดทราบ และขออภัยในความไม่สะดวก
                                 </td> 
                      </tr>   
					 <!- -tr><td width="465" align="center"><font  color="blue" > 
                                  ขยายเวลาลงทะเบียน สำหรับนิสิตรหัส 52 ที่กำหนดลงทะเบียนวันที่ 18/03/2553 เวลาเดิม 8.30 - 9.30  เปลี่ยนเป็น<b> 9.00 น. - 10.00 น.</b> </font>
                                 </td> 
                     </tr !-->
					 <!--tr><td width="424" align=center><font  color="blue" face="ms sans serif"> 
                                กำหนดการขอถอนบางรายวิชา (ผ่านเว็บ) <b>สำหรับนิสิตทุกระดับปริญญา ภาคปกติ </b> 
ระหว่าง</font><font  color="red">วันที่ 23-24 เม.ย. 2553</font> <br>----------------------------------------------<br><font  color="blue" > 
สำหรับนิสิตปริญญาโท-เอก โครงการภาคพิเศษที่ประสงค์จะขอถอนบางรายวิชา ให้ติดต่อที่โครงการสังกัด... </font>
                                 </td> 
                     </tr !-->     
					 <!--tr><td width="465" align="center"><font  color="blue" > 
								<b>เกรดเป็น 'n' </b>... ถ้าอาจารย์กรอกเกรดแล้วบนระบบเกรดออนไลน์ ....แต่เกรดที่แสดงบนระบบสารสนเทศนิสิต ยังเป็น n แสดงว่า...
								1) <u>อยู่ระหว่างการส่งหลักฐานการกรอกเกรดไปยังสำนักทะเบียนฯ</u> หรือ  2) <u>อยู่ระหว่างการดำเนินการของสำนักทะเบียนฯ
								หลังจากได้รับหลักฐานจากคณะแล้ว</u> 
                                 </td> 
                     </tr!-->
					 <!--tr><td width="465"  align="center"><font  color="red" face="ms sans serif"  size='2'> 
									<b> เนื่องจากระบบเครือข่ายมีปัญหา!!!   อยู่ระหว่างการแก้ไข... เมื่อดำเนินการเสร็จเรียบร้อยแล้ว ระบบจะเปิดขยายเวลาลงทะเบียน และจะแจ้งให้ทราบต่อไป </b>
									 </font>
                                 </td> 
                     </tr !-->
					 <!--tr><td width="465"  align="center"><font  color="blue" face="ms sans serif"  size='2'> 
									 เนื่องจากมีผู้ใช้งานระบบฯ เป็นจำนวนมาก ทำให้การลงทะเบียนเรียนของนิสิตในวันนี้ล่าช้า สำนักทะเบียนฯ จึงขอความร่วมมือ<b>นิสิตที่ไม่มีส่วนเกี่ยวข้องกับการลงทะเบียนวันนี้ ให้ใช้ระบบงฯ ในช่วงเวลา (07.00-8.30 และ 18.00-19.00) </b>
									 </font>
                                 </td> 
                     </tr !-->
					 <!--tr><td align='center'> <a href="https://www.regis.ku.ac.th/tester/"><img src ="appregis.gif"></a> </td> </tr !-->
				     <!--tr><td align='center'> <a href="https://158.108.219.137/"   target="_blank"><img src ="toregis.gif"></a> </td> </tr!- ->     
					 <tr><td width="465"  align="center"><font  color="blue"> 
									 นิสิตสามารถ</font><font  color="red"> <b>ตรวจสอบเวลาลงทะเบียน</b></font><font  color="blue">   ภาคต้น'60  ได้ </font> <font  color="red" face="ms sans serif" > หลังการ login เข้าระบบ</font>
                                 </td> 
                     </tr>
					 <tr><td  width="465"  align="center"><font  color="blue"> 
                                  กำหนดพิมพ์ใบแจ้งหนี้ [ku9] ผ่านเว็บ เพื่อชำระเงินผ่านธนาคาร  สำหรับนิสิตที่ประสงค์จะลงทะเบียนภาคปลาย  ประจำปีการศึกษา 2553 <b> เริ่มวันที่  5 ต.ค.- 4 พ.ย. 2553</b> <br></font> <font  color="red" face="ms sans serif"> <b>นิสิตที่ชำระเงินผ่านธนาคารวันที่  5-19 ต.ค. 2553 สามารถลงทะเบียนเรียนผ่านเว็บตามวันเวลาที่กำหนด<b>  </font>
                                 </td> 
                     </tr>
					 <!--tr><td width="424" align='center'><font  color="blue"> 
                                 ประกาศ...<b>รายชื่อนิสิตที่ได้รับชั่วโมงกิจกรรม , สิทธิ์การลงทะเบียนก่อน  และ รางวัลพิเศษ </b>ในการเข้าร่วมทดสอบระบบลงทะเบียน ณ วันที่ 17, 20 ก.ย. 2553 สามารถดูได้ หลังการ login เข้าสู่ระบบ </font>
                                 </td> 
                     </tr!-->     
					 <!--tr><td width="424" align='center'><font  color="blue"> 
                                 รายงานผลการขอถอนบางรายวิชา โดยบันทึกคำว่า 'w' ประจำภาคต้น 2553 สามารถดูได้หลังการ login เข้าสู่ระบบ </font>
                                 </td> 
                     </tr !-->     
					 <!--tr><td width="424" align=center><font  color="blue"> 
                                กำหนดการขอถอนบางรายวิชา โดยติด 'w' ผ่านเว็บ สำหรับนิสิตทุกระดับปริญญา ภาคปกติ <font  color="red"><b>ระหว่างวันที่ 24-31 สิงหาคม 2553 </b></font><br>----------------------------------------------<br>สำหรับนิสิตปริญญาโท-เอก โครงการภาคพิเศษ ที่ประสงค์จะขอถอนบางรายวิชา ให้ติดต่อที่โครงการสังกัด... </font>
                                 </td> 
                     </tr!- ->     
					 <tr><td width="465"  align="center"><font  color="blue"> 
									 <b>การพิมพ์ใบเสร็จรับเงิน (ku2) ออนไลน์</b> ตั้งแต่ภาคต้น 53 เป็นต้นไป นิสิตที่ชำระเงินผ่านธนาคาร ถูกต้อง ครบถ้วน และนิสิตใหม่ ปริญญาตรี (รับตรง) คณะสถาปัตย์, คณะอุตสาหกรรมเกษตร, คณะสัตวแพทย์ และคณะวิศวกรรมศาสตร์ สามารถพิมพ์ใบเสร็จรับเงิน (ku2) ผ่านเว็บได้เอง <br> <font  color="red"><b>ตั้งแต่วันที่ 14 มิ.ย. 53 เป็นต้นไป</b></font> <br>ที่เมนู <b>'การลงทะเบียน' -> 'พิมพ์ใบเสร็จ [ku2]' </b> </font> <font  color="red"> หลังการ login เข้าระบบ  </font>
                                 </td> 
                     </tr>
					 <!--tr><td width="465"  align="center"><font  color="blue"> 
									 สำนักทะเบียนฯ แจ้ง<b>ปิดการลงทะเบียนผ่านเว็บระบบสารสนเทศนิสิต ระหว่างวันที่ 5-6 มิ.ย.53</b> เพื่อลงทะเบียนให้นิสิตใหม่ปริญญาตรี (ภาคพิเศษ) <br>และจะ<b>เปิดให้นิสิตลงทะเบียนอีกครั้ง ตั้งแต่วันที่ 7-11 มิ.ย.53   ทั้งนี้จะไม่มีการล็อคสาขา <br>ตั้งแต่เวลา 08.00 น.ของวันที่ 7 มิ.ย.53 เป็นต้นไป </b>
									 </font>
                                 </td> 
                     </tr!- ->
					 <tr><td  width="465" align="center"> <font  color="red">**ขอความร่วมมือ**</font>&nbsp;การกรอกแบบประเมิน  <a href="https://www.regis.ku.ac.th/grade/q1.php?system=1" target="_blank">ความพึงพอใจในการใช้ระบบสารสนเทศนิสิต</font></a></td>
                     </tr>
					 <!--tr><td width="465"  align="center"><font  color="blue"> 
									 <b>โปรดทราบ</b>...ห้ามมิให้นิสิตลงทะเบียนเรียน ในวิชาที่ได้ลงมาแล้วในภาคการศึกษาก่อน (ยกเว้น วิชาที่เกรดเป็น 'f', 'w','u') <b>มิฉะนั้นจะถูกลบออกจากระบบ และถูกรายงานต่อคณบดีต้นสังกัด</b>
									 </font>
                                 </td> 
                     </tr!-- >
					 <!--tr><td width="465"  align="center"><font  color="blue"> 
									 <b><u>นิสิตปริญญาตรี รหัส'53</u> ที่ชำระเงินผ่านโครงการรับตรง ของแต่ละคณะ </b> เนื่องจากอยู่ระหว่างจัดส่งรายชื่อนิสิตที่ชำระเงินผ่านโครงการจากโครงการมายังสำนักทะเบียน ฯ ทำให้ไม่ปรากฎรายชื่อนิสิตที่ชำระเงินแล้วในระบบฯ. .ซึ่งสำนักทะเบียน จะรีบดำเนินการนำข้อมูลการชำระเงินของนิสิตเข้าระบบฯ ต่อไป
									 </font>
                                 </td> 
                     </tr !-->
					 <!--tr><td width="465"  align="center"><font  color="blue"> 
									 <b>สิทธิ์ในการลงทะเบียน</b> ก่อนการลงทะเบียนเรียนทุกครั้ง ขอให้นิสิตตรวจสอบสิทธิ์ในการลงทะเบียนก่อน ถึงกำหนดการลงทะเบียน ทั้งนี้เพื่อผลประโยชน์ของนิสิตเอง โดยตรวจสอบรายชื่อนิสิตที่ไม่มีสิทธิ์ลงทะเบียนได้ที่<b> เมนู 'การลงทะเบียน' ->'ไม่มีสิทธิ์ลงทะเบียน' </b> ได้ </font> <font  color="red" face="ms sans serif" > หลังการ login เข้าระบบ</font>
									 </font>
                                 </td> 
                     </tr!-- >
					 <tr><td width="465"  align="center"><font  color="blue"> 
									 <b>นิสิตปริญญาตรี โครงการพิเศษ ที่เดิมโครงการเคยลงทะเบียนให้โดยใช้เอกสาร (ku1) </b>ตั้งแต่ภาคต้น 2553 เป็นต้นไป การลงทะเบียนของนิสิต จะเปลี่ยนเป็นการลงทะเบียนผ่านเว็บ โดยนิสิตสามารถลงทะเบียนได้ที่ <a href="http://sp.regis.ku.ac.th"  target="_blank"><nobr>เว็บลงทะเบียนเรียนนิสิตโครงการภาคพิเศษ มก.<nobr></a></font>
                                 </td> 
                     </tr >
					 <tr><td width="465" align="center"><font  color="blue" > 
									 นิสิตที่ไม่สามารถดู<b>ผลการเรียน</b> ที่ระบบสารสนเทศนิสิตได้...สามารถแจ้งได้<a href="mailto:nual@ku.ac.th"><b>...ที่นี่...</b></a>
                                 </td> 
                     </tr>
					 <!--tr><td width="465" align="center"><font  color="blue" > 
									 นิสิตเหมาจ่ายที่ชำระเงินแล้วผ่านธนาคาร และนิสิตไม่เหมาจ่าย สามารถลงทะเบียน/เปลี่ยนแปลงรายวิชา (เก็บตก/ล่าช้า/เพิ่มถอน) ได้ตั้งแต่ <b> วันที่ 20 - 31 มี.ค. 53 (ยกเว้นวันที่ 21 มี.ค.53) <br>เวลา 00:01 น. - 24:00 น.</b>
                                 </td> 
                     </tr!-->
					 <!--tr><td width="465" align="center"><font  color="blue" > 
									 นิสิตที่ยื่นคำร้องขอลงทะเบียนหน่วยกิตรวมเกินกำหนด สามารถ <b>ตรวจสอบรายชื่อที่ได้รับอนุญาตได้ที่ เมนู 'การลงทะเบียน' -> 'นิสิตขอลงหน่วยกิตเกิน' </b> ได้ </font> <font  color="red" face="ms sans serif" > หลังการ login เข้าระบบ</font>
                                 </td> 
                     </tr!-->
				   <!--  <tr><td width="424" align="center"><a href="https://www.regis.ku.ac.th/internet/" target="_blank"><font   face="ms sans serif" size="1"> <font  color="red" face="ms sans serif" size="1">**ขอความร่วมมือนิสิต**</font>ตอบแบบสอบถาม เรื่องพฤติกรรมจริยธรรมและผลกระทบของการใช้เครือข่ายอินเทอร์เน็ต ของนิสิตมหาวิทยาลัยเกษตรศาสตร์ </font></a>
                                </td>
                     </tr> -->
					<!--tr><td width="424" align="center"><a href="https://eassess.ku.ac.th/" target="_blank"><font   face="ms sans serif" size="2"> <font  color="red">**ขอความร่วมมือนิสิต**</font>&nbsp;เข้าใช้ระบบประเมินการเรียนการสอนตั้งแต่วันที่ 8 ก.พ. - 12 มี.ค. 2553</font></a></td>
                     </tr !-->
					 <!--tr><td  width="465" align="center"><a href="https://www.regis.ku.ac.th/assessku/" target="_blank"><font   face="ms sans serif"> <font  color="red">**ขอความร่วมมือนิสิต**</font>&nbsp;การกรอกแบบประเมิน ความพึงพอใจของนิสิตต่อ มหาวิทยาลัยเกษตรศาสตร์ ตั้งแต่วันที่  23 ก.พ.  31 มี.ค. 2553</font></a></td>
                     </tr!-->
 				</table>

<!-- ---------------------------------------------------= ประกาศ หมดแค่นี้=-------------------------------------------------------------- !- ->	 
		        </td>
!-->
<!--  เริ่ม เรื่องแจ้ง   -->
<!--  -  ->
				<td align=center valign=top><font color="#000000">
		                <table border='0'>
(1)					    <tr><th align='center'><font color='blue'><u>ปิดให้บริการระบบสารสนเทศนิสิตชั่วคราว!!!</u> </font></th></tr>     
(2)					    <tr><th align='center'><font color='blue'><u>ปิดให้บริการระบบสารสนเทศนิสิตชั่วคราว ตั้งแต่เวลา 20:00 - 21:00 น.!!!</u> </font></th></tr>
						<tr><td  class='txttable' >
					     เรียน ผู้ใช้บริการระบบสารสนเทศนิสิตทุกท่าน
				         <br> 
										   <dd>เนื่องจากมีอุปกรณ์ที่ควบคุมการทำงานของฐานข้อมูลตัวหนึ่งชำรุด สำนักบริการคอมพิวเตอร์จึงมีความจำเป็นต้องปรับเปลี่ยน
								   และ  <font  color='red'> ของดให้บริการระบบสารสนเทศชั่วคราว เป็น เวลา 1 ชั่วโมง ในวันศุกร์ที่ 4 มีนาคม 2554 ตั้งแต่เวลา 20:00-21:00 น</font> 
		                  <br>
					                       <dd>จึงขอแจ้งให้ทราบ และขออภัยในความไม่สะดวกในครั้งนี้ด้วย
						<br><hr>
						</td></tr> 
						</table> 
  				</td></tr>
<!-- - ->
<!--  จบ เรื่องแจ้ง   -->

<!--td align=center valign=top><font color="#000000">
		                <a href="
https://www.regis.ku.ac.th/cpcstk/checkregis" target="_blank">ระบบติดตามผลการลงทะเบียนนิสิต </b> </a!-->
<td align=center valign=top><font color="#000000">
		                <a href="
https://std.regis.ku.ac.th/adv_checkregis/" target="_blank">ระบบติดตามการลงทะเบียนนิสิต </b> </a>
				<br>  
		                <a href="https://webregis.ku.ac.th/index.php" target="_blank">ระบบการลงทะเบียน สำหรับนิสิตสังกัด <b>วิทยาเขตกำแพงแสน </b> </a>
				<!--br>  
		                <a href="https://www.regis.ku.ac.th/cpctrt/step_register.pdf">ขั้นตอนการลงทะเบียน </a-->
				<br>
		                <!--a href="http://registrar.ku.ac.th/student/calendar/calendar60#first" target="_blank">คลิกดูปฏิทินการศึกษา... ภาคต้น 2560 </a-->
		                <a href=http://registrar.ku.ac.th/node/253 " target="_blank">คลิกดูปฏิทินการศึกษา... ภาคต้น 2560 </a>
				<br>  
						<a href="http://sp.regis.ku.ac.th"  target="_blank"><nobr>เว็บลงทะเบียนเรียนนิสิตโครงการภาคพิเศษ มก.<nobr></a></font>
				<p><hr>
				<font color="red"> 
					  <b>ติดต่อสอบถาม</b><br></font>
				<table border='0'>
				<tr style='font-family:ms sans serif;font-size:11pt;' ><td rowspan='2' valign='top'><font color = 'blue'>สำนักทะเบียนและประมวลผล</font></td><td>โทร: 02-1180110, 02-9428200 ต่อ 618035-42 และ 618058  </td></tr>
				<tr style='font-family:ms sans serif;font-size:11pt;' ><td>fax: 02-1180111</td></tr>
			    <tr><td colspan='2'><hr></td></tr>
			    <tr style='font-family:ms sans serif;font-size:11pt;' ><td rowspan='2' valign='top'><font color = 'blue'>สำนักบริการคอมพิวเตอร์</font></td><td>โทร: 02-5620951-5  ต่อ 622988, 622575 และ 622582 </td></tr>
				<tr style='font-family:ms sans serif;font-size:11pt;' ><td>fax: 02-5620950</td></tr>
				</table>
			  </td></tr>
    </table>
    </td>
    </tr>

<!--
     <tr> 
      <td align=center>
	<a href="http://grad.ku.ac.th/app51/report51/name_pay_first51.pdf" target="_blank">รายชื่อการโอนเงินของนิสิตระดับบัณฑิตศึกษา ปี 2551</a>
	  </td>
    </tr>
-->

    </table>

  </div>
</div>


<div id="layer4" style="position:absolute; left:2px; top:500px; height:25px; z-index:4"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style='font-family:ms sans serif;font-size:10pt;'>
  <tr>
  <td>
<dd><!--<font color="red" face="ms sans serif" size="4"> <a href="grade/q1.php?system=1" title="แบบประเมินความพึงพอใจในการใช้ระบบสารสนเทศนิสิต" rel="gb_page_center[800, 460]" name="dd">คลิกตอบแบบประเมินความพึงพอใจต่อระบบสารสนเทศนิสิต</a></font>-->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!a href="del_regis2.pdf"><!.....ตรวจสอบรายชื่อนิสิตที่ต้องลงทะเบียนใหม่ (1-2 มิถุนายน 2552).....<!/a>
<br>
  </td>
  </tr>
    <tr> 
      <!--td style="font:'ms sans serif'; color:red; size:0.5"   align="right"!-->
      <td  align=right valign=top>
<!--	  <font color="red" face="ms sans serif">
	    <dd>  เบอร์ติดต่อสอบถาม : 02-9428200,02-5620951-5<br>
        <dd>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;- สำนักทะเบียนและประมวลผล : ต่อ 1766,1767 และ 1768 <br>
        <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - สำนักบริการคอมพิวเตอร์  : ต่อ 2541,2542    และ 2543 <br>
</font>
!-->
      </td>
    </tr>

	<tr> 
      <td> 
        <hr width="100%">
      </td>
    </tr>
    <tr> 
      <td><font face="ms sans serif" size="1" color=#3366ff> พัฒนาโดย: ฝ่ายสารสนเทศ 
        สำนักบริการคอมพิวเตอร์ มหาวิทยาลัยเกษตรศาสตร์ </font> </td>
    </tr>
  </table>
</div>
<div align=center> </div>

</body>
</html>
