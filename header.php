<?php
	session_start();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="description" content="XomIT">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Xóm IT | Cộng đồng IT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!--Phan dau tien-->
<div class="header">
	<!--Phan logo,banner-->
	<div class="banner">
		<a href="index.php"><img src="images/logo.png" alt="XomIT"></a>
		<a href="index.php" style="margin-left: 50px;"><img src="images/banner.png" alt="XomIT"></a>
	</div>
	<!--Thanh menu-->
	<div class="menu" id="navbar">
		<ul>
			<li><a href="index.php" class="<?php if($page=='index'){echo 'active';}?>">Trang chủ</a></li>
			<li><a href="#">Lập trình</a>
				<div class="dropdown-content">
    				<a href="#">Website</a>
    				<a href="#">Application</a>
    				<a href="#">Game</a>
  				</div>
			</li>
			<li><a href="#">Công cụ</a>
				<div class="dropdown-content">
    				<a href="#">Office</a>
    				<a href="#">Chỉnh sửa hình ảnh</a>
    				<a href="#">Xây dựng video</a>
    				<a href="#">Khác</a>
  				</div>
			</li>
  			<li><a href="#">Mạng máy tính</a>
				<div class="dropdown-content">
    				<a href="#">Quản trị mạng</a>
    				<a href="#">Bảo mật thông tin</a>
    				<a href="#">Truyền dữ liệu</a>
  				</div>
  			</li>
  			<li><a href="#">Mẹo vặt</a></li>	
		</ul>
		<div class="menuright">
			<ul>
				<li><a href="login.php"  class="<?php if($page=='login'){echo 'active';}?>" style="<?php if(isset($_SESSION['logged'])){echo'display: none';}?>">Đăng nhập</a></li>
				<li><a href="register.php"  class="<?php if($page=='register'){echo 'active';}?>" style="<?php if(isset($_SESSION['logged'])){echo'display: none';}?>">Đăng ký</a></li>
				<li><a href="profile.php" class="<?php if($page=='register'){echo 'active';}?>" style="<?php if(!isset($_SESSION['logged'])){echo'display: none';}?>">Thành viên</a>
					<div class="dropdown-content" style="min-width: 153px;">
    				<a href="#">Thông tin cá nhân</a>
    				<a href="admin_panel.php" style="<?php if($_SESSION['logged']!='01'){ echo'display:none';} ?>">Bảng quản trị</a>
    				<a href="logout.php">Đăng xuất</a>
  				</div>
				</li>
			</ul>
		</div>	
	</div>
</div>