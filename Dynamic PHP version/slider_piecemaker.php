<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Piecemaker Slider | EKHO Template</title>
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
                   
                    <div class="piecemaker_holder">
                        <div id="piecemaker">
							<p>Put your alternative Non Flash content here.</p>
                        </div>
                    </div><!-- end piecemaker_holder -->
                    
                </div><!-- end slideshow -->
            
            </div>
        </div><!-- end front centered -->
        
        
		<!-- social sharing -->
        <?php include ('inc.social_sharing.php'); ?>
        
        <!-- footer -->
        <?php include ('inc.footer.php'); ?>
        
        <!-- live comments panel -->
        <?php include ('inc.live_comments.php'); ?>
        
		
        
    </div><!-- end page_wrapper -->
    
    <!-- Start Piecemaker code -->
	<link rel="stylesheet" href="sliders/3d_portfolio_carousel/css/style.css" type="text/css" />
	<script type = "text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.1/swfobject.js"></script>
	<script type="text/javascript">
		(function($){ 
			$(window).load(function(){
				var flashvars = {};
				flashvars.cssSource = "sliders/piecemaker/piecemaker.css";
				flashvars.xmlSource = "sliders/piecemaker/piecemaker.xml";
				
				var params = {};
				params.play = "true";
				params.menu = "false";
				params.scale = "showall";
				params.wmode = "transparent";
				params.allowfullscreen = "true";
				params.allowscriptaccess = "always";
				params.allownetworking = "all";
				
				swfobject.embedSWF('sliders/piecemaker/piecemaker.swf', 'piecemaker', '900', '440', '10', null, flashvars, params, null);
			});
		})(jQuery);
    </script>
	<!-- End Piecemaker code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>