<!doctype html>
<html>
<head>
	<title>database management system</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="bootstrap3/css/bootstrap.css">
<!-- optional theme -->
<link rel="stylesheet" type="text/css" href="bootstrap3/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="phpcss/jquery.fileupload.css">
<link rel="stylesheet" type="text/css" href="phpcss/jquery.fileupload-ui.css">
<link rel="stylesheet" type="text/css" href="colorbox/colorbox.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="phpcss/project1.css">
<script type="text/javascript" src="jquery/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="jquery/jquery.ui.widget.js"></script>
<script type="text/javascript" src="jquery/jquery.storageapi.min.js"></script>
<script type="text/javascript" src="jquery/pstrength.jquery.js"></script>
<script type="text/javascript" src="jquery/pgenerator.jquery.js"></script>
<script type="text/javascript" src="bootstrap3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="phpjs/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="jqueryfileupload/load-image.all.min.js"></script>
<script type="text/javascript" src="jqueryfileupload/jqueryfileupload.min.js"></script>
<script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="phpjs/mobile-detect.min.js"></script>
<script type="text/javascript" src="phpjs/moment.min.js"></script>
<link href="calendar/calendar.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="calendar/calendar.min.js"></script>
<script type="text/javascript" src="calendar/calendar-setup.js"></script>
<script type="text/javascript" src="phpjs/ewcalendar.js"></script>
<script type="text/javascript">
var ew_language_id = "en";
var ew_date_separator = "/"; // date separator
var ew_time_separator = ":"; // time separator
var ew_date_format = "mm/dd/yyyy"; // default date format
var ew_date_format_id = "6"; // default date format id
var ew_decimal_point = ".";
var ew_thousands_sep = ",";
var ew_min_password_strength = 60;
var ew_generate_password_length = 16;
var ew_generate_password_uppercase = true;
var ew_generate_password_lowercase = true;
var ew_generate_password_number = true;
var ew_generate_password_specialchars = false;
var ew_session_timeout = 0; // session timeout time (seconds)
var ew_session_timeout_countdown = 60; // count down time to session timeout (seconds)
var ew_session_keep_alive_interval = 0; // keep alive interval (seconds)
var ew_relative_path = ""; // relative path
var ew_session_url = ew_relative_path + "ewsession13.php"; // session url
var ew_is_loggedin = false; // is logged in
var ew_is_sys_admin = false; // is sys admin
var ew_current_user_name = ""; // current user name
var ew_is_autologin = false; // is logged in with option "auto login until i logout explicitly"
var ew_timeout_url = ew_relative_path + "logout.php"; // timeout url
var ew_lookup_file_name = "ewlookup13.php"; // lookup file name
var ew_lookup_filter_value_separator = ","; // lookup filter value separator
var ew_modal_lookup_file_name = "ewmodallookup13.php"; // modal lookup file name
var ew_auto_suggest_max_entries = 10; // auto-suggest max entries
var ew_disable_button_on_submit = true;
var ew_image_folder = "phpimages/"; // image folder
var ew_upload_url = "ewupload13.php"; // upload url
var ew_upload_thumbnail_width = 200; // upload thumbnail width
var ew_upload_thumbnail_height = 0; // upload thumbnail height
var ew_multiple_upload_separator = ","; // upload multiple separator
var ew_use_colorbox = true;
var ew_use_javascript_message = false;
var ew_mobile_detect = new mobiledetect(window.navigator.useragent);
var ew_is_mobile = ew_mobile_detect.mobile() ? true : false;
var ew_project_stylesheet_filename = "phpcss/project1.css"; // project style sheet
var ew_pdf_stylesheet_filename = "phpcss/ewpdf.css"; // pdf style sheet
var ew_token = "6uwyi2ytahii0uehd3kweq..";
var ew_css_flip = false;
var ew_confirm_cancel = true;
var ew_search_filter_option = "client";
</script>
<script type="text/javascript" src="phpjs/jsrender.min.js"></script>
<script type="text/javascript" src="phpjs/ewp13.js"></script>
<script type="text/javascript">
var ewvar = [];
var ewlanguage = new ew_language({"cancelbtn":"cancel","clickrecaptcha":"please click recaptcha","closebtn":"close","confirmbtn":"confirm","confirmcancel":"do you want to cancel?","lightboxtitle":" ","lightboxcurrent":"image {current} of {total}","lightboxprevious":"previous","lightboxnext":"next","lightboxclose":"close","lightboxxhrerror":"this content failed to load.","lightboximgerror":"this image failed to load.","countselected":"%s selected","currentpassword":"current password: ","deleteconfirmmsg":"are you sure you want to delete?","deletefilterconfirm":"delete filter %s?","enterfiltername":"enter filter name","enternewpassword":"please enter new password","enteroldpassword":"please enter old password","enterpassword":"please enter password","enterpwd":"please enter password","enterusername":"please enter username","entervalidatecode":"enter the validation code shown","entersenderemail":"please enter sender email","enterpropersenderemail":"exceed maximum sender email count or email address incorrect","enterrecipientemail":"please enter recipient email","enterproperrecipientemail":"exceed maximum recipient email count or email address incorrect","enterproperccemail":"exceed maximum cc email count or email address incorrect","enterproperbccemail":"exceed maximum bcc email count or email address incorrect","entersubject":"please enter subject","enteruid":"please enter user id","entervalidemail":"please enter valid email address","exporttoemailtext":"email","filtername":"filter name","overwritebtn":"overwrite","incorrectemail":"incorrect email","incorrectfield":"incorrect field","incorrectfloat":"incorrect floating point number","incorrectguid":"incorrect guid","incorrectinteger":"incorrect integer","incorrectphone":"incorrect phone number","incorrectregexp":"regular expression not matched","incorrectrange":"number must be between %1 and %2","incorrectssn":"incorrect social security number","incorrectzip":"incorrect zip code","insertfailed":"insert failed","invalidrecord":"invalid record! key is null","loading":"loading...","maxfilesize":"max. file size (%s bytes) exceeded.","messageok":"ok","mismatchpassword":"mismatch password","next":"next","noaddrecord":"no records to be added","nofieldselected":"no field selected for update","norecord":"no records found","norecordselected":"no records selected","of":"of","page":"page","passwordstrength":"strength: %p","passwordtoosimple":"your password is too simple","pleaseselect":"please select","pleasewait":"please wait...","prev":"prev","quicksearchauto":"auto","quicksearchautoshort":"","quicksearchall":"all keywords","quicksearchallshort":"all","quicksearchany":"any keywords","quicksearchanyshort":"any","quicksearchexact":"exact match","quicksearchexactshort":"exact","record":"records","recordsperpage":"page size","reloadbtn":"reload","search":"search","selectbtn":"select","sendemailsuccess":"email sent successfully","sessionwillexpire":"your session will expire in %s seconds. click ok to continue your session.","sessionexpired":"your session has expired.","updatebtn":"update","uploading":"uploading...","uploadstart":"start","uploadcancel":"cancel","uploaddelete":"delete","uploadoverwrite":"overwrite old file?","uploaderrmsgmaxfilesize":"file is too big","uploaderrmsgminfilesize":"file is too small","uploaderrmsgacceptfiletypes":"file type not allowed","uploaderrmsgmaxnumberoffiles":"maximum number of files exceeded","uploaderrmsgmaxfilelength":"total length of file names exceeds field length","useradministrator":"administrator","useranonymous":"anonymous","userdefault":"default","userleveladministratorname":"user level name for user level -1 must be 'administrator'","userlevelanonymousname":"user level name for user level -2 must be 'anonymous'","userlevelidinteger":"user level id must be integer","userleveldefaultname":"user level name for user level 0 must be 'default'","userlevelidincorrect":"user defined user level id must be larger than 0","userlevelnameincorrect":"user defined user level name cannot be 'administrator' or 'default'","valuenotexist":"value does not exist","wrongfiletype":"file type is not allowed."});</script>
<script type="text/javascript" src="phpjs/userfn13.js"></script>
<script type="text/javascript">

