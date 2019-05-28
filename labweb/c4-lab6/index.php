
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GetForm</title>
</head>

<body>
 <div align="center">
   <table width="861" height="541" border="1">
     <tr>
       <td height="159" colspan="6"><img src="images/bacho.jpg" width="849" height="154" /></td>
     </tr>
     <tr>
       <td width="246" bgcolor="#E2E2E2">&nbsp;</td>
       <td width="209" height="38" bgcolor="#E2E2E2"><div align="center"><a href="?page=home">Home</a></div></td>
       <td width="203" bgcolor="#E2E2E2"><div align="center"><a href="?page=register">Register</a></div></td>
       <td width="175" bgcolor="#E2E2E2"><div align="center"><a href="?page=contact">Contact 1 Page</a></div></td> 
     </tr>
     <tr>
       <td width="246"><div align="center"><img src="images/anh2.jpg" /><br />
         <img src="images/anh1.jpg" />
       </div></td>
       <td colspan="5">
       		<?php
        	$page = "home";
        
        	if(isset($_GET["page"]))
		        {
		          $page = $_GET["page"];
		        }
		        
		        require_once("pages/$page.php");
		    ?>
             
       </td>
     </tr>
  </table>
 </div>
 </body>
</html>