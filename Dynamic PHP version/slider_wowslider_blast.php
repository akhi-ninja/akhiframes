<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Wowslider Blast | EKHO Template</title>
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
                   
                    <div id="wowslider-container1">
                        <div class="ws_images">
                            <ul>
                                <li>
                                    <a href="https://www.google.ro" target="_blank" class="link">
                                        <img src="images/sliders/flexslider/slide2.jpg" alt="" title="Load images from folder or component" class="full-img" id="wows1_0" />
                                    </a>
                                    You can choose from four of different effects
                                </li>
                                <li>
                                    <img src="images/sliders/flexslider/slide1.jpg" alt="" title="Responsive Slider" class="full-img" id="wows1_1" />
                                </li>
                                <li>
                                    <img src="images/sliders/flexslider/slide3.jpg" alt="" title="Lorem ipsum dolor sit amet" class="full-img" id="wows1_2" />
                                </li>
                                <li>
                                    <img src="images/sliders/flexslider/slide4.jpg" alt="" title="Lorem ipsum dolor sit amet" class="full-img" id="wows1_3" />
                                </li>
                            </ul>
                        </div><!-- end ws_images -->
                    
                        <div class="ws_bullets">
                            <div>
                                <a href="#" title="slide0"><img src="php_helpers/timthumb.php?src=images/sliders/flexslider/slide2.jpg&amp;w=240&amp;h=90&amp;zc=1" alt="slide0"/>0</a>
                                <a href="#" title="slide1"><img src="php_helpers/timthumb.php?src=images/sliders/flexslider/slide1.jpg&amp;w=240&amp;h=90&amp;zc=1" alt="slide1"/>1</a>
                                <a href="#" title="slide2"><img src="php_helpers/timthumb.php?src=images/sliders/flexslider/slide3.jpg&amp;w=240&amp;h=90&amp;zc=1" alt="slide2"/>2</a>
                                <a href="#" title="slide3"><img src="php_helpers/timthumb.php?src=images/sliders/flexslider/slide4.jpg&amp;w=240&amp;h=90&amp;zc=1" alt="slide3"/>3</a>
                            </div>
                        </div><!-- end ws-bullets -->

                    </div><!-- end #wow slider -->
                    
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
    
    <!-- Start Wow Slider code -->
	<link rel="stylesheet" href="sliders/wow_slider/css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/shadows.css" type="text/css" />
	<script type="text/javascript" src="sliders/wow_slider/js/wowslider.js"></script>
	<script type="text/javascript" src="sliders/wow_slider/js/blast.js"></script>
	<script type="text/javascript">
		jQuery("#wowslider-container1").wowSlider({
			effect:"blast",
			prev:"",
			next:"",
			duration:1000,
			delay:2000,
			width:960,
			height:400,
			autoPlay:true,
			stopOnHover:true,
			loop:true,
			bullets:true,
			caption:true,
			controls:true,
			logo:"sliders/wow_slider/images/loading.gif",
			images:0
		});

		(function($) {
			$(window).load(function(){
				$("#front_centered.noMainboxes #slideshow").addClass(" drop-shadow raised");  // add shadow to the slider
			});
		})(jQuery);
    </script>
	<!-- End Wow Slider code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>