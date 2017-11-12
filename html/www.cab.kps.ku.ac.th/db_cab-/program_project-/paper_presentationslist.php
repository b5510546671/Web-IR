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
var ew_token = "hnvkfwoerbd3tl_qdessda..";
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
<li id="mmi_paper_presentations" class="active"><a href="javascript:void(0);">การนำเสนอผลงาน (presentations)</a></li>
<li id="mmi_thesis"><a href="thesislist.php">วิทยานิพนธ์นิสิต ที่สำเร็จการศึกษา</a></li>
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
<li id="mi_paper_presentations" class="active"><a href="javascript:void(0);">การนำเสนอผลงาน (presentations)</a></li>
<li id="mi_thesis"><a href="thesislist.php">วิทยานิพนธ์นิสิต ที่สำเร็จการศึกษา</a></li>
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
var currentform = fpaper_presentationslist = new ew_form("fpaper_presentationslist", "list");
fpaper_presentationslist.formkeycountname = 'key_count';

// form_customvalidate event
fpaper_presentationslist.form_customvalidate = 
 function(fobj) { // do not change this line!

 	// your custom validation code here, return false if invalid. 
 	return true;
 }

// use javascript validation or not
fpaper_presentationslist.validaterequired = true;

// dynamic selection lists
fpaper_presentationslist.lists["x_affiliation"] = {"linkfield":"x_university_code","ajax":true,"autofill":false,"displayfields":["x_university_code","","",""],"parentfields":[],"childfields":[],"filterfields":[],"options":[],"template":"","linktable":"university"};

// form object for search
var currentsearchform = fpaper_presentationslistsrch = new ew_form("fpaper_presentationslistsrch");
</script>
<script type="text/javascript">

// write your client script here, no need to add script tags.
</script>
<div class="ewtoolbar">
<ul class="breadcrumb ewbreadcrumbs"><li id="ewbreadcrumb1"><a href="index.php" title="home" class="ewhome"><span data-phrase="homepage" class="glyphicon glyphicon-home ewicon" data-caption="home"></span></a></li><li id="ewbreadcrumb2" class="active"><span id="ewpagecaption">การนำเสนอผลงาน</span></li></ul><div class="ewexportoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><a class="btn btn-default ewexportlink ewexcel"  href="paper_presentationslist.php?export=excel" title="excel" data-caption="excel"><span data-phrase="exporttoexcel" class="icon-excel ewicon" data-caption="export to excel"></span></a></div></div><div class="ewsearchoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><a class="btn btn-default ewadvancedsearch"  title="advanced search" data-caption="advanced search" href="paper_presentationssrch.php"><span data-phrase="advancedsearchbtn" class="icon-advanced-search ewicon" data-caption="advanced search"></span></a></div></div><div class="ewfilteroption fpaper_presentationslistsrch ewlistoptionseparator" data-name="button"><div class="btn-group ewbuttondropdown"><button class="dropdown-toggle btn btn-default" title="filters" data-toggle="dropdown"><span data-phrase="filters" class="icon-filter ewicon" data-caption="filters"></span><b class="caret"></b></button><ul class="dropdown-menu ewmenu"><li><a class="ewsavefilter"  data-form="fpaper_presentationslistsrch" href="#">save current filter</a></li><li><a class="ewdeletefilter"  data-form="fpaper_presentationslistsrch" href="#">delete filter</a></li></ul></div></div><div class="clearfix"></div>
</div>
<div class="ewmessagedialog"></div><div class="panel panel-default ewgrid paper_presentations">
<form name="fpaper_presentationslist" id="fpaper_presentationslist" class="form-inline ewform ewlistform" action="paper_presentationslist.php" method="post">
<input type="hidden" name="token" value="hnvkfwoerbd3tl_qdessda..">
<input type="hidden" name="t" value="paper_presentations">
<div id="gmp_paper_presentations" class="table-responsive ewgridmiddlepanel">
<table id="tbl_paper_presentationslist" class="table ewtable">
<thead><!-- table header -->
	<tr class="ewtableheader">
			<th data-name="p_id"><div class="ewpointer" onclick="ew_sort(event,'paper_presentationslist.php?order=p_id&amp;ordertype=asc',1);"><div id="elh_paper_presentations_p_id" class="paper_presentations_p_id">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">id</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="presentationtitle"><div class="ewpointer" onclick="ew_sort(event,'paper_presentationslist.php?order=presentationtitle&amp;ordertype=asc',1);"><div id="elh_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
			<div class="ewtableheaderbtn"><span class="ewtableheadercaption">ชื่อผลงานนำเสนอ</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="auther_name"><div class="ewpointer" onclick="ew_sort(event,'paper_presentationslist.php?order=auther_name&amp;ordertype=asc',1);"><div id="elh_paper_presentations_auther_name" class="paper_presentations_auther_name">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">author's name</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="affiliation"><div class="ewpointer" onclick="ew_sort(event,'paper_presentationslist.php?order=affiliation&amp;ordertype=asc',1);"><div id="elh_paper_presentations_affiliation" class="paper_presentations_affiliation">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">สังกัด</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="co_author"><div class="ewpointer" onclick="ew_sort(event,'paper_presentationslist.php?order=co_author&amp;ordertype=asc',1);"><div id="elh_paper_presentations_co_author" class="paper_presentations_co_author">
			<div class="ewtableheaderbtn"><span class="ewtableheadercaption">co-author(s)</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="nameofconference"><div class="ewpointer" onclick="ew_sort(event,'paper_presentationslist.php?order=nameofconference&amp;ordertype=asc',1);"><div id="elh_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
			<div class="ewtableheaderbtn"><span class="ewtableheadercaption">ชื่อการประชุม</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="country"><div class="ewpointer" onclick="ew_sort(event,'paper_presentationslist.php?order=country&amp;ordertype=asc',1);"><div id="elh_paper_presentations_country" class="paper_presentations_country">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">ประเทศ</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="presentation_s"><div class="ewpointer" onclick="ew_sort(event,'paper_presentationslist.php?order=presentation_s&amp;ordertype=asc',1);"><div id="elh_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">วันที่เริ่ม</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="presentation_e"><div class="ewpointer" onclick="ew_sort(event,'paper_presentationslist.php?order=presentation_e&amp;ordertype=asc',1);"><div id="elh_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">วันที่สิ้นสุด</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
	</tr>
