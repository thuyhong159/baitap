<?php
include 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TT</title>

    <!-- favicon -->
    <link href="assets/img/favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome -->
    <link href="assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="assets/css/mobile-menu.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">
<?php
// thêm phần đầu trang tại đây
include 'trang/dautrang.php';
?>

<div class="container">
<div class="category_article_wrapper pt-3" style="margin-top: 30px;">
        <div class="row">
        <ul class="nav nav-pills col-md-12" style="margin-bottom: 30px; background-color: #dcdcdc">
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">TRANG CHỦ</a>
          </li>
          <li><a href="#">&gt;&gt;</a></li>
          <?php
            $id_theloai = isset($_GET['id']) ? $_GET['id'] : 1 ;
            $sql = "SELECT * FROM `theloai` WHERE id_theloai = $id_theloai";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
          ?>
          <li class="nav-item">
            <a class="nav-link text-primary" href="theloai.php?id=<?php  echo $row['id_theloai']; ?>"><?php  echo $row['ten_theloai']; ?></a>
          </li>

        </ul>
        <?php
    // làm phân trang
    $sql_tongtin = "
        SELECT count(id_tin) as tongTin from tin,theloai WHERE theloai.id_theloai=tin.id_theloai AND tin.id_theloai=$id_theloai ORDER BY id_tin DESC
    ";
    $kq_tongtin = mysqli_query($conn,$sql_tongtin);
    $row_tongtin = mysqli_fetch_assoc($kq_tongtin);
    $tongtin = $row_tongtin['tongTin'];
    $soTin_1Trang = 8;
    $tongSoTrang = ceil($tongtin/$soTin_1Trang);
    $trangHienTai = isset($_GET['page']) ? $_GET['page'] : 1;
    // giới hạn trang từ 1 đến tổng
    if ($trangHienTai  > $tongSoTrang) {
        $trangHienTai = $tongSoTrang;
    }
    if ($trangHienTai < 1) {
        $trangHienTai = 1;
    }

    $diemDau = ($trangHienTai - 1)*$soTin_1Trang ;


    

                // lấy dữ liệu các tin theo thể loại dựa vào id trên thanh địa chỉ
                $ma_tl = isset($_GET['id']) ? $_GET['id'] : null ;
                $sql = "SELECT tin.*,theloai.ten_theloai FROM `tin`,theloai WHERE theloai.id_theloai=tin.id_theloai  ORDER BY id_tin DESC limit $diemDau,$soTin_1Trang";
                $result = mysqli_query($conn,$sql);

                // lap lai cac tin
                while ($row = mysqli_fetch_assoc($result)) {
                    # code...
                
            ?>
            <div class="col-md-6" style="min-height: 700px;">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self">
                            <img style="width: 525px; height: 400px;" class="img-responsive" src="<?php echo $row['url_hinhanh']; ?>" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="#" target="_self"><?php echo $row['ten_theloai']; ?></a></span>

                    <div class="category_article_title">
                        <h2><a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self"><?php echo $row['tieude']; ?> </a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#"><?php echo $row['ngaydang']; ?></a></div>
                    <!----category_article_date------>
                    <!-- category_article_date -->

                    <div class="category_article_content">
                        <?php echo $row['noidungngan']; ?>
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>1 </a> Shares</span>
                        <span><i class="fa fa-comments-o"></i><a href="#">1</a> Comments</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

            <?php

                }
            ?>

        </div>
        <!-- top_article_img -->
            <!-- Hiển thị phân trang -->
            <ul class="pagination">
<?php

    if ($trangHienTai>1 && $tongSoTrang>1) {
        echo '<li class="page-item"><a class="page-link" href="theloai.php?id='.$ma_tl.'&page='.($trangHienTai-1).'">Previous</a></li>';
        echo "&#32";
    }
    for ($i=1; $i <= $tongSoTrang; $i++) { 
        if ($i==$trangHienTai) {
            echo '<li class="page-item active"><a class="page-link" href="theloai.php?id='.$ma_tl.'&page='.$i.'">'.$i.'</a></li>';
        }else{
            echo '<li class="page-item"><a class="page-link" href="theloai.php?id='.$ma_tl.'&page='.$i.'">'.$i.'</a></li>';
        }
    }
    
    echo "&#32";
    if ($trangHienTai<$tongSoTrang && $tongSoTrang>1) {
        echo '<li class="page-item"><a class="page-link" href="theloai.php?id='.$ma_tl.'&page='.($trangHienTai+1).'">Next</a></li>';
    }
?>

  
</ul>
    </div>
    <!-- top_article_img -->


</div>
</div>
</div>
</div>
<?php
 include 'trang/cuoitrang.php';
?>
</body>
</html>