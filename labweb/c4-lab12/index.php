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
<title>Multi Languages</title>
</head>

<body>
	<?php
    	session_start();//kiểm tra session language
		$lang = "eng";
		if(isset($_SESSION["lang"]))
		{
			$lang = $_SESSION["lang"];	
		}
		require_once("lang/".$lang.".php"); //require goi file ngôn ngữ
		
		if(isset($_POST["vi"])) //kiểm tra post lên là vietnamese
		{
			$_SESSION["lang"]="vi";	// vi ở đây là tên file vi.php trong thư mục lang
			header("Location: index.php?ac=$ac");
		}
		
		if(isset($_POST["eng"])) //kiểm tra post lên là english
		{
			$_SESSION["lang"]="eng";	// eng ở đây là tên file eng.php trong thư mục lang
			header("Location: index.php?ac=$ac");
		}
	?>
 <div align="center">
   <table width="861" height="541" border="1">
     <tr>
       <td height="159" colspan="6"><img src="images/bacho.jpg" width="849" height="154" /></td>
     </tr>
     <tr>
       <td width="143" bgcolor="#E2E2E2"><form action="" method="post" enctype="multipart/form-data">
       										<div align="center">
       										  <input type="hidden" value="<?php echo $ac; ?>" />
       										  <!--khi load lại trang nào sẽ tự về trang đó-->
       										  <input type="submit" name="vi" value="Vietnamese" />
		  </div>
       </form></td>
       <td width="144" bgcolor="#E2E2E2"><form action="" method="post" enctype="multipart/form-data">
		  <div align="center">
		    <input type="hidden" value="<?php echo $ac; ?>" /> 
		    <!--khi load lại trang nào sẽ tự về trang đó-->
		    <input type="submit" name="eng" value="English" />
	      </div>
       </form></td>
       <td width="142" height="38" bgcolor="#E2E2E2"><div align="center"><a href="./?ac=home"><?php echo HOME; ?></a></div></td>
       <td width="146" bgcolor="#E2E2E2"><div align="center"><a href="./?ac=contact"><?php echo CONTACT; ?></a></div></td>
       <td width="126" bgcolor="#E2E2E2"><div align="center"><a href="./?ac=intro"><?php echo INTRODUCTION; ?></a></div></td>
       <td width="120" bgcolor="#E2E2E2"><div align="center"><a href="./?ac=login"><?php echo LOGIN; ?></a></div></td>
     </tr>
     <tr>
       <td colspan="2"><div align="center"><img src="images/anh2.jpg" /><br />
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
					case "contact": require_once("pages/contact.php");
					break;
					case "intro": require_once("pages/introduction.php");
					break;
					case "login": require_once("pages/login.php");
					break;
				}
			?>
               
       </td>
     </tr>
  </table>
  <h3 style="color:blue;font-size:14px;">Sử dụng <strong style="color:red">session</strong> ứng dụng vào website đa ngôn ngữ</h3>
 </div>
  <div align="center"><a href="../c5-lab13">Chuyển sang lab 13</a></div>
</body>
</html>