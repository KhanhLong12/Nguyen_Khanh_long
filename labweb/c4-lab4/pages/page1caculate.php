<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Caculate</title>
</head>

<body>
	<?php
		$kq = "";
		
    	if(isset($_POST["ok"]))
		{
			@$so1 = $_POST["so1"];
			@$so2 = $_POST["so2"];
			if($so1!="" && $so2 !="")
			{
				if(is_numeric($so1)&&is_numeric($so2))
				{
					@$pheptinh=$_POST["pheptinh"];
					switch($pheptinh)
					{
						case "+": $kq = "<strong>Tổng</strong> của 2 số trên là: ".($so1+$so2);
						break;	
						case "-": $kq = "<strong>Hiệu</strong> của 2 số trên là: ".($so1-$so2);
						break;	
						case "*": $kq = "<strong>Tích</strong> của 2 số trên là: ".($so1*$so2);
						break;	
						case "/": $kq = "<strong>Thương</strong> của 2 số trên là: ".($so1/$so2);
						break;	
						default: $kq="Mời bạn chọn phép tính cần thực hiện!";
					}
				}
				else
				{
					$kq="<span style='color:red; font-size:12px'>Hệ thống yêu cầu bạn hãy nhập số, Thank you!</span>";	
				}
			}
			else
			{
				$kq= "<span style='color:red; font-size:12px'>Hệ thống yêu cầu bạn hãy nhập đầy đủ 2 số! Thank you!</span>";
				//header("Location: index.php?page=page1");	
			}
		}
	?>
<form action="" method="post" enctype="multipart/form-data">
<table width="417" height="216" border="1" align="center">
  <tr>
    <td width="73">Số thứ nhất:</td>
    <td width="198"><input type="text" name="so1" value="<?php if(isset($_POST["ok"])){echo $so1;} ?>" /></td>
  </tr>
  <tr>
    <td>Số thứ hai:</td>
    <td><input type="text" name="so2" value="<?php if(isset($_POST["ok"])){echo $so2;} ?>" /></td>
  </tr>
  <tr>
    <td>Phép tính</td>
    <td>
    	<input type="radio" name="pheptinh" value="+" />+ &nbsp;
        <input type="radio" name="pheptinh" value="-" />- &nbsp;
        <input type="radio" name="pheptinh" value="*" />* &nbsp;
        <input type="radio" name="pheptinh" value="/" />/ &nbsp;
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="ok" value="Caculate" /></td>
  </tr>
  <tr>
  	<td height="59" colspan="2"><div align="center"><?php echo $kq;?></div></td>
  </tr>
</table>
	</form>
</body>
</html>