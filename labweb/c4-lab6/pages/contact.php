<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
	if(isset($_POST["ok"]))
	{
		$username = $_POST["username"];	
		$gender = $_POST["gender"];
		$address = $_POST["address"];
		$note=$_POST["note"];
    ?>
    <center>
      <table width="100%">
        <tr>
          <td></td>
          <td><h4>Thông tin liên hệ</h4></td>
        </tr>
        <tr>
          <td>Username:</td>
          <td><?php echo $username; ?></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td><?php echo $gender; ?></td>
        </tr>
        <tr>
          <td>Address:</td>
          <td><?php echo $address; ?></td>
        </tr><tr>
          <td>Note:</td>
          <td><?php echo $note; ?></td>
        </tr>
      </table>
      <a href="?page=contact">Quay lại</a>
    </center>
    <?php
	}else{
?>
	<div id="contact" align="center">
    	<h2>Contact Form</h2>
    <form action="" method="post" enctype="multipart/form-data">
   	  <table width="268" border="0">
    	  <tr>
    	    <td width="103">Username:</td>
    	    <td width="149"><input type="text" name="username" value="" /></td>
  	    </tr>
        <tr>
    	    <td>Gender:</td>
    	    <td><p>
   	          <input type="radio" name="gender" value="Male" checked="checked"/>
   	          Male
   	          <input type="radio" name="gender" value="Female" />
   	        Female</p></td>
  	    </tr>
    	  <tr>
    	    <td>Address:</td>
    	    <td>
            	<select multiple="multiple" name="address">
                	<option value="Hà Nội" selected="selected">Hà Nội</option>
                    <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Huế">Huế</option>
                </select>
            </td>
  	    </tr>
        <tr>
        	<td>Note: </td>
            <td>
            	<textarea name="note" cols="50" rows="5" style="overflow:scroll;"></textarea>
            </td>
        </tr>
    	  <tr>
    	    <td colspan="2">
            	<input type="reset" name="reset" value="Reset" />
            	<input type="submit" name="ok" value="Send mail" />
            </td>
   	    </tr>
  	  </table>
    </form>
    	<?php
    }
    	?>
    </div>  
</body>
</html>