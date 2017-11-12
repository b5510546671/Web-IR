<!-- array
(
)
 -->
<!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>
            1.2 รายชื่อนิสิตใหม่ที่บันทึกและไม่ได้บันทึกขัอมูลประวัติและแบบสำรวจ
        </title>
        <link rel="stylesheet" type="text/css" href="../ext-4.0-beta1/resources/css/ext-all.css">
        <link rel="stylesheet" type="text/css" href="../ext-4.0-beta1/examples/shared/example.css">
        <script type="text/javascript" src="../ext-4.0-beta1/bootstrap.js"></script>
		 <script type="text/javascript" src="../ext-4.0-beta1/examples/grad/sliding-pager.js"></script>

        <!-- <script type="text/javascript" src="b1.js"></script> -->

<script type="text/javascript">
ext.loader.setconfig({enabled: true});

ext.loader.setpath('ext.ux', '../ext-4.0-beta1/examples/ux/');

ext.require([
    'ext.data.*',
    'ext.grid.*',
    'ext.util.*',
    'ext.ux.data.pagingmemoryproxy',
    'ext.toolbar.pagingtoolbar',
    'ext.ux.slidingpager'
]);

ext.onready(function(){

    var mydata = [
    ];

    // example of custom renderer function
    function change(val){
        if(val > 0){
            return '<span style="color:green;">' + val + '</span>';
        }else if(val < 0){
            return '<span style="color:red;">' + val + '</span>';
        }
        return val;
    }

    // example of custom renderer function
    function pctchange(val){
        if(val > 0){
            return '<span style="color:green;">' + val + '%</span>';
        }else if(val < 0){
            return '<span style="color:red;">' + val + '%</span>';
        }
        return val;
    }

    // register model
    ext.regmodel('company', {
        idproperty: 'company',
        fields: [
           {name: 'run'},
           {name: 'major_name', type: 'text'},
           {name: 'std_id', type: 'text'},
           {name: 'std_title', type: 'text'},
           {name: 'std_name', type: 'text'},
           {name: 'std_surname', type: 'text'},
           {name: 's_save', type: 'text'},
           {name: 's_save_poll', type: 'text'}
        ]        
    });
    

    // create the data store
    var store = ext.create('ext.data.store', {
        model: 'company',
        remotesort: true,
        pagesize: 21,
        proxy: {
            type: 'pagingmemory',
            data: mydata,
            reader: {
                type: 'array'
            }
        }
    });
    
    // create the grid
    var grid = ext.createwidget('gridpanel', {
        title:'1.2 รายชื่อนิสิตใหม่ที่บันทึกและไม่ได้บันทึกขัอมูลประวัติและแบบสำรวจ',
        store: store,
        headers: [{
                id:'run',
                text: 'ลำดับ',
                sortable: true,
                dataindex: 'run',
                flex: 1,
                width: 15
            },{
                text: 'สาขาวิชา',
                sortable: true,
                dataindex: 'major_name',
                width: 200
            },{
                text: 'รหัสนิสิต',
                sortable: true,
                dataindex: 'std_id',
                width: 85
            },{
                text: 'คำนำหน้าชื่อ',
                sortable: true,
                dataindex: 'std_title',
                width: 75
            },{
                text: 'ชื่อ',
                sortable: true,
                dataindex: 'std_name',
                width: 100
            },{
                text: 'นามสกุล',
                sortable: true,
                dataindex: 'std_surname',
                width: 100
            },{
                text: 'ข้อมูลประวัติ',
                sortable: true,
                dataindex: 's_save',
                width: 85
            },{
                text: 'ข้อมูลแบบสำรวจ',
                sortable: true,
                dataindex: 's_save_poll',
                width: 85
            }],
        striperows: true,
        height:600,
        width:800,
        frame:true,
        bbar: ext.create('ext.pagingtoolbar', {
            pagesize: 21,
            store: store,
            displayinfo: true,
            plugins: ext.create('ext.ux.slidingpager', {})
        })
    });

    grid.render('grid-example');

    store.load();
});
</script>

<style type="text/css">
	.task {
		background-image: url(../ext-4.0-beta1/examples/shared/icons/fam/cog.png) !important;
	}
	.task-folder {
		background-image: url(../ext-4.0-beta1/examples/shared/icons/fam/folder_go.png) !important;
	}
</style>
    </head>
    <body>


		

<form name="form1" method="post" action="">
  <table width="496" border="0" cellspacing="0" cellpadding="5" align=center>
    <tr>
      <td scope="col" align=right>ปีการศึกษา:&nbsp;</td>
      <td scope="col">
	  <select name="select1" onchange="changeselect1(this)">
        <option  value="0">please select!</option>
		<option  value="60" 
>2560</option>
      </select></td>
    </tr>
    <tr>
      <td scope="col" align=right>วิทยาเขต:&nbsp;</td>
      <td><select name="select2" onchange="changeselect2(this)">
          <option>please select!</option>
		      </select></td>
    </tr>
    <tr>
      <td scope="col" align=right>คณะ:&nbsp;</td>
      <td><select name="select3" onchange="changeselect3(this)">
          <option>please select!</option>
		      </select></td>
    </tr>
    <tr>
      <td scope="col" align=right>สาขาวิชา:&nbsp;</td>
      <td><select name="select4" >
          <option >ทุกสาขา</option>
		      </select></td>
    </tr>
    <tr>
      <td scope="col" align=right>รหัสนิสิต:&nbsp;</td>
	  <td scope="col" align=left><input type="text" name="std_id" maxlength="10" style="width:110px;"  onkeyup="this.value = this.value.replace (/\d/, '')" value="ทั่งหมด"></td>
    </tr>
    <tr>
      <td scope="col" align=center colspan=2><input type="submit"></td>
    </tr>
  </table>
<br>
    <!-- ใส่ชื่ออัตโนมัติ-->
    <script language="javascript">


function changeselect1(obj){
var theform = obj.form;
theform.select2.length=0;
theform.select3.length=0;
theform.select4.length=0;
switch(obj.value){
 case "0":
 {
   theform.select2.options[0]=new option('please select!','please select!');
   theform.select3.options[0]=new option('please select!','please select!');
   theform.select4.options[0]=new option('please select!','please select!');
   
   theform.select2=false;
   theform.select3=false;
   theform.select4=false;
 }
 break;

 
		 case"60":
 {
  theform.select2.options[0]=new option('please select!','please select!');
  theform.select2.options[1]=new option('บางเขน','60b');
  theform.select2.options[2]=new option('สกลนคร','60c');
  theform.select2.options[3]=new option('สถาบันสมทบ','60i');
  theform.select2.options[4]=new option('กำแพงแสน ','60k');
  theform.select2.options[5]=new option('สุพรรณบุรี','60p');
  theform.select2.options[6]=new option('ศรีราชา','60s');
  theform.select3.options[0]=new option('please select!','please select!');
  theform.select4.options[0]=new option('please select!','please select!');
   theform.select2=false;
   theform.select3=false;
   theform.select4=false;
  }
  break;
 
 }
 }

