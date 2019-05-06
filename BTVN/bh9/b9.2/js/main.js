var checkbox = document.getElementsByTagName('input')
document.getElementById('checkall').addEventListener('click', function(){
	for (var i = 0; i < checkbox.length; i++) {
		checkbox[i].checked=true
	}

})

document.getElementById('uncheckall').addEventListener('click', function(){
	for (var i = 0; i < checkbox.length; i++) {
		checkbox[i].checked=false
	}
})