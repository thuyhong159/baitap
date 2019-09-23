<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bảng giá</title>
	<link rel="stylesheet" type="text/css" href="css/banggia.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="bootstrap-3.1.1/js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- hover -->
  <link href="Hover/css/hover.css" rel="stylesheet" media="all">
</head>
<body>
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
          <a class="btn hvr-grow navbar-brand" style="color: orange; font-size: 24px; margin-left: 10px; margin-top: 12px;" href="index.html">Hair Salon Sầm Tư</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="gioithieu.html" target="_blank">Giới thiệu</a></li>
            <li><a href="web_quantri/dichvu.php">Dịch vụ</a></li>
            <li><a href="banggia.php">Bảng giá</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="search" action="web_quantri/search.php" method="get">
        <div class="form-group">
          <input type="text" class="form-control" name="searchtext" placeholder="Search">
          <button type="submit" class="btn btn-default" name="search">Tìm kiếm</button>
        </div>
      </form>
      <ul class="nav navbar-nav">
        <li><a href="datlich.php" target="_blank"">Đặt lịch</a></li>
        </div>
      </div>
      </nav>
    </div>
	<div id="container">
      <table class="table table-bodered">
        <thead>
            <tr>
                <th>Tên dịch vụ</th>
                <th>Giá</th>
              </tr>
        </thead>
        <?php
            require_once 'web_quantri/connect.php';
                $row_sql = "SELECT * FROM quanlybanggia";
                $thucthi = mysqli_query($com,$row_sql);
                //var_dump($thucthi); exit();
                while ($dulieu=mysqli_fetch_array($thucthi)) {
               ?>
        <tbody>
              <tr>
                <td><p> <?= $dulieu['tenSP'] ?></p></td>
                <td><p><?= $dulieu['gia'] ?></p></td>
              </tr>
              <?php
                    }
                 ?>
        </tbody>
      </table> 
	</div>
</body>
</html>