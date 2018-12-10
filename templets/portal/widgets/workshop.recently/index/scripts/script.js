/**
 * 이 파일은 위젯 연동모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 
 * @author Sangin ()
 * @license MIT License
 * @version 3.0.0.160910
 */

$(document).ready(function() {
	$("div[data-widget=workshop-recently][data-templet=index] ul.program_tab li").on("click",function() {
		var c_target = $(this).attr("data-role");
		console.log( "click : ", c_target);

		$("div[data-widget=workshop-recently][data-templet=index] ul.program_tab li").removeClass("selected");
		$(this).addClass("selected");
		$("div[data-widget=workshop-recently][data-templet=index] div.obj_widgets_workshop_top").removeClass("on");
		$("div[data-widget=workshop-recently][data-templet=index] div.obj_widgets_workshop_top[data-role="+c_target+"]").addClass("on");
	});

});
