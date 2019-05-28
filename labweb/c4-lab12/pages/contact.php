<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
</head>

<body>
	<div align="center">
	  <table width="493" height="257" border="0">
	    <tr>
	      <td height="42" colspan="2"><?php echo CONTACT_FORM;?></td>
        </tr>
	   
	    
	    <tr>
	      <td><?php echo NAME;?></td>
	      <td><input type="text" name="username" value="<?php ?>" /></td>
        </tr>
	    <tr>
	      <td width="111"><?php echo BIRTHDAY;?></td>
	      <td width="366"><input type="date" name="birthday" value="<?php ?>" /></td>
        </tr>
	    <tr>
	      <td><?php echo ADDRESS;?></td>
	      <td><input type="text" name="address" value="<?php ?>" /></td>
        </tr>
	    <tr>
	      <td><?php echo MAIL;?></td>
	      <td><input type="email" name="mail" value="<?php ?>" /></td>
        </tr>
	    <tr>
	      <td><?php echo TEL;?></td>
	      <td><input type="number" name="tel" value="<?php ?>" /></td>
        </tr>
	    <tr>
	      <td><?php echo NOTE;?></td>
	      <td><textarea cols="30" rows="5" name="note" style="overflow:scroll"></textarea></td>
        </tr>
        <tr>
	      <td height="28" colspan="2"><div align="center">
          	<input type="reset" value="<?php echo RESET;?>" />
            <input type="submit" name="ok" value="<?php echo SEND;?>" />
            </div>
          </td>
        </tr>
  </table>
</div>
	<form action="" method="post" enctype="multipart/form-data">
	  
    </form>
</body>
</html>