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
 			<legend>Danh sách bài hát</legend>
 			<div class="table-responsive">
 				<table class="table table-bordered">
		 			<tr>
		 				<th>STT</th>
		 				<th>Tên sinh viên</th>
		 				<th>Lớp</th>
		 				<th>Điểm</th>
		 				<th>Năm sinh</th>
		 				<th>Tuổi</th>
		 				<th>Sửa</th>
		 				<th>Xóa</th>
		 			</tr>
		 			<?php 
		 				$i=0;
		 				
		 				while ($row = $result->fetch_assoc()) {
		 					$i++;
		 					$ns =$row['namsinh'];
		 					$tuoi= 2018-$ns;
		 					?>
		 					<tr>
		 						<td><?php echo $i ?></td>
		 						<td><?php echo $row['hoten'] ?></td>
		 						<td><?php echo $row['lop'] ?></td>
		 						<td><?php echo $row['diem'] ?></td>
		 						<td><?php echo $row['namsinh'] ?></td>
		 						<td><?php echo $tuoi ?></td>
		 						<td><a href="index.php?task=sua&id=<?php echo $row['id'];?>">Edit</a></td>
		 						<td><a onclick="return confirm('Bạn có chắc muốn xóa!)'" href="index.php?task=xoa&id=<?php echo $row['id'];?>">Delete</a></td>
		 					</tr>
		 					<?php
		 				}
		 			?>
		 		</table>
 			</div>
 		</div>
	</div>
</div>