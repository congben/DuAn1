<?php

$dsdm = danhmuc_all();

$kyw = "";
$titlepage = "";

if (!isset($_GET['iddm'])) {
    $iddm = 0;
} else {
    $iddm = $_GET['iddm'];
    $titlepage = get_name_dm($iddm);
}

// kiểm tra có phải form search không?
if (isset($_POST["timkiem"]) && ($_POST["timkiem"])) {
    $kyw = $_POST["kyw"];
    $titlepage = "Kết quả tìm kiếm với từ khóa: <span>" . $kyw . "</span>";
}

$dssp = get_dssp($kyw, $iddm, 6);

$html_dm = showdm($dsdm);

?>


<?php
if (isset($_SESSION['s_user']) && ($_SESSION['s_user'])) {
    extract($_SESSION['s_user']);
    $html_account = '     
        <div class="ht-setting-trigger"><span>Hello, <a style="font-size:20px; color: red; font-weight: bolder;
        font-variant: small-caps;" href="index.php?pg=myaccount">' . $ho_ten . '</a></span></div>
        <div class="setting ht-setting">
            <ul class="ht-setting-list">
            <li><a href="index.php?pg=myaccount">Thông tin Tài Khoản</a></li>
        <li><a href="index.php?pg=logout">Thoát</a></li>
            </ul>
        </div>
        
       ';
} else {
    $html_account = '   
        <div class="ht-setting-trigger"><span>Tài Khoản</span></div>
        <div class="setting ht-setting">
            <ul class="ht-setting-list">
            <li><a href="index.php?pg=dangnhap">Đăng Nhập</a></li>
        <li><a href="index.php?pg=dangky">Đăng Ký</a></li>     
            </ul>
        </div>

       ';
}
 $html_cart_small=cart_small() ;
 $tong=get_tongdonhang();
    $sosp=sosanpham()
?>



