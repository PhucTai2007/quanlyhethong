<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","quanlyhethong");
    mysqli_query($conn,'SET NAMES UTF8');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sửa thông tin lĩnh vực</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <?php 
                $id=$_SESSION['id'];
                // $password=$_SESSION['password'];
                $s3="SELECT * from linhvuc where id_linhvuc='$id'";
                $rs3=mysqli_query($conn,$s3);
                $r3=mysqli_fetch_assoc($rs3);
                $ten=$r3['ten_linhvuc'];
                // $mail=$r3['mail_user'];
                // $sdt=$r3['sdt_user'];
                $s="SELECT * from linhvuc where id_linhvuc = '$id'";
                $rs=mysqli_query($conn,$s);
                $r=mysqli_fetch_assoc($rs);
                // echo "<a href='index.php'>Về trang chủ</a>"
            ?>
        </div>
        
       <form method="post">
           <?php 
                echo "<h3>Sửa thông tin</h3><hr>";
                // echo "Username". $username;
                echo "<table id='tb'>
                    <tr>
                        <td>ID: <br><br></td>
                        <td>".$r['id'] ."<br><br></td>
                    </tr>
                    <tr>
                        <td>Tên LV: <br><br></td>
                        <td><input type='text' name='hoten' value='".$ten."'><br><br></td>
                    </tr>
                   
                </table>";
           ?>
           <br>
           <input type="submit" name="update" value="Cập nhật" id="tee">
       </form>
       <br>
       <form action="QLLV.php" method="POST">
           <input type="submit" value="Hủy" id='tee'>
       </form>
       <?php
		if(isset($_POST['update'])){
			$tenLV=$_POST['tenLV'];
			// $email=$_POST['email'];
			// $phone=$_POST['sdt'];
			$temp1=strlen($tenLV);
			// $temp2=strlen($email);
			// $temp3=strlen($phone);
			$array = array();
			// for($i=0;$i<$temp3;$i++){
			// 	$xx=substr( $phone,  $i, 1);
			// 	$array[$i]=$xx;
			// }
            $sql= "UPDATE linhvuc SET ten_linhvuc='$tenLV' WHERE id_linhvuc='$id'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>alert('Cập nhật thông tin thành công');</script>";
                echo "<script type='text/javascript'>window.location='QLLV.php';</script>";
            }else{
                echo "<script type='text/javascript'>alert('Lỗi!');</script>";
            }
			}
	?>
	<br>
    <button onclick="document.location='admin.php'">Về trang chủ</button>
	<hr>
    </body>
</html>