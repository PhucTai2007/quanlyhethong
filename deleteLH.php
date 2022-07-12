<?php
    include_once('connect.php');
    if(isset($_REQUEST['id_loaihinh']) and $_REQUEST['id_loaihinh']!=""){
        $id_loaihinh=$_GET['id_loaihinh'];
        $sql = "DELETE FROM loaihinh WHERE id_loaihinh='$id_loaihinh'";
        if ($conn->query($sql) === TRUE) {
            echo "Xoá thành công!<br>";
            } else {
            echo "Error updating record: " . $conn->error;
            }
        echo "<a href='QLLH.php'>Trở về</a>";
        $conn->close();
    }
?>
