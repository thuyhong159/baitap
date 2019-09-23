<?php 
	class Model {
		private $conn = NULL;
		public function __construct() {
			$this->conn = mysqli_connect("localhost", "root", "", "test");
			mysqli_set_charset($this->conn, "utf8");
		}
		
		public function hiends(){
			$sql = "SELECT * FROM khachhang";
			$result = $this->conn->query($sql);
			return $result;
		}

		public function them() {
			if (isset($_POST['submit'])) {
					$hoten =$_POST['hoten'];
					$ngaysinh =$_POST['ngaysinh'];
					$diachi =$_POST['diachi'];
					$tuoi =$_POST['tuoi'];
					$email =$_POST['email'];
			
				$sql ="INSERT INTO `khachhang`(`id`, `hoten`, `ngaysinh`, `diachi`, `tuoi`, `email`) VALUES (null,'$hoten','$ngaysinh','$diachi','$tuoi','$email')";
				if ($this->conn->query($sql)) {
					return true;
				} else {
					return $this->conn->error;
				}
			}
		}

		public function getId($id) {
			$sql ="SELECT * FROM `khachhang` WHERE id='$id'";
			$result =$this->conn->query($sql);
			return $result;
		}
		public function suaKH($id) {
			$hoten =$_POST['hoten'];
			$ngaysinh =$_POST['ngaysinh'];
			$diachi =$_POST['diachi'];
			$tuoi =$_POST['tuoi'];
			$email =$_POST['email'];

			$sql ="UPDATE `khachhang` SET `hoten`='$hoten',`ngaysinh`='$ngaysinh',`diachi`='$diachi',`tuoi`='$tuoi',`email`='$email' WHERE id='$id'";
			if($this->conn->query($sql)) {
				return true;
			} else {
				return $this->conn->error;
			}
		}

		public function del($id) {
			$sql ="DELETE FROM `khachhang` WHERE id='$id'";
			if($this->conn->query($sql)) {
				return true;
			} else {
				return $this->con->error;
			}
		}
	}
?>