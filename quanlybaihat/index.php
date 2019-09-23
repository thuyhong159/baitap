<?php 
	require_once 'Controller/Controllerbaihat.php';
	$task = $_GET['task'];
	$c = new Controllerbaihat();
	$c->$task();
 ?>