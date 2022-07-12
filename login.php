<?php
session_start();
	//Connect
	$conn = new mysqli ("localhost","root","","quanlyhethong") or die("Thất bại");

	if (isset($_POST['username'])) {
		$username=$_POST['username'];
		$password=MD5($_POST['password']);

		$sql= "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'";
        $result = $conn->query($sql);

		if ($result->num_rows > 0 ) {
			while($row=mysqli_fetch_assoc($result)){
				$user=$row['mavaitro'];
				$_SESSION['username']=$_POST['username'];
				$_SESSION['password']=$_POST['password'];
				if($user=="0"){
					header("location:admin.php");
				}
				if($user=="1"){
					header("location:index.php");
				}
			}
		}
		else{
			echo '<script language="javascript">alert("Sai thông tin đăng nhập"); window.location="login.html";</script>';;
		}
		$conn ->close();
	}
	//$conn->close();
    // $conn = mysqli_connect("localhost", "root", "","quanlyhethong");
    // if(!$conn){
    //     die("khong thanh cong". mysqli_connect_error());
    // }
    // echo"thang cong";
?>