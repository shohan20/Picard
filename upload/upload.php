<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Image upload</title>
</head>
<body>
<form action="process.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="files[]" multiple accept='image/*'> 
	<input type="submit" name="upload" value="Upload">
 </form>
</body>
</html>