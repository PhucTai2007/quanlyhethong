<!DOCTYPE html>
<html>
    <head>
        <title>Thêm lĩnh vực</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/taomoiuser.css" />
    </head>
    <body>
    <div class="container">
        <div class="header">
            <h2>Thêm lĩnh vực mới</h2>
        </div>
        <form id="form" class="form" method="post" action="themLV.php" enctype="multipart/form-data">
            <div class="form-control">
                <label for="tenLV">Tên lĩnh vực</label>
                <input type="text" name="tenLV">
            </div>
            <!-- <div class="form-control">
                <label for="idLH">ID loại hình</label>
                <input type="text" name="idLH">
            </div> -->
            <div class="form-control" >
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" style="margin-left: 150px">
                    <option value="0">Hoạt động</option>
                    <option value="1">Đã xóa</option>
                </select><br>
            </div>
            <input id="themmoi" name="themmoi" type="submit" value="Thêm">
            <?php 
                require 'xulythemLV.php';
            ?>
        </form>
    </div>
    </body>
</html>