<?php
	$page = 'post';
	include 'admin_header.php';
?>
<div class="body" style="<?php if($_SESSION['logged']!='01'){ echo'display:none';} ?>">
	<form method="POST">
	<div class="all_post">
		<input type="submit" name="add_post" value="Thêm bài viết">
		<table width="100%">
			<tr>
				<td colspan="9"><h2 align="center">Danh sách tất cả thành viên:</h2></td>
			</tr>
			<tr>
				<td> Mã bài viết </td>
				<td> Tiêu đề </td>
				<td> Nội dung </td>
				<td> Ảnh đại diện </td>
				<td> Ngày viết </td>
				<td> Mã thành viên </td>
				<td> Mã thư mục </td>
				<td colspan="2"> Tác vụ </td>
			</tr>
			<?php
				$sql= "SELECT * FROM baiviet";
				$result = mysqli_query($conn,$sql);
				while ($r = mysqli_fetch_assoc($result) )
				{
					$mabaiviet = $r['MABAIVIET'];
					$tieude = $r['TIEUDE'];
					$noidung = $r['NOIDUNG'];
					$anhdaidien = $r['ANHDAIDIEN'];
					$ngayviet = $r['NGAYVIET'];
					$mathanhvien= $r['MATHANHVIEN'];
					$mathumuc = $r['MATHUMUC'];
					echo "<tr>";
					echo "<td>".$mabaiviet."</td>";
					/*Tieu de bai viet duoc rut gon lai*/
					if(strlen($tieude) > 70) 
					{ 
   						$tieuderutgon = mb_substr($tieude, 0,60, "UTF-8"); 
   						echo "<td><a href='post.php?id=".$mabaiviet."'>".$tieuderutgon."...</a><td>";
 					} 
					else
					{
						echo "<td><a href='post.php?id=".$mabaiviet."'>".$tieude."</a></td>";
					}
					/*Noi dung cua bai viet duoc rut gon lai*/
					if(strlen($noidung) > 550) 
					{ 
   						$noidungrutgon = mb_substr($noidung, 0,545, "UTF-8"); 
   						echo "<td><p>".$noidungrutgon."...</p></td>";
 					} 
					else
					{
						echo "<td><p>".$noidung."</p></td>";
					}
					echo "<td>".$anhdaidien."</td>";
					echo "<td>".$ngayviet."</td>";
					echo "<td>".$mathanhvien."</td>";
					echo "<td>".$mathumuc."</td>";
					echo "<td><input type='submit' name='delete_post' value='Xóa'></td>";
					echo "<td><input type='submit' name='edit_post' value='Sửa'></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
	</form>
	<?php 
		if(isset($_POST['delete_post']))
		{
			$sql="DELETE FROM baiviet WHERE MABAIVIET='$mabaiviet'";
			mysqli_query($conn,$sql);
			header('location:all_post.php');
		}
		if(isset($_POST['add_post']))
		{
			header('location:add_post.php');
		}
	?>
</div>
