<?php 
	require_once 'Model/ModelSp.php';
	require_once 'View/ViewSp.php';

	class ControllerSp {
		var $m;
		var $v;
		public function __construct() {
			$this->m = new ModelSp();
			$this->v = new ViewSp();
		}

		public function xemdanhsach() {
			$result = $this->m->layDL();
			$this->v->xemds($result);
		}
		public function them() {
			$this->v->themds();
		}

		public function themsp() {
			$check = $this->m->check();
			if($check == false) {
				echo "San pham da ton tai";
				return;
			}

			$result = $this->m->themDL();
			if($result == true) {
				$this->xemdanhsach();
			} else {
				var_dump($result);
			}
		}

		public function xoa() {
			$id = $_GET['id'];
			$data = $this->m->del($id);
			if($data == true) {
				$this->xemdanhsach();
			} else {
				var_dump($data);
			}
		}

		public function dn() {
			$this->v->formdn();
		}
		public function dangnhap() {
			$user = $_POST['username'];
			$pass = $_POST['password'];

			if($this->m->login($user,$pass)) {
				$_SESSION['username'] = $user;
				header("Location:index.php?task=them");
			} else {
				$this->v->dn();
				echo "SAI THONG TIN";
			}
		}

		public function sua() {
			$data = $this->m->getId($id);
			$this->v->formsua($data);
		}
		public function suaSp() {
			$result = $this->m->hamsua();
			if($data == true) {
				$this->xemdanhsach();
			} else {
				var_dump($data);
			}
		}
	}
?>