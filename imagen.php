
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
    <form class="" action="imagen.php" method="post" enctype="multipart/form-data">
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

$destino = "./ficheros/root/images/" . $nombre;

$subido = move_uploaded_file($archivo, $destino);

if($subido){
    echo "subido exitosamente <br/>";
    echo "<img src='ficheros/root/images/" . $nombre ."'>";
}else{
    echo "no subido";
}


?> 
