<!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>
            1.3 รายงานสรุปจำนวนผู้ผ่านขั้นตอนการเป็นนิสิตใหม่ (หลักสูตรนานาชาติ)(ไม่รวมสละสิทธิ์)
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
            {name: 'total',     type: 'string'},
            {name: 's_save',     type: 'string'},
            {name: 'r_save',     type: 'string'},
            {name: 'a_save',     type: 'string'},
            {name: 'c_save',     type: 'string'},
            {name: 'pass_save',     type: 'string'},
            {name: 'notpass_save',     type: 'string'},
            {name: 'disclaim',     type: 'string'}
        ]
    });
    
    var store = new ext.data.treestore({
        model: 'task',
        proxy: {
            type: 'ajax',
            //the store will get the content from the .json file
			            //url: 'b3_data.php?yr='
        },
        root: {
            expanded: true
        },
        foldersort: true
    });

    //ext.ux.tree.treegrid is no longer a ux. you can simply use a tree.treepanel
    var tree = new ext.tree.treepanel({
        title: ' 1.3 รายงานสรุปจำนวนผู้ผ่านขั้นตอนการเป็นนิสิตใหม่ (หลักสูตรนานาชาติ)(ไม่รวมสละสิทธิ์)<span style="margin-left: 745px;"><!-- <a href="./b3_export.php?yr="><img src="../image/csv.png" width="30" height="30" border="0" alt="export data..."></a> --></span>',
        width: 1180,
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
            text: '<b>วิทยาเขต/คณะ/สาขาวิชา</b>',
            flex: 3,
            sortable: true,
            dataindex: 'task'
        },{
            text: '<b>ผู้มีสิทธิ์เข้าศึกษา</b>',
            align: 'center',
            flex: 1,
            dataindex: 'total',
            sortable: true
        },{
            text: '<b>บันทึกประวัตินิสิต</b><img src=../image/approve1.png width=14 height=14>',
            align: 'center',
            flex: 1,
            dataindex: 's_save',
            sortable: true
        },{
            text: '<b>ลงทะเบียน</b><img src=../image/approve2.png width=14 height=14>',
            align: 'center',
            flex: 1,
            dataindex: 'r_save',
            sortable: true
        },{
            text: '<b>ส่งเอกสารมอบตัว</b><img src=../image/approve3.png width=14 height=14>',
            align: 'center',
            flex: 1,
            dataindex: 'a_save',
            sortable: true
        },{
            text: '<b>ทำบัตรนิสิต</b><img src=../image/approve4.png width=14 height=14>',
            align: 'center',
            flex: 1,
            dataindex: 'c_save',
            sortable: true
        },{
            text: '<b>ครบขั้นตอน</b>',
            align: 'center',
            flex: 1,
            dataindex: 'pass_save',
            sortable: true
        },{
            text: '<b>ไม่ครบขั้นตอน</b>',
            align: 'center',
            flex: 1,
            dataindex: 'notpass_save',
            sortable: true
        },{
            text: '<b>สละสิทธิ์</b>',
            align: 'center',
            flex: 1,
            dataindex: 'disclaim',
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

function findstd(type,ku,campus_id,fac_id,extra,major_id,yr){
	switch (type)
{
case 's_save':
  typename=" <font size=\"\" color=\"green\">(บันทึกประวัตินิสิต)</font>";
  break;
case 'pass_save':
  typename=" <font size=\"\" color=\"green\">(ครบขั้นตอน)</font>";
  break;
case 'notpass_save':
  typename=" <font size=\"\" color=\"red\">(ไม่ครบขั้นตอน)</font>";
  break;
case 'disclaim':
  typename=" <font size=\"\" color=\"red\">(สละสิทธิ์)</font>";
  break;
default:
  typename=" (i'm looking forward to this weekend!)";
}
	var description=new array();
	ext.ajax.request({ 
	url: 'find_std_b3_inter.php', 
	params: {type:type, ku:ku, campus_id:campus_id, fac_id:fac_id, major_id:major_id, extra:extra, yr:yr},									
	method: 'post',  
	success: function(response) {  			
			var data=response.responsetext;
			//alert(data);
			var response=eval("("+data+")");
			//alert(response.length);
			for(var i=0;i<=response.length;i++){
			 description[i]='<tr style="background-color: #f2f7ff;"><td>'+(i+(1*1))+'.  </td><td>'+response[i].std_id+'</td><td>'+response[i].std_title+response[i].std_name+'</td><td>'+response[i].std_surname+'</td><td>'+response[i].signal+'</td></tr>';
				if(i==(response.length-1)){
				//ext.msg.alert('type',description);				
				var win2 = ext.create('widget.window', {
					height: 500,
					/*autoheight: true,*/
					width: 450,
					title: campus_id+fac_id+extra+major_id+'-->'+typename,
					closable: true,
					autoscroll: true,
					items: new ext.panel({
						deferredrender:false,
						autowidth : true,
						autoheight : true,                        
						html: '<table>'+description+'</table>',
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
			ปีการศึกษา: <select name="yr">
				<option value="">please select!</option> 
				<option value="56" >2556</option> 
				<option value="55" >2555</option> 
			</select>
			<input type="submit">
        </form>
		</div>

        <div id="tree-example"></div>
    </body>
</html>
