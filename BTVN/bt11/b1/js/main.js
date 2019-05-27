$('.button').on('click', function(){ 
	var id = $(this).data('id');
		$('.content').css('display', 'none');
		$('.scroll').css('display', 'block');
		$('.minus').css('display', 'none');
		$('#content'+id).show('300');
		$('#scroll'+id).css('display', 'none');
		$('#minus'+id).css('display', 'block');
})
$('.minus').on('click', function(){
	var id = $(this).data('id');
	$('#content'+id).hide(500);
	$('#scroll'+id).css('display', 'block');
	$('#minus'+id).css('display', 'none');
})