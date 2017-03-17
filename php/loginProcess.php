<?php
	session_start();
	include 'serverConnection.php';
	$email =$_POST['email'];
	$password = $_POST['password'];
	$connection=serverConnect();
	//$connection= mysqli_connect("localhost", "root", "abcd");
	mysqli_select_db($connection,"login");
	$result = mysqli_query($connection,"select * from users where email='$email' and password='$password'") or die("Failed to query database ".mysqli_error($connection));
	$row =mysqli_fetch_array($result);
	if($row['email']==$email && $row['password']==$password){
		$_SESSION['id']=$row['id'];
		$_SESSION['email']=$row['email'];
		header("location: upload.html");
	}
	else
		echo "Failed to login";
?>
