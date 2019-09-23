<?php 
	class Modelnhanvien {
		public function __construct() {
			$this->conn= mysqli_connect("localhost", "root", "", "test");
			mysqli_set_charset($this->conn,"utf8");
		}
		public function hiends() {
			$sql = "SELECT * FROM nhanvien";
			$result = $this->conn->query($sql);
			return $result;
		}
		public function them() {
			if (isset($_POST['submit'])) {
				$hoten = $_POST['hoten'];
				$ngaysinh = $_POST['ngaysinh'];
				$diachi = $_POST['diachi'];

				$sql = "INSERT INTO `nhanvien`(`manv`, `hoten`, `ngaysinh`, `diachi`) VALUES (null,'$hoten','$ngaysinh','$diachi')";
				if($this->conn->query($sql)) {
					return true;
				}else {
					return $this->conn->error;
				}
			}
		}
		public function getId($id) {
			$sql = "SELECT * FROM nhanvien WHERE manv='$id'";
			$result = $this->conn->query($sql);
			return $result;
		}
		public function suaCB($id) {
			$hoten = $_POST['hoten'];
			$ngaysinh = $_POST['ngaysinh'];
			$quequan = $_POST['diachi'];
			$sql = "UPDATE `nhanvien` SET `hoten`='$hoten',`ngaysinh`='$ngaysinh',`diachi`='$quequan' WHERE manv='$id'";
			// var_dump($sql); exit();
			if ($this->conn->query($sql)) {
				return true;
			}
			else {
				return $this->conn->error;
			}
		}
		public function del($id) {
			$sql= "DELETE FROM `nhanvien` WHERE manv='$id'";
			if($this->conn->query($sql)) {
				return true;
			}else {
				return $this->conn->error;
			}
		}
	}
?>