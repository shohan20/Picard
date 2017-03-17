<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <title>Image upload</title>
        <link rel="stylesheet" type="text/css" href="../css/upload.css">
    </head>
    <body>
        <div class="center">
            <form action="uploadProcess.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="files[]" multiple accept='image/*'> 
                <input type="submit" name="upload" value="Upload">
            </form>
        </div>
    </body>
</html>
