<?php
include 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi tiet tin </title>

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
<!-- <div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div> -->
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">
<?php
// thêm phần đầu trang tại đây
include 'trang/dautrang.php';
?>
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-12">
    <?php
        // lấy dữ liệu chi tiết của một tin dựa vào id_tin
    $id_tin = isset($_GET['id']) ? $_GET['id'] : 1;

    $sql = "SELECT tin.*,theloai.ten_theloai FROM `tin`, theloai WHERE tin.id_theloai = theloai.id_theloai AND id_tin=$id_tin";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    ?>
<div class="entity_wrapper">
    <div class="entity_title">
        <h1><a href="#"><?php echo $row['tieude']; ?></a></h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta"><a href="#" target="_self"><?php echo $row['ngaydang']; ?></a>
    </div>
    <!-- entity_meta -->

    <div class="entity_rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
    </div>
    <!-- entity_rating -->

    <div class="entity_social">
        <a href="#" class="icons-sm sh-ic">
            <i class="fa fa-share-alt"></i>
            <b>1</b> <span class="share_ic">Shares</span>
        </a>
        <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
        <!--Twitter-->
        <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
        <!--Google +-->
        <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
        <!--Linkedin-->
        <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
        <!--Pinterest-->
        <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
    </div>
    <!-- entity_social -->

    <div class="entity_thumb">
        <img style="width: 800px; height: 500px;" class="img-responsive" src="<?php echo $row['url_hinhanh']; ?>" alt="feature-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>
            <?php echo $row['noidung']; ?>
        </p>
    </div>
    <!-- entity_content -->

    <div class="entity_footer">
        <div class="entity_tag">
            <span class="blank"><a href="#">Khoa học</a></span>
            <span class="blank"><a href="#">Hợp tác</a></span>
            
        </div>
        <!-- entity_tag -->

        <div class="entity_social">
            <span><i class="fa fa-share-alt"></i>1 <a href="#">Shares</a> </span>
            <span><i class="fa fa-comments-o"></i>1 <a href="#">Comments</a> </span>
        </div>
        <!-- entity_social -->

    </div>
    <!-- entity_footer -->

</div>
<!-- entity_wrapper -->

<div class="related_news">
    <div class="entity_inner__title header_purple">
        <h2><a href="#">Tin tức liên quan</a></h2>
    </div>
    <!-- entity_title -->
    
    <div class="row">
                <?php

        // lấy dữ liệu 4 tin cùng thể loại
        $id_theloai = $row['id_theloai'];
        $sql = "SELECT tin.*, theloai.ten_theloai FROM `tin`,theloai WHERE tin.id_theloai = theloai.id_theloai AND tin.id_theloai=$id_theloai AND id_tin NOT IN ($id_tin) ORDER BY id_tin DESC LIMIT 0,4";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
            # code...
        
        ?>
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a href="chitiet.php?id=<?php echo $row['id_tin'] ?>"><img style="width: 122px; height: 122px;" class="media-object" src="<?php echo $row['url_hinhanh']; ?>"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self"><?php echo $row['ten_theloai']; ?></a></span>

                    <h3 class="media-heading"><a href="chitiet.php?id=<?php echo $row['id_tin'] ?>" target="_self"><?php echo $row['tieude']; ?></a></h3>
                    <span class="media-date"><a href="#"><?php echo $row['ngaydang']; ?></a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>1</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>1</a> Comments</span>
                    </div>
                </div>
            </div>
        </div>
        <?php  } ?>
    </div>
</div>
<!-- Related news -->



<div class="entity_comments">
    <div class="entity_inner__title header_black">
        <h2>Add a Comment</h2>
    </div>
    <!--Entity Title -->

    <div class="entity_comment_from">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="inputName" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group comment">
                <textarea class="form-control" id="inputComment" placeholder="Comment"></textarea>
            </div>

            <button type="submit" class="btn btn-submit red">Submit</button>
        </form>
    </div>
    <!--Entity Comments From -->

</div>
<!--Entity Comments -->

</div>
<!--Left Section-->


</div>
<!--Right Section-->

</div>
<!-- row -->

</div>
<!-- container -->

</section>
<!-- Entity Section Wrapper -->
</div>
</div>
</div>
<?php
 include 'trang/cuoitrang.php';
?>
</body>
</html>