// write your client script here, no need to add script tags.
</script>
<meta name="generator" content="phpmaker v2017">
</head>
<body>
<div class="ewlayout">
	<!-- header (begin) --><!-- ** note: only licensed users are allowed to change the logo ** -->
	<div id="ewheaderrow" class="hidden-xs ewheaderrow"></div>
<nav id="ewmobilemenu" role="navigation" class="navbar navbar-default visible-xs hidden-print">
	<div class="container-fluid"><!-- brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button data-target="#ewmenu" data-toggle="collapse" class="navbar-toggle" type="button">
				<span class="sr-only">toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">database management system</a>
		</div>
		<div id="ewmenu" class="collapse navbar-collapse" style="height: auto;"><!-- begin main menu -->
<!-- begin main menu -->
<ul id="mobilemenu" class="nav navbar-nav">
<li id="mmci_e10e32e19e02e49e2de21e39e25e42e1be23e41e01e23e21e27e34e08e31e22" class="dropdown"><a class="ewdropdown" href="#">ฐานข้อมูลโปรแกรมวิจัย<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmci_e1ce25e1ce25e34e15" class="dropdown"><a class="ewdropdown" href="#">ผลผลิต<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmi_paper_publications"><a href="paper_publicationslist.php?cmd=resetall">ผลงานวิจัยสิ่งตีพิมพ์ (publications)</a></li>
<li id="mmi_paper_presentations"><a href="paper_presentationslist.php?cmd=resetall">การนำเสนอผลงาน (presentations)</a></li>
<li id="mmi_thesis" class="active"><a href="javascript:void(0);">วิทยานิพนธ์นิสิต ที่สำเร็จการศึกษา</a></li>
</ul>
</li>
</ul>
</li>
<li id="mmci_e10e32e19e02e49e2de21e39e25e17e30e40e1ae35e22e19e1ae38e04e04e25" class="dropdown"><a class="ewdropdown" href="#">ฐานข้อมูลทะเบียนบุคคล<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmci_e23e32e22e07e32e19e2ae23e38e1b" class="dropdown"><a class="ewdropdown" href="#">รายงานสรุป<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmci_e2ae23e38e1be08e33e19e27e19e19e34e2ae34e15"><a href="crosstab_stdctb.php">สรุปจำนวนนิสิต</a></li>
</ul>
</li>
</ul>
</li>
<li id="mmci_e01e32e23e1ae23e34e01e32e23e17e32e27e27e34e0ae32e01e32e23e41e25e30e16e48e32e22e17e2de14e40e17e04e42e19e42e25e22e35" class="dropdown"><a class="ewdropdown" href="#">การบริการทาววิชาการและถ่ายทอดเทคโนโลยี<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li class="dropdown-header">รายงานสรุป</li>
<li id="mmci_e01e32e23e43e2be49e1ae23e34e01e32e23e17e32e07e27e34e0ae32e01e32e23" class="dropdown"><a class="ewdropdown" href="#">การให้บริการทางวิชาการ<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmri_crosstab5fcount5fservice5fby5ftype"><a href="crosstab_count_service_by_typectb.php">จำนวนผู้รับบริการแยกตามประเภทการให้บริการ</a></li>
</ul>
</li>
<li id="mmci_e01e32e23e16e48e32e22e17e2de14e40e17e04e42e19e42e25e22e35" class="dropdown"><a class="ewdropdown" href="#">การถ่ายทอดเทคโนโลยี<span class="icon-arrow-down"></span></a><ul class="dropdown-menu" role="menu">
<li id="mmri_crosstab5ftranning5fsumby5ftype"><a href="crosstab_tranning_sumby_typectb.php">จำนวนผู้เข้ารับการถ่ายทอดโนโลยี</a></li>
<li id="mmri_crosstab5ftranning5fcountbytype"><a href="crosstab_tranning_countbytypectb.php">จำนวนครั้ง</a></li>
</ul>
</li>
</ul>
</li>
<li id="mmi_login"><a href="login.php">login</a></li>
</ul>
<!-- end main menu -->
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
	<!-- header (end) -->
	<!-- content (begin) -->
	<div id="ewcontenttable" class="ewcontenttable">
		<div id="ewcontentrow">
			<div id="ewmenucolumn" class="hidden-xs ewmenucolumn">
				<!-- left column (begin) -->
				<div class="ewmenu">
<!-- begin main menu -->
<ul id="rootmenu" class="dropdown-menu">
<li class="dropdown-header">ฐานข้อมูลโปรแกรมวิจัย</li>
<li id="mci_e1ce25e1ce25e34e15" class="dropdown-submenu"><a href="#">ผลผลิต</a><ul class="dropdown-menu" role="menu">
<li id="mi_paper_publications"><a href="paper_publicationslist.php?cmd=resetall">ผลงานวิจัยสิ่งตีพิมพ์ (publications)</a></li>
<li id="mi_paper_presentations"><a href="paper_presentationslist.php?cmd=resetall">การนำเสนอผลงาน (presentations)</a></li>
<li id="mi_thesis" class="active"><a href="javascript:void(0);">วิทยานิพนธ์นิสิต ที่สำเร็จการศึกษา</a></li>
</ul>
</li>
<li class="divider"></li>
<li class="dropdown-header">ฐานข้อมูลทะเบียนบุคคล</li>
<li id="mci_e23e32e22e07e32e19e2ae23e38e1b" class="dropdown-submenu"><a href="#">รายงานสรุป</a><ul class="dropdown-menu" role="menu">
<li id="mci_e2ae23e38e1be08e33e19e27e19e19e34e2ae34e15"><a href="crosstab_stdctb.php">สรุปจำนวนนิสิต</a></li>
</ul>
</li>
<li class="divider"></li>
<li class="dropdown-header">การบริการทาววิชาการและถ่ายทอดเทคโนโลยี</li>
<li id="mci_e23e32e22e07e32e19e2ae23e38e1b" class="dropdown-submenu"><a href="#">รายงานสรุป</a><ul class="dropdown-menu" role="menu">
<li id="mci_e01e32e23e43e2be49e1ae23e34e01e32e23e17e32e07e27e34e0ae32e01e32e23" class="dropdown-submenu"><a href="#">การให้บริการทางวิชาการ</a><ul class="dropdown-menu" role="menu">
<li id="mri_crosstab5fcount5fservice5fby5ftype"><a href="crosstab_count_service_by_typectb.php">จำนวนผู้รับบริการแยกตามประเภทการให้บริการ</a></li>
</ul>
</li>
<li id="mci_e01e32e23e16e48e32e22e17e2de14e40e17e04e42e19e42e25e22e35" class="dropdown-submenu"><a href="#">การถ่ายทอดเทคโนโลยี</a><ul class="dropdown-menu" role="menu">
<li id="mri_crosstab5ftranning5fsumby5ftype"><a href="crosstab_tranning_sumby_typectb.php">จำนวนผู้เข้ารับการถ่ายทอดโนโลยี</a></li>
<li id="mri_crosstab5ftranning5fcountbytype"><a href="crosstab_tranning_countbytypectb.php">จำนวนครั้ง</a></li>
</ul>
</li>
</ul>
</li>
<li class="divider"></li>
<li id="mi_login"><a href="login.php">login</a></li>
</ul>
<!-- end main menu -->
				</div>
				<!-- left column (end) -->
			</div>
			<div id="ewcontentcolumn" class="ewcontentcolumn">
				<!-- right column (begin) -->
				<h4 class="hidden-xs ewsitetitle">database management system</h4>
