<?php
	function closeQuery($connect)
	{
		$connect = mysqli_connect("localhost:3306","root","") or die("Không thể kết nối đến database-kiểm tra lại");
		mysqli_close($connect);	
	}
?>