$(function() {
	$(document).ready(function() {
    resize_body();
	});

	$(window).resize(function() {
		resize_body();
	});

	$('#navigation').click(function() {
		if ($(this).find('ul').css('display') == 'none') {
			$(this).find('ul').css('display', 'inline');
			$(this).attr('class', 'active');
		} else {
			$(this).find('ul').css('display', 'none');
			$(this).attr('class', 'inactive');
		}
	});
});

function resize_body() {
	// set body height so that the footer will be fixed at the bottom
	$tmp = $(window).height() - $("#header_bar").height() - $("#header").height() - $("footer").height() - 61;
	if($("#content").height() < $tmp)
		$("#content").height( $tmp );
	console.log($("footer").height());
}