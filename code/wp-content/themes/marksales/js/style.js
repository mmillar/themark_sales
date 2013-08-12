$(window).load(function() {
	$(document).ready(function() {
    resize_body();
    $(window).resize(function() {
			resize_body();
		});

		$('#navigation').click(function() {
			if ($("input[name='mobile']").val() == "true") {
				if ($(this).find('ul').css('display') == 'none') {
					$(this).find('ul').css('display', 'inline');
					$(this).attr('class', 'active');
				} else {
					$(this).find('ul').css('display', 'none');
					$(this).attr('class', 'inactive');
				}
			}
		});
	});
});

function resize_body() {
	if ($(window).width() > 480) {
    $("input[name='mobile']").val("false");
    $("#navigation").find("ul").css("display", 'inline-block');
    $("#header").css("width", "");
    $("#content").css("width", "");
    $("#footer").css("width", "");
   } else {
   	$("input[name='mobile']").val("true");
   	$("#navigation").find("ul").css("display", 'none');
    $("#header").css("width", $(window).width() + "px");
    $("#content").css("width", $(window).width() + "px");
    $("#footer").css("width", $(window).width() + "px");
   }
}