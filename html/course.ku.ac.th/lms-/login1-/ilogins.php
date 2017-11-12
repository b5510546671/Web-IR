<!--
<script>
var reloaded = false;
var loc=""+document.location;
loc = loc.indexof("?reloaded=")!=-1?loc.substring(loc.indexof("?reloaded=")+10,loc.length):"";
loc = loc.indexof("&")!=-1?loc.substring(0,loc.indexof("&")):loc;
reloaded = loc!=""?(loc=="true"):reloaded;

function reloadonceonly() {
	if (!reloaded)
	window.location.replace(window.location+"?reloaded=true");
}
reloadonceonly();
</script> 
-->
<html>
<head>
<title>m@xlearn - :: kasetsart university's powerful elearning suite  :: -</title>
<meta http-equiv="content-type" content="text/html; charset=tis-620">
<link href="style.css" type=text/css rel=stylesheet>
<link href="main.css" type=text/css rel=stylesheet>
<style>
body {
	scrollbar-face-color: #ffffff; 
	scrollbar-highlight-color: #00b33a; 
	scrollbar-shadow-color: #000000; 
	scrollbar-3dlight-color: #e1fde9; 
	scrollbar-arrow-color:  #000000; 
	scrollbar-track-color: #ccffdd; 
	scrollbar-darkshadow-color: #00b33a; 
}
</style>
</head>
<script type="text/javascript" src="menu.js"></script>	
<script type="text/javascript">
	function mnuon1(object)
	{
		object.style.color = 'blue';
	}			
	function mnuoff(object)
	{
		object.style.color = object.defcol;
	}
/*

	addmenu("mnu1",190,115,120,"black","white","mnuon1(this);","mnuoff(this);","&nbsp;&nbsp;|&nbsp;&nbsp;");
		

	
		addmainmenu(menu.mnu1,"available courses","https://course.ku.ac.th/lms/login/ilogins.php?availablecourses=yes");
		addmainmenu(menu.mnu1,"news courses","https://course.ku.ac.th/lms/login/ilogins.php?newcourses=yes");
		addmainmenu(menu.mnu1,"statistics","https://course.ku.ac.th/lms/login/ilogins.php?statistics=yes");
		addmainmenu(menu.mnu1,"contact us","mailto:fengjini@ku.ac.th;suthee386@hotmail.com;fengstj@ku.ac.th");			
		
		addmainmenu(menu.mnu1,"help","#");

		addsubmenu(menu.mnu1,0);					
		closemenu();

		addsubmenu(menu.mnu1,0);				
		closemenu();
		
		addsubmenu(menu.mnu1,0);				
		closemenu();
		
		addsubmenu(menu.mnu1,0);				
		closemenu();
				
		addsubmenu(menu.mnu1);
			addmenuitem("-",null,"#339900");
			addmenuitem("vdo help","https://course.ku.ac.th/help2/learn_help3.wmv","orange");
			addmenuitem("presentation help","https://course.ku.ac.th/help2/kuclassroom.ppt","orange");
			addmenuitem("-",null,"#339900");					
		closemenu();
		
	closemenu();
*/
</script>
<script language="javascript">


function newimage(arg) {
        if (document.images) {
                rslt = new image();
                rslt.src = arg;
                return rslt;
        }
}

function changeimages() {
        if (document.images && (preloadflag == true)) {
                for (var i=0; i<changeimages.arguments.length; i+=2) {
                        document[changeimages.arguments[i]].src = changeimages.arguments[i+1];
                }
        }
}

var preloadflag = false;
function preloadimages() {
        if (document.images) {
                loginnew_17_over = newimage("images/loginnew_17-over.gif");
                loginnew_18_over = newimage("images/loginnew_18-over.gif");
                loginnew_20_over = newimage("images/loginnew_20-over.gif");
                preloadflag = true;
        }
}

function placefocus() {
if (document.forms.length > 0) {
var field = document.forms[0];
for (i = 0; i < field.length; i++) {
if ((field.elements[i].type == "text") || (field.elements[i].type == "textarea") || (field.elements[i].type.tostring().charat(0) == "s")) {
document.forms[0].elements[i].focus();
break;
         }
      }
   }
}

