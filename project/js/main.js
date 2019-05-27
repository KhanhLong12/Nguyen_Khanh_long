
$(document).ready(function() {
		$('.counter').counterUp({
			delay: 10,
			time: 10000
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
  

//   var TopFixMenu = $(".menu");
//     $(window).scroll(function(){
//         if($(this).scrollTop()>150){
//         TopFixMenu.show();
//         }else{
//             TopFixMenu.hide();
//         }
// })
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
$(".btc").on('click',function(){
	var dem=0;
	var name = $('.name1').val();
	if(name==""){
		$('.poscheck').html('!This field is required');
	}else if (name.length<8) {
		$('.poscheck').html('!Enter more than 8');
	}
	else {
		$('.poscheck').html('');
		dem++;
	}
	var email = $('.email1').val();
	if(validateEmail(email)){
		$('.poscheck1').html('');
		dem++;
	}else if (email == validateEmail(email)) {
			$('.poscheck1').html('!This field is required');
	}
	else {
		$('.poscheck1').html('!Wrong input format');
	}
	var sub = $('.sub').val();
	if(sub==""){
		$('.poscheck2').html('!This field is required');
	}else if (sub.length<8) {
		$('.poscheck2').html('!Enter more than 8');
	}
	else {
		$('.poscheck2').html('');
		dem++;
	}
	var area = $('textarea').val();
	if(area==""){
		$('.area').html('!This field is required');
	}else {
		$('.area').html('');
		dem++;
	}
	if (dem==4) {
		alert('success');
	}else {
		alert('please check again');
	}
})

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});


$("#toTop").click(function () {
   $("html, body").animate({scrollTop: 0}, 1000);
});
$(".bot").click(function () {
   $("html, body").animate({scrollTop: 580}, 500);
});


new WOW().init();



$(document).ready(function() {
	$("#content-slider").lightSlider({
     loop:true,
     keyPress:true
    });
});




