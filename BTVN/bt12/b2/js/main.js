$('.item li').hover(function(){
	$(this).find('ul:first').slideDown(200);
	}, function(){
		$(this).find('ul:first').slideUp(150);
})