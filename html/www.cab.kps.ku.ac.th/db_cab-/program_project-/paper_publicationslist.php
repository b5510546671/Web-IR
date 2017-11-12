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
var ew_token = "89cinwaiydnkto86vk1ffw..";
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
<li id="mmi_paper_publications" class="active"><a href="javascript:void(0);">ผลงานวิจัยสิ่งตีพิมพ์ (publications)</a></li>
<li id="mmi_paper_presentations"><a href="paper_presentationslist.php?cmd=resetall">การนำเสนอผลงาน (presentations)</a></li>
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
<li id="mi_paper_publications" class="active"><a href="javascript:void(0);">ผลงานวิจัยสิ่งตีพิมพ์ (publications)</a></li>
<li id="mi_paper_presentations"><a href="paper_presentationslist.php?cmd=resetall">การนำเสนอผลงาน (presentations)</a></li>
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
var currentform = fpaper_publicationslist = new ew_form("fpaper_publicationslist", "list");
fpaper_publicationslist.formkeycountname = 'key_count';

// form_customvalidate event
fpaper_publicationslist.form_customvalidate = 
 function(fobj) { // do not change this line!

 	// your custom validation code here, return false if invalid. 
 	return true;
 }

// use javascript validation or not
fpaper_publicationslist.validaterequired = true;

// dynamic selection lists
fpaper_publicationslist.lists["x_a_affiliation"] = {"linkfield":"x_university_code","ajax":true,"autofill":false,"displayfields":["x_university_code","","",""],"parentfields":[],"childfields":[],"filterfields":[],"options":[],"template":"","linktable":"university"};

// form object for search
var currentsearchform = fpaper_publicationslistsrch = new ew_form("fpaper_publicationslistsrch");
</script>
<script type="text/javascript">

// write your client script here, no need to add script tags.
</script>
<div class="ewtoolbar">
<ul class="breadcrumb ewbreadcrumbs"><li id="ewbreadcrumb1"><a href="index.php" title="home" class="ewhome"><span data-phrase="homepage" class="glyphicon glyphicon-home ewicon" data-caption="home"></span></a></li><li id="ewbreadcrumb2" class="active"><span id="ewpagecaption">ผลการวิจัยสิ่งตีพิมพ์</span></li></ul><div class="ewexportoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><a class="btn btn-default ewexportlink ewexcel"  href="paper_publicationslist.php?export=excel" title="excel" data-caption="excel"><span data-phrase="exporttoexcel" class="icon-excel ewicon" data-caption="export to excel"></span></a></div></div><div class="ewsearchoption ewlistoptionseparator" style="white-space: nowrap;" data-name="button"><div class="btn-group ewbuttongroup"><a class="btn btn-default ewadvancedsearch"  title="advanced search" data-caption="advanced search" href="paper_publicationssrch.php"><span data-phrase="advancedsearchbtn" class="icon-advanced-search ewicon" data-caption="advanced search"></span></a></div></div><div class="ewfilteroption fpaper_publicationslistsrch ewlistoptionseparator" data-name="button"><div class="btn-group ewbuttondropdown"><button class="dropdown-toggle btn btn-default" title="filters" data-toggle="dropdown"><span data-phrase="filters" class="icon-filter ewicon" data-caption="filters"></span><b class="caret"></b></button><ul class="dropdown-menu ewmenu"><li><a class="ewsavefilter"  data-form="fpaper_publicationslistsrch" href="#">save current filter</a></li><li><a class="ewdeletefilter"  data-form="fpaper_publicationslistsrch" href="#">delete filter</a></li></ul></div></div><div class="clearfix"></div>
</div>
<div class="ewmessagedialog"></div><div class="panel panel-default ewgrid paper_publications">
<form name="fpaper_publicationslist" id="fpaper_publicationslist" class="form-inline ewform ewlistform" action="paper_publicationslist.php" method="post">
<input type="hidden" name="token" value="89cinwaiydnkto86vk1ffw..">
<input type="hidden" name="t" value="paper_publications">
<div id="gmp_paper_publications" class="table-responsive ewgridmiddlepanel">
<table id="tbl_paper_publicationslist" class="table ewtable">
<thead><!-- table header -->
	<tr class="ewtableheader">
			<th data-name="a_id"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=a_id&amp;ordertype=asc',1);"><div id="elh_paper_publications_a_id" class="paper_publications_a_id">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">id</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="a_researchtopic"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=a_researchtopic&amp;ordertype=asc',1);"><div id="elh_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
			<div class="ewtableheaderbtn"><span class="ewtableheadercaption">ชื่อผลงาน</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="auther_name"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=auther_name&amp;ordertype=asc',1);"><div id="elh_paper_publications_auther_name" class="paper_publications_auther_name">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">author's name</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="a_affiliation"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=a_affiliation&amp;ordertype=asc',1);"><div id="elh_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">สังกัด</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="a_coauthor"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=a_coauthor&amp;ordertype=asc',1);"><div id="elh_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
			<div class="ewtableheaderbtn"><span class="ewtableheadercaption">co-author(s)</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="a_nameof"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=a_nameof&amp;ordertype=asc',1);"><div id="elh_paper_publications_a_nameof" class="paper_publications_a_nameof">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">ชื่อหนังสือ</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="a_month_start"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=a_month_start&amp;ordertype=asc',1);"><div id="elh_paper_publications_a_month_start" class="paper_publications_a_month_start">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">ตั้งแต่(เดือน)</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="a_year_start"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=a_year_start&amp;ordertype=asc',1);"><div id="elh_paper_publications_a_year_start" class="paper_publications_a_year_start">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">ปี</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="a_month_end"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=a_month_end&amp;ordertype=asc',1);"><div id="elh_paper_publications_a_month_end" class="paper_publications_a_month_end">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">ถึง(เดือน)</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
			<th data-name="a_year_end"><div class="ewpointer" onclick="ew_sort(event,'paper_publicationslist.php?order=a_year_end&amp;ordertype=asc',1);"><div id="elh_paper_publications_a_year_end" class="paper_publications_a_year_end">
			<div class="ewtableheaderbtn" style="white-space: nowrap;"><span class="ewtableheadercaption">ปี</span><span class="ewtableheadersort"></span></div>
        </div></div></th>
			
	</tr>
