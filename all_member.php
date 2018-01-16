<?php
	$page = 'member';
	include 'admin_header.php';
?>
<div class="body" style="<?php if($_SESSION['logged']!='01'){ echo'display:none';} ?>">
	<form method="POST">
	<div class="all_member">
		<input type="submit" name="add_member" value="Thêm thành viên">
		<table width="100%">
			<tr>
				<td colspan="9"><h2 align="center">Danh sách tất cả thành viên:</h2></td>
			</tr>
			<tr>
				<td> Mã thành viên </td>
				<td> Email </td>
				<td> Mật khẩu </td>
				<td> Tên thành viên </td>
				<td> Địa chỉ </td>
				<td> SDT </td>
				<td> Mã cấp bậc </td>
				<td colspan="2"> Tác vụ </td>
			</tr>
			<?php
				$sql= "SELECT * FROM thanhvien";
				$result = mysqli_query($conn,$sql);
				while ($r = mysqli_fetch_assoc($result) )
				{
					$mathanhvien = $r['MATHANHVIEN'];
					$email = $r['EMAIL'];
					$matkhau = $r['MATKHAU'];
					$tenthanhvien = $r['TENTHANHVIEN'];
					$diachi = $r['DIACHI'];
					$sdt = $r['SDT'];
					$macapbac = $r['MACAPBAC'];
					echo "<tr>";
					echo "<td>".$mathanhvien."</td>";
					echo "<td>".$email."</td>";
					echo "<td>".$matkhau."</td>";
					echo "<td>".$tenthanhvien."</td>";
					echo "<td>".$diachi."</td>";
					echo "<td>".$sdt."</td>";
					echo "<td>".$macapbac."</td>";
					echo "<td><input type='submit' name='delete_member' value='Xóa'></td>";
					echo "<td><input type='submit' name='edit_member' value='Sửa'></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
	</form>
	<?php 
		if(isset($_POST['delete_member']))
		{
			$sql="DELETE FROM thanhvien WHERE MATHANHVIEN='$mathanhvien'";
			mysqli_query($conn,$sql);
			header('location:all_member.php');
		}
		if(isset($_POST['add_member']))
		{
			header('location:add_member.php');
		}
	?>
</div>
