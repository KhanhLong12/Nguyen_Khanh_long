<?php
	//include("libs/xulymang.php");
	//include("libs/xulymatran.php");
	$ac="engvi";
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
<title>VI-ENG</title>
</head>

<body>
	<div align="center">
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
  <table width="491" height="98" border="0">
    <tr>
      <td>
      		<form action="" method="post" enctype="multipart/form-data">
       										<div align="right">
       										  <input type="hidden" value="<?php echo $ac; ?>" />
       										  <!--khi load lại trang nào sẽ tự về trang đó-->
       										  <input type="submit" name="vi" value="Vietnamese" />
		  </div>
       </form>
      </td>
       <td>
       <form action="" method="post" enctype="multipart/form-data">
		  <div align="left">
		    <input type="hidden" value="<?php echo $ac; ?>" /> 
		    <!--khi load lại trang nào sẽ tự về trang đó-->
		    <input type="submit" name="eng" value="English" />
	      </div>
       </form>
      </td>
    </tr>
    <tr>
      <td width="138"><?php echo INPUT; ?></td>
      <td width="343">
      		<input type="search" name="search" placeholder="<?php echo SEARCH; ?>" value="" />&nbsp;
            <input type="button" name="search" value="<?php echo SEARCH; ?>" />
      </td>
    </tr>
  </table><br />
  <table width="588" height="367" border="1">
    <tr>
      <td height="32" colspan="2"><div align="center" style="font-weight:bold;"><?php echo TITLE1; ?></div></td>
      <td colspan="2"><div align="center" style="font-weight:bold;"><?php echo TITLE2; ?></div></td>
    </tr>
    <tr>
      <td width="118" rowspan="8"><div align="center"><img src="images/laco.jpg" width="110" height="110" alt="anh-la-co" /></div></td>
      <td width="159" height="63"><div align="center"><?php echo VNWIN1; ?></div></td>
      <td width="119" rowspan="8"><div align="center"><img src="images/laco.jpg" width="110" height="110" alt="anh-la-co" /></div></td>
      <td width="164"><div align="center"><?php echo VNWIN2; ?></div></td>
    </tr>
    <tr>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
    </tr>
    <tr>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
    </tr>
    <tr>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
    </tr>
    <tr>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
    </tr>
    <tr>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
    </tr>
    <tr>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
    </tr>
    <tr>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
      <td><div align="center"><?php echo DEFAULT1; ?></div></td>
    </tr>
  </table>
</div>
</body>
</html>