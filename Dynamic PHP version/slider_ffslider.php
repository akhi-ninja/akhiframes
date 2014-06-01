<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>FF Slider | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
        
        <div id="background">
        	
            <div id="ffSlider" class="ffslider">
                <img src="images/sliders/ffslider/slide1.jpg" alt="" />
                <img src="images/sliders/ffslider/slide2.jpg" alt="" />
                <img src="images/sliders/ffslider/slide3.jpg" alt="" />
                <img src="images/sliders/ffslider/slide4.jpg" alt="" />
            </div><!-- end FFSlider Container -->
            
        </div><!-- end background -->
        
        <div id="header" class="vertical" data-type="vertical">
            
			<?php include ('inc.header.php'); ?>
            
        </div><!-- end header -->
        
		<!-- social sharing -->
        <?php include ('inc.social_sharing.php'); ?>
        
        <!-- footer -->
        <?php include ('inc.footer.php'); ?>
        
        <!-- live comments panel -->
        <?php include ('inc.live_comments.php'); ?>
        
		
        
    </div><!-- end page_wrapper -->
    
    <!-- Start FF Slider code -->
    <link rel="stylesheet" href="sliders/ffslider/css/fsslider.css" type="text/css" />
    <script src="sliders/ffslider/js/jquery.fsslider.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
	(function($){
		$(document).ready(function(){
			if($("html").hasClass("oldie"))
				alert("Your browser doesn't support this slider. Please update your browser (you really have to)!");
			else
				$("#ffSlider").fsslider({
					spw: 5, 			// Square per width
					sph: 4, 			// Square per height
					delay: 5000,		// Animation duration (ms)
					sDelay: 60,			// Animation speed (ms)
					effect: "",			// Random / Lineal / Diagonal
					texture: "strip1",	// None / Cross / Cube / Dot / Plus / Raster / Square / Star / Strip 1 / Strip 2 / Strip 3 / Strip 4 / Zigzag Horizontal / Zigzag Vertical
					navigation: true
				});
		});
	})(jQuery);
	</script><!-- End FF Slider code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>