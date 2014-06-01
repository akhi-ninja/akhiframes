<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Supersized Slider | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
        
        <div id="background">
        	
            <div class="supersized_slider">
                <div class="titles-wrapper">
                    <div id="titles">
                        <h2></h2>
                        <h3></h3>
                    </div>
                </div><!-- end titles-wrapper -->
                
                <div id="thumb-tray" class="load-item">
                    <div id="thumb-back"></div>
                    <div id="thumb-forward"></div>
                </div><!-- end thumb tray -->
                
                <!--Slide counter-->
                <div id="slidecounter">
                    <span class="slidenumber"></span> / <span class="totalslides"></span>
                </div>
                        
                <!--Time Bar-->
                <div id="progress-back" class="load-item">
                    <div id="progress-bar"></div>
                </div>
                
                <!--Control Bar-->
                <div id="controls-wrapper" class="load-item">
                    <ul id="controls">
                        <li><a id="play-button"><span id="pauseplay" class="pause"></span></a></li>
                               
                        <!--Arrow Navigation-->
                        <li><a id="prevslide" class="load-item"></a></li>
                        <li><a id="nextslide" class="load-item"></a></li>
                                
                        <!--Thumb Tray button-->
                        <li><a id="tray-button"><span id="tray-arrow" class="button-tray-up"></span></a></li>
                	</ul>
                </div>
                <!--Navigation-->
                <ul id="slide-list"></ul>
                
            </div><!-- end supersized slider // JUST HTML CODE // Images are added through JS in the bottom of this page -->
            
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
    
    <!-- Start Supersized Slider code -->
    <link rel="stylesheet" href="sliders/supersized/css/supersized.css" type="text/css" />
    <link rel="stylesheet" href="sliders/supersized/theme/supersized.shutter.css" type="text/css" />
    <script src="sliders/supersized/js/supersized.3.2.6.min.js" type="text/javascript"></script>
    <script src="sliders/supersized/theme/supersized.shutter.min.js" type="text/javascript"></script>
    <script src="sliders/supersized/js/jquery.clip-animation.min.js" type="text/javascript"></script>
    <script src="sliders/supersized/js/jquery.touchSwipe-1.2.6.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
    (function($){
		$(document).ready(function(){
			$.supersized({
				slideshow:1,				// Slideshow on/off
				autoplay:1,					// Slideshow starts playing automatically
				start_slide:1, 				// Start slide (0 is random)
				stop_loop:0, 				// Stops slideshow on last slide
				random:0, 					// Randomize slide order (Ignores start slide)
				slide_interval:3000, 		// Length between transitions
				transition:1, 				// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
				transition_speed:1000, 		// Speed of transition
				new_window:1, 				// Image links open in new window/tab
				pause_hover:0, 				// Pause slideshow on hover
				keyboard_nav:1, 			// Keyboard navigation on/off
				performance:1, 				// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed //  (Only works for Firefox/IE, not Webkit)
				image_protect:1,			// Disables image dragging and right click with Javascript
				min_width:0,				// Min width allowed (in pixels)
				min_height:0,				// Min height allowed (in pixels)
				vertical_center:1,			// Vertically center background
				horizontal_center:1,		// Horizontally center background
				fit_always:0,				// Image will never exceed browser width or height (Ignores min. dimensions)
				fit_portrait:1,				// Portrait images will not exceed browser height  
				fit_landscape: 0,			// Landscape images will not exceed browser width
				slide_links:"blank",		// Individual links for each slide (Options: false, 'num', 'name', 'blank')
				thumb_links:1,				// Individual thumb links for each slide
				thumbnail_navigation:0,		// Thumbnail navigation
				slides:[
					{
						image : "images/sliders/supersized/slide1.jpg",		// image source
						title1 : "LOREM IPSUM DOLOR",						// First title
						title2 : "AENEAN DIGNISSIM JUSTO",					// Second title
						align : "center-left",								// Where to align
						thumb : "php_helpers/timthumb.php?src=images/sliders/supersized/slide1.jpg&amp;w=150&amp;h=108",	// Thumbnail (it's resized with timthumb.php)
						url : ""											// Slide URL
					},
					{
						image : "images/sliders/supersized/slide2.jpg", 
						title1 : "CONSECTETUR ADIPISCING ELIT", 
						title2 : "SOCIIS NATOQUE PENATIBUS", 
						align : "top-right", 
						thumb : "php_helpers/timthumb.php?src=images/sliders/supersized/slide2.jpg&amp;w=150&amp;h=108", 
						url : "https://www.google.ro"
					},
					{
						image : "images/sliders/supersized/slide3.jpg", 
						title1 : "LOREM IPSUM DOLOR", 
						title2 : "AENEAN DIGNISSIM JUSTO", 
						align : "center-left", 
						thumb : "php_helpers/timthumb.php?src=/images/sliders/supersized/slide3.jpg&amp;w=150&amp;h=108", 
						url : ""
					},
					{
						image : "images/sliders/supersized/slide4.jpg", 
						title1 : "CONSECTETUR ADIPISCING ELIT", 
						title2 : "SOCIIS NATOQUE PENATIBUS", 
						align : "center-right", 
						thumb : "php_helpers/timthumb.php?src=images/sliders/supersized/slide4.jpg&amp;w=150&amp;h=108",
						url : ""
					}
				],
				progress_bar:1, 
				mouse_scrub:0
			});
			// position the slide list
			$("ul#slide-list").css({
				"bottom": $("#footer").height() + $("ul#slide-list").height(),
				"margin-left": "-" + $("ul#slide-list").width()/2
			});
		});
	})(jQuery);
    </script><!-- End Supersized Slider code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>