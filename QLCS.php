<!DOCTYPE html>
<html>
    <head>
        <title>QUẢN LÝ CƠ SỞ</title>
    </head>
    <body>
        <table border="1">
        <tr>
        <td>ID</td>
        <td>Tên Cơ Sở</td>
        <td>Tên chủ cơ sở</td>
        <td>Địa chỉ</td>
        <td>Phone</td>
        <td>Trình độ</td>
        </tr>
        <?php 
            require 'connect.php';
            $query=mysqli_query($conn,"select * from `coso`");
            while($row=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $row['id_coso']; ?></td>
            <td><?php echo $row['ten_coso']; ?></td>
            <td><?php echo $row['ten_chucoso']; ?></td>
            <td><?php echo $row['dia_chi']; ?></td>
            <td><?php echo $row['sdt']; ?></td>
            <td><?php echo $row['trinhdo_bangcap']; ?></td>
            <td><a href="editCS.php?id_coso=<?php echo $row['id_coso']; ?>">Sửa</td>
            <td><a href="deleteCS.php?id_coso=<?php echo $row['id_coso']; ?>">Xóa</td>
        </tr>
        <?php
        }
        ?>
        </table>
        <button onclick="document.location='admin.php'">Trở về</button>
        <button onclick="document.location='themCS.php'">Thêm</button>
    </body>
</html>