<script type="text/javascript">

// form object
var currentpageid = ew_page_id = "list";
var currentform = fthesislist = new ew_form("fthesislist", "list");
fthesislist.formkeycountname = 'key_count';

// form_customvalidate event
fthesislist.form_customvalidate = 
 function(fobj) { // do not change this line!

 	// your custom validation code here, return false if invalid. 
 	return true;
 }

// use javascript validation or not
fthesislist.validaterequired = true;

// dynamic selection lists
fthesislist.lists["x_std_id"] = {"linkfield":"x_id","ajax":true,"autofill":false,"displayfields":["x_name_thai","x_degree","",""],"parentfields":[],"childfields":[],"filterfields":[],"options":[],"template":"","linktable":"view4_personaljoinstd"};
fthesislist.lists["x_sup_name"] = {"linkfield":"x_personal_id","ajax":true,"autofill":false,"displayfields":["x_name_thai","","",""],"parentfields":[],"childfields":[],"filterfields":[],"options":[],"template":"","linktable":"view4_personaljoinstaff"};

// form object for search
var currentsearchform = fthesislistsrch = new ew_form("fthesislistsrch");
</script>
<script type="text/javascript">

// write your client script here, no need to add script tags.
</script>
<div class="ewtoolbar">
<ul class="breadcrumb ewbreadcrumbs"><li id="ewbreadcrumb1"><a href="index.php" title="home" class="ewhome"><span data-phrase="homepage" class="glyphicon glyphicon-home ewicon" data-caption="home"></span></a></li><li id="ewbreadcrumb2" class="active"><span id="ewpagecaption">วิทยานิพนท์</span></li></ul><div class="ewexportoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><a class="btn btn-default ewexportlink ewexcel"  href="thesislist.php?export=excel" title="excel" data-caption="excel"><span data-phrase="exporttoexcel" class="icon-excel ewicon" data-caption="export to excel"></span></a></div></div><div class="ewsearchoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><a class="btn btn-default ewadvancedsearch"  title="advanced search" data-caption="advanced search" href="thesissrch.php"><span data-phrase="advancedsearchbtn" class="icon-advanced-search ewicon" data-caption="advanced search"></span></a></div></div><div class="ewfilteroption fthesislistsrch ewlistoptionseparator" data-name="button"><div class="btn-group ewbuttondropdown"><button class="dropdown-toggle btn btn-default" title="filters" data-toggle="dropdown"><span data-phrase="filters" class="icon-filter ewicon" data-caption="filters"></span><b class="caret"></b></button><ul class="dropdown-menu ewmenu"><li><a class="ewsavefilter"  data-form="fthesislistsrch" href="#">save current filter</a></li><li><a class="ewdeletefilter"  data-form="fthesislistsrch" href="#">delete filter</a></li></ul></div></div><div class="clearfix"></div>
</div>
<div class="ewmessagedialog"><div class="alert alert-danger ewerror"><button type="button" class="close" data-dismiss="alert">&times;</button>you do not have permission to access /db_cab/program_project/program_plist.php.</div></div><div class="panel panel-default ewgrid thesis">
<form name="fthesislist" id="fthesislist" class="form-inline ewform ewlistform" action="thesislist.php" method="post">
<input type="hidden" name="token" value="6uwyi2ytahii0uehd3kweq..">
<input type="hidden" name="t" value="thesis">
<div id="gmp_thesis" class="table-responsive ewgridmiddlepanel">
<table id="tbl_thesislist" class="table ewtable">
<thead><!-- table header -->
	<tr class="ewtableheader">
<th class="ewlistoptionheader" style="white-space: nowrap;" data-name="view"><span id="elh_thesis_view" class="thesis_view">&nbsp;</span></th>			<th data-name="id"><div class="ewpointer" onclick="ew_sort(event,'thesislist.php?order=id&amp;ordertype=asc',1);"><div id="elh_thesis_id" class="thesis_id">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">ลำดับที่</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="thesis_title_eng"><div class="ewpointer" onclick="ew_sort(event,'thesislist.php?order=thesis_title_eng&amp;ordertype=asc',1);"><div id="elh_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
			<div class="ewtableheaderbtn"><span class="ewtableheadercaption">ชื่อหัวข้อวิทยานิพนธ์ (eng)</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="std_id"><div class="ewpointer" onclick="ew_sort(event,'thesislist.php?order=std_id&amp;ordertype=asc',1);"><div id="elh_thesis_std_id" class="thesis_std_id">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">ชื่อนิสิต</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="sup_name"><div class="ewpointer" onclick="ew_sort(event,'thesislist.php?order=sup_name&amp;ordertype=asc',1);"><div id="elh_thesis_sup_name" class="thesis_sup_name">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">อาจารย์ที่ปรึกษาวิทยานิพนธ์</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="date_of_admiss"><div class="ewpointer" onclick="ew_sort(event,'thesislist.php?order=date_of_admiss&amp;ordertype=asc',1);"><div id="elh_thesis_date_of_admiss" class="thesis_date_of_admiss">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">วันเดือนปีที่เข้าศึกษา</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="date_of_graduated"><div class="ewpointer" onclick="ew_sort(event,'thesislist.php?order=date_of_graduated&amp;ordertype=asc',1);"><div id="elh_thesis_date_of_graduated" class="thesis_date_of_graduated">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">วันเดือนปีที่จบ</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
	</tr>
</thead>
<tbody>
	<tr data-rowindex="1" id="r1_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el1_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=1"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el1_thesis_id" class="thesis_id">
<span>
1</span>
</span>
<a id="thesis_list_row_1"></a></td>
				<td data-name="thesis_title_eng">
