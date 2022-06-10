<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","quanlyhethong");
    mysqli_query($conn,'SET NAMES UTF8');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sửa thông tin tài khoản</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <?php 
                $username=$_SESSION['username'];
                $password=$_SESSION['password'];
                $s3="SELECT * from user where username='$username'";
                $rs3=mysqli_query($conn,$s3);
                $r3=mysqli_fetch_assoc($rs3);
                $ten=$r3['ten_user'];
                $mail=$r3['mail_user'];
                $sdt=$r3['sdt_user'];
                $s="SELECT * from user where username = '$username'";
                $rs=mysqli_query($conn,$s);
                $r=mysqli_fetch_assoc($rs);
                echo "<a href='admin.php'>Về trang chủ</a>"
            ?>
        </div>
        
       <form method="post">
           <?php 
                echo "<h3>Sửa thông tin</h3><hr>";
                // echo "Username". $username;
                echo "<table id='tb'>
                    <tr>
                        <td>Username: <br><br></td>
                        <td>".$r['username'] ."<br><br></td>
                    </tr>
                    <tr>
                        <td>Họ tên: <br><br></td>
                        <td><input type='text' name='hoten' value='".$ten."'><br><br></td>
                    </tr>
                    <tr>
                        <td>Email: <br><br></td>
                        <td><input type='email' name='email' value='".$mail."'><br><br></td>
                    </tr>
                    <tr>
                        <td>Phone: <br><br></td>
                        <td><input type='text' name='sdt' value='".$sdt."'><br><br></td>
                    </tr>
                </table>";
           ?>
           <br>
           <input type="submit" name="update" value="Cập nhật" id="tee">
       </form>
       <br>
       <form action="thongtinadmin.php" method="POST">
           <input type="submit" value="Hủy" id='tee'>
       </form>
       <?php
		if(isset($_POST['update'])){
			$hoten=$_POST['hoten'];
			$email=$_POST['email'];
			$phone=$_POST['sdt'];
			$temp1=strlen($hoten);
			$temp2=strlen($email);
			$temp3=strlen($phone);
			$array = array();
			for($i=0;$i<$temp3;$i++){
				$xx=substr( $phone,  $i, 1);
				$array[$i]=$xx;
			}
            $sql= "UPDATE user SET ten_user='$hoten', mail_user='$email', sdt_user='$phone' WHERE username='$username'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>alert('Cập nhật thông tin thành công');</script>";
                echo "<script type='text/javascript'>window.location='thongtinadmin.php';</script>";
            }else{
                echo "<script type='text/javascript'>alert('Lỗi!');</script>";
            }
			}
	?>
	<br>
	<hr>
    </body>
</html>