<?php
$s ='';
if(isset($_POST['khuvuc'])){
    $s=$_POST['khuvuc'];
    // echo $s;
    // }else{
    //     echo 'khuvuc';
}
 ?>
<?php
$ss = '';
    if(isset($_POST['id_linhvuc'])){
        $ss=$_POST['id_linhvuc'];
    //     echo $ss;
    // }else{
    //     echo 'linhvuc';
}
 ?>
<!DOCTYPE html>
    <html>

        <head>
            <title>Thống kê</title>
            <style>
                table,th,td{
                    border: 1px solid black;
                }
                table{
                    border-collapse: collapse;
                    width: 80%;
                    height: 100px;
                }
                td,th {
                    text-align: center;
                    padding: auto;
                }
                th {
                    background-color: #04AA6D;
                    color: white;
                    text-align: center;
                }
            </style>
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
            <!-- DIV CHỨC NĂNG -->

                <h2 style="text-align: center;"><b>THỐNG KÊ</b></h2>
            <div style="margin-left: 300px;">
               <!-- CODE TRONG ĐÂY -->
               <form action="" method="POST">
                    <div>
                        <label for="">Lĩnh Vực </label>
                        <select name="id_linhvuc">
                            <option><?php echo $ss?></option>
                                <?php
                                include_once("connect.php");
                                    $sql ="SELECT *FROM linhvuc where trangthai_MD= '0' ";
                                    $query =  mysqli_query($conn, $sql);
                                    $num = mysqli_num_rows($query);
                                    if($num>0){
                                        while($row = mysqli_fetch_array($query)){
                                    ?>
                                    <option value="<?php echo $row['ten_linhvuc'] ?>"><?php echo $row['ten_linhvuc'] ?></option>
                                <?php
                                    }
                                }
                                ?>
                        </select>
                        <label for="">Khu Vực </label>
                        <select name="khuvuc">
                            <option value=""><?php echo $s?></option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'ThanhphoMyTho') echo "selected=\"selected\"";  ?> value="Thành phố Mỹ Tho">Thành phố Mỹ Tho</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'ThixaGoCong') echo "selected=\"selected\"";  ?> value="Thị xã Gò Công">Thị xã Gò Công</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'ThixaCaiLay') echo "selected=\"selected\"";  ?> value="Thị xã Cai Lậy">Thị xã Cai Lậy</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'HuyenTanPhuoc') echo "selected=\"selected\"";  ?> value="Huyện Tân Phước">Huyện Tân Phước</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'HuyenCaiBe') echo "selected=\"selected\"";  ?> value="Huyện Cái Bè">Huyện Cái Bè</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'HuyenCaiLay') echo "selected=\"selected\"";  ?> value="Huyện Cai Lậy">Huyện Cai Lậy</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'Huyenchauthanh') echo "selected=\"selected\"";  ?> value="Huyện Châu Thành">Huyện Châu Thành</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'HuyenChoGao') echo "selected=\"selected\"";  ?> value="Huyện Chợ Gạo">Huyện Chợ Gạo</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'HuyenGoCongTay') echo "selected=\"selected\"";  ?> value="Huyện Gò Công Tây">Huyện Gò Công Tây</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'HuyenGoCongDong') echo "selected=\"selected\"";  ?> value="Huyện Gò Công Đông">Huyện Gò Công Đông</option>
                            <option <?php if (isset($khuvuc) && $khuvuc == 'HuyenTanPhuDong') echo "selected=\"selected\"";  ?> value="Huyện Tân Phú Đông">Huyện Tân Phú Đông</option>
                        </select>
                    </div><br>
                    <input type="submit" name="thongke" value="Thống Kê">
               </form><br><br>
               <table border="1">
                    <tr>
                        <th>Stt</th>
                        <th>Tên cơ sở</th>
                        <th>Tên lĩnh vực</th>
                        <th>Tên Khu vực</th>
                        <th></th>

                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost","root","","quanlyhethong");
                    $sql = "SELECT coso_linhvuc.id_cosolinhvuc,coso.ten_coso,linhvuc.ten_linhvuc,huyen.ten_huyen FROM coso_linhvuc
                        INNER JOIN coso ON coso.id_coso = coso_linhvuc.id_coso
                        INNER JOIN linhvuc ON linhvuc.id_linhvuc = coso_linhvuc.id_linhvuc
                        INNER JOIN huyen on huyen.id_huyen = coso.id_huyen
                        WHERE (huyen.ten_huyen LIKE '%$s%') and (linhvuc.ten_linhvuc LIKE '%$ss%')";
                    /*    echo $sql; */
                    $result = $conn->query($sql);
                    $tong=mysqli_query($conn,$sql);
                    $i = 0;
                    while($row = $result->fetch_assoc()) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['ten_coso']; ?></td>
                            <td><?php echo $row['ten_linhvuc']; ?></td>
                            <td><?php echo $row['ten_huyen']; ?></td>
                            <td><a href="editcosolinhvuc.php?id_cosolinhvuc=<?php echo $row['id_cosolinhvuc']; ?>">Sửa</a></td>
                        </tr>
                        <?php
                        }
                        ?>
               </table>
                   <h3>Tổng số cơ sở thống kê là: <?php echo mysqli_num_rows($tong); ?></h3>
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