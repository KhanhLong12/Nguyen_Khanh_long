<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Matrix</title>
</head>

<body>
	<?php
		function hienthi_matran($matran)
		{
			for($i=0;$i<3;$i++)
			{
				for($j=0;$j<3;$j++)
				{
					echo $matran[$i][$j];
					echo "&nbsp;&nbsp;&nbsp;";
				}
				echo "<br>";
			}	
		}
		
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
					
					$tong[$i][$j]=$matranA[$i][$j]+$matranB[$i][$j];
					$hieu[$i][$j]=$matranA[$i][$j]-$matranB[$i][$j];
					$tich[$i][$j]=0;
					for($k=0;$k<3;$k++)
					{
						@$tich[$i][$j] += $matranA[$i][$k]*$matranB[$k][$j];
					}
				} //end for 2
			} //end for 1
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
   	  <table width="402" height="117" border="0">
    	  <tr>
    	    <td><div align="center"><strong>Tổng</strong></div></td>
    	    <td><div align="center"><strong>Hiệu</strong></div></td>
    	    <td><div align="center"><strong>Tích</strong></div></td>
  	    </tr>
    	  <tr>
    	    <td><div align="center"><?php hienthi_matran($tong); ?></div></td>
    	    <td><div align="center"><?php hienthi_matran($hieu); ?></div></td>
    	    <td><div align="center"><?php hienthi_matran($tich); ?></div></td>
  	    </tr>
  	  </table>
      <?php } ?>
    </div>
</body>
</html>