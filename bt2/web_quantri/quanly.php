<?php 
  session_start();
  var_dump($_SESSION);
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
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
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
              <!-- <a class="nav-link" href="dangnhap.php"></a> -->
                <button class="nav-link" type="submit" name="dangxuat" style="background:#212529; color: #ffffff; border: none;">
                  <i class="fa fa-fw fa-sign-out"></i>Logout
                </button>
            </form>
            
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Button trigger modal -->
          <div>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Thêm mới dịch vụ
              </button>  
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm dịch vụ mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên dịch vụ: </label>
                            <input type="text" class="form-control" id="recipient-name" name="tendv" required="">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Giá dịch vụ: </label>
                            <input type="text" class="form-control" id="recipient-name" name="giadv" required="">
                          </div>
                          <div class="div-file">
                            Chọn ảnh: <input type="file" name="img">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit" class="btn btn-primary">Save </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <?php 
            require_once ('connect.php');
            if(isset($_POST['submit'])){
              $tendv = $_POST['tendv'];
              $giadv = $_POST['giadv'];

              if(($_FILES['img']['type']!="image/gif")&&($_FILES['img']['type']!="image/png")&&($_FILES['img']['type']!="image/jpg")&&($_FILES['img']['type']!="image/jpeg")){
                $message = "File khong dung dinh dang";
              }
              elseif ($_FILES['img']['size']>2000000) {
                $message = "Kich co anh phai nho hon 2MB";
                # code...
              }
              elseif ($_FILES['img']['size']=="") {
                $message = "Ban chua chon anh";
              }
              else{
                $img = $_FILES['img']['name'];
                $link = 'upload/'.$img;
                move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$img);
              }
              $sql = "SELECT * FROM quanlybanggia WHERE tenSP = '$tendv'";

              $kt = mysqli_query($com,$sql);
              //var_dump($kt);exit();
              if(mysqli_num_rows($kt)>0){
                echo "<script>alert('Đã tồn tại dịch vụ này!')</script>";
                exit();
              }
              else{
                $sqla = "INSERT INTO quanlybanggia(hinhanh,tenSP,gia) VALUES ('$link','$tendv','$giadv')";
                //var_dump($sqla);exit();
                mysqli_query($com,$sqla);
                ?>
                <script type="text/javascript">
                  window.location = "http://localhost:8080/Baitap/bt2/web_quantri/quanly.php";
                </script>
                <?php 
              }
            }
            ?>


            <table class="table table-bodered" style="">
              <thead>
                <tr>
                  <th>Tên dịch vụ</th>
                  <th>Giá dịch vụ</th>
                  <th>Ảnh minh họa</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <?php 
                $row_sql = "SELECT * FROM quanlybanggia";
                $thucthi = mysqli_query($com,$row_sql);
                // var_dump($thucthi); exit();
                while ($dulieu=mysqli_fetch_array($thucthi)) {
               ?>
              <tbody>
                <tr>
                  <td><?= $dulieu['tenSP'] ?></td>
                  <td><?= $dulieu['gia'] ?></td>
                  <td><img src="<?= $dulieu['hinhanh'] ?>" style="width: 200px; height: 250px;"></td>
                  <td>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?= $dulieu['idSP'] ?>">
                  Sửa
              </button>  
              <div class="modal fade" id="<?= $dulieu['idSP'] ?>">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h5 class="modal-title" id="<?= $dulieu['idSP'] ?>">Sửa dịch vụ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="sua.php?idSP=<?= $dulieu['idSP'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên dịch vụ: </label>
                            <input type="text" class="form-control" id="recipient-name" name="tenSP" required="" value="<?= $dulieu['tenSP'] ?>">
                          </div>
                          <div class="" style="display: none;"><?= $dulieu['idSP'] ?></div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Giá dịch vụ: </label>
                            <input type="text" class="form-control" id="recipient-name" name="gia" required="" value="<?= $dulieu['gia'] ?>">
                          </div>
                          <div class="div-file">
                            Chọn ảnh lại ảnh: <input type="file" name="img">
                            <img src="<?= $dulieu['hinhanh'] ?>" style="width: 100px;">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="btnsua">Save </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                    <a onclick="return confirm('Bạn có chắc muốn xóa')" href="xoa.php?idSP=<?= $dulieu['idSP'] ?>">
                        <button type="button" class="btn btn-primary" name="btnxoa">Xóa </button>
                    </a>
                    
                  </td>
                </tr>
                <?php 
              }
                 ?>
              </tbody>
            </table>


      </div>
    </div>



<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <script src="js/sb-admin.min.js"></script>
</body>
</html>