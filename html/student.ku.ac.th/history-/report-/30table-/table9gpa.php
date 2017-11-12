<!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>
             3.9 คะแนนเฉลี่ยของนิสิตใหม่ ปีการศึกษา 25 จำแนกตามวิทยาเขต กลุ่มสาขา และคณะ
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
		background-image: url('../../ext-4.0-beta1/resources/themes/images/default/grid/column-header-bg.png');
		width: 145px;
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

            {name: 's_nf',     type: 'string'},
            {name: 's_nf_persen', type: 'string'},
            {name: 's_nm',     type: 'string'},
            {name: 's_nm_persen', type: 'string'},
            {name: 's_n',     type: 'string'},
            {name: 's_n_persen', type: 'string'},

            {name: 's_yf',     type: 'string'},
            {name: 's_yf_persen', type: 'string'},
            {name: 's_ym',     type: 'string'},
            {name: 's_ym_persen', type: 'string'},
            {name: 's_y',     type: 'string'},
            {name: 's_y_persen', type: 'string'},

            {name: 's_f',     type: 'string'},
            {name: 's_f_persen', type: 'string'},
            {name: 's_m',     type: 'string'},
            {name: 's_m_persen', type: 'string'},
            {name: 's',     type: 'string'},
            {name: 's_persen', type: 'string'}
        ]
    });
    
    
    var yr=document.getelementbyid('yr').value;
	if(yr=='54'){
		var store = new ext.data.treestore({
			model: 'task',
			proxy: {
				type: 'ajax',
				//the store will get the content from the .json file
				url: 'table9gpa_data54.json'		
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
				url: 'table9gpa_data55.json'	
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
				url: 'table9gpa_data.php?yr='
			},
			root: {
				expanded: true
			},
			foldersort: true
		});
	}

    //ext.ux.tree.treegrid is no longer a ux. you can simply use a tree.treepanel
    var tree = new ext.tree.treepanel({
        //title: ' 3.9 คะแนนเฉลี่ยของนิสิตใหม่ ปีการศึกษา 2554 จำแนกตามวิทยาเขต กลุ่มสาขา และคณะ<span style="margin-left: 835px;"><a href="./table9gpa_export.php?yr=54"><img src="../../image/csv.png" width="30" height="30" border="0" alt="export data..."></a></span><br><table style="border: 1 solid white; font-weight: lighter; color: black;"><tr><td style="width:360px;">&nbsp;</td><td><table class="mytable"><tr><td bgcolor=#97d079 colspan=6>คะแนนเฉลี่ย</td><td bgcolor=#97d079 rowspan=2>รวม</td></tr><tr><td bgcolor=#97d079>3.50-4.00</td><td bgcolor=#97d079>3.00-3.49</td><td bgcolor=#97d079>2.50-2.99</td><td bgcolor=#97d079>2.00-2.49</td><td bgcolor=#97d079>1.50-1.99</td><td bgcolor=#97d079>1.00-1.49</td></tr></table></td></tr></table>',
			
        title: ' 3.9 คะแนนเฉลี่ยของนิสิตใหม่ ปีการศึกษา 25 จำแนกตามวิทยาเขต กลุ่มสาขา และคณะ<span style="margin-left: 835px;"><a target="_blank" href="./3_9_export25.csv"><img src="../../image/csv.png" width="30" height="30" border="0" alt="export data..."></a></span><br><table style="border: 1 solid white; font-weight: lighter; color: black;"><tr><td style="width:360px;">&nbsp;</td><td><table class="mytable"><tr><td bgcolor=#97d079 colspan=6>คะแนนเฉลี่ย</td><td bgcolor=#97d079 rowspan=2>รวม</td></tr><tr><td bgcolor=#97d079>3.50-4.00</td><td bgcolor=#97d079>3.00-3.49</td><td bgcolor=#97d079>2.50-2.99</td><td bgcolor=#97d079>2.00-2.49</td><td bgcolor=#97d079>1.50-1.99</td><td bgcolor=#97d079>1.00-1.49</td></tr></table></td></tr></table>',
        width: 1405,
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
            dataindex: 's_nf',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 's_nf_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 's_nm',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 's_nm_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 's_n',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 's_n_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 's_yf',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 's_yf_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 's_ym',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 's_ym_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 's_y',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 's_y_persen',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">จำนวน</span>',
            flex: 1,
            dataindex: 's_f',
            sortable: false
        },{
            text: '<span style="padding-left: 14px;">ร้อยละ</span>',
            flex: 1,
            dataindex: 's_f_persen',
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
				<option value="58" >2558</option> 
				<option value="57" >2557</option> 
				<option value="56" >2556</option> 
				<option value="55" >2555</option> 
				<option value="54" >2554</option> 
			</select>
			<input type="submit">
        </form>
		</div>
        <div id="tree-example"></div> 
    </body>
</html>
