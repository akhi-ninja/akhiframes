<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>HOME Simple image with Intro Article | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical main-to-bottom "><!-- "main-to-bottom" class is the key to this display, aligned to bottom -->
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
        
        <div id="main" class="container">
            
            <a href="#" id="mainClose" class="maximized" data-rel="tipsye" title="Minimize"></a>
            
            <div class="inner-container">
                <div class="row">
                
                    <div class="twelve columns sidebarRight">
                        <div id="mainbody">
                            <div class="item-page">
                                
                                <h2>Welcome to our gorgeous unique template</h2>
                                <p>This is a menu item that links to this article. Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. <a href="about_us.html">Read more..</a></p>
                                
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_preferred_1"></a>
                                    <a class="addthis_button_preferred_2"></a>
                                    <a class="addthis_button_preferred_3"></a>
                                    <a class="addthis_button_preferred_4"></a>
                                    <a class="addthis_button_compact"></a>
                                    <a class="addthis_counter addthis_bubble_style"></a>
                                </div>
                                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fded38c0915a9fe"></script>
                                <!-- AddThis Button END -->
                                 
                            </div><!-- end item-page -->
                        </div><!-- end mainbody -->
                    </div>
                    
                    <div class="four columns">
                        <div id="sidebar_right" class="sidebar">
                            <div class="widgetbox">
                                <h4 class="moduletitle">Flickr Stream</h4>
                                <div id="flickr_container" class="flickr_container clearfix">
                                    <ul class="flickr_feeds clearfix"></ul>
                                    <a href="http://www.flickr.com/groups/envato/" target="_blank" title="follow @envato streams" class="followUs">follow @envato streams</a>
                                </div><!-- end flickr_container -->
                            </div>
                        </div><!-- end sidebar left -->
                    </div>
                
                </div><!-- end row -->
            
            </div>
        </div><!-- end main -->
        
        
        
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
    
    <!-- Start Flickr Feed code -->
    <script type = "text/javascript" src="js/jquery.jflickrfeed.min.js"></script>
	<script type="text/javascript">
    (function($){
				
		$(window).load(function() {
			// load flicker photos
			$('.flickr_feeds').jflickrfeed({
				limit: 6,  // how many to display
				qstrings: {
					id: '52617155@N08' // id of the flickr account. Use this tool to find your flickr ID - www.idgettr.com
				},
				itemTemplate: '<li><a href="{{image_b}}" rel="prettyPhoto[flickr]"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
			}, function(data) {
				$(".flickr_feeds a[rel^='prettyPhoto[flickr]']").prettyPhoto({
					theme:'pp_ekho'
				});
				$(".flickr_feeds li:nth-child(3n)").addClass("last");
			});
			
		});
		
    })(jQuery);
	</script><!-- End Flickr Feed code -->
    
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>