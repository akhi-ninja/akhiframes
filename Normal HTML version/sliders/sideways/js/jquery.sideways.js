var $ = jQuery.noConflict();

	$defaultViewMode= "full"; //full (fullscreen background), fit (fit to window), original (no scale)
	//cache vars
	$bg=jQuery("#bg");
	$bgimg=jQuery("#bg #bgimg");
	$preloader=jQuery("#preloader");
	$outer_container=jQuery("#outer_container");
	$outer_container_a=jQuery("#outer_container a.thumb_link");
	$toolbar=jQuery("#toolbar");
	$nextimage_tip=jQuery("#nextimage_tip");
		
	jQuery(window).load(function() {
		$toolbar.data("imageViewMode",$defaultViewMode); //default view mode
		ImageViewMode($toolbar.data("imageViewMode"));
		//cache vars
		$customScrollBox=jQuery("#customScrollBox");
		$customScrollBox_container=jQuery("#customScrollBox .container");
		$customScrollBox_content=jQuery("#customScrollBox .content");
		$dragger_container=jQuery("#dragger_container");
		$dragger=jQuery("#dragger");
		
		CustomScroller();
		
		function CustomScroller(){
			outerMargin=0;
			innerMargin=20;
			$customScrollBox.height(jQuery(window).height()-outerMargin);
			$dragger_container.height(jQuery(window).height()-innerMargin);
			visibleHeight=jQuery(window).height()-outerMargin;
			if($customScrollBox_container.height()>visibleHeight){ //custom scroll depends on content height
				$dragger_container,$dragger.css("display","block");
				totalContent=$customScrollBox_content.height();
				draggerContainerHeight=jQuery(window).height()-innerMargin;
				animSpeed=400; //animation speed
				easeType="easeOutCirc"; //easing type
				bottomSpace=1.05; //bottom scrolling space
				targY=0;
				draggerHeight=$dragger.height();
				$dragger.draggable({ 
					axis: "y", 
					containment: "parent", 
					drag: function(event, ui) {
						Scroll();
					}, 
					stop: function(event, ui) {
						DraggerOut();
					}
				});
	
				//scrollbar click
				$dragger_container.click(function(e) {
					var mouseCoord=(e.pageY - jQuery(this).offset().top);
					var targetPos=mouseCoord+$dragger.height();
					if(targetPos<draggerContainerHeight){
						$dragger.css("top",mouseCoord);
						Scroll();
					} else {
						$dragger.css("top",draggerContainerHeight-$dragger.height());
						Scroll();
					}
				});
	
				//mousewheel
				jQuery(function() {
					$customScrollBox.bind("mousewheel", function(event, delta) {
						vel = Math.abs(delta*10);
						$dragger.css("top", $dragger.position().top-(delta*vel));
						Scroll();
						if($dragger.position().top<0){
							$dragger.css("top", 0);
							$customScrollBox_container.stop();
							Scroll();
							
						}
						if($dragger.position().top>draggerContainerHeight-$dragger.height()){
							$dragger.css("top", draggerContainerHeight-$dragger.height());
							$customScrollBox_container.stop();
							Scroll();
							;
						}
						return false;
					});
				});
	
				function Scroll(){
					var scrollAmount=(totalContent-(visibleHeight/bottomSpace))/(draggerContainerHeight-draggerHeight);
					var draggerY=$dragger.position().top;
					targY=-draggerY*scrollAmount;
					var thePos=$customScrollBox_container.position().top-targY;
					$customScrollBox_container.stop().animate({top: "-="+thePos}, animSpeed, easeType); //with easing
				}
	
				//dragger hover
				$dragger.mouseup(function(){
					DraggerOut();
				}).mousedown(function(){
					DraggerOver();
				});
	
				function DraggerOver(){
					$dragger.css("background", "url("+$imgPath+"round_custom_scrollbar_bg_over.png)");
				}
	
				function DraggerOut(){
					$dragger.css("background", "url("+$imgPath+"round_custom_scrollbar_bg.png)");
				}
			} else { //hide custom scrollbar if content is short
				$dragger,$dragger_container.css("display","none");
			}
		}
	
		//resize browser window functions
		jQuery(window).resize(function() {
			FullScreenBackground("#bgimg"); //scale bg image
			$dragger.css("top",0); //reset content scroll
			$customScrollBox_container.css("top",0);
			$customScrollBox.unbind("mousewheel");
			CustomScroller();
		});
		
		LargeImageLoad($bgimg);
	});
		
		//loading bg image
		$bgimg.load(function() {
			LargeImageLoad(jQuery(this));
		});
		
		function LargeImageLoad($this){
			$preloader.fadeOut("fast"); //hide preloader
			$this.removeAttr("width").removeAttr("height").css({ width: "", height: "" }); //lose all previous dimensions in order to rescale new image data
			$bg.data("originalImageWidth",$this.width()).data("originalImageHeight",$this.height());
			if($bg.data("newTitle")){
				$this.attr("title",$bg.data("newTitle")); //set new image title attribute
			}
			FullScreenBackground($this); //scale new image
			$bg.data("nextImage",jQuery($outer_container.data("selectedThumb")).next().attr("href")); //get and store next image
			if(typeof itemIndex!="undefined"){
				if(itemIndex==lastItemIndex){ //check if it is the last image
					$bg.data("lastImageReached","Y");
					$bg.data("nextImage",$outer_container_a.first().attr("href")); //get and store next image
				} else {
					$bg.data("lastImageReached","N");
				}
			} else {
				$bg.data("lastImageReached","N");
			}
			$this.fadeIn("slow"); //fadein background image
			if($bg.data("nextImage") || $bg.data("lastImageReached")=="Y"){ //don't close thumbs pane on 1st load
				SlidePanels("close"); //close the left pane
			}
			NextImageTip();
		}
	
		//slide in/out left pane
		$outer_container.hover(
			function(){ //mouse over
				//SlidePanels("open");
			},
			function(){ //mouse out
				SlidePanels("close");
			}
		);
		
		jQuery("#arrow_indicator").click(
			function(){ //mouse over
				SlidePanels("open");
			}
		);
		
		//Clicking on thumbnail changes the background image
		$outer_container_a.click(function(event){
			event.preventDefault();
			var $this=this;
			$bgimg.css("display","none");
			$preloader.fadeIn("fast"); //show preloader
			//style clicked thumbnail
			$outer_container_a.each(function() {
				jQuery(this).children(".selected").css("display","none");
			});
			jQuery(this).children(".selected").css("display","block");
			//get and store next image and selected thumb 
			$outer_container.data("selectedThumb",$this); 
			$bg.data("nextImage",jQuery(this).next().attr("href")); 	
			$bg.data("newTitle",jQuery(this).children("img").attr("title")); //get and store new image title attribute
			itemIndex=getIndex($this); //get clicked item index
			lastItemIndex=($outer_container_a.length)-1; //get last item index
			$bgimg.attr("src", "").attr("src", $this); //switch image
		}); 
	
		//clicking on large image loads the next one
		$bgimg.click(function(event){
			var $this=jQuery(this);
			if($bg.data("nextImage")){ //if next image data is stored
				$this.css("display","none");
				$preloader.fadeIn("fast"); //show preloader
				jQuery($outer_container.data("selectedThumb")).children(".selected").css("display","none"); //deselect thumb
				if($bg.data("lastImageReached")!="Y"){
					jQuery($outer_container.data("selectedThumb")).next().children(".selected").css("display","block"); //select new thumb
				} else {
					$outer_container_a.first().children(".selected").css("display","block"); //select new thumb - first
				}
				//store new selected thumb
				var selThumb=$outer_container.data("selectedThumb");
				if($bg.data("lastImageReached")!="Y"){
					$outer_container.data("selectedThumb",jQuery(selThumb).next()); 
				} else {
					$outer_container.data("selectedThumb",$outer_container_a.first()); 
				}
				$bg.data("newTitle",jQuery($outer_container.data("selectedThumb")).children("img").attr("title")); //get and store new image title attribute
				if($bg.data("lastImageReached")!="Y"){
					itemIndex++;
				} else {
					itemIndex=0;
				}
				$this.attr("src", "").attr("src", $bg.data("nextImage")); //switch image
			}
		});
		
		//function to get element index (fuck you IE!)
		function getIndex(theItem){
			for ( var i = 0, length = $outer_container_a.length; i < length; i++ ) {
				if ( $outer_container_a[i] === theItem ) {
					return i;
				}
			}
		}

		
		//Clicking on toolbar changes the image view mode
		$toolbar.click(function(event){
			if($toolbar.data("imageViewMode")=="full"){
				ImageViewMode("fit");
			} else if($toolbar.data("imageViewMode")=="fit") {
				ImageViewMode("original");
			} else if($toolbar.data("imageViewMode")=="original"){
				ImageViewMode("full");
			}
		});
	
		//next image balloon tip
		function NextImageTip(){
			if($bg.data("nextImage")){ //check if this is the first image
				$nextimage_tip.stop().css("right",20).fadeIn("fast").fadeOut(2000,"easeInExpo",function(){$nextimage_tip.css("right",jQuery(window).width());});
			}
		}
	
		//slide in/out left pane function
		function SlidePanels(action){
			var speed=900;
			var easing="easeInOutExpo";
			if(action=="open"){
				jQuery("#arrow_indicator").fadeTo("fast",0);
				$outer_container.stop().animate({left: 0}, speed,easing);
				$bg.stop().animate({left: 585}, speed,easing);
			} else {
				$outer_container.stop().animate({left: -710}, speed,easing);
				$bg.stop().animate({left: 0}, speed,easing,function(){jQuery("#arrow_indicator").fadeTo("fast",1);});
			}
		}
	
	//Image scale function
	function FullScreenBackground(theItem){
		var winWidth=jQuery(window).width();
		var winHeight=jQuery(window).height();
		var imageWidth=jQuery(theItem).width();
		var imageHeight=jQuery(theItem).height();
		if($toolbar.data("imageViewMode")!="original"){ //scale
			jQuery(theItem).removeClass("with_border").removeClass("with_shadow"); //remove extra styles of orininal view mode
			var picHeight = imageHeight / imageWidth;
			var picWidth = imageWidth / imageHeight;
			if($toolbar.data("imageViewMode")!="fit"){ //image view mode: full
				if ((winHeight / winWidth) < picHeight) {
					jQuery(theItem).css("width",winWidth).css("height",picHeight*winWidth);
				} else {
					jQuery(theItem).css("height",winHeight).css("width",picWidth*winHeight);
				};
			} else { //image view mode: fit
				if ((winHeight / winWidth) > picHeight) {
					jQuery(theItem).css("width",winWidth).css("height",picHeight*winWidth);
				} else {
					jQuery(theItem).css("height",winHeight).css("width",picWidth*winHeight);
				};
			}
			//center it
			jQuery(theItem).css("margin-left",((winWidth - jQuery(theItem).width())/2)).css("margin-top",((winHeight - jQuery(theItem).height())/2));
		} else { //no scale
			//add extra styles for orininal view mode
			jQuery(theItem).addClass("with_border").addClass("with_shadow");
			//set original dimensions
			jQuery(theItem).css("width",$bg.data("originalImageWidth")).css("height",$bg.data("originalImageHeight"));
			//center it
			jQuery(theItem).css("margin-left",((winWidth-jQuery(theItem).outerWidth())/2)).css("margin-top",((winHeight-jQuery(theItem).outerHeight())/2));
		}
	}
	
	//image view mode function - full or fit
	function ImageViewMode(theMode){
		$toolbar.data("imageViewMode", theMode); //store new mode
		FullScreenBackground($bgimg); //scale bg image
		//re-style button
		if(theMode=="full"){
			$toolbar.html("<span class='lightgrey'>IMAGE VIEW MODE &rsaquo;</span> FULL");
		} else if(theMode=="fit") {
			$toolbar.html("<span class='lightgrey'>IMAGE VIEW MODE &rsaquo;</span> FIT");
		} else {
			$toolbar.html("<span class='lightgrey'>IMAGE VIEW MODE &rsaquo;</span> ORIGINAL");
		}
	}
	
	//preload script images
	
	var images=[$imgPath+"ajax-loader_dark.gif", $imgPath+"round_custom_scrollbar_bg_over.png"];
	$.each(images, function(i) {
	  images[i] = new Image();
	  images[i].src = this;
	});
