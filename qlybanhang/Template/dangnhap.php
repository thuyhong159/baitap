<!DOCTYPE html>
<html>
<head>
	<title>Dang nhap</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Dang nhap</h2>
	<form method="POST" action="index.php?task=dangnhap">
		<table>
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" name="username" required=""></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="password" required=""></td>
			</tr>
		</table>
		<div>
			<input type="submit" name="submit" value="LOGIN">
		</div>
	</form>

</body>
</html>