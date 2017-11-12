<html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>kasetsart university มหาวิทยาลัยเกษตรศาสตร์</title>
<link href="css/tap.css" rel="stylesheet" type="text/css">
<link href="css/kuweb.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/boxy.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<script type="text/javascript" src="js/jquery.boxy.js"></script>
<script type="text/javascript">
	$(function() {
		$('#gallery a').lightbox();
	});
	$(function() {
		$('.boxy').boxy();
	});
</script>
<script>
var arrshowtab = new array();
$(function(){
	$(".showtab_sc").click(function(){
		var tid = this.id;
		var showid = "s_" + tid;
		for(key in arrshowtab){
			if(key != showid){
				if(arrshowtab[key] == 1){
					$("#"+key).slidetoggle("slow");
					arrshowtab[key] = 0;
				}
			}
		}
		if(arrshowtab[showid] == 1) arrshowtab[showid] = 0;
		else arrshowtab[showid] = 1;
		$("#"+showid).slidetoggle("slow");
		
	});

});
//------------- menu top------------------------
var _mt = '#smenu';
var _sm = '#menu_top';


function showmenu(mt,sm){
	hidnow(_mt,_sm);
	_mt=mt;
	_sm=sm;
	$(mt).show()
	$(sm).animate( { margintop:"0px" },500);
	}
function showmenu2(mt,sm){
	$(mt).show()
	$(sm).animate( { margintop:"0px" },500);
}
function hidemenu(mt,sm){
	$(mt).fadeout("fast");
	var h = $(sm).height();
	h = "-"+ h + "px";
	$(sm).animate( { margintop:h },500);
}
function hidnow(mt,sm){
$(mt).fadeout("fast");
var h = $(sm).height();
h = "-"+ h + "px";
$(sm).animate( { margintop:h },400);
}
//------------------------------------
function display(sid) {
	oobj = document.getelementbyid(sid);
	if (oobj) {
	oobj.style.display='inline';
	}
}

function hide(sid) {
	oobj = document.getelementbyid(sid);
	if (oobj) {
	oobj.style.display='none';
	}
}
var _id='';
function gettab(id,pic,picimg){
	if(_id !='' ){
		hide("box_content"+_id);
		document.getelementbyid(_pic).src = _picimg;
	}
	_picimg=document.getelementbyid(pic).src;
	_id=id;
	_pic =pic;
	display("box_content"+id);
	document.getelementbyid('box_menu').classname= 'box_menu'+id;
	document.getelementbyid(pic).src = picimg;
}
function rotate(id,settime){
	if(id >3){id=1;}
	gettab(id,'pic'+id,'images/home/menu'+id+'.jpg');
	id++;
	settimeout("rotate("+id+","+settime+")", settime);
}
//------- pic & vedio -----------

</script>
<style type="text/css">
body {	margin-left: 0px;	margin-top: 0px;	margin-right: 0px;	margin-bottom: 0px;}
.bt_img{cursor:pointer;border:0;}
img {border:0;}
a {cursor:pointer; outline:none; selector-dummy:expression(this.hidefocus=true);}
.container {width:901px; margin:0 auto;}
.menu {position:relative;}
.menu .over {position:absolute;left:0;}
.divide {overflow:hidden; height:1%;}
.divide .video {float:left;}
.divide .schdule {float:right;}
.footer {background:url(08bottom.jpg) top repeat-x; text-align:center; padding:110px 0 10px 0;}
/*#smenu1,#smenu2,#smenu3,#smenu4,#smenu5,#smenu6{padding:5px; left:0px; top:45px; width:901px; position:absolute; background:#d7ffd7; z-index:999;}*/
/*#spanna{left:1px; width:901px; position:absolute;text-align:center;}*/
#gallery {padding: 0px;width: auto;}
#gallery ul { list-style: none; }
#gallery ul li { display: inline; }
#gallery ul img {border: 5px solid #3e3e3e;border-width: 5px 5px 20px;}
#gallery ul a:hover img {border: 5px solid #fff;border-width: 5px 5px 20px;color: #fff;}
#gallery ul a:hover { color: #fff; }

