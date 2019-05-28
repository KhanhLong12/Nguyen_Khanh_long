<?php
	include_once("libs/xulymatran.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Matrix</title>
</head>

<body>
	<?php
    	if(isset($_POST["ok"]))
		{
			$matranA = array();
			$matranB = array();
			
			$chiso = 0;
			for($i=0;$i<3;$i++)	//for 1
			{
				for($j=0;$j<3;$j++)//for 2
				{
					$chiso = $i*3+$j;
					$matranA[$i][$j]=$_POST["a$chiso"];
					$matranB[$i][$j]=$_POST["b$chiso"];
					
					$tong[$i][$j]=tinhMaTranTong($matranA[$i][$j],$matranB[$i][$j]);
					$hieu[$i][$j]=$matranA[$i][$j]-$matranB[$i][$j];
					$tich[$i][$j]=tinhMaTranTich($matranA[$i][$j],$matranB[$i][$j]);
					
					//$min_mt;
					
				} //end for 2
			} //end for 1
			$max_mtA = max_matran($matranA);
			$max_mtB = max_matran($matranB);
			
			$min_mtA = min_matran($matranA);
			$min_mtB = min_matran($matranB);
			
			$tongduongcheochinhA = tongDuongCheoChinh($matranA);
			$tongduongcheochinhB = tongDuongCheoChinh($matranB);
			
			$tongtrencheochinhA = tongTrenDuongCheoChinh($matranA);
			$tongtrencheochinhB = tongTrenDuongCheoChinh($matranB);
			
			$tongduoicheochinhA = tongDuoiDuongCheoChinh($matranA);
			$tongduoicheochinhB = tongDuoiDuongCheoChinh($matranB);
			
			$tongduongcheophuA = tongDuongCheoPhu($matranA);
			$tongduongcheophuB = tongDuongCheoPhu($matranB);
			
			$tongtrenduongcheophuA = tongTrenDuongCheoPhu($matranA);
			$tongtrenduongcheophuB = tongTrenDuongCheoPhu($matranB);
			
			$tongduoiduongcheophuA = tongDuoiDuongCheoPhu($matranA);
			$tongduoiduongcheophuB = tongDuoiDuongCheoPhu($matranB);
		}// end if
	?>
	<form action="" method="post" enctype="multipart/form-data">
   	  <table width="263" height="142" border="0" align="left">
    	  <tr>
    	    <td colspan="3">Nhập vào ma trận 1</td>
   	    </tr>
    	  <tr>
    	    <td width="90"><div align="center">
    	      <input type="text" size="1" name="a0" value="<?php if(isset($_POST["ok"])){echo $_POST["a0"];} ?>">
  	      </div></td>
    	    <td width="99"><div align="center">
    	      <input type="text" size="1" name="a1" value="<?php if(isset($_POST["ok"])){echo $_POST["a1"];} ?>">
  	      </div></td>
    	    <td width="103"><div align="center">
    	      <input type="text" size="1" name="a2" value="<?php if(isset($_POST["ok"])){echo $_POST["a2"];} ?>">
  	      </div></td>
  	    </tr>
    	  <tr>
    	    <td><div align="center">
    	      <input type="text" size="1" name="a3" value="<?php if(isset($_POST["ok"])){echo $_POST["a3"];} ?>">
  	      </div></td>
    	    <td><div align="center">
    	      <input type="text" size="1" name="a4" value="<?php if(isset($_POST["ok"])){echo $_POST["a4"];} ?>">
  	      </div></td>
    	    <td><div align="center">
    	      <input type="text" size="1" name="a5" value="<?php if(isset($_POST["ok"])){echo $_POST["a5"];} ?>">
  	      </div></td>
  	    </tr>
    	  <tr>
    	    <td><div align="center">
    	      <input type="text" size="1" name="a6" value="<?php if(isset($_POST["ok"])){echo $_POST["a6"];} ?>">
  	      </div></td>
    	    <td><div align="center">
    	      <input type="text" size="1" name="a7" value="<?php if(isset($_POST["ok"])){echo $_POST["a7"];} ?>">
  	      </div></td>
    	    <td><div align="center">
    	      <input type="text" size="1" name="a8" value="<?php if(isset($_POST["ok"])){echo $_POST["a8"];} ?>">
  	      </div></td>
  	    </tr>
  	  </table>
   	  <table width="268" height="141" border="0">
   	    <tr>
   	      <td colspan="3">Nhập vào ma trận 2</td>
        </tr>
   	    <tr>
   	      <td width="103"><div align="center">
   	        <input type="text" size="1" name="b0" value="<?php if(isset($_POST["ok"])){echo $_POST["b0"];} ?>">
          </div></td>
   	      <td width="102"><div align="center">
   	        <input type="text" size="1" name="b1" value="<?php if(isset($_POST["ok"])){echo $_POST["b1"];} ?>">
          </div></td>
   	      <td width="92"><div align="center">
   	        <input type="text" size="1" name="b2" value="<?php if(isset($_POST["ok"])){echo $_POST["b2"];} ?>">
          </div></td>
        </tr>
   	    <tr>
   	      <td><div align="center">
   	        <input type="text" size="1" name="b3" value="<?php if(isset($_POST["ok"])){echo $_POST["b3"];} ?>">
          </div></td>
   	      <td><div align="center">
   	        <input type="text" size="1" name="b4" value="<?php if(isset($_POST["ok"])){echo $_POST["b4"];} ?>">
          </div></td>
   	      <td><div align="center">
   	        <input type="text" size="1" name="b5" value="<?php if(isset($_POST["ok"])){echo $_POST["b5"];} ?>">
          </div></td>
        </tr>
   	    <tr>
   	      <td><div align="center">
   	        <input type="text" size="1" name="b6" value="<?php if(isset($_POST["ok"])){echo $_POST["b6"];} ?>">
          </div></td>
   	      <td><div align="center">
   	        <input type="text" size="1" name="b7" value="<?php if(isset($_POST["ok"])){echo $_POST["b7"];} ?>">
          </div></td>
   	      <td><div align="center">
   	        <input type="text" size="1" name="b8" value="<?php if(isset($_POST["ok"])){echo $_POST["b8"];} ?>">
          </div></td>
        </tr>
      </table>
   	  <p align="center">
      <input type="reset" value="Reset" />
      <input type="submit" name="ok" value="Tính" />
      </p>
    </form>
    <div align="center" style="color:#F00">
    <?php if(isset($_POST["ok"])){ ?>
   	  <table width="402" height="135" border="0">
    	  <tr>
    	    <td><div align="center"><strong>Tổng</strong></div></td>
    	    <td><div align="center"><strong>Hiệu</strong></div></td>
    	    <td><div align="center"><strong>Tích</strong></div></td>
  	    </tr>
    	  <tr>
    	    <td><div align="center"><?php hienthi_matran($tong); ?></div></td>
    	    <td><div align="center"><?php hienthi_matran($hieu); ?></div></td>
    	    <td><div align="center"><?php hienthi_matran($tich); ?></div></td><br />
  	    </tr>
        <tr>
        	<td height="25" colspan="3"><div align="center">
            	Max ma trận A: <strong style="color:#00F;"><?php echo $max_mtA;?></strong><br />
                Max ma trận B: <strong style="color:#00F;"><?php echo $max_mtB;?></strong><br />
                
                Min ma trận A: <strong style="color:#00F;"><?php echo $min_mtA;?></strong><br />
                Min ma trận B: <strong style="color:#00F;"><?php echo $min_mtB;?></strong><br />
                
                Tổng đường chéo <strong>chính</strong> MT-A: <strong style="color:#00F;"><?php echo $tongduongcheochinhA;?></strong><br />
                Tổng đường chéo <strong>chính</strong> MT-B: <strong style="color:#00F;"><?php echo $tongduongcheochinhB;?></strong><br />
                
                Tổng <strong>trên</strong> đường chéo <strong>chính</strong> MT-A: <strong style="color:#00F;"><?php echo $tongtrencheochinhA;?></strong><br />
                Tổng <strong>trên</strong> đường chéo <strong>chính</strong> MT-B: <strong style="color:#00F;"><?php echo $tongtrencheochinhB;?></strong><br />
                
                Tổng <strong>dưới</strong> đường chéo <strong>chính</strong> MT-A: <strong style="color:#00F;"><?php echo $tongduoicheochinhA;?></strong><br />
                Tổng <strong>dưới</strong> đường chéo <strong>chính</strong> MT-B: <strong style="color:#00F;"><?php echo $tongduoicheochinhB;?></strong><br />
                
                Tổng đường chéo <strong>phụ</strong> MT-A: <strong style="color:#00F;"><?php echo $tongduongcheophuA;?></strong><br />
                Tổng đường chéo <strong>phụ</strong> MT-B: <strong style="color:#00F;"><?php echo $tongduongcheophuB;?></strong><br />			
                Tổng <strong>trên</strong> đường chéo <strong>phụ</strong> MT-A: <strong style="color:#00F;"><?php echo $tongtrenduongcheophuA;?></strong><br />
                Tổng <strong>trên</strong> đường chéo <strong>phụ</strong> MT-B: <strong style="color:#00F;"><?php echo $tongtrenduongcheophuB;?></strong><br />
                
                Tổng <strong>dưới</strong> đường chéo <strong>phụ</strong> MT-A: <strong style="color:#00F;"><?php echo $tongduoiduongcheophuA;?></strong><br />
                Tổng <strong>dưới</strong> đường chéo <strong>phụ</strong> MT-B: <strong style="color:#00F;"><?php echo $tongduoiduongcheophuB;?></strong><br />
                </div>
                <i style="color:#F00;font-weight:bolder;font-size:16px">Note: Các hàm xử lý ma trận nằm trong thư mục libs/, và các hàm ở đây áp dụng với ma trận vuông cấp 3x3</i>
            </td>
        </tr>
  	  </table>
      <?php } ?>
    </div>
</body>
</html>