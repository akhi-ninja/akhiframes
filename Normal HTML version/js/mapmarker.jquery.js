(function($){
	$.fn.mapmarker = function(options){
		var opts = $.extend({}, $.fn.mapmarker.defaults, options);

		return this.each(function() {
			// Apply plugin functionality to each element
			var map_element = this;
			addMapMarker(map_element, opts.zoom, opts.center, opts.type, opts.dragging, opts.mousewheel, opts.controls, opts.markers, opts.styling, opts.featureType, opts.visibility, opts.elementType, opts.hue, opts.saturation, opts.lightness, opts.gamma);
			
		});
	};
	
	// Set up default values
	var defaultMarkers = {
		"markers": []
	};

	$.fn.mapmarker.defaults = {
		zoom		: 8,
		center		: '0,0',
		type		: 'ROADMAP',
		controls	: 'HORIZONTAL_BAR',
		dragging	: 1,
		mousewheel	: 0,
		markers		: defaultMarkers,
		styling		: 0,
		featureType	: "road",
		visibility	: "simplified",
		elementType	: "all",
		hue			: "#00E5FF",
		saturation	: 0,
		lightness	: 0,
		gamma		: 1
	}

	// Main function code here (ref:google map api v3)
	function addMapMarker(map_element, zoom, center, type, dragging, mousewheel, controls, markers, styling, featureType, visibility, elementType, hue, saturation, lightness, gamma){
		dragging = (dragging) ? true : false;
		mousewheel = (mousewheel) ? true : false;
		var maptype;
		switch(type) {
			case"ROADMAP":
			default:
				maptype = google.maps.MapTypeId.ROADMAP;
			break;
			case"TERRAIN":
				maptype = google.maps.MapTypeId.TERRAIN;
			break;
			case"SATELLITE":
				maptype = google.maps.MapTypeId.SATELLITE;
			break;
			case"HYBRID":
				maptype = google.maps.MapTypeId.HYBRID;
			break;
		}
		switch(controls) {
			case"DROPDOWN_MENU":
			default:
				mapcontrols = google.maps.MapTypeControlStyle.DROPDOWN_MENU;
			break;
			case"HORIZONTAL_BAR":
				mapcontrols = google.maps.MapTypeControlStyle.HORIZONTAL_BAR;
			break;
			
		}
		
		var coords = center.split(","),
			centerPoint = new google.maps.LatLng(coords[0],coords[1]);
		if(styling) {
			var myMapStyles = [
				{ featureType: featureType, elementType: elementType, stylers: [ { visibility: visibility } , { hue: hue }, { saturation: saturation },{ lightness: lightness }, { gamma: gamma } ] }
			];
			var MapStyles = new google.maps.StyledMapType(myMapStyles, {name: "My personalized map"});
		}
		var myOptions = {
			scrollwheel: mousewheel,
			dragging: dragging,
			mapTypeControl: true,
			mapTypeControlOptions: {
				style: mapcontrols,
				position: google.maps.ControlPosition.RIGHT_TOP },
			navigationControl: true,
			navigationControlOptions: {
				style: google.maps.NavigationControlStyle.SMALL,
				position: google.maps.ControlPosition.RIGHT_CENTER},
			zoom: zoom,
			center: centerPoint,
			mapTypeId: maptype
		}
		var map = new google.maps.Map(map_element, myOptions);
		if(styling) {
			map.mapTypes.set('custom_styled', MapStyles);
			map.setMapTypeId('custom_styled');
		}
		//google.maps.event.trigger(map, 'resize');
		var infowindow = null;
		var baloon_text = "";

		//run the marker JSON loop here
		$.each(markers.markers, function(i, the_marker){
			latitude=the_marker.latitude;
			longitude=the_marker.longitude;
			icon=the_marker.icon;
			//var baloon_text=the_marker.baloon_text;
			
			if(latitude!="" && longitude!=""){
				var marker = new google.maps.Marker({
					map: map, 
					position: new google.maps.LatLng(latitude,longitude),
					animation: google.maps.Animation.DROP,
					icon: icon
				});
			}
		});
	}

})(jQuery);
