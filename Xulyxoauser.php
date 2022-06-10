<?php
    include_once('connectQLUSER.php');
    if(isset($_REQUEST['id_user']) and $_REQUEST['id_user']!=""){
        $id_user=$_GET['id_user'];
        $sql = "DELETE FROM user WHERE id_user='$id_user'";
        if ($conn->query($sql) === TRUE) {
            echo "Xoá thành công!<br>";
            } else {
            echo "Error updating record: " . $conn->error;
            }
        echo "<a href='Xoauser.php'>Trở về</a>";
        $conn->close();
    }
?>