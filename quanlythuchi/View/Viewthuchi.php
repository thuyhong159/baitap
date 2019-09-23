<?php 
	/**
	 * 
	 */
	class Viewthuchi
	{
		
		public function home() {
			include 'Template/home.php';
		}
		public function login() {
			include 'Template/dangnhap.php';
		}
		public function hienthu($result,$tt) {
			include 'Template/thu.php';
		}
		public function hienchi($result,$tt) {
			include 'Template/chi.php';
		}
	}
?>