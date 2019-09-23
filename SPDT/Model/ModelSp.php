<?php 
	class ModelSp{
		public function __construct() {
			$this->conn = mysqli_connect("localhost","root","","qldt");
			mysqli_set_charset($this->conn,"utf8");
		}
		public function layDL() {
			$sql ="SELECT * FROM nhasx, sanpham 
				WHERE khuyenmai >70 AND year(ngaysx)<2018 and  year(ngaysx)>2014 
					AND nhasx.mansx=sanpham.mansx";
			$result = $this->conn->query($sql);
			return $result;
		}

		public function check() {
			$tensp =$_POST['tensp'];
			$sql ="SELECT * FROM sanpham WHERE tensp = '$tensp'";
			$m= $this->conn->query($sql);
			$num_row = $m->num_rows;
			if($num_row >0) return false;
			else return true;
		}

		public function themDL() {
			if(isset($_POST['submit'])) {
				$tensp = $_POST['tensp'];
				$mansx = $_POST['mansx'];
				$ngaysx = $_POST['ngaysx'];
				$khuyenmai = $_POST['khuyenmai'];

				$sql = "INSERT INTO `sanpham`(`tensp`,`mansx`, `ngaysx`, `khuyenmai`) 
				VALUES ('$tensp','$mansx','$ngaysx','$khuyenmai')";
				if($this->conn->query($sql)) {
					return true;
				} else {
					return $this->conn->error;
				}
			}
		}

		public function del($id) {
			$sql = "DELETE FROM `sanpham` WHERE masp = '$id'";
			if($this->conn->query($sql)) {
				return true;
			} else {
				return $this->conn->error;
			}
		}

		public function login($user,$pass) {
			if(isset($_POST['submit'])) {
				$user = $_POST['username'];
				$pass = $_POST['password'];

				$sql = "SELECT * FROM user WHERE username= '$user' AND password ='$pass'";
				$result = $this->conn->query($sql);
				if($result->num_rows == 0) {
					header("Location:index.php?task=them");
				} else {
					header("Location:index.php?task=xemdanhsach");
				}
			}
		}
	}
?>