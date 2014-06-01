<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>FORM STYLES | EKHO Template</title>
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
        
        <div id="main" class="container">
            <a href="#" id="mainClose" class="maximized" data-rel="tipsye" title="Minimize"></a>
            <div class="inner-container">
            	
                <div id="breadcrumbs" class="row">
                    <div class="breadcrumb ten columns omega">
                    	<div class="breadcrumbs">
                    		<a href="index.html" class="pathway isHome ">Home</a>
                            <span class="brd_separator">/</span>
                            <span>STYLES</span>
                            <span class="brd_separator">/</span>
                            <span>FORM STYLES</span>
                        </div>
                    </div><!-- end breadcrumbs -->
                    <div class="thedate six columns alpha">
                    	<span id="current-date"></span>
                    </div>
                    <div class="clear"></div>
                </div><!-- end breadcrumbs -->
                                    
                <div class="row">

                    <div class="twelve columns sidebarRight">
                        <div id="mainbody">
                            <div class="item-page ">
                                <h1>FORM STYLES</h1>
                                
                                <form class="form-preset" method="post">
                                    <div>
                                        <label for="name">Text Input:</label><br /> 
                                        <input id="name" tabindex="1" type="text" name="name" value="" />
                                    </div>
                                    
                                    <div>
                                        <label for="name">Password Input:</label><br /> 
                                        <input id="name2" class="rounded" tabindex="2" type="password" name="name2" value="tralala" />
                                    </div>
                                    <div>
                                        Radio options: &nbsp;&nbsp;&nbsp; 
                                        <label for="radio-choice-1">Choice 1</label> &nbsp; 
                                        <input id="radio-choice-1" tabindex="2" type="radio" name="radio-choice-1" value="choice-1" /> &nbsp;&nbsp;&nbsp; <label for="radio-choice-2">Choice 2</label> &nbsp; 
                                        <input id="radio-choice-2" tabindex="3" type="radio" name="radio-choice-1" value="choice-2" />
                                    </div>
                                    <p>&nbsp;</p>
                                    <div>
                                        <label for="select-choice">Select Dropdown Choice:</label><br /> 
                                        <select id="select-choice" name="select-choice"> 
                                            <option value="Choice 1">Choice 1</option>
                                            <option value="Choice 2">Choice 2</option>
                                            <option value="Choice 3">Choice 3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="select-choice">Select Dropdown Choice (rounded corners):</label><br /> 
                                        <select id="select-choice" class="rounded" name="select-choice"> 
                                            <option value="Choice 1">Choice 1</option>
                                            <option value="Choice 2">Choice 2</option>
                                            <option value="Choice 3">Choice 3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="textarea">Textarea:</label><br />
                                        <textarea id="textarea" name="textarea" rows="8" cols="40"></textarea>
                                    </div>
                                    <div>
                                        <label for="checkbox">Checkbox:</label> &nbsp; 
                                        <input id="checkbox" type="checkbox" name="checkbox" /> &nbsp;&nbsp;&nbsp; <label for="checkbox1">Other Checkbox:</label> &nbsp; 
                                        <input id="checkbox1" type="checkbox" name="checkbox1" />
                                    </div>
                                    <div>
                                        <input type="submit" value="Submit" />
                                    </div>
                                </form>
                                
                                
                            </div><!-- end item-page-->
                        </div><!-- end mainbody -->
                    </div>
                	
                    <div class="four columns">
                        <div id="sidebar_right" class="sidebar">
                            <div class=" widgetbox ">
                                <h4 class="moduletitle">Sidebar menu</h4>
                                <ul class="menu">
                                    <li><a href="#"><span>Curabitur iaculis</span></a></li>
                                    <li><a href="#"><span>Parturient montes</span></a></li>
                                    <li class="deeper parent"><a href="#"><span>Cum sociis natoque</span></a>
                                        <ul>
                                            <li><a href="#"><span>Vulputate magna</span></a></li>
                                            <li><a href="#"><span>Parturient montes</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><span>Cum sociis natoque</span></a></li>
                                    <li><a href="#"><span>Nulla varius commodo</span></a></li>
                                    <li><a href="#"><span>Donec consectetuer</span></a></li>
                                    <li><a href="#"><span>Fermentum vitae</span></a></li>
                                    <li><a href="#"><span>Quisque fermentum</span></a></li>
                                    <li><a href="#"><span>Egestas augue</span></a></li>
                                </ul>
                            </div><!-- end widgetbox -->
                            
                            <div class=" widgetbox ">
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
        <div class="footerFix"></div><!-- FooterFix (needed for properly rendering the #main div) -->
        
        
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
        $.backstretch("images/bg1.jpg");
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