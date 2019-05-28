<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Draw Table</title>
</head>

<body>
	<?php
    	if(isset($_POST["ve"]))
		{
			$so_dong = $_POST["dong"];
			$so_cot = $_POST["cot"];
			echo "<table border='1' align='center' width='300' height='100'>";
					for($i=0;$i<$so_dong;$i++)
					{
						echo "<tr>";
							for($j=0;$j<$so_cot;$j++)
							{
								echo "<td>";
									if($j<=$i)
									{
										echo $j+1;
									}
								echo "</td>";
							}
						echo "</tr>";	
					}
				echo "</table>";
		}
		else{
	?>
	<form action="" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="318" height="139" border="0">
   	      <tr>
   	        <td width="152">Nhập số dòng</td>
   	        <td width="150"><input type="number" name="dong" 
                	/></td>
          </tr>
   	      <tr>
   	        <td>Nhập số cột</td>
   	        <td><input type="number" name="cot" 
                	/></td>
          </tr>
   	      <tr>
   	        <td colspan="2"><input type="submit" name="ve" value="Vẽ">
                    <input type="reset" value="Nhập lại"></td>
          </tr>
        </table>
      </div>
    </form>
    <?php  } ?>
</body>
</html>