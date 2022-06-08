<?php
session_start();
$conn = mysqli_connect ("localhost","root","","quanlyhethong");
    $username=$_SESSION['username'];
    $sql= "SELECT * FROM user WHERE username='".$username."'";

    $result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>TRANG CHỦ</title>
</head>
<body>
    <div id="header">
        <div id="header1">
            <p><img src="">CHI CỤC TRỒNG TRỌT VÀ BẢO VỀ THỰC VẬT</p>
        </div>
        <div id="header2">
            <?php
				if(isset($_SESSION['username']) && isset($_SESSION['password'])){
					$username=$_SESSION['username'];
					$password=$_SESSION['password'];
					$s= "SELECT * from user WHERE username='$username'";
					$rs= mysqli_query($conn,$s);
					$r=mysqli_fetch_assoc($rs);
					    echo "Xin chào ".$r['ten_user'] ." | <a href='logout.php'> Đăng xuất</a><br>";
				}else{
                    echo"0";
				}
			?>
        </div>
    </div>
</body>
</html>