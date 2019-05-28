<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<style>
	BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
	.error_strings{ font-family:Verdana; font-size:14px; color:#FF0000;} 
	tr{background-color:#FFC}
</style>
</head>

<body onload="makeNewWindow()">
<form name="myform" method="post" id="myform">
<div align="center">
  <table width="609" height="356" border="0">
    <tr>
      <td colspan="2"><strong>Contact Form</strong></td>
    </tr>
    <tr>
      <td width="237">Username:</td>
      <td width="356"><input type="text" name="username" value="" onkeyup="validate()" />
      					 <div id='erruser' name="erruser" class="error_strings"></div>
      </td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" value="" onkeyup="validate()" />
      		<div id='errpass' class="error_strings"></div>
      </td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input type="password" name="cf_password" value="" onkeyup="validate()" />
      		<div id='errcpass' class="error_strings"></div>
      </td>
    </tr>
    <tr>
      <td>Contact:</td>
      <td><textarea name="contact" style="overflow:scroll"></textarea>
      		<div id='errcontact' class="error_strings"></div>
      </td>
    </tr>
    <tr>
      <td>Age:</td>
      <td><input type="number" name="age" min="1" max="200" onkeyup="validate()" value="" />
      	<div id='errage' class="error_strings">
      </td>
    </tr>
    <tr>
      <td>Phone:</td>
      <td><input type="tel" name="phone" value="" placeholder="(XXXX)-XXX-XXX" onkeyup="validate()" />
      	<div id='errphone' class="error_strings">
      </td>
    </tr>
    <tr>
      <td>Mail:</td>
      <td><input type="text" name="email" value="" placeholder="abc@xyz.xxxx" onkeyup="validate()" />
      	<div id='errmail' class="error_strings">
      </td>
    </tr>
    <tr>
      <td colspan="2">
      	<input type="reset" value="Reset" />
        <button id="button" disabled type="submit" onclick="subWrite()">Mở tab mới</button>
      </td>
    </tr>
  </table>
  </div>
</form>

	<script language="JavaScript" type="text/javascript"
    xml:space="preserve">
    //kiểm tra điều kiện
    // console.log(validate());
    function validate(){
      var username = document.myform.username.value;
      var password = document.myform.password.value;
      var c_password = document.myform.cf_password.value;
      var contact = document.myform.contact.value;
      var age = document.myform.age.value;
      var phone = document.myform.phone.value;
      var email = document.myform.email.value;
      //kiểm tra username đã được nhập hay chưa
      if(username.length <1){
        document.getElementById("erruser").innerHTML = "Vui lòng nhập username";
      }
      else {
        document.getElementById("erruser").innerHTML = ""; 
      }
      //kiểm tra pass đã được nhập hay chưa
      if(password.length <1){
        document.getElementById("errpass").innerHTML = "Vui lòng nhập password";
      }
      else {
        document.getElementById("errpass").innerHTML = ""; 
      }
      // kiểm tra cpass đã khớp với pass hay chưa
      if(c_password != password){
        document.getElementById("errcpass").innerHTML = "Password không khớp";
      }
      else {
        document.getElementById("errcpass").innerHTML = "";
      }
      // kiểm tra contact đã được nhập hay chưa
      if(contact.length < 1){
        document.getElementById("errcontact").innerHTML = "Vui lòng nhập contact";
      }
      else {
        document.getElementById("errcontact").innerHTML = "";
      }
      // kiểm tra age đã được nhập hay chưa
      if(age.length <1){
        document.getElementById("errage").innerHTML = "Vui lòng nhập age";
      }
      else {
        document.getElementById("errage").innerHTML = "";
      }
      // kiểm tra phone đã được đúng định dạng hay chưa
      var phoneno = /^\(?([0-9]{4})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
      if(phone.match(phoneno)){
        document.getElementById("errphone").innerHTML = "";
      }
      else {
        document.getElementById("errphone").innerHTML = "Phone (xxxx)-xxx-xxx";
      }
      // kiểm tra email đã được nhập hay chưa
      var emailon = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if(email.match(emailon)){
        document.getElementById("errmail").innerHTML = "";
      }
      else {
        document.getElementById("errmail").innerHTML = "email không đúng định dạng";
      }
      // kiểm tra các trường có rộng hãy không
      if(username.length <1 || password.length <1 || contact.length <1 
        || phone.length < 1 || email.length <1){
        return false;
      }else {
        document.getElementById("button").disabled = false;
      }

    }
    var newWindow; 
    function makeNewWindow() { 
      //tạo cửa sổ mới
        newWindow = window.open("","","status,height=400,width=500"); 
    }
    function subWrite() { 
      
      var username = document.myform.username.value;
      var password = document.myform.password.value;
      var contact = document.myform.contact.value;
      var age = document.myform.age.value;
      var phone = document.myform.phone.value;
      var email = document.myform.email.value;
      if (newWindow.closed) { 
        makeNewWindow(); 
      }  
      newWindow.focus();
      var newContent = "<html><head><title>title</title></head>";
      newContent += "<body bgcolor='#FFC'>"; 
      newContent += "Tên: "+username+"<br>";
      newContent += "Mật Khẩu: "+password+"<br>";
      newContent += "Liên Hệ: "+contact+"<br>";
      newContent += "Tuổi: "+age+"<br>";
      newContent += "Số Điện Thoại: "+phone+"<br>";
      newContent += "Địa chỉ mail: "+email+"<br>";
      newContent += "</body></html>"; 
      newWindow.document.write(newContent); 
      newWindow.document.close(); 
    }
  			
	</script>
</body>
</html>