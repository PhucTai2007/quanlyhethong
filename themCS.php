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
                <input type="text" name="TenCS">
            </div>
            <div class="form-control">
                <label for="TenChu">Tên Chủ Cơ Sở</label>
                <input type="text" name="TenChu">
            </div>
            <div class="form-control">
                <label for="Diachi">Đia chỉ</label>
                <input type="text" name="Diachi">
            </div>
            <div class="form-control">
                <label for="Phone">Số ĐT</label>
                <input type="text" name="Phone"/>
            </div>
            <div class="form-control" >
                <label for="trinhdo">Trình độ</label>
                <select id="trinhdo" name="trinhdo" style="margin-left: 150px">
                    <option value="0">Bằng cấp</option>
                    <option value="1">Giấy chứng nhận</option>
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