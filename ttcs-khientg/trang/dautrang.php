<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                                            
                        <!-- Time -->
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                            <!--Linkedin-->
                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                            <!--Pinterest-->
                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo.png" alt="Tech NewsLogo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="">
                        <div class="head-search">
                            <form role="form">
                                <!-- Input Group -->
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           placeholder="Nhập tìm kiếm"> <span class="input-group-btn">
                                        <button type="submit"
                                                class="btn btn-primary">Tìm kiếm
                                        </button>
                                    </span></div>
                            </form>
                        </div>
                           
                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->

        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default" style="background-color: #cfb5f7">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav">
                    <li class="hidden"><a href="#page-top"></a></li>
                    <li><a href="index.php">Trang chủ</a></li>
                    

                    <li><a href="gioithieu.php">Giới thiệu</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Khoa học <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                // lay danh muc vao lam menu cap 2
                            $sql = "SELECT * FROM `theloai` WHERE id_danhmuc = 1";
                            $result = mysqli_query($conn,$sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <li><a href="theloai.php?id=<?= $row["id_theloai"] ?>"><?= $row['ten_theloai'] ?></a></li>
                                <?php
                            }
                            ?>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hợp tác <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            $sql = "SELECT * FROM `theloai` WHERE id_danhmuc = 2";
                                $result = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                     ?>
                                <li><a href="theloai.php?id=<?= $row["id_theloai"] ?>"><?= $row['ten_theloai'] ?></a></li>
                                <?php
                            }       
                            ?>
                        </ul>
                    </li>
                </ul>
                    </div>
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->
    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->