/**
 * 글로벌 전체메뉴
 */
function OpenAllService(button) {
	if ($("div.top_all_menu").is(":visible") == true) {
		$("div.top_all_menu").hide();
		$(button).removeClass("opened");
	} else {
		$("div.top_all_menu").show();
		$(button).addClass("opened");
	}
}


$(document).ready(function(){
	$(".fam_site select").on("change",function() {
		if ($(this).val().length >= 1) {
			var openNewWindow = window.open("about:blank");
			openNewWindow.location.href = $(this).val();
		}
	});
});
