<?php
    include_once('connect.php');
    if(isset($_REQUEST['id_loaihinh']) and $_REQUEST['id_loaihinh']!=""){
    $id_loaihinh=$_GET['id_loaihinh'];
        $sql = "UPDATE loaihinh set trangthai_MD='0' WHERE id_loaihinh='$id_loaihinh'";
        if ($conn->query($sql) === TRUE) {
            echo '<script language="javascript">alert("Xóa loại hình thành công"); window.location="QLLH.php";</script>';
            } else {
            echo "Error updating record: " . $conn->error;
            }
        echo "<a href='QLLH.php'>Trở về</a>";
        $conn->close();
    }
?>