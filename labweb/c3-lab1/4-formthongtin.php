<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Thông Tin</title>
	<script language="javascript">
		function showDataGram(){
			var username = document.myform.username.value;
			var password = document.myform.password.value;
			var addtress = document.myform.address.value;
			var marriage = document.myform.marriage.checked;
			var gender = document.myform.gender.value;
			var skill = document.myform.skill.value;
			var jobs = "";
			
			var hopies = "";
      var marry = "";
      if( marriage == true){
        marry = document.myform.marriage.value;
      }
      else{
        marry = "Chưa kết hôn";
      }
      for(var i=0; i<document.myform.jobs.length; i++)
      {
        if(document.myform.jobs[i].selected)
        {
          jobs += (jobs?'       ':'')+document.myform.jobs[i].value;
        } 
      }
			for(var i=0; i<document.myform.hopies.length; i++)
			{
				if(document.myform.hopies[i].checked)
				{
					hopies += (hopies?'-':'')+document.myform.hopies[i].value;
				}	
			}
				
				alert(
					'Tên: '+username+'\n'+
					'Mật Khẩu: '+password+'\n'+
					'Địa chỉ: '+addtress+'\n'+
					'Giới tính: '+gender+'\n'+
					'Tình trạng hôn nhân: '+marry+'\n'+
					'Kỹ năng: '+skill+'\n'+
					'Sở thích: '+hopies+'\n'+
					'Nghề nghiệp: '+jobs+'\n'
				);
				
				
			}
	function showonpage(id)//hàm này thành công rồi
	{
			var username = document.myform.username.value;
			var password = document.myform.password.value;
			var addtress = document.myform.address.value;
			var marriage = document.myform.marriage.checked;
			var gender = document.myform.gender.value;
			var skill = document.myform.skill.value;
			var jobs = "";
			
			var hopies = "";
      var marry = "";
      console.log(marriage);
      if( marriage == false){
        marry = "Chưa kết hôn";
      }
      else{
        marry = document.myform.marriage.value;
      }
      for(var i=0; i<document.myform.jobs.length; i++)
      {
        if(document.myform.jobs[i].selected)
        {
          jobs += (jobs?'&nbsp; &nbsp;':'')+document.myform.jobs[i].value;
        } 
      }
			for(var i=0; i<document.myform.hopies.length; i++)
			{
				if(document.myform.hopies[i].checked)
				{
					hopies += (hopies?'-':'')+document.myform.hopies[i].value;
				}	
			}
			
				document.getElementById(id).innerHTML="Tên: <strong>"+username+"</strong><br>"+
													"Mật Khẩu: <strong>"+password+"</strong><br>"+
													"Địa chỉ: <strong>"+addtress+"</strong><br>"+
													"Giới tính: <strong>"+gender+"</strong><br>"+
													"Tình trạng hôn nhân: <strong>"+marry+"</strong><br>"+
													"Kỹ năng: <strong>"+skill+"</strong><br>"+
													"Sở thích: <strong>"+hopies+"</strong><br>"+
													"Nghề nghiệp: <strong>"+jobs+"</strong><br>"
													;
			
	}
	</script>
</head>

<body>
	<form name="myform" action="4-formthongtin.php" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="633" height="423" border="1">
   	      <tr>
   	        <td colspan="2"><strong>Register Form</strong></td>
          </tr>
   	      <tr>
   	        <td width="278">User name:</td>
   	        <td width="339"><input type="text" name="username" value="" /></td>
          </tr>
   	      <tr>
   	        <td>Password:</td>
   	        <td><input type="password" name="password" value="" /></td>
          </tr>
   	      <tr>
   	        <td>Confirm Password</td>
   	        <td><input type="password" name="cf-password" value="" /></td>
          </tr>
   	      <tr>
   	        <td>Address:</td>
   	        <td><textarea name="address" style="overflow:scroll"></textarea></td>
          </tr>
   	      <tr>
   	        <td>Marriage:</td>
   	        <td><input type="checkbox" name="marriage" value="Đã kết hôn" /></td>
          </tr>
   	      <tr>
   	        <td>Gender:</td>
   	        <td><input type="radio" name="gender" value="Nam" />Nam 
            	<input type="radio" name="gender" value="Nữ" />Nữ 
            </td>
          </tr>
   	      <tr>
   	        <td>Programming languages:</td>
   	        <td>&nbsp;</td>
          </tr>
   	      <tr>
   	        <td>Skill:</td>
   	        <td><input type="radio" name="skill" value="normal" />Normal <br>
            	<input type="radio" name="skill" value="good" />Good <br>
                <input type="radio" name="skill" value="very good" />Very good <br>
                <input type="radio" name="skill" value="excelent" />Excelent
             </td>
          </tr>
   	      <tr>
   	        <td>Jobs:</td>
   	        <td>
            	<select name="jobs" multiple="multiple">
                	<option selected="selected" value="công nghệ thông tin">Công nghệ thông tin</option>
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
            <input type="reset" value="Reset" />
            <input type="button" onclick="showDataGram();" value="Register" />
            <input type="button" onclick="showonpage('id');" value="Show" />
            <!--<input type="submit" name="ok" value="Show On Page" />-->
            </td>
          </tr>
        </table>
      </div>
    </form>
   	<div align="left" style="margin-left:600px;"><label id="id"></label></div>
    </body>
</html>