</thead>
<tbody>
	<tr data-rowindex="1" id="r1_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el1_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
1</span>
</span>
<a id="paper_presentations_list_row_1"></a></td>
				<td data-name="presentationtitle">
<span id="el1_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000001.pdf">differential ex<x>pression of 1-aminocyclopropane-1-carboxylate (acc) oxidase genes in carica papaya  (khak dum)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el1_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
kumdee, o.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el1_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el1_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
t. dumkoi, o. kumdee, k. romyanon, n. warin, s. chanprame, j. thongmontoe and t. burns</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el1_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
frontier technology for the 21th century and potential on collaboration with kasetsart university</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el1_paper_presentations_country" class="paper_presentations_country">
<span>
thailand,p19</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el1_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
05/30/2001</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el1_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
06/01/2001</span>
</span>
</td>
		</tr>
	<tr data-rowindex="2" id="r2_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el2_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
2</span>
</span>
<a id="paper_presentations_list_row_2"></a></td>
				<td data-name="presentationtitle">
<span id="el2_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000002.pdf">chili fruit stages on anthracnose host reaction</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el2_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
kanchana-udomkan, c.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el2_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el2_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
t. jaunet, s. jaikliang and o. mongkolporn</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el2_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the first national horticultural congress.</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el2_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p137</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el2_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
07/11/2001</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el2_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
07/13/2001</span>
</span>
</td>
		</tr>
	<tr data-rowindex="3" id="r3_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el3_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
3</span>
</span>
<a id="paper_presentations_list_row_3"></a></td>
				<td data-name="presentationtitle">
<span id="el3_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000003.pdf">isolation of lactic acid bacteria and its characterization of bacteriocin-like activity from chicken intesine</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el3_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
pilasombut, k.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el3_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el3_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
w. wajjawalku, s. nitisinprasert, a. swetwiwathana and t. sakpuaram</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el3_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the 14th annual meeting of the thai society for biotechnology</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el3_paper_presentations_country" class="paper_presentations_country">
<span>
thailand</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el3_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
11/12/2002</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el3_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
11/15/2002</span>
</span>
</td>
		</tr>
	<tr data-rowindex="4" id="r4_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el4_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
