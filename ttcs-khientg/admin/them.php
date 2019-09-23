<?php
include '../config.php';
// nếu tồn tại biến send , tức là đã click nút submit
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Them</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #dedede" class="justify-content-center">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">ADMIN</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="danhsach.php">Danh Sách</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="them.php">Thêm Tin</a>
    </li>

  </ul>
</nav>
<div class="container">
	<legend>THÊM TIN</legend>
<?php
// neu nguoi dung clikc nut sumit thi se thuc hien cac lenh sau
if (isset($_POST['send'])) {
	$ma_tl = $_POST['ma_tl'];
	$tieu_de = $_POST['tieude'];
	$tomtat = $_POST['tomtat'];
	$noidung = $_POST['noidung'];
	$ngaydang = $_POST['ngaydang'];
	
	// phan xu ly anh
	if($_FILES['file']['name'] != NULL){ // Đã chọn file
		        // Tiến hành code upload file
	        if($_FILES['file']['type'] == "image/jpeg"
	        || $_FILES['file']['type'] == "image/png"
	        || $_FILES['file']['type'] == "image/gif"){
	        // là file ảnh
	        // Tiến hành code upload    

	            if($_FILES['file']['size'] > 1048576){
	                echo "File không được lớn hơn 1mb";
	            }else{
	                // file hợp lệ, tiến hành upload
	                $path = "../img/"; // file sẽ lưu vào thư mục img
	                $tmp_name = $_FILES['file']['tmp_name'];
	                $name = $_FILES['file']['name'];
	                $type = $_FILES['file']['type']; 
	                $size = $_FILES['file']['size']; 
	                // Upload file
	                
	               
	           }
	        }else{
	           // không phải file ảnh
	           echo "Kiểu file không hợp lệ";
	           die();
	        }
	   }else{
	        echo "Bạn chưa chọn ảnh";
	        exit();
	   }

	$urlHinh = "img/".$name;
	$sql = "INSERT INTO `tin` (`id_tin`, `id_theloai`, `tieude`, `tomtat`, `noidung`, `url_hinhanh`, `ngaydang`) VALUES (NULL, '$ma_tl', '$tieu_de', '$tomtat', '$noidung', '$urlHinh', '$ngaydang')";
	$result = mysqli_query($conn,$sql);
	move_uploaded_file($tmp_name,$path.$name); //up file ảnh vào thư mục img
	if ($result) {
		echo "Thành công.";
	}else echo "Thất bại";
}
?>
<form action="them.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email">Thể loại:</label>
    <select class="form-control" id="sel1" name="ma_tl">
    	<?php
    	// lấy danh sách các danh mục
    		$sql = "SELECT * FROM `theloai`";
    		$result = mysqli_query($conn,$sql);
    		while ($row = mysqli_fetch_assoc($result)) {
    			echo '<option value="'.$row["id_theloai"].'">'.$row["ten_theloai"].'</option>';
    		}
    	?>
	    
	    

  	</select>
  </div>
  <div class="form-group">
    <label for="tieude">Tiêu đề:</label>
    <input type="text" class="form-control" id="tieude" name="tieude" required="">
  </div>
  <div class="form-group">
    <label for="tomtat">Tóm tắt:</label>
    <input type="text" class="form-control" id="tomtat" name="tomtat" required="">
  </div>
  <div class="form-group">
	  <label for="chitiet">Nội dung:</label>
	  <textarea class="form-control" rows="5"  name="noidung" required=""></textarea>
</div>
  <div class="form-group">
    <label for="ngaydang">Ngày đăng:</label>
    <input type="date" class="form-control" id="ngaydang" name="ngaydang" required="">
  </div>
  <div class="form-group">
      <input type="file" class="form-control-file border" name="file" required="">
    </div>
  <button type="submit" class="btn btn-primary" name="send">Thêm</button>
</form>


</div>

</body>
</html>