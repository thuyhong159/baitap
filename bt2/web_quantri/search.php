<!DOCTYPE html>
<html>
<head>
	<title>Kết quả tìm kiếm</title>
	<meta charset="utf-8">
  	<style type="text/css">
  		.menu {
			height: 82px;
			width: 100%;
			box-shadow: 0px 2px 2px rgba(0,0,0,0.5); /*Đổ bóng cho menu*/
		  	position: fixed; /*Cho menu cố định 1 vị trí với top và left*/
		 	top: 0; /*Nằm trên cùng*/
		  	left: 0; /*Nằm sát bên trái*/
		  	z-index: 100000; /*Hiển thị lớp trên cùng*/
		}
		.menu ul li{
			padding: 15px;
			font-size: 16px;
		}
		.form-group{
			margin-top: 12px;
		}
		.table{
			margin-top: 100px;
			margin-left: 50px;
		}
  	</style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Slide -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
  <!-- hover -->
  <link href="Hover/css/hover.css" rel="stylesheet" media="all">
</head>
<body>
	<div id="container">
      <div class="menu">
      <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="btn hvr-grow navbar-brand" style="color: orange; font-size: 24px; margin-left: 10px; margin-top: 12px;">Hair Salon Sầm Tư</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="http://localhost:8080/Baitap/bt2/index.html">Trang chủ</a></li>
            <li><a href="http://localhost:8080/Baitap/bt2/gioithieu.html" target="_blank">Giới thiệu</a></li>
             <li><a href="dichvu.php">Dịch vụ</a></li>
            <li><a href="http://localhost:8080/Baitap/bt2/banggia.html">Bản giá</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="search" action="web_quantri/search.php" method="get">
        <div class="form-group">
          <input type="text" class="form-control" name="searchtext" placeholder="Search">
          <button type="submit" class="btn btn-default" name="search">Tìm kiếm</button>
        </div>
      </form>
      <ul class="nav navbar-nav">
        <li><a href="http://localhost:8080/Baitap/bt2/datlich.php" target="_blank"">Đặt lịch</a></li>
        </div>
      </div>
      </nav>
    </div>
    <table class="table">
    <?php
	include('connect.php');
		if(isset ( $_GET [ 'search' ])) {
	  $search=$_GET[ 'searchtext' ];
     if (empty($search)) {
                echo "<tr><td>Yêu cầu nhập dữ liệu vào ô trống</td></tr>";
            } else{
	  	$sqlsearch="SELECT * FROM `quanlybanggia` WHERE tenSP LIKE '%$search%'";
	  	$query=mysqli_query($com,$sqlsearch);
	  	?>
	  	<tr>
	  		<td><p style="font-size: 16px;"><?php echo "Tìm được ".$query->num_rows." sản phẩm.<br>";?></p></td>
	  		</tr>
	  	<?php
	  	while ($row = $query->fetch_array()) {	
	  	?>
	  	
	  	<tbody>
		<tr>
          <td><img src="<?= $row['hinhanh'] ?>" style="height: 300px; width: 200px;"></td>
          <td><?= $row['tenSP'] ?></td>
          <td><?= $row['gia'] ?></td>
     	 </tr>
    </tbody>
    <?php 
  }
		}
	}
     ?>
 </table>

</body>
</html>