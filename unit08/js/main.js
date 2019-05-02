/*var a=parseInt(prompt('input a ='));*/
/*
if(a==2){
	alert('thu 2 ')
} else if(a==3){
	alert('thu 3')
} else if(a==4){
	alert('thu 4')
} else if(a==5){
	alert('thu 5')
} else if(a==6){
	alert('thu 6')
} else if(a==7){
	alert('thu 7')
} else if(a==8){
	alert('chu nhat')
} else{
	alert('Nhap sai')
}
*/
/*
switch(a){
	case 2 :{
	 alert('thu 2');
	 break;
	}
	case 3 : {
	 alert('thu 3');
	 break;
	}
	case 4 :{
	 alert('thu 4');
	 break;
	}
	case 5 :{
	 alert('thu 5');
	 break;
	}
	case 6 :{
	 alert('thu 6');
	 break;
	}
	case 7 :{
	 alert('thu 7');
	 break;
	}
	case 8 :{
	 alert('chủ nhật');
	 break;
	}
	default:
	alert('Nhập sai');
}
*/

// var a = prompt('Intput a=')
// var flag = true
// for (var i = 2; i <= Math.ceil(Math.sqrt(parseInt(a))); i++)/*ép kiểu int -> căn bậc 2->lấy phần trên*/ {
// console.log('i')
// 	if (parseInt(a) % i == 0) {
// 		flag = false
// 		break
// 	}
// }

// if(flag)
//  	alert('la so nguyen to')
//  else
//  	alert('không là số nguyên tố')

 function checkSonguyento(a){
 	var flag = true
 	for (var i = 2; i <= Math.ceil(Math.sqrt(parseInt(a))); i++){
 		if (parseInt(a) % i == 0) {
			flag = false
			break
		}
 	}/*ép kiểu int -> căn bậc 2->lấy phần trên*/ {
	
	
}
return flag
}
if (checkSonguyento(7))
	alert('so nguyen to')
else 
	alert('khong la so nguyen to')