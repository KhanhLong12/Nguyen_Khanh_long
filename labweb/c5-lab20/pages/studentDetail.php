<?php
	require_once("libs/connectDB.php");
	require_once("libs/closeConnectDB.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students Details</title>
</head>

<body>
	<a href="?ac=addStudent">Thêm sinh viên mới</a>
	<table border="1" align="center">
    	<tr>
        	<td colspan="5">Danh sách sinh viên trong lớp <?php?></td>
        </tr>
    	<tr>
        	<td>STT</td>
            <td>Tên</td>
            <td>Giới Tính</td>
            <td>Địa chỉ</td>
            <td>Thao tác</td>
        </tr>
	<?php
    	$query ="select * from students where $id=ClassId";
		$result = Query($query);
		$stt=1;
		while($row = mysqli_fetch_array($result))
		{
			$gioitinh = "Nam";
			if($row[2]==0)
			{
				$gioitinh = "Nữ";	
			}
			echo "<tr>";
				echo "<td>"; echo $stt; echo "</td>";
				echo "<td>"; echo $row[1]; echo "</td>";
				echo "<td>"; echo $gioitinh; echo "</td>";
				echo "<td>"; echo $row[3]; echo "</td>";
				echo "<td>"; 
					echo '<a href="index.php?ac=oneStudentDetail&id='.$row[0].'">Chi tiết</a>&nbsp;'; 
					echo '<a href="index.php?ac=editStudent&id='.$row[0].'">Sửa</a>&nbsp;'; 
					echo '<a href="index.php?ac=deleteStudent&id='.$row[0].'">Xóa</a>&nbsp;'; 
				echo "</td>";
			echo "</tr>";
			$stt++;
		}
	?>
    </table>
</body>
</html>