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
<title>C4-Lab4</title>
</head>

<body>
<div align="center">
  <table width="461" height="363" border="0">
    <tr>
      <td width="221" height="43">
      	<div align="center"><a href="?page=page1">Page1-Caculator</a></div>
        </td>
      <td width="224"><div align="center"><a href="?page=page2">Page2-Form</a></div>
      </td>
    </tr>
    <tr>
      <td height="164" colspan="2"><div align="center">
      		<?php
            	switch($page)
				{
					case "page1": include("pages/page1caculate.php");
					break;
					case "page2": include("pages/page2-form.php");
					break;
					default: echo "Content is here!";
				}
			?>
      </div>
      
      </td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"></div></td>
    </tr>
  </table>
</div>
     
</body>
</html>