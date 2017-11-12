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
var ewr_token = "_qxfomqpmvz8iilhq9rvlg..";
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
var crosstab_std_crosstab = new ewr_page("crosstab_std_crosstab");

// page properties
crosstab_std_crosstab.pageid = "crosstab"; // page id
var ewr_page_id = crosstab_std_crosstab.pageid;

// extend page with chart_rendering function
crosstab_std_crosstab.chart_rendering = 
 function(chart, chartid) { // do not change this line!

 	//alert(chartid);
 }

// extend page with chart_rendered function
crosstab_std_crosstab.chart_rendered = 
 function(chart, chartid) { // do not change this line!

 	//alert(chartid);
 }
</script>
<script type="text/javascript">

// form object
var currentform = fcrosstab_stdcrosstab = new ewr_form("fcrosstab_stdcrosstab");

// validate method
fcrosstab_stdcrosstab.validate = function() {
	if (!this.validaterequired)
		return true; // ignore validation
	var $ = jquery, fobj = this.getform(), $fobj = $(fobj);

	// call form custom validate event
	if (!this.form_customvalidate(fobj))
		return false;
	return true;
}

// form_customvalidate method
fcrosstab_stdcrosstab.form_customvalidate = 
 function(fobj) { // do not change this line!

 	// your custom validation code here, return false if invalid.
 	return true;
 }
fcrosstab_stdcrosstab.validaterequired = false; // no javascript validation

// use ajax
fcrosstab_stdcrosstab.lists["sv_e0ae37e48e2de2ae16e32e1ae31e19[]"] = {"linkfield":"sv_e0ae37e48e2de2ae16e32e1ae31e19","ajax":true,"displayfields":["sv_e0ae37e48e2de2ae16e32e1ae31e19","","",""],"parentfields":[],"filterfields":[],"options":[],"template":""};
fcrosstab_stdcrosstab.lists["sv_e01e25e38e48e21[]"] = {"linkfield":"sv_e01e25e38e48e21","ajax":true,"displayfields":["sv_e01e25e38e48e21","","",""],"parentfields":[],"filterfields":[],"options":[],"template":""};
fcrosstab_stdcrosstab.lists["sv_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32[]"] = {"linkfield":"sv_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32","ajax":true,"displayfields":["sv_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32","","",""],"parentfields":[],"filterfields":[],"options":[],"template":""};
fcrosstab_stdcrosstab.lists["sv_e2ae16e32e19e30e01e32e23e28e36e01e29e32[]"] = {"linkfield":"sv_e2ae16e32e19e30e01e32e23e28e36e01e29e32","ajax":true,"displayfields":["sv_e2ae16e32e19e30e01e32e23e28e36e01e29e32","","",""],"parentfields":[],"filterfields":[],"options":[],"template":""};
fcrosstab_stdcrosstab.lists["sv_phase[]"] = {"linkfield":"sv_phase","ajax":true,"displayfields":["sv_phase","","",""],"parentfields":[],"filterfields":[],"options":[],"template":""};
fcrosstab_stdcrosstab.lists["sv_e40e1ee28"] = {"linkfield":"sv_e40e1ee28","ajax":true,"displayfields":["sv_e40e1ee28","","",""],"parentfields":[],"filterfields":[],"options":[],"template":""};
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
<ul class="breadcrumb ewbreadcrumbs"><li id="ewbreadcrumb1"><a href="program_plist.php" title="home" class="ewhome"><span data-phrase="homepage" class="glyphicon glyphicon-home ewicon" data-caption="home"></span></a></li><li id="ewbreadcrumb2" class="active"><span id="ewpagecaption">สรุปจำนวนนิสิต</span></li></ul><div class="ewexportoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><a class="btn btn-default"  title="export to excel" data-caption="export to excel" href="crosstab_stdctb.php?export=excel"><span data-phrase="exporttoexcel" class="icon-excel ewicon" data-caption="export to excel"></span></a></div></div><div class="ewsearchoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><button class="btn btn-default ewsearchtoggle active"  type="button" title="filter panel" data-caption="filter panel" data-toggle="button" data-form="fcrosstab_stdcrosstab"><span data-phrase="searchbtn" class="glyphicon glyphicon-search ewicon" data-caption="filter panel"></span></button></div></div><div class="ewfilteroption fcrosstab_stdcrosstab ewlistoptionseparator" data-name="button"><div class="btn-group ewbuttondropdown"><button class="dropdown-toggle btn btn-default" title="filters" data-toggle="dropdown"><span data-phrase="filters" class="icon-filter ewicon" data-caption="filters"></span><span class="caret"></span></button><ul class="dropdown-menu ewmenu"><li><a class="ewsavefilter"  data-form="fcrosstab_stdcrosstab" href="#">save current filter</a></li><li><a class="ewdeletefilter"  data-form="fcrosstab_stdcrosstab" href="#">delete filter</a></li></ul></div></div><div class="clearfix"></div>
</div>
<div class="ewmessagedialog ewdisplaytable"></div></div>
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
<form name="fcrosstab_stdcrosstab" id="fcrosstab_stdcrosstab" class="form-inline ewform ewextfilterform" action="crosstab_stdctb.php">
<div id="fcrosstab_stdcrosstab_searchpanel" class="ewsearchpanel collapse in">
<input type="hidden" name="cmd" value="search">
<div id="r_1" class="ewrow">
<div id="c_e0ae37e48e2de2ae16e32e1ae31e19" class="ewcell form-group">
	<label class="ewsearchcaption ewlabel">ชื่อสถาบัน</label>
	<span class="ewsearchfield">
