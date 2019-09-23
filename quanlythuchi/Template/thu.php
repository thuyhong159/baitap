<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'header.php';
		include 'nav.php';
	?>
</head>
<body>
	<div class="container col-md-6 border btn-light mt-5 " >
		<div class="container col-6">
			<form action="index.php?task=thu" method="post" ">
				<div class="form-group">
					<?php
                    	echo  "<h6 class='text-right mt-1' >Còn lại : ".$tt."</h6>"
                	?>
				</div>
				<div class="form-group">
					<label>Số tiền:</label>
                    <input type="text" class="form-control" name="sotien">
				</div>
				<div class="form-group">
                    <label for="pwd">Mô tả:</label>
                    <input type="text" class="form-control" name="mota"> 
                </div>
                <div class="form-group">
                	<label>Nhóm</label>
                	<select name="idnhomthu" class="col-12">
                		<?php 
                			while ($row = $result->fetch_assoc()) {
                				?>

                				<?php 
                					echo "<option value='$row[idnhomthu]'>$row[ten]</option>";
                			}
                		?>
                	</select>
                </div>
                <div class="form-group text-right">
                	<input type="submit" name="submit" class="btn btn-info" value="Nhập">
                </div>
			</form>
		</div>
	</div>

</body>
</html>