<?php
session_start();
$conn = mysqli_connect ("localhost","root","","quanlyhethong");
//     $username=$_SESSION['username'];
//     $sql= "SELECT * FROM user WHERE username='".$username."'";

//     $result = $conn->query($sql);
// 	if($result->num_rows > 0){
// 		while ($row = $result->fetch_array()) {
//             echo"xin chao: ". $username, "<br>";
//             echo"<a href='logout.php'>dang xuat</a>";
//         }
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Trang Chủ</title>
</head>
<body>
    <div id="header">
        <div id="header1">
            <img src="img/logo.png">
            <p>CHI CỤC TRỒNG TRỌT VÀ<br>BẢO VỆ THỰC VẬT</p>
        </div>
        <div id="header2">
            <?php
                $username=$_SESSION['username'];
                $sql= "SELECT * FROM user WHERE username='".$username."'";
            
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while ($row = $result->fetch_array()) {
                        echo"Xin chào: ". $row["ten_user"], "  |";
                        echo"<a href='logout.php'> Đăng Xuất</a>";
                        echo"<a href='thongtinUser.php'>Thông tin</a>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>