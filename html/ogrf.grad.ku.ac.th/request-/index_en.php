<!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>online graduate request forms</title>
<link rel="stylesheet" href="style.css" type="text/css">

<script language=javascript>
function check()
{
	chk1=document.getelementbyid('stu_id');
	chk2=document.getelementbyid('passport_number');
	
	if (chk1.value=="")
	{
		alert("please enter student id");
		chk1.focus();
		return false;
	}
	else if (chk2.value=="")
	{
		alert("please enter passport number");
		chk2.focus();
		return false;
	}

}
</script>
<script language="javascript">
function numbers(e){
	var keynum;
	var keychar;
	var numcheck;
	if(window.event) {
		keynum = e.keycode;
	}
	else if(e.which) {
		keynum = e.which;
	}
	if(keynum == 13 || keynum == 8 || typeof(keynum) == "undefined"){
		return true;
	}
	keychar= string.fromcharcode(keynum);
	numcheck = /^[0-9]$/;
	return numcheck.test(keychar);}
</script>

</head>

<body class="onecolfixctrhdr">

<div id="container">
  <div id="header">
  <img src="images/ogrf_b.jpg" width="780" height="90" />
<!-- end #header --></div>
  <div id="maincontent">
    <h3><br>online graduate request forms</h3>
    <p> the system can be used for a request of certification of graduate student status, certification of graduate program completion, or graduation approval pending, only.
    <form id="form1" name="form1" method="post" action="login_en.php" enctype="multipart/form-data" onsubmit="return check();">
    <strong>please complete your information in the fields below</strong>
      <table width="650" border="0" cellspacing="3" cellpadding="3" align="center">
      <tr>
        <td width="54%" align="right">studentâs id number  : </td>
        <td width="46%"><input type="text" name="stu_id" id="stu_id" size="10" maxlength="10" onkeypress='return numbers(event);' /></td>
      </tr>
      <tr>
        <td align="right">studentâs passport number:<br />
          changing of studentâs passport number requires a copy of new passport and <br />
          a completion of general request form (gs01) to be submitted at the graduate school. </td>
        <td><input type="password" name="passport_number" id="passport_number" size="10" maxlength="12"/></td>
      </tr>
      <tr>
        <td align="right">date of birth : </td>
        <td>
          <select name="date_in" id="date_in">
<option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28" selected="selected" >28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>          </select>
          <select name="month_in" id="month_in">
<option value="à¸¡.à¸.">january</option><option value="à¸.à¸.">february</option><option value="à¸¡à¸µ.à¸.">march</option><option value="à¹à¸¡.à¸¢.">april</option><option value="à¸.à¸.">may</option><option value="à¸¡à¸´.à¸¢.">june</option><option value="à¸.à¸.">july</option><option value="à¸ª.à¸." selected="selected" >august</option><option value="à¸.à¸¢.">september</option><option value="à¸.à¸.">october</option><option value="à¸.à¸¢.">november</option><option value="à¸.à¸.">december</option>          </select>
          <select name="year_in" id="year_in">
