<?php
	header('Content-Type:application/json');

	define('host', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'test');

	$conn = mysqli_connect(host,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($conn, 'utf8');

	$id = $_POST["id"];
	$sql = "DELETE FROM ghichu WHERE id ='$id'";
	$result = $conn->query($sql);
	if($result) {
		echo "Ok";
	}
?>