<?php 
	require_once "connect.php";
	// if(isset($_POST['btnsua'])){
		$ipSP = $_GET['Maso'];
		$tenSP = $_POST['tenSP'];
		$gia = $_POST['gia'];

		$sql = "UPDATE qlytaikhoan SET username='$tenSP', password='$gia' WHERE Maso='$ipSP'";
			mysqli_query($com,$sql);
			
		// }
		?> 
		<script type="text/javascript">
              	window.location="http://localhost:8080/Baitap/bt2/web_quantri/quanlytaikhoan.php";
              </script>	