<!-- Phan dau tien header -->
<?php
	include 'connect_db.php';
	$page = 'add_folder';
	include 'admin_header.php';
?>
<!-- Phan noi dung body -->
<div class="body">
	<div class="content_post">
		<table>
			<tr>
				<td><h2 align="center">Tên thư mục:</h2></td>
				<td><input type="text" name="caption"></td>
			</tr>
			<tr>
				<td colspan="2">
					<textarea placeholder="Ghi chú" rows="30" cols="90" name="content"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="save folder"  value="Lưu thư mục" style="float:right;">
				</td>
			</tr>
		</table>
	</div>