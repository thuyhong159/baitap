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
	$phone = $_POST['phone'];
	
	$sql = "INSERT INTO `person` (`id`, `name`, `phone`) VALUES (NULL, '$name', '$phone')";
	$result = $conn->query($sql);
}
?>