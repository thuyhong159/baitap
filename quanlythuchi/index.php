<?php 
	require_once 'Controller/Controllerthuchi.php';
	session_start();
	$c = new Controllerthuchi();
	if (isset($_SESSION['user'])) {
		if(isset($_GET['task'])) {
			$task=$_GET["task"];
        switch ($task){
            case  "thu" :
                $c->thu();
                break;
            case "chi":
                $c->chi();
                break;
            case  "thongke":
                $c->thongke();
                break;
            case  "baocao":
                $c->baocao();
                break;
            case "hoachdinh":
            	$c->hoachdinh();
            	break;
            default :
                $c->home();
        }
			
		}else {
			$c->home();
		}
		
	}else {
		if(isset($_GET["task"])){
        	$c->dologin();
    	}else {
        	$c->login();
    	}
    }

	
?>