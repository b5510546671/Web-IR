<!doctype html public "-//w3c//dtd xhtml 1.0 strict//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>k a s e t s a r t</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <div id="logo">
    <h1><a href="#">k a s e t s a r t</a></h1>
    <h2><a href="#">มหาวิทยาลัยเกษตรศาสตร์</a></h2>
  </div>
  <div id="menu">
    <ul>
      <li class="active"><a href="index.php" accesskey="1">หน้าแรก</a></li>
      <li class="active"><a href="contact.php" accesskey="2">ติดต่อ</a></li>
                <li class="active"><a href="register.php" accesskey="3">สมัครสมาชิก</a></li>
          <li class="active"><a href="login.php" accesskey="4">เข้าสู่ระบบ</a></li>
              </ul>
  </div>
</div><form action="" method="post" name="from1">
<script type="text/javascript" src="jquery-1.6.4.js"></script>
<script language="javascript">
//selectprovice
	function province_fun(rr) 
	   {
		  httprequest = false;
		  if (window.xmlhttprequest) 
		  { // mozilla, safari,...
			 httprequest = new xmlhttprequest();
			 if (httprequest.overridemimetype) {
				httprequest.overridemimetype('text/html');
			 }
		  } else if (window.activexobject) { // ie
			 try {
				httprequest = new activexobject("msxml2.xmlhttp");
			 } catch (e) {
				try {
				   httprequest = new activexobject("microsoft.xmlhttp");
				} catch (e) {}
			 }
		  } 
		  
		  if (!httprequest) {
			 alert('cannot create xmlhttp instance');
			 return false;
		  }
			
//			alert(document.getelementbyid("dist").value);
			var url = 'jp_show_province.php';
			var pros =  "rr="+document.getelementbyid("province").value; 
//			alert(pros);

			httprequest.open('post',url,true);

			httprequest.setrequestheader("content-type", "application/x-www-form-urlencoded");
			httprequest.setrequestheader("content-length", pros.length);
			httprequest.setrequestheader("connection", "close");
			httprequest.send(pros);
						
			httprequest.onreadystatechange = function()
			{
				 if(httprequest.readystate == 3)  // loading request
				  {
				   document.getelementbyid("div_pro").innerhtml = "now is loading...";
				  }

				 if(httprequest.readystate == 4) // return request
				  {
				   document.getelementbyid("div_pro").innerhtml = httprequest.responsetext;
				  }				
			}
	   }
<!------------------------------------------------------------------------------------------------------>
//select amphur
function amphur_fun(rr) 
	   {
		  httprequest = false;
		  if (window.xmlhttprequest) 
		  { // mozilla, safari,...
			 httprequest = new xmlhttprequest();
			 if (httprequest.overridemimetype) {
				httprequest.overridemimetype('text/html');
			 }
		  } else if (window.activexobject) { // ie
			 try {
				httprequest = new activexobject("msxml2.xmlhttp");
			 } catch (e) {
				try {
				   httprequest = new activexobject("microsoft.xmlhttp");
				} catch (e) {}
			 }
		  } 
		  
		  if (!httprequest) {
			 alert('cannot create xmlhttp instance');
			 return false;
		  }
			
//			alert(document.getelementbyid("dist").value);
			var url = 'jp_show_amphur.php';
			var pros =  "rr="+document.getelementbyid("amphur").value; 
//			alert(pros);

			httprequest.open('post',url,true);

			httprequest.setrequestheader("content-type", "application/x-www-form-urlencoded");
			httprequest.setrequestheader("content-length", pros.length);
			httprequest.setrequestheader("connection", "close");
			httprequest.send(pros);
						
			httprequest.onreadystatechange = function()
			{
				 if(httprequest.readystate == 3)  // loading request
				  {
				   document.getelementbyid("div_amphur").innerhtml = "now is loading...";
				  }

				 if(httprequest.readystate == 4) // return request
				  {
				   document.getelementbyid("div_amphur").innerhtml = httprequest.responsetext;
				  }
			}
	   }