<span id="el1_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000008.pdf">glycosylation of industrial α-amylase and glucoamylase under high reducing sugar conditions</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el1_thesis_std_id" class="thesis_std_id">
<span>
พรพงษ์ สุทธิรักษ์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el1_thesis_sup_name" class="thesis_sup_name">
<span>
สิทธิวัฒน์ เลิศศิริ </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el1_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2000</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el1_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
10/06/2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="2" id="r2_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el2_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=2"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el2_thesis_id" class="thesis_id">
<span>
2</span>
</span>
<a id="thesis_list_row_2"></a></td>
				<td data-name="thesis_title_eng">
<span id="el2_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000020.pdf">phenotypic responses of  rice (oryza sativa l. sub. indica) to salt stress controlled by environmental engineering system</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el2_thesis_std_id" class="thesis_std_id">
<span>
สุริยันตร์ ชะอุ่ม, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el2_thesis_sup_name" class="thesis_sup_name">
<span>
กัณยารัตน์ สุไพบูลย์วัฒน</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el2_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el2_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
05/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="3" id="r3_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el3_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=3"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el3_thesis_id" class="thesis_id">
<span>
3</span>
</span>
<a id="thesis_list_row_3"></a></td>
				<td data-name="thesis_title_eng">
<span id="el3_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000009.pdf">effects of  all-trans retinoic acid and estrodiol-17b on germ cell development in embryos and larvae of the giant freshwater prawn macrobrachium rosenbergii de man</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el3_thesis_std_id" class="thesis_std_id">
<span>
นพคุณ ภักดีณรงค์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el3_thesis_sup_name" class="thesis_sup_name">
<span>
ปราณีต ดำรงผล</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el3_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el3_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
02/18/2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="4" id="r4_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el4_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=4"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el4_thesis_id" class="thesis_id">
<span>
4</span>
</span>
<a id="thesis_list_row_4"></a></td>
				<td data-name="thesis_title_eng">
<span id="el4_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000018.pdf">molecular genetics characterization of sugar transporter and related genes during flowering, grain filling and seed germination in rice (oryza sativa l.).</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el4_thesis_std_id" class="thesis_std_id">
<span>
บุษราภรณ์ งามปัญญา, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el4_thesis_sup_name" class="thesis_sup_name">
<span>
จรัญญา ณรงคะชวนะ </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el4_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el4_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
04/23/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="5" id="r5_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el5_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=5"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el5_thesis_id" class="thesis_id">
<span>
5</span>
</span>
<a id="thesis_list_row_5"></a></td>
				<td data-name="thesis_title_eng">
<span id="el5_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000019.pdf">construction of chromosomal engineered bacillus thuringiensis serovar aizawai expressing a transcriptionally fused chitinase gene during sporulation.</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el5_thesis_std_id" class="thesis_std_id">
<span>
สุรางค์  ธรรมเธียรกุล, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el5_thesis_sup_name" class="thesis_sup_name">
<span>
วัฒนาลัย ปานบ้านเกร็ด </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el5_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el5_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
09/01/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="6" id="r6_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el6_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=6"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el6_thesis_id" class="thesis_id">
<span>
6</span>
</span>
<a id="thesis_list_row_6"></a></td>
				<td data-name="thesis_title_eng">
<span id="el6_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000026.pdf">effect of osmotic pressure treatment in comparison with the heat-moisture treatment on the physicochemical properties of potato, sago and maize starches</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el6_thesis_std_id" class="thesis_std_id">
<span>
เฉิดฉัน ปุกหุต, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el6_thesis_sup_name" class="thesis_sup_name">
<span>
ไสยวิชญ์ วรวินิต</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el6_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el6_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
04/01/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="7" id="r7_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el7_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=7"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el7_thesis_id" class="thesis_id">
<span>
7</span>
</span>
<a id="thesis_list_row_7"></a></td>
				<td data-name="thesis_title_eng">
<span id="el7_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000017.pdf">prepation and characterization of annealed-enzymatic hydrolyzed tapioca starch and the utilization in tableting and studies on the retrogradation of succinate rice starch and rice starchers of various cultivars through the rheological property characteriz</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el7_thesis_std_id" class="thesis_std_id">
<span>
ตวงพร  ตู้โกเมน, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el7_thesis_sup_name" class="thesis_sup_name">
<span>
ไสยวิชญ์ วรวินิต</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el7_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el7_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
04/01/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="8" id="r8_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el8_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=8"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el8_thesis_id" class="thesis_id">
<span>
8</span>
</span>
<a id="thesis_list_row_8"></a></td>
				<td data-name="thesis_title_eng">
<span id="el8_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000021.pdf">molecular analysis of plant proteins that are involved in the regulation of transcriptional gene silencing</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el8_thesis_std_id" class="thesis_std_id">
<span>
โชติกา สมรรถจิตต์, m.sc.</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el8_thesis_sup_name" class="thesis_sup_name">
<span>
จรัญญา ณรงคะชวนะ </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el8_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el8_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
04/01/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="9" id="r9_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el9_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=9"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el9_thesis_id" class="thesis_id">
<span>
9</span>
</span>
<a id="thesis_list_row_9"></a></td>
				<td data-name="thesis_title_eng">
<span id="el9_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000029.pdf">biodiversity of thermotolerant yeast in thai environment</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el9_thesis_std_id" class="thesis_std_id">
<span>
จันทรพร  ทองเอกแก้ว, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el9_thesis_sup_name" class="thesis_sup_name">
<span>
ชื่นจิตต์ บุญเฉิด</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el9_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2003</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el9_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
10/24/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="10" id="r10_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el10_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=10"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el10_thesis_id" class="thesis_id">
<span>
10</span>
</span>
<a id="thesis_list_row_10"></a></td>
				<td data-name="thesis_title_eng">
<span id="el10_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000058.pdf">a-glucosyltransferase : gene cloning and enzyme characterization</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el10_thesis_std_id" class="thesis_std_id">
<span>
อมรรัตน์ อรุณนวล, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el10_thesis_sup_name" class="thesis_sup_name">
<span>
วัฒนาลัย ปานบ้านเกร็ด </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el10_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2005</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el10_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
05/22/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="11" id="r11_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el11_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=11"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el11_thesis_id" class="thesis_id">
<span>
11</span>
</span>
<a id="thesis_list_row_11"></a></td>
				<td data-name="thesis_title_eng">
<span id="el11_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000059.pdf">effect of hydrocolloids on physical and rheological properties of rice starch</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el11_thesis_std_id" class="thesis_std_id">
<span>
เจษฎ์นภา เตชวิภารัตน์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el11_thesis_sup_name" class="thesis_sup_name">
<span>
มานพ สุพรรณธริกา </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el11_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2005</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el11_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
12/04/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="12" id="r12_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el12_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=12"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el12_thesis_id" class="thesis_id">
<span>
12</span>
</span>
<a id="thesis_list_row_12"></a></td>
				<td data-name="thesis_title_eng">
