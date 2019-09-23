<?php 
	class Viewbaihat {
		public function home() {
			include 'Template/home.php';
		}
		public function xemds($result) {
			include 'Template/danhsach.php';
		}
		public function them() {
			include 'Template/them.php';
		}
		public function formsua($data) {
			include 'Template/sua.php';
		}
	}
?>