<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Writing to Subwindow</title> 
<script type="text/javascript"> 
var newWindow; 
function makeNewWindow() { 
    newWindow = window.open("","","status,height=400,width=500"); 
} 
function subWrite() { 
    if (newWindow.closed) { 
        makeNewWindow(); 
    } 
    newWindow.focus(); 
    var newContent = "<html><head><title>title</title></head>"; 
    newContent += "<body bgcolor='coral'><h1>This document is brand new.</h1>"; 
    newContent += "</body></html>"; 
    newWindow.document.write(newContent); 
    newWindow.document.close(); 

} 
</script> 

</head>

<body onload="makeNewWindow()"> 
<form> 
<input type="button" value="Write to Subwindow" onclick="subWrite()"> 
</form> 
</body> 

</html>