/**
*	EKHO TEMPLATE main scripts file
*	www.hogash.com
**/
var gradient = 'radial'; 	// Do you want a page gradient background? Choose between: linear, radial, none ;
var demo_panel = 0; 		// Enable DEMO PANEL? 1 - Yes / 0 - No
var domainroot="http://hogash.com/demo/ekho_html/"; // Specify your domain below. The search results will only be made for your website

var enable_mobile = 0; 		// Enable mobile version redirect?   1 - Yes / 0 - No
var mobile_url = "hogash.com/demo/ekho_html/mobile/"; // If mobile enabled, where to redirect?

if(enable_mobile == 1) {
			
	// Create the Script Object
	var script = document.createElement('script');
	script.src = 'js/redirection_mobile.min.js';
	script.type = 'text/javascript';
	script.defer = true;
	script.id = 'scriptID'; // This will help us in referencing the object later for removal
	// Insert the created object to the html head element
	var head = document.getElementsByTagName('head').item(0);
	head.appendChild(script);
	
	(function($){ 
		$(window).load(function(){
			SA.redirection_mobile ({
				noredirection_param:"noredirection",
				mobile_url : mobile_url, // put here your own link
				mobile_prefix : "http",
				cookie_hours : "2" 
			});
		});
	})(jQuery);

}