4</span>
</span>
<a id="paper_presentations_list_row_4"></a></td>
				<td data-name="presentationtitle">
<span id="el4_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000004.pdf">development of microsatellite primers for walking catfish(clarias macrocephalus)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el4_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
sookmanomon, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el4_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el4_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. poompuang</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el4_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the proceedings of 41st kasetsart university annual conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el4_paper_presentations_country" class="paper_presentations_country">
<span>
thailand</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el4_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
02/03/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el4_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
02/07/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="5" id="r5_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el5_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
5</span>
</span>
<a id="paper_presentations_list_row_5"></a></td>
				<td data-name="presentationtitle">
<span id="el5_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000005.pdf">development of microsatellite primers in the siamese fighting fish (betta splendens)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el5_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
sriphairod, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el5_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el5_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
u. na-nakorn</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el5_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the proceedings of 41st kasetsart university annual conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el5_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p 55-60</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el5_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
02/03/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el5_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
02/07/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="6" id="r6_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el6_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
6</span>
</span>
<a id="paper_presentations_list_row_6"></a></td>
				<td data-name="presentationtitle">
<span id="el6_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000006.pdf">rabbit polyclonal antibodies to a recombinant nucleocapsid protein of thai tospovirus serogroup iv</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el6_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
parnsa-ard, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el6_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el6_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
c. seepiban, r. hongprayoon, a. bhunchoth, n. warin, p. pongsapich, p. chiemsombat, p. watts and o. gajanandana</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el6_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the sixth annual meeting for biotec research units</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el6_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p 144-145</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el6_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
11/12/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el6_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
11/13/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="7" id="r7_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el7_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
7</span>
</span>
<a id="paper_presentations_list_row_7"></a></td>
				<td data-name="presentationtitle">
<span id="el7_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000007.pdf">expression of tomatoyellow leaf curl geminivirus coat protein in e. coli</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el7_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
vimontust, a.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el7_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el7_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
b. nathwong and c. pitaksutheepong</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el7_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the sixth annual meeting for biotec research units</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el7_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p 175</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el7_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
12/11/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el7_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
12/13/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="8" id="r8_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el8_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
8</span>
</span>
<a id="paper_presentations_list_row_8"></a></td>
				<td data-name="presentationtitle">
<span id="el8_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000008.pdf">selection of hybrid maize varieties for glufosinate resistance</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el8_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
chompoo, j.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el8_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el8_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
t. pornprom, o. mongkolporn and r. suwanketnikorn</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el8_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the sixth national plant protection conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el8_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p. 64</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el8_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
11/24/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el8_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
11/27/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="9" id="r9_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el9_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
9</span>
</span>
<a id="paper_presentations_list_row_9"></a></td>
				<td data-name="presentationtitle">
<span id="el9_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000009.pdf">insecticide resistance of the green leaffhopper, nephotettix cincticeps, to the systemic insecticides determined by "parafilm method"</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el9_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
jairin, j.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el9_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el9_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
t. nagata and n. kojima</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el9_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the sixth national plant protection conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el9_paper_presentations_country" class="paper_presentations_country">
<span>
thailand ,p15</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el9_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
11/24/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el9_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
11/27/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="10" id="r10_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el10_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
10</span>
</span>
<a id="paper_presentations_list_row_10"></a></td>
				<td data-name="presentationtitle">
<span id="el10_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000010.pdf">delevopment of specific primers for colletotrichum spp., causal agent of anthracnose in pepper</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el10_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
kongkaew, h.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el10_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el10_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
p. pongam</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el10_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the sixth national plant protection conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el10_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p126</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el10_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
11/24/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el10_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
11/27/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="11" id="r11_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el11_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
11</span>
</span>
<a id="paper_presentations_list_row_11"></a></td>
				<td data-name="presentationtitle">
