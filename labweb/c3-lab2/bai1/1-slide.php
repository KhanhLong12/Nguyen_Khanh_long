<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <script language="javascript">
         
	    // play = setTimeout("plays()", 1000);
	  var current = 1;
	  var num_image = 3;
	  function plays(){
	      current++;
	      document.images['img'].src ='img/anh' + current + '.jpg';
	     if(current < num_image){
	       play = setTimeout("plays()", 5000);
	       
	     }else if(current == num_image){
	       current = 0;
	       play =setTimeout("plays()", 5000);
	       // play;
	    	}
	 	}
	 	function stop(){
	 		clearTimeout(play);
	 	}
	 	function change(obj){
	 		var value = obj.value;
	 		document.images['img1'].src = 'img/'+value+'.jpg';
	 	}
    </script>
</head>

<body>
<input type="button" onclick="plays()" name="play" value="Play" />
<input type="button" onclick="stop()" name="stop" value="stop"/>
<img name="img" src="./img/anh1.jpg" />
<hr>
<center>
	<div style="width: 100px;">
		<select id="img2" onchange="change(this)">
			<option value="anh1">Anh1</option>
			<option value="anh2">Anh2</option>
			<option value="anh3">Anh3</option>
		</select>
	</div>
	<br>
	<img name="img1" src="./img/anh1.jpg"/>
</center>
</body>
</html>