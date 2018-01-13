<?php
   	session_start();
   	if(isset($_SESSION['logged']))
   	{
   		unset($_SESSION['logged']);
   	}  
   	header("location:index.php");
   	/*echo 'Bạn đã xóa session';
   	header('Refresh: 2; URL=index.php');*/
?>

