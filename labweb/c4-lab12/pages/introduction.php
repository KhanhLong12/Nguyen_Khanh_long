<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Introduction</title>
</head>

<body>
	<h3 align="center" style="color:#F00;">Introduction: không có nội dung được yêu cầu</h3>
    <?php
    function crc32_str($v){
	return sprintf("%08x", crc32($v) & 0xffffffff);
    }
    
    $value = (isset($_POST['data']) && is_string($_POST['data'])) ? $_POST['data'] : '';
    $flag = ($value !== "" && $value !== "lsjMRVP" && ($value) == crc32_str('lsjMRVP')) ? 'XXXXXXXXXXXXXXXXX': 'bad value';
    echo $flag;
?>


</body>
</html>