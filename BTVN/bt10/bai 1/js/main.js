function checkPhoneNumber(phone) {
				var flag = false;
				phone = phone.replace('(+84)', '0');
				phone = phone.replace('+84', '0');
				phone = phone.replace('0084', '0');
				phone = phone.replace(/ /g, '');
				if (phone != '') {
					var firstNumber = phone.substring(0, 2);
					if ((firstNumber == '09' || firstNumber == '08' || firstNumber == '03'|| firstNumber == '05'|| firstNumber == '02'|| firstNumber == '04'|| firstNumber == '07') && phone.length == 10) {
						if (phone.match(/^\d{10}/)) {
							flag = true;
						}
					} 
					return flag;
				}}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
	var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

document.getElementsByClassName('submit')[0].addEventListener('click', function(){
	var dem=0;
	var name = document.getElementsByClassName('name')[0].value;
		if (name.trim()=="") {
			document.getElementsByClassName('name-err')[0].innerHTML="! Yêu cầu nhập đầy đủ họ tên";
		} 	else if (name.length<=8) {
				document.getElementsByClassName('name-err')[0].innerHTML="!Yêu cầu nhập trên 8 ký tự";
			}
				else {
					document.getElementsByClassName('name-err')[0].innerHTML=" ";
				dem++;	
				}
	var email = document.getElementsByClassName('email')[0].value;
		if(validateEmail(email)){
			document.getElementsByClassName('email-err')[0].innerHTML="";
			dem++;
		}	else if (email == validateEmail(email)) {
			document.getElementsByClassName('email-err')[0].innerHTML="! Yêu cầu nhập email ";
			}
				else{
					document.getElementsByClassName('email-err')[0].innerHTML="! Nhập sai định dạng email ";
				}

	var phone = document.getElementsByClassName('phone')[0].value;
		if (phone=="") {
			document.getElementsByClassName('phone-err')[0].innerHTML="! Yêu cầu nhập số điện thoại";
		}	else if (checkPhoneNumber(phone)==false) {
				document.getElementsByClassName('phone-err')[0].innerHTML="! Nhập sai số điện thoại";
			}
			 	else {
					document.getElementsByClassName('phone-err')[0].innerHTML=" ";
					dem++;	
				} 

	var pass = document.getElementsByClassName('pass')[0].value;
		if (pass.trim()=="") {
			document.getElementsByClassName('pass-err')[0].innerHTML="! Yêu cầu nhập mật khẩu";
		} 	else {
				document.getElementsByClassName('pass-err')[0].innerHTML=" ";	
				dem++;
			} 
	var passs = document.getElementsByClassName('passs')[0].value;
		if (passs.trim()=="") {
			document.getElementsByClassName('passs-err')[0].innerHTML="! Yêu cầu xác nhận mật khẩu";
			}else if(passs!= pass) {
				document.getElementsByClassName('passs-err')[0].innerHTML="! Mật khẩu không khớp";
				}
	 			else {
					document.getElementsByClassName('passs-err')[0].innerHTML=" ";	
					dem++;
				} 
	if(dem==5){
		alert('Đăng kí thành công');
	} else {
		alert('Bạn chưa nhập đủ thông tin')
	}
})
document.getElementsByClassName('del')[0].addEventListener('click', function(){
	document.getElementsByClassName('name')[0].value="" ;
	document.getElementsByClassName('email')[0].value="" ;
	document.getElementsByClassName('phone')[0].value="" ;
	document.getElementsByClassName('pass')[0].value="" ;
	document.getElementsByClassName('passs')[0].value="" ;

})

