<?php 
	require_once "Model/Model.php";
	require_once "View/View.php";
	class Controllerkhachhang {
		var $m, $v;

		public function __construct() {
			$this->m = new Model();
			$this->v = new View();
		}

		public function xemdanhsach() {
			$result = $this->m->hiends();
			$this->v->xemds($result);
		}

		public function formthem() {
			$this->v->insert();
		}

		public function themkhachhang() {
			$result = $this->m->them();
			if($result == true) {
				$this->xemdanhsach();
			} else {
				var_dump($result);
			}
		}

		public function sua() {
			$id =$_GET['id'];
			$data= $this->m->getId($id);
			$this->v->formsua($data);
		}

		public function update() {
			$id =$_GET['id'];
			$data =$this->m->suaKH($id);
			if($data == true) {
				$this->xemdanhsach();
			} else {
				var_dump($data);
			}
		}
		public function delete() {
			$id =$_GET['id'];
			$data =$this->m->del($id);
			if ($data == true) {
				$this->xemdanhsach();
			} else{
				var_dump($data);
			}
		}
	}
?>