<span id="el11_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000011.pdf">screening and application of phylloplane microorganisms for biological control of anthracnose of chilli cause by colletotrichum spp.</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el11_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
meeglinhom, j.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el11_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el11_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
w. intanoo, c. chamswarng, p. pongam</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el11_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the sixth national plant protection conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el11_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p126</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el11_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
11/24/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el11_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
11/27/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="12" id="r12_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el12_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
12</span>
</span>
<a id="paper_presentations_list_row_12"></a></td>
				<td data-name="presentationtitle">
<span id="el12_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000012.pdf">biochemical mechanisms of glufosinate resistant in sugarcane</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el12_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
sirivejabandhu, k.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el12_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el12_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
t. pornprom, s. suwanwong and r. lersrutaiyotin</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el12_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the sixth national plant protection conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el12_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p62</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el12_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
11/24/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el12_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
11/27/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="13" id="r13_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el13_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
13</span>
</span>
<a id="paper_presentations_list_row_13"></a></td>
				<td data-name="presentationtitle">
<span id="el13_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000013.pdf">shoots regeneration from in vitro cotyledon and leaf explants of tomato</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el13_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
sirifongnugoon, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el13_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el13_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. chanprame</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el13_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the third national horticultural congress</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el13_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p 147</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el13_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
04/22/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el13_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
04/25/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="14" id="r14_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el14_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
14</span>
</span>
<a id="paper_presentations_list_row_14"></a></td>
				<td data-name="presentationtitle">
<span id="el14_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000014.pdf">in vitro antibiotic resistance deternination of dendrobium orchid and stylosanthes hamata for gene transfornation</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el14_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
saetiew, k.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el14_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el14_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
r. koto, k. sungthongwises s. sarawaneeyaruk and s. chanprame</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el14_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the third national horticultural congress</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el14_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p 119</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el14_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
04/22/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el14_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
04/25/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="15" id="r15_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el15_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
15</span>
</span>
<a id="paper_presentations_list_row_15"></a></td>
				<td data-name="presentationtitle">
<span id="el15_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000015.pdf">shoot regeneration from leaf and cotyledon explants of lettuce (latuce sativa l.)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el15_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
samrankul, p.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el15_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el15_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. pornrungroj and s. chanprame</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el15_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the third national horticultural congress</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el15_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p 146</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el15_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
04/22/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el15_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
04/25/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="16" id="r16_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el16_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
16</span>
</span>
<a id="paper_presentations_list_row_16"></a></td>
				<td data-name="presentationtitle">
<span id="el16_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000016.pdf">effect of thin-section size of dendrobium orchid protocorm like bodies on plbs regeneration</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el16_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
koto, r.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el16_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el16_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. chanprame</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el16_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the third national horticultural congress.</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el16_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p120</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el16_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
04/22/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el16_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
04/25/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="17" id="r17_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el17_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
17</span>
</span>
<a id="paper_presentations_list_row_17"></a></td>
				<td data-name="presentationtitle">
<span id="el17_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000017.pdf">determination of two 1-aminocyclopropane-1-carboxylate oxidase gene expression during papaya fruit ripening</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el17_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
kumdee, o.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el17_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el17_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. bandee, s. chanprame and p. burns</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el17_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the third national horticultural congress.</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el17_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p97</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el17_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
04/22/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el17_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
04/25/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="18" id="r18_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el18_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
18</span>
</span>
<a id="paper_presentations_list_row_18"></a></td>
				<td data-name="presentationtitle">
<span id="el18_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000018.pdf">biochemical pulping of pineapple leaves by lignolytic fungi</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el18_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
pronsurat, k.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el18_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el18_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
m. srisodsuk</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el18_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
การประชุมวิชาการวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทยครั้งที่ 29</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el18_paper_presentations_country" class="paper_presentations_country">
<span>
thailand</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el18_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
10/20/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el18_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
10/22/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="19" id="r19_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el19_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
19</span>
</span>
<a id="paper_presentations_list_row_19"></a></td>
				<td data-name="presentationtitle">
<span id="el19_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000019.pdf">identification of soybean germplasm in northern thailand using ssr markers</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el19_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
pooprompan, p.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el19_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el19_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
j. abe and p. srinives</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el19_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
สัมมนาวิชาการพันธุศาสตร์ครั้งที่ 13</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el19_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p61</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el19_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
06/05/2003</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el19_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
06/07/2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="20" id="r20_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el20_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
20</span>
</span>
<a id="paper_presentations_list_row_20"></a></td>
				<td data-name="presentationtitle">
