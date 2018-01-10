<!-- Phan dau tien header -->
<?php
	include 'connect_db.php';
	$page = 'index';
	include 'header.php';
?>
<!-- Phan noi dung body -->
<div class="contact">
	<ul>
		<li><a href="/"><img src="images/logofb.png"></a></li>
		<li><a href="/"><img src="images/logotw.png"></a></li>
		<li></li>
		<li></li>
	</ul>
</div>
<div class="clearfix"></div>
<div class="body">
	<!-- Phan quang cao mo dau teaser -->
	<div class="teaser">
		<a href="/">
			<img src="images/hinh1.png" alt="hinh1" >
			<p>Đây là hình đầu tiên</p>
		</a>
	</div>
	<div class="teaser">
		<a href="/">
			<img src="images/hinh1.png" alt="hinh1" >
			<p>Đây là hình thứ hai</p>
		</a>
	</div>
	<div class="teaser">
		<a href="/">
			<img src="images/hinh1.png" alt="hinh1" >
			<p>Đây là hình thứ ba</p>
		</a>
	</div>
	<div class="teaser">
		<a href="/">
			<img src="images/hinh1.png" alt="hinh1" >
			<p>Đây là hình thứ tư</p>
		</a>
	</div>
	<div class="teaser">
		<a href="/">
			<img src="images/hinh1.png" alt="hinh1" >
			<p>Đây là hình thứ năm</p>
		</a>
	</div>
	<div class="clearfix"></div>
	<div class="content">
		<!--Noi dung muc -->
		<div class="title">
			<h3>Lập trình</h3><hr>
		</div>
		<!-- Phan noi dung bai viet moi nhat -->
		<div class="newpost">
			<!-- Tieu de bai viet -->
			<h3><a href="post.php">Thêm JavaScript và CSS Style vào WordPress như thế nào cho đúng?</a></h3>
			<!-- Hinh anh dai dien cua bai viet -->
			<img src="images/post1.png" alt="hinh1" width="218px" height="150px">
			<!-- Noi dung ban dau cua bai viet -->
			<p>Làm sao để thêm JavaScript và CSS stylesheets vào WordPress một cách đúng nhất? Nhiều người tự lập trình cho website WordPress của mình thường mắc lỗi khi gõ thẳng câu lệnh của họ vào trong các plugin và các theme. Trong bài này, chúng tôi sẽ giới thiệu cho các bạn cách làm thế nào để thêm JavaScript và stylesheet đúng trong WordPress. Điều này sẽ đặc biệt hữu ích cho những người mới bắt đầu học về theme WordPress và phát triển plugin.</p>
		</div>
		<!-- Phan cac bai viet lien quan -->
		<div class="involve">
			<ul>
				<li><a href="">Ngôn ngữ HTML</a></li>
				<li><a href="">Ngôn ngữ CSS</a></li>
				<li><a href="">Ngôn ngữ Jquery</a></li>
				<li><a href="">Ngôn ngữ Js</a></li>
				<li><a href="">Ngôn ngữ Bootstrap</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<!--Noi dung muc -->
		<div class="title">
			<h3>Công cụ</h3><hr>
		</div>
		<img src="images/hinh1.png" alt="hinh1" >
		<div class="title">
			<h3>Mạng máy tính</h3><hr>
		</div>
		<img src="images/hinh1.png" alt="hinh1" >
	</div>
	<div class="highlight">
		<div class="title">
			<h3>Nổi bật</h3><hr>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!-- Phan cuoi cung footer -->
<?php
	include 'footer.php';
?>