<div id="tp_sv_e0ae37e48e2de2ae16e32e1ae31e19" class="ewtemplate"><input type="checkbox" data-table="crosstab_std" data-field="x_e0ae37e48e2de2ae16e32e1ae31e19" data-value-separator=", " name="sv_e0ae37e48e2de2ae16e32e1ae31e19[]" id="sv_e0ae37e48e2de2ae16e32e1ae31e19[]" value="{value}"></div>
<div id="dsl_sv_e0ae37e48e2de2ae16e32e1ae31e19" data-repeatcolumn="5" class="ewitemlist"><div>
</div></div>
<input type="hidden" name="s_sv_e0ae37e48e2de2ae16e32e1ae31e19" id="s_sv_e0ae37e48e2de2ae16e32e1ae31e19" value="s=lxxplogss8aief8fptjqz7qcxkfmefnhcbozzuxn07uthujxnz8amzo3bkkpyqbig0_h8s_g2vnj52wdq613meewjwr0ansf2qxt4b-he2c1u6rk7bvugcbcwz5yvys9deii6fmokfgb_9_fafgjwfnhytb6ykjlk36inajmgf8s4lqpt1bswyukykh0iboh-u-lccjyl7z32ya11oy7occtiznv2z1c7dqetfppydxeamyv4filatlmx2d0xonubh4_fo-kehigmifxv5tughdeuycbvaar&d=db&f0=xpznyplg1tf-xs713tk5yllg8na9e6nqop3ltpkvleb42_ejywmvjydag0vh4ikcs0n-hseiojo.&t0=200&fn0=&dlm=&lang=en"></span>
</div>
</div>
<div id="r_2" class="ewrow">
<div id="c_e01e25e38e48e21" class="ewcell form-group">
	<label class="ewsearchcaption ewlabel">กลุ่ม</label>
	<span class="ewsearchfield">
<div id="tp_sv_e01e25e38e48e21" class="ewtemplate"><input type="checkbox" data-table="crosstab_std" data-field="x_e01e25e38e48e21" data-value-separator=", " name="sv_e01e25e38e48e21[]" id="sv_e01e25e38e48e21[]" value="{value}"></div>
<div id="dsl_sv_e01e25e38e48e21" data-repeatcolumn="5" class="ewitemlist"><div>
</div></div>
<input type="hidden" name="s_sv_e01e25e38e48e21" id="s_sv_e01e25e38e48e21" value="s=bladghtopkptsw425xis9tsn9ovc2u9uzulvu8twg2xbx9ncyuqdi5m7x9f7xyjv8u2iuuwjdhj3simliio-jzijrhqlneqvh2ar1abujum0vslzaj1rz3sgxqnindatwykcukpnfkeb4zwddt5llus92ywdiiwd1c-_egnbr0r-1_a1ebp6j_qnaesegdogt1jutus9fyyywsrv3-6hfiyk9lg376h1hjgffw..&d=db&f0=-eq73ufblblh4i_deqsvnt-qdkhhloz_39sje2jjiwhhqa2kqez3jq..&t0=200&fn0=&dlm=&lang=en"></span>
</div>
</div>
<div id="r_3" class="ewrow">
<div id="c_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewcell form-group">
	<label class="ewsearchcaption ewlabel">ระดับที่เข้าศึกษา</label>
	<span class="ewsearchfield">
