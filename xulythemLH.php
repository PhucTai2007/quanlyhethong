<?php
    header('Content-Type: text/html; charset=utf-8');
    $conn = mysqli_connect ("localhost","root","","quanlyhethong") or die ('Lỗi');
    mysqli_set_charset ($conn, "utf8");
    if(isset($_POST['themmoi'])){
        $tenLH=$_POST['tenLH'];
<<<<<<< HEAD
        // $idLH=$_POST['idLH'];
=======
        // $trangthai = $_POST['trangthai'];
>>>>>>> f227594134b7200e4598830a2f72e4b5d5ac88e8
        if(empty($tenLH)){
            array_push($errors,"Không được để trống");
        }
        // if(empty($idLH)){
        //     array_push($errors,"Không được để trống");
        // }
        $sql = "SELECT * FROM loaihinh WHERE ten_loaihinh = '$tenLH'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            echo '<script language="javascript">alert("Bị trùng tên"); window.location="themLH.php";</script>';
            die ();
        }
        else{
            $sql = "INSERT INTO loaihinh (ten_loaihinh) VALUES ('$tenLH')";
<<<<<<< HEAD
            echo '<script language="javascript">alert("Thêm User thành công!"); window.location="QLLH.php";</script>';
            if(mysqli_query($conn, $sql)){
                echo "Tên loại hinh: ".$_POST['ten_loaihinh']."<br/>";
                // echo "ID loại hinh: ".$_POST['id_loaihinh']."<br/>";
=======
            echo '<script language="javascript">alert("Thêm loại hình thành công!"); window.location="QLLH.php";</script>';
            if(mysqli_query($conn, $sql)){
                echo "Tên loại hinh: ".$_POST['ten_loaihinh']."<br/>";
                // echo "Trạng thái: ".$_POST['trangthai_MD']."<br/>";
>>>>>>> f227594134b7200e4598830a2f72e4b5d5ac88e8
            }
            else{
                echo '<script language="javascript">alert("Lỗi"); window.location="themLH.php";</script>';
            }
        }
    }
?>