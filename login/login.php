<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="center">
	<form action="process.php" method="POST">
		<p>
			<label>Email:</label>
			<input type="email" name="email" placeholder="Enter email.."/>
		</p>
		<p>
			<label>Password:</label>
			<input type="password" name="password" placeholder="Enter password.."/>
		</p>
		<p>
			<input type="submit" name="submit" value="Login"/>
		</p>
	</form>
</div>
</body>
</html>