<span id="el12_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000060.pdf">physical and pheological properties of mixture of waxy corn starch and hydrocolloid dispersions during and after heating</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el12_thesis_std_id" class="thesis_std_id">
<span>
ปิยะดา อาชายุทธการ, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el12_thesis_sup_name" class="thesis_sup_name">
<span>
มานพ สุพรรณธริกา </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el12_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2005</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el12_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
02/20/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="13" id="r13_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el13_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=13"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el13_thesis_id" class="thesis_id">
<span>
13</span>
</span>
<a id="thesis_list_row_13"></a></td>
				<td data-name="thesis_title_eng">
<span id="el13_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-10-000037.pdf">stabization of oil-in-water emulsions by polysaccharides and proteins</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el13_thesis_std_id" class="thesis_std_id">
<span>
รุจิรัตน์  สันติพาณิชย์วงศ์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el13_thesis_sup_name" class="thesis_sup_name">
<span>
มานพ สุพรรณธริกา </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el13_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2004</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el13_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
05/21/2009</span>
</span>
</td>
		</tr>
	<tr data-rowindex="14" id="r14_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el14_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=14"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el14_thesis_id" class="thesis_id">
<span>
14</span>
</span>
<a id="thesis_list_row_14"></a></td>
				<td data-name="thesis_title_eng">
<span id="el14_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-12-000001.pdf">inheritance and cloning of candidate resistance gene analogs (rgas) for downy mildew in grapevine (vitis spp.)</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el14_thesis_std_id" class="thesis_std_id">
<span>
ศิระประภา มหานิล, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el14_thesis_sup_name" class="thesis_sup_name">
<span>
ไพศาล เหล่าสุวรรณ</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el14_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el14_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
10/01/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="15" id="r15_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el15_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=15"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el15_thesis_id" class="thesis_id">
<span>
15</span>
</span>
<a id="thesis_list_row_15"></a></td>
				<td data-name="thesis_title_eng">
<span id="el15_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-02-000044.pdf">effects of varieties, harvesting dates and planting seasons on starch biosynthesis of cassava</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el15_thesis_std_id" class="thesis_std_id">
<span>
นิตยา วานิกร, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el15_thesis_sup_name" class="thesis_sup_name">
<span>
วิจารณ์ วิชชุกิจ </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el15_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/03/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el15_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/04/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="16" id="r16_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el16_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=16"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el16_thesis_id" class="thesis_id">
<span>
16</span>
</span>
<a id="thesis_list_row_16"></a></td>
				<td data-name="thesis_title_eng">
<span id="el16_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-02-000046.pdf">effect of growth hormone and growth hormone receptor genes for preweaning growth traits in a multibreed beef population</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el16_thesis_std_id" class="thesis_std_id">
<span>
ชินา สุภากรณ์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el16_thesis_sup_name" class="thesis_sup_name">
<span>
ศรเทพ ธัมวาสร </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el16_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
10/27/2003</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el16_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/04/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="17" id="r17_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el17_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=17"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el17_thesis_id" class="thesis_id">
<span>
17</span>
</span>
<a id="thesis_list_row_17"></a></td>
				<td data-name="thesis_title_eng">
<span id="el17_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000044.pdf">ex<x>pression of recombinant vp1 protein of foot and mouth disease virus serotype o in escherichia coil</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el17_thesis_std_id" class="thesis_std_id">
<span>
ศิริพร วิหคโต, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el17_thesis_sup_name" class="thesis_sup_name">
<span>
ธีระพล ศิรินฤมิตร</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el17_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el17_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/20/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="18" id="r18_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el18_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=18"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el18_thesis_id" class="thesis_id">
<span>
18</span>
</span>
<a id="thesis_list_row_18"></a></td>
				<td data-name="thesis_title_eng">
<span id="el18_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000008.pdf">molecular cloning of ligninase gene from white-rot fungi for strain improvement </a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el18_thesis_std_id" class="thesis_std_id">
<span>
ศลยา สุขสอาด, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el18_thesis_sup_name" class="thesis_sup_name">
<span>
ชวลิต ฮงประยูร</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el18_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el18_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/20/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="19" id="r19_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el19_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=19"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el19_thesis_id" class="thesis_id">
<span>
19</span>
</span>
<a id="thesis_list_row_19"></a></td>
				<td data-name="thesis_title_eng">
<span id="el19_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000081.pdf">study of bacterial wilt disease corn in thailand </a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el19_thesis_std_id" class="thesis_std_id">
<span>
จุฑาเทพ วัชระไชยคุปต์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el19_thesis_sup_name" class="thesis_sup_name">
<span>
วิชัย โฆสิตรัตน</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el19_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el19_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/20/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="20" id="r20_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el20_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=20"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el20_thesis_id" class="thesis_id">
<span>
20</span>
</span>
<a id="thesis_list_row_20"></a></td>
				<td data-name="thesis_title_eng">
<span id="el20_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-04-000014.pdf">antibacterial activity of lectins from hemolymph of banana prawn (penaeus merguiensis de man)</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el20_thesis_std_id" class="thesis_std_id">
<span>
จันทร์จรัส วัฒนะโชติ, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el20_thesis_sup_name" class="thesis_sup_name">
<span>
สุริยัน ธัญกิจจานุกิจ </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el20_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/02/2003</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el20_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
02/13/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="21" id="r21_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el21_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=21"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el21_thesis_id" class="thesis_id">
<span>
21</span>
</span>
<a id="thesis_list_row_21"></a></td>
				<td data-name="thesis_title_eng">
<span id="el21_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000001.pdf">cloning and ex<x>pression of porcine interleukin-2 (il-2) </a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el21_thesis_std_id" class="thesis_std_id">
<span>
กนกรัตน์ ศรีกิจเกษมวัฒน์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el21_thesis_sup_name" class="thesis_sup_name">
<span>
ธีระพล ศิรินฤมิตร</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el21_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el21_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
04/01/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="22" id="r22_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el22_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=22"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el22_thesis_id" class="thesis_id">
<span>
22</span>
</span>
<a id="thesis_list_row_22"></a></td>
				<td data-name="thesis_title_eng">
<span id="el22_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000011.pdf">cloning and ex<x>pression of porcine h5 gene of avian influenza virus and its biological activity</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el22_thesis_std_id" class="thesis_std_id">
<span>
เกรียงไกร วิฑูรย์เสถียร, ph.d.2.2</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el22_thesis_sup_name" class="thesis_sup_name">
<span>
ธีระ รักความสุข</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el22_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el22_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
03/16/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="23" id="r23_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el23_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=23"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el23_thesis_id" class="thesis_id">
<span>
23</span>
</span>
<a id="thesis_list_row_23"></a></td>
				<td data-name="thesis_title_eng">
<span id="el23_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000083.pdf">ex<x>pression of rep protein of tomato yellow leaf curl virus in transgenic tomato for virus resistance</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el23_thesis_std_id" class="thesis_std_id">
<span>
สุภาภรณ์ เอี่ยมเข่ง, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el23_thesis_sup_name" class="thesis_sup_name">
<span>
อรวรรณ ชัชวาลการพาณิชย์ </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el23_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el23_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/05/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="24" id="r24_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el24_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=24"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el24_thesis_id" class="thesis_id">
<span>
24</span>
</span>
<a id="thesis_list_row_24"></a></td>
				<td data-name="thesis_title_eng">
