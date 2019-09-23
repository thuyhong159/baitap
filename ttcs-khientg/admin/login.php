<?php
include '../config.php';
// nếu tồn tại biến send , tức là đã click nút submit
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #dedede" class="justify-content-center">
<?php
		if (isset($_POST['send'])) {
	$ten_tk = $_POST['ten_tk'];
	$matkhau = ($_POST['password']); echo $ten_tk.$matkhau;
	// kiểm tra xem có đúng thông tin đăng nhập quản trị
	$sql = "SELECT * FROM `taikhoan` WHERE username = '$ten_tk' AND password = '$matkhau'";
	$result = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($result);
	if ($num>0) {
		$_SESSION['admin']="admin";
		header('location: index.php');
	}
	else echo "Đăng nhập không thành công.";
	}
	?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4 bg-white p-4 align-self-center">
			<form method="post">
				<h2>Login</h2>
			  <div class="form-group">
			    <label for="username">Username:</label>
			    <input type="text" name="ten_tk" class="form-control">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" name="password" class="form-control">
			  </div>
			  
			  <button type="submit" name="send" class="btn btn-primary px-4">Submit</button>
			</form>

		</div>
	</div>
</div>

</body>
</html>