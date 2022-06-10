<?php
    header('Content-Type: text/html; charset=utf-8');
   $conn = mysqli_connect ("localhost","root","","quanlyhethong") or die ('Lỗi');
   mysqli_set_charset ($conn, "utf8");
   if(isset($_POST['themmoi'])){
       $Hoten = $_POST['hoten'];
       $Gioitinh = $_POST['gioitinh'];
       $Username = $_POST['username'];
       $Password = md5($_POST['password']);
       $Phone = $_POST['phone'];
       $mail = $_POST['mail'];
       $vaitro = $_POST['vaitro'];
       if (empty($Hoten)) {
           array_push($errors, "Không được để trống!");
        }
        if (empty($Gioitinh)) {
            array_push($errors, "Không được để trống!");
        }
        if (empty($Username)) {
            array_push($errors, "Không được để trống!");
        }
        if (empty($Password)) {
            array_push($errors, "Không được để trống!");
        }
        if (empty($Phone)) {
            array_push($errors, "Không được để trống!");
        }
        if (empty($mail)) {
            array_push($errors, "Không được để trống!");
        }
        if (empty($vaitro)) {
            array_push($errors, "Không được để trống!");
        }
        $sql = "SELECT * FROM user WHERE username = '$Username' OR mail_user = '$mail'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            echo '<script language="javascript">alert("Bị trùng tên"); window.location="taomoiuser.php";</script>';
            die ();
        }
        else {
            $sql = "INSERT INTO user (username , password , ten_user , gioi_tinh , sdt_user , mail_user , mavaitro) VALUES ('$Username' , '$Password' , '$Hoten' , '$Gioitinh' , '$Phone' , '$mail' , '$vaitro')";
            echo '<script language="javascript">alert("Thêm User thành công!"); window.location="admin.php";</script>';
            if (mysqli_query($conn, $sql)){
                echo "Họ tên: ".$_POST['ten_user']."<br/>";
                echo "Giới Tính: ".$_POST['gioi_tinh']."<br/>";
                echo "Email: ".$_POST['mail_user']."<br/>";
                echo "Phone: ".$_POST['sdt_user']."<br/>";
                echo "Username: ".$_POST['username']."<br/>";
                echo "Password: ".$_POST['password']."<br/>";
                echo "Mã vai trò: ".$_POST['mavaitro']."<br/>";
            }
            else {
                echo '<script language="javascript">alert("Lỗi"); window.location="taomoiuser.php";</script>';
            }
        }
   }
?>