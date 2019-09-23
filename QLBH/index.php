<?php 
	require_once "Controller/ControllerBaiHat.php";
	$task= $_GET['task'];
	$c= new ControllerBaiHat();
	$c->$task();
?>