<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "quanlyhethong");
//     $username=$_SESSION['username'];
//     $sql= "SELECT * FROM user WHERE username='".$username."'";

//     $result = $conn->query($sql);
// 	if($result->num_rows > 0){
// 		while ($row = $result->fetch_array()) {
//             echo"xin chao: ". $username, "<br>";
//             echo"<a href='logout.php'>dang xuat</a>";
//         }
//     }
?>

<!DOCTYPE html>
<div lang="en">

    <head>
        <title>CHI CỤC TRỒNG TRỌT VÀ BẢO VỆ THỰC VẬT TỈNH TIỀN GIANG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- bootstrap-css -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!--// bootstrap-css -->
        <!-- css -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!--// css -->
        <!-- font-awesome icons -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome icons -->
        <!-- font -->
        <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <!-- //font -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/SmoothScroll.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <link href='css/immersive-slider.css' rel='stylesheet' type='text/css'>
        <!-- pricing -->
        <link rel="stylesheet" href="css/jquery.flipster.css">
        <!-- //pricing -->
    </head>


    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <div class="w3layouts-logo">
                        <h1><a href="index.html"><span>CHI CỤC TRỒNG TRỌT VÀ <br>
                                    BẢO VỆ THỰC VẬT TỈNH TIỀN GIANG</span></a></h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="admin.php">Trang Chủ</a></li>
                            <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quản Lí<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-sweep-to-bottom" href="QLLH.php">Quản Lí Loại Hình</a>
                                    </li>
                                    <li><a class="hvr-sweep-to-bottom" href="QLLV.php">Quản Lí Lĩnh Vực</a>
                                    </li>
                                    <li><a class="hvr-sweep-to-bottom" href="QLCS.php">Quản Lí Cơ Sở</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="quanlyUser.php">Quản Lí Người Dùng</a></li>

                                </ul>
                            </li>

                            <li><a href="thongke.php" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thống Kê<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-sweep-to-bottom" href="theokhuvuc.php">Theo Khu Vực</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="theolinhvuc.php">Theo Lĩnh Vực</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="denhancap.php">Đến Hạn Cấp</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="giaychungnhan.php">Giấy Chứng Nhận</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="taikhoan.php" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-sweep-to-bottom" href="thongtinadmin.php">Thông tin tài khoản</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="doimatkhau.php">Đổi Mật Khẩu</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="suathongtinadmin.php">Sửa Tài Khoản</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="logout.php">Đăng Xuất</a></li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

            </nav>
        </div>
    </div>
    
    
 
    <!-- //header -->
    <!-- banner -->
    <div class="main">
        <div class="page_container">
            <div id="immersive_slider">
                <div class="slide" data-blurred="">
                    <div class="col-md-6 image">
                        <img src="images/1a.jpg" alt="Slider 1" />
                    </div>
                    <div class="col-md-6 content">
                        <h3>Chào mừng bạn đến với website <span>Chi cục trồng trọt và bảo vệ thực vật </span></h3>
                        <p></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="slide" data-blurred="">
                    <div class="col-md-6 image">
                        <img src="images/ok.jpg" alt="Slider 1" />
                    </div>
                    <div class="col-md-6 content">
                        <h3> <span>Thống Kê</span></h3>
                        <p>Thống kê cơ sở theo từng khu vực, theo huyện, tỉnh trên địa bàn. Có thể thống kê theo từng
                            lĩnh vực như phân bón, thuốc trừ sâu,phân bón. </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="slide" data-blurred="">
                    <div class="col-md-6 image">
                        <img src="images/3a.jpg" alt="Slider 1" />
                    </div>
                    <div class="col-md-6 content">
                        <h3><span>Quản Lí</span></h3>
                        <p>Quản lí tất cả từ người dùng,quản lí các cơ sở, quản lí lĩnh vực, các lọi hình ,dễ dàng thao tác</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <a href="#" class="is-prev">&laquo;</a>
                <a href="#" class="is-next">&raquo;</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#immersive_slider").immersive_slider({
                container: ".main"
            });
        });
    </script>
    <iframe id="myFrame" src="http://localhost:3000/quanlyhethong/world-master/index.html" style="height: 700px; width:100%"></iframe>
    <!-- //banner -->
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="w3-banner-bottom-heading">
                <h3> <span></span></h3>
            </div>
            <div class="agileits-banner-bottom">
                <div class="col-md-3 agileits-banner-bottom-grid">
                    <div class="services-grid1">
                        <div class="services-grid-right agile-services-grid-right">
                            <div class="services-grid-right-grid hvr-radial-out blue-grid">
                                <span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="services-grid-left agile-services-grid-left">
                            <h4>Thống Kê</h4>
                            <p> Thống kê cơ sở kinh doanh theo huyện, tỉnh,
                                các khu vực, thống kê theo giấy chứng nhận, thời hạn cấp bằng </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileits-banner-bottom-grid">
                    <div class="services-grid1">
                        <div class="services-grid-right agile-services-grid-right">
                            <div class="services-grid-right-grid hvr-radial-out orange-grid">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="services-grid-left agile-services-grid-left">
                            <h4>Quản Lí</h4>
                            <p>Quản lí người dùng, cơ sở kinnh doanh,
                                quản lí cơ sỏ theo lĩnh vực, quản lí </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 agileits-banner-bottom-grid">
                    <div class="services-grid1">
                        <div class="services-grid-right agile-services-grid-right">
                            <div class="services-grid-right-grid hvr-radial-out green-grid">
                                <span class="glyphicon glyphicon-magnet" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="services-grid-left agile-services-grid-left">
                            <h4>Tiện lợi</h4>
                            <p>Giúp người dùng dễ dàng quản lí, tiện lợi khi sử dụng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>TRANG THÔNG TIN ĐIỆN TỬ CHI CỤC TRỒNG TRỌT VÀ BẢO VỆ THỰC VẬT TỈNH TIỀN GIANG</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Chịu trách nhiệm chính: Nguyễn Văn A- Chi cục trưởng</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Địa chỉ: Ấp Long Bình, xã Long An, huyện Châu Thành, tỉnh Tiền Giang</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i> Điện thoại: 0273.3855600 Fax:0273. 3856219</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Email:snnptnt.ccbvtv@tiengiang.gov.v</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ./Footer -->

    <!-- //footer -->
    <script src="js/jarallax.js"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <script src="js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- pricing -->
    <script src="js/jquery.flipster.js"></script>
    <script>
        $(function() {
            $(".flipster").flipster({
                style: 'carousel',
                start: 0
            });
        });
    </script>
    <!-- //pricing -->
    <!-- slider -->
    <script type="text/javascript" src="js/jquery.immersive-slider.js"></script>
</div>