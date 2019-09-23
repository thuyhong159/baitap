<?php 
	require_once 'Model/Modelthuchi.php';
	require_once 'View/Viewthuchi.php';

	class Controllerthuchi {
		var $m, $v;
		public function __construct() {
			$this->m = new Modelthuchi();
			$this->v = new Viewthuchi();
		}
		public function home() {
			$this->v->home();
		}
		public function thu() {
			$username= $_SESSION["user"];
        	$this->v->hienthu($this->m->getnhomthu(),$this->m->getAvailableCount($this->m->getId($username)["iduser"]));
        	if(isset($_POST["submit"])){
	            $iduser=$this->m->getId($username)["iduser"];
	            $sotien=$_POST["sotien"];
	            $mota=$_POST["mota"];
	            $idnhomthu=$_POST["idnhomthu"];
	            $a = $this->m->addThu($sotien,$mota,$idnhomthu,$iduser);
	            // var_dump($a); exit();
	            header("Refresh:0");
			}
		}
		public function Chi() {
			$username= $_SESSION["user"];
	        $this->v->hienchi($this->m->getnhomchi(),  $this->m->getAvailableCount($this->m->getId($username)["iduser"]));
	        if(isset($_POST["submit"])){
	            $iduser=$this->m->getId($username)["iduser"];
	            $sotien=$_POST["sotien"];
	            $mota=$_POST["mota"];
	            $idnhomchi=$_POST["idnhomchi"];
	            $this->m->addChi($sotien,$mota,$idnhomchi,$iduser);

	            header("Refresh:0");
	        }
		}
		public function login() {
			$this->v->login();
		}
		public function dologin() {
			$username = $_POST['username'];
			$password=$_POST["password"];
			if($this->m->login($username,$password)) {
				$_SESSION["user"] =$username;
				header("Location: index.php?task=");
			} else {
				$this->v->login();
				echo "<div class='h5 text-center'> Sai thong tin</div>";
			}
		}
	}
?>