<span id="el24_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000005.pdf">inheritance and molecular marker analysis of grain quality and days to flowering in vegetable soybean (glycine max (l.) merrill)</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el24_thesis_std_id" class="thesis_std_id">
<span>
พรพันธ์ ภู่พร้อมพันธุ์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el24_thesis_sup_name" class="thesis_sup_name">
<span>
พีระศักดิ์ ศรีนิเวศน์ </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el24_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el24_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/01/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="25" id="r25_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el25_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=25"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el25_thesis_id" class="thesis_id">
<span>
25</span>
</span>
<a id="thesis_list_row_25"></a></td>
				<td data-name="thesis_title_eng">
<span id="el25_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000040.pdf">aflp marker linked to the ability to maintain total leaf water potential and osmotic potential in sugarcane</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el25_thesis_std_id" class="thesis_std_id">
<span>
นงลักษณ์ เทียนเสรี, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el25_thesis_sup_name" class="thesis_sup_name">
<span>
สนธิชัย จันทร์เปรม</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el25_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el25_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
04/28/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="26" id="r26_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el26_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=26"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el26_thesis_id" class="thesis_id">
<span>
26</span>
</span>
<a id="thesis_list_row_26"></a></td>
				<td data-name="thesis_title_eng">
<span id="el26_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000051.pdf">development and characterization of  microsatellite markers in cucumber (cucumis sativus l.) for genetic purity testing and a comparasion of cost-effectiveness analysis between dna-based method and field grow out for genetic purity testing</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el26_thesis_std_id" class="thesis_std_id">
<span>
นุชจรี วัชรวงษ์ไพบูลย์, ph.d.2.2</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el26_thesis_sup_name" class="thesis_sup_name">
<span>
จุลภาค คุ้นวงศ์</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el26_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el26_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
02/15/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="27" id="r27_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el27_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=27"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el27_thesis_id" class="thesis_id">
<span>
27</span>
</span>
<a id="thesis_list_row_27"></a></td>
				<td data-name="thesis_title_eng">
<span id="el27_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-02-000041.pdf">molecular breeding for salt tolerance : introgression salt tolerant qtl confering na+/k+ ratio in thai hom mali rice</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el27_thesis_std_id" class="thesis_std_id">
<span>
ดวงใจ สุริยาอรุณโรจน์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el27_thesis_sup_name" class="thesis_sup_name">
<span>
อภิชาติ วรรณวิจิตร</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el27_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/1999</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el27_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
04/28/2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="28" id="r28_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el28_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=28"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el28_thesis_id" class="thesis_id">
<span>
28</span>
</span>
<a id="thesis_list_row_28"></a></td>
				<td data-name="thesis_title_eng">
<span id="el28_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-02-000042.pdf">validation and discovery of quantitative trait loci for drought tolerance in backcross introgression lines in rice (oryza sativa l.) cultivar ir64</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el28_thesis_std_id" class="thesis_std_id">
<span>
สุวัฒน์ เจียระคงมั่น, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el28_thesis_sup_name" class="thesis_sup_name">
<span>
ธีรยุทธ ตู้จินดา</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el28_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/1999</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el28_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
09/15/2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="29" id="r29_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el29_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=29"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el29_thesis_id" class="thesis_id">
<span>
29</span>
</span>
<a id="thesis_list_row_29"></a></td>
				<td data-name="thesis_title_eng">
<span id="el29_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000006.pdf">production of plumbagin by hairy root, callus and cell suspension cultures of  plumbago indica l..</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el29_thesis_std_id" class="thesis_std_id">
<span>
เพชรรัตน์ จันทรทิณ, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el29_thesis_sup_name" class="thesis_sup_name">
<span>
เสริมศิริ จันทร์เปรม </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el29_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el29_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/05/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="30" id="r30_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el30_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=30"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el30_thesis_id" class="thesis_id">
<span>
30</span>
</span>
<a id="thesis_list_row_30"></a></td>
				<td data-name="thesis_title_eng">
<span id="el30_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000002.pdf">transformation of vp1 gene from foot and mouth disease virus into stylosanthes hamata</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el30_thesis_std_id" class="thesis_std_id">
<span>
กัญจนา แซ่เตียว, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el30_thesis_sup_name" class="thesis_sup_name">
<span>
เสริมศิริ จันทร์เปรม </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el30_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el30_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/05/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="31" id="r31_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el31_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=31"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el31_thesis_id" class="thesis_id">
<span>
31</span>
</span>
<a id="thesis_list_row_31"></a></td>
				<td data-name="thesis_title_eng">
<span id="el31_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000010.pdf">the genetic transformation of tomato late blight resistant gene (ph-3) using binary vectors</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el31_thesis_std_id" class="thesis_std_id">
<span>
อัญชลี รวีโรจน์วิบูลย์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el31_thesis_sup_name" class="thesis_sup_name">
<span>
จุลภาค คุ้นวงศ์</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el31_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el31_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/22/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="32" id="r32_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el32_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=32"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el32_thesis_id" class="thesis_id">
<span>
32</span>
</span>
<a id="thesis_list_row_32"></a></td>
				<td data-name="thesis_title_eng">
<span id="el32_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000042.pdf">transformation of cpaco antisense into dendrobium orchid </a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el32_thesis_std_id" class="thesis_std_id">
<span>
รักชนก โคโต, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el32_thesis_sup_name" class="thesis_sup_name">
<span>
เสริมศิริ จันทร์เปรม </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el32_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el32_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/22/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="33" id="r33_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el33_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=33"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el33_thesis_id" class="thesis_id">
<span>
33</span>
</span>
<a id="thesis_list_row_33"></a></td>
				<td data-name="thesis_title_eng">
<span id="el33_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000039.pdf">identification of genes involving in sugar utilization of ralstonia solanacearum</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el33_thesis_std_id" class="thesis_std_id">
<span>
ดวงแข กาญจนโสภา, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el33_thesis_sup_name" class="thesis_sup_name">
<span>
นิพนธ์ ทวีชัย</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el33_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el33_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/05/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="34" id="r34_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el34_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=34"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el34_thesis_id" class="thesis_id">
<span>
34</span>
</span>
<a id="thesis_list_row_34"></a></td>
				<td data-name="thesis_title_eng">
<span id="el34_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000007.pdf">potential application of pcr-based methods for early detection of grassery disease of silkworm, bombyx mori</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el34_thesis_std_id" class="thesis_std_id">
<span>
มัลลิกา แก้ววิเศษ, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el34_thesis_sup_name" class="thesis_sup_name">
<span>
ทิพย์วดี อรรถธรรม</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el34_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el34_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/22/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="35" id="r35_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el35_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=35"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el35_thesis_id" class="thesis_id">
<span>
35</span>
</span>
<a id="thesis_list_row_35"></a></td>
				<td data-name="thesis_title_eng">