<!------------------------------------------------------------------------------------------------------>
//select username_same
function username_same(rr) 
	   {
		  httprequest = false;
		  if (window.xmlhttprequest) 
		  { // mozilla, safari,...
			 httprequest = new xmlhttprequest();
			 if (httprequest.overridemimetype) {
				httprequest.overridemimetype('text/html');
			 }
		  } else if (window.activexobject) { // ie
			 try {
				httprequest = new activexobject("msxml2.xmlhttp");
			 } catch (e) {
				try {
				   httprequest = new activexobject("microsoft.xmlhttp");
				} catch (e) {}
			 }
		  } 
		  
		  if (!httprequest) {
			 alert('cannot create xmlhttp instance');
			 return false;
		  }
			
//			alert(document.getelementbyid("dist").value);
			var url = 'jp_show_checkusername.php';
			var pros =  "rr="+document.getelementbyid("name").value; 
//			alert(pros);

			httprequest.open('post',url,true);

			httprequest.setrequestheader("content-type", "application/x-www-form-urlencoded");
			httprequest.setrequestheader("content-length", pros.length);
			httprequest.setrequestheader("connection", "close");
			httprequest.send(pros);
						
			httprequest.onreadystatechange = function()
			{
				 if(httprequest.readystate == 3)  // loading request
				  {
				   document.getelementbyid("div_name").innerhtml = "now is loading...";
				  }

				 if(httprequest.readystate == 4) // return request
				  {
				   document.getelementbyid("div_name").innerhtml = httprequest.responsetext;
				  }
			}
	   }
<!------------------------------------------------------------------------------------------------------>
//select username_same1
function username_same1(rr) 
	   {
		  httprequest = false;
		  if (window.xmlhttprequest) 
		  { // mozilla, safari,...
			 httprequest = new xmlhttprequest();
			 if (httprequest.overridemimetype) {
				httprequest.overridemimetype('text/html');
			 }
		  } else if (window.activexobject) { // ie
			 try {
				httprequest = new activexobject("msxml2.xmlhttp");
			 } catch (e) {
				try {
				   httprequest = new activexobject("microsoft.xmlhttp");
				} catch (e) {}
			 }
		  } 
		  
		  if (!httprequest) {
			 alert('cannot create xmlhttp instance');
			 return false;
		  }
			
//			alert(document.getelementbyid("dist").value);
			var url = 'jp_show_checkusername1.php';
			var pros =  "rr="+document.getelementbyid("name").value + "rr1="+document.getelementbyid("hduser_id").value ; 
//			alert(pros);

			httprequest.open('post',url,true);

			httprequest.setrequestheader("content-type", "application/x-www-form-urlencoded");
			httprequest.setrequestheader("content-length", pros.length);
			httprequest.setrequestheader("connection", "close");
			httprequest.send(pros);
						
			httprequest.onreadystatechange = function()
			{
				 if(httprequest.readystate == 3)  // loading request
				  {
				   document.getelementbyid("div_name").innerhtml = "now is loading...";
				  }

				 if(httprequest.readystate == 4) // return request
				  {
				   document.getelementbyid("div_name").innerhtml = httprequest.responsetext;
				  }
			}
	   }
<!------------------------------------------------------------------------------------------------------>
//select citizen_same
function citizen_same(rr) 
	   { 
		  httprequest = false;
		  if (window.xmlhttprequest) 
		  { // mozilla, safari,...
			 httprequest = new xmlhttprequest();
			 if (httprequest.overridemimetype) {
				httprequest.overridemimetype('text/html');
			 }
		  } else if (window.activexobject) { // ie
			 try {
				httprequest = new activexobject("msxml2.xmlhttp");
			 } catch (e) {
				try {
				   httprequest = new activexobject("microsoft.xmlhttp");
				} catch (e) {}
			 }
		  } 
		  
		  if (!httprequest) {
			 alert('cannot create xmlhttp instance');
			 return false;
		  }
			
			//alert(document.getelementbyid("citizen").value);
			var url = 'jp_show_checkcitizen.php';
			var pros =  "rr="+document.getelementbyid("citizen").value ; 
			//alert(pros);

			httprequest.open('post',url,true);

			httprequest.setrequestheader("content-type", "application/x-www-form-urlencoded");
			httprequest.setrequestheader("content-length", pros.length);
			httprequest.setrequestheader("connection", "close");
			httprequest.send(pros);
						
			httprequest.onreadystatechange = function()
			{
				 if(httprequest.readystate == 3)  // loading request
				  {
				   document.getelementbyid("div_citizen").innerhtml = "now is loading...";
				  }

				 if(httprequest.readystate == 4) // return request
				  {
				   document.getelementbyid("div_citizen").innerhtml = httprequest.responsetext;
				  }
			}
	   }
