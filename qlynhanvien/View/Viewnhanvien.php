<?php 
	class Viewnhanvien {
		public function xemds($result) {
			include 'Template/danhsach.php';
		}
		public function Formthem() {
			include 'Template/them.php';
		}
		public function formsua($data) {
			include 'Template/sua.php';
		}
	}
?>