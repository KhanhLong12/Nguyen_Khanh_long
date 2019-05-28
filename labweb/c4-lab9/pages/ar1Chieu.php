<?php
	include_once("libs/xulymang.php");
?>
<!DOCTYPE html PUBLIC "-//W2C//DTD XHTML 1.0 Transitional//EN" "http://www.w2.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w2.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ar1Chieu</title>
</head>

<body>
<?php
	$hienthi="";
	if(isset($_POST["ok"]))
	{
		$dayso=array();
		//$day=array();
		for($i=0; $i<10; $i++)
		{
			if(!$_POST["so$i"]==""){
				$dayso[$i]=trim($_POST["so$i"]);	
				}
		}
		echo "Có <strong style='color:red;'>". sizeof($dayso)."</strong> Phần tử trong mảng dù nhập vào bao nhiêu giá trị (check bằng hàm sizeof)";
				//$dayso = explode(NULL,$dayso);	
					$tong = tong_day($dayso);
					$trungbinh = avg_ds($dayso);
					
					$min= min_ds($dayso);
					$max = max_ds($dayso);
					
					$sapxeptang = sort_ds_tang($dayso);
					$sapxeptang_hienthi = implode(" ",$sapxeptang);
					
					$daonguocday = daonguoc_day($dayso);
					$daonguocday_hienthi = implode(" ",$daonguocday);
					
					$hienthi = "
								Tổng dãy: <strong style='color:blue;'>$tong</strong> <br>
								Trung bình dãy: <strong style='color:blue;'>$trungbinh 
								</strong> <br>
								Max dãy: <strong style='color:blue;'>$max</strong> <br>
								Min dãy: <strong style='color:blue;'>$min</strong> <br>
								Dãy tăng: <strong style='color:blue;'>$sapxeptang_hienthi</strong> <br>
								Dãy đảo ngược: <strong style='color:blue;'>$daonguocday_hienthi</strong> <br>
								
								";
	}
?>
	<form action="" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="626" height="80" border="0">
   	      <tr>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so0" value="<?php if(isset($_POST["ok"])){echo $_POST["so0"];} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so1" value="<?php if(isset($_POST["ok"])){echo $_POST["so1"];} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so2" value="<?php if(isset($_POST["ok"])){echo $_POST["so2"];} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so3" value="<?php if(isset($_POST["ok"])){echo $_POST["so3"];} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so4" value="<?php if(isset($_POST["ok"])){echo $_POST["so4"];} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so5" value="<?php if(isset($_POST["ok"])){echo $_POST["so5"];} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so6" value="<?php if(isset($_POST["ok"])){echo $_POST["so6"];} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so7" value="<?php if(isset($_POST["ok"])){echo $_POST["so7"];} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so8" value="<?php if(isset($_POST["ok"])){echo $_POST["so8"];} ?>" />
            </div></td>
   	        <td><div align="center">
   	          <input type="text" size="2" name="so9" value="<?php if(isset($_POST["ok"])){echo $_POST["so9"];} ?>" />
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