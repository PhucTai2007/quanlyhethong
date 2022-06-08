<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="taomoi1.css" />
    </head>
    <body>
        <table border="1">
            <td>
                <form method="post" action="taomoiuser.php" class="form">
                    <h2 style="text-align:center">Thêm USER mới</h2>
                    <!-- Họ tên: <input type="text" name="hoten" value="" required>
                    Giới tính: <input type="text" name="gioitinh" value="" required>
                    Username: <input type="text" name="username" value="" required>
                    Password: <input type="text" name="password" value="" required>
                    Phone: <input type="text" name="phone" value="" required>
                    Email: <input type="email" name="mail" value="" required>
                    Vaitro: <input type="text" name="vaitro" value="" required> -->
                    <!-- <label>Họ tên: </label>
                    <input type="text" name="hoten" style="margin-left: 66px"><br><br>
                    <label for="gioitinh">Giới tính: </label>
                    <input type="radio" id="nam" name="gioitinh" value="Nam" style="margin-left: 66px;">
                    <label for="Nam">Nam</label>
                    <input type="radio" id="nu" name="gioitinh" value="Nữ">
                    <label for="Nữ">Nữ</label><br>
                    <label>Username</label>
                    <input type="text" name="username" style="margin: left 120px ;"><br>
                    <label>Password</label>
                    <input type="text" name="password" style="margin: left 63px ;"><br>
                    <label>Phone</label>
                    <input type="text" name="password" style="margin: left 100px ;"><br>
                    <input type="submit" name="themmoi" value="Thêm" style="text-align: center;"/> -->
                    <label for="hoten">Họ tên: </label>
                    <input type="text" name="hoten" style="margin-left: 63px"><br><br>
                    <label for="gioitinh">Giới tính</label>
                    <input type="radio" id="nam" name="gioitinh" value="Nam" style="margin-left: 50px">
                    <label for="Nam">Nam</label>
                    <input type="radio" id="nu" name="gioitinh" value="Nữ">
                    <label for="Nữ">Nữ</label><br><br>
                    <label for="username">Username</label>
                    <input type="text" name="username" style="margin-left: 44px"><br><br>
                    <label for="password">Mật khẩu: </label>
                    <input type="password" name="password" style="margin-left: 43px"><br><br>
                    <label for="phone">Số ĐT: </label>
                    <input type="text" name="phone" style="margin-left: 63px"><br><br>
                    <label for="mail">Email: </label>
                    <input type="email" name="mail" style="margin-left: 67px"><br><br>
                    <label for="vaitro">Vai trò: </label>
                    <select id="vaitro" name="vaitro" style="margin-left: 80px"><br><br>
                     <option value="0">Admin</option>
                     <option value="1">User</option><br>
                    </select><br><br>
                    <input type="submit" name="themmoi" value="Thêm" style="margin-left: 150px;"/>
                    <?php 
                        require 'xulytaouser.php';
                    ?>

                </form>
        </td>
        </table>
    </body>
</html>