<div id="tp_sv_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewtemplate"><input type="checkbox" data-table="crosstab_std" data-field="x_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" data-value-separator=", " name="sv_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32[]" id="sv_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32[]" value="{value}"></div>
<div id="dsl_sv_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" data-repeatcolumn="5" class="ewitemlist"><div>
</div></div>
<input type="hidden" name="s_sv_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" id="s_sv_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" value="s=xap2aasaprkexovo1einn70gw2ce-fqvwdrbnrmz0aswgj4pkzf1rpvpmrfzwu0lhndrpng2booxixfl7l19ku5zvoyarcwsqwabnzn5wj6jptgcdprdsnu-hrs-mrfjfambptbhjem1zduoob7xvmbvme2wcl1zxnmxtnv879oqhoq4hdypuq-mgo0e8g253ndj4zwnf2raayups0j0sqec7_2kyck6aa-sn8scxi_veqafoynmzl4zfhlp6iger4o9y5lgmpmrgykxjfqgjcvs8ugw4shj7o-g5oaemj14t-xmsy1v7cioaelmj66ox_1u0av1-b2gkgitlfhi-r5imkrh1vojbije_snztrdz2n9p7u0j-a..&d=db&f0=tfhpzid_ahtldrhdj6e6-d24kb9gcncqqs-w46kfp_smzdxua_e7tjx-dhl9ulrkpn5iu0hpn43rcz2_lwugtvgt0kstjknhn2aqqq..&t0=200&fn0=&dlm=&lang=en"></span>
</div>
</div>
<div id="r_4" class="ewrow">
<div id="c_e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewcell form-group">
	<label class="ewsearchcaption ewlabel">สถานะการศึกษา</label>
	<span class="ewsearchfield">
<div id="tp_sv_e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewtemplate"><input type="checkbox" data-table="crosstab_std" data-field="x_e2ae16e32e19e30e01e32e23e28e36e01e29e32" data-value-separator=", " name="sv_e2ae16e32e19e30e01e32e23e28e36e01e29e32[]" id="sv_e2ae16e32e19e30e01e32e23e28e36e01e29e32[]" value="{value}"></div>
<div id="dsl_sv_e2ae16e32e19e30e01e32e23e28e36e01e29e32" data-repeatcolumn="5" class="ewitemlist"><div>
</div></div>
<input type="hidden" name="s_sv_e2ae16e32e19e30e01e32e23e28e36e01e29e32" id="s_sv_e2ae16e32e19e30e01e32e23e28e36e01e29e32" value="s=wmxibdx8cckyrlp9l_mgxdynphw4r6a0vomfphnyr9ukyckruo_aww4mv_tlxbjiyqjufpljdq9ayqyzcpd5fx30an28tih_r-vrahjezphery8wzwkkrjpo57_moosx-qma1pgigtrzjlbhxdr7yizk3ynxvn1tkq669h8owtrlh6kdw2ms3wjmub6ogahtn6mavqhhznxx8yqidk1cq0afkiga7wm7yfpwdjiegsdgj_ra7k-0qbk8nbmge4zywlcww3cjh_bitvrtoaodywt2uqre_zimxwanhwxwxaoqwsf_h8tqzme7evokc8_gxdmkua..&d=db&f0=izzkygfekp78mxojze3zpkdwfoqyjkuomsb-fucjaofbk_mo7vl8eb93_unv3z5dkvfgdwmtenn97bpb6yuj1g..&t0=200&fn0=&dlm=&lang=en"></span>
</div>
</div>
<div id="r_5" class="ewrow">
<div id="c_phase" class="ewcell form-group">
	<label class="ewsearchcaption ewlabel">phase</label>
	<span class="ewsearchfield">
<div id="tp_sv_phase" class="ewtemplate"><input type="checkbox" data-table="crosstab_std" data-field="x_phase" data-value-separator=", " name="sv_phase[]" id="sv_phase[]" value="{value}"></div>
<div id="dsl_sv_phase" data-repeatcolumn="5" class="ewitemlist"><div>
</div></div>
<input type="hidden" name="s_sv_phase" id="s_sv_phase" value="s=3c3juqdva1vtfeuqvz0rvvvuigmlbi5cpahxkeag9qedykffux6riy7bvyugdynctemrvmmutzejmach7ygj49orn6elpt5fdu_jwrhrvut3i_rsf1ymg98kq55ogeqeaemzb4qof3rf_mijo8aogljzgcpdvwiq0darfk-raf37hkwujpv6-mmqauw.&d=db&f0=uluqki3vrxg_xtxnqsi45phj4fmpfks-sufn4w..&t0=200&fn0=&dlm=&lang=en"></span>
</div>
</div>
<div id="r_6" class="ewrow">
<div id="c_e40e1ee28" class="ewcell form-group">
	<label for="sv_e40e1ee28" class="ewsearchcaption ewlabel">เพศ</label>
	<span class="ewsearchfield">
