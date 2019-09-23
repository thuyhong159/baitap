<?php
// if (isset($_POST['name'])) {
	header('Content-Type:application/json');

	define('host', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'test');

	$conn = mysqli_connect(host,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($conn, 'utf8');
	$id = $_POST['id'];
	$name = $_POST['name'];
	$noidung = $_POST['noidung'];
	
	$sql = "UPDATE `ghichu` SET `name`='$name',`noidung`='$noidung' WHERE id ='$id'";
	$result = $conn->query($sql);
	if($result) {
		echo "Ok";
	}
// }
?>