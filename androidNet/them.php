<?php
	 $conn=mysqli_connect("localhost","root", "","test");
	mysqli_query($conn, "SET NAMES 'utf8'");
	$hoten=$_POST["hoten"];
	
	$ngaysinh=$_POST["ngaysinh"];
	$diachi=$_POST["diachi"];
	//$ngaythangthu=$_POST["ngaythangthu"];
	
	$query="INSERT INTO nhanvien values(null, '$hoten','$ngaysinh','$diachi')";
	if(mysqli_query($conn, $query)){
		echo "success";
	}else{
		echo "error";
	}

?>