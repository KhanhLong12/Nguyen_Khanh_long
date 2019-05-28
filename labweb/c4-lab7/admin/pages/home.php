<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home</title>
</head>

<body>
	<?php
		
    	if(isset($_SESSION["username"]))
		{
			echo "Khởi tạo session thành công! <br>";
			echo "<br>";
			echo "Username: ".$_SESSION["username"]."<br>";
			echo "Password: ".$_SESSION["password"]."<br>";
		}
		else{
	?>
	<h2 align="center">Chưa <a href="../?ac=login">đăng nhập</a></h2>
    <?php } ?>
</body>
</html>