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
			<legend>Thêm nhân viên</legend>
			<form action="index.php?task=themnv" method="POST" class="form-group">
				<input type="text" name="hoten" placeholder="Nhập tên nhân viên" class="form-control">
		 		<input type="text" name="ngaysinh" placeholder="Nhập ngày sinh !" class="form-control">
		 		<input type="text" name="diachi" placeholder="Nhập địa chỉ !" class="form-control">
		 		<input type="submit" name="submit" value="Them" class="form-control bg-success btn">
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>