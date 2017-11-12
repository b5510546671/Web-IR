<!doctype html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<script type="text/javascript">
var ewr_relative_path = "";

function ewr_getscript(url) { document.write("<" + "script type=\"text/javascript\" src=\"" + ewr_relative_path + url + "\"><" + "/script>"); }

function ewr_getcss(url) { document.write("<link rel=\"stylesheet\" type=\"text/css\" href=\"" + ewr_relative_path + url + "\">"); }
var ewr_language_id = "en";
var ewr_date_separator = "/"; // date separator
var ewr_time_separator = ":"; // time separator
var ewr_date_format = "mm/dd/yyyy"; // default date format
var ewr_date_format_id = "6"; // default date format id
var ewr_decimal_point = ".";
var ewr_thousands_sep = ",";
var ewr_session_timeout = 0; // session timeout time (seconds)
var ewr_session_timeout_countdown = 60; // count down time to session timeout (seconds)
var ewr_session_keep_alive_interval = 0; // keep alive interval (seconds)
var ewr_session_url = ewr_relative_path + "ewrsession10.php"; // session url
var ewr_is_loggedin = false; // is logged in
var ewr_is_autologin = false; // is logged in with option "auto login until i logout explicitly"
var ewr_timeout_url = ewr_relative_path + "rlogout.php"; // timeout url
var ewr_disable_button_on_submit = true;
var ewr_images_folder = "phprptimages/"; // image folder
var ewr_lookup_file_name = "ewrajax10.php"; // lookup file name
var ewr_lookup_filter_value_separator = ","; // lookup filter value separator
var ewr_modal_lookup_file_name = "ewrmodallookup10.php"; // modal lookup file name
var ewr_auto_suggest_max_entries = 10; // auto-suggest max entries
var ewr_use_javascript_message = false;
var ewr_project_stylesheet_filename = "phprptcss/project1.css"; // project style sheet
var ewr_pdf_stylesheet_filename = "./phprptcss/ewrpdf.css"; // export pdf style sheet
var ewr_token = "wfr1kgynfgrf8e8ehgkipw..";
var ewr_css_flip = false;
</script>
<script type="text/javascript">
if (!window.jquery || !jquery.fn.alert) {
	ewr_getcss("bootstrap3/css/bootstrap.css");
	ewr_getcss("bootstrap3/css/bootstrap-theme.css"); // optional theme
}
ewr_getcss("colorbox/colorbox.css");
ewr_getcss("phprptcss/project1.css");
</script>
<script type="text/javascript">
if (!window.calendar) {
	ewr_getcss("jscalendar/calendar.css");
	ewr_getscript("jscalendar/calendar.min.js");
	ewr_getscript("jscalendar/calendar-setup.js");
}
</script>
<script type="text/javascript">if (!window.jquery) ewr_getscript("jquery/jquery-1.12.4.min.js");</script>
<script type="text/javascript" src="fusionchartstrial/js/fusioncharts.js"></script>
<script type="text/javascript" src="fusionchartstrial/js/fusioncharts.ssgrid.js"></script>
<script type="text/javascript" src="fusionchartstrial/js/themes/fusioncharts.theme.ocean.js"></script>
<script type="text/javascript" src="fusionchartstrial/js/themes/fusioncharts.theme.carbon.js"></script>
<script type="text/javascript" src="fusionchartstrial/js/themes/fusioncharts.theme.zune.js"></script>
<script type="text/javascript" src="fusionchartsfree/jsclass/fusioncharts.js"></script>
<script type="text/javascript">
var ewr_chart_export_handler = "http://www.cab.kps.ku.ac.th/db_cab/program_project/fcexporter10.php";
</script>
<script type="text/javascript">if (window.jquery && !window.jquery.browser) ewr_getscript("jquery/jquery.browser.js");</script>
<script type="text/javascript">if (window.jquery && !window.jquery.iframeautoheight) ewr_getscript("jquery/jquery.iframe-auto-height.js");</script>
<script type="text/javascript">if (window.jquery && !window.jquery.localstorage) ewr_getscript("jquery/jquery.storageapi.min.js");</script>
<script type="text/javascript">if (window.jquery && !jquery.colorbox) ewr_getscript("colorbox/jquery.colorbox-min.js");</script>
<script type="text/javascript">if (window.jquery && typeof mobiledetect === 'undefined') ewr_getscript("phprptjs/mobile-detect.min.js");</script>
<script type="text/javascript">if (!window.moment) ewr_getscript("phprptjs/moment.min.js");</script>
<script type="text/javascript">if (!window.clipboard) ewr_getscript("phprptjs/clipboard.min.js");</script>
<script type="text/javascript">ewr_getscript("phprptjs/ewr10.js");</script>
<script type="text/javascript">
if (window._jquery) ewr_extend(jquery);
if (window.jquery && !jquery.fn.alert) ewr_getscript("bootstrap3/js/bootstrap.min.js");
if (window.jquery && !jquery.typeahead) ewr_getscript("phprptjs/typeahead.bundle.min.js");
</script>
<script type="text/javascript">
var ewr_mobile_detect = new mobiledetect(window.navigator.useragent);
var ewr_is_mobile = ewr_mobile_detect.mobile() ? true : false;
var ewrvar = [];
var ewlanguage = new ewr_language({"browsernoflashsupport":"your browser does not support flash player.","cancel":"cancel","cancelbtn":"cancel","clickrecaptcha":"please click recaptcha","closebtn":"close","countselected":"%s selected","deletefilterconfirm":"delete filter %s?","enterfiltername":"enter filter name","entersenderemail":"please enter sender email","enterpropersenderemail":"exceed maximum sender email count or email address incorrect","enterrecipientemail":"please enter recipient email","enterproperrecipientemail":"exceed maximum recipient email count or email address incorrect","enterproperccemail":"exceed maximum cc email count or email address incorrect","enterproperbccemail":"exceed maximum bcc email count or email address incorrect","entersubject":"please enter subject","enterpassword":"please enter password","enterpwd":"please enter password","enteruid":"please enter user id","entervalidatecode":"please enter the validation code shown","exportchart":"exporting chart: ","exportchartdata":"exporting chart data","exportcharterror":"failed to export chart: ","exportingchart":"exporting chart (%c of %t), please wait...","exporttoemail":"email","filtername":"filter name","generate":"generate","generatereporturl":"generate report url","incorrectcreditcard":"incorrect credit card number","incorrectemail":"incorrect email","incorrectfield":"incorrect field","incorrectfloat":"incorrect floating point number","incorrectguid":"incorrect guid","incorrectinteger":"incorrect integer","incorrectphone":"incorrect phone number","incorrectrange":"number must be between %1 and %2","incorrectregexp":"regular expression not matched","incorrectssn":"incorrect social security number","incorrecttime":"incorrect time (hh:mm:ss)","incorrectzip":"incorrect zip code","loading":"loading%s...","messageok":"ok","norecord":"no records found","of":"of","page":"page","pleaseselect":"please select","popupall":"(all)","popupfrom":"from","popupnovalue":"no value selected!","popupselect":"please select","popupto":"to","record":"records","recordsperpage":"page size","search":"search","selectbtn":"select","sendemailbtn":"send","sendemailsuccess":"email sent successfully","sessionwillexpire":"your session will expire in %s seconds. click ok to continue your session.","sessionexpired":"your session has expired.","useradministrator":"administrator","useranonymous":"anonymous","userdefault":"default","valuenotexist":"value does not exist"});</script>
<script type="text/javascript">ewr_getscript("phprptjs/ewrusrfn10.js");</script>
<script type="text/javascript">