</thead>
<tbody>
	<tr data-rowindex="1" id="r1_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el1_paper_publications_a_id" class="paper_publications_a_id">
<span>
1</span>
</span>
<a id="paper_publications_list_row_1"></a></td>
				<td data-name="a_researchtopic">
<span id="el1_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000001.pdf">differentiation of rhizoctonia spp., causal agent of strawberry root rot disease, using dna fingerprint technique</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el1_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
kateloy, k.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el1_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el1_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
n. jonglaekha and a. akarapisan</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el1_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el1_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
2</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el1_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2002</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el1_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
5</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el1_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2002</span>
</span>
</td>
		</tr>
	<tr data-rowindex="2" id="r2_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el2_paper_publications_a_id" class="paper_publications_a_id">
<span>
2</span>
</span>
<a id="paper_publications_list_row_2"></a></td>
				<td data-name="a_researchtopic">
<span id="el2_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000002.pdf">comparison on mitochondrial dna fingerprint for identification of thai native silkworm varieties</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el2_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
ruangrit, k.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el2_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el2_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
j. tayutivutikul, w. pongprasert and a. akarapisan</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el2_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el2_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el2_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2002</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el2_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
9</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el2_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2002</span>
</span>
</td>
		</tr>
	<tr data-rowindex="3" id="r3_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el3_paper_publications_a_id" class="paper_publications_a_id">
<span>
3</span>
</span>
<a id="paper_publications_list_row_3"></a></td>
				<td data-name="a_researchtopic">
<span id="el3_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000003.pdf">production of monoclonal antibodies for determination of egg yolk cholesterol from japanese quail</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el3_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
tancharoenrat, p.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el3_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el3_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. pongpiachan</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el3_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el3_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
10</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el3_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2002</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el3_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el3_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2002</span>
</span>
</td>
		</tr>
	<tr data-rowindex="4" id="r4_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el4_paper_publications_a_id" class="paper_publications_a_id">
<span>
4</span>
</span>
<a id="paper_publications_list_row_4"></a></td>
				<td data-name="a_researchtopic">
<span id="el4_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000004.pdf">ข้อพึงระวังในการทำแลปอีไลซาเทสท์คิท</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el4_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
panyatong, m.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el4_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el4_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. pongpiachan</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el4_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
ธุรกิจอาหารสัตว์</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el4_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
-</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el4_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2002</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el4_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
-</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el4_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2002</span>
</span>
</td>
		</tr>
	<tr data-rowindex="5" id="r5_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el5_paper_publications_a_id" class="paper_publications_a_id">
<span>
5</span>
</span>
<a id="paper_publications_list_row_5"></a></td>
				<td data-name="a_researchtopic">
