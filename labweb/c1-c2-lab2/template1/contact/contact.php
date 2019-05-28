<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
	<div id="contact" style="background-color:#666; color:#FFF">
    	<h2>Contact Form</h2>
    <form action="javascript:actionForm()" method="post" enctype="multipart/form-data">
   	  <table width="268" border="1">
    	  <tr>
    	    <td width="103">Name:</td>
    	    <td width="149"><input type="text" name="name" value="" /></td>
  	    </tr>
    	  <tr>
    	    <td>Address:</td>
    	    <td><input type="text" name="address-text" value="" /></td>
  	    </tr>
    	  <tr>
    	    <td>Address:</td>
    	    <td><textarea name="address" cols="50" rows="5" style="overflow:scroll;"></textarea></td>
  	    </tr>
    	  <tr>
    	    <td colspan="2">
            	<input type="reset" name="reset" value="Reset" />
            	<input type="submit" name="ok" value="Send mail" />
            </td>
   	    </tr>
  	  </table>
    </form>
    </div>
</body>
</html>