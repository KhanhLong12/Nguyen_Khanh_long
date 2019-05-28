<script language='JavaScript' type='text/javascript'>
	function actionForm()
	{
		alert("Tạm thời chưa có code xử lý, đang update, liên hệ Trung Quân để biết thêm thông tin mới nhất.");	
	}
</script>
<?php
	$error = array();
	$error=NULL;
	$hoten="";
	$ngaysinh="";
	$mail="";
	if(isset($_POST["ok"]))
	{
		if($_POST["hoten"]==NULL){
			$error["hoten"] = "Bạn hãy nhập họ tên.";
		}
		else{
			$hoten = $_POST["hoten"];
		}
		
		if($_POST["ngaysinh"]==NULL){
			$error["ngaysinh"] = "Bạn hãy nhập ngày sinh";
		}
		else{
			$ngaysinh = $_POST["ngaysinh"];
		}
		
		if($_POST["mail"]==NULL){
			$error["mail"] = "Bạn hãy nhập đại chỉ mai.";
		}
		else{
			$mail = $_POST["mail"];
		}
		
		if($hoten && $ngaysinh && $mail)
		{
			echo "gửi dữ liệu đi thành công, Trung Quân";
			?>
            <script language="JavaScript" type="text/javascript">
				//$this->javascript:actionForm();
				//alert("Tạm thời chưa có code xử lý, đang update, liên hệ Trung Quân để biết thêm thông tin mới nhất.");
				actionForm();
			</script>
			<?php
		}	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form đăng ký</title>

</head>

<body>
<h1 align="center">Đăng ký khách hàng</h1>
<div align="center">
	<form action="index.php" method="post" enctype="multipart/form-data">
  <table width="554" height="364" border="0">
    <tr>
      <td colspan="2" style="background-color:#03F">Thông tin đăng nhập</td>
      </tr>
    <tr>
      <td width="133">Tên đăng nhập:</td>
      <td width="195"><input type="text" name="ten" value="" /></td>
      </tr>
    <tr>
      <td>Mật Khẩu:</td>
      <td><input type="password" name="password" value="" /></td>
      </tr>
    <tr>
      <td>Nhập lại mật khẩu:</td>
      <td><input type="password" name="re-password" value="" /></td>
      </tr>
    <tr>
      <td colspan="2" style="background-color:#03F">Thông tin chi tiết cá nhân</td>
      </tr>
    <tr>
      <td>Họ tên khách hàng:</td>
      <td><input type="text" name="hoten" value="" /><span style="color:#F00">(*)</span></td>
      <td><?php echo $error["hoten"]; ?></td>
      </tr>
    <tr>
      <td>Ngày Sinh:</td>
      <td><input type="text" name="ngaysinh" value="" /><span style="color:#F00">(*)</span></td>
      <td><?php echo $error["ngaysinh"]; ?></td>
      </tr>
    <tr>
      <td>Giới tính:</td>
      <td><input type="radio" name="gioitinh" value="Nam" />Nam
      		<input type="radio" name="gioitinh" value="Nữ" />Nữ
      </td>
      </tr>
    <tr>
      <td>Địa chỉ mail:</td>
      <td><input type="text" name="mail" value="" /><span style="color:#F00">(*)</span></td>
      <td><?php echo $error["mail"]; ?></td>
      </tr>
    <tr>
      <td>Thu nhập:</td>
      <td><input type="number" name="thunhap" value="" /></td>
      </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="ok" value="Đăng Ký" />
      </div></td>
      </tr>
  </table>
  </form>
</div>
	<div style="margin-left:500px; color:#F00">
  	<ul>
  		<p>Danh sách các lỗi:</p>
        	<li>Họ tên không được rỗng</li>
            <li>Ngày sinh không hợp lệ</li>
            <li>Email không hợp lệ</li>
   	</ul> 	
  </div>
  <h4 style="float:right;margin-right:30px;"><a href="https://www.facebook.com/lightning.quan" target="_blank">Trung Quân</a></h4>

</body>
</html>