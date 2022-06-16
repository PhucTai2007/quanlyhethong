<?php 
    header('Content-Type: text/html; charset=utf-8');
    $conn = mysqli_connect ("localhost","root","","quanlyhethong") or die ('Lỗi');
    mysqli_set_charset ($conn, "utf8");
    if(isset($_POST['themmoi'])){
        $tenLH=$_POST['tenLH'];
        $idLH=$_POST['idLH'];
        if(empty($tenLH)){
            array_push($errors,"Không được để trống");
        }
        if(empty($idLH)){
            array_push($errors,"Không được để trống");
        }
        $sql = "SELECT * FROM loaihinh WHERE ten_loaihinh = '$tenLH' OR id_loaihinh = '$idLH'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            echo '<script language="javascript">alert("Bị trùng tên"); window.location="themLH.php";</script>';
            die ();
        }
        else{
            $sql = "INSERT INTO loaihinh (ten_loaihinh, id_loaihinh) VALUES ('$tenLH' , '$idLH')";
            echo '<script language="javascript">alert("Thêm User thành công!"); window.location="QLLH.php";</script>';
            if(mysqli_query($conn, $sql)){
                echo "Tên loại hinh: ".$_POST['ten_loaihinh']."<br/>";
                echo "ID loại hinh: ".$_POST['id_loaihinh']."<br/>";
            }
            else{
                echo '<script language="javascript">alert("Lỗi"); window.location="themLH.php";</script>';
            }
        }
    }
?>