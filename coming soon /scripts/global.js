// JavaScript Document

$(document).ready(function() {
	// jquery scripts
	
	$('#countdown li:last').css({marginRight:0});
	
	formInputValue('.notifyText');
	
	
	// form submit
	$('.notifySubmit').click(function(){
		var val = $('.notifyText').val();
		var regEmail = /^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/;
		if(val.toUpperCase().match(regEmail)){
				$.ajax({
					type: 'POST',
					url: 'php/sendmail.php',
					data: $(".notifyForm").serialize(),
					beforeSend: function(){
						$('.notifyForm').css({opacity:0.2});
						$('.notifyText, .notifySubmit').attr('disabled','disabled');
						$(".sending").fadeIn();
						$(".error").hide();
						$(".error2").hide();
						$(".ok").hide();
					},
					success: function(){
						$('.notifyForm').css({opacity:0.2});
						$('.notifyText, .notifySubmit').attr('disabled','disabled');
						$(".sending").hide();
						$(".error").hide();
						$('.ok').fadeIn();
					},
					error: function(){
						$(".sending").hide();
						$('.error2').hide();
						$(".error").hide();
						$('.notifyForm').css({opacity:1});
						$('.notifyText, .notifySubmit').removeAttr('disabled','disabled');
					}
				});
			} else {
				$('.error').fadeIn();
			}
	});
	
	/* countdown */
	var count = $('#countdown').attr('title');
	$("#countdown").countdown({
		date: count,
		format: "on"
	}, function() {
		// callback function
	});
	
	
	/* progressbar */
	var progressValue = $('#progressbar').html();
	$('#progressbar').html('');
	$('.bubble').html('<span>'+progressValue+'%</span>');
	if(progressValue>100){
		progressValue=100;
		$('.bubble').html('<span>100%</span>');
	}
	progressValue = progressValue * 9.8;
	$('#progressbar').animate({ width:progressValue }, 3000, function() {
		$('.bubble').css({left:progressValue}).fadeIn();
	});
	
	/* var twitterUsername = $('#twitter').attr('username');
	var twitterCount = $('#twitter').attr('count');
	showTweets(twitterUsername,twitterCount); */
	
});


// input hide and show value
function formInputValue(element) {
	$(element).click(function() {
		if (this.value == this.defaultValue) {this.value = '';}
	}).focusin(function() {
		if (this.value == this.defaultValue) {this.value = '';}
	});
	$(element).blur(function() {
		if (this.value == '') {
			this.value = this.defaultValue;
		}
	});
}

function htmlEncode(str) {
    return str.replace(/[&<>"']/g, function($0) {
        return "&" + {"&":"amp", "#":"#35",  " ":"#32", "<":"lt", ">":"gt", '"':"quot", "'":"#39"}[$0] + ";";
    });
}

/* function showTweets(username,count) {
	var keyword = "from:"+username;
	var rpp = count;
	var page = 1;
	var result_type = 'recent';
	var include_entities = true;
	$("#keyword").html(keyword);
	$.getJSON('http://search.twitter.com/search.json?callback=?&q='+htmlEncode(keyword)+'&rpp='+rpp+'&page='+page+'&result_type='+result_type+'&include_entities='+include_entities, function(json) {
		$.each(json.results,function(i,tweet){
		   $("#twitter").append('<li><a target="_blank" href="http://twitter.com/'+tweet.from_user+'">@'+tweet.from_user+'</a> '+tweet.text+'</li>');

		});
	});
} */