<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Offline Page | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="offline_page dark">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
        <!-- logo -->
		<a href="index.html" title="Ekho Template" id="logo"></a>
        
        <!-- social icons -->
        <div id="social_icons">
            <ul class="social_icons">
                <li><a href="#" target="_blank" rel="nofollow" class="social_iconF">F</a></li>
                <li><a href="#" target="_blank" rel="nofollow" class="social_iconL">L</a></li>
                <li><a href="#" target="_blank" rel="nofollow" class="social_iconD">D</a></li>
                <li><a href="#" target="_blank" rel="nofollow" class="social_iconPin">{</a></li>
            </ul>
        </div><!-- end social_icons -->
                    
        <div id="background">
        
        	<!-- Sparkles -->
        	<div id="sparkles"></div>
            <!--// If you don't want sparkles to show up, just delete this div id="sparkles" -->
            
        </div><!-- end background -->

        <div id="offline_page" class="container">
            
            <div class="row">
                <div class="sixteen columns">
                    <h4 class="big_text"><strong>ekho</strong> is a <strong>unique</strong> html template<br>that will <strong>rock your world</strong></h4>
                    <h4 style="text-align:center">We're currently under development!</h4>
                    <div class="ud_counter">
                        <ul id="Counter">
                            <li>0<span>day</span></li>
                            <li>00<span>hours</span></li>
                            <li>00<span>min</span></li>
                            <li>00<span>sec</span></li>
                        </ul>
                    </div><!-- end counter -->
                    <p style="text-align:center">Join our mailing list or follow us on Facebook or Twitter to stay up to date.</p>
                </div>
                <div class="clear"></div>
                
            </div>
        
        </div><!-- end offline_page -->
        
        <!-- social sharing -->
        <?php include ('inc.social_sharing.php'); ?>
        
        <!-- footer -->
        <?php include ('inc.footer.php'); ?>
        
        <!-- live comments panel -->
        <?php include ('inc.live_comments.php'); ?>
        
    </div><!-- end page_wrapper -->
	
    <script type = "text/javascript" src="js/jquery.backstretch.min.js"></script>
	<script type="text/javascript">
    (function($){
		// trigger the Fullscreen background
        $.backstretch("images/colorPulse_V4.jpg");
    })(jQuery);
	</script>
    
    <!-- Start Counter script -->
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script type="text/javascript">
		var counter = {
			init: function (d)
			{
				jQuery('#Counter').countdown({
					until: new Date(d),
					layout: counter.layout(),
					labels: ['years', 'months', 'weeks', 'days', 'hours', 'min', 'sec'],
					labels1: ['year', 'month', 'week', 'day', 'hour', 'nin', 'sec']
				});
			},
			layout: function ()
			{
				return '<li>{dn}<span>{dl}</span></li>' + 
							'<li>{hnn}<span>{hl}</span></li>' + 
							'<li>{mnn}<span>{ml}</span></li>' + 
							'<li>{snn}<span>{sl}</span></li>';
			}
		}
		
		// initialize the counter
		counter.init("December 01, 2012");

	</script>
	<!-- End Counter script -->
	  
	<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script><!-- jquery easing -->
    
    <script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js" type="text/javascript"></script><!--
     This is the twitter feed. Unless you know what you're doing, try leaving intact. If you don't want twitter to appear on your website, delete #twitterFeed and it's script in ekho_scripts.js at line 59  -->
	
</body>
</html>