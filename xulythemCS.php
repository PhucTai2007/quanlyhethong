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
            }
            else {
                echo '<script language="javascript">alert("Lỗi"); window.location="themCS.php";</script>';
            }
        }
   }
   
?>