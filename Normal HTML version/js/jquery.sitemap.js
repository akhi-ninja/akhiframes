(function($){ 

$.fn.doFade = function(settings) {

    // if no paramaters supplied...
	settings = $.extend({
		fadeColor: "black",
		duration: 200,
		fadeOn: 0.95,
		fadeOff: 0.5
	}, settings);

    var duration = settings.duration;
    var fadeOff = settings.fadeOff;
    var fadeOn = settings.fadeOn;
    var fadeColor = settings.fadeColor;
        
    $(this).hover(function(){
	  $(this)
	      .stop()
	      .data("origColor", $(this).css("background-color"))
	      .animate({
	          opacity: fadeOn,
	          backgroundColor: fadeColor
	      }, duration)
	}, function() {
	  $(this)
	      .stop()
	      .animate({
	          opacity: fadeOff,
	          backgroundColor: $(this).data("origColor")
	      }, duration)
	});

};
	
	
})(jQuery);