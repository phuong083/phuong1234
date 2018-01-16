<?php
	include 'header.php';

	//gan id cho trang topic
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
			$anhdaidien = $r['ANHDAIDIEN'];
			$noidung = $r['NOIDUNG'];
			$mathumuc = $r['MATHUMUC'];
			echo "<h2 align='center' style='font-size: 36px;color: #4CAF50;'>".$tieude."</h2>";
			echo "<img src='$anhdaidien' alt='Khong the tai hinh anh' width='800px'>";
			echo "<p>".$noidung."</p>";
		?>
		<hr style="border:1px dashed #4CAF50;">
		<div class="comment_topic">
			<?php
				$sql = "SELECT *,TENTHANHVIEN FROM binhluan b,thanhvien c WHERE MABAIVIET = '$id' AND b.MATHANHVIEN = c.MATHANHVIEN";
				$result = mysqli_query($conn,$sql);
				$rows = mysqli_num_rows($result);
				if($rows >=1)
				{
					while($r = mysqli_fetch_assoc($result))
						$mabinhluan = $r['MABINHLUAN'];
					{
						if(isset($_SESSION['logged']) && $_SESSION['logged']=='01')
						{
							echo "<input type='submit' name='delete_comment' value='Xóa'>";
						}
						else
						{
							$hienthi = 'display:none';
							echo "<input type='submit' name='delete_comment' value='Xóa' style='$hienthi'>";
						}
						$noidungbinhluan = $r['NOIDUNG'];
						$tenthanhvien = $r['TENTHANHVIEN'];
						echo "<table><tr><td><img src='images/avatar_member.png'></td>";
						echo "<td rowspan='2'><p>".$noidungbinhluan."</p></td>";
						echo "<tr><td align='center'>".$tenthanhvien."</td></tr></table>";
						echo "<hr style='border:1px dashed #4CAF50;'>";
					}
				}
				if(isset($_POST['upload_comment']))
				{
					$noidungbinhluan = $_POST['comment'];
					$ngayviet = date("Y-m-d h:i:s");
					$mathanhvien = $_SESSION['iduser'];
					$sql = "INSERT INTO binhluan (MABINHLUAN,NOIDUNG,NGAYVIET,MABAIVIET,MATHANHVIEN,THUTU) VALUES ('','$noidungbinhluan','$ngayviet','$id','$mathanhvien','')";
					mysqli_query($conn,$sql);
					//header("location:post.php?id=$id");
				}
			?>
		</div>
		<!-- Phan dang tai binh luan cua bai viet -->
		<div class="comment_topic" style="<?php if(!isset($_SESSION['logged'])){ echo 'display:none';}?>">
			<form method="POST">
				<img src="images/avatar_member.png">
				<textarea cols="87" rows="6" name="comment"></textarea>
				<input type="submit" name="upload_comment">
			</form>
		</div>
		<div class="alert" style="<?php if(isset($_SESSION['logged'])){ echo 'display:none';}?>">
  			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  				Vui lòng <a href="login.php" style="color:white;"><b>đăng nhập</b></a> để tham gia bình luận!
		</div>
	</div>
	<!-- Phan cac bai viet lien quan -->
	<div class="involve_topic">
		<h2 align="center" style="background-color: #98FB98;margin: 0px;padding: 20px 0px;">Bài viết liên quan</h2>
			<?php
				$sql=	"SELECT MABAIVIET,TIEUDE,ANHDAIDIEN FROM baiviet WHERE MABAIVIET < '$id' AND MATHUMUC = '$mathumuc' LIMIT 10";
				$result = mysqli_query($conn,$sql);
				while($r= mysqli_fetch_assoc($result))
				{
					$tieude = $r["TIEUDE"];
					$anhdaidien = $r['ANHDAIDIEN'];
					$mabaiviet = $r["MABAIVIET"];
					echo "<a href='post.php?id=".$mabaiviet."'><img src=".$anhdaidien." width='70px' height='50px'>";
					if(strlen($tieude) > 30) 
					{ 
   						$tieuderutgon = mb_substr($tieude, 0,20, "UTF-8"); 
   						echo "<a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a>";
 					}
 					else
 					{
 						echo "<a href='post.php?id=".$mabaiviet."'>".$tieude."</a>";
 					}
 					echo "<div class='clearfix'></div>";
				}
			?>
	</div>
</div>
<div class="clearfix"></div>
<?php
	include 'footer.php';
?>