<span id="el20_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000020.pdf">expression of coat protein of okra yellow vein virus in bacterial cell system</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el20_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
raingwong, l.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el20_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el20_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. ieamkeng and o. chatchawankanpanich</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el20_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the proceedings of 42nd kasetsart university annual conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el20_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p 110-117</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el20_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
02/03/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el20_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
02/06/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="21" id="r21_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el21_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
21</span>
</span>
<a id="paper_presentations_list_row_21"></a></td>
				<td data-name="presentationtitle">
<span id="el21_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000021.pdf">chitinase and carbonic anhydrase activities during molting cycle of mud crab (scylla serrata)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el21_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
salaenoi, j.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el21_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el21_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
m. mingmuang, a. engkagul, p. tabthipwon and a. thongpan</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el21_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the proceedings of 42nd kasetsart university annual conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el21_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p 11-18</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el21_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
02/03/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el21_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
02/06/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="22" id="r22_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el22_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
22</span>
</span>
<a id="paper_presentations_list_row_22"></a></td>
				<td data-name="presentationtitle">
<span id="el22_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000022.pdf">effect of timentin and augmentin for growth suppression of agrobacterium tumefaciens for tomato transformation</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el22_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
ieamkhang, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el22_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el22_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
p. srinamngoen and o. chatchawankanphanich</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el22_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the proceedings of 42nd kasetsart university annual conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el22_paper_presentations_country" class="paper_presentations_country">
<span>
thailand, p 118-125</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el22_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
02/03/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el22_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
02/06/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="23" id="r23_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el23_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
23</span>
</span>
<a id="paper_presentations_list_row_23"></a></td>
				<td data-name="presentationtitle">
<span id="el23_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000023.pdf">detection of nucleopolyhedrovirus of mulberry silkworm, bombyx mori by pcr technique</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el23_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
kaewwises, m.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el23_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el23_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
t. attthom, s. chaeychomsri and s. chowpongpang</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el23_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
the proceedings of 42nd kasetsart university annual conference</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el23_paper_presentations_country" class="paper_presentations_country">
<span>
thailand</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el23_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/02/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el23_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
02/06/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="24" id="r24_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el24_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
24</span>
</span>
<a id="paper_presentations_list_row_24"></a></td>
				<td data-name="presentationtitle">
<span id="el24_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000024.pdf">glutamine synthetase as an altered terget site of glufosinate-resistant soybean cell lines</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el24_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
prodmatee, n.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el24_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el24_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
n. prodmatee and  p. srinives</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el24_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
งานถั่วเหลืองแห่งชาติ ครั้งที่ 9.</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el24_paper_presentations_country" class="paper_presentations_country">
<span>
thailand</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el24_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/03/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el24_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/04/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="25" id="r25_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el25_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
25</span>
</span>
<a id="paper_presentations_list_row_25"></a></td>
				<td data-name="presentationtitle">
<span id="el25_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000025.pdf">tissue culture of some forane crops</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el25_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
burom, k.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el25_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el25_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
p. sripichitt, s. peyachoknagul and s. chanprame</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el25_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el25_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 111</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el25_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el25_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="26" id="r26_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el26_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
26</span>
</span>
<a id="paper_presentations_list_row_26"></a></td>
				<td data-name="presentationtitle">
<span id="el26_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000026.pdf">isolation and selection of marine bacteria producing chitinase</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el26_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
khantavong, a.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el26_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el26_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. tunkijjanukij, s. patarajinda and a. kangsuwan</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el26_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el26_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 118</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el26_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el26_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="27" id="r27_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el27_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
27</span>
</span>
<a id="paper_presentations_list_row_27"></a></td>
				<td data-name="presentationtitle">
<span id="el27_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000027.pdf">excito-repellency of aedes aegypti populations by deltamethrin</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el27_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
kongmee, m.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el27_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el27_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
t. chareonviriyaphap and p. akratanakul</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el27_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el27_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 126</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el27_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el27_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="28" id="r28_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el28_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
28</span>
</span>
<a id="paper_presentations_list_row_28"></a></td>
				<td data-name="presentationtitle">
