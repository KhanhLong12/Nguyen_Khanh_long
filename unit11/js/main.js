// $('#box').text('abcxyz');
// $('#name').val('saturday');
// $('#box').addClass('hello');
// $('#box').append('<p>sunday</p>');
// $('#box').prepend('<p>monday</p>');
// $('#box').before('<p>sunday</p>');
// $('#box').after('<p>sunday</p>');
var i=1;
$('#add').on('click', function(){
	var input=$('#text').val();
	if (input=="") {
		alert('mời bạn nhập thông tin')
		return;
	}
	$('.active').prepend(`<div id="` + i + `"><input type="checkbox">
								`+input+`
						<button class="del" zent="` + i +`">del</button>
						<button>edit</button>
						</div>`);
	$('#text').val('');
	i++;
})
$('.active').on('click','.del', function(){
	var id = $(this).attr('zent');
	$('#' +id).remove();
})