function mm_popupmsg(msg) { //v1.0
  alert(msg);
}

function mm_openbrwindow(theurl,winname,features) { //v2.0
  window.open(theurl,winname,features);
}

var win = null;
function newwindow(mypage,myname,w,h,scroll){
	leftposition = (screen.width) ? (screen.width-w)/2 : 0;
	topposition = (screen.height) ? (screen.height-h)/2 : 0;
	settings =
	'height='+h+',width='+w+',top='+topposition+',left='+leftposition+',scrollbars='+scroll+',resizable'
	win = window.open(mypage,myname,settings)
}
</script>
<body bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" nmousemove="mnumove();"  onload="placefocus();">

<table id="table_01"  width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td  rowspan="2" background="../images/hearder_03.gif"><img src="../images/hearder_01.gif" width="127" height="107" alt="kasetsart university"></td>
		<td><img src="../images/hearder_02.gif" width="341" height="51" alt="">
         </td><td  rowspan="2" width="100%" background="../images/hearder_03.gif"></td>
		<td rowspan="2">
			<img src="../images/hearder_04.gif" width="266" height="107" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/hearder_05.gif" width="341" height="56" alt=""></td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="180" valign="top" background="../images/bg_lines.gif">
	  <br>
	  <br>
          <table width="170" border="0" cellpadding="0" cellspacing="0"  align="center" bgcolor="#99cc00" class="tdgreen">
                <tr> 
                  <td width="168" height="16">
					<div class="bwhite"  ><img src="../images/lock.gif" width="16" height="16"> 
                  log in </div></td>
                </tr>                
                <tr> 
                  <td> 
				  <table width="170" border="0" cellpadding="5" cellspacing="0" align="center" >
                      <tr> 
                        <td height="80" bgcolor="#99cc00">
						<form name="iloginform" action="loginaction.php"  method="post">
						<table width="100%" border=0 cellpadding=5 cellspacing=0>
                            <tbody>
                              <tr bgcolor=#ffffff> 
                                <td valign=top>username :: 
                                  <input maxlength="20" size="15" name="ilogin" class="textlogin"></td>
                              </tr>
                              <tr bgcolor=#ffffff> 
                                <td valign=top>password :: 
                                  <input id="ipassword" type="password"  maxlength="40" size="15" name="ipassword" class="textlogin"></td>
                              </tr>
                              <tr bgcolor=#ffffff> 
                                <td valign=top>
                                </td>
                              </tr>
                              
                          <td valign=top> 
                                  <input type="submit" name="submit" value="submit" width="70" class="button"> 
                                            <input type="reset" name="submit2" value="clear" width="70" class="button">
                            </td>
                              </tr>
                              <tr bgcolor=#ffffff> 
                                <td valign=top>
                                  | <a href="#"
                                onclick="mm_popupmsg('ท่านสามารถติดต่อไปยัง\rสำนักบริการคอมพิวเตอร์ มหาวิทยาลัยเกษตรศาสตร์\rโทรศัพท์ : +66 2 562-0951-7 \rโทรสาร : +66 2 562-0950\rอีเมล : webmaster-cpc@ku.ac.th\rurl : http://www.cpc.ku.ac.th\r')">forgot 
                                  password</a> | <a class=abox1 
                                href="https://course.ku.ac.th/course/help2/index.html" 
                                target=_blank>help</a></td>
                              </tr>
                            </tbody>
                          </table>
						  </form>
						</td>
                      </tr>
                </table>
                </td>
				</tr>
              </table>
	      <br>
	  	 	  <table width="168" border="0" align="center" cellpadding="2" cellspacing="0" >
          <tr> 
            <td> <table width="168" border="0" cellpadding="2" cellspacing="0" class="tdgreen">
                <tr> 
                      
                    <td bgcolor="#99cc00"><font color="#ffffff"><img src="../images/icon_member.gif"> 
                      ขณะนี้มีผู้ online </font></td>
                </tr>
                <tr> 
                      
                    <td bgcolor="#ffffff">
					<table cellspacing=0 cellpadding=5 width=168 border=0>
                            <tbody>
                              <tr bgcolor=#ffffff> 
                                <td width=87><img src="../images/person_user.gif" > นักเรียน </td>
                                <td width=91>: 10 คน</td>
                              </tr>
                              <tr bgcolor=#ffffff> 
                                    <td width=87><img src="../images/person_user.gif" > 
                                      อาจารย์ </td>
                                <td>: 0 คน</td>
                              </tr>
							  <!--
                              <tr bgcolor=#ffffff> 
                                    <td width=87><img src="../images/person_user.gif" > 
                                      บุคลภายนอก </td>
                                <td>: 85 คน</td>
                              </tr>
							  -->
                            </tbody>
                          </table>
					</td>
                </tr>
              </table></td>
          </tr>
        </table>
		<br>
