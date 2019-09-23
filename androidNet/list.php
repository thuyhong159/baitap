<?php
	header('Content-Type:application/json');

	// $song = ['id' => 1,
	// 'name' => 'Sau khi chia tay thi phai lam gi',
	// 'url' => 'https:zingmp3.com',
	// 'singer' => 'Trang Phap',
	// 'author' => 'Hexi'];
	// echo json_encode($song);

	define('host', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'test');

	$conn = mysqli_connect(host,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($conn, 'utf8');
	$sql = "SELECT * FROM person";
	$result = $conn->query($sql);
	$data = [];

	while ($song = mysqli_fetch_assoc($result)) {
		//echo $song['name'];
		$data[] = $song;
	}

	echo json_encode($data);
?>