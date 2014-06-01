<div id="demo"></div>

<!-- superfish menu -->
<script type = "text/javascript" src="js/superfish.min.js"></script>
<script type = "text/javascript" src="js/supersubs.min.js"></script>
<!-- end superfish menu -->
    
<!-- prettyphoto scripts & styles -->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    jQuery("a[data-rel^='prettyPhoto'], a[rel^='prettyPhoto'], .prettyphoto_link").prettyPhoto({
        theme:'pp_ekho',
		social_tools:false
    });
});
</script>
<!--end prettyphoto -->

<!-- tipsy scripts & styles -->
<link rel="stylesheet" href="css/tipsy.css" type="text/css" />
<script type="text/javascript" src="js/jquery.tipsy.min.js"></script>
<script type="text/javascript">
    (function($){ $('a[data-rel=tipsy]').tipsy({fade: true, gravity: 'sw',opacity: 0.9}); $('a[data-rel=tipsye]').tipsy({gravity: 'e',opacity: 0.9});})(jQuery);
</script>
<!--end tipsy -->
    
<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script><!-- jquery easing -->

<script src="js/twitterFetcher_v10_min.js" type="text/javascript"></script>
<!-- This is the twitter feed. Unless you know what you're doing, try leaving intact. If you don't want twitter to appear on your website, delete #twitterFeed and it's script in ekho_scripts.js at line 274  -->