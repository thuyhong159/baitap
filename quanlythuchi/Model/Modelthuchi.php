<?php 
	class Modelthuchi{

		private $conn =NULL;
		public function __construct() {
			$this->conn = mysqli_connect("localhost", "root", "", "qlthuchi");
			mysqli_set_charset($this->conn,"utf8");
		}
		 public function getAvailableCount($id) {
		    $tt=$this->getTongThu($id);
		    $tc=$this->getTongChi($id);
		    return $tt["tt"]-$tc["tt"];
	    }
	    public function getTongChi($id) {
	    	$sql = "SELECT sum(sotien) as tt FROM `tieu` WHERE iduser='$id'";
	    	$result = $this->conn->query($sql);
	    	if(!empty($result))
	    		return $result->fetch_assoc();
	    	else return false;
	    }
	    public function getTongThu($id) {
	    	$sql="SELECT  sum(sotien) as tt FROM `thu` WHERE iduser='$id'";
	    	$result = $this->conn->query($sql);
	    	if(!empty($result))
	    		return $result->fetch_assoc();
	    	else return false;
	    }
	    public function getId($username) {
	    	$sql ="SELECT iduser FROM `user` where username='$username'";
	    	$result=$this->conn->query($sql);
        	if(!empty($result)) 
        		return $result->fetch_assoc();
        	
        	else return false;
	    }
	    public function login($username,$password) {
	    	$sql="SELECT * FROM `user` where username='$username' and password='$password'";
	    	$result =$this->conn->query($sql);
	    	if($result->num_rows>0) {
	    		return true;
	    	} return false;
	    }
	    public function addThu($sotien,$mota,$idnhomthu,$iduser) {
	    	$ngay=date("Y-m-d");
        	$sql = "INSERT INTO `thu`(`idthu`, `sotien`, `mota`, `idnhomthu`, `iduser`, `ngay`) 
              VALUES (null ,$sotien,'$mota',$idnhomthu,$iduser,'$ngay') ";
        	$this->conn->query($sql);
	    }
	    public function getnhomthu() {
	    	$sql="SELECT * FROM `nhomthu`";
        	$data=$this->conn->query($sql);

        	return $data;
	    }
	    public function getnhomchi() {
	    	$sql = "SELECT * FROM `nhomchi`";
	    	$data = $this->conn->query($sql);
	    	return $data;
	    }
	}
?>