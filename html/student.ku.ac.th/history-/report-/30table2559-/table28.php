<!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>
             table28  ความคาดหวังขณะศึกษาในมหาวิทยาลัยเกษตรศาสตร์ของนิสิตใหม่  จำแนกตามวิทยาเขต กลุ่มสาขา และคณะ
        </title>
        <link rel="stylesheet" type="text/css" href="../../ext-4.0-beta1/resources/css/ext-all.css">
        <link rel="stylesheet" type="text/css" href="../../ext-4.0-beta1/examples/shared/example.css">
        <script type="text/javascript" src="../../ext-4.0-beta1/bootstrap.js"></script>
        <!-- <script type="text/javascript" src="b1.js"></script> -->

		<style>
		table.mytable {
		border: 1px solid #b0b0d9;
		width:100%;
		font-weight: lighter; color: black;
		}
		table.mytable td {
		border: 1px solid #b0b0d9;
		vertical-align: middle;
		background-image: url('../../ext-4.0-beta1/resources/themes/images/default/grid/column-header-bg.png');
		width: 145px;
		height: 40px;

		text-align:center;
		}
		</style>

<script type="text/javascript">
ext.require([
    'ext.data.*',
    'ext.grid.*',
    'ext.tree.*'
]);

ext.onready(function() {
    //we want to setup a model and store instead of using dataurl
    ext.regmodel('task', {
        fields: [
            {name: 'task',     type: 'string'},

            {name: 'c_1',     type: 'string'},
            {name: 'c_1_persen', type: 'string'},
            {name: 'c_2',     type: 'string'},
            {name: 'c_2_persen', type: 'string'},
            {name: 'c_3',     type: 'string'},
            {name: 'c_3_persen', type: 'string'},

            {name: 'c_4',     type: 'string'},
            {name: 'c_4_persen', type: 'string'},
            {name: 'c_5',     type: 'string'},
            {name: 'c_5_persen', type: 'string'},
            {name: 'c_6',     type: 'string'},
            {name: 'c_6_persen', type: 'string'},

            {name: 'c_7',     type: 'string'},
            {name: 'c_7_persen', type: 'string'},
            {name: 'c_8',     type: 'string'},
            {name: 'c_8_persen', type: 'string'},
            {name: 'c_9',     type: 'string'},
            {name: 'c_9_persen', type: 'string'},
            {name: 'c_10',     type: 'string'},
            {name: 'c_10_persen', type: 'string'},
            {name: 'c_11',     type: 'string'},
            {name: 'c_11_persen', type: 'string'},
            {name: 'c_12',     type: 'string'},
            {name: 'c_12_persen', type: 'string'}
        ]
    });
    
    
    var yr=document.getelementbyid('yr').value;
		var store = new ext.data.treestore({
			model: 'task',
			proxy: {
				type: 'ajax',
				//the store will get the content from the .json file
				url: 'table28_data.php?yr='
				//url: 'table28_data59.json'
			},
			root: {
				expanded: true
			},
			foldersort: true
		});

    //ext.ux.tree.treegrid is no longer a ux. you can simply use a tree.treepanel
    var tree = new ext.tree.treepanel({
        //title: 'table28  ความคาดหวังขณะศึกษาในมหาวิทยาลัยเกษตรศาสตร์ของนิสิตใหม่ ปีการศึกษา 2554 จำแนกตามวิทยาเขต กลุ่มสาขา และคณะ<span style="margin-left: 935px;"><a href="./table29generalexpect1map29_export.php?yr=54"><img src="../../image/csv.png" width="30" height="30" border="0" alt="export data..."></a></span><br><table  style="border: 1 solid white; font-weight: lighter; color: black;"><tr><td style="width:360px;">&nbsp;</td><td><table class="mytable"><tr><td bgcolor=#97d079 colspan=11>ความคาดหวังอันดับที่ 1</td><td bgcolor=#97d079 rowspan=2>รวม</td></tr><tr><td bgcolor=#97d079>มีความรู้และความเข้าใจ<br>ในหลักสูตร / สาขา</td><td bgcolor=#97d079>การจัดการเรียน<br>การสอนและอาจารย์</td><td bgcolor=#97d079>การเข้าร่วมกิจกรรม/<br>ได้รับทุนการศึกษา</td><td bgcolor=#97d07>เพื่อน / รุ่นพี่ และ<br>สภาพแวดล้อมที่ดี</td><td bgcolor=#97d079>การได้งานทำหลัง<br>สำเร็จการศึกษา</td><td bgcolor=#97d079>มีความสุขและได้ประสบการณ์<br>ชีวิตในมหาวิทยาลัย</td><td bgcolor=#97d079>จบการศึกษาตามระยะ<br>เวลาที่กำหนดไว้</td><td bgcolor=#97d079>บัณฑิตที่มีคุณภาพและ<br>ผลการเรียนที่ดี</td><td bgcolor=#97d079>สามารถนำไปเป็นพื้นฐาน<br>ในการศึกษาต่อได้</td><td bgcolor=#97d079>มีประโยชน์ต่อการประกอบ<br>อาชีพ /ชีวิตประจำวัน</td></tr></table>	</td></tr></table>',
			
        //title: 'table28  ความคาดหวังขณะศึกษาในมหาวิทยาลัยเกษตรศาสตร์ของนิสิตใหม่  จำแนกตามวิทยาเขต กลุ่มสาขา และคณะ<span style="margin-left: 935px;"><a target="_blank" href="./3_29_export25.csv"><img src="../../image/csv.png" width="30" height="30" border="0" alt="export data..."></a></span><br><table  style="border: 1 solid white; font-weight: lighter; color: black;"><tr><td style="width:360px;">&nbsp;</td><td><table class="mytable"><tr><td bgcolor=#97d079 colspan=11>ความคาดหวังอันดับที่ 1</td><td bgcolor=#97d079 rowspan=2>รวม</td></tr><tr><td bgcolor=#97d079>มีความรู้และความเข้าใจ<br>ในหลักสูตร / สาขา</td><td bgcolor=#97d079>การจัดการเรียน<br>การสอนและอาจารย์</td><td bgcolor=#97d079>การเข้าร่วมกิจกรรม/<br>ได้รับทุนการศึกษา</td><td bgcolor=#97d07>เพื่อน / รุ่นพี่ และ<br>สภาพแวดล้อมที่ดี</td><td bgcolor=#97d079>การได้งานทำหลัง<br>สำเร็จการศึกษา</td><td bgcolor=#97d079>มีความสุขและได้ประสบการณ์<br>ชีวิตในมหาวิทยาลัย</td><td bgcolor=#97d079>จบการศึกษาตามระยะ<br>เวลาที่กำหนดไว้</td><td bgcolor=#97d079>บัณฑิตที่มีคุณภาพและ<br>ผลการเรียนที่ดี</td><td bgcolor=#97d079>สามารถนำไปเป็นพื้นฐาน<br>ในการศึกษาต่อได้</td><td bgcolor=#97d079>มีประโยชน์ต่อการประกอบ<br>อาชีพ /ชีวิตประจำวัน</td></tr></table>	</td></tr></table>',
			
        title: 'table28  ความคาดหวังขณะศึกษาในมหาวิทยาลัยเกษตรศาสตร์ของนิสิตใหม่  จำแนกตามวิทยาเขต กลุ่มสาขา และคณะ<span style="margin-left: 935px;"><a target="_blank" href="./3_29_export25.csv"><img src="../../image/csv.png" width="30" height="30" border="0" alt="export data..."></a></span><br><table  style="border: 1 solid white; font-weight: lighter; color: black;"><tr><td style="width:360px;">&nbsp;</td><td><table class="mytable"><tr><td bgcolor=#97d079 colspan=11>ความคาดหวังอันดับที่ 1</td><td bgcolor=#97d079 rowspan=2>รวม</td></tr><tr><td bgcolor=#97d079>การจัดการเรียนการสอนที่มีคุณภาพ<br>เช่น หลักสูตร อาจารย์ผู้สอน<br> ตำรา ฯลฯ</td><td bgcolor=#97d079>ห้องสมุดมีหนังสือ/ตำรา <br>เพียงพอและข้อมูลทันสมัย</td><td bgcolor=#97d079>การบริการด้านงานทะเบียน<br>นิสิมีความสะดวกรวดเร็ว</td><td bgcolor=#97d07>ทุน กองทุน ที่สนับสนุนการศึกษา<br>เพียงพอต่อความต้องการ</td><td bgcolor=#97d079>เรียนจบตามเวลาที่กำหนด<br>และได้งานทำ</td><td bgcolor=#97d079>การใช้ความรู้เป็นพื้นฐาน<br>ในการศึกษาต่อ</td><td bgcolor=#97d079>การนำความรู้ไปใช้<br>ในชีวิตประจำวัน</td><td bgcolor=#97d079>อื่นๆ</td></tr></table>	</td></tr></table>',
        width: 1700,
        height: 600,
        renderto: ext.getbody(),
        //collapsible: true,
        usearrows: true,
        rootvisible: false,
        store: store,
        multiselect: true,
        //singleexpand: true,
        //the 'columns' property is now 'headers'
        headers: [{
            xtype: 'treeheader', //this is so we know which column will show the tree
            text: 'วิทยาเขต/กลุ่มสาขาวิชา/คณะ/',
            flex:5,
            sortable: false,
            dataindex: 'task'
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 'c_1',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 'c_1_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 'c_2',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 'c_2_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 'c_3',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 'c_3_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 'c_4',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 'c_4_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 'c_5',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 'c_5_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 'c_6',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 'c_6_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 'c_7',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 'c_7_persen',
            sortable: false
        
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 'c_8',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 'c_8_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 'c_9',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 'c_9_persen',
            sortable: false
        }]
    });
});
</script>


    
    <script language="javascript">
	ext.require([
    'ext.window.window',
    'ext.tab.*',
    'ext.toolbar.spacer',
    'ext.layout.container.card',
    'ext.layout.container.border'
]);

