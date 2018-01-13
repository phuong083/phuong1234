<?php
	include 'connect_db.php';
	include 'header.php';
?>
<?php
	$id = -1;
	if (isset($_GET["id"])) {
		$id = intval($_GET['id']);
	}
	// Lấy ra nội dung bài viết theo điều kiện id
	$sql = "select * from baiviet where mabaiviet = $id";
	// Thực hiện truy vấn data thông qua hàm mysqli_query
	$result = mysqli_query($conn,$sql);
	$r=mysqli_fetch_assoc($result);
?>
<div class="body">
	<!-- Phan noi dung bai viet -->
	<div class="view_topic">
		<?php
			$tieude = $r['TIEUDE'];
			$noidung = $r['NOIDUNG'];
			echo "<h2 align='center' style='font-size: 36px;color: #4CAF50;'>".$tieude."</h2>";
			echo "<p>".$noidung."</p>";
		?>
		<hr style="border:1px dashed #4CAF50;">
		<!-- Phan dang tai binh luan cua bai viet -->
		<div class="comment_topic">
			<img src="images/hinh1.png">
			<textarea cols="87" rows="6"></textarea>
			<input type="submit" name="upload_comment">
		</div>
	</div>
	<!-- Phan cac bai viet lien quan -->
	<div class="involve_topic">
		<h2 align="center" style="background-color: #98FB98;margin: 0px;padding: 20px 0px;">Bài viết liên quan</h2>
		<ul>
			<li>123</li>
			<li>2121</li>
			<li>212121</li>
		</ul>
	</div>
</div>
<div class="clearfix"></div>
<?php
	include 'footer.php';
?>