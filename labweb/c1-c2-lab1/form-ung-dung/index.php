<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form ứng dụng-Trung Quân</title>
</head>

<body>
	<h1 align="center">APPLICATION FORM</h1>
	<div align="center">
    <form action="javascript:actionForm();" method="post" enctype="multipart/form-data">
   	  <table width="430" height="213" border="0">
    	  <tr>
    	    <td width="121">First Name:</td>
    	    <td width="293"><input type="text" name="first-name" value="" /></td>
  	    </tr>
    	  <tr>
    	    <td>Education:</td>
    	    <td><input type="checkbox" name="education" value="" checked="checked" />Graduate &nbsp;
            	<input type="checkbox" name="education" value="" />Post Graduate
            </td>
  	    </tr>
    	  <tr>
    	    <td>Gender:</td>
    	    <td>Male <input type="radio" name="gender" value="" checked="checked" />
                   Female <input type="radio" name="gender" value=""/></td>
  	    </tr>
    	  <tr>
    	    <td>Salary:</td>
    	    <td><input type="text" name="salary-name" value="" /></td>
  	    </tr>
    	  <tr>
    	    <td>Remarks:</td>
    	    <td><textarea rows="5" cols="40" style="overflow:scroll;" name="remarks">Type your text here</textarea></td>
  	    </tr>
    	  <tr>
    	    <td>Country:</td>
    	    <td><select style="width:200px;" name="country">
                					<option>Vietnam</option>
                                    <option>America</option>
                                    <option>Japan</option>
                                    <option>England</option>
                				</select></td>
  	    </tr>
    	  <tr>
    	    <td colspan="2"><div align="center">
    	      <input type="submit" name="ok" value="Submit"  /> 
    	      &nbsp;
    	      <input type="reset" name="reset" value="Reset" " />
  	      </div></td>
   	    </tr>
  	  </table>
      </form>
    </div>
	<h4 style="float:right;margin-right:30px;"><a href="https://www.facebook.com/lightning.quan" target="_blank">Trung Quân</a></h4>
<script language='JavaScript' type='text/javascript'>
	function actionForm()
	{
		alert("Tạm thời chưa có code xử lý, đang update, liên hệ Trung Quân để biết thêm thông tin mới nhất.");	
	}
</script>
</body>
</html>