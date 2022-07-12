<?php
    include_once('connect.php');
    if(isset($_REQUEST['id_user']) and $_REQUEST['id_user']!=""){
        $id_user=$_GET['id_user'];
        $password = md5('0');
        $sql = "UPDATE user set password='$password' WHERE id_user='$id_user' ";
        if ($conn->query($sql) === TRUE) {
            echo '<script language="javascript">alert("Cập nhật Mật khẩu lại thành công"); window.location="QuanlyUser.php";</script>';
            } else {
            echo "Error updating record: " . $conn->error;
            }
        echo "<a href='QuanlyUser.php'>Trở về</a>";
        $conn->close();
    }

?>