// write your client script here, no need to add script tags.
</script>
<meta name="generator" content="php report maker v10">
</head>
<body>
<div class="ewlayout">
	<!-- header (begin) --><!-- ** note: only licensed users are allowed to change the logo ** -->
	<div id="ewheaderrow" class="hidden-xs ewheaderrow"></div>
<nav id="ewmobilemenu" role="navigation" class="navbar hidden-print navbar-default visible-xs">
	<div class="container-fluid"><!-- brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button data-target="#ewmenu" data-toggle="collapse" class="navbar-toggle" type="button">
				<span class="sr-only">toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div id="ewmenu" class="collapse navbar-collapse" style="height: auto;"><!-- begin main menu -->
<!-- begin main menu -->
<ul id="mobilemenu" class="nav navbar-nav">
<li id="mmci_e07e32e19e07e32e19e2ae23e38e1b" class="dropdown"><a class="ewdropdown" href="#">งานงานสรุป<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmi_crosstab_std"><a href="crosstab_stdctb.php">สรุปจำนวนนิสิต</a></li>
</ul>
</li>
<li id="mmci_e23e32e22e07e32e19e2ae23e38e1b" class="dropdown"><a class="ewdropdown" href="#">รายงานสรุป<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmci_e01e32e23e43e2be49e1ae23e34e01e32e23e17e32e07e27e34e0ae32e01e32e23" class="dropdown"><a class="ewdropdown" href="#">การให้บริการทางวิชาการ<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmi_crosstab_count_service_by_type"><a href="crosstab_count_service_by_typectb.php">จำนวนผู้รับบริการแยกตามประเภทการให้บริการ</a></li>
<li id="mmi_crosstab_services_count"><a href="crosstab_services_countctb.php">สรุปจำนวนครั้ง</a></li>
</ul>
</li>
<li id="mmci_e01e32e23e16e48e32e22e17e2de14e40e17e04e42e19e42e25e22e35" class="dropdown"><a class="ewdropdown" href="#">การถ่ายทอดเทคโนโลยี<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmi_crosstab_tranning_countbytype"><a href="crosstab_tranning_countbytypectb.php">สรุปจำนวนครั้ง</a></li>
<li id="mmi_crosstab_tranning_sumby_type"><a href="crosstab_tranning_sumby_typectb.php">สรุปจำนวนผู้เข้ารับการถ่ายทอด</a></li>
</ul>
</li>
</ul>
</li>
<li id="mmi_login"><a href="rlogin.php">login</a></li>
</ul>
<!-- end main menu -->
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
	<!-- header (end) -->
	<!-- content (begin) -->
	<!-- content (begin) -->
	<div id="ewcontenttable" class="ewcontenttable">
		<div id="ewcontentrow">
			<div id="ewmenucolumn" class="hidden-xs ewmenucolumn">
				<!-- left column (begin) -->
				<div class="ewmenu">
