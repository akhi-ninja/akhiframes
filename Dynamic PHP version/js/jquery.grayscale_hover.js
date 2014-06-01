jQuery(window).load(function(){

		jQuery('.partnersList img').each(function(){
			//jQuery(this).css("margin-left","-120px");					  
			var el = jQuery(this);
			
			el.clone().addClass('grayscale').css({"z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				var el = jQuery(this);
				el.dequeue();
				
			});
			this.src = grayscale(this.src);
			el.css({"top":"-"+ el.height() +"px"});
		});
		
		jQuery('.partnersList img').mouseover(function(){
			jQuery(this).parent().find('img:first').stop().animate({opacity:1}, 200);
		});
				
		jQuery(".grayscale").mouseout(function(){
			jQuery(this).stop().animate({opacity:0}, 200);
		});
	
});
	

function grayscale(src) {
	
		var canvas = document.createElement('canvas');
		var ctx = canvas.getContext('2d');
		var imgObj = new Image();
		imgObj.src = src;
		canvas.width = imgObj.width;
		canvas.height = imgObj.height;
		ctx.drawImage(imgObj, 0, 0);
		var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
		for(var y = 0; y < imgPixels.height; y++){
			for(var x = 0; x < imgPixels.width; x++){
				var i = (y * 4) * imgPixels.width + x * 4;
				var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
				imgPixels.data[i] = avg;
				imgPixels.data[i + 1] = avg;
				imgPixels.data[i + 2] = avg;
			}
		}
		ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
		return canvas.toDataURL();
		
}