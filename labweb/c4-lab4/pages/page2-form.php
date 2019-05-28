<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
</head>

<body>
	<?php
    	$kq="";
		$err = array();
		$err = NULL;
		
		if(isset($_POST["ok"]))
		{
			$hoten = $_POST["hoten"];
			$lop = $_POST["lop"];
			$m1 = $_POST["m1"];
			$m2 = $_POST["m2"];
			$m3 = $_POST["m3"];	
			if($hoten!="" && $lop!="" && $m1!="" && $m2!="" && $m3!="")
			{
				if(is_numeric($m1) && is_numeric($m2) && is_numeric($m3))
				{
					$kq = "Tổng điểm học sinh ".$hoten.": ".($m1+$m2+$m3);
				}
				else
				{
					$content_err1 = '<span style="color:red; font-size:12px">Hệ thống yêu cầu nhập số cho trường này!</span>';
					if(!is_numeric($m1)){$err["m1"]= $content_err1;}	
					if(!is_numeric($m2)){$err["m2"]= $content_err1;}	
					if(!is_numeric($m3)){$err["m3"]= $content_err1;}	
				}
			}
			else
			{
				
				$content_err2 ='<span style="color:red; font-size:12px">Hệ thống yêu cầu nhập thông tin cho trường này!</span>';
				if($hoten==NULL){$err["hoten"]=$content_err2;}
				if($lop==NULL){$err["lop"]=$content_err2;}
				
				if($m1==NULL){$err["m1"]=$content_err2;}
				if($m2==NULL){$err["m2"]=$content_err2;}
				if($m3==NULL){$err["m3"]=$content_err2;}
				
			}
		}
		
	?>
	<form action="" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="451" height="261" border="1">
   	      <tr>
   	        <td width="164">Họ và tên:</td>
   	        <td width="271"><input type="text" name="hoten" value="<?php if(isset($_POST["ok"])){echo $hoten;} ?>" />
            	<br /><?php echo @$err["hoten"]; ?>
            </td>
          </tr>
   	      <tr>
   	        <td>Lớp:</td>
   	        <td><input type="text" name="lop" value="<?php if(isset($_POST["ok"])){echo $lop;} ?>" />
            	<br /><?php echo @$err["lop"]; ?>
            </td>   
          </tr>
   	      <tr>
   	        <td>Điểm M1:</td>
   	        <td><input type="text" name="m1" value="<?php if(isset($_POST["ok"])){echo $m1;} ?>" />
            	<br /><?php echo @$err["m1"]; ?>
            </td>         
          </tr>
   	      <tr>
   	        <td>Điểm M2:</td>
   	        <td><input type="text" name="m2" value="<?php if(isset($_POST["ok"])){echo $m2;} ?>" />
            	<br /><?php echo @$err["m2"]; ?>
            </td>            
          </tr>
   	      <tr>
   	        <td>Điểm M3:</td>
   	        <td><input type="text" name="m3" value="<?php if(isset($_POST["ok"])){echo $m3;} ?>" />
            	<br /><?php echo @$err["m3"]; ?>
            </td>           
          </tr>
   	      <tr>
   	        <td>Tổng Điểm</td>
   	        <td><input type="text" size="30" name="tong" readonly="true" style="background-color:#CCC" value="<?php if(isset($_POST["ok"])){echo $kq;  }?>" /></td>
          </tr>
   	      <tr>
   	        <td><input type="submit" name="ok" value="ok" /></td>
   	        <td><input type="reset" value="Cancel" /></td>
          </tr>
        </table>
      </div>
    </form>
</body>
</html>