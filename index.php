<?php
session_start();
$conn = mysqli_connect ("localhost","root","","quanlyhethong");
    $username=$_SESSION['username'];
    $sql= "SELECT * FROM user WHERE username='".$username."'";

    $result = $conn->query($sql);
	if($result->num_rows > 0){
		while ($row = $result->fetch_array()) {
            echo"xin chao: ". $username, "<br>";
            echo"<a href='logout.php'>dang xuat</a>";
        }
    }
?>