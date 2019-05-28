<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail</title>
</head>

<body>
<?php
	//include("liststudents.php");
	$id=0;
	if(isset($_GET["id"]))
	{
		$taptin = fopen("students.txt","r",1);
		if(!$taptin)
		{
			echo "<strong style='color:red;'>Không tồn tại tập tin!</strong>";	
		}
		else
		{
			$row=0;
			while(!feof($taptin))
			{
				if($row==$id)
				{
					$noidungfile = fgets($taptin);
					$mang_hienthi = explode("|",$noidungfile);	
					//print_r($mang_hienthi);
					break;	
				}
				else
				{
					$tam = fgets($taptin);	
					//$mang_hienthi = explode("|",$tam);
				}	
				$row++;
			}
					
		}	
		fclose($taptin);
	}
?>
<div align="center">
  <table width="467" height="223" border="0">
    <tr>
      <td colspan="2">Chi tiết sinh viên</td>
    </tr>
    <tr>
      <td width="218" rowspan="4"><?php echo "<img src='uploads/".@$mang_hienthi[3]."' alt='avatar' width='200' height='160' />"?></td>
      <td width="233"><?php echo @$mang_hienthi[0];?></td>
    </tr>
    <tr>
      <td><?php echo @$mang_hienthi[1];?></td>
    </tr>
    <tr>
      <td><?php echo @$mang_hienthi[2];?></td>
    </tr>
    <tr>
      <td><?php echo @$mang_hienthi[4];?></td>
    </tr>
  </table>
</div>
</body>
</html>