<!-- begin main menu -->
<div class="ewmenu">
<ul id="rootmenu" class="dropdown-menu">
<li id="mci_e07e32e19e07e32e19e2ae23e38e1b" class="dropdown-submenu"><a href="#">งานงานสรุป</a><ul class="dropdown-menu" role="menu">
<li id="mi_crosstab_std"><a href="crosstab_stdctb.php">สรุปจำนวนนิสิต</a></li>
</ul>
</li>
<li class="dropdown-header">รายงานสรุป</li>
<li id="mci_e01e32e23e43e2be49e1ae23e34e01e32e23e17e32e07e27e34e0ae32e01e32e23" class="dropdown-submenu"><a href="#">การให้บริการทางวิชาการ</a><ul class="dropdown-menu" role="menu">
<li id="mi_crosstab_count_service_by_type"><a href="crosstab_count_service_by_typectb.php">จำนวนผู้รับบริการแยกตามประเภทการให้บริการ</a></li>
<li id="mi_crosstab_services_count"><a href="crosstab_services_countctb.php">สรุปจำนวนครั้ง</a></li>
</ul>
</li>
<li id="mci_e01e32e23e16e48e32e22e17e2de14e40e17e04e42e19e42e25e22e35" class="dropdown-submenu"><a href="#">การถ่ายทอดเทคโนโลยี</a><ul class="dropdown-menu" role="menu">
<li id="mi_crosstab_tranning_countbytype"><a href="crosstab_tranning_countbytypectb.php">สรุปจำนวนครั้ง</a></li>
<li id="mi_crosstab_tranning_sumby_type"><a href="crosstab_tranning_sumby_typectb.php">สรุปจำนวนผู้เข้ารับการถ่ายทอด</a></li>
</ul>
</li>
<li class="divider"></li>
<li id="mi_login"><a href="rlogin.php">login</a></li>
</ul>
</div>
<!-- end main menu -->
				</div>
				<!-- left column (end) -->
			</div>
			<div id="ewcontentcolumn" class="ewcontentcolumn">
				<!-- right column (begin) -->
				<h4 class="hidden-xs ewsitetitle"></h4>
<script type="text/javascript">

// create page object
var crosstab_count_service_by_type_crosstab = new ewr_page("crosstab_count_service_by_type_crosstab");

// page properties
crosstab_count_service_by_type_crosstab.pageid = "crosstab"; // page id
var ewr_page_id = crosstab_count_service_by_type_crosstab.pageid;

// extend page with chart_rendering function
crosstab_count_service_by_type_crosstab.chart_rendering = 
 function(chart, chartid) { // do not change this line!

 	//alert(chartid);
 }

// extend page with chart_rendered function
crosstab_count_service_by_type_crosstab.chart_rendered = 
 function(chart, chartid) { // do not change this line!

 	//alert(chartid);
 }
</script>
<script type="text/javascript">

// form object
var currentform = fcrosstab_count_service_by_typecrosstab = new ewr_form("fcrosstab_count_service_by_typecrosstab");

