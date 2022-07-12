<?php
include_once("connect.php");
if(isset($_GET['id_coso'])){
    $sql = "SELECT * FROM coso where id_coso = " .$_GET['id_coso'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}

if(isset($_POST['update'])){
    $ten = $_POST['ten_coso'];
    $tenchu = $_POST['ten_chucoso'];
    $loaihinh = $_POST['id_loaihinh'];
    $trinhdo_bangcap =  $_POST['trinhdo_bangcap'];
    $huyen = $_POST['huyen'];
    $xa  =$_POST['xa'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $ghichu = $_POST['ghichu'];
    $ngayupdate = $_POST['ngayupdate'];

    $update = "UPDATE coso SET ten_coso='$ten' , ten_chucoso='$tenchu' ,id_Loaihinh = $loaihinh, trinhdo_bangcap = '$trinhdo_bangcap', id_huyen = '$huyen',id_xa = '$xa',dia_chi='$diachi', sdt ='$sdt' ,ghi_chu='$ghichu',ngay_update='$ngayupdate'  where id_coso= ". $_GET['id_coso'];
    $up = mysqli_query($conn, $update);
    if(!isset($sql)){
        die("Error $sql" .mysqli_connect_error());
    }else{
        echo '<script language="javascript">alert("Cập nhật Cơ sở thành công!"); window.location="QLCSUSER.php";</script>';
        // header("location:QLCS.php");
    }
}
?>
<!DOCTYPE html>
    <html>

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cập nhật cơ sở</title>
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
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script src="ajax.js" type="text/javascript"></script>
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
                                        <li><a class="hvr-sweep-to-bottom" href="QLCSUSER.php">Quản Lí Cơ Sở</a></li>
                                    </ul>
                                </li>

                                <li><a href="taikhoan.php" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="hvr-sweep-to-bottom" href="thongtinUser.php">Thông tin tài khoản</a></li>
                                        <li><a class="hvr-sweep-to-bottom" href="doimatkhauUser.php">Đổi Mật Khẩu</a></li>
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
            <!-- Code -->
            <div style="margin-left: 350px;">
                <form method="post">
                    <h1 style="text-align: 550px;">Edit </h1>
                    <table>
                        <tr>
                            <td>Tên cơ sở</td>
                            <td> <input type="text" name="ten_coso" value="<?php echo $row['ten_coso']; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Tên chủ cơ sở</td>
                            <td> <input type="text" name="ten_chucoso" value="<?php echo $row['ten_chucoso']; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Loại hình</td>
                            <td>
                                <select id="id_loaihinh" name="id_loaihinh">
                                    <?php
                                    include_once("connect.php");
                                    $sql ="SELECT *FROM loaihinh ";
                                    $query =  mysqli_query($conn, $sql);
                                    $num = mysqli_num_rows($query);
                                    if($num>0){
                                    while($row = mysqli_fetch_array($query)){
                                    ?>
                                    <option value="<?php echo $row['id_loaihinh'] ?>"><?php echo $row['ten_loaihinh'] ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tên trình độ nhân lực:</td>
                            <td>
                                <select id="trinhdo_bangcap" name="trinhdo_bangcap" value="<?php echo $row['trinhdo_bangcap']; ?>">
                                    <option value="1">Bằng cấp</option>
                                    <option value="2">Giấy chứng nhận</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Huyện </td>
                            <td>
                            <select id="huyen" name="huyen" class="huyen">
                                <?php
                                    include_once("connect.php");
                                    $sql ="SELECT *FROM huyen where id_tinh='82' ";
                                    $query =  mysqli_query($conn, $sql);
                                    $num = mysqli_num_rows($query);
                                    if($num>0){
                                        while($row = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?php echo $row['id_huyen'] ?>"><?php echo $row['ten_huyen'] ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Xã</td>
                            <td>
                            <select id="xa" name="xa" class="xa">
                                <option value="">xa</option>
                            </select><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Ấp</td>
                            <td> <input type="text" name="diachi" required></td>
                        </tr>
                        <tr>
                            <td>SĐT:</td>
                            <td><input type="text" name="sdt" required pattern=".{10}" title="Vui lòng nhập lại số ĐT"></td>
                        </tr>
                        <tr>
                            <td>Ghi chú:</td>
                            <td><input type="text" name="ghichu" ></td>
                        </tr>
                        <tr>
                            <td>Ngày Cập nhật</td>
                            <td> <input type="date" name="ngayupdate" required></td>
                        </tr>
                    </table>
                    <button type="submit" name="update" id="update">Update</button>
                    <a href="QLCSUSER.php"><button type="button" value="button">Cancel</button></a>
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