<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>C4-LAB1t</title>
</head> 

<body>
<div class="container">
  <div class="row">
    <div class="col-md-12" style="height: 200px;">
      <img src="images/header.jpg" style="margin-left: -15px;" width="1000px" height="100%">
    </div>
    <nav class="navbar navbar-default col-md-12 menu">
        <ul class="nav nav-tags ">
          <li class="active"><a href="index.php?page=calculate">Calculate</a></li>
          <li><a href="index.php?page=drawtable">DrawTable</a></li>
          <li><a href="index.php?page=register">Register</a></li>
          <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    <div class="left col-md-3">
      <img src="images/anh2.jpg" width="230px">
      <br>
      <img src="images/anh1.jpg" width="250px">
    </div>
    <div class="right col-md-9">
      <?php
        $page = "register";
        
        if(isset($_GET["page"]))
        {
          $page = $_GET["page"];
        }
        
        require_once("pages/$page.php");
      ?>
    </div>
  </div>
</div>
</body>
</html>