<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> STORE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="layout/images/loogo.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="layout/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="layout/css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="layout/css/fontawesome-stars.css">
     <!-- Main Style CSS -->

    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="layout/css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="layout/css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="layout/css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="layout/css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="layout/css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="layout/css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="layout/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="layout/css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="layout/css/bootstrap.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="layout/css/helper.css">
    <link rel="stylesheet" href="layout/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="layout/css/responsive.css">
    <!-- Modernizr js -->
    <!-- <script src="layout/js/vendor/modernizr-2.8.3.min.js"></script> -->
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Begin Body Wrapper  Nguyeen coong beefn #-->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        <header>
            <!-- Begin Header Top Area -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Top Left Area -->
                        <div class="col-lg-3 col-md-4">
                            <div class="header-top-left">
                                <ul class="phone-wrap">
                                    <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Left Area End Here -->
                        <!-- Begin Header Top Right Area -->
                        <div class="col-lg-9 col-md-8">
                            <div class="header-top-right">
                                <ul class="ht-menu">
                                    <!-- Begin Setting Area -->
                                    <li>
                                        <?= $html_account?>

                                    </li>
                                    <!-- Setting Area End Here -->
                                    <!-- Begin Currency Area -->
                                    <li>
                                        <span class="currency-selector-wrapper">Currency :</span>
                                        <div class="ht-currency-trigger"><span>USD $</span></div>
                                        <div class="currency ht-currency">
                                            <ul class="ht-setting-list">
                                                <li><a href="#">EUR €</a></li>
                                                <li class="active"><a href="#">USD $</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Currency Area End Here -->
                                    <!-- Begin Language Area -->
                                    <li>
                                        <span class="language-selector-wrapper">Language :</span>
                                        <div class="ht-language-trigger"><span>English</span></div>
                                        <div class="language ht-language">
                                            <ul class="ht-setting-list">
                                                <li class="active"><a href="#"><img src="images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                <li><a href="#"><img src="images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Language Area End Here -->
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Top Area End Here -->
            <!-- Begin Header Middle Area -->
            <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Logo Area -->
                        <div class="col-lg-3">
                            <div class="logo pb-sm-30 pb-xs-30 img-logo">
                                <a href="index.php">
                                    <img src="layout/images/sanpham/loogo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                            <!-- Begin Header Middle Searchbox Area -->
                            <form action="index.php?pg=dmsanpham" method="post" class="hm-searchbox">
                                <select class="nice-select select-search-category">
                                    <!-- #region
                                          <?= $html_dm ?>
                                        -->
                                </select>
                                <input type="text" name="kyw" id="nhapten" placeholder="Nhập Sản phẩm bạn tìm kiếm...">
                                <input class="li-btn" type="submit" id="button" name="timkiem" value='.'>
                                <button name="timkiem" id="button" class="li-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                <!-- <label for="" id="button" name="timkiem">Tìm Kiếm</label> -->
                            </form>

                            <!-- Header Middle Searchbox Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="header-middle-right">
                                <ul class="hm-menu">
                                    <!-- Begin Header Middle Wishlist Area -->
                                    <li class="hm-wishlist">
                                        <a href="wishlist.html">
                                            <span class="cart-item-count wishlist-item-count">0</span>
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </li>
                                    <!-- Header Middle Wishlist Area End Here -->
                                    <!-- Begin Header Mini Cart Area -->
                                    <li class="hm-minicart">
                                        <div class="hm-minicart-trigger">
                                            <span class="item-icon"></span>
                                            <span class="item-text">  <?=$tong?>VNĐ
                                                <span class="cart-item-count"><?=$sosp?></span>
                                            </span>
                                        </div>
                                        <span></span>
                                        <div class="minicart">
                                            <ul class="minicart-product-list">
                                              



                                                <?= $html_cart_small ?>
                                                <!-- <li>
                                                    <a href="single-product.html" class="minicart-product-image">
                                                        <img src="images/product/small-size/5.jpg" alt="cart products">
                                                    </a>
                                                    <div class="minicart-product-details">
                                                        <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                        <span>£40 x 1</span>
                                                    </div>
                                                    <button class="close" title="Remove">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="single-product.html" class="minicart-product-image">
                                                        <img src="images/product/small-size/6.jpg" alt="cart products">
                                                    </a>
                                                    <div class="minicart-product-details">
                                                        <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                        <span>£40 x 1</span>
                                                    </div>
                                                    <button class="close" title="Remove">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </li> -->
                                            </ul>
                                            <p class="minicart-total">Tổng Tiền: <span><?=$tong?></span></p>
                                            <div class="minicart-button">
                                                <a href="index.php?pg=viewcart" class="li-button li-button-fullwidth li-button-dark">
                                                    <span>Xem Giỏ Hàng</span>
                                                </a>
                                                <a href="index.php?pg=thanhtoan" class="li-button li-button-fullwidth">
                                                    <span>Thanh Toán</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Header Mini Cart Area End Here -->
                                </ul>
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Middle Area End Here -->
            <!-- Begin Header Bottom Area -->
            <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Header Bottom Menu Area -->
                            <div class="hb-menu">
                                <nav>
                                    <ul>
                                        <li class="dropdown-holder"><a href="index.php">Trang Chủ</a>
                                            <ul class="hb-dropdown">
                                                <li><a href="index.php?pg=trangchu2">Trang Chủ 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-holder"><a href="index.php?pg=dmsanpham">Shop</a>
                                            <ul class="megamenu hb-megamenu">
                                                <li><a href="shop-left-sidebar.html">Shop Page Layout</a>
                                                    <ul>
                                                        <li><a href="shop-3-column.html">Shop 3 Cột</a></li>
                                                        <li><a href="shop-4-column.html">Shop 4 Cột</a></li>
                                                        <li><a href="index.php?pg=dmsanpham">Shop Left Sidebar</a></li>

                                                    </ul>
                                                </li>
                                                <!-- <li><a href="single-product-gallery-left.html">Single Product Style</a>
                                                        <ul>
                                                            <li><a href="single-product-carousel.html">Single Product Carousel</a></li>
                                                            <li><a href="single-product-gallery-left.html">Single Product Gallery Left</a></li>
                                                            <li><a href="single-product-gallery-right.html">Single Product Gallery Right</a></li>
                                                            <li><a href="single-product-tab-style-top.html">Single Product Tab Style Top</a></li>
                                                            <li><a href="single-product-tab-style-left.html">Single Product Tab Style Left</a></li>
                                                            <li><a href="single-product-tab-style-right.html">Single Product Tab Style Right</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="single-product.html">Single Products</a>
                                                        <ul>
                                                            <li><a href="single-product.html">Single Product</a></li>
                                                            <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                            <li><a href="single-product-group.html">Single Product Group</a></li>
                                                            <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                                            <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                                        </ul>
                                                    </li> -->
                                            </ul>
                                        </li>
                                        <li class="megamenu-static-holder"><a href="index.php?pg=blog2">Tin Tức </a>
                                            <ul class="megamenu hb-megamenu">
                                                <li><a href="blog-left-sidebar.html">Trang Tin Tức</a>
                                                    <ul>
                                                        <li><a href="index.php?pg=blog2">Trang Tin tức 2</a></li>
                                                        <li><a href="index.php?pg=blog3">Trang Tin tức 3</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li><a href="blog-details-left-sidebar.html">Blog Details Pages</a>
                                                        <ul>
                                                            <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                            <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                            <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                            <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.html">Other Pages</a>
                                                        <ul>
                                                            <li><a href="login-register.html">My Account</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="compare.html">Compare</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                        </ul>
                                                    </li> -->
                                                <li><a href="index.html">Các Trang khác</a>
                                                    <ul>
                                                        <li><a href="contact.html">Liên Hệ</a></li>
                                                        <li><a href="index.php?pg=aboutus">Về Chúng Tôi</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                        <li><a href="index.php?pg=404">404 Error</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php?pg=aboutus">Về Team</a></li>
                                        <li><a href="index.php?pg=contact">Liện Hệ</a></li>

                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Bottom Menu Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom Area End Here -->
            <!-- Begin Mobile Menu Area -->
            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </header>