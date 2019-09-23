<!DOCTYPE html>
<html>
<head>
	<title>Sua khach hang</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Sua khach hang</h2>
	<?php 
		$row= $data->fetch_assoc(); {
			?>
			<form action="index.php?task=update&id=<?php echo $row['id']; ?>" method="POST">
				<table>
					<tr>
						<td><label>Ho ten</label></td>
						<td><input type="text" name="hoten" value="<?php echo $row['hoten']; ?>"></td>
					</tr>
					<tr>
						<td><label>Ngay sinh</label></td>
						<td><input type="date" name="ngaysinh"value="<?php echo $row['ngaysinh']; ?>"></td>
					</tr>
					<tr>
						<td><label>Dia chi</label></td>
						<td><input type="text" name="diachi" value="<?php echo $row['diachi']; ?>"></td>
					</tr>
					<tr>
						<td><label>Tuoi</label></td>
						<td><input type="text" name="tuoi" value="<?php echo $row['tuoi']; ?>"></td>
					</tr>
					<tr>
						<td><label>Email</label></td>
						<td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
					</tr>
				</table>
				<div>
					<input type="submit" name="" value="Update">
				</div>
			</form>
			<?php
		}
	?>
	
</body>
</html>