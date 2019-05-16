$('.anhcon').on('click',function(){
	var id = $(this).data('id');
		$('#anh').css('display','none');
		$('#anh').siblings('h2').css('display','none');
		$('.close').css('display','block')
		$('#anhtocon' +id).fadeIn(2000);
	})
$('.close').on('click', function(){
	$('#anh').css('display','block');
	$('#anh').siblings('h2').css('display','block');
	$('#anhto').css('display','none');

})
function change(n){
	var anhtocon = $('.anhtocon');
	var anhcon = $('.anhcon')
	for (var i = anhtocon.length - 1; i >= 0; i--) {
		anhtocon[i].className = '.anhtocon';
		anhcon[i].className ='.anhcon';
	}

}
