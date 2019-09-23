<?php
	class Modelbaihat {
		public function hienthi() {
			$conn = mysqli_connect("localhost", "root", "", "test");
			mysqli_set_charset($conn, "utf8");
			$data = "SELECT * FROM `baihat`";
			$result = $conn->query($data);
			return $result;
		}
		public function insert() {
			$conn = mysqli_connect("localhost", "root", "", "test");
			mysqli_set_charset($conn, "utf8");
			if(isset($_POST['submit'])) {
				$tenbh = $_POST['tenbh'];
				$thoigian = $_POST['thoigian'];
				$tacgia = $_POST['tacgia'];
				$theloai = $_POST['theloai'];

				$sql="INSERT INTO `baihat`(`tenbh`,`tacgia`,`theloai`,`thoigian`) VALUES ('$tenbh','$tacgia','$theloai','$thoigian')";

				if($conn->query($sql)) {
					return true;
				} else {
					return $conn->error;
				}
			}
		}
		public function getid($id) {
			$conn = mysqli_connect("localhost", "root", "", "test");
			mysqli_set_charset($conn, "utf8");

			$query = "SELECT * FROM baihat WHERE id= '$id'";
			$data= mysqli_query($conn,$query);
			return $data;
		}
		public function luuupdate($id) {
			$conn = mysqli_connect("localhost", "root", "", "test");
			mysqli_set_charset($conn, "utf8");
			$tenbh = $_POST['tenbh'];
	        $thoigian = $_POST['thoigian'];
	        $tacgia = $_POST['tacgia'];
	        $theloai = $_POST['theloai'];

	        $sql="UPDATE `baihat` SET `tenbh`='$tenbh',`tacgia`='$tacgia',`theloai`='$theloai',`thoigian`='$thoigian' WHERE id = '$id'";
	        if($conn->query($sql)) {
	        	return true;
	        }else {
	        	return $conn->error;
	        }
		}
		public function del($id) {
			$conn= mysqli_connect("localhost", "root", "", "test");
			$data ="DELETE FROM baihat WHERE id='$id'";

			if($conn->query($data)) {
				return true;
			}else {
				return $conn->error;
			}
		}
	}
?>