<span id="el35_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000038.pdf">biology and detection of xanthomonas axonopodis pv. citri causing citrus canker disease in thailand </a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el35_thesis_std_id" class="thesis_std_id">
<span>
ณัฏฐิมา โฆษิตเจริญกุล, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el35_thesis_sup_name" class="thesis_sup_name">
<span>
วิชัย โฆสิตรัตน</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el35_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el35_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/28/2007</span>
</span>
</td>
		</tr>
	<tr data-rowindex="36" id="r36_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el36_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=36"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el36_thesis_id" class="thesis_id">
<span>
36</span>
</span>
<a id="thesis_list_row_36"></a></td>
				<td data-name="thesis_title_eng">
<span id="el36_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000055.pdf">cellular immune reaction in response to white spot syndrome virus (wssv) infection in freshwater crayfish, pacifastacus leniusculus </a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el36_thesis_std_id" class="thesis_std_id">
<span>
ศิริภาวี ศรีเจริญ, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el36_thesis_sup_name" class="thesis_sup_name">
<span>
สุริยัน ธัญกิจจานุกิจ </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el36_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el36_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
02/09/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="37" id="r37_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el37_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=37"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el37_thesis_id" class="thesis_id">
<span>
37</span>
</span>
<a id="thesis_list_row_37"></a></td>
				<td data-name="thesis_title_eng">
<span id="el37_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-07-000009.pdf">study on vpi variation of foot-and-mouth disease virus thailand's isolates and evaluation of synthetic peptide vaccine for fmdv serotype o and the development of the 3ab protein</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el37_thesis_std_id" class="thesis_std_id">
<span>
ปรีดา เลิศวัชระสารกุล, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el37_thesis_sup_name" class="thesis_sup_name">
<span>
วรวิทย์ วัชชวัลคุ</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el37_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/05/2000</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el37_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/05/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="38" id="r38_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el38_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=38"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el38_thesis_id" class="thesis_id">
<span>
38</span>
</span>
<a id="thesis_list_row_38"></a></td>
				<td data-name="thesis_title_eng">
<span id="el38_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000004.pdf">genetic control of major agronomic characters in bambara groundnut</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el38_thesis_std_id" class="thesis_std_id">
<span>
จิระ สุวรรณประเสริฐ, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el38_thesis_sup_name" class="thesis_sup_name">
<span>
สนธิชัย จันทร์เปรม</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el38_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el38_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/22/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="39" id="r39_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el39_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=39"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el39_thesis_id" class="thesis_id">
<span>
39</span>
</span>
<a id="thesis_list_row_39"></a></td>
				<td data-name="thesis_title_eng">
<span id="el39_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000009.pdf">characterization, inheritance, and molecular study of opaque leaf mutant in mungbean </a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el39_thesis_std_id" class="thesis_std_id">
<span>
อรอุมา รุ่งน้อย, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el39_thesis_sup_name" class="thesis_sup_name">
<span>
พีระศักดิ์ ศรีนิเวศน์ </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el39_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el39_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
10/16/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="40" id="r40_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el40_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=40"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el40_thesis_id" class="thesis_id">
<span>
40</span>
</span>
<a id="thesis_list_row_40"></a></td>
				<td data-name="thesis_title_eng">
<span id="el40_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000003.pdf">purification and characterization of bacteriocins produced by lactobacillus salivarius k4 and k7 isolated from chicken intestine </a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el40_thesis_std_id" class="thesis_std_id">
<span>
คมแข พิลาสมบัติ, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el40_thesis_sup_name" class="thesis_sup_name">
<span>
ธวัชชัย ศักดิ์ภู่อร่าม</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el40_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el40_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
04/28/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="41" id="r41_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el41_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=41"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el41_thesis_id" class="thesis_id">
<span>
41</span>
</span>
<a id="thesis_list_row_41"></a></td>
				<td data-name="thesis_title_eng">
<span id="el41_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-07-000002.pdf">changes of enzyme activities and epidermal components during molting stages of mud crab (scylla forskal 1775)</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el41_thesis_std_id" class="thesis_std_id">
<span>
จินตนา สและน้อย, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el41_thesis_sup_name" class="thesis_sup_name">
<span>
มิ่งขวัญ  มิ่งเมือง </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el41_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2000</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el41_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/10/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="42" id="r42_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el42_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=42"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el42_thesis_id" class="thesis_id">
<span>
42</span>
</span>
<a id="thesis_list_row_42"></a></td>
				<td data-name="thesis_title_eng">
<span id="el42_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-02-000045.pdf">gene flow among aedes aegypti (l.) populations in thailand</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el42_thesis_std_id" class="thesis_std_id">
<span>
สุภราดา สุคนธาภิรมย์ ณ พัทลุง, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el42_thesis_sup_name" class="thesis_sup_name">
<span>
อภิชัย ดาวราย </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el42_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el42_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/01/2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="43" id="r43_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el43_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=43"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el43_thesis_id" class="thesis_id">
<span>
43</span>
</span>
<a id="thesis_list_row_43"></a></td>
				<td data-name="thesis_title_eng">
<span id="el43_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000053.pdf">analysis of expressed sequence tags in liver and muscle tissues of günther's walking catfish charias macrocephalus</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el43_thesis_std_id" class="thesis_std_id">
<span>
ดุจฤดี ปานพรหมมินทร์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el43_thesis_sup_name" class="thesis_sup_name">
<span>
สุภาวดี พุ่มพวง</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el43_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el43_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
04/28/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="44" id="r44_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el44_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=44"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el44_thesis_id" class="thesis_id">
<span>
44</span>
</span>
<a id="thesis_list_row_44"></a></td>
				<td data-name="thesis_title_eng">
<span id="el44_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000092.pdf">rapid detection and molecular subtyping of campylobacter in poultry samples</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el44_thesis_std_id" class="thesis_std_id">
<span>
เฉลิมเกียรติ แสงทองพินิจ, ph.d.2.2</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el44_thesis_sup_name" class="thesis_sup_name">
<span>
ธวัชชัย ศักดิ์ภู่อร่าม</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el44_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2003</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el44_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
05/30/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="45" id="r45_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el45_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=45"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el45_thesis_id" class="thesis_id">
<span>
45</span>
</span>
<a id="thesis_list_row_45"></a></td>
				<td data-name="thesis_title_eng">
<span id="el45_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000043.pdf">development of molecular markers for identification of thai ccocodiles</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el45_thesis_std_id" class="thesis_std_id">
<span>
วิน เชยชมศรี, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el45_thesis_sup_name" class="thesis_sup_name">
<span>
วรวิทย์ สิริพลวัฒน์</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el45_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2001</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el45_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
05/30/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="46" id="r46_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el46_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=46"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el46_thesis_id" class="thesis_id">
<span>
46</span>
</span>
<a id="thesis_list_row_46"></a></td>
				<td data-name="thesis_title_eng">