ext.onready(function(){
    var floater, constrainedwin, constrainedwin2;

    ext.util.region.override({
        colours: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'],
        nextcolour: 0,
        show: function(){
            var style = {
                display: 'block',
                position: 'absolute',
                top: this.top + 'px',
                left: this.left + 'px',
                height: ((this.bottom - this.top) + 1) + 'px',
                width: ((this.right - this.left) + 1) + 'px',
                opacity: 0.3,
                'pointer-events': 'none',
                'z-index': 9999999
            };
            if (!this.highlightel) {
                style['background-color'] = this.colours[this.nextcolour];
                ext.util.region.prototype.nextcolour++;
                this.highlightel = ext.getbody().createchild({
                    style: style
                });
                if (this.nextcolour >= this.colours.length) {
                    this.nextcolour = 0;
                }
            } else {
                this.highlightel.setstyle(style);
            }
        },
        hide: function(){
            if (this.highlightel) {
                this.highlightel.setstyle({
                    display: 'none'
                });
            }
        }
    });
});

function findmajor(campus_id,group_id,fac_id,yr){
	var description=new array();
	ext.ajax.request({ 
	url: '../find_major.php', 
	params: {campus_id:campus_id, group_id:group_id, fac_id:fac_id,  yr:yr},									
	method: 'post',  
	success: function(response) {  			
			var data=response.responsetext;
			//alert(data);
			var response=eval("("+data+")");
			//alert(response.length);
			var head='';
			for(var i=0;i<=response.length;i++){
			 description[i]=(i+(1*1))+'.  '+response[i].major_name+' ('+response[i].major_id+')'+'<br>';
				if(i==(response.length-1)){
				//ext.msg.alert('type',description);		
				head=response[i].campuc_3ame+'<br>&nbsp;&nbsp;'+response[i].group_name+'<br>&nbsp;&nbsp;&nbsp;&nbsp;'+response[i].fac_name+'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';		
				var win2 = ext.create('widget.window', {
					height: 500,
					/*autoheight: true,*/
					width: 500,
					title: 'find major',
					closable: true,
					autoscroll: true,
					items: new ext.panel({
						deferredrender:false,
						autowidth : true,
						autoheight : true,                        
						html: head+description.join("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"),
						border:false
					})
				});
				win2.show();
				}
			}									 
		} ,
		failure: function ( response) {
			 ext.msg.alert('submitted values',response.responsetext);  
	   }     
	 });   
}
</script>

<style type="text/css">
	.task {
		background-image: url(../../ext-4.0-beta1/examples/shared/icons/fam/cog.png) !important;
	}
	.task-folder {
		background-image: url(../../ext-4.0-beta1/examples/shared/icons/fam/folder_go.png) !important;
	}
</style>
</head>
    <body>
        <div style="text-align:center;">
		<form method=post action="">
			ปีการศึกษา: <select name="yr" id="yr">
				<option value="">please select!</option> 
				<option value="59" >2559</option> 
			</select>
			<input type="submit">
        </form>
		</div>
        <div id="tree-example"></div> 
    </body>
</html>
