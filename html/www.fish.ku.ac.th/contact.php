<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="html5templatesdreamweaver.com">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- le html5 shim, for ie6-8 support of html5 elements -->
    <!--[if lt ie 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt ie 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if ie 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="http://fonts.googleapis.com/css?family=syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=source+sans+pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=maven+pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=oxygen" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=open+sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />	
		
	<!-- contact form -->	
	<script src="email/validation.js" type="text/javascript"></script>
</head>
<body id="pagebody">

<div id="divboxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divpanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">					

                    <!--edit site name and slogan here-->
					<div id="divlogo">
                        <a href="index.html" id="divsitetitle">your name</a><br />
                        <a href="index.html" id="divtagline">your tag line here</a>
                    </div>

	            </div>
            </div>   
            <div class="row-fluid">
                <div class="span12">				
                    <div class="centered_menu">                      
                    <!--edit navigation menu here-->
					<div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            navigation <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown">
                                    <a href="index.html" class="dropdown-toggle">home <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="index-alt.html" class="dropdown-toggle">home 2</a>                                            
                                        </li>                                        
                                    </ul>
                                </li>								
								<li class="dropdown">
                                    <a href="about.html" class="dropdown-toggle">about <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="about-alt.html" class="dropdown-toggle">about 2</a>                                            
                                        </li>                                        
                                    </ul>
                                </li>
								<li><a href="services.html">services</a></li>
                                <li class="dropdown">
                                    <a href="page.html" class="dropdown-toggle">pages <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle">dropdown item &nbsp;&raquo;</a>
                                            <ul class="dropdown-menu sub-menu">
                                                <li><a href="#">dropdown item</a></li>
                                                <li><a href="#">dropdown item</a></li>
                                                <li><a href="#">dropdown item</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="wide.html">full page</a></li>
                                        <li><a href="2-column.html">2 column</a></li>
                                        <li><a href="3-column.html">3 column</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="gallery.html" class="dropdown-toggle">gallery <b class="caret"></b></a>
                                    <ul class="dropdown-menu">                                        
                                        <li><a href="3-portfolio.html">3 portfolio</a></li>
                                        <li><a href="portfolio-item.html">portfolio item</a></li>
                                        <li><a href="video-page.html">video page</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="contact.php">contact</a></li>
                            </ul>
                        </div>
                    </div>                     
                    </div>
	            </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentinnerseparator"></div>
                </div>
            </div>
    </div>

    <div class="contentarea">

        <div class="divpanel notop page-content">

            <div class="breadcrumbs">
                <a href="index.html">home</a> &nbsp;/&nbsp; <span>contact us</span>
            </div>
            
			<!--edit main content area here-->
            <div class="row-fluid">
                <div class="span8" id="divmain">

                    <h1>contact us</h1>
                   	<h3 style="color:#ff6633;"></h3>
					<hr>
			<!--start contact form -->		                                                
<form name="enq" method="post" action="email/" onsubmit="return validation();">
  <fieldset>
    
	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="name" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="email" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="comments"></textarea>
    <div class="actions">
	<input type="submit" value="send your message" name="submit" id="submitbutton" class="btn btn-info pull-right" title="click here to submit your message!" />
	</div>
	
	</fieldset>
</form>  				 
			<!--end contact form -->											 
                </div>
				
			<!--edit sidebar content here-->	
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">contact information</h3>
                    <p>
                        <address><strong>your company, inc.</strong><br />
                        address<br />
                        city, state, zip<br />
                        <abbr title="phone">p:</abbr> (123) 456-7890</address> 
                        <address>  <strong>email</strong><br />
                        <a href="mailto:#">first.last@gmail.com</a></address>  
                    </p>     
                     
					 <!-- start side categories -->
        <h4 class="sidebox-title">sidebar categories</h4>
        <ul>
          <li><a href="#">quisque diam lorem sectetuer adipiscing</a></li>
          <li><a href="#">interdum vitae, adipiscing dapibus ac</a></li>
          <li><a href="#">scelerisque ipsum auctor vitae, pede</a></li>
          <li><a href="#">donec eget iaculis lacinia non erat</a></li>
          <li><a href="#">lacinia dictum elementum velit fermentum</a></li>
          <li><a href="#">donec in velit vel ipsum auctor pulvinar</a></li>
        </ul>
					<!-- end side categories -->
                    					
                    </div>
					
					
                    
                </div>
			<!--/end sidebar content-->
				
				
            </div>

            <!--edit footer here-->
			<div id="footerinnerseparator"></div>
        </div>
    </div>

    <div id="footerouterseparator"></div>

    <div id="divfooter" class="footerarea shadow">

        <div class="divpanel">

            <div class="row-fluid">
                <div class="span3" id="footerarea1">
                
                    <h3>about company</h3>

                    <p>lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                    
                    <p> 
                        <a href="#" title="terms of use">terms of use</a><br />
                        <a href="#" title="privacy policy">privacy policy</a><br />
                        <a href="#" title="faq">faq</a><br />
                        <a href="#" title="sitemap">sitemap</a>
                    </p>

                </div>
                <div class="span3" id="footerarea2">

                    <h3>recent blog posts</h3> 
                    <p>
                        <a href="#" title="">lorem ipsum is simply dummy text</a><br />
                        <span style="text-transform:none;">2 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">duis mollis, est non commodo luctus</a><br />
                        <span style="text-transform:none;">5 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">maecenas sed diam eget risus varius</a><br />
                        <span style="text-transform:none;">19 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">view all posts</a>
                    </p>

                </div>
                <div class="span3" id="footerarea3">

                    <h3>sample content</h3> 
                    <p>lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry’s standard dummy text ever since the 1500s. 
                        lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry’s standard dummy text ever since the 1500s.
                    </p>

                </div>
                <div class="span3" id="footerarea4">

                    <h3>get in touch</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">phone:</span>
                        <br />
                        (123) 456 7890 / 456 7891                                                                      
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">email:</span>
                        <br />
                        <a href="mailto:info@yourdomain.com" title="email">info@yourdomain.com</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">address:</span>
                        <br />
                        123 street<br />
                        12345 city, state<br />
                        country
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
             <div class="row-fluid">
            <div class="span12">
            <p class="copyright"> 
            copyright © 2014 your company. all rights reserved.
            </p>

            <div class="social_bookmarks">                    
                <a href="#"><div class="icon_twitter"></div></a>
                <a href="#"><div class="icon_facebook"></div></a>
                <a href="#"><div class="icon_google"></div></a>
                <a href="#"><div class="icon_pinterest"></div></a>                   
            </div>
            </div>
            </div>

        </div>
    </div>
</div>
<br /><br /><br />

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

</body>
</html>