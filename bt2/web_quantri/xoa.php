<?php 
require_once "connect.php";

	$idSP = $_GET['idSP'];
	
	$sql = "DELETE FROM quanlybanggia WHERE idSP='$idSP'";
	mysqli_query($com,$sql);

	
	
	header('location:quanly.php');
 ?>