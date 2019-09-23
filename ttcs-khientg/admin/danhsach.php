<?php
include '../config.php';
// nếu tồn tại biến send , tức là đã click nút submit
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>DS</title>
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
  <h2>Danh sách tin</h2>
        
  <table class="table table-bordered">
    <thead>
      <tr>
      	<th>STT</th>
        <th>Thể loại</th>
        <th>Tiêu đề</th>
        <th>Tóm Tắt</th>
        <th>Nội dung</th>
        <th>Hình Ảnh</th>
        <th>Ngày đăng</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	<?php
    // lay du lieu va hien thi tat ca cac tin theo thu tu moi nhat.
	$sql = "SELECT tin.*, theloai.ten_theloai FROM `tin`,theloai WHERE theloai.id_theloai=tin.id_theloai  ORDER BY id_tin DESC";
	$result = mysqli_query($conn,$sql);
	$stt =0;
	while ($row = mysqli_fetch_assoc($result)) {
		# code...
	$stt++;
	?>
      <tr>
        <td><?php echo $stt; ?></td>
        <td><?php echo $row['ten_theloai']; ?></td>
        <td><?php echo $row['tieude']; ?></td>
        <td><?php echo $row['tomtat']; ?></td>
        <td><div style="width: 500px; height: 150px; overflow: scroll;"><?php echo $row['noidung']; ?></div></td>
        <td><img style="width: 90px; height: 90px;" src="../<?php echo $row['url_hinhanh']; ?>" class="rounded"></td>
        <td><?php echo $row['ngaydang']; ?></td>
        <td><a href="xoa.php?id=<?php echo $row['id_tin']; ?>" onclick="return confirm()">Xoa</a></td>
        <td><a href="sua.php?id=<?php echo $row['id_tin']; ?>">Sua</a></td>
      </tr>
      <?php
      	}
      ?>
    </tbody>
  </table>
</div>
<script>
  ham hoi xem co dong y xoa
  function confirm() {
    return confirm("Bạn muon xoa khong?");
  }
</script>
</body>
</html>