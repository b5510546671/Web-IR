<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
body,td,th {
	font-family: ms sans-serif;
	font-size: 14px;
}

-->
</style>
<body bgcolor="#ffffff" marginheight=0 marginwidth=0 leftmargin=0 topmargin=0>
<? 
	$p  = $_get[p];
	$pt = $_get[pt];
	$pm = ceil($pt/16); 
	$path = $_get[path];
	$ref = $_get[ref];
?>
<table width=100% height=100% align=middle valign=middle>
<tr><td align=middle valign=middle>
<table cellpadding=10 cellspacing=10 border=0>
<tr>
<td width="10%" valign=middle>
<? 
if($p==1){ echo "&nbsp;"; }
else {
	$px =$p-1;
	echo "<a href='index_p.php?p=$px&pt=$pt&path=$path&ref=$ref'> prev </a>";
}
?>
</td>
<td valign=top>
<table> 
<? for($i=16*$p/4-3;$i<=16*$p/4; $i++) {?> 
<tr>
<? for($n=4*$i-3;$n<=4*$i; $n++) {?>
<td colspan="3" align=middle>
<table cellpadding=0 cellspacing=0 border=0 bgcolor="#ffffff" width="180">
<tr>
<? if($n<=$pt){ ?>
<td valign=top align=left>
<a name=1 href="zoom_p.php?n=<?=$n?>&p=<?=$p?>&pt=<?=$pt?>&path=<?=$path?>&ref=<?=$ref?>"><img src="images/<?=$path?>/thumbnails/<?="$n".'.jpg'?>" border=0 style="border:0pt solid white" alt="<?=$n?>"></a><br>
</td>
<td valign=top background="border/wh_rt.gif">
<img src="border/wh_top_rt.gif"><br>
</td>
</tr>
<tr>
<td width="180" background="border/wh_bot.gif">
<img src="border/wh_bot_lt.gif"><br>
</td>
<td valign=top>
<img src="border/wh_bot_corner.gif"><br>
</td>
<? }else{ ?>
<td>&nbsp;</td>
<? } ?>
</tr>
</table>
</td>
<? } ?>
</tr>
<? } ?>
</table>

<table width="100%">
<tr>
	<td>˹�ҷ�� :
<?
	for($pn=1;$pn<=$pm; $pn++) { 
		if ($pn==$p){
			echo "<font color='#ff0000'><b>( $pn )</b></font>";
		}else{
			echo "<a href='index_p.php?p=$pn&pt=$pt&path=$path&ref=$ref'>[ $pn ]</a>";
		}
	}
?>
</td>
	<td width="15%"><div align="right"><? echo ("ref : $ref"); ?>&nbsp;</div>
</td>
</tr>
</table>

</td>
<td width="10%" valign=middle>
<? 
if($p>$pm-1){ echo "&nbsp;"; }
else {
	$px =$p+1;
	echo "<a href='index_p.php?p=$px&pt=$pt&path=$path&ref=$ref'> next </a>";
}
?>
</td>
</tr>
</table>
</td>
</tr>
 </table>
<div align="center"><a href="http://eduserv.ku.ac.th/index.php" target="_parent" class="style12"><img src="http://eduserv.ku.ac.th/images/edu_btn.gif" border="0" align="top" /></a></div>&nbsp;
</body>