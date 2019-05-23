$(document).ready(function(){
	$("#menu").click(function(){
		$(".navmenu .row").css({
			margin: '0px'
		});
		$(".wrapper").toggleClass('closeWrapper');
		$(".navmenu").toggleClass('vision');
		$(".menu a").toggleClass('vision');
		$(".menu").toggleClass('vision');
	})
})