// validate method
fcrosstab_count_service_by_typecrosstab.validate = function() {
	if (!this.validaterequired)
		return true; // ignore validation
	var $ = jquery, fobj = this.getform(), $fobj = $(fobj);
	var elm = fobj.sv_s_date;
	if (elm && !ewr_checkdatedef(elm.value)) {
		if (!this.onerror(elm, "รูปแบบ วว/ดด/ปปปป(คศ)"))
			return false;
	}
	var elm = fobj.sv2_s_date;
	if (elm && !ewr_checkdatedef(elm.value)) {
		if (!this.onerror(elm, "รูปแบบ วว/ดด/ปปปป(คศ)"))
			return false;
	}

	// call form custom validate event
	if (!this.form_customvalidate(fobj))
		return false;
	return true;
}

// form_customvalidate method
fcrosstab_count_service_by_typecrosstab.form_customvalidate = 
 function(fobj) { // do not change this line!

 	// your custom validation code here, return false if invalid.
 	return true;
 }
fcrosstab_count_service_by_typecrosstab.validaterequired = false; // no javascript validation

// use ajax
fcrosstab_count_service_by_typecrosstab.lists["sv_fullname"] = {"linkfield":"sv_fullname","ajax":true,"displayfields":["sv_fullname","","",""],"parentfields":[],"filterfields":[],"options":[],"template":""};
</script>
<script type="text/javascript">

// write your client script here, no need to add script tags.
</script>
<!-- container (begin) -->
<div id="ewcontainer" class="ewcontainer">
<!-- top container (begin) -->
<div id="ewtop" class="ewtop">
<a id="top"></a>
<!-- top slot -->
<div class="ewtoolbar">
<ul class="breadcrumb ewbreadcrumbs"><li id="ewbreadcrumb1"><a href="program_plist.php" title="home" class="ewhome"><span data-phrase="homepage" class="glyphicon glyphicon-home ewicon" data-caption="home"></span></a></li><li id="ewbreadcrumb2" class="active"><span id="ewpagecaption">จำนวนครั้งการให้บริการแยกตามประเภทการับบริการ</span></li></ul><div class="ewexportoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><a class="btn btn-default"  title="export to excel" data-caption="export to excel" href="crosstab_count_service_by_typectb.php?export=excel"><span data-phrase="exporttoexcel" class="icon-excel ewicon" data-caption="export to excel"></span></a></div></div><div class="ewsearchoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><button class="btn btn-default ewsearchtoggle active"  type="button" title="filter panel" data-caption="filter panel" data-toggle="button" data-form="fcrosstab_count_service_by_typecrosstab"><span data-phrase="searchbtn" class="glyphicon glyphicon-search ewicon" data-caption="filter panel"></span></button></div></div><div class="ewfilteroption fcrosstab_count_service_by_typecrosstab ewlistoptionseparator" data-name="button"><div class="btn-group ewbuttondropdown"><button class="dropdown-toggle btn btn-default" title="filters" data-toggle="dropdown"><span data-phrase="filters" class="icon-filter ewicon" data-caption="filters"></span><span class="caret"></span></button><ul class="dropdown-menu ewmenu"><li><a class="ewsavefilter"  data-form="fcrosstab_count_service_by_typecrosstab" href="#">save current filter</a></li><li><a class="ewdeletefilter"  data-form="fcrosstab_count_service_by_typecrosstab" href="#">delete filter</a></li></ul></div></div><div class="clearfix"></div>
</div>
<div class="ewmessagedialog ewdisplaytable"><div class="alert alert-warning ewwarning"><button type="button" class="close" data-dismiss="alert">&times;</button>no records found</div></div></div>
<!-- top container (end) -->
	<!-- left container (begin) -->
	<div id="ewleft" class="ewleft">
	<!-- left slot -->
	</div>
	<!-- left container (end) -->
	<!-- center container (report) (begin) -->
	<div id="ewcenter" class="ewcenter">
	<!-- center slot -->
<!-- crosstab report starts -->
<div id="report_crosstab">
<!-- search form (begin) -->
<form name="fcrosstab_count_service_by_typecrosstab" id="fcrosstab_count_service_by_typecrosstab" class="form-inline ewform ewextfilterform" action="crosstab_count_service_by_typectb.php">
<div id="fcrosstab_count_service_by_typecrosstab_searchpanel" class="ewsearchpanel collapse in">
<input type="hidden" name="cmd" value="search">
<div id="r_1" class="ewrow">
<div id="c_s_date" class="ewcell form-group">
	<label for="sv_s_date" class="ewsearchcaption ewlabel">วันที่ให้บริการ</label>
	<span class="ewsearchoperator">between<input type="hidden" name="so_s_date" id="so_s_date" value="between"></span>
	<span class="control-group ewsearchfield">
