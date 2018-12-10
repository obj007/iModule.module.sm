$(document).ready(function(){
	$("header > nav > .top_menu > div.container > ul > li").mouseover(function(){
		$("header").addClass("on");
	});
	$("header, header > nav > .top_menu > div.container > ul > li").mouseleave(function(){
		$("header").removeClass("on");
	});
});
