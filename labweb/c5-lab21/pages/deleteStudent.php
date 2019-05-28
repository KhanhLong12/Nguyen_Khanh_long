<?php
	require("libs/connectDB.php");
	require("libs/closeConnectDB.php");
	
	//xóa ảnh của học sinh (phải xóa ảnh trước rồi mới xóa bản ghi, trong trường hợp này nếu xóa bản ghi trước thì sẽ không truy vấn được ảnh để xóa)
	$sql_2 = "select * from students where id=$id"; //$id require tu connectDB.php
	$result_3 = Query($sql_2);
	$row_1 = mysqli_fetch_array($result_3);
	
	if(file_exists("uploads/".$row_1[4].""))
	{
		unlink("uploads/".$row_1[4]."");
	}
	
	//xóa bản ghi trong database
	$sql = "delete from students where id=$id";//$id lấy ở file connectDB.php
	Query($sql);

	//quay lại đúng trang hiện tại
	$malop = $row_1[5];
	header("Location: ?ac=studentDetail&id=$malop");
?>