function changeselect2(obj){
var theform = obj.form;
theform.select3.length=0;
theform.select4.length=0;
switch(obj.value){
 case "0":
 {
   theform.select3.options[0]=new option('please select!','please select!');
  theform.select4.options[0]=new option('please select!','please select!');
   
 theform.select3=false;
 theform.select4=false;
 }
 break;
 

  case"60k":
  {
  theform.select3.options[0]=new option('please select!','please select!');
  theform.select3.options[1]=new option('เกษตร กำแพงแสน','60ka');
  theform.select3.options[2]=new option('ประมง','60kb');
  theform.select3.options[3]=new option('วิศวกรรมศาสตร์ กำแพงแสน','60ke');
  theform.select3.options[4]=new option('ศึกษาศาสตร์และพัฒนศาสตร์','60kf');
  theform.select3.options[5]=new option('สังคมศาสตร์','60kh');
  theform.select3.options[6]=new option('สัตวแพทยศาสตร์','60ki');
  theform.select3.options[7]=new option('ศิลปศาสตร์และวิทยาศาสตร์','60kq');
  theform.select3.options[8]=new option('วิทยาศาสตร์การกีฬา','60ks');
  theform.select3.options[9]=new option('ม.เกษตรศาสตร์','60ku');
  theform.select3.options[10]=new option('บัณฑิตวิทยาลัย','60kx');
  theform.select3.options[11]=new option('โครงการสหวิทยาการ','60ky');
  theform.select3.options[12]=new option('ข้ามมหาวิทยาลัย ','60kz');
  theform.select4.options[0]=new option('please select!','please select!');
  theform.select3=false;
  theform.select4=false;
  }
  break;
  case"60s":
  {
  theform.select3.options[0]=new option('please select!','please select!');
  theform.select3.options[1]=new option('เศรษฐศาสตร์ ศรีราชา','60sg');
  theform.select3.options[2]=new option('พาณิชยนาวีนานาชาติ','60sm');
  theform.select3.options[3]=new option('บริหารธุรกิจ','60sn');
  theform.select3.options[4]=new option('วิทยาการจัดการ','60sr');
  theform.select3.options[5]=new option('วิทยาศาสตร์ ศรีราชา','60ss');
  theform.select3.options[6]=new option('วิศวกรรมศาสตร์ศรีราชา','60st');
  theform.select3.options[7]=new option('บัณฑิตวิทยาลัย','60sx');
  theform.select4.options[0]=new option('please select!','please select!');
  theform.select3=false;
  theform.select4=false;
  }
  break;
  case"60c":
  {
  theform.select3.options[0]=new option('please select!','please select!');
  theform.select3.options[1]=new option('ทรัพยากรธรรมชาติและอุตสาหกรรมเกษตร','60ca');
  theform.select3.options[2]=new option('วิทยาศาสตร์และวิศวกรรมศาสตร์','60cb');
  theform.select3.options[3]=new option('ศิลปศาสตร์และวิทยาการจัดการ','60cc');
  theform.select3.options[4]=new option('สาธารณสุขศาสตร์','60cd');
  theform.select3.options[5]=new option('วิศวกรรมศาสตร์ ','60ce');
  theform.select3.options[6]=new option('ศึกษาศาสตร์','60cf');
  theform.select3.options[7]=new option('อุตสาหกรรมเกษตร','60ck');
  theform.select3.options[8]=new option('บริหารธุรกิจ','60cn');
  theform.select3.options[9]=new option('บัณฑิตวิทยาลัย','60cx');
  theform.select4.options[0]=new option('please select!','please select!');
  theform.select3=false;
  theform.select4=false;
  }
  break;
  case"60p":
  {
  theform.select3.options[0]=new option('please select!','please select!');
  theform.select3.options[1]=new option('วิทยาศาสตร์การกีฬา (หลักสูตร 4 ปี)','60pa');
  theform.select3.options[2]=new option('วิทยาศาสตร์การกีฬา (หลักสูตร 2 ปี)','60pb');
  theform.select3.options[3]=new option('พลศึกษา (ต่อเนื่อง) ภาคพิเศษ','60pc');
  theform.select3.options[4]=new option('การจัดการโรงแรมและท่องเที่ยว ภาคพิเศษ','60pd');
  theform.select3.options[5]=new option('ศึกษาศาสตร์','60pf');
  theform.select3.options[6]=new option('บริหารธุรกิจ','60pn');
  theform.select3.options[7]=new option('โครงการจัดตั้งวิทยาเขตสุพรรณบุรี','60pv');
  theform.select3.options[8]=new option('บัณฑิตวิทยาลัย','60px');
  theform.select4.options[0]=new option('please select!','please select!');
  theform.select3=false;
  theform.select4=false;
  }
  break;
  case"60b":
  {
  theform.select3.options[0]=new option('please select!','please select!');
  theform.select3.options[1]=new option('เกษตร','60ba');
  theform.select3.options[2]=new option('ประมง','60bb');
  theform.select3.options[3]=new option('วนศาสตร์','60bc');
  theform.select3.options[4]=new option('วิทยาศาสตร์','60bd');
  theform.select3.options[5]=new option('วิศวกรรมศาสตร์','60be');
  theform.select3.options[6]=new option('ศึกษาศาสตร์','60bf');
  theform.select3.options[7]=new option('เศรษฐศาสตร์','60bg');
  theform.select3.options[8]=new option('สังคมศาสตร์','60bh');
  theform.select3.options[9]=new option('สัตวแพทยศาสตร์','60bi');
  theform.select3.options[10]=new option('สำนักส่งเสริมและฝึกอบรม ','60bj');
  theform.select3.options[11]=new option('อุตสาหกรรมเกษตร','60bk');
  theform.select3.options[12]=new option('มนุษยศาสตร์','60bl');
  theform.select3.options[13]=new option('วิทยาลัยการชลประทาน','60bm');
  theform.select3.options[14]=new option('บริหารธุรกิจ','60bn');
  theform.select3.options[15]=new option('วิทยาลัยสิ่งแวดล้อม','60bo');
  theform.select3.options[16]=new option('เทคนิคการสัตวแพทย์','60bp');
  theform.select3.options[17]=new option('ศิลปศาสตร์และวิทยาศาสตร์','60bq');
  theform.select3.options[18]=new option('สถาปัตยกรรมศาสตร์','60br');
  theform.select3.options[19]=new option('สิ่งแวดล้อม','60bt');
  theform.select3.options[20]=new option('ม.เกษตรศาสตร์','60bu');
  theform.select3.options[21]=new option('วิทยาลัยพยาบาลบรมราชชนนี นพรัตน์วชิระ','60bw');
  theform.select3.options[22]=new option('บัณฑิตวิทยาลัย','60bx');
  theform.select3.options[23]=new option('โครงการสหวิทยาการ','60by');
  theform.select3.options[24]=new option('ข้ามมหาวิทยาลัย','60bz');
  theform.select4.options[0]=new option('please select!','please select!');
  theform.select3=false;
  theform.select4=false;
  }
  break;
  case"60i":
  {
  theform.select3.options[0]=new option('please select!','please select!');
  theform.select3.options[1]=new option('วิทยาลัยการชลประทาน','60im');
  theform.select3.options[2]=new option('เทคนิคการสัตวแพทย์','60ip');
  theform.select3.options[3]=new option('วิทยาลัยพยาบาลบรมราชชนนี นพรัตน์วชิระ','60iw');
  theform.select3.options[4]=new option('บัณฑิตวิทยาลัย','60ix');
  theform.select4.options[0]=new option('please select!','please select!');
  theform.select3=false;
  theform.select4=false;
  }
  break;
 }
 }


