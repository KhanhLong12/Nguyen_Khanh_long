<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giải phương trình bậc 2</title>
	<script language="javascript">
    	function show(id)
		{
			var a = document.myform.so1.value;
			if(a=="")
			{
				alert("mời bạn nhập hệ số x mũ 2");	
				return;
			}
			var b = document.myform.so2.value;
			if(b=="")
			{
				alert("mời bạn nhập hệ số x mũ 1");
				return;
			}	
			var c = document.myform.so3.value;
			if(c=="")
			{
				alert("mời bạn nhập hệ số x mũ 0");
				return;
			}
			var D = (Math.pow(b,2)-4*a*c);
			if(D<0)
			{
				document.getElementById(id).innerHTML = "<h4 align='center'>Phương Trình Vô Nghiệm</h4>";	
			}
			if(D==0)
			{
				var x= -b/(2*a);	
				document.getElementById(id).innerHTML = "<h4 align='center'>Phương Trình Có nghiệm kép: x<sub>1</sub>=x<sub>2</sub>= "+ x+"</h4>";
			}
			if(D>0)
			{
				var x1=(-b+Math.sqrt(D))/(2*a);	
				var x2=(-b-Math.sqrt(D))/(2*a);	
				document.getElementById(id).innerHTML = "<h4 align='center'>Phương Trình Có 2 nghiệm: x<sub>1</sub>= "+ x1+" và x<sub>2</sub>= "+ x2 +"</h4>";
			}
		}
    </script>
</head>

<body bgcolor="#CCFFCC">
	<h1 align="center">Giải Phương Trình Bậc 2</h1>
	<form name="myform">
   	  <div align="center">
   	    <table width="398" height="112" border="0">
   	      <tr>
   	        <td><div align="center">
   	          <input type="text" name="so1" size="10" />
   	          x<sup>2</sup>+</div></td>
   	        <td><div align="center">
   	          <input type="text" name="so2" size="10" />
   	          x+</div></td>
   	        <td><div align="center">
   	          <input type="text" name="so3" size="10" />
   	          =0</div></td>
 	        </tr>
   	      <tr>
   	        <td colspan="3"><div align="center">
   	          <input type="button" id="kqua" value="Giải Phương Trình" onclick="show('kq');" />
   	          <input type="reset"  value="Reset" />
 	          </div></td>
 	      </tr>
   	      <div align="center"><label id="kq"></label></div>
   	    </table>
   	  </div>
    </form>
</body>
</html>