document.getElementsByClassName('big')[0].addEventListener('click', function(){
	var p = document.getElementsByTagName('p')[0].style.fontSize;
	p=parseFloat(p);
	p=p*1.4 +'px';
	document.getElementsByTagName('p')[0].style.fontSize=p;
});

document.getElementsByClassName('small')[0].addEventListener('click', function(){
	var p = document.getElementsByTagName('p')[0].style.fontSize;
	p=parseFloat(p);
	p=p/1.4 +'px';
	document.getElementsByTagName('p')[0].style.fontSize=p;
});

document.getElementsByClassName('defaul')[0].addEventListener('click', function(){
	document.getElementsByTagName('p')[0].style.fontSize='15px';
});