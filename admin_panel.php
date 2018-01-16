<?php
	$page = 'admin_panel';
	include 'admin_header.php';
?>
<div class="body" style="<?php if($_SESSION['logged']!='01'){ echo'display:none';} ?>">
	<div class="alert">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  			Chào mừng admin website Xóm IT
	</div>
	<div class="alert">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  			Hello ad
	</div>
</div>