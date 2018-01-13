<!-- Phan dau tien header -->
<?php
	include 'connect_db.php';
	$page = 'register';
	include 'header.php';
?>
<!-- Phan than body-->
<div class="body">
	<form action="" method="post">
	<div class="register" align="center">
		<table>
			<tr>
				<th colspan="2"><h2>Đăng ký</h2></th>
			</tr>
			<tr>
				<td><b>Email đăng nhập:</b></td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><b>Mật khẩu:</b></td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><b>Nhập lại mật khẩu:</b></td>
				<td><input type="password" name="enter_password"></td>
			</tr>
			<tr>
				<td><b>Họ và tên:</b></td>
				<td><input type="text" name="user_name"></td>
			</tr>
			<tr>
				<td><b>Điện thoại:</b></td>
				<td><input type="text" name="phone_number"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="register" value="Đăng ký"></td>
			</tr>
		</table>
	</div>
	</form>
</div>
<!-- Phan xu ly dang ky bang php -->
<?php
	if(isset($_POST['register']))
	{
		$email = $_POST['email'];
		$matkhau = $_POST['password'];
		$matkhau2 = $_POST['enter_password'];
		$hoten = $_POST['user_name'];
		$sdt = $_POST['phone_number'];
		$sql = "INSERT INTO thanhvien(MATHANHVIEN,EMAIL,MATKHAU,TENTHANHVIEN,DIACHI,SDT,MACAPBAC) VALUES('',$email,$matkhau,$hoten,'',$sdt,'03')";
		mysqli_query($conn,$sql);
	}
?>
<div class="clearfix"></div>
<!-- Phan cuoi cung footer -->
<?php
	include 'footer.php';
?>