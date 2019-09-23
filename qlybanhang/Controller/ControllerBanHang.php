<?php 
	require_once "Model/ModelBanHang.php";
	require_once "View/View.php";
	class ControllerBanHang {
		var $m;
		var $v;
		public function __construct() {
			$this->m= new ModelBanHang();
			$this->v= new ViewBanHang();
		}
		public function xemdanhsach() {
			$result= $this->m->layDS();
			$this->v->xemds($result);
		}
		public function them() {
			$this->v->formthem();
		}
		public function themsp() {
			$check= $this->m->check();
			if($check == false) {
				echo "Ten bi trung";
				return;
			}
			$result = $this->m->themds();
			if ($result == true) {
				$this->xemdanhsach();
			} else {
				var_dump($result);
			}
		}

		public function suaSp() {
			
			$result = $this->m->getId();
			$this->v->formsua($result);
		}
		public function sua() {
			
			$data = $this->m->hamsua();
			if($data == true) {
				$this->xemdanhsach();
			} else {
				var_dump($data);
			}
		}

		public function xoa() {
			$id= $_GET['id'];
			$data = $this->m->xoads($id);
			if($data == true) {
				$this->xemdanhsach();
			} else {
				var_dump($data);
			}
		}

		public function login() {
			$this->v->formdn();
		}
		public function dangnhap() {
			$user = $_POST['username'];
			$pass = $_POST['password'];

			if($this->m->dn($user,$pass)) {
				$_SESSION['username'] = $user;
				header("Location:index.php?task=xemdanhsach"); 
			} else {
				$this->v->login();
				echo "SAI THONG TIN";
			}
		}
	}
?>