<!------------------------------------------------------------------------------------------------------>
function province_funcomp(rr) 
	   {
		  httprequest = false;
		  if (window.xmlhttprequest) 
		  { // mozilla, safari,...
			 httprequest = new xmlhttprequest();
			 if (httprequest.overridemimetype) {
				httprequest.overridemimetype('text/html');
			 }
		  } else if (window.activexobject) { // ie
			 try {
				httprequest = new activexobject("msxml2.xmlhttp");
			 } catch (e) {
				try {
				   httprequest = new activexobject("microsoft.xmlhttp");
				} catch (e) {}
			 }
		  } 
		  
		  if (!httprequest) {
			 alert('cannot create xmlhttp instance');
			 return false;
		  }
			
//			alert(document.getelementbyid("dist").value);
			var url = 'jp_show_provincecomp.php';
			var pros =  "rr="+document.getelementbyid("compprovince").value; 
//			alert(pros);

			httprequest.open('post',url,true);

			httprequest.setrequestheader("content-type", "application/x-www-form-urlencoded");
			httprequest.setrequestheader("content-length", pros.length);
			httprequest.setrequestheader("connection", "close");
			httprequest.send(pros);
						
			httprequest.onreadystatechange = function()
			{
				 if(httprequest.readystate == 3)  // loading request
				  {
				   document.getelementbyid("div_procomp").innerhtml = "now is loading...";
				  }

				 if(httprequest.readystate == 4) // return request
				  {
				   document.getelementbyid("div_procomp").innerhtml = httprequest.responsetext;
				  }				
			}
	   }
<!------------------------------------------------------------------------------------------------------>
//select amphur_funcomp
function amphur_funcomp(rr) 
	   {
		  httprequest = false;
		  if (window.xmlhttprequest) 
		  { // mozilla, safari,...
			 httprequest = new xmlhttprequest();
			 if (httprequest.overridemimetype) {
				httprequest.overridemimetype('text/html');
			 }
		  } else if (window.activexobject) { // ie
			 try {
				httprequest = new activexobject("msxml2.xmlhttp");
			 } catch (e) {
				try {
				   httprequest = new activexobject("microsoft.xmlhttp");
				} catch (e) {}
			 }
		  } 
		  
		  if (!httprequest) {
			 alert('cannot create xmlhttp instance');
			 return false;
		  }
			
//			alert(document.getelementbyid("dist").value);
			var url = 'jp_show_amphurcomp.php';
			var pros =  "rr="+document.getelementbyid("compamphur").value; 
//			alert(pros);

			httprequest.open('post',url,true);

			httprequest.setrequestheader("content-type", "application/x-www-form-urlencoded");
			httprequest.setrequestheader("content-length", pros.length);
			httprequest.setrequestheader("connection", "close");
			httprequest.send(pros);
						
			httprequest.onreadystatechange = function()
			{
				 if(httprequest.readystate == 3)  // loading request
				  {
				   document.getelementbyid("div_amphurcomp").innerhtml = "now is loading...";
				  }

				 if(httprequest.readystate == 4) // return request
				  {
				   document.getelementbyid("div_amphurcomp").innerhtml = httprequest.responsetext;
				  }
			}
	   }
</script><div id="content">
  <div id="posts1">
    <div class="post1">
      <h2 class="title">&nbsp;</h2>
      <div class="meta"><h2 class="title">สมัครสมาชิกประเภทบริษัท</h2>
      </table>
      </div>
      <table width="100%" border="0" style="font-size:18px" cellpadding="0" cellspacing="0">
