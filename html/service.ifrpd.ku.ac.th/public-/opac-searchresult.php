ï»¿ï»¿ï»¿<!doctype html public "-//w3c//dtd html 4.01 transitional//en">

<html>
<head>
<title>koha: opac catalogue search</title>
<meta http-equiv="content-language" content="th">
<meta http-equiv="content-type" content="text/html; charset=tis-620">
<!-- <link rel="stylesheet" type="text/css" href="includes/opac.css"> -->
<link rel="stylesheet" type="text/css" href="includes/style.css">
<script language="javascript" src="./overlib421/overlib.js"></script>
<style type="text/css">
td {font-size: 12pt; font-family: tahoma;}
#header2 {
height: 230px;
width: 1000px;
float:center;
background: #ffffff url(./images/titlex.png ) no-repeat center top;
/*padding: 0px 0px 20px 0px;*/
}


</style>


<script src="./jquery-1.2.6.min.js"></script>
  
  <script>
 // $(document).ready(function() {
 function chkinputx(){
  var chkvalue=$("#anyword").attr("value", this.value );
		if(chkvalue!=""){
			
			$(".chkinput").each(function() {
				$(this).attr("disabled","disabled");
				$(this).attr("value","");
			})
		}else{
				$(".chkinput").each(function() {
				$(this).attr("disabled","");
			})
		}
	}
  //);
  function chkinput(){
var chkvalue=$("#subject").attr("value", this.value );
    if(chkvalue!=""){
		//alert("zz"+chkvalue);
		document.getelementbyid("order_f").value="biblio.biblionumber";
		document.getelementbyid("order_f").disabled=true;
	}else{
	//alert("zzz" + chkvalue);
		document.getelementbyid("order_f").disabled=false;
	}
	
}
  </script>


<script language="javascript" type="text/javascript">


function myhighlight()
{
    //alert(document.getelementbyid("keyword").value);
    var xx="";
    var bb="";
    xx = '';   bb = '     ';        bb=trim(bb);
       // alert(xx);
        //alert(bb);
       //alert("bb-"+bb+"-");
        if(xx!=""){
            highlightsearchterms(xx);   
         //alert(xx);
        }
        else{
            if(bb!=""){
                highlightsearchterms(bb);   
                //alert("bb-"+bb+"-");
            }
        }
        
    /*if(document.getelementbyid("keyword").value){
        alert(a);
        highlightsearchterms(a);
     }*/
}
function ltrim(str){
    if (str==null){return null;}
    for(var i=0;str.charat(i)==" ";i++);
    return str.substring(i,str.length);
}
function rtrim(str){
    if (str==null){return null;}
    for(var i=str.length-1;str.charat(i)==" ";i--);
    return str.substring(0,i+1);
}
function trim(str){
    return ltrim(rtrim(str));
} 
/*
 * this is the function that actually highlights a text string by
 * adding html tags before and after all occurrences of the search
 * term. you can pass your own tags if you'd like, or if the
 * highlightstarttag or highlightendtag parameters are omitted or
 * are empty strings then the default <font> tags will be used.
 */

 function dohighlight(bodytext, searchterm, highlightstarttag, highlightendtag) 
{
  // the highlightstarttag and highlightendtag parameters are optional
  if ((!highlightstarttag) || (!highlightendtag)) {
    highlightstarttag = "<font style='color:#ff0033;background-color:#e6ff80';>";
    highlightendtag = "</font>";
  }
  
  // find all occurences of the search term in the given text,
  // and add some "highlight" tags to them (we're not using a
  // regular expression search, because we want to filter out
  // matches that occur within html tags and script blocks, so
  // we have to do a little extra validation)
  var newtext = "";
  var i = -1;
  var lcsearchterm = searchterm.tolowercase();
  var lcbodytext = bodytext.tolowercase();
    
  while (bodytext.length > 0) {
    i = lcbodytext.indexof(lcsearchterm, i+1);
    if (i < 0) {
      newtext += bodytext;
      bodytext = "";
    } else {
      // skip anything inside an html tag
      if (bodytext.lastindexof(">", i) >= bodytext.lastindexof("<", i)) {
        // skip anything inside a <script> block
        if (lcbodytext.lastindexof("/script>", i) >= lcbodytext.lastindexof("<script", i)) {
          newtext += bodytext.substring(0, i) + highlightstarttag + bodytext.substr(i, searchterm.length) + highlightendtag;
          bodytext = bodytext.substr(i + searchterm.length);
          lcbodytext = bodytext.tolowercase();
          i = -1;
        }
      }
    }
  }
  
  return newtext;
}


