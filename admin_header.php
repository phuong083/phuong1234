<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="description" content="XomIT">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bảng quản trị | Xóm IT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
	<div class="menu">
		<ul>
			<li><a href="admin_panel.php" class="<?php if($page=='admin_panel'){echo 'active';}?>">Admin Panel</a></li>
			<li><a href="#" class="<?php if($page=='new_post'){echo 'active';}?>">Bài viết</a>
				<div class="dropdown-content">
    				<a href="new_post.php">Thêm bài viết</a>
    				<a href="#">Tất cả bài viết</a>
  				</div>
			</li>
			<li><a href="#">Thư mục</a>
				<div class="dropdown-content">
    				<a href="add_folder.php">Thêm thư mục</a>
    				<a href="all_folder.php">Tất cả thư mục</a>
  				</div>
			</li>
  			<li><a href="#">Thành viên</a>
				<div class="dropdown-content">
    				<a href="list_member.php">Danh sách thành viên</a>
    				<a href="#">Quản lý cấp bậc</a>
  				</div>
  			</li>
  			<li><a href="index.php">Thoát</a></li>	
		</ul>
	</div>
</div>