<?php 
	include 'header.php';
?>
<div class="container pt-5">
	<div class="row">
		<div class="col-md-4">
			<?php 
				include 'nav.php';
			?>
		</div>
		<div class="col-md-8">
			<legend>Thêm cán bộ</legend>
			<form action="index.php?task=themcb" method="POST" class="form-group">
				<input type="text" name="hoten" placeholder="Nhap ten cán bộ" class="form-control">
		 		<input type="text" name="ngaysinh" placeholder="Nhập ngày sinh !" class="form-control">
		 		<input type="text" name="quequan" placeholder="Nhập quê quán !" class="form-control">
		 		<input type="text" name="hesoluong" placeholder="Nhập hệ số lương !" class="form-control">
		 		<input type="submit" name="submit" value="Them" class="form-control bg-success btn">
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>