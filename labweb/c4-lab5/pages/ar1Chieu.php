<!DOCTYPE html PUBLIC "-//W2C//DTD XHTML 1.0 Transitional//EN" "http://www.w2.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w2.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ar1Chieu</title>
</head>

<body>
<?php
	function tong($mang)
	{
		$n = count($mang);
		$tong = 0;
		for($i=0;$i<$n;$i++)
		{
			$tong += $mang[$i];
		}
		return $tong;
	}
	function trungbinh($mang)
	{
		$n = count($mang);
		$tong = 0;
		for($i=0;$i<$n;$i++)
		{
			$tong += $mang[$i];
		}
		return ($tong/$n);
	}
	function tim_min($mang)
	{
		$n = count($mang);
		$min = $mang[0];
		for($i=0;$i<$n;$i++)
		{
			if($mang[$i]<$min)
			{
				$min=$mang[$i];	
			}	
		}
		return $min;
	}
	function tim_max($mang)
	{
		$n = count($mang);
		$max = $mang[0];
		for($i=0;$i<$n;$i++)
		{
			if($mang[$i]>$max)
			{
				$max = $mang[$i];	
			}	
		}
		return $max;
	}
	$hienthi="";
	if(isset($_POST["ok"]))
	{
		$so1 = $_POST["so1"];
		$so2 = $_POST["so2"];
		$so3 = $_POST["so3"];
		$so4 = $_POST["so4"];
		$so5 = $_POST["so5"];
		$so6 = $_POST["so6"];
		$so7 = $_POST["so7"];
		$so8 = $_POST["so8"];
		$so9 = $_POST["so9"];
		$so10 = $_POST["so10"];
			if(is_numeric($so1)&&is_numeric($so2)&&is_numeric($so3)&&is_numeric($so4)&&is_numeric($so5)&&
				is_numeric($so6)&&is_numeric($so7)&&is_numeric($so8)&&is_numeric($so9)&&is_numeric($so10))
			{
					$daytonghop = trim($so1.",".$so2.",".$so3.",".$so4.",".$so5.",".$so6.",".$so7.",".$so8.",".$so9.",".$so10);
					$mang = explode(",",$daytonghop);
					$tong = tong($mang);
					$trungbinh = trungbinh($mang);
					$min = tim_min($mang);
					$max = tim_max($mang);
					$hienthi = "<strong>
								Tổng: $tong <br>
								Trung bình: $trungbinh <br>
								Max: $max <br>
								Min: $min <br>
								</strong>
								";
			}
			else
			{
				$hienthi = "<span style='color:red; font-size:12px'>Hệ thống yêu cầu bạn nhập số vào các trường trên!</span>";	
			}
		
	}
?>
	<form action="" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="626" height="80" border="0">
   	      <tr>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so1" value="<?php if(isset($_POST["ok"])){echo $so1;} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so2" value="<?php if(isset($_POST["ok"])){echo $so2;} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so3" value="<?php if(isset($_POST["ok"])){echo $so3;} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so4" value="<?php if(isset($_POST["ok"])){echo $so4;} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so5" value="<?php if(isset($_POST["ok"])){echo $so5;} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so6" value="<?php if(isset($_POST["ok"])){echo $so6;} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so7" value="<?php if(isset($_POST["ok"])){echo $so7;} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so8" value="<?php if(isset($_POST["ok"])){echo $so8;} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so9" value="<?php if(isset($_POST["ok"])){echo $so9;} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so10" value="<?php if(isset($_POST["ok"])){echo $so10;} ?>" />
            </div></td>
          </tr>
   	      <tr>
   	        <td colspan="10"><div align="right">
              <input type="reset" value="Reset" />
              &nbsp;<input type="submit" name="ok" value="Caculate" />
   	        </div></td>
          </tr>
          <tr>
          	<td colspan="10"><div align="center">
            	<?php if(isset($_POST["ok"])){
					echo $hienthi;
					
					} 
				?>
            </div></td>
          </tr>
        </table>
      </div>
    </form>
</body>
</html>