<span id="el28_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000028.pdf">integrated application of trichoderma spp. and gliocladium sp. for biological control of damping-off on green okra caused by rhizoctonia solani kuehn</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el28_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
sangsridum, k.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el28_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el28_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
c. chamswarng, w. intanoo and p. pongam</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el28_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el28_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 20</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el28_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el28_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="29" id="r29_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el29_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
29</span>
</span>
<a id="paper_presentations_list_row_29"></a></td>
				<td data-name="presentationtitle">
<span id="el29_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000029.pdf">screening and application of phylloplane microorganisms for the control of colletotrichum spp. causeing anthracnose of chilli</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el29_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
meeglinhom, j.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el29_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el29_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
w. intanoo, c. chamswarng, p. pongam and w. intana</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el29_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el29_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 27</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el29_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el29_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="30" id="r30_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el30_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
30</span>
</span>
<a id="paper_presentations_list_row_30"></a></td>
				<td data-name="presentationtitle">
<span id="el30_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000030.pdf">selection of high cellulase and chitinase producing isolates of trichoderma spp. and the evaluation of control efficacy against pythium aphanidermatum (edson) fitzp</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el30_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
meneenak, w.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el30_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el30_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
p. pongam, m. tantirungkij and c. chamswarng</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el30_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el30_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 28</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el30_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el30_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="31" id="r31_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el31_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
31</span>
</span>
<a id="paper_presentations_list_row_31"></a></td>
				<td data-name="presentationtitle">
<span id="el31_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000031.pdf">using sscp technique to identify dna band of prolactin receptor in thai native chicken and layer</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el31_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
panchroen, j.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el31_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el31_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
v. siripholvat</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el31_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el31_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 38</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el31_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el31_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="32" id="r32_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el32_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
32</span>
</span>
<a id="paper_presentations_list_row_32"></a></td>
				<td data-name="presentationtitle">
<span id="el32_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000032.pdf">isozyme patterns of aedes albopictus population an asian tiger mosquitoes in thailand</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el32_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
hunthamai, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el32_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el32_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
p. akratanakul and t. chareonviriyaphap</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el32_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el32_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 54</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el32_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el32_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="33" id="r33_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el33_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
33</span>
</span>
<a id="paper_presentations_list_row_33"></a></td>
				<td data-name="presentationtitle">
<span id="el33_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000033.pdf">larval habitats and distribution patterns of aedes aegypti (linnaeus) and aedes albopictus (skuse), in thailand</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el33_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
netthanomsak, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el33_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el33_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
p. akratanakul and t. chareonviriyaphap</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el33_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el33_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 55</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el33_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el33_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="34" id="r34_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el34_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
34</span>
</span>
<a id="paper_presentations_list_row_34"></a></td>
				<td data-name="presentationtitle">
<span id="el34_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000034.pdf">study on symtomatology and development of cucumber mosaic virus-specific monoclonal antibody for disease detection</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el34_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
koohapitagtam, m.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el34_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el34_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
r. hongprayoon</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el34_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el34_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 74</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el34_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el34_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="35" id="r35_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el35_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
35</span>
</span>
<a id="paper_presentations_list_row_35"></a></td>
				<td data-name="presentationtitle">
<span id="el35_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000035.pdf">crossing method and the inheritance of some traits in bambara groundnut</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el35_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
suwanprasert, j.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el35_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el35_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
p. srinives, t. toojinda and s. chanprame</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el35_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el35_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 10</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el35_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el35_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="36" id="r36_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el36_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
36</span>
</span>
<a id="paper_presentations_list_row_36"></a></td>
				<td data-name="presentationtitle">
<span id="el36_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000036.pdf">genomic fingerprinting of ralstonia solanacearum biovar 4 in thailand by pulsed-field gel electrophoresis</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el36_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
puttha, p.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el36_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el36_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
w. kositratana, n. thaveechai and s. chaopongpang</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el36_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el36_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 103</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el36_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el36_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="37" id="r37_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el37_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
37</span>
</span>
<a id="paper_presentations_list_row_37"></a></td>
				<td data-name="presentationtitle">
