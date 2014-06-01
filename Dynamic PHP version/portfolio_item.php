<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>PORTFOLIO ITEM | EKHO Template</title>
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
                            <span>FEATURES</span>
                            <span class="brd_separator">/</span>
                            <span>PORTFOLIO</span>
                            <span class="brd_separator">/</span>
                            <span>PORTFOLIO ITEM</span>
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
                        
                            <div class="hg-portfolio-item">
                                <h1 class="title">This is a portfolio item</h1>
                                
                                <div class="category-desc">
                                    <p>Sed rhoncus leo sodales metus tincidunt eleifend. Phasellus enim eros, faucibus eget convallis eu, egestas a libero. Proin porttitor congue dolor a accumsan. Vivamus mattis pharetra tellus sed placerat. Duis magna purus, elementum eu sollicitudin vitae, sodales in odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus cursus hendrerit convallis.</p>
                                </div>
                                
                                <div class="img-full" style="float:right; margin-left:25px;">
                                    <a href="images/portfolio_images/ptf1.jpg" rel="prettyPhoto">
                                        <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf1.jpg&amp;w=480" alt="Sollicitudin vitae sodales in odio" class="shadow" />
                                    </a>
                                    <div class="clear"></div>
                                
                                    <div class="itemLinks">
                                        <p><a href="http://www.website-preview.com/" target="_blank" >Live Preview: <strong>www.website-preview.com</strong></a></p>
                                        <p>Our collaborators: <strong>John Doe, Steve Walker</strong></p>
                                    </div>
                                
                                    <div class="itemSocialSharing clearfix">
                                        
                                        <!-- Twitter Button -->
                                        <div class="itemTwitterButton">
                                            <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a>
                                            <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
                                        </div>
                                        
                                        <!-- Facebook Button -->
                                        <div class="itemFacebookButton">
                                            <div id="fb-root"></div>
                                            <script type="text/javascript">
                                                (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) {return;}
                                                js = d.createElement(s); js.id = id;
                                                js.src = "//connect.facebook.net/en_US/all.js#appId=177111755694317&xfbml=1";
                                                fjs.parentNode.insertBefore(js, fjs);
                                                }(document, 'script', 'facebook-jssdk'));
                                            </script>
                                            <div class="fb-like" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
                                        </div>
                                        
                                        <!-- Google +1 Button -->
                                        <div class="itemGooglePlusOneButton">	
                                            <g:plusone size="medium"></g:plusone>
                                            <script type="text/javascript">
                                                (function() {
                                                window.___gcfg = {lang: 'en'}; // Define button default language here
                                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                                po.src = 'https://apis.google.com/js/plusone.js';
                                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                                })();
                                            </script>
                                        </div>
                                        
                                        <div class="clr"></div>
                                    </div><!-- social links -->
                                
                                </div><!-- right side -->

                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Nam vitae metus a orci iaculis facilisis. Maecenas dapibus tristique nunc.</p>
                                    <h5><strong>What we did</strong></h5>
                                    <ul class="list-type-5 cols-2 clearfix " >
                                        <li>Design &amp; Wireframing</li>
                                        <li>SEO</li>
                                        <li>Copywriting</li>
                                        <li>Content Management</li>
                                        <li>Social Media Marketing</li>
                                    </ul>
                                    <p>Integer euismod lacus luctus magna. <strong>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</strong>. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. <strong>Ut fringilla</strong>. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. <strong><br /></strong></p>
                                </div><!-- end text -->
                                <div class="clear"></div>

                                <ul class="other-images clearfix">
                                    <li>
                                        <a href="images/portfolio_images/other/scottwills_cityscape.jpg" rel="prettyPhoto">
                                            <img src="php_helpers/timthumb.php?src=images/portfolio_images/other/scottwills_cityscape.jpg&amp;w=210&amp;h=160&amp;zc=1" alt="Sollicitudin vitae sodales in odio" class="shadow" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/portfolio_images/other/scottwills_cityscape2.jpg" rel="prettyPhoto">
                                            <img src="php_helpers/timthumb.php?src=images/portfolio_images/other/scottwills_cityscape2.jpg&amp;w=210&amp;h=160&amp;zc=1" alt="Sollicitudin vitae sodales in odio" class="shadow" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/portfolio_images/other/scottwills_crossing.jpg" rel="prettyPhoto">
                                            <img src="php_helpers/timthumb.php?src=images/portfolio_images/other/scottwills_crossing.jpg&amp;w=210&amp;h=160&amp;zc=1" alt="Sollicitudin vitae sodales in odio" class="shadow" />
                                        </a>
                                    </li>
                                    <li>
                                        <iframe src="http://www.youtube.com/embed/XXAzGGX2tpw?wmode=transparent&amp;rel=0" width="210" height="160" frameborder="0" webkitallowfullscreen="" allowfullscreen=""></iframe>
                                    </li>
                                </ul><!-- other images/videos -->
                            
                            </div><!-- end Portfolio page -->

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
	
    <!-- Start Backstretch full-background code -->
    <script type = "text/javascript" src="js/jquery.backstretch.min.js"></script>
	<script type="text/javascript">
    (function($){
		// trigger the Fullscreen background
        $.backstretch("images/bg1.jpg");
    })(jQuery);
	</script><!-- End Backstretch full-background code -->
	
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>