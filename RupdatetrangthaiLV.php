<?php
    include_once('connect.php');
    if(isset($_REQUEST['id_linhvuc']) and $_REQUEST['id_linhvuc']!=""){
        $id_linhvuc=$_GET['id_linhvuc'];
        $sql = "UPDATE linhvuc set trangthai_MD='0' WHERE id_linhvuc='$id_linhvuc'";
        if ($conn->query($sql) === TRUE) {
            echo '<script language="javascript">alert("Xóa lĩnh vực thành công"); window.location="QLLV.php";</script>';
        } else {
            echo "Error updating record: " . $conn->error;
            }
        echo "<a href='QLLV.php'>Trở về</a>";
        $conn->close();
    }
?>