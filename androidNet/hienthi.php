<?php
	header('Content-Type:application/json');

	define('host', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'test');

	$conn = mysqli_connect(host,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($conn, 'utf8');
	$sql = "SELECT * FROM ghichu";
	$result = $conn->query($sql);
	$data = [];

	while ($song = mysqli_fetch_assoc($result)) {
		$data[] = $song;
	}

	echo json_encode($data);
?>