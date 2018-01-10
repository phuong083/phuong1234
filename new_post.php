<!-- Phan dau tien header -->
<?php
	include 'connect_db.php';
	$page = 'new_post';
	include 'admin_header.php';
?>
<div class="body">
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
			<li><input type="checkbox" name="123">Lập trình</li>
			<ol>
				<li><input type="checkbox" name="123">Website</li>
				<li><input type="checkbox" name="123">Application</li>
				<li><input type="checkbox" name="123">Game</li>
			</ol>
			<li><input type="checkbox" name="123">Công cụ</li>
			<ol>
				<li><input type="checkbox" name="123">Office</li>
				<li><input type="checkbox" name="123">Chỉnh sửa hình ảnh</li>
				<li><input type="checkbox" name="123">Xây dựng video</li>
				<li><input type="checkbox" name="123">Khác</li>
			</ol>
			<li><input type="checkbox" name="123">Mạng máy tính</li>
			<ol>
				<li><input type="checkbox" name="123">Quản trị mạng</li>
				<li><input type="checkbox" name="123">Bảo mật thông tin</li>
				<li><input type="checkbox" name="123">Truyền dữ liệu</li>
				<li><input type="checkbox" name="123">Khác</li>
			</ol>

		</ol>
		<h3>Ảnh đại diện</h3><hr>
		<input type="file" name="123">
	</div>
</div>