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
		echo "Chi tiết sinh viên thứ: ".$row[0]."<br>";
		echo "Tên: ".$row[1]."<br>";
		$gioitinh = "Nam";
		if($row[2]==0)
		{
			$gioitinh = "Nữ";	
		}
		echo "Giới tính: ".$gioitinh."<br>";
		echo "Địa chỉ: ".$row[3]."<br>";
	?>
    </div>
</body>
</html>