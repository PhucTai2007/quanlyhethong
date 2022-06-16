<?php
    include_once('connect.php');
    if(isset($_REQUEST['id_coso']) and $_REQUEST['id_coso']!=""){
        $id_coso=$_GET['id_coso'];
        $sql = "DELETE FROM coso WHERE id_coso='$id_coso'";
        if ($conn->query($sql) === TRUE) {
            echo "Xoá thành công!<br>";
            } else {
            echo "Error updating record: " . $conn->error;
            }
        echo "<a href='QLCS.php'>Trở về</a>";
        $conn->close();
    }
?>