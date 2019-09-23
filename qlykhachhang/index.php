<?php 
	require_once "Controller/Controllerkhachhang.php";
	$task = $_GET['task'];
	$c = new Controllerkhachhang();
	$c->$task();
?>