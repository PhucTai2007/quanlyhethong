<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","quanlyhethong");
    mysqli_query($conn,'SET NAMES UTF8');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sửa thông tin cơ sở</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <?php
                // if(isset($_POST['ten_coso'])||isset($_POST['ten_chucoso'])||isset($_POST['sdt'])||isset($_POST['dia_chi'])){
                    $ten=$_SESSION['ten'];
                    // $tenchu=$_SESSION['tenchu'];
                    // $diachi=$_SESSION['dia_chi'];
                    // $sdt=$_SESSION['sdt'];
                    $s3="SELECT * from coso where ten_coso='$username'";
                    $rs3=mysqli_query($conn,$s3);
                    $r3=mysqli_fetch_assoc($rs3);
                    $tenchu=$r3['tenchu'];
                    $sdt=$r3['sdt'];
                    $dc=$r3['dia_chi'];
                    $s="SELECT * from coso where ten_coso='$usename'";
                    $rs=mysqli_query($conn,$s);
                    $r=mysqli_fetch_assoc($rs);
                // }
            ?>
        </div>
        
        <form method="post">
            <?php 
                echo "<h3>Sửa thông tin</h3><hr>";
                // echo "Username". $username;
                echo "<table id='tb'>
                    <tr>
                        <td>Tên Cơ Sở: <br><br></td>
                        <td>".$r['ten_coso'] ."<br><br></td>
                    </tr>
                    <tr>
                        <td>Họ tên chủ cơ sở: <br><br></td>
                        <td><input type='text' name='ten_chucoso' value='".$tenchu."'><br><br></td>
                    </tr>
                    <tr>
                        <td>SĐT: <br><br></td>
                        <td><input type='text' name='sdt' value='".$sdt."'><br><br></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ: <br><br></td>
                        <td><input type='text' name='diachi' value='".$dc."'><br><br></td>
                    </tr>
                </table>";
            ?>
            <br>
            <input type="submit" name="update" value="Cập nhật" id="tee">
       </form>
       <br>
       <form action="QLCS.php" method="POST">
           <input type="submit" value="Hủy" id='tee'>
       </form>
       <?php
		if(isset($_POST['update'])){
			$tenchu=$_POST['ten_chucoso'];
			$sdt=$_POST['sdt'];
			$diachi=$_POST['dia_chi'];
			$temp1=strlen($tenchu);
			$temp2=strlen($sdt);
			$temp3=strlen($diachi);
			$array = array();
			for($i=0;$i<$temp3;$i++){
				$xx=substr( $sdt,  $i, 1);
				$array[$i]=$xx;
			}
            $sql= "UPDATE user SET ten_chucoso='$tenchu', sdt='$sdt', dia_chi='$diachi' WHERE ten_coso='$username'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>alert('Cập nhật thông tin thành công');</script>";
                echo "<script type='text/javascript'>window.location='QLCS.php';</script>";
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