<!--          <table width="168" border="0" cellpadding="2" cellspacing="0" align="center" class="tdgreen">
                      <tr> 
                        
                    
              <td bgcolor="#99cc00" class="bwhite"><img src="../images/edu_icon.gif" width="19" height="18"> 
                หลักสูตรเรียนแบบ online </td>
                      </tr>
                      <tr> 
                        <td height="50" ><div align="center"><a 
                              href="http://maxlearn.eng.ku.ac.th/online_training/"><img 
                              src="../images/temp/mechatronics_online.gif" 
                              width=168 height="60" border=0></a></div></td>
                      </tr>
                    </table>
          <br>
          <table width="168" border="0" cellpadding="2" cellspacing="0" align="center" class="tdgreen">
                      <tr> 
                        
                    
              <td bgcolor="#99cc00" class="bwhite"><img src="../images/edu_icon.gif" width="19" height="18"> 
                หลักสูตรฝึกอบรม</td>
                      </tr>
                      <tr> 
                        <td height="50" ><div align="center"><a 
                              href="http://maxlearn.eng.ku.ac.th/online_training/java/"><img 
                              src="../images/temp/javaprofessionaldeveloper_b.gif" 
                              width=168 height="60" border=0></a></div></td>
                      </tr>
                    </table>
          <br>-->
          <table width="170" border="0" align="center" cellpadding="2" cellspacing="0" >
          <tr> 
            <td> <table width="170" border="0" cellpadding="2" cellspacing="0" class="tdgreen">
                <tr> 
                      <td bgcolor="#99cc00"><font color="#ffffff"><span class="bwhite"><img src="../images/icon_www.gif" width="16" height="16"> 
                        interested links</span></font></td>
                </tr>
                <tr> 
                  <td bgcolor="#ffffff"> <table width="100%" 
                        align=center cellpadding=0 cellspacing=0>
                          <tbody>
                            <tr bordercolor=#99ccff bgcolor=#ffffff> 
                              <td align=middle 
                              width="16%"></td>
                              <td align=middle 
                              width="84%"></td>
                            </tr>
                            <tr valign=top bgcolor=#eeeeee> 
                              <td>&nbsp;<img height=16 alt="" 
                              src="../images/link.gif" width=20 
                              border=0></td>
                              <td><a href="http://www.correct.go.th/hrd/journal.htm">วารสารบทความ 
                                online</a></td>
                            </tr>
                            <tr valign=top bgcolor=#fdfdfd> 
                              <td>&nbsp;<img height=16 alt="" 
                              src="../images/link.gif" width=20 
                              border=0></td>
                              <td><a href="http://www.learn.in.th">learnonline</a></td>
                            </tr>
                            <tr valign=top bgcolor=#eeeeee> 
                              <td>&nbsp;<img height=16 alt="" 
                              src="../images/link.gif" width=20 
                              border=0></td>
                              <td><a href="http://www.edtechno.com">thai educational 
                                technology resource center</a></td>
                            </tr>
                            <tr valign=top bgcolor=#fdfdfd> 
                              <td>&nbsp;<img height=16 alt="" 
                              src="../images/link.gif" width=20 
                              border=0></td>
                              <td><a href="http://www.thaicai.com">thaicai</a></td>
                            </tr>
                          </tbody>
                        </table> </td>
                </tr>
              </table></td>
          </tr>
        </table>
      </td>
      <td valign="top" bgcolor="#ffffff"> <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr> 
            <td valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td valign="top"><div align="center"> <br>
                        <br>
                      </div>
                                            <!-- news-->
					                        <table width="100%" border="0" cellpadding="0" align="center">
                        <tr> 
                          <td> <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2" class="tdbotgreen">
                              <tr> 
                                <td width="182" bgcolor="#99cc00" class="tdgreen"><font color="#ffffff"><img src="../images/icon_pin.gif"><b>&nbsp;news 
                                  : ข่าวสารประชาสัมพันธ์</b></font></td>
                              </tr>
                              <tr> 
                                <td height="50"> 
                                  <table width="100%" cellpadding="5" cellspacing="0" align="center" class="tdgreen">
                                    <tr bgcolor="#ffffff"> 
                                      <td width="15%" align="center" bordercolor="#99ccff"><b><u>รายวิชา</u></b></td>
                                      <td width="52%" align="center" bordercolor="#99ccff"><b><u>ข่าวประกาศ</u></b></td>
                                      <td width="20%" align="center" bordercolor="#99ccff"><b><u>ผู้ประกาศ</u></b></td>
                                      <td width="13%" align="center" bordercolor="#99ccff"><b><u>วันที่ประกาศ</u></b></td>
                                    </tr>
                                                                        <tr  bgcolor="#99cc33" > 
                                      <td colspan="5"  class="tdgreen"><table width="100%" border="0" cellspacing="0" cellpadding="1">
                                          <tr> 
                                            <td width="11%" align="center"><font color="#ffffff"><b><u>คณะ</u></b></font><b><font color="#ffffff"></font></b></td>
                                            <td width="89%"><b><font color="#ffffff">วนศาสตร์</font></b></td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                    <tr bgcolor="#c8ff91" valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01302546 
                                         (1)                                      </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26241&courses=14834','name','650','500','yes');return false" > 
                                  		งานที่ต้องทำ  การบ้านประจำสัปดาห์ นี้										</a><br>
										
										ให้นิสิตอ่าน บทความ เรื่อง process, patern and scale in biogeography by myers &amp; giller 1988<br />