<input type="text" data-table="crosstab_count_service_by_type" data-field="x_s_date" id="sv_s_date" name="sv_s_date" placeholder="วันที่ให้บริการ" value="" data-calendar="true" data-formatid="0" class="form-control">
</span>
	<span class="ewsearchcond btw1_s_date">and</span>
	<span class="ewsearchfield btw1_s_date">
<input type="text" data-table="crosstab_count_service_by_type" data-field="x_s_date" id="sv2_s_date" name="sv2_s_date" placeholder="วันที่ให้บริการ" value="" data-calendar="true" data-formatid="0" class="form-control form-control">
</span>
</div>
</div>
<div id="r_2" class="ewrow">
<div id="c_fullname" class="ewcell form-group">
	<label for="sv_fullname" class="ewsearchcaption ewlabel">ชื่อหน่วยงาน</label>
	<span class="ewsearchfield">
<select data-table="crosstab_count_service_by_type" data-field="x_fullname" data-value-separator=", " id="sv_fullname" name="sv_fullname" class="form-control">
<option value="">please select</option>
</select>
<input type="hidden" name="s_sv_fullname" id="s_sv_fullname" value="s=gly58a5y2gawymbbgzxwlq64lvyqupz2lz4wslwgprxhxzxqkvudkzppuyzgfxbun-j1ivyyypn27hph5mcmjzkhnyb2akwzbctqozhrgzwja8sdnwx5xguiyhrwgl0pj5lv_tzvq-jmivqocwjlyshy3ccqf7_uvlilbwyydt-txjzqxrwmhrgwxoa-h0jxvrhauy2aiatnla6p&d=db&f0=_szhldpn4x6_5qv_gsofo2-2tdbdtlqx4e-8ml8d3is.&t0=200&fn0=&dlm=&lang=en"></span>
</div>
</div>
<div class="ewrow"><input type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary" value="search">
<input type="reset" name="btnreset" id="btnreset" class="btn hide" value="reset"></div>
</div>
</form>
<script type="text/javascript">
fcrosstab_count_service_by_typecrosstab.init();
fcrosstab_count_service_by_typecrosstab.filterlist = null;
</script>
<!-- search form (end) -->
</div>
<!-- crosstab report ends -->
	</div>
	<!-- center container (report) (end) -->
	<!-- right container (begin) -->
	<div id="ewright" class="ewright">
	<!-- right slot -->
	</div>
	<!-- right container (end) -->
<div class="clearfix"></div>
<!-- bottom container (begin) -->
<div id="ewbottom" class="ewbottom">
	<!-- bottom slot -->
	</div>
<!-- bottom container (end) -->
</div>
<!-- container (end) -->
<script type="text/javascript">

// write your table-specific startup script here
// document.write("page loaded");

</script>
						<!-- right column (end) -->
			</div>
		</div>
	</div>
	<!-- content (end) -->
	<!-- footer (begin) --><!-- ** note: only licensed users are allowed to remove or change the following copyright statement. ** -->
	<div id="ewfooterrow" class="ewfooterrow">
		<div class="ewfootertext">center for agricultural biotechnology (cab)</div>
		<!-- place other links, for example, disclaimer, here -->
	</div>
	<!-- footer (end) -->
</div>
<!-- message box -->
<div id="ewrmsgbox" class="modal"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-primary ewbutton" data-dismiss="modal" aria-hidden="true">ok</button></div></div></div></div>
<!-- prompt -->
<div id="ewrprompt" class="modal"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-primary ewbutton">ok</button><button type="button" class="btn btn-default ewbutton" data-dismiss="modal">cancel</button></div></div></div></div>
<!-- session timer -->
<div id="ewrtimer" class="modal" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-primary ewbutton" data-dismiss="modal">ok</button></div></div></div></div>
<!-- popup filter -->
<div id="ewrpopupfilterdialog"></div>
<!-- export chart -->
<div id="ewrexportdialog"></div>
<!-- drill down -->
<div id="ewrdrilldownpanel"></div>
<script type="text/javascript">ewr_getscript("phprptjs/ewrusrevt10.js");</script>
<script type="text/javascript">

// write your global startup script here
// document.write("page loaded");

</script>
</body>
</html>
