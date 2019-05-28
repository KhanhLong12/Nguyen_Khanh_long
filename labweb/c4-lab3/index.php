<?php
	if(isset($_GET["page"]))
	{
		$page = $_GET["page"];
	}
	else
	{
		$page ="";	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>C4-LAB2t</title>
</head>

<body>
<div align="center">
  <table width="855" height="534" border="1" style="border:double 1px #0000FF">
     <tr>
       <td height="180" colspan="5" style=" background-image:url(images/bacho.jpg);
       										background-repeat:no-repeat;
                                            background-size:850px;
       ">
	   		
       </td>
     </tr>
     <tr>
       <td width="269" height="45">
         	<div align="center"><a href="index.php">Come Back Home</a></div>
       </td>
       <td width="144"><div align="center"><a href="?page=home">Home</a></div></td>
       <td width="124"><div align="center"><a href="?page=contact">Contact</a></div></td>
       <td width="148"><div align="center"><a href="?page=drawtable">Draw Table</a></div></td>
       <td width="136"><div align="center"><a href="?page=loop">Loop</a></div></td>      
    </tr>
     <tr>
       <td height="284">
      		<?php
            	include_once("pages/left.php");
			?>
       </td>
       <td colspan="4">
       		<?php
            	switch($page)
				{
					case "contact": include_once("pages/contact.php");
					break;	
					case "loop": include_once("pages/loop.php");
					break;
					case "drawtable": include_once("pages/drawtable.php");
					break;
					case "home": include_once("pages/home.php");
					break;
					default: echo "<h2 align='center'>Content is here!</h2>";
				}
			?>
            
       </td>
     </tr>
  </table>
  </div>
 <div align="center"><a href="../c4-lab4">Chuyển sang lab 4</a></div>
</body>
</html>