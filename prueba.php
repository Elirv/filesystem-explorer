
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="close_session.php">Sign off</a>
    <input type="search">
    <!-- <p>Welcome <?php echo "$myUser"; ?> </p> -->
    <p>Welcome</p>

    <form class="" action="datosImg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    
</body>
</html>
