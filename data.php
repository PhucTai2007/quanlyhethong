<?php
    require("connect.php");
    $id = $_POST['id'];
    $sql = "SELECT * FROM xa where id_huyen = '$id' ";
    $query = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($query);
    if($num > 0){
        while($row = mysqli_fetch_array($query)){
    ?>
<option value="<?php echo $row['id_xa'] ?>"><?php echo $row['ten_xa'] ?> </option>
    <?php
        }
    }
?>