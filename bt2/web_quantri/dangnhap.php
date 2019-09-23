<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="dangnhap.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Slide -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		<div class="menu">
			<img src="image/logo.jpg" style="width: 100%; height: 250px">
		</div>
		<div>
			<form action="" method="POST">

				<table>
					<tr>
						<td><label>Họ tên :</label></td>
						<td><input type="text" name="ht" required=""></td>
					<tr>
						<td><label>Mật khẩu :</label></td>
						<td><input type="password" name="pass" required=""></td>
					</tr>
					
				</table>
				<div class="gui">
					<center><input type="submit" name="submit" value="Đăng nhập"></center>
				</div>
			</form>
		</div>
		<?php 
		session_start();
		require_once "connect.php";
			if(isset($_POST['submit'])){
				$ht = $_POST['ht'];
				$pass = $_POST['pass'];
				$sql = "SELECT * FROM qlytaikhoan WHERE `username`='$ht' AND `password`='$pass'";
	// var_dump($sql);
	// exit();
				$thucthi = mysqli_query($com,$sql);
				if(mysqli_fetch_assoc($thucthi)>0){
					$_SESSION['ten']=$_POST['ht'];
					header("location:quanly.php");
				}
				else{

				echo "<script>alert('Tên đăng nhập hoặc mật khẩu chưa đúng!')</script>";
				// exit();
		//header("location:dangnhap.php");
				}
			}
		 ?>
</body>
</html>