// START CUSTOM JS CODE
;(function($){ 
	
	$(document).ready(function(){
		
		// LOAD SUPERFISH MENU
		if(jQuery.isFunction(jQuery.fn.supersubs) && jQuery.isFunction(jQuery.fn.superfish)) { 
			jQuery("ul.jt-menu").supersubs({ 
				minWidth:    12,   // minimum width of sub-menus in em units 
				maxWidth:    27,   // maximum width of sub-menus in em units 
				extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
			}).superfish({ 
				animation:  {opacity:'show', height:'show'},
				delay:      500,
				speed:      'fast',
				dropShadows:false,
				autoArrows: true 
			});
		}
		
		var $header = $('#header'),
			$headerA = $('#header.animatedfull'),
			to = '-'+200+'px',
			$ww = $(window).width();
			
		// animate header full
		$headerA.css({'height': 'auto', 'bottom':$('#footer').height()+2});	
		$headerA.stop().animate({left: to}, 'fast');
		$headerA.live('mouseenter',function(){
			$headerA.stop().animate({left: 0}, { queue:false, duration: 300 });
		});
		$headerA.live('mouseleave',function(){
			setTimeout(function(){
				$headerA.stop().animate({left: to}, { queue:false, duration: 300 });
			},1000);
		});
		
		// execute backstretch link
		$(".backstretch_link").click(function(e) {
			e.preventDefault();
			if(jQuery.isFunction(jQuery.fn.backstretch)) { 
				$.backstretch($(this).attr('href'));
			}
		});
		
		// LOAD DATA INTO THE CURRENT-DATE DIV
		$.ajax({
		  url: "php_helpers/date.php",
		  success: function(data){
			$("#current-date").html(data);
		  }
		});
		
		
		// PREPARE THE NEWSLETTER AND SEND DATA TO MAILCHIMP
		$('#newsletter_subscribe').submit(function() {
			$.ajax({
				url: 'php_helpers/newsletter_subscribe.php',
				type: 'POST',
				data: {
					email: $('#user_mail').attr('value'),
					yname: $('#user_name').attr('value')
				},
				success: function(data){
					$('#result').html(data).css('color', 'green');
				},
				error: function() {
					$('#result').html('Sorry, an error occurred.').css('color', 'red');
				}
			});
			return false;
		});
		
		//hack for IE on the social connect buttons
		if($.browser.msie){
			 $('.social-connect li').live('mouseenter',function() {
				$(this).addClass('hover');
			 });
			 $('.social-connect li iframe').live('hover',function() {
				$(this).parents(".item").addClass('hover');
			 });
			 $(".social-connect li").live('mouseleave',function() {
				$(this).removeClass('hover');
			 });
		}
	});
	
	$(window).load(function(){
		
		// add width attribute styles to the menu items
		var menuLis = $("#header.vertical #menu .jt-menu > li > a");
		
		if(menuLis.length > 0) {
			menuLis.each(function() {
				var $this = $(this);
				
				$this.data('width', $this.width()+4);
				if($this.data('width') <= '155') {
					$this.addClass('nowrap');
				}
				$this.hover(function() {  
					$this.stop().animate({width:"12em"}, 100);
				},
				function() {
					$this.stop().animate({width: $this.data('width') + "px"}, 100);
				})
			});
		}
		
		
		// hover effect
		$('.hover_effect').each(function(){
			var hoverLink = $(this),
				hoverLinkImg = hoverLink.find('img'),
				hoverLinkTitle = hoverLink.attr('title');
			hoverLink.css({'width':hoverLinkImg.width(), 'height':hoverLinkImg.height()}).append("<span class=\"title\">"+hoverLinkTitle+"</span>");
		});
		
		//hoverlink
		$("a.hoverLink").each(function(index, element) {
            var $t = $(this),
				dtype = $t.data('type'),
				img = $t.find('img'),
				sp = 'fast',
				app = '<span class="icon_wrap"><span class="icon '+dtype+'"></span></span>';
			$t.append(app);
			
			$t.hover(function(){
				img.animate({'opacity': 0.5}, sp);
				$t.find('.icon_wrap').animate({'opacity': 1}, sp);
			}, function(){
				img.animate({'opacity': 1}, sp);
				$t.find('.icon_wrap').animate({'opacity': 0}, sp);
			});
        });
		
		// Trigger the Live Social panel
		$("#livesocial ul.triggers").iconToPopup({
			direction: "right",
			distance:"200px",
			destination: $("#livesocial ul.triggers").width()+15
		});
		
		// trigger the Contact details panel
		$("#contact_details .iconWidgetIcon").iconToPopup({
			direction: "bottom",
			distance:"150px",
			destination: $("#footer").height()-5
		});
		
		// trigger the Newsletter panel
		$("#newsletter_form .iconWidgetIcon").iconToPopup({
			direction: "bottom",
			distance:"150px",
			destination: $("#footer").height()-5
		});
		
		if(gradient != 'none')
			$('#gradient').addClass(gradient);
		else
			$('#gradient').hide();
			
		if(demo_panel == 1) {
			$.ajax({
			  url: "assets/demo_panel/demo_panel.php",
			  success: function(data){
				$("#demo").html(data);
			  }
			});
		}
	});
	
	function checkHeaderType(){
		var $ww = $(window).width(),
			$mn = $('#header'),
			$hdt = $mn.data('type'),
			$body = $('body');
			
		if($hdt != 'navbar') {
			
			$mn.removeClass('vertical animatedfull navbar');
			$body.removeClass('header-navbar header-vertical header-animatedfull');
			
			if($ww > 1024) {
				$mn.addClass($hdt);
				$body.addClass('header-'+$hdt);
			} else if($ww < 1024) {
				$mn.addClass('navbar');
				$body.addClass('header-navbar');
				
			}
		}
	}
	
	$(window).on('resize', function() {
		checkHeaderType();
		
		// main container >> minimize/maximize
		var $c = $("#mainClose");
		if($c.hasClass('minimized'))
			mainClose('minimize');
		else if($c.hasClass('maximized'))
			mainClose('maximize')
	});
	
	function mainClose(state){
			
        var h = $(window).height(),
			f = $('#footer').height(),
			s = 'fast',
			b = $('#breadcrumbs, #maintop'),
			$m = $('#main'),
			hh = 1;
			if($('body').hasClass('browserIpad'))
				hh = $('#header').height()+20;

			if(state=='minimize') {
       			$m.animate({ 'bottom' : '-'+(h-f-hh-115)+'px' }, s);
				b.fadeOut('fast');
			} else if(state=='maximize') {
				$m.animate({ 'bottom' : 0 }, s);
				b.fadeIn('fast');
			}
			
		return;
	}
    $(window).load(function(){
		var $t = $("#mainClose");
		if($('body').hasClass('minimized')) {
    		mainClose('minimize');
			$t.removeClass('maximized');
			$t.addClass('minimized').attr('title','Maximize');
		}
		//check menu
		checkHeaderType();
		
		

		/*
		* ### HOW TO CREATE A VALID ID TO USE: ### 
		* Go to www.twitter.com and sign in as normal, go to your settings page. 
		* Go to Widgets on the left hand side. 
		* Create a new widget for what you need eg user timeline or search etc.  
		* Feel free to check exclude replies if you dont want replies in results. 
		* Now go back to settings page, and then go back to widgets page, you should 
		* see the widget you just created. Click edit. 
		* Now look at the URL in your web browser, you will see a long number like this: 
		* 345735908357048478 
		* Use this as your ID below instead! 
		*/
		twitterFetcher.fetch('0000000000000', 'twitterFeed', 1, true, false, true, 'default', true, null, false );

    });
	$(document).ready(function(){
		
		$("#mainClose").click(function(){
			var $m = $('#main'),
				$t = $(this);
			if($t.hasClass('minimized')) {
				mainClose('maximize');
				$t.removeClass('minimized');
				$t.addClass('maximized');
				$t.attr('title','Minimize');
			} else if($t.hasClass('maximized')) {
				mainClose('minimize');
				$t.removeClass('maximized');
				$t.addClass('minimized');
				$t.attr('title','Maximize');
			}
		});
	});
	
//////////////////////////////////////////////////////////////////////////  
// ICON TO POP-UP SCRIPT
//////////////////////////////////////////////////////////////////////////  
	$.fn.iconToPopup = function (settings) {
		
		var iconWidget = $(this),
			iconWidgetContainer = iconWidget.next(),
			iconWidgetParent =  iconWidget.parent(),
			direction = settings.direction,
			closeIconWidget = iconWidgetContainer.find('.closeIconWidget');
		
		$.each([iconWidget, closeIconWidget], function() {
			$(this).click(function(e){
				e.preventDefault();
				if(!iconWidgetParent.hasClass('visible')){
					if(direction == "bottom")
						iconWidgetContainer.animate({opacity: 1, bottom: settings.destination}, {queue:false, duration: 300, easing:'easeInExpo'}).css('display','block');
					else if(direction == "right")
						iconWidgetContainer.animate({opacity: 1, right: settings.destination}, {queue:false, duration: 300, easing:'easeInExpo'}).css('display','block');
					iconWidgetParent.addClass('visible');
				} else {
					if(direction == "bottom")
					iconWidgetContainer.animate({opacity: 0, bottom: settings.distance}, {queue:false, duration: 300, easing:'easeInExpo'}, setTimeout(function(){
						iconWidgetContainer.css('display','none');
					},400));
					else if(direction == "right")
					iconWidgetContainer.animate({opacity: 0, right: settings.distance}, {queue:false, duration: 300, easing:'easeInExpo'}, setTimeout(function(){
						iconWidgetContainer.css('display','none');
					},400));
					iconWidgetParent.removeClass('visible');
				}
			});
		});
		
    };
	
	$(document).ready(function() {
//////////////////////////////////////////////////////////////////////////  
// ACCORDION - Tutorial by Soh Tanaka - http://www.sohtanaka.com/web-design/easy-toggle-jquery-tutorial/
//////////////////////////////////////////////////////////////////////////  
   
	$('.acc_container').hide(); //Hide/close all containers
	   
	// if you want to show the first div uncomment the line below  <-- read this
	//Add "active" class to first trigger, then show/open the immediate next container
	//$('.acc_trigger:first').addClass('active').next().show(); 
	   
	$('.acc_trigger').click(function(e){
		if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
			$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next container
			$(this).toggleClass('active').next().slideDown(); //Add "active" state to clicked trigger and slide down the immediate next container
		} else {
			$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next container
		}
		e.preventDefault(); //Prevent the browser jump to the link anchor
	});
 
//////////////////////////////////////////////////////////////////////////  
// TOGGLES - Tutorial by Soh Tanaka - http://www.sohtanaka.com/web-design/easy-toggle-jquery-tutorial/
//////////////////////////////////////////////////////////////////////////  
 
		//Hide (Collapse) the toggle containers on load
		$(".toggle_container").hide(); 
	 
		//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
		$(".tgg-trigger").click(function(){
			$(this).toggleClass("active").next().slideToggle("slow");
			return false; //Prevent the browser jump to the link anchor
		});
   
	});

   
//////////////////////////////////////////////////////////////////////////  
// SIMPLE TABS - Tutorial by Soh Tanaka - http://www.sohtanaka.com/web-design/simple-tabs-w-css-jquery/
//////////////////////////////////////////////////////////////////////////  
   
    $.fn.simpleTabs = function (options) {
        var $t = $(this),
        tc = $t.find(".tab_content");
        tc.hide(); //Hide all content
        $t.find("ul.tabs li:first").addClass("active").show(); //Activate first tab
        $t.find(".tab_content:first").show(); //Show first tab content
           
        //On Click Event
        $t.find("ul.tabs li").click(function(e) {
            e.preventDefault();
            $t.find("ul.tabs li").removeClass("active"); //Remove any "active" class
            $(this).addClass("active"); //Add "active" class to selected tab
            tc.hide(); //Hide all tab content
            var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            $(activeTab).fadeIn(); //Fade in the active content
        });
    };
     
	
})(jQuery);

