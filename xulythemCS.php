<<<<<<< HEAD
<?php 
    header('Content-Type: text/html; charset=utf-8');
   $conn = mysqli_connect ("localhost","root","","quanlyhethong") or die ('Lỗi');
   mysqli_set_charset ($conn, "utf8");
   if(isset($_POST['themmoi'])){
       $TenCS = $_POST['TenCS'];
       $TenChu = $_POST['TenChu'];
       $Diachi = $_POST['Diachi'];
       $Phone = $_POST['Phone'];
       $Trinhdo = $_POST['trinhdo'];

       if (empty($TenCS)) {
           array_push($errors, "Không được để trống!"); 
        }
        if (empty($TenChu)) {
            array_push($errors, "Không được để trống!"); 
        }
        if (empty($Diachi)) {
            array_push($errors, "Không được để trống!"); 
        }
        if (empty($Phone)) {
            array_push($errors, "Không được để trống!"); 
        }
        if (empty($Trinhdo)) {
            array_push($errors, "Không được để trống!"); 
        }
        
        $sql = "SELECT * FROM coso WHERE ten_coso = '$TenCS' OR ten_chucoso = '$TenChu'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            echo '<script language="javascript">alert("Bị trùng tên"); window.location="themCS.php";</script>';
            die ();
        }
        else {
            $sql = "INSERT INTO coso (ten_coso , ten_chucoso , dia_chi , sdt , trinhdo_bangcap) VALUES ('$TenCS' , '$TenChu' , '$Diachi' , '$Phone' , '$Trinhdo')";
            echo '<script language="javascript">alert("Thêm User thành công!"); window.location="QLCS.php";</script>';
            if (mysqli_query($conn, $sql)){
                echo "Tên Cơ Sở: ".$_POST['ten_coso']."<br/>";
                echo "Tên Chủ Cơ Sở: ".$_POST['ten_chucoso']."<br/>";
                echo "Địa chỉ: ".$_POST['dia_chi']."<br/>";
                echo "Phone: ".$_POST['sdt']."<br/>";
                echo "Trình độ: ".$_POST['trinhdo_bangcap']."<br/>";
=======
<?php
    // header('Content-Type: text/html; charset=utf-8');
    $conn = mysqli_connect ("localhost","root","","quanlyhethong") or die ('Lỗi');
    mysqli_set_charset ($conn, "utf8");
    if(isset($_POST['themmoi'])){
        $TenCS = $_POST['TenCS'];
        $TenChu = $_POST['TenChu'];
        $loaihinh = $_POST['loaihinh'];
        // $linhvuc = $_POST['linhvuc'];
        // $tthd = $_POST['tinhtranghoatdong'];
        $tinh = $_POST['tinh'];
        $huyen = $_POST['huyen'];
        $xa = $_POST['xa'];
        $Diachi = $_POST['Diachi'];
        $Phone = $_POST['Phone'];
        $Trinhdo = $_POST['trinhdo'];
        $ghichu = $_POST['ghichu'];
        $ngaytao = $_POST['ngaytao'];
        $ngayupdate = $_POST['ngayupdate'];
        // $trangthai = $_POST['trangthai'];

    //    if (empty($TenCS)) {
    //        array_push($errors, "Không được để trống!");
    //     }
    //     if (empty($TenChu)) {
    //         array_push($errors, "Không được để trống!");
    //     }
    //     if (empty($Diachi)) {
    //         array_push($errors, "Không được để trống!");
    //     }
    //     if (empty($Phone)) {
    //         array_push($errors, "Không được để trống!");
    //     }
    //     if (empty($Trinhdo)) {
    //         array_push($errors, "Không được để trống!");
    //     }
        $sql = "SELECT * FROM coso";
        $result = mysqli_query($conn, $sql);
        // if (mysqli_num_rows($result) > 0){
        //     echo '<script language="javascript">alert("Bị trùng tên"); window.location="themCS.php";</script>';
        //     die ();
        // }
        // else {
            $sql = "INSERT INTO coso (ten_coso , ten_chucoso , id_loaihinh , id_tthd , id_tinh , id_huyen , id_xa , dia_chi , sdt , trinhdo_bangcap , ghi_chu , ngay_tao , ngay_update , Trangthai) VALUES ('$TenCS' , '$TenChu','$loaihinh' ,'1','$tinh' , '$huyen' , '$xa' , '$Diachi' , '$Phone' , '$Trinhdo' , '$ghichu' , '$ngaytao' , '$ngayupdate' , '1')";
            echo '<script language="javascript">alert("Thêm Cơ sở thành công!"); window.location="QLCS.php";</script>';
            if (mysqli_query($conn, $sql)){
                echo "Tên Cơ Sở: ".$_POST['ten_coso']."<br/>";
                echo "Tên Chủ Cơ Sở: ".$_POST['ten_chucoso']."<br/>";
                echo "Loại hình: ".$_POST['id_loaihinh']."<br/>";
                echo "tình trạng hoạt động: ".$_POST['id_tthd']."<br/>";
                echo "Tỉnh: ".$_POST['id_tinh']."<br/>";
                echo "Huyện: ".$_POST['id_huyen']."<br/>";
                echo "Xã: ".$_POST['id_xa']."<br/>";
                echo "Địa chỉ: ".$_POST['dia_chi']."<br/>";
                echo "Phone: ".$_POST['sdt']."<br/>";
                echo "Trình độ: ".$_POST['trinhdo_bangcap']."<br/>";
                echo "Ghi chú: ".$_POST['ghi_chu']."<br/>";
                echo "Ngày tạo: ".$_POST['ngay_tao']."<br/>";
                echo "Ngày cập nhật: ".$_POST['ngay_update']."<br/>";
                echo "trạng thái: ".$_POST['Trangthai']."<br/>";
<<<<<<< HEAD
                // echo "lĩnh vực: ".$_POST['id_linhvuc']."<br/>";
=======
>>>>>>> f227594134b7200e4598830a2f72e4b5d5ac88e8
>>>>>>> f99cf71961861d9eca21df819ff0dab6371e469a
            }
            else {
                echo '<script language="javascript">alert("Lỗi"); window.location="themCS.php";</script>';
            }
        }
<<<<<<< HEAD
   }
   
=======
    //}
>>>>>>> f227594134b7200e4598830a2f72e4b5d5ac88e8
?>