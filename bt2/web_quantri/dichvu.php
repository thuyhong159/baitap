<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Dịch vụ</title>
  <link rel="stylesheet" type="text/css" href="css/dichvu.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Slide -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <a class="btn hvr-grow navbar-brand" style="color: orange; font-size: 24px; margin-left: 10px; margin-top: 12px;" href="/index.html">Hair Salon Sầm Tư</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="http://localhost:8080/Baitap/bt2/index.html">Trang chủ</a></li>
            <li><a href="http://localhost:8080/Baitap/bt2/gioithieu.html" target="_blank">Giới thiệu</a></li>
             <li><a href="dichvu.php">Dịch vụ</a></li>
            <li><a href="http://localhost:8080/Baitap/bt2/banggia.html">Bảng giá</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="search" action="search.php" method="get">
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
    <div class="content">
        <?php
            require_once 'connect.php';
                $row_sql = "SELECT * FROM quanlybanggia";
                $thucthi = mysqli_query($com,$row_sql);
                //var_dump($thucthi); exit();
                while ($dulieu=mysqli_fetch_array($thucthi)) {
               ?>
               <div class="anh in">
                   <img src="<?= $dulieu['hinhanh'] ?>" style="width: 200px; height: 250px;">
    
                    <p>Dịch vụ: <?= $dulieu['tenSP'] ?></p>
                    <p>Giá: <?= $dulieu['gia'] ?></p>
                 </div> 
                <?php
                    }
                 ?>
    </div>
 
</body>
</html>