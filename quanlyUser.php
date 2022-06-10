<!DOCTYPE html>
<html>
    <head>
        <title>Xóa tài khoản User</title>
    </head>
    <body>
        <table border="1">
        <tr>
        <td>ID</td>
        <td>Tên User</td>
        <td>Username</td>
        <td>Password</td>
        <td>Phone</td>
        <td>Email</td>
        </tr>
        <?php 
            require 'connectQLUSER.php';
            $query=mysqli_query($conn,"select * from `user`");
            while($row=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $row['id_user']; ?></td>
            <td><?php echo $row['ten_user']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['sdt_user']; ?></td>
            <td><?php echo $row['mail_user']; ?></td>
            <td><a href="Xulyxoauser.php?id_user=<?php echo $row['id_user']; ?>">Xóa</td>
        </tr>
        <?php
        }
        ?>
        </table>
        <button onclick="document.location='admin.php'">Trở về</button>
        <button onclick="document='taomoiuser.php'">Thêm User</button>
    </body>
</html>