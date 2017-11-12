<!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="pragma" content="no-cache">
<title>procmail mail</title>
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<link href="include/style.css" rel="stylesheet" type="text/css">
<script language="javascript">

function chkvalid() {
   var v1 = document.userenter.name.value;
   var v2 = document.userenter.password.value;
   if (v1.length<=0)
      {
      alert("please enter username and password");
      return false;
      }
  else if (v2.length<=0)
      {
      alert("please enter username and password");
      return false;
      }
  else
    {
    return true;
    }
}

</script>
</head>
<body>
<table width="940" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="/tools/images/logo_ku.png" width="324" height="49" border="0" />
   </td>
  </tr>
  <tr>
    <td colspan="3" height="3"></td>
  </tr>
  <tr>
    <td colspan="3">
    <div id="nav"><ul>
    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/">home</a></li>
   <li class="page_item"><a href="https://accounts.ku.ac.th/private/login">change password</a></li>
    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/chkquota.php">check quota</a></li>
   <li class="page_item"><a href="https://nontri.ku.ac.th/tools/my_forward.php">forward</a></li>
   <!-- <li class="page_item"><a href="https://nontri.ku.ac.th/tools/my_vacation.php">vacation</a></li> -->
   <!-- <li class="page_item"><a href="https://nontri.ku.ac.th/tools/my_procmail.php">procmail</a></li> -->
<!--    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/blocklist_safelist.php">blocklist/safelist</a></li>
-->
    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/manual"  target='_blank' >manual</a></li>
    <li class="page_item"><a href="https://nontri.ku.ac.th/tools/faq.php">faq</a></li>
	</ul>
    </div>
    </td>
  </tr>
  <tr>
     <td colspan="2" style="color: rgb(255, 153, 0);" >
     your ip address is 2406:3100:1018:2::3d30     </td>
    <td><div align="right" class="style7">version 3.3 jul-02-2011 @ office of computer services, kasetsart   university</div></td>
  </tr>
</table>
<br />
<table width="940" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <h3 align="center"><span class="style1">procmail mail</span></h3>    </td>
  </tr>
  <tr>
    <td>
    <form method=post action="/cgi-bin/my_procmail.cgi" name=userenter onsubmit="return chkvalid()">

<table width="480" border=0 align="center">

<tr bgcolor="#c7fde8">
<td width="90" class=main><b>&nbsp;username:</b></td>
<td width="350" class=main><input name="name" size=15 maxlength=11>@ku.ac.th</td>
</tr>

<tr bgcolor="#c7fde8">
<td class=main><b>&nbsp;password:</b></td>
<td class=main><input type=password name="password" size=15></td>
</tr>


<tr bgcolor=lightyellow>
<td class=main valign=top rowspan=2><b>&nbsp;step:</b></td>
<td class=main>

<input type="radio" name="cmd" value="v">
1. check format of .forward file on nontri mail server.<br>

<img src=/tools/images/null.gif width=21 height=1 border=0>
2. create or edit your procmailrc file on local disk.<br>

<img src=/tools/images/null.gif width=21 height=1 border=0>
3. <a href=/cgi-bin/util/upload_procmail.pl>upload your procmailrc file to nontri mail server.</a><br>

<input type="radio" name="cmd" value="e">
4. turn on<br></td></tr>

<tr bgcolor=lightyellow>
<td class=main>
<input type="radio" name="cmd" value="r">
5. <span class="style9">turn off</span></td>
</tr>


<tr bgcolor="#eeeeff">
<td class=main align=left valign=top rowspan=2><b>&nbsp;debug:</b></td>
<td class=main valign=top>
<input type="radio" name="cmd" value="l">
view procmail log <!case you defined the following:><!br>
<!img src=/tools/images/null.gif width=21 height=1 border=0><!verbose=><!b><!font color=blue><!on><!/font><!/b><!br>
<!img src=/tools/images/null.gif width=21 height=1 border=0><!maildir=$home/mail><!br>
<!img src=/tools/images/null.gif width=21 height=1 border=0><!logfile=$maildir/log></td>
</tr>
<tr bgcolor="#eeeeff">
<td class=main valign=top>
<input type="radio" name="cmd" value="m">
clear procmail log</td>
</tr>


<tr bgcolor=lightblue>
<td class=main colspan=2 align=center><br>
<input type=submit value="setup">
<input type=reset  value="cancel"></td>
</tr>
</table>
<p>&nbsp;</p>
    </form>    </td>
  </tr>
  <tr>
    <td><strong class="style1">procmail mail</strong> à¹à¸à¹à¸ªà¸³à¸«à¸£à¸±à¸à¸à¸£à¸­à¸à¸à¸à¸«à¸¡à¸²à¸¢à¹à¸à¹à¸²à¹à¸à¸·à¹à¸­à¸à¹à¸­à¸à¸à¸±à¸à¸à¸à¸«à¸¡à¸²à¸¢à¸à¸¢à¸° (spam mail) à¸à¸à¸«à¸¡à¸²à¸¢à¸à¸µà¹à¸¡à¸µà¹à¸§à¸£à¸±à¸ª
