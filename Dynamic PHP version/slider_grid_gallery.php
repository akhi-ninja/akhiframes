<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Grid Gallery Slider | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
        
        <div id="gradient"></div><!-- gradient background -->
        
        <div id="background">
        	
            <div id="grid_gallery"> 
            
                <!-- large image -->
                <div id="largeImage" class="largeContainer animated"></div>
                
                <div class="thumbContainer">
                    <ul id="thumbnails" class="clearfix">
                    	<li>
                        	<img
                        		src="http://img.youtube.com/vi/G-1HNnxb0WE/0.jpg"
                                data-type="video"
                                data-large="http://www.youtube.com/embed/G-1HNnxb0WE?wmode=transparent&amp;rel=0"
                                data-caption="Totally Enormous Extinct Dinosaurs - Garden"
                                data-width="750"
                                data-height="500"
                        	/>
                        </li>
                        <li>
                        	<img
                                src="http://b.vimeocdn.com/ts/210/412/210412058_100.jpg"
                                data-type="video"
                                data-large="http://player.vimeo.com/video/31241154?title=0&amp;byline=0&amp;portrait=0"
                                data-caption="I belive i can fly"
                                data-width="750"
                                data-height="500"
                            />
                        </li>
                        <li>
                        	<img
                            	src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img3.jpg&amp;w=120&amp;h=75"
                                data-large="images/sliders/gridgallery/img3.jpg"
                                data-caption=""
                        	/>
                        </li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img4.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img4.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img5.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img5.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img6.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img6.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img7.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img7.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img8.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img8.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img9.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img9.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img11.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img11.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img13.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img13.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img17.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img17.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img27.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img27.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img29.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img29.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img30.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img30.jpg" data-caption="" /></li>
                        <li><img src="php_helpers/timthumb.php?src=images/sliders/gridgallery/img32.jpg&amp;w=120&amp;h=75" data-large="images/sliders/gridgallery/img32.jpg" data-caption="" /></li>
                    </ul>                   
                
                    <!-- navigation holder -->
                    <div class="holder"></div>
                
                    <!-- custom buttons -->
                    <div id="btns">
                        <span class="prev"></span>
                        <span class="next"></span>
                    </div>	     
                </div> 		
            
            </div><!-- end JQuery Grid Gallery -->
            
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
    <link rel="stylesheet" href="sliders/jquery_gridgallery/css/gallery.php?effect=fadeInUp" type="text/css" />
	<script src="sliders/jquery_gridgallery/js/jpages.min.js" type="text/javascript"></script>
	<script src="sliders/jquery_gridgallery/js/jquery.pagegallery.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
	(function($){
		$(document).ready(function() {
			$("#grid_gallery").pageGallery({
				thumbContainerID: "thumbnails",	// the thumbnail area's container
				largeContainerID: "largeImage",	// the container put the large image/video
				perPage: 5,						// display how many thumbnails on the list
				largeImgEase: "fadeInUp",		// the animation type of the large image/video
				largeContainerOffset: -80,		// the y offset of the large container, effect the next/prev buttons too
				largeImgClickable:  true,		// make the large image clickable or not
				closeButtonPosition : "right",	// where to put the close button  right || left
				slideShow:  true,				// auto delay slideshow
				slideShowDelay: 5000			// the millisecond of the slideshow
			});
			$(".thumbContainer").css("bottom", $("#footer").height()+20); // position the thumbs container
		});
	})(jQuery);
    </script><!-- End Supersized Slider code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>