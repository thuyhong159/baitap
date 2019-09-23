<h1>Wellcome</h1>
<?php
$conn = mysqli_connect('localhost','root','','antoanweb');
    mysqli_set_charset($conn,'utf8');

 $sql ="SELECT `username`,`password` FROM `user`";
$query = mysqli_query($conn,$sql);
	return $query;
?>