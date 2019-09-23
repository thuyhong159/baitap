<!DOCTYPE html>
<html>
<head>
	<title>Them khach hang</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Them khach hang</h2>
	<form method="POST" action="index.php?task=themkhachhang">
		<table>
			<tr>
				<td><label>Ho ten</label></td>
				<td><input type="text" name="hoten"></td>
			</tr>
			<tr>
				<td><label>Ngay sinh</label></td>
				<td><input type="date" name="ngaysinh"></td>
			</tr>
			<tr>
				<td><label>Dia chi</label></td>
				<td><input type="text" name="diachi"></td>
			</tr>
			<tr>
				<td><label>Tuoi</label></td>
				<td><input type="text" name="tuoi"></td>
			</tr>
			<tr>
				<td><label>Rmail</label></td>
				<td><input type="email" name="email"></td>
			</tr>
		</table>
		<div>
			<input type="submit" name="submit" value="Them">
		</div>
	</form>

</body>
</html>