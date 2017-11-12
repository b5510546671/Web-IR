<!doctype html>
<html lang="en">
<head>
  <title>สำนักส่งเสริมและฝึกอบรม มหาวิทยาลัยเกษตรศาสตร์</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">				   
     <link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body id="mypage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div id="news" class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">eto ku</a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="nav navbar-nav navbar-right">
     	<li><a href="index.php#mypage">หน้าหลัก</a></li>
        <li><a href="index.php#about">เกี่ยวกับ eto</a></li>
        <li><a href="index.php#services">บริการ</a></li>
        <li><a href="index.php#download">ดาวน์โหลด</a></li>
        <li><a href="index.php#news_event">ข่าวและกิจกรรม</a></li>
        <li><a href="index.php#contact">ติดต่อ</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
<!-- container (about section) -->
 
<div class="container bg-grey border-content">
<div id="news_event">
<div align="right">
        <button class="btn btn-warning btn-sm" onclick="window.history.back();">back</button>
        </div>
<h1><img src="images/logo_eto.png"></h1>
<hr style="margin-bottom:5px;">
<div class="fb-share-button" data-href="news.php?content=" data-type="button_count"></div>
<h3></h3>
	<p><span class="glyphicon glyphicon-heart logo-mini"></span>ดูแล้ว <b>0</b> ครั้ง  
	<span class="glyphicon glyphicon-calendar logo-mini"></span> ลงวันที่ <b></b>    </p>
  <p align="center"><img src="images/news/" class="img-thumbnail img-responsive"></p>
  <p></p>
  
</div>

</div>
<br>
<div id="mycarousel" class="carousel slide text-center" data-ride="carousel">
  		
    <!-- wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    	
    
      <div class="item active" align="center">
      <img src="images/banner_dla2560.png">
<!--
        <h2>"this company is the best. i am so happy with the result!"<br><span>michael roe, vice president, comment box</span></h2>-->
      </div>
      <div class="item"  align="center">
      <img src="images/banner_thailand4.png">
      </div>
      
      <div class="item"  align="center">
      <img src="images/banner_voc2560.png">
        <!--<h2>"one word... wow!!"<br><span>john doe, salesman, rep inc</span></h2>-->
      </div>
      <div class="item"  align="center">
      <img src="images/banner_hrd2560.png">
      
       <!-- <h2>"could i... be any more happy with this company?"<br><span>chandler bing, actor, friendsalot</span></h2>-->
      </div>
       <div class="item"  align="center">
      <img src="images/banner_kuc2560.png">
      
       <!-- <h2>"could i... be any more happy with this company?"<br><span>chandler bing, actor, friendsalot</span></h2>-->
      </div>
    </div>

    <!-- left and right controls -->
    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">previous</span>
    </a>
    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">next</span>
    </a>
     <!-- indicators -->
    <ol class="carousel-indicators">
      <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mycarousel" data-slide-to="1"></li>
      <li data-target="#mycarousel" data-slide-to="2"></li>
      <li data-target="#mycarousel" data-slide-to="3"></li>
      <li data-target="#mycarousel" data-slide-to="4"></li>
    </ol>
  </div>
<!-- container (contact section) -->
<!--  end container (contact section) -->


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</body>
</html>