function changeselect3(obj){
var theform = obj.form;
theform.select4.length=0;
switch(obj.value){
 case "0":
 {
  theform.select4.options[0]=new option('please select!','please select!');
   
 theform.select4=false;
 }
 break;
  case"60bz":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ข้ามมหาวิทยาลัย','60bzz00');
  theform.select4=false;
  }
  break;
  case"60bt":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('วิทยาศาสตร์สิ่งแวดล้อม','60btt01');
  theform.select4.options[2]=new option('วิทยาศาสตร์และเทคโนโลยีสิ่งแวดล้อม','60btt02');
  theform.select4=false;
  }
  break;
  case"60br":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('สถาปัตยกรรมศาสตร์','60brr01');
  theform.select4.options[2]=new option('ภูมิสถาปัตยกรรมศาสตร์','60brr02');
  theform.select4.options[3]=new option('สถาปัตยกรรม','60brr03');
  theform.select4=false;
  }
  break;
  case"60bp":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('เทคนิคการสัตวแพทย์','60bpp00');
  theform.select4.options[2]=new option('เทคนิคการสัตวแพทย์','60bpp01');
  theform.select4.options[3]=new option('การพยาบาลสัตว์','60bpp02');
  theform.select4=false;
  }
  break;
  case"60bn":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bnn00');
  theform.select4.options[2]=new option('การเงิน','60bnn01');
  theform.select4.options[3]=new option('การจัดการ','60bnn02');
  theform.select4.options[4]=new option('การจัดการการผลิต','60bnn03');
  theform.select4.options[5]=new option('การตลาด','60bnn04');
  theform.select4.options[6]=new option('บัญชี','60bnn05');
  theform.select4=false;
  }
  break;
  case"60bl":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bll00');
  theform.select4.options[2]=new option('บรรณารักษศาสตร์','60bll01');
  theform.select4.options[3]=new option('ปรัชญาและศาสนา','60bll02');
  theform.select4.options[4]=new option('ภาษาต่างประเทศ','60bll03');
  theform.select4.options[5]=new option('ภาษาศาสตร์','60bll04');
  theform.select4.options[6]=new option('วรรณคดี','60bll05');
  theform.select4.options[7]=new option('ศิลปาชีพ','60bll06');
  theform.select4.options[8]=new option('ศิลปนิเทศ','60bll07');
  theform.select4.options[9]=new option('ภาษาไทย','60bll08');
  theform.select4.options[10]=new option('ภาษาต่างประเทศ (ยังไม่สังกัดสาขา)','60bll30');
  theform.select4.options[11]=new option('ภาษาไทย','60bll31');
  theform.select4.options[12]=new option('ภาษาอังกฤษ','60bll32');
  theform.select4.options[13]=new option('ภาษาฝรั่งเศส','60bll33');
  theform.select4.options[14]=new option('ภาษาเยอรมัน','60bll34');
  theform.select4.options[15]=new option('ภาษาญี่ปุ่น','60bll35');
  theform.select4.options[16]=new option('ภาษาจีน','60bll36');
  theform.select4.options[17]=new option('ภาษาสันสกฤต','60bll37');
  theform.select4.options[18]=new option('ภาษาเขมร','60bll38');
  theform.select4.options[19]=new option('การแปล','60bll39');
  theform.select4.options[20]=new option('วรรณคดี','60bll50');
  theform.select4.options[21]=new option('วรรณคดีไทย','60bll51');
  theform.select4.options[22]=new option('วรรณคดีอังกฤษ','60bll52');
  theform.select4.options[23]=new option('วรรณคดีฝรั่งเศส','60bll53');
  theform.select4.options[24]=new option('วรรณคดีญี่ปุ่น','60bll54');
  theform.select4.options[25]=new option('วรรณคดีเยอรมัน','60bll55');
  theform.select4.options[26]=new option('ศิลปาชีพ (ยังไม่สังกัดสาขา)','60bll60');
  theform.select4.options[27]=new option('การโรงแรม','60bll61');
  theform.select4.options[28]=new option('การเดินทางและท่องเที่ยว','60bll62');
  theform.select4.options[29]=new option('เลขานุการ','60bll63');
  theform.select4.options[30]=new option('ศิลปนิเทศ','60bll70');
  theform.select4.options[31]=new option('สื่อสารมวลชน','60bll71');
  theform.select4.options[32]=new option('ดนตรีไทย','60bll72');
  theform.select4.options[33]=new option('ดนตรีตะวันตก','60bll73');
  theform.select4.options[34]=new option('ภาษาไทย (ยังไม่สังกัดสาขา)','60bll80');
  theform.select4.options[35]=new option('ภาษาไทย','60bll81');
  theform.select4.options[36]=new option('ภาษาบาลี','60bll82');
  theform.select4.options[37]=new option('ภาษาสันสกฤต','60bll83');
  theform.select4.options[38]=new option('ภาษาเขมร','60bll84');
  theform.select4.options[39]=new option('ภาษาไทยเพื่อการสื่อสารสำหรับชาว ตปท.','60bll85');
  theform.select4.options[40]=new option('การจัดการการท่องเที่ยวเชิงบูรณาการ','60bll86');
  theform.select4.options[41]=new option('การท่องเที่ยว','60bll87');
  theform.select4.options[42]=new option('ภาษาตะวันออก','60bll88');
  theform.select4.options[43]=new option('นวัตกรรมการท่องเที่ยว','60bll89');
  theform.select4=false;
  }
  break;
  case"60bk":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bkk00');
  theform.select4.options[2]=new option('เทคโนโลยีการบรรจุ','60bkk01');
  theform.select4.options[3]=new option('เทคโนโลยีชีวภาพ','60bkk02');
  theform.select4.options[4]=new option('พัฒนาผลิตภัณฑ์อุตสาหกรรมเกษตร','60bkk03');
  theform.select4.options[5]=new option('วิทยาศาสตร์และเทคโนโลยีการอาหาร','60bkk04');
  theform.select4.options[6]=new option('วิทยาศาสตร์และเทคโนโลยีสิ่งทอ','60bkk05');
  theform.select4.options[7]=new option('เทคโนโลยีทางกระบวนการเคมีและฟิสิกส์','60bkk06');
  theform.select4.options[8]=new option('นวัตกรรมและเทคโนโลยีอุตสาหกรรมเกษตร','60bkk07');
  theform.select4.options[9]=new option('วิศวกรรมอาหาร','60bkk41');
  theform.select4=false;
  }
  break;
  case"60bi":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bii00');
  theform.select4.options[2]=new option('กายวิภาคศาสตร์','60bii01');
  theform.select4.options[3]=new option('พยาธิวิทยา','60bii02');
  theform.select4.options[4]=new option('เภสัชวิทยา','60bii03');
  theform.select4.options[5]=new option('สรีรวิทยา','60bii04');
  theform.select4.options[6]=new option('เวชศาสตร์คลินิคสัตว์ใหญ่และสัตว์ป่า','60bii05');
  theform.select4.options[7]=new option('เวชศาสตร์คลินิกสัตว์เลี้ยง','60bii06');
  theform.select4.options[8]=new option('เวชศาสตร์และทรัพยากรการผลิตสัตว์','60bii07');
  theform.select4.options[9]=new option('สัตวแพทยสาธารณสุขศาสตร์และการบริการวินิจฉัย','60bii08');
  theform.select4.options[10]=new option('จุลชีววิทยาและวิทยาภูมิคุ้มกัน','60bii09');
  theform.select4.options[11]=new option('ปรสิตวิทยา','60bii12');
  theform.select4=false;
  }
  break;
  case"60bh":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bhh00');
  theform.select4.options[2]=new option('สังคมวิทยาและมานุษยวิทยา','60bhh01');
  theform.select4.options[3]=new option('จิตวิทยา','60bhh02');
  theform.select4.options[4]=new option('รัฐศาสตร์','60bhh03');
  theform.select4.options[5]=new option('ภูมิศาสตร์','60bhh04');
  theform.select4.options[6]=new option('นิติศาสตร์','60bhh06');
  theform.select4.options[7]=new option('ประวัติศาสตร์','60bhh07');
  theform.select4.options[8]=new option('เอเชียตะวันออกเฉียงใต้ศึกษา','60bhh08');
  theform.select4.options[9]=new option('รัฐประศาสนศาสตร์','60bhh09');
  theform.select4=false;
  }
  break;
  case"60bg":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bgg00');
  theform.select4.options[2]=new option('เศรษฐศาสตร์','60bgg01');
  theform.select4.options[3]=new option('เศรษฐศาสตร์เกษตร','60bgg02');
  theform.select4.options[4]=new option('เศรษฐศาสตร์สหกรณ์','60bgg03');
  theform.select4.options[5]=new option('เศรษฐศาสตร์เกษตรและทรัพยากร','60bgg04');
  theform.select4.options[6]=new option('เศรษฐศาสตร์การประกอบการ','60bgg11');
  theform.select4.options[7]=new option('เศรษฐศาสตร์ (หลักสูตรภาษาอังกฤษ)','60bgg12');
  theform.select4.options[8]=new option('ธุรกิจการเกษตร','60bgg21');
  theform.select4=false;
  }
  break;
  case"60bf":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัด ภาควิชา','60bff00');
  theform.select4.options[2]=new option('การศึกษา','60bff01');
  theform.select4.options[3]=new option('เทคโนโลยีการศึกษา','60bff04');
  theform.select4.options[4]=new option('พลศึกษา','60bff11');
  theform.select4.options[5]=new option('สุขศึกษา','60bff12');
  theform.select4.options[6]=new option('คหกรรมศาสตรศึกษา','60bff14');
  theform.select4.options[7]=new option('ธุรกิจศึกษา','60bff15');
  theform.select4.options[8]=new option('การสอนคณิตศาสตร์','60bff16');
  theform.select4.options[9]=new option('การสอนวิทยาศาสตร์','60bff17');
  theform.select4.options[10]=new option('ธุรกิจและคอมพิวเตอร์ศึกษา','60bff18');
  theform.select4.options[11]=new option('ศึกษาศาสตร์-เกษตร','60bff31');
  theform.select4.options[12]=new option('พลศึกษา (วท.บ.)','60bff32');
  theform.select4.options[13]=new option('พลศึกษา  (ศศ.บ.)','60bff33');
  theform.select4.options[14]=new option('ศึกษาศาสตร์-คหกรรมศาสตร์','60bff34');
  theform.select4.options[15]=new option('สุขศึกษา','60bff35');
  theform.select4.options[16]=new option('ธุรกิจศึกษา','60bff36');
  theform.select4.options[17]=new option('การสอนคณิตศาสตร์','60bff37');
  theform.select4.options[18]=new option('การสอนวิทยาศาสตร์','60bff38');
  theform.select4.options[19]=new option('เกษตรและสิ่งแวดล้อมศึกษา','60bff39');
  theform.select4.options[20]=new option('วิทยาศาสตร์การกีฬา (ต่อเนื่อง)','60bff40');
  theform.select4=false;
  }
  break;
  case"60be":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bee00');
  theform.select4.options[2]=new option('วิศวกรรมทรัพยากรน้ำ','60bee01');
  theform.select4.options[3]=new option('วิศวกรรมเกษตร','60bee02');
  theform.select4.options[4]=new option('วิศวกรรมเครื่องกล','60bee03');
  theform.select4.options[5]=new option('วิศวกรรมชลประทาน','60bee04');
  theform.select4.options[6]=new option('วิศวกรรมไฟฟ้า','60bee05');
  theform.select4.options[7]=new option('วิศวกรรมโยธา','60bee06');
  theform.select4.options[8]=new option('วิศวกรรมทรัพยากรน้ำ','60bee07');
  theform.select4.options[9]=new option('วิศวกรรมอุตสาหการ','60bee08');
  theform.select4.options[10]=new option('วิศวกรรมคอมพิวเตอร์','60bee09');
  theform.select4.options[11]=new option('วิศวกรรมเคมี','60bee10');
  theform.select4.options[12]=new option('วิศวกรรมไฟฟ้าเครื่องกลการผลิต','60bee11');
  theform.select4.options[13]=new option('วิศวกรรมการอาหาร','60bee12');
  theform.select4.options[14]=new option('วิศวกรรมการบินและอวกาศ','60bee13');
  theform.select4.options[15]=new option('วิศวกรรมสิ่งแวดล้อม','60bee14');
  theform.select4.options[16]=new option('สถาปัตยกรรมศาสตร์','60bee15');
  theform.select4.options[17]=new option('วิศวกรรมวัสดุ','60bee16');
  theform.select4.options[18]=new option('วิศวกรรมซอฟต์แวร์และความรู้','60bee17');
  theform.select4.options[19]=new option('วิศวกรรมสำรวจและสารสนเทศภูมิศาสตร์','60bee18');
  theform.select4.options[20]=new option('การจัดการการบิน','60bee19');
  theform.select4.options[21]=new option('เทคโนโลยีการบิน','60bee20');
  theform.select4.options[22]=new option('วิศวกรรมโยธา-ทรัพยากรน้ำ','60bee21');
  theform.select4.options[23]=new option('การจัดการเทคโนโลยีการบิน','60bee22');
  theform.select4.options[24]=new option('วิศวกรรมการบินและอวกาศ-บริหารธุรกิจ','60bee23');
  theform.select4.options[25]=new option('วิศวกรรมไฟฟ้า (ภาคภาษาอังกฤษ)','60bee26');
  theform.select4.options[26]=new option('วิศวกรรมอุตสาหการ (ภาคภาษาอังกฤษ)','60bee27');
  theform.select4.options[27]=new option('วิศวกรรมสิ่งแวดล้อม (ภาคภาษาอังกฤษ)','60bee28');
  theform.select4.options[28]=new option('วิศวกรรมฯ (นานาชาติ)','60bee30');
  theform.select4.options[29]=new option('ไม่พบชื่อสาขา','60bee31');
  theform.select4.options[30]=new option('ปี 1 เกษตร-ชลประทาน','60bee32');
  theform.select4.options[31]=new option('ปี 1 โยธา-ทรัพยากรน้ำ','60bee33');
  theform.select4.options[32]=new option('ไม่พบชื่อสาขา','60bee34');
  theform.select4.options[33]=new option('ปี 1 วิศวกรรมศาสตร์ (บางเขน)','60bee35');
  theform.select4.options[34]=new option('ปี 1 วิศวกรรมศาสตร์ (กพส.)','60bee40');
  theform.select4.options[35]=new option('นิสิต ศึกษาบางรายวิชา','60bee45');
  theform.select4=false;
  }
  break;
  case"60bd":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bdd00');
  theform.select4.options[2]=new option('คณิตศาสตร์','60bdd01');
  theform.select4.options[3]=new option('เคมี','60bdd02');
  theform.select4.options[4]=new option('ชีววิทยา','60bdd03');
  theform.select4.options[5]=new option('สถิติ','60bdd04');
  theform.select4.options[6]=new option('รังสีประยุกต์และไอโซโทป','60bdd06');
  theform.select4.options[7]=new option('ฟิสิกส์','60bdd07');
  theform.select4.options[8]=new option('วิทยาศาสตร์ทั่วไป','60bdd08');
  theform.select4.options[9]=new option('จุลชีววิทยา','60bdd09');
  theform.select4.options[10]=new option('พันธุศาสตร์','60bdd10');
  theform.select4.options[11]=new option('พฤกษศาสตร์','60bdd11');
  theform.select4.options[12]=new option('สัตววิทยา','60bdd12');
  theform.select4.options[13]=new option('ชีวเคมี','60bdd13');
  theform.select4.options[14]=new option('วิทยาการคอมพิวเตอร์','60bdd14');
  theform.select4.options[15]=new option('วิทยาศาสตร์สิ่งแวดล้อม','60bdd15');
  theform.select4.options[16]=new option('วิทยาศาสตร์พื้นพิภพ','60bdd16');
  theform.select4.options[17]=new option('เคมีอุตสาหกรรม','60bdd17');
  theform.select4.options[18]=new option('วิทยาศาสตร์ชีวภาพรังสี','60bdd18');
  theform.select4.options[19]=new option('วิทยาศาสตร์นิวเคลียร์','60bdd19');
  theform.select4.options[20]=new option('วิทยาศาสตร์ชีวภาพและเทคโนโลยี','60bdd20');
  theform.select4.options[21]=new option('เคมีบูรณาการ','60bdd21');
  theform.select4.options[22]=new option('เตรียมแพทยศาสตร์','60bdd32');
  theform.select4=false;
  }
  break;
  case"60bc":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bcc00');
  theform.select4.options[2]=new option('การจัดการทรัพยากรป่าไม้','60bcc01');
  theform.select4.options[3]=new option('วิทยาศาสตร์ชีวภาพป่าไม้','60bcc02');
  theform.select4.options[4]=new option('วนผลิตภัณฑ์','60bcc03');
  theform.select4.options[5]=new option('วนวัฒนวิทยา','60bcc04');
  theform.select4.options[6]=new option('วิศวกรรมป่าไม้','60bcc05');
  theform.select4.options[7]=new option('อนุรักษ์ป่าไม้','60bcc06');
  theform.select4.options[8]=new option('วนศาสตร์ชุมชน','60bcc07');
  theform.select4.options[9]=new option('การจัดการลุ่มน้ำและสิ่งแวดล้อม','60bcc08');
  theform.select4.options[10]=new option('อุทยานนันทนาการและการท่องเที่ยว','60bcc09');
  theform.select4.options[11]=new option('การจัดการสัตว์ป่าและทุ่งหญ้า','60bcc10');
  theform.select4.options[12]=new option('วนศาสตร์ชุมชน - สังคมวิทยาและมานุษยวิทยา','60bcc11');
  theform.select4.options[13]=new option('การจัดการป่าไม้','60bcc12');
  theform.select4.options[14]=new option('วิทยาศาสตร์และเทคโนโลยีทางไม้','60bcc31');
  theform.select4.options[15]=new option('เทคโนโลยีเยื่อและกระดาษ','60bcc32');
  theform.select4.options[16]=new option('เทคโนโลยีผลิตภัณฑ์ไม้และกระดาษ','60bcc33');
  theform.select4=false;
  }
  break;
  case"60bb":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60bbb00');
  theform.select4.options[2]=new option('การจัดการประมง','60bbb01');
  theform.select4.options[3]=new option('ชีววิทยาประมง','60bbb02');
  theform.select4.options[4]=new option('เพาะเลี้ยงสัตว์น้ำ','60bbb03');
  theform.select4.options[5]=new option('ผลิตภัณฑ์ประมง','60bbb04');
  theform.select4.options[6]=new option('วิทยาศาสตร์ทางทะเล','60bbb05');
  theform.select4=false;
  }
  break;
  case"60ba":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60baa00');
  theform.select4.options[2]=new option('เกษตรกลวิธาน','60baa01');
  theform.select4.options[3]=new option('กีฏวิทยา','60baa02');
  theform.select4.options[4]=new option('โรคพืช','60baa03');
  theform.select4.options[5]=new option('ปฐพีวิทยา','60baa04');
  theform.select4.options[6]=new option('พืชไร่นา','60baa05');
  theform.select4.options[7]=new option('พืชสวน','60baa06');
  theform.select4.options[8]=new option('สัตวบาล','60baa07');
  theform.select4.options[9]=new option('คหกรรมศาสตร์','60baa08');
  theform.select4.options[10]=new option('เกษตรเขตร้อนและบริหารธุรกิจ','60baa10');
  theform.select4.options[11]=new option('ส่งเสริมและนิเทศศาสตร์เกษตร','60baa11');
  theform.select4.options[12]=new option('การจัดการศัตรูพืช','60baa12');
  theform.select4.options[13]=new option('เคมีการเกษตร','60baa13');
  theform.select4.options[14]=new option('วิทยาศาสตร์เกษตร','60baa15');
  theform.select4.options[15]=new option('เทคโนโลยีชีวภาพทางการเกษตร','60baa16');
  theform.select4.options[16]=new option('เกษตรเขตร้อน','60baa17');
  theform.select4.options[17]=new option('อาหารและโภชนาการ','60baa18');
  theform.select4.options[18]=new option('การจัดการศัตรูพืชและสัตว์','60baa19');
  theform.select4.options[19]=new option('สัตวศาสตร์อุตสาหกรรม','60baa20');
  theform.select4=false;
  }
  break;
  case"60cd":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60cdd00');
  theform.select4.options[2]=new option('คณิตศาสตร์','60cdd01');
  theform.select4.options[3]=new option('เคมี','60cdd02');
  theform.select4.options[4]=new option('รังสีประยุกต์และไอโซโทป','60cdd06');
  theform.select4.options[5]=new option('พันธุศาสตร์','60cdd10');
  theform.select4.options[6]=new option('พฤกษศาสตร์','60cdd11');
  theform.select4.options[7]=new option('สัตววิทยา','60cdd12');
  theform.select4.options[8]=new option('สาธารณสุขศาสตรบัณฑิต','60cdd51');
  theform.select4.options[9]=new option('สาธารณสุขศาสตรบัณฑิต','60cdd5101');
  theform.select4.options[10]=new option('อนามัยสิ่งแวดล้อม','60cdd52');
  theform.select4.options[11]=new option('อนามัยสิ่งแวดล้อม','60cdd5201');
  theform.select4=false;
  }
  break;
  case"60cc":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ไม่สังกัดภาควิชา','60ccc00');
  theform.select4.options[2]=new option('การจัดการ','60ccc51');
  theform.select4.options[3]=new option('การจัดการ','60ccc5101');
  theform.select4.options[4]=new option('การบัญชี','60ccc52');
  theform.select4.options[5]=new option('การบัญชี','60ccc5201');
  theform.select4.options[6]=new option('สาธารณสุขศาสตร์(ต่อเนื่อง)','60ccc53');
  theform.select4.options[7]=new option('สาธารณสุขศาสตร์(ต่อเนื่อง)','60ccc5301');
  theform.select4.options[8]=new option('การตลาด','60ccc54');
  theform.select4.options[9]=new option('การตลาด','60ccc5401');
  theform.select4.options[10]=new option('การจัดการโรงแรมและท่องเที่ยว','60ccc55');
  theform.select4.options[11]=new option('การจัดการโรงแรมและท่องเที่ยว','60ccc5501');
  theform.select4.options[12]=new option('ภาษาอังกฤษ','60ccc56');
  theform.select4.options[13]=new option('ภาษาอังกฤษ','60ccc5601');
  theform.select4.options[14]=new option('การเงิน','60ccc57');
  theform.select4.options[15]=new option('การเงิน','60ccc5701');
  theform.select4.options[16]=new option('นิติศาสตร์','60ccc58');
  theform.select4.options[17]=new option('นิติศาสตร์','60ccc5801');
  theform.select4.options[18]=new option('รัฐประศาสนศาสตร์','60ccc59');
  theform.select4.options[19]=new option('รัฐประศาสนศาสตร์','60ccc5901');
  theform.select4=false;
  }
  break;
  case"60cb":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('วิศวกรรมเครื่องกล','60cbb51');
  theform.select4.options[2]=new option('วิศวกรรมเครื่องกล','60cbb5101');
  theform.select4.options[3]=new option('วิศวกรรมไฟฟ้า','60cbb52');
  theform.select4.options[4]=new option('วิศวกรรมไฟฟ้า','60cbb5201');
  theform.select4.options[5]=new option('วิศวกรรมโยธา','60cbb53');
  theform.select4.options[6]=new option('วิศวกรรมโยธา','60cbb5301');
  theform.select4.options[7]=new option('เทคโนโลยีสารสนเทศ','60cbb54');
  theform.select4.options[8]=new option('เทคโนโลยีสารสนเทศ','60cbb5401');
  theform.select4.options[9]=new option('วิศวกรรมเครื่องกลและการผลิต','60cbb55');
  theform.select4.options[10]=new option('วิศวกรรมเครื่องกลและการผลิต','60cbb5501');
  theform.select4.options[11]=new option('วิศวกรรมเครื่องกลและการผลิต','60cbb5502');
  theform.select4.options[12]=new option('วิศวกรรมไฟฟ้าและคอมพิวเตอร์','60cbb56');
  theform.select4.options[13]=new option('วิศวกรรมไฟฟ้าและคอมพิวเตอร์','60cbb5601');
  theform.select4.options[14]=new option('วิศวกรรมไฟฟ้า','60cbb5602');
  theform.select4.options[15]=new option('วิศวกรรมโยธาและสิ่งแวดล้อม','60cbb57');
  theform.select4.options[16]=new option('วิศวกรรมโยธาและสิ่งแวดล้อม','60cbb5701');
  theform.select4.options[17]=new option('วิศวกรรมโยธา','60cbb5702');
  theform.select4.options[18]=new option('เคมีประยุกต์','60cbb58');
  theform.select4.options[19]=new option('เคมีประยุกต์','60cbb5801');
  theform.select4.options[20]=new option('สาธารณสุขศาสตร์','60cbb59');
  theform.select4.options[21]=new option('สาธารณสุขศาสตร์','60cbb5901');
  theform.select4.options[22]=new option('วิทยาการคอมพิวเตอร์','60cbb60');
  theform.select4.options[23]=new option('วิทยาการคอมพิวเตอร์','60cbb6001');
  theform.select4.options[24]=new option('วิศวกรรมคอมพิวเตอร์','60cbb61');
  theform.select4.options[25]=new option('วิศวกรรมคอมพิวเตอร์','60cbb6101');
  theform.select4.options[26]=new option('วิศวกรรมอุตสาหการ','60cbb62');
  theform.select4.options[27]=new option('วิศวกรรมอุตสาหการ','60cbb6201');
  theform.select4.options[28]=new option('คณิตศาสตร์ประยุกต์','60cbb63');
  theform.select4.options[29]=new option('คณิตศาสตร์ประยุกต์','60cbb6301');
  theform.select4=false;
  }
  break;
  case"60ca":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60caa00');
  theform.select4.options[2]=new option('ปฐพีวิทยา','60caa04');
  theform.select4.options[3]=new option('ทรัพยากรเกษตรชีวภาพ','60caa51');
  theform.select4.options[4]=new option('ทรัพยากรเกษตรชีวภาพ','60caa5101');
  theform.select4.options[5]=new option('เทคโนโลยีการอาหาร','60caa52');
  theform.select4.options[6]=new option('เทคโนโลยีการอาหาร','60caa5201');
  theform.select4.options[7]=new option('ทรัพยากรเกษตร','60caa53');
  theform.select4.options[8]=new option('ทรัพยากรเกษตร','60caa5301');
  theform.select4.options[9]=new option('อาหารปลอดภัยและโภชนาการ','60caa54');
  theform.select4.options[10]=new option('อาหารปลอดภัยและโภชนาการ','60caa5401');
  theform.select4.options[11]=new option('ทรัพยากรเกษตรและการจัดการการผลิต','60caa55');
  theform.select4.options[12]=new option('ทรัพยากรเกษตรและการจัดการการผลิต','60caa5501');
  theform.select4.options[13]=new option('ประมง','60caa56');
  theform.select4.options[14]=new option('ประมง','60caa5601');
  theform.select4.options[15]=new option('สัตวศาสตร์','60caa57');
  theform.select4.options[16]=new option('สัตวศาสตร์','60caa5701');
  theform.select4=false;
  }
  break;
  case"60iw":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('พยาบาลศาสตร์','60iww00');
  theform.select4.options[2]=new option('วิทยาลัยพยาบาล บรมราชชนนี นพรัตน์วชิระ (ต่อเนื่อง)','60iww01');
  theform.select4=false;
  }
  break;
  case"60im":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('วิทยาลัยการชลประทาน','60imm00');
  theform.select4.options[2]=new option('วิศวกรรมโยธา-ชลประทาน','60imm12');
  theform.select4=false;
  }
  break;
  case"60kz":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ข้ามมหาวิทยาลัย','60kzz00');
  theform.select4=false;
  }
  break;
  case"60ks":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('วิทยาศาสตร์การกีฬา','60kss00');
  theform.select4.options[2]=new option('วิทยาศาสตร์การกีฬา','60kss01');
  theform.select4.options[3]=new option('วิทยาศาสตร์การกีฬาและการออกกำลังกาย','60kss02');
  theform.select4=false;
  }
  break;
  case"60kq":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ศิลปศาสตร์และวิทยาศาสตร์','60kqq00');
  theform.select4.options[2]=new option('ศิลปศาสตร์และวิทยาศาสตร์(สายวิทย์)','60kqq01');
  theform.select4.options[3]=new option('ภาษาอังกฤษ','60kqq02');
  theform.select4.options[4]=new option('วิทยาการคอมพิวเตอร์','60kqq03');
  theform.select4.options[5]=new option('วิทยาศาสตร์ชีวภาพ','60kqq04');
  theform.select4.options[6]=new option('เทคโนโลยีสารสนเทศ','60kqq05');
  theform.select4.options[7]=new option('เคมี','60kqq06');
  theform.select4.options[8]=new option('ฟิสิกส์','60kqq07');
  theform.select4.options[9]=new option('บริหารธุรกิจ (การจัดการ)','60kqq08');
  theform.select4.options[10]=new option('จุลชีววิทยา','60kqq09');
  theform.select4.options[11]=new option('การตลาด','60kqq10');
  theform.select4.options[12]=new option('คณิตศาสตร์ประยุกต์','60kqq11');
  theform.select4.options[13]=new option('การจัดการโรงแรมและท่องเที่ยว.','60kqq12');
  theform.select4.options[14]=new option('การจัดการโรงแรมและท่องเที่ยว','60kqq13');
  theform.select4.options[15]=new option('การบัญชีบริหาร','60kqq14');
  theform.select4.options[16]=new option('รัฐศาสตร์','60kqq15');
  theform.select4.options[17]=new option('การท่องเที่ยว','60kqq16');
  theform.select4.options[18]=new option('ภาษาตะวันออก','60kqq17');
  theform.select4.options[19]=new option('ภาษาอังกฤษเพื่ออุตสาหกรรมบริการ','60kqq18');
  theform.select4.options[20]=new option('การจัดการธุรกิจการบิน','60kqq19');
  theform.select4.options[21]=new option('การโรงแรมและภัตตาคาร','60kqq20');
  theform.select4.options[22]=new option('นวัตกรรมการท่องเที่ยว','60kqq21');
  theform.select4=false;
  }
  break;
  case"60kf":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('พลศึกษา','60kff11');
  theform.select4.options[2]=new option('เกษตรศาสตร์','60kff13');
  theform.select4.options[3]=new option('คณิตศาสตร์','60kff16');
  theform.select4.options[4]=new option('ศึกษาศาสตร์-เกษตร','60kff31');
  theform.select4.options[5]=new option('เกษตรและสิ่งแวดล้อมศึกษา','60kff39');
  theform.select4.options[6]=new option('วิทยาศาสตร์การกีฬา (ภาคพิเศษ)','60kff41');
  theform.select4.options[7]=new option('เกษตรและสิ่งแวดล้อมศึกษา(หลักสูตร 5 ปี)','60kff71');
  theform.select4.options[8]=new option('คณิตศาสตร์และคอมพิวเตอร์ศึกษา','60kff72');
  theform.select4.options[9]=new option('การจัดการเรียนรู้ (หลักสูตร 5 ปี) สาขาวิชาพลศึกษาและสุขศึกษา','60kff73');
  theform.select4.options[10]=new option('การจัดการเรียนรู้ (หลักสูตร 5 ปี) สาขาวิชาภาษาอังกฤษศึกษา','60kff74');
  theform.select4.options[11]=new option('การจัดการเรียนรู้ (หลักสูตร 5 ปี)สาขาวิชาคณิตศาสตร์ศึกษา','60kff75');
  theform.select4.options[12]=new option('การจัดการเรียนรู้ (หลักสูตร 5 ปี)สาขาวิชาวิทยาศาสตร์ศึกษา','60kff76');
  theform.select4=false;
  }
  break;
  case"60ke":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60kee00');
  theform.select4.options[2]=new option('วิศวกรรมทรัพยากรน้ำ','60kee01');
  theform.select4.options[3]=new option('วิศวกรรมเกษตร','60kee02');
  theform.select4.options[4]=new option('วิศวกรรมเครื่องกล','60kee03');
  theform.select4.options[5]=new option('วิศวกรรมโยธา-ชลประทาน','60kee04');
  theform.select4.options[6]=new option('วิศวกรรมโยธา','60kee06');
  theform.select4.options[7]=new option('วิศวกรรมคอมพิวเตอร์','60kee09');
  theform.select4.options[8]=new option('วิศวกรรมการอาหาร','60kee12');
  theform.select4.options[9]=new option('วิศวกรรมอุตสาหการ-โลจิสติกส์','60kee24');
  theform.select4.options[10]=new option('วิศวกรรมคอมพิวเตอร์และอิเล็กทรอนิกส์','60kee25');
  theform.select4.options[11]=new option('ปี 1 วิศวกรรมศาสตร์ (กพส.)','60kee40');
  theform.select4=false;
  }
  break;
  case"60kb":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('เพาะเลี้ยงสัตว์น้ำ','60kbb03');
  theform.select4=false;
  }
  break;
  case"60ka":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('ยังไม่สังกัดภาควิชา','60kaa00');
  theform.select4.options[2]=new option('เกษตรกลวิธาน','60kaa01');
  theform.select4.options[3]=new option('กีฏวิทยา','60kaa02');
  theform.select4.options[4]=new option('โรคพืช','60kaa03');
  theform.select4.options[5]=new option('ปฐพีวิทยา','60kaa04');
  theform.select4.options[6]=new option('พืชไร่นา','60kaa05');
  theform.select4.options[7]=new option('พืชสวน','60kaa06');
  theform.select4.options[8]=new option('สัตวบาล','60kaa07');
  theform.select4.options[9]=new option('ส่งเสริมและนิเทศศาสตร์เกษตร','60kaa11');
  theform.select4.options[10]=new option('การจัดการศัตรูพืช','60kaa12');
  theform.select4.options[11]=new option('เทคโนโลยีชีวภาพทางการเกษตร','60kaa16');
  theform.select4.options[12]=new option('กีฏวิทยา','60kaa26');
  theform.select4.options[13]=new option('เครื่องจักรกลและเมคคาทรอนิกส์เกษตร','60kaa27');
  theform.select4.options[14]=new option('ปฐพีวิทยา','60kaa28');
  theform.select4.options[15]=new option('พืชไร่นา','60kaa29');
  theform.select4.options[16]=new option('โรคพืช','60kaa31');
  theform.select4.options[17]=new option('ส่งเสริมและนิเทศศาสตร์เกษตร','60kaa32');
  theform.select4.options[18]=new option('สัตวศาสตร์','60kaa33');
  theform.select4.options[19]=new option('เทคโนโลยีชีวภาพทางการเกษตร','60kaa34');
  theform.select4.options[20]=new option('พืชสวน','60kaa37');
  theform.select4.options[21]=new option('ยังไม่สังกัดภาควิชา','60kaa50');
  theform.select4=false;
  }
  break;
  case"60pv":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('สาธารณสุขศาสตรบัณฑิต(ต่อเนื่อง) ภาคพิเศษ','60pvv00');
  theform.select4=false;
  }
  break;
  case"60st":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('วิศวกรรมคอมพิวเตอร์','60stt02');
  theform.select4.options[2]=new option('วิศวกรรมเครื่องกล','60stt03');
  theform.select4.options[3]=new option('วิศวกรรมไฟฟ้า','60stt04');
  theform.select4.options[4]=new option('วิศวกรรมโยธา','60stt05');
  theform.select4.options[5]=new option('วิศวกรรมอุตสาหการ','60stt07');
  theform.select4.options[6]=new option('วิศวกรรมเครื่องกลและการผลิต','60stt08');
  theform.select4.options[7]=new option('วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์','60stt12');
  theform.select4.options[8]=new option('วิศวกรรมเครื่องกลและการออกแบบ','60stt13');
  theform.select4.options[9]=new option('วิศวกรรมไฟฟ้าและอิเล็กทรอนิกส์','60stt14');
  theform.select4.options[10]=new option('วิศวกรรมอุตสาหการและระบบ','60stt17');
  theform.select4.options[11]=new option('วิศวกรรมเครื่องกลและระบบการผลิต (ภาคพิเศษ)','60stt18');
  theform.select4=false;
  }
  break;
  case"60ss":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('วิทยาเขตศรีราชา','60sss00');
  theform.select4.options[2]=new option('คณิตศาสตร์ประยุกต์','60sss01');
  theform.select4.options[3]=new option('เคมี','60sss03');
  theform.select4.options[4]=new option('วิทยาการคอมพิวเตอร์','60sss05');
  theform.select4.options[5]=new option('วิทยาการคอมพิวเตอร์(ภาคพิเศษ)','60sss06');
  theform.select4.options[6]=new option('วิทยาศาสตร์สิ่งแวดล้อม','60sss08');
  theform.select4.options[7]=new option('เทคโนโลยีสารสนเทศ','60sss09');
  theform.select4.options[8]=new option('เทคโนโลยีสารสนเทศ (ภาคพิเศษ)','60sss10');
  theform.select4.options[9]=new option('ฟิสิกส์','60sss11');
  theform.select4.options[10]=new option('วิทยาศาสตร์และเทคโนโลยีสิ่งแวดล้อม','60sss18');
  theform.select4=false;
  }
  break;
  case"60sr":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('การเงิน','60srr01');
  theform.select4.options[2]=new option('การจัดการ','60srr02');
  theform.select4.options[3]=new option('การตลาด','60srr03');
  theform.select4.options[4]=new option('ธุรกิจระหว่างประเทศ','60srr04');
  theform.select4.options[5]=new option('การจัดการโรงแรมและการท่องเที่ยว','60srr05');
  theform.select4.options[6]=new option('การโรงแรม','60srr06');
  theform.select4.options[7]=new option('ธุรกิจระหว่างประเทศ(ภาคพิเศษ)','60srr07');
  theform.select4.options[8]=new option('การจัดการ (ภาคพิเศษ)','60srr08');
  theform.select4.options[9]=new option('การเงิน(ภาคพิเศษ)','60srr09');
  theform.select4.options[10]=new option('การจัดการโรงแรมและการท่องเที่ยว(ภาคพิเศษ)','60srr10');
  theform.select4.options[11]=new option('การตลาด (ภาคพิเศษ)','60srr11');
  theform.select4.options[12]=new option('การบัญชีบริหาร (ภาคพิเศษ)','60srr12');
  theform.select4.options[13]=new option('การบัญชีบริหาร','60srr13');
  theform.select4.options[14]=new option('การจัดการโลจิสติกส์','60srr14');
  theform.select4.options[15]=new option('การจัดการโลจิสติกส์ (ภาคพิเศษ)','60srr15');
  theform.select4.options[16]=new option('การเงินและการลงทุน','60srr16');
  theform.select4.options[17]=new option('การเงินและการลงทุน','60srr17');
  theform.select4=false;
  }
  break;
  case"60sm":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('วิศวกรรมต่อเรือและเครื่องกลเรือ','60smm01');
  theform.select4.options[2]=new option('วิทยาศาสตร์การเดินเรือ','60smm02');
  theform.select4.options[3]=new option('วิศวกรรมต่อเรือและเครื่องกลเรือ (ผู้ปฏิบัติงานบนเรือ)','60smm03');
  theform.select4.options[4]=new option('การขนส่งทางทะเล','60smm04');
  theform.select4.options[5]=new option('วิศวกรรมต่อเรือและเครื่อกลเรือ กลุ่มวิชาวิศวกรรมนอกฝั่ง','60smm05');
  theform.select4.options[6]=new option('วิศวกรรมต่อเรือและเครื่องกลเรือ','60smt01');
  theform.select4=false;
  }
  break;
  case"60sg":
  {
  theform.select4.options[0]=new option('ทุกสาขา','ทุกสาขา');
  theform.select4.options[1]=new option('เศรษฐศาสตร์','60sgg01');
  theform.select4.options[2]=new option('เศรษฐศาสตร์ ภาคพิเศษ','60sgg02');
  theform.select4=false;
  }
  break;
 }
 }
 </script>
        </p>
</form>


        <div id="grid-example" align=center></div>
    </body>
</html>

