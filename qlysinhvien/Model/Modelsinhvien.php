 <?php 
	class Modelsinhvien {
		private $conn =NULL;
		public function __construct() {
			$this->conn = mysqli_connect("localhost","root","","test");
			mysqli_set_charset($this->conn,"utf8");
		}
		public function hiendanhsach() {
			$sql = "SELECT * FROM sinhvien";
			$result = $this->conn->query($sql);
			return $result;
		}
		public function them() {
			if (isset($_POST['submit'])) {
				$hoten = $_POST['hoten'];
		        $lop = $_POST['lop'];
		        $diem = $_POST['diem'];
		        $namsinh = $_POST['namsinh'];

		        $sql= "INSERT INTO `sinhvien`(`hoten`, `lop`, `diem`,`namsinh`) VALUES ('$hoten','$lop','$diem','$namsinh')";
				if ($this->conn->query($sql)) {
					return true;
				}else {
					return $this->conn->error;
				}
			}
		}
		public function getId($id) {
			$sql = "SELECT * FROM sinhvien WHERE id='$id'";
			$result = $this->conn->query($sql);
			if (!$result) {
				echo $this->conn->error;
				echo "Loi"; exit();
			} else {
				return $result->fetch_assoc();
			}
		}
		public function del($id) {
			$sql= "DELETE FROM `sinhvien` WHERE id= '$id'";
			if ($this->conn->query($sql)) {
				return true;
			} else {
				return $this->conn->error;
			}
		}
		public function suaSV($id) {
			$hoten = $_POST['hoten'];
	        $lop = $_POST['lop'];
	        $diem = $_POST['diem'];
	        $namsinh = $_POST['namsinh'];

	        $sql = "UPDATE `sinhvien` SET `hoten`='$hoten',`lop`='$lop',`diem`='$diem',`namsinh`='$namsinh' WHERE id ='$id'";
	        //var_dump($sql); exit();
	        if ($this->conn->query($sql)) {
	        	return true;
	        }else {
	        	return $this->conn->error;
	        }
		}
	}	
?>