<?php
	$value=$_POST["username"];
	setcookie("username", "$value");
	session_start();
	//Connect
	$conn = mysqli_connect("localhost","root","","quanlyhethong");
	if (isset($_POST['username'])) {
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$sql= "SELECT username,password FROM user WHERE username='".$username."' AND password='".$password."'limit 1";
        $result = $conn->query($sql);

		if ($result->num_rows == 1) {
			  header("location:index.html");
		}else{
			echo "Bạn chưa đăng nhập!";
		}
	}
	$conn->close();
    // $conn = mysqli_connect("localhost", "root", "","quanlyhethong");
    // if(!$conn){
    //     die("khong thanh cong". mysqli_connect_error());
    // }
    // echo"thang cong";
?>