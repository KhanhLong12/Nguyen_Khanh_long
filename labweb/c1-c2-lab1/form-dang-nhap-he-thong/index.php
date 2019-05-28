<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form đăng nhập hệ thống</title>
<link rel="stylesheet" type="text/css" href="form-dnht.css" />
</head>

<body>
	<div id="wraper">
        <div id="left">
          <h1 align="left" style="color:#09F;">Đăng nhập hệ thống</h1>
            <div align="left">
            	<form action="javascript:actionForm();" method="post" enctype="multipart/form-data">
           	  <table width="562" height="271" border="0">
            	  <tr>
            	    <td width="131">Họ tên:</td>
            	    <td colspan="3"><input type="text" name="hoten" value="" /></td>
           	    </tr>
            	  <tr>
            	    <td>Địa chỉ:</td>
            	    <td width="141"><input type="text" name="diachi" value="" /></td>
            	    <td width="128">Số điện thoại:</td>
            	    <td width="134"><input type="number" name="sdt" value="" /></td>
       	        </tr>
            	  <tr>
            	    <td>Giới tính:</td>
            	    <td>Nam <input type="radio" name="gioitinh" value="" checked="checked" />
                    	Nữ <input type="radio" name="gioitinh" value=""/>
                    </td>
            	    <td>Tuổi</td>
            	    <td><input type="number" name="tuoi" value="" /></td>
       	        </tr>
            	  <tr>
            	    <td>Trình độ</td>
            	    <td colspan="3">
                    	<select name="trinhdo">
                        	<option>Cao Học</option>
                        	<option>Đại Học</option>
                            <option>Cao Đẳng</option>
                            <option>Trung Cấp</option>
                        </select>
                    </td>
           	    </tr>
            	  <tr>
            	    <td colspan="4">
                    	<input type="submit" name="ok" value="Submit" style="color:#09F" /> &nbsp;
   	          			<input type="reset" name="reset" value="Reset" style="color:#09F" />
                    </td>
           	    </tr>
          	  </table>
              </form>
            </div>
      </div>
        <div id="right">
            
        </div>
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