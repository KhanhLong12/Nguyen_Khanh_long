<?php
	require("libs/connectDB.php");
	require("libs/closeConnectDB.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add students</title>
</head>

<body>
<?php
	if(isset($_POST["ok"]))
	{
		$hoten = addcslashes($_POST['hoten'],' \'"!@#$%^&*()//\\:. ');
		$diachi = addcslashes($_POST['diachi'],' \'"!@#$%^&*()//\\:. ');	
		$gioitinh = $_POST["gioitinh"];
		$lop = $_POST["lop"];
		$anhdaidien = $_FILES["img"]["name"];
		$description = $_POST["description"];
		
		$sql_0 ="insert into students(
					studentname,
					gender,
					studentaddress,
					studentimage,
					classId,
					studentdescription
				) 
				values(
					'$hoten',
					'$gioitinh',
					'$diachi',
					'$anhdaidien',
					'$lop',
					'$description'
				)";
		Query($sql_0);
		echo "Thêm sinh viên mới thành công!";
		
		if($_FILES["img"]["error"]>0)
		{
			echo "Không upload ảnh thành công";	
		}
		else
		{
			$folder="uploads/";
			$name = $_FILES["img"]["name"];
			$path = $folder.$name;
			switch($_FILES["img"]["type"])
			{
				case 'image/jpg':
				case 'image/JPG':
				case 'image/jpeg':
				case 'image/JPEG':
				move_uploaded_file($_FILES["img"]["tmp_name"],$path);	
				break;
				default: echo "Kiểu file không hợp lệ!";
			}	
		}
	}
?>
	<form action="" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="682" height="253" border="0">
   	      <tr>
   	        <td colspan="2"><div align="center" style="font-weight:bold;">Thêm sinh viên mới:</div></td>
          </tr>
   	      <tr>
   	        <td width="150"><div align="center">Họ tên:</div></td>
   	        <td width="522"><div align="center">
            	<input type="text" name="hoten" value="<?php ?>" />
            </div></td>
          </tr>
   	      <tr>
   	        <td><div align="center">Địa chỉ:</div></td>
   	        <td><div align="center">
            	<input type="text" name="diachi" value="<?php ?>" />
            </div></td>
          </tr>
   	      <tr>
   	        <td><div align="center">Giới tính</div></td>
   	        <td><div align="center">
            	<input type="radio" name="gioitinh" value="1" checked="checked" />Nam &nbsp;
                <input type="radio" name="gioitinh" value="0" />Nữ &nbsp;
            </div></td>
          </tr>
          <tr>
          	<td><div align="center">Lớp <strong style="color:#F00">*</strong></div></td>
            <td>
            	<select name="lop">
                	<?php
                    	$sql_1 = "select id, ClassName from classes";
							$result_2 = Query($sql_1);
							while($row = mysqli_fetch_array($result_2))
							{
								$malop = $row[0];
								$tenlop = $row[1];
							?>
                     <option value="<?php echo $malop; ?>"><?php echo $tenlop;?></option>
                    <?php	
						}
					?>
                </select>
            </td>
          </tr>
   	      <tr>
   	        <td><div align="center">Ảnh đại diện:</div></td>
   	        <td><div align="center">
                <input type="file" name="img" value="">
            </div></td>
          </tr>
          <tr>
          	<td><div align="center">Mô Tả:</div></td>
            <td>
            	<div align="center">
                	<textarea class="ckeditor" id="editor1" name="description" role="10" cols="10"></textarea>
                </div>
            </td>
          </tr>
   	      <tr>
   	        <td colspan="2"><div align="center">
            	<input type="reset" value="reset" />
            	<input type="submit" name="ok" value="Thêm" />
            </div></td>
          </tr>
        </table>
      </div>
    </form>
</body>
</html>