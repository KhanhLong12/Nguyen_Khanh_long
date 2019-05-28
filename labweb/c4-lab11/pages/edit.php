<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit</title>
</head>

<body>
<?php
	 if(isset($_POST["ok"]))
	 {
		 if($_FILES["anh"]["error"]>0)
		 {
			echo "Lỗi ".$_FILES["anh"]["error"];	 
		}
		else
		{
			$path ="uploads/";
			move_uploaded_file($_FILES["anh"]["tmp_name"],$path.$_FILES["anh"]["name"]);
		}
		
		$ten = $_POST["ten"];
		$ngaysinh = $_POST["ngaysinh"];
		$diachi = $_POST["diachi"];
		$avatar = $_FILES["anh"]["name"];
		$lop = $_POST["lop"];
		
		$noidung_ghi ="".$ten."|".$ngaysinh."|".$diachi."|".$avatar."|".$lop."\n";
		
		$file = fopen("students.txt","a",1);// a: có nghĩa là ghi vào cuối file, nếu file không tồn tại nó sẽ tự tạo file mới
		fwrite($file,$noidung_ghi);
		
		echo "Thêm sinh viên thành công";
		fclose($file);
	}
	
	$id=0;
	if(isset($_GET["id"])){
		$taptin = fopen("students.txt","r",1);
		$row=0;
		while(!feof($taptin))
		{
			if($row == $id){
				$noidungfile = fgets($taptin);
				$mang = explode("|",$noidungfile);
				break;	
			}
			else
			{
				$tam = fgets($taptin);	
			}
		}
		fclose($taptin);
	}
?>
	<form action="" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="366" height="166" border="0">
   	      <tr>
   	        <td colspan="2"><h3>Sửa sinh viên vào file <em>students.txt</em></h3></td>
          </tr>
   	      <tr>
   	        <td width="97">Tên</td>
   	        <td width="253"><input type="text" name="ten" value="<?php echo @$mang[0]; ?>" /></td>
          </tr>
   	      <tr>
   	        <td>Ngày sinh</td>
   	        <td><input type="date" name="ngaysinh" value="<?php echo @$mang[1]; ?>" /></td>
          </tr>
   	      <tr>
   	        <td>Địa chỉ</td>
   	        <td><input type="text" name="diachi" value="<?php echo @$mang[2]; ?>" /></td>
          </tr>
   	      <tr>
   	        <td>Avatar</td>
   	        <td><input type="file" name="anh" value="" /><br />
            	<img src='uploads/<?php echo @$mang[3];?>' alt='avatar' width='200' height='160' />
            </td>
          </tr>
   	      <tr>
   	        <td>Lớp</td>
   	        <td><input type="text" name="lop" value="<?php echo @$mang[4]; ?>" /></td>
          </tr>
   	      <tr>
   	        <td colspan="2">
            	<div align="center">
            	  <input type="reset" value="Reset" />
            	  <input type="submit" name="ok" value="Thêm" />
          	  </div>
            </td>
          </tr>
        </table>
      </div>
    </form>
</body>
</html>