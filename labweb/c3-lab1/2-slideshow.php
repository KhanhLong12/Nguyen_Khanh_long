<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slide Show</title>
	<script>
		var anhAr = new Array(4);
		var currentIndex = 1;
		function loadAnh()
		{
			for(var i =1; i<anhAr.length;i++)
			{
				anhAr[i]=new Image();
				anhAr[i].src="img/anh"+i+".jpg";	
			}	
		}
		function next()
		{
			if(currentIndex < anhAr.length-1)
			{
				document.getElementById("b1").disabled=false;
				currentIndex++;
				document.getElementById("hoa").src=anhAr[currentIndex].src;
			}	
			else
			{
				document.getElementById("b2").disabled = true;	
			}
		}
		function back()
		{
			if(currentIndex >1)
			{
				document.getElementById("b2").disabled=false;
				currentIndex--;
				document.getElementById("hoa").src=anhAr[currentIndex].src;	
			}
			else
			{
				document.getElementById("b1").disabled=true;	
			}
		}
	</script>
</head>

<body onload="loadAnh();">
	<center>
    	<h1>Simple Slideshow</h1>
        <img id="hoa" src="img/anh1.jpg" height="300" width="200" /><br />
        <input type="button" id="b1" value="back" onclick="back();" />
        <input type="button" id="b2" value="next" onclick="next();" />
    </center>
</body>
</html>