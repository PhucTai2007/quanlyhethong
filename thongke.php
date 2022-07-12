<!DOCTYPE html>
<div lang="en">
<head>
	<title>THỐNG KÊ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="QUẢN LÍ USER" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
		rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
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
                                    <li><a class="hvr-sweep-to-bottom" href="QLLH.php">Quản Lí Loại Hình</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="QLLV.php">Quản Lí Lĩnh Vực</a> </li>
                                    <li><a class="hvr-sweep-to-bottom" href="QLCS.php">Quản Lí Cơ Sở</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="quanlyUser.php">Quản Lí Người Dùng</a></li>
                                </ul>
                            </li>

                            <li><a href="thongke.php" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thống Kê<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a class="hvr-sweep-to-bottom" href="theokhuvuc.php">Theo Khu Vực</a></li> -->
                                    <li><a class="hvr-sweep-to-bottom" href="theolinhvuc.php">Theo Lĩnh Vực và Khu Vực</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="denhancap.php">Đến Hạn Cấp</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="giaychungnhan.php">Giấy Chứng Nhận</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="taikhoan.php" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản<span class="caret"></span></a>
                                <ul class="dropdown-menu">
									<li><a class="hvr-sweep-to-bottom" href="thongtinadmin.php">Thông tin tài khoản</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="doimatkhau.php">Đổi Mật Khẩu</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="suathongtinUser.php">Sửa Tài Khoản</a></li>
									<li><a class="hvr-sweep-to-bottom" href="logout.php">Đăng Xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
			
			</nav>
		</div>
	</div>
</body>
</html>