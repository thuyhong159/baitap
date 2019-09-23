<?php
	include('web_quantri/connect.php');
		if (isset($_GET['submit'])) {
			$t=$_GET['ht'];
			$sdt=$_GET['sdt'];
			$dv=$_GET['dv'];
			$yc=$_GET['yc'];
			
			$sql="INSERT INTO `danhsachdat`(`idK`, `Hoten`, `sdt`, `yeucau`, `yeucaukhac`) VALUES('','".$t."','".$sdt."','".$dv."','".$yc."')";
			mysqli_query($com, $sql);
		}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hair salon Sầm Tư</title>
	<style type="text/css">
		body{
		background-color: #2d2929;
		}
		form{
			width: 390px;
			height: 240px;
			margin: 5px;
			border-radius: 5px;
			border: 1px solid green;
			padding-top: 15px;
			padding-left: 15px;
			margin: 0 auto;
			/*margin-top: 100px;*/
			background-color: #ffffff;
		}
		label{
			text-shadow: none;
			font-weight: 600;
			max-width: 100%;
		}
		input{
			padding: 4px;
			margin-left: 7px;
			border-radius: 5px;
		}

		input[name="submit"]{
				width: 100px;
				height: 30px;
				text-align: center;
				background-color: gray;
				margin-top: 15px;
				border-radius: 5px;
		}
		textarea[name="yc"]{
				margin-left: 7px;
				border-radius: 5px;
		}
		#quaylai {
				/*margin-left: 490px;*/
				margin-top: 25px;
				text-align: center;
		}
		#quaylai a{
				text-decoration: none;
				color: #555d66;
		}
		#quaylai a:hover{
				color: #60f;
		}
	</style>
	
</head>
<body>
	<div style="text-align: center; color: orange;">
		<h2>Đặt lịch làm tóc</h2>
	</div>
	<div id="datlich">
		<form action="#" method="get">
			<table>
				<tr>
					<td><label>Họ tên :</label></td>
					<td><input type="text" name="ht" required></td>
				<tr>
					<td><label>Sdt :</label></td>
					<td><input type="tel" name="sdt" required></td>
				</tr>
				<tr>
					<td><label>Dịch vụ :</label></td>
					<td><input type="text" name="dv" required></td>
				</tr>
				<tr>
					<td><label>Yêu cầu khác :</label></td>
					<td><textarea cols="30" rows="4" name="yc" placeholder="Nhập yêu cầu khác....."></textarea></td>
				</tr>
			</table>
			<center><input type="submit" name="submit" value="Gửi"></center>
		</form>
		<p id="quaylai">
			<a href="index.html"> ← Quay lại Tạo mẫu tóc chuyên nghiệp</a><br>
		
		</p>
	</div>
</body>
</html>