<span id="el5_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000005.pdf">comparative response to boron deficiency in barley and wheat</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el5_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
wongmo, j.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el5_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el5_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s. jamjod and b. rerkasem</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el5_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el5_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
2</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el5_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el5_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
5</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el5_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="6" id="r6_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el6_paper_publications_a_id" class="paper_publications_a_id">
<span>
6</span>
</span>
<a id="paper_publications_list_row_6"></a></td>
				<td data-name="a_researchtopic">
<span id="el6_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000006.pdf">monoclonal antibodies production for quantification of ochratoxin a in feedstuffs by enzyme-linked immunosorbent assay</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el6_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
panyatong, m.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el6_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el6_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. pongpiachan and p. pongpiachan</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el6_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
kasetsart journal (natural science)</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el6_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el6_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el6_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el6_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="7" id="r7_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el7_paper_publications_a_id" class="paper_publications_a_id">
<span>
7</span>
</span>
<a id="paper_publications_list_row_7"></a></td>
				<td data-name="a_researchtopic">
<span id="el7_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000007.pdf">effect of nitrogen levels on growth and colchicine content in glory lily</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el7_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
lohachareon, w.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el7_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el7_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s. ruamrungsri</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el7_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el7_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el7_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el7_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
9</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el7_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="8" id="r8_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el8_paper_publications_a_id" class="paper_publications_a_id">
<span>
8</span>
</span>
<a id="paper_publications_list_row_8"></a></td>
				<td data-name="a_researchtopic">
<span id="el8_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000008.pdf">random amplified polymorphic dna analysis of galanga (alpinia spp.) accessions</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el8_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
saritnum, o.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el8_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el8_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. sruamsiri</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el8_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
chiang mai university journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el8_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
9</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el8_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el8_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el8_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="9" id="r9_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el9_paper_publications_a_id" class="paper_publications_a_id">
<span>
9</span>
</span>
<a id="paper_publications_list_row_9"></a></td>
				<td data-name="a_researchtopic">
<span id="el9_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000009.pdf">monoclonal antibody production for quantification ochratoxin a in feedstuffs by enzymeilinked immunosorbent assay</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el9_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
panyatong, m.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el9_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el9_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. pongpiachan and p. pongpiachan</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el9_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture (supplemented)</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el9_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el9_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el9_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el9_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="10" id="r10_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el10_paper_publications_a_id" class="paper_publications_a_id">
<span>
10</span>
</span>
<a id="paper_publications_list_row_10"></a></td>
				<td data-name="a_researchtopic">
<span id="el10_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000010.pdf">determination of progesterone in cows' milk by monoclonal antibody</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el10_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
pak-u-thai, s.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el10_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el10_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. pongpiachan and n. simasathitkul</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el10_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture (supplemented)</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el10_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el10_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el10_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el10_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="11" id="r11_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el11_paper_publications_a_id" class="paper_publications_a_id">
<span>
11</span>
</span>
<a id="paper_publications_list_row_11"></a></td>
				<td data-name="a_researchtopic">
<span id="el11_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000011.pdf">screening of phytase-producing fungi by specific activity</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el11_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
khiannok, w.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el11_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el11_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. pongpiachan and s. choonluchanon</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el11_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture (supplemented)</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el11_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el11_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el11_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el11_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="12" id="r12_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el12_paper_publications_a_id" class="paper_publications_a_id">
<span>
12</span>
</span>
<a id="paper_publications_list_row_12"></a></td>
				<td data-name="a_researchtopic">
<span id="el12_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000012.pdf">efficiency of some microbes on potassium solubilization from feldspar</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el12_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
somphee, p.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el12_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el12_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s. choonluchanon</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el12_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
วารสารเกษตร ฉบับพิเศษ</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el12_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el12_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el12_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el12_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="13" id="r13_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el13_paper_publications_a_id" class="paper_publications_a_id">
<span>
13</span>
</span>
<a id="paper_publications_list_row_13"></a></td>
				<td data-name="a_researchtopic">
<span id="el13_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000013.pdf">identification of water lilies by isozyme analysis</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el13_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
pathummuang, s.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el13_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el13_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
w. bundithya</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el13_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
วารสารเกษตร ฉบับพิเศษ</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el13_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el13_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el13_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el13_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="14" id="r14_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el14_paper_publications_a_id" class="paper_publications_a_id">
<span>
14</span>
</span>
<a id="paper_publications_list_row_14"></a></td>
				<td data-name="a_researchtopic">
