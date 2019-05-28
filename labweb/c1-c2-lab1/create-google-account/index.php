<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Google Account - Trung Quân</title>
<link rel="stylesheet" type="text/css" href="create-account-style.css" />
</head>

<body>
	<div id="wraper" align="center">
    	<div id="top">
        	<h1>Create your Google Account</h1>
        </div><!--end div top-->
        
        <div id="content">
        	<div id="content-left">
            	<h2>
                  One account is all you need
                </h2>
                <p>
                  One free account gets you into everything Google.
                </p>
                <div class="logo1"></div>
                
                <h2>
                  Take it all with you
                </h2>
                <p>
                  Switch between devices, and pick up wherever you left off.
                </p>
                <div class="logo2"></div>
        	</div><!--end div content-left-->
            
            <div id="content-right">
            	<form action="javascript:actionForm()" method="post" enctype="multipart/form-data">
           	  <table width="261" height="496" border="0">
            	  <tr>
            	    <td colspan="3"><strong>Name</strong></td>
           	    </tr>
            	  <tr>
            	    <td colspan="2"><input type="text" name="first"  value="" /></td>
            	    <td width="229"><input type="text" name="last"  value="" /></td>
          	    </tr>
            	  <tr>
            	    <td colspan="3"><strong>Choose your username</strong></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><input type="text" name="username" value=""  placeholder="@gmail.com"/></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><strong>Create your password</strong></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><input type="password" name="password" value="" /></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><strong>Confirm your password</strong></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><input type="password" name="cf-password" value="" /</td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><strong>Birthday</strong></td>
           	    </tr>
            	  <tr>
            	    <td width="190"><select style="width:174px;" name="birthday">
                					<option>- <strong>Month</strong> -</option> 
                					<?php
                                    	for($i=1;$i<=12;$i++)
										{
											echo '<option value="month">';
												echo $i;
											echo '</option>';
										}
                                    ?>   
                                </select></td>
            	    <td colspan="2"><input type="text" name="day" size="7" placeholder="Day" value="" />  &nbsp;          	      <input type="text" name="year" size="7" placeholder="Year" value="" />
                    </td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><strong>Gender</strong></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><select style="width:150px;" name="gender">
                					<option>- <strong>I am</strong> -</option>
                					<option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><strong>Mobile phone</strong></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><input type="number" name="mb-phone" value="" /></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><strong>Your current email address</strong></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><input type="text" name="current-email" value="" /></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><strong>Prove you're not a robot</strong></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><input type="checkbox" name="check" value="" />Skip this verification(phone verification may be required)</td>
           	    </tr>
            	  <tr>
            	    <td colspan="3">
                    	<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
                        <label for='message'><strong>Type the text :</strong></label><br>
                        <input id="6_letters_code" name="6_letters_code" type="text"><br>
                        <small>Can't read the image? click <b><a style="color:#F00;" href='javascript: refreshCaptcha();'>here</a></b> to refresh</small>
                    </td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><strong>Location</strong></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><select style="width:345px;" name="country">
                					<option>Vietnam</option>
                                    <option>America</option>
                                    <option>Japan</option>
                                    <option>England</option>
                				</select></td>
          	    </tr>
            	  <tr>
            	    <td colspan="3"><input type="checkbox" name="check" value="" /> I agree to the Google <a href="javascript:actionForm()">Terms of Service </a>and <a href="javascript:actionForm()">Privacy Policy</a></td>
           	    </tr>
            	  <tr>
            	    <td colspan="3"><div align="right">
            	      <input type="submit" name="ok" value="Next Step" style="background-color:#4A8DFB; color:#FFF; 
                      width:80px; height:30px; border-radius:5px;" />
          	      </div></td>
          	    </tr>
          	  </table>
              </form>
            </div><!--end div content-right-->
        </div><!--end div content-->
        <h4 style="float:right;margin-right:30px;"><a href="https://www.facebook.com/lightning.quan" target="_blank">Trung Quân</a></h4>
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