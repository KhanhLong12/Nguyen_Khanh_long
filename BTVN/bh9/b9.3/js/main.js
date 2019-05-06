var tab= document.getElementsByClassName('tab')
var section= document.getElementsByClassName('section');
	for (var i = 0; i < tab.length; i++) {
		tab[i].addEventListener('click', function(){
			for (var j = 0; j < section.length; j++) {
				section[j].style.display = 'none'; 
			}
			this.nextElementSibling.style.display = 'block';
				for (var k = 0; k < tab.length; k++) {
					tab[k].style.background = '#666666';
					tab[k].style.color='white';
				}
				this.style.background= 'white';
				this.style.color= 'black';
		})
	}
