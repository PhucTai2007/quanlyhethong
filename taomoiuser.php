<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/taomoiuser.css" />
    <!-- <script type="text/javascript">
    function validataform(){
        var hoten = document.getElementById("hoten").Value;
        var user= document.getElementById("username").Value;
        var pass = document.getElementById("password").Value;
        var phone = document.getElementById("phone").Value;
        var mail = document.getElementById("mail").Value;

        if(hoten==""){
            alert(""
        }
    }
    </script> -->
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Tạo tài khoản</h2>
        </div>
        <form id="form" class="form" method="post" action="taomoiuser.php" onsubmit="check()" enctype="multipart/form-data">
            <div class="form-control">
                <label for="hoten">Họ Tên</label>
                <input type="text" id="hoten" name="hoten" required/>
                <small id="error1">Khong dc bo trong</small>
            </div>
            <div class="sex" style="margin-left: px;">
                <label for="gioitinh" >Giới tính:</label>
                    <select id="gioitinh" name="gioitinh" style="margin-left: 150px">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select><br>
            </div><br><br>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required/>
                <small id="error2">kh dc bo trong ten tk</small>
            </div>
            <div class="form-control">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required pattern=".{8,}" title="Mật khẩu phải có ít nhất 8 kí tự"/>
                <small id="error3">trong pass</small>
            </div>
            <div class="form-control">
                <label for="phone">Số ĐT</label>
                <input type="text" id="phone" name="phone" required pattern=".{10}" title="Vui lòng nhập lại số ĐT"/>
                <small id="error4">trong phone</small>
            </div>
            <div class="form-control">
                <label for="mail">Email</label>
                <input type="mail" id="mail" name="mail" required pattern="[a-z0-9._%+-]+@gmail.com" title="Sai định dạng Gmail"/>
                <small id="error5">trong mail</small>
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