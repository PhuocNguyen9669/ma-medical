$(document).ready(function() {
	$('.contactForm .toggleSection .togglebutton a').click(function() {
		$(this).closest('.toggleSection').find('.toggleContent').fadeIn();
	});

	$(document).on("click", function () {
		$(".contactForm .toggleSection .toggleContent").fadeOut();
	});

	$(".contactForm .toggleSection .togglebutton a").on("click", function (event) {
	    event.stopPropagation();
	});
	
	$(".contactForm .toggleSection .toggleContent").on("click", function (event) {
	    event.stopPropagation();
	});

	// $( "#datepickerC" ).datepicker();
});