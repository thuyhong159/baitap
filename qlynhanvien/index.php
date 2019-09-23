<?php 
	require_once 'Controller/Controllernhanvien.php';
	$task = $_GET['task'];
	$c = new Controllernhanvien();
	$c->$task();
?>