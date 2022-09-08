<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="" action="" method="post">SELECT" 
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
if(isset($_SESSION["user"])){
    echo "Correct";
}else{
    header("location: inicio.php");
}
?>

<br>
<a href="close_session.php">Sign off</a>
</body>
</html>