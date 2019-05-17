$('.anhcon').on('click',function(){
	var id = $(this).data('id');
		$('#anh').fadeOut(0);
		$('#anh').siblings('h1').fadeOut(0);
		$('.close').css('display','block');
		$('.anhtocon').css('display','none')
		$('#anhtocon'+id).fadeIn(500);
		$('#mota'+id).slideDown(800);
	})
$('.close').on('click', function(){
	$('.close').css('display','none');
	$('#anh').show(500);
	$('#anh').siblings('h1').show(500);
	$('.anhtocon').slideUp(500);
	$('.mota').slideUp(500);
})
