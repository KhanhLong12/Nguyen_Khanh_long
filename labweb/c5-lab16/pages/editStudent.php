<?php
	require("libs/connectDB.php");
	require("libs/closeConnectDB.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>exit students</title>
</head>

<body>
<?php
	if(isset($_POST["ok"]))
	{
		if($_FILES["img"]["name"]==NULL){ //kiểm tra nếu không chọn ảnh mới thì sẽ không upload ảnh
			$hoten = addcslashes($_POST['hoten'],' \'"!@#$%^&*()//\\:. ');
			$diachi = addcslashes($_POST['diachi'],' \'"!@#$%^&*()//\\:. ');	
			$gioitinh = $_POST["gioitinh"];
			$lop = $_POST["lop"];
			//$anhdaidien = $_FILES["img"]["name"];
			
			$sql_0 ="update students set
					StudentName ='$hoten',
					StudentGender ='$gioitinh',
					StudentAddress ='$diachi',
					ClassId ='$lop'
					where id ='$id'
				";
			Query($sql_0);
			echo "<strong style='color:red'>Sửa sinh viên thành công!</strong>";	
		}//end if($_FILES["img"]["name"]==NULL)
		
		else//ngược lại nếu chọn ảnh thì mới cho phép upload
		{
			$hoten = addcslashes($_POST['hoten'],' \'"!@#$%^&*()//\\:. ');
			$diachi = addcslashes($_POST['diachi'],' \'"!@#$%^&*()//\\:. ');	
			$gioitinh = $_POST["gioitinh"];
			$lop = $_POST["lop"];
			$anhdaidien = $_FILES["img"]["name"];
			
			$sql_0 ="update students set
					StudentName ='$hoten',
					StudentGender ='$gioitinh',
					StudentAddress ='$diachi',
					StudentImage ='$anhdaidien',
					ClassId ='$lop'
					where id ='$id'
				";
			Query($sql_0);
			echo "<strong style='color:red'>Sửa sinh viên thành công!</strong>";
			
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
	}
?>

	<?php 
		$sql_2 = "select * from students where id ='$id'"; //$id require tu connectDB.php
		$result_3 = Query($sql_2);
		$row_1 = mysqli_fetch_array($result_3);
	?>
	<form action="" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="384" height="248" border="0">
   	      <tr>
   	        <td colspan="2"><div align="center" style="font-weight:bold;">Sửa sinh viên:</div></td>
          </tr>
   	      <tr>
   	        <td width="121"><div align="center">Họ tên:</div></td>
   	        <td width="180"><div align="center">
            	<input type="text" name="hoten" value="<?php echo $row_1[1]; ?>" />
            </div></td>
          </tr>
   	      <tr>
   	        <td><div align="center">Địa chỉ:</div></td>
   	        <td><div align="center">
            	<input type="text" name="diachi" value="<?php echo $row_1[3]; ?>" />
            </div></td>
          </tr>
   	      <tr>
   	        <td><div align="center">Giới tính</div></td>
   	        <td><div align="center">
            	<?php
                	if($row_1[2] ==1)
					{
				?>
                    <input type="radio" name="gioitinh" value="1" checked="checked" />Nam &nbsp;
                    <input type="radio" name="gioitinh" value="0" />Nữ &nbsp;
                <?php } 
					else{
				?>
                	<input type="radio" name="gioitinh" value="1" />Nam &nbsp;
                	<input type="radio" name="gioitinh" value="0" checked="checked" />Nữ &nbsp;
                <?php } ?>
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
                <?php
                	if(file_exists("uploads/".$row_1[4].""))
					{
						?>
                       <img src="<?php echo "uploads/".$row_1[4]."";?>" alt="anh dai dien" width="200" height="270" />
                        <?php	
					}
				?>
                <br /><input type="file" name="img" value="">
            </div></td>
          </tr>
   	      <tr>
   	        <td colspan="2"><div align="center">
            	<input type="reset" value="reset" />
            	<input type="submit" name="ok" value="Sửa" />
            </div></td>
          </tr>
        </table>
      </div>
    </form>
</body>
</html>