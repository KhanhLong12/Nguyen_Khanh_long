$('.anhcon').on('click',function(){
	var id = $(this).data('id');
		$('#anh').css('display','none');
		$('#anh').siblings('h2').css('display','none');
		$('.close').css('display','block');
		$('.anhtocon').css('display','none')
		$('#anhtocon'+id).show(1000);
	})
$('.close').on('click', function(){
	$('.close').css('display','none');
	$('#anh').css('display','block');
	$('#anh').siblings('h2').css('display','block');
	$('.anhtocon').hide(500);
})

