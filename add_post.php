<?php
	$page = 'post';
	include 'admin_header.php';
?>
<div class="body" style="<?php if($_SESSION['logged']!='01'){ echo'display:none';} ?>">
	<form method="POST" enctype="multipart/form-data">
	<div class="content_post">
		<table>
			<tr>
				<td><h2 align="center">Tiêu đề:</h2></td>
				<td><input type="text" name="caption"></td>
			</tr>
			<tr>
				<td colspan="2">
					<textarea placeholder="Nội dung bài viết" rows="30" cols="90" name="content"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="upload_post"  value="Đăng bài" style="float:right;">
				</td>
			</tr>
		</table>
	</div>
	<!-- Phan chon vi tri va anh dai dien bai viet -->
	<div class="edit_post title">
		<h3>Thư mục</h3><hr>
		<ol>
			<li><input type="radio" name="folder" value="1" checked>Lập trình</li>
			<ol>
				<li><input type="radio" name="folder" value="2">Website</li>
				<li><input type="radio" name="folder" value="3">Application</li>
				<li><input type="radio" name="folder" value="4">Game</li>
			</ol>
			<li><input type="radio" name="folder" value="5">Công cụ</li>
			<ol>
				<li><input type="radio" name="folder" value="6">Office</li>
				<li><input type="radio" name="folder" value="7">Chỉnh sửa hình ảnh</li>
				<li><input type="radio" name="folder" value="8">Xây dựng video</li>
				<li><input type="radio" name="folder" value="9">Khác</li>
			</ol>
			<li><input type="radio" name="folder" value="10">Mạng máy tính</li>
			<ol>
				<li><input type="radio" name="folder" value="11">Quản trị mạng</li>
				<li><input type="radio" name="folder" value="12">Bảo mật thông tin</li>
				<li><input type="radio" name="folder" value="13">Truyền dữ liệu</li>
			</ol>
			<li><input type="radio" name="folder" value="14">Mẹo vặt</li>
		</ol>
		<h3>Ảnh đại diện</h3><hr>
		<?php
			include 'upload.php';
		?>
		<input type="file" name="image">
	</div>
	</form>
	<?php
		if(isset($_POST["upload_post"]))
		{
			$tieude= $_POST["caption"];
			$noidung= $_POST["content"];
			$anhdaidien =$_FILES['image']['name'];
			$ngayviet = date("Y-m-d h:i:s");
			$thumuc= $_POST["folder"];
			$sql = "INSERT INTO baiviet(MABAIVIET,TIEUDE,NOIDUNG,ANHDAIDIEN,NGAYVIET,MATHANHVIEN,MATHUMUC) VALUES ('','$tieude','$noidung','images/$anhdaidien','$ngayviet','01',$thumuc)";
			mysqli_query($conn,$sql);
		}
	?>	
</div>