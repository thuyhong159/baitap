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
 			<legend>Danh sách cán bộ</legend>
 			<div class="table-responsive">
 				<table class="table table-bordered">
		 			<tr>
		 				<th>STT</th>
		 				<th>Họ tên</th>
		 				<th>Ngày sinh</th>
		 				<th>Quê Quán</th>
		 				<th>Hệ số lương</th>
		 				<th>Sửa</th>
		 				<th>Xóa</th>
		 			</tr>
		 			<?php 
		 				$i=0;
		 				while ($row = $result->fetch_assoc()) {
		 					$i++;
		 					?>
		 					<tr>
		 						<td><?php echo $i ?></td>
		 						<td><?php echo $row['hoten'] ?></td>
		 						<td><?php echo $row['ngaysinh'] ?></td>
		 						<td><?php echo $row['quequan'] ?></td>
		 						<td><?php echo $row['hesoluong'] ?></td>
		 						<td><a href="index.php?task=suacanbo&id=<?php echo $row['id'];?>">Edit</a></td>
		 						<td><a onclick="return confirm('Bạn có chắc muốn xóa!)'" href="index.php?task=delete&id=<?php echo $row['id'];?>">Delete</a></td>
		 					</tr>
		 					<?php
		 				}
		 			?>
		 		</table>
 			</div>
 		</div>
	</div>
</div>