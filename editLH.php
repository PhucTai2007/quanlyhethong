<?php
<<<<<<< HEAD
    session_start();
    $conn=new mysqli('localhost','root','','quanlyhethong') or die("Thất bại");
	mysqli_query($conn,'SET NAMES UTF8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sửa thông tin loại hình</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h2>Sửa thông tin</h2>
        <div>
            <?php
                if(isset($_POST['id_loaihinh'])){
                    $idloaihinh=$_SESSION['id_loaihinh'];
                    $s3= "SELECT * from loaihinh WHERE id_loaihinh='$idloaihinh'";
                    $rs3= mysqli_query($conn,$s3);
                    $r3=mysqli_fetch_assoc($rs3);
                    $ten=$r3['ten_loaihinh'];
                    $s = "SELECT * from loaihinh WHERE id_loaihinh='$idloaihinh'";
                    $rs= mysqli_query($conn,$s);
                    $r=mysqli_fetch_assoc($rs);
                }
            ?>
        </div>
        <form method='post'>
        <?php
            echo"<table id='tea'>
                <tr>
                    <td>ID loại hình <br><br></td>
                    <td>".$r['id_loaihinh'] ."<br><br></td>
                </tr>
                <tr>
                    <td>Tên loại hình</td>
                    <td><input type='text'name='tenloaihinh' value=".$ten."></td>
                </tr>
            </table>";
        ?>
        <input type="submit" name="update" value="Update">
        </form>
        <br>
        <form method="post" action="QLLH.php">
            <input type="submit" value="Trở lại">
        </form>
        <?php 
            if(isset($_POST['update'])){
                $MaLH=$_GET['key'];
                $TenLH=$_POST['tenloaihinh'];
                if($TenLH==''){
                    echo "<script type='text/javascript'>alert('Không được bỏ trống!');</script>";
                }else{
                    $sql= "UPDATE loaihinh SET ten_loaihinh='$TenLH' WHERE id_loaihinh='$MaLH'";
                    if(mysqli_query($conn,$sql)){
                        echo "<script type='text/javascript'>alert('Cập nhật thông tin thành công');</script>";
                        echo "<script type='text/javascript'>window.location='QLLH.php';</script>";
                    }else{
                        echo "<script type='text/javascript'>alert('Lỗi sever!');</script>";
                    }
                }
            }
        ?>
    </body>
=======
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
>>>>>>> f227594134b7200e4598830a2f72e4b5d5ac88e8
</html>