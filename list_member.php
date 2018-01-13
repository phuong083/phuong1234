<!-- Phan dau tien header -->
<?php
	include 'connect_db.php';
	$page = 'list_member';
	include 'admin_header.php';
?>
<div class="body">
	<div class="content_post">
		<table>
			<tr>
				<td><h2 align="center">Danh sách tất cả thành viên:</h2></td>
			</tr>
			<tr>
				<table align='center' width='400' border='1'>
					<tr>
						<td>STT</td>
						<td>Tên thành viên</td>
						<td>Mật khẩu</td>
						<td>Email</td>
						<td>Địa chỉ</td>
						<td>SĐT</td>
						<td>Mã cấp bậc</td>
					</tr>
					<tr>
             			<th scope="row">1</th>
              			<td>A</td>
           				<td>123</td>
           				<td>123</td>
               			<td>123</td>
               			<td>123</td>
               			<td>3</td>
             			<td><a href="chinh-sua-thu-muc.php?id=1">Sửa</a> <a href="xoa-thu-muc.php?id=1">Xóa</a></td>
           			</tr>
            		<tr>
             			<th scope="row">2</th>
              			<td>B</td>
              			<td>456</td>
               			<td>456</td>
           				<td>456</td>
               			<td>456</td>
               			<td>1</td>
             			<td><a href="chinh-sua-thu-muc.php?id=1">Sửa</a> <a href="xoa-thu-muc.php?id=1">Xóa</a></td>
           			</tr>
				</table>
			</tr>
		</table>
	</div>
</div>
