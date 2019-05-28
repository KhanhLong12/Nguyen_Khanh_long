<?php
	if(isset($_GET["ac"]))
	{
		$ac=$_GET["ac"];	
	}
	else
	{
		$ac="";	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Session</title>
</head>

<body>
 <div align="center">
   <table width="861" height="541" border="1">
     <tr>
       <td height="159" colspan="6"><img src="../images/bacho.jpg" width="849" height="154" /></td>
     </tr>
     <tr>
       <td width="233"><div align="center">
       		<a href="../?ac=home">Return Home</a><br />
            <a href="?ac=adminhome">Admin Home</a><br />
            <a href="?ac=logout">Logout</a><br />
            <a href="?ac=upload">Upload</a><br />
       </div></td>
       <td colspan="5">
       		<?php
				//header("Location: ?ac=home");
            	switch($ac)
				{
					case "": require_once("pages/home.php");
					break;
					case "adminhome": require_once("pages/home.php");
					break;
					case "logout": require_once("pages/logout.php");
					break;
					case "upload": require_once("pages/upload.php");
					break;
				}
			?>
       </td>
     </tr>
  </table>
 </div>
<h4 style="float:right;margin-right:30px;"><a href="https://www.facebook.com/lightning.quan" target="_blank">Trung Quân</a></h4>
</body>
</html>