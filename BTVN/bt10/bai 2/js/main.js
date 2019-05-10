var dem=0;
	var anh=document.getElementsByClassName('anh');
	var length= anh.length;
	var button= document.getElementsByClassName('cham');
	function left(){
		dem--;
		for (var i = anh.length-1; i >=0; i--) {
			anh[i].className='anh';
			button[i].className='cham';
		}
		if(dem<0){
			dem=anh.length-1;
		}
		anh[dem].className='anh head';
		button[dem].className='cham active';
	}
	function right(){
			dem++;
			for (var i = anh.length-1; i >=0; i--) {
				anh[i].className='anh';
				button[i].className='cham';
			}
			if(dem>anh.length-1){
				dem=0;
			}
			anh[dem].className='anh head';
			button[dem].className='cham active';
		}

		function bt(n){
			for (var i = anh.length-1; i >=0; i--) {
				anh[i].className='anh';
				button[i].className='cham';
			}
			dem=n;
			anh[dem].className='anh head';
			button[dem].className='cham active';
		}
window.setInterval(function(){ right(); }, 2000);