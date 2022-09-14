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
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/838d940042.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header"> 
        <img class="logoPanel" src="./assets/img/cloudSimpsons.png" alt="" width="60" height="60">
        
        <div class="logout">
            <a href="close_session.php" class="btn btn-primary">Logout</a>
        </div>
        
        <form class="buscador" action="index.html" method="post"> 
        <input class="search" id="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 700; height:30px" type="text" name="" value="" placeholder="&#xf002;">
        </form>
    </div>
        
    </header>
    <aside>
        <ul>
            <li>
                <a class="btn btn-light" href="ficheros/creation.php" role="button">NEW+</a>
            </li>
            <li>
                <a href="./imagen.php">MyPhotos</a>
            </li>
            <li>
                <a href="ficheros/subirAudios.php">MyMusic</a>
            </li>
            <li>
                <a href="ficheros/videos.php">MyVideos</a>
            </li>
            <li>
                <a href="./ficheros/eliminarDirectorio.php/"><img src="assets/img/trash_can_29441.png"></a>
            </li>
        </ul>
    </aside>
    <aside class="right">
        <ul>
        <?php $thefolder = "./ficheros/root/images/";
        if ($handler = opendir($thefolder)) {
    echo "<ol>";
        while (false !== ($file = readdir($handler))) {
            echo "<li>$file</li>";
    }
    echo "</ol>";
    closedir($handler);
}
?>
        </ul>
    </aside>
    <div class="content">
        <div class="toShow">
        <input type="search">
    <form class="" action="imagen.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" >
        <input type="submit" value="Upload Image" name="submit">
    </form>
        </div>
    </div>
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
