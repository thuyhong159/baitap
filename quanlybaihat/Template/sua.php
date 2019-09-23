<?php 
	include'header.php';
 ?>
 <div class="container pt-5">
 	<div class="row">
 		<div class="col-md-4">
 			<?php
 				include'nav.php'; 
 			 ?>
 		</div>
 		<?php 
          while($row = $data->fetch_assoc()){
              
         ?>
 		<div class="col-md-4">
 		<legend>Sửa thông tin bài hát</legend>
		 	<form action="index.php?task=update&id=<?php echo $row['id'];?>" method="POST" class="form-group">
		 		<input type="text" name="tenbh" placeholder="Nhập tên bài hát !" value="<?php echo $row['tenbh'] ?>" class="form-control">
		 		<input type="text" name="tacgia" placeholder="Nhập tác giả bài hát !" value="<?php echo $row['tacgia'] ?>" class="form-control">
		 		<input type="text" name="theloai" placeholder="Nhập thể loại bài hát !" value="<?php echo $row['theloai'] ?>" class="form-control">
		 		<input type="text" name="thoigian" placeholder="Nhập độ dài bài hát !" value="<?php echo $row['thoigian'] ?>" class="form-control">
		 		<input type="submit" name="submit" value="Save" class="form-control bg-success btn">
		 	</form>
	 	</div>
	 	<?php
	 		} 
	 	 ?>
	 	<div class="col-md-4"></div>
 	</div>
 </div>