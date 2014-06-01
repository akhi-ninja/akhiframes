<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Sequence Slider | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
        
        <div id="gradient"></div><!-- gradient background -->
        
        <div id="background">
        
            <ul class="sq_controls">
                <li><a href="#" class="pause"></a></li>
                <li><a href="#" class="prev"></a></li>
                <li><a href="#" class="next"></a></li>
            </ul><!-- end sql controls -->
            
            <div class="sq_container">
                <div class="sq_header">
                    <div id="sequence">
                        <ul>
                            <li class="frame1">
                                <h2 class="title animate-in">
                                    <a href="https://www.google.com" target="_blank" class="link">Built using Sequence.js</a>
                                </h2>
                                <h3 class="subtitle animate-in">The jQuery Slider Plugin with responsive layout</h3>
                                <img class="model animate-in" src="images/sliders/sequence/dancer1.png" alt="Built using Sequence.js" />
                            </li><!-- end frame -->
                            
                            <li class="frame2">
                                <h2 class="title ">CREATIVE CONTROL</h2>
                                <h3 class="subtitle ">You can add an image, url, title and a subtitle</h3>
                                <img class="model " src="images/sliders/sequence/dancer2.png" alt="CREATIVE CONTROL" />
                            </li><!-- end frame -->
                            
                            <li class="frame3">
                                <h2 class="title ">CUTTING EDGE</h2>
                                <h3 class="subtitle ">Supports modern browsers, old browsers (IE7+), touch devices and responsive designs</h3>
                                <img class="model " src="images/sliders/sequence/dancer3.png" alt="CUTTING EDGE" />
                            </li><!-- end frame -->
                        </ul>
                    </div>
                
                    <ul id="nav">
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/sequence/dancer1.png&amp;w=110&amp;h=110&amp;zc=3" alt="Built using Sequence.js" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/sequence/dancer2.png&amp;w=110&amp;h=110&amp;zc=3" alt="CREATIVE CONTROL" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/sequence/dancer3.png&amp;w=110&amp;h=110&amp;zc=3" alt="CUTTING EDGE" /></li>
                    </ul>
                
                </div>
            </div><!-- end sq container -->
           
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
    
    <!-- Start sequence Gallery code -->
    <link rel="stylesheet" href="sliders/sequence/css/sequencejs-theme.modern-slide-in.css" type="text/css" />
	<script src="sliders/sequence/js/sequence.jquery-min.js" type="text/javascript"></script>
    <script type="text/javascript">
	(function($){ 
		/mobile/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
		  if (!pageYOffset) window.scrollTo(0, 1);
		}, 1000);
		
		$(document).ready(function(){
			var options = {
				nextButton: true,
				prevButton: true,
				animateStartingFrameIn: true,
				transitionThreshold: 250,
				$path: "sequence/images/preloader.gif",
				pauseButton: true,
				
				afterPreload: function(){
					$("#nav").fadeIn(100);
					$("#nav li:nth-child("+(sequence.settings.startingFrameID)+") img").addClass("active");
				},
				beforeNextFrameAnimatesIn: function(){
					$("#nav li:not(:nth-child("+(sequence.nextFrameID)+")) img").removeClass("active");
					$("#nav li:nth-child("+(sequence.nextFrameID)+") img").addClass("active");
				}
			};
	
			var sequence = $("#sequence").sequence(options).data("sequence");
			
			$("#nav li").click(function(){
				if(!sequence.active){
					$(this).children("img").removeClass("active").children("img").addClass("active");
					sequence.nextFrameID = $(this).index()+1;
					sequence.goTo(sequence.nextFrameID);
				}
			});
			$(".sq_container #nav li a, .sq_controls li a").click(function(e){e.preventDefault();});
		});
		$(window).live("resize", vert_center());
		
		function vert_center(){
			var $obj = $(".sq_header"),
				wid = $obj.width(),
				hei = $obj.height();
				$obj.css({ "margin-left" : "-" + wid/2+"px", "margin-top": "-" + hei/2+"px" });
			return;
		}
		$(window).load(function(){vert_center();});
	
	})(jQuery);
	</script>
	<!-- End sequence Gallery code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>