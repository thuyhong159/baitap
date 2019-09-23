<?php
if (isset($_POST['name'])) {
	header('Content-Type:application/json');

	define('host', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'test');

	$conn = mysqli_connect(host,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($conn, 'utf8');
	$name = $_POST['name'];
	$noidung = $_POST['noidung'];
	
	$sql = "INSERT INTO `ghichu` (`id`, `name`, `noidung`) VALUES (NULL, '$name', '$noidung')";
	$result = $conn->query($sql);
}
?>