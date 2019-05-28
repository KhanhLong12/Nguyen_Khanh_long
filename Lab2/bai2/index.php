<!DOCTYPE html >
<html >
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> -->
	<title>Thiet ke theo CSS va DIV</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>


<body>
	<div id="main">
		<div id="head">
		<img style="border:thin" id="myImage" src="img/head1.png" width="998px" /></div>		
		<div id="head-link">
			<div class="menu">
				<ul>
					<li><a href="index.php?page/home">Đăng nhập</a></li>
					<li><a href="index.php?page=dangky">Đăng ký</a></li>
					<li><a href="#">Tài khoản</a></li>
				</ul>
			</div>
			<div class="search">
				<span id="input">
					<input type="text" name="search">&nbsp;
					<span>Tìm trong ngành nghề</span>&nbsp;
					<select>
						<option value="">[Lựa chọn ngành nghề]</option>
						<option value="cntt">CNTT</option>
						<option value="itpm">IT phần mềm</option>
					</select>
				</span>
				<button type="submit">Tìm kiếm</button>
			</div>		
		</div>
		<div id="left">
			<ul>
				<li><a href="index.php?page=chitiet">An Ninh - Thám tử</a></li>
				<li><a href="">Bảo hiểm</a></li>
				<li><a href="">Bất Động Sản - Xây Dựng</a></li>
				<li><a href="">Chế Tạo Máy</a></li>
				<li><a href="">Thiết kế Website</a></li>
				<li><a href="">Chứng Khoán</a></li>
				<li><a href="">Da - Giầy</a></li>
				<li><a href="">Dệt May - Thời Trang</a></li>
				<li><a href="">Du Lịch - Dịch Vụ</a></li>
				<li><a href="">Dược Phẩm</a></li>
				<li><a href="">Điện Tử Dân Dụng</a></li>
				<li><a href="">Đồ Chơi - Thiết Bị Học Tập</a></li>
				<li><a href="">Đồ Uống</a></li>
				<li><a href="">Giải Trí</a></li>
			</ul>
		</div>
		<div id="content">
			<?php
				$page = "home";
				
				if(isset($_GET["page"]))
				{
					$page = $_GET["page"];
				}
				
				require_once("page/$page.php");
			?>
		</div>
		<div id="right">
			<div class="ads">
				<img src="img/ads.png">
			</div>
			<div class="news">
				<img style="margin-left: -2px;" src="img/news.png" width="182px">
				<div class="list">
					<ul>
						<li>
							<img src="img/news-1.png">
							<a href="#">Tìm hiểu về luật tự in hóa đơn</a>
						</li>
						<div style="clear: both;"></div>
						<li class="line"></li>
						<li>
							<img src="img/news-2.png">
							<a href="#">Việt Nhật và "tham vọng" dẫn đầu</a>
						</li>
						<div style="clear: both;"></div>
						<li class="line"></li>
						<li>
							<img src="img/news-3.png">
							<a href="#">Habubank: Ngân hàng phát triển toàn diễn</a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
		<div id="footer">
			<img id="myImage" src="img/footer.png" width="998px" />
		</div>
	</div>	
</body>
</html>
