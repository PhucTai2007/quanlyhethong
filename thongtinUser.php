<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","quanlyhethong");
    mysqli_query($conn,'SET NAMES UTF8');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Thông tin tài khoản</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <?php 
                $username=$_SESSION['username'];
                $password=$_SESSION['password'];
                
                $s="SELECT * from user where username = '$username'";
                $rs=mysqli_query($conn,$s);
                $r=mysqli_fetch_assoc($rs);
                // echo "<a href='admin.php'>Về trang chủ</a>"
            ?>
        </div>
        
           <?php 
                echo "<h3>Thông tin tài khoản</h3><hr>";
                // echo "Username". $username;
                echo "<table id='tb'>
                    <tr>
                        <td>Username: <br><br></td>
                        <td>".$r['username'] ."<br><br></td>
                    </tr>
                    <tr>
                        <td>Họ tên: <br><br></td>
                        <td>".$r['ten_user'] ."<br><br></td>
                    </tr>
                    <tr>
                        <td>Email: <br><br></td>
                        <td>".$r['mail_user'] ."<br><br></td>
                    </tr>
                    <tr>
                        <td>Phone: <br><br></td>
                        <td>".$r['sdt_user'] ."<br><br></td>
                    </tr>
                </table>";
           ?>
           <br>
        <button onclick="document.location='suathongtinUser.php'">Sửa thông tin</button>
        <br>
        <br>
        <button onclick="document.location='index.php'">Về trang chủ</button>
    </body>
</html>
       