$('.anhcon').on('click',function(){
	var id = $(this).data('id');
		$('#anh').fadeOut(0);
		$('#anh').siblings('h2').fadeOut(0);
		$('.close').css('display','block');
		$('.anhtocon').css('display','none')
		$('#anhtocon'+id).fadeIn(500);
	})
$('.close').on('click', function(){
	$('.close').css('display','none');
	$('#anh').show(500);
	$('#anh').siblings('h2').show(500);
	$('.anhtocon').slideUp(500);
})

