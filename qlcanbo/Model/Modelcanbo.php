<?php 
	class Modelcanbo {
		public function __construct() {
			$this->conn= mysqli_connect("localhost", "root", "", "test");
			mysqli_set_charset($this->conn,"utf8");
		}
		public function hiends() {
			$sql = "SELECT * FROM canbo";
			$result = $this->conn->query($sql);
			return $result;
		}
		public function them() {
			if (isset($_POST['submit'])) {
				$hoten = $_POST['hoten'];
				$ngaysinh = $_POST['ngaysinh'];
				$quequan = $_POST['quequan'];
				$hesoluong = $_POST['hesoluong'];

				$sql = "INSERT INTO `canbo`(`id`, `hoten`, `ngaysinh`, `quequan`, `hesoluong`) VALUES (null,'$hoten','$ngaysinh','$quequan','$hesoluong')";
				if($this->conn->query($sql)) {
					return true;
				}else {
					return $this->conn->error;
				}
			}
		}
		public function getId($id) {
			$sql = "SELECT * FROM canbo WHERE id=$id";
			$result = $this->conn->query($sql);
			return $result;
		}
		public function suaCB($id) {
			$hoten = $_POST['hoten'];
			$ngaysinh = $_POST['ngaysinh'];
			$quequan = $_POST['quequan'];
			$hesoluong = $_POST['hesoluong'];
			$sql = "UPDATE `canbo` SET `hoten`='$hoten',`ngaysinh`='$ngaysinh',`quequan`='$quequan',`hesoluong`='$hesoluong' WHERE id='$id'";
			// var_dump($sql); exit();
			if ($this->conn->query($sql)) {
				return true;
			}
			else {
				return $this->conn->error;
			}
		}
		public function del($id) {
			$sql= "DELETE FROM `canbo` WHERE id='$id'";
			if($this->conn->query($sql)) {
				return true;
			}else {
				return $this->conn->error;
			}
		}
	}
?>