<span id="el14_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000014.pdf">response to boron toxicity in three wheat genotypes with varying responses to b deficiency</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el14_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
punchana, s.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el14_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el14_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
b. rerkasem</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el14_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
วารสารเกษตร ฉบับพิเศษ</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el14_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el14_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el14_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el14_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="15" id="r15_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el15_paper_publications_a_id" class="paper_publications_a_id">
<span>
15</span>
</span>
<a id="paper_publications_list_row_15"></a></td>
				<td data-name="a_researchtopic">
<span id="el15_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000015.pdf">gamma oryzanol quantity in plant products</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el15_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
teltathum, t.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el15_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el15_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
t. teltathum and d. karladee</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el15_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el15_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el15_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el15_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
9</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el15_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="16" id="r16_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el16_paper_publications_a_id" class="paper_publications_a_id">
<span>
16</span>
</span>
<a id="paper_publications_list_row_16"></a></td>
				<td data-name="a_researchtopic">
<span id="el16_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000016.pdf">effect of gamma oryzanol on immune response in male mice</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el16_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
teltathum, t.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el16_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el16_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. pongpiachan and p. pongpiachan</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el16_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el16_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el16_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el16_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
9</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el16_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="17" id="r17_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el17_paper_publications_a_id" class="paper_publications_a_id">
<span>
17</span>
</span>
<a id="paper_publications_list_row_17"></a></td>
				<td data-name="a_researchtopic">
<span id="el17_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000017.pdf">varietal identification of water lily by isozyme analysis</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el17_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
pathummuang, s.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el17_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el17_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
w. bundithya</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el17_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of agriculture</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el17_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
2</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el17_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el17_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
5</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el17_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="18" id="r18_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el18_paper_publications_a_id" class="paper_publications_a_id">
<span>
18</span>
</span>
<a id="paper_publications_list_row_18"></a></td>
				<td data-name="a_researchtopic">
<span id="el18_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000018.pdf">genetic diversity of common wild rice collected from various regions of thailand</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el18_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
punyalue, a.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el18_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el18_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
b. rerkasem and s. jamjod</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el18_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
วารสารเกษตร</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el18_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
2</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el18_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2006</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el18_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
5</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el18_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="19" id="r19_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el19_paper_publications_a_id" class="paper_publications_a_id">
<span>
19</span>
</span>
<a id="paper_publications_list_row_19"></a></td>
				<td data-name="a_researchtopic">
<span id="el19_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-09-000019.pdf">phylogennetics of the powdery mildews in tribe phyllactinieae in northern thailand</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el19_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
watthanaworawit, w.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el19_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
cmu</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el19_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s.  takamutsu and c. to-anun</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el19_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
วารสารเกษตร</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el19_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
2</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el19_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2006</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el19_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
5</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el19_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2006</span>
</span>
</td>
		</tr>
	<tr data-rowindex="20" id="r20_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el20_paper_publications_a_id" class="paper_publications_a_id">
<span>
20</span>
</span>
<a id="paper_publications_list_row_20"></a></td>
				<td data-name="a_researchtopic">
<span id="el20_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-08-000001.pdf">survey of entomopathogenic nematodes and their efficiency in northeast thailand</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el20_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
nasaweang, t.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el20_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
kku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el20_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
w. khlibsuwan</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el20_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
khonkean  agriculture  journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el20_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el20_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el20_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el20_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="21" id="r21_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el21_paper_publications_a_id" class="paper_publications_a_id">
<span>
21</span>
</span>
<a id="paper_publications_list_row_21"></a></td>
				<td data-name="a_researchtopic">
<span id="el21_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-08-000002.pdf">studies on capsaicin contents of some chilli varieties</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el21_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
ruttanasook, s.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el21_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
kku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el21_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s. techawongstien, s, techawongstien and s. junti</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el21_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal (supplement issue)</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el21_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el21_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el21_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el21_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="22" id="r22_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el22_paper_publications_a_id" class="paper_publications_a_id">
<span>
22</span>
</span>
<a id="paper_publications_list_row_22"></a></td>
				<td data-name="a_researchtopic">
<span id="el22_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-08-000003.pdf">viroid in tomato: new record in thailand.  khon kaen</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el22_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
sangdee, a.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el22_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
kku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el22_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. sirithorn and p. thammabenjapone</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el22_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
khon kaen agriculture journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el22_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
10</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el22_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el22_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el22_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="23" id="r23_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el23_paper_publications_a_id" class="paper_publications_a_id">
<span>
23</span>
</span>
<a id="paper_publications_list_row_23"></a></td>
				<td data-name="a_researchtopic">