<select data-table="crosstab_std" data-field="x_e40e1ee28" data-value-separator=", " id="sv_e40e1ee28" name="sv_e40e1ee28" class="form-control">
<option value="">please select</option>
</select>
<input type="hidden" name="s_sv_e40e1ee28" id="s_sv_e40e1ee28" value="s=elizlsykp72bfcw3ohbu1vxjm4k7gghskt5pke6ky4v-q9lp4hnxp1ewr2tlf_ko-7n0kc7hy1drep0uhqqgahpyi_36w7imp3hqw4s9mbobxfryqwoctk6z_lelvpaxhswl5qrmwu49fe6_ngzm6vykn8_r_urxuhf7iust3y8b8qjj4eblcnmb7w3baqexzjcz7izjpk8.&d=db&f0=0oqlmnvjqqssz2qdm_el125epsx_sxj1ix0wvpusdok.&t0=200&fn0=&dlm=&lang=en"></span>
</div>
</div>
<div class="ewrow"><input type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary" value="search">
<input type="reset" name="btnreset" id="btnreset" class="btn hide" value="reset"></div>
</div>
</form>
<script type="text/javascript">
fcrosstab_stdcrosstab.init();
fcrosstab_stdcrosstab.filterlist = null;
</script>
<!-- search form (end) -->
<div class="panel panel-default ewgrid">
<!-- report grid (begin) -->
<div class="table-responsive ewgridmiddlepanel">
<table class="table ewtable">
<thead>
	<!-- table header -->
	<tr class="ewtableheader">
		<td class="ewrptcolsummary" colspan="3"><div><ul class="list-unstyled ewcrosstabvalues"><li>id (count)</li></ul></div></td>
		<td class="ewrptcolheader" colspan="10">
			<div class="ewtableheaderbtn">
				<span class="ewtableheadercaption">ชื่อสถาบัน</span>
			</div>
		</td>
	</tr>
	<tr class="ewtableheader">
	<td data-field="phase">
		<div class="ewtableheaderbtn crosstab_std_phase">
			<span class="ewtableheadercaption">phase</span>			
		</div>
	</td>
	<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">
		<div class="ewtableheaderbtn crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">
			<span class="ewtableheadercaption">ระดับที่เข้าศึกษา</span>			
		</div>
	</td>
	<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32">
		<div class="ewtableheaderbtn crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">
			<span class="ewtableheadercaption">สถานะการศึกษา</span>			
		</div>
	</td>
<!-- dynamic columns begin -->
		<td class="ewtableheader" style="vertical-align: top;"><div>cmu</div></td>
		<td class="ewtableheader" style="vertical-align: top;"><div>kku</div></td>
		<td class="ewtableheader" style="vertical-align: top;"><div>kmitl</div></td>
		<td class="ewtableheader" style="vertical-align: top;"><div>ku</div></td>
		<td class="ewtableheader" style="vertical-align: top;"><div>mju</div></td>
		<td class="ewtableheader" style="vertical-align: top;"><div>mu</div></td>
		<td class="ewtableheader" style="vertical-align: top;"><div>psu</div></td>
		<td class="ewtableheader" style="vertical-align: top;"><div>sut</div></td>
		<td class="ewtableheader" style="vertical-align: top;"><div>wu</div></td>
<!-- dynamic columns end -->
		<td class="ewtableheader" style="vertical-align: top;"><div><ul class="list-unstyled ewcrosstabvalues"><li>id (count)</li></ul></div></td>
	</tr>
