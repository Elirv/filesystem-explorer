<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="videos.php" method='post' enctype="multipart/form-data">
<input type="file" name="file"/><br><br>
<input type="submit" value="Upload"/>
</form>


</body>
</html>

<?php 
error_reporting(0);
$name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
$position= strpos($name, ".");
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);


if (isset($name)) {
    $path= 'archivos/';
    if (empty($name)){
        echo "Please choose a file";
    }else if (!empty($name)){
        if (($fileextension !== "mp3") && ($fileextension !== "ogg") && ($fileextension !== "webm")){
        echo "The file extension must be .mp3, .ogg, or .webm in order to be uploaded";
    }else if (($fileextension == "mp3") || ($fileextension == "ogg") || ($fileextension == "webm")){
        if (move_uploaded_file($tmp_name, $path.$name)) {
        echo 'Uploaded!';
        }
    }   
    }
}




?>

