<?php
	function Query($sql)
	{
		$connect = mysqli_connect("localhost:3306","root","") or die("Không thể kết nối đến database-kiểm tra lại");
		mysqli_select_db($connect,'kma_l06') or die("Không thể kết nối tới table-kiểm tra lại".mysqli_error());
		mysqli_query($connect,"SET NAMES 'utf8'");
		
		$data = mysqli_query($connect,$sql) or die("Không thể truy vấn-kiểm tra lại hàm".mysqli_error());
		return $data;
	}
	if(isset($_GET["id"]))
	{
		$id =$_GET["id"];	
	}
	else
	{
		$id="";	
	}
?>