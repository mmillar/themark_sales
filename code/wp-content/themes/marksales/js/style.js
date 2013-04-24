$(function() {
	$(document).ready(function() {
    resize_body();
	});

	$(window).resize(function() {
		resize_body();
	})
});

function resize_body() {
	// set body height so that the footer will be fixed at the bottom
	$tmp = $(window).height() - $("#header_bar").height() - $("#header").height() - $("footer").height() - 61;
	if($("#content").height() < $tmp)
		$("#content").height( $tmp );
	console.log($("footer").height());
}