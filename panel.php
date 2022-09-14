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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

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
          <input class="search" id="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 700; height:30px; margin-left: 30px" type="text" name="" value="" placeholder=" &#xf002;                 f i n d ">  
      </div>
   
        
    </header>

    <aside>
        
        
        <ul>
            <li>
                <a class="btn btn-light" href="ficheros/creation.php" role="button">NEW +</a>
            </li>
            <li>
                <a href="./ficheros/misArchivos.php"><img src="./assets/img/icons/imageUser.ico" alt="" style="height:30px">My Directories</a>
            </li>
            </li>
            <li>
                <a href="imagen.php"><img src="./assets/img/icons/imageIco.ico" alt="" style="height:30px">My Photos</a>
            </li>
            <li>
                <a href="./ficheros/subirAudios.php"><img src="./assets/img/icons/musicIco.ico" alt="" style="height:30px">My Music</a>
            </li>
            <li>
                <a href="ficheros/videos.php"><img src="./assets/img/icons/videoIco.ico" alt="" style="height:30px">My Videos</a>
            </li>
            <li>
                <a href="./ficheros/eliminarDirectorio.php/"><img src="assets/img/trash_can_29441.png"></a>
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
        <p>This is yours</p>


        <?php
include(listarIntento.php);
$lista = null;
$directorio = opendir("./ficheros/root/userFolders/");
while($elemento = readdir($directorio)){
    if ($elemento != '.' && $elemento != '..'){
    if (is_dir("archivos/" . $elemento)){
        $lista = $lista . "<li><a href='archivos/$elemento' target='_blank'</a>$elemento/</li>";
        // echo"hola";
    }else{
        $lista = $lista . "<li><a href='archivos/$elemento' target='_blank'</a>$elemento</li>";
        // echo"adios";
    }
    }
}

?>








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