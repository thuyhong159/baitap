<?php 
	require_once 'Controller/Controllercanbo.php';
	$task = $_GET['task'];
	$c = new Controllercanbo();
	$c->$task();
?>