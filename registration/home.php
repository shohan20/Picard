<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<p>Account has created and Loggedin as <?php echo $_SESSION['email']; ?> </p>
</body>
</html>