<span id="el23_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-08-000004.pdf">virus and viroid causal agent(s) of bunchy top and severe necrosis of tomato</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el23_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
sangdee, a.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el23_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
kku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el23_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. sirithorn and p. thammabenjapone</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el23_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
khon kaen agriculture journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el23_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
7</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el23_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el23_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
9</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el23_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="24" id="r24_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el24_paper_publications_a_id" class="paper_publications_a_id">
<span>
24</span>
</span>
<a id="paper_publications_list_row_24"></a></td>
				<td data-name="a_researchtopic">
<span id="el24_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-08-000005.pdf">race identification of fusarium wilt pathogen of tomato, fusarium oxysporum f. sp. lycopersici by pathogenic reaction on standard differential host and development of thai differential host</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el24_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
bunyarachata, w.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el24_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
kku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el24_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
w. saksirirat, p. sirithon and p. teerakulpisut</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el24_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
khon kaen agriculture journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el24_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el24_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el24_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el24_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="25" id="r25_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el25_paper_publications_a_id" class="paper_publications_a_id">
<span>
25</span>
</span>
<a id="paper_publications_list_row_25"></a></td>
				<td data-name="a_researchtopic">
<span id="el25_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-08-000006.pdf">development of molecular biology method for race identification of fusarium oxysporum f.sp lycopersici, a causal agent of fusarium wilt</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el25_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
chayphad, m.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el25_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
kku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el25_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
w. saksirirat and p. thanonkeo</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el25_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
khon kaen agriculture journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el25_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el25_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el25_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el25_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="26" id="r26_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el26_paper_publications_a_id" class="paper_publications_a_id">
<span>
26</span>
</span>
<a id="paper_publications_list_row_26"></a></td>
				<td data-name="a_researchtopic">
<span id="el26_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-08-000007.pdf">appropriate method of dna amplification for chilli pepper using rapd</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el26_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
khemnak, s.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el26_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
kku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el26_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s. techawongstien and p. theerakulpisut</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el26_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal (supplement issue)</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el26_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
9</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el26_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el26_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el26_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="27" id="r27_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el27_paper_publications_a_id" class="paper_publications_a_id">
<span>
27</span>
</span>
<a id="paper_publications_list_row_27"></a></td>
				<td data-name="a_researchtopic">
<span id="el27_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-08-000008.pdf">microbial population and chemical changes during fermentation of plaa-som, a thai fermented fish product</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el27_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
kopermsub, p.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el27_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
kku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el27_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s. vichitphan, n. nontaso and p. kopermsub</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el27_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
kku research journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el27_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
7</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el27_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el27_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
9</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el27_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="28" id="r28_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el28_paper_publications_a_id" class="paper_publications_a_id">
<span>
30</span>
</span>
<a id="paper_publications_list_row_28"></a></td>
				<td data-name="a_researchtopic">
<span id="el28_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-11-000003.pdf">protoplast isolation of lotus (nelumbo nucifera gaertn.) cv. bunthalik</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el28_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
treesaksree, s.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el28_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
kmitl</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el28_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s.  arunyanart</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el28_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal (supplement issue)</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el28_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el28_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2001</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el28_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
8</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el28_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2001</span>
</span>
</td>
		</tr>
	<tr data-rowindex="29" id="r29_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el29_paper_publications_a_id" class="paper_publications_a_id">
<span>
39</span>
</span>
<a id="paper_publications_list_row_29"></a></td>
				<td data-name="a_researchtopic">
<span id="el29_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000002.pdf">comparative ex<x>pression of 2 locis of acc oxidase during the ripening of papaya cv. khak naun</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el29_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
kumdee, o.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el29_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el29_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s. bandee, s. chanprame and p. burns</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el29_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el29_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
7</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el29_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el29_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el29_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="30" id="r30_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el30_paper_publications_a_id" class="paper_publications_a_id">
<span>
40</span>
</span>
<a id="paper_publications_list_row_30"></a></td>
				<td data-name="a_researchtopic">
<span id="el30_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000003.pdf">genetic purity testing of tomato hybrid seed using microsatellite marker</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el30_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
srisawad, n.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el30_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el30_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. tatujirangul, c. chunwongse and j. chunwongse</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el30_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el30_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
7</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el30_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2003</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el30_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el30_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2003</span>
</span>
</td>
		</tr>
	<tr data-rowindex="31" id="r31_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el31_paper_publications_a_id" class="paper_publications_a_id">
