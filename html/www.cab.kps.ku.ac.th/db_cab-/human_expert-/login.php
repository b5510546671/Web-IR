<!doctype html public "-//w3c//dtd html 4.01 transitional//en" "http://www.w3.org/tr/html4/loose.dtd">
<html>
<head>
	<title>center for agricultural biotechnology (cab)</title>
<link rel="stylesheet" type="text/css" href="human_expert.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="generator" content="phpmaker v7.1.0.0">
</head>
<body class="yui-skin-sam">
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0/build/utilities/utilities.js"></script>
<script type="text/javascript">
<!--
var ew_language_id = "en";
var ew_date_separator = "/"; 
if (ew_date_separator == "") ew_date_separator = "/"; // default date separator
var ew_upload_allowed_file_ext = "gif,jpg,jpeg,bmp,png,doc,xls,pdf,zip"; // allowed upload file extension
var ew_field_sep = ", "; // default field separator

// ajax settings
var ew_record_delimiter = "\r";
var ew_field_delimiter = "|";
var ew_lookup_file_name = "ewlookup7.php"; // lookup file name

// common javascript messages
var ew_addopt_button_submit_text = "   add   ";
var ew_email_export_button_submit_text = "   send   ";
var ew_button_cancel_text = "  cancel  ";

//-->
</script>
<script type="text/javascript" src="js/ewp7.js"></script>
<script type="text/javascript" src="js/userfn7.js"></script>
<script type="text/javascript">
<!--
var ewlanguage = new ew_language({"deleteconfirmmsg":"do you want to delete this record?","deletemulticonfirmmsg":"do you want to delete the selected records?","enternewpassword":"please enter new password","enteroldpassword":"please enter old password","enterpassword":"please enter password","enterpwd":"please enter password","enterrequiredfield":"please enter required field","enterusername":"please enter username","entervalidatecode":"please enter the validation code shown","entersenderemail":"please enter sender email","enterpropersenderemail":"exceed maximum sender email count or email address incorrect","enterrecipientemail":"please enter recipient email","enterproperrecipientemail":"exceed maximum recipient email count or email address incorrect","enterproperccemail":"exceed maximum cc email count or email address incorrect","enterproperbccemail":"exceed maximum bcc email count or email address incorrect","entersubject":"please enter subject","enteruid":"please enter user id","entervalidemail":"please enter valid email address!","exporttoemail":"email","hidehighlight":"hide highlight","incorrectemail":"incorrect email","incorrectfield":"incorrect field","incorrectfloat":"incorrect floating point number","incorrectguid":"incorrect guid","incorrectinteger":"incorrect integer","incorrectphone":"incorrect phone number","incorrectregexp":"regular expression not matched","incorrectrange":"number must be between %1 and %2","incorrectssn":"incorrect social security number","incorrecttime":"incorrect time (hh:mm:ss)","incorrectzip":"incorrect zip code","invalidrecord":"invalid record! key is null","loading":"loading...","mismatchpassword":"mismatch password","noaddrecord":"no records to be added","nofieldselected":"no field selected for update","norecordselected":"no records selected","sendemailsuccess":"email sent successfully","showhighlight":"show highlight","userleveladministratorname":"user level name for user level -1 must be 'administrator'","userlevelidinteger":"user level id must be integer","userleveldefaultname":"user level name for user level 0 must be 'default'","userlevelidincorrect":"user defined user level id must be larger than 0","userlevelnameincorrect":"user defined user level name cannot be 'administrator' or 'default'","wrongfiletype":"file type is not allowed."});
//-->
</script>
<script language="javascript" type="text/javascript">
<!--

// write your client script here, no need to add script tags.
// to include another .js script, use:
// ew_clientscriptinclude("my_javascript.js");
//-->

