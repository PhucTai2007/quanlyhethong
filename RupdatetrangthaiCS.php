<?php
    include_once('connect.php');
    if(isset($_REQUEST['id_coso']) and $_REQUEST['id_coso']!=""){
        $id_coso=$_GET['id_coso'];
        $sql = "UPDATE coso set trangthai='1' WHERE id_coso='$id_coso' ";
        if ($conn->query($sql) === TRUE) {
            echo '<script language="javascript">alert("Cập nhật trạng thái thành công"); window.location="QLCS.php";</script>';
            } else {
            echo "Error updating record: " . $conn->error;
            }
        echo "<a href='QLCS.php'>Trở về</a>";
        $conn->close();
    }

?>