<?php
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else{
		$action ="";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Home-Trung Quân</title>
</head>

<body>
	<div id="wraper">
    	<div id="top">
        	<img src="img/layout_01.jpg" width="1100" height="150" />
        </div><!--end div top-->
        
        <div id="content">
        	<div id="content-left">
            	<form action="javascript:actionForm()" method="post" enctype="multipart/form-data">
               	  <div align="center">
               	    <table width="288" height="141" border="0">
               	      <tr>
               	        <td width="80">User name:</td>
               	        <td width="198"><input type="text" name="username" value="" /></td>
           	          </tr>
               	      <tr>
               	        <td>Password:</td>
               	        <td><input type="password" name="password" value="" /></td>
           	          </tr>
               	      <tr>
               	        <td colspan="2">
                        	<div align="center">
                        	  <input type="reset" name="reset" value="Reset"  /> 
                        	  <input type="submit" name="ok" value="Login"  />
                   	    </div></td>
           	          </tr>
           	        </table>
           	      </div>
                </form>
                
                <ul>
                	<li><a href="?action=home">Home</a></li>
                    <li><a href="?action=register">Register</a></li>
                    <li><a href="?action=introduction">Introduction</a></li>
                    <li><a href="?action=contact">Contact</a></li>
                    <li><a href="?action=help">Help</a></li>
                </ul>
          </div><!--end div content-left-->  
            <div id="content-right">
            	<a href="javascript:void(0)" style="text-decoration:none"><h1>Welcome to your <span style="color:#F00">Photo Site</span></h1></a>
                <p style="color:#F00">Click menu bên phải để thấy khác biệt</p>
                <?php
                	if($action=='home')
					{
						include("home/home.php");
					}
					if($action=='register')
					{
						include("register/register.php");
					}
					if($action=='introduction')
					{
						include("introduction/introduction.php");
					}
					if($action=='contact')
					{
						include("contact/contact.php");
					}
					if($action=='help')
					{
						include("help/help.php");
					}
				?>
			</div><!--end div content-right-->  
        </div><!--end div content-->
        
        <div id="footer">
        	<div id="footer-left">
            	<div class="footer-left-img">
                    <img src="img/layout_22.jpg" />
                    <img src="img/layout_23.jpg" />
                    <img src="img/layout_24.jpg" />
                </div>
            </div><!--end div footer-left-->  
            <div id="footer-right">
            	<p>Copyright (C) 2003, your company name, all right reserved</p>
			</div><!--end div footer-right-->  
        </div><!--end div footer-->  
        <h4 style="float:right;margin-right:30px;"><a href="https://www.facebook.com/lightning.quan" target="_blank">Trung Quân</a></h4>
    </div><!--end div wraper-->
<script language='JavaScript' type='text/javascript'>
	function actionForm()
	{
		alert("Tạm thời chưa có code xử lý, đang update, liên hệ Trung Quân để biết thêm thông tin mới nhất.");	
	}
</script>      
</body>
</html>