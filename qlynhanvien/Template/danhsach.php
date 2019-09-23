<?php 
	include 'header.php';
?>
<div class="container pt-5">
	<div class="row">
		<div class="col-md-3">
 			<?php
 				include'nav.php'; 
 			 ?>
 		</div>
 		<div class="col-md-9">
 			<legend>Danh sách nhân viên</legend>
 			<div class="table-responsive">
 				<table class="table table-bordered">
		 			<tr>
		 				<th>Mã nhân viên</th>
		 				<th>Họ tên</th>
		 				<th>Ngày sinh</th>
		 				<th>Địa chỉ</th>
		 				<th>Sửa</th>
		 				<th>Xóa</th>
		 			</tr>
		 			<?php
		 				while ($row = $result->fetch_assoc()) {
		 					?>
		 					<tr>
		 						<td><?php echo $row['manv'] ?></td>
		 						<td><?php echo $row['hoten'] ?></td>
		 						<td><?php echo $row['ngaysinh'] ?></td>
		 						<td><?php echo $row['diachi'] ?></td>
		 						<td><a href="index.php?task=suanhanvien&id=<?php echo $row['manv'];?>">Edit</a></td>
		 						<td><a onclick="return confirm('Bạn có chắc muốn xóa!)'" href="index.php?task=delete&id=<?php echo $row['manv'];?>">Delete</a></td>
		 					</tr>
		 					<?php
		 				}
		 			?>
		 		</table>
 			</div>
 		</div>
	</div>
</div>