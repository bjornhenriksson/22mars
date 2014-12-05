jQuery(document).ready(function ($) {

    $(".alert").delay(3000).fadeOut();

    $(".details-form").hide();

    $(".enter-form").submit(function( event ) {
    	event.preventDefault();
    	$(".fear-form").addClass("slide");
    	$(".login-form").addClass("slide-right");
    	//this.submit();
    });

    $(".show-form").click(function() {
    	$(".button-fb, .show-form").fadeOut();
    	var holder = $("#holder").val();
    	$(".apply-holder").val(holder);
    	$(".details-form").delay(400).slideDown();
	});

});   