<?php
	if(isset($_POST['submit'])){
	session_start();
	$email =$_POST['email'];
	$password = $_POST['password'];
	$connection= mysqli_connect("localhost", "root", "");
	mysqli_select_db($connection,"login");
	$result = mysqli_query($connection,"select * from users where email='$email'") or die("Failed to query database ".mysqli_error($connection));
	$row =mysqli_fetch_array($result);
	if($row['email']==$email){
		echo "Already have an account with this mail";
	}
	else{
	$result = mysqli_query($connection,"insert into users(email,password) values('$email','$password')") or die("Failed to query database ".mysqli_error($connection));
		$_SESSION['message']="You are now logged in";
		$_SESSION['email'] = $email;
		header("location: home.php");
	}
}
?>
