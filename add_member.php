<?php
	$page = 'member';
	include 'admin_header.php';
?>
<div class="body" style="<?php if($_SESSION['logged']!='01'){ echo'display:none';} ?>">
	<form method="POST">
	<div class="register" align="center">
	<table>
		<tr>
			<td colspan="2" align="center"><h2> Thêm thành viên </h2></td>
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
			<td><b>Địa chỉ</b></td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td><b>Điện thoại:</b></td>
			<td><input type="text" name="phone_number"></td>
		</tr>
		<tr>
			<td><b>Mã cấp bậc</b></td>
			<td>
				<select name="idrank">
					<option>01</option>
					<option>02</option>
					<option>03</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="add_member" value="Thêm thành viên"></td>
		</tr>
	</table>
	</div>
	</form>
	<?php
		if(isset($_POST['add_member']))
		{
			$email = $_POST['email'];
			$matkhau = $_POST['password'];
			$tenthanhvien = $_POST['user_name'];
			$diachi = $_POST['address'];
			$sdt = $_POST['phone_number'];
			$macapbac = $_POST['idrank'];
			$sql = "INSERT INTO thanhvien(MATHANHVIEN,EMAIL,MATKHAU,TENTHANHVIEN,DIACHI,SDT,MACAPBAC) VALUES('','$email','$matkhau','$tenthanhvien','$diachi','$sdt','$macapbac')";
			mysqli_query($conn,$sql);
		}
	?>
</div>