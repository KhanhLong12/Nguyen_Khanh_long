<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload</title>
</head>

<body>
	<?php
    	if(isset($_POST["ok"]))
		{
			$folder = "../uploads/";
			$arr=array();
			$count=1;
			do{
				$name = $_FILES["f$count"]["name"];
				$path = $folder.$name;
				move_uploaded_file($_FILES["f$count"]["tmp_name"],$path);
				$arr[$name]=$path;
				$count++;
			}
			while($count<=3);
			echo "Upload Thanh Cong";
		}
		function show_folder_uploads()
		{
			echo "<p align='center' style='color:red; font-weight:bold'>Danh sách các file đã upload</p> <br>";
			$tenthumuc = "../uploads/";
			$dir = opendir($tenthumuc);
			if($dir){
				while(($file = readdir($dir)) == true)
				{
					if($file!=".."&&$file!=".")
					{
						if(strstr($file,"."))
						{
							echo "<p align='center'> <a href='$tenthumuc/$file'> $file </a> <br></p>";
						}
						else
						{
							echo "<p align='center'> <a href='$tenthumuc/$file'> $file </a>(FOLDER) <br></p>";	
						}	
					}	
				}	
			}
		}//end function show...
		
		if(isset($_POST["xem"]))
		{
			show_folder_uploads();	
		}
	?>
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
	      <td colspan="2"><div align="center">
          	<input type="reset" value="Reset" />
          	<input type="submit" name="ok" value="Upload" />
            <input type="submit" name="xem" value="Xem" />
          </div></td>
        </tr>
     </table>
     </div>
     </form>
</body>
</html>