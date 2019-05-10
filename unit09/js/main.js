document.getElementById('add').addEventListener('click', function(){
	document.getElementById('zent').innerHTML = "Hello"
});
//click chuột
document.getElementById('object').addEventListener('click', function(){
	document.getElementById('object').type = 'text'
});
//thay đổi kiểu
function change(input){
	input.type = 'text';
}
var i=1;
function zero(a){
	a.value = i;
	i++;
}
var i = 1
document.getElementById('addd').addEventListener('click', function(){
	var input=document.getElementById('text');
	var content = document.getElementById('content');
	if (input.value=='') {
		alert('vui lòng nhập thông tin')
		return
	}
	content.innerHTML = content.innerHTML + `<tr id=`+ i +`>
												<td> <input type="checkbox" /></td>
												<td>`+ input.value +`</td>
												<td>
													<button onclick="removeItem(`+ i +`)">del</button>
													<button onclick="addEventListener(`+ i +`)">edit</button>
												</td>
												
											</tr>`

	input.value =''
	i++
})
function removeItem(i){
	document.getElementById(i).remove()
}
document.getElementById('checkall').addEventListener('click', function(){
	alert('chọn all')
	var checkbox = document.getElementsByTagName('input')
	for (var j = checkbox.length - 1; j >= 0; j--) {
		checkbox[j].checked=true
	}

})
document.getElementById('uncheckall').addEventListener('click', function(){
	alert('bỏ chọn all')
	var checkbox = document.getElementsByTagName('input')
	for (var j = checkbox.length - 1; j >= 0; j--) {
		checkbox[j].checked=false
	}

})

document.getElementById('delete').addEventListener('click',function(){
	var checkbox = document.getElementsByTagName('input')
	
})