<span id="el46_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000115.pdf">potential factors affecting semen quality in asian elephant (elephas maximus) </a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el46_thesis_std_id" class="thesis_std_id">
<span>
นิกร ทองทิพย์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el46_thesis_sup_name" class="thesis_sup_name">
<span>
อนุชัย ภิญโญภูมิมินทร์</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el46_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2003</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el46_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/27/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="47" id="r47_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el47_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=47"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el47_thesis_id" class="thesis_id">
<span>
47</span>
</span>
<a id="thesis_list_row_47"></a></td>
				<td data-name="thesis_title_eng">
<span id="el47_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000056.pdf">screening for tomato yellow leaf curl virus resistance in several tomato lines and marker-assisted selection for resistant to tylcthv-[2]</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el47_thesis_std_id" class="thesis_std_id">
<span>
อรอุบล ชมเดช, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el47_thesis_sup_name" class="thesis_sup_name">
<span>
จุลภาค คุ้นวงศ์</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el47_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
06/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el47_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
06/27/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="48" id="r48_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el48_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=48"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el48_thesis_id" class="thesis_id">
<span>
48</span>
</span>
<a id="thesis_list_row_48"></a></td>
				<td data-name="thesis_title_eng">
<span id="el48_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000135.pdf">characteristics and lipid composition of the serow (capricornis sumatraensis) semen</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el48_thesis_std_id" class="thesis_std_id">
<span>
อัจฉรัตน์ สุวรรณภักดี, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el48_thesis_sup_name" class="thesis_sup_name">
<span>
อนุชัย ภิญโญภูมิมินทร์</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el48_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2004</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el48_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/21/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="49" id="r49_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el49_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=49"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el49_thesis_id" class="thesis_id">
<span>
49</span>
</span>
<a id="thesis_list_row_49"></a></td>
				<td data-name="thesis_title_eng">
<span id="el49_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000136.pdf">molecular and immunogenicity characterizations of flab and lig and their applications for leptospirosis detection</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el49_thesis_std_id" class="thesis_std_id">
<span>
อัญชลี ละอาด, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el49_thesis_sup_name" class="thesis_sup_name">
<span>
ธวัชชัย ศักดิ์ภู่อร่าม</span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el49_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2004</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el49_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/21/2008</span>
</span>
</td>
		</tr>
	<tr data-rowindex="50" id="r50_thesis" data-rowtype="1">
<td class="ewlistoptionbody" style="white-space: nowrap;" data-name="view"><span id="el50_thesis_view" class="thesis_view"><a class="ewrowlink ewview" title="view" data-caption="view" href="thesisview.php?showdetail=&amp;id=50"><span data-phrase="viewlink" class="icon-view ewicon" data-caption="view"></span></a></span></td>			<td data-name="id" style="white-space: nowrap;">
<span id="el50_thesis_id" class="thesis_id">
<span>
50</span>
</span>
<a id="thesis_list_row_50"></a></td>
				<td data-name="thesis_title_eng">
<span id="el50_thesis_thesis_title_eng" class="thesis_thesis_title_eng">
<span>
<a target="_blank" href="reports/paper/thisis/01-06-01-000082.pdf">genetic diversity of starch synthesis genes in rice</a>
</span>
</span>
</td>
				<td data-name="std_id" style="white-space: nowrap;">
<span id="el50_thesis_std_id" class="thesis_std_id">
<span>
สิริพร แจ้งสุทธิวรวัฒน์, ph.d.2.1</span>
</span>
</td>
				<td data-name="sup_name" style="white-space: nowrap;">
<span id="el50_thesis_sup_name" class="thesis_sup_name">
<span>
hugo volkaert </span>
</span>
</td>
				<td data-name="date_of_admiss" style="white-space: nowrap;">
<span id="el50_thesis_date_of_admiss" class="thesis_date_of_admiss">
<span>
11/01/2002</span>
</span>
</td>
				<td data-name="date_of_graduated" style="white-space: nowrap;">
<span id="el50_thesis_date_of_graduated" class="thesis_date_of_graduated">
<span>
11/21/2008</span>
</span>
</td>
		</tr>
</tbody>
</table>
<input type="hidden" name="a_list" id="a_list" value="">
</div>
</form>
<div class="panel-footer ewgridlowerpanel">
<form name="ewpagerform" class="ewform form-inline ewpagerform" action="thesislist.php">
<div class="ewpager">
<span>page&nbsp;</span>
<div class="ewprevnext"><div class="input-group">
<div class="input-group-btn">
<!--first page button-->
		<a class="btn btn-default btn-sm disabled" title="first"><span class="icon-first ewicon"></span></a>
	<!--previous page button-->
		<a class="btn btn-default btn-sm disabled" title="previous"><span class="icon-prev ewicon"></span></a>
	</div>
<!--current page number-->
	<input class="form-control input-sm" type="text" name="pageno" value="1">
<div class="input-group-btn">
<!--next page button-->
		<a class="btn btn-default btn-sm" title="next" href="thesislist.php?start=51"><span class="icon-next ewicon"></span></a>
	<!--last page button-->
		<a class="btn btn-default btn-sm" title="last" href="thesislist.php?start=901"><span class="icon-last ewicon"></span></a>
	</div>
</div>
</div>
<span>&nbsp;of&nbsp;19</span>
</div>
<div class="ewpager ewrec">
	<span>records&nbsp;1&nbsp;to&nbsp;50&nbsp;of&nbsp;936</span>
</div>
<div class="ewpager">
<input type="hidden" name="t" value="thesis">
<select name="recperpage" class="form-control input-sm ewtooltip" title="page size" onchange="this.form.submit();">
<option value="50" selected>50</option>
<option value="100">100</option>
<option value="150">150</option>
<option value="all">all</option>
</select>
</div>
</form>
<div class="ewlistotheroptions">
</div>
<div class="clearfix"></div>
</div>
</div>
<script type="text/javascript">
fthesislistsrch.filterlist = null;
fthesislistsrch.init();
fthesislist.init();
</script>
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
<!-- modal dialog -->
<div id="ewmodaldialog" class="modal" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title"></h4></div><div class="modal-body"></div><div class="modal-footer"></div></div></div></div>
<!-- add option dialog -->
<div id="ewaddoptdialog" class="modal" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title"></h4></div><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-primary ewbutton">add</button><button type="button" class="btn btn-default ewbutton" data-dismiss="modal">cancel</button></div></div></div></div>
<!-- message box -->
<div id="ewmsgbox" class="modal" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-primary ewbutton" data-dismiss="modal">ok</button></div></div></div></div>
<!-- prompt -->
<div id="ewprompt" class="modal" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-primary ewbutton">ok</button><button type="button" class="btn btn-default ewbutton" data-dismiss="modal">cancel</button></div></div></div></div>
<!-- session timer -->
<div id="ewtimer" class="modal" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-primary ewbutton" data-dismiss="modal">ok</button></div></div></div></div>
<!-- tooltip -->
<div id="ewtooltip"></div>
<script type="text/javascript">
jquery.get("phpjs/userevt13.js");
</script>
<script type="text/javascript">

// write your global startup script here
// document.write("page loaded");

</script>
</body>
</html>
