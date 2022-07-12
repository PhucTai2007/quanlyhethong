<?php
$id_coso = $_GET['id_coso'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/taomoiuser.css" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="ajax.js" type="text/javascript"></script>

</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Thêm Lĩnh Vực</h2>
        </div>
        <form id="form" class="form" method="post" action="xulythemCSLV.php" enctype="multipart/form-data">
            <div class="form-control">
                <label for="id_coso">ID Cơ Sở </label>
                <input name="id_coso" value="<?php echo $_GET['id_coso']?>" required/>
            </div>
            <div class="" >
                <label for="linhvuc" class="hien" > Lĩnh Vực </label>
                <br>
                <!-- <select id="id_linhvuc" name="id_linhvuc" class="hien"> -->
                    <?php
                        include_once("connect.php");
                        $sql ="SELECT * FROM linhvuc ";
                        $query =  mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($query);
                        if($num>0){
                            while($row = mysqli_fetch_array($query)){
                    ?>
                    <input type="radio" id="id_linhvuc" name="id_linhvuc" onchange="showFee(this)"  value="<?php echo $row['id_linhvuc'] ?>"/> <?php echo $row['ten_linhvuc'] ?>
                    <?php
                        }
                    }
                    ?>
                </select><br>
            </div>
            <div class="hienthi" id="feeInfo" >
                <div class="form-control">
                    <label for="soGCN">Số GCN</label>
                    <input type="text" name="soGCN" required/>
                </div>
                <div class="form-control">
                    <label for="ngay_cap">Ngày Cấp</label>
                    <input type="date" name="ngay_cap">
                </div>
                <div class="form-control">
                    <label for="ngay_hethan">Ngày hết hạn</label>
                    <input type="date" name="ngay_hethan" >
                </div>
            </div>
        <input id="themmoi" name="themmoi" type="submit" value="Thêm">
        </form>
    </div>
</body>
</html>