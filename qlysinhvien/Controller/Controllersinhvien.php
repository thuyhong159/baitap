<?php 
	require_once 'Model/Modelsinhvien.php';
	require_once 'View/Viewsinhvien.php';

	class Controllersinhvien {
		var $m, $v;

		public function __construct() {
			$this->m = new Modelsinhvien();
			$this->v =new Viewsinhvien();
		}
		public function home() {
			$data= $this->v->home();
		}
		public function xemdanhsach() {
			$result= $this->m->hiendanhsach();
			$this->v->xemds($result);
		}
		public function formthem() {
			$this->v->hienForm();
		}
		public function themsinhvien() {
			$result = $this->m->them();
			if($result == true) {
				$this->xemdanhsach();
			}else {
				var_dump($result);
			}
		}
		public function xoa() {
			$id =$_GET['id'];
			$data= $this->m->del($id);
			if ($data == true) {
				$this->xemdanhsach();
			} else {
				var_dump($data);
			}
		}
		public function sua() {
			$id = $_GET['id'];
			$data = $this->m->getId($id);
			$this->v->formsua($data);
		}
		public function update() {
			$id = $_GET['id'];
			$data = $this->m->suaSV($id);
			//var_dump($data); exit();
			if ($data == true) {
				$this->xemdanhsach();
			}else {
				var_dump($data);
			}
		}
	}
?>