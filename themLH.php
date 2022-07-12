<!DOCTYPE html>
<html>
    <head>
        <title>Thêm loại hình</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/taomoiuser.css" />
    </head>
    <body>
    <div class="container">
        <div class="header">
            <h2>Thêm loại hình mới</h2>
        </div>
        <form id="form" class="form" method="post" action="themLH.php" enctype="multipart/form-data">
            <div class="form-control">
                <label for="tenLH">Tên loại hình</label>
                <input type="text" name="tenLH" required>
            </div>
<<<<<<< HEAD
            <!-- <div class="form-control">
                <label for="idLH">ID loại hình</label>
                <input type="text" name="idLH">
            </div> -->
            <div class="form-control" >
=======
            <!-- <div class="form-control" >
>>>>>>> f227594134b7200e4598830a2f72e4b5d5ac88e8
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" style="margin-left: 150px">
                    <option value="0">Hoạt động</option>
                    <option value="1">Không hoạt động</option>
                </select><br>
            </div> -->
            <input id="themmoi" name="themmoi" type="submit" value="Thêm">
            <?php
                require 'xulythemLH.php';
            ?>
        </form>
    </div>
    </body>
</html>