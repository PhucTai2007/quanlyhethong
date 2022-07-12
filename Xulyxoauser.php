<?php
    include_once('connect.php');
    if(isset($_REQUEST['id_user']) and $_REQUEST['id_user']!=""){
        $id_user=$_GET['id_user'];
        $sql = "UPDATE user set trangthai='1' WHERE id_user='$id_user' ";
        if ($conn->query($sql) === TRUE) {
            echo '<script language="javascript">alert("Xóa User thành công!"); window.location="quanlyUser.php";</script>';
            } else {
            echo "Error updating record: " . $conn->error;
            }
        echo "<a href='quanlyUser.php'>Trở về</a>";
        $conn->close();
    }
?>