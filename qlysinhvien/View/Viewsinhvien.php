<?php 
	class Viewsinhvien {
		public function home(){
			include 'Template/home.php';
		}
		public function xemds($result) {
			include 'Template/danhsach.php';
		}
		public function hienForm() {
			include 'Template/form.php';
		}
		public function formsua($data) {
			include 'Template/sua.php';
		}
	}
?>