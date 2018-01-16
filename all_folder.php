<?php
	$page = 'folder';
	include 'admin_header.php';
?>
<div class="body" style="<?php if($_SESSION['logged']!='01'){ echo'display:none';} ?>">
	<div class="content_post">
		<table>
			<tr>
				<td><h2 align="center">Danh sách tất cả thư mục:</h2></td>
			</tr>
			<tr>
				<table align='center' width='400' border='1'>
					<tr>
						<td>STT</td>
						<td>Tên thư mục</td>
						<td>Ghi chú</td>
						<td>Lớp</td>
					</tr>
					<tr>
             			<th scope="row">1</th>
              			<td>Bài viết</td>
              			<td>Lưu bài viết</td>
           				<td></td>
           				<td><a href="chinh-sua-thu-muc.php?id=1">Sửa</a> <a href="xoa-thu-muc.php?id=1">Xóa</a></td>
       				</tr>
           			<tr>
           				<th scope="row">2</th>
              			<td>Ảnh bài viết</td>
              			<td>Hình ảnh bài viết</td>
         				<td></td>
              			<td><a href="chinh-sua-thu-muc.php?id=2">Sửa</a> <a href="xoa-thu-muc.php?id=2">Xóa</a></td>
           			</tr>
           			<tr>
           				<th scope="row">3</th>
           				<td>Ảnh đại diện</td>
           				<td>Hình ảnh thành viên</td>
           				<td></td>
              			<td><a href="chinh-sua-thu-muc.php?id=3">Sửa</a> <a href="xoa-thu-muc.php?id=3">Xóa</a></td>
            		</tr>
				</table>
			</tr>
		</table>
	</div>
</div>
					
		