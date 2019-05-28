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
<title>RichText Box</title>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="ckeditor/samples/css/samples.css" type="text/css" />
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
       <td width="195" bgcolor="#E2E2E2"></td>
       <td width="650" height="38" bgcolor="#E2E2E2">
       	<div align="center"><a href="./?ac=home">HOME</a></div>      </td>
     </tr>
     <tr>
       <td><div align="center">
            <a href="?ac=home">Admin Home</a><br />
            <a href="?ac=menu">Danh sách lớp</a><br />
            <a href="?ac=addStudent">Thêm sinh viên</a><br />
            <?php
				if($ac=="menu"){
            	 require_once("pages/listStudentClass.php");
				}
				switch($ac)
				{
					case "studentDetail": require_once("pages/listStudentClass.php");
					break;
				}
				
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
					case "editStudent": require_once("pages/editStudent.php");
					break;
					case "deleteStudent": require_once("pages/deleteStudent.php");
					break;
					case "addStudent": require_once("pages/addStudent.php");
					break;
				}
			?>
         
    </td>
     </tr>
  </table>
 </div>
 </body>
</html>