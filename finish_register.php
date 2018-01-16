<?php
	$page = 'register';
	include 'header.php';
?>
<div class="body">
	<div class="alert">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			Đăng ký thành công mời bạn đăng nhập!
	</div>
	<?php
		header('Refresh: 2; URL=login.php');
	?>
</div>
<?php
	include 'footer.php';
?>