<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validate form</title>
<style type="text/css" xml:space="preserve">
BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
.error_strings{ font-family:Verdana; font-size:14px; color:#FF0000;} 
tr{background-color:#FFC}
</style>
<script language="JavaScript" src="gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
<script language="javascript">
	var newWindow;
	function makeNewWindow() { 
		newWindow = window.open("","","status,height=400,width=500"); 
	}
	function subWrite() { 
			var username = document.myform.username.value;
			var password = document.myform.password.value;
			var addtress = document.myform.address.value;
			var marriage = document.myform.marriage.checked;
			var gender = document.myform.gender.value;
			var skill = document.myform.skill.value;
			var jobs = "";
			
			var hopies = "";
      if( marriage == true){
        marriage = document.myform.marriage.value;
      }
      else{
        marriage = "Đã kết hôn";
      }
      for(var i=0; i<document.myform.jobs.length; i++)
      {
        if(document.myform.jobs[i].selected)
        {
          jobs += (jobs?'&nbsp;  ':'')+document.myform.jobs[i].value;
        } 
      }
			for(var i=0; i<document.myform.hopies.length; i++)
			{
				if(document.myform.hopies[i].checked)
				{
					hopies += (hopies?'-':'')+document.myform.hopies[i].value;
				}	
			}
		
		if (newWindow.closed) { 
			makeNewWindow(); 
		}
		newWindow.focus(); 
    
		var newContent = "<html><head><title>title</title></head>"; 
		newContent += "<body bgcolor='#FFC'>"; 
		newContent += "Tên: "+username+"<br>";
		newContent += "Mật Khẩu: "+password+"<br>";
		newContent += "Địa chỉ: "+addtress+"<br>";
		newContent += "Giới tính: "+gender+"<br>";
		newContent += "Tình trạng hôn nhân: "+marriage+"<br>";
		newContent += "Kỹ năng: "+skill+"<br>";
		newContent += "Sở thích: "+hopies+"<br>";
		newContent += "Nghề nghiệp: "+jobs+"<br>";
		newContent += "</body></html>"; 
		newWindow.document.write(newContent); 
		newWindow.document.close(); 
	  
	}
</script>
</head>

<body onload="makeNewWindow()"> 
	<form name="myform" id="myform">
   	  <div align="center">
   	    <table width="633" height="423" cellspacing="2" cellpadding="2" border="0">
   	      <tr>
   	        <td colspan="2"><strong>Register Form</strong></td>
          </tr>
   	      <tr>
   	        <td width="278">User name:</td>
   	        <td width="339"><input type="text" name="username" />
            				 <div id='myform_username_errorloc' class="error_strings"></div>
            </td>
          </tr>
   	      <tr>
   	        <td>Password:</td>
   	        <td><input  type="password" name="password"/>
            	<div id='myform_password_errorloc' class="error_strings"></div>
            </td>
          </tr>
   	      <tr>
   	        <td>Confirm Password</td>
   	        <td><input type="password" name="cf-password"/>
            	<div id='myform_cf-password_errorloc' class="error_strings"></div>
            </td>
          </tr>
   	      <tr>
   	        <td>Address:</td>
   	        <td><textarea name="address" style="overflow:scroll"></textarea>
            	<div id='myform_address_errorloc' class="error_strings"></div>
            </td>
          </tr>
   	      <tr>
   	        <td>Marriage:</td>
   	        <td><input  type="radio" name="marriage" value="Độc thân"/>Độc thân<br /> 
                <div id='myform_marriage_errorloc' class="error_strings"></div>
            </td>
          </tr>
   	      <tr>
   	        <td>Gender:</td>
   	        <td><input type="radio" name="gender" value="Nam" checked="checked"/>Nam 
            	<input type="radio" name="gender" value="Nữ" />Nữ 
                <div id='myform_gender_errorloc' class="error_strings">
            </td>
          </tr>
   	      <tr>
   	        <td>Programming languages:</td>
   	        <td>&nbsp;</td>
          </tr>
   	      <tr>
   	        <td>Skill:</td>
   	        <td><input type="radio" name="skill" value="normal" checked="checked" />Normal <br>
            	<input type="radio" name="skill" value="good" />Good <br>
                <input type="radio" name="skill" value="very good" />Very good <br>
                <input type="radio" name="skill" value="excelent" />Excelent
             </td>
          </tr>
   	      <tr>
   	        <td>Jobs:</td>
   	        <td>
            	<select name="jobs" multiple="multiple">
                	<option selected="selected" value="công nghệ thông tin" spellcheck="true">Công nghệ thông tin</option>
                    <option selected="selected" value="Cơ khí">Cơ khí</option>
                    <option selected="selected" value="Điện tử">Điện tử</option>
                    <option selected="selected" value="Kinh doanh">Kinh doanh</option>
                </select>
            </td>
          </tr>
   	      <tr>
   	        <td>Hopies:</td>
   	        <td><input type="checkbox" name="hopies" value="sports" checked="checked" />Sports &nbsp;
            	<input type="checkbox" name="hopies" value="music" />Music &nbsp;
                <input type="checkbox" name="hopies" value="news" />News &nbsp;
                <input type="checkbox" name="hopies" value="sience" />Sience &nbsp;
            </td>
          </tr>
   	      <tr>
   	        <td colspan="2">
              <input type="submit" value="Kiểm tra" />
              <input type="button" value="Mở trong tab mới" onclick="subWrite()">  
            </td>
          </tr>
        </table>
      </div>
    </form>
   	<script language="JavaScript" type="text/javascript"
    xml:space="preserve">
			var err  = new Validator("myform");
			err.EnableOnPageErrorDisplay();
			err.EnableMsgsTogether();
			
			err.addValidation("username","req","Hãy nhập đủ thông tin trường này, Tối đa 20 ký tự");
   			err.addValidation("username","maxlen=20","Tối đa 20 ký tự");
			
			err.addValidation("password","req","Hãy nhập đủ thông tin trường này");
			err.addValidation("password","neelmnt=username","Mật khẩu không được giống tên username");
			err.addValidation("cf-password","eqelmnt=password","Nhập lại mật khẩu không đúng");
			
			err.addValidation("address","req","Hãy nhập đủ thông tin trường này, tối đa 50 ký tự");
			err.addValidation("address","maxlen=50","Tối đa chỉ 50 ký tự");
  			
	</script>
</body>
</html>
