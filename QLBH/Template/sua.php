<!DOCTYPE html>
<html>
<head>
	<title>Sua bai hat</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Sua bai hat</h2>
	<?php 
		$row= $data->fetch_assoc(); {

	?>
	<form method="POST" action="index.php?task=update&id=<?php echo $row['id']; ?>">
		<table>
			<tr>
				<td><label>Ten bai hat</label></td>
				<td><input type="text" name="tenbh" value="<?php echo $row['tenbh']; ?>"></td>
			</tr>
			<tr>
				<td><label>Tac gia</label></td>
				<td><input type="text" name="tacgia" value="<?php echo $row['tacgia']; ?>"></td>
			</tr>
			<tr>
				<td><label>The loai</label></td>
				<td><input type="text" name="theloai" value="<?php echo $row['theloai']; ?>"></td>
			</tr>
			<tr>
				<td><label>Thoi gian</label></td>
				<td><input type="text" name="thoigian" value="<?php echo $row['thoigian']; ?>"></td>
			</tr>
		</table>
		<div>
			<input type="submit" name="submit" value="Update">
		</div>

	</form>
	<?php 
		}
	?>
</body>
</html>