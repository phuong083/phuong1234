<?php
    include 'header.php';
	$page = 'index';
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
	<div align="center">
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
	</div>
	<div class="clearfix"></div>
	<div class="content">
		<!--Noi dung thu muc lap trinh-->
		<div class="title">
			<h3>Lập trình</h3><hr>
		</div>
		<!-- Phan noi dung bai viet moi nhat -->
		<div class="newpost">
			<!-- Dua bai viet tu csdl len web bai viet -->
			<?php
				$sql="SELECT * FROM baiviet WHERE MATHUMUC='1' OR MATHUMUC='2' OR MATHUMUC='3' OR MATHUMUC='4'ORDER BY MABAIVIET DESC LIMIT 1";
				$result = mysqli_query($conn,$sql);
				$r= mysqli_fetch_assoc($result);
				$tieude = $r["TIEUDE"];
				$noidung = $r["NOIDUNG"];
				$anhdaidien = $r["ANHDAIDIEN"];
				$mabaiviet = $r["MABAIVIET"];
				/*Tieu de bai viet duoc rut gon lai*/
				if(strlen($tieude) > 70) 
				{ 
   					$tieuderutgon = mb_substr($tieude, 0,60, "UTF-8"); 
   					echo "<h3><a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a></h3>";
 				} 
				else
				{
					echo "<h3><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></h3>";
				}
				/*Hinh anh dai dien cua bai viet */
				echo "<img src='".$anhdaidien."'' alt='khong the tai hinh anh' width='218px' height='150px'>";
				/*Noi dung cua bai viet duoc rut gon lai*/
				if(strlen($noidung) > 205) 
				{ 
   					$noidungrutgon = mb_substr($noidung,0,200, "UTF-8"); 
   					echo "<p>".$noidungrutgon."...</p>";
 				} 
				else
				{
					echo "<p>".$noidung."</p>";
				}
			?>
		</div>
		<!-- Phan cac bai viet lien quan -->
		<div class="involve">
			<ul>
			<!-- Dua cac bai viet lien quan tu csdl vao -->
			<?php
				$sql="SELECT MABAIVIET,TIEUDE FROM baiviet WHERE MATHUMUC='1' OR MATHUMUC='2' OR MATHUMUC='3' OR MATHUMUC='4'ORDER BY MABAIVIET DESC LIMIT 5";
				$result = mysqli_query($conn,$sql);
				while($r= mysqli_fetch_assoc($result))
				{
					$tieude = $r["TIEUDE"];
					$mabaiviet = $r["MABAIVIET"];
					if(strlen($tieude) > 50) 
					{ 
   						$tieuderutgon = mb_substr($tieude, 0,30, "UTF-8"); 
   						echo "<li><a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a></li>";
 					}
 					else
 					{
 						echo "<li><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></li>";
 					}
				}
			?>
			</ul>
		</div>
		<div class="clearfix"></div>
		<!--Noi dung thu muc cong cu-->
		<div class="title">
			<h3>Công cụ</h3><hr>
		</div>
		<!-- Phan noi dung bai viet moi nhat -->
		<div class="newpost">
			<!-- Dua bai viet tu csdl len web bai viet -->
			<?php
				$sql="SELECT * FROM baiviet WHERE MATHUMUC='5' OR MATHUMUC='6' OR MATHUMUC='7' OR MATHUMUC='8' OR MATHUMUC='9' ORDER BY MABAIVIET DESC LIMIT 1";
				$result = mysqli_query($conn,$sql);
				$r= mysqli_fetch_assoc($result);
				$tieude = $r["TIEUDE"];
				$noidung = $r["NOIDUNG"];
				$anhdaidien = $r["ANHDAIDIEN"];
				$mabaiviet = $r["MABAIVIET"];
				/*Tieu de bai viet duoc rut gon lai*/
				if(strlen($tieude) > 70) 
				{ 
   					$tieuderutgon = mb_substr($tieude, 0,60, "UTF-8"); 
   					echo "<h3><a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a></h3>";
 				} 
 				else
 				{
 					echo "<h3><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></h3>";
 				}
				/*Hinh anh dai dien cua bai viet */
				echo "<img src='".$anhdaidien."'' alt='khong the tai hinh anh' width='218px' height='150px'>";
				/*Noi dung cua bai viet duoc rut gon lai*/
				if(strlen($noidung) > 205) 
				{ 
   					$noidungrutgon = mb_substr($noidung, 0,200, "UTF-8"); 
   					echo "<p>".$noidungrutgon."...</p>";
 				} 
 				else
 				{
 					echo "<p>".$noidung."</p>";
 				}
				
			?>
		</div>
		<!-- Phan cac bai viet lien quan -->
		<div class="involve">
			<ul>
			<!-- Dua cac bai viet lien quan tu csdl vao -->
			<?php
				$sql="SELECT MABAIVIET,TIEUDE FROM baiviet WHERE MATHUMUC='5' OR MATHUMUC='6' OR MATHUMUC='7' OR MATHUMUC='8' OR MATHUMUC='9' ORDER BY MABAIVIET DESC LIMIT 5";
				$result = mysqli_query($conn,$sql);
				while($r= mysqli_fetch_assoc($result))
				{
					$tieude = $r["TIEUDE"];
					$mabaiviet = $r["MABAIVIET"];
					if(strlen($tieude) > 50) 
					{ 
   						$tieuderutgon = mb_substr($tieude, 0,30, "UTF-8"); 
   						echo "<li><a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a></li>";
 					}
 					else
 					{
 						echo "<li><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></li>";
 					}
				}
			?>
			</ul>
		</div>
		<div class="clearfix"></div>
		<!--Noi dung thu muc mang may tinh-->
		<div class="title">
			<h3>Mạng máy tính</h3><hr>
		</div>
		<!-- Phan noi dung bai viet moi nhat -->
		<div class="newpost">
			<!-- Dua bai viet tu csdl len web bai viet -->
			<?php
				$sql="SELECT * FROM baiviet WHERE MATHUMUC='10' OR MATHUMUC='11' OR MATHUMUC='12' OR MATHUMUC='13' ORDER BY MABAIVIET DESC LIMIT 1";
				$result = mysqli_query($conn,$sql);
				$r= mysqli_fetch_assoc($result);
				$tieude = $r["TIEUDE"];
				$noidung = $r["NOIDUNG"];
				$anhdaidien = $r["ANHDAIDIEN"];
				$mabaiviet = $r["MABAIVIET"];
				/*Tieu de bai viet duoc rut gon lai*/
				if(strlen($tieude) > 70) 
				{ 
   					$tieuderutgon = mb_substr($tieude, 0,60, "UTF-8"); 
   					echo "<h3><a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a></h3>";
 				} 
 				else
 				{
 					echo "<h3><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></h3>";
 				}
				/*Hinh anh dai dien cua bai viet */
				echo "<img src='".$anhdaidien."'' alt='khong the tai hinh anh' width='218px' height='150px'>";
				/*Noi dung cua bai viet duoc rut gon lai*/
				if(strlen($noidung) > 205) 
				{ 
   					$noidungrutgon = mb_substr($noidung, 0,200, "UTF-8"); 
   					echo "<p>".$noidungrutgon."...</p>";
 				} 
 				else
 				{
 					echo "<p>".$noidung."</p>";
 				}
				
			?>
		</div>
		<!-- Phan cac bai viet lien quan -->
		<div class="involve">
			<ul>
			<!-- Dua cac bai viet lien quan tu csdl vao -->
			<?php
				$sql="SELECT MABAIVIET,TIEUDE FROM baiviet WHERE MATHUMUC='10' OR MATHUMUC='11' OR MATHUMUC='12' OR MATHUMUC='13' ORDER BY MABAIVIET DESC LIMIT 5";
				$result = mysqli_query($conn,$sql);
				while($r= mysqli_fetch_assoc($result))
				{
					$tieude = $r["TIEUDE"];
					$mabaiviet = $r["MABAIVIET"];
					if(strlen($tieude) > 50) 
					{ 
   						$tieuderutgon = mb_substr($tieude, 0,30, "UTF-8"); 
   						echo "<li><a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a></li>";
 					}
 					else
 					{
 						echo "<li><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></li>";
 					}
				}
			?>
			</ul>
		</div>
		<div class="clearfix"></div>
		<!--Noi dung thu muc meo vat-->
		<div class="title">
			<h3>Mẹo vặt</h3><hr>
		</div>
		<!-- Phan noi dung bai viet moi nhat -->
		<div class="newpost">
			<!-- Dua bai viet tu csdl len web bai viet -->
			<?php
				$sql="SELECT * FROM baiviet WHERE MATHUMUC='14' ORDER BY MABAIVIET DESC LIMIT 1";
				$result = mysqli_query($conn,$sql);
				$r= mysqli_fetch_assoc($result);
				$tieude = $r["TIEUDE"];
				$noidung = $r["NOIDUNG"];
				$anhdaidien = $r["ANHDAIDIEN"];
				$mabaiviet = $r["MABAIVIET"];
				/*Tieu de bai viet duoc rut gon lai*/
				if(strlen($tieude) > 70) 
				{ 
   					$tieuderutgon = mb_substr($tieude, 0,60, "UTF-8"); 
   					echo "<h3><a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a></h3>";
 				} 
 				else
 				{
 					echo "<h3><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></h3>";
 				}
				/*Hinh anh dai dien cua bai viet */
				echo "<img src='".$anhdaidien."'' alt='khong the tai hinh anh' width='218px' height='150px'>";
				/*Noi dung cua bai viet duoc rut gon lai*/
				if(strlen($noidung) > 205) 
				{ 
   					$noidungrutgon = mb_substr($noidung, 0,200, "UTF-8"); 
   					echo "<p>".$noidungrutgon."...</p>";
 				} 
 				else
 				{
 					echo "<p>".$noidung."</p>";
 				}
				
			?>
		</div>
		<!-- Phan cac bai viet lien quan -->
		<div class="involve">
			<ul>
			<!-- Dua cac bai viet lien quan tu csdl vao -->
			<?php
				$sql="SELECT MABAIVIET,TIEUDE FROM baiviet WHERE MATHUMUC='14' ORDER BY MABAIVIET DESC LIMIT 5";
				$result = mysqli_query($conn,$sql);
				while($r= mysqli_fetch_assoc($result))
				{
					$tieude = $r["TIEUDE"];
					$mabaiviet = $r["MABAIVIET"];
					if(strlen($tieude) > 50) 
					{ 
   						$tieuderutgon = mb_substr($tieude, 0,30, "UTF-8"); 
   						echo "<li><a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a></li>";
 					}
 					else
 					{
 						echo "<li><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></li>";
 					}
				}
			?>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- phan cac bai viet noi bat -->
	<div class="highlight title">
		<h3>Nổi bật</h3><hr>
		<div class="post_highlight">
			<?php
				$sql="SELECT MABAIVIET,TIEUDE,ANHDAIDIEN FROM baiviet ORDER BY MABAIVIET DESC LIMIT 10";
				$result = mysqli_query($conn,$sql);
				while($r= mysqli_fetch_assoc($result))
				{
					$tieude = $r["TIEUDE"];
					$anhdaidien = $r['ANHDAIDIEN'];
					$mabaiviet = $r["MABAIVIET"];
					echo "<a href='post.php?id=".$mabaiviet."'><img src=".$anhdaidien." width='70px' height='50px'>";
					if(strlen($tieude) > 50) 
					{ 
   						$tieuderutgon = mb_substr($tieude, 0,30, "UTF-8"); 
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
</div>
<div class="clearfix"></div>
<!-- Phan cuoi cung footer -->
<?php
	include 'footer.php';
?>