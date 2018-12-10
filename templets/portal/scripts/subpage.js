$(document).ready(function(){
	$(window).on("scroll",function(){
		var anchor = $(window).scrollTop();
		if (anchor >= 125) {
			$(".sticky_bar").stop().show();
		}else{
			$(".sticky_bar").stop().hide();
		}
	});
});
