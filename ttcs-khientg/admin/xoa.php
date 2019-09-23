<?php
require '../config.php';
if (isset($_GET['id'])) {
	$id_tin = $_GET['id'];
	$sql = "DELETE FROM `tin` WHERE `tin`.`id_tin` = $id_tin";
	$result = mysqli_query($conn,$sql);
	header('location: danhsach.php');
}
?>