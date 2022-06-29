<?php 
    header('Content-Type: text/html; charset=utf-8');
    $conn = mysqli_connect ("localhost","root","","quanlyhethong") or die ('Lỗi');
    mysqli_set_charset ($conn, "utf8");
    if(isset($_POST['themmoi'])){
        $tenLV=$_POST['tenLV'];
        // $idLH=$_POST['idLH'];
        if(empty($tenLV)){
            array_push($errors,"Không được để trống");
        }
        // if(empty($idLH)){
        //     array_push($errors,"Không được để trống");
        // }
        $sql = "SELECT * FROM linhvuc WHERE ten_linhvuc = '$tenLV' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            echo '<script language="javascript">alert("Bị trùng tên"); window.location="themLV.php";</script>';
            die ();
        }
        else{
            $sql = "INSERT INTO linhvuc (ten_linhvuc) VALUES ('$tenLV')";
            echo '<script language="javascript">alert("Thêm thành công!"); window.location="QLLV.php";</script>';
            if(mysqli_query($conn, $sql)){
                echo "Tên lĩnh vực: ".$_POST['ten_linhvuc']."<br/>";
                // echo "ID loại hinh: ".$_POST['id_linhvuc']."<br/>";
            }
            else{
                echo '<script language="javascript">alert("Lỗi"); window.location="themLV.php";</script>';
            }
        }
    }
?>