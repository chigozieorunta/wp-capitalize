(function($) {	
	$(document).ready(function() {
		$(".switch").click(function() {
			$(this).toggleClass("switch-on");
			$(this).children(".switch-btn").toggleClass("switch-btn-on");
		});
	})
})( jQuery );