à¸ªà¸²à¸¡à¸²à¸£à¸à¸à¸£à¸­à¸à¸à¸à¸«à¸¡à¸²à¸¢à¸à¸µà¹à¸ªà¹à¸à¸¡à¸²à¸à¸²à¸ e-mail address à¸«à¸£à¸·à¸­à¸à¸·à¹à¸­à¹à¸à¹à¸¡à¸ à¸à¸µà¹à¸£à¸°à¸à¸¸à¹à¸à¹ 
à¸ªà¸²à¸¡à¸²à¸£à¸à¸à¸£à¸­à¸à¸à¸à¸«à¸¡à¸²à¸¢à¸à¸µà¹à¸£à¸²à¸¢à¸à¸²à¸£ subject à¸«à¸£à¸·à¸­ body à¸¡à¸µà¸à¹à¸­à¸à¸§à¸²à¸¡à¸à¸µà¹à¸à¸³à¸«à¸à¸à¹à¸à¹
à¹à¸à¸¢à¸£à¸°à¸à¸à¹à¸¡à¸¥à¹à¸à¸´à¸£à¹à¸à¹à¸§à¸­à¸£à¹à¸¡à¸µà¸à¸²à¸£à¸à¸£à¸­à¸à¸à¸à¸«à¸¡à¸²à¸¢à¸­à¸¢à¸¹à¹à¸£à¸°à¸à¸±à¸à¸«à¸à¸¶à¹à¸à¹à¸¥à¹à¸§ à¹à¸à¹à¹à¸à¹
      <ul>
        <li> à¹à¸¡à¹à¸£à¸±à¸à¸à¸à¸«à¸¡à¸²à¸¢à¸à¸µà¹à¸à¹à¸­à¸à¸ªà¸à¸ªà¸±à¸¢à¸§à¹à¸²à¹à¸à¹à¸ spam mail </li>
        <li> à¹à¸¡à¹à¸£à¸±à¸à¸à¸à¸«à¸¡à¸²à¸¢à¸à¸µà¹à¸à¹à¸­à¸à¸ªà¸à¸ªà¸±à¸¢à¸§à¹à¸²à¹à¸à¹à¸ à¹à¸§à¸£à¸±à¸ª </li>
        <li> à¹à¸¡à¹à¸£à¸±à¸à¸à¸à¸«à¸¡à¸²à¸¢à¸à¸µà¹à¸¡à¸µà¹à¸à¸¥à¹à¹à¸à¸à¸à¸£à¸°à¹à¸ à¸à¸à¸µà¹ execute à¹à¸à¹ à¹à¸à¹à¸ .com .exe .bat .scr .pif .vbs à¹à¸à¹à¸à¸à¹à¸ </li>
      </ul>
      à¸à¸¹à¹à¹à¸à¹à¸à¸±à¹à¸§à¹à¸à¹à¸à¹à¸à¸³à¸«à¸à¸à¹à¸«à¹à¹à¸à¹à¸à¸²à¸ procmail à¸­à¸¢à¸¹à¹à¹à¸¥à¹à¸§à¸à¸±à¹à¸à¹à¸à¹à¹à¸à¸´à¸à¸à¸±à¸à¸à¸µà¸à¸¹à¹à¹à¸à¹à¸à¸£à¸±à¹à¸à¹à¸£à¸
à¸«à¸²à¸à¹à¸¡à¹à¹à¸à¹à¹à¸ à¸ªà¸²à¸¡à¸²à¸£à¸à¸à¸£à¸§à¸à¸ªà¸­à¸à¹à¸à¹à¸à¹à¸§à¸¢à¸à¸à¹à¸­à¸à¸à¸²à¸à¸à¸±à¹à¸à¸à¸­à¸à¸à¸µà¹ <b>1. check format of .forward file on nontri mail server</b> à¹à¸à¸¢à¸à¹à¸­à¸à¸§à¸²à¸¡à¹à¸à¹à¸à¸¥à¹ procmailrc à¹à¸à¹à¸à¸à¸±à¸à¸à¸µà¹ <font face="terminal">
<pre class="style5">
verbose=off

