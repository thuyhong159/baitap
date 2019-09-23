<?php 
	class ModelBanHang {
		public function __construct() {
			$this->conn =mysqli_connect("localhost", "root","","qlbanhang2");
			mysqli_set_charset($this->conn,"utf8");
		}

		public function layDS() {
			$sql = "SELECT * FROM sanpham,chitiethoadon WHERE soluong >10 AND sanpham.masp=chitiethoadon.masp";
			$result= $this->conn->query($sql);
			return $result;
		}
		public function themds() {

			if (isset($_POST['submit'])) {
				$tensp= $_POST['tensp'];
				$dvt= $_POST['dvt'];
				
				
				$sql = "INSERT INTO `sanpham`(`tensp`, `dvt`) VALUES ('$tensp','$dvt')"; 
				
				if($this->conn->query($sql)) {
					return true;
				} else{
					return $this->conn->error;
				}
			}
		}
		public function check() {
			$tensp =$_POST['tensp'];
			$sql ="SELECT * FROM sanpham WHERE tensp ='$tensp'";
			$m = $this->conn->query($sql);
			
			$num_row = $m->num_rows;
			if($num_row >0) return false;
			else return true;
		}
		
		public function getId() {
			$id = $_GET['id'];
			$sql ="SELECT * FROM chitiethoadon,sanpham WHERE chitiethoadon.masp= sanpham.masp AND sanpham.masp ='$id'";

			$result = $this->conn->query($sql);
			return $result;
		}
		public function hamsua() {
			$id = $_GET['id'];
			$this->suaSP($id);
			$this->suaSP2($id);
			return true;
		}
		public function suaSP($id) {
			$tensp = $_POST['tensp'];
			$dvt = $_POST['dvt'];
			
			$sql = "UPDATE `sanpham` SET `tensp`='$tensp',`dvt`='$dvt' WHERE masp = '$id'";
			
			if($this->conn->query($sql)) {
				return true;
			} else {
				$this->conn->error;
			}

		}
		public function suaSP2($id) {
			$soluong = $_POST['soluong'];
			$dongia = $_POST['dongia'];
			$sql2 = "UPDATE `chitiethoadon` SET `soluong`='$soluong',`dongia`='$dongia' WHERE chitiethoadon.masp = '$id'";
			
			if($this->conn->query($sql2)) {
				return true;
			} else {
				$this->conn->error;
			}
		}

		public function dn($user,$pass) {
			if(isset($_POST['submit'])) {
				$user = $_POST['username'];
				$pass = $_POST['password'];

				$sql = "SELECT * FROM `user` WHERE username ='$user' AND $pass = '$pass'";
				$result = $this->conn->query($sql);
				if($result->num_rows== 0) {
					header("Location:index.php?task=xemdanhsach");
				} else {
					header("Location:index.php?task=home");
				}
			}
		}
		
		public function xoads($id) {
			$sql = "DELETE FROM chitiethoadon WHERE masp ='$id'";
			if($this->conn->query($sql)) {
				return true;
			} else {
				return $this->conn->error;
			}
		}	
			

		// 	if($result->num_rows>0) {
		// 		return true;
		// 	}
		// 		return false;
		// }
	}
?>