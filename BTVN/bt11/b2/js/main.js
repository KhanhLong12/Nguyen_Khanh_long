var i=1;
$('.add').on('click', function(){
	var input=$('.text').val();
	if (input=="") {
		alert('Chưa nhập thông tin')
		return;
	}
	$('.active').prepend(`<tr id="`+ i + `" class="hang" >
							<td width = "50px" id="left`+ i +`"></td>
							<td width = 1100px" class="content">
								`+ input +`</td>
							<td width = "108px" class="del" zent="`+ i +`"><i class="fas fa-times"></i></td>
						</tr>`);
	$('.text').val('');
	i++;
})
$('.active').on('click','.del', function(){
	var id = $(this).attr('zent');
	$('#' +id).remove();
})
$('.active').on('click','.hang', function(){
	var id = $(this).attr('id');
	if ($('#left'+ id).html()=='<i class="fas fa-check"></i>') {
		$('#' +id).css('text-decoration','none');
		$('#' +id).css({'background':'white','color':'black'});
		$('#left'+ id).html('');
	} else {
			$('#' +id).css({'background':'gray','color':'white'});
			$('#' +id).css('text-decoration','line-through');
			$('#left' +id).html('<i class="fas fa-check"></i>')
		}
})






