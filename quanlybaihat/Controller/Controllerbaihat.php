<?php
	require_once('Model/Modelbaihat.php');
	require_once('View/Viewbaihat.php');

	class Controllerbaihat {
		var $v;
		var $m;
		public function __construct() {
			$this->m = new Modelbaihat();
			$this->v = new Viewbaihat();
		}
		public function home() {
			$this->v->home();
		}
		public function danhsach() {
			$result = $this->m->hienthi();
			$this->v->xemds($result);
		}
		public function thembaihat() {
			$this->v->them();
		}
		public function thembh() {
			$result = $this->m->insert();
			if($result == true) {
				$this->danhsach();
			}else {
				var_dump($result);
			}
		}
		public function sua() {
			$id = $_GET['id'];
			$data = $this->m->getid($id);
			$this->v->formsua($data);
		}
		public function update() {
			$id = $_GET['id'];
			$data = $this->m->luuupdate($id);
			if($data == true) {
				$this->danhsach();
			} else{
				var_dump($data);
			}
		}
		public function delete() {
			$id = $_GET['id'];
			$data = $this->m->del($id);
			if($data == true) {
				$this->danhsach();
			}else {
				var_dump($data);
			}
		}
	}
?>