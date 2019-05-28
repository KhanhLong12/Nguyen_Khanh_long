<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List students</title>
</head>

<body>
<div align="center">
	<h3>Đang đọc file <em>students.txt</em></h3>
    <form action="" method="post" enctype="multipart/form-data">
  <table width="646" height="108" border="1">
    <tr>
      <td width="46">STT</td>
      <td width="80">Tên</td>
      <td width="80">Ngày sinh</td>
      <td width="80">Địa chỉ</td>
      <td width="80">Ảnh</td>
      <td width="80">Lớp</td>
      <td width="154">Thao Tác</td>
      
    </tr>
    <?php
    	$stt=1;
		$id=0;
		$taptin = fopen("students.txt","r",1);
		if(!$taptin)
		{
			echo "<strong style='color:red;'>Không tồn tại tập tin!</strong>";	
		}
		else
		{
			while(!feof($taptin))
			{
				$id=$stt-1;
				$noidungfile = fgets($taptin);
				$mang_hienthi = explode("|",$noidungfile);	
	?>
    	<tr>
        	<td><?php echo $stt; ?></td>
            <td><?php echo @$mang_hienthi[0];?></td>
            <td><?php echo @$mang_hienthi[1];?></td>
            <td><?php echo @$mang_hienthi[2];?></td>
            <td><?php echo "<img src='uploads/".@$mang_hienthi[3]."' alt='avatar' width='70' height='50' />"?></td>
            <td><?php echo @$mang_hienthi[4];?></td>
            <td>
            	<a href="?ac=detail&id=<?php echo $id; ?>">Detail | </a>
                <a href="?ac=edit&id=<?php echo $id; ?>">Edit | </a>
                <a href="?ac=delete&id=<?php echo $id; ?>">Delete</a>
            </td>
        </tr>
    <?php
    	$stt++;
			}	
		}
		fclose($taptin);
	?>
  </table>
  </form>
</div>
</body>
</html>