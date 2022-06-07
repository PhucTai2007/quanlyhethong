<?php
// session_start();
// $conn = mysqli_connect ("localhost","root","","quanlyhethong");
//     $username=$_SESSION['username'];
//     $sql= "SELECT * FROM user WHERE username='".$username."'";

//     $result = $conn->query($sql);
// 	if($result->num_rows > 0){
// 		while ($row = $result->fetch_array()) {
//             echo"xin chao ". $username, "<br>";
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
				if(isset($_SESSION['taikhoan']) && isset($_SESSION['matkhau'])){
					$taikhoan=$_SESSION['taikhoan'];
					$matkhau=$_SESSION['matkhau'];
					$s= "SELECT * from KhachHang WHERE MSKH='$taikhoan'";
					$rs= mysqli_query($conn,$s);
					$r=mysqli_fetch_assoc($rs);
					    echo "Xin chào ".$r['HoTenKH'] ." | <a href='lichsudathang.php'>Lịch sử mua hàng</a><br>";
					        echo "<a href='quanlytaikhoan.php'>Quản lý tài khoản</a> | <a href='giohang.php'>Giỏ hàng</a> | <a href='dangxuat.php'>Đăng xuất</a>";
				}else{
                    echo"";
				}
			?>
        </div>
    </div>
</body>
</html>