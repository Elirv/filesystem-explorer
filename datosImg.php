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
    echo "no suido";
}


?>