<span id="el37_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000037.pdf">identification of soybean germplasm in northern thailand using ssr markers</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el37_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
poorompan, p.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el37_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el37_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
j. abe and p. srinives</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el37_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el37_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 104</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el37_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el37_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="38" id="r38_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el38_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
38</span>
</span>
<a id="paper_presentations_list_row_38"></a></td>
				<td data-name="presentationtitle">
<span id="el38_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000038.pdf">delevopment of microsatellite markers in cucumber (cucumis sativus l.) for genetic purity testing</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el38_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
watcharawongpaiboon, n.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el38_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el38_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
c. chunwongse, t. yoocha, p. thatujirangkul and j. chunwongse</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el38_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el38_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 11</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el38_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el38_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="39" id="r39_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el39_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
39</span>
</span>
<a id="paper_presentations_list_row_39"></a></td>
				<td data-name="presentationtitle">
<span id="el39_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000039.pdf">effect of bicarbonate on iron-deficiency induced chlorosis in eucalyptus</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el39_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
intong, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el39_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el39_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. hinjan and s. nakasathien</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el39_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el39_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 12</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el39_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el39_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="40" id="r40_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el40_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
40</span>
</span>
<a id="paper_presentations_list_row_40"></a></td>
				<td data-name="presentationtitle">
<span id="el40_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000040.pdf">electroporation-mediated dna transfer of mature embryos peanut (arachis hypogaea l.)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el40_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
tanasilp, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el40_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el40_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. chanprame, s. chanprame and r. kaveeta</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el40_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el40_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 13</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el40_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el40_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="41" id="r41_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el41_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
41</span>
</span>
<a id="paper_presentations_list_row_41"></a></td>
				<td data-name="presentationtitle">
<span id="el41_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000041.pdf">evaluation of major seed storage protein composition during embryogenesis in high protein soybean (glycine max l.) lines</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el41_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
ruangpanit, n.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el41_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el41_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. nakasathien and p. srinives</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el41_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el41_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 14</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el41_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el41_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="42" id="r42_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el42_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
42</span>
</span>
<a id="paper_presentations_list_row_42"></a></td>
				<td data-name="presentationtitle">
<span id="el42_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000042.pdf">genetic analysis of capsicum anthracnose resistance</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el42_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
pakdeevaraporn, p.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el42_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el42_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
o. mongkolporn</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el42_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el42_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 15</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el42_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el42_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="43" id="r43_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el43_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
43</span>
</span>
<a id="paper_presentations_list_row_43"></a></td>
				<td data-name="presentationtitle">
<span id="el43_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000043.pdf">identification of aflp markers linkaged to flowering date in rice bean (vigna umbellate (trunb.) ohwi & ohashi)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el43_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
munwien, u.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el43_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el43_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
p. srinives, j. chunwong and s. chanprame</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el43_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el43_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 16</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el43_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el43_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="44" id="r44_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el44_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
44</span>
</span>
<a id="paper_presentations_list_row_44"></a></td>
				<td data-name="presentationtitle">
<span id="el44_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000044.pdf">identification of molecular markers associating with anthracnose resistance in capsicum</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el44_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
kanchana-udomkan, c.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el44_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el44_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
o. mongkolporn</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el44_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el44_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 17</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el44_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el44_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="45" id="r45_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el45_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
45</span>
</span>
<a id="paper_presentations_list_row_45"></a></td>
				<td data-name="presentationtitle">
<span id="el45_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000045.pdf">in vitro biocontrol study of eucalyptus pathogenic fungi</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el45_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
khankhum, s.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el45_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el45_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
j. leesmidt (chamnanpunt)</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el45_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el45_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 18</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el45_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el45_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="46" id="r46_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el46_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
46</span>
</span>
<a id="paper_presentations_list_row_46"></a></td>
				<td data-name="presentationtitle">
<span id="el46_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000046.pdf">inheritance of waxy leaf mutant in mutant</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el46_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
rungnoi, o.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el46_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el46_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. chanprame, t. toojinda and p. srinives</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el46_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el46_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 19</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el46_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el46_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="47" id="r47_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el47_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
47</span>
</span>
<a id="paper_presentations_list_row_47"></a></td>
				<td data-name="presentationtitle">