</script>
<div class="ewlayout">
	<!-- header (begin) --><!-- *** note: only licensed users are allowed to change the logo *** -->
  <div class="ewheaderrow"><img src="images/header.jpg" alt="" border="0"></div>
	<!-- header (end) -->
	<!-- content (begin) -->
  <table cellspacing="0" class="ewcontenttable">
		<tr>	
			<td class="ewmenucolumn">
			<!-- left column (begin) -->
<!-- begin main menu -->
<div class="phpmaker">
<ul id="rootmenu" class="ewmenubarvertical">
<li><a href="login.php">login</a>
</li>
</ul>
</div>
<!-- end main menu -->
			<!-- left column (end) -->
			</td>
	    <td class="ewcontentcolumn">
			<!-- right column (begin) -->
				<p class="phpmaker"><b>center for agricultural biotechnology (cab)</b></p>
<script language="javascript" type="text/javascript">
<!--

// write your client script here, no need to add script tags.
// to include another .js script, use:
// ew_clientscriptinclude("my_javascript.js"); 
//-->

</script>
<script type="text/javascript">
<!--
var login = new ew_page("login");

// extend page with validateform function
login.validateform = function(fobj)
{
	if (!this.validaterequired)
		return true; // ignore validation
	if (!ew_hasvalue(fobj.username))
		return ew_onerror(this, fobj.username, ewlanguage.phrase("enteruid"));
	if (!ew_hasvalue(fobj.password))
		return ew_onerror(this, fobj.password, ewlanguage.phrase("enterpwd"));

	// call form custom validate event
	if (!this.form_customvalidate(fobj)) return false;
	return true;
}

// extend page with form_customvalidate function
login.form_customvalidate =  
 function(fobj) { // do not change this line!

 	// your custom validation code here, return false if invalid. 
 	return true;
 }

// requires js validation
login.validaterequired = true;

//-->
</script>
<p><span class="phpmaker">login page</span></p>
<form action="login.php" method="post" onsubmit="return login.validateform(this);">
<table border="0" cellspacing="0" cellpadding="4">
	<tr>
		<td><span class="phpmaker">user name</span></td>
		<td><span class="phpmaker"><input type="text" name="username" id="username" size="20" value=""></span></td>
	</tr>
	<tr>
		<td><span class="phpmaker">password</span></td>
		<td><span class="phpmaker"><input type="password" name="password" id="password" size="20"></span></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><span class="phpmaker">
		<label><input type="radio" name="rememberme" id="rememberme" value="a">auto login until i logout explicitly</label><br>
		<label><input type="radio" name="rememberme" id="rememberme" value="u">save my user name</label><br>
		<label><input type="radio" name="rememberme" id="rememberme" value="" checked="checked">always ask for my user name and password</label>
		</span></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><span class="phpmaker"><input type="submit" name="submit" id="submit" value="  login  "></span></td>
	</tr>
</table>
</form>
<br>
<p><span class="phpmaker">
</span></p>
<script language="javascript" type="text/javascript">
<!--

// write your startup script here
// document.write("page loaded");
//-->

</script>
				<p>&nbsp;</p>			
			<!-- right column (end) -->
				    </td>	
		</tr>
	</table>
	<!-- content (end) -->	
	<!-- footer (begin) --><!-- *** note: only licensed users are allowed to remove or change the following copyright statement. *** -->
	<div class="ewfooterrow">	
		<div class="ewfootertext">&nbsp;center for agricultural biotechnology (cab)</div>
		<!-- place other links, for example, disclaimer, here -->		
	</div>
	<!-- footer (end) -->	
</div>
<div class="yui-tt" id="ewtooltipdiv" style="visibility: hidden; border: 0px;" name="ewtooltipdivdiv"></div>
<script type="text/javascript">
<!--
ewdom.getelementsbyclassname(ew_table_class, "table", null, ew_setuptable); // init the table

//-->
</script>
<script language="javascript" type="text/javascript">
<!--

// write your global startup script here
// document.write("page loaded");
//-->

</script>
</body>
</html>
