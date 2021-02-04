$(document).foundation();

$(".anchor-link").click(function(e){
	"use strict";
	e.preventDefault();
	
	var anchor = $(this).attr("href");
	var anchorPos = $(anchor).offset().top;
	$("body, html").animate({scrollTop: anchorPos}, 1000, "easeOutQuint");
	$(anchor).get(0).focus();
});

$(".top").click(function(){
	"use strict";
	$("body, html").animate({scrollTop: 0}, 1000, "easeOutQuint");		
});

setInterval(function(){
	"use strict";
	if($(window).scrollTop() >= 700){
		if(!$(".top").hasClass("visible")){
			$(".top").addClass("visible");
		}
	}
	else{
		if($(".top").hasClass("visible")){
			$(".top").removeClass("visible");
		}
	}
}, 100);