<span id="el47_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000047.pdf">leaf photosynthetic capacity and diurnal gas exchange and water potential of carica papaya (var. khaj dum) : a comparison between female and hermaphrodite plants</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el47_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
chutteang, c.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el47_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el47_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
s. yingjajaval</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el47_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el47_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 21</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el47_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el47_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="48" id="r48_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el48_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
48</span>
</span>
<a id="paper_presentations_list_row_48"></a></td>
				<td data-name="presentationtitle">
<span id="el48_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000048.pdf">molecular mapping of tomato yellow leaf curl virus, thailand isolate (tylcthv-[2]) resistance in tomato part i: screening and seletion of resistant tomato varieties</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el48_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
chomdej, o.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el48_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el48_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
o. chatchawankanpanich, w. kositratana and j. chunwongse</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el48_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el48_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 22</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el48_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el48_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="49" id="r49_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el49_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
49</span>
</span>
<a id="paper_presentations_list_row_49"></a></td>
				<td data-name="presentationtitle">
<span id="el49_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000049.pdf">mutagenesis of orf2 and coat protein gene of rice tungro bacillifrom virus-chainat isolate : a step toward developing vaccine from chimeric plant virus</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el49_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
satapoomintr, p.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el49_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el49_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
b. nathwong and c. pitaksutheepong</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el49_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el49_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 24</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el49_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el49_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="50" id="r50_paper_presentations" data-rowtype="1">
			<td data-name="p_id" style="white-space: nowrap;">
<span id="el50_paper_presentations_p_id" class="paper_presentations_p_id">
<span>
50</span>
</span>
<a id="paper_presentations_list_row_50"></a></td>
				<td data-name="presentationtitle">
<span id="el50_paper_presentations_presentationtitle" class="paper_presentations_presentationtitle">
<span>
<a target="_blank" href="reports/paper/thisis/07-06-01-000050.pdf">new technique for screening of calcareous soil tolerance mungbean using nutrient solution</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el50_paper_presentations_auther_name" class="paper_presentations_auther_name">
<span>
chalee, t.</span>
</span>
</td>
				<td data-name="affiliation" style="white-space: nowrap;">
<span id="el50_paper_presentations_affiliation" class="paper_presentations_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="co_author">
<span id="el50_paper_presentations_co_author" class="paper_presentations_co_author">
<span>
p. srinives, r. kaveeta and s. chanprame</span>
</span>
</td>
				<td data-name="nameofconference">
<span id="el50_paper_presentations_nameofconference" class="paper_presentations_nameofconference">
<span>
agbiotech graduate conference i</span>
</span>
</td>
				<td data-name="country" style="white-space: nowrap;">
<span id="el50_paper_presentations_country" class="paper_presentations_country">
<span>
thailand 25</span>
</span>
</td>
				<td data-name="presentation_s" style="white-space: nowrap;">
<span id="el50_paper_presentations_presentation_s" class="paper_presentations_presentation_s">
<span>
03/18/2004</span>
</span>
</td>
				<td data-name="presentation_e" style="white-space: nowrap;">
<span id="el50_paper_presentations_presentation_e" class="paper_presentations_presentation_e">
<span>
03/19/2004</span>
</span>
</td>
		</tr>
</tbody>
</table>
<input type="hidden" name="a_list" id="a_list" value="">
</div>
</form>
<div class="panel-footer ewgridlowerpanel">
<form name="ewpagerform" class="ewform form-inline ewpagerform" action="paper_presentationslist.php">
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
		<a class="btn btn-default btn-sm" title="next" href="paper_presentationslist.php?start=51"><span class="icon-next ewicon"></span></a>
	<!--last page button-->
		<a class="btn btn-default btn-sm" title="last" href="paper_presentationslist.php?start=1701"><span class="icon-last ewicon"></span></a>
	</div>
</div>
</div>
<span>&nbsp;of&nbsp;35</span>
</div>
<div class="ewpager ewrec">
	<span>records&nbsp;1&nbsp;to&nbsp;50&nbsp;of&nbsp;1703</span>
</div>
<div class="ewpager">
<input type="hidden" name="t" value="paper_presentations">
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
fpaper_presentationslistsrch.filterlist = null;
fpaper_presentationslistsrch.init();
fpaper_presentationslist.init();
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
