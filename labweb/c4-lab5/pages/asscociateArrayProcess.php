<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AsscociateArrayProcess</title>
</head>

<body>
	<?php
	
    	if(isset($_POST["ok"])) //if 1
		{
			$folder="uploads/";
			$arr = array();
			$count=1;
			do{
				$name = $_FILES["f$count"]["name"];
				$path = $folder.$name;
				move_uploaded_file( $_FILES["f$count"]["tmp_name"],$path);
				$arr[$name] = $path;
				$count++;
			}
			while($count<10);			
			echo "<strong style='color:red'>upload thành công</strong>";	
			//echo "Danh sách các file đã upload-có thể download (mất công nặng máy :v)";
//				foreach($arr as $key=>$value)
//				{
//					echo "<a href='$value'> $key </a> <br>";	
//				}	
				
		}//end if 1
		function hienthi_thumuc()
		{
			echo "<p align='center' style='color:red; font-weight:bold'>Danh sách các file đã upload</p> <br>";
			$tenthumuc = "uploads";
			$dir = opendir($tenthumuc);
			if($dir)
			{
				while(($file = readdir($dir)) == true)
				{
					if($file!="." && $file!=".."){
						if(strstr($file,"."))
						{
							echo "<p align='center'> <a href='$tenthumuc/$file'> $file </a> <br></p>";	
						}
						else
						{
							echo "<p align='center'><b> <a href='$tenthumuc/$file'> $file </a> </b> (folder)</p>";	
						}
					}
				}	
				closedir($dir);
			}
		}//end function hienthi_thumuc
		
		if(isset($_POST["xem"]))
		{
			hienthi_thumuc();
			echo "<p align='center'><a href='?ac=asscociate'>Go Back <--</a></p>";	
		}
		else{
		
	?>
<h3 align="center">Mảng kết hợp</h3>
    <form action="" method="post" enctype="multipart/form-data">
	<div align="center">
	  <table width="442" border="1">
	    <tr>
	      <td width="97"><div align="center">File1: </div></td>
	      <td width="329"><div align="center">
          	<input type="file" name="f1" value="<?php if(isset($_POST["ok"])){echo $_POST["f1"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td><div align="center">File2: </div></td>
	      <td><div align="center">
          	<input type="file" name="f2" value="<?php if(isset($_POST["ok"])){echo $_POST["f2"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td><div align="center">File3: </div></td>
	      <td><div align="center">
          	<input type="file" name="f3" value="<?php if(isset($_POST["ok"])){echo $_POST["f3"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td><div align="center">File4: </div></td>
	      <td><div align="center">
          	<input type="file" name="f4" value="<?php if(isset($_POST["ok"])){echo $_POST["f4"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td><div align="center">File5: </div></td>
	      <td><div align="center">
          	<input type="file" name="f5" value="<?php if(isset($_POST["ok"])){echo $_POST["f5"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td><div align="center">File6: </div></td>
	      <td><div align="center">
          	<input type="file" name="f6" value="<?php if(isset($_POST["ok"])){echo $_POST["f6"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td><div align="center">File7: </div></td>
	      <td><div align="center">
          	<input type="file" name="f7" value="<?php if(isset($_POST["ok"])){echo $_POST["f7"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td><div align="center">File8: </div></td>
	      <td><div align="center">
          	<input type="file" name="f8" value="<?php if(isset($_POST["ok"])){echo $_POST["f8"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td><div align="center">File9: </div></td>
	      <td><div align="center">
          	<input type="file" name="f9" value="<?php if(isset($_POST["ok"])){echo $_POST["f9"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td><div align="center">File10: </div></td>
	      <td><div align="center">
          	<input type="file" name="f10" value="<?php if(isset($_POST["ok"])){echo $_POST["f10"];} ?>"style="background-color:#FFCCFF"/>
          </div></td>
        </tr>
	    <tr>
	      <td colspan="2"><div align="center">
          	<input type="reset" value="Reset" />
          	<input type="submit" name="ok" value="Upload" />
            <input type="submit" name="xem" value="Xem" />
          </div></td>
        </tr>
  </table>
</div>	
    </form>
    <?php
		}
	?>
</body>
</html>