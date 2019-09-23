
<?php 
	include'header.php';
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
		 				<th>Tên bài hát</th>
		 				<th>Tác giả</th>
		 				<th>Thể loại</th>
		 				<th>Độ dài</th>
		 				<th>Sửa</th>
		 				<th>Xóa</th>
		 			</tr>
		 			<?php 
		 			$i =0;
		 			
		 				while ($row = $result->fetch_assoc()) {
		 					$i++;
		 					?>
		 					<tr>
		 						<td><?php echo $i ?></td>
		 						<td><?php echo $row['tenbh'] ?></td>
		 						<td><?php echo $row['tacgia'] ?></td>
		 						<td><?php echo $row['theloai'] ?></td>
		 						<td><?php echo $row['thoigian'] ?></td>
		 						<td><a href="index.php?task=sua&id=<?php echo $row['id'];?>">Edit</a></td>
		 						<td><a onclick="return confirm('Bạn có chắc muốn xóa !')" href="index.php?task=delete&id=<?php echo $row['id'];?>">Delete</a></td>
		 					</tr>

		 					<?php
		 				}
		 			 ?>
		 		</table>
		 	</div>
	 	</div>
 	</div>
 </div>