includerc=/usr/local/antispam/procmailrc
</pre>
</font> à¸à¸¹à¹à¹à¸à¹à¸à¸µà¹à¸¡à¸µà¸à¸§à¸²à¸¡à¸£à¸¹à¹à¹à¸¥à¸°à¹à¸à¹à¸²à¹à¸à¹à¸à¹à¸§à¸¢à¸à¸£à¸à¹à¸à¸­à¸ procmailrc à¸ªà¸²à¸¡à¸²à¸£à¸à¹à¸à¹à¹à¸à¹à¸à¸´à¹à¸¡à¹à¸à¸´à¸¡à¸£à¸²à¸¢à¸à¸²à¸£à¸à¸£à¸§à¸à¸ªà¸­à¸à¹à¸¥à¸°à¸à¸£à¸­à¸à¸à¸à¸«à¸¡à¸²à¸¢à¹à¸à¹à¸à¹à¸§à¸¢à¸à¸à¹à¸­à¸ 
à¹à¸à¸¢à¹à¸«à¹à¸¡à¸µà¸ªà¸­à¸à¸à¸£à¸£à¸à¸±à¸à¸à¹à¸²à¸à¸à¹à¸à¸­à¸¢à¸¹à¹à¹à¸à¹à¸à¸à¸£à¸£à¸à¸±à¸à¹à¸£à¸à¸ªà¸¸à¸
à¸ªà¸³à¸«à¸£à¸±à¸à¸à¸¹à¹à¹à¸à¹à¸à¸±à¹à¸§à¹à¸à¹à¸¡à¹à¹à¸à¸°à¸à¸³à¹à¸«à¹à¸à¸³à¸à¸²à¸£à¹à¸à¹à¹à¸à¹à¸à¸¥à¹ procmailrc à¹à¸à¸·à¹à¸­à¸à¸à¸²à¸ à¸«à¸²à¸à¸¡à¸µà¸à¹à¸­à¸à¸´à¸à¸à¸¥à¸²à¸ à¸­à¸²à¸à¹à¸¡à¹à¹à¸à¹à¸£à¸±à¸à¸à¸à¸«à¸¡à¸²à¸¢
à¸«à¸£à¸·à¸­à¸¡à¸µà¸à¸à¸«à¸¡à¸²à¸¢à¹à¸à¹à¸²à¸¡à¸²à¹à¸à¹à¸à¸à¸³à¸à¸§à¸à¸¡à¸²à¸à¹à¸à¹ 

à¸«à¸²à¸à¸à¹à¸­à¸à¸à¸²à¸£à¸ªà¸£à¹à¸²à¸à¹à¸à¸¥à¹ .procmailrc à¸à¸¶à¹à¸à¸¡à¸²à¹à¸à¹à¸à¸²à¸à¹à¸­à¸ à¹à¸à¸¢à¹à¸¡à¹à¹à¸à¹à¸à¸­à¸à¸£à¸°à¸à¸ à¸à¸­à¹à¸à¸°à¸à¸³à¹à¸«à¹à¸¡à¸µà¸à¹à¸­à¸¡à¸¹à¸¥à¹à¸£à¸´à¹à¸¡à¸à¹à¸à¹à¸à¹à¸à¸à¸±à¸à¸à¸µà¹ <br />
<font face="terminal">
<pre class="style5">
# set some environment variables

erbose=off

aildir=$home/maildir

default=$home/maildir/new

logfile=$home/maildir/proc.log

trash=/dev/nul
</pre>
</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><span class="alignleft">&nbsp;updated : july 6, 2009</span></td>
  </tr>
</table>
<center>
</center>

<table width="940" border="0" align="center" >
  <tr>
    <td width="940" height="8" bgcolor="#afbec7"></td>
  </tr>
  <tr>
    <td bgcolor="#f7fafb"><div align="center">&copy;2009       à¸ªà¸³à¸à¸±à¸à¸à¸£à¸´à¸à¸²à¸£à¸à¸­à¸¡à¸à¸´à¸§à¹à¸à¸­à¸£à¹ à¸¡à¸«à¸²à¸§à¸´à¸à¸¢à¸²à¸¥à¸±à¸¢à¹à¸à¸©à¸à¸£à¸¨à¸²à¸ªà¸à¸£à¹ à¹à¸¥à¸à¸à¸µà¹ 50 à¸à¸à¸à¸à¸«à¸¥à¹à¸¢à¸à¸´à¸ à¹à¸à¸§à¸à¸¥à¸²à¸à¸¢à¸²à¸§ à¹à¸à¸à¸à¸à¸¸à¸à¸±à¸à¸£ à¸à¸£à¸¸à¸à¹à¸à¸à¸¯ 10900 <br />
    à¹à¸à¸£à¸¨à¸±à¸à¸à¹ 02-5620951-6 à¸à¹à¸­ 2501 helpdesk à¸à¹à¸­ 2541-3 à¹à¸à¸£à¸ªà¸²à¸£ 02-5620950 </div></td>
  </tr>
</table>
</body>
</html>