/****main content menu ****/
.conmenu,.testmenuh { height:53px; width:240px; border-top:1px solid #cccccc;}
/*#divmenuh{ height:56px; width:240px; padding:0px; border-bottom:1px solid #cccccc; margin:0px}*/
.conmenu { color:#339966; font-size:14px }
.testmenuh{
	background-image:url(images/index/hotnewswap.jpg);
	color:#339966; font-size:14px
	}
/******************  content **********************/
.navigate{
font-size:12px; font-family:tahoma; color:#999999; float:right; padding-right:5px;
}
.navigate a:link,.navigate a:visited{ font-weight:normal; color:#339966; font-weight:normal}
.navigate a:hover{text-decoration:underline}
.col {
font-size:14px; font-family:tahoma; color:#666666;
}
.content{ font-size:12px;}
.content a:link,.content a:visited,.content a:hover{font-size:12px; text-decoration:none; font-weight:normal}
.content li a:link,.content li a:visited,.content li a:hover{font-size:12px; text-decoration:none; font-weight:normal}

body,tr,td,a:link,li,ul{font-size:12px; text-decoration:none; font-weight:normal; font-family:tahoma;}
a:link,a:visited,a:hover,span{ color:#339966; font-weight:normal; font-family:tahoma; font-size:12px;}
.style1{color: #333333;}
.style57 {	color: #ffffff;
	font-weight: bold;
}
.style59 {color: #669900; font-weight: bold; }
</style>
</head>

<body>
<script language="javascript" src="js/fontsizer.js" type="text/javascript"></script>
<script language="javascript" src="js/cookies.js" type="text/javascript"></script>
<style type="text/css">
body {	margin-left: 0px;	margin-top: 0px;	margin-right: 0px;	margin-bottom: 0px;}
.bt_img{cursor:pointer;border:0;}
a {cursor:pointer; outline:none; selector-dummy:expression(this.hidefocus=true);}
.container { margin:0 auto;}
.menu {position:relative;}
.menu .over {position:absolute;left:0;}
#quickb{ text-align:center; padding:10px;}
#quickb a img{ border:6px #d7ffd7 solid;}
/****main content menu ****/
#smenu1,#smenu2,#smenu3,#smenu4,#smenu5,#smenu6{border-bottom:4px #006633 solid; position:absolute; top:40px; z-index:550; }
#quick_1,#quick_2,#spann1,#spann2,#spann3,#spann4,#spann6{ position:absolute;left:0; top:-8px; background:#d7ffd7; display:none; margin:0px 0px 0px 0px; border:3px solid #336633; padding:1px; width:894px;}
#quickb,#quickc,#spanna,#spannb,#spannc,#spannd,#spannf{padding:0px 0px 0px 0px;  top:-10px;}
#menu_top1,#menu_top2,#menu_top3,#menu_top4,#menu_top5,#menu_top6{ top:0px; position:absolute; z-index:500}
#smenu1,#smenu2,#smenu3,#smenu4,#smenu5,#smenu6{left:0px; background-image:url(images/index/sb.jpg); width:901px;height:220px; padding-bottom:0px; padding-left:0px; padding-right:0px; padding-top:0px;}
.divp { color:#339966;  padding-right:10px; padding-top:10px; float:right; }
.divp a:link,.divp a{color:#339966;}
.submenu a:link,.submenu a,.divp a:link,.divp a {
	font-family: tahoma;
	font-size:12px;
	list-style-position:outside; 
	list-style-type:square;
	color:#333333;
	text-decoration:none;
}
.submenu a:hover ,.divp a:hover{ 
	font-family: tahoma;
	font-size:12px;
	list-style-position:outside; 
	list-style-type:square;
	color:#339966;
	text-decoration:underline;
}
/************* main menu **************************/
#menuleftcontent .ulmenu_right,#menuleftcontent .ulmenu_left{float:left;  overflow:hidden}
#menuleftcontent .ulmenu_right a:link,#menuleftcontent .ulmenu_left a:link,#menuleftcontent .ulmenu_right a:visited,#menuleftcontent .ulmenu_left a:visited{  background:none; font-size:12px; text-decoration:none; font-family:tahoma;font-weight:normal; color:#339966;}
#menuleftcontent .ulmenu_right a:hover,#menuleftcontent .ulmenu_left a:hover{ text-decoration:underline}
.ulmenu_right,.ulmenu_left{float:left;padding-top:10px; }
.ulmenu_right a:link,.ulmenu_left a:link,.ulmenu_right a:visited,.ulmenu_left a:visited{ font-size:14px; text-decoration:none; 
font-family:tahoma;font-weight:normal;color:#339966;padding: -3px 50px 20px 25px; 	text-decoration: none;
	}
.ulmenu_right a:hover,.ulmenu_left a:hover{ text-decoration:underline; font-size:14px;
}
.ulmenu_right li a, .ulmenu_left a{ 
	list-style:outside;
	list-style-type:square; 
}
#divh ,#divh a:link ,#divh a:visited,#divh a:active,{ background-color:#d7ffd7; font-size:12px; text-decoration:none; font-family:tahoma;font-weight:normal; color:#339966;}
.divhtopic{ /* in bg*/
 color:#fefefe; font-weight:bold; background-image:url(images/home/bghmenu.jpg); background-position:left top; background-repeat:no-repeat; height:24px;
 padding-left:8px; 
  padding-top:3px; 
 font-size:14px; }
#divh a:hover{ background-color:#d7ffd7;	font-size:12px; text-decoration:underline; font-weight:normal;
}
#divh ul {
	font-weight:bold;
	list-style-position:outside; 
	list-style-type:square;
	margin-top:0px;
	margin-bottom:10px;	
}
#divh li{
	font-weight:normal;
 	margin-left:20px;
}
/****************** css for haed **********************/
.navigate{font-size:12px; font-family:tahoma; color:#999999; float:right; padding-right:5px;}
.navigate a:link,.navigate a:visited{ font-weight:normal; color:#339966; font-weight:normal}
.navigate a:hover{text-decoration:underline}
.col{font-size:14px; font-family:tahoma; color:#666666;}
.content li a:link,.content li a:visited,.content li a:hover{font-size:12px; text-decoration:none; font-weight:normal}
.menucam a:link ,.menucam a:hover,.menucam a:visited{
	font-family: tahoma;
	font-size: 12px;
	color:#028209;
	text-decoration: none;
	font-weight: bold;
	padding-top:50;
}
.then a:link ,.then a:visited{
	font-family: tahoma;
	font-size: 12px;
	color:#999999;
	text-decoration: none;
	
}
.then a:hover{
	font-family: tahoma;
	font-size: 12px;
	color:#ff9900;
	text-decoration: none;
}
.style1 {color: #cccccc}
</style>
<table width="901" height="93" border="0" align="center" cellpadding="0" cellspacing="3" background="images/index/bg_top.jpg">
  <tr>
    <td><table width="901" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="317"><a href="index.php"><img src="images/webnew/logo.jpg" width="316" height="83" border="0" /></a></td>
        <td width="584" align="right"><table width="584" height="83" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" align="right">
			<table width="100" height="19" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><a href="javascript:fontsizer(-1,'px')" accesskey="r" title="decrease font-size"><img src="images/webnew/a1.jpg" width="20" height="19" border="0" /></a></td>
                <td><a href="javascript:fontreset(0,'px')"  title="restore default font-sizes"><img src="images/webnew/a2.jpg" width="16" height="19" border="0" /></a></td>
                <td><a href="javascript:fontsizer(1,'px')" accesskey="i" title="increase font-size"><img src="images/webnew/a3.jpg" width="17" height="19" border="0" /></a></td>
                <td><a href="http://www.ku.ac.th/eng2008/"><img src="images/webnew/eng.jpg" width="39" height="19" border="0" /></a></td>
                <td><a href="http://www.ku.ac.th/"><img src="images/webnew/th.jpg" width="38" height="19" border="0" /></a></td>
              </tr>
            </table>			
			</td>
          </tr>
          <tr>
            <td height="30" colspan="2" align="right"><img src="images/webnew/n1.jpg" width="66" height="21" onclick="javascript:showmenu('#spann1','#spanna')" style="cursor:pointer" /><img src="images/webnew/n2.jpg" width="66" height="21" onclick="javascript:showmenu('#spann3','#spannc')" style="cursor:pointer" /><img src="images/webnew/n3.jpg" width="66" height="21" onclick="javascript:showmenu('#spann4','#spannd')" style="cursor:pointer" /><img src="images/webnew/n4.jpg" width="68" height="21" onclick="javascript:showmenu('#spann2','#spannb')" style="cursor:pointer" /></td>
          </tr>
          <tr>
            <td width="364" height="22" align="right"><img src="images/webnew/q1.jpg" width="82" height="20" onclick="javascript:showmenu('#spann6','#spannf')" style="cursor:pointer"/><img src="images/webnew/q2.jpg" width="83" height="20" onclick="javascript:showmenu('#quick_2','#quickc')" style="cursor:pointer" /></td>
            <td width="220" align="right"><form action="http://www.google.com/search" method="get" name="formsearch">
                <table width="213" height="24" border="0" align="right" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="23"><img src="images/index/search01.gif" width="23" height="24"></td>
                    <td width="164" background="images/index/search02.jpg">
				      <input type=text onfocus="document.getelementbyid('q').value='';"  size=28 maxlength=255 value="ค้นเว็บไซต์นี้" name="q" id="q" class="boxnotline">
                      <input type=hidden name=ie value=utf-8>
                      <input type=hidden name=domains value="www.ku.ac.th">
                       <input type=hidden name=sitesearch value="www.ku.ac.th">					  </td>
                    <td width="26" align="left"><input  type="image" alt="search" src="images/index/search03.jpg" width="25" height="24" name="image"  align="middle"></td>
                  </tr>
                </table>
                            </form>				</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="901" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><!--maimmenu-->
<div class="container"><div class="menu"><div>
<img src="images/index/menu01.jpg" width="182" height="41" onclick="javascript:showmenu('#menu_top1','#smenu1')" style="cursor:pointer"/ ><img src="images/index/menu02.jpg" width="179" height="41" onclick="javascript:showmenu('#menu_top2','#smenu2')" style="cursor:pointer"/><img src="images/index/menu03.jpg" width="181" height="41" onclick="javascript:showmenu('#menu_top3','#smenu3')" style="cursor:pointer" /><img src="images/index/menu04.jpg" width="180" height="41" onclick="javascript:showmenu('#menu_top4','#smenu4')" style="cursor:pointer"/><img src="images/index/menu05.jpg" width="179" height="41" onclick="javascript:showmenu('#menu_top5','#smenu5')" style="cursor:pointer" /></div>


<div id="menu_top1"  style="display:none;"><img src="images/index/menu01_.jpg" alt="" onclick="javascript:hidemenu('#menu_top1','#smenu1')"/>
<div class="submenu" id="smenu1" style="">
<div align="right" class="divp"><a href="javascript:showmenu('#menu_top1','#smenu1')">[ x ]</a></div>
<ul class="ulmenu_left"><li><a href="content.php?id=3">การบริหารงาน</a></li><li><a href="content.php?id=4">ข้อมูล มก.</a></li><li><a href="content.php?id=12">ข้อมูลที่ตั้งวิทยาเขต</a></li><li><a href="content.php?id=17">ความเป็นอยู่ใน มก.</a></li><li><a href="content.php?id=14">ประวัติมหาวิทยาลัย</a></li></ul><ul class="ulmenu_right"><li><a href="content.php?id=13">ปรัชญา วิสัยทัศน์ ภารกิจ ปณิธาน ค่านิยมหลัก</a></li><li><a href="content.php?id=15">สถานที่สำคัญ</a></li><li><a href="content.php?id=16">แผนผังมหาวิทยาลัย</a></li></ul><br/><br/></div>
</div>
<div id="menu_top2"  style="display:none; margin:0px 0px 0px 190px;"><img class="bt_img" src="images/index/menu02_.jpg" alt="" onclick="javascript:hidemenu('#menu_top2','#smenu2')"/>
<div  class="submenu"id="smenu2" style="margin:0px 0px 0px -190px;">
<div align="right" class="divp"><a href="javascript:showmenu('#menu_top2','#smenu2')">[ x ]</a></div>
<ul class="ulmenu_left"><li><a href="content.php?id=8#kps1">วิทยาเขตกำแพงแสน</a></li><li><a href="content.php?id=8">วิทยาเขตบางเขน</a></li><li><a href="content.php?id=8#src2">วิทยาเขตศรีราชา</a></li></ul><ul class="ulmenu_right"><li><a href="content.php?id=8#csn3">วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร </a></li><li><a href="content.php?id=8#other4">หน่วยงานอื่น ๆ </a></li></ul><br/><br/></div>
</div>
<div id="menu_top3"  style="display:none; margin:0px 0px 0px 361px;"><img class="bt_img" src="images/index/menu03_.jpg" alt="" onclick="javascript:hidemenu('#menu_top3','#smenu3')"/>
<div class="submenu" id="smenu3" style="margin:0px 0px 0px -361px;">
<div align="right" class="divp"><a href="javascript:showmenu('#menu_top3','#smenu3')">[ x ]</a></div>
<ul class="ulmenu_left"><li><a href="http://www.eduserv.ku.ac.th/index.php?method=eduserv/curriculum/announce/education">รับนักเรียนเข้าศึกษาต่อ</a></li><li><a href="http://www.interprogram.ku.ac.th/">หลักสูตรนานาชาติ</a></li><li><a href="content.php?id=19">หลักสูตรปริญญาตรี</a></li></ul><ul class="ulmenu_right"><li><a href="content.php?id=47">หลักสูตรระดับบัณฑิตศึกษา</a></li></ul><br/><br/></div>
</div>
<div id="menu_top4"  style="display:none; margin:0px 0px 0px 541px;"><img class="bt_img" src="images/index/menu04_.jpg" alt="" onclick="javascript:hidemenu('#menu_top4','#smenu4')"/>
<div class="submenu" id="smenu4" style="margin:0px 0px 0px -541px;">
<div align="right" class="divp"><a href="javascript:showmenu('#menu_top4','#smenu4')">[ x ]</a></div>
<ul class="ulmenu_left"><li><a href="http://kasetsartjournal.ku.ac.th/">ku journal</a></li><li><a href="http://pr.ku.ac.th/pr_news/research/main.htm">ข่าวงานวิจัย มก.</a></li><li><a href="http://www.rdi.ku.ac.th/data_propagate/frame_exhibition.htm">รวมนิทรรศการนวัตกรรมงานวิจัย</a></li><li><a href="http://pindex.ku.ac.th/">ระบบฐานข้อมูลการตีพิมพ์ </a></li><li><a href="http://research.rdi.ku.ac.th/kur3/login.aspx">ระบบฐานข้อมูลทางการวิจัย มหาวิทยาลัยเกษตรศาสตร์</a></li><li><a href="content.php?id=28">ศูนย์วิจัยนวัตกรรมอาหารและบริการที่ปรึกษา มก.</a></li><li><a href="content.php?id=52">สถานีวิทยุ มก.</a></li></ul><ul class="ulmenu_right"><li><a href="content.php?id=53">สภาข้าราชการ มก.</a></li><li><a href="http://kuservice.ku.ac.th/">สำนักงานบริการวิชาการ</a></li><li><a href="http://www.eto.ku.ac.th/">สำนักส่งเสริมและฝึกอบรม</a></li><li><a href="http://ku-numthai.rdi.ku.ac.th/">เกษตรศาสตร์นำไทย</a></li><li><a href="http://hospital.vet.ku.ac.th/">โรงพยาบาลสัตว์ มก. บางเขน</a></li></ul><br/><br/></div>
</div>
<div id="menu_top5"  style="display:none; margin:0px 0px 0px 722px;"><img class="bt_img" src="images/index/menu05_.jpg" alt="" onclick="javascript:hidemenu('#menu_top5','#smenu5')"/>
<div class="submenu" id="smenu5" style="margin:0px 0px 0px -722px;">
<div align="right" class="divp"><a href="javascript:showmenu('#menu_top5','#smenu5')">[ x ]</a></div>
<ul class="ulmenu_left"><li><a href="content.php?id=31">ระบบสารสนเทศ</a></li><li><a href="content.php?id=30">ห้องสมุดออนไลน์</a></li><li><a href="http://www.cpc.ku.ac.th/">เว็บสำนักบริการคอมพิวเตอร์</a></li></ul><ul class="ulmenu_right"><li><a href="http://www.lib.ku.ac.th/">เว็บสำนักหอสมุด</a></li></ul><br/><br/></div>
</div>
<div id="quick_1" style="z-index:5000"><span id="quickb" style="z-index:5000">
<div align="right" class="divp"><a href="javascript:showmenu('#quick_1','#quickb')">[ x ]</a></div><div style="text-align:center;">
<div style="width:700px;"><span style="float:left; width:165px; padding:5px;"><a href="http://www.ku.ac.th/kunews/line_ku.html"><img src="images/banner/00017_banner.gif" alt="ร่าง พรบ. มหาวิทยาลัยในกำกับ" ></a><a href="http://www.person.ku.ac.th/sum_res.html"><img src="images/banner/00013_banner.gif" alt="สรุปมติย่อที่ประชุม อกม." ></a><a href="http://www.gad.ku.ac.th/summarize_council.html"><img src="images/banner/00014_banner.gif" alt="สรุปมติย่อที่ประชุมสภา มก." ></a><a href="http://www.gad.ku.ac.th/summarize_dean.html"><img src="images/banner/00015_banner.gif" alt="สรุปมติย่อที่ประชุมคณบดี" ></a><a href="https://www.regis.ku.ac.th/assessku/"><img src="images/banner/00026_banner.gif" alt="ระบบความพึงพอใจของนิสตต่อ มก.  " ></a></span><span style="float:left; width:165px; padding:5px;"><a href="http://www.planning.ku.ac.th/planning/index.php?option=com_content&task=view&id=83&itemid=119"><img src="images/banner/00002_banner.gif" alt="นโยบายและผลงานของ มก." ></a><a href="http://ku-online.ku.ac.th/"><img src="images/banner/00003_banner.gif" alt="ku online" ></a><a href="http://live.ku.ac.th/"><img src="images/banner/00004_banner.gif" alt="nontri live" ></a><a href="http://download.ku.ac.th/"><img src="images/banner/00006_banner.gif" alt="kasetsart download" ></a><a href="http://kasetsartjournal.ku.ac.th/"><img src="images/banner/00007_banner.gif" alt="วิทยาสารเกษตรศาสตร์" ></a></span><span style="float:left; width:165px; padding:5px;"><a href="http://kucity.kasetsart.org/kucity/"><img src="images/banner/00018_banner.gif" alt="ku city" ></a><a href="http://www.psdb.ku.ac.th/government/index.html"><img src="images/banner/00020_banner.gif" alt="ศูนย์ราชการใสสะอาด" ></a><a href="http://www.rdi.ku.ac.th/index_manual/manual_kurdi/document_pragard/year2548/01/index01.html"><img src="images/banner/00021_banner.gif" alt="สถาบันวิจัยฯ ให้บริการปรึกษาวิจัย" ></a><a href="http://www.eduserv.ku.ac.th/ideal_grad/033.php"><img src="images/banner/00016_banner.gif" alt="เครือข่ายสถาบันอุดมศึกษา" ></a></span><span style="float:left; width:165px; padding:5px;"><a href="http://www.gpf.or.th/"><img src="images/banner/00024_banner.jpg" alt="กองทุนบำเหน็จบำนาญข้าราชการ" ></a><a href="http://www.gs1thailand.org/"><img src="images/banner/00022_banner.gif" alt="สถาบันรหัสสากล" ></a><a href="http://www.mict.go.th/re_complaint.php"><img src="images/banner/00023_banner.gif" alt="รับแจ้งเว็บไซต์ไม่เหมาะสม" ></a></span></div></div></span></div>
<span id="quick_2" style="z-index:5000"><span id="quickc" style="z-index:10000">﻿<table width="100%" border="0" cellpadding="0" cellspacing="3" id="divh">
		<tr>
		<td valign="top" class="divhtopic" hight="16px">quick link</td>
		<td >&nbsp;</td>
		<td >&nbsp;</td>
		<td align="right" valign="top"><ul><a href="javascript:showmenu('#quick_2','#quickc')">[ x ]</a></ul>&nbsp;</td>
		</tr>
		<tr>
	<td valign="top" >
		<ul><a href="https://ex-assess.ku.ac.th/">ระบบประเมินผลการบริหารงานของคณบดี ผอ.สำนัก/สถาบัน</a></ul>
		<ul><a href="https://ex-meeting.ku.ac.th/">ระบบประชุมอิเล็กทรอนิกส์</a></ul>
		<ul><a href="https://eassess.ku.ac.th/">ระบบประเมินการเรียนการสอน</a></ul>
		<ul><a href="http://ku-work.ku.ac.th/">ระบบรายงานข้อมูลอาจารย์</a></ul>
		<ul><a href="https://std.regis.ku.ac.th/">ระบบสารสนเทศนิสิต</a></ul>
		<ul><a href="https://std.regis.ku.ac.th/adv_checkregis/">ระบบติดตามผลการลงทะเบียนนิสิต</a></ul>
		<ul><a href="http://course.ku.ac.th ">ระบบสนับสนุนการเรียนการสอน m@xlearn</a></ul>
		<ul><a href="https://phpweb.cpc.ku.ac.th:8443/eoffice/">ระบบหนังสือเวียน</a></ul>
		<ul><a href="https://grade.ku.ac.th">ระบบเกรดออนไลน์</a></ul>
		<ul><a href="https://acc3d.ku.ac.th/">ระบบบัญชี 3 มิติ</a></ul>
		<ul><a href="https://www.regis.ku.ac.th/request/">ระบบคำร้องขอเอกสารการศึกษา</a></ul>
		<ul><a href="http://kuservice.ku.ac.th/kuservice/webapp/home/index.php">ระบบฐานข้อมูลพัฒนาวิชาการ</a></ul>
		<ul><a href="https://www.regis.ku.ac.th/assessku/">ระบบความพึงพอใจของนิสิตต่อ มก.</a></ul>
		<ul><a href="http://personinfo.cpc.ku.ac.th/bi_test/index.php">report bi สำหรับผู้บริหาร</a></ul>
		<ul><a href="http://kasetsartjournal.ku.ac.th/">ku journal</a></ul>
	</td>
		<td valign="top"></ul>
		<ul><a href="http://www.rc.ku.ac.th/">สภาข้าราชการ มก.</a></ul>
		<ul><a href="http://www.inf.ku.ac.th/">สถานพยาบาล มก.</a></ul>
		<ul><a href="http://www.registrar.ku.ac.th/">สำนักทะเบียนและประมวลผล</a></ul>
		<ul><a href="http://ku-press.ku.ac.th/">สำนักพิมพ์ มก.</a></ul>
		<ul><a href="http://www.lib.ku.ac.th/">ห้องสมุด</a></ul>
		<ul><a href="http://archives.psd.ku.ac.th/">หอจดหมายเหตุ มก.</a></ul>
		<ul><a href="http://www.cpc.ku.ac.th/">บริการคอมพิวเตอร์</a></ul>
		<ul><a href="http://www.grad.ku.ac.th/">บัณฑิตวิทยาลัย</a></ul>
		<ul><a href="http://pr.ku.ac.th/">ประชาสัมพันธ์ มก.</a></ul>
		<ul><a href="http://rdi.ku.ac.th">สถาบันวิจัยและพัฒนาแห่ง มก.</a></ul>
		<ul><a href="http://www.qa.ku.ac.th/">สำนักประกันคุณภาพ</a></ul>
		<ul><a href="http://kubook.ku.ac.th/">ศูนย์หนังสือ มก.</a></ul>
		
	</td>
		<td valign="top"></ul>
		<ul><a href="http://www.eduserv.ku.ac.th/54comment/">สายตรงถึงรองอธิการบดีฝ่ายวิชาการ
</a></ul>
		<ul><a href="http://registrar.ku.ac.th/student/calendar/calendar53">ปฏิทินการศึกษา</a></ul>
		<ul><a href="http://nisit.kasetsart.org/">transcript กิจกรรมนิสิต</a></ul>
		<ul><a href="http://agkc.lib.ku.ac.th/agkc/index.html">ศูนย์ความรู้ด้านการเกษตร</a></ul>
		<ul><a href="content_level.php?menulevel=114">สารสนเทศเกษตร</a></ul>
		<ul><a href="http://eduserv.ku.ac.th/idealgrad/">เครือข่ายสถาบันอุดมศึกษา</a></ul>
		<ul><a href="http://www.person.ku.ac.th/training/kukm/">การจัดการความรู้ มก.</a></ul>
		<ul><a href="https://directory.ku.ac.th/">ข้อมูลนามานุกรม</a></ul>
		<ul><a href="http://www.ku.ac.th/kunews/news52/12/reward2552/">สรุปผลงาน รางวัลเด่น ปี 2552</a></ul>
		<ul><a href="http://www.ku.ac.th/newdesign/hilight_detail.php?highlightid=69">รางวัลนักวิจัย ปี 2553</a></ul>
         <ul><a href="http://www.ku.ac.th/kunews/news54/10/award_54.pdf">ผลงานทางวิชาการที่โดดเด่น ปี 2554</a> <img src ="http://www.ku.ac.th/images/update.gif"></ul>
		 <ul><a href="http://www.ku.ac.th/newdesign/hilight_detail.php?highlightid=3">รวมรางวัล มก.ได้รับการจัดอันดับมหาวิทยาลัยโลกบนเว็บ</a> </ul>
		 <ul><a href="http://www.ku.ac.th/nontri_news/20110830.pdf">ผลงานที่น่าสนใจของวิทยาเขตกำแพงแสน <br>และวิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร ปี 2554</a></ul>
		<ul><a href="http://www.avh.de">ทุน alexander von humboldt fellowship</a></ul>
	</td></tr></table></span></span>
<span id="spann1" style="z-index:5000"><span id="spanna">
<table width="100%" border="0" cellpadding="0" cellspacing="3" id="divh">
		<tr>
		<td valign="top" class="divhtopic" hight="16px">นิสิต</td>
		<td valign="top" >&nbsp;</td>
		<td align="right" valign="top"><ul><a href="javascript:showmenu('#spann1','#spanna')">[ x ]</a></ul>&nbsp;</td>
		</tr>
		<tr>
		<td valign="top" ></ul><ul>ข้อควรรู้สำหรับนิสิต<li><a href="http://www.registrar.ku.ac.th/node/263">ประกาศข้อบังคับ</a></li><li><a href="http://newgrad.sa.ku.ac.th/">โครงการบัณฑิตยุคใหม่ </a></li><li><a href="menutop_detail.php?mid=015">การจัดการศึกษาและการเรียนการสอน</a></li><li><a href="https://www.regis.ku.ac.th">ระบบสารสนเทศนิสิต</a></li><li><a href="http://www.planning.ku.ac.th/planning/downloads/work_ku.htm">สารสนเทศผู้สำเร็จการศึกษาและภาวะการหางานทำ</a></li></ul><ul>การศึกษาในมหาวิทยาลัย<li><a href="http://registrar.ku.ac.th/student/calendar/calendar52">ปฏิทินการศึกษา</a></li><li><a href="https://www.regis.ku.ac.th">การลงทะเบียนออนไลน์ และตรวจสอบผลการเรียน</a></li><li><a href="https://www.regis.ku.ac.th/cpcpom/login.php">ระเบียนประวัตินิสิตใหม่</a></li><li><a href="https://course.ku.ac.th">คอร์สออนไลน์</a></li><li><a href="http://www.registrar.ku.ac.th/timetables">ตารางเรียน</a></li><li><a href="http://www.registrar.ku.ac.th/student/body/examination%20guide.htm">ระเบียบการสอบ</a></li><li><a href="http://www.registrar.ku.ac.th/examinations">ตารางสอบ</a></li><li><a href="http://www.sa.ku.ac.th/jobhandbook/jobindex.html">คู่มือการหางานทำสำหรับนิสิตชั้นปีสุดท้าย มหาวิทยาลัยเกษตรศาสตร์</a></li></ul><ul>ทุนการศึกษา<li><a href="http://www.studentloan.ktb.co.th/">กองทุนเงินให้กู้ยืมเพื่อการศึกษา</a></li><li><a href="http://www.sa.ku.ac.th/safety-index.html">กองทุนสวัสดิภาพนิสิต</a></li></ul></td><td valign="top"></ul><ul>แหล่งความรู้ครบวงจร<li><a href="menutop_detail.php?mid=022">ห้องสมุดที่ทันสมัย</a></li><li><a href="menutop_detail.php?mid=024">ศูนย์หนังสือมหาวิทยาลัยเกษตรศาสตร์</a></li><li><a href="menutop_detail.php?mid=025">kasetsart it square (kits)</a></li><li><a href="menutop_detail.php?mid=026">แหล่งฝึกฝนทักษะทางภาษา</a></li><li><a href="menutop_detail.php?mid=028">หอจดหมายเหตุ</a></li><li><a href="menutop_detail.php?mid=029">สถานีวิทยุ มก.</a></li><li><a href="menutop_detail.php?mid=030">การให้บริการด้านอาหาร</a></li><li><a href="menutop_detail.php?mid=031">การบริการรักษาสัตว์ครบวงจร</a></li><li><a href="menutop_detail.php?mid=032">สภาพแวดล้อมในมหาวิทยาลัย</a></li><li><a href="menutop_detail.php?mid=034">แหล่งท่องเที่ยวในมหาวิทยาลัย</a></li></ul><ul>หน่วยงานบริการนิสิต<li><a href="menutop_detail.php?mid=057">กองบริการการศึกษา</a></li><li><a href="menutop_detail.php?mid=058">กองกิจการนิสิต</a></li><li><a href="http://www.intaff.ku.ac.th/intro.html">กองวิเทศสัมพันธ์</a></li><li><a href="menutop_detail.php?mid=060">สำนักทะเบียนและประมวลผล</a></li><li><a href="menutop_detail.php?mid=061">สำนักบริการคอมพิวเตอร์</a></li><li><a href="menutop_detail.php?mid=062">สำนักหอสมุด</a></li><li><a href="menutop_detail.php?mid=063">สำนักการกีฬา</a></li><li><a href="menutop_detail.php?mid=064">บัณฑิตวิทยาลัย</a></li></ul><ul>ชมรม/ชุมนุม นิสิต มก.<li><a href="http://sa.sa.ku.ac.th/">ศูนย์ประสานกิจกรรมนิสิต</a></li><li><a href="http://www.nisit.ku.ac.th">เว็บเพจชมรม มก.</a></li><li><a href="menutop_detail.php?mid=078">รายชื่อสโมสรนิสิต/ชมรมกิจกรรมด้านต่างๆ</a></li></ul></td><td valign="top"></ul><ul>บริการของมหาวิทยาลัย<li><a href="menutop_detail.php?mid=035">บัญชีผู้ใช้เครือข่ายนนทรี</a></li><li><a href="menutop_detail.php?mid=036">เชื่อมใช้เครือข่าย</a></li><li><a href="https://webmail.ku.ac.th/">เว็บเมล์</a></li><li><a href="menutop_detail.php?mid=038">บริการเว็บเพจส่วนบุคคล</a></li><li><a href="menutop_detail.php?mid=039">บริการเว็บเพจกลุ่มกิจกรรม</a></li><li><a href="menutop_detail.php?mid=040">บริการเครือข่ายไร้สาย</a></li><li><a href="menutop_detail.php?mid=041">ห้องปฏิบัติการคอมพิวเตอร์</a></li><li><a href="menutop_detail.php?mid=042">ให้คำปรึกษาแนะนำด้านคอมพิวเตอร์</a></li><li><a href="menutop_detail.php?mid=043">ศูนย์บริการมัลติมีเดีย</a></li><li><a href="menutop_detail.php?mid=044">บริการห้องสมุด</a></li><li><a href="http://edutainment.ku.ac.th/">บริการ edutainment</a></li><li><a href="menutop_detail.php?mid=046">สถานีวิทยุ มก.</a></li></ul><ul>หลักสูตรการศึกษา<li><a href="http://eduserv.ku.ac.th/phase_ii/search/">ระบบสืบค้นข้อมูลหลักสูตร/รายวิชา</a></li><li><a href="http://eduserv.ku.ac.th/organization/curriculum/catalog_thai.php">โครงสร้างหลักสูตรและคำอธิบายรายวิชาระดับปริญญาตรี</a></li></ul></td></tr></table></span></span>
<span id="spann2" style="z-index:5000"><span id="spannb">
<table width="100%" border="0" cellpadding="0" cellspacing="3" id="divh">
		<tr>
		<td valign="top" class="divhtopic" hight="16px">บุคลากร</td>
		<td valign="top" >&nbsp;</td>
		<td align="right" valign="top"><ul><a href="javascript:showmenu('#spann2','#spannb')">[ x ]</a></ul>&nbsp;</td>
		</tr>
		<tr>
		<td valign="top" ></ul><ul>ข้อควรรู้สำหรับบุคลากร/อาจารย์<li><a href="menutop_detail.php?mid=080">คู่มือบุคลากร</a></li><li><a href="http://www.person.ku.ac.th/knows.html">ข้อควรรู้สำหรับบุคลากร</a></li><li><a href="menutop_detail.php?mid=082">จรรยาบรรณอาจารย์มหาวิทยาลัย</a></li><li><a href="menutop_detail.php?mid=083">มาตรฐานภาระงานข้ำต่ำในฐานะอาจารย์ผู้สอนในมหาวิทยาลัย</a></li><li><a href="menutop_detail.php?mid=084">การประสานงานแหล่งข้อมูลเกี่ยวกับการเรียนการสอนสำหรับอาจารย์ที่ปรึกษา วิทยาเขตบางเขน</a></li><li><a href="menutop_detail.php?mid=085">สภาข้าราชการ มก.</a></li><li><a href="http://www.ku.ac.th/kunews/news52/2/gen02-249-2552.pdf">ประกาศการรักษาระยะเวลามาตรฐานการให้บริการ พ.ศ. 2552</a></li></ul><ul>สวัสดิการต่าง ๆ<li><a href="menutop_detail.php?mid=108">การเบิกค่ารักษาพยาบาล/ค่าเล่าเรียนบุตร</a></li><li><a href="menutop_detail.php?mid=109">กองทุนสวัสดิภาพบุคลากร</a></li><li><a href="http://www.coop.ku.ac.th">สหกรณ์ออมทรัพย์มหาวิทยาลัยเกษตรศาสตร์ </a></li></ul></td><td valign="top"></ul><ul>สารสนเทศสำหรับบุคลากร/อาจารย์<li><a href="menutop_detail.php?mid=088">โครงการศึกษาเพื่อจัดทำยุทธศาสตร์การวิจัยกลุ่มจังหวัด : ภาคกลาง </a></li><li><a href="https://www.regis.ku.ac.th/">ตรวจสอบผลการเรียนการลงทะเบียน ของนิสิต</a></li><li><a href="https://portal.ku.ac.th">ku web portal</a></li><li><a href="http://mic.ku.ac.th">ku mic (management information center)</a></li><li><a href="menutop_detail.php?mid=092">โครงการมองอนาคตมหาวิทยาลัยเกษตรศาสตร์ พ.ศ. 2566 (ku foresight 2566)</a></li></ul><ul>หน่วยงานบริการ<li><a href="menutop_detail.php?mid=112">กองการเจ้าหน้าที่</a></li></ul></td><td valign="top"></ul><ul>บริการของมหาวิทยาลัย<li><a href="menutop_detail.php?mid=096">บัญชีผู้ใช้เครือข่ายนนทรี </a></li><li><a href="menutop_detail.php?mid=097">เชื่อมใช้เครือข่าย</a></li><li><a href="https://webmail.ku.ac.th/">เว็บเมล์ </a></li><li><a href="menutop_detail.php?mid=099">บริการเว็บเพจส่วนบุคคล</a></li><li><a href="menutop_detail.php?mid=100">บริการเว็บเพจกลุ่มกิจกรรม</a></li><li><a href="menutop_detail.php?mid=101">บริการเครือข่ายไร้สาย</a></li><li><a href="menutop_detail.php?mid=102">ห้องปฏิบัติการคอมพิวเตอร์</a></li><li><a href="menutop_detail.php?mid=103">ให้คำปรึกษาแนะนำด้านคอมพิวเตอร์ </a></li><li><a href="menutop_detail.php?mid=104">ศูนย์บริการมัลติมีเดีย</a></li><li><a href="menutop_detail.php?mid=105">บริการห้องสมุด</a></li><li><a href="http://edutainment.ku.ac.th/">บริการ edutainment</a></li></ul></td></tr></table></span></span>
<span id="spann3" style="z-index:5000"><span id="spannc">
<table width="100%" border="0" cellpadding="0" cellspacing="3" id="divh">
		<tr>
		<td valign="top" class="divhtopic" hight="16px">ศิษย์เก่า</td>
		<td valign="top" >&nbsp;</td>
		<td align="right" valign="top"><ul><a href="javascript:showmenu('#spann3','#spannc')">[ x ]</a></ul>&nbsp;</td>
		</tr>
		<tr>
		<td valign="top" ></ul><ul><a href="http://www.ku-alumni.org/">สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์</a></ul><ul><a href="https://portal.ku.ac.th/cpcvrt/questionaire/">บันทึกข้อมูลประวัติผู้สำเร็จการศึกษา และภาวะการหางานทำ</a></ul></td><td valign="top"></ul><ul><a href="http://www.ku.ac.th/alumna/ku_man_intellect.pdf">เชิดชูเกียรติยศ เกษตรศาสตร์ปราดเปรื่อง</a></ul><ul><a href="menutop_detail.php?mid=116">บริการ e-mail address for life สำหรับศิษย์เก่า</a></ul></td></tr></table></span></span>
<span id="spann4" style="z-index:5000"><span id="spannd">
<table width="100%" border="0" cellpadding="0" cellspacing="3" id="divh">
		<tr>
		<td valign="top" class="divhtopic" hight="16px">ผู้ปกครอง</td>
		<td valign="top" >&nbsp;</td>
		<td align="right" valign="top"><ul><a href="javascript:showmenu('#spann4','#spannd')">[ x ]</a></ul>&nbsp;</td>
		</tr>
		<tr>
		<td valign="top" ></ul><ul>หลักสูตรการศึกษา<li><a href="menutop_detail.php?mid=118">ปริญญาตรี</a></li><li><a href="menutop_detail.php?mid=119">ปริญญาโท</a></li><li><a href="menutop_detail.php?mid=120">ปริญญาเอก</a></li><li><a href="menutop_detail.php?mid=121">การศึกษานานาชาติ</a></li><li><a href="http://newgrad.sa.ku.ac.th/">กิจกรรมเสริมหลักสูตร (โครงการบัณฑิตยุคใหม่)</a></li><li><a href="http://eduserv.ku.ac.th/phase_ii/search/">ระบบสืบค้นข้อมูลหลักสูตร/รายวิชา</a></li><li><a href="http://eduserv.ku.ac.th/organization/curriculum/catalog_thai.php">โครงสร้างหลักสูตรและคำอธิบายรายวิชาระดับปริญญาตรี </a></li></ul></td><td valign="top"></ul><ul>หน่วยงานบริการนิสิต<li><a href="menutop_detail.php?mid=126">กองบริการการศึกษา </a></li><li><a href="menutop_detail.php?mid=127">กองกิจการนิสิต</a></li><li><a href="http://www.intaff.ku.ac.th/intro.html">กองวิเทศสัมพันธ์</a></li><li><a href="menutop_detail.php?mid=129">สำนักทะเบียนและประมวลผล</a></li><li><a href="menutop_detail.php?mid=130">สำนักบริการคอมพิวเตอร์</a></li><li><a href="menutop_detail.php?mid=131">สำนักหอสมุด</a></li><li><a href="menutop_detail.php?mid=132">สำนักการกีฬา</a></li><li><a href="menutop_detail.php?mid=133">บัณฑิตวิทยาลัย</a></li></ul></td><td valign="top"></ul><ul>กิจกรรมนิสิต<li><a href="http://www.pr.ku.ac.th">กิจกรรมมหาวิทยาลัย</a></li><li><a href="http://www.registrar.ku.ac.th/node/263">ประกาศและข้อบังคับ</a></li><li><a href="http://www.kucity.com">กิิจกรรมนิสิต ผลงานนิสิต</a></li><li><a href="http://www.ku.ac.th/newwww/content.php?id=8">คณะต่างๆ</a></li></ul><ul>ผลการเรียน<li><a href="https://www.regis.ku.ac.th/cpcstk/kuparents/">รายงานผลการเรียนนิสิต</a></li></ul></td></tr></table></span></span>
<span id="spann6" style="z-index:5000"><span id="spannf">
<table width="100%" border="0" cellpadding="0" cellspacing="3" id="divh">
<tr>
<td valign="top" class="divhtopic" hight="16px">วิทยาเขต</td>
<td valign="top" >&nbsp;</td>
<td align="right" valign="top"><ul><a href="javascript:showmenu('#spann6','#spannf')">[ x ]</a></ul>&nbsp;</td>
</tr>
<tr>
<td valign="top" ></ul><ul><a href="http://www.kps.ku.ac.th/index.php">วิทยาเขตกำแพงแสน</a></ul><ul><a href="http://www.src.ku.ac.th/">วิทยาเขตศรีราชา</a></ul></td><td valign="top"></ul><ul><a href="http://www.csc.ku.ac.th/">วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร</a></ul>
<ul><a href="http://www.sbc.ku.ac.th/">โครงการจัดตั้งวิทยาเขตสุพรรณบุรี</a></ul></td></tr></table></span></span>
</div>
<span id="menu_top" style="display:none;"><span id="smenu" ></span></span></div>	</td>
  </tr>
</table>
<table width="901" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="7" valign="top"></td>
  </tr>
  <tr>
    <td height="10" valign="top"><table width="891" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="right"><img src="images/home/home.png" align="middle"> <a href="index.php" >หน้าแรก</a> / <span class="txtmain">แผนผังเว็บไซต์</span> </td>
      </tr>
    </table>
      <table border="0" cellspacing="0" cellpadding="0" width="99%">
<tbody><tr>
<td background="images/index/tiopic_bg.gif" colspan="3">
	<table border="0" cellspacing="0" cellpadding="0" width="734">
	<tbody>
	<tr>
		<td width="226"><img alt="" width="226" height="50" src="images/index/sitemap1.gif" /></td>
		<td background="../images/tiopic_bg.gif" width="508">&nbsp;</td>
	</tr>
	</tbody>
	</table><style type="text/css">
a:hover{ color:#666666;text-decoration:underline;}
a:active {color: #666666;text-decoration:underline;}
a,a:visited,a:link {color: #339966;text-decoration:none;}
li{ color:#339966 }
ul{ list-style-type:disc; list-style:outside; color:339966; margin-top:3px; margin-bottom:0px;}</style>
</td>
</tr>
<tr bgcolor="#339933">
<td colspan="3" align="center" style="color:#ffffff"><strong>หน้าหลัก</strong></td>
</tr>
<tr bgcolor="#ccea95">
<td width="49%" style="color:#669900"><strong style="padding-left:28px">แนะนำมหาวิทยาลัย</strong></td>
<td>&nbsp;</td>
<td width="51%" style="color:#669900"><strong style="padding-left:28px">คณะและหน่วยงาน</strong></td>
</tr>
<tr>
<td height="144" valign="top">
<ul>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=3">การบริหารงาน</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=4">ข้อมูล มก.</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=12">ข้อมูลที่ตั้งวิทยาเขต</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=17">ความเป็นอยู่ใน มก.</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=14">ประวัติมหาวิทยาลัย</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=13">ปรัชญา วิสัยทัศน์ ภารกิจ ปณิธาน ค่านิยมหลัก</a></li>
<li><a href="http://www.ku.ac.th/tour/">สถานที่สำคัญ</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=16">แผนผังมหาวิทยาลัย</a></li></ul></td>
<td background="images/index/line3.gif" rowspan="8">&nbsp;</td>
<td height="144" valign="top">
<ul>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=35">วิทยาเขตกำแพงแสน</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=8">วิทยาเขตบางเขน</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=36">วิทยาเขตศรีราชา</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=37">วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร </a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=38">หน่วยงานอื่น ๆ</a></li></ul></td>
</tr>
<tr>
<td height="20">&nbsp;</td>
<td height="20">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">การเข้าศึกษา</strong></td>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">วิจัยและวิชาการ</strong></td>
</tr>
<tr>
  <td valign="top">
<ul><li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=20">ข่าวการรับเข้าศึกษา</a></li>
<li><a href="http://www.eduserv.ku.ac.th/index.php?method=eduserv/curriculum/announce/education">รับนักเรียนเข้าศึกษาต่อ</a></li>
<li><a href="http://www.interprogram.ku.ac.th/">หลักสูตรนานาชาติ</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=19">หลักสูตรปริญญาตรี</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=47">หลักสูตรระดับบัณฑิตศึกษา</a></li></ul></td>
  <td valign="top">
<ul><li><a href="http://kasetsartjournal.ku.ac.th/">ku journal</a></li>
<li><a href="http://pr.ku.ac.th/pr_news/research/main.htm">ข่าวงานวิจัย มก.</a></li>
<li><a href="http://www.rdi.ku.ac.th/data_propagate/frame_exhibition.htm">รวมนิทรรศการนวัตกรรมงานวิจัย</a></li>
<li><a href="http://pindex.ku.ac.th/">ระบบฐานข้อมูลการตีพิมพ์</a></li>
<li><a href="http://research.rdi.ku.ac.th/kur3/login.aspx">ระบบฐานข้อมูลทางการวิจัย มหาวิทยาลัยเกษตรศาสตร์</a></li>
<li><a href="http://radio.ku.ac.th/">สถานีวิทยุ มก</a></li>
<li><a href="http://kuservice.ku.ac.th/cms_web/index.php?q=home">สำนักงานบริการวิชาการ</a></li>
<li><a href="http://www.eto.ku.ac.th/">สำนักส่งเสริมและฝึกอบรม</a></li>
<li><a href="http://ku-numthai.rdi.ku.ac.th/">เกษตรศาสตร์นำไทย</a></li></ul></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">ห้องสมุดและไอที</strong></td>
<td bgcolor="#ccea95">&nbsp;</td>
</tr>
<tr>
<td>
<ul><li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=31">ระบบสารสนเทศ</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/content.php?id=30">ห้องสมุดออนไลน์</a></li>
<li><a href="http://www.cpc.ku.ac.th/">เว็บสำนักบริการคอมพิวเตอร์</a></li>
<li><a href="http://www.lib.ku.ac.th/">เว็บสำนักหอสมุด</a></li></ul></td>
<td valign="top">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr bgcolor="#339933">
<td bgcolor="#339933" colspan="3" align="center" style="color:#ffffff"><strong>นิสิต</strong></td>
</tr>
<tr bgcolor="#339933">
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">ข้อควรรู้สำหรับนิสิต</strong></td>
<td bgcolor="#ccea95">&nbsp;</td>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">การศึกษาในมหาวิทยาลัย</strong></td>
</tr>
<tr>
<td valign="top"><ul>
<li><a href="http://www.registrar.ku.ac.th/download/ประกาศข้อบังคับว่าด้วยการศึกษาขั้นปริญญา.htm">ข้อบังคับว่าด้วยการศึกษาขั้นปริญญาตรี พุทธศักราช 2548</a></li>
<li><a href="http://newgrad.sa.ku.ac.th/">โครงการบัณฑิตยุคใหม่ </a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=015">การจัดการศึกษาและการเรียนการสอน</a></li>
<li><a href="https://www.regis.ku.ac.th/">ระบบสารสนเทศนิสิต</a></li>
<li><a href="http://www.planning.ku.ac.th/planning/downloads/work_ku.htm">สารสนเทศผู้สำเร็จการศึกษาและภาวะการหางานทำ</a></li></ul></td>
<td background="images/index/line3.gif" rowspan="11">&nbsp;</td>
<td valign="top"><ul><li><a href="https://www.regis.ku.ac.th/">การลงทะเบียนออนไลน์ และตรวจสอบผลการเรียน</a></li>
<li><a href="https://www.regis.ku.ac.th/cpcpom/login.php">ระเบียนประวัตินิสิตใหม่</a></li>
<li><a href="https://course.ku.ac.th/">คอร์สออนไลน์</a></li>
<li><a href="http://www.registrar.ku.ac.th/timetables">ตารางเรียน</a></li>
<li><a href="http://www.registrar.ku.ac.th/student/body/examination%20guide.htm">ระเบียบการสอบ</a></li>
<li><a href="http://www.registrar.ku.ac.th/examinations">ตารางสอบ</a></li>
<li><a href="http://www.sa.ku.ac.th/jobhandbook/jobindex.html">คู่มือการหางานทำสำหรับนิสิตชั้นปีสุดท้าย มหาวิทยาลัยเกษตรศาสตร์</a></li></ul></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">แหล่งความรู้ครบวงจร</strong></td>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">บริการของมหาวิทยาลัย</strong></td>
</tr>
<tr bgcolor="#ffffff">
<td valign="top"><ul><li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=022">ห้องสมุดที่ทันสมัย</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=024">ศูนย์หนังสือมหาวิทยาลัยเกษตรศาสตร์</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=025">kasetsart it square (kits)</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=026">แหล่งฝึกฝนทักษะทางภาษา</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=028">หอจดหมายเหตุ</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=029">สถานีวิทยุ มก.</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=030">การให้บริการด้านอาหาร</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=031">การบริการรักษาสัตว์ครบวงจร</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=032">สภาพแวดล้อมในมหาวิทยาลัย</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=034">แหล่งท่องเที่ยวในมหาวิทยาลัย</a></li>
</ul></td>
<td><ul><li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=035">บัญชีผู้ใช้เครือข่ายนนทรี</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=036">เชื่อมใช้เครือข่าย</a></li>
<li><a href="https://webmail.ku.ac.th/">เว็บเมล์</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=038">บริการเว็บเพจส่วนบุคคล</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=039">บริการเว็บเพจกลุ่มกิจกรรม</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=040">บริการเครือข่ายไร้สาย</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=041">ห้องปฏิบัติการคอมพิวเตอร์</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=042">ให้คำปรึกษาแนะนำด้านคอมพิวเตอร์</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=043">ศูนย์บริการมัลติมีเดีย</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=044">บริการห้องสมุด</a></li>
<li><a href="http://edutainment.ku.ac.th/">บริการ edutainment</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=046">สถานีวิทยุ มก.</a></li></ul></td>
</tr>
<tr bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">หน่วยงานบริการนิสิต</strong></td>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">หลักสูตรการศึกษา</strong></td>
</tr>
<tr>
<td><ul>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=057">กองบริการการศึกษา</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=058">กองกิจการนิสิต</a></li>
<li><a href="http://www.intaff.ku.ac.th/intro.html">กองวิเทศสัมพันธ์</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=060">สำนักทะเบียนและประมวลผล</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=061">สำนักบริการคอมพิวเตอร์</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=062">สำนักหอสมุด</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=063">สำนักการกีฬา</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=064">บัณฑิตวิทยาลัย</a></li></ul></td>
<td valign="top"><ul><li><a href="http://eduserv.ku.ac.th/phase_ii/search/">ระบบสืบค้นข้อมูลหลักสูตร/รายวิชา</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=069">การศึกษานานาชาติ</a></li>
<li><a href="http://www.ku.ac.th/curriculum/bandit.html">กิจกรรมเสริมหลักสูตร (โครงการบัณฑิตยุคใหม่</a></li></ul></td></tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">ทุนการศึกษา</strong></td>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">ชมรม / ชุมนุม นิสิต มก.</strong></td>
</tr>
<tr>
<td valign="top"><ul><li><a href="http://www.studentloan.ktb.co.th/">กองทุนเงินให้กู้ยืมเพื่อการศึกษา</a></li>
<li><a href="http://www.sa.ku.ac.th/safety-index.html">กองทุนสวัสดิภาพนิสิต</a></li></ul></td>
<td><ul><li><a href="http://sa.sa.ku.ac.th/index.php?option=com_content&amp;task=view&amp;id=152&amp;itemid=1">ศูนย์ประสานกิจกรรมนิสิต</a></li>
<li><a href="http://www.nisit.ku.ac.th/">เว็บเพจชมรม มก.</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=078">รายชื่อสโมสรนิสิต/ชมรมกิจกรรมด้านต่างๆ</a></li></ul></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr bgcolor="#339933">
<td  colspan="3" align="center" style="color:#ffffff"><strong>บุคลากร</strong></td>
</tr>
<tr bgcolor="#ccea95">
<td style="color:#669900"><strong style="padding-left:28px">ข้อควรรุ้สำหรับบุคลากร/อาจารย์</strong></td>
<td>&nbsp;</td>
<td style="color:#669900"><strong style="padding-left:28px">สวัสดิการต่าง ๆ</strong></td>
</tr>
<tr>
<td><ul>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=080">คู่มือบุคลากร</a></li>
<li><a href="http://www.person.ku.ac.th/knows.html">ข้อควรรู้สำหรับบุคลากร</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=082">จรรยาบรรณอาจารย์มหาวิทยาลัย</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=083">มาตรฐานภาระงานข้ำต่ำในฐานะอาจารย์ผู้สอนในมหาวิทยาลัย</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=084">การประสานงานแหล่งข้อมูลเกี่ยวกับการเรียนการสอนสำหรับอาจารย์ที่ปรึกษา วิทยาเขตบางเขน</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=085">สภาข้าราชการ มก.</a></li>
<li><a href="http://www.ku.ac.th/kunews/news52/2/gen02-249-2552.pdf">ประกาศการรักษาระยะเวลามาตรฐานการให้บริการ พ.ศ. 2552</a></li>
</ul></td>
<td background="images/index/line3.gif" rowspan="9">&nbsp;</td>
<td valign="top">
<ul><li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=108">การเบิกค่ารักษาพยาบาล/ค่าเล่าเรียนบุตร</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=109">กองทุนสวัสดิภาพบุคลากร</a></li>
<li><a href="http://www.coop.ku.ac.th/">สหกรณ์ออมทรัพย์มหาวิทยาลัยเกษตรศาสตร์</a></li></ul></td>
</tr>
<tr bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr bgcolor="#ccea95">
<td style="color:#669900"><strong style="padding-left:28px">สารสนเทศสำหรับบุคลากร/อาจารย์</strong></td>
<td style="color:#669900"><strong style="padding-left:28px">บริการของมหาวิทยาลัย </strong></td>
<td>&nbsp;</td>
</tr>
<tr valign="top" bgcolor="#ffffff">
<td>
<ul><li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=088">โครงการศึกษาเพื่อจัดทำยุทธศาสตร์การวิจัยกลุ่มจังหวัด : ภาคกลาง </a></li>
<li><a href="https://www.regis.ku.ac.th/">ตรวจสอบผลการเรียนการลงทะเบียน ของนิสิต</a></li>
<li><a href="https://portal.ku.ac.th/">ku web portal</a></li>
<li><a href="http://mic.ku.ac.th/">ku mic (management information center)</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=092">โครงการมองอนาคตมหาวิทยาลัยเกษตรศาสตร์ พ.ศ. 2566 (ku foresight 2566)</a></li>
<li><a href="http://training.ku.ac.th/e-personal">โครงการพัฒนาความรู้ความสามารถของบุคลากร มก. สายสนับสนุนและช่วยวิชาการ (e-personal)</a></li>
<li><a href="http://training.ku.ac.th/e-teacher">โครงการพัฒนาความรู้ความสามารถของอาจารย์ มก. (e-teacher) </a></li>
</ul></td>
<td><ul>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=096">บัญชีผู้ใช้เครือข่ายนนทรี</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=097">เชื่อมใช้เครือข่าย</a></li>
<li><a href="https://webmail.ku.ac.th/">เว็บเมล์ </a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=099">บริการเว็บเพจส่วนบุคคล</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=100">บริการเว็บเพจกลุ่มกิจกรรม</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=101">บริการเครือข่ายไร้สาย</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=102">ห้องปฏิบัติการคอมพิวเตอร์</a></li>
<li><a href="http://www.ku.ac.th/learner/pclab.htmlhelpdesk.html">ให้คำปรึกษาแนะนำด้านคอมพิวเตอร์</a></li>
<li><a href="http://www.ku.ac.th/learner/pclab.htmlmultimedia.html">ศูนย์บริการมัลติมีเดีย</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=105">บริการห้องสมุด</a></li>
<li><a href="http://edutainment.ku.ac.th/">บริการ edutainment</a></li>
</ul></td>
<td>&nbsp;</td>
</tr>
<tr bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td rowspan="4">&nbsp;</td>
</tr>
<tr bgcolor="#ffffff">
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">หน่วยงานบริการ</strong></td>
<td bgcolor="#ccea95">&nbsp;</td>
</tr>
<tr bgcolor="#ffffff">
<td>
<ul>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=112">กองการเจ้าหน้าที่</a></li>
<li><a href="http://www.finance.ku.ac.th/">กองคลัง</a></li>
<li><a href="http://www.psdb.ku.ac.th/government/index.html">ศูนย์ราชการใสสะอาด</a></li></ul></td>
<td>&nbsp;</td>
</tr>
<tr bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr bgcolor="#339933">
<td colspan="3" align="center" style="color:#ffffff"><strong>ศิษย์เก่า</strong></td>
</tr>
<tr bgcolor="#ccea95">
<td style="color:#669900"><strong style="padding-left:28px">สมาคมศิษย์เก่ามหาวิทยาลัยเกษตรศาสตร์</strong></td>
<td>&nbsp;</td>
<td>
<div align="center">&nbsp;</div></td>
</tr>
<tr>
<td valign="top">
<ul><li><a href="http://www.ku-alumni.org/">สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์</a></li>
<li><a href="https://portal.ku.ac.th/cpcvrt/questionaire/">บันทึกข้อมูลประวัติผู้สำเร็จการศึกษา และภาวะการหางานทำ</a></li>
<li><a href="http://www.ku.ac.th/alumna/ku_man_intellect.pdf">เชิดชูเกียรติยศ เกษตรศาสตร์ปราดเปรื่อง</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=116">บริการ e-mail address for life สำหรับศิษย์เก่า</a></li>
</ul></td>
<td valign="top" background="images/index/line3.gif" rowspan="2">&nbsp;</td>
<td valign="top">&nbsp;</td>
</tr>
<tr bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr bgcolor="#339933">
<td colspan="3" align="center" style="color:#ffffff"><strong>ผู้ปกรอง</strong></td>
</tr>
<tr bgcolor="#ccea95">
<td style="color:#669900"><strong style="padding-left:28px">หลักสูตรการศึกษา</strong></td>
<td>&nbsp;</td>
<td style="color:#669900"><strong style="padding-left:28px">หน่วยงานบริการนิสิต</strong></td>
</tr>
<tr>
<td valign="top"><ul>
<li><a href="http://eduserv.ku.ac.th/phase_ii/search/">ระบบสืบค้นข้อมูลหลักสูตร/รายวิชา</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=121">การศึกษานานาชาติ</a></li>
<li><a href="http://www.ku.ac.th/curriculum/bandit.html">กิจกรรมเสริมหลักสูตร (โครงการบัณฑิตยุคใหม่)</a></li></ul></td>
<td background="images/index/line3.gif" rowspan="5">&nbsp;</td>
<td>
<ul><li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=126">กองบริการการศึกษา</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=127">กองกิจการนิสิต</a></li>
<li><a href="http://www.intaff.ku.ac.th/intro.html">กองวิเทศสัมพันธ์</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=129">สำนักทะเบียนและประมวลผล</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=130">สำนักบริการคอมพิวเตอร์</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=131">สำนักหอสมุด</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=132">สำนักการกีฬา</a></li>
<li><a href="http://ku.ac.th/newwww/newdesign/menutop_detail.php?mid=133">บัณฑิตวิทยาลัย</a></li>
</ul></td></tr>
<tr bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr bgcolor="#ffffff">
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">กิจกรรมนิสิต</strong></td>
<td bgcolor="#ccea95" style="color:#669900"><strong style="padding-left:28px">ผลการเรียน</strong></td>
</tr>
<tr>
<td>
<ul>
<li><a href="http://www.pr.ku.ac.th/">กิจกรรมมหาวิทยาลัย</a></li>
<li><a href="http://www.registrar.ku.ac.th/download/ประกาศข้อบังคับว่าด้วยก">ข้อบังคับว่าด้วยการศึกษาขั้นปริญญาตรี พุทธศักราช 2548</a></li>
<li><a href="http://www.kucity.com/">กิิจกรรมนิสิต ผลงานนิสิต</a></li>
<li><a href="http://www.ku.ac.th/newwww/content.php?id=8">คณะต่างๆ</a></li>
</ul></td>
<td valign="top"><ul><li><a href="https://www.regis.ku.ac.th/cpcstk/kuparents/">รายงานผลการเรียนนิสิต</a></li></ul></td>
</tr>
<tr bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>	  </td>
  </tr>
</table>
<table width="901" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="68" align="center" valign="bottom" id='tdfooter'><a href="http://www.ku.ac.th"><img src="images/webnew/fm01.jpg" width="85" height="27" border="0" /></a><a href="mailto:www@ku.ac.th"><img src="images/webnew/fm02.jpg" width="60" height="27" border="0" /></a><a href="footer_detail.php?footid=1"><img src="images/webnew/fm03.jpg" width="50" height="27" border="0" /></a><a href="footer_detail.php?footid=2"><img src="images/webnew/fm04.jpg" width="78" height="27" border="0" /></a><a href="footer_detail.php?footid=3"><img src="images/webnew/fm05.jpg" width="66" height="27" border="0" /></a><a href="sitemap.php"><img src="images/webnew/fm06.jpg" width="105" height="27" border="0" /></a></td>
  </tr>
  <tr>
    <td height="30" align="center" valign="bottom" id='tdfooter'>&nbsp;</td>
  </tr>
</table>
<table width="901" height="57" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="226" height="51" valign="bottom"><img src="images/index/logofooter.jpg" width="226" height="51" /></td>
    <td width="433" class="text10">เลขที่ 50 ถนนพหลโยธิน แขวงลาดยาว เขตจตุจักร กรุงเทพฯ 10900 <br />
      โทรศัพท์ 0-2579-0113, 0-2942-8500-11 
      
    ติดต่อผู้ดูแลระบบ  :  <a href="mailto:www@ku.ac.th">www@ku.ac.th</a></td>
    <td width="242" align="right" class="text10">copyright &copy; 2011 kasetsart university</td>
  </tr>
</table>
<table width="901" height="114" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="675" height="114" valign="top"><img src="images/index/footer.jpg" width="901" height="108" /></td>
  </tr>
</table>

</body>
</html>