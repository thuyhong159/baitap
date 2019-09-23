<?php 
require_once "connect.php";
// if(isset($_POST['btnxoa'])){
	$idSP = $_GET['Maso'];
	
	$sql = "DELETE FROM qlytaikhoan WHERE Maso='$idSP'";
	mysqli_query($com,$sql);

	
	
	header('location:quanlytaikhoan.php');
 
//}

?>