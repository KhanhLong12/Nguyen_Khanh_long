<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form nộp bài tập</title>
</head>

<body>
	<div id="wraper" style="color:#09F">
	<h1 align="center">Gửi bài tập lớn</h1>
    <form action="javascript:actionForm();" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="622" height="301" border="1">
   	      <tr>
   	        <td width="185"><strong>Tên sinh viên:</strong></td>
   	        <td width="421"><input type="text" name="ten" value="" /></td>
          </tr>
   	      <tr>
   	        <td><strong>Lớp (*):</strong></td>
   	        <td><input type="text" name="lop" value="" /></td>
          </tr>
   	      <tr>
   	        <td><strong>Ngày gửi bài</strong>:</td>
   	        <td><input type="date" name="ngaygui" value="" /></td>
          </tr>
   	      <tr>
   	        <td><strong>Bài tập sẽ gửi:(*):</strong></td>
   	        <td><input type="file" name="upload" /></td>
          </tr>
   	      <tr>
   	        <td><strong>Địa chỉ liên hệ:</strong></td>
   	        <td><input type="text" name="diachi" value="" /></td>
          </tr>
   	      <tr>
   	        <td><strong>Email:</strong></td>
   	        <td><input type="text" name="email" value="" /></td>
          </tr>
   	      <tr>
   	        <td><strong>Ghi chú</strong>:</td>
   	        <td><textarea rows="5" cols="40" style="overflow:scroll;" name="ghi-chu"></textarea></td>
          </tr>
   	      <tr>
   	        <td colspan="2"><div align="center">
   	          <input type="submit" name="ok" value="Lưu" style="color:#09F" /> &nbsp;
   	          <input type="reset" name="reset" value="Làm Lại" style="color:#09F" />
            </div></td>
          </tr>
        </table>
      </div>
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