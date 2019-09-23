<!DOCTYPE html>
<html>
<head>
	<title>Sua san pham</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Sửa sản phẩm</h2>
	<?php 
		($row = $data->fetch_assoc());{
			?>
			<form action="index.php?task=sua&id=<?php echo $row['masp']; ?>" method="POST">
				<table>
					<tr>
						<td><label>Ten san pham</label></td>
						<td><input type="text" name="tensp" value="<?php echo $row['tensp']; ?>"></td>
					</tr>
					<tr>
						<td><label>Don vi tinh</label></td>
						<td><input type="text" name="dvt" value="<?php echo $row['dvt']; ?>"></td>
					</tr>
					<tr>
						<td><label>So luong</label></td>
						<td><input type="text" name="soluong" value="<?php echo $row['soluong']; ?>"></td>
					</tr>
					<tr>
						<td><label>Don gia</label></td>
						<td><input type="text" name="dongia" value="<?php echo $row['dongia']; ?>"></td>
					</tr>
				</table>
				<div>
					<input type="submit" name="submit" value="Sua">
				</div>
			</form>
			<?php
		}
	?>
	
</body>
</html>