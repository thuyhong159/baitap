<?php 
  session_start();
  if(isset($_GET['dangxuat'])){
    session_unset();
  }
  if(!isset($_SESSION['ten'])){
    header('location:dangnhap.php');
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>Web quản trị</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Hover -->
   <link href="Hover/css/hover.css" rel="stylesheet" media="all">

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div>
      <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="btn hvr-grow navbar-brand" href="trangchu.php" style="font-size: 28px;
    color: orange;">Hair Salon Sầm Tư</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="">
            <span class="nav-link-text"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quanly.php">
            <span class="nav-link-text">Quản lý bảng giá dịch vụ</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="qlylichdat.php">
            <span class="nav-link-text">Quản lý lịch đặt</span>
          </a>
          
          <li class="nav-item">
            <a class="nav-link" href="quanlytaikhoan.php">
              <span class="nav-link-text">Quản lý tài khoản</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form>
              <!-- <a class="nav-link" href="dangnhap.php"> -->
                <button class="nav-link" type="submit" name="dangxuat" style="background:#212529; color: #ffffff; border: none;">
                  <i class="fa fa-fw fa-sign-out"></i>Logout
                </button>
            </form>
        </li>
      </ul>
    </div>
  </nav>

    
    <!-- content -->
    <div class="content-wrapper">
        <div class="container-fluid"> 
            <table class="table">
              <thead>
                <tr>
                  <th>idKhach</th>
                  <th>Họ tên</th>
                  <th>SDT</th>
                  <th>Yêu cầu</th>
                  <th>Yêu cầu khác</th>
                </tr>
              </thead>
              <?php
            require_once 'connect.php';
                $sql="SELECT * FROM danhsachdat";
                $query=mysqli_query($com,$sql);
                //var_dump($query); exit();
                ?>
                <?php
                while ($row=mysqli_fetch_array($query)) {
                ?>
                  <tbody>
                    <tr>
                      <td><?= $row['idK'] ?></td>
                      <td><?= $row['Hoten'] ?></td>
                      <td><?= $row['sdt'] ?></td>
                      <td><?= $row['yeucau'] ?></td>
                      <td><?= $row['yeucaukhac'] ?></td>
                    </tr>
                </tbody>
                <?php
                    }
                 ?>
            </table>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <script src="js/sb-admin.min.js"></script>    
</body>
</html>