<tr align="right">
<td>
<a href="register.php"><input name="company" type="button" value="ประเภทบุคคล" /></a>
</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#ffe4e1" style="color:#000; font-size:18px;" height="400px">
  <tr>
  <td valign="top" align="center">
<!-------------------------------------------------------------------------------------------------->
  <table width="100%" border="1" cellpadding="0" cellspacing="0" style="font-size:16px;color:#60f" bordercolor="#ffe4e1">
  <tr>
    <td width="40%">ชื่อบริษัท</td>
    <td width="60%"><input name="compname" type="text"><label style="color:#f00">*</label></td>
  </tr>  
  <tr>
    <td>เบอร์ติดต่อ</td>
    <td><input name="compphone" type="text"></td>
  </tr>
  <tr>
    <td>อีเมล์</td>
    <td><input name="compemail" type="text"></td>
  </tr>
  <tr>
    <td>facebook</td>
    <td><input name="compfacebook" type="text"></td>
  </tr>
  <tr>
    <td>line</td>
    <td><input name="compline" type="text"></td>
  </tr>
  <tr>
    <td>ที่อยู่</td>
    <td><input name="compaddress" type="text"></td>
  </tr>
  <tr>
    <td>จังหวัด</td>
    <td>
    <select name="compprovince" id="compprovince" style="width:150px" onchange="javascipt:province_funcomp(this)">
    <option value = "0">กรุณาเลือกจังหวัด</option>
      		<option value = "64">กระบี่   </option>
      	  		<option value = "1">กรุงเทพมหานคร   </option>
      	  		<option value = "56">กาญจนบุรี   </option>
      	  		<option value = "34">กาฬสินธุ์   </option>
      	  		<option value = "49">กำแพงเพชร   </option>
      	  		<option value = "28">ขอนแก่น   </option>
      	  		<option value = "13">จันทบุรี   </option>
      	  		<option value = "15">ฉะเชิงเทรา   </option>
      	  		<option value = "11">ชลบุรี   </option>
      	  		<option value = "9">ชัยนาท   </option>
      	  		<option value = "25">ชัยภูมิ   </option>
      	  		<option value = "69">ชุมพร   </option>
      	  		<option value = "72">ตรัง   </option>
      	  		<option value = "14">ตราด   </option>
      	  		<option value = "50">ตาก   </option>
      	  		<option value = "17">นครนายก   </option>
      	  		<option value = "58">นครปฐม   </option>
      	  		<option value = "36">นครพนม   </option>
      	  		<option value = "19">นครราชสีมา   </option>
      	  		<option value = "63">นครศรีธรรมราช   </option>
      	  		<option value = "47">นครสวรรค์   </option>
      	  		<option value = "3">นนทบุรี   </option>
      	  		<option value = "76">นราธิวาส   </option>
      	  		<option value = "43">น่าน   </option>
      	  		<option value = "77">บึงกาฬ</option>
      	  		<option value = "20">บุรีรัมย์   </option>
      	  		<option value = "4">ปทุมธานี   </option>
      	  		<option value = "62">ประจวบคีรีขันธ์   </option>
      	  		<option value = "16">ปราจีนบุรี   </option>
      	  		<option value = "74">ปัตตานี   </option>
      	  		<option value = "5">พระนครศรีอยุธยา   </option>
      	  		<option value = "44">พะเยา   </option>
      	  		<option value = "65">พังงา   </option>
      	  		<option value = "73">พัทลุง   </option>
      	  		<option value = "53">พิจิตร   </option>
      	  		<option value = "52">พิษณุโลก   </option>
      	  		<option value = "66">ภูเก็ต   </option>
      	  		<option value = "32">มหาสารคาม   </option>
      	  		<option value = "37">มุกดาหาร   </option>
      	  		<option value = "75">ยะลา   </option>
      	  		<option value = "24">ยโสธร   </option>
      	  		<option value = "33">ร้อยเอ็ด   </option>
      	  		<option value = "68">ระนอง   </option>
      	  		<option value = "12">ระยอง   </option>
      	  		<option value = "55">ราชบุรี   </option>
      	  		<option value = "7">ลพบุรี   </option>
      	  		<option value = "40">ลำปาง   </option>
      	  		<option value = "39">ลำพูน   </option>
      	  		<option value = "22">ศรีสะเกษ   </option>
      	  		<option value = "35">สกลนคร   </option>
      	  		<option value = "70">สงขลา   </option>
      	  		<option value = "71">สตูล   </option>
      	  		<option value = "2">สมุทรปราการ   </option>
      	  		<option value = "60">สมุทรสงคราม   </option>
      	  		<option value = "59">สมุทรสาคร   </option>
      	  		<option value = "10">สระบุรี</option>
      	  		<option value = "18">สระแก้ว   </option>
      	  		<option value = "8">สิงห์บุรี   </option>
      	  		<option value = "57">สุพรรณบุรี   </option>
      	  		<option value = "67">สุราษฎร์ธานี   </option>
      	  		<option value = "21">สุรินทร์   </option>
      	  		<option value = "51">สุโขทัย   </option>
      	  		<option value = "31">หนองคาย   </option>
      	  		<option value = "27">หนองบัวลำภู   </option>
      	  		<option value = "6">อ่างทอง   </option>
      	  		<option value = "26">อำนาจเจริญ   </option>
      	  		<option value = "29">อุดรธานี   </option>
      	  		<option value = "41">อุตรดิตถ์   </option>
      	  		<option value = "48">อุทัยธานี   </option>
      	  		<option value = "23">อุบลราชธานี   </option>
      	  		<option value = "45">เชียงราย   </option>
      	  		<option value = "38">เชียงใหม่   </option>
      	  		<option value = "61">เพชรบุรี   </option>
      	  		<option value = "54">เพชรบูรณ์   </option>
      	  		<option value = "30">เลย   </option>
      	  		<option value = "42">แพร่   </option>
      	  		<option value = "46">แม่ฮ่องสอน   </option>
      		</select>
    </td>
  </tr>
  <tr>
    <td>เขต</td>
    <td>
    <div id="div_procomp" name="div_procomp">
    <select name="compamphur" id="compamphur" style="width:150px" disabled>
    <option value = "0">กรุณาเลือกเขต</option>
	</select>
    </div>
    </td>
  </tr>
  <tr>
    <td>แขวง</td>
    <td><div id="div_amphurcomp" name="div_amphurcomp">
    <select name="compdistrict" id="compdistrict" style="width:150px" disabled>
    <option value = "0">กรุณาเลือกแขวง</option>
	</select></div>
    </td>
  </tr>
  <tr>
    <td>รหัสไปรษณีย์</td>
    <td><input name="comppasscode" type="text" maxlength="6"></td>
  </tr>
  <tr>
    <td valign="top">ผลิตภัณฑ์ที่จัดจำหน่าย</td>
    <td><textarea name="product" cols="40" rows="3"></textarea>
    </td>
  </tr>
  <tr>
  <td colspan="2"><br></td>
  </tr>
  <tr>
    <td width="40%">ชื่อผู้ประสานงาน</td>
    <td width="60%"><input name="fname" type="text"><label style="color:#f00">*</label></td>
  </tr>
  <tr>
    <td>นามสกุลผู้ประสานงาน</td>
    <td><input name="lname" type="text"><label style="color:#f00">*</label></td>
  </tr>
  <tr>
    <td>รหัสประชาชน</td>
    <td>
    <div id="div_citizen" name="div_citizen">
    <input id="citizen" name="citizen" type="text" maxlength="13" onchange="javascipt:citizen_same(this)"><label style="color:#f00">*</label>
    </div></td>
  </tr>
  <tr>
    <td>เบอร์ติดต่อ</td>
    <td><input name="phone" type="text"></td>
  </tr>
  <tr>
    <td>อีเมล์</td>
    <td><input name="email" type="text"></td>
  </tr>
  <tr>
    <td>facebook</td>
    <td><input name="facebook" type="text"></td>
  </tr>
  <tr>
    <td>line</td>
    <td><input name="line" type="text"></td>
  </tr>
  <tr>
    <td>ที่อยู่</td>
    <td><input name="address" type="text"></td>
  </tr>
  <tr>
    <td>จังหวัด</td>
    <td>
    <select name="province" id="province" style="width:150px" onchange="javascipt:province_fun(this)">
    <option value = "0">กรุณาเลือกจังหวัด</option>
      		<option value = "64">กระบี่   </option>
      	  		<option value = "1">กรุงเทพมหานคร   </option>
      	  		<option value = "56">กาญจนบุรี   </option>
      	  		<option value = "34">กาฬสินธุ์   </option>
      	  		<option value = "49">กำแพงเพชร   </option>
      	  		<option value = "28">ขอนแก่น   </option>
      	  		<option value = "13">จันทบุรี   </option>
      	  		<option value = "15">ฉะเชิงเทรา   </option>
      	  		<option value = "11">ชลบุรี   </option>
      	  		<option value = "9">ชัยนาท   </option>
      	  		<option value = "25">ชัยภูมิ   </option>
      	  		<option value = "69">ชุมพร   </option>
      	  		<option value = "72">ตรัง   </option>
      	  		<option value = "14">ตราด   </option>
      	  		<option value = "50">ตาก   </option>
      	  		<option value = "17">นครนายก   </option>
      	  		<option value = "58">นครปฐม   </option>
      	  		<option value = "36">นครพนม   </option>
      	  		<option value = "19">นครราชสีมา   </option>
      	  		<option value = "63">นครศรีธรรมราช   </option>
      	  		<option value = "47">นครสวรรค์   </option>
      	  		<option value = "3">นนทบุรี   </option>
      	  		<option value = "76">นราธิวาส   </option>
      	  		<option value = "43">น่าน   </option>
      	  		<option value = "77">บึงกาฬ</option>
      	  		<option value = "20">บุรีรัมย์   </option>
      	  		<option value = "4">ปทุมธานี   </option>
      	  		<option value = "62">ประจวบคีรีขันธ์   </option>
      	  		<option value = "16">ปราจีนบุรี   </option>
      	  		<option value = "74">ปัตตานี   </option>
      	  		<option value = "5">พระนครศรีอยุธยา   </option>
      	  		<option value = "44">พะเยา   </option>
      	  		<option value = "65">พังงา   </option>
      	  		<option value = "73">พัทลุง   </option>
      	  		<option value = "53">พิจิตร   </option>
      	  		<option value = "52">พิษณุโลก   </option>
      	  		<option value = "66">ภูเก็ต   </option>
      	  		<option value = "32">มหาสารคาม   </option>
      	  		<option value = "37">มุกดาหาร   </option>
      	  		<option value = "75">ยะลา   </option>
      	  		<option value = "24">ยโสธร   </option>
      	  		<option value = "33">ร้อยเอ็ด   </option>
      	  		<option value = "68">ระนอง   </option>
      	  		<option value = "12">ระยอง   </option>
      	  		<option value = "55">ราชบุรี   </option>
      	  		<option value = "7">ลพบุรี   </option>
      	  		<option value = "40">ลำปาง   </option>
      	  		<option value = "39">ลำพูน   </option>
      	  		<option value = "22">ศรีสะเกษ   </option>
      	  		<option value = "35">สกลนคร   </option>
      	  		<option value = "70">สงขลา   </option>
      	  		<option value = "71">สตูล   </option>
      	  		<option value = "2">สมุทรปราการ   </option>
      	  		<option value = "60">สมุทรสงคราม   </option>
      	  		<option value = "59">สมุทรสาคร   </option>
      	  		<option value = "10">สระบุรี</option>
      	  		<option value = "18">สระแก้ว   </option>
      	  		<option value = "8">สิงห์บุรี   </option>
      	  		<option value = "57">สุพรรณบุรี   </option>
      	  		<option value = "67">สุราษฎร์ธานี   </option>
      	  		<option value = "21">สุรินทร์   </option>
      	  		<option value = "51">สุโขทัย   </option>
      	  		<option value = "31">หนองคาย   </option>
      	  		<option value = "27">หนองบัวลำภู   </option>
      	  		<option value = "6">อ่างทอง   </option>
      	  		<option value = "26">อำนาจเจริญ   </option>
      	  		<option value = "29">อุดรธานี   </option>
      	  		<option value = "41">อุตรดิตถ์   </option>
      	  		<option value = "48">อุทัยธานี   </option>
      	  		<option value = "23">อุบลราชธานี   </option>
      	  		<option value = "45">เชียงราย   </option>
      	  		<option value = "38">เชียงใหม่   </option>
      	  		<option value = "61">เพชรบุรี   </option>
      	  		<option value = "54">เพชรบูรณ์   </option>
      	  		<option value = "30">เลย   </option>
      	  		<option value = "42">แพร่   </option>
      	  		<option value = "46">แม่ฮ่องสอน   </option>
      		</select>
    </td>
  </tr>
  <tr>
    <td>เขต</td>
    <td>
    <div id="div_pro" name="div_pro">
    <select name="amphur" id="amphur" style="width:150px" disabled>
    <option value = "0">กรุณาเลือกเขต</option>
	</select>
    </div>
    </td>
  </tr>
  <tr>
    <td>แขวง</td>
    <td><div id="div_amphur" name="div_amphur">
    <select name="district" id="district" style="width:150px" disabled>
    <option value = "0">กรุณาเลือกแขวง</option>
	</select></div>
    </td>
  </tr>
  <tr>
    <td>รหัสไปรษณีย์</td>
    <td><input name="passcode" type="text" maxlength="6"></td>
  </tr>
  <tr>
  <td colspan="2"><br></td>
  </tr>
  <tr>
    <td valign="top">ประเภทข่าวที่ต้องการรับ</td>
    <td>
                        <input name="text[0]" type="checkbox" value="1" />e-mail<br/>
					                    <input name="text[1]" type="checkbox" value="4" />facebook<br/>
					                    <input name="text[2]" type="checkbox" value="5" />line<br/>
					                    <input name="text[3]" type="checkbox" value="2" />sms<br/>
					                    <input name="text[4]" type="checkbox" value="3" />จดหมาย<br/>
					    </td>
  </tr>
  <tr>
    <td valign="top">ประเภทโครงการที่สนใจ</td>
    <td valign="top">
                        <input name="type[0]" type="checkbox" value="4" />งานกาชาด<br/>
					                    <input name="type[1]" type="checkbox" value="5" />งานรับปริญญา<br/>
					                    <input name="type[2]" type="checkbox" value="2" />งานเกษตรแฟร์<br/>
					                    <input name="type[3]" type="checkbox" value="3" />งานเกษตรแห่งชาติ<br/>
					    </td>
  </tr>
  <tr>
  <td colspan="2"><br></td>
  </tr>
  <tr>
    <td>ชื่อเข้าระบบ</td>
    <td style="color:#f00">
    <div id="div_name" name="div_name">
    <input name="name" id="name" type="text" maxlength="8" onchange="javascipt:username_same(this)">
     *4-8 ตัวอักษร
     </div></td>
  </tr>
  <tr>
    <td>รหัสผ่าน</td>
    <td style="color:#f00"><input name="pass" type="text" maxlength="8" > *4-8 ตัวอักษร</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><br/><input name="submit" type="submit" value="บันทึกข้อมูล"></td>
  </tr>
  </table>
<!-------------------------------------------------------------------------------------------------->
  <br/></td>
  </tr>
</table>
    </div>
  </div>
</div>
</form>
<div id="footer">
  <p id="copy"></p>
  <br />

  <center>
    <p>
      <script src="http://static.ak.fbcdn.net/connect.php/js/fb.loader" type="text/javascript"></script>
      <script src="http://static.ak.fbcdn.net/connect.php/js/fb.share" type="text/javascript"></script>  
      <a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php">share</a> <br />
		<br>
      <a href="https://twitter.com/share" class="twitter-share-button">tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getelementsbytagname(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getelementbyid(id)){js=d.createelement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentnode.insertbefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </p>
  </center>
</div>
 
 
</body>
</html>
