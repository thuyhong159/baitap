<!DOCTYPE html>
<html>
<head>
	<title>Them san pham</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Them san pham</h2>
	<form action="index.php?task=themsp" method="POST">
		<table>
			<tr>
				<td>San pham</td>
				<td><input type="text" name="tensp"></td>
			</tr>
			<tr>
				<td>Ten NSX</td>
				<td><input type="text" name="mansx"></td>
			</tr>
			<tr>
				<td>Ngay san xuat</td>
				<td><input type="text" name="ngaysx"></td>
			</tr>
			<tr>
				<td>Khuyen mai</td>
				<td><input type="text" name="khuyenmai"></td>
			</tr>
		</table>
		<div>
			<input type="submit" name="submit" value="Them">
		</div>
	</form>

</body>
</html>