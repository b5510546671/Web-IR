<!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>quality evaluation of graduate for bachelor levelย</title>
<link href="../css/template_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon"  href="../images/klipper_dock.ico" type="image/x-icon">
</head>
<body class="homepage">

<div id="template_wrapper">
	<div id="template_header">
		    <div id="site_title"><img src="../images/text_banner.png" /></div>
        
        <div class="cleaner"></div>
    </div>	
		<div id="template_menu">
        <ul>
            <li><a href="../index.php"  >หน้าหลัก</a></li>
            <li><a href="../advance/report_title.php" >รายงาน</a></li>
            <li><a href="../advance/login.php" >สำหรับเจ้าหน้าที่</a></li>
        </ul>    	
        <div class="cleaner"></div>
    </div> <!-- end of template_menu -->
	<div  align="right" style="clear: both;width:960px; height:20px; padding-top:5px;background: #f5f5f5;">
	<h6>&nbsp;</h6>
	<hr   style="border:#666666 1px; width:100%"/>
	</div> <!-- close of horizontal line menu -->
<script  language="javascript">
function forwordpage(){
 var  year = document.getelementbyid("rpt_year").value;
 var  camp = document.getelementbyid("rpt_camp").value;
 var  fac = document.getelementbyid("rpt_fac").value;
 var index;
  if(document.getelementbyid("dis_rpt1").checked){
  		var index = document.getelementbyid("dis_rpt1").value;
  }else if(document.getelementbyid("dis_rpt2").checked){
  		var index = document.getelementbyid("dis_rpt2").value;
  }else if(document.getelementbyid("dis_rpt3").checked){
  		var index = document.getelementbyid("dis_rpt3").value;
  }else if(document.getelementbyid("dis_rpt4").checked){
  		var index = document.getelementbyid("dis_rpt4").value;
  }else if(document.getelementbyid("dis_rpt5").checked){
  		var index = document.getelementbyid("dis_rpt5").value;
  }else if(document.getelementbyid("dis_rpt6").checked){
  		var index = document.getelementbyid("dis_rpt6").value;
  }else if(document.getelementbyid("dis_rpt7").checked){
  		var index = document.getelementbyid("dis_rpt7").value;
  }else if(document.getelementbyid("dis_rpt8").checked){
  		var index = document.getelementbyid("dis_rpt8").value;
  }else if(document.getelementbyid("dis_rpt9").checked){
  		var index = document.getelementbyid("dis_rpt9").value;
  }else if(document.getelementbyid("dis_rpt10").checked){
  		var index = document.getelementbyid("dis_rpt10").value;
  }else{
  		var index ="";
  }
  
    var file_location;
    var my_file = new array();
	my_file[1] = "f_table1.php";
	my_file[2] = "f_table2.php";
	my_file[3] = "f_table3.php";
	my_file[4] = "f_table4.php";
	my_file[5] = "f_table5.php";
	my_file[6] = "f_table6.php";
	my_file[7] = "f_table7.php";
	my_file[8] = "f_table8.php";
	my_file[9] = "f_table9.php";
	my_file[10] = "f_table10.php";
	file_location = my_file[index]+"?qa_year="+year+"&index="+index+"&camp="+camp+"&fac="+fac;
	window.open(file_location,'_blank');
}

