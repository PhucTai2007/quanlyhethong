<?php
$username=$_POST["username"];
session_start();
    //Connect Database
    $conn = mysqli_connect("localhost","root","","quanlyhethong");
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $sql="SELECT * FROM user WHERE username='".$username."'limit 1";

        $result = $conn->query($sql);
        if($result->num_rows > 1){
            while ($row = $result->fetch_array()) {
                echo"<a location.href=login.html> dang xuat </a>";
            };
        }
    }
?>