<?php
include_once("connect.php");
if(isset($_GET['id_cosolinhvuc'])){
    $sql = "SELECT * FROM coso_linhvuc where id_cosolinhvuc = " .$_GET['id_cosolinhvuc'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}
if(isset($_POST['update'])){
    $linhvuc = $_POST['id_linhvuc'];
    $soGCN = $_POST['soGCN'];
    $ngaycap = $_POST['ngaycap'];
    $ngayhethan = $_POST['ngayhethan'];

    if($linhvuc == 1){
        $update = "UPDATE coso_linhvuc SET id_linhvuc='$linhvuc', soGCN = '' , ngay_cap = '' , ngay_hethan = ''  where id_cosolinhvuc= ". $_GET['id_cosolinhvuc'];
        $up = mysqli_query($conn, $update);
        if(!isset($up)){
            die("Error $up" .mysqli_connect_error());
        }else{
            echo '<script language="javascript">alert("Cập nhật Cơ sở thành công!"); window.location="QLCS.php";</script>';
        }
    }else{
        $update = "UPDATE coso_linhvuc SET id_linhvuc='$linhvuc', soGCN = '".$_POST['soGCN']."' , ngay_cap = '$ngaycap' , ngay_hethan = '$ngayhethan'  where id_cosolinhvuc= ". $_GET['id_cosolinhvuc'];
        $up = mysqli_query($conn, $update);
        if(!isset($up)){
            die("Error $up" .mysqli_connect_error());
        }else{
            echo '<script language="javascript">alert("Cập nhật Cơ sở thành công!"); window.location="QLCS.php";</script>';
        }
    }
}

?>
<!DOCTYPE html>
    <html>

        <head>
            <title>EDIT GCN</title>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="CHI CỤC TRỒNG TRỌT VÀ BẢO VỆ THỰC VẬT TỈNH TIỀN GIANG" />
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

     <body>
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
                                <!-- <li><a href="about.html" class="hvr-sweep-to-bottom">About</a></li>
                                        <li><a href="plans.html" class="hvr-sweep-to-bottom">Plans</a></li> -->
                                <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quản Lí<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="hvr-sweep-to-bottom" href="QLLH.php">Quản Lí Loại Hình</a></li>
                                        <li><a class="hvr-sweep-to-bottom" href="QLLV.php">Quản Lí Lĩnh Vực</a></li>
                                        <li><a class="hvr-sweep-to-bottom" href="QLCS.php">Quản Lí Cơ Sở</a></li>
                                        <li><a class="hvr-sweep-to-bottom" href="quanlyUser.php">Quản Lí Người Dùng</a></li>
                                        <!-- <li><a class="hvr-sweep-to-bottom" href="icons.html">Icons</a></li>
                                                <li><a class="hvr-sweep-to-bottom" href="typography.html">Typography</a></li>     -->
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
        <!-- CODE   -->
            <h1 style="text-align: center;"><b>EDIT</b></h1>
            <div style="margin-left: 750px;">
            <form method="post">
                <div>
                <?php
                require 'connect.php';
                $query=mysqli_query($conn,"SELECT coso.ten_coso,linhvuc.ten_linhvuc, coso_linhvuc.soGCN, coso_linhvuc.ngay_hethan,coso_linhvuc.ngay_cap, coso_linhvuc.id_cosolinhvuc from coso_linhvuc
                    INNER JOIN coso ON coso.id_coso=coso_linhvuc.id_coso
                    INNER JOIN linhvuc on linhvuc.id_linhvuc = coso_linhvuc.id_linhvuc where id_cosolinhvuc = '".$_GET['id_cosolinhvuc']."' ");
                    while($row=mysqli_fetch_assoc($query)){
                ?>
                <label>Tên Cơ Sở: <?php echo $row['ten_coso'] ?></label><br>
                <label>Lĩnh vực: </label>
                    <select id="id_linhvuc" name="id_linhvuc" ?>">
                            <?php
                                include_once("connect.php");
                                $sql ="SELECT * FROM linhvuc where trangthai_MD= '0' ";
                                $query =  mysqli_query($conn, $sql);
                                $num = mysqli_num_rows($query);
                                if($num>0){
                                    while($row = mysqli_fetch_array($query)){
                            ?>
                            <option value="<?php echo $row['id_linhvuc'] ?>"><?php echo $row['ten_linhvuc'] ?></option>
                            <?php
                                }
                            }
                            ?>
                    </select><br><br>
                </div>
                    <div>
                        <label>Số GCN:
                            <input type="text" name="soGCN" required/>
                        </label><br/><br/>
                        <label>Ngày Cấp:
                            <input type="date" name="ngaycap" required/>
                        </label><br/><br/>
                        <label>Ngày hết hạn:
                            <input type="date" name="ngayhethan" required/>
                        </label><br/><br/>
                    </div>
                <?php
                }
                ?>
                <button type="submit" name="update" id="update">Update</button>
                <a href="giaychungnhan.php"><button type="button" value="button">Cancel</button></a>
            </form>
            </div>
            <div class="banner-bottom">
        <div class="container" style="margin-left: 500px;" >
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
            <footer>
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
            </footer>
    </body>

    </html>
