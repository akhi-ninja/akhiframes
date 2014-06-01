<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Nivo Slider | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
        
        <div id="gradient"></div><!-- gradient background -->
        
        <div id="background"></div><!-- end background -->
        
        <div id="header" class="vertical" data-type="vertical">
            
			<?php include ('inc.header.php'); ?>
            
        </div><!-- end header -->
        
        <div id="front_centered" class="noMainboxes">
            <div class="container">
            
                <div id="slideshow" class="clearfix ">
                   
                    <div id="nivoslider" class=" ekho-style ">
                        <div class="nivoSlider">
                            <img src="images/sliders/flexslider/slide1.jpg" alt="" title="Load images from folder or component" class="full-img" data-thumb="images/sliders/flexslider/slide1.jpg"  />
                            <img src="images/sliders/flexslider/slide3.jpg" alt="" title="Choose between lots of transition effects" class="full-img" data-thumb="images/sliders/flexslider/slide3.jpg"  />
                            <img src="images/sliders/flexslider/slide2.jpg" alt="" title="Built-in unique grid effect" class="full-img" data-thumb="images/sliders/flexslider/slide2.jpg"  />
                            <a href="#" target="_self" class="link">
                                <img src="images/sliders/flexslider/slide4.jpg" alt="" title="Responsive Slider" class="full-img" data-thumb="images/sliders/flexslider/slide4.jpg"  />
                            </a>
                        </div>
                    </div><!-- end #nivoslider -->
                    
                </div>
            
            </div>
        </div><!-- end front centered -->
        
        
		<!-- social sharing -->
        <?php include ('inc.social_sharing.php'); ?>
        
        <!-- footer -->
        <?php include ('inc.footer.php'); ?>
        
        <!-- live comments panel -->
        <?php include ('inc.live_comments.php'); ?>
        
		
        
    </div><!-- end page_wrapper -->
    
    <!-- Start Nivo Slider code -->
	<link rel="stylesheet" href="sliders/nivo_slider/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="sliders/nivo_slider/css/ekho-style.css" type="text/css" />
    <link rel="stylesheet" href="css/shadows.css" type="text/css" />
	<script src="sliders/nivo_slider/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <script type="text/javascript">
	(function($) {
		$(window).load(function(){
			$('#nivoslider .nivoSlider').nivoSlider({
				effect:'random',
				boxCols: 8,
				boxRows: 4,
				slices:15,
				animSpeed:500,
				pauseTime:3000,
				startSlide:0,
				directionNav:1,
				directionNavHide:0,
				controlNav:1,
				controlNavThumbs:0,
				keyboardNav:1,
				pauseOnHover:1,
				manualAdvance:0,
				captionOpacity:0.8
			});
			$("#front_centered.noMainboxes #slideshow").addClass(" drop-shadow raised");  // add shadow to the slider
		});
	})(jQuery);
    </script>
	<!-- End Nivo Slider code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>