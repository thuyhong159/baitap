<!DOCTYPE html>
<html>
<head>
	<title>Dang nhap</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Moi ban dang nhap</h2>
	<form action="index.php?task=dangnhap" method="POST">
		<table>
			<tr>
				<td>User name</td>
				<td><input type="text" name="user" required=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required=""></td>
			</tr>
		</table>
		<div>
			<input type="submit" name="submit" value="LOGIN">
		</div>
	</form>

</body>
</html>