<?php
	$email =$_POST['email'];
	$password = $_POST['password'];
	$connection= mysqli_connect("localhost", "root", "abcd");
	mysqli_select_db($connection,"login");
	$result = mysqli_query($connection,"select * from users where email='$email' and password='$password'") or die("Failed to query database ".mysqli_error($connection));
	$row =mysqli_fetch_array($result);
	if($row['email']==$email && $row['password']==$password){
		echo "Welcome";
	}
	else
		echo "Failed to login";
?>