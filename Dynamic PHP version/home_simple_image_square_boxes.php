<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Simple Image with Square Boxes | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
    
    	<div id="gradient"></div><!-- gradient background -->
        
        <div id="background">
        
        	<!-- Sparkles -->
        	<div id="sparkles"></div>
            <!--// If you don't want sparkles to show up, just delete this div id="sparkles" -->
            
        </div><!-- end background -->
        
        <div id="header" class="vertical" data-type="vertical">
            
			<?php include ('inc.header.php'); ?>
            
        </div><!-- end header -->
        
        <div id="front_centered" >
            <div class="container">
        
                <div id="slideshow" class="clearfix ">
                    <h4 class="big_text"><strong>ekho</strong> is a <strong>unique</strong> html template<br />that will <strong>rock your world</strong></h4>
                </div><!-- end slideshow div -->
                
                <div id="mainboxes" class="clearfix">
                
                    <div class="square_box one-third column alpha border_effect darkbg">
                        <div class="box-inner">
                            <h4>High quality template</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            <img src="images/img5.png" style="margin-top: 10px;" />
                        </div>
                    </div><!-- end square box -->
                    
                    <div class="square_box one-third column border_effect darkbg">
                        <div class="box-inner">
                            <a href="#" title="LATEST TECHNOLOGY" target="_blank" class="hover_effect">
                                <img src="images/img3.jpg" alt="" title="" />
                            </a>
                        </div>
                    </div><!-- end square box -->
                    
                    <div class="square_box one-third column omega border_effect darkbg">
                        <div class="box-inner">
                            <a href="#" title="HIGHLY CUSTOMIZABLE" target="_blank" class="hover_effect">
                                <img src="images/img4.jpg" alt="" title="" />
                            </a>
                        </div>
                    </div><!-- end square box -->

                    <div class="clear"></div>
                </div><!-- end mainboxes -->
                
            </div>
        </div><!-- end front centered -->
        
		<!-- social sharing -->
        <?php include ('inc.social_sharing.php'); ?>
        
        <!-- footer -->
        <?php include ('inc.footer.php'); ?>
        
        <!-- live comments panel -->
        <?php include ('inc.live_comments.php'); ?>
        
        
    </div><!-- end page_wrapper -->
	
    <!-- Start Backstretch full-background code -->
    <script type = "text/javascript" src="js/jquery.backstretch.min.js"></script>
	<script type="text/javascript">
    (function($){
				
		// trigger the Fullscreen background
        $.backstretch("images/colorPulse_V4.jpg");
		
    })(jQuery);
	</script><!-- End Backstretch full-background code -->
	
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>