function dochange(){ 
	// 1.   create xmlhttprequest
	var xmlhttp = false;

	if (window.activexobject) {
		this.xmlhttp = new activexobject("microsoft.xmlhttp");
	}
	else {
		this.xmlhttp = new xmlhttprequest();
	}

	// 2.    assign call back and   4.  get  response
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
				var data = xmlhttp.responsetext;
				var facs = eval("("+data+")");
				var fac = document.getelementbyid("rpt_fac");
				fac.options.length=0;
				for(var i=0;i<facs.length;i++){
						fac.options[i] = new option(facs[i].name,facs[i].id);
				}
		}			 //  if
	}
	//3.    send  request
	var fromwho = document.getelementbyid("rpt_camp");
	var url="../js/getjquery.php?id=c&camp="+fromwho.value;
	xmlhttp.open("get",url);  		//	xmlhttp.open("post","../ajax/getdeptformyear.php");
	xmlhttp.setrequestheader("content-type","application/x-www-form-urlencoded; charset=tis-620");
	xmlhttp.send();	//xmlhttp.send("id="+ ministry.value+"&cyear="+cyear.value);

}    // function  dochange
</script>
    <div id="template_main">
    <form name="form1" id="form1" method="post">
	<p class="redtext" align="center">รายงานระดับคณะ</p>
	<div style="margin-left:395px"><table  width="50%" border="0" ><tr><td width="34%">ประจำปี พ.ศ. ::</td>
	<td width="66%"><select name="rpt_year" id="rpt_year">
		<option  value="2556" >2556</option>
		<option  value="2557" >2557</option>
		<option  value="2558" >2558</option>
		<option  value="2559" >2559</option>
		<option  value="2560" selected='selected'>2560</option>
	  </select></td></tr>
	<tr><td>วิทยาเขต ::</td><td><select name="rpt_camp" id="rpt_camp" style="width:150px" onchange="dochange()" >
	<option value="">----[[ select ]] ----</option>
	<option value="b" >บางเขน</option><option value="k" >กำแพงแสน</option><option value="s" >ศรีราชา</option><option value="c" >เฉลิมพระเกียรติจังหวัดสกลนคร</option>	</select></td></tr>
	<tr><td>คณะ ::</td><td><select name="rpt_fac" id="rpt_fac" style="width:150px">
	<option value="">----[[ select ]] ----</option>
		</select></td></tr>
	</table></div>
	<div align="center"><fieldset style="width:60%">
	<div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt1" value="1" onclick="document.form1.hid_title.value=1"/>ตารางที่ 1 จำนวนและร้อยละของนายจ้างบัณฑิต จำแนกตามข้อมูลทั่วไป</div><div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt2" value="2" onclick="document.form1.hid_title.value=2"/>ตารางที่ 2 ร้อยละ ค่าเฉลี่ย ค่าเบี่ยงเบนมาตรฐาน และระดับพฤติกรรมที่แสดงออกของบัณฑิต ตามกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ</div><div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt3" value="3" onclick="document.form1.hid_title.value=3"/>ตารางที่ 3 ร้อยละ ค่าเฉลี่ย ค่าเบี่ยงเบนมาตรฐาน และระดับพฤติกรรมที่แสดงออกของบัณฑิต ตามอัตลักษณ์ของมหาวิทยาลัย จำแนกตามรายด้าน</div><div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt4" value="4" onclick="document.form1.hid_title.value=4"/>ตารางที่ 4 ร้อยละ ค่าเฉลี่ย  ค่าเบี่ยงเบนมาตรฐาน  และระดับความพึงพอใจของนายจ้างที่มีต่อบัณฑิต จำแนกตามรายด้าน</div><div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt5" value="5" onclick="document.form1.hid_title.value=5"/>ตารางที่ 5 ร้อยละจากค่าเฉลี่ยความพึงพอใจของนายจ้าง กับคะแนนที่ได้ตามเกณฑ์การประเมินของ ก.พ.ร.</div><div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt6" value="6" onclick="document.form1.hid_title.value=6"/>ตารางที่ 6 ลักษณะของบัณฑิตที่นายจ้างของบัณฑิตต้องการรับเข้ามาทำงานในองค์กรใน 10 ลำดับแรก</div><div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt7" value="7" onclick="document.form1.hid_title.value=7"/>ตารางที่ 7  ค่าเฉลี่ย และค่าเบี่ยงเบนมาตรฐาน ของพฤติกรรมที่แสดงออกของบัณฑิต ตามกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ จำแนกตามหลักสูตรและรายด้าน</div><div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt8" value="8" onclick="document.form1.hid_title.value=8"/>ตารางที่ 8  ค่าเฉลี่ย และค่าเบี่ยงเบนมาตรฐาน ของพฤติกรรมที่แสดงออกของบัณฑิต  ตามอัตลักษณ์ของมหาวิทยาลัย  จำแนกตามหลักสูตรและรายด้าน</div><div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt9" value="9" onclick="document.form1.hid_title.value=9"/>ตารางที่ 9  ค่าเฉลี่ย และค่าเบี่ยงเบนมาตรฐาน ของความพึงพอใจของนายจ้างที่มีต่อบัณฑิต  จำแนกตามหลักสูตรและรายด้าน</div><div id="display_rpt">
		<input type="radio" name="dis_rpt" id="dis_rpt10" value="10" onclick="document.form1.hid_title.value=10"/>ตารางที่ 10 จำนวน และร้อยละของนายจ้าง ที่เลือกลักษณะบัณฑิตที่ต้องการรับเข้ามาทำงานในองค์กร จำแนกตามหลักสูตร</div>	
	 <div id="display_rpt" style="text-align:center;"><input type="button" name="button" id="button"  value="submit" onclick="forwordpage()">
	 <input type="hidden" name="hid_title" id="hid_title" value="" /></div>
	 </fieldset></div>
 	</form>

     </div> <!-- end of main -->
        
     </div> <!-- end of template_wrapper -->

<div id="template_footer_wrapper">
	<div id="template_footer">
    	
        developed by official compuer service ku - copyright &copy; 2013  -  version 1.0
     <!-- designed by <a href="http://www.template.com" target="_parent">free css templates</a>-->
    </div> <!-- end of footer wrapper -->
</div> <!-- end of footer -->
</body>
</html>
