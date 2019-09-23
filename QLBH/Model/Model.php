<?php 
	class ModelBaiHat {
		private $conn=NULL;

			public function __construct() {
				$this->conn= mysqli_connect("localhost","root","","test");
			mysqli_set_charset($this->conn, "utf8");
			}
			

		public function hiends() {
		$sql ="SELECT * FROM `baihat`";
		$result =$this->conn->query($sql);
		return $result;
		}

		public function themds() {
			if (isset($_POST['submit'])) {
				$tenbh =$_POST['tenbh'];
				$tacgia =$_POST['tacgia'];
				$theloai =$_POST['theloai'];
				$thoigian =$_POST['thoigian'];

				$sql= "INSERT INTO `baihat`(`id`, `tenbh`, `tacgia`, `theloai`, `thoigian`) VALUES (null,'$tenbh','$tacgia','$theloai','$thoigian')";

				if($this->conn->query($sql)) {
					return true;
				} else {
					return $this->conn->error;
				}
			}
		}

		public function getId($id) {
			$sql= "SELECT * FROM `baihat` WHERE id= '$id'";
			$result =$this->conn->query($sql);
			return $result;
		}

		public function suaBH($id) {
			$tenbh =$_POST['tenbh'];
				$tacgia =$_POST['tacgia'];
				$theloai =$_POST['theloai'];
				$thoigian =$_POST['thoigian'];

			$sql ="UPDATE `baihat` SET `tenbh`='$tenbh',`tacgia`='$tacgia',`theloai`='$theloai',`thoigian`=$thoigian WHERE id= '$id'";

			if ($this->conn->query($sql)) {
				return true;
			} else {
				return $this->conn->error;
			}
		}

		public function del($id) {
			$sql ="DELETE FROM `baihat` WHERE id= '$id'";
			if($this->conn->query($sql)) {
				return true;
			} else {
				return $this->conn->error;
			}
		}
	}

?>