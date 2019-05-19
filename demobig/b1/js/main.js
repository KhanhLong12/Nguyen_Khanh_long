$('.item li').hover(function(){
	$(this).find('ul:first').slideDown(200);
	}, function(){
		$(this).find('ul:first').slideUp(150);
})
$('i').on('click', function(){
	$('.card').slideToggle(300);
})
var w= document.body.clientWidth;
if(w>572){
	$('.card').css('display', 'block');
} else {
	$('.card').css('display', 'none');
}