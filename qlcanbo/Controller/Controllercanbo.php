<?php 
	require_once('Model/Modelcanbo.php');
	require_once('View/Viewcanbo.php');

	class Controllercanbo {
		var $m, $v;

		public function __construct() {
			$this->m = new Modelcanbo();
			$this->v = new Viewcanbo();
		}
		public function xemdanhsach() {
			$result = $this->m->hiends();
			$this->v->xemds($result);
		}
		public function themcanbo() {
			$this->v->Formthem();
		}
		public function themcb() {
			$result = $this->m->them();
			if($result == true) {
				$this->xemdanhsach();
			}else {
				var_dump($result);
			}
		}
		public function suacanbo() {
			$id = $_GET['id'];
			$data = $this->m->getId($id);
			$this->v->formsua($data);
		}
		
		public function sua() {
			$id = $_GET['id'];
			$data = $this->m->suaCB($id);
			if($data == true) {
				$this->xemdanhsach();
			}else {
				var_dump($data);
			}
		}
		public function delete() {
			$id = $_GET['id'];
			$data = $this->m->del($id);
			if ($data == true) {
				$this->xemdanhsach();
			}else {
				var_dump($data);
			}
		}

	}
?>