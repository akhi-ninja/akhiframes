<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>HOME with Audio Player | EKHO Template</title>
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
        
        <div id="audioPlayer"></div><!-- Audio Player Container -->
        
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
	
    <!-- Start Backstretch full-background code -->
    <script type = "text/javascript" src="js/jquery.backstretch.min.js"></script>
	<script type="text/javascript">
    (function($){
				
		// trigger the Fullscreen background
        $.backstretch("images/colorPulse_V4.jpg");
		
    })(jQuery);
	</script><!-- End Backstretch full-background code -->
    
    <!-- Start Audio Player code -->
    <script src="js/hg_audio_player.min.js" type="text/javascript"></script>
	<script type="text/javascript">
    (function($){ 
		$(window).load(function(){
			if($("html").hasClass("oldie")) alert("Your browser doesn't support HTML5 Audio tag. Please update your browser!");
			else $("#audioPlayer").audioPlayer({
				song_mp3:"assets/audio/clouds.mp3",
				song_ogg:"assets/audio/clouds.ogg",
				loop: true,
				autoplay: true
			});
		});
	})(jQuery);
	</script><!-- End Audio Player code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>