<?php
	require_once("libs/connectDB.php");
	require_once("libs/closeConnectDB.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Student Class</title>
</head>

<body>
	<?php
    	$query = "select * from classes";
		
		//hien thi theo cach 1 lay het row trong table mysqli_fetch_row
		echo "Danh sách cách 1: <strong>mysqli_fetch_row</strong><br>";
		$result = Query($query);
		while($row = mysqli_fetch_row($result))
		{
			//print_r($row);
			$malop = $row[0];
			$tenlop = $row[1];
			echo '<a href="?ac=studentDetail&id='.$malop.'">'.$tenlop.'</a><br>';
		}
		echo "<br>";
		//hien thi theo cach 2 dung mysqli_fetch_array
		echo "Danh sách cách 2: <strong>mysqli_fetch_array</strong><br>";
		$result2 = Query($query);
		while($row = mysqli_fetch_array($result2))
		{
			$malop = $row[0];
			$tenlop = $row[1];
			echo '<a href="?ac=studentDetail&id='.$malop.'">'.$tenlop.'</a><br>';
		}
		echo "<br>";
		//hien thi theo cach 3 dung mysqli_fetch_assoc
		echo "Danh sách cách 3: <strong>mysqli_fetch_assoc</strong><br>";
		$result3 = Query($query);
		while($row = mysqli_fetch_assoc($result3))
		{
			$malop = $row["id"];
			$tenlop = $row["classname"];
			echo '<a href="?ac=studentDetail&id='.$malop.'">'.$tenlop.'</a><br>';
		}
	?>
</body>
</html>