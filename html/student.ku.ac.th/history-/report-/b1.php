<!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>
            1.1 รายงานสรุปจำนวนนิสิตใหม่ที่บันทึกและไม่ได้บันทึกขัอมูลประวัติและแบบสำรวจ
        </title>
        <link rel="stylesheet" type="text/css" href="../ext-4.0-beta1/resources/css/ext-all.css">
        <link rel="stylesheet" type="text/css" href="../ext-4.0-beta1/examples/shared/example.css">
        <script type="text/javascript" src="../ext-4.0-beta1/bootstrap.js"></script>
        <!-- <script type="text/javascript" src="b1.js"></script> -->

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
            {name: 'c_10_persen', type: 'string'}
        ]
    });
    
    var store = new ext.data.treestore({
        model: 'task',
        proxy: {
            type: 'ajax',
            //the store will get the content from the .json file
            //url: 'b1_data.json'
            //url: 'b1_data.php?yr='
            url: 'b1_data.php?yr=60'
        },
        root: {
            expanded: true
        },
        foldersort: true
    });

    //ext.ux.tree.treegrid is no longer a ux. you can simply use a tree.treepanel
    var tree = new ext.tree.treepanel({
        title: '1.1 รายงานสรุปจำนวนนิสิตใหม่ที่บันทึกและไม่ได้บันทึกขัอมูลประวัติและแบบสำรวจ<span style="margin-left: 745px;"><a href="./b1_export.php?yr=57"><img src="../image/csv.png" width="30" height="30" border="0" alt="export data..."></a></span><br><table style="border: 1 solid white;	height: 20px; font-weight: lighter; color: black;"><tr><td width=292px; bgcolor=#6699ff>&nbsp;</td><td width=395px; align=center bgcolor=#97d079>นิสิตบันทึกข้อมูลแล้ว</td><td width=392px; align=center bgcolor=#e4765c>นิสิตยังไม่บันทึกข้อมูลแล้ว</td><td width=100px; bgcolor=#6699ff>&nbsp;</td></tr></table>',
        width: 1200,
        height: 600,
        renderto: ext.getbody(),
        //collapsible: true,
        usearrows: true,
        rootvisible: false,
        store: store,
        multiselect: true,
        singleexpand: false,
        //the 'columns' property is now 'headers'
        headers: [{
            xtype: 'treeheader', //this is so we know which column will show the tree
            text: 'วิทยาเขต/คณะ/สาขาวิชา',
            flex: 3,
            sortable: true,
            dataindex: 'task'
        },{
            text: 'ประวัตินิสิต(จน.)',
            flex: 1,
            dataindex: 'c_1',
            sortable: true
        },{
            text: 'ประวัตินิสิต(%)',
            flex: 1,
            dataindex: 'c_1_persen',
            sortable: true
        },{
            text: 'แบบสำรวจ(จน.)',
            flex: 1,
            dataindex: 'c_2',
            sortable: true
        },{
            text: 'แบบสำรวจ(%)',
            flex: 1,
            dataindex: 'c_2_persen',
            sortable: true
        },{
            text: 'ประวัตินิสิต(จน.)',
            flex: 1,
            dataindex: 'c_3',
            sortable: true
        },{
            text: 'ประวัตินิสิต(%)',
            flex: 1,
            dataindex: 'c_3_persen',
            sortable: true
        },{
            text: 'แบบสำรวจ(จน.)',
            flex: 1,
            dataindex: 'c_4',
            sortable: true
        },{
            text: 'แบบสำรวจ(%)',
            flex: 1,
            dataindex: 'c_4_persen',
            sortable: true
        },{
            text: 'รวม',
            flex: 1,
            dataindex: 'c_5',
            sortable: true
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

function findstd(type,campus_id,fac_id,major_id,major_name,extra,yr){
	switch (type)
{
case 's_save':
  typename=" (บันทึกข้อมูลแล้ว)";
  break;
case 's_save_poll':
  typename=" (บันทึกแบบสำรวจแล้ว)";
  break;
case 's_wosave':
  typename=" (ยัง<b style=\"color: red;\">ไม่ได้</b>บันทึก<b style=\"color: red;\">ข้อมูล</b>)";
  break;
case 's_wosave_poll':
  typename=" (ยัง<b style=\"color: red;\">ไม่ได้</b>บันทึกแบบ<b style=\"color: red;\">สำรวจ</b>)";
  break;
default:
  typename=" (i'm looking forward to this weekend!)";
}
	var description=new array();
	ext.ajax.request({ 
	url: 'find_std.php', 
	params: {type:type, campus_id:campus_id, fac_id:fac_id, major_id:major_id, extra:extra, yr:yr},									
	method: 'post',  
	success: function(response) {  			
			var data=response.responsetext;
			//alert(data);
			var response=eval("("+data+")");
			//alert(response.length);
			for(var i=0;i<=response.length;i++){
			 description[i]=(i+(1*1))+'.  '+response[i].std_id+' '+response[i].std_title+' '+response[i].std_name+' '+response[i].std_surname+'<br>';
				if(i==(response.length-1)){
				//ext.msg.alert('type',description);				
				var win2 = ext.create('widget.window', {
					height: 500,
					/*autoheight: true,*/
					width: 400,
					title: major_name+typename,
					closable: true,
					autoscroll: true,
					items: new ext.panel({
						deferredrender:false,
						autowidth : true,
						autoheight : true,                        
						html: description,
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
<!-- 
        <div style="text-align:center;">
		<form method=post action="">
			ปีการศึกษา: <select name="yr">
				<option value="">please select!</option> 
				<option value="56" >2557</option> 
			</select>
			<input type="submit">
        </form>
		</div>
 -->
        <div id="tree-example"></div>
    </body>
</html>
