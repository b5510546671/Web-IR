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
var ew_token = "cok3vu9exodejyrbxfge1g..";
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
<li id="mmi_login" class="active"><a href="javascript:void(0);">login</a></li>
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
<li id="mi_login" class="active"><a href="javascript:void(0);">login</a></li>
</ul>
<!-- end main menu -->
				</div>
				<!-- left column (end) -->
			</div>
			<div id="ewcontentcolumn" class="ewcontentcolumn">
				<!-- right column (begin) -->
				<h4 class="hidden-xs ewsitetitle">database management system</h4>
<script type="text/javascript">

// write your client script here, no need to add script tags.
</script>
<script type="text/javascript">
var flogin = new ew_form("flogin");

// validate function
flogin.validate = function()
{
	var fobj = this.form;
	if (!this.validaterequired)
		return true; // ignore validation
	if (!ew_hasvalue(fobj.username))
		return this.onerror(fobj.username, ewlanguage.phrase("enteruid"));
	if (!ew_hasvalue(fobj.password))
		return this.onerror(fobj.password, ewlanguage.phrase("enterpwd"));

	// call form custom validate event
	if (!this.form_customvalidate(fobj)) return false;
	return true;
}

// form_customvalidate function
flogin.form_customvalidate = 
 function(fobj) { // do not change this line!

 	// your custom validation code here, return false if invalid. 
 	return true;
 }

// requires js validation
flogin.validaterequired = true;
</script>
<div class="ewtoolbar">
<ul class="breadcrumb ewbreadcrumbs"><li id="ewbreadcrumb1"><a href="index.php" title="home" class="ewhome"><span data-phrase="homepage" class="glyphicon glyphicon-home ewicon" data-caption="home"></span></a></li><li id="ewbreadcrumb2" class="active"><span id="ewpagecaption">login</span></li></ul><div class="clearfix"></div>
</div>
<div class="ewmessagedialog"></div><form name="flogin" id="flogin" class="form-horizontal ewform ewloginform" action="login.php" method="post">
<input type="hidden" name="token" value="cok3vu9exodejyrbxfge1g..">
	<div class="form-group">
		<label class="col-sm-2 control-label ewlabel" for="username">user name</label>
		<div class="col-sm-10"><input type="text" name="username" id="username" class="form-control ewcontrol" value="" placeholder="user name"></div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label ewlabel" for="password">password</label>
		<div class="col-sm-10"><input type="password" name="password" id="password" class="form-control ewcontrol" placeholder="password"></div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button class="btn btn-primary ewbutton" name="btnsubmit" id="btnsubmit" type="submit">login</button>
		</div>
	</div>
		<input type="hidden" name="type" value="">
</form>
<br>
<script type="text/javascript">
flogin.init();
</script>
<script type="text/javascript">

// write your startup script here
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