/*
 * this is sort of a wrapper function to the dohighlight function.
 * it takes the searchtext that you pass, optionally splits it into
 * separate words, and transforms the text on the current web page.
 * only the "searchtext" parameter is required; all other parameters
 * are optional and can be omitted.
 */
function highlightsearchterms(searchtext, treatasphrase, warnonfailure, highlightstarttag, highlightendtag)
{
  // if the treatasphrase parameter is true, then we should search for 
  // the entire phrase that was entered; otherwise, we will split the
  // search string so that each word is searched for and highlighted
  // individually
  
  if (treatasphrase) {
    searcharray = [searchtext];
    //alert("xxx"+searchtext + "xx");
  } else {
    searcharray = searchtext.split(" ");
    //alert("xxx2"+searchtext + "xx2");
  }
  
  if (!document.body || typeof(document.body.innerhtml) == "undefined") {
    if (warnonfailure) {
      alert("sorry, for some reason the text of this page is unavailable. searching will not work.");
    }
    return false;
  }
  
  var bodytext = document.body.innerhtml;
  for (var i = 0; i < searcharray.length; i++) {
    //alert(searcharray[i].length);
	if(searcharray[i].length>2){
		bodytext = dohighlight(bodytext, searcharray[i], highlightstarttag, highlightendtag);
	}
  }
  
  document.body.innerhtml = bodytext;
  return true;
}

// end hiding -->
</script>

</head>
<!--<body onload="myhighlight();"  bgcolor="#333333">
<table bgcolor="#ffffff" width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    	<div id="wrap"><div id="header2"></div></div>
	</td>
  </tr>
  <tr>
  		<td height="10">
  		</td>
  </tr>
  <tr>
    <td align="center">
    			<div style="background-image:url(images/liber3.png);width:1000px;">
		<a href="../public/opac-search.php" title="home" ><img src="images/search.png"  border="0" ></a>
		<a href="../cgi-bin/koha/opac-user.pl" title="search" ><img src="images/log in.png"  border="0"></a>
		<a href="../cgi-bin/koha/opac-user.pl" title="search" ><img src="images/resource.png"  border="0"></a>
	</div> 
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
-->
<!--<body onload="myhighlight();" style="background-image:url('./images/background.png');width:1024px;height:768px;">-->
<body onload="myhighlight();">
<div align="center">
<div id="wrap">
	<a href="http://service.ifrpd.ku.ac.th/public" ><div id="header2"></div></a>
	<div style="background-image:url('./images/liber3.png');width:1000px;">
<!-- menus -->
<div align="center">
		<!--<div style="width:900" >
		<img src="images/liber1.png"  border="0">
		<!--</div>-->
	<div style="background-image:url(images/liber3.png);width:1000px;">
		<a href="../public/opac-search.php?img=" title="home" ><img src="images/search.png"  border="0" ></a>
		<a href="../cgi-bin/koha/opac-user.pl?img=" title="search" ><img src="images/log in.png"  border="0"></a>
		<a href="../public/opac-resultnewbook.php?img=" title="search" ><img src="images/resource.png"  border="0"></a>
		<a href="../../public/opac-searchresult.php?typepdf=e-book&act=search&order_f=biblio.biblionumber&order_value=desc&list=browse"><img src="images/ebook.png" border="0" /></a>
	</div>    
</div>à¸à¸£à¸¸à¸à¸²à¸£à¸°à¸à¸¸à¹à¸à¸·à¹à¸­à¸à¹à¸à¹à¸à¸à¸²à¸£à¸à¹à¸<br><font color=red><a href ='opac-search.php'>à¸à¹à¸à¸«à¸²à¹à¸«à¸¡à¹</a></font>