<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yahoo-Trung Quân</title>
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>	
<style>
	a{color:#000;text-decoration:none;}
</style>
</head>

<body>

	<div id="wraper" style="width:1000px;">
    	<div id="top" style="text-align:right;">
        	<a href="javascript:void(0)">Yahoo</a> | <a href="javascript:void(0)">Help</a>
        </div>
      <div id="content" style="width:700px; margin-left:150px;">
        	<h1><a href="javascript:void(0)">Yahoo!</a></h1>
            Get a Yahoo ID and free email to connect to people and info that you care about
            <hr />
            <form action="javascript: actionForm();" method="post" enctype="multipart/form-data">
        <table width="439" height="125" border="0">
              <tr>
                <td width="52"><div align="right">Name</div></td>
                <td width="176"><input type="text" name="firstname" placeholder="First name" value="" /></td>
                <td colspan="2"><input type="text" name="lastname" placeholder="Last name" value="" /></td>
              </tr>
              <tr>
                <td><div align="right">Gender</div></td>
                <td colspan="3"><select style="width:150px;" name="gender">
                					<option>- Select One -</option>
                					<option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select></td>
              </tr>
              <tr>
                <td><div align="right">Birthday</div></td>
                <td><select style="width:174px;" name="birthday">
                					<option>- Select Month -</option> 
                					<?php
                                    	for($i=1;$i<=12;$i++)
										{
											echo '<option value="month">';
												echo $i;
											echo '</option>';
										}
                                    ?>   
                                </select></td>
                <td width="56"><input type="text" name="day" size="7" placeholder="Day" value="" /></td>
                <td width="137"><input type="text" name="year" size="7" placeholder="Year" value="" /></td>
              </tr>
              <tr>
                <td><div align="right">Country</div></td>
                <td colspan="3"><select style="width:345px;" name="country">
                					<option>Vietnam</option>
                                    <option>America</option>
                                    <option>Japan</option>
                                    <option>England</option>
                				</select>
                </td>
              </tr>
        </table>
        <br />
        <br />
        Select an ID and Password
        <hr />
        <table width="500" height="103" border="0">
          <tr>
            <td width="250"><div align="right">Yahoo! ID and Email</div></td>
            <td width="145"><input type="text" name="email" size="10" placeholder="" value="" />&nbsp;@</td>
            <td width="79">
            				<select style="width:100px;" name="email-type">
                					<option>yahoo.com</option>
                				</select>
            </td>
            <td width="79"><button style="width:50px; height:20px" type="button" onclick="" name="check-id-email">Check</button></td>
          </tr>
          <tr>
            <td><div align="right">Password</div></td>
            <td width="207" colspan="3"><input type="password" name="password" /></td>
          </tr>
          <tr>
            <td><div align="right">Re-Type Password</div></td>
            <td colspan="3"><input type="re-password" name="password" /></td>
          </tr>
        </table>
        <br />
        <br />
        In case you forget your ID or password...
        <hr />
        <table width="487" height="173" border="0">
          <tr>
            <td width="185"><div align="right">Attemate Email</div></td>
            <td width="306"><input type="text" name="attemate-email" size="30" /></td>
          </tr>
          <tr>
            <td><div align="right">Secret Question 1</div></td>
            <td>
            		<select style="width:245px;" name="question1">
                					<option>- Select One -</option>
                					<option value="q1">Question 1</option>
                                    <option value="q2">Question 2</option>
                                </select>
            </td>
          </tr>
          <tr>
            <td><div align="right">Your Answer</div></td>
            <td><input type="text" name="answer1" size="30" /></td>
          </tr>
          <tr>
            <td><div align="right">Secret Question 2</div></td>
            <td>
            		<select style="width:245px;" name="question2">
                					<option>- Select One -</option>
                					<option value="q3">Question 3</option>
                                    <option value="q4">Question 4</option>
                                </select>
            </td>
          </tr>
          <tr>
            <td><div align="right">Your Answer</div></td>
            <td><input type="text" name="answer2" size="30" /></td>
          </tr>
        </table>
        <br />
        <br />
        <hr />
        <table width="493" height="164" border="0">
          <tr>
            <td width="186"><div align="right">Type code the shown: </div></td>
            <td width="291">
            	<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
            	<label for='message'>Enter the code above here :</label><br>
            	<input id="6_letters_code" name="6_letters_code" type="text"><br>
            	<small>Can't read the image? click <b><a style="color:#F00;" href='javascript: refreshCaptcha();'>here</a></b> to refresh</small>
            </td>
          </tr>
          <tr>
            <td height="60" colspan="2"><div align="center">
              <input style="width:200px; height:30px; background-color:#FFFF33; border:thin 2px #000000;" type="submit" name="ok" value="Create My Accout" />
            </div></td>
          </tr>
          </table>
        </form>
      </div> <!--end div content-->
      <h4 style="float:right;margin-right:30px;"><a href="https://www.facebook.com/lightning.quan" target="_blank">Trung Quân</a></h4>
      
    </div> <!--end div wraper-->
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
function actionForm()
{
	alert("Tạm thời chưa có code xử lý, đang update, liên hệ Trung Quân để biết thêm thông tin mới nhất.");	
}
</script>
</body>
</html>
