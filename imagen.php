<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <input type="search">
    <form class="" action="datosImg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" >
        <input type="submit" value="Upload Image" name="submit">
    </form>
    
</body>
</html>


<?php

session_start();
//Receive image data
$archivo = $_FILES['fileToUpload'] ['tmp_name'];
$nombre = $_FILES['fileToUpload'] ['name'];
$tipo = $_FILES['fileToUpload'] ['type'];
$tamano = $_FILES['fileToUpload'] ['size'];

$destino = "ficheros/" . $nombre;

$subido = move_uploaded_file($archivo, $destino);

if($subido){
    echo "subido exitosamente <br/>";
    echo "<img src='ficheros/" . $nombre ."'>";
}else{
    echo "no subido";
} -->


?> -->


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

$name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
$position= strpos($name, ".");
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);


if (isset($name)) {
    $path= 'root/videos/s';
    if (empty($name)){
        echo "Please choose a file";
    }else if (!empty($name)){
        if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm")){
        echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
    }else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")){
        if (move_uploaded_file($tmp_name, $path.$name)) {
        echo 'Uploaded!';
        }
    }   
    }
}


?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <input type="search">
    <form class="" action="datosImg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    
</body>
</html> -->