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
<title>Array</title>
</head>

<body>
 <div align="center">
   <table width="861" height="541" border="1">
     <tr>
       <td height="159" colspan="5"><img src="images/bacho.jpg" width="849" height="154" /></td>
     </tr>
     <tr>
       <td width="269" bgcolor="#E2E2E2">&nbsp;</td>
       <td width="153" height="38" bgcolor="#E2E2E2"><div align="center"><a href="./?ac=home">Home</a></div></td>
       <td width="145" bgcolor="#E2E2E2"><div align="center"><a href="./?ac=ar1chieu">Ar1Chieu</a></div></td>
       <td width="130" bgcolor="#E2E2E2"><div align="center"><a href="./?ac=matrix">Matrix</a></div></td>
       <td width="130" bgcolor="#E2E2E2"><div align="center"><a href="./?ac=asscociate">AssociateArr</a></div></td>
     </tr>
     <tr>
       <td width="269"><div align="center"><img src="images/anh2.jpg" /><br />
         <img src="images/anh1.jpg" />
       </div></td>
       <td colspan="4">
       		<?php
				//header("Location: ?ac=home");
            	switch($ac)
				{
					case "": require_once("pages/home.php");
					break;
					case "home": require_once("pages/home.php");
					break;
					case "ar1chieu": require_once("pages/ar1Chieu.php");
					break;
					case "matrix": require_once("pages/matrix.php");
					break;
					case "asscociate": require_once("pages/asscociateArrayProcess.php");
					break;
				}
			?>
               
       </td>
     </tr>
  </table>
 </div>
  </body>
</html>