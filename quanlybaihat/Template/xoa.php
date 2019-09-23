
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
 		<div class="col-md-6">
 		<legend>Danh sách hoạch định</legend>
		 	<div class="table-responsive">
		 		<table class="table table-bordered">
		 			<tr>
		 				<th>id</th>
		 				<th>Mục đích sử dụng</th>
		 				<th>Xem chi tiết</th>
		 			</tr>
		 			<?php 
		 				while ($data = $result->fetch_assoc()) {
		 					?>
		 					<tr>
		 						<td><?php echo $data['id'] ?></td>
		 						<td><?php echo $data['tenhd'] ?></td>
		 						<td><a href="index.php?task=danhsach&idhoachdinh=<?php echo $data['id'] ?>&tenhd=<?php echo $data['tenhd'] ?>">-></a></td>
		 					</tr>

		 					<?php
		 				}
		 			 ?>
		 		</table>
		 	</div>
	 	</div>
	 	<div class="col-md-3"></div>
 	</div>
 </div>