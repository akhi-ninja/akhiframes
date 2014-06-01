<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>3D Portfolio Slider | EKHO Template</title>
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
                   
                    <div id="dg-container" class="dg-container">
                        <div class="header_text">
                            <h3 style="text-align: center;">THESE ARE SOME OF OUR NEWEST PROJECTS</h3>
                        </div>

                        <div class="dg-wrapper">
                            <a href="http://http://hogash.com/themeforest/?theme=eos_joomla" target="_blank" class="link">
                                <img src="images/sliders/3d_gallery/6.jpg" alt="EOS Template" class="full-img" />
                                <div>http://hogash.com/themeforest/?theme=eos_joomla</div>
                                <span>EOS Template</span>
                            </a>
                            <a href="http://http://hogash.com/themeforest/?theme=ammon_joomla" target="_blank" class="link">
                                <img src="images/sliders/3d_gallery/5.jpg" alt="Ammon Template" class="full-img" />
                                <div>http://hogash.com/themeforest/?theme=ammon_joomla</div>
                                <span>Ammon Template</span>
                            </a>
                            <a href="http://http://hogash.com/themeforest/?theme=amos_joomla" target="_blank" class="link">
                                <img src="images/sliders/3d_gallery/7.jpg" alt="Amos Template" class="full-img" />
                                <div>http://hogash.com/themeforest/?theme=amos_joomla</div>
                                <span>Amos Template</span>
                            </a>
                            <a href="http://http://hogash.com/themeforest/?theme=bloora_joomla" target="_blank" class="link">
                                <img src="images/sliders/3d_gallery/4.jpg" alt="Bloora Template" class="full-img" />
                                <div>http://hogash.com/themeforest/?theme=bloora_joomla</div>
                                <span>Bloora Template</span>
                            </a>
                            <a href="http://http://hogash.com/themeforest/?theme=krios_joomla" target="_blank" class="link">
                                <img src="images/sliders/3d_gallery/3.jpg" alt="Krios Template" class="full-img" />
                                <div>http://hogash.com/themeforest/?theme=krios_joomla</div>
                                <span>Krios Template</span>
                            </a>
                            <a href="http://http://hogash.com/themeforest/?theme=abrax_joomla" target="_blank" class="link">
                                <img src="images/sliders/3d_gallery/2.jpg" alt="Abrax Template" class="full-img" />
                                <div>http://hogash.com/themeforest/?theme=abrax_joomla</div>
                                <span>Abrax Template</span>
                            </a>
                            <a href="http://http://hogash.com/themeforest/?theme=phaeton_joomla" target="_blank" class="link">
                                <img src="images/sliders/3d_gallery/1.jpg" alt="Phaeton Template" class="full-img" />
                                <div>http://hogash.com/themeforest/?theme=phaeton_joomla</div>
                                <span>Phaeton Template</span>
                            </a>
                        </div><!-- end DG Wrapper -->
                        
                        <div class="nav">
                            <div class="arrows_small">
                                <span class="dg-prev">&lt;</span>
                                <span class="dg-next">&gt;</span>
                            </div>
                            <div class="arrows_big">
                                <span class="dg-prev p2">&lt;</span>
                                <span class="dg-next p2">&gt;</span>
                            </div>
                        </div><!-- end nav -->
	                    <div class="footer_text">
                        	<p style="text-align: center;">You can see the whole list of my portfolio <a href="http://themeforest.net/user/hogash/portfolio" target="_blank" title="Hogash Templates">here</a></p>
						</div>
                        
                    </div><!-- end DG COntainer -->
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
    
    <!-- Start 3D Portfolio code -->
	<link rel="stylesheet" href="sliders/3d_portfolio_carousel/css/style.css" type="text/css" />
	<script type="text/javascript" src="sliders/3d_portfolio_carousel/js/jquery.gallery.min.js"></script>
	<script type="text/javascript">
		(function($){ 
			$(window).load(function(){
				$('#dg-container').gallery({
					current: 0,
					autoplay: false,
					interval: 2000
				});
			});
		})(jQuery);
    </script>
	<!-- End 3D Portfolio code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>