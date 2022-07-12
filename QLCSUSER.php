<?php
$s ='';
if(isset($_POST['huyen'])){
      $s=$_POST['huyen'];
}
?>

<?php
$ss = '';
if(isset($_POST['xa'])){
    $ss=$_POST['xa'];
}

$trang ='';
if(isset($_GET['trang'])){
    $trang = $_GET['trang'];
    settype($trang,"int");
}else{
    $trang =1;
}
?>
<!DOCTYPE html>
    <html>

        <head>
            <title>QUẢN LÝ CƠ SỞ</title>
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
                                <li class="active"><a href="index.php">Trang Chủ</a></li>
                                <!-- <li><a href="about.html" class="hvr-sweep-to-bottom">About</a></li>
                                        <li><a href="plans.html" class="hvr-sweep-to-bottom">Plans</a></li> -->
                                <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quản Lí<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="hvr-sweep-to-bottom" href="QLCSUSER.php">Quản Lí Cơ Sở</a></li>
                                    </ul>
                                </li>

                               
                                <li><a href="taikhoan.php" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="hvr-sweep-to-bottom" href="thongtinUser.php">Thông tin tài khoản</a></li>
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


                <h1 style="text-align: center;"><b>Quản lí cơ sở</b></h1>
            <div >
            <table border="1" style="margin: auto;">
                    <tr>
                        <th rowspan="2">ID</th>
                        <th rowspan="2">Tên Cơ Sở</th>
                        <th rowspan="2">Tên chủ cơ sở</th>
                        <th colspan="2">Trình độ nhân lực</th>
                        <th colspan="3" style="text-align: center;">Địa chỉ</th>
                        <th rowspan="2">Loại hình</th>
                        <th rowspan="2">tình trạng</th>
                        <th rowspan="2">Phone</th>
                        <th rowspan="2">Ghi chú</th>
                    </tr>
                    <tr>
                        <th>Bằng Cấp</th>
                        <th>GIấy chứng nhận</th>
                        <th>Ấp</th>
                        <th>Xã</th>
                        <th>Huyện</th>
                    </tr>
                    <?php
                        require 'connect.php';
                        $sotin1trang = 10;
                        $from = ($trang - 1) * 10;
                        $query=mysqli_query($conn,"SELECT coso.id_coso,coso.id_loaihinh,coso.id_tthd,huyen.id_huyen,xa.id_xa, coso.dia_chi,coso.ten_coso,coso.ten_chucoso,coso.sdt,coso.trinhdo_bangcap,coso.ghi_chu,loaihinh.ten_loaihinh,tinhtranghoatdong.ten_tthd,huyen.ten_huyen,xa.ten_xa,coso.trangthai from coso
                        INNER JOIN huyen on coso.id_huyen = huyen.id_huyen
                        INNER JOIN xa on coso.id_xa = xa.id_xa
                        INNER JOIN tinhtranghoatdong on coso.id_tthd = tinhtranghoatdong.id_tthd
                        INNER JOIN loaihinh on coso.id_loaihinh= loaihinh.id_loaihinh
                        WHERE trangthai='1' and (huyen.ten_huyen LIKE '%$s%') and (xa.ten_xa LIKE '%$ss%') LIMIT $from , $sotin1trang  ");
                        $i = 0;
                        while($row=mysqli_fetch_array($query)){
                            $i++
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['ten_coso']; ?></td>
                        <td><?php echo $row['ten_chucoso']; ?></td>
                        <td><?php
                                // echo $row['trinhdo_bangcap']; 
                                if($row['trinhdo_bangcap'] == 1){
                                    echo "X";
                                }else{
                                    echo "";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if($row['trinhdo_bangcap'] == 2){
                                    echo "X";
                                }else{
                                    echo "";
                                }
                            ?>
                        </td>
                        <td><?php echo $row['dia_chi']; ?></td>
                        <td><?php echo $row['ten_xa']; ?></td>
                        <td><?php echo $row['ten_huyen']; ?></td>
                        <td><?php echo $row['ten_loaihinh'];?></td>
                        <td><?php echo $row['ten_tthd'];?></td>
                        <td><?php echo $row['sdt']; ?></td>
                        <td><?php echo $row['ghi_chu']; ?></td>
                        <td><a href="editCSUser.php?id_coso=<?php echo $row['id_coso']; ?>">Sửa</a></td>
                        <td><a href="updatetrangthaiCS.php?id_coso=<?php echo $row['id_coso']; ?>">Xóa</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <br>
                <div style="text-align: center;">
                <?php
                    require 'connect.php';
                    $x = mysqli_query($conn,"SELECT id_coso from coso WHERE trangthai='1'");
                    $tongsotin = mysqli_num_rows($x);
                    $sotrang = ceil( $tongsotin / $sotin1trang);
                    for($t=1 ; $t <= $sotrang   ; $t++){
                            echo "<a href='QLCSUSER.php?trang=$t'> trang $t --</a> ";
                    }
                ?>
                <!-- <br> -->
                <div style="text-align: center;">
                    <button onclick="document.location='themCS.php'">Thêm</button>
                    <!-- <button onclick="document.location='QLCSUSERoff.php'">Cơ sở không hoạt động</button> -->
                    <!-- <p style="margin-left: 300px;"><button onclick="document.location='admin.php'">Trở về</button></p> -->
                    </div>
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