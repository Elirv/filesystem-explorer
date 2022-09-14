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
        <img class="logoPanel" src=".././assets/img/cloudSimpsons.png" alt="" width="60" height="60">
        
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
                <a href="imagen.php">MyPhotos</a>
            </li>
            <li>
                <a href="ficheros/subirAudios.php">MyMusic</a>
            </li>
            <li>
                <a href="ficheros/videos.php">MyVideos</a>
            </li>
            <li>
                <a href="./ficheros/eliminarDirectorio.php/"><img src="../assets/img/trash_can_29441.png"></a>
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
    <h1>Crear y escribir ficheroscon php</h1>
        <div class="toShow">
        <strong> <? echo $msg ?> </strong>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <table>
        <tr>
            <td>Nombre del archivo</td>
            <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
            <td>Extensión del archivo:</td>
            <td>
                <select name="extension">
                    <option value=".txt">.txt</option>
                    <option value=".html">.html</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Contenido del archivo:</td>
            <td><textarea name="contenido" cols="30" rows="10"></textarea></td>
        </tr>
    </table>
    <input type="hidden" name="escribir">
    <input type="submit" value="Crear archivo">
    </form>

        </div>
 




        <!-- <?php $thefolder = "./ficheros/root/userFolders/";
if ($handler = opendir($thefolder)) {
	echo "<ol>";
    while (false !== ($file = readdir($handler))) {
            echo "<li>$file</li>";
    }
    echo "</ol>";
    closedir($handler);
}
?> -->
      
    </div>
    




</body>
</html>

<?php

$msg = null;

if(isset($_POST["escribir"])){
    $nombre = htmlspecialchars($_POST["nombre"]);
    $extension = htmlspecialchars($_POST["extension"]);
    $contenido = $_POST["contenido"];

    $ruta = "archivos/" . $nombre . $extension;
    $manejador = fopen($ruta, 'w');
    if(fwrite($manejador, $contenido)){
        $msg = "Enhorabuena archivo creado con éxito";
        $msg = "Puedes verlo en ...<a href='$ruta' target='_blank'>$ruta</a>";
        
    }else{
        $msg = "Ha ocurrido un error al crear el fichero";
    }

    fclose($manejador);
}

?>