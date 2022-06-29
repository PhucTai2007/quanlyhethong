<?php
    include_once('connect.php');
    if(isset($_REQUEST['id_linhvuc']) and $_REQUEST['id_linhvuc']!=""){
        $id_linhvuc=$_GET['id_linhvuc'];
        $sql = "DELETE FROM linhvuc WHERE id_linhvuc='$id_linhvuc'";
        if ($conn->query($sql) === TRUE) {
            echo "Xoá thành công!<br>";
            } else {
            echo "Error updating record: " . $conn->error;
            }
        echo "<a href='QLLV.php'>Trở về</a>";
        $conn->close();
    }
?>