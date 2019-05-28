<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List students</title>
</head>

<body>
<div align="center">
	<h3>Đang đọc file <em>students.txt</em></h3>
  <table width="356" height="40" border="1">
    <tr>
      <td width="81">STT</td>
      <td width="82">Tên</td>
      <td width="85">Địa chỉ</td>
      <td width="80">Tuổi</td>
    </tr>
    <?php
    	$stt=1;
		$taptin = fopen("students.txt","r",1);
		if(!$taptin)
		{
			echo "<strong style='color:red;'>Không tồn tại tập tin!</strong>";	
		}
		else
		{
			while(!feof($taptin))
			{
					
		
	?>
    	<tr>
        	<td><?php echo $stt; ?></td>
            <td><?php echo fgets($taptin);?></td>
            <td><?php echo fgets($taptin);?></td>
            <td><?php echo fgets($taptin);?></td>
        </tr>
    <?php
    	$stt++;
			}	
		}
		fclose($taptin);
	?>
  </table>
</div>
</body>
</html>