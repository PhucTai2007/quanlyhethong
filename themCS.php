<?php
$xa = '';
$huyen = '';
$sql = "SELECT * FROM XA where id_huyen='$huyen' ";
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/taomoiuser.css" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="ajax.js" type="text/javascript"></script>

</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Thêm Cơ Sở </h2>
        </div>
        <form id="form" class="form" method="post" action="themCS.php" enctype="multipart/form-data">
            <div class="form-control">
                <label for="TenCS">Tên Cơ Sở</label>
                <input type="text" name="TenCS" required>
            </div>
            <div class="form-control">
                <label for="TenChu">Tên Chủ Cơ Sở</label>
                <input type="text" name="TenChu" required>
            </div>
            <div class="form-control">
                <label for="loaihinh">Loại Hình</label>
                <select id="loaihinh" name="loaihinh" style="margin-left: 150px">
                    <option>Chọn loại hình</option>
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
                </select><br>
            </div>
            <!-- <div class="form-control">
                <label for="linhvuc">Lĩnh vực</label>
                <select id="linhvuc" name="linhvuc" style="margin-left: 150px">
                    <option value="1">Giống cây trồng</option>
                    <option value="3">Phân Bón</option>
                    <option value="4">Thuốc BVTV</option>
                </select><br>
            </div> -->
            <div class="form-control">
                <label for="tinh">Tỉnh</label>
                <select id="tinh" name="tinh" style="margin-left: 150px">
                    <option value="82">Tiền Giang</option>
                </select><br>
            </div>
            <div class="form-control" >
                <label for="huyen" value="huyen" > Huyện </label>
                <select id="huyen" name="huyen" class="huyen" style="margin-left: 150px">
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
            </div>
            <div class="form-control">
                <label >Xã</label>
                <select id="xa" name="xa" class="xa" style="margin-left: 150px">
                    <option value="">xa</option>
                </select><br>
            </div>
            <div class="form-control">
                <label for="Diachi">Đia chỉ</label>
                <input type="text" name="Diachi" required>
            </div>
            <div class="form-control" >
                <label for="trinhdo">Trình độ</label>
                <select id="trinhdo" name="trinhdo" style="margin-left: 150px">
                    <option value="1">Bằng cấp</option>
                    <option value="2">Giấy chứng nhận</option>
                </select><br>
            </div>
            <div class="form-control">
                <label for="Phone">Số ĐT</label>
                <input type="text" name="Phone" required pattern=".{10}" title="Vui lòng nhập lại số ĐT" />
            </div>
            <div class="form-control">
                <label for="ghichu">Ghi chú</label>
                <input type="text" name="ghichu" />
            </div>
            <div class="form-control">
                <label for="ngaytao">Ngày Tạo</label>
                <input type="date" name="ngaytao" required/>
            </div>
            <div class="form-control">
                <label for="ngayupdate">Ngày Cập Nhật</label>
                <input type="date" name="ngayupdate" required/>
            </div>
            <!-- <div class="form-control">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" style="margin-left: 150px">
                    <option value="1">Đang hoạt động</option>
                </select><br>
            </div> -->
        <input id="themmoi" name="themmoi" type="submit" value="Thêm">
        <?php
            require 'xulythemCS.php';
        ?>
        </form>
    </div>
</body>
</html>