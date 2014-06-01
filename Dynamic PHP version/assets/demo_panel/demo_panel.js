(function($){ 
	$(document).ready(function(){
		var $op = $('#options_panel'),
			$op_btn = $('#options_panel h3');
			
		$op_btn.click(function(){
			if($op.hasClass('opened')) {
				$op.removeClass('opened').animate({'top':'-'+140+'px', opacity:.7}, 500,'easeOutExpo');
			} else {
				$op.addClass('opened').animate({'top':0, opacity:1}, 500,'easeOutBounce');
			}
		});
			
		$('#options_panel ul').each(function(i, el) {
			var $opts_elems = $(this).find('li');
			$opts_elems.each(function(i, el) {
				var $t = $(this),
					$data = $t.data('type'),
					$tpar = $t.parent(),
					$body = $('body'),
					$aheader = $('#header').data('type'),
					$header = $('#header');
				if($t.data('type')==$aheader)
					$t.addClass('active');
				$t.click(function(){
					$opts_elems.removeClass('active');
					$t.addClass('active');
					if($tpar.hasClass('header_type')){
						if($data == 'animatedfull') {
							$header.css({'bottom':$('#footer').height()+2});
						}
						$header.attr('class', $data);
						$body.removeClass('header-vertical header-navbar header-animatedfull');
						$body.addClass('header-'+$data);
					} else if($tpar.hasClass('theme')){
						$body.removeClass('light dark');
						$body.addClass($data);
					}
				});
			});
		});
	});
	/*
	function checkHeaderType(){
		var $ww = $(window).width(),
			$mn = $('#header'),
			$hdt = $mn.data('type'),
			$body = $('body');
			
		if($hdt != 'navbar') {
			
			if($ww > 1024) {
				if($('#options_panel').length > 0) { 
					$hdt = $('#options_panel ul.header_type li.active').data('type');
				}
					$mn.removeClass('navbar vertical animatedfull');
					$body.removeClass('header-navbar header-vertical header-animatedfull');
					if($hdt == 'vertical') {
						$mn.addClass('vertical');
						$body.addClass('header-vertical');
					}
					else if($hdt == 'animatedfull') {
						$mn.addClass('animatedfull');
						$body.addClass('header-animatedfull');
					}
				
					
			} else if($ww < 1024) {
				$('#header').css({'height': 'auto', 'bottom':'auto', 'left':'auto'});
				$mn.removeClass('vertical animatedfull');
				$body.removeClass('header-navbar header-vertical header-animatedfull');
				$mn.addClass('navbar');
				$body.addClass('header-navbar');
			}
		}
	}
	*/
})(jQuery);