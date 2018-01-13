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
			<!-- Dua bai viet tu csdl len web bai viet -->
			<?php
				$sql="SELECT * FROM baiviet WHERE MATHUMUC='1' OR MATHUMUC='11' OR MATHUMUC='12' OR MATHUMUC='13'ORDER BY MABAIVIET DESC LIMIT 1";
				$result = mysqli_query($conn,$sql);
				$r= mysqli_fetch_assoc($result);
				$tieude = $r["TIEUDE"];
				$noidung = $r["NOIDUNG"];
				$anhdaidien = $r["ANHDAIDIEN"];
				$mabaiviet = $r["MABAIVIET"];
			echo "<h3><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></h3>";
			/*Hinh anh dai dien cua bai viet */
			echo "<img src='".$anhdaidien."'' alt='hinh1' width='218px' height='150px'>";
			/*Noi dung ban dau cua bai viet */
			echo "<p>".$noidung."</p>";
			?>
		</div>
		<!-- Phan cac bai viet lien quan -->
		<div class="involve">
			<ul>
			<!-- Dua cac bai viet lien quan tu csdl vao -->
			<?php
				$sql="SELECT MABAIVIET,TIEUDE FROM baiviet WHERE MATHUMUC='1' OR MATHUMUC='11' OR MATHUMUC='12' OR MATHUMUC='13'ORDER BY MABAIVIET DESC LIMIT 5";
				$result = mysqli_query($conn,$sql);
				while($r= mysqli_fetch_assoc($result))
				{
					$tieude = $r["TIEUDE"];
					$mabaiviet = $r["MABAIVIET"];
					echo "<li><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></li>";
				}
			?>
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
	<div class="highlight title">
		<h3>Nổi bật</h3><hr>
		<div class="post_highlight">
			<a href="#"><img src="images/hinh1.png" width="70px" height="50px">
			Cachs dua co so du lieu vao trong nay</a>
		</div>
		<div class="clearfix"></div>
		<div class="post_highlight">
			<a href="#"><img src="images/hinh1.png" width="70px" height="50px"><p>Tiêu đề 1</p></a>
			
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!-- Phan cuoi cung footer -->
<?php
	include 'footer.php';
?>

