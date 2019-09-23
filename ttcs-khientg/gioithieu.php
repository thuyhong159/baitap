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
<style type="text/css">
    p{
        font-style: italic;
        font-size: 17px;

    }
</style>
<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p> Ngày 05/08/2015, lễ khai trường phòng Samsung Lab do tập đoàn Samsung tài trợ cho trường ĐH CNTT&TT (ICTU) đã diễn ra trọng thể tại ICTU. Phòng lab đặc biệt hữu ích cho sinh viên chuyên ngành Điện tử viễn thông và chuyên ngành Công nghệ, thiết bị di động thuộc ngành Công nghệ kỹ thuật Điện tử & Truyền thông cũng như chuyên ngành Hệ thống nhúng thuộc ngành Kỹ thuật máy tính. Ngoài ra, phòng lab cũng đặc biệt hữu ích cho sinh viên ngành Kỹ thuật y sinh do phát triển các ứng dụng di động phục vụ chăm sóc sức khỏe đang là một hướng đi chiến lược của Samsung.</p>
<p>Như vậy, sau các đơn vị như Trường Đại học Bách Khoa Hà Nội, Học viện Công nghệ Bưu chính Viễn thông, Trường Đại học Công nghệ Thông tin và Truyền thông của Đại học Thái Nguyên là đơn vị tiếp theo được thụ hưởng chương trình này.</p>
            	<p>Địa chỉ: Trường Đại học Công nghệ thông tin và truyền thông Thái Nguyên</p>
                <p>Email: Technew@gmail.com</p>
                <p>SĐT liên hệ: 0234756229</p>
            </div>
        </div>
    </div>
</section>



<?php
 include 'trang/cuoitrang.php';
?>
</body>
</html>