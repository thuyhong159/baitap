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
		<div class="col-md-4">
			<legend>Thêm bài hát</legend>
			<form action="index.php?task=thembh" method="POST" class="form-group">
				<input type="text" name="tenbh" placeholder="Nhap ten bai hat" class="form-control">
		 		<input type="text" name="tacgia" placeholder="Nhập tác giả bài hát !" class="form-control">
		 		<input type="text" name="theloai" placeholder="Nhập thể loại bài hát !" class="form-control">
		 		<input type="text" name="thoigian" placeholder="Nhập độ dài bài hát !" class="form-control">
		 		<input type="submit" name="submit" value="Them" class="form-control bg-success btn">
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>