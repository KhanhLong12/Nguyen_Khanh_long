<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Caculate</title>
</head>

<body>
	<?php
		$gt =1;
		for($i=1;$i<=10;$i++)
		{
			$gt= $gt*$i;
		}
		echo "10 giai thừa thì bằng: ".$gt."<br>";
		
		$dtht = (pow(10,2)*3.14);
		echo "Diện tích hình tròn có bán kính là 10 là: ".$dtht."<br>";
		
		$ttkc = (4/3)*3.14*pow(10,3);
		echo "Thể tích mặt cầu có bán kính là 10 là: ".$ttkc."<br>";	
	?>
    <marquee scrollamount="4" direction="left" loop="50" behavior="slide" onmouseover="this.stop()" onmouseout="this.start()">
Hello!</marquee>
</body>
</html>