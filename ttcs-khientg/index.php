<?php
include 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <base href="http://localhost:8080/ttcs-khientg/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TT</title>

    <!-- favicon -->
    <link href="assets/img/favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- font-awesome -->
    <link href="assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="assets/css/mobile-menu.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="assets/css/style.css" rel="stylesheet">

   
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

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php
                    // lấy dữ liệu 3 thể loại: tin  khoahoc mới nhất.
                $sql = "SELECT tin.* FROM `tin`,danhmuc,theloai WHERE danhmuc.id_danhmuc=1 AND danhmuc.id_danhmuc=theloai.id_danhmuc AND theloai.id_theloai=tin.id_theloai ORDER BY id_tin DESC LIMIT 0,3";
                $result = mysqli_query($conn,$sql);

                // hieern thi 1 tin dau tien
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <img style="width: 720px; height: 630px;" class="img-responsive top_static_article_img" src="<?php echo $row['url_hinhanh'] ?>"
                             alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg red"><a href="category.html">Khoa học</a></div>
                        <div class="feature_article_title">
                            <h1><a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self"><?php echo $row['tieude']; ?></a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self"><?php echo $row['ngaydang']; ?></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            <?php echo $row['tomtat']; ?>
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">1</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">1</a>Comments</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_article_wrapper -->

            </div>
            <!-- col-md-7 -->

           <?php
           //hien 1 tin khoa hoc tiep
                 $row = mysqli_fetch_assoc($result) ;
                    # code...
                
           ?>

            <div class="col-md-5">
                <div class="feature_static_wrapper">
                    <div class="feature_article_img">
                        <img style="width: 670px; height: 300px;" class="img-responsive" src="<?php echo $row['url_hinhanh'] ?>" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg purple"><a href="#">Khoa học</a></div>
                        <div class="feature_article_title">
                            <h1><a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self"><?php echo $row['tieude']; ?></a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self"><?php echo $row['ngaydang']; ?></a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            <?php echo $row['tomtat']; ?>
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">1</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">1</a>Comments</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->
            <?php
           //hien 1 tin khoa hoc tiep
                 $row = mysqli_fetch_assoc($result) ;
                    # code...
                
           ?>
            <div class="col-md-5">
                <div class="feature_static_last_wrapper">
                    <div class="feature_article_img">
                        <img style="width: 670px; height: 300px;" class="img-responsive" src="<?php echo $row['url_hinhanh'] ?>" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg blue"><a href="#">Khoa học</a></div>

                        <div class="feature_article_title">
                            <h1><a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self"><?php echo $row['tieude']; ?></a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self"><?php echo $row['ngaydang']; ?></a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            <?php echo $row['tomtat']; ?>
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">1</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">1</a>Comments</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->
            
        <!-- Row -->

    </div>
    <!-- container -->

</section>
<!-- Feature News Section -->

<section id="category_section" class="category_section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="category_section mobile">
    <div class="article_title header_purple">
        <h2><a href="#" target="_self">Hợp tác</a></h2>
    </div>
    <!----article_title------>
    <?php
        // lấy dữ liệu 5 tin thể hợp tác mơi nhất

    $sql = "SELECT tin.* FROM `tin`,danhmuc,theloai WHERE danhmuc.id_danhmuc=2 AND danhmuc.id_danhmuc=theloai.id_danhmuc AND theloai.id_theloai=tin.id_theloai ORDER BY id_tin DESC LIMIT 0,5";
    $result = mysqli_query($conn,$sql);

    // hien thi 1 tin the thao truoc
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="top_article_img">
                    <a href="chitiet.php?id=<?php echo $row['id_tin']; ?>" target="_self"><img style="width: 555px; height: 475px;" class="img-responsive"
                                                               src="<?php echo $row['url_hinhanh']; ?>" alt="feature-top">
                    </a>
                </div>
                <!----top_article_img------>
            </div>
            <div class="col-md-6">
                <span class="tag purple">Hợp tác</span>

                <div class="category_article_title">
                    <h2><a href="chitiet.php?id=<?php echo $row['id_tin']; ?>" target="_self"><?php echo $row['tieude']; ?> </a></h2>
                </div>
                <!----category_article_title------>
                <div class="category_article_date"><a href="#"><?php echo $row['ngaydang']; ?></a></div>
                <!----category_article_date------>
                <div class="category_article_content">
                    <?php echo $row['tomtat']; ?>
                </div>
                <!----category_article_content------>
                <div class="media_social">
                    <span><a href="#"><i class="fa fa-share-alt"></i>1 </a> Shares</span>
                    <span><i class="fa fa-comments-o"></i><a href="#">1</a> Comments</span>
                </div>
                <!----media_social------>
            </div>
        </div>
    </div>
    <div class="category_article_wrapper">
        <div class="row">
            <?php
                //hiển thị 4 tin khoa hoc mới nhất tiếp theo
            while ($row = mysqli_fetch_assoc($result)) {
                # code...
            
            ?>
            <div class="media col-md-6">
                    <div class="media-left">
                        <a href="chitiet.php?id=<?php echo $row['id_tin']; ?>"><img style="width: 122px; height: 122px;" class="media-object" src="<?php echo $row['url_hinhanh']; ?>"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <span class="tag purple">Hợp tác</span>

                        <h3 class="media-heading"><a href="chitiet.php?id=<?php echo $row['id_tin']; ?>" target="_self"><?php echo $row['tieude']; ?></a></h3>
                        <span class="media-date"><a href="#"><?php echo $row['ngaydang']; ?></a></span>

                        <div class="media_social">
                            <span><a href="#"><i class="fa fa-share-alt"></i>1</a> Shares</span>
                            <span><a href="#"><i class="fa fa-comments-o"></i>1</a> Comments</span>
                        </div>
                    </div>
                </div>
            <?php
                // dong ngoac vong lap while 4 tin khoa hoc
                }
            ?>

        </div>
    </div>
    <p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
</div>
<!-- Mobile News Section -->









</div>
<!-- Right Section -->

</div>
<!-- Row -->

</div>
<!-- Container -->

</section>
<!-- Category News Section -->



<?php
 include 'trang/cuoitrang.php';
?>
</body>
</html>