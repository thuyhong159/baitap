<?php 
	class ViewBaiHat {
		public function xemds($result) {
			include "Template/danhsach.php";
		}
		public function formthem() {
			include "Template/them.php";
		}
		public function formsua($data) {
			include "Template/sua.php";
		}
	}
?>