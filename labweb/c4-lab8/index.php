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
<title>Cookies</title>
</head>

<body>
 <div align="center">
   <table width="861" height="541" border="1">
     <tr>
       <td height="159" colspan="6"><img src="images/bacho.jpg" width="849" height="154" /></td>
     </tr>
     <tr>
       <td width="233" bgcolor="#E2E2E2">&nbsp;</td>
       <td width="311" height="38" bgcolor="#E2E2E2"><div align="center"><a href="?ac=home">Home</a></div></td>
       <td width="295" bgcolor="#E2E2E2"><div align="center"><a href="?ac=login">Login</a></div></td>
     </tr>
     <tr>
       <td width="233"><div align="center"><img src="images/anh2.jpg" /><br />
         <img src="images/anh1.jpg" />
       </div></td>
       <td colspan="5">
       		<?php
				//header("Location: ?ac=home");
            	switch($ac)
				{
					case "": require_once("pages/home.php");
					break;
					case "home": require_once("pages/home.php");
					break;
					case "login": require_once("pages/login.php");
					break;
				}
			?>
            
       </td>
     </tr>
  </table>
 </div>
</body>
</html>