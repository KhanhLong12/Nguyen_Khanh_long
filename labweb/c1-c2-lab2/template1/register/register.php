<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
    <div id="register" style="background-color:#666; color:#FFF">
    	<h2>Register Form</h2>
    <form action="javascript:actionForm()" method="post" enctype="multipart/form-data">
   	  <table width="431" border="1">
    	  <tr>
    	    <td width="175">Username:</td>
    	    <td width="240"><input type="text" name="username" value="" /></td>
  	    </tr>
    	  <tr>
    	    <td>Password:</td>
    	    <td><input type="password" name="password" value="" /></td>
  	    </tr>
    	  <tr>
    	    <td>Confirm Password</td>
    	    <td><input type="password" name="cf-password" value="" /></td>
  	    </tr>
    	  <tr>
    	    <td>Gender:</td>
    	    <td><p>
   	          <input type="radio" name="gender" value="Male" />
   	          Male
    	      </p>
    	      <p>
   	          <input type="radio" name="gender" value="Female" />
   	        Female</p></td>
  	    </tr>
    	  <tr>
    	    <td>Address:</td>
    	    <td><textarea name="address" cols="20" rows="3" style="overflow:scroll;"></textarea></td>
  	    </tr>
    	  <tr>
    	    <td>Mail:</td>
    	    <td><input type="text" name="mail" value="" /></td>
  	    </tr>
    	  <tr>
    	    <td>Programming Languages:</td>
    	    <td><input type="checkbox" name="PHP" value="PHP" />PHP
            	<input type="checkbox" name="JAVA" value="JAVA" />JAVA <br />
                <input type="checkbox" name="ASP.NET" value="ASP.NET" />ASP.NET
                <input type="checkbox" name="C++" value="C++" />C++
            </td>
  	    </tr>
    	  <tr>
    	    <td>Skill</td>
    	    <td>
            	<select name="skill">
                	<option value="Excelent">Excelent</option>
                    <option value="Bad">Bad</option>
                    <option value="Very Bad">Very Bad</option>
                </select>
            </td>
  	    </tr>
    	  <tr>
    	    <td colspan="2">
            	<input type="reset" name="reset" value="Reset" />
            	<input type="submit" name="ok" value="Register" />
            </td>
   	    </tr>
  	  </table>
    </form>
    </div>
</body>
</html>