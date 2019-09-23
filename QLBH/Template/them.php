<!DOCTYPE html>
<html>
<head>
	<title>Them bai hat</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Them bai hat</h2>
	<form method="POST" action="index.php?task=them">
		<table>
			<tr>
				<td><label>Ten bai hat</label></td>
				<td><input type="text" name="tenbh"></td>
			</tr>
			<tr>
				<td><label>Tac gia</label></td>
				<td><input type="text" name="tacgia"></td>
			</tr>
			<tr>
				<td><label>The loai</label></td>
				<td><input type="text" name="theloai"></td>
			</tr>
			<tr>
				<td><label>Thoi gian</label></td>
				<td><input type="text" name="thoigian"></td>
			</tr>
		</table>
		<div>
			<input type="submit" name="submit" value="Them">
		</div>

	</form>
</body>
</html>