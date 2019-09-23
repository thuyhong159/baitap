<?php 
	require_once('Model/Modelnhanvien.php');
	require_once('View/Viewnhanvien.php');

	class Controllernhanvien {
		var $m, $v;

		public function __construct() {
			$this->m = new Modelnhanvien();
			$this->v = new Viewnhanvien();
		}
		public function xemdanhsach() {
			$result = $this->m->hiends();
			$this->v->xemds($result);
		}
		public function themnhanvien() {
			$this->v->Formthem();
		}
		public function themnv() {
			$result = $this->m->them();
			if($result == true) {
				$this->xemdanhsach();
			}else {
				var_dump($result);
			}
		}
		public function suanhanvien() {
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