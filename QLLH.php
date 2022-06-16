<!DOCTYPE html>
<html>
    <head>
        <title>QUẢN LÝ LOẠI HÌNH</title>
    </head>
    <body>
        <table border="1">
        <tr>
        <td>ID</td>
        <td>Tên loại hình</td>
        <?php 
            require 'connect.php';
            $query=mysqli_query($conn,"select * from `loaihinh`");
            while($row=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $row['id_loaihinh']; ?></td>
            <td><?php echo $row['ten_loaihinh']; ?></td>
            <td><a href="editLH.php?id_loaihinh=<?php echo $row['id_loaihinh']; ?>">Sửa</td>
            <td><a href="deleteLH.php?id_loaihinh=<?php echo $row['id_loaihinh']; ?>">Xóa</td>
        </tr>
        <?php
        }
        ?>
        </table>
        <button onclick="document.location='admin.php'">Trở về</button>
        <button onclick="document.location='themLH.php'">Thêm</button>
    </body>
</html>