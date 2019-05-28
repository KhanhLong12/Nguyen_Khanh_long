<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
	<?php
    	if(isset($_POST["ok"]))
		{
			$username = $_POST["username"];
			$password = $_POST["password"];
			if($username=="admin"&&$password=="admin")
			{
				session_start();
				$_SESSION["username"]= $username;
				$_SESSION["password"]= $password;
				header("Location:admin/index.php?ac=adminhome");
				exit();
			}
			else
			{
				?>
                <script>alert("Nhập sai-Username và pass là 'admin'");</script>
                <?php	
			}
		}
	?>
	<form action="" method="post" enctype="multipart/form-data">
   	  <div align="center">
   	    <table width="416" height="209" border="0">
   	      <tr>
   	        <td colspan="2"><div align="center">Đăng Nhập</div></td>
          </tr>
   	      <tr>
   	        <td width="135"><div align="center">Username</div></td>
   	        <td width="265"><div align="center"><input type="text" name="username" value="" /></div></td>
          </tr>
   	      <tr>
   	        <td><div align="center">Password</div></td>
   	        <td><div align="center"><input type="password" name="password" value="" /></div></td>
          </tr>
   	      <tr>
   	        <td colspan="2"><div align="center">
            	<input type="reset" value="Reset" />
                <input type="submit" name="ok" value="Login" />
            </div></td>
          </tr>
        </table>
      </div>
    </form>
</body>
</html>