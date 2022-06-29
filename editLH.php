<?php
session_start();
    include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông tin Lĩnh Vực</title>
</head>
<body>
    <div>
        <?php
        // if(isset($_POST['id_loaihinh'])){
            $loaihinh=$_SESSION['id_loaihinh'];
            $ten = $_SESSION['ten_loaihinh'];
            $s3 = "SELECT * from loaihinh where id_loaihinh='$id' ";
            $rs3 = mysqli_query($conn, $s3);
            $r3 = mysqli_fetch_array($rs3);
            $ten = $r3['ten_loaihinh'];
            $s = "SELECT * from loaihinh where id_loaihinh = '$id' ";
            $rs = mysqli_query($conn,$s);
            $r = mysqli_fetch_array($rs);
        //}
        ?>
    </div>
    <form method="post">
        <?php
            echo "<h3> Sửa thông tin linh vực </h3>";
            echo "<table id='tb'>
                <tr>
                    <td>Tên lĩnh vực:</td>
                    <td><input type='text' name='ten_loaihinh' value='".$ten."' /></td>
                </tr>
            </table>";
        ?>
        <input type="submit" name="update" value="Cập nhật">
    </form>
    <form action="QLLH.php" method="POST">
           <input type="submit" value="Hủy" id='tee'>
    </form>
    <?php
        if(isset($_POST['update'])){
            $ten = $_POST['ten_loaihinh'];
            $temp1=strlen($ten);
            }
            if($ten = ''){
                echo "<script type='text/javascript'>alert('ten dang bo trong');</script>";
            }else{
                $sql = "UPDATE loaihinh SET ten_loaihinh ='$ten' where id_loaihinh='$id' ";
            }
    ?>
</body>
</html>