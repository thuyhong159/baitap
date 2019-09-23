<?php 
	require_once 'Controller/ControllerSp.php';
	$task = $_GET['task'];
	$c = new ControllerSp();
	$c->$task();
?>