<span>
41</span>
</span>
<a id="paper_publications_list_row_31"></a></td>
				<td data-name="a_researchtopic">
<span id="el31_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000004.pdf">detection of duck enteritis virus in thailand by in situ hybridization</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el31_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
witoonsatian, k.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el31_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el31_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
t. rukkwamsuk, n. upragarin, t. songserm and t. sirinarumitr</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el31_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of kasetsart veterinarians</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el31_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el31_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el31_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el31_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="32" id="r32_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el32_paper_publications_a_id" class="paper_publications_a_id">
<span>
42</span>
</span>
<a id="paper_publications_list_row_32"></a></td>
				<td data-name="a_researchtopic">
<span id="el32_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000005.pdf">cloning and ex<x>pression of an antigenic domain of glycoprotein ge of pseudorabies virus in escherichia coli and its application for serological assay</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el32_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
phantham, s.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el32_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el32_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
t. rukkwamsuk, a. choothesa, o. boodde, w. chumsing, p. lertwatcharasarakul and w. wajjwalku</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el32_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of kasetsart veterinarians</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el32_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el32_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el32_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el32_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="33" id="r33_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el33_paper_publications_a_id" class="paper_publications_a_id">
<span>
43</span>
</span>
<a id="paper_publications_list_row_33"></a></td>
				<td data-name="a_researchtopic">
<span id="el33_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000006.pdf">a prevalence survey of babesia canis in stray dogs in bangkok using pcr technique</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el33_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
kaewmongkol, g.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el33_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el33_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
t. rukkwamsuk, t. sirinarumitr, t. songserm, s. tipsawake and s. jittapalapong</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el33_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
journal of kasetsart veterinarians</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el33_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el33_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el33_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el33_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="34" id="r34_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el34_paper_publications_a_id" class="paper_publications_a_id">
<span>
44</span>
</span>
<a id="paper_publications_list_row_34"></a></td>
				<td data-name="a_researchtopic">
<span id="el34_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000007.pdf">chitinase and carbonic anhydrase activities during molting cycle of mud crab (scylla serrata forskal 1775)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el34_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
salaenoi, j.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el34_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el34_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
m. mingmuang, a. engkagul, p. tabthipwon and a. thongpan</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el34_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
kasetsart journal natural science</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el34_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el34_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el34_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
3</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el34_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="35" id="r35_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el35_paper_publications_a_id" class="paper_publications_a_id">
<span>
45</span>
</span>
<a id="paper_publications_list_row_35"></a></td>
				<td data-name="a_researchtopic">
<span id="el35_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000008.pdf">development of specific primers for the detection of acaulospora scrobiculata</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el35_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
preepremmots, p.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el35_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el35_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
c. hongprayoon, k. reanwarakorn and t. mala</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el35_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
kamphaensaen acad. j.</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el35_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
5</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el35_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el35_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
8</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el35_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="36" id="r36_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el36_paper_publications_a_id" class="paper_publications_a_id">
<span>
46</span>
</span>
<a id="paper_publications_list_row_36"></a></td>
				<td data-name="a_researchtopic">
<span id="el36_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000009.pdf">development of primers for the detection of va mycorrhizal fungi, acaulospora scrobiculata</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el36_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
preepremmots, p.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el36_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el36_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
c. hongprayoon, k. reanwarakorn and t. mala</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el36_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el36_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
5</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el36_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el36_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
8</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el36_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="37" id="r37_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el37_paper_publications_a_id" class="paper_publications_a_id">
<span>
47</span>
</span>
<a id="paper_publications_list_row_37"></a></td>
				<td data-name="a_researchtopic">
<span id="el37_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000010.pdf">sequence comparison of the coat protein of maize dwarf mosaic virus isolates from thailand</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el37_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
chantem, u.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el37_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el37_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
k. reanwarakorn, s. chanprame and s. klinkong</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el37_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el37_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
5</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el37_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el37_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
8</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el37_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="38" id="r38_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el38_paper_publications_a_id" class="paper_publications_a_id">
<span>
48</span>
</span>
<a id="paper_publications_list_row_38"></a></td>
				<td data-name="a_researchtopic">
<span id="el38_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000011.pdf">variation in symptomatology caused by cucumber mosaic virus isolates in thailand</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el38_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
coohapitagtam, m.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el38_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el38_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
r. hongprayoon</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el38_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el38_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
9</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el38_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el38_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el38_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="39" id="r39_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el39_paper_publications_a_id" class="paper_publications_a_id">
<span>
49</span>
</span>
<a id="paper_publications_list_row_39"></a></td>
				<td data-name="a_researchtopic">
