<?php
	require_once("libs/connectDB.php");
	require_once("libs/closeConnectDB.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>One Student Detail</title>
</head>

<body>
	<div align="center">
	<?php
    	$sql = "select * from students where id=$id";
		$query = Query($sql);
		$row = mysqli_fetch_array($query);
		
		/*$sql_2 = "select cl.ClassName, st.ClassId, cl.id from students st, classes cl where cl.id=st.ClassId";
		$query_2 = Query($sql_2);
		$row_2 = mysqli_fetch_array($query_2);*/
		
		echo "Chi tiết sinh viên có id = <strong style='color:red'>".$row[0]."</strong><br>";
		echo "Tên: ".$row[1]."<br>";
		$gioitinh = "Nam";
		if($row[2]==0)
		{
			$gioitinh = "Nữ";	
		}
		echo "Giới tính: ".$gioitinh."<br>";
		echo "Địa chỉ: ".$row[3]."<br>";
		echo "Số điện thoại: ".$row[7]."<br>";
		echo "Mô tả: ".$row[6]."<br>";
		
		/*$flag =1;
		$count = count($row_2["id"]);	
		while($flag<$count){
			if($row["ClassId"]==$flag && $row_2["id"]==$flag)
			{ 
				$lop = $row_2["ClassName"];
				$flag++;
			}	
		}*/
		echo "Lớp(ClassId = ".$row[5]." chưa nghĩ ra cách hiển thị tên lớp cho khoa học <br>";
		
		echo "Ảnh: <br><img src='uploads/".$row[4]."' alt='anh sinh vien' width='200' height='270' />";
	?>
    </div>
</body>
</html>