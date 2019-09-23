<?php 
	require_once 'Controller/Controllersinhvien.php';
	$task = $_GET['task'];
	$c= new Controllersinhvien();
	$c->$task();
?>