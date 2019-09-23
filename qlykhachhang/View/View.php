<?php 
	class View {
		public function xemds($result) {
			include "Template/danhsach.php";
		}
		public function insert() {
			include "Template/them.php";
		}
		public function formsua($data) {
			include "Template/sua.php";
		}
	}
?>