<option value="2557">2014</option><option value="2556">2013</option><option value="2555">2012</option><option value="2554">2011</option><option value="2553">2010</option><option value="2552">2009</option><option value="2551">2008</option><option value="2550">2007</option><option value="2549">2006</option><option value="2548">2005</option><option value="2547">2004</option><option value="2546">2003</option><option value="2545">2002</option><option value="2544">2001</option><option value="2543">2000</option><option value="2542">1999</option><option value="2541">1998</option><option value="2540">1997</option><option value="2539">1996</option><option value="2538">1995</option><option value="2537">1994</option><option value="2536">1993</option><option value="2535">1992</option><option value="2534">1991</option><option value="2533">1990</option><option value="2532">1989</option><option value="2531">1988</option><option value="2530">1987</option><option value="2529">1986</option><option value="2528">1985</option><option value="2527">1984</option><option value="2526">1983</option><option value="2525">1982</option><option value="2524">1981</option><option value="2523">1980</option><option value="2522">1979</option><option value="2521">1978</option><option value="2520">1977</option><option value="2519">1976</option><option value="2518">1975</option><option value="2517">1974</option><option value="2516">1973</option><option value="2515">1972</option><option value="2514">1971</option><option value="2513">1970</option><option value="2512">1969</option><option value="2511">1968</option><option value="2510">1967</option><option value="2509">1966</option><option value="2508">1965</option><option value="2507">1964</option><option value="2506">1963</option><option value="2505">1962</option><option value="2504">1961</option><option value="2503">1960</option><option value="2502">1959</option><option value="2501">1958</option><option value="2500">1957</option><option value="2499">1956</option><option value="2498">1955</option><option value="2497">1954</option><option value="2496">1953</option><option value="2495">1952</option><option value="2494">1951</option><option value="2493">1950</option><option value="2492">1949</option><option value="2491">1948</option><option value="2490">1947</option><option value="2489">1946</option><option value="2488">1945</option><option value="2487">1944</option><option value="2486">1943</option><option value="2485">1942</option><option value="2484">1941</option><option value="2483">1940</option><option value="2482">1939</option><option value="2481">1938</option><option value="2480">1937</option><option value="2479">1936</option><option value="2478">1935</option><option value="2477">1934</option><option value="2476">1933</option><option value="2475">1932</option>          </select></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="submit" /></td>
      </tr>
    </table>
    </form>
	<br />
	<p>
    <table width="700" border="1" cellspacing="1" cellpadding="5" align="center">
      <tr>
        <td align="left"><font color="#ff0000"><u><strong>instructions</strong></u></font></td>
      </tr>
      <tr>
        <td>
        	<table cellpadding="3">
            	<tr>
                	<td>- the online graduate request forms system is for <font color="#ff0000"><u>use by students whose id begins with 48 or above. </u></font>
                    </td>
				</tr>
                <tr>
                	<td>- students must <font color="#ff0000"><u>print the online graduate request forms report</u></font> in order to pay the fee and receive the requested documents. ***
                  </td>
				</tr>
                <tr>
                	<td>- students can check the status of the online graduate request forms. the status must be reported as <font color="#ff0000"><u>âapproved. students can receive their requested documentsâ</u></font> prior to contact officers receiving studentâs requested documents.
                  </td>
				</tr>
                <tr>
                	<td>- studentâs must prepare <font color="#ff0000"><u>1 inch photographs</u></font> for posting on each document. studentâs photographs must show them dressed in proper attire (neckties for male students, and proper shirts with a collar for female students. no t-shirts are allowed).
                  </td>
				</tr>
                <tr>
                	<td>- process of receipt of requested documents at the graduate school: 
                      <br />
                      1. pay fees
                      <br />
                  2. submit photographs and present studentâs id card or studentâs passport to officers. </td>
				</tr>
                <tr>
                	<td>- issuance of online requested documents takes <font color="#ff0000"><u>	two (2) working days, after the day of document submittal</u></font>. 
                  </td>
				</tr>
                <tr>
                	<td>- students can receive online requested documents only on <font color="#ff0000"><u>official days</u></font> (monday-friday, 08.30-16.30).
                  </td>
				</tr>
                <tr>
                	<td>- if students  encounter problems or inconveniences, please contact mr. passapong at 02-942-8445  ext. 415 or mr. sorawut at 02-942-8445 ext. 206. â 
                    </td>
				</tr>
			</table>
            </td>
      </tr>
    </table>
    <br />
	  <!-- end #maincontent -->
	</p>
</div>
  <div id="footer">
    <p>the  graduate school, kasetsart university<br />
      p.o. box 1104,  chatuchak, bangkok 10903, thailand<br />
telephone: +662-942-8445-9,  e-mail: fgra@ku.ac.th</p>
<!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>