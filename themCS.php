<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/taomoiuser.css" />
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
                    <option value="0">Doanh Nghiệp</option>
                    <option value="1">Hộ Kinh Doanh</option>
                </select><br>
                <!-- <input type="text" name="loaihinh"> -->
            </div>
            <div class="form-control">
                <label for="tinhtranghoatdong">Loại Hình</label>
                <select id="tinhtranghoatdong" name="tinhtranghoatdong" style="margin-left: 150px">
                    <option value="1">Đang hoạt động</option>
                    <option value="0">Ngưng Hoạt Động</option>
                </select><br>
            </div>
            <div class="form-control">
                <label for="tinh">Tỉnh</label>
                <select id="tinh" name="tinh" style="margin-left: 150px">
                    <option value="82">Tiền Giang</option>
                </select><br>
            </div>
            <div class="form-control">
                <label for="huyen">Huyện</label>
                <select id="huyen" name="huyen" style="margin-left: 150px">
                    <option value="815">Thành phố Mỹ Tho</option>
                    <option value="816">Thị xã Gò Công</option>
                    <option value="817">Thị xã Cai Lậy</option>
                    <option value="818">Huyện Tân Phước</option>
                    <option value="819">Huyện Cái Bè</option>
                    <option value="820">Huyện Cai Lậy</option>
                    <option value="821">Huyện Châu Thành</option>
                    <option value="822">Huyện Chợ Gạo</option>
                    <option value="823">Huyện Gò Công Tây</option>
                    <option value="824">Huyện Gò Công Đông</option>
                    <option value="825">Huyện Tân Phú Đông</option>
                </select><br>
            </div>
            <div class="form-control">
                <label for="xa">Xã</label>
                
                <select id="xa" name="xa" value="815" style="margin-left: 150px">
                    <option value="28249">Phường 5</option>
                    <option value="28252">Phường 4</option>
                    <option value="817">Thị xã Cai Lậy</option>
                    <option value="818">Huyện Tân Phước</option>
                    <option value="819">Huyện Cái Bè</option>
                    <option value="820">Huyện Cai Lậy</option>
                    <option value="821">Huyện Châu Thành</option>
                    <option value="822">Huyện Chợ Gạo</option>
                    <option value="823">Huyện Gò Công Tây</option>
                    <option value="824">Huyện Gò Công Đông</option>
                    <option value="825">Huyện Tân Phú Đông</option>
                </select><br>
                <select id="xa" name="xa" value="816" style="margin-left: 150px">
                    <option value="28249">Phường 5</option>
                    <option value="28252">Phường 4</option>
                </select>
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
                <input type="text" name="Phone" required/>
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
            <div class="form-control">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" style="margin-left: 150px">
                    <option value="0">Không hoạt động</option>
                    <option value="1">Đang hoạt động</option>
                </select><br>
            </div>
        <input id="themmoi" name="themmoi" type="submit" value="Thêm">
        <?php
            require 'xulythemCS.php';
        ?>
        </form>
    </div>
</body>
</html>