<span id="el39_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000012.pdf">rescue of peach embryo in culture media with additional of 6-benzylademine and gibberellic</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el39_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
jeengool, n.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el39_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el39_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
u. boonprakob</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el39_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
kasetsart journal natural science</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el39_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
10</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el39_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2004</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el39_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el39_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2004</span>
</span>
</td>
		</tr>
	<tr data-rowindex="40" id="r40_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el40_paper_publications_a_id" class="paper_publications_a_id">
<span>
50</span>
</span>
<a id="paper_publications_list_row_40"></a></td>
				<td data-name="a_researchtopic">
<span id="el40_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000013.pdf">biochemical and molecular mechanisms of tolerance to glufosinate in hybrid corn</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el40_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
chompoo, j.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el40_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el40_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
o. mongkolporn and t. pornprom</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el40_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el40_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el40_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el40_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el40_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="41" id="r41_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el41_paper_publications_a_id" class="paper_publications_a_id">
<span>
51</span>
</span>
<a id="paper_publications_list_row_41"></a></td>
				<td data-name="a_researchtopic">
<span id="el41_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000014.pdf">in vitro shoot regeneration from leaves and cotyledons explants of lettuce (lactuca sativa l. "grand rapid)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el41_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
samrankul, p.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el41_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el41_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s. chanprame, s. iamtham and s. dumrongkittikule</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el41_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el41_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el41_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el41_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el41_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="42" id="r42_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el42_paper_publications_a_id" class="paper_publications_a_id">
<span>
52</span>
</span>
<a id="paper_publications_list_row_42"></a></td>
				<td data-name="a_researchtopic">
<span id="el42_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000015.pdf">genomic dna analysis of ralstonia solanacearum biovar 3 in thailand by pulsed-field gel electrophoresis</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el42_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
kanhayart, t.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el42_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el42_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
n. thaveechai, o. mongkolporn, n. kositcharoenkul and w. kositratana</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el42_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el42_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el42_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el42_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el42_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="43" id="r43_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el43_paper_publications_a_id" class="paper_publications_a_id">
<span>
53</span>
</span>
<a id="paper_publications_list_row_43"></a></td>
				<td data-name="a_researchtopic">
<span id="el43_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000016.pdf">ex<x>pression of tylcv cp and its truncated derivatives in esherichia coli</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el43_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
vimoltust, a.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el43_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el43_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
c. pitaksutheepong</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el43_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el43_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el43_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el43_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el43_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="44" id="r44_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el44_paper_publications_a_id" class="paper_publications_a_id">
<span>
54</span>
</span>
<a id="paper_publications_list_row_44"></a></td>
				<td data-name="a_researchtopic">
<span id="el44_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000017.pdf">leaf photosynthetic potential of female and hermaphrodite papaya (carica papaya cv. khaeg nuan)</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el44_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
chutteang, c.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el44_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el44_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
s. yingjajaval and s. wasee</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el44_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
agricultural science journal</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el44_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el44_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el44_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el44_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="45" id="r45_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el45_paper_publications_a_id" class="paper_publications_a_id">
<span>
55</span>
</span>
<a id="paper_publications_list_row_45"></a></td>
				<td data-name="a_researchtopic">
<span id="el45_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000018.pdf">an rt-pcr primer pair for the detection of six pospiviroid in tomato plants</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el45_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
tangkanchanapas, p.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el45_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el45_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
k. reanwarakorn, s. chanprame and r. hongprayoon</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el45_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
thai phytopathology</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el45_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el45_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el45_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el45_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="46" id="r46_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el46_paper_publications_a_id" class="paper_publications_a_id">
<span>
56</span>
</span>
<a id="paper_publications_list_row_46"></a></td>
				<td data-name="a_researchtopic">
<span id="el46_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000019.pdf">tomato transformation with rep gene of tomato yellow leaf curl virus using ipt-type mat vector</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el46_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
supapanyapong, p.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el46_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el46_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
o. chatchawankanpanich</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el46_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
thai phytopathology</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el46_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el46_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el46_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el46_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="47" id="r47_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el47_paper_publications_a_id" class="paper_publications_a_id">
<span>
57</span>
</span>
<a id="paper_publications_list_row_47"></a></td>
				<td data-name="a_researchtopic">
<span id="el47_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000020.pdf">dectection of citrus bacterial canker by the polymerase chain reaction</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el47_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
kositcharoenkul, n.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el47_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el47_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
o. chatchawankanpanich, n. thaveechai and w. kositratana</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el47_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
thai phytopathology</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el47_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el47_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el47_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
12</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el47_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="48" id="r48_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el48_paper_publications_a_id" class="paper_publications_a_id">
<span>
58</span>
</span>
<a id="paper_publications_list_row_48"></a></td>
				<td data-name="a_researchtopic">
<span id="el48_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000021.pdf">cdna probe for grapevine yellow speakle viriod detection</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el48_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
hannok, p.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el48_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el48_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
k. reanwarakorn</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el48_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
kasetsart journal natural science</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el48_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
1</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el48_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el48_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
3</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el48_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="49" id="r49_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el49_paper_publications_a_id" class="paper_publications_a_id">
<span>
59</span>
</span>
<a id="paper_publications_list_row_49"></a></td>
				<td data-name="a_researchtopic">
<span id="el49_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000022.pdf">screening and selection for physiological characters contributing to salinity tolerance in rice</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el49_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
suriya-arunroj, d.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el49_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el49_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
n. supapoj, a. vanavichit and t. toojinda</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el49_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
kasetsart journal natural science</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el49_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el49_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el49_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el49_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
	<tr data-rowindex="50" id="r50_paper_publications" data-rowtype="1">
			<td data-name="a_id" style="white-space: nowrap;">
<span id="el50_paper_publications_a_id" class="paper_publications_a_id">
<span>
60</span>
</span>
<a id="paper_publications_list_row_50"></a></td>
				<td data-name="a_researchtopic">
<span id="el50_paper_publications_a_researchtopic" class="paper_publications_a_researchtopic">
<span>
<a target="_blank" href="reports/paper/06-06-01-000023.pdf">antimicrobial resistance of campylobacter jejuni  isolated from chicken in nakhon pathom province, thailand</a>
</span>
</span>
</td>
				<td data-name="auther_name" style="white-space: nowrap;">
<span id="el50_paper_publications_auther_name" class="paper_publications_auther_name">
<span>
sukhapesna, j.</span>
</span>
</td>
				<td data-name="a_affiliation" style="white-space: nowrap;">
<span id="el50_paper_publications_a_affiliation" class="paper_publications_a_affiliation">
<span>
ku</span>
</span>
</td>
				<td data-name="a_coauthor">
<span id="el50_paper_publications_a_coauthor" class="paper_publications_a_coauthor">
<span>
p. amavisit, w. wajjawalku, a. thamchaipenet and t. sukpuaram</span>
</span>
</td>
				<td data-name="a_nameof" style="white-space: nowrap;">
<span id="el50_paper_publications_a_nameof" class="paper_publications_a_nameof">
<span>
kasetsart journal natural science</span>
</span>
</td>
				<td data-name="a_month_start" style="white-space: nowrap;">
<span id="el50_paper_publications_a_month_start" class="paper_publications_a_month_start">
<span>
4</span>
</span>
</td>
				<td data-name="a_year_start" style="white-space: nowrap;">
<span id="el50_paper_publications_a_year_start" class="paper_publications_a_year_start">
<span>
2005</span>
</span>
</td>
				<td data-name="a_month_end" style="white-space: nowrap;">
<span id="el50_paper_publications_a_month_end" class="paper_publications_a_month_end">
<span>
6</span>
</span>
</td>
				<td data-name="a_year_end" style="white-space: nowrap;">
<span id="el50_paper_publications_a_year_end" class="paper_publications_a_year_end">
<span>
2005</span>
</span>
</td>
		</tr>
</tbody>
</table>
<input type="hidden" name="a_list" id="a_list" value="">
</div>
</form>
<div class="panel-footer ewgridlowerpanel">
<form name="ewpagerform" class="ewform form-inline ewpagerform" action="paper_publicationslist.php">
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
		<a class="btn btn-default btn-sm" title="next" href="paper_publicationslist.php?start=51"><span class="icon-next ewicon"></span></a>
	<!--last page button-->
		<a class="btn btn-default btn-sm" title="last" href="paper_publicationslist.php?start=751"><span class="icon-last ewicon"></span></a>
	</div>
</div>
</div>
<span>&nbsp;of&nbsp;16</span>
</div>
<div class="ewpager ewrec">
	<span>records&nbsp;1&nbsp;to&nbsp;50&nbsp;of&nbsp;796</span>
</div>
<div class="ewpager">
<input type="hidden" name="t" value="paper_publications">
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
fpaper_publicationslistsrch.filterlist = null;
fpaper_publicationslistsrch.init();
fpaper_publicationslist.init();
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
