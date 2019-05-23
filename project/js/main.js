
$(document).ready(function() {
		$('.counter').counterUp({
			delay: 10,
			time: 5000
		});
});
$(function() {
    var f = $('.filtr-container').filterizr({ controlsSelector: '.fltr-controls' });
    $('.color-container-1').filterizr({ controlsSelector: '.color-controls-1'});
    $('.color-container-2').filterizr({ controlsSelector: '.color-controls-2', layout: 'packed' });
    $('.color-container-3').filterizr({ controlsSelector: '.color-controls-3', layout: 'sameHeight' });
    $('.color-container-4').filterizr({ controlsSelector: '.color-controls-4', layout: 'packed' });
    $('.color-container-5').filterizr({ controlsSelector: '.color-controls-5', layout: 'horizontal' });
    $('.color-container-6').filterizr({ controlsSelector: '.color-controls-6', layout: 'vertical' });
    window.filterizr = f;
});
$('.imgson').hover(function(){
	var id= $(this).data('id');
	$('#item'+id).fadeIn(500);
}, function(){
	$('.item-desc').slideUp(300);
})





$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

$("#toTop").click(function () {
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
   $("html, body").animate({scrollTop: 0}, 1000);
});