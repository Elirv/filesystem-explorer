<?php
session_start();
//Receive image data
$nombreImg = $_FILES["fileToUpload"]["name"];
$tipoImg = $_FILES["fileToUpload"]["type"];
$imgSize = $_FILES["fileToUpload"]["size"];

echo $_FILES["fileToUpload"]["size"];


$carpertaDestino = $_SERVER['DOCUMENT_ROOT']."/server_variables";
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$carpertaDestino.$nombreImg);

echo "hola"
?>

