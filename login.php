<?php
	$page = 'login';
	include 'header.php';
?>
<!-- Phan noi dung body -->
<div class="body">
	<?php
	if(isset($_POST["login"]))
	{	
		$email = $_POST["email"];
		$matkhau = $_POST["password"];
		$sql = "SELECT mathanhvien,macapbac,email,matkhau,tenthanhvien FROM thanhvien WHERE email='$email' AND matkhau='$matkhau'";
		$rows = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($rows);
		if($count==1)
		{
			$r=mysqli_fetch_assoc($rows);
			$_SESSION['logged']=$r['macapbac'];
			$_SESSION['iduser']=$r['mathanhvien'];
			header("location:index.php");
		}
		else
		{
			echo "<div class='alert'>";
  			echo "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>"; 
  			echo "Sai thông tin đăng nhập";
  			echo "</div>";
  			echo "<br>";
  		}
	}
	?>
	<form action="" method="POST">
	<div class="login" align="center">
		<table>
			<tr>
				<th colspan="2"><h2>Đăng nhập</h2></th>
			</tr>
			<tr>
				<td><b>Tài khoản:</b></td>
				<td><input type="text" name="email" style="background-image: url('images/email.png');background-repeat: no-repeat;background-position: 7px 6px;  padding-left: 40px;">
			</td>
			<tr>
				<td><b>Mật khẩu:</b></td>
				<td><input type="password" name="password" style="background-image: url('images/password.png');background-repeat: no-repeat;background-position: 7px 6px;  padding-left: 40px;"></td>
			</tr>
			<tr>
				<td><a href="/">Quên mật khẩu?</a></td>
				<td><input type="submit" name="login" value="Đăng nhập"></td>
			</tr>
		</table>
	</div>
	</form>
</div>
<div class="clearfix"></div>
<!-- Phan cuoi cung footer -->
<?php
	include 'footer.php';
?>
