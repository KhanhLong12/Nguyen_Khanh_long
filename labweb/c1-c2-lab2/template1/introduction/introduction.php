<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="jquery.bxslider/jquery.bxslider.css" />
<script src="jquery.js"></script>
<script src="jquery.bxslider/jquery.bxslider.js"></script>

<script>
    	$(document).ready(function(){
            $(".slider").bxSlider({
				  minSlides: 1,//số lượng slide ít nhất được hiển thị trên một khung màn hình
				  maxSlides: 3, //số lượng slide nhiều nhất được hiển thị trên một khung màn hình
				  slideWidth: 700, //độ rộng của slide
				  slideMargin: 10, //khoảng cách giữa 2 slide
				  ticker: true, //slide tự động di chuyển qua trái, nếu để false thì phải có hành động click vào nút chuyển slide thì nó mới chạy, click nhiều lần nút qua phải để tăng tốc chạy cho slide, ngược lại với nút qua trái
				  speed: 1000, //tốc độ chạy của slide (mili giây)
				
			});		
        });
    </script>
</head>

<body>
	<div id="introduction" style="background-color:#666; color:#FFF">
    		<h2>Welcome to my company</h2>
        <hr />
        <ul class="slider">
        	<li><img src="img/introduction.jpg" /></li>
        </ul>
    </div>
</body>
</html>