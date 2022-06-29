<?php
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
</html>