var sP = jQuery.noConflict();
var Spark=function(){var a=this;this.b="images/sparkles/";this.s=["spark.png","spark2.png","spark3.png","spark4.png","spark5.png","spark6.png"];this.i=this.s[this.random(this.s.length)];this.f=this.b+this.i;this.n=document.createElement("img");this.newSpeed().newPoint().display().newPoint().fly()};Spark.prototype.display=function(){sP(this.n).attr("src",this.f).css("position","absolute").css("z-index",this.random(-3)).css("top",this.pointY).css("left",this.pointX);sP(document.getElementById("sparkles")).append(this.n);return this};Spark.prototype.fly=function(){var a=this;sP(this.n).animate({top:this.pointY,left:this.pointX},this.speed,"linear",function(){a.newSpeed().newPoint().fly()})};Spark.prototype.newSpeed=function(){this.speed=(this.random(10)+5)*1100;return this};Spark.prototype.newPoint=function(){this.pointX=this.random(window.innerWidth-100);this.pointY=this.random(650);return this};Spark.prototype.random=function(a){return Math.ceil(Math.random()*a)-1};sP(function(){if(sP.browser.msie&&sP.browser.version<9){return}var a=40;var b=[];for(i=0;i<a;i++){b[i]=new Spark()}});

function Gsitesearch(curobj){
	curobj.q.value="site:"+domainroot+" "+curobj.qfront.value
}