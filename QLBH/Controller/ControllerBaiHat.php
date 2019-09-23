<?php 
	require_once "Model/Model.php";	
	require_once "View/View.php";
	class ControllerBaiHat {
		var $m, $v;

		public function __construct() {
			$this->m = new ModelBaiHat();
			$this->v = new ViewBaiHat();
		}	

		public function xemdanhsach() {
			$result = $this->m->hiends();
			$this->v->xemds($result);
		}

		public function themdanhsach() {
			$this->v->formthem();
		}

		public function them() {
			$result= $this->m->themds();
			if($result == true) {
				$this->xemdanhsach();
			} else {
				var_dump($result);
			}
		}

		public function sua() {
			$id=$_GET['id'];
			$data= $this->m->getId($id);
			$this->v->formsua($data);
		}

		public function update() {
			$id=$_GET['id'];
			$data= $this->m->suaBH($id);
			if($data == true) {
				$this->xemdanhsach();
			} else {
				var_dump($data);
			}
		}

		public function delete() {
			$id= $_GET['id'];
			$result= $this->m->del($id);
			if($result == true) {
				$this->xemdanhsach();
			} else {
				var_dump($result);
			}
		}
	}

	
?>