<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>FlexSlider | EKHO Template</title>
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
                    <div id="flex_container" class=" ekho_style " >
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <a href="#" target="_self" class="link">
                                        <img src="images/sliders/flexslider/slide1.jpg" alt="Responsive Slider" class="full-img" />
                                    </a>
                                    <h2 class="flex-caption">Responsive Slider</h2>
                                </li>
                                <li>
                                    <img src="images/sliders/flexslider/slide2.jpg" alt="Touchswipe enabled" class="full-img" />
                                    <h2 class="flex-caption">Touchswipe enabled</h2>
                                </li>
                                <li>
                                    <img src="images/sliders/flexslider/slide3.jpg" alt="Choose either fade or slide" class="full-img" />
                                    <h2 class="flex-caption">Choose either fade or slide</h2>
                                </li>
                                <li>
                                    <img src="images/sliders/flexslider/slide4.jpg" alt="Load images from folder or component" class="full-img" />
                                    <h2 class="flex-caption">Load images from folder or component</h2>
                                </li>
                            </ul>
                        </div><!-- end #flexslider -->
                    </div><!-- end #flex_container -->
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
    
    <!-- Start Flex Slider code -->
    <link href="sliders/flex_slider/css/flexslider.css" rel="stylesheet" type="text/css" />
    <link href="css/shadows.css" rel="stylesheet" type="text/css" />
	<script src="sliders/flex_slider/js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script type="text/javascript">
	(function($){
		$(window).load(function(){
			$(".flexslider").flexslider({
				animation: "fade",				//String: Select your animation type, "fade" or "slide"
				slideDirection: "horizontal",	//String: Select the sliding direction, "horizontal" or "vertical"
				slideshow: true,				//Boolean: Animate slider automatically
				slideshowSpeed: 7000,			//Integer: Set the speed of the slideshow cycling, in milliseconds
				animationDuration: 600,			//Integer: Set the speed of animations, in milliseconds
				directionNav: true,				//Boolean: Create navigation for previous/next navigation? (true/false)
				controlNav: true,				//Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
				keyboardNav: true,				//Boolean: Allow slider navigating via keyboard left/right keys
				mousewheel: false,				//{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
				randomize: false,				//Boolean: Randomize slide order
				slideToStart: 0,				//Integer: The slide that the slider should start on. Array notation (0 = first slide)
				animationLoop: true,			//Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
				pauseOnAction: true,			//Boolean: Pause the slideshow when interacting with control elements, highly recommended.
				pauseOnHover: false				//Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			});
			
			$("#front_centered.noMainboxes #slideshow").addClass(" drop-shadow raised"); // add shadow to the slider
			$(".ekho_style#flex_container").animate({"padding": "10px"}); // animate an opening border efect
			
		})
	})(jQuery);
    </script>
	<!-- End Flex Slider code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>