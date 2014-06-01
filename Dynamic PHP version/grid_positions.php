<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>GRID POSITIONS | EKHO Template</title>
<?php include ('inc.head.php'); ?>

<style type="text/css">
.example-grid .column,
.example-grid .columns {background: #fff; height: 25px; line-height: 25px; margin-bottom: 10px; text-align: center; text-transform: uppercase; color: #555; font-size: 12px; font-weight: bold; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; }
.example-grid .column:hover,
.example-grid .columns:hover {background: #eee; color: #333; }
.example-grid { overflow: hidden; }
.dark .example-grid .column,
.dark .example-grid .columns {background:#000; color:#aaa;}
.dark .example-grid .column:hover,
.dark .example-grid .columns:hover {background: #333; color: #bbb; }
</style>

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
                            <span>GRID POSITIONS</span>
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
                                <h2>GRID POSITIONS</h2>
                                
                                <p>This grid is based on the <a href="http://www.getskeleton.com" target="_blank">Skeleton Boilerplate</a> template by Dave Gamache. Skeleton's base grid is a variation of the 960 grid system. The syntax is simple and it's effective cross browser.</p>
                                <p>It has 16 columns each one having 40px.</p>
                                <p>The syntax for a grid column should be "nr_of_cols + column/columns + alpha/omega ". For example a 5 column grid has the syntax &lt;div class="five columns"&gt; .<br> Alpha or Omega classes should be added if first starting column or last (to eliminate margins).</p>
                                <p>You can see a demo below how the grid is working:</p>
                                
                                <div class="example-grid">
                                    <div class="one column alpha">One</div>
                                    <div class="fifteen columns omega">Fifteen</div>
                                    <div class="two columns alpha">Two</div>
                                    <div class="fourteen columns omega">Fourteen</div>
                                    <div class="three columns alpha">Three</div>
                                    <div class="thirteen columns omega">Thirteen</div>
                                    <div class="four columns alpha">Four</div>
                                    <div class="twelve columns omega">Twelve</div>
                                    <div class="five columns alpha">Five</div>
                                    <div class="eleven columns omega">Eleven</div>
                                    <div class="six columns alpha">Six</div>
                                    <div class="ten columns omega">Ten</div>
                                    <div class="seven columns alpha">Seven</div>
                                    <div class="nine columns omega">Nine</div>
                                    <div class="eight columns alpha">Eight</div>
                                    <div class="eight  columns omega">Eight</div>
                                    <div class="nine columns alpha">Nine</div>
                                    <div class="seven columns omega">Seven</div>
                                    <div class="ten columns alpha">Ten</div>
                                    <div class="six columns omega">Six</div>
                                    <div class="eleven columns alpha">Eleven</div>
                                    <div class="five columns omega">Five</div>
                                    <div class="twelve columns alpha">Twelve</div>
                                    <div class="four columns omega">Four</div>
                                    <div class="thirteen columns alpha">Thirteen</div>
                                    <div class="three columns omega">Three</div>
                                    <div class="fourteen columns alpha">Fourteen</div>
                                    <div class="two columns omega">Two</div>
                                    <div class="fifteen columns alpha">Fifteen</div>
                                    <div class="one column omega">One</div>
                                    <div class="sixteen columns omega alpha">Sixteen</div>
                                </div><!-- end example grid -->
                                
                                <div class="example-grid">
                                    <div class="one-third column alpha">One-Third</div>
                                    <div class="one-third column">One-Third</div>
                                    <div class="one-third column omega">One-Third</div>
                                </div><!-- end example grid -->
                                
                                <div class="example-grid">
                                    <div class="two-thirds column alpha">Two-Thirds</div>
                                    <div class="one-third column omega">One-Third</div>
                                </div><!-- end example grid -->
								
                                <h4>Offset columns (push them to the right)</h4>
								<div class="example-grid bxsize">
                                    <div class="three columns alpha offset-by-one">One (Offset by two)</div>
                                    <div class="four columns offset-by-three">Four (offset by three)</div>
                                    <div class="five columns omega">Six</div>
                                </div><!-- end example grid -->
                                <div class="clear"></div>
								<script type="text/javascript">
                                (function($){
                                    // grid display helper
                                    var originalText;
                                    $('.example-grid').children().hover(
                                    function() {
                                        originalText = $(this).text();
                                        $(this).html($(this).width()+'px');
                                    },
                                    function() {
                                        $(this).html(originalText);
                                    });
                                })(jQuery);
                                </script>

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