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
                <a href="ficheros/crear-directorio.php">New</a>
            </li>
            
            <li>
                <a href="ficheros/eliminarDirectorio.php">Eliminar directorio</a>
            </li>
            <li>
                <a href="ficheros/crear-archivos.php">Crear fichero</a>
            </li>
            <li>
                <!-- <img class="imagen-icono" src="assets/img/xlarge_icons_image_photo_3885.png"> --><a href="imagen.php">MyPhotos</a>
            </li>
            <li>
                <!--<img src="assets/img/note_audio_music_3097.png">--><a href="ficheros/subirAudios.php">MyMusic</a>
            </li>
            <li>
                <!--<img src="assets/img/audio_film_media_music_social_video_youtube_icon_123741.png">--><a href="ficheros/videos.php">MyVideos</a>
            </li>
            <li>
                <img src="assets/img/trash_can_29441.png"><a href="ficheros/delete.php">Trash</a>
            </li>
        </ul>
    </aside>
    
    <aside class="right">
        <ul>
            <li>
                <a href="">x</a>
            </li>
            <li>
                <a href="">y</a>
            </li>
            <li>
                <a href="">z</a>
            </li>
            <li>
                <a href="">d</a>
            </li>
        </ul>
    </aside>

    <div class="content">
        <h1>
            Admin Panel
        </h1>
        <!-- <p><?php include_once "prueba.php" ?></p> 
    <?   $directorio = "ficheros/archivos/";
            $ficheros1  = scandir($directorio);
            $ficheros2  = scandir($directorio, 1);
            print_r($ficheros1);
            print_r($ficheros2);
            echo "hola"?> -->
    </div>
    


<!-- <?php
$goPrueba = "prueba.php";
if(isset($_SESSION["user"])){
    include_once($goPrueba);
  

}else{
    header("location: inicio.php");
}

?> -->

<br>

</body>
</html>