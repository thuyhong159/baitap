<?php 
	require_once "Controller/ControllerBanHang.php";
	$task= $_GET['task'];
	$c= new ControllerBanHang();
	$c->$task();
?>