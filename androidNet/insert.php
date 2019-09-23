<?php
	 $conn=mysqli_connect("localhost","root", "","test");
	mysqli_query($conn, "SET NAMES 'utf8'");
	$tensinhvien=$_POST["tennv"];
	$gioitinh=$_POST["gioitinh"];
	
	$ngaysinh=$_POST["ngaysinh"];
	$chucvu=$_POST["chucvu"];
	//$ngaythangthu=$_POST["ngaythangthu"];
	
	$query="INSERT INTO androidnhanvien values(null, '$tensinhvien','$gioitinh', '$ngaysinh','$chucvu')";
	if(mysqli_query($conn, $query)){
		echo "success";
	}else{
		echo "error";
	}

?>