<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Contact | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
    	
    	<div id="gradient"></div><!-- gradient background -->
        
        <div id="background">
        	<div id="ekho_map"></div><!-- Map holder -->
        </div><!-- end background -->
        
        <div id="header" class="vertical" data-type="vertical">
            
			<?php include ('inc.header.php'); ?>
            
        </div><!-- end header -->
        
        <div id="main" class="container">
            <a href="#" id="mainClose" class="maximized" data-rel="tipsye" title="Minimize"></a>
            <div class="inner-container">
            	
                <div id="breadcrumbs" class="row">
                    <div class="breadcrumb ten columns omega">
                    	<div class="breadcrumbs">
                    		<a href="index.html" class="pathway isHome ">Home</a>
                            <span class="brd_separator">/</span>
                            <span>CONTACT</span>
                        </div>
                    </div><!-- end breadcrumbs -->
                    <div class="thedate six columns alpha">
                    	<span id="current-date"></span>
                    </div>
                    <div class="clear"></div>
                </div><!-- end breadcrumbs -->
                                    
                <div class="row">
                
                    <div class="sixteen noSidebars columns">
                        <div id="mainbody">
                            <div class="item-page ">
                                <h2>CONTACT</h2>
                                
                                <div class="eight columns alpha">
                                    <p>Use this form to send us a message:</p>
                                    <div id="contact_form" class="rapid_contact ">
                                        <form action="#" method="post">
                                        	<div id="success"></div>
                                            <div>
                                                <input class=" inputbox " type="text" id="rp_name" name="rp_name" placeholder="Name" value="" />
                                            </div>
                                            <div>
                                                <input class=" inputbox " type="text" placeholder="Email" name="rp_email" id="rp_email" value="" />
                                            </div>
                                            <div>
                                                <input class=" inputbox " type="text" name="rp_subject" placeholder="Subject" id="rp_subject" value="" />
                                            </div>
                                            <div>
                                                <textarea class=" textarea " placeholder="Message" name="rp_message" id="rp_message"></textarea>
                                            </div>
                                            <div>
                                                <input class=" button " id="submit-form" type="submit" name="submit" value="Send Message" />
                                            </div>
                                        </form>
                                    </div><!-- end contact form -->
                                </div><!-- end left side -->
                                
                                <div class="eight columns omega">
                                    <h3>Get in touch with us</h3>
                                
                                    <div class="qrCode" style="float:right; margin:0px 0px 15px 15px; width:160px; " >
                                        <h6>Scan me!</h6>
                                        <img src="http://api.qrserver.com/v1/create-qr-code/?data=MECARD%3AN%3AMarius+Hogas%3BADR%3AMyStreet+22%2C+Bucuresti%3BTEL%3A%2B+%2850%29+555+89+89%3BTEL%3A%2B+%2850%29+555+88+88%3BTEL%3A%2B+%2850%29+555+87+87%3BTEL%3A%2B+%2850%29+555+86+86%3BEMAIL%3Amhogas%40gmail.com%3BURL%3Ahttp%3A%2F%2Fwww.hogash.com%2F%3B%3B&amp;size=140x140" alt="Scan this QR Code!" class="shadow" />
                                    </div><!-- end QR Code -->
                                
                                    <p><strong>Address:</strong>&nbsp;Street Address nr 100, 4536534, Your Town, United States</p>
                                    
                                    <p><strong>Phone:</strong> (212) 555 55 00<br>
                                    <strong>Email:</strong> office@yourwebsite.com<br />
                                    <strong>Web:</strong> www.yourwebsite.com</p>
                                    
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                
                                </div><!-- end right side -->
                                <div class="clear"></div>

	
                            </div><!-- end item-page-->
                        </div><!-- end mainbody -->
                    </div>
                
                </div><!-- end row -->
            </div>
        </div><!-- end main -->
        <div class="footerFix"></div><!-- FooterFix (needed for properly rendering the #main div) -->
        
		<!-- social sharing -->
        <?php include ('inc.social_sharing.php'); ?>
        
        <!-- footer -->
        <?php include ('inc.footer.php'); ?>
        
        <!-- live comments panel -->
        <?php include ('inc.live_comments.php'); ?>
        
        
    </div><!-- end page_wrapper -->
	
    <!-- Contact Form code -->
    <script src="js/contact_form.js" type="text/javascript"></script>
	
    <!-- Start Google Maps code -->
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="js/mapmarker.jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	(function($){
		$(document).ready(function() {
			var myMarkers = {
				"markers": [
					{"latitude": "40.712785", "longitude":"-73.962708", "icon": "images/map_marker.png"},
					{"latitude": "40.705628", "longitude":"-73.944769", "icon": "images/map_marker.png"}
				]
			};
			$("#ekho_map").mapmarker({
				zoom : 14,
				center: "40.70,-73.965",
				type: "ROADMAP",
				controls: "HORIZONTAL_BAR",
				dragging:1,
				mousewheel:0,
				markers: myMarkers,
				styling: 0,
				featureType:"all",
				visibility: "on",
				elementType:"geometry",
				hue:"#00AAFF",
				saturation:-100,
				lightness:0,
				gamma:1
				/*
				To play with the map colors and styles you can try this tool right here http://gmaps-samples-v3.googlecode.com/svn/trunk/styledmaps/wizard/index.html
				*/
			});
			$("#background").css('z-index',0); 
		});
	})(jQuery);
	</script><!-- END Google Maps code -->
	
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>