<?php
$id_coso = '';
$conn = mysqli_connect ("localhost","root","","quanlyhethong") or die ('Lỗi');
mysqli_set_charset ($conn, "utf8");
if(isset($_POST['themmoi'])){
    $id_coso = $_POST['id_coso'];
    $id_linhvuc = $_POST['id_linhvuc'];
    $soGCN = $_POST['soGCN'];
    $ngay_cap = $_POST['ngay_cap'];
    $ngay_hethan = $_POST['ngay_hethan'];

    $sql = "SELECT * FROM coso_linhvuc ";
    $result = mysqli_query($conn, $sql);
    if($id_linhvuc == 1){
        $sql = "INSERT INTO coso_linhvuc (id_coso , id_linhvuc ,soGCN, ngay_cap , ngay_hethan) VALUES ('$id_coso' , '$id_linhvuc','' , '' , '')";
        echo '<script language="javascript">alert("Thêm thành công!"); window.location="giaychungnhanoff.php";</script>';
        if(mysqli_query($conn,$sql)){
            echo "id_linhvuc: ".$_POST['id_linhvuc']."<br/>";
            echo "Số GCN: ".$_POST['soGCN']."<br/>";
            echo "Ngày Cấp: ".$_POST['ngay_cap']."<br/>";
            echo "Ngày hết hạn: ".$_POST['ngay_hethan']."<br/>";
        }
        else {
            echo '<script language="javascript">alert("Lỗi"); window.location="themCSLV.php";</script>';
        }
    }else{
        $sql = "INSERT INTO coso_linhvuc (id_coso , id_linhvuc ,soGCN, ngay_cap , ngay_hethan) VALUES ('$id_coso' , '$id_linhvuc','$soGCN' , '$ngay_cap' , '$ngay_hethan')";
        echo '<script language="javascript">alert("Thêm thành công!"); window.location="QLCS.php";</script>';
        if(mysqli_query($conn,$sql)){

            echo "id_linhvuc: ".$_POST['id_linhvuc']."<br/>";
            echo "Số GCN: ".$_POST['soGCN']."<br/>";
            echo "Ngày Cấp: ".$_POST['ngay_cap']."<br/>";
            echo "Ngày hết hạn: ".$_POST['ngay_hethan']."<br/>";
        }
        else {
            echo '<script language="javascript">alert("Lỗi"); window.location="themCSLV.php";</script>';
        }
    }
}
?>