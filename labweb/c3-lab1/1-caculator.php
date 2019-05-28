<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thực hành 1</title>
<script type="text/javascript">
	function check(pt)
	{
		x = document.abc.num1.value;	
		y = document.forms[0].num2.value;	
		x=parseInt(x);
		y=parseInt(y);	
		switch(pt)
		{
			case "+": document.forms[0].answer.value=(x+y);
				break;
			case "-": document.forms[0].answer.value=(x-y);
				break;
			case "*": document.forms[0].answer.value=(x*y);
				break;
			case "/": document.forms[0].answer.value=(x/y);
				break;
		}
	}
</script>
</head>

<body>
	<center>
   <h1> Simple caculator </h1>
  <form action="1-caculator.php" method="post" enctype="multipart/form-data" name="abc">
      <table>
      <tr>
        <td><input type="text" name="num1" size="3" value="10" /></td>
        <td><input type="button" name="c" onclick="check(this.value)" value="+" /></td>
        <td><input type="button" name="t" onclick="check(this.value)" value="-" /></td>
        <td><input type="button" name="n" onclick="check(this.value)" value="*" /></td>
        <td><input type="button" name="ch" onclick="check(this.value)" value="/" /></td>
        <td><input type="text" name="num2" value="2" size="3" /></td>
        <td>=</td>
        <td><input type="text" name="answer" size="5" /></td>
      </tr>
      </table>
    </form> 
  </center>  
</body>
</html>