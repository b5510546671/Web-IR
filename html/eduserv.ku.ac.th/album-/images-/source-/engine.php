<!doctype html>
<html>
<head>
	<title>fancybox - fancy jquery lightbox alternative | demonstration</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<script type="text/javascript" src="../lib/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="../lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
			$('.fancybox-thumbs').fancybox({
				preveffect : 'none',
				nexteffect : 'none',
				
				closebtn  : true,
				arrows    : true,
				nextclick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

		body {
			max-width: 880px;
			margin: 0 auto;
		}
	</style>
</head>
<body>


 





	
     </h1>
</body>
</html>