<?php
session_start();
    $conn=new mysqli('localhost','root','','quanlyhethong') or die("Thất bại");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi Mật Khẩu</title>
</head>
<body>
    <div>
        <?php
            $username=$_SESSION['username'];
            $password=$_SESSION['password'];
            $s= "SELECT * from user WHERE username='$username'";
            $rs= mysqli_query($conn,$s);
            $r=mysqli_fetch_assoc($rs);
        ?>
    </div>
    <form method='post'>
    <?php
        echo "<h3>Đổi mật khẩu:</h3><hr>";
		    echo "<table id='tb'>
				<tr>
					<td>Tài khoản: <br><br></td>
					<td>".$r['ten_user'] ."<br><br></td>
				</tr>
				<tr>
				    <td>Nhập mật khẩu củ:<br><br></td>
				    <td><input type='password' name='mkcu'><br><br></td>
				</tr>
				<tr>
				    <td>Nhập mật khẩu mới:<br><br></td>
				    <td><input type='password' name='mkmoi'><br><br></td>
				</tr>
				<tr>
				    <td>Nhập lại mật khẩu mới:<br><br></td>
				    <td><input type='password' name='nlmkmoi'><br><br></td>
				</tr>
			</table>";
    ?>
    <input type="submit" name="ud" value="Đổi Mật Khẩu" id="tee">
    <input type="reset" name="huy" value="Hủy" id="tee">
    </form>
    <?php
    if(isset($_POST['ud'])){
        $mkcu=MD5($_POST['mkcu']);
		$mkmoi=md5($_POST['mkmoi']);
		$nlmkmoi=md5($_POST['nlmkmoi']);
		$temp1=strlen($mkcu);
		$temp2=strlen($mkmoi);
		$temp3=strlen($nlmkmoi);
        $sql = "UPDATE user set password='$mkmoi' where username='$username'";
        if(mysqli_query($conn,$sql)){
            $_SESSION=$mkmoi;
            echo"thanh cong";
            echo "<script type='text/javascript'>window.location='thongtinuser.php';</script>";
        }else{
        echo"that bai";
        }
    }
    ?><br>
    <button onclick="document.location='thongtinuser.php'">Về trang chủ</button>
</body>
</html>