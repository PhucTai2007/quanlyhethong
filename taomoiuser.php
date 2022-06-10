<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/taomoiuser.css" />
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Tạo tài khoản</h2>
        </div>
        <form id="form" class="form" method="post" action="taomoiuser.php" enctype="multipart/form-data">
            <div class="form-control">
                <label for="hoten">Họ Tên</label>
                <input type="text" name="hoten">
            </div>
            <div class="sex" style="margin-left: px;">
                <label for="gioitinh" >Giới tính:
                    <input type="radio" id="nam" name="gioitinh" value="Nam" style="margin-left: 150px;">
                    <label for="gioitinh">Nam</label>
                    <input type="radio" id="nu" name="gioitinh" value="Nữ" style="margin-left: 50px;">
                    <label for="gioitinh">Nữ</label>
                </label>
            </div><br><br>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
            <div class="form-control">
                <label for="passwork">Mật khẩu:</label>
                <input type="password" name="password"/>
            </div>
            <div class="form-control">
                <label for="phone">Số ĐT</label>
                <input type="text" name="phone"/>
            </div>
            <div class="form-control">
                <label for="mail">Email</label>
                <input type="mail" name="mail" />
            </div>
            <div class="form-control" >
                <label for="vaitro">Vai Trò</label>
                <select id="vaitro" name="vaitro" style="margin-left: 150px">
                    <option value="0">Admin</option>
                    <option value="1">User</option>
                </select><br>
            </div>
        <input id="themmoi" name="themmoi" type="submit" value="Thêm User">
        <?php
            require 'xulytaouser.php';
        ?>
        </form>
    </div>
</body> 
</html>