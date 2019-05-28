<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validate form</title>
	<script language="javascript">
    	var inputs =document.forms['myform'].getElementsByTagName('input');
		var run_onchange = false;//không kiểm tra với sự kiện onchange ban đầu
									//nhưng nếu form có lỗi thì sẽ gọi lại hàm valid() để kiểm tra form lại với sự kiện onchange
		function valid()
		{
			var error = false;
			//var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
			for(var i=0;i<inputs.length;i++)
			{
				var value = inputs[i].value;//lấy giá trị value từ thẻ input
				var id = inputs[i].getAttribute('id');//lấy giá trị id từ thẻ input
				
				var span = document.createElement('span'); //phần tử span để lưu thông tin lỗi
				//nếu span đã tồn tại thị remove như sau:
				var p = inputs[i].parentNote;
				if(p.lastChild.nodeName == 'SPAN'){p.removeChild(p.lastChild);}
				
				if(value = '') //kiểm tra rỗng
				{
					span.innerHTML("yêu cầu nhập đủ thông tin");
				}
				else{//kiểm tra các trường hợp khác
					if(id=='password')//kiểm tra password
					{
						if(value.length<6){span.innerHTML='Password phải lớn hơn 6 ký tự'}
						var pass = value;	
					}
					if(id=='cf-password' && value != pass){span.innerHTML='Password nhập lại chưa đúng'}//kiểm tra confirm pass
				}
				//nếu có lỗi thì sẽ chèn span vào, chạy onchange
				if(span.innerHTML != '')
				{
					inputs[i].parentNode.appendChild(span);
					error = true;
					run_onchange = true;
					inputs[i].style.border='1px solid #c6807b';
					inputs[i].style.background='#fffcf9';	
				}
			}//end for
			if(error==false){alert("done");}	
		}//end valid()
		
		//sau khi viết xong hàm valid ở trên thì chạy hàm kiểm tra valid đó
		var register = document.getElementById('submit-form');
		register.onclick=function(){
				return valid();
			}
			
		//kiểm tra lỗi với sự kiện onchange
		for(var i=0;i<inputs.length;i++)
		{
			var id= inputs[i].getAttribute('id');
			input[i].onchange = function()
			{
				if(run_onchange == true)
				{
					this.style.border = '1px solid #999';
   					this.style.background = '#fff';
      				valid();
	
				}	
			}	
		}
    </script>
</head>

<body>
	<form name="myform" action="">
   	  <div align="center">
   	    <table width="633" height="423" border="1">
   	      <tr>
   	        <td colspan="2"><strong>Register Form</strong></td>
          </tr>
   	      <tr>
   	        <td width="278"><label for="username">User name:</label></td>
   	        <td width="339"><input class="text" type="text" name="username" id="username" value="" /></td>
          </tr>
   	      <tr>
   	        <td>Password:</td>
   	        <td><input class="text" type="password" name="password" id="password" value="" /></td>
          </tr>
   	      <tr>
   	        <td>Confirm Password</td>
   	        <td><input class="text" type="password" name="cf-password" id="cf-password" value="" /></td>
          </tr>
   	      <tr>
   	        <td>Address:</td>
   	        <td><textarea class="text" name="address" id="address" style="overflow:scroll"></textarea></td>
          </tr>
   	      <tr>
   	        <td>Marriage:</td>
   	        <td><input class="text" type="checkbox" name="marriage" value="Đã kết hôn" />Đã kết hôn <br />
            	<input class="text" type="checkbox" name="marriage" value="Độc thân" />Độc thân
            </td>
          </tr>
   	      <tr>
   	        <td>Gender:</td>
   	        <td><input type="radio" name="gender" value="Nam" checked="checked"/>Nam 
            	<input type="radio" name="gender" value="Nam" />Nữ 
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
            <input type="reset" value="Reset" />
            <input type="submit" name="action" id="submit-form" value="Show" />
            </td>
          </tr>
        </table>
      </div>
    </form>
   	<div align="left" style="margin-left:600px;"><label id="id"></label></div>
    <h4 style="float:right;margin-right:30px;"><a href="https://www.facebook.com/lightning.quan" target="_blank">Trung Quân</a></h4>
</body>
</html>