<div id="register">
    	<h2>Register Form</h2>
    <form action="?ac=registerprocess" method="post" enctype="multipart/form-data">
   	  <table width="631" border="0">
    	  <tr>
    	    <td width="175">Username:</td>
    	    <td width="240"><input type="text" name="username" value="" /></td>
  	    </tr>
    	  <tr>
    	    <td>Password:</td>
    	    <td><input type="password" name="password" value="" /></td>
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
            	<select name="address" multiple="multiple">
            		<option value="Hà Nội" selected="selected">Hà Nội</option>
                    <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Huế">Huế</option>
                </select>
            </td>
  	    </tr>
    	  
    	  <tr>
    	    <td>Programming Languages:</td>
    	    <td><input type="checkbox" name="pl[]" checked="checked" value="PHP" />PHP
            	<input type="checkbox" name="pl[]" value="JAVA" />JAVA
                <input type="checkbox" name="pl[]" value="ASP.NET" />ASP.NET
                <input type="checkbox" name="pl[]" value="C++" />C++
            </td>
  	    </tr>
    	  <tr>
    	    <td>Skill</td>
    	    <td>
            	<input type="radio" name="skill" value="Normal" />Normal <br />
                <input type="radio" name="skill" value="Good" />Good<br />
                <input type="radio" name="skill" value="Very Good" checked="checked" />Very Good<br />
                <input type="radio" name="skill" value="Excellent" />Excellent
            </td>
  	    </tr>
        <tr>
        	<td>Note: </td>
            <td>
            	<textarea name="note" cols="40" rows="4" style="overflow:scroll;"></textarea>
            </td>
        </tr>
        <tr>
        	<td>Marriage Status: </td>
            <td>
            	<input type="checkbox" name="marriage" />
            </td>
        </tr><br />
    	  <tr>
    	    <td colspan="2">
            	<div align="center">
            	  <input type="reset" name="reset" value="Reset" />
            	  <input type="submit" name="ok" value="Register" />
       	    </div></td>
   	    </tr>
  	  </table>
    </form>
    
</div>