<br />
จ...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=26615&page=1','name','650','500','yes');return false" > 
                                        รศ.ดร.นริศ  ภูมิภาคพันธ์ 
                                        </a> </td>
                                      <td align="center">2017-08-25</td>
                                    </tr>
                                                                        <tr  valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01314321 
                                         (1)                                      </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26240&courses=9380','name','650','500','yes');return false" > 
                                  		อ่าน บทที่ 3  นิเวศวิทยาสัตว์ป่า  และการส่งรายชื่อกลุ่มทำงาน										</a><br>
										
										ให้นิสิตอ่านเอกสารประกอบการเรียน บทที่ 3 นิเวศวิทยาสัตว์ป่า   สำเนา pdf file จาก computer ในห้องบรรย...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=26615&page=1','name','650','500','yes');return false" > 
                                        รศ.ดร.นริศ  ภูมิภาคพันธ์ 
                                        </a> </td>
                                      <td align="center">2017-08-25</td>
                                    </tr>
                                                                        <tr bgcolor="#c8ff91" valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01314321 
                                         (1)                                      </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26217&courses=9380','name','650','500','yes');return false" > 
                                  		อ่านทบทวน บทเรียน wildlife ecology &amp; management										</a><br>
										
										หยุดวันจันทร์  14  สิงหาคม  2560    อ่านเอกสารที่กำหนดให้    เพื่อทบทวน และปูพื้นฐานความรู้  ความเข้...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=26615&page=1','name','650','500','yes');return false" > 
                                        รศ.ดร.นริศ  ภูมิภาคพันธ์ 
                                        </a> </td>
                                      <td align="center">2017-08-16</td>
                                    </tr>
                                                                        <tr  bgcolor="#99cc00" > 
                                      <td colspan="5" class="tdgreen"><table width="100%" border="0" cellspacing="0" cellpadding="1">
                                          <tr> 
                                            <td width="11%" align="center"><font color="#ffffff"><b><u>คณะ</u></b></font><b><font color="#ffffff"></font></b></td>
                                            <td width="89%"><b><font color="#ffffff">วิศวกรรมศาสตร์</font></b></td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                                                        <tr bgcolor="#c8ff91" valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01208241 
                                         (450)                                      </td>
                                      <td bgcolor="#c8ff91" class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26243&courses=12995','name','650','500','yes');return false" > 
                                  		announcement: 01208241 (group 450) class cancellation										</a><br>
										
										there will be no class on this monday aug. 28th, 2017.  we will meet again on monday sept. 4th, 2017...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=24134&page=1','name','650','500','yes');return false" > 
                                        ผศ.ดร.เอกไท  วิโรจน์สกุลชัย 
                                        </a> </td>
                                      <td align="center">2017-08-26</td>
                                    </tr>
                                                                        <tr  valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01216514 
                                         (691)                                      </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26242&courses=12353','name','650','500','yes');return false" > 
                                  		download ees 2017										</a><br>
										
										สามารถ download program ees จากระบบ maxlearn ได้แล้วนะครับ มี 2 ไฟล์ที่ต้องใช้งาน คือ ไฟล์ setup_ees...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=24134&page=1','name','650','500','yes');return false" > 
                                        ผศ.ดร.เอกไท  วิโรจน์สกุลชัย 
                                        </a> </td>
                                      <td align="center">2017-08-26</td>
                                    </tr>
                                                                        <tr bgcolor="#c8ff91" valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01208341 
                                                                              </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26227&courses=11575','name','650','500','yes');return false" > 
                                  		hw1 for gr. 3 and 251										</a><br>
										
										hw 1 สำหรับนิสิตกลุ่ม 3 และ 251 อยู่ใน folder hw thai<br />
ส่งการบ้านภายในวันศุกร์ที่ 1 กันยายน 2560 ที่...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=19135&page=1','name','650','500','yes');return false" > 
                                        ผศ.ดร.ณัฐศักดิ์  บุญมี 
                                        </a> </td>
                                      <td align="center">2017-08-18</td>
                                    </tr>
                                                                        <tr  valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01208341 
                                                                              </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26226&courses=11575','name','650','500','yes');return false" > 
                                  		hw1 for iup										</a><br>
										
										hw 1 for iup student group 450 has been posted in hw iup folder. <br />
turn in your hardcopy by septembe...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=19135&page=1','name','650','500','yes');return false" > 
                                        ผศ.ดร.ณัฐศักดิ์  บุญมี 
                                        </a> </td>
                                      <td align="center">2017-08-18</td>
                                    </tr>
                                                                        <tr bgcolor="#c8ff91" valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01206311me 
                                         (all)                                      </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26216&courses=7376','name','650','500','yes');return false" > 
                                  		sec451; dr.chatpun's class on monday 14/8/2017 at room 3204, 13.00-16.00										</a><br>
										
										sec451; dr.chatpun's class on monday 14/8/2017 at room 3204, 13.00-16.00, ch14(fundamental of metal ...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=55539&page=1','name','650','500','yes');return false" > 
                                        ดร.ชัชพันธ์  ขำญาติ 
                                        </a> </td>
                                      <td align="center">2017-08-10</td>
                                    </tr>
                                                                        <tr  valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01206311iup 
                                         (all)                                      </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26215&courses=13880','name','650','500','yes');return false" > 
                                  		sec451 class on monday 14/8/2017 at room 3204, 13.00-16.00										</a><br>
										
										sec451; dr.chatpun's class on monday 14/8/2017 at room 3204, 13.00-16.00, ch14(fundamental of metal ...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=55539&page=1','name','650','500','yes');return false" > 
                                        ดร.ชัชพันธ์  ขำญาติ 
                                        </a> </td>
                                      <td align="center">2017-08-10</td>
                                    </tr>
                                                                        <tr bgcolor="#c8ff91" valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01206311me 
                                         (all)                                      </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26214&courses=7376','name','650','500','yes');return false" > 
                                  		หมู่ 4 เรียนกับ อ.ชัชพันธ์ จ. 14 ส.ค. 60 เวลา 9.00 ห้อง 3204										</a><br>
										
										หมู่ 4 เรียนกับ อ.ชัชพันธ์ จ. 14 ส.ค. 60 เวลา 9.00 ห้อง 3204 เนื้อหาบทที่ 15(bulk deformation), 16(s...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=55539&page=1','name','650','500','yes');return false" > 
                                        ดร.ชัชพันธ์  ขำญาติ 
                                        </a> </td>
                                      <td align="center">2017-08-10</td>
                                    </tr>
                                                                        <tr  valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01208341 
                                                                              </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=26205&courses=11575','name','650','500','yes');return false" > 
                                  		เอกสาร lecturenote										</a><br>
										
										นิสิตหมู่ 3 และหมู่ 251 ถ้านิสิตไม่สะดวกในการ printout เอกสารประกอบคำสอนภาษาไทย ผมเอาต้นฉบับไปไว้ที่...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=19135&page=1','name','650','500','yes');return false" > 
                                        ผศ.ดร.ณัฐศักดิ์  บุญมี 
                                        </a> </td>
                                      <td align="center">2017-08-04</td>
                                    </tr>
                                                                        <tr bgcolor="#c8ff91" valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01999211 
                                         (all)                                      </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=21913&courses=9139','name','650','500','yes');return false" > 
                                  		lecture note iup 01999211										</a><br>
										
										lecture note iup assist.prof.dr.weerakaset suanpaga<br />
lecture note combination permutation, convoluti...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=69610&page=1','name','650','500','yes');return false" > 
                                        <font color=blue>ผศ.ดร.<font color=blue>วีระเกษตร  <font color=blue>สวนผกา 
                                        </a> </td>
                                      <td align="center">2017-02-14</td>
                                    </tr>
                                                                        <tr  valign="top"> 
                                      <td class="tdg"><img src="../images/right_green.gif"  alt="" border="0" width="10" height="10">&nbsp;01999211 
                                         (all)                                      </td>
                                      <td class="tdg">
									  									  <a   class="as" href="#" onclick="newwindow('../courses/news_detail.php?id=18166&courses=9139','name','650','500','yes');return false" > 
                                  		lecture note ผศ.ดร.วีระเกษตร										</a><br>
										
										lecture note return period, convolution, math model ผศ.ดร.วีระเกษตรและ ดร.วาทินี<br />
download lecture 3...									  </td>
                                      <td align="center" class="tdg"> <a  href="#" onclick="newwindow('../personal/info_fpage.php?userid=69610&page=1','name','650','500','yes');return false" > 
                                        <font color=blue>ผศ.ดร.<font color=blue>วีระเกษตร  <font color=blue>สวนผกา 
                                        </a> </td>
                                      <td align="center">2017-02-14</td>
                                    </tr>
                                                                      </table></td>
                              </tr>
                            </table></td>
                        </tr>
                      </table>
                      <br> 
                                            <!-- course statistics all -->
                                            <!-- end course statistic all -->
                      <!-- avaliable course -->
                                            <!-- end avaliable course -->
                      <br> <br> </td>
                  </tr>
                </table></td>
    </tr>
    <tr> 
          <td colspan="2" valign="top" >&nbsp;</td>
    </tr>
    <tr> 
              <td colspan="2">&nbsp;</td>
    </tr>
  </table>
	</td>
  </tr>
</table>
<!-- footer -->
<table width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td background="../images/bg_lines.gif">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#666666">
		<div align="center" class="footer">copyright &copy;2004 faculty of engineering 
                    kasetsart university. all rights reserved.<br>
                best viewed with microsoft internet explorer 4 or higher on 800x600 
                pixel
		</div>
	</td>
  </tr>
</table>


</body>
</html>
