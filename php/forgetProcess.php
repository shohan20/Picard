<?php
	include 'serverConnection.php';
	$email =$_POST['email'];
	$connection=serverConnect();
	mysqli_select_db($connection,"login");
	$result = mysqli_query($connection,"select * from users where email='$email'") or die("Failed to query database ".mysqli_error($connection));
	$row =mysqli_fetch_array($result);
	if($row['email']==$email){
		$to = $email;
		$subject = "Picard account password reset";
		$txt = "Picard account:\n\t Email: ".$email."\n\t Password: ".$row['password'];
		$headers = "From: shohan.jess@gmail.com" . "\r\n";
		mail($to,$subject,$txt,$headers);
	}
	else{
		echo "failed";
	}
?>