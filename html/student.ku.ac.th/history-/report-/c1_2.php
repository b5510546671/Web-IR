<!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>
            2.2 รายงานข้อมูลนิสิตใหม่ ปีการศึกษา 25 จำแนกตามประเภทการรับเข้าจำแนกตามประเภทการรับเข้า วิทยาเขต กลุ่มสาขาวิชา และคณะ
        </title>
        <link rel="stylesheet" type="text/css" href="../ext-4.0-beta1/resources/css/ext-all.css">
        <link rel="stylesheet" type="text/css" href="../ext-4.0-beta1/examples/shared/example.css">
        <script type="text/javascript" src="../ext-4.0-beta1/bootstrap.js"></script>
        <!-- <script type="text/javascript" src="b1.js"></script> -->

		<style>
		table.mytable {
		border: 1px solid #b0b0d9;
		width:100%;
		font-weight: lighter; color: black;
		}
		table.mytable td {
		border: 1px solid #b0b0d9;
		background-image: url('../ext-4.0-beta1/resources/themes/images/default/grid/column-header-bg.png');
		width: 123px;
		height: 20px;

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
/*
            {name: 'column0',     type: 'string'},
            {name: 'column1', type: 'string'},
            {name: 'column2',     type: 'string'},
            {name: 'column3', type: 'string'},
            {name: 'column4',     type: 'string'},
            {name: 'column5', type: 'string'},

            {name: 'column6',     type: 'string'},
            {name: 'column7', type: 'string'},
            {name: 'column8',     type: 'string'},
            {name: 'column9', type: 'string'},
            {name: 'column10',     type: 'string'},
            {name: 'column11', type: 'string'},

            {name: 'column12',     type: 'string'},
            {name: 'column13', type: 'string'},
            {name: 'column14',     type: 'string'},
            {name: 'column15', type: 'string'},
            {name: 'column16',     type: 'string'},
            {name: 'column17', type: 'string'}
*/
{name: 'column0',     type: 'string'},
{name: 'column1',     type: 'string'},
{name: 'column2',     type: 'string'},
{name: 'column3',     type: 'string'},
{name: 'column4',     type: 'string'},
{name: 'column5',     type: 'string'},
{name: 'column6',     type: 'string'},
{name: 'column7',     type: 'string'},
{name: 'column8',     type: 'string'},
{name: 'column9',     type: 'string'},
{name: 'column10',     type: 'string'},
{name: 'column11',     type: 'string'},
{name: 'column12',     type: 'string'},
{name: 'column13',     type: 'string'},
{name: 'column14',     type: 'string'},
{name: 'column15',     type: 'string'},
{name: 'column16',     type: 'string'},
{name: 'column17',     type: 'string'},
{name: 'column18',     type: 'string'},
{name: 'column19',     type: 'string'},
{name: 'column20',     type: 'string'},
{name: 'column21',     type: 'string'},
{name: 'column22',     type: 'string'},
{name: 'column23',     type: 'string'}
        ]
    });
    var yr=document.getelementbyid('yr').value;
	if(yr=='54'){
		var store = new ext.data.treestore({
			model: 'task',
			proxy: {
				type: 'ajax',
				//the store will get the content from the .json file
				url: 'c1_2_data54.json'		
			},
			root: {
				expanded: true
			},
			foldersort: true
		});
	}else if(yr=='55'){			
		var store = new ext.data.treestore({
			model: 'task',
			proxy: {
				type: 'ajax',
				//the store will get the content from the .json file
				url: 'c1_2_data55.json'	
			},
			root: {
				expanded: true
			},
			foldersort: true
		});
	}else{
		var store = new ext.data.treestore({
			model: 'task',
			proxy: {
				type: 'ajax',
				//the store will get the content from the .json file
				url: 'c1_2_data.php?yr='	
			},
			root: {
				expanded: true
			},
			foldersort: true
		});
	}

    //ext.ux.tree.treegrid is no longer a ux. you can simply use a tree.treepanel
    var tree = new ext.tree.treepanel({
        //title: '2.2 รายงานข้อมูลนิสิตใหม่จำแนกตามประเภทการรับเข้าจำแนกตามประเภทการรับเข้า วิทยาเขต กลุ่มสาขาวิชา และคณะ<span style="margin-left: 970px;"><a href="./c1_2_export.php?yr="><img src="../image/csv.png" width="30" height="30" border="0" alt="export data..."></a></span><br><table style="border: 1 solid white; font-weight: lighter; color: black;"><tr><td style="width:313px; height: 20px;">&nbsp;</td><td width=425px; align=center bgcolor=#97d079>ภาคปกติ</td><td width=425px; align=center bgcolor=#e4765c>ภาคพิเศษ</td><td width=425px; align=center bgcolor=#6699ff>รวม</td></tr><tr><td>&nbsp;</td><td><table class="mytable"><tr><td bgcolor=#97d079>สกอ.</td><td bgcolor=#97d079>ข้อตกลง มก.</td><td bgcolor=#97d079>รับโดยตรง</td><td bgcolor=#97d079>รวม</td></tr></table></td><td><table class="mytable"><tr><td bgcolor=#97d079>สกอ.</td><td bgcolor=#97d079>ข้อตกลง มก.</td><td bgcolor=#97d079>รับโดยตรง</td><td bgcolor=#97d079>รวม</td></tr></table></td><td><table class="mytable"><tr><td bgcolor=#97d079>สกอ.</td><td bgcolor=#97d079>ข้อตกลง มก.</td><td bgcolor=#97d079>รับโดยตรง</td><td bgcolor=#97d079>รวม</td></tr></table></td></tr></table>',
			
        title: '2.2 รายงานข้อมูลนิสิตใหม่ ปีการศึกษา 25 จำแนกตามประเภทการรับเข้าจำแนกตามประเภทการรับเข้า วิทยาเขต กลุ่มสาขาวิชา และคณะ<span style="margin-left: 795px;"><a target="_blank" href="./c1_2_export25.csv"><img src="../image/csv.png" width="30" height="30" border="0" alt="export data..."></a></span><br><table style="border: 1 solid white; font-weight: lighter; color: black;"><tr><td style="width:313px; height: 20px;">&nbsp;</td><td width=425px; align=center bgcolor=#97d079>ภาคปกติ</td><td width=425px; align=center bgcolor=#e4765c>ภาคพิเศษ</td><td width=425px; align=center bgcolor=#6699ff>รวม</td></tr><tr><td>&nbsp;</td><td><table class="mytable"><tr><td bgcolor=#97d079>สกอ.</td><td bgcolor=#97d079>ข้อตกลง มก.</td><td bgcolor=#97d079>รับโดยตรง</td><td bgcolor=#97d079>รวม</td></tr></table></td><td><table class="mytable"><tr><td bgcolor=#97d079>สกอ.</td><td bgcolor=#97d079>ข้อตกลง มก.</td><td bgcolor=#97d079>รับโดยตรง</td><td bgcolor=#97d079>รวม</td></tr></table></td><td><table class="mytable"><tr><td bgcolor=#97d079>สกอ.</td><td bgcolor=#97d079>ข้อตกลง มก.</td><td bgcolor=#97d079>รับโดยตรง</td><td bgcolor=#97d079>รวม</td></tr></table></td></tr></table>',
        width: 1605,
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
            flex:6,
            sortable: false,
            dataindex: 'task'
			
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column0',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column1',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column2',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column3',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column4',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column5',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column6',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column7',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column8',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column9',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column10',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column11',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column12',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column13',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column14',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column15',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column16',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column17',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column18',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column19',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column20',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column21',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">จำนวน</span>',
    flex: 1,
    dataindex: 'column22',
    sortable: false
},{
    text: '<span style="padding-left: 9px;">ร้อยละ</span>',
    flex: 1,
    dataindex: 'column23',
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
	url: 'find_major.php', 
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
				head=response[i].campus_name+'<br>&nbsp;&nbsp;'+response[i].group_name+'<br>&nbsp;&nbsp;&nbsp;&nbsp;'+response[i].fac_name+'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';		
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
		background-image: url(../ext-4.0-beta1/examples/shared/icons/fam/cog.png) !important;
	}
	.task-folder {
		background-image: url(../ext-4.0-beta1/examples/shared/icons/fam/folder_go.png) !important;
	}
</style>
    </head>
    <body>
        <div style="text-align:center;">
		<form method=post action="">
			ปีการศึกษา: <select name="yr" id="yr">
				<option value="">please select!</option> 
				<option value="55" >2555</option> 
				<option value="54" >2554</option> 
			</select>
			<input type="submit">
        </form>
		</div>
        <div id="tree-example"></div>
    </body>
</html>