</thead>
<tbody>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx1_crosstab_std_phase">1</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx1_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">m.sc.</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx1_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">จบการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>40</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>64</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>22</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>197</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>49</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>375</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx1_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx1_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx1_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">พ้นสภาพการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>15</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>23</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>42</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>66</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>22</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>212</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>53</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>398</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx1_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx1_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">ph.d. แบบ 2.1</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx1_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">จบการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>8</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>11</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>45</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>19</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>84</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx1_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx1_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx1_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">พ้นสภาพการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>9</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>11</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>9</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>12</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>54</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>19</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>95</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx1_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx1_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">ph.d. แบบ 2.2</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx1_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">จบการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>10</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>10</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx1_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx1_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx1_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">พ้นสภาพการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>11</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>11</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary phase (level 1) -->
	<tr>
		<td colspan="3" class="ewrptgrpsummary1">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>51</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>78</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>22</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>277</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>72</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>504</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx2_crosstab_std_phase">2</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx2_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">m.sc.</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx2_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">กำลังศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx2_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx2_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx2_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">จบการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>19</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>42</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>34</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>54</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>55</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>29</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>14</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>253</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx2_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx2_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx2_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">พ้นสภาพการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>12</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>8</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>29</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>21</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>45</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>36</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>66</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>65</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>30</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>15</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>284</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx2_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx2_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">ph.d. แบบ 2.1</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx2_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">กำลังศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>8</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx2_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx2_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx2_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">จบการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>12</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>19</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>34</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>76</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx2_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx2_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx2_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">พ้นสภาพการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>6</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>12</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>14</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>24</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>42</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>8</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>96</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx2_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx2_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">ph.d. แบบ 2.2</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx2_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">จบการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>5</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>5</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary phase (level 1) -->
	<tr>
		<td colspan="3" class="ewrptgrpsummary1">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>35</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>70</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>36</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>111</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>73</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>34</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>18</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>385</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">3</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">m.sc.</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">กำลังศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>8</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>49</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>5</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>8</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>77</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">จบการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>28</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>5</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>42</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">พ้นสภาพการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>9</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>10</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>7</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>8</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>86</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>7</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>13</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>129</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">ph.d. แบบ 2.1</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">กำลังศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>5</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>28</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>42</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">จบการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>16</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>21</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">พ้นสภาพการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>7</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>7</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>7</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>51</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>2</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>70</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">ph.d. แบบ 2.2</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">กำลังศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">จบการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>5</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablealtrow"><ul class="list-unstyled ewcrosstabvalues"><li><span>5</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">&nbsp;</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">พ้นสภาพการศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>7</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>10</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<tr>
		<!-- phase -->
		<td data-field="phase" class="ewrptgrpfield1">
<span data-class="tpx3_crosstab_std_phase">&nbsp;</span></td>
		<!-- ระดับที่เข้าศึกษา -->
		<td data-field="e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32" class="ewrptgrpfield2">
<span data-class="tpx3_crosstab_std_e23e30e14e31e1ae17e35e48e40e02e49e32e28e36e01e29e32">postdoctoral research</span></td>
		<!-- สถานะการศึกษา -->
		<td data-field="e2ae16e32e19e30e01e32e23e28e36e01e29e32" class="ewrptgrpfield3">
<span data-class="tpx3_crosstab_std_e2ae16e32e19e30e01e32e23e28e36e01e29e32">กำลังศึกษา</span></td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewtablerow"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary ระดับที่เข้าศึกษา (level 2) -->
	<tr>
		<td data-field="phase" class="ewrptgrpfield1">&nbsp;</td>
		<td colspan="2" class="ewrptgrpsummary2">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>0</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary2"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
	<!-- summary phase (level 1) -->
	<tr>
		<td colspan="3" class="ewrptgrpsummary1">summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>15</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>10</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>4</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>145</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>5</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>9</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>18</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>1</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>3</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;" class="ewrptgrpsummary1"><ul class="list-unstyled ewcrosstabvalues"><li><span>210</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
</tbody>
<tfoot>
	<!-- grand total -->
	<tr class="ewrptgrandsummary">
	<td colspan="3">grand summary</td>
<!-- dynamic columns begin -->
		<!-- cmu -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>101</span></li></ul></td>
		<!-- kku -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>158</span></li></ul></td>
		<!-- kmitl -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>62</span></li></ul></td>
		<!-- ku -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>533</span></li></ul></td>
		<!-- mju -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>9</span></li></ul></td>
		<!-- mu -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>154</span></li></ul></td>
		<!-- psu -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>52</span></li></ul></td>
		<!-- sut -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>9</span></li></ul></td>
		<!-- wu -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>21</span></li></ul></td>
		<!-- summary -->
		<td style="text-align: right;"><ul class="list-unstyled ewcrosstabvalues"><li><span>1,099</span></li></ul></td>
<!-- dynamic columns end -->
	</tr>
</tfoot>
</table>
</div>
<div class="panel-footer ewgridlowerpanel">
<form action="crosstab_stdctb.php" name="ewpagerform" class="ewform form-horizontal">
<div class="ewpager">
<input type="hidden" name="t" value="crosstab_std">
<select name="grpperpage" class="form-control input-sm" onchange="this.form.submit();">
<option value="25" selected>25</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="all">all</option>
</select>
</div>
</form>
<div class="clearfix"></div>
</div>
</div>
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
