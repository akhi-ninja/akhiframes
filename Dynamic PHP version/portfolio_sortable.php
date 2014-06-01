<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>PORTFOLIO - SORTABLE | EKHO Template</title>
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
                            <span>PORTFOLIO - SORTABLE</span>
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
                        
                            <div class="hg-portfolio-sortable">
                                <h1 class="title">Portfolio - Sortable</h1>
                                
                                <div class="category-desc">
                                    <p>Sed rhoncus leo sodales metus tincidunt eleifend. Phasellus enim eros, faucibus eget convallis eu, egestas a libero. Proin porttitor congue dolor a accumsan. Vivamus mattis pharetra tellus sed placerat. Duis magna purus, elementum eu sollicitudin vitae, sodales in odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus cursus hendrerit convallis.</p>
                                </div>
                                
                                <div id="sorting" class="clearfix">
                                    <span class="sortTitle"> Sort By: </span>
                                    <ul id="sortBy" class="option-set " data-option-key="sortBy">
                                        <li><a href="#sortBy=name" data-option-value="name">Name</a></li>
                                        <li><a href="#sortBy=date" data-option-value="date">Date</a></li>
                                    </ul>
                                    <span class="sortTitle"> Direction: </span>
                                    <ul id="sort-direction" class="option-set " data-option-key="sortAscending">
                                        <li><a href="#sortAscending=true" data-option-value="true">ASC</a></li>
                                        <li><a href="#sortAscending=false" data-option-value="false">DESC</a></li>
                                    </ul>
                                </div><!-- end sorting toolbar -->
                                
                                <ul id="portfolio-nav" class="clearfix">
                                    <li class="current"><a href="#" data-filter="*">All</a></li>
                                    <li><a href="#" data-filter=".websites">Websites</a></li>
                                    <li><a href="#" data-filter=".print">Print</a></li>
                                    <li><a href="#" data-filter=".logo">Logo</a></li>
                                </ul><!-- end nav toolbar -->
                                
                                <div class="clear"></div>
                                
                                <ul id="thumbs" class="clearfix">
                                    <li class="item websites even" data-date="2012/06/12">
                                        <div class="inner-item">
                                            <a href="portfolio_item.html" data-type="link" class="hoverLink" >
                                                <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf1.jpg&amp;w=210&amp;h=135&amp;zc=1" alt="Sed fringilla mauris"/>
                                            </a>
                                            <h4 class="title">
                                                <a href="portfolio_item.html"><span class="name">Sed fringilla mauris</span></a>
                                            </h4>
                                            <span class="moduleDesc">
                                                <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                            </span>
                                            <div class="clear"></div>
                                        </div><!-- end ITEM (.inner-item) -->
                                    </li>
                                    <li class="item websites odd" data-date="2012/06/12">
                                    <div class="inner-item">
                                        <a href="http://www.youtube.com/watch?v=XXAzGGX2tpw" data-rel="prettyPhoto"  data-type="video" class="hoverLink" >
                                            <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf1.jpg&amp;w=210&amp;h=135&amp;zc=1" alt="Nullam dictum felis"/>
                                        </a>
                                        <h4 class="title">
                                            <a href="http://www.youtube.com/watch?v=XXAzGGX2tpw"><span class="name">Nullam dictum felis</span></a>
                                        </h4>
                                        <span class="moduleDesc">
                                            <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                        </span>
                                        <div class="clear"></div>
                                    </div><!-- end ITEM (.inner-item) -->
                                    </li>
                                    <li class="item websites even" data-date="2012/06/12">
                                        <div class="inner-item">
                                            <a href="portfolio_item.html" data-type="link" class="hoverLink" >
                                                <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf3.jpg&amp;w=210&amp;h=135&amp;zc=1" alt="Maecenas tempus"/>
                                            </a>
                                            <h4 class="title">
                                                <a href="portfolio_item.html"><span class="name">Maecenas tempus</span></a>
                                            </h4>
                                            <span class="moduleDesc">
                                                <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                            </span>
                                            <div class="clear"></div>
                                        </div><!-- end ITEM (.inner-item) -->
                                    </li>
                                    <li class="item print odd" data-date="2012/06/12">
                                        <div class="inner-item">
                                            <a href="portfolio_item.html" data-type="link" class="hoverLink" >
                                                <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf4.jpg&amp;w=210&amp;h=135&amp;zc=1" alt="Blandit luctus pulvinar"/>
                                            </a>
                                            <h4 class="title">
                                                <a href="portfolio_item.html"><span class="name">Blandit luctus pulvinar</span></a>
                                            </h4>
                                            <span class="moduleDesc">
                                                <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                            </span>
                                            <div class="clear"></div>
                                        </div><!-- end ITEM (.inner-item) -->
                                    </li>
                                    <li class="item websites even" data-date="2012/06/12">
                                        <div class="inner-item">
                                            <a href="portfolio_item.html" data-type="link" class="hoverLink" >
                                                <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf1.jpg&amp;w=210&amp;h=135&amp;zc=1" alt="Libero venenatis"/>
                                            </a>
                                            <h4 class="title">
                                                <a href="portfolio_item.html"><span class="name">Libero venenatis</span></a>
                                            </h4>
                                            <span class="moduleDesc">
                                                <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                            </span>
                                            <div class="clear"></div>
                                        </div><!-- end ITEM (.inner-item) -->
                                    </li>
                                    <li class="item logo odd" data-date="2012/06/12">
                                        <div class="inner-item">
                                            <a href="http://www.website-preview.com/"  target="_blank" data-type="extlink" class="hoverLink" >
                                                <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf3.jpg&amp;w=210&amp;h=135&amp;zc=1" alt="Quam semper libero"/>
                                            </a>
                                            <h4 class="title">
                                                <a href="http://www.website-preview.com/"><span class="name">Quam semper libero</span></a>
                                            </h4>
                                            <span class="moduleDesc">
                                                <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                            </span>
                                            <div class="clear"></div>
                                        </div><!-- end ITEM (.inner-item) -->
                                    </li>
                                    <li class="item websites even" data-date="2012/06/12">
                                        <div class="inner-item">
                                            <a href="portfolio_item.html" data-type="link" class="hoverLink" >
                                                <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf2.jpg&amp;w=210&amp;h=135&amp;zc=1" alt="Ultricies nisi vel augue"/>
                                            </a>
                                            <h4 class="title">
                                                <a href="portfolio_item.html"><span class="name">Ultricies nisi vel augue</span></a>
                                            </h4>
                                            <span class="moduleDesc">
                                                <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                            </span>
                                            <div class="clear"></div>
                                        </div><!-- end ITEM (.inner-item) -->
                                    </li>
                                    <li class="item logo odd" data-date="2012/06/12">
                                        <div class="inner-item">
                                            <a href="images/portfolio_images/ptf2.jpg" data-rel="prettyPhoto"  data-type="image" class="hoverLink" >
                                                <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf2.jpg&amp;w=210&amp;h=135&amp;zc=1" alt="Etiam ultricies nisi"/>
                                            </a>
                                            <h4 class="title">
                                                <a href="images/portfolio_images/ptf2.jpg"><span class="name">Etiam ultricies nisi</span></a>
                                            </h4>
                                            <span class="moduleDesc">
                                                <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                            </span>
                                            <div class="clear"></div>
                                        </div><!-- end ITEM (.inner-item) -->
                                    </li>
                                    <li class="item websites even lastItem" data-date="2012/06/12">
                                        <div class="inner-item">
                                            <a href="portfolio_item.html" data-type="link" class="hoverLink" >
                                                <img src="php_helpers/timthumb.php?src=images/portfolio_images/ptf3.jpg&amp;w=210&amp;h=135&amp;zc=1" alt="Aenean leo ligula"/>
                                            </a>
                                            <h4 class="title">
                                                <a href="portfolio_item.html"><span class="name">Aenean leo ligula</span></a>
                                            </h4>
                                            <span class="moduleDesc">
                                                <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                            </span>
                                            <div class="clear"></div>
                                        </div><!-- end ITEM (.inner-item) -->
                                    </li>
                                </ul><!-- end items list -->
                            
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
	
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	(function($){ 
		$(window).load(function(){
			
			// settings
			var sortBy = 'date', 		// SORTING: date / name
				sortAscending = true; 	// SORTING ORDER: true = Ascending / false = Descending
			
			$('#sortBy li a').each(function(index, element) {
				var $t = $(this);
				if($t.attr('data-option-value') == sortBy)
					$t.addClass('selected');
			});
			$('#sort-direction li a').each(function(index, element) {
				var $t = $(this);
				if($t.attr('data-option-value') == sortAscending.toString())
					$t.addClass('selected');
			});
					
			// don't edit below unless you know what you're doing
			if ($("ul#thumbs").length > 0){
				var $container = $("ul#thumbs");
				$container.isotope({
				  itemSelector : ".item",
				  animationEngine : "jquery",
				  animationOptions: {
					  duration: 250,
					  easing: "easeOutExpo",
					  queue: false
				  },
				  sortAscending : sortAscending,
				  getSortData : {
					  name : function ( $elem ) {
						  return $elem.find("span.name").text();
					  },
					  date : function ( $elem ) {
						  return $elem.attr("data-date");
					  }
				  },
				  sortBy: sortBy
				});
				
			}
		});
	})(jQuery);
	</script>
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>