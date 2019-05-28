<?php
	//include("libs/xulymang.php");
	//include("libs/xulymatran.php");
	$ac="home";
	if(isset($_GET["ac"]))
	{
		$ac=$_GET["ac"];	
	}
	if(isset($_POST["ac"]))
	{
		$ac=$_POST["ac"];	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Updating DB</title>
</head>

<body>
	<?php
    	
	?>
 <div align="center">
   <table width="861" height="541" border="1">
     <tr>
       <td height="159" colspan="2"><img src="images/bacho.jpg" width="849" height="154" /></td>
     </tr>
     <tr>
       <td width="283" bgcolor="#E2E2E2"></td>
       <td width="562" height="38" bgcolor="#E2E2E2">
       	<div align="center"><a href="./?ac=home">HOME</a></div>      </td>
     </tr>
     <tr>
       <td><div align="center">
       		<?php
				//header("Location: ?ac=home");
            	 require_once("pages/listStudentClass.php");
				
			?>
       </div></td>
       <td>
       		<?php
				//header("Location: ?ac=home");
            	switch($ac)
				{
					case "": require_once("pages/home.php");
					break;
					case "home": require_once("pages/home.php");
					break;
					case "studentDetail": require_once("pages/studentDetail.php");
					break;
					case "oneStudentDetail": require_once("pages/oneStudentDetail.php");
					break;
				}
			?> 
       </td>
     </tr>
  </table>
 </div>
 <div align="center"><a href="../c5-lab16">Chuyển sang lab 16</a></div>
<h4 style="float:right;margin-right:30px;"><a href="https://www.facebook.com/lightning.quan